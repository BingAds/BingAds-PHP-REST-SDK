<?php
/**
 * AdGroupCriterionType
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

class AdGroupCriterionType
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const PRODUCT_PARTITION = 'ProductPartition';

    public const WEBPAGE = 'Webpage';

    public const TARGETS = 'Targets';

    public const AGE = 'Age';

    public const GENDER = 'Gender';

    public const DAY_TIME = 'DayTime';

    public const DEVICE = 'Device';

    public const LOCATION = 'Location';

    public const LOCATION_INTENT = 'LocationIntent';

    public const RADIUS = 'Radius';

    public const AUDIENCE = 'Audience';

    public const CUSTOM_AUDIENCE = 'CustomAudience';

    public const IN_MARKET_AUDIENCE = 'InMarketAudience';

    public const REMARKETING_LIST = 'RemarketingList';

    public const COMPANY_NAME = 'CompanyName';

    public const JOB_FUNCTION = 'JobFunction';

    public const INDUSTRY = 'Industry';

    public const PRODUCT_AUDIENCE = 'ProductAudience';

    public const SIMILAR_REMARKETING_LIST = 'SimilarRemarketingList';

    public const COMBINED_LIST = 'CombinedList';

    public const HOTEL_GROUP = 'HotelGroup';

    public const HOTEL_ADVANCE_BOOKING_WINDOW = 'HotelAdvanceBookingWindow';

    public const HOTEL_CHECK_IN_DAY = 'HotelCheckInDay';

    public const HOTEL_LENGTH_OF_STAY = 'HotelLengthOfStay';

    public const HOTEL_DATE_SELECTION_TYPE = 'HotelDateSelectionType';

    public const HOTEL_CHECK_IN_DATE = 'HotelCheckInDate';

    public const GENRE = 'Genre';

    public const CUSTOMER_LIST = 'CustomerList';

    public const IMPRESSION_BASED_REMARKETING_LIST = 'ImpressionBasedRemarketingList';

    public const PLACEMENT = 'Placement';

    public const TOPIC = 'Topic';


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
            self::NONE,
            self::PRODUCT_PARTITION,
            self::WEBPAGE,
            self::TARGETS,
            self::AGE,
            self::GENDER,
            self::DAY_TIME,
            self::DEVICE,
            self::LOCATION,
            self::LOCATION_INTENT,
            self::RADIUS,
            self::AUDIENCE,
            self::CUSTOM_AUDIENCE,
            self::IN_MARKET_AUDIENCE,
            self::REMARKETING_LIST,
            self::COMPANY_NAME,
            self::JOB_FUNCTION,
            self::INDUSTRY,
            self::PRODUCT_AUDIENCE,
            self::SIMILAR_REMARKETING_LIST,
            self::COMBINED_LIST,
            self::HOTEL_GROUP,
            self::HOTEL_ADVANCE_BOOKING_WINDOW,
            self::HOTEL_CHECK_IN_DAY,
            self::HOTEL_LENGTH_OF_STAY,
            self::HOTEL_DATE_SELECTION_TYPE,
            self::HOTEL_CHECK_IN_DATE,
            self::GENRE,
            self::CUSTOMER_LIST,
            self::IMPRESSION_BASED_REMARKETING_LIST,
            self::PLACEMENT,
            self::TOPIC
        ];
    }
}
