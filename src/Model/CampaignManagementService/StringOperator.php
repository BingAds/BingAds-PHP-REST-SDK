<?php
/**
 * StringOperator
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

class StringOperator
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const EQUALS = 'Equals';

    public const CONTAINS = 'Contains';

    public const BEGINS_WITH = 'BeginsWith';

    public const ENDS_WITH = 'EndsWith';

    public const NOT_EQUALS = 'NotEquals';

    public const DOES_NOT_CONTAIN = 'DoesNotContain';

    public const DOES_NOT_BEGIN_WITH = 'DoesNotBeginWith';

    public const DOES_NOT_END_WITH = 'DoesNotEndWith';


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
            self::EQUALS,
            self::CONTAINS,
            self::BEGINS_WITH,
            self::ENDS_WITH,
            self::NOT_EQUALS,
            self::DOES_NOT_CONTAIN,
            self::DOES_NOT_BEGIN_WITH,
            self::DOES_NOT_END_WITH
        ];
    }
}
