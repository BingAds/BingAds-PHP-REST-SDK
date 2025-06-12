<?php
/**
 * ProductPartitionUnitPerformanceReportColumn
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

class ProductPartitionUnitPerformanceReportColumn
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

    public const PRODUCT_GROUP = 'ProductGroup';

    public const AD_GROUP_CRITERION_ID = 'AdGroupCriterionId';

    public const AD_ID = 'AdId';

    public const CURRENT_MAX_CPC = 'CurrentMaxCpc';

    public const CURRENCY_CODE = 'CurrencyCode';

    public const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';

    public const BID_MATCH_TYPE = 'BidMatchType';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const CTR = 'Ctr';

    public const AVERAGE_CPC = 'AverageCpc';

    public const SPEND = 'Spend';

    public const CONVERSIONS = 'Conversions';

    public const CONVERSION_RATE = 'ConversionRate';

    public const COST_PER_CONVERSION = 'CostPerConversion';

    public const DEVICE_TYPE = 'DeviceType';

    public const LANGUAGE = 'Language';

    public const CAMPAIGN_STATUS = 'CampaignStatus';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const AD_GROUP_STATUS = 'AdGroupStatus';

    public const DESTINATION_URL = 'DestinationUrl';

    public const NETWORK = 'Network';

    public const TOP_VS_OTHER = 'TopVsOther';

    public const ASSISTS = 'Assists';

    public const REVENUE = 'Revenue';

    public const COST_PER_ASSIST = 'CostPerAssist';

    public const REVENUE_PER_CONVERSION = 'RevenuePerConversion';

    public const REVENUE_PER_ASSIST = 'RevenuePerAssist';

    public const AD_STATUS = 'AdStatus';

    public const TRACKING_TEMPLATE = 'TrackingTemplate';

    public const CUSTOM_PARAMETERS = 'CustomParameters';

    public const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';

    public const BID_STRATEGY_TYPE = 'BidStrategyType';

    public const LOCAL_STORE_CODE = 'LocalStoreCode';

    public const ASSISTED_IMPRESSIONS = 'AssistedImpressions';

    public const ASSISTED_CLICKS = 'AssistedClicks';

    public const ASSISTED_CONVERSIONS = 'AssistedConversions';

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

    public const AVERAGE_CPM = 'AverageCpm';

    public const CONVERSIONS_QUALIFIED = 'ConversionsQualified';

    public const ASSISTED_CONVERSIONS_QUALIFIED = 'AssistedConversionsQualified';

    public const ALL_CONVERSIONS_QUALIFIED = 'AllConversionsQualified';

    public const VIEW_THROUGH_CONVERSIONS_QUALIFIED = 'ViewThroughConversionsQualified';

    public const VIEW_THROUGH_REVENUE = 'ViewThroughRevenue';

    public const CAMPAIGN_TYPE = 'CampaignType';

    public const ASSET_GROUP_ID = 'AssetGroupId';

    public const ASSET_GROUP_NAME = 'AssetGroupName';

    public const ASSET_GROUP_STATUS = 'AssetGroupStatus';


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
            self::PRODUCT_GROUP,
            self::AD_GROUP_CRITERION_ID,
            self::AD_ID,
            self::CURRENT_MAX_CPC,
            self::CURRENCY_CODE,
            self::DELIVERED_MATCH_TYPE,
            self::BID_MATCH_TYPE,
            self::IMPRESSIONS,
            self::CLICKS,
            self::CTR,
            self::AVERAGE_CPC,
            self::SPEND,
            self::CONVERSIONS,
            self::CONVERSION_RATE,
            self::COST_PER_CONVERSION,
            self::DEVICE_TYPE,
            self::LANGUAGE,
            self::CAMPAIGN_STATUS,
            self::ACCOUNT_STATUS,
            self::AD_GROUP_STATUS,
            self::DESTINATION_URL,
            self::NETWORK,
            self::TOP_VS_OTHER,
            self::ASSISTS,
            self::REVENUE,
            self::COST_PER_ASSIST,
            self::REVENUE_PER_CONVERSION,
            self::REVENUE_PER_ASSIST,
            self::AD_STATUS,
            self::TRACKING_TEMPLATE,
            self::CUSTOM_PARAMETERS,
            self::RETURN_ON_AD_SPEND,
            self::BID_STRATEGY_TYPE,
            self::LOCAL_STORE_CODE,
            self::ASSISTED_IMPRESSIONS,
            self::ASSISTED_CLICKS,
            self::ASSISTED_CONVERSIONS,
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
            self::AVERAGE_CPM,
            self::CONVERSIONS_QUALIFIED,
            self::ASSISTED_CONVERSIONS_QUALIFIED,
            self::ALL_CONVERSIONS_QUALIFIED,
            self::VIEW_THROUGH_CONVERSIONS_QUALIFIED,
            self::VIEW_THROUGH_REVENUE,
            self::CAMPAIGN_TYPE,
            self::ASSET_GROUP_ID,
            self::ASSET_GROUP_NAME,
            self::ASSET_GROUP_STATUS
        ];
    }
}
