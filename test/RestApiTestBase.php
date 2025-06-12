<?php

namespace Microsoft\MsAds\Rest\Test;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use GuzzleHttp\RequestOptions;
use Microsoft\MsAds\Rest\Api\AdInsightServiceApi;
use Microsoft\MsAds\Rest\Api\BulkServiceApi;
use Microsoft\MsAds\Rest\Api\CampaignManagementServiceApi;
use Microsoft\MsAds\Rest\Api\CustomerBillingServiceApi;
use Microsoft\MsAds\Rest\Api\CustomerManagementServiceApi;
use Microsoft\MsAds\Rest\Api\ReportingServiceApi;
use Microsoft\MsAds\Rest\ApiException;
use Microsoft\MsAds\Rest\Auth\ApiEnvironment;
use Microsoft\MsAds\Rest\Auth\AuthorizationData;
use Microsoft\MsAds\Rest\Auth\OAuthDesktopMobileAuthCodeGrant;
use Microsoft\MsAds\Rest\Auth\OAuthScope;
use Microsoft\MsAds\Rest\Auth\OAuthTokenRequestException;
use Microsoft\MsAds\Rest\Configuration;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\AddAdGroupsRequest;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\AddAdsRequest;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\AddCampaignsRequest;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\DeleteCampaignsRequest;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\DeleteLabelAssociationsRequest;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\GetLabelAssociationsByEntityIdsRequest;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\GetLabelAssociationsByLabelIdsRequest;
use Microsoft\MsAds\Rest\Model\CampaignManagementService\Image;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

use function fopen;

class RestApiTestBase extends TestCase
{
    protected static CampaignManagementServiceApi $campaignManagementServiceApi;
    protected static BulkServiceApi $bulkServiceApi;
    protected static ReportingServiceApi $reportingServiceApi;
    protected static CustomerBillingServiceApi $customerBillingServiceApi;
    protected static CustomerManagementServiceApi $customerManagementServiceApi;
    protected static AdInsightServiceApi $adInsightServiceApi;
    protected static Configuration $configuration;
    protected static Client $client;
    protected const DEVELOPER_TOKEN = 'BBD37VB98'; // For sandbox use 'BBD37VB98'
    protected const API_ENVIRONMENT = ApiEnvironment::SANDBOX;
    protected const OAUTH_SCOPE = OAuthScope::MSADS_MANAGE;
    protected const OAUTH_REFRESH_TOKEN_PATH = 'refresh.txt';
    protected const CLIENT_ID = '4c0b021c-00c3-4508-838f-d3127e8167ff';  // For sandbox use '4c0b021c-00c3-4508-838f-d3127e8167ff'
    protected const CODE_URL = ''; // Replace with your code url after auth granted, i.e. https://login.microsoftonline.com/common/oauth2/nativeclient?code=CODE
    protected const CUSTOMER_ID = "CUSTOMER_ID"; // Replace with your customer id
    protected const CUSTOMER_ACCOUNT_ID = "ACCOUNT_ID"; // Replace with your customer account id
    protected const TIMEZONE = "UTC";
    protected const ALPHA_NUMERIC = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    protected const ALPHA = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
        $stack = HandlerStack::create();
        $logger = new Logger('api-consumer');
        $logger->pushHandler(new RotatingFileHandler('./logger.txt'));
        $stack->push(
            Middleware::log(
                $logger,
                new MessageFormatter("[RESPONSE]: {res_body}")
            )
        );
        $stack->push(
            Middleware::log(
                $logger,
                new MessageFormatter("--------------------------------------------")
            )
        );
        $stack->push(
            Middleware::log(
                $logger,
                new MessageFormatter("[REQUEST]: {request}")
            )
        );
        $stack->push(
            Middleware::log(
                $logger,
                new MessageFormatter("--------------------------------------------")
            )
        );
        self::$client = new Client(
            [
                'handler' => $stack,
                'verify' => false
            ]
        );
        self::$configuration = Configuration::getDefaultConfiguration();
        self::AuthenticateWithOAuth();
        self::$campaignManagementServiceApi = new CampaignManagementServiceApi(self::$client, self::$configuration,
            null, self::API_ENVIRONMENT);
        self::$bulkServiceApi = new BulkServiceApi(self::$client, self::$configuration, null, self::API_ENVIRONMENT);
        self::$reportingServiceApi = new ReportingServiceApi(self::$client, self::$configuration, null,
            self::API_ENVIRONMENT);
        self::$customerBillingServiceApi = new CustomerBillingServiceApi(self::$client, self::$configuration, null, self::API_ENVIRONMENT);
        self::$customerManagementServiceApi = new CustomerManagementServiceApi(self::$client, self::$configuration, null, self::API_ENVIRONMENT);
        self::$adInsightServiceApi = new AdInsightServiceApi(self::$client, self::$configuration, null, self::API_ENVIRONMENT);

        date_default_timezone_set(self::TIMEZONE);
    }

    public static function AuthenticateWithOAuth(): void
    {
        $authentication = (new OAuthDesktopMobileAuthCodeGrant())
            ->withEnvironment(self::API_ENVIRONMENT)
            ->withClientId(self::CLIENT_ID)
            ->withOAuthScope(self::OAUTH_SCOPE);

        self::$configuration->setAuthorizationData((new AuthorizationData())
            ->withAuthentication($authentication)
            ->withDeveloperToken(self::DEVELOPER_TOKEN)
            ->withCustomerId(self::CUSTOMER_ID)
            ->withAccountId(self::CUSTOMER_ACCOUNT_ID));

        try {
            $refreshToken = self::ReadOAuthRefreshToken();

            if ($refreshToken != null) {
                self::$configuration->getAuthorizationData()->Authentication->RequestOAuthTokensByRefreshToken($refreshToken);
                self::WriteOAuthRefreshToken(
                    self::$configuration->getAuthorizationData()->Authentication->OAuthTokens->RefreshToken
                );
            } else {
                if (self::CODE_URL !== '') {
                    self::$configuration->getAuthorizationData()->Authentication->RequestOAuthTokensByResponseUri(trim(self::CODE_URL));
                    self::WriteOAuthRefreshToken(self::$configuration->getAuthorizationData()->Authentication->OAuthTokens->RefreshToken);
                } else {
                    self::RequestUserConsent();
                }
            }
        } catch (OAuthTokenRequestException $e) {
            printf("Error: %s\n", $e->Error);
            printf("Description: %s\n", $e->Description);

            self::RequestUserConsent();
        } catch (Exception $e) {
            printf("Error: %s\n", $e->getMessage());
            printf("Code: %s\n", $e->getCode());
            if ($e->getCode() == 400) {
                self::RequestUserConsent();
            }
        }
    }

    public static function RequestUserConsent(): void
    {
        self::fail("You need to provide consent for the application to access your Microsoft Advertising accounts. ".
            "Copy and paste this authorization endpoint into a web browser and sign in with a Microsoft account ".
            "with access to a Microsoft Advertising account: \n\n".self::$configuration->getAuthorizationData()->Authentication->GetAuthorizationEndpoint().
            "\n\nAfter you have granted consent in the web browser for the application to access your Microsoft Advertising accounts, ".
            "please update the CODE_URL constant above.\n\n");
    }

    public static function ReadOAuthRefreshToken(): ?string
    {
        $refreshToken = null;

        if (file_exists(self::OAUTH_REFRESH_TOKEN_PATH) && filesize(self::OAUTH_REFRESH_TOKEN_PATH) > 0) {
            $refreshTokenFile = @fopen(self::OAUTH_REFRESH_TOKEN_PATH, "r");
            $refreshToken = fread($refreshTokenFile, filesize(self::OAUTH_REFRESH_TOKEN_PATH));
            fclose($refreshTokenFile);
        }

        return $refreshToken;
    }

    public static function WriteOAuthRefreshToken($refreshToken): void
    {
        $refreshTokenFile = @fopen(self::OAUTH_REFRESH_TOKEN_PATH, "wb");
        if (file_exists(self::OAUTH_REFRESH_TOKEN_PATH)) {
            fwrite($refreshTokenFile, $refreshToken);
            fclose($refreshTokenFile);
        }
    }

    public static function generateRandomAlphaNumeric($length = 20): string
    {
        $str = '';
        while (strlen($str) < $length) {
            $generateLength = $length - strlen($str);
            $str .= substr(str_shuffle(self::ALPHA_NUMERIC), 0, $generateLength);
        }
        return $str;
    }

    public static function generateRandomAlpha($length = 20): string
    {
        $str = '';
        while (strlen($str) < $length) {
            $generateLength = $length - strlen($str);
            $str .= substr(str_shuffle(self::ALPHA), 0, $generateLength);
        }
        return $str;
    }

    public static function generateRandomNumeric($digits = 5): string
    {
        return rand(pow(10, $digits - 1), pow(10, $digits) - 1);
    }

    public static function generateRandomDouble($digits = 5, $decimals = 2): string
    {
        return self::generateRandomNumeric($digits).'.'.self::generateRandomNumeric($decimals);
    }

    public static function GetImageMedia(
        $mediaType,
        $imageFileName
    ): Image {
        $image = new Image();
        $image->setData(self::GetBase64ImageData($imageFileName));
        $image->setMediaType($mediaType);
        $image->setType("Image");

        return $image;
    }

    public static function GetBase64ImageData($imageFileName): string
    {
        $imageData = file_get_contents($imageFileName);
        return base64_encode($imageData);
    }

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function DownloadFile($url, $filePath): void
    {
        printf("Downloading the file locally: %s\r\n", $filePath);

        $client = new Client();
        $response = $client->request('GET', $url,
            ['verify' => false, RequestOptions::SINK => $filePath]);
        $httpCode = $response->getStatusCode();

        if ($httpCode == 200) {
            printf("Downloaded the file to %s.\r\n", $filePath);
        } else {
            printf("The file was not successfully downloaded. HTTP Code %s\r\n", $httpCode);
            unlink($filePath);
        }

        self::assertEquals(200, $httpCode);
    }

    /**
     * @throws Exception
     * @throws GuzzleException
     */
    public static function UploadFile($url, $filePath): void
    {
        printf("Uploading the file: %s\r\n", $filePath);

        $client = new Client(['verify' => false]);
        $authorizationHeaders = [
            "DeveloperToken" => self::DEVELOPER_TOKEN,
            "CustomerId" => self::CUSTOMER_ID,
            "CustomerAccountId" => self::CUSTOMER_ACCOUNT_ID,
        ];
        $response = $client->post($url, [
            'headers' => $authorizationHeaders,
            'multipart' => [
                [
                    'name' => 'payload',
                    'contents' => fopen($filePath, 'r'),
                    'filename' => 'payload.zip',
                    'headers' => ['Content-Type' => 'application/zip']
                ]
            ]
        ]);
        $httpCode = $response->getStatusCode();

        if ($httpCode == 200) {
            printf("Uploaded the file to %s.\r\n", $url);
        } else {
            printf("The file was not successfully uploaded. HTTP Code %s\r\n", $httpCode);
        }

        self::assertEquals(200, $httpCode);
    }

    /**
     * @throws ApiException
     */
    public static function addCampaignsRequest($campaigns): ?array
    {
        print("-----\r\nAdding Campaigns:\r\n");

        $request = new AddCampaignsRequest([
            'AccountId' => self::CUSTOMER_ACCOUNT_ID,
            'Campaigns' => $campaigns
        ]);

        $response = self::$campaignManagementServiceApi->addCampaigns($request);
        $campaignIds = $response->getCampaignIds();
        print("CampaignIds:\r\n");
        print_r($campaignIds);
        print("PartialErrors:\r\n");
        print_r($response->getPartialErrors());
        self::assertEmpty($response->getPartialErrors());
        self::assertNotEmpty($campaignIds);

        return $campaignIds;
    }

    /**
     * @throws ApiException
     */
    public static function deleteCampaignsRequest($campaignIds)
    {
        print("-----\r\nDeleting Campaigns:\r\n");

        $request = new DeleteCampaignsRequest([
            'AccountId' => self::CUSTOMER_ACCOUNT_ID,
            'CampaignIds' => $campaignIds
        ]);

        $response = self::$campaignManagementServiceApi->deleteCampaigns($request);
        print("PartialErrors:\r\n");
        print_r($response->getPartialErrors());
        self::assertEmpty($response->getPartialErrors());
        print("Deleted Campaigns: ".implode(', ', $campaignIds)."\r\n");
    }

    /**
     * @throws ApiException
     */
    public static function addAdGroupsRequest($campaignId, $adGroups): ?array
    {
        print("-----\r\nAdding Ad Group:\r\n");
        $request = new AddAdGroupsRequest([
            'CampaignId' => $campaignId,
            'AdGroups' => $adGroups
        ]);

        $response = self::$campaignManagementServiceApi->addAdGroups($request);
        $adGroupIds = $response->getAdGroupIds();
        print("AdGroupIds:\r\n");
        print_r($adGroupIds);
        print("PartialErrors:\r\n");
        print_r($response->getPartialErrors());
        self::assertEmpty($response->getPartialErrors());
        self::assertNotEmpty($adGroupIds);

        return $adGroupIds;
    }

    /**
     * @throws ApiException
     */
    public static function addAdsRequest($adGroupId, $ads): ?array
    {
        print("-----\r\nAdding Ads:\r\n");
        $request = new AddAdsRequest([
            'AdGroupId' => $adGroupId,
            'Ads' => $ads
        ]);

        $response = self::$campaignManagementServiceApi->addAds($request);
        $adIds = $response->getAdIds();
        print("AdIds:\r\n");
        print_r($adIds);
        print("PartialErrors:\r\n");
        print_r($response->getPartialErrors());
        self::assertEmpty($response->getPartialErrors());
        self::assertNotEmpty($adIds);

        return $adIds;
    }

    /**
     * @throws ApiException
     */
    public static function getLabelAssociationsByLabelIdsRequest($entityType, $labelIds, $labelsPaging): ?array
    {
        print("-----\r\nGetting Label Associations by Label Ids:\r\n");
        $request = new GetLabelAssociationsByLabelIdsRequest([
            'LabelIds' => $labelIds,
            'PageInfo' => $labelsPaging,
            'EntityType' => $entityType
        ]);

        $response = self::$campaignManagementServiceApi->getLabelAssociationsByLabelIds($request);
        $associations = $response->getLabelAssociations();
        print("Associations:\r\n");
        print_r($associations);
        print("PartialErrors:\r\n");
        print_r($response->getPartialErrors());
        self::assertEmpty($response->getPartialErrors());
        self::assertNotEmpty($associations);

        return $associations;
    }

    /**
     * @throws ApiException
     */
    public static function getLabelAssociationsByEntityIdsRequest($entityType, $entityIds): ?array
    {
        print("-----\r\nGetting Label Associations by Entity Ids:\r\n");
        $request = new GetLabelAssociationsByEntityIdsRequest([
            'EntityIds' => $entityIds,
            'EntityType' => $entityType
        ]);

        $response = self::$campaignManagementServiceApi->getLabelAssociationsByEntityIds($request);
        $associations = $response->getLabelAssociations();
        print("Associations:\r\n");
        print_r($associations);
        print("PartialErrors:\r\n");
        print_r($response->getPartialErrors());
        self::assertEmpty($response->getPartialErrors());
        self::assertNotEmpty($associations);

        return $associations;
    }

    /**
     * @throws ApiException
     */
    public static function deleteLabelAssociationsRequest($entityType, $associations): void
    {
        print("-----\r\nDeleting Label Associations:\r\n");
        $request = new DeleteLabelAssociationsRequest([
            'LabelAssociations' => $associations,
            'EntityType' => $entityType
        ]);

        $response = self::$campaignManagementServiceApi->deleteLabelAssociations($request);
        print("PartialErrors:\r\n");
        print_r($response->getPartialErrors());
        self::assertEmpty($response->getPartialErrors());
    }

}
