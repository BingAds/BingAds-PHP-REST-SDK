<?php
/**
 * CampaignAdditionalField
 * CampaignManagementService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CampaignManagementService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CampaignManagementService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class CampaignAdditionalField
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const AD_SCHEDULE_USE_SEARCHER_TIME_ZONE = 'AdScheduleUseSearcherTimeZone';

    public const MAX_CONVERSION_VALUE_BIDDING_SCHEME = 'MaxConversionValueBiddingScheme';

    public const TARGET_IMPRESSION_SHARE_BIDDING_SCHEME = 'TargetImpressionShareBiddingScheme';

    public const TARGET_SETTING = 'TargetSetting';

    public const BID_STRATEGY_ID = 'BidStrategyId';

    public const CPV_CPM_BIDDING_SCHEME = 'CpvCpmBiddingScheme';

    public const DYNAMIC_FEED_SETTING = 'DynamicFeedSetting';

    public const MULTIMEDIA_ADS_BID_ADJUSTMENT = 'MultimediaAdsBidAdjustment';

    public const VERIFIED_TRACKING_SETTING = 'VerifiedTrackingSetting';

    public const DYNAMIC_DESCRIPTION_SETTING = 'DynamicDescriptionSetting';

    public const DISCLAIMER_SETTING = 'DisclaimerSetting';

    public const CAMPAIGN_CONVERSION_GOAL = 'CampaignConversionGoal';

    public const TARGET_CPA_IN_MAX_CONVERSION = 'TargetCpaInMaxConversion';

    public const RESPONSIVE_SEARCH_ADS_SETTING = 'ResponsiveSearchAdsSetting';

    public const COST_PER_SALE_BIDDING_SCHEME = 'CostPerSaleBiddingScheme';

    public const SHOPPING_SETTING_SHOPPABLE_ADS_ENABLED = 'ShoppingSettingShoppableAdsEnabled';

    public const SHOPPING_SETTING_FEED_LABEL = 'ShoppingSettingFeedLabel';

    public const CALL_TO_ACTION_SETTING = 'CallToActionSetting';

    public const PAGE_FEED_IN_PERFORMANCE_MAX_SETTINGS = 'PageFeedInPerformanceMaxSettings';

    public const DEAL_IDS = 'DealIds';

    public const AUTO_GENERATED_TEXT_AND_IMAGE_OPT_OUT_IN_PERFORMANCE_MAX_SETTINGS = 'AutoGeneratedTextAndImageOptOutInPerformanceMaxSettings';

    public const COST_PER_SALE_OPT_OUT_IN_PERFORMANCE_MAX_SETTINGS = 'CostPerSaleOptOutInPerformanceMaxSettings';

    public const VANITY_PHARMA_SETTING = 'VanityPharmaSetting';

    public const MANUAL_CPI = 'ManualCpi';

    public const IS_DEAL_CAMPAIGN = 'IsDealCampaign';

    public const APP_SETTING = 'AppSetting';

    public const CALL_TO_ACTION_OPT_OUT = 'CallToActionOptOut';

    public const THIRD_PARTY_MEASUREMENT_SETTING = 'ThirdPartyMeasurementSetting';

    public const MANUAL_CPC = 'ManualCpc';

    public const NEW_CUSTOMER_ACQUISITION_GOAL_SETTING = 'NewCustomerAcquisitionGoalSetting';

    public const LIFETIME_BUDGET_FIELDS = 'LifetimeBudgetFields';

    public const MAX_CONVERSION_VALUE_WITH_MAX_CPC = 'MaxConversionValueWithMaxCpc';


    // If this is an enum with flags true, you can combine multiple values with a comma i.e "value1,value2"
    private static bool $isFlags = true;
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
            self::NONE,
            self::AD_SCHEDULE_USE_SEARCHER_TIME_ZONE,
            self::MAX_CONVERSION_VALUE_BIDDING_SCHEME,
            self::TARGET_IMPRESSION_SHARE_BIDDING_SCHEME,
            self::TARGET_SETTING,
            self::BID_STRATEGY_ID,
            self::CPV_CPM_BIDDING_SCHEME,
            self::DYNAMIC_FEED_SETTING,
            self::MULTIMEDIA_ADS_BID_ADJUSTMENT,
            self::VERIFIED_TRACKING_SETTING,
            self::DYNAMIC_DESCRIPTION_SETTING,
            self::DISCLAIMER_SETTING,
            self::CAMPAIGN_CONVERSION_GOAL,
            self::TARGET_CPA_IN_MAX_CONVERSION,
            self::RESPONSIVE_SEARCH_ADS_SETTING,
            self::COST_PER_SALE_BIDDING_SCHEME,
            self::SHOPPING_SETTING_SHOPPABLE_ADS_ENABLED,
            self::SHOPPING_SETTING_FEED_LABEL,
            self::CALL_TO_ACTION_SETTING,
            self::PAGE_FEED_IN_PERFORMANCE_MAX_SETTINGS,
            self::DEAL_IDS,
            self::AUTO_GENERATED_TEXT_AND_IMAGE_OPT_OUT_IN_PERFORMANCE_MAX_SETTINGS,
            self::COST_PER_SALE_OPT_OUT_IN_PERFORMANCE_MAX_SETTINGS,
            self::VANITY_PHARMA_SETTING,
            self::MANUAL_CPI,
            self::IS_DEAL_CAMPAIGN,
            self::APP_SETTING,
            self::CALL_TO_ACTION_OPT_OUT,
            self::THIRD_PARTY_MEASUREMENT_SETTING,
            self::MANUAL_CPC,
            self::NEW_CUSTOMER_ACQUISITION_GOAL_SETTING,
            self::LIFETIME_BUDGET_FIELDS,
            self::MAX_CONVERSION_VALUE_WITH_MAX_CPC
        ];
    }
}
