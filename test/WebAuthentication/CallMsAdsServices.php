<?php
namespace Microsoft\MsAds\Rest\Test\WebAuthentication;

require_once "../../vendor/autoload.php";

use GuzzleHttp\Client;
use Microsoft\MsAds\Rest\Api\CustomerManagementServiceApi;
use Microsoft\MsAds\Rest\ApiException;
use Microsoft\MsAds\Rest\Auth\ApiEnvironment;
use Microsoft\MsAds\Rest\Configuration;
use Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserRequest;
use Microsoft\MsAds\Rest\Model\CustomerManagementService\GetUserResponse;
use Microsoft\MsAds\Rest\Model\CustomerManagementService\Paging;
use Microsoft\MsAds\Rest\Model\CustomerManagementService\Predicate;
use Microsoft\MsAds\Rest\Model\CustomerManagementService\PredicateOperator;
use Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsRequest;
use Microsoft\MsAds\Rest\Model\CustomerManagementService\SearchAccountsResponse;

session_start();

// If there is no user authenticated, go back to the site index.

if(!isset($_SESSION['AuthorizationData']) || 
!isset($_SESSION['AuthorizationData']->Authentication) || 
!isset($_SESSION['AuthorizationData']->Authentication->OAuthTokens)
)
{
    header('Location: '. 'https://' . $_SERVER['HTTP_HOST']);
}
else {
    // If a refresh token is already present, use it to request new access and refresh tokens.
    // You should store refresh tokens securely i.e. not in session as shown in this demo.

    $refreshToken = $_SESSION['AuthorizationData']->Authentication->OAuthTokens->RefreshToken;
    if($refreshToken != null)
    {
        $_SESSION['AuthorizationData']->Authentication->RequestOAuthTokensByRefreshToken($refreshToken);
    }

    printf("Access token: %s<br/>", $_SESSION['AuthorizationData']->Authentication->OAuthTokens->AccessToken);
    printf("Refresh token: %s<br/>", $_SESSION['AuthorizationData']->Authentication->OAuthTokens->RefreshToken);

    // Create configuration with the authenticated token
    $config = Configuration::getDefaultConfiguration();
    $config->setAuthorizationData($_SESSION['AuthorizationData']);

    // Initialize the CustomerManagementServiceApi with the configuration
    $client = new Client(
        [
            'verify' => false
        ]
    );
    $customerManagementServiceApi = new CustomerManagementServiceApi(
        $client,
        $config,
        $_SESSION['ApiEnvironment'] ?? ApiEnvironment::SANDBOX
    );

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Microsoft Advertising user, and then search for all accounts the user can access.
    try {
        $request = new GetUserRequest();
        $response = $customerManagementServiceApi->getUser($request);
        if ($response instanceof GetUserResponse) {
            print "-----<br/>GetUserResponse:<br/>";
            print_r($response);
            $user = $response->getUser();
        } else {
            printf("GetUserResponse is not an instance of GetUserResponse, but %s<br/>", get_class($response));
            exit;
        }
    } catch (ApiException $e) {
        // Handle API exceptions, such as network issues or service errors.
        printf("API Exception: %s<br/>", $e->getMessage());
        exit;
    }

    // Search for the Microsoft Advertising accounts that the user can access.

    $pageInfo = new Paging();
    $pageInfo->setIndex(0);    // The first page
    $pageInfo->setSize(1000);   // The first 1,000 accounts for this page of results
    $predicate = new Predicate();
    $predicate->setField("UserId");
    $predicate->setOperator(PredicateOperator::EQUALS);
    $predicate->setValue($user->getId());

    $searchAccountsRequest = new SearchAccountsRequest();
    $searchAccountsRequest->setPredicates(array($predicate));
    $searchAccountsRequest->setOrdering(null);
    $searchAccountsRequest->setPageInfo($pageInfo);

    try {
        $response = $customerManagementServiceApi->searchAccounts($searchAccountsRequest);
        if ($response instanceof SearchAccountsResponse::class) {
            $accounts = $response->getAccounts();
            if ($accounts === null) {
                printf("No accounts found for user with ID %s.<br/>", $user->getId());
                exit;
            }
            print "-----<br/>Accounts the user can access:<br/>";
            foreach ($accounts as $account)
            {
                printf("Account Name: %s<br/>", $account->getName());
            }
        } else {
            printf("SearchAccountsResponse is not an instance of SearchAccountsResponse, but %s<br/>", get_class($response));
            exit;
        }
    } catch (ApiException $e) {
        // Handle API exceptions, such as network issues or service errors.
        printf("API Exception: %s<br/>", $e->getMessage());
        exit;
    }
}

session_unset();