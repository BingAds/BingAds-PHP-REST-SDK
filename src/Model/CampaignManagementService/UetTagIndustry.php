<?php
/**
 * UetTagIndustry
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

class UetTagIndustry
{
    /**
     * Possible values of this enum
     */
    public const ADULT_GAMBLING = 'AdultGambling';

    public const AUTOS = 'Autos';

    public const B2_B_SERVICES = 'B2BServices';

    public const B2_C_SERVICES = 'B2CServices';

    public const CPG = 'CPG';

    public const CAREERS_EDUCATION = 'CareersEducation';

    public const COMMUNITY_SOCIAL_CHARITABLE_GROUPS = 'CommunitySocialCharitableGroups';

    public const ENTERTAINMENT = 'Entertainment';

    public const FINANCIAL_SERVICES_INSURANCE = 'FinancialServicesInsurance';

    public const GOVERNMENT = 'Government';

    public const HEALTH_WELLNESS = 'HealthWellness';

    public const REAL_ESTATE = 'RealEstate';

    public const RESTAURANTS_FOOD = 'RestaurantsFood';

    public const RETAIL = 'Retail';

    public const SCIENCE_SOCIAL_SCIENCE_OTHERS = 'ScienceSocialScienceOthers';

    public const TECHNOLOGY_TELECOMMUNICATIONS = 'TechnologyTelecommunications';

    public const TRAVEL_TRANSPORTATION = 'TravelTransportation';

    public const OTHER = 'Other';

    public const UNKNOWN = 'Unknown';


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
            self::ADULT_GAMBLING,
            self::AUTOS,
            self::B2_B_SERVICES,
            self::B2_C_SERVICES,
            self::CPG,
            self::CAREERS_EDUCATION,
            self::COMMUNITY_SOCIAL_CHARITABLE_GROUPS,
            self::ENTERTAINMENT,
            self::FINANCIAL_SERVICES_INSURANCE,
            self::GOVERNMENT,
            self::HEALTH_WELLNESS,
            self::REAL_ESTATE,
            self::RESTAURANTS_FOOD,
            self::RETAIL,
            self::SCIENCE_SOCIAL_SCIENCE_OTHERS,
            self::TECHNOLOGY_TELECOMMUNICATIONS,
            self::TRAVEL_TRANSPORTATION,
            self::OTHER,
            self::UNKNOWN
        ];
    }
}
