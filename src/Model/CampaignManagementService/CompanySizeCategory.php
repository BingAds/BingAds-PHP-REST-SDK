<?php
/**
 * CompanySizeCategory
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

class CompanySizeCategory
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const MYSELF_ONLY = 'MyselfOnly';

    public const SIZE2_TO10 = 'Size2To10';

    public const SIZE11_TO50 = 'Size11To50';

    public const SIZE51_TO200 = 'Size51To200';

    public const SIZE201_TO500 = 'Size201To500';

    public const SIZE501_TO1000 = 'Size501To1000';

    public const SIZE1001_TO5000 = 'Size1001To5000';

    public const SIZE5001_TO10000 = 'Size5001To10000';

    public const SIZE10001_PLUS = 'Size10001Plus';


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
            self::UNKNOWN,
            self::MYSELF_ONLY,
            self::SIZE2_TO10,
            self::SIZE11_TO50,
            self::SIZE51_TO200,
            self::SIZE201_TO500,
            self::SIZE501_TO1000,
            self::SIZE1001_TO5000,
            self::SIZE5001_TO10000,
            self::SIZE10001_PLUS
        ];
    }
}
