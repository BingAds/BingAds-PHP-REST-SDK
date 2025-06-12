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
 * Interface for the authorization service.
 */
abstract class IOAuthService
{
    /**
     * Implementations of this abstract method must call the authorization server with the
     * $oauthRequestParameters, must deserialize the response, and must return OAuthTokens.
     *
     * @param  OAuthRequestParameters  $oauthRequestParameters
     * @param  string  $environment
     * @param  string  $oauthScope
     * @param  string  $tenant
     * @param  array  $additionalParams
     */
    abstract function GetAccessTokens(
        OAuthRequestParameters $oauthRequestParameters,
        string $environment,
        string $oauthScope,
        string $tenant,
        array $additionalParams
    );
}
