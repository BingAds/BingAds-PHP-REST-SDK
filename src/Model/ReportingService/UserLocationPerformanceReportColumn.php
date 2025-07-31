<?php
/**
 * UserLocationPerformanceReportColumn
 * ReportingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\ReportingService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\ReportingService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class UserLocationPerformanceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_NUMBER = 'AccountNumber';

    public const ACCOUNT_ID = 'AccountId';

    public const TIME_PERIOD = 'TimePeriod';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CAMPAIGN_ID = 'CampaignId';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const AD_GROUP_ID = 'AdGroupId';

    public const COUNTRY = 'Country';

    public const STATE = 'State';

    public const METRO_AREA = 'MetroArea';

    public const CURRENCY_CODE = 'CurrencyCode';

    public const AD_DISTRIBUTION = 'AdDistribution';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const CTR = 'Ctr';

    public const AVERAGE_CPC = 'AverageCpc';

    public const SPEND = 'Spend';

    public const AVERAGE_POSITION = 'AveragePosition';

    public const PROXIMITY_TARGET_LOCATION = 'ProximityTargetLocation';

    public const RADIUS = 'Radius';

    public const LANGUAGE = 'Language';

    public const CITY = 'City';

    public const QUERY_INTENT_COUNTRY = 'QueryIntentCountry';

    public const QUERY_INTENT_STATE = 'QueryIntentState';

    public const QUERY_INTENT_CITY = 'QueryIntentCity';

    public const QUERY_INTENT_DMA = 'QueryIntentDMA';

    public const BID_MATCH_TYPE = 'BidMatchType';

    public const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';

    public const NETWORK = 'Network';

    public const TOP_VS_OTHER = 'TopVsOther';

    public const DEVICE_TYPE = 'DeviceType';

    public const DEVICE_OS = 'DeviceOS';

    public const ASSISTS = 'Assists';

    public const CONVERSIONS = 'Conversions';

    public const CONVERSION_RATE = 'ConversionRate';

    public const REVENUE = 'Revenue';

    public const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';

    public const COST_PER_CONVERSION = 'CostPerConversion';

    public const COST_PER_ASSIST = 'CostPerAssist';

    public const REVENUE_PER_CONVERSION = 'RevenuePerConversion';

    public const REVENUE_PER_ASSIST = 'RevenuePerAssist';

    public const COUNTY = 'County';

    public const POSTAL_CODE = 'PostalCode';

    public const QUERY_INTENT_COUNTY = 'QueryIntentCounty';

    public const QUERY_INTENT_POSTAL_CODE = 'QueryIntentPostalCode';

    public const LOCATION_ID = 'LocationId';

    public const QUERY_INTENT_LOCATION_ID = 'QueryIntentLocationId';

    public const ALL_CONVERSIONS = 'AllConversions';

    public const ALL_REVENUE = 'AllRevenue';

    public const ALL_CONVERSION_RATE = 'AllConversionRate';

    public const ALL_COST_PER_CONVERSION = 'AllCostPerConversion';

    public const ALL_RETURN_ON_AD_SPEND = 'AllReturnOnAdSpend';

    public const ALL_REVENUE_PER_CONVERSION = 'AllRevenuePerConversion';

    public const VIEW_THROUGH_CONVERSIONS = 'ViewThroughConversions';

    public const GOAL = 'Goal';

    public const GOAL_TYPE = 'GoalType';

    public const ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT = 'AbsoluteTopImpressionRatePercent';

    public const TOP_IMPRESSION_RATE_PERCENT = 'TopImpressionRatePercent';

    public const AVERAGE_CPM = 'AverageCpm';

    public const CONVERSIONS_QUALIFIED = 'ConversionsQualified';

    public const ALL_CONVERSIONS_QUALIFIED = 'AllConversionsQualified';

    public const VIEW_THROUGH_CONVERSIONS_QUALIFIED = 'ViewThroughConversionsQualified';

    public const NEIGHBORHOOD = 'Neighborhood';

    public const QUERY_INTENT_NEIGHBORHOOD = 'QueryIntentNeighborhood';

    public const VIEW_THROUGH_REVENUE = 'ViewThroughRevenue';

    public const CAMPAIGN_TYPE = 'CampaignType';

    public const ASSET_GROUP_ID = 'AssetGroupId';

    public const ASSET_GROUP_NAME = 'AssetGroupName';

    public const DOWNLOADS = 'Downloads';

    public const POST_CLICK_DOWNLOAD_RATE = 'PostClickDownloadRate';

    public const COST_PER_DOWNLOAD = 'CostPerDownload';

    public const APP_INSTALLS = 'AppInstalls';

    public const POST_CLICK_INSTALL_RATE = 'PostClickInstallRate';

    public const CPI = 'CPI';

    public const PURCHASES = 'Purchases';

    public const POST_INSTALL_PURCHASE_RATE = 'PostInstallPurchaseRate';

    public const CPP = 'CPP';

    public const SUBSCRIPTIONS = 'Subscriptions';

    public const POST_INSTALL_SUBSCRIPTION_RATE = 'PostInstallSubscriptionRate';

    public const CPS = 'CPS';


    // If this is an enum with flags true, you can combine multiple values with a comma i.e "value1,value2"
    private static bool $isFlags = false;
    private $value;

    /**
     * Constructor
     */
    public function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * Gets the value of the enum
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value of the enum
     */
    public function setValue($value)
    {
        $this->validateValue($value);
        if (is_array($value) && self::$isFlags) {
            $value = implode(',', $value);
        }
        $this->value = $value;
    }

    public static function isFlags(): bool
    {
        return self::$isFlags;
    }

    public static function validateValue($value): bool
    {
        $values = (self::$isFlags)
            ? ((is_string($value) ? explode(',', $value) : $value))
            : [$value];
        foreach ($values as $v) {
            if (!in_array($v, self::getAllowableEnumValues(), true)) {
                throw new \InvalidArgumentException(sprintf(
                    'Invalid value for enum %s, must be one of: %s',
                    __CLASS__,
                    implode(', ', self::getAllowableEnumValues())
                ));
            }
        }
        return true;
    }

    public function __toString()
    {
        return strval($this->value);
    }

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::ACCOUNT_NAME,
            self::ACCOUNT_NUMBER,
            self::ACCOUNT_ID,
            self::TIME_PERIOD,
            self::CAMPAIGN_NAME,
            self::CAMPAIGN_ID,
            self::AD_GROUP_NAME,
            self::AD_GROUP_ID,
            self::COUNTRY,
            self::STATE,
            self::METRO_AREA,
            self::CURRENCY_CODE,
            self::AD_DISTRIBUTION,
            self::IMPRESSIONS,
            self::CLICKS,
            self::CTR,
            self::AVERAGE_CPC,
            self::SPEND,
            self::AVERAGE_POSITION,
            self::PROXIMITY_TARGET_LOCATION,
            self::RADIUS,
            self::LANGUAGE,
            self::CITY,
            self::QUERY_INTENT_COUNTRY,
            self::QUERY_INTENT_STATE,
            self::QUERY_INTENT_CITY,
            self::QUERY_INTENT_DMA,
            self::BID_MATCH_TYPE,
            self::DELIVERED_MATCH_TYPE,
            self::NETWORK,
            self::TOP_VS_OTHER,
            self::DEVICE_TYPE,
            self::DEVICE_OS,
            self::ASSISTS,
            self::CONVERSIONS,
            self::CONVERSION_RATE,
            self::REVENUE,
            self::RETURN_ON_AD_SPEND,
            self::COST_PER_CONVERSION,
            self::COST_PER_ASSIST,
            self::REVENUE_PER_CONVERSION,
            self::REVENUE_PER_ASSIST,
            self::COUNTY,
            self::POSTAL_CODE,
            self::QUERY_INTENT_COUNTY,
            self::QUERY_INTENT_POSTAL_CODE,
            self::LOCATION_ID,
            self::QUERY_INTENT_LOCATION_ID,
            self::ALL_CONVERSIONS,
            self::ALL_REVENUE,
            self::ALL_CONVERSION_RATE,
            self::ALL_COST_PER_CONVERSION,
            self::ALL_RETURN_ON_AD_SPEND,
            self::ALL_REVENUE_PER_CONVERSION,
            self::VIEW_THROUGH_CONVERSIONS,
            self::GOAL,
            self::GOAL_TYPE,
            self::ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT,
            self::TOP_IMPRESSION_RATE_PERCENT,
            self::AVERAGE_CPM,
            self::CONVERSIONS_QUALIFIED,
            self::ALL_CONVERSIONS_QUALIFIED,
            self::VIEW_THROUGH_CONVERSIONS_QUALIFIED,
            self::NEIGHBORHOOD,
            self::QUERY_INTENT_NEIGHBORHOOD,
            self::VIEW_THROUGH_REVENUE,
            self::CAMPAIGN_TYPE,
            self::ASSET_GROUP_ID,
            self::ASSET_GROUP_NAME,
            self::DOWNLOADS,
            self::POST_CLICK_DOWNLOAD_RATE,
            self::COST_PER_DOWNLOAD,
            self::APP_INSTALLS,
            self::POST_CLICK_INSTALL_RATE,
            self::CPI,
            self::PURCHASES,
            self::POST_INSTALL_PURCHASE_RATE,
            self::CPP,
            self::SUBSCRIPTIONS,
            self::POST_INSTALL_SUBSCRIPTION_RATE,
            self::CPS
        ];
    }
}
