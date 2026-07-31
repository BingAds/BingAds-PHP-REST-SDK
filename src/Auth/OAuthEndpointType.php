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
 * Represents the endpoint type to use for OAuth.
 */
final class OAuthEndpointType
{
    /**
     * Production for MS Identity V2 with new MSADS scope
     */
    public const PRODUCTION_MS_IDENTITY_V_2_MS_SCOPE = 'ProductionMSIdentityV2_MSScope';

    /**
     * Production for MS Identity V2
     */
    public const PRODUCTION_MS_IDENTITY_V_2 = 'ProductionMSIdentityV2';

    /**
     * Production for Live Connect
     */
    public const PRODUCTION_LIVE_CONNECT = 'ProductionLiveConnect';

    /**
     * Sandbox for Live Connect
     */
    public const SANDBOX_PPE = 'SandboxPPE';

    /**
     * Sandbox for MS Identity V2 with new MSADS scope
     */
    public const SANDBOX_MSA_PROD = 'SandboxMSAProd';
}

