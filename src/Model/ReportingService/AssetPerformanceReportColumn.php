<?php
/**
 * AssetPerformanceReportColumn
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

class AssetPerformanceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const TIME_PERIOD = 'TimePeriod';

    public const ACCOUNT_ID = 'AccountId';

    public const ACCOUNT_NAME = 'AccountName';

    public const CAMPAIGN_ID = 'CampaignId';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const AD_GROUP_ID = 'AdGroupId';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const ASSET_ID = 'AssetId';

    public const ASSET_CONTENT = 'AssetContent';

    public const ASSET_TYPE = 'AssetType';

    public const ASSET_SOURCE = 'AssetSource';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const CTR = 'Ctr';

    public const SPEND = 'Spend';

    public const VIDEO_VIEWS = 'VideoViews';

    public const VIDEO_VIEWS_AT25_PERCENT = 'VideoViewsAt25Percent';

    public const VIDEO_VIEWS_AT50_PERCENT = 'VideoViewsAt50Percent';

    public const VIDEO_VIEWS_AT75_PERCENT = 'VideoViewsAt75Percent';

    public const COMPLETED_VIDEO_VIEWS = 'CompletedVideoViews';

    public const VIDEO_COMPLETION_RATE = 'VideoCompletionRate';

    public const CONVERSIONS = 'Conversions';

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
            self::ACCOUNT_NAME,
            self::CAMPAIGN_ID,
            self::CAMPAIGN_NAME,
            self::AD_GROUP_ID,
            self::AD_GROUP_NAME,
            self::ASSET_ID,
            self::ASSET_CONTENT,
            self::ASSET_TYPE,
            self::ASSET_SOURCE,
            self::IMPRESSIONS,
            self::CLICKS,
            self::CTR,
            self::SPEND,
            self::VIDEO_VIEWS,
            self::VIDEO_VIEWS_AT25_PERCENT,
            self::VIDEO_VIEWS_AT50_PERCENT,
            self::VIDEO_VIEWS_AT75_PERCENT,
            self::COMPLETED_VIDEO_VIEWS,
            self::VIDEO_COMPLETION_RATE,
            self::CONVERSIONS,
            self::REVENUE
        ];
    }
}
