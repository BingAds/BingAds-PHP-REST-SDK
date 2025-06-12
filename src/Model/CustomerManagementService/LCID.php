<?php
/**
 * LCID
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

class LCID
{
    /**
     * Possible values of this enum
     */
    public const ARABIC_SAUDI_ARABIA = 'ArabicSaudiArabia';

    public const BULGARIAN = 'Bulgarian';

    public const CHINESE_TAIWAN = 'ChineseTaiwan';

    public const CZECH_REPUBLIC_CZ = 'CzechRepublicCZ';

    public const DANISH_DENMARK = 'DanishDenmark';

    public const GERMAN_GERMANY = 'GermanGermany';

    public const GREEK_GREECE = 'GreekGreece';

    public const ENGLISH_US = 'EnglishUS';

    public const SPANISH_SPAIN = 'SpanishSpain';

    public const FINNISH_FINLAND = 'FinnishFinland';

    public const FRENCH_FRANCE = 'FrenchFrance';

    public const HEBREW_ISRAEL = 'HebrewIsrael';

    public const HUNGARY_HU = 'HungaryHU';

    public const ITALIAN_ITALY = 'ItalianItaly';

    public const JAPANESE_JAPAN = 'JapaneseJapan';

    public const KOREAN_KOREA = 'KoreanKorea';

    public const DUTCH_NETHERLANDS = 'DutchNetherlands';

    public const NORWEGIAN_NORWAY = 'NorwegianNorway';

    public const POLAND_POLISH = 'PolandPolish';

    public const PORTUGUESE_BRAZIL = 'PortugueseBrazil';

    public const ROMANIA_RO = 'RomaniaRO';

    public const RUSSIAN_RUSSIA = 'RussianRussia';

    public const CROATIAN = 'Croatian';

    public const SWEDISH_SWEDEN = 'SwedishSweden';

    public const ENGLISH_THAILAND = 'EnglishThailand';

    public const TURKISH_TURKEY = 'TurkishTurkey';

    public const ENGLISH_INDONESIA = 'EnglishIndonesia';

    public const UKRAINIAN_UKRAINE = 'UkrainianUkraine';

    public const SLOVENIAN = 'Slovenian';

    public const LATVIAN = 'Latvian';

    public const LITHUANIAN = 'Lithuanian';

    public const ENGLISH_VIETNAM = 'EnglishVietnam';

    public const HINDI_INDIA = 'HindiIndia';

    public const MALAY_MALAYSIA = 'MalayMalaysia';

    public const FILIPINO_PHILIPPINES = 'FilipinoPhilippines';

    public const ARABIC_IRAQ = 'ArabicIraq';

    public const CHINESE_CHINA = 'ChineseChina';

    public const GERMAN_SWITZERLAND = 'GermanSwitzerland';

    public const ENGLISH_UK = 'EnglishUK';

    public const SPANISH_MEXICO = 'SpanishMexico';

    public const ARABIC_EGYPT = 'ArabicEgypt';

    public const CHINESE_HONG_KONG = 'ChineseHongKong';

    public const GERMAN_AUSTRIA = 'GermanAustria';

    public const ENGLISH_AUSTRALIA = 'EnglishAustralia';

    public const SPANISH_SPAIN_MODERN_SORT = 'SpanishSpainModernSort';

    public const FRENCH_CANADA = 'FrenchCanada';

    public const ARABIC_LIBYA = 'ArabicLibya';

    public const ENGLISH_CANADA = 'EnglishCanada';

    public const ARABIC_ALGERIA = 'ArabicAlgeria';

    public const ENGLISH_NEW_ZEALAND = 'EnglishNewZealand';

    public const ARABIC_MOROCCO = 'ArabicMorocco';

    public const ENGLISH_IRELAND = 'EnglishIreland';

    public const ARABIC_TUNISIA = 'ArabicTunisia';

    public const ARABIC_OMAN = 'ArabicOman';

    public const SPANISH_VENEZUELA = 'SpanishVenezuela';

    public const ARABIC_YEMEN = 'ArabicYemen';

    public const SPANISH_COLOMBIA = 'SpanishColombia';

    public const SPANISH_PERU = 'SpanishPeru';

    public const ARABIC_JORDAN = 'ArabicJordan';

    public const SPANISH_ARGENTINA = 'SpanishArgentina';

    public const ARABIC_LEBANON = 'ArabicLebanon';

    public const ARABIC_KUWAIT = 'ArabicKuwait';

    public const ENGLISH_PHILIPPINES = 'EnglishPhilippines';

    public const SPANISH_CHILE = 'SpanishChile';

    public const ARABIC_UNITED_ARAB_EMIRATES = 'ArabicUnitedArabEmirates';

    public const ARABIC_BAHRAIN = 'ArabicBahrain';

    public const ARABIC_QATAR = 'ArabicQatar';

    public const ENGLISH_INDIA = 'EnglishIndia';

    public const ENGLISH_MALAYSIA = 'EnglishMalaysia';

    public const ENGLISH_SINGAPORE = 'EnglishSingapore';


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
            self::ARABIC_SAUDI_ARABIA,
            self::BULGARIAN,
            self::CHINESE_TAIWAN,
            self::CZECH_REPUBLIC_CZ,
            self::DANISH_DENMARK,
            self::GERMAN_GERMANY,
            self::GREEK_GREECE,
            self::ENGLISH_US,
            self::SPANISH_SPAIN,
            self::FINNISH_FINLAND,
            self::FRENCH_FRANCE,
            self::HEBREW_ISRAEL,
            self::HUNGARY_HU,
            self::ITALIAN_ITALY,
            self::JAPANESE_JAPAN,
            self::KOREAN_KOREA,
            self::DUTCH_NETHERLANDS,
            self::NORWEGIAN_NORWAY,
            self::POLAND_POLISH,
            self::PORTUGUESE_BRAZIL,
            self::ROMANIA_RO,
            self::RUSSIAN_RUSSIA,
            self::CROATIAN,
            self::SWEDISH_SWEDEN,
            self::ENGLISH_THAILAND,
            self::TURKISH_TURKEY,
            self::ENGLISH_INDONESIA,
            self::UKRAINIAN_UKRAINE,
            self::SLOVENIAN,
            self::LATVIAN,
            self::LITHUANIAN,
            self::ENGLISH_VIETNAM,
            self::HINDI_INDIA,
            self::MALAY_MALAYSIA,
            self::FILIPINO_PHILIPPINES,
            self::ARABIC_IRAQ,
            self::CHINESE_CHINA,
            self::GERMAN_SWITZERLAND,
            self::ENGLISH_UK,
            self::SPANISH_MEXICO,
            self::ARABIC_EGYPT,
            self::CHINESE_HONG_KONG,
            self::GERMAN_AUSTRIA,
            self::ENGLISH_AUSTRALIA,
            self::SPANISH_SPAIN_MODERN_SORT,
            self::FRENCH_CANADA,
            self::ARABIC_LIBYA,
            self::ENGLISH_CANADA,
            self::ARABIC_ALGERIA,
            self::ENGLISH_NEW_ZEALAND,
            self::ARABIC_MOROCCO,
            self::ENGLISH_IRELAND,
            self::ARABIC_TUNISIA,
            self::ARABIC_OMAN,
            self::SPANISH_VENEZUELA,
            self::ARABIC_YEMEN,
            self::SPANISH_COLOMBIA,
            self::SPANISH_PERU,
            self::ARABIC_JORDAN,
            self::SPANISH_ARGENTINA,
            self::ARABIC_LEBANON,
            self::ARABIC_KUWAIT,
            self::ENGLISH_PHILIPPINES,
            self::SPANISH_CHILE,
            self::ARABIC_UNITED_ARAB_EMIRATES,
            self::ARABIC_BAHRAIN,
            self::ARABIC_QATAR,
            self::ENGLISH_INDIA,
            self::ENGLISH_MALAYSIA,
            self::ENGLISH_SINGAPORE
        ];
    }
}
