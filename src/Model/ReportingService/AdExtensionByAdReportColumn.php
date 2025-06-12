<?php
/**
 * AdExtensionByAdReportColumn
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

class AdExtensionByAdReportColumn
{
    /**
     * Possible values of this enum
     */
    public const ACCOUNT_NAME = 'AccountName';

    public const TIME_PERIOD = 'TimePeriod';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CAMPAIGN_ID = 'CampaignId';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const AD_GROUP_ID = 'AdGroupId';

    public const AD_TITLE = 'AdTitle';

    public const AD_ID = 'AdId';

    public const AD_EXTENSION_TYPE = 'AdExtensionType';

    public const DEVICE_TYPE = 'DeviceType';

    public const DEVICE_OS = 'DeviceOS';

    public const CLICK_TYPE = 'ClickType';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const TOTAL_CLICKS = 'TotalClicks';

    public const CONVERSIONS = 'Conversions';

    public const CTR = 'Ctr';

    public const AVERAGE_CPC = 'AverageCpc';

    public const CONVERSION_RATE = 'ConversionRate';

    public const SPEND = 'Spend';

    public const AD_EXTENSION_ID = 'AdExtensionId';

    public const AD_EXTENSION_VERSION = 'AdExtensionVersion';

    public const ACCOUNT_NUMBER = 'AccountNumber';

    public const ACCOUNT_ID = 'AccountId';

    public const BID_MATCH_TYPE = 'BidMatchType';

    public const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';

    public const NETWORK = 'Network';

    public const TOP_VS_OTHER = 'TopVsOther';

    public const ASSISTS = 'Assists';

    public const REVENUE = 'Revenue';

    public const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';

    public const COST_PER_CONVERSION = 'CostPerConversion';

    public const COST_PER_ASSIST = 'CostPerAssist';

    public const REVENUE_PER_CONVERSION = 'RevenuePerConversion';

    public const REVENUE_PER_ASSIST = 'RevenuePerAssist';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const CAMPAIGN_STATUS = 'CampaignStatus';

    public const AD_GROUP_STATUS = 'AdGroupStatus';

    public const AD_STATUS = 'AdStatus';

    public const TITLE_PART1 = 'TitlePart1';

    public const TITLE_PART2 = 'TitlePart2';

    public const TITLE_PART3 = 'TitlePart3';

    public const ALL_CONVERSIONS = 'AllConversions';

    public const ALL_REVENUE = 'AllRevenue';

    public const ALL_CONVERSION_RATE = 'AllConversionRate';

    public const ALL_COST_PER_CONVERSION = 'AllCostPerConversion';

    public const ALL_RETURN_ON_AD_SPEND = 'AllReturnOnAdSpend';

    public const ALL_REVENUE_PER_CONVERSION = 'AllRevenuePerConversion';

    public const GOAL = 'Goal';

    public const GOAL_TYPE = 'GoalType';

    public const AVERAGE_CPM = 'AverageCpm';

    public const CONVERSIONS_QUALIFIED = 'ConversionsQualified';

    public const ALL_CONVERSIONS_QUALIFIED = 'AllConversionsQualified';

    public const GOAL_ID = 'GoalId';


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
            self::TIME_PERIOD,
            self::CAMPAIGN_NAME,
            self::CAMPAIGN_ID,
            self::AD_GROUP_NAME,
            self::AD_GROUP_ID,
            self::AD_TITLE,
            self::AD_ID,
            self::AD_EXTENSION_TYPE,
            self::DEVICE_TYPE,
            self::DEVICE_OS,
            self::CLICK_TYPE,
            self::IMPRESSIONS,
            self::CLICKS,
            self::TOTAL_CLICKS,
            self::CONVERSIONS,
            self::CTR,
            self::AVERAGE_CPC,
            self::CONVERSION_RATE,
            self::SPEND,
            self::AD_EXTENSION_ID,
            self::AD_EXTENSION_VERSION,
            self::ACCOUNT_NUMBER,
            self::ACCOUNT_ID,
            self::BID_MATCH_TYPE,
            self::DELIVERED_MATCH_TYPE,
            self::NETWORK,
            self::TOP_VS_OTHER,
            self::ASSISTS,
            self::REVENUE,
            self::RETURN_ON_AD_SPEND,
            self::COST_PER_CONVERSION,
            self::COST_PER_ASSIST,
            self::REVENUE_PER_CONVERSION,
            self::REVENUE_PER_ASSIST,
            self::ACCOUNT_STATUS,
            self::CAMPAIGN_STATUS,
            self::AD_GROUP_STATUS,
            self::AD_STATUS,
            self::TITLE_PART1,
            self::TITLE_PART2,
            self::TITLE_PART3,
            self::ALL_CONVERSIONS,
            self::ALL_REVENUE,
            self::ALL_CONVERSION_RATE,
            self::ALL_COST_PER_CONVERSION,
            self::ALL_RETURN_ON_AD_SPEND,
            self::ALL_REVENUE_PER_CONVERSION,
            self::GOAL,
            self::GOAL_TYPE,
            self::AVERAGE_CPM,
            self::CONVERSIONS_QUALIFIED,
            self::ALL_CONVERSIONS_QUALIFIED,
            self::GOAL_ID
        ];
    }
}
