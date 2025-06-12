<?php
/**
 * AppsPerformanceReportColumn
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

class AppsPerformanceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const TIME_PERIOD = 'TimePeriod';

    public const ACCOUNT_ID = 'AccountId';

    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_NUMBER = 'AccountNumber';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const CAMPAIGN_ID = 'CampaignId';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CAMPAIGN_STATUS = 'CampaignStatus';

    public const ASSET_GROUP_ID = 'AssetGroupId';

    public const ASSET_GROUP_NAME = 'AssetGroupName';

    public const ASSET_GROUP_STATUS = 'AssetGroupStatus';

    public const CURRENCY_CODE = 'CurrencyCode';

    public const LANGUAGE = 'Language';

    public const BID_STRATEGY_TYPE = 'BidStrategyType';

    public const GOAL = 'Goal';

    public const GOAL_TYPE = 'GoalType';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const CTR = 'Ctr';

    public const AVERAGE_CPC = 'AverageCpc';

    public const SPEND = 'Spend';

    public const AVERAGE_CPM = 'AverageCpm';

    public const ALL_CONVERSIONS = 'AllConversions';

    public const ALL_COST_PER_CONVERSION = 'AllCostPerConversion';

    public const ALL_CONVERSION_RATE = 'AllConversionRate';

    public const CONVERSIONS = 'Conversions';

    public const CONVERSION_RATE = 'ConversionRate';

    public const COST_PER_CONVERSION = 'CostPerConversion';

    public const VIEW_THROUGH_CONVERSIONS = 'ViewThroughConversions';

    public const VIEW_THROUGH_CONVERSION_RATE = 'ViewThroughConversionRate';

    public const VIEW_THROUGH_COST_PER_CONVERSION = 'ViewThroughCostPerConversion';

    public const DOWNLOADS = 'Downloads';

    public const POST_CLICK_DOWNLOAD_RATE = 'PostClickDownloadRate';

    public const COST_PER_DOWNLOAD = 'CostPerDownload';

    public const APP_INSTALLS = 'AppInstalls';

    public const POST_CLICK_INSTALL_RATE = 'PostClickInstallRate';

    public const CPI = 'CPI';

    public const PURCHASES = 'Purchases';

    public const POST_INSTALL_PURCHASE_RATE = 'PostInstallPurchaseRate';

    public const CPP = 'CPP';

    public const SUBSCRIPTIONS = 'Subscriptions';

    public const POST_INSTALL_SUBSCRIPTION_RATE = 'PostInstallSubscriptionRate';

    public const CPS = 'CPS';

    public const REVENUE = 'Revenue';

    public const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';

    public const REVENUE_PER_DOWNLOAD = 'RevenuePerDownload';

    public const REVENUE_PER_APP_INSTALL = 'RevenuePerAppInstall';


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
            self::ACCOUNT_NUMBER,
            self::ACCOUNT_STATUS,
            self::CAMPAIGN_ID,
            self::CAMPAIGN_NAME,
            self::CAMPAIGN_STATUS,
            self::ASSET_GROUP_ID,
            self::ASSET_GROUP_NAME,
            self::ASSET_GROUP_STATUS,
            self::CURRENCY_CODE,
            self::LANGUAGE,
            self::BID_STRATEGY_TYPE,
            self::GOAL,
            self::GOAL_TYPE,
            self::IMPRESSIONS,
            self::CLICKS,
            self::CTR,
            self::AVERAGE_CPC,
            self::SPEND,
            self::AVERAGE_CPM,
            self::ALL_CONVERSIONS,
            self::ALL_COST_PER_CONVERSION,
            self::ALL_CONVERSION_RATE,
            self::CONVERSIONS,
            self::CONVERSION_RATE,
            self::COST_PER_CONVERSION,
            self::VIEW_THROUGH_CONVERSIONS,
            self::VIEW_THROUGH_CONVERSION_RATE,
            self::VIEW_THROUGH_COST_PER_CONVERSION,
            self::DOWNLOADS,
            self::POST_CLICK_DOWNLOAD_RATE,
            self::COST_PER_DOWNLOAD,
            self::APP_INSTALLS,
            self::POST_CLICK_INSTALL_RATE,
            self::CPI,
            self::PURCHASES,
            self::POST_INSTALL_PURCHASE_RATE,
            self::CPP,
            self::SUBSCRIPTIONS,
            self::POST_INSTALL_SUBSCRIPTION_RATE,
            self::CPS,
            self::REVENUE,
            self::RETURN_ON_AD_SPEND,
            self::REVENUE_PER_DOWNLOAD,
            self::REVENUE_PER_APP_INSTALL
        ];
    }
}
