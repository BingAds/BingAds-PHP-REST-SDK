<?php
/**
 * ProductDimensionPerformanceReportColumn
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

class ProductDimensionPerformanceReportColumn
{
    /**
     * Possible values of this enum
     */
    public const TIME_PERIOD = 'TimePeriod';

    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_NUMBER = 'AccountNumber';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const AD_GROUP_ID = 'AdGroupId';

    public const CAMPAIGN_STATUS = 'CampaignStatus';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const AD_GROUP_STATUS = 'AdGroupStatus';

    public const NETWORK = 'Network';

    public const AD_ID = 'AdId';

    public const CAMPAIGN_ID = 'CampaignId';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CURRENCY_CODE = 'CurrencyCode';

    public const DEVICE_TYPE = 'DeviceType';

    public const LANGUAGE = 'Language';

    public const MERCHANT_PRODUCT_ID = 'MerchantProductId';

    public const TITLE = 'Title';

    public const CONDITION = 'Condition';

    public const BRAND = 'Brand';

    public const PRICE = 'Price';

    public const CUSTOM_LABEL0 = 'CustomLabel0';

    public const CUSTOM_LABEL1 = 'CustomLabel1';

    public const CUSTOM_LABEL2 = 'CustomLabel2';

    public const CUSTOM_LABEL3 = 'CustomLabel3';

    public const CUSTOM_LABEL4 = 'CustomLabel4';

    public const PRODUCT_TYPE1 = 'ProductType1';

    public const PRODUCT_TYPE2 = 'ProductType2';

    public const PRODUCT_TYPE3 = 'ProductType3';

    public const PRODUCT_TYPE4 = 'ProductType4';

    public const PRODUCT_TYPE5 = 'ProductType5';

    public const PRODUCT_CATEGORY1 = 'ProductCategory1';

    public const PRODUCT_CATEGORY2 = 'ProductCategory2';

    public const PRODUCT_CATEGORY3 = 'ProductCategory3';

    public const PRODUCT_CATEGORY4 = 'ProductCategory4';

    public const PRODUCT_CATEGORY5 = 'ProductCategory5';

    public const IMPRESSIONS = 'Impressions';

    public const CLICKS = 'Clicks';

    public const CTR = 'Ctr';

    public const AVERAGE_CPC = 'AverageCpc';

    public const SPEND = 'Spend';

    public const CONVERSIONS = 'Conversions';

    public const CONVERSION_RATE = 'ConversionRate';

    public const REVENUE = 'Revenue';

    public const REVENUE_PER_CONVERSION = 'RevenuePerConversion';

    public const SELLER_NAME = 'SellerName';

    public const OFFER_LANGUAGE = 'OfferLanguage';

    public const COUNTRY_OF_SALE = 'CountryOfSale';

    public const AD_STATUS = 'AdStatus';

    public const IMPRESSION_SHARE_PERCENT = 'ImpressionSharePercent';

    public const IMPRESSION_LOST_TO_BUDGET_PERCENT = 'ImpressionLostToBudgetPercent';

    public const IMPRESSION_LOST_TO_RANK_PERCENT = 'ImpressionLostToRankPercent';

    public const BENCHMARK_BID = 'BenchmarkBid';

    public const BENCHMARK_CTR = 'BenchmarkCtr';

    public const TOP_VS_OTHER = 'TopVsOther';

    public const AD_DISTRIBUTION = 'AdDistribution';

    public const CLICK_TYPE_ID = 'ClickTypeId';

    public const TOTAL_CLICKS_ON_AD_ELEMENTS = 'TotalClicksOnAdElements';

    public const CLICK_TYPE = 'ClickType';

    public const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';

    public const BID_STRATEGY_TYPE = 'BidStrategyType';

    public const LOCAL_STORE_CODE = 'LocalStoreCode';

    public const STORE_ID = 'StoreId';

    public const ASSISTED_IMPRESSIONS = 'AssistedImpressions';

    public const ASSISTED_CLICKS = 'AssistedClicks';

    public const CLICK_SHARE_PERCENT = 'ClickSharePercent';

    public const ABSOLUTE_TOP_IMPRESSION_SHARE_PERCENT = 'AbsoluteTopImpressionSharePercent';

    public const ASSISTED_CONVERSIONS = 'AssistedConversions';

    public const ALL_CONVERSIONS = 'AllConversions';

    public const ALL_REVENUE = 'AllRevenue';

    public const ALL_CONVERSION_RATE = 'AllConversionRate';

    public const ALL_COST_PER_CONVERSION = 'AllCostPerConversion';

    public const ALL_RETURN_ON_AD_SPEND = 'AllReturnOnAdSpend';

    public const ALL_REVENUE_PER_CONVERSION = 'AllRevenuePerConversion';

    public const COST_PER_CONVERSION = 'CostPerConversion';

    public const VIEW_THROUGH_CONVERSIONS = 'ViewThroughConversions';

    public const GOAL = 'Goal';

    public const GOAL_TYPE = 'GoalType';

    public const PRODUCT_BOUGHT = 'ProductBought';

    public const QUANTITY_BOUGHT = 'QuantityBought';

    public const ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT = 'AbsoluteTopImpressionRatePercent';

    public const AVERAGE_CPM = 'AverageCpm';

    public const CONVERSIONS_QUALIFIED = 'ConversionsQualified';

    public const ASSISTED_CONVERSIONS_QUALIFIED = 'AssistedConversionsQualified';

    public const ALL_CONVERSIONS_QUALIFIED = 'AllConversionsQualified';

    public const VIEW_THROUGH_CONVERSIONS_QUALIFIED = 'ViewThroughConversionsQualified';

    public const PRODUCT_BOUGHT_TITLE = 'ProductBoughtTitle';

    public const GTIN = 'GTIN';

    public const MPN = 'MPN';

    public const VIEW_THROUGH_REVENUE = 'ViewThroughRevenue';

    public const GOAL_ID = 'GoalId';

    public const SALES = 'Sales';

    public const COST_PER_SALE = 'CostPerSale';

    public const REVENUE_PER_SALE = 'RevenuePerSale';

    public const INSTALLS = 'Installs';

    public const COST_PER_INSTALL = 'CostPerInstall';

    public const REVENUE_PER_INSTALL = 'RevenuePerInstall';

    public const CAMPAIGN_TYPE = 'CampaignType';

    public const ASSET_GROUP_ID = 'AssetGroupId';

    public const ASSET_GROUP_NAME = 'AssetGroupName';

    public const ASSET_GROUP_STATUS = 'AssetGroupStatus';

    public const COLLECTION_ID = 'CollectionId';

    public const FEED_LABEL = 'FeedLabel';


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
            self::ACCOUNT_NUMBER,
            self::AD_GROUP_NAME,
            self::AD_GROUP_ID,
            self::CAMPAIGN_STATUS,
            self::ACCOUNT_STATUS,
            self::AD_GROUP_STATUS,
            self::NETWORK,
            self::AD_ID,
            self::CAMPAIGN_ID,
            self::CAMPAIGN_NAME,
            self::CURRENCY_CODE,
            self::DEVICE_TYPE,
            self::LANGUAGE,
            self::MERCHANT_PRODUCT_ID,
            self::TITLE,
            self::CONDITION,
            self::BRAND,
            self::PRICE,
            self::CUSTOM_LABEL0,
            self::CUSTOM_LABEL1,
            self::CUSTOM_LABEL2,
            self::CUSTOM_LABEL3,
            self::CUSTOM_LABEL4,
            self::PRODUCT_TYPE1,
            self::PRODUCT_TYPE2,
            self::PRODUCT_TYPE3,
            self::PRODUCT_TYPE4,
            self::PRODUCT_TYPE5,
            self::PRODUCT_CATEGORY1,
            self::PRODUCT_CATEGORY2,
            self::PRODUCT_CATEGORY3,
            self::PRODUCT_CATEGORY4,
            self::PRODUCT_CATEGORY5,
            self::IMPRESSIONS,
            self::CLICKS,
            self::CTR,
            self::AVERAGE_CPC,
            self::SPEND,
            self::CONVERSIONS,
            self::CONVERSION_RATE,
            self::REVENUE,
            self::REVENUE_PER_CONVERSION,
            self::SELLER_NAME,
            self::OFFER_LANGUAGE,
            self::COUNTRY_OF_SALE,
            self::AD_STATUS,
            self::IMPRESSION_SHARE_PERCENT,
            self::IMPRESSION_LOST_TO_BUDGET_PERCENT,
            self::IMPRESSION_LOST_TO_RANK_PERCENT,
            self::BENCHMARK_BID,
            self::BENCHMARK_CTR,
            self::TOP_VS_OTHER,
            self::AD_DISTRIBUTION,
            self::CLICK_TYPE_ID,
            self::TOTAL_CLICKS_ON_AD_ELEMENTS,
            self::CLICK_TYPE,
            self::RETURN_ON_AD_SPEND,
            self::BID_STRATEGY_TYPE,
            self::LOCAL_STORE_CODE,
            self::STORE_ID,
            self::ASSISTED_IMPRESSIONS,
            self::ASSISTED_CLICKS,
            self::CLICK_SHARE_PERCENT,
            self::ABSOLUTE_TOP_IMPRESSION_SHARE_PERCENT,
            self::ASSISTED_CONVERSIONS,
            self::ALL_CONVERSIONS,
            self::ALL_REVENUE,
            self::ALL_CONVERSION_RATE,
            self::ALL_COST_PER_CONVERSION,
            self::ALL_RETURN_ON_AD_SPEND,
            self::ALL_REVENUE_PER_CONVERSION,
            self::COST_PER_CONVERSION,
            self::VIEW_THROUGH_CONVERSIONS,
            self::GOAL,
            self::GOAL_TYPE,
            self::PRODUCT_BOUGHT,
            self::QUANTITY_BOUGHT,
            self::ABSOLUTE_TOP_IMPRESSION_RATE_PERCENT,
            self::AVERAGE_CPM,
            self::CONVERSIONS_QUALIFIED,
            self::ASSISTED_CONVERSIONS_QUALIFIED,
            self::ALL_CONVERSIONS_QUALIFIED,
            self::VIEW_THROUGH_CONVERSIONS_QUALIFIED,
            self::PRODUCT_BOUGHT_TITLE,
            self::GTIN,
            self::MPN,
            self::VIEW_THROUGH_REVENUE,
            self::GOAL_ID,
            self::SALES,
            self::COST_PER_SALE,
            self::REVENUE_PER_SALE,
            self::INSTALLS,
            self::COST_PER_INSTALL,
            self::REVENUE_PER_INSTALL,
            self::CAMPAIGN_TYPE,
            self::ASSET_GROUP_ID,
            self::ASSET_GROUP_NAME,
            self::ASSET_GROUP_STATUS,
            self::COLLECTION_ID,
            self::FEED_LABEL
        ];
    }
}
