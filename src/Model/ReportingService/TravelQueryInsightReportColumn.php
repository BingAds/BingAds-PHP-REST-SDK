<?php
/**
 * TravelQueryInsightReportColumn
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

class TravelQueryInsightReportColumn
{
    /**
     * Possible values of this enum
     */
    public const SEARCH_QUERY = 'SearchQuery';

    public const COUNTRY = 'Country';

    public const REGION = 'Region';

    public const METRO_AREA = 'MetroArea';

    public const CITY = 'City';

    public const POSTAL_CODE = 'PostalCode';

    public const L1_VERTICAL = 'L1Vertical';

    public const L2_VERTICAL = 'L2Vertical';

    public const L3_VERTICAL = 'L3Vertical';

    public const POS_COUNTRY = 'POSCountry';

    public const POS_REGION = 'POSRegion';

    public const POS_CITY = 'POSCity';

    public const BRAND_IMPRESSIONS = 'BrandImpressions';

    public const BRAND_CLICKS = 'BrandClicks';

    public const BRAND_SPEND = 'BrandSpend';

    public const MSA_IMPRESSIONS = 'MSAImpressions';

    public const MSA_CLICKS = 'MSAClicks';

    public const MSA_SPEND = 'MSASpend';


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
            self::SEARCH_QUERY,
            self::COUNTRY,
            self::REGION,
            self::METRO_AREA,
            self::CITY,
            self::POSTAL_CODE,
            self::L1_VERTICAL,
            self::L2_VERTICAL,
            self::L3_VERTICAL,
            self::POS_COUNTRY,
            self::POS_REGION,
            self::POS_CITY,
            self::BRAND_IMPRESSIONS,
            self::BRAND_CLICKS,
            self::BRAND_SPEND,
            self::MSA_IMPRESSIONS,
            self::MSA_CLICKS,
            self::MSA_SPEND
        ];
    }
}
