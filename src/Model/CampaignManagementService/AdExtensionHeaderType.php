<?php
/**
 * AdExtensionHeaderType
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

class AdExtensionHeaderType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const AMENITIES = 'Amenities';

    public const BRANDS = 'Brands';

    public const CLASSES = 'Classes';

    public const COURSES = 'Courses';

    public const DAILY_RATES = 'DailyRates';

    public const DEGREE_PROGRAMS = 'DegreePrograms';

    public const DEPARTMENTS = 'Departments';

    public const DESTINATIONS = 'Destinations';

    public const FEATURED_HOTELS = 'FeaturedHotels';

    public const GOODS = 'Goods';

    public const GRADES = 'Grades';

    public const HIGHLIGHTS = 'Highlights';

    public const INSURANCE_COVERAGE = 'InsuranceCoverage';

    public const ITEMS = 'Items';

    public const LANGUAGES = 'Languages';

    public const LOCATIONS = 'Locations';

    public const MODELS = 'Models';

    public const NEIGHBORHOODS = 'Neighborhoods';

    public const PRICES = 'Prices';

    public const RATES = 'Rates';

    public const RATINGS = 'Ratings';

    public const SCHOOL_DISTRICTS = 'SchoolDistricts';

    public const SERVICES = 'Services';

    public const SERVICE_CATALOG = 'ServiceCatalog';

    public const SHOWS = 'Shows';

    public const SIZES = 'Sizes';

    public const STYLES = 'Styles';

    public const TOOLS = 'Tools';

    public const TOPICS = 'Topics';

    public const TYPES = 'Types';

    public const VACATIONS = 'Vacations';

    public const VEHICLES = 'Vehicles';

    public const WHAT = 'What';

    public const WHO = 'Who';

    public const WHY = 'Why';

    public const DEALS = 'Deals';

    public const BEST_SELLERS = 'BestSellers';

    public const AGE_GROUPS = 'AgeGroups';

    public const OCCASIONS = 'Occasions';

    public const FLOWERS = 'Flowers';


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
            self::AMENITIES,
            self::BRANDS,
            self::CLASSES,
            self::COURSES,
            self::DAILY_RATES,
            self::DEGREE_PROGRAMS,
            self::DEPARTMENTS,
            self::DESTINATIONS,
            self::FEATURED_HOTELS,
            self::GOODS,
            self::GRADES,
            self::HIGHLIGHTS,
            self::INSURANCE_COVERAGE,
            self::ITEMS,
            self::LANGUAGES,
            self::LOCATIONS,
            self::MODELS,
            self::NEIGHBORHOODS,
            self::PRICES,
            self::RATES,
            self::RATINGS,
            self::SCHOOL_DISTRICTS,
            self::SERVICES,
            self::SERVICE_CATALOG,
            self::SHOWS,
            self::SIZES,
            self::STYLES,
            self::TOOLS,
            self::TOPICS,
            self::TYPES,
            self::VACATIONS,
            self::VEHICLES,
            self::WHAT,
            self::WHO,
            self::WHY,
            self::DEALS,
            self::BEST_SELLERS,
            self::AGE_GROUPS,
            self::OCCASIONS,
            self::FLOWERS
        ];
    }
}
