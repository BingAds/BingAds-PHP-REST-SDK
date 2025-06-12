<?php
/**
 * CurrencyCode
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

class CurrencyCode
{
    /**
     * Possible values of this enum
     */
    public const AED = 'AED';

    public const ALL = 'ALL';

    public const AMD = 'AMD';

    public const ARS = 'ARS';

    public const AUD = 'AUD';

    public const AZM = 'AZM';

    public const BGL = 'BGL';

    public const BHD = 'BHD';

    public const BND = 'BND';

    public const BOB = 'BOB';

    public const BRL = 'BRL';

    public const BYB = 'BYB';

    public const BZD = 'BZD';

    public const CAD = 'CAD';

    public const CHF = 'CHF';

    public const CLP = 'CLP';

    public const CNY = 'CNY';

    public const COP = 'COP';

    public const CRC = 'CRC';

    public const CZK = 'CZK';

    public const DOP = 'DOP';

    public const DKK = 'DKK';

    public const DZD = 'DZD';

    public const EEK = 'EEK';

    public const EGP = 'EGP';

    public const EUR = 'EUR';

    public const GBP = 'GBP';

    public const GEL = 'GEL';

    public const GTQ = 'GTQ';

    public const HKD = 'HKD';

    public const HNL = 'HNL';

    public const HRK = 'HRK';

    public const HUF = 'HUF';

    public const IDR = 'IDR';

    public const ILS = 'ILS';

    public const INR = 'INR';

    public const IQD = 'IQD';

    public const IRR = 'IRR';

    public const ISK = 'ISK';

    public const JMD = 'JMD';

    public const JOD = 'JOD';

    public const JPY = 'JPY';

    public const KES = 'KES';

    public const KGS = 'KGS';

    public const KRW = 'KRW';

    public const KWD = 'KWD';

    public const KZT = 'KZT';

    public const LBP = 'LBP';

    public const LTL = 'LTL';

    public const LVL = 'LVL';

    public const LYD = 'LYD';

    public const MAD = 'MAD';

    public const MKD = 'MKD';

    public const MOP = 'MOP';

    public const MNT = 'MNT';

    public const MVR = 'MVR';

    public const MXN = 'MXN';

    public const MYR = 'MYR';

    public const NIO = 'NIO';

    public const NOK = 'NOK';

    public const NZD = 'NZD';

    public const OMR = 'OMR';

    public const PAB = 'PAB';

    public const PEN = 'PEN';

    public const PHP = 'PHP';

    public const PKR = 'PKR';

    public const PLN = 'PLN';

    public const PYG = 'PYG';

    public const QAR = 'QAR';

    public const ROL = 'ROL';

    public const RUR = 'RUR';

    public const SAR = 'SAR';

    public const SEK = 'SEK';

    public const SGD = 'SGD';

    public const SIT = 'SIT';

    public const SKK = 'SKK';

    public const SYP = 'SYP';

    public const THB = 'THB';

    public const TND = 'TND';

    public const _TRY = 'TRY';

    public const TTD = 'TTD';

    public const TWD = 'TWD';

    public const UAH = 'UAH';

    public const USD = 'USD';

    public const UYU = 'UYU';

    public const UZS = 'UZS';

    public const VEF = 'VEF';

    public const YER = 'YER';

    public const VND = 'VND';

    public const YUN = 'YUN';

    public const ZAR = 'ZAR';

    public const ZWD = 'ZWD';


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
            self::AED,
            self::ALL,
            self::AMD,
            self::ARS,
            self::AUD,
            self::AZM,
            self::BGL,
            self::BHD,
            self::BND,
            self::BOB,
            self::BRL,
            self::BYB,
            self::BZD,
            self::CAD,
            self::CHF,
            self::CLP,
            self::CNY,
            self::COP,
            self::CRC,
            self::CZK,
            self::DOP,
            self::DKK,
            self::DZD,
            self::EEK,
            self::EGP,
            self::EUR,
            self::GBP,
            self::GEL,
            self::GTQ,
            self::HKD,
            self::HNL,
            self::HRK,
            self::HUF,
            self::IDR,
            self::ILS,
            self::INR,
            self::IQD,
            self::IRR,
            self::ISK,
            self::JMD,
            self::JOD,
            self::JPY,
            self::KES,
            self::KGS,
            self::KRW,
            self::KWD,
            self::KZT,
            self::LBP,
            self::LTL,
            self::LVL,
            self::LYD,
            self::MAD,
            self::MKD,
            self::MOP,
            self::MNT,
            self::MVR,
            self::MXN,
            self::MYR,
            self::NIO,
            self::NOK,
            self::NZD,
            self::OMR,
            self::PAB,
            self::PEN,
            self::PHP,
            self::PKR,
            self::PLN,
            self::PYG,
            self::QAR,
            self::ROL,
            self::RUR,
            self::SAR,
            self::SEK,
            self::SGD,
            self::SIT,
            self::SKK,
            self::SYP,
            self::THB,
            self::TND,
            self::_TRY,
            self::TTD,
            self::TWD,
            self::UAH,
            self::USD,
            self::UYU,
            self::UZS,
            self::VEF,
            self::YER,
            self::VND,
            self::YUN,
            self::ZAR,
            self::ZWD
        ];
    }
}
