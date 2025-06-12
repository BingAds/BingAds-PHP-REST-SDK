<?php
/**
*
* PHP version 7.4
*
* @category Class
* @package  Microsoft\MsAds\Rest\Auth
* @author   Microsoft Advertising
*/

namespace Microsoft\MsAds\Rest\Auth;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Provides method for getting OAuth tokens from the authorization server.
 */
class UriOAuthService extends IOAuthService
{
    const ENDPOINT_URLS = array(
        OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2_MS_SCOPE => array(
            'RedirectUrl' => 'https://login.microsoftonline.com/common/oauth2/nativeclient',
            'OAuthTokenUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',
            'AuthorizationEndpointUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=https%3A%2F%2Fads.microsoft.com%2Fmsads.manage%20offline_access',
            'Scope' => 'https://ads.microsoft.com/msads.manage offline_access'
        ),
        OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2 => array(
            'RedirectUrl' => 'https://login.microsoftonline.com/common/oauth2/nativeclient',
            'OAuthTokenUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',
            'AuthorizationEndpointUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=https%3A%2F%2Fads.microsoft.com%2Fads.manage%20offline_access',
            'Scope' => 'https://ads.microsoft.com/ads.manage offline_access'
        ),
        OAuthEndpointType::PRODUCTION_LIVE_CONNECT => array(
            'RedirectUrl' => 'https://login.live.com/oauth20_desktop.srf',
            'OAuthTokenUrl' => 'https://login.live.com/oauth20_token.srf',
            'AuthorizationEndpointUrl' => 'https://login.live.com/oauth20_authorize.srf?scope=bingads.manage',
            'Scope' => 'bingads.manage'
        ),
        OAuthEndpointType::SANDBOX_PPE => array(
            'RedirectUrl' => 'https://login.windows-ppe.net/common/oauth2/nativeclient',
            'OAuthTokenUrl' => 'https://login.windows-ppe.net/consumers/oauth2/v2.0/token',
            'AuthorizationEndpointUrl' => 'https://login.windows-ppe.net/consumers/oauth2/v2.0/authorize?scope=https://api.ads.microsoft.com/msads.manage%20offline_access&prompt=login',
            'Scope' => 'https://api.ads.microsoft.com/msads.manage offline_access'
        ),
        OAuthEndpointType::SANDBOX_MSA_PROD => array(
            'RedirectUrl' => 'https://login.microsoftonline.com/common/oauth2/nativeclient',
            'OAuthTokenUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',
            'AuthorizationEndpointUrl' => 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=https%3A%2F%2Fsi.ads.microsoft.com%2Fmsads.manage%20offline_access',
            'Scope' => 'https://si.ads.microsoft.com/msads.manage offline_access'
        )
    );

    private Client $httpClient;

    public function __construct(?Client $httpClient = null)
    {
        if ($httpClient === null) {
            $this->httpClient = new Client([
                'verify' => false, // For SSL verification, adjust as needed
            ]);
        } else {
            $this->httpClient = $httpClient;
        }
    }

    /**
     * Calls the authorization server with $oauthRequestParameters,
     * deserializes the response, and returns OAuthTokens.
     *
     * @param  OAuthRequestParameters  $oauthRequestParameters
     * @param  string  $environment
     * @param  string  $oauthScope
     * @param  string  $tenant
     * @param  ?array  $additionalParams
     * @return OAuthTokens|void
     * @throws OAuthTokenRequestException
     * @throws Exception
     */
    public function GetAccessTokens(
        OAuthRequestParameters $oauthRequestParameters,
        string $environment,
        string $oauthScope,
        string $tenant,
        ?array $additionalParams = null
    ) {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $oauthScope);

        $accessTokenExchangeParams = array(
            'client_id' => $oauthRequestParameters->ClientId,
            'grant_type' => $oauthRequestParameters->GrantType,
            $oauthRequestParameters->GrantParamName => $oauthRequestParameters->GrantValue,
            'scope' => UriOAuthService::ENDPOINT_URLS[$endpointType]['Scope']
        );

        if ($oauthRequestParameters->RedirectUri != null) {
            $accessTokenExchangeParams["redirect_uri"] = $oauthRequestParameters->RedirectUri;
        }

        if ($oauthRequestParameters->ClientSecret != null) {
            $accessTokenExchangeParams["client_secret"] = $oauthRequestParameters->ClientSecret;
        }

        $OAuthTokenUrl = UriOAuthService::ENDPOINT_URLS[$endpointType]['OAuthTokenUrl'];

        if (in_array($endpointType,
            [OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2, OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2_MS_SCOPE],
            true)) {
            $OAuthTokenUrl = str_replace("common", $tenant, $OAuthTokenUrl);
        }

        if (is_array($additionalParams)) {
            $accessTokenExchangeParams = array_merge($accessTokenExchangeParams, $additionalParams);
        }

        /**
         * Create an HTTP client and execute an HTTP POST request to
         * exchange the authorization token for an access token and
         * refresh token.
         */
        try {
            $response = $this->httpClient->post($OAuthTokenUrl, [
                'form_params' => $accessTokenExchangeParams,
                'headers' => [
                    'Accept' => 'application/json'
                ]
            ]);
            $responseJson = $response->getBody()->getContents();
        } catch (GuzzleException $e) {
            throw new Exception('HTTP request failed: '.$e->getMessage(), $e->getCode());
        }

        /**
         * The response formatted in json.
         */
        $responseArray = json_decode($responseJson, true);

        /**
         * If the response contains an access_token element, it was successful.
         * If not, an error occurred and the description will be displayed below.
         */
        if (isset($responseArray['access_token'])) {
            $accessToken = $responseArray['access_token'];
            $expiresIn = $responseArray['expires_in'];
            $refreshToken = $responseArray['refresh_token'];

            return (new OAuthTokens())
                ->withAccessToken($accessToken)
                ->withAccessTokenExpiresInSeconds($expiresIn)
                ->withRefreshToken($refreshToken)
                ->withResponseFragments($responseArray);
        } else {
            if (isset($responseArray['error'])) {
                $errorName = $responseArray['error'];
                $errorDesc = "The error_description was not provided by the authentication service.";
                if (isset($responseArray['error_description'])) {
                    $errorDesc = $responseArray['error_description'];
                }

                throw (new OAuthTokenRequestException())
                    ->withError($errorName)
                    ->withDescription($errorDesc);
            }
        }
    }

    /**
     * Gets the Microsoft Account authorization endpoint, for example where the user
     * should be navigated to give their consent.
     *
     *
     * @param  OAuthUrlParameters  $parameters
     * @param  string  $environment
     * @param  string  $oauthScope
     * @param $tenant
     * @return string
     */
    public static function GetAuthorizationEndpoint(
        OAuthUrlParameters $parameters,
        string $environment,
        string $oauthScope,
        $tenant
    ): string {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $oauthScope);

        $authorizationEndpointUrl = UriOAuthService::ENDPOINT_URLS[$endpointType]['AuthorizationEndpointUrl'];

        if (in_array($endpointType,
                [OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2, OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2_MS_SCOPE],
                true) && (isset($tenant))) {
            $authorizationEndpointUrl = str_replace("common", $tenant, $authorizationEndpointUrl);
        }

        return sprintf(
                "%s&client_id=%s&response_type=%s&redirect_uri=%s",
                $authorizationEndpointUrl,
                $parameters->ClientId,
                $parameters->ResponseType,
                rawurlencode($parameters->RedirectUri)
            ).(($parameters->State == null) ? "" : ("&state=".$parameters->State));
    }

    private static function GetOAuthEndpointType(string $environment, string $oauthScope): string
    {
        if ($environment == ApiEnvironment::PRODUCTION) {
            switch ($oauthScope) {
                case OAuthScope::MSADS_MANAGE:
                    $endpointType = OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2_MS_SCOPE;
                    break;
                case OAuthScope::BINGADS_MANAGE:
                    $endpointType = OAuthEndpointType::PRODUCTION_LIVE_CONNECT;
                    break;
                case OAuthScope::ADS_MANAGE:
                    $endpointType = OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2;
                    break;
                default:
                    $endpointType = OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2_MS_SCOPE;
            }
        } else {
            $endpointType = ($oauthScope == OAuthScope::SANDBOX_PPE) ? OAuthEndpointType::SANDBOX_PPE : OAuthEndpointType::SANDBOX_MSA_PROD;
        }
        return $endpointType;
    }

    public static function GetRedirectUrl(string $environment, string $oauthScope): string
    {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $oauthScope);
        return UriOAuthService::ENDPOINT_URLS[$endpointType]['RedirectUrl'];
    }

    public static function GetAuthTokenUrl($environment, $oauthScope, $tenant): string
    {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $oauthScope);

        $OAuthTokenUrl = UriOAuthService::ENDPOINT_URLS[$endpointType]['OAuthTokenUrl'];

        if (in_array($endpointType,
                [OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2, OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2_MS_SCOPE],
                true) && (isset($tenant))) {
            $OAuthTokenUrl = str_replace("common", $tenant, $OAuthTokenUrl);
        }

        return $OAuthTokenUrl;
    }

    public static function GetAuthorizeUrl($environment, $oauthScope, $tenant): string
    {
        $endpointType = UriOAuthService::GetOAuthEndpointType($environment, $oauthScope);

        $authorizationEndpointUrl = UriOAuthService::ENDPOINT_URLS[$endpointType]['AuthorizationEndpointUrl'];

        if (in_array($endpointType,
                [OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2, OAuthEndpointType::PRODUCTION_MS_IDENTITY_V_2_MS_SCOPE],
                true) && (isset($tenant))) {
            $authorizationEndpointUrl = str_replace("common", $tenant, $authorizationEndpointUrl);
        }

        return $authorizationEndpointUrl;
    }
}

