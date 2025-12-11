# msads-rest

This project provides the PHP client library for the REST-based Bing Ads API at Microsoft.

For documentation visit the [Bing Ads API Getting Started Page](https://learn.microsoft.com/en-us/advertising/guides/get-started).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), run the following command:

```bash
composer require microsoft/msads
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/msads-rest/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = \Microsoft\MsAds\Rest\Configuration::getDefaultConfiguration();

$authentication = (new \Microsoft\MsAds\Rest\Auth\OAuthDesktopMobileAuthCodeGrant())
    ->withEnvironment(\Microsoft\MsAds\Rest\Auth\ApiEnvironment::SANDBOX)
    ->withClientId(self::CLIENT_ID)  // Replace with your client ID
    ->withOAuthScope(\Microsoft\MsAds\Rest\Auth\OAuthScope::MSADS_MANAGE);

$config->setAuthorizationData((new \Microsoft\MsAds\Rest\Auth\AuthorizationData())
    ->withAuthentication($authentication)
    ->withDeveloperToken('BBD37VB98'));  // For sandbox use 'BBD37VB98'

// To set the auth key manually
// $config = $config->setApiKey('Authorization', 'YOUR_API_KEY');
// $config = $config->setApiKey('UserName', 'YOUR_API_KEY');
// $config = $config->setApiKey('CustomerAccountId', 'YOUR_API_KEY');
// $config = $config->setApiKey('CustomerId', 'YOUR_API_KEY');
// $config = $config->setApiKey('DeveloperToken', 'YOUR_API_KEY');
// $config = $config->setApiKey('Password', 'YOUR_API_KEY');


$apiInstance = new \Microsoft\MsAds\Rest\Api\CampaignManagementServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new \GuzzleHttp\Client(),
    $config,
    null,
    \Microsoft\MsAds\Rest\Auth\ApiEnvironment::SANDBOX
);
$request = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AddAdExtensionsRequest();
$request->setAdExtensions([
    new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAdExtension([
        'Name' => 'Test Image Ad Extension',
    ])
]);

try {
    $result = $apiInstance->addAdExtensions($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManagementServiceApi->addAdExtensions: ', $e->getMessage(), PHP_EOL;
}

```

## Handling Responses and Exceptions
- The API uses standard HTTP response codes to indicate the success or failure of an API request. In general, `2xx` codes indicate success, while `4xx` and `5xx` codes indicate errors.
- In certain cases, the API will return an `ApplicationFault` response with an error message and an error code. The error message will provide more details about the error.
- If there is an error with the API call itself, the SDK will throw an `ApiException` with the error message and code. You can catch this exception and handle it accordingly.

Example of handling responses:
```php
try {
    $response = $apiInstance->addAdExtensions($AddAdExtensionsRequest);
    if ($response instanceof ApplicationFault) {
        echo 'Handle the ApplicationFault response here';
    } else {
        echo 'Handle the AddAdExtensionsResponse response here';
    }
} catch (ApiException $e) {
    echo 'Exception when calling AdExtensionService->addAdExtensions: ', $e->getMessage(), PHP_EOL;
}
```

## Flag Enums
The SDK uses `Flag Enums` to represent various options and settings.
- These `Flag Enums` allow you to combine multiple options. For example, you can use the `CampaignManagementService\AdExtensionsTypeFilter` enum to specify multiple AdExtensionTypeFilters using an array of values OR comma-separated string.
- To check if an Enum class is a `Flag Enum`, you can look for the `$isFlags` property in the class definition. If it is set to `true`, you can use the enum as a `Flag Enum`.
- When a `Flag Enum` is returned from the API in deserialization, it will be represented as a string with the values separated by commas.

```php
use \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionsTypeFilter;
// To represent multiple AdExtensionTypeFilters:
$filter = [AdExtensionsTypeFilter::ACTION_AD_EXTENSION, AdExtensionsTypeFilter::APP_AD_EXTENSION];
// or
$filter = 'ActionAdExtension,AppAdExtension';
// or
$filter = AdExtensionsTypeFilter::ACTION_AD_EXTENSION . ',' . AdExtensionsTypeFilter::APP_AD_EXTENSION;
// or
$filter = new AdExtensionsTypeFilter($filter);
```

## Authorization
You can use the OAuth 2.0 authorization flow to obtain the necessary tokens for accessing the Bing Ads API. The SDK supports both web-based and desktop-based OAuth flows.
You can find more information on how to obtain these tokens in the [Bing Ads API documentation](https://learn.microsoft.com/en-us/advertising/guides/authentication-oauth).
- Classes are provided in the SDK to help you with the OAuth 2.0 flow, within the folder [src/Auth](src/Auth).
- Sample code can be found in the `test` directory, specifically in the [test/WebAuthentication](test/WebAuthentication) directory for webpage auth, and [test/RestApiTestBase.php](test/RestApiTestBase.php) for OAuth Desktop auth.

Authentication schemes defined for the API:
### Authorization
- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

### UserName
- **Type**: API key
- **API key parameter name**: UserName
- **Location**: HTTP header

### Password
- **Type**: API key
- **API key parameter name**: Password
- **Location**: HTTP header

### CustomerAccountId
- **Type**: API key
- **API key parameter name**: CustomerAccountId
- **Location**: HTTP header

### CustomerId
- **Type**: API key
- **API key parameter name**: CustomerId
- **Location**: HTTP header

### DeveloperToken
- **Type**: API key
- **API key parameter name**: DeveloperToken
- **Location**: HTTP header

## Samples and Tests

There are some samples included in the [test](test) directory showing examples of how to use the SDK.

The samples are written using PHPUnit. To run the tests, you need to have PHPUnit installed. You can install it globally or use Composer to install it as a dependency.

> **Warning**: Before running the tests, make sure to set up your environment variables for the API keys. You can do this by editing the CONSTANTS in the [RestApiTestBase.php](test/RestApiTestBase.php) file, going through the auth flow to get the `CODE_URL` and then replacing that constant.

To run the tests, use an IDE or run the following command in the terminal:

```bash
composer install
vendor/bin/phpunit
```

Logs will be generated in the base directory of the project with the request and response data for further analysis.

## About this package

- SDK Package version: `13.0.26`
- Generated date: `2025-12-11T13:28:36.717081200+08:00[Asia/Shanghai]`