<?php

namespace Microsoft\MsAds\Rest\Test\WebAuthentication;

require_once "../../vendor/autoload.php";

use Microsoft\MsAds\Rest\Auth\ApiEnvironment;

/**
 * Defines global settings that you can use for testing your application.
 * Your production implementation may vary, and you should always store sensitive information securely.
 */
final class WebAuthHelper
{

    const DEVELOPER_TOKEN = 'BBD37VB98'; // For sandbox use 'BBD37VB98'
    const API_ENVIRONMENT = ApiEnvironment::SANDBOX;
    const CLIENT_ID = 'ClientIdGoesHere';
    const CLIENT_SECRET = 'ClientSecretGoesHere';
    const REDIRECT_URI = '/OAuth2Callback.php';

    static function GetApiEnvironment(): string
    {
        return WebAuthHelper::API_ENVIRONMENT;
    }
}