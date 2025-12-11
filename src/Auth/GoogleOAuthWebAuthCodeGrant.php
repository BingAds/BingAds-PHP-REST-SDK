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

/**
 * Represents an OAuth authorization object implementing the authorization code grant flow for use in a web application.
 */
class GoogleOAuthWebAuthCodeGrant extends OAuthWithAuthorizationCode
{
    public function __construct()
    {
        parent::__construct();
        $this->Type = 'GoogleOAuthWebAuthCodeGrant';
    }
}
