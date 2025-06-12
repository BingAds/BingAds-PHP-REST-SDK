<?php
/**
 * PerformanceInsightsMessageTemplateId
 * AdInsightService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\AdInsightService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\AdInsightService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class PerformanceInsightsMessageTemplateId
{
    /**
     * Possible values of this enum
     */
    public const FLUX_IMPR_INCREASE_ACCT = 'FluxImprIncreaseAcct';

    public const FLUX_IMPR_DECREASE_ACCT = 'FluxImprDecreaseAcct';

    public const FLUX_IMPR_INCREASE_INFINITY_ACCT = 'FluxImprIncreaseInfinityAcct';

    public const FLUX_IMPR_INCREASE_ACCT_PREV_DAY = 'FluxImprIncreaseAcctPrevDay';

    public const FLUX_IMPR_DECREASE_ACCT_PREV_DAY = 'FluxImprDecreaseAcctPrevDay';

    public const FLUX_IMPR_INCREASE_INFINITY_ACCT_PREV_DAY = 'FluxImprIncreaseInfinityAcctPrevDay';

    public const FLUX_CLICK_INCREASE_ACCT = 'FluxClickIncreaseAcct';

    public const FLUX_CLICK_DECREASE_ACCT = 'FluxClickDecreaseAcct';

    public const FLUX_CLICK_INCREASE_INFINITY_ACCT = 'FluxClickIncreaseInfinityAcct';

    public const FLUX_CLICK_INCREASE_ACCT_PREV_DAY = 'FluxClickIncreaseAcctPrevDay';

    public const FLUX_CLICK_DECREASE_ACCT_PREV_DAY = 'FluxClickDecreaseAcctPrevDay';

    public const FLUX_CLICK_INCREASE_INFINITY_ACCT_PREV_DAY = 'FluxClickIncreaseInfinityAcctPrevDay';

    public const FLUX_COST_INCREASE_ACCT = 'FluxCostIncreaseAcct';

    public const FLUX_COST_DECREASE_ACCT = 'FluxCostDecreaseAcct';

    public const FLUX_COST_INCREASE_INFINITY_ACCT = 'FluxCostIncreaseInfinityAcct';

    public const FLUX_COST_INCREASE_ACCT_PREV_DAY = 'FluxCostIncreaseAcctPrevDay';

    public const FLUX_COST_DECREASE_ACCT_PREV_DAY = 'FluxCostDecreaseAcctPrevDay';

    public const FLUX_COST_INCREASE_INFINITY_ACCT_PREV_DAY = 'FluxCostIncreaseInfinityAcctPrevDay';

    public const FLUX_IMPR_INCREASE_CAMPAIGN = 'FluxImprIncreaseCampaign';

    public const FLUX_IMPR_DECREASE_CAMPAIGN = 'FluxImprDecreaseCampaign';

    public const FLUX_IMPR_INCREASE_INFINITY_CAMPAIGN = 'FluxImprIncreaseInfinityCampaign';

    public const FLUX_IMPR_INCREASE_CAMPAIGN_PREV_DAY = 'FluxImprIncreaseCampaignPrevDay';

    public const FLUX_IMPR_DECREASE_CAMPAIGN_PREV_DAY = 'FluxImprDecreaseCampaignPrevDay';

    public const FLUX_IMPR_INCREASE_INFINITY_CAMPAIGN_PREV_DAY = 'FluxImprIncreaseInfinityCampaignPrevDay';

    public const FLUX_CLICK_INCREASE_CAMPAIGN = 'FluxClickIncreaseCampaign';

    public const FLUX_CLICK_DECREASE_CAMPAIGN = 'FluxClickDecreaseCampaign';

    public const FLUX_CLICK_INCREASE_INFINITY_CAMPAIGN = 'FluxClickIncreaseInfinityCampaign';

    public const FLUX_CLICK_INCREASE_CAMPAIGN_PREV_DAY = 'FluxClickIncreaseCampaignPrevDay';

    public const FLUX_CLICK_DECREASE_CAMPAIGN_PREV_DAY = 'FluxClickDecreaseCampaignPrevDay';

    public const FLUX_CLICK_INCREASE_INFINITY_CAMPAIGN_PREV_DAY = 'FluxClickIncreaseInfinityCampaignPrevDay';

    public const FLUX_COST_INCREASE_CAMPAIGN = 'FluxCostIncreaseCampaign';

    public const FLUX_COST_DECREASE_CAMPAIGN = 'FluxCostDecreaseCampaign';

    public const FLUX_COST_INCREASE_INFINITY_CAMPAIGN = 'FluxCostIncreaseInfinityCampaign';

    public const FLUX_COST_INCREASE_CAMPAIGN_PREV_DAY = 'FluxCostIncreaseCampaignPrevDay';

    public const FLUX_COST_DECREASE_CAMPAIGN_PREV_DAY = 'FluxCostDecreaseCampaignPrevDay';

    public const FLUX_COST_INCREASE_INFINITY_CAMPAIGN_PREV_DAY = 'FluxCostIncreaseInfinityCampaignPrevDay';

    public const FLUX_CONVERSION_DECREASE_ACCT = 'FluxConversionDecreaseAcct';

    public const FLUX_CONVERSION_ZERO_ACCT = 'FluxConversionZeroAcct';

    public const RC_AUDIENCE_INCREASE = 'RCAudienceIncrease';

    public const RC_AUDIENCE_DECREASE = 'RCAudienceDecrease';

    public const RC_BID_INCREASE = 'RCBidIncrease';

    public const RC_BID_DECREASE = 'RCBidDecrease';

    public const RC_BUDGET_INCREASE = 'RCBudgetIncrease';

    public const RC_BUDGET_DECREASE = 'RCBudgetDecrease';

    public const RC_CLICK_INCREASE = 'RCClickIncrease';

    public const RC_CLICK_DECREASE = 'RCClickDecrease';

    public const RC_CONVERSION_GOAL_ISSUE = 'RCConversionGoalIssue';

    public const RC_DEVICE_TARGETING_BID_CHANGE = 'RCDeviceTargetingBidChange';

    public const RC_EDITORIAL_APPROVAL = 'RCEditorialApproval';

    public const RC_EDITORIAL_DISAPPROVAL = 'RCEditorialDisapproval';

    public const RC_ENTITY_ADDITION_WITH_COUNT = 'RCEntityAdditionWithCount';

    public const RC_ENTITY_DELETION_WITH_COUNT = 'RCEntityDeletionWithCount';

    public const RC_ENTITY_PAUSE_WITH_COUNT = 'RCEntityPauseWithCount';

    public const RC_ENTITY_UNPAUSE_WITH_COUNT = 'RCEntityUnpauseWithCount';

    public const RC_MORE_COMPETITIVE = 'RCMoreCompetitive';

    public const RC_NETWORK_LESS_RESTRICT = 'RCNetworkLessRestrict';

    public const RC_NETWORK_MORE_RESTRICT = 'RCNetworkMoreRestrict';

    public const RC_PAYMENT_ISSUE_INVOICE_ACCOUNT_PAUSED = 'RCPaymentIssueInvoiceAccountPaused';

    public const RC_PAYMENT_ISSUE_INVOICE_ACCOUNT_ON_HOLD = 'RCPaymentIssueInvoiceAccountOnHold';

    public const RC_PAYMENT_ISSUE_PREPAY_ACCOUNT_PAUSED = 'RCPaymentIssuePrepayAccountPaused';

    public const RC_PAYMENT_ISSUE_THRESHOLD_ACCOUNT_ON_HOLD = 'RCPaymentIssueThresholdAccountOnHold';

    public const RC_PAYMENT_ISSUE_YESTERDAY = 'RCPaymentIssueYesterday';

    public const RC_SEARCH_TERM_INCREASE = 'RCSearchTermIncrease';

    public const RC_SEARCH_TERM_INCREASE_CLICK = 'RCSearchTermIncreaseClick';

    public const RC_SEARCH_TERM_DECREASE = 'RCSearchTermDecrease';

    public const RC_SEARCH_TERM_DECREASE_CLICK = 'RCSearchTermDecreaseClick';

    public const RC_SEARCH_TERM_COMPETITION_INCREASE = 'RCSearchTermCompetitionIncrease';

    public const RC_SEARCH_TERM_COMPETITION_INCREASE_CLICK = 'RCSearchTermCompetitionIncreaseClick';

    public const RC_SEARCH_TERM_COMPETITION_DECREASE = 'RCSearchTermCompetitionDecrease';

    public const RC_SEARCH_TERM_COMPETITION_DECREASE_CLICK = 'RCSearchTermCompetitionDecreaseClick';

    public const RC_SINGLE_CAMPAIGN_ADDITION = 'RCSingleCampaignAddition';

    public const RC_SINGLE_CAMPAIGN_PAUSE = 'RCSingleCampaignPause';

    public const RC_SINGLE_CAMPAIGN_UNPAUSE = 'RCSingleCampaignUnpause';

    public const RC_SINGLE_CAMPAIGN_BUDGET_INCREASE = 'RCSingleCampaignBudgetIncrease';

    public const RC_SINGLE_CAMPAIGN_BUDGET_DECREASE = 'RCSingleCampaignBudgetDecrease';

    public const RC_SINGLE_CAMPAIGN_DEVICE_TARGETING_BID_CHANGE = 'RCSingleCampaignDeviceTargetingBidChange';

    public const RC_STRONGER_COMPETITOR_AD_QUALITY = 'RCStrongerCompetitorAdQuality';

    public const RC_STRONGER_COMPETITOR_BID = 'RCStrongerCompetitorBid';

    public const RC_SYND_TRAFFIC_INCREASE = 'RCSyndTrafficIncrease';

    public const RC_SYND_TRAFFIC_DECREASE = 'RCSyndTrafficDecrease';

    public const ACT_ADS_OPPR = 'ActAdsOppr';

    public const ACT_ALL_AVAILABLE_OPPR = 'ActAllAvailableOppr';

    public const ACT_BM_ADOPTION_OPPR = 'ActBMAdoptionOppr';

    public const ACT_BMM_KEYWORD_OPPR = 'ActBMMKeywordOppr';

    public const ACT_CAMPAIGN_CONTEXT_KEYWORD_OPPR = 'ActCampaignContextKeywordOppr';

    public const ACT_CHECK_PUBLISHER_WEBSITE = 'ActCheckPublisherWebsite';

    public const ACT_COMPETITION_AUCTION_INSIGHT = 'ActCompetitionAuctionInsight';

    public const ACT_COMPETITIVE_BUDGET_OPPR = 'ActCompetitiveBudgetOppr';

    public const ACT_COMPETITIVE_KEYWORD_OPPR = 'ActCompetitiveKeywordOppr';

    public const ACT_COMPETITIVE_LOCATION_TARGET_OPPR = 'ActCompetitiveLocationTargetOppr';

    public const ACT_CTR_QUALITY_BUNDLE = 'ActCTRQualityBundle';

    public const ACT_EDITORIAL_REVIEW_PROCESS = 'ActEditorialReviewProcess';

    public const ACT_FIX_CONVERSION_GOAL_SETTING_OPPR = 'ActFixConversionGoalSettingOppr';

    public const ACT_FIX_CONVERSION_TRACKING_OPPR = 'ActFixConversionTrackingOppr';

    public const ACT_GENERAL_BUDGET_OPPR = 'ActGeneralBudgetOppr';

    public const ACT_NEW_CONVERSION_GOAL_OPPR = 'ActNewConversionGoalOppr';

    public const ACT_INVOICE_ACCOUNT_PAUSED = 'ActInvoiceAccountPaused';

    public const ACT_INVOICE_ACCOUNT_ON_HOLD = 'ActInvoiceAccountOnHold';

    public const ACT_PREPAY_ACCOUNT_PAUSED = 'ActPrepayAccountPaused';

    public const ACT_REALLOCATE_BUDGET_OPPR = 'ActReallocateBudgetOppr';

    public const ACT_REPAIR_KEYWORDS_OPPR = 'ActRepairKeywordsOppr';

    public const ACT_RSA_OPPR = 'ActRSAOppr';

    public const ACT_SEARCH_TERM = 'ActSearchTerm';

    public const ACT_SETUP_CONVERSION_TRACKING_OPPR = 'ActSetupConversionTrackingOppr';

    public const ACT_SITE_LINK_OPPR = 'ActSiteLinkOppr';

    public const ACT_THRESHOLD_ACCOUNT_ON_HOLD = 'ActThresholdAccountOnHold';

    public const ACT_WEBSITE_EXCLUSION = 'ActWebsiteExclusion';


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
            self::FLUX_IMPR_INCREASE_ACCT,
            self::FLUX_IMPR_DECREASE_ACCT,
            self::FLUX_IMPR_INCREASE_INFINITY_ACCT,
            self::FLUX_IMPR_INCREASE_ACCT_PREV_DAY,
            self::FLUX_IMPR_DECREASE_ACCT_PREV_DAY,
            self::FLUX_IMPR_INCREASE_INFINITY_ACCT_PREV_DAY,
            self::FLUX_CLICK_INCREASE_ACCT,
            self::FLUX_CLICK_DECREASE_ACCT,
            self::FLUX_CLICK_INCREASE_INFINITY_ACCT,
            self::FLUX_CLICK_INCREASE_ACCT_PREV_DAY,
            self::FLUX_CLICK_DECREASE_ACCT_PREV_DAY,
            self::FLUX_CLICK_INCREASE_INFINITY_ACCT_PREV_DAY,
            self::FLUX_COST_INCREASE_ACCT,
            self::FLUX_COST_DECREASE_ACCT,
            self::FLUX_COST_INCREASE_INFINITY_ACCT,
            self::FLUX_COST_INCREASE_ACCT_PREV_DAY,
            self::FLUX_COST_DECREASE_ACCT_PREV_DAY,
            self::FLUX_COST_INCREASE_INFINITY_ACCT_PREV_DAY,
            self::FLUX_IMPR_INCREASE_CAMPAIGN,
            self::FLUX_IMPR_DECREASE_CAMPAIGN,
            self::FLUX_IMPR_INCREASE_INFINITY_CAMPAIGN,
            self::FLUX_IMPR_INCREASE_CAMPAIGN_PREV_DAY,
            self::FLUX_IMPR_DECREASE_CAMPAIGN_PREV_DAY,
            self::FLUX_IMPR_INCREASE_INFINITY_CAMPAIGN_PREV_DAY,
            self::FLUX_CLICK_INCREASE_CAMPAIGN,
            self::FLUX_CLICK_DECREASE_CAMPAIGN,
            self::FLUX_CLICK_INCREASE_INFINITY_CAMPAIGN,
            self::FLUX_CLICK_INCREASE_CAMPAIGN_PREV_DAY,
            self::FLUX_CLICK_DECREASE_CAMPAIGN_PREV_DAY,
            self::FLUX_CLICK_INCREASE_INFINITY_CAMPAIGN_PREV_DAY,
            self::FLUX_COST_INCREASE_CAMPAIGN,
            self::FLUX_COST_DECREASE_CAMPAIGN,
            self::FLUX_COST_INCREASE_INFINITY_CAMPAIGN,
            self::FLUX_COST_INCREASE_CAMPAIGN_PREV_DAY,
            self::FLUX_COST_DECREASE_CAMPAIGN_PREV_DAY,
            self::FLUX_COST_INCREASE_INFINITY_CAMPAIGN_PREV_DAY,
            self::FLUX_CONVERSION_DECREASE_ACCT,
            self::FLUX_CONVERSION_ZERO_ACCT,
            self::RC_AUDIENCE_INCREASE,
            self::RC_AUDIENCE_DECREASE,
            self::RC_BID_INCREASE,
            self::RC_BID_DECREASE,
            self::RC_BUDGET_INCREASE,
            self::RC_BUDGET_DECREASE,
            self::RC_CLICK_INCREASE,
            self::RC_CLICK_DECREASE,
            self::RC_CONVERSION_GOAL_ISSUE,
            self::RC_DEVICE_TARGETING_BID_CHANGE,
            self::RC_EDITORIAL_APPROVAL,
            self::RC_EDITORIAL_DISAPPROVAL,
            self::RC_ENTITY_ADDITION_WITH_COUNT,
            self::RC_ENTITY_DELETION_WITH_COUNT,
            self::RC_ENTITY_PAUSE_WITH_COUNT,
            self::RC_ENTITY_UNPAUSE_WITH_COUNT,
            self::RC_MORE_COMPETITIVE,
            self::RC_NETWORK_LESS_RESTRICT,
            self::RC_NETWORK_MORE_RESTRICT,
            self::RC_PAYMENT_ISSUE_INVOICE_ACCOUNT_PAUSED,
            self::RC_PAYMENT_ISSUE_INVOICE_ACCOUNT_ON_HOLD,
            self::RC_PAYMENT_ISSUE_PREPAY_ACCOUNT_PAUSED,
            self::RC_PAYMENT_ISSUE_THRESHOLD_ACCOUNT_ON_HOLD,
            self::RC_PAYMENT_ISSUE_YESTERDAY,
            self::RC_SEARCH_TERM_INCREASE,
            self::RC_SEARCH_TERM_INCREASE_CLICK,
            self::RC_SEARCH_TERM_DECREASE,
            self::RC_SEARCH_TERM_DECREASE_CLICK,
            self::RC_SEARCH_TERM_COMPETITION_INCREASE,
            self::RC_SEARCH_TERM_COMPETITION_INCREASE_CLICK,
            self::RC_SEARCH_TERM_COMPETITION_DECREASE,
            self::RC_SEARCH_TERM_COMPETITION_DECREASE_CLICK,
            self::RC_SINGLE_CAMPAIGN_ADDITION,
            self::RC_SINGLE_CAMPAIGN_PAUSE,
            self::RC_SINGLE_CAMPAIGN_UNPAUSE,
            self::RC_SINGLE_CAMPAIGN_BUDGET_INCREASE,
            self::RC_SINGLE_CAMPAIGN_BUDGET_DECREASE,
            self::RC_SINGLE_CAMPAIGN_DEVICE_TARGETING_BID_CHANGE,
            self::RC_STRONGER_COMPETITOR_AD_QUALITY,
            self::RC_STRONGER_COMPETITOR_BID,
            self::RC_SYND_TRAFFIC_INCREASE,
            self::RC_SYND_TRAFFIC_DECREASE,
            self::ACT_ADS_OPPR,
            self::ACT_ALL_AVAILABLE_OPPR,
            self::ACT_BM_ADOPTION_OPPR,
            self::ACT_BMM_KEYWORD_OPPR,
            self::ACT_CAMPAIGN_CONTEXT_KEYWORD_OPPR,
            self::ACT_CHECK_PUBLISHER_WEBSITE,
            self::ACT_COMPETITION_AUCTION_INSIGHT,
            self::ACT_COMPETITIVE_BUDGET_OPPR,
            self::ACT_COMPETITIVE_KEYWORD_OPPR,
            self::ACT_COMPETITIVE_LOCATION_TARGET_OPPR,
            self::ACT_CTR_QUALITY_BUNDLE,
            self::ACT_EDITORIAL_REVIEW_PROCESS,
            self::ACT_FIX_CONVERSION_GOAL_SETTING_OPPR,
            self::ACT_FIX_CONVERSION_TRACKING_OPPR,
            self::ACT_GENERAL_BUDGET_OPPR,
            self::ACT_NEW_CONVERSION_GOAL_OPPR,
            self::ACT_INVOICE_ACCOUNT_PAUSED,
            self::ACT_INVOICE_ACCOUNT_ON_HOLD,
            self::ACT_PREPAY_ACCOUNT_PAUSED,
            self::ACT_REALLOCATE_BUDGET_OPPR,
            self::ACT_REPAIR_KEYWORDS_OPPR,
            self::ACT_RSA_OPPR,
            self::ACT_SEARCH_TERM,
            self::ACT_SETUP_CONVERSION_TRACKING_OPPR,
            self::ACT_SITE_LINK_OPPR,
            self::ACT_THRESHOLD_ACCOUNT_ON_HOLD,
            self::ACT_WEBSITE_EXCLUSION
        ];
    }
}
