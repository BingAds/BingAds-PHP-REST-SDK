<?php
/**
 * CategoryClickCoverageReportColumn
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

class CategoryClickCoverageReportColumn
{
    /**
     * Possible values of this enum
     */
    public const ACCOUNT_NAME = 'AccountName';

    public const CUSTOMER_NAME = 'CustomerName';

    public const L1_VERTICAL = 'L1Vertical';

    public const L2_VERTICAL = 'L2Vertical';

    public const L3_VERTICAL = 'L3Vertical';

    public const WEEK_STARTING_MONDAY = 'WeekStartingMonday';

    public const MARKETPLACE_CLICK_COVERAGE = 'MarketplaceClickCoverage';

    public const COUNTRY = 'Country';

    public const PROPORTION_OF_SPEND = 'ProportionOfSpend';


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
            self::ACCOUNT_NAME,
            self::CUSTOMER_NAME,
            self::L1_VERTICAL,
            self::L2_VERTICAL,
            self::L3_VERTICAL,
            self::WEEK_STARTING_MONDAY,
            self::MARKETPLACE_CLICK_COVERAGE,
            self::COUNTRY,
            self::PROPORTION_OF_SPEND
        ];
    }
}
