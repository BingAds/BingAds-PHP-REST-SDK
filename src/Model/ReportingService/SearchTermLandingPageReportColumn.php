<?php
/**
 * SearchTermLandingPageReportColumn
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

class SearchTermLandingPageReportColumn
{
    /**
     * Possible values of this enum
     */
    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_ID = 'AccountId';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CAMPAIGN_ID = 'CampaignId';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const AD_GROUP_ID = 'AdGroupId';

    public const AD_ID = 'AdId';

    public const AD_TYPE = 'AdType';

    public const CAMPAIGN_TYPE = 'CampaignType';

    public const LANGUAGE = 'Language';

    public const SEARCH_QUERY = 'SearchQuery';

    public const KEYWORD = 'Keyword';

    public const BID_MATCH_TYPE = 'BidMatchType';

    public const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';

    public const HEADLINE = 'Headline';

    public const FINAL_URL = 'FinalUrl';

    public const FINAL_URL_SOURCE = 'FinalUrlSource';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const CTR = 'Ctr';

    public const AVERAGE_CPC = 'AverageCpc';

    public const SPEND = 'Spend';

    public const CONVERSIONS = 'Conversions';

    public const CONVERSION_RATE = 'ConversionRate';

    public const COST_PER_CONVERSION = 'CostPerConversion';

    public const ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT = 'AbsoluteTopImpressionRatePercent';

    public const TOP_IMPRESSION_RATE_PERCENT = 'TopImpressionRatePercent';

    public const REVENUE = 'Revenue';

    public const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';

    public const TIME_PERIOD = 'TimePeriod';

    public const CONVERSIONS_QUALIFIED = 'ConversionsQualified';

    public const MARKETING_OBJECTIVE = 'MarketingObjective';

    public const CHANNEL = 'Channel';

    public const SUB_CHANNEL = 'SubChannel';


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
            self::ACCOUNT_NAME,
            self::ACCOUNT_ID,
            self::CAMPAIGN_NAME,
            self::CAMPAIGN_ID,
            self::AD_GROUP_NAME,
            self::AD_GROUP_ID,
            self::AD_ID,
            self::AD_TYPE,
            self::CAMPAIGN_TYPE,
            self::LANGUAGE,
            self::SEARCH_QUERY,
            self::KEYWORD,
            self::BID_MATCH_TYPE,
            self::DELIVERED_MATCH_TYPE,
            self::HEADLINE,
            self::FINAL_URL,
            self::FINAL_URL_SOURCE,
            self::IMPRESSIONS,
            self::CLICKS,
            self::CTR,
            self::AVERAGE_CPC,
            self::SPEND,
            self::CONVERSIONS,
            self::CONVERSION_RATE,
            self::COST_PER_CONVERSION,
            self::ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT,
            self::TOP_IMPRESSION_RATE_PERCENT,
            self::REVENUE,
            self::RETURN_ON_AD_SPEND,
            self::TIME_PERIOD,
            self::CONVERSIONS_QUALIFIED,
            self::MARKETING_OBJECTIVE,
            self::CHANNEL,
            self::SUB_CHANNEL
        ];
    }
}
