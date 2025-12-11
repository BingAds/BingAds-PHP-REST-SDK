<?php
/**
 * BidStrategyReportColumn
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

class BidStrategyReportColumn
{
    /**
     * Possible values of this enum
     */
    public const TIME_PERIOD = 'TimePeriod';

    public const ACCOUNT_ID = 'AccountId';

    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const CAMPAIGN_ID = 'CampaignId';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CAMPAIGN_STATUS = 'CampaignStatus';

    public const PORTFOLIO_BID_STRATEGY_NAME = 'PortfolioBidStrategyName';

    public const PORTFOLIO_BID_STRATEGY_STATUS = 'PortfolioBidStrategyStatus';

    public const BID_STRATEGY_TYPE = 'BidStrategyType';

    public const TARGET_CPA = 'TargetCPA';

    public const TARGET_ROAS = 'TargetRoas';

    public const TARGET_IMPRESSION_SHARE = 'TargetImpressionShare';

    public const NUM_OF_CAMPAIGNS = 'NumOfCampaigns';

    public const CURRENT_MAX_CPC = 'CurrentMaxCpc';

    public const TARGET_AD_POSITION_TYPE = 'TargetAdPositionType';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const CTR = 'Ctr';

    public const SPEND = 'Spend';

    public const CONVERSIONS_QUALIFIED = 'ConversionsQualified';

    public const CONVERSION_RATE = 'ConversionRate';

    public const AVERAGE_CPC = 'AverageCpc';

    public const CONVERSION_DELAY = 'ConversionDelay';

    public const COST_PER_CONVERSION_QUALIFIED = 'CostPerConversionQualified';

    public const ROAS = 'ROAS';

    public const AVG_TARGET_CPA = 'AvgTargetCPA';

    public const AVG_TARGET_ROAS = 'AvgTargetRoas';

    public const AVG_TARGET_IMPRESSION_SHARE = 'AvgTargetImpressionShare';

    public const IMPRESSION_SHARE_PERCENT = 'ImpressionSharePercent';

    public const OWNER = 'Owner';

    public const TIME_ZONE = 'TimeZone';

    public const CURRENCY = 'Currency';


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
            self::ACCOUNT_STATUS,
            self::CAMPAIGN_ID,
            self::CAMPAIGN_NAME,
            self::CAMPAIGN_STATUS,
            self::PORTFOLIO_BID_STRATEGY_NAME,
            self::PORTFOLIO_BID_STRATEGY_STATUS,
            self::BID_STRATEGY_TYPE,
            self::TARGET_CPA,
            self::TARGET_ROAS,
            self::TARGET_IMPRESSION_SHARE,
            self::NUM_OF_CAMPAIGNS,
            self::CURRENT_MAX_CPC,
            self::TARGET_AD_POSITION_TYPE,
            self::IMPRESSIONS,
            self::CLICKS,
            self::CTR,
            self::SPEND,
            self::CONVERSIONS_QUALIFIED,
            self::CONVERSION_RATE,
            self::AVERAGE_CPC,
            self::CONVERSION_DELAY,
            self::COST_PER_CONVERSION_QUALIFIED,
            self::ROAS,
            self::AVG_TARGET_CPA,
            self::AVG_TARGET_ROAS,
            self::AVG_TARGET_IMPRESSION_SHARE,
            self::IMPRESSION_SHARE_PERCENT,
            self::OWNER,
            self::TIME_ZONE,
            self::CURRENCY
        ];
    }
}
