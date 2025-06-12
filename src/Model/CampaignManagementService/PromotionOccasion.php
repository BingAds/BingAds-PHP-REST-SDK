<?php
/**
 * PromotionOccasion
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

class PromotionOccasion
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const NEW_YEARS = 'NewYears';

    public const VALENTINES_DAY = 'ValentinesDay';

    public const EASTER = 'Easter';

    public const MOTHERS_DAY = 'MothersDay';

    public const FATHERS_DAY = 'FathersDay';

    public const LABOR_DAY = 'LaborDay';

    public const BACK_TO_SCHOOL = 'BackToSchool';

    public const HALLOWEEN = 'Halloween';

    public const BLACK_FRIDAY = 'BlackFriday';

    public const CYBER_MONDAY = 'CyberMonday';

    public const CHRISTMAS = 'Christmas';

    public const BOXING_DAY = 'BoxingDay';

    public const NONE = 'None';

    public const INDEPENDENCE_DAY = 'IndependenceDay';

    public const NATIONAL_DAY = 'NationalDay';

    public const END_OF_SEASON = 'EndOfSeason';

    public const WINTER_SALE = 'WinterSale';

    public const SUMMER_SALE = 'SummerSale';

    public const FALL_SALE = 'FallSale';

    public const SPRING_SALE = 'SpringSale';

    public const RAMADAN = 'Ramadan';

    public const EID_AL_FITR = 'EidAlFitr';

    public const EID_AL_ADHA = 'EidAlAdha';

    public const SINGLES_DAY = 'SinglesDay';

    public const WOMENS_DAY = 'WomensDay';

    public const HOLI = 'Holi';

    public const PARENTS_DAY = 'ParentsDay';

    public const ST_NICHOLAS_DAY = 'StNicholasDay';

    public const CHINESE_NEW_YEAR = 'ChineseNewYear';

    public const CARNIVAL = 'Carnival';

    public const EPIPHANY = 'Epiphany';

    public const ROSH_HASHANAH = 'RoshHashanah';

    public const PASSOVER = 'Passover';

    public const HANUKKAH = 'Hanukkah';

    public const DIWALI = 'Diwali';

    public const NAVRATRI = 'Navratri';

    public const SONGKRAN = 'Songkran';

    public const YEAR_END_GIFT = 'YearEndGift';


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
            self::NEW_YEARS,
            self::VALENTINES_DAY,
            self::EASTER,
            self::MOTHERS_DAY,
            self::FATHERS_DAY,
            self::LABOR_DAY,
            self::BACK_TO_SCHOOL,
            self::HALLOWEEN,
            self::BLACK_FRIDAY,
            self::CYBER_MONDAY,
            self::CHRISTMAS,
            self::BOXING_DAY,
            self::NONE,
            self::INDEPENDENCE_DAY,
            self::NATIONAL_DAY,
            self::END_OF_SEASON,
            self::WINTER_SALE,
            self::SUMMER_SALE,
            self::FALL_SALE,
            self::SPRING_SALE,
            self::RAMADAN,
            self::EID_AL_FITR,
            self::EID_AL_ADHA,
            self::SINGLES_DAY,
            self::WOMENS_DAY,
            self::HOLI,
            self::PARENTS_DAY,
            self::ST_NICHOLAS_DAY,
            self::CHINESE_NEW_YEAR,
            self::CARNIVAL,
            self::EPIPHANY,
            self::ROSH_HASHANAH,
            self::PASSOVER,
            self::HANUKKAH,
            self::DIWALI,
            self::NAVRATRI,
            self::SONGKRAN,
            self::YEAR_END_GIFT
        ];
    }
}
