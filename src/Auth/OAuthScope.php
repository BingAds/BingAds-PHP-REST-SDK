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
 * Represents the scope to be used for OAuth authorization.
 */
final class OAuthScope
{
    /**
     * Represents msads.manage OAuth scope
     */
    const MSADS_MANAGE = 'msads.manage';

    /**
     * Represents bingads.msnage OAuth scope
     */
    const BINGADS_MANAGE = 'bingads.manage';

    /**
     * Represents ads.manage OAuth scope
     */
    const ADS_MANAGE = 'ads.manage';

    /**
     * Represents sandbox.ppe OAuth scope
     */
    const SANDBOX_PPE = 'sandbox.ppe';
}
