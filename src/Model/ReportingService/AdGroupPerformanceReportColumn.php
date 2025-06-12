<?php
/**
 * AdGroupPerformanceReportColumn
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

class AdGroupPerformanceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_NUMBER = 'AccountNumber';

    public const ACCOUNT_ID = 'AccountId';

    public const TIME_PERIOD = 'TimePeriod';

    public const STATUS = 'Status';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CAMPAIGN_ID = 'CampaignId';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const AD_GROUP_ID = 'AdGroupId';

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

    public const DEVICE_OS = 'DeviceOS';

    public const IMPRESSION_SHARE_PERCENT = 'ImpressionSharePercent';

    public const IMPRESSION_LOST_TO_BUDGET_PERCENT = 'ImpressionLostToBudgetPercent';

    public const IMPRESSION_LOST_TO_RANK_AGG_PERCENT = 'ImpressionLostToRankAggPercent';

    public const QUALITY_SCORE = 'QualityScore';

    public const EXPECTED_CTR = 'ExpectedCtr';

    public const AD_RELEVANCE = 'AdRelevance';

    public const LANDING_PAGE_EXPERIENCE = 'LandingPageExperience';

    public const HISTORICAL_QUALITY_SCORE = 'HistoricalQualityScore';

    public const HISTORICAL_EXPECTED_CTR = 'HistoricalExpectedCtr';

    public const HISTORICAL_AD_RELEVANCE = 'HistoricalAdRelevance';

    public const HISTORICAL_LANDING_PAGE_EXPERIENCE = 'HistoricalLandingPageExperience';

    public const PHONE_IMPRESSIONS = 'PhoneImpressions';

    public const PHONE_CALLS = 'PhoneCalls';

    public const PTR = 'Ptr';

    public const NETWORK = 'Network';

    public const TOP_VS_OTHER = 'TopVsOther';

    public const BID_MATCH_TYPE = 'BidMatchType';

    public const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';

    public const ASSISTS = 'Assists';

    public const REVENUE = 'Revenue';

    public const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';

    public const COST_PER_ASSIST = 'CostPerAssist';

    public const REVENUE_PER_CONVERSION = 'RevenuePerConversion';

    public const REVENUE_PER_ASSIST = 'RevenuePerAssist';

    public const TRACKING_TEMPLATE = 'TrackingTemplate';

    public const CUSTOM_PARAMETERS = 'CustomParameters';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const CAMPAIGN_STATUS = 'CampaignStatus';

    public const AD_GROUP_LABELS = 'AdGroupLabels';

    public const EXACT_MATCH_IMPRESSION_SHARE_PERCENT = 'ExactMatchImpressionSharePercent';

    public const CUSTOMER_ID = 'CustomerId';

    public const CUSTOMER_NAME = 'CustomerName';

    public const CLICK_SHARE_PERCENT = 'ClickSharePercent';

    public const ABSOLUTE_TOP_IMPRESSION_SHARE_PERCENT = 'AbsoluteTopImpressionSharePercent';

    public const FINAL_URL_SUFFIX = 'FinalUrlSuffix';

    public const CAMPAIGN_TYPE = 'CampaignType';

    public const TOP_IMPRESSION_SHARE_LOST_TO_RANK_PERCENT = 'TopImpressionShareLostToRankPercent';

    public const TOP_IMPRESSION_SHARE_LOST_TO_BUDGET_PERCENT = 'TopImpressionShareLostToBudgetPercent';

    public const ABSOLUTE_TOP_IMPRESSION_SHARE_LOST_TO_RANK_PERCENT = 'AbsoluteTopImpressionShareLostToRankPercent';

    public const ABSOLUTE_TOP_IMPRESSION_SHARE_LOST_TO_BUDGET_PERCENT = 'AbsoluteTopImpressionShareLostToBudgetPercent';

    public const TOP_IMPRESSION_SHARE_PERCENT = 'TopImpressionSharePercent';

    public const ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT = 'AbsoluteTopImpressionRatePercent';

    public const TOP_IMPRESSION_RATE_PERCENT = 'TopImpressionRatePercent';

    public const BASE_CAMPAIGN_ID = 'BaseCampaignId';

    public const ALL_CONVERSIONS = 'AllConversions';

    public const ALL_REVENUE = 'AllRevenue';

    public const ALL_CONVERSION_RATE = 'AllConversionRate';

    public const ALL_COST_PER_CONVERSION = 'AllCostPerConversion';

    public const ALL_RETURN_ON_AD_SPEND = 'AllReturnOnAdSpend';

    public const ALL_REVENUE_PER_CONVERSION = 'AllRevenuePerConversion';

    public const VIEW_THROUGH_CONVERSIONS = 'ViewThroughConversions';

    public const GOAL = 'Goal';

    public const GOAL_TYPE = 'GoalType';

    public const AUDIENCE_IMPRESSION_SHARE_PERCENT = 'AudienceImpressionSharePercent';

    public const AUDIENCE_IMPRESSION_LOST_TO_RANK_PERCENT = 'AudienceImpressionLostToRankPercent';

    public const AUDIENCE_IMPRESSION_LOST_TO_BUDGET_PERCENT = 'AudienceImpressionLostToBudgetPercent';

    public const RELATIVE_CTR = 'RelativeCtr';

    public const AD_GROUP_TYPE = 'AdGroupType';

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

    public const SALES = 'Sales';

    public const COST_PER_SALE = 'CostPerSale';

    public const REVENUE_PER_SALE = 'RevenuePerSale';

    public const INSTALLS = 'Installs';

    public const COST_PER_INSTALL = 'CostPerInstall';

    public const REVENUE_PER_INSTALL = 'RevenuePerInstall';

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
            self::STATUS,
            self::CAMPAIGN_NAME,
            self::CAMPAIGN_ID,
            self::AD_GROUP_NAME,
            self::AD_GROUP_ID,
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
            self::DEVICE_OS,
            self::IMPRESSION_SHARE_PERCENT,
            self::IMPRESSION_LOST_TO_BUDGET_PERCENT,
            self::IMPRESSION_LOST_TO_RANK_AGG_PERCENT,
            self::QUALITY_SCORE,
            self::EXPECTED_CTR,
            self::AD_RELEVANCE,
            self::LANDING_PAGE_EXPERIENCE,
            self::HISTORICAL_QUALITY_SCORE,
            self::HISTORICAL_EXPECTED_CTR,
            self::HISTORICAL_AD_RELEVANCE,
            self::HISTORICAL_LANDING_PAGE_EXPERIENCE,
            self::PHONE_IMPRESSIONS,
            self::PHONE_CALLS,
            self::PTR,
            self::NETWORK,
            self::TOP_VS_OTHER,
            self::BID_MATCH_TYPE,
            self::DELIVERED_MATCH_TYPE,
            self::ASSISTS,
            self::REVENUE,
            self::RETURN_ON_AD_SPEND,
            self::COST_PER_ASSIST,
            self::REVENUE_PER_CONVERSION,
            self::REVENUE_PER_ASSIST,
            self::TRACKING_TEMPLATE,
            self::CUSTOM_PARAMETERS,
            self::ACCOUNT_STATUS,
            self::CAMPAIGN_STATUS,
            self::AD_GROUP_LABELS,
            self::EXACT_MATCH_IMPRESSION_SHARE_PERCENT,
            self::CUSTOMER_ID,
            self::CUSTOMER_NAME,
            self::CLICK_SHARE_PERCENT,
            self::ABSOLUTE_TOP_IMPRESSION_SHARE_PERCENT,
            self::FINAL_URL_SUFFIX,
            self::CAMPAIGN_TYPE,
            self::TOP_IMPRESSION_SHARE_LOST_TO_RANK_PERCENT,
            self::TOP_IMPRESSION_SHARE_LOST_TO_BUDGET_PERCENT,
            self::ABSOLUTE_TOP_IMPRESSION_SHARE_LOST_TO_RANK_PERCENT,
            self::ABSOLUTE_TOP_IMPRESSION_SHARE_LOST_TO_BUDGET_PERCENT,
            self::TOP_IMPRESSION_SHARE_PERCENT,
            self::ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT,
            self::TOP_IMPRESSION_RATE_PERCENT,
            self::BASE_CAMPAIGN_ID,
            self::ALL_CONVERSIONS,
            self::ALL_REVENUE,
            self::ALL_CONVERSION_RATE,
            self::ALL_COST_PER_CONVERSION,
            self::ALL_RETURN_ON_AD_SPEND,
            self::ALL_REVENUE_PER_CONVERSION,
            self::VIEW_THROUGH_CONVERSIONS,
            self::GOAL,
            self::GOAL_TYPE,
            self::AUDIENCE_IMPRESSION_SHARE_PERCENT,
            self::AUDIENCE_IMPRESSION_LOST_TO_RANK_PERCENT,
            self::AUDIENCE_IMPRESSION_LOST_TO_BUDGET_PERCENT,
            self::RELATIVE_CTR,
            self::AD_GROUP_TYPE,
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
            self::SALES,
            self::COST_PER_SALE,
            self::REVENUE_PER_SALE,
            self::INSTALLS,
            self::COST_PER_INSTALL,
            self::REVENUE_PER_INSTALL,
            self::GOAL_ID
        ];
    }
}
