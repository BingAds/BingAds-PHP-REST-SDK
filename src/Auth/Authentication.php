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
 * The abstract base class for all authentication classes.
 */
abstract class Authentication
{
    /**
     * The Authentication type, for example OAuthDesktopMobileAuthCodeGrant.
     */
    public string $Type;
}
