<?php
/**
 * Industry
 * CustomerManagementService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CustomerManagementService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CustomerManagementService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class Industry
{
    /**
     * Possible values of this enum
     */
    public const NA = 'NA';

    public const AGENCY_SALES_HOUSE = 'AgencySalesHouse';

    public const AUTOMOTIVE = 'Automotive';

    public const CONSUMER_PACKAGED_GOODS = 'ConsumerPackagedGoods';

    public const EDUCATION = 'Education';

    public const ENTERTAINMENT = 'Entertainment';

    public const FINANCIAL_SERVICES = 'FinancialServices';

    public const FOOD_SERVICES = 'FoodServices';

    public const GAMING = 'Gaming';

    public const GOVERNMENT_NONPROFIT_POLITICAL = 'GovernmentNonprofitPolitical';

    public const HEALTHCARE = 'Healthcare';

    public const INTERNAL = 'Internal';

    public const PUBLISHING_AND_WEB_MEDIA = 'PublishingAndWebMedia';

    public const REAL_ESTATE = 'RealEstate';

    public const RETAIL = 'Retail';

    public const SERVICES = 'Services';

    public const TECHNOLOGY = 'Technology';

    public const TELECOMMUNICATIONS = 'Telecommunications';

    public const TRAVEL_HOSPITALITY = 'TravelHospitality';

    public const OTHER = 'Other';

    public const PHARMACEUTICALS = 'Pharmaceuticals';


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
            self::NA,
            self::AGENCY_SALES_HOUSE,
            self::AUTOMOTIVE,
            self::CONSUMER_PACKAGED_GOODS,
            self::EDUCATION,
            self::ENTERTAINMENT,
            self::FINANCIAL_SERVICES,
            self::FOOD_SERVICES,
            self::GAMING,
            self::GOVERNMENT_NONPROFIT_POLITICAL,
            self::HEALTHCARE,
            self::INTERNAL,
            self::PUBLISHING_AND_WEB_MEDIA,
            self::REAL_ESTATE,
            self::RETAIL,
            self::SERVICES,
            self::TECHNOLOGY,
            self::TELECOMMUNICATIONS,
            self::TRAVEL_HOSPITALITY,
            self::OTHER,
            self::PHARMACEUTICALS
        ];
    }
}
