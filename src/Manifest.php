<?php
/**
 * Manifest
 * SDK-wide constants for the Microsoft Advertising REST PHP SDK.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest;

class Manifest
{
    /**
     * The revision date this SDK was built against. Sent as the Api-Revision HTTP header
     * on every outgoing request so an SDK upgrade alone surfaces every API field gated on
     * or before this date.
     *
     * Update this constant in lockstep with the SDK release version. The format is strict
     * yyyy-MM-dd; the server validates with DateTime::TryParseExact(DateTimeStyles.None).
     */
    public const SDK_API_REVISION = '2026-09-14';
}
