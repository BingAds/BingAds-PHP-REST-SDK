<?php
/**
 * AccountPropertyName
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

class AccountPropertyName
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const TRACKING_URL_TEMPLATE = 'TrackingUrlTemplate';

    public const MSCLKID_AUTO_TAGGING_ENABLED = 'MSCLKIDAutoTaggingEnabled';

    public const AD_CLICK_PARALLEL_TRACKING = 'AdClickParallelTracking';

    public const FINAL_URL_SUFFIX = 'FinalUrlSuffix';

    public const INCLUDE_VIEW_THROUGH_CONVERSIONS = 'IncludeViewThroughConversions';

    public const PROFILE_EXPANSION_ENABLED = 'ProfileExpansionEnabled';

    public const ALLOW_IMAGE_AUTO_RETRIEVE = 'AllowImageAutoRetrieve';

    public const AUTO_APPLY_RECOMMENDATIONS = 'AutoApplyRecommendations';

    public const INCLUDE_AUTO_BIDDING_VIEW_THROUGH_CONVERSIONS = 'IncludeAutoBiddingViewThroughConversions';

    public const AUTO_BIDDING_VIEW_THROUGH_CONVERSIONS_VALUE_ATTRIBUTION_WEIGHT = 'AutoBiddingViewThroughConversionsValueAttributionWeight';

    public const LOOP_BACK_WINDOW_FOR_VIEW_THROUGH_CONVERSIONS = 'LoopBackWindowForViewThroughConversions';

    public const BUSINESS_ATTRIBUTES = 'BusinessAttributes';

    public const ENABLE_MMA_UNDER_DSA_ADGROUPS = 'EnableMMAUnderDSAAdgroups';

    public const OPT_OUT_FROM_MCM = 'OptOutFromMCM';

    public const NETFLIX_TC_ACCEPTED = 'NetflixTCAccepted';

    public const BLOCKED_CONTENT_SEGMENTS = 'BlockedContentSegments';

    public const ASSET_AI_ENHANCEMENT_OPTOUT = 'AssetAIEnhancementOptout';


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
            self::NONE,
            self::TRACKING_URL_TEMPLATE,
            self::MSCLKID_AUTO_TAGGING_ENABLED,
            self::AD_CLICK_PARALLEL_TRACKING,
            self::FINAL_URL_SUFFIX,
            self::INCLUDE_VIEW_THROUGH_CONVERSIONS,
            self::PROFILE_EXPANSION_ENABLED,
            self::ALLOW_IMAGE_AUTO_RETRIEVE,
            self::AUTO_APPLY_RECOMMENDATIONS,
            self::INCLUDE_AUTO_BIDDING_VIEW_THROUGH_CONVERSIONS,
            self::AUTO_BIDDING_VIEW_THROUGH_CONVERSIONS_VALUE_ATTRIBUTION_WEIGHT,
            self::LOOP_BACK_WINDOW_FOR_VIEW_THROUGH_CONVERSIONS,
            self::BUSINESS_ATTRIBUTES,
            self::ENABLE_MMA_UNDER_DSA_ADGROUPS,
            self::OPT_OUT_FROM_MCM,
            self::NETFLIX_TC_ACCEPTED,
            self::BLOCKED_CONTENT_SEGMENTS,
            self::ASSET_AI_ENHANCEMENT_OPTOUT
        ];
    }
}
