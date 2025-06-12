<?php
/**
 * CombinationPerformanceReportColumn
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

class CombinationPerformanceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const TIME_PERIOD = 'TimePeriod';

    public const ACCOUNT_ID = 'AccountId';

    public const ACCOUNT_NAME = 'AccountName';

    public const CAMPAIGN_ID = 'CampaignId';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CAMPAIGN_TYPE = 'CampaignType';

    public const AD_GROUP_ID = 'AdGroupId';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const ASSET_GROUP_ID = 'AssetGroupId';

    public const ASSET_GROUP_NAME = 'AssetGroupName';

    public const AD_ID = 'AdId';

    public const AD_TYPE = 'AdType';

    public const HEADLINE1 = 'Headline1';

    public const HEADLINE2 = 'Headline2';

    public const HEADLINE3 = 'Headline3';

    public const COMBINATION_LONG_HEADLINE = 'CombinationLongHeadline';

    public const DESCRIPTION1 = 'Description1';

    public const DESCRIPTION2 = 'Description2';

    public const IMAGE = 'Image';

    public const LOGO = 'Logo';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const SPEND = 'Spend';

    public const CTR = 'Ctr';

    public const CONVERSIONS = 'Conversions';


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
            self::CAMPAIGN_TYPE,
            self::AD_GROUP_ID,
            self::AD_GROUP_NAME,
            self::ASSET_GROUP_ID,
            self::ASSET_GROUP_NAME,
            self::AD_ID,
            self::AD_TYPE,
            self::HEADLINE1,
            self::HEADLINE2,
            self::HEADLINE3,
            self::COMBINATION_LONG_HEADLINE,
            self::DESCRIPTION1,
            self::DESCRIPTION2,
            self::IMAGE,
            self::LOGO,
            self::IMPRESSIONS,
            self::CLICKS,
            self::SPEND,
            self::CTR,
            self::CONVERSIONS
        ];
    }
}
