<?php
/**
 * ShareOfVoiceReportColumn
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

class ShareOfVoiceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const ACCOUNT_NAME = 'AccountName';

    public const TIME_PERIOD = 'TimePeriod';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const KEYWORD = 'Keyword';

    public const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';

    public const BID_MATCH_TYPE = 'BidMatchType';

    public const LANGUAGE = 'Language';

    public const ACCOUNT_NUMBER = 'AccountNumber';

    public const ACCOUNT_ID = 'AccountId';

    public const KEYWORD_ID = 'KeywordId';

    public const AD_GROUP_ID = 'AdGroupId';

    public const CAMPAIGN_ID = 'CampaignId';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const CTR = 'Ctr';

    public const AVERAGE_CPC = 'AverageCpc';

    public const SPEND = 'Spend';

    public const AVERAGE_POSITION = 'AveragePosition';

    public const IMPRESSION_SHARE_PERCENT = 'ImpressionSharePercent';

    public const IMPRESSION_LOST_TO_BUDGET_PERCENT = 'ImpressionLostToBudgetPercent';

    public const IMPRESSION_LOST_TO_RANK_AGG_PERCENT = 'ImpressionLostToRankAggPercent';

    public const CURRENT_MAX_CPC = 'CurrentMaxCpc';

    public const QUALITY_SCORE = 'QualityScore';

    public const EXPECTED_CTR = 'ExpectedCtr';

    public const AD_RELEVANCE = 'AdRelevance';

    public const LANDING_PAGE_EXPERIENCE = 'LandingPageExperience';

    public const CONVERSIONS = 'Conversions';

    public const CONVERSION_RATE = 'ConversionRate';

    public const COST_PER_CONVERSION = 'CostPerConversion';

    public const AD_DISTRIBUTION = 'AdDistribution';

    public const CLICK_SHARE_PERCENT = 'ClickSharePercent';

    public const DEVICE_TYPE = 'DeviceType';

    public const NETWORK = 'Network';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const CAMPAIGN_STATUS = 'CampaignStatus';

    public const AD_GROUP_STATUS = 'AdGroupStatus';

    public const KEYWORD_STATUS = 'KeywordStatus';

    public const BID_STRATEGY_TYPE = 'BidStrategyType';

    public const KEYWORD_LABELS = 'KeywordLabels';

    public const EXACT_MATCH_IMPRESSION_SHARE_PERCENT = 'ExactMatchImpressionSharePercent';

    public const TOP_IMPRESSION_SHARE_LOST_TO_RANK_PERCENT = 'TopImpressionShareLostToRankPercent';

    public const TOP_IMPRESSION_SHARE_LOST_TO_BUDGET_PERCENT = 'TopImpressionShareLostToBudgetPercent';

    public const ABSOLUTE_TOP_IMPRESSION_SHARE_LOST_TO_RANK_PERCENT = 'AbsoluteTopImpressionShareLostToRankPercent';

    public const ABSOLUTE_TOP_IMPRESSION_SHARE_LOST_TO_BUDGET_PERCENT = 'AbsoluteTopImpressionShareLostToBudgetPercent';

    public const ABSOLUTE_TOP_IMPRESSION_SHARE_PERCENT = 'AbsoluteTopImpressionSharePercent';

    public const TOP_IMPRESSION_SHARE_PERCENT = 'TopImpressionSharePercent';

    public const ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT = 'AbsoluteTopImpressionRatePercent';

    public const TOP_IMPRESSION_RATE_PERCENT = 'TopImpressionRatePercent';

    public const BASE_CAMPAIGN_ID = 'BaseCampaignId';

    public const ALL_CONVERSIONS = 'AllConversions';

    public const ALL_CONVERSION_RATE = 'AllConversionRate';

    public const ALL_COST_PER_CONVERSION = 'AllCostPerConversion';

    public const VIEW_THROUGH_CONVERSIONS = 'ViewThroughConversions';

    public const GOAL = 'Goal';

    public const GOAL_TYPE = 'GoalType';

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
            self::TIME_PERIOD,
            self::CAMPAIGN_NAME,
            self::AD_GROUP_NAME,
            self::KEYWORD,
            self::DELIVERED_MATCH_TYPE,
            self::BID_MATCH_TYPE,
            self::LANGUAGE,
            self::ACCOUNT_NUMBER,
            self::ACCOUNT_ID,
            self::KEYWORD_ID,
            self::AD_GROUP_ID,
            self::CAMPAIGN_ID,
            self::IMPRESSIONS,
            self::CLICKS,
            self::CTR,
            self::AVERAGE_CPC,
            self::SPEND,
            self::AVERAGE_POSITION,
            self::IMPRESSION_SHARE_PERCENT,
            self::IMPRESSION_LOST_TO_BUDGET_PERCENT,
            self::IMPRESSION_LOST_TO_RANK_AGG_PERCENT,
            self::CURRENT_MAX_CPC,
            self::QUALITY_SCORE,
            self::EXPECTED_CTR,
            self::AD_RELEVANCE,
            self::LANDING_PAGE_EXPERIENCE,
            self::CONVERSIONS,
            self::CONVERSION_RATE,
            self::COST_PER_CONVERSION,
            self::AD_DISTRIBUTION,
            self::CLICK_SHARE_PERCENT,
            self::DEVICE_TYPE,
            self::NETWORK,
            self::ACCOUNT_STATUS,
            self::CAMPAIGN_STATUS,
            self::AD_GROUP_STATUS,
            self::KEYWORD_STATUS,
            self::BID_STRATEGY_TYPE,
            self::KEYWORD_LABELS,
            self::EXACT_MATCH_IMPRESSION_SHARE_PERCENT,
            self::TOP_IMPRESSION_SHARE_LOST_TO_RANK_PERCENT,
            self::TOP_IMPRESSION_SHARE_LOST_TO_BUDGET_PERCENT,
            self::ABSOLUTE_TOP_IMPRESSION_SHARE_LOST_TO_RANK_PERCENT,
            self::ABSOLUTE_TOP_IMPRESSION_SHARE_LOST_TO_BUDGET_PERCENT,
            self::ABSOLUTE_TOP_IMPRESSION_SHARE_PERCENT,
            self::TOP_IMPRESSION_SHARE_PERCENT,
            self::ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT,
            self::TOP_IMPRESSION_RATE_PERCENT,
            self::BASE_CAMPAIGN_ID,
            self::ALL_CONVERSIONS,
            self::ALL_CONVERSION_RATE,
            self::ALL_COST_PER_CONVERSION,
            self::VIEW_THROUGH_CONVERSIONS,
            self::GOAL,
            self::GOAL_TYPE,
            self::AVERAGE_CPM,
            self::CONVERSIONS_QUALIFIED,
            self::ALL_CONVERSIONS_QUALIFIED,
            self::VIEW_THROUGH_CONVERSIONS_QUALIFIED,
            self::VIEW_THROUGH_REVENUE
        ];
    }
}
