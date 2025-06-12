<?php
/**
 * Currency
 * AdInsightService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\AdInsightService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\AdInsightService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class Currency
{
    /**
     * Possible values of this enum
     */
    public const UN_SPECIFY = 'UnSpecify';

    public const AUSTRALIAN_DOLLAR = 'AustralianDollar';

    public const BRAZILIAN_REAL = 'BrazilianReal';

    public const CANADIAN_DOLLAR = 'CanadianDollar';

    public const SWISS_FRANC = 'SwissFranc';

    public const DANISH_KRONE = 'DanishKrone';

    public const EURO = 'EURO';

    public const UK_POUND = 'UKPound';

    public const JAPANESE_YEN = 'JapaneseYen';

    public const NORWEGIAN_KRONE = 'NorwegianKrone';

    public const NEW_ZEALAND_DOLLAR = 'NewZealandDollar';

    public const SWEDISH_KRONA = 'SwedishKrona';

    public const US_DOLLAR = 'USDollar';

    public const SOUTH_AFRICAN_RAND = 'SouthAfricanRand';

    public const ARGENTINE_PESO = 'ArgentinePeso';

    public const CHILEAN_PESO = 'ChileanPeso';

    public const YUAN_RENMINBI = 'YuanRenminbi';

    public const COLOMBIAN_PESO = 'ColombianPeso';

    public const CZECH_KORUNA = 'CzechKoruna';

    public const UAE_DIRHAM = 'UAEDirham';

    public const ALGERIAN_DINAR = 'AlgerianDinar';

    public const EGYPTIAN_POUND = 'EgyptianPound';

    public const HONG_KONG_DOLLAR = 'HongKongDollar';

    public const FORINT = 'Forint';

    public const RUPIAH = 'Rupiah';

    public const ISRAELI_SHEQEL = 'IsraeliSheqel';

    public const INDIAN_RUPEE = 'IndianRupee';

    public const WON = 'Won';

    public const LEBANESE_POUND = 'LebanesePound';

    public const MOROCCAN_DIRHAM = 'MoroccanDirham';

    public const MEXICAN_PESO = 'MexicanPeso';

    public const MALAYSIAN_RINGGIT = 'MalaysianRinggit';

    public const NUEVO_SOL = 'NuevoSol';

    public const PHILIPPINE_PESO = 'PhilippinePeso';

    public const POLISH_ZLOTY = 'PolishZloty';

    public const QATARI_RIAL = 'QatariRial';

    public const SAUDI_RIYAL = 'SaudiRiyal';

    public const SINGAPORE_DOLLAR = 'SingaporeDollar';

    public const BAHT = 'Baht';

    public const NEW_TAIWAN_DOLLAR = 'NewTaiwanDollar';

    public const BOLIVAR = 'Bolivar';

    public const DONG = 'Dong';

    public const TURKISH_LIRA = 'TurkishLira';

    public const NIGERIAN_NAIRA = 'NigerianNaira';


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
            self::UN_SPECIFY,
            self::AUSTRALIAN_DOLLAR,
            self::BRAZILIAN_REAL,
            self::CANADIAN_DOLLAR,
            self::SWISS_FRANC,
            self::DANISH_KRONE,
            self::EURO,
            self::UK_POUND,
            self::JAPANESE_YEN,
            self::NORWEGIAN_KRONE,
            self::NEW_ZEALAND_DOLLAR,
            self::SWEDISH_KRONA,
            self::US_DOLLAR,
            self::SOUTH_AFRICAN_RAND,
            self::ARGENTINE_PESO,
            self::CHILEAN_PESO,
            self::YUAN_RENMINBI,
            self::COLOMBIAN_PESO,
            self::CZECH_KORUNA,
            self::UAE_DIRHAM,
            self::ALGERIAN_DINAR,
            self::EGYPTIAN_POUND,
            self::HONG_KONG_DOLLAR,
            self::FORINT,
            self::RUPIAH,
            self::ISRAELI_SHEQEL,
            self::INDIAN_RUPEE,
            self::WON,
            self::LEBANESE_POUND,
            self::MOROCCAN_DIRHAM,
            self::MEXICAN_PESO,
            self::MALAYSIAN_RINGGIT,
            self::NUEVO_SOL,
            self::PHILIPPINE_PESO,
            self::POLISH_ZLOTY,
            self::QATARI_RIAL,
            self::SAUDI_RIYAL,
            self::SINGAPORE_DOLLAR,
            self::BAHT,
            self::NEW_TAIWAN_DOLLAR,
            self::BOLIVAR,
            self::DONG,
            self::TURKISH_LIRA,
            self::NIGERIAN_NAIRA
        ];
    }
}
