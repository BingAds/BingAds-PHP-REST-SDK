<?php
/**
 * AdPosition
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

class AdPosition
{
    /**
     * Possible values of this enum
     */
    public const ALL = 'All';

    public const MAIN_LINE1 = 'MainLine1';

    public const MAIN_LINE2 = 'MainLine2';

    public const MAIN_LINE3 = 'MainLine3';

    public const MAIN_LINE4 = 'MainLine4';

    public const FIRST_PAGE1 = 'FirstPage1';

    public const FIRST_PAGE2 = 'FirstPage2';

    public const FIRST_PAGE3 = 'FirstPage3';

    public const FIRST_PAGE4 = 'FirstPage4';

    public const FIRST_PAGE5 = 'FirstPage5';

    public const FIRST_PAGE6 = 'FirstPage6';

    public const FIRST_PAGE7 = 'FirstPage7';

    public const FIRST_PAGE8 = 'FirstPage8';

    public const FIRST_PAGE9 = 'FirstPage9';

    public const FIRST_PAGE10 = 'FirstPage10';

    public const AGGREGATE = 'Aggregate';


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
            self::ALL,
            self::MAIN_LINE1,
            self::MAIN_LINE2,
            self::MAIN_LINE3,
            self::MAIN_LINE4,
            self::FIRST_PAGE1,
            self::FIRST_PAGE2,
            self::FIRST_PAGE3,
            self::FIRST_PAGE4,
            self::FIRST_PAGE5,
            self::FIRST_PAGE6,
            self::FIRST_PAGE7,
            self::FIRST_PAGE8,
            self::FIRST_PAGE9,
            self::FIRST_PAGE10,
            self::AGGREGATE
        ];
    }
}
