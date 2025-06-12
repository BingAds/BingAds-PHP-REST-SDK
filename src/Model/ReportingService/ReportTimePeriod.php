<?php
/**
 * ReportTimePeriod
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

class ReportTimePeriod
{
    /**
     * Possible values of this enum
     */
    public const TODAY = 'Today';

    public const YESTERDAY = 'Yesterday';

    public const LAST_SEVEN_DAYS = 'LastSevenDays';

    public const THIS_WEEK = 'ThisWeek';

    public const LAST_WEEK = 'LastWeek';

    public const LAST14_DAYS = 'Last14Days';

    public const LAST30_DAYS = 'Last30Days';

    public const LAST_FOUR_WEEKS = 'LastFourWeeks';

    public const THIS_MONTH = 'ThisMonth';

    public const LAST_MONTH = 'LastMonth';

    public const LAST_THREE_MONTHS = 'LastThreeMonths';

    public const LAST_SIX_MONTHS = 'LastSixMonths';

    public const THIS_YEAR = 'ThisYear';

    public const LAST_YEAR = 'LastYear';

    public const THIS_WEEK_STARTING_MONDAY = 'ThisWeekStartingMonday';

    public const LAST_WEEK_STARTING_MONDAY = 'LastWeekStartingMonday';

    public const LAST_FOUR_WEEKS_STARTING_MONDAY = 'LastFourWeeksStartingMonday';


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
            self::TODAY,
            self::YESTERDAY,
            self::LAST_SEVEN_DAYS,
            self::THIS_WEEK,
            self::LAST_WEEK,
            self::LAST14_DAYS,
            self::LAST30_DAYS,
            self::LAST_FOUR_WEEKS,
            self::THIS_MONTH,
            self::LAST_MONTH,
            self::LAST_THREE_MONTHS,
            self::LAST_SIX_MONTHS,
            self::THIS_YEAR,
            self::LAST_YEAR,
            self::THIS_WEEK_STARTING_MONDAY,
            self::LAST_WEEK_STARTING_MONDAY,
            self::LAST_FOUR_WEEKS_STARTING_MONDAY
        ];
    }
}
