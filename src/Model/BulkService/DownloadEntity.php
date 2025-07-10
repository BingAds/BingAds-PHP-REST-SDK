<?php
/**
 * DownloadEntity
 * BulkService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\BulkService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\BulkService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class DownloadEntity
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const CAMPAIGNS = 'Campaigns';

    public const AD_GROUPS = 'AdGroups';

    public const ADS = 'Ads';

    public const KEYWORDS = 'Keywords';

    public const CAMPAIGN_NEGATIVE_KEYWORDS = 'CampaignNegativeKeywords';

    public const AD_GROUP_NEGATIVE_KEYWORDS = 'AdGroupNegativeKeywords';

    public const CAMPAIGN_TARGET_CRITERIONS = 'CampaignTargetCriterions';

    public const AD_GROUP_TARGET_CRITERIONS = 'AdGroupTargetCriterions';

    public const CAMPAIGN_NEGATIVE_SITES = 'CampaignNegativeSites';

    public const AD_GROUP_NEGATIVE_SITES = 'AdGroupNegativeSites';

    public const CAMPAIGN_LOCATION_AD_EXTENSIONS = 'CampaignLocationAdExtensions';

    public const CAMPAIGN_CALL_AD_EXTENSIONS = 'CampaignCallAdExtensions';

    public const LOCATION_AD_EXTENSIONS = 'LocationAdExtensions';

    public const CALL_AD_EXTENSIONS = 'CallAdExtensions';

    public const NEGATIVE_KEYWORD_LISTS = 'NegativeKeywordLists';

    public const SHARED_NEGATIVE_KEYWORDS = 'SharedNegativeKeywords';

    public const CAMPAIGN_NEGATIVE_KEYWORD_LIST_ASSOCIATIONS = 'CampaignNegativeKeywordListAssociations';

    public const IMAGE_AD_EXTENSIONS = 'ImageAdExtensions';

    public const CAMPAIGN_IMAGE_AD_EXTENSIONS = 'CampaignImageAdExtensions';

    public const AD_GROUP_IMAGE_AD_EXTENSIONS = 'AdGroupImageAdExtensions';

    public const APP_AD_EXTENSIONS = 'AppAdExtensions';

    public const AD_GROUP_APP_AD_EXTENSIONS = 'AdGroupAppAdExtensions';

    public const CAMPAIGN_APP_AD_EXTENSIONS = 'CampaignAppAdExtensions';

    public const PRICE_AD_EXTENSIONS = 'PriceAdExtensions';

    public const REVIEW_AD_EXTENSIONS = 'ReviewAdExtensions';

    public const CAMPAIGN_NEGATIVE_DYNAMIC_SEARCH_AD_TARGETS = 'CampaignNegativeDynamicSearchAdTargets';

    public const AD_GROUP_PRODUCT_PARTITIONS = 'AdGroupProductPartitions';

    public const CAMPAIGN_PRODUCT_SCOPES = 'CampaignProductScopes';

    public const CAMPAIGN_REVIEW_AD_EXTENSIONS = 'CampaignReviewAdExtensions';

    public const AD_GROUP_REVIEW_AD_EXTENSIONS = 'AdGroupReviewAdExtensions';

    public const CALLOUT_AD_EXTENSIONS = 'CalloutAdExtensions';

    public const CAMPAIGN_CALLOUT_AD_EXTENSIONS = 'CampaignCalloutAdExtensions';

    public const AD_GROUP_CALLOUT_AD_EXTENSIONS = 'AdGroupCalloutAdExtensions';

    public const SITELINK_AD_EXTENSIONS = 'SitelinkAdExtensions';

    public const CAMPAIGN_SITELINK_AD_EXTENSIONS = 'CampaignSitelinkAdExtensions';

    public const AD_GROUP_SITELINK_AD_EXTENSIONS = 'AdGroupSitelinkAdExtensions';

    public const STRUCTURED_SNIPPET_AD_EXTENSIONS = 'StructuredSnippetAdExtensions';

    public const CAMPAIGN_STRUCTURED_SNIPPET_AD_EXTENSIONS = 'CampaignStructuredSnippetAdExtensions';

    public const AD_GROUP_STRUCTURED_SNIPPET_AD_EXTENSIONS = 'AdGroupStructuredSnippetAdExtensions';

    public const REMARKETING_LISTS = 'RemarketingLists';

    public const AD_GROUP_REMARKETING_LIST_ASSOCIATIONS = 'AdGroupRemarketingListAssociations';

    public const BUDGETS = 'Budgets';

    public const TEXT_ADS = 'TextAds';

    public const PRODUCT_ADS = 'ProductAds';

    public const APP_INSTALL_ADS = 'AppInstallAds';

    public const EXPANDED_TEXT_ADS = 'ExpandedTextAds';

    public const DYNAMIC_SEARCH_ADS = 'DynamicSearchAds';

    public const AD_GROUP_DYNAMIC_SEARCH_AD_TARGETS = 'AdGroupDynamicSearchAdTargets';

    public const AD_GROUP_NEGATIVE_DYNAMIC_SEARCH_AD_TARGETS = 'AdGroupNegativeDynamicSearchAdTargets';

    public const CAMPAIGN_PRICE_AD_EXTENSIONS = 'CampaignPriceAdExtensions';

    public const AD_GROUP_PRICE_AD_EXTENSIONS = 'AdGroupPriceAdExtensions';

    public const LABELS = 'Labels';

    public const CAMPAIGN_LABELS = 'CampaignLabels';

    public const AD_GROUP_LABELS = 'AdGroupLabels';

    public const TEXT_AD_LABELS = 'TextAdLabels';

    public const KEYWORD_LABELS = 'KeywordLabels';

    public const AD_GROUP_NEGATIVE_REMARKETING_LIST_ASSOCIATIONS = 'AdGroupNegativeRemarketingListAssociations';

    public const CUSTOM_AUDIENCES = 'CustomAudiences';

    public const AD_GROUP_CUSTOM_AUDIENCE_ASSOCIATIONS = 'AdGroupCustomAudienceAssociations';

    public const AD_GROUP_NEGATIVE_CUSTOM_AUDIENCE_ASSOCIATIONS = 'AdGroupNegativeCustomAudienceAssociations';

    public const IN_MARKET_AUDIENCES = 'InMarketAudiences';

    public const AD_GROUP_IN_MARKET_AUDIENCE_ASSOCIATIONS = 'AdGroupInMarketAudienceAssociations';

    public const AD_GROUP_NEGATIVE_IN_MARKET_AUDIENCE_ASSOCIATIONS = 'AdGroupNegativeInMarketAudienceAssociations';

    public const AUDIENCES = 'Audiences';

    public const AD_GROUP_AUDIENCE_ASSOCIATIONS = 'AdGroupAudienceAssociations';

    public const AD_GROUP_NEGATIVE_AUDIENCE_ASSOCIATIONS = 'AdGroupNegativeAudienceAssociations';

    public const PRODUCT_AD_LABELS = 'ProductAdLabels';

    public const APP_INSTALL_AD_LABELS = 'AppInstallAdLabels';

    public const EXPANDED_TEXT_AD_LABELS = 'ExpandedTextAdLabels';

    public const DYNAMIC_SEARCH_AD_LABELS = 'DynamicSearchAdLabels';

    public const ACCOUNT_LOCATION_AD_EXTENSIONS = 'AccountLocationAdExtensions';

    public const ACCOUNT_IMAGE_AD_EXTENSIONS = 'AccountImageAdExtensions';

    public const ACCOUNT_APP_AD_EXTENSIONS = 'AccountAppAdExtensions';

    public const ACCOUNT_PRICE_AD_EXTENSIONS = 'AccountPriceAdExtensions';

    public const ACCOUNT_REVIEW_AD_EXTENSIONS = 'AccountReviewAdExtensions';

    public const ACCOUNT_CALLOUT_AD_EXTENSIONS = 'AccountCalloutAdExtensions';

    public const ACCOUNT_SITELINK_AD_EXTENSIONS = 'AccountSitelinkAdExtensions';

    public const ACCOUNT_STRUCTURED_SNIPPET_AD_EXTENSIONS = 'AccountStructuredSnippetAdExtensions';

    public const RESPONSIVE_ADS = 'ResponsiveAds';

    public const RESPONSIVE_AD_LABELS = 'ResponsiveAdLabels';

    public const PRODUCT_AUDIENCES = 'ProductAudiences';

    public const AD_GROUP_PRODUCT_AUDIENCE_ASSOCIATIONS = 'AdGroupProductAudienceAssociations';

    public const AD_GROUP_NEGATIVE_PRODUCT_AUDIENCE_ASSOCIATIONS = 'AdGroupNegativeProductAudienceAssociations';

    public const SIMILAR_REMARKETING_LISTS = 'SimilarRemarketingLists';

    public const AD_GROUP_SIMILAR_REMARKETING_LIST_ASSOCIATIONS = 'AdGroupSimilarRemarketingListAssociations';

    public const AD_GROUP_NEGATIVE_SIMILAR_REMARKETING_LIST_ASSOCIATIONS = 'AdGroupNegativeSimilarRemarketingListAssociations';

    public const EXPERIMENTS = 'Experiments';

    public const ACTION_AD_EXTENSIONS = 'ActionAdExtensions';

    public const CAMPAIGN_ACTION_AD_EXTENSIONS = 'CampaignActionAdExtensions';

    public const AD_GROUP_ACTION_AD_EXTENSIONS = 'AdGroupActionAdExtensions';

    public const ACCOUNT_ACTION_AD_EXTENSIONS = 'AccountActionAdExtensions';

    public const RESPONSIVE_SEARCH_ADS = 'ResponsiveSearchAds';

    public const RESPONSIVE_SEARCH_AD_LABELS = 'ResponsiveSearchAdLabels';

    public const CAMPAIGN_AUDIENCE_ASSOCIATIONS = 'CampaignAudienceAssociations';

    public const CAMPAIGN_NEGATIVE_AUDIENCE_ASSOCIATIONS = 'CampaignNegativeAudienceAssociations';

    public const CAMPAIGN_CUSTOM_AUDIENCE_ASSOCIATIONS = 'CampaignCustomAudienceAssociations';

    public const CAMPAIGN_NEGATIVE_CUSTOM_AUDIENCE_ASSOCIATIONS = 'CampaignNegativeCustomAudienceAssociations';

    public const CAMPAIGN_IN_MARKET_AUDIENCE_ASSOCIATIONS = 'CampaignInMarketAudienceAssociations';

    public const CAMPAIGN_NEGATIVE_IN_MARKET_AUDIENCE_ASSOCIATIONS = 'CampaignNegativeInMarketAudienceAssociations';

    public const CAMPAIGN_PRODUCT_AUDIENCE_ASSOCIATIONS = 'CampaignProductAudienceAssociations';

    public const CAMPAIGN_NEGATIVE_PRODUCT_AUDIENCE_ASSOCIATIONS = 'CampaignNegativeProductAudienceAssociations';

    public const CAMPAIGN_REMARKETING_LIST_ASSOCIATIONS = 'CampaignRemarketingListAssociations';

    public const CAMPAIGN_NEGATIVE_REMARKETING_LIST_ASSOCIATIONS = 'CampaignNegativeRemarketingListAssociations';

    public const CAMPAIGN_SIMILAR_REMARKETING_LIST_ASSOCIATIONS = 'CampaignSimilarRemarketingListAssociations';

    public const CAMPAIGN_NEGATIVE_SIMILAR_REMARKETING_LIST_ASSOCIATIONS = 'CampaignNegativeSimilarRemarketingListAssociations';

    public const FEEDS = 'Feeds';

    public const FEED_ITEMS = 'FeedItems';

    public const CAMPAIGN_NEGATIVE_STORE_CRITERIONS = 'CampaignNegativeStoreCriterions';

    public const PROMOTION_AD_EXTENSIONS = 'PromotionAdExtensions';

    public const ACCOUNT_PROMOTION_AD_EXTENSIONS = 'AccountPromotionAdExtensions';

    public const CAMPAIGN_PROMOTION_AD_EXTENSIONS = 'CampaignPromotionAdExtensions';

    public const AD_GROUP_PROMOTION_AD_EXTENSIONS = 'AdGroupPromotionAdExtensions';

    public const COMBINED_LISTS = 'CombinedLists';

    public const AD_GROUP_COMBINED_LIST_ASSOCIATIONS = 'AdGroupCombinedListAssociations';

    public const AD_GROUP_NEGATIVE_COMBINED_LIST_ASSOCIATIONS = 'AdGroupNegativeCombinedListAssociations';

    public const CAMPAIGN_COMBINED_LIST_ASSOCIATIONS = 'CampaignCombinedListAssociations';

    public const CAMPAIGN_NEGATIVE_COMBINED_LIST_ASSOCIATIONS = 'CampaignNegativeCombinedListAssociations';

    public const IMAGES = 'Images';

    public const CUSTOMER_LISTS = 'CustomerLists';

    public const AD_GROUP_CUSTOMER_LIST_ASSOCIATIONS = 'AdGroupCustomerListAssociations';

    public const AD_GROUP_NEGATIVE_CUSTOMER_LIST_ASSOCIATIONS = 'AdGroupNegativeCustomerListAssociations';

    public const CAMPAIGN_CUSTOMER_LIST_ASSOCIATIONS = 'CampaignCustomerListAssociations';

    public const CAMPAIGN_NEGATIVE_CUSTOMER_LIST_ASSOCIATIONS = 'CampaignNegativeCustomerListAssociations';

    public const FILTER_LINK_AD_EXTENSIONS = 'FilterLinkAdExtensions';

    public const ACCOUNT_FILTER_LINK_AD_EXTENSIONS = 'AccountFilterLinkAdExtensions';

    public const CAMPAIGN_FILTER_LINK_AD_EXTENSIONS = 'CampaignFilterLinkAdExtensions';

    public const AD_GROUP_FILTER_LINK_AD_EXTENSIONS = 'AdGroupFilterLinkAdExtensions';

    public const FLYER_AD_EXTENSIONS = 'FlyerAdExtensions';

    public const ACCOUNT_FLYER_AD_EXTENSIONS = 'AccountFlyerAdExtensions';

    public const CAMPAIGN_FLYER_AD_EXTENSIONS = 'CampaignFlyerAdExtensions';

    public const AD_GROUP_FLYER_AD_EXTENSIONS = 'AdGroupFlyerAdExtensions';

    public const BID_STRATEGIES = 'BidStrategies';

    public const VIDEO_AD_EXTENSIONS = 'VideoAdExtensions';

    public const ACCOUNT_VIDEO_AD_EXTENSIONS = 'AccountVideoAdExtensions';

    public const CAMPAIGN_VIDEO_AD_EXTENSIONS = 'CampaignVideoAdExtensions';

    public const AD_GROUP_VIDEO_AD_EXTENSIONS = 'AdGroupVideoAdExtensions';

    public const VIDEOS = 'Videos';

    public const DISCLAIMER_AD_EXTENSIONS = 'DisclaimerAdExtensions';

    public const CAMPAIGN_DISCLAIMER_AD_EXTENSIONS = 'CampaignDisclaimerAdExtensions';

    public const ADCUSTOMIZER_ATTRIBUTE = 'AdcustomizerAttribute';

    public const CAMPAIGN_ADCUSTOMIZER_ATTRIBUTE = 'CampaignAdcustomizerAttribute';

    public const AD_GROUP_ADCUSTOMIZER_ATTRIBUTE = 'AdGroupAdcustomizerAttribute';

    public const KEYWORD_ADCUSTOMIZER_ATTRIBUTE = 'KeywordAdcustomizerAttribute';

    public const CAMPAIGN_CONVERSION_GOAL = 'CampaignConversionGoal';

    public const AD_GROUP_HOTEL_LISTING_GROUPS = 'AdGroupHotelListingGroups';

    public const ASSET_GROUPS = 'AssetGroups';

    public const AUDIENCE_GROUPS = 'AudienceGroups';

    public const CAMPAIGN_NEGATIVE_WEBPAGES = 'CampaignNegativeWebpages';

    public const AUDIENCE_GROUP_ASSET_GROUP_ASSOCIATIONS = 'AudienceGroupAssetGroupAssociations';

    public const ASSET_GROUP_LISTING_GROUPS = 'AssetGroupListingGroups';

    public const LOGO_AD_EXTENSIONS = 'LogoAdExtensions';

    public const ACCOUNT_LOGO_AD_EXTENSIONS = 'AccountLogoAdExtensions';

    public const CAMPAIGN_LOGO_AD_EXTENSIONS = 'CampaignLogoAdExtensions';

    public const AD_GROUP_LOGO_AD_EXTENSIONS = 'AdGroupLogoAdExtensions';

    public const LEAD_FORM_AD_EXTENSIONS = 'LeadFormAdExtensions';

    public const ACCOUNT_LEAD_FORM_AD_EXTENSIONS = 'AccountLeadFormAdExtensions';

    public const CAMPAIGN_LEAD_FORM_AD_EXTENSIONS = 'CampaignLeadFormAdExtensions';

    public const ACCOUNT_NEGATIVE_KEYWORD_LIST = 'AccountNegativeKeywordList';

    public const ACCOUNT_NEGATIVE_KEYWORD_LIST_ASSOCIATION = 'AccountNegativeKeywordListAssociation';

    public const ACCOUNT_NEGATIVE_KEYWORD = 'AccountNegativeKeyword';

    public const CONVERSION_GOAL = 'ConversionGoal';

    public const EVENT_GOAL = 'EventGoal';

    public const APP_INSTALL_GOAL = 'AppInstallGoal';

    public const MULTI_STAGE_GOAL = 'MultiStageGoal';

    public const DURATION_GOAL = 'DurationGoal';

    public const OFFLINE_CONVERSION_GOAL = 'OfflineConversionGoal';

    public const URL_GOAL = 'UrlGoal';

    public const IN_STORE_TRANSACTION_GOAL = 'InStoreTransactionGoal';

    public const PAGES_VIEWED_PER_VISIT_GOAL = 'PagesViewedPerVisitGoal';

    public const SMART_GOAL = 'SmartGoal';

    public const IN_STORE_VISIT_GOAL = 'InStoreVisitGoal';

    public const PRODUCT_GOAL = 'ProductGoal';

    public const SEASONALITY_ADJUSTMENTS = 'SeasonalityAdjustments';

    public const DATA_EXCLUSIONS = 'DataExclusions';

    public const BRAND_LIST = 'BrandList';

    public const BRAND_ITEM = 'BrandItem';

    public const CAMPAIGN_BRAND_LIST_ASSOCIATION = 'CampaignBrandListAssociation';

    public const ASSET_GROUP_SEARCH_THEMES = 'AssetGroupSearchThemes';

    public const IMPRESSION_BASED_REMARKETING_LIST = 'ImpressionBasedRemarketingList';

    public const AD_GROUP_IMPRESSION_BASED_REMARKETING_LIST_ASSOCIATIONS = 'AdGroupImpressionBasedRemarketingListAssociations';

    public const AD_GROUP_NEGATIVE_IMPRESSION_BASED_REMARKETING_LIST_ASSOCIATIONS = 'AdGroupNegativeImpressionBasedRemarketingListAssociations';

    public const CAMPAIGN_IMPRESSION_BASED_REMARKETING_LIST_ASSOCIATIONS = 'CampaignImpressionBasedRemarketingListAssociations';

    public const CAMPAIGN_NEGATIVE_IMPRESSION_BASED_REMARKETING_LIST_ASSOCIATIONS = 'CampaignNegativeImpressionBasedRemarketingListAssociations';

    public const ASSET_GROUP_URL_TARGETS = 'AssetGroupUrlTargets';

    public const NEW_CUSTOMER_ACQUISITION_GOAL = 'NewCustomerAcquisitionGoal';

    public const CONVERSION_VALUE_RULE = 'ConversionValueRule';

    public const ACCOUNT_PLACEMENT_EXCLUSION_LIST = 'AccountPlacementExclusionList';

    public const ACCOUNT_PLACEMENT_EXCLUSION_LIST_ITEM = 'AccountPlacementExclusionListItem';

    public const CAMPAIGN_ACCOUNT_PLACEMENT_EXCLUSION_LIST_ASSOCIATION = 'CampaignAccountPlacementExclusionListAssociation';

    public const ACCOUNT_PLACEMENT_INCLUSION_LIST = 'AccountPlacementInclusionList';

    public const ACCOUNT_PLACEMENT_INCLUSION_LIST_ITEM = 'AccountPlacementInclusionListItem';

    public const CAMPAIGN_ACCOUNT_PLACEMENT_INCLUSION_LIST_ASSOCIATION = 'CampaignAccountPlacementInclusionListAssociation';

    public const TOPIC = 'Topic';

    public const CONTENT_PLACEMENT = 'ContentPlacement';

    public const BRAND_KIT = 'BrandKit';


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
            self::NONE,
            self::CAMPAIGNS,
            self::AD_GROUPS,
            self::ADS,
            self::KEYWORDS,
            self::CAMPAIGN_NEGATIVE_KEYWORDS,
            self::AD_GROUP_NEGATIVE_KEYWORDS,
            self::CAMPAIGN_TARGET_CRITERIONS,
            self::AD_GROUP_TARGET_CRITERIONS,
            self::CAMPAIGN_NEGATIVE_SITES,
            self::AD_GROUP_NEGATIVE_SITES,
            self::CAMPAIGN_LOCATION_AD_EXTENSIONS,
            self::CAMPAIGN_CALL_AD_EXTENSIONS,
            self::LOCATION_AD_EXTENSIONS,
            self::CALL_AD_EXTENSIONS,
            self::NEGATIVE_KEYWORD_LISTS,
            self::SHARED_NEGATIVE_KEYWORDS,
            self::CAMPAIGN_NEGATIVE_KEYWORD_LIST_ASSOCIATIONS,
            self::IMAGE_AD_EXTENSIONS,
            self::CAMPAIGN_IMAGE_AD_EXTENSIONS,
            self::AD_GROUP_IMAGE_AD_EXTENSIONS,
            self::APP_AD_EXTENSIONS,
            self::AD_GROUP_APP_AD_EXTENSIONS,
            self::CAMPAIGN_APP_AD_EXTENSIONS,
            self::PRICE_AD_EXTENSIONS,
            self::REVIEW_AD_EXTENSIONS,
            self::CAMPAIGN_NEGATIVE_DYNAMIC_SEARCH_AD_TARGETS,
            self::AD_GROUP_PRODUCT_PARTITIONS,
            self::CAMPAIGN_PRODUCT_SCOPES,
            self::CAMPAIGN_REVIEW_AD_EXTENSIONS,
            self::AD_GROUP_REVIEW_AD_EXTENSIONS,
            self::CALLOUT_AD_EXTENSIONS,
            self::CAMPAIGN_CALLOUT_AD_EXTENSIONS,
            self::AD_GROUP_CALLOUT_AD_EXTENSIONS,
            self::SITELINK_AD_EXTENSIONS,
            self::CAMPAIGN_SITELINK_AD_EXTENSIONS,
            self::AD_GROUP_SITELINK_AD_EXTENSIONS,
            self::STRUCTURED_SNIPPET_AD_EXTENSIONS,
            self::CAMPAIGN_STRUCTURED_SNIPPET_AD_EXTENSIONS,
            self::AD_GROUP_STRUCTURED_SNIPPET_AD_EXTENSIONS,
            self::REMARKETING_LISTS,
            self::AD_GROUP_REMARKETING_LIST_ASSOCIATIONS,
            self::BUDGETS,
            self::TEXT_ADS,
            self::PRODUCT_ADS,
            self::APP_INSTALL_ADS,
            self::EXPANDED_TEXT_ADS,
            self::DYNAMIC_SEARCH_ADS,
            self::AD_GROUP_DYNAMIC_SEARCH_AD_TARGETS,
            self::AD_GROUP_NEGATIVE_DYNAMIC_SEARCH_AD_TARGETS,
            self::CAMPAIGN_PRICE_AD_EXTENSIONS,
            self::AD_GROUP_PRICE_AD_EXTENSIONS,
            self::LABELS,
            self::CAMPAIGN_LABELS,
            self::AD_GROUP_LABELS,
            self::TEXT_AD_LABELS,
            self::KEYWORD_LABELS,
            self::AD_GROUP_NEGATIVE_REMARKETING_LIST_ASSOCIATIONS,
            self::CUSTOM_AUDIENCES,
            self::AD_GROUP_CUSTOM_AUDIENCE_ASSOCIATIONS,
            self::AD_GROUP_NEGATIVE_CUSTOM_AUDIENCE_ASSOCIATIONS,
            self::IN_MARKET_AUDIENCES,
            self::AD_GROUP_IN_MARKET_AUDIENCE_ASSOCIATIONS,
            self::AD_GROUP_NEGATIVE_IN_MARKET_AUDIENCE_ASSOCIATIONS,
            self::AUDIENCES,
            self::AD_GROUP_AUDIENCE_ASSOCIATIONS,
            self::AD_GROUP_NEGATIVE_AUDIENCE_ASSOCIATIONS,
            self::PRODUCT_AD_LABELS,
            self::APP_INSTALL_AD_LABELS,
            self::EXPANDED_TEXT_AD_LABELS,
            self::DYNAMIC_SEARCH_AD_LABELS,
            self::ACCOUNT_LOCATION_AD_EXTENSIONS,
            self::ACCOUNT_IMAGE_AD_EXTENSIONS,
            self::ACCOUNT_APP_AD_EXTENSIONS,
            self::ACCOUNT_PRICE_AD_EXTENSIONS,
            self::ACCOUNT_REVIEW_AD_EXTENSIONS,
            self::ACCOUNT_CALLOUT_AD_EXTENSIONS,
            self::ACCOUNT_SITELINK_AD_EXTENSIONS,
            self::ACCOUNT_STRUCTURED_SNIPPET_AD_EXTENSIONS,
            self::RESPONSIVE_ADS,
            self::RESPONSIVE_AD_LABELS,
            self::PRODUCT_AUDIENCES,
            self::AD_GROUP_PRODUCT_AUDIENCE_ASSOCIATIONS,
            self::AD_GROUP_NEGATIVE_PRODUCT_AUDIENCE_ASSOCIATIONS,
            self::SIMILAR_REMARKETING_LISTS,
            self::AD_GROUP_SIMILAR_REMARKETING_LIST_ASSOCIATIONS,
            self::AD_GROUP_NEGATIVE_SIMILAR_REMARKETING_LIST_ASSOCIATIONS,
            self::EXPERIMENTS,
            self::ACTION_AD_EXTENSIONS,
            self::CAMPAIGN_ACTION_AD_EXTENSIONS,
            self::AD_GROUP_ACTION_AD_EXTENSIONS,
            self::ACCOUNT_ACTION_AD_EXTENSIONS,
            self::RESPONSIVE_SEARCH_ADS,
            self::RESPONSIVE_SEARCH_AD_LABELS,
            self::CAMPAIGN_AUDIENCE_ASSOCIATIONS,
            self::CAMPAIGN_NEGATIVE_AUDIENCE_ASSOCIATIONS,
            self::CAMPAIGN_CUSTOM_AUDIENCE_ASSOCIATIONS,
            self::CAMPAIGN_NEGATIVE_CUSTOM_AUDIENCE_ASSOCIATIONS,
            self::CAMPAIGN_IN_MARKET_AUDIENCE_ASSOCIATIONS,
            self::CAMPAIGN_NEGATIVE_IN_MARKET_AUDIENCE_ASSOCIATIONS,
            self::CAMPAIGN_PRODUCT_AUDIENCE_ASSOCIATIONS,
            self::CAMPAIGN_NEGATIVE_PRODUCT_AUDIENCE_ASSOCIATIONS,
            self::CAMPAIGN_REMARKETING_LIST_ASSOCIATIONS,
            self::CAMPAIGN_NEGATIVE_REMARKETING_LIST_ASSOCIATIONS,
            self::CAMPAIGN_SIMILAR_REMARKETING_LIST_ASSOCIATIONS,
            self::CAMPAIGN_NEGATIVE_SIMILAR_REMARKETING_LIST_ASSOCIATIONS,
            self::FEEDS,
            self::FEED_ITEMS,
            self::CAMPAIGN_NEGATIVE_STORE_CRITERIONS,
            self::PROMOTION_AD_EXTENSIONS,
            self::ACCOUNT_PROMOTION_AD_EXTENSIONS,
            self::CAMPAIGN_PROMOTION_AD_EXTENSIONS,
            self::AD_GROUP_PROMOTION_AD_EXTENSIONS,
            self::COMBINED_LISTS,
            self::AD_GROUP_COMBINED_LIST_ASSOCIATIONS,
            self::AD_GROUP_NEGATIVE_COMBINED_LIST_ASSOCIATIONS,
            self::CAMPAIGN_COMBINED_LIST_ASSOCIATIONS,
            self::CAMPAIGN_NEGATIVE_COMBINED_LIST_ASSOCIATIONS,
            self::IMAGES,
            self::CUSTOMER_LISTS,
            self::AD_GROUP_CUSTOMER_LIST_ASSOCIATIONS,
            self::AD_GROUP_NEGATIVE_CUSTOMER_LIST_ASSOCIATIONS,
            self::CAMPAIGN_CUSTOMER_LIST_ASSOCIATIONS,
            self::CAMPAIGN_NEGATIVE_CUSTOMER_LIST_ASSOCIATIONS,
            self::FILTER_LINK_AD_EXTENSIONS,
            self::ACCOUNT_FILTER_LINK_AD_EXTENSIONS,
            self::CAMPAIGN_FILTER_LINK_AD_EXTENSIONS,
            self::AD_GROUP_FILTER_LINK_AD_EXTENSIONS,
            self::FLYER_AD_EXTENSIONS,
            self::ACCOUNT_FLYER_AD_EXTENSIONS,
            self::CAMPAIGN_FLYER_AD_EXTENSIONS,
            self::AD_GROUP_FLYER_AD_EXTENSIONS,
            self::BID_STRATEGIES,
            self::VIDEO_AD_EXTENSIONS,
            self::ACCOUNT_VIDEO_AD_EXTENSIONS,
            self::CAMPAIGN_VIDEO_AD_EXTENSIONS,
            self::AD_GROUP_VIDEO_AD_EXTENSIONS,
            self::VIDEOS,
            self::DISCLAIMER_AD_EXTENSIONS,
            self::CAMPAIGN_DISCLAIMER_AD_EXTENSIONS,
            self::ADCUSTOMIZER_ATTRIBUTE,
            self::CAMPAIGN_ADCUSTOMIZER_ATTRIBUTE,
            self::AD_GROUP_ADCUSTOMIZER_ATTRIBUTE,
            self::KEYWORD_ADCUSTOMIZER_ATTRIBUTE,
            self::CAMPAIGN_CONVERSION_GOAL,
            self::AD_GROUP_HOTEL_LISTING_GROUPS,
            self::ASSET_GROUPS,
            self::AUDIENCE_GROUPS,
            self::CAMPAIGN_NEGATIVE_WEBPAGES,
            self::AUDIENCE_GROUP_ASSET_GROUP_ASSOCIATIONS,
            self::ASSET_GROUP_LISTING_GROUPS,
            self::LOGO_AD_EXTENSIONS,
            self::ACCOUNT_LOGO_AD_EXTENSIONS,
            self::CAMPAIGN_LOGO_AD_EXTENSIONS,
            self::AD_GROUP_LOGO_AD_EXTENSIONS,
            self::LEAD_FORM_AD_EXTENSIONS,
            self::ACCOUNT_LEAD_FORM_AD_EXTENSIONS,
            self::CAMPAIGN_LEAD_FORM_AD_EXTENSIONS,
            self::ACCOUNT_NEGATIVE_KEYWORD_LIST,
            self::ACCOUNT_NEGATIVE_KEYWORD_LIST_ASSOCIATION,
            self::ACCOUNT_NEGATIVE_KEYWORD,
            self::CONVERSION_GOAL,
            self::EVENT_GOAL,
            self::APP_INSTALL_GOAL,
            self::MULTI_STAGE_GOAL,
            self::DURATION_GOAL,
            self::OFFLINE_CONVERSION_GOAL,
            self::URL_GOAL,
            self::IN_STORE_TRANSACTION_GOAL,
            self::PAGES_VIEWED_PER_VISIT_GOAL,
            self::SMART_GOAL,
            self::IN_STORE_VISIT_GOAL,
            self::PRODUCT_GOAL,
            self::SEASONALITY_ADJUSTMENTS,
            self::DATA_EXCLUSIONS,
            self::BRAND_LIST,
            self::BRAND_ITEM,
            self::CAMPAIGN_BRAND_LIST_ASSOCIATION,
            self::ASSET_GROUP_SEARCH_THEMES,
            self::IMPRESSION_BASED_REMARKETING_LIST,
            self::AD_GROUP_IMPRESSION_BASED_REMARKETING_LIST_ASSOCIATIONS,
            self::AD_GROUP_NEGATIVE_IMPRESSION_BASED_REMARKETING_LIST_ASSOCIATIONS,
            self::CAMPAIGN_IMPRESSION_BASED_REMARKETING_LIST_ASSOCIATIONS,
            self::CAMPAIGN_NEGATIVE_IMPRESSION_BASED_REMARKETING_LIST_ASSOCIATIONS,
            self::ASSET_GROUP_URL_TARGETS,
            self::NEW_CUSTOMER_ACQUISITION_GOAL,
            self::CONVERSION_VALUE_RULE,
            self::ACCOUNT_PLACEMENT_EXCLUSION_LIST,
            self::ACCOUNT_PLACEMENT_EXCLUSION_LIST_ITEM,
            self::CAMPAIGN_ACCOUNT_PLACEMENT_EXCLUSION_LIST_ASSOCIATION,
            self::ACCOUNT_PLACEMENT_INCLUSION_LIST,
            self::ACCOUNT_PLACEMENT_INCLUSION_LIST_ITEM,
            self::CAMPAIGN_ACCOUNT_PLACEMENT_INCLUSION_LIST_ASSOCIATION,
            self::TOPIC,
            self::CONTENT_PLACEMENT,
            self::BRAND_KIT
        ];
    }
}
