<?php
/**
 * AdPerformanceReportColumn
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

class AdPerformanceReportColumn
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

    public const AD_ID = 'AdId';

    public const AD_GROUP_ID = 'AdGroupId';

    public const AD_TITLE = 'AdTitle';

    public const AD_DESCRIPTION = 'AdDescription';

    public const AD_DESCRIPTION2 = 'AdDescription2';

    public const AD_TYPE = 'AdType';

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

    public const DESTINATION_URL = 'DestinationUrl';

    public const DEVICE_TYPE = 'DeviceType';

    public const LANGUAGE = 'Language';

    public const DISPLAY_URL = 'DisplayUrl';

    public const AD_STATUS = 'AdStatus';

    public const NETWORK = 'Network';

    public const TOP_VS_OTHER = 'TopVsOther';

    public const BID_MATCH_TYPE = 'BidMatchType';

    public const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';

    public const DEVICE_OS = 'DeviceOS';

    public const ASSISTS = 'Assists';

    public const REVENUE = 'Revenue';

    public const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';

    public const COST_PER_ASSIST = 'CostPerAssist';

    public const REVENUE_PER_CONVERSION = 'RevenuePerConversion';

    public const REVENUE_PER_ASSIST = 'RevenuePerAssist';

    public const TRACKING_TEMPLATE = 'TrackingTemplate';

    public const CUSTOM_PARAMETERS = 'CustomParameters';

    public const FINAL_URL = 'FinalUrl';

    public const FINAL_MOBILE_URL = 'FinalMobileUrl';

    public const FINAL_APP_URL = 'FinalAppUrl';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const CAMPAIGN_STATUS = 'CampaignStatus';

    public const AD_GROUP_STATUS = 'AdGroupStatus';

    public const TITLE_PART1 = 'TitlePart1';

    public const TITLE_PART2 = 'TitlePart2';

    public const TITLE_PART3 = 'TitlePart3';

    public const HEADLINE = 'Headline';

    public const LONG_HEADLINE = 'LongHeadline';

    public const BUSINESS_NAME = 'BusinessName';

    public const PATH1 = 'Path1';

    public const PATH2 = 'Path2';

    public const AD_LABELS = 'AdLabels';

    public const CUSTOMER_ID = 'CustomerId';

    public const CUSTOMER_NAME = 'CustomerName';

    public const CAMPAIGN_TYPE = 'CampaignType';

    public const BASE_CAMPAIGN_ID = 'BaseCampaignId';

    public const ALL_CONVERSIONS = 'AllConversions';

    public const ALL_REVENUE = 'AllRevenue';

    public const ALL_CONVERSION_RATE = 'AllConversionRate';

    public const ALL_COST_PER_CONVERSION = 'AllCostPerConversion';

    public const ALL_RETURN_ON_AD_SPEND = 'AllReturnOnAdSpend';

    public const ALL_REVENUE_PER_CONVERSION = 'AllRevenuePerConversion';

    public const FINAL_URL_SUFFIX = 'FinalUrlSuffix';

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

    public const VIDEO_VIEWS = 'VideoViews';

    public const VIEW_THROUGH_RATE = 'ViewThroughRate';

    public const AVERAGE_CPV = 'AverageCPV';

    public const VIDEO_VIEWS_AT25_PERCENT = 'VideoViewsAt25Percent';

    public const VIDEO_VIEWS_AT50_PERCENT = 'VideoViewsAt50Percent';

    public const VIDEO_VIEWS_AT75_PERCENT = 'VideoViewsAt75Percent';

    public const COMPLETED_VIDEO_VIEWS = 'CompletedVideoViews';

    public const VIDEO_COMPLETION_RATE = 'VideoCompletionRate';

    public const TOTAL_WATCH_TIME_IN_MS = 'TotalWatchTimeInMS';

    public const AVERAGE_WATCH_TIME_PER_VIDEO_VIEW = 'AverageWatchTimePerVideoView';

    public const AVERAGE_WATCH_TIME_PER_IMPRESSION = 'AverageWatchTimePerImpression';

    public const AD_STRENGTH = 'AdStrength';

    public const AD_STRENGTH_ACTION_ITEMS = 'AdStrengthActionItems';

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
            self::ACCOUNT_NUMBER,
            self::ACCOUNT_ID,
            self::TIME_PERIOD,
            self::CAMPAIGN_NAME,
            self::CAMPAIGN_ID,
            self::AD_GROUP_NAME,
            self::AD_ID,
            self::AD_GROUP_ID,
            self::AD_TITLE,
            self::AD_DESCRIPTION,
            self::AD_DESCRIPTION2,
            self::AD_TYPE,
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
            self::DESTINATION_URL,
            self::DEVICE_TYPE,
            self::LANGUAGE,
            self::DISPLAY_URL,
            self::AD_STATUS,
            self::NETWORK,
            self::TOP_VS_OTHER,
            self::BID_MATCH_TYPE,
            self::DELIVERED_MATCH_TYPE,
            self::DEVICE_OS,
            self::ASSISTS,
            self::REVENUE,
            self::RETURN_ON_AD_SPEND,
            self::COST_PER_ASSIST,
            self::REVENUE_PER_CONVERSION,
            self::REVENUE_PER_ASSIST,
            self::TRACKING_TEMPLATE,
            self::CUSTOM_PARAMETERS,
            self::FINAL_URL,
            self::FINAL_MOBILE_URL,
            self::FINAL_APP_URL,
            self::ACCOUNT_STATUS,
            self::CAMPAIGN_STATUS,
            self::AD_GROUP_STATUS,
            self::TITLE_PART1,
            self::TITLE_PART2,
            self::TITLE_PART3,
            self::HEADLINE,
            self::LONG_HEADLINE,
            self::BUSINESS_NAME,
            self::PATH1,
            self::PATH2,
            self::AD_LABELS,
            self::CUSTOMER_ID,
            self::CUSTOMER_NAME,
            self::CAMPAIGN_TYPE,
            self::BASE_CAMPAIGN_ID,
            self::ALL_CONVERSIONS,
            self::ALL_REVENUE,
            self::ALL_CONVERSION_RATE,
            self::ALL_COST_PER_CONVERSION,
            self::ALL_RETURN_ON_AD_SPEND,
            self::ALL_REVENUE_PER_CONVERSION,
            self::FINAL_URL_SUFFIX,
            self::VIEW_THROUGH_CONVERSIONS,
            self::GOAL,
            self::GOAL_TYPE,
            self::ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT,
            self::TOP_IMPRESSION_RATE_PERCENT,
            self::AVERAGE_CPM,
            self::CONVERSIONS_QUALIFIED,
            self::ALL_CONVERSIONS_QUALIFIED,
            self::VIEW_THROUGH_CONVERSIONS_QUALIFIED,
            self::VIEW_THROUGH_REVENUE,
            self::VIDEO_VIEWS,
            self::VIEW_THROUGH_RATE,
            self::AVERAGE_CPV,
            self::VIDEO_VIEWS_AT25_PERCENT,
            self::VIDEO_VIEWS_AT50_PERCENT,
            self::VIDEO_VIEWS_AT75_PERCENT,
            self::COMPLETED_VIDEO_VIEWS,
            self::VIDEO_COMPLETION_RATE,
            self::TOTAL_WATCH_TIME_IN_MS,
            self::AVERAGE_WATCH_TIME_PER_VIDEO_VIEW,
            self::AVERAGE_WATCH_TIME_PER_IMPRESSION,
            self::AD_STRENGTH,
            self::AD_STRENGTH_ACTION_ITEMS,
            self::GOAL_ID
        ];
    }
}
