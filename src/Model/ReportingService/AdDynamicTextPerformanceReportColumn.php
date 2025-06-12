<?php
/**
 * AdDynamicTextPerformanceReportColumn
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

class AdDynamicTextPerformanceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_ID = 'AccountId';

    public const ACCOUNT_NUMBER = 'AccountNumber';

    public const TIME_PERIOD = 'TimePeriod';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const AD_GROUP_ID = 'AdGroupId';

    public const KEYWORD = 'Keyword';

    public const AD_ID = 'AdId';

    public const AD_TITLE = 'AdTitle';

    public const AD_TYPE = 'AdType';

    public const DESTINATION_URL = 'DestinationUrl';

    public const PARAM1 = 'Param1';

    public const PARAM2 = 'Param2';

    public const PARAM3 = 'Param3';

    public const CURRENCY_CODE = 'CurrencyCode';

    public const AD_DISTRIBUTION = 'AdDistribution';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const CTR = 'Ctr';

    public const AVERAGE_CPC = 'AverageCpc';

    public const SPEND = 'Spend';

    public const AVERAGE_POSITION = 'AveragePosition';

    public const CONVERSIONS = 'Conversions';

    public const CONVERSION_RATE = 'ConversionRate';

    public const COST_PER_CONVERSION = 'CostPerConversion';

    public const DEVICE_TYPE = 'DeviceType';

    public const LANGUAGE = 'Language';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const AD_GROUP_STATUS = 'AdGroupStatus';

    public const AD_STATUS = 'AdStatus';

    public const KEYWORD_STATUS = 'KeywordStatus';

    public const TITLE_PART1 = 'TitlePart1';

    public const TITLE_PART2 = 'TitlePart2';

    public const TITLE_PART3 = 'TitlePart3';

    public const PATH1 = 'Path1';

    public const PATH2 = 'Path2';

    public const FINAL_URL = 'FinalUrl';

    public const FINAL_MOBILE_URL = 'FinalMobileUrl';

    public const FINAL_APP_URL = 'FinalAppUrl';

    public const AD_DESCRIPTION = 'AdDescription';

    public const AD_DESCRIPTION2 = 'AdDescription2';

    public const AD_LABELS = 'AdLabels';

    public const ALL_CONVERSIONS = 'AllConversions';

    public const ALL_CONVERSION_RATE = 'AllConversionRate';

    public const ALL_COST_PER_CONVERSION = 'AllCostPerConversion';

    public const VIEW_THROUGH_CONVERSIONS = 'ViewThroughConversions';

    public const GOAL = 'Goal';

    public const GOAL_TYPE = 'GoalType';

    public const ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT = 'AbsoluteTopImpressionRatePercent';

    public const TOP_IMPRESSION_RATE_PERCENT = 'TopImpressionRatePercent';

    public const AVERAGE_CPM = 'AverageCpm';

    public const CONVERSIONS_QUALIFIED = 'ConversionsQualified';

    public const ALL_CONVERSIONS_QUALIFIED = 'AllConversionsQualified';

    public const VIEW_THROUGH_CONVERSIONS_QUALIFIED = 'ViewThroughConversionsQualified';

    public const VIEW_THROUGH_REVENUE = 'ViewThroughRevenue';


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
            self::ACCOUNT_ID,
            self::ACCOUNT_NUMBER,
            self::TIME_PERIOD,
            self::AD_GROUP_NAME,
            self::AD_GROUP_ID,
            self::KEYWORD,
            self::AD_ID,
            self::AD_TITLE,
            self::AD_TYPE,
            self::DESTINATION_URL,
            self::PARAM1,
            self::PARAM2,
            self::PARAM3,
            self::CURRENCY_CODE,
            self::AD_DISTRIBUTION,
            self::IMPRESSIONS,
            self::CLICKS,
            self::CTR,
            self::AVERAGE_CPC,
            self::SPEND,
            self::AVERAGE_POSITION,
            self::CONVERSIONS,
            self::CONVERSION_RATE,
            self::COST_PER_CONVERSION,
            self::DEVICE_TYPE,
            self::LANGUAGE,
            self::ACCOUNT_STATUS,
            self::AD_GROUP_STATUS,
            self::AD_STATUS,
            self::KEYWORD_STATUS,
            self::TITLE_PART1,
            self::TITLE_PART2,
            self::TITLE_PART3,
            self::PATH1,
            self::PATH2,
            self::FINAL_URL,
            self::FINAL_MOBILE_URL,
            self::FINAL_APP_URL,
            self::AD_DESCRIPTION,
            self::AD_DESCRIPTION2,
            self::AD_LABELS,
            self::ALL_CONVERSIONS,
            self::ALL_CONVERSION_RATE,
            self::ALL_COST_PER_CONVERSION,
            self::VIEW_THROUGH_CONVERSIONS,
            self::GOAL,
            self::GOAL_TYPE,
            self::ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT,
            self::TOP_IMPRESSION_RATE_PERCENT,
            self::AVERAGE_CPM,
            self::CONVERSIONS_QUALIFIED,
            self::ALL_CONVERSIONS_QUALIFIED,
            self::VIEW_THROUGH_CONVERSIONS_QUALIFIED,
            self::VIEW_THROUGH_REVENUE
        ];
    }
}
