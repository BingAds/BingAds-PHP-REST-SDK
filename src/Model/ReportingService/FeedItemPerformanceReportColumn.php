<?php
/**
 * FeedItemPerformanceReportColumn
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

class FeedItemPerformanceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const TIME_PERIOD = 'TimePeriod';

    public const ACCOUNT_ID = 'AccountId';

    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_NUMBER = 'AccountNumber';

    public const CAMPAIGN_ID = 'CampaignId';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const AD_GROUP_ID = 'AdGroupId';

    public const AD_ID = 'AdId';

    public const FEED_ID = 'FeedId';

    public const FEED_ITEM_ID = 'FeedItemId';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const SPEND = 'Spend';

    public const CTR = 'Ctr';

    public const AVERAGE_CPC = 'AverageCpc';

    public const AVERAGE_POSITION = 'AveragePosition';

    public const CONVERSIONS = 'Conversions';

    public const ASSISTS = 'Assists';

    public const REVENUE = 'Revenue';

    public const EXTENDED_COST = 'ExtendedCost';

    public const CONVERSIONS_QUALIFIED = 'ConversionsQualified';

    public const CONVERSION_RATE = 'ConversionRate';

    public const COST_PER_CONVERSION = 'CostPerConversion';

    public const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';

    public const COST_PER_ASSIST = 'CostPerAssist';

    public const REVENUE_PER_CONVERSION = 'RevenuePerConversion';

    public const REVENUE_PER_ASSIST = 'RevenuePerAssist';

    public const ALL_CONVERSIONS = 'AllConversions';

    public const ALL_CONVERSIONS_QUALIFIED = 'AllConversionsQualified';

    public const ALL_REVENUE = 'AllRevenue';

    public const ALL_COST_PER_CONVERSION = 'AllCostPerConversion';

    public const ALL_CONVERSION_RATE = 'AllConversionRate';

    public const ALL_REVENUE_PER_CONVERSION = 'AllRevenuePerConversion';

    public const ALL_RETURN_ON_AD_SPEND = 'AllReturnOnAdSpend';

    public const VIEW_THROUGH_CONVERSIONS = 'ViewThroughConversions';

    public const VIEW_THROUGH_CONVERSIONS_QUALIFIED = 'ViewThroughConversionsQualified';

    public const VIEW_THROUGH_REVENUE = 'ViewThroughRevenue';

    public const VIEW_THROUGH_CONVERSION_RATE = 'ViewThroughConversionRate';


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
            self::TIME_PERIOD,
            self::ACCOUNT_ID,
            self::ACCOUNT_NAME,
            self::ACCOUNT_NUMBER,
            self::CAMPAIGN_ID,
            self::CAMPAIGN_NAME,
            self::AD_GROUP_ID,
            self::AD_ID,
            self::FEED_ID,
            self::FEED_ITEM_ID,
            self::IMPRESSIONS,
            self::CLICKS,
            self::SPEND,
            self::CTR,
            self::AVERAGE_CPC,
            self::AVERAGE_POSITION,
            self::CONVERSIONS,
            self::ASSISTS,
            self::REVENUE,
            self::EXTENDED_COST,
            self::CONVERSIONS_QUALIFIED,
            self::CONVERSION_RATE,
            self::COST_PER_CONVERSION,
            self::RETURN_ON_AD_SPEND,
            self::COST_PER_ASSIST,
            self::REVENUE_PER_CONVERSION,
            self::REVENUE_PER_ASSIST,
            self::ALL_CONVERSIONS,
            self::ALL_CONVERSIONS_QUALIFIED,
            self::ALL_REVENUE,
            self::ALL_COST_PER_CONVERSION,
            self::ALL_CONVERSION_RATE,
            self::ALL_REVENUE_PER_CONVERSION,
            self::ALL_RETURN_ON_AD_SPEND,
            self::VIEW_THROUGH_CONVERSIONS,
            self::VIEW_THROUGH_CONVERSIONS_QUALIFIED,
            self::VIEW_THROUGH_REVENUE,
            self::VIEW_THROUGH_CONVERSION_RATE
        ];
    }
}
