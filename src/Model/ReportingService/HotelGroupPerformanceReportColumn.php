<?php
/**
 * HotelGroupPerformanceReportColumn
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

class HotelGroupPerformanceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const TIME_PERIOD = 'TimePeriod';

    public const CUSTOMER_ID = 'CustomerId';

    public const CUSTOMER_NAME = 'CustomerName';

    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_ID = 'AccountId';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CAMPAIGN_ID = 'CampaignId';

    public const AD_GROUP_ID = 'AdGroupId';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const AD_ID = 'AdId';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const CAMPAIGN_STATUS = 'CampaignStatus';

    public const AD_GROUP_STATUS = 'AdGroupStatus';

    public const HOTEL_GROUP = 'HotelGroup';

    public const HOTEL_GROUP_NODE_ID = 'HotelGroupNodeId';

    public const PARTITION_TYPE = 'PartitionType';

    public const BID_STRATEGY_TYPE = 'BidStrategyType';

    public const DEVICE_TYPE = 'DeviceType';

    public const CURRENCY_CODE = 'CurrencyCode';

    public const CUSTOM_PARAMETERS = 'CustomParameters';

    public const FINAL_URL_SUFFIX = 'FinalUrlSuffix';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const CTR = 'Ctr';

    public const SPEND = 'Spend';

    public const AVERAGE_CPC = 'AverageCpc';

    public const AVERAGE_CPM = 'AverageCpm';

    public const CONVERSIONS = 'Conversions';

    public const REVENUE = 'Revenue';

    public const NET_REVENUE = 'NetRevenue';

    public const GROSS_RETURN_ON_AD_SPEND = 'GrossReturnOnAdSpend';

    public const NET_RETURN_ON_AD_SPEND = 'NetReturnOnAdSpend';

    public const COST_PER_ASSIST = 'CostPerAssist';

    public const BOOKED_LENGTH_OF_STAY = 'BookedLengthOfStay';

    public const AVG_BOOKED_ABW = 'AvgBookedABW';

    public const AVG_BOOKED_NIGHTS = 'AvgBookedNights';

    public const BOOKED_ABW = 'BookedABW';

    public const CHECK_IN_DATE = 'CheckInDate';

    public const DATE_TYPE = 'DateType';

    public const PARTNER_IMPRESSIONS = 'PartnerImpressions';

    public const ELIGIBLE_IMPRESSIONS = 'EligibleImpressions';

    public const MISSED_IMPRESSIONS = 'MissedImpressions';

    public const IMPRESSION_SHARE = 'ImpressionShare';

    public const MISSED_IMPRESSIONS_NO_BID = 'MissedImpressionsNoBid';

    public const MISSED_IMPRESSIONS_SPENDING_CAP_REACHED = 'MissedImpressionsSpendingCapReached';

    public const MISSED_IMPRESSIONS_NO_TAX = 'MissedImpressionsNoTax';

    public const MISSED_IMPRESSIONS_OTHER = 'MissedImpressionsOther';

    public const CLICK_SHARE = 'ClickShare';

    public const MISSED_IMPRESSIONS_INSUFFICIENT_BID = 'MissedImpressionsInsufficientBid';


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
            self::CUSTOMER_ID,
            self::CUSTOMER_NAME,
            self::ACCOUNT_NAME,
            self::ACCOUNT_ID,
            self::CAMPAIGN_NAME,
            self::CAMPAIGN_ID,
            self::AD_GROUP_ID,
            self::AD_GROUP_NAME,
            self::AD_ID,
            self::ACCOUNT_STATUS,
            self::CAMPAIGN_STATUS,
            self::AD_GROUP_STATUS,
            self::HOTEL_GROUP,
            self::HOTEL_GROUP_NODE_ID,
            self::PARTITION_TYPE,
            self::BID_STRATEGY_TYPE,
            self::DEVICE_TYPE,
            self::CURRENCY_CODE,
            self::CUSTOM_PARAMETERS,
            self::FINAL_URL_SUFFIX,
            self::IMPRESSIONS,
            self::CLICKS,
            self::CTR,
            self::SPEND,
            self::AVERAGE_CPC,
            self::AVERAGE_CPM,
            self::CONVERSIONS,
            self::REVENUE,
            self::NET_REVENUE,
            self::GROSS_RETURN_ON_AD_SPEND,
            self::NET_RETURN_ON_AD_SPEND,
            self::COST_PER_ASSIST,
            self::BOOKED_LENGTH_OF_STAY,
            self::AVG_BOOKED_ABW,
            self::AVG_BOOKED_NIGHTS,
            self::BOOKED_ABW,
            self::CHECK_IN_DATE,
            self::DATE_TYPE,
            self::PARTNER_IMPRESSIONS,
            self::ELIGIBLE_IMPRESSIONS,
            self::MISSED_IMPRESSIONS,
            self::IMPRESSION_SHARE,
            self::MISSED_IMPRESSIONS_NO_BID,
            self::MISSED_IMPRESSIONS_SPENDING_CAP_REACHED,
            self::MISSED_IMPRESSIONS_NO_TAX,
            self::MISSED_IMPRESSIONS_OTHER,
            self::CLICK_SHARE,
            self::MISSED_IMPRESSIONS_INSUFFICIENT_BID
        ];
    }
}
