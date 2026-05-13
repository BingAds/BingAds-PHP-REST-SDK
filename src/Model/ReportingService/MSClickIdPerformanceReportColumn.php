<?php
/**
 * MSClickIdPerformanceReportColumn
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

class MSClickIdPerformanceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const TIME_PERIOD = 'TimePeriod';

    public const ACCOUNT_ID = 'AccountId';

    public const CAMPAIGN_ID = 'CampaignId';

    public const AD_GROUP_ID = 'AdGroupId';

    public const ASSET_GROUP_ID = 'AssetGroupId';

    public const AD_ID = 'AdId';

    public const MS_CLICK_ID = 'MSClickId';

    public const SEARCH_QUERY = 'SearchQuery';

    public const KEYWORD = 'Keyword';

    public const PAGE_NUMBER = 'PageNumber';

    public const TOP_VS_OTHER = 'TopVsOther';

    public const BID_MATCH_TYPE = 'BidMatchType';

    public const NETWORK = 'Network';

    public const DEVICE_TYPE = 'DeviceType';

    public const COUNTRY = 'Country';

    public const STATE = 'State';

    public const METRO_AREA = 'MetroArea';

    public const CITY = 'City';

    public const CLICKS = 'Clicks';

    public const AVERAGE_CPC = 'AverageCpc';

    public const CONVERSIONS_QUALIFIED = 'ConversionsQualified';

    public const REVENUE = 'Revenue';


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
            self::TIME_PERIOD,
            self::ACCOUNT_ID,
            self::CAMPAIGN_ID,
            self::AD_GROUP_ID,
            self::ASSET_GROUP_ID,
            self::AD_ID,
            self::MS_CLICK_ID,
            self::SEARCH_QUERY,
            self::KEYWORD,
            self::PAGE_NUMBER,
            self::TOP_VS_OTHER,
            self::BID_MATCH_TYPE,
            self::NETWORK,
            self::DEVICE_TYPE,
            self::COUNTRY,
            self::STATE,
            self::METRO_AREA,
            self::CITY,
            self::CLICKS,
            self::AVERAGE_CPC,
            self::CONVERSIONS_QUALIFIED,
            self::REVENUE
        ];
    }
}
