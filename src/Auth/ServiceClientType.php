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
 * Defines the supported Bing Ads API services.
 */
final class ServiceClientType
{
    public const AD_INSIGHT = 'AdInsightService';
    public const BULK = 'BulkService';
    public const CAMPAIGN_MANAGEMENT = 'CampaignManagementService';
    public const CUSTOMER_BILLING = 'CustomerBillingService';
    public const CUSTOMER_MANAGEMENT = 'CustomerManagementService';
    public const REPORTING = 'ReportingService';
}
