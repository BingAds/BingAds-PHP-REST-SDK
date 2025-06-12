<?php
/**
 * AdExtensionsTypeFilter
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

class AdExtensionsTypeFilter
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const LOCATION_AD_EXTENSION = 'LocationAdExtension';

    public const CALL_AD_EXTENSION = 'CallAdExtension';

    public const IMAGE_AD_EXTENSION = 'ImageAdExtension';

    public const APP_AD_EXTENSION = 'AppAdExtension';

    public const NEWS_AD_EXTENSION = 'NewsAdExtension';

    public const REVIEW_AD_EXTENSION = 'ReviewAdExtension';

    public const DATA_TABLE_AD_EXTENSION = 'DataTableAdExtension';

    public const CALLOUT_AD_EXTENSION = 'CalloutAdExtension';

    public const SITELINK_AD_EXTENSION = 'SitelinkAdExtension';

    public const STRUCTURED_SNIPPET_AD_EXTENSION = 'StructuredSnippetAdExtension';

    public const PRICE_AD_EXTENSION = 'PriceAdExtension';

    public const ACTION_AD_EXTENSION = 'ActionAdExtension';

    public const PROMOTION_AD_EXTENSION = 'PromotionAdExtension';

    public const FILTER_LINK_AD_EXTENSION = 'FilterLinkAdExtension';

    public const FLYER_AD_EXTENSION = 'FlyerAdExtension';

    public const VIDEO_AD_EXTENSION = 'VideoAdExtension';

    public const DISCLAIMER_AD_EXTENSION = 'DisclaimerAdExtension';

    public const LOGO_AD_EXTENSION = 'LogoAdExtension';

    public const LEAD_FORM_AD_EXTENSION = 'LeadFormAdExtension';


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
            self::LOCATION_AD_EXTENSION,
            self::CALL_AD_EXTENSION,
            self::IMAGE_AD_EXTENSION,
            self::APP_AD_EXTENSION,
            self::NEWS_AD_EXTENSION,
            self::REVIEW_AD_EXTENSION,
            self::DATA_TABLE_AD_EXTENSION,
            self::CALLOUT_AD_EXTENSION,
            self::SITELINK_AD_EXTENSION,
            self::STRUCTURED_SNIPPET_AD_EXTENSION,
            self::PRICE_AD_EXTENSION,
            self::ACTION_AD_EXTENSION,
            self::PROMOTION_AD_EXTENSION,
            self::FILTER_LINK_AD_EXTENSION,
            self::FLYER_AD_EXTENSION,
            self::VIDEO_AD_EXTENSION,
            self::DISCLAIMER_AD_EXTENSION,
            self::LOGO_AD_EXTENSION,
            self::LEAD_FORM_AD_EXTENSION
        ];
    }
}
