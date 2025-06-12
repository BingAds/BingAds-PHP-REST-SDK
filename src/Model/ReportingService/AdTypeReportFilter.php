<?php
/**
 * AdTypeReportFilter
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

class AdTypeReportFilter
{
    /**
     * Possible values of this enum
     */
    public const TEXT = 'Text';

    public const LOCAL = 'Local';

    public const PRODUCT = 'Product';

    public const APP_INSTALL = 'AppInstall';

    public const DYNAMIC_SEARCH_AD = 'DynamicSearchAd';

    public const EXPANDED_TEXT = 'ExpandedText';

    public const RESPONSIVE_AD = 'ResponsiveAd';

    public const RESPONSIVE_SEARCH_AD = 'ResponsiveSearchAd';


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
            self::TEXT,
            self::LOCAL,
            self::PRODUCT,
            self::APP_INSTALL,
            self::DYNAMIC_SEARCH_AD,
            self::EXPANDED_TEXT,
            self::RESPONSIVE_AD,
            self::RESPONSIVE_SEARCH_AD
        ];
    }
}
