<?php
/**
 * AssetGroupPerformanceReportColumn
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

class AssetGroupPerformanceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const TIME_PERIOD = 'TimePeriod';

    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_ID = 'AccountId';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CAMPAIGN_ID = 'CampaignId';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const CAMPAIGN_STATUS = 'CampaignStatus';

    public const ASSET_GROUP_ID = 'AssetGroupId';

    public const ASSET_GROUP_NAME = 'AssetGroupName';

    public const ASSET_GROUP_STATUS = 'AssetGroupStatus';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const CTR = 'Ctr';

    public const SPEND = 'Spend';

    public const AVERAGE_CPC = 'AverageCpc';

    public const CONVERSIONS = 'Conversions';

    public const REVENUE = 'Revenue';

    public const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';

    public const CAMPAIGN_TYPE = 'CampaignType';


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
            self::ACCOUNT_NAME,
            self::ACCOUNT_ID,
            self::CAMPAIGN_NAME,
            self::CAMPAIGN_ID,
            self::ACCOUNT_STATUS,
            self::CAMPAIGN_STATUS,
            self::ASSET_GROUP_ID,
            self::ASSET_GROUP_NAME,
            self::ASSET_GROUP_STATUS,
            self::IMPRESSIONS,
            self::CLICKS,
            self::CTR,
            self::SPEND,
            self::AVERAGE_CPC,
            self::CONVERSIONS,
            self::REVENUE,
            self::RETURN_ON_AD_SPEND,
            self::CAMPAIGN_TYPE
        ];
    }
}
