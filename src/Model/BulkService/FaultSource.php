<?php
/**
 * FaultSource
 * BulkService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\BulkService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\BulkService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class FaultSource
{
    /**
     * Possible values of this enum
     */
    public const MIDDLE_TIER = 'MiddleTier';

    public const DATABASE = 'Database';

    public const EDITORIAL = 'Editorial';

    public const AUTHENTICATION = 'Authentication';

    public const AUTHORIZATION = 'Authorization';

    public const PUBLISHER = 'Publisher';

    public const AUDIENCE_INTELIGENCE = 'AudienceInteligence';

    public const CAM = 'Cam';

    public const DAM = 'Dam';

    public const FLEX_TAG = 'FlexTag';

    public const BING_MERCHANT_CENTER = 'BingMerchantCenter';


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
            self::MIDDLE_TIER,
            self::DATABASE,
            self::EDITORIAL,
            self::AUTHENTICATION,
            self::AUTHORIZATION,
            self::PUBLISHER,
            self::AUDIENCE_INTELIGENCE,
            self::CAM,
            self::DAM,
            self::FLEX_TAG,
            self::BING_MERCHANT_CENTER
        ];
    }
}
