<?php
/**
 * ImportAdditionalField
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

class ImportAdditionalField
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const NOTIFICATION_EMAIL = 'NotificationEmail';

    public const AUTO_DEVICE_BID_OPTIMIZATION = 'AutoDeviceBidOptimization';

    public const ACTIVE_AD_GROUPS_ONLY = 'ActiveAdGroupsOnly';

    public const SEARCH_AND_REPLACE_FOR_CUSTOM_PARAMETERS = 'SearchAndReplaceForCustomParameters';

    public const AD_SCHEDULE_USE_SEARCHER_TIMEZONE = 'AdScheduleUseSearcherTimezone';

    public const NEW_IMAGE_AD_EXTENSIONS = 'NewImageAdExtensions';

    public const UPDATE_IMAGE_AD_EXTENSIONS = 'UpdateImageAdExtensions';

    public const SEARCH_AND_REPLACE_FOR_FINAL_URL_SUFFIX = 'SearchAndReplaceForFinalURLSuffix';

    public const RENAME_CAMPAIGN_NAME_WITH_SUFFIX = 'RenameCampaignNameWithSuffix';

    public const UPDATE_AD_URLS = 'UpdateAdUrls';

    public const NEW_LOGO_AD_EXTENSIONS = 'NewLogoAdExtensions';

    public const UPDATE_LOGO_AD_EXTENSIONS = 'UpdateLogoAdExtensions';

    public const UPDATE_SITELINK_URLS = 'UpdateSitelinkUrls';

    public const NEW_LEAD_FORM_AD_EXTENSIONS = 'NewLeadFormAdExtensions';

    public const UPDATE_LEAD_FORM_AD_EXTENSIONS = 'UpdateLeadFormAdExtensions';

    public const NEW_ACCOUNT_NEGATIVE_KEYWORDS = 'NewAccountNegativeKeywords';

    public const UPDATE_ACCOUNT_NEGATIVE_KEYWORDS = 'UpdateAccountNegativeKeywords';

    public const UPDATE_AD_CUSTOMIZER_ATTRIBUTES = 'UpdateAdCustomizerAttributes';

    public const NEW_CONVERSION_GOALS = 'NewConversionGoals';

    public const UPDATE_CONVERSION_GOALS = 'UpdateConversionGoals';

    public const NEW_BRAND_SUITABILITY = 'NewBrandSuitability';

    public const UPDATE_BRAND_SUITABILITY = 'UpdateBrandSuitability';

    public const NEW_CAROUSEL_AD = 'NewCarouselAd';

    public const UPDATE_ASSET_AUTOMATION_CAMPAIGN_SETTING = 'UpdateAssetAutomationCampaignSetting';


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
            self::NOTIFICATION_EMAIL,
            self::AUTO_DEVICE_BID_OPTIMIZATION,
            self::ACTIVE_AD_GROUPS_ONLY,
            self::SEARCH_AND_REPLACE_FOR_CUSTOM_PARAMETERS,
            self::AD_SCHEDULE_USE_SEARCHER_TIMEZONE,
            self::NEW_IMAGE_AD_EXTENSIONS,
            self::UPDATE_IMAGE_AD_EXTENSIONS,
            self::SEARCH_AND_REPLACE_FOR_FINAL_URL_SUFFIX,
            self::RENAME_CAMPAIGN_NAME_WITH_SUFFIX,
            self::UPDATE_AD_URLS,
            self::NEW_LOGO_AD_EXTENSIONS,
            self::UPDATE_LOGO_AD_EXTENSIONS,
            self::UPDATE_SITELINK_URLS,
            self::NEW_LEAD_FORM_AD_EXTENSIONS,
            self::UPDATE_LEAD_FORM_AD_EXTENSIONS,
            self::NEW_ACCOUNT_NEGATIVE_KEYWORDS,
            self::UPDATE_ACCOUNT_NEGATIVE_KEYWORDS,
            self::UPDATE_AD_CUSTOMIZER_ATTRIBUTES,
            self::NEW_CONVERSION_GOALS,
            self::UPDATE_CONVERSION_GOALS,
            self::NEW_BRAND_SUITABILITY,
            self::UPDATE_BRAND_SUITABILITY,
            self::NEW_CAROUSEL_AD,
            self::UPDATE_ASSET_AUTOMATION_CAMPAIGN_SETTING
        ];
    }
}
