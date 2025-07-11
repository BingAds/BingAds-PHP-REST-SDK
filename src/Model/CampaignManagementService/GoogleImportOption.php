<?php
/**
 * GoogleImportOption
 * CampaignManagementService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CampaignManagementService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CampaignManagementService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class GoogleImportOption extends ImportOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GoogleImportOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'NewEntities' => 'bool',
        'NewPausedCampaignsAndChildEntities' => 'bool',
        'NewActiveCampaignsAndChildEntities' => 'bool',
        'NewAdGroupsAndChildEntitiesForExistingCampaigns' => 'bool',
        'NewActiveAdsForExistingAdGroups' => 'bool',
        'NewKeywordsForExistingAdGroups' => 'bool',
        'NewNegativeKeywordsForExistingParents' => 'bool',
        'NewNegativeKeywordLists' => 'bool',
        'NewAccountNegativeKeywords' => 'bool',
        'PauseNewCampaigns' => 'bool',
        'NewKeywordUrls' => 'bool',
        'NewUrlOptions' => 'bool',
        'NewNegativeSites' => 'bool',
        'NewPausedAdsForExistingAdGroups' => 'bool',
        'NewLabels' => 'bool',
        'NewProductFilters' => 'bool',
        'NewLocationTargets' => 'bool',
        'NewAdSchedules' => 'bool',
        'NewDeviceTargets' => 'bool',
        'NewDemographicTargets' => 'bool',
        'NewAudienceTargets' => 'bool',
        'NewAppAdExtensions' => 'bool',
        'NewCallAdExtensions' => 'bool',
        'NewCalloutAdExtensions' => 'bool',
        'NewPriceAdExtensions' => 'bool',
        'NewLocationAdExtensions' => 'bool',
        'NewReviewAdExtensions' => 'bool',
        'NewSitelinkAdExtensions' => 'bool',
        'NewStructuredSnippetAdExtensions' => 'bool',
        'NewPromotionAdExtensions' => 'bool',
        'NewImageAdExtensions' => 'bool',
        'NewLogoAdExtensions' => 'bool',
        'NewLeadFormAdExtensions' => 'bool',
        'NewPageFeeds' => 'bool',
        'NewAdCustomizerFeeds' => 'bool',
        'NewBrandSuitability' => 'bool',
        'NewConversionGoals' => 'bool',
        'NewCarouselAd' => 'bool',
        'UpdateEntities' => 'bool',
        'UpdateCampaignBudgets' => 'bool',
        'UpdateBids' => 'bool',
        'UpdateNegativeKeywordLists' => 'bool',
        'UpdateAccountNegativeKeywords' => 'bool',
        'UpdateNegativeSites' => 'bool',
        'UpdateKeywordUrls' => 'bool',
        'UpdateUrlOptions' => 'bool',
        'UpdateCampaignNames' => 'bool',
        'UpdateLabels' => 'bool',
        'UpdateProductFilters' => 'bool',
        'UpdateConversionGoals' => 'bool',
        'UpdateLocationTargets' => 'bool',
        'UpdateAdSchedules' => 'bool',
        'UpdateDeviceTargets' => 'bool',
        'UpdateDemographicTargets' => 'bool',
        'UpdateCampaignAdGroupLanguages' => 'bool',
        'UpdateAudienceTargets' => 'bool',
        'UpdateAppAdExtensions' => 'bool',
        'UpdateCallAdExtensions' => 'bool',
        'UpdateCalloutAdExtensions' => 'bool',
        'UpdatePriceAdExtensions' => 'bool',
        'UpdateLocationAdExtensions' => 'bool',
        'UpdateReviewAdExtensions' => 'bool',
        'UpdateSitelinkAdExtensions' => 'bool',
        'UpdateStructuredSnippetAdExtensions' => 'bool',
        'UpdatePromotionAdExtensions' => 'bool',
        'UpdateImageAdExtensions' => 'bool',
        'UpdateLogoAdExtensions' => 'bool',
        'UpdateLeadFormAdExtensions' => 'bool',
        'UpdateStatusForCampaigns' => 'bool',
        'UpdateStatusForAdGroups' => 'bool',
        'UpdateStatusForAds' => 'bool',
        'UpdateStatusForKeywords' => 'bool',
        'UpdateAdGroupNetwork' => 'bool',
        'UpdatePageFeeds' => 'bool',
        'UpdateAdCustomizerFeeds' => 'bool',
        'UpdateBrandSuitability' => 'bool',
        'UpdateAdCustomizerAttributes' => 'bool',
        'DeleteRemovedEntities' => 'bool',
        'RaiseBidsToMinimum' => 'bool',
        'RaiseCampaignBudgetsToMinimum' => 'bool',
        'AdjustmentForCampaignBudgets' => 'float',
        'AdjustmentForBids' => 'float',
        'SuffixForUrls' => 'string',
        'SearchAndReplaceForUrls' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty',
        'SuffixForTrackingTemplates' => 'string',
        'SearchAndReplaceForTrackingTemplates' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty',
        'SuffixForCampaignNames' => 'string',
        'SearchAndReplaceForCampaignNames' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty',
        'SearchAndReplaceForCustomParameters' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty',
        'SearchAndReplaceForFinalURLSuffix' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty',
        'PauseCampaignsWithoutSupportedLocations' => 'bool',
        'EnableParentLocationMapping' => 'bool',
        'AssociatedStoreId' => 'string',
        'RaiseProductGroupBidsToMinimum' => 'bool',
        'SearchAndDsaMixedCampaignAsSearchCampaign' => 'bool',
        'AccountUrlOptions' => 'bool',
        'EnableAutoCurrencyConversion' => 'bool',
        'UpdateBiddingStrategies' => 'bool',
        'AssociatedUetTagId' => 'string',
        'AutoDeviceBidOptimization' => 'bool',
        'AdScheduleUseSearcherTimezone' => 'bool',
        'PauseAIMAdGroupIfAllAudienceCriterionNotImported' => 'bool',
        'RenameCampaignNameWithSuffix' => 'bool',
        'UpdateAdUrls' => 'bool',
        'UpdateSitelinkUrls' => 'bool',
        'UpdateAssetAutomationCampaignSetting' => 'bool',
        'ForwardCompatibilityMap' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]',
        'Type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'NewEntities' => null,
        'NewPausedCampaignsAndChildEntities' => null,
        'NewActiveCampaignsAndChildEntities' => null,
        'NewAdGroupsAndChildEntitiesForExistingCampaigns' => null,
        'NewActiveAdsForExistingAdGroups' => null,
        'NewKeywordsForExistingAdGroups' => null,
        'NewNegativeKeywordsForExistingParents' => null,
        'NewNegativeKeywordLists' => null,
        'NewAccountNegativeKeywords' => null,
        'PauseNewCampaigns' => null,
        'NewKeywordUrls' => null,
        'NewUrlOptions' => null,
        'NewNegativeSites' => null,
        'NewPausedAdsForExistingAdGroups' => null,
        'NewLabels' => null,
        'NewProductFilters' => null,
        'NewLocationTargets' => null,
        'NewAdSchedules' => null,
        'NewDeviceTargets' => null,
        'NewDemographicTargets' => null,
        'NewAudienceTargets' => null,
        'NewAppAdExtensions' => null,
        'NewCallAdExtensions' => null,
        'NewCalloutAdExtensions' => null,
        'NewPriceAdExtensions' => null,
        'NewLocationAdExtensions' => null,
        'NewReviewAdExtensions' => null,
        'NewSitelinkAdExtensions' => null,
        'NewStructuredSnippetAdExtensions' => null,
        'NewPromotionAdExtensions' => null,
        'NewImageAdExtensions' => null,
        'NewLogoAdExtensions' => null,
        'NewLeadFormAdExtensions' => null,
        'NewPageFeeds' => null,
        'NewAdCustomizerFeeds' => null,
        'NewBrandSuitability' => null,
        'NewConversionGoals' => null,
        'NewCarouselAd' => null,
        'UpdateEntities' => null,
        'UpdateCampaignBudgets' => null,
        'UpdateBids' => null,
        'UpdateNegativeKeywordLists' => null,
        'UpdateAccountNegativeKeywords' => null,
        'UpdateNegativeSites' => null,
        'UpdateKeywordUrls' => null,
        'UpdateUrlOptions' => null,
        'UpdateCampaignNames' => null,
        'UpdateLabels' => null,
        'UpdateProductFilters' => null,
        'UpdateConversionGoals' => null,
        'UpdateLocationTargets' => null,
        'UpdateAdSchedules' => null,
        'UpdateDeviceTargets' => null,
        'UpdateDemographicTargets' => null,
        'UpdateCampaignAdGroupLanguages' => null,
        'UpdateAudienceTargets' => null,
        'UpdateAppAdExtensions' => null,
        'UpdateCallAdExtensions' => null,
        'UpdateCalloutAdExtensions' => null,
        'UpdatePriceAdExtensions' => null,
        'UpdateLocationAdExtensions' => null,
        'UpdateReviewAdExtensions' => null,
        'UpdateSitelinkAdExtensions' => null,
        'UpdateStructuredSnippetAdExtensions' => null,
        'UpdatePromotionAdExtensions' => null,
        'UpdateImageAdExtensions' => null,
        'UpdateLogoAdExtensions' => null,
        'UpdateLeadFormAdExtensions' => null,
        'UpdateStatusForCampaigns' => null,
        'UpdateStatusForAdGroups' => null,
        'UpdateStatusForAds' => null,
        'UpdateStatusForKeywords' => null,
        'UpdateAdGroupNetwork' => null,
        'UpdatePageFeeds' => null,
        'UpdateAdCustomizerFeeds' => null,
        'UpdateBrandSuitability' => null,
        'UpdateAdCustomizerAttributes' => null,
        'DeleteRemovedEntities' => null,
        'RaiseBidsToMinimum' => null,
        'RaiseCampaignBudgetsToMinimum' => null,
        'AdjustmentForCampaignBudgets' => 'double',
        'AdjustmentForBids' => 'double',
        'SuffixForUrls' => null,
        'SearchAndReplaceForUrls' => null,
        'SuffixForTrackingTemplates' => null,
        'SearchAndReplaceForTrackingTemplates' => null,
        'SuffixForCampaignNames' => null,
        'SearchAndReplaceForCampaignNames' => null,
        'SearchAndReplaceForCustomParameters' => null,
        'SearchAndReplaceForFinalURLSuffix' => null,
        'PauseCampaignsWithoutSupportedLocations' => null,
        'EnableParentLocationMapping' => null,
        'AssociatedStoreId' => 'int64',
        'RaiseProductGroupBidsToMinimum' => null,
        'SearchAndDsaMixedCampaignAsSearchCampaign' => null,
        'AccountUrlOptions' => null,
        'EnableAutoCurrencyConversion' => null,
        'UpdateBiddingStrategies' => null,
        'AssociatedUetTagId' => 'int64',
        'AutoDeviceBidOptimization' => null,
        'AdScheduleUseSearcherTimezone' => null,
        'PauseAIMAdGroupIfAllAudienceCriterionNotImported' => null,
        'RenameCampaignNameWithSuffix' => null,
        'UpdateAdUrls' => null,
        'UpdateSitelinkUrls' => null,
        'UpdateAssetAutomationCampaignSetting' => null,
        'ForwardCompatibilityMap' => null,
        'Type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'NewEntities' => true,
        'NewPausedCampaignsAndChildEntities' => true,
        'NewActiveCampaignsAndChildEntities' => true,
        'NewAdGroupsAndChildEntitiesForExistingCampaigns' => true,
        'NewActiveAdsForExistingAdGroups' => true,
        'NewKeywordsForExistingAdGroups' => true,
        'NewNegativeKeywordsForExistingParents' => true,
        'NewNegativeKeywordLists' => true,
        'NewAccountNegativeKeywords' => true,
        'PauseNewCampaigns' => true,
        'NewKeywordUrls' => true,
        'NewUrlOptions' => true,
        'NewNegativeSites' => true,
        'NewPausedAdsForExistingAdGroups' => true,
        'NewLabels' => true,
        'NewProductFilters' => true,
        'NewLocationTargets' => true,
        'NewAdSchedules' => true,
        'NewDeviceTargets' => true,
        'NewDemographicTargets' => true,
        'NewAudienceTargets' => true,
        'NewAppAdExtensions' => true,
        'NewCallAdExtensions' => true,
        'NewCalloutAdExtensions' => true,
        'NewPriceAdExtensions' => true,
        'NewLocationAdExtensions' => true,
        'NewReviewAdExtensions' => true,
        'NewSitelinkAdExtensions' => true,
        'NewStructuredSnippetAdExtensions' => true,
        'NewPromotionAdExtensions' => true,
        'NewImageAdExtensions' => true,
        'NewLogoAdExtensions' => true,
        'NewLeadFormAdExtensions' => true,
        'NewPageFeeds' => true,
        'NewAdCustomizerFeeds' => true,
        'NewBrandSuitability' => true,
        'NewConversionGoals' => true,
        'NewCarouselAd' => true,
        'UpdateEntities' => true,
        'UpdateCampaignBudgets' => true,
        'UpdateBids' => true,
        'UpdateNegativeKeywordLists' => true,
        'UpdateAccountNegativeKeywords' => true,
        'UpdateNegativeSites' => true,
        'UpdateKeywordUrls' => true,
        'UpdateUrlOptions' => true,
        'UpdateCampaignNames' => true,
        'UpdateLabels' => true,
        'UpdateProductFilters' => true,
        'UpdateConversionGoals' => true,
        'UpdateLocationTargets' => true,
        'UpdateAdSchedules' => true,
        'UpdateDeviceTargets' => true,
        'UpdateDemographicTargets' => true,
        'UpdateCampaignAdGroupLanguages' => true,
        'UpdateAudienceTargets' => true,
        'UpdateAppAdExtensions' => true,
        'UpdateCallAdExtensions' => true,
        'UpdateCalloutAdExtensions' => true,
        'UpdatePriceAdExtensions' => true,
        'UpdateLocationAdExtensions' => true,
        'UpdateReviewAdExtensions' => true,
        'UpdateSitelinkAdExtensions' => true,
        'UpdateStructuredSnippetAdExtensions' => true,
        'UpdatePromotionAdExtensions' => true,
        'UpdateImageAdExtensions' => true,
        'UpdateLogoAdExtensions' => true,
        'UpdateLeadFormAdExtensions' => true,
        'UpdateStatusForCampaigns' => true,
        'UpdateStatusForAdGroups' => true,
        'UpdateStatusForAds' => true,
        'UpdateStatusForKeywords' => true,
        'UpdateAdGroupNetwork' => true,
        'UpdatePageFeeds' => true,
        'UpdateAdCustomizerFeeds' => true,
        'UpdateBrandSuitability' => true,
        'UpdateAdCustomizerAttributes' => true,
        'DeleteRemovedEntities' => true,
        'RaiseBidsToMinimum' => true,
        'RaiseCampaignBudgetsToMinimum' => true,
        'AdjustmentForCampaignBudgets' => true,
        'AdjustmentForBids' => true,
        'SuffixForUrls' => true,
        'SearchAndReplaceForUrls' => true,
        'SuffixForTrackingTemplates' => true,
        'SearchAndReplaceForTrackingTemplates' => true,
        'SuffixForCampaignNames' => true,
        'SearchAndReplaceForCampaignNames' => true,
        'SearchAndReplaceForCustomParameters' => true,
        'SearchAndReplaceForFinalURLSuffix' => true,
        'PauseCampaignsWithoutSupportedLocations' => true,
        'EnableParentLocationMapping' => true,
        'AssociatedStoreId' => true,
        'RaiseProductGroupBidsToMinimum' => true,
        'SearchAndDsaMixedCampaignAsSearchCampaign' => true,
        'AccountUrlOptions' => true,
        'EnableAutoCurrencyConversion' => true,
        'UpdateBiddingStrategies' => true,
        'AssociatedUetTagId' => true,
        'AutoDeviceBidOptimization' => true,
        'AdScheduleUseSearcherTimezone' => true,
        'PauseAIMAdGroupIfAllAudienceCriterionNotImported' => true,
        'RenameCampaignNameWithSuffix' => true,
        'UpdateAdUrls' => true,
        'UpdateSitelinkUrls' => true,
        'UpdateAssetAutomationCampaignSetting' => true,
        'ForwardCompatibilityMap' => true,
        'Type' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'NewEntities' => 'NewEntities',
        'NewPausedCampaignsAndChildEntities' => 'NewPausedCampaignsAndChildEntities',
        'NewActiveCampaignsAndChildEntities' => 'NewActiveCampaignsAndChildEntities',
        'NewAdGroupsAndChildEntitiesForExistingCampaigns' => 'NewAdGroupsAndChildEntitiesForExistingCampaigns',
        'NewActiveAdsForExistingAdGroups' => 'NewActiveAdsForExistingAdGroups',
        'NewKeywordsForExistingAdGroups' => 'NewKeywordsForExistingAdGroups',
        'NewNegativeKeywordsForExistingParents' => 'NewNegativeKeywordsForExistingParents',
        'NewNegativeKeywordLists' => 'NewNegativeKeywordLists',
        'NewAccountNegativeKeywords' => 'NewAccountNegativeKeywords',
        'PauseNewCampaigns' => 'PauseNewCampaigns',
        'NewKeywordUrls' => 'NewKeywordUrls',
        'NewUrlOptions' => 'NewUrlOptions',
        'NewNegativeSites' => 'NewNegativeSites',
        'NewPausedAdsForExistingAdGroups' => 'NewPausedAdsForExistingAdGroups',
        'NewLabels' => 'NewLabels',
        'NewProductFilters' => 'NewProductFilters',
        'NewLocationTargets' => 'NewLocationTargets',
        'NewAdSchedules' => 'NewAdSchedules',
        'NewDeviceTargets' => 'NewDeviceTargets',
        'NewDemographicTargets' => 'NewDemographicTargets',
        'NewAudienceTargets' => 'NewAudienceTargets',
        'NewAppAdExtensions' => 'NewAppAdExtensions',
        'NewCallAdExtensions' => 'NewCallAdExtensions',
        'NewCalloutAdExtensions' => 'NewCalloutAdExtensions',
        'NewPriceAdExtensions' => 'NewPriceAdExtensions',
        'NewLocationAdExtensions' => 'NewLocationAdExtensions',
        'NewReviewAdExtensions' => 'NewReviewAdExtensions',
        'NewSitelinkAdExtensions' => 'NewSitelinkAdExtensions',
        'NewStructuredSnippetAdExtensions' => 'NewStructuredSnippetAdExtensions',
        'NewPromotionAdExtensions' => 'NewPromotionAdExtensions',
        'NewImageAdExtensions' => 'NewImageAdExtensions',
        'NewLogoAdExtensions' => 'NewLogoAdExtensions',
        'NewLeadFormAdExtensions' => 'NewLeadFormAdExtensions',
        'NewPageFeeds' => 'NewPageFeeds',
        'NewAdCustomizerFeeds' => 'NewAdCustomizerFeeds',
        'NewBrandSuitability' => 'NewBrandSuitability',
        'NewConversionGoals' => 'NewConversionGoals',
        'NewCarouselAd' => 'NewCarouselAd',
        'UpdateEntities' => 'UpdateEntities',
        'UpdateCampaignBudgets' => 'UpdateCampaignBudgets',
        'UpdateBids' => 'UpdateBids',
        'UpdateNegativeKeywordLists' => 'UpdateNegativeKeywordLists',
        'UpdateAccountNegativeKeywords' => 'UpdateAccountNegativeKeywords',
        'UpdateNegativeSites' => 'UpdateNegativeSites',
        'UpdateKeywordUrls' => 'UpdateKeywordUrls',
        'UpdateUrlOptions' => 'UpdateUrlOptions',
        'UpdateCampaignNames' => 'UpdateCampaignNames',
        'UpdateLabels' => 'UpdateLabels',
        'UpdateProductFilters' => 'UpdateProductFilters',
        'UpdateConversionGoals' => 'UpdateConversionGoals',
        'UpdateLocationTargets' => 'UpdateLocationTargets',
        'UpdateAdSchedules' => 'UpdateAdSchedules',
        'UpdateDeviceTargets' => 'UpdateDeviceTargets',
        'UpdateDemographicTargets' => 'UpdateDemographicTargets',
        'UpdateCampaignAdGroupLanguages' => 'UpdateCampaignAdGroupLanguages',
        'UpdateAudienceTargets' => 'UpdateAudienceTargets',
        'UpdateAppAdExtensions' => 'UpdateAppAdExtensions',
        'UpdateCallAdExtensions' => 'UpdateCallAdExtensions',
        'UpdateCalloutAdExtensions' => 'UpdateCalloutAdExtensions',
        'UpdatePriceAdExtensions' => 'UpdatePriceAdExtensions',
        'UpdateLocationAdExtensions' => 'UpdateLocationAdExtensions',
        'UpdateReviewAdExtensions' => 'UpdateReviewAdExtensions',
        'UpdateSitelinkAdExtensions' => 'UpdateSitelinkAdExtensions',
        'UpdateStructuredSnippetAdExtensions' => 'UpdateStructuredSnippetAdExtensions',
        'UpdatePromotionAdExtensions' => 'UpdatePromotionAdExtensions',
        'UpdateImageAdExtensions' => 'UpdateImageAdExtensions',
        'UpdateLogoAdExtensions' => 'UpdateLogoAdExtensions',
        'UpdateLeadFormAdExtensions' => 'UpdateLeadFormAdExtensions',
        'UpdateStatusForCampaigns' => 'UpdateStatusForCampaigns',
        'UpdateStatusForAdGroups' => 'UpdateStatusForAdGroups',
        'UpdateStatusForAds' => 'UpdateStatusForAds',
        'UpdateStatusForKeywords' => 'UpdateStatusForKeywords',
        'UpdateAdGroupNetwork' => 'UpdateAdGroupNetwork',
        'UpdatePageFeeds' => 'UpdatePageFeeds',
        'UpdateAdCustomizerFeeds' => 'UpdateAdCustomizerFeeds',
        'UpdateBrandSuitability' => 'UpdateBrandSuitability',
        'UpdateAdCustomizerAttributes' => 'UpdateAdCustomizerAttributes',
        'DeleteRemovedEntities' => 'DeleteRemovedEntities',
        'RaiseBidsToMinimum' => 'RaiseBidsToMinimum',
        'RaiseCampaignBudgetsToMinimum' => 'RaiseCampaignBudgetsToMinimum',
        'AdjustmentForCampaignBudgets' => 'AdjustmentForCampaignBudgets',
        'AdjustmentForBids' => 'AdjustmentForBids',
        'SuffixForUrls' => 'SuffixForUrls',
        'SearchAndReplaceForUrls' => 'SearchAndReplaceForUrls',
        'SuffixForTrackingTemplates' => 'SuffixForTrackingTemplates',
        'SearchAndReplaceForTrackingTemplates' => 'SearchAndReplaceForTrackingTemplates',
        'SuffixForCampaignNames' => 'SuffixForCampaignNames',
        'SearchAndReplaceForCampaignNames' => 'SearchAndReplaceForCampaignNames',
        'SearchAndReplaceForCustomParameters' => 'SearchAndReplaceForCustomParameters',
        'SearchAndReplaceForFinalURLSuffix' => 'SearchAndReplaceForFinalURLSuffix',
        'PauseCampaignsWithoutSupportedLocations' => 'PauseCampaignsWithoutSupportedLocations',
        'EnableParentLocationMapping' => 'EnableParentLocationMapping',
        'AssociatedStoreId' => 'AssociatedStoreId',
        'RaiseProductGroupBidsToMinimum' => 'RaiseProductGroupBidsToMinimum',
        'SearchAndDsaMixedCampaignAsSearchCampaign' => 'SearchAndDsaMixedCampaignAsSearchCampaign',
        'AccountUrlOptions' => 'AccountUrlOptions',
        'EnableAutoCurrencyConversion' => 'EnableAutoCurrencyConversion',
        'UpdateBiddingStrategies' => 'UpdateBiddingStrategies',
        'AssociatedUetTagId' => 'AssociatedUetTagId',
        'AutoDeviceBidOptimization' => 'AutoDeviceBidOptimization',
        'AdScheduleUseSearcherTimezone' => 'AdScheduleUseSearcherTimezone',
        'PauseAIMAdGroupIfAllAudienceCriterionNotImported' => 'PauseAIMAdGroupIfAllAudienceCriterionNotImported',
        'RenameCampaignNameWithSuffix' => 'RenameCampaignNameWithSuffix',
        'UpdateAdUrls' => 'UpdateAdUrls',
        'UpdateSitelinkUrls' => 'UpdateSitelinkUrls',
        'UpdateAssetAutomationCampaignSetting' => 'UpdateAssetAutomationCampaignSetting',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap',
        'Type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'NewEntities' => 'setNewEntities',
        'NewPausedCampaignsAndChildEntities' => 'setNewPausedCampaignsAndChildEntities',
        'NewActiveCampaignsAndChildEntities' => 'setNewActiveCampaignsAndChildEntities',
        'NewAdGroupsAndChildEntitiesForExistingCampaigns' => 'setNewAdGroupsAndChildEntitiesForExistingCampaigns',
        'NewActiveAdsForExistingAdGroups' => 'setNewActiveAdsForExistingAdGroups',
        'NewKeywordsForExistingAdGroups' => 'setNewKeywordsForExistingAdGroups',
        'NewNegativeKeywordsForExistingParents' => 'setNewNegativeKeywordsForExistingParents',
        'NewNegativeKeywordLists' => 'setNewNegativeKeywordLists',
        'NewAccountNegativeKeywords' => 'setNewAccountNegativeKeywords',
        'PauseNewCampaigns' => 'setPauseNewCampaigns',
        'NewKeywordUrls' => 'setNewKeywordUrls',
        'NewUrlOptions' => 'setNewUrlOptions',
        'NewNegativeSites' => 'setNewNegativeSites',
        'NewPausedAdsForExistingAdGroups' => 'setNewPausedAdsForExistingAdGroups',
        'NewLabels' => 'setNewLabels',
        'NewProductFilters' => 'setNewProductFilters',
        'NewLocationTargets' => 'setNewLocationTargets',
        'NewAdSchedules' => 'setNewAdSchedules',
        'NewDeviceTargets' => 'setNewDeviceTargets',
        'NewDemographicTargets' => 'setNewDemographicTargets',
        'NewAudienceTargets' => 'setNewAudienceTargets',
        'NewAppAdExtensions' => 'setNewAppAdExtensions',
        'NewCallAdExtensions' => 'setNewCallAdExtensions',
        'NewCalloutAdExtensions' => 'setNewCalloutAdExtensions',
        'NewPriceAdExtensions' => 'setNewPriceAdExtensions',
        'NewLocationAdExtensions' => 'setNewLocationAdExtensions',
        'NewReviewAdExtensions' => 'setNewReviewAdExtensions',
        'NewSitelinkAdExtensions' => 'setNewSitelinkAdExtensions',
        'NewStructuredSnippetAdExtensions' => 'setNewStructuredSnippetAdExtensions',
        'NewPromotionAdExtensions' => 'setNewPromotionAdExtensions',
        'NewImageAdExtensions' => 'setNewImageAdExtensions',
        'NewLogoAdExtensions' => 'setNewLogoAdExtensions',
        'NewLeadFormAdExtensions' => 'setNewLeadFormAdExtensions',
        'NewPageFeeds' => 'setNewPageFeeds',
        'NewAdCustomizerFeeds' => 'setNewAdCustomizerFeeds',
        'NewBrandSuitability' => 'setNewBrandSuitability',
        'NewConversionGoals' => 'setNewConversionGoals',
        'NewCarouselAd' => 'setNewCarouselAd',
        'UpdateEntities' => 'setUpdateEntities',
        'UpdateCampaignBudgets' => 'setUpdateCampaignBudgets',
        'UpdateBids' => 'setUpdateBids',
        'UpdateNegativeKeywordLists' => 'setUpdateNegativeKeywordLists',
        'UpdateAccountNegativeKeywords' => 'setUpdateAccountNegativeKeywords',
        'UpdateNegativeSites' => 'setUpdateNegativeSites',
        'UpdateKeywordUrls' => 'setUpdateKeywordUrls',
        'UpdateUrlOptions' => 'setUpdateUrlOptions',
        'UpdateCampaignNames' => 'setUpdateCampaignNames',
        'UpdateLabels' => 'setUpdateLabels',
        'UpdateProductFilters' => 'setUpdateProductFilters',
        'UpdateConversionGoals' => 'setUpdateConversionGoals',
        'UpdateLocationTargets' => 'setUpdateLocationTargets',
        'UpdateAdSchedules' => 'setUpdateAdSchedules',
        'UpdateDeviceTargets' => 'setUpdateDeviceTargets',
        'UpdateDemographicTargets' => 'setUpdateDemographicTargets',
        'UpdateCampaignAdGroupLanguages' => 'setUpdateCampaignAdGroupLanguages',
        'UpdateAudienceTargets' => 'setUpdateAudienceTargets',
        'UpdateAppAdExtensions' => 'setUpdateAppAdExtensions',
        'UpdateCallAdExtensions' => 'setUpdateCallAdExtensions',
        'UpdateCalloutAdExtensions' => 'setUpdateCalloutAdExtensions',
        'UpdatePriceAdExtensions' => 'setUpdatePriceAdExtensions',
        'UpdateLocationAdExtensions' => 'setUpdateLocationAdExtensions',
        'UpdateReviewAdExtensions' => 'setUpdateReviewAdExtensions',
        'UpdateSitelinkAdExtensions' => 'setUpdateSitelinkAdExtensions',
        'UpdateStructuredSnippetAdExtensions' => 'setUpdateStructuredSnippetAdExtensions',
        'UpdatePromotionAdExtensions' => 'setUpdatePromotionAdExtensions',
        'UpdateImageAdExtensions' => 'setUpdateImageAdExtensions',
        'UpdateLogoAdExtensions' => 'setUpdateLogoAdExtensions',
        'UpdateLeadFormAdExtensions' => 'setUpdateLeadFormAdExtensions',
        'UpdateStatusForCampaigns' => 'setUpdateStatusForCampaigns',
        'UpdateStatusForAdGroups' => 'setUpdateStatusForAdGroups',
        'UpdateStatusForAds' => 'setUpdateStatusForAds',
        'UpdateStatusForKeywords' => 'setUpdateStatusForKeywords',
        'UpdateAdGroupNetwork' => 'setUpdateAdGroupNetwork',
        'UpdatePageFeeds' => 'setUpdatePageFeeds',
        'UpdateAdCustomizerFeeds' => 'setUpdateAdCustomizerFeeds',
        'UpdateBrandSuitability' => 'setUpdateBrandSuitability',
        'UpdateAdCustomizerAttributes' => 'setUpdateAdCustomizerAttributes',
        'DeleteRemovedEntities' => 'setDeleteRemovedEntities',
        'RaiseBidsToMinimum' => 'setRaiseBidsToMinimum',
        'RaiseCampaignBudgetsToMinimum' => 'setRaiseCampaignBudgetsToMinimum',
        'AdjustmentForCampaignBudgets' => 'setAdjustmentForCampaignBudgets',
        'AdjustmentForBids' => 'setAdjustmentForBids',
        'SuffixForUrls' => 'setSuffixForUrls',
        'SearchAndReplaceForUrls' => 'setSearchAndReplaceForUrls',
        'SuffixForTrackingTemplates' => 'setSuffixForTrackingTemplates',
        'SearchAndReplaceForTrackingTemplates' => 'setSearchAndReplaceForTrackingTemplates',
        'SuffixForCampaignNames' => 'setSuffixForCampaignNames',
        'SearchAndReplaceForCampaignNames' => 'setSearchAndReplaceForCampaignNames',
        'SearchAndReplaceForCustomParameters' => 'setSearchAndReplaceForCustomParameters',
        'SearchAndReplaceForFinalURLSuffix' => 'setSearchAndReplaceForFinalURLSuffix',
        'PauseCampaignsWithoutSupportedLocations' => 'setPauseCampaignsWithoutSupportedLocations',
        'EnableParentLocationMapping' => 'setEnableParentLocationMapping',
        'AssociatedStoreId' => 'setAssociatedStoreId',
        'RaiseProductGroupBidsToMinimum' => 'setRaiseProductGroupBidsToMinimum',
        'SearchAndDsaMixedCampaignAsSearchCampaign' => 'setSearchAndDsaMixedCampaignAsSearchCampaign',
        'AccountUrlOptions' => 'setAccountUrlOptions',
        'EnableAutoCurrencyConversion' => 'setEnableAutoCurrencyConversion',
        'UpdateBiddingStrategies' => 'setUpdateBiddingStrategies',
        'AssociatedUetTagId' => 'setAssociatedUetTagId',
        'AutoDeviceBidOptimization' => 'setAutoDeviceBidOptimization',
        'AdScheduleUseSearcherTimezone' => 'setAdScheduleUseSearcherTimezone',
        'PauseAIMAdGroupIfAllAudienceCriterionNotImported' => 'setPauseAIMAdGroupIfAllAudienceCriterionNotImported',
        'RenameCampaignNameWithSuffix' => 'setRenameCampaignNameWithSuffix',
        'UpdateAdUrls' => 'setUpdateAdUrls',
        'UpdateSitelinkUrls' => 'setUpdateSitelinkUrls',
        'UpdateAssetAutomationCampaignSetting' => 'setUpdateAssetAutomationCampaignSetting',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap',
        'Type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'NewEntities' => 'getNewEntities',
        'NewPausedCampaignsAndChildEntities' => 'getNewPausedCampaignsAndChildEntities',
        'NewActiveCampaignsAndChildEntities' => 'getNewActiveCampaignsAndChildEntities',
        'NewAdGroupsAndChildEntitiesForExistingCampaigns' => 'getNewAdGroupsAndChildEntitiesForExistingCampaigns',
        'NewActiveAdsForExistingAdGroups' => 'getNewActiveAdsForExistingAdGroups',
        'NewKeywordsForExistingAdGroups' => 'getNewKeywordsForExistingAdGroups',
        'NewNegativeKeywordsForExistingParents' => 'getNewNegativeKeywordsForExistingParents',
        'NewNegativeKeywordLists' => 'getNewNegativeKeywordLists',
        'NewAccountNegativeKeywords' => 'getNewAccountNegativeKeywords',
        'PauseNewCampaigns' => 'getPauseNewCampaigns',
        'NewKeywordUrls' => 'getNewKeywordUrls',
        'NewUrlOptions' => 'getNewUrlOptions',
        'NewNegativeSites' => 'getNewNegativeSites',
        'NewPausedAdsForExistingAdGroups' => 'getNewPausedAdsForExistingAdGroups',
        'NewLabels' => 'getNewLabels',
        'NewProductFilters' => 'getNewProductFilters',
        'NewLocationTargets' => 'getNewLocationTargets',
        'NewAdSchedules' => 'getNewAdSchedules',
        'NewDeviceTargets' => 'getNewDeviceTargets',
        'NewDemographicTargets' => 'getNewDemographicTargets',
        'NewAudienceTargets' => 'getNewAudienceTargets',
        'NewAppAdExtensions' => 'getNewAppAdExtensions',
        'NewCallAdExtensions' => 'getNewCallAdExtensions',
        'NewCalloutAdExtensions' => 'getNewCalloutAdExtensions',
        'NewPriceAdExtensions' => 'getNewPriceAdExtensions',
        'NewLocationAdExtensions' => 'getNewLocationAdExtensions',
        'NewReviewAdExtensions' => 'getNewReviewAdExtensions',
        'NewSitelinkAdExtensions' => 'getNewSitelinkAdExtensions',
        'NewStructuredSnippetAdExtensions' => 'getNewStructuredSnippetAdExtensions',
        'NewPromotionAdExtensions' => 'getNewPromotionAdExtensions',
        'NewImageAdExtensions' => 'getNewImageAdExtensions',
        'NewLogoAdExtensions' => 'getNewLogoAdExtensions',
        'NewLeadFormAdExtensions' => 'getNewLeadFormAdExtensions',
        'NewPageFeeds' => 'getNewPageFeeds',
        'NewAdCustomizerFeeds' => 'getNewAdCustomizerFeeds',
        'NewBrandSuitability' => 'getNewBrandSuitability',
        'NewConversionGoals' => 'getNewConversionGoals',
        'NewCarouselAd' => 'getNewCarouselAd',
        'UpdateEntities' => 'getUpdateEntities',
        'UpdateCampaignBudgets' => 'getUpdateCampaignBudgets',
        'UpdateBids' => 'getUpdateBids',
        'UpdateNegativeKeywordLists' => 'getUpdateNegativeKeywordLists',
        'UpdateAccountNegativeKeywords' => 'getUpdateAccountNegativeKeywords',
        'UpdateNegativeSites' => 'getUpdateNegativeSites',
        'UpdateKeywordUrls' => 'getUpdateKeywordUrls',
        'UpdateUrlOptions' => 'getUpdateUrlOptions',
        'UpdateCampaignNames' => 'getUpdateCampaignNames',
        'UpdateLabels' => 'getUpdateLabels',
        'UpdateProductFilters' => 'getUpdateProductFilters',
        'UpdateConversionGoals' => 'getUpdateConversionGoals',
        'UpdateLocationTargets' => 'getUpdateLocationTargets',
        'UpdateAdSchedules' => 'getUpdateAdSchedules',
        'UpdateDeviceTargets' => 'getUpdateDeviceTargets',
        'UpdateDemographicTargets' => 'getUpdateDemographicTargets',
        'UpdateCampaignAdGroupLanguages' => 'getUpdateCampaignAdGroupLanguages',
        'UpdateAudienceTargets' => 'getUpdateAudienceTargets',
        'UpdateAppAdExtensions' => 'getUpdateAppAdExtensions',
        'UpdateCallAdExtensions' => 'getUpdateCallAdExtensions',
        'UpdateCalloutAdExtensions' => 'getUpdateCalloutAdExtensions',
        'UpdatePriceAdExtensions' => 'getUpdatePriceAdExtensions',
        'UpdateLocationAdExtensions' => 'getUpdateLocationAdExtensions',
        'UpdateReviewAdExtensions' => 'getUpdateReviewAdExtensions',
        'UpdateSitelinkAdExtensions' => 'getUpdateSitelinkAdExtensions',
        'UpdateStructuredSnippetAdExtensions' => 'getUpdateStructuredSnippetAdExtensions',
        'UpdatePromotionAdExtensions' => 'getUpdatePromotionAdExtensions',
        'UpdateImageAdExtensions' => 'getUpdateImageAdExtensions',
        'UpdateLogoAdExtensions' => 'getUpdateLogoAdExtensions',
        'UpdateLeadFormAdExtensions' => 'getUpdateLeadFormAdExtensions',
        'UpdateStatusForCampaigns' => 'getUpdateStatusForCampaigns',
        'UpdateStatusForAdGroups' => 'getUpdateStatusForAdGroups',
        'UpdateStatusForAds' => 'getUpdateStatusForAds',
        'UpdateStatusForKeywords' => 'getUpdateStatusForKeywords',
        'UpdateAdGroupNetwork' => 'getUpdateAdGroupNetwork',
        'UpdatePageFeeds' => 'getUpdatePageFeeds',
        'UpdateAdCustomizerFeeds' => 'getUpdateAdCustomizerFeeds',
        'UpdateBrandSuitability' => 'getUpdateBrandSuitability',
        'UpdateAdCustomizerAttributes' => 'getUpdateAdCustomizerAttributes',
        'DeleteRemovedEntities' => 'getDeleteRemovedEntities',
        'RaiseBidsToMinimum' => 'getRaiseBidsToMinimum',
        'RaiseCampaignBudgetsToMinimum' => 'getRaiseCampaignBudgetsToMinimum',
        'AdjustmentForCampaignBudgets' => 'getAdjustmentForCampaignBudgets',
        'AdjustmentForBids' => 'getAdjustmentForBids',
        'SuffixForUrls' => 'getSuffixForUrls',
        'SearchAndReplaceForUrls' => 'getSearchAndReplaceForUrls',
        'SuffixForTrackingTemplates' => 'getSuffixForTrackingTemplates',
        'SearchAndReplaceForTrackingTemplates' => 'getSearchAndReplaceForTrackingTemplates',
        'SuffixForCampaignNames' => 'getSuffixForCampaignNames',
        'SearchAndReplaceForCampaignNames' => 'getSearchAndReplaceForCampaignNames',
        'SearchAndReplaceForCustomParameters' => 'getSearchAndReplaceForCustomParameters',
        'SearchAndReplaceForFinalURLSuffix' => 'getSearchAndReplaceForFinalURLSuffix',
        'PauseCampaignsWithoutSupportedLocations' => 'getPauseCampaignsWithoutSupportedLocations',
        'EnableParentLocationMapping' => 'getEnableParentLocationMapping',
        'AssociatedStoreId' => 'getAssociatedStoreId',
        'RaiseProductGroupBidsToMinimum' => 'getRaiseProductGroupBidsToMinimum',
        'SearchAndDsaMixedCampaignAsSearchCampaign' => 'getSearchAndDsaMixedCampaignAsSearchCampaign',
        'AccountUrlOptions' => 'getAccountUrlOptions',
        'EnableAutoCurrencyConversion' => 'getEnableAutoCurrencyConversion',
        'UpdateBiddingStrategies' => 'getUpdateBiddingStrategies',
        'AssociatedUetTagId' => 'getAssociatedUetTagId',
        'AutoDeviceBidOptimization' => 'getAutoDeviceBidOptimization',
        'AdScheduleUseSearcherTimezone' => 'getAdScheduleUseSearcherTimezone',
        'PauseAIMAdGroupIfAllAudienceCriterionNotImported' => 'getPauseAIMAdGroupIfAllAudienceCriterionNotImported',
        'RenameCampaignNameWithSuffix' => 'getRenameCampaignNameWithSuffix',
        'UpdateAdUrls' => 'getUpdateAdUrls',
        'UpdateSitelinkUrls' => 'getUpdateSitelinkUrls',
        'UpdateAssetAutomationCampaignSetting' => 'getUpdateAssetAutomationCampaignSetting',
        'ForwardCompatibilityMap' => 'getForwardCompatibilityMap',
        'Type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('NewEntities', $data ?? [], null);
        $this->setIfExists('NewPausedCampaignsAndChildEntities', $data ?? [], null);
        $this->setIfExists('NewActiveCampaignsAndChildEntities', $data ?? [], null);
        $this->setIfExists('NewAdGroupsAndChildEntitiesForExistingCampaigns', $data ?? [], null);
        $this->setIfExists('NewActiveAdsForExistingAdGroups', $data ?? [], null);
        $this->setIfExists('NewKeywordsForExistingAdGroups', $data ?? [], null);
        $this->setIfExists('NewNegativeKeywordsForExistingParents', $data ?? [], null);
        $this->setIfExists('NewNegativeKeywordLists', $data ?? [], null);
        $this->setIfExists('NewAccountNegativeKeywords', $data ?? [], null);
        $this->setIfExists('PauseNewCampaigns', $data ?? [], null);
        $this->setIfExists('NewKeywordUrls', $data ?? [], null);
        $this->setIfExists('NewUrlOptions', $data ?? [], null);
        $this->setIfExists('NewNegativeSites', $data ?? [], null);
        $this->setIfExists('NewPausedAdsForExistingAdGroups', $data ?? [], null);
        $this->setIfExists('NewLabels', $data ?? [], null);
        $this->setIfExists('NewProductFilters', $data ?? [], null);
        $this->setIfExists('NewLocationTargets', $data ?? [], null);
        $this->setIfExists('NewAdSchedules', $data ?? [], null);
        $this->setIfExists('NewDeviceTargets', $data ?? [], null);
        $this->setIfExists('NewDemographicTargets', $data ?? [], null);
        $this->setIfExists('NewAudienceTargets', $data ?? [], null);
        $this->setIfExists('NewAppAdExtensions', $data ?? [], null);
        $this->setIfExists('NewCallAdExtensions', $data ?? [], null);
        $this->setIfExists('NewCalloutAdExtensions', $data ?? [], null);
        $this->setIfExists('NewPriceAdExtensions', $data ?? [], null);
        $this->setIfExists('NewLocationAdExtensions', $data ?? [], null);
        $this->setIfExists('NewReviewAdExtensions', $data ?? [], null);
        $this->setIfExists('NewSitelinkAdExtensions', $data ?? [], null);
        $this->setIfExists('NewStructuredSnippetAdExtensions', $data ?? [], null);
        $this->setIfExists('NewPromotionAdExtensions', $data ?? [], null);
        $this->setIfExists('NewImageAdExtensions', $data ?? [], null);
        $this->setIfExists('NewLogoAdExtensions', $data ?? [], null);
        $this->setIfExists('NewLeadFormAdExtensions', $data ?? [], null);
        $this->setIfExists('NewPageFeeds', $data ?? [], null);
        $this->setIfExists('NewAdCustomizerFeeds', $data ?? [], null);
        $this->setIfExists('NewBrandSuitability', $data ?? [], null);
        $this->setIfExists('NewConversionGoals', $data ?? [], null);
        $this->setIfExists('NewCarouselAd', $data ?? [], null);
        $this->setIfExists('UpdateEntities', $data ?? [], null);
        $this->setIfExists('UpdateCampaignBudgets', $data ?? [], null);
        $this->setIfExists('UpdateBids', $data ?? [], null);
        $this->setIfExists('UpdateNegativeKeywordLists', $data ?? [], null);
        $this->setIfExists('UpdateAccountNegativeKeywords', $data ?? [], null);
        $this->setIfExists('UpdateNegativeSites', $data ?? [], null);
        $this->setIfExists('UpdateKeywordUrls', $data ?? [], null);
        $this->setIfExists('UpdateUrlOptions', $data ?? [], null);
        $this->setIfExists('UpdateCampaignNames', $data ?? [], null);
        $this->setIfExists('UpdateLabels', $data ?? [], null);
        $this->setIfExists('UpdateProductFilters', $data ?? [], null);
        $this->setIfExists('UpdateConversionGoals', $data ?? [], null);
        $this->setIfExists('UpdateLocationTargets', $data ?? [], null);
        $this->setIfExists('UpdateAdSchedules', $data ?? [], null);
        $this->setIfExists('UpdateDeviceTargets', $data ?? [], null);
        $this->setIfExists('UpdateDemographicTargets', $data ?? [], null);
        $this->setIfExists('UpdateCampaignAdGroupLanguages', $data ?? [], null);
        $this->setIfExists('UpdateAudienceTargets', $data ?? [], null);
        $this->setIfExists('UpdateAppAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdateCallAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdateCalloutAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdatePriceAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdateLocationAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdateReviewAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdateSitelinkAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdateStructuredSnippetAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdatePromotionAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdateImageAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdateLogoAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdateLeadFormAdExtensions', $data ?? [], null);
        $this->setIfExists('UpdateStatusForCampaigns', $data ?? [], null);
        $this->setIfExists('UpdateStatusForAdGroups', $data ?? [], null);
        $this->setIfExists('UpdateStatusForAds', $data ?? [], null);
        $this->setIfExists('UpdateStatusForKeywords', $data ?? [], null);
        $this->setIfExists('UpdateAdGroupNetwork', $data ?? [], null);
        $this->setIfExists('UpdatePageFeeds', $data ?? [], null);
        $this->setIfExists('UpdateAdCustomizerFeeds', $data ?? [], null);
        $this->setIfExists('UpdateBrandSuitability', $data ?? [], null);
        $this->setIfExists('UpdateAdCustomizerAttributes', $data ?? [], null);
        $this->setIfExists('DeleteRemovedEntities', $data ?? [], null);
        $this->setIfExists('RaiseBidsToMinimum', $data ?? [], null);
        $this->setIfExists('RaiseCampaignBudgetsToMinimum', $data ?? [], null);
        $this->setIfExists('AdjustmentForCampaignBudgets', $data ?? [], null);
        $this->setIfExists('AdjustmentForBids', $data ?? [], null);
        $this->setIfExists('SuffixForUrls', $data ?? [], null);
        $this->setIfExists('SearchAndReplaceForUrls', $data ?? [], null);
        $this->setIfExists('SuffixForTrackingTemplates', $data ?? [], null);
        $this->setIfExists('SearchAndReplaceForTrackingTemplates', $data ?? [], null);
        $this->setIfExists('SuffixForCampaignNames', $data ?? [], null);
        $this->setIfExists('SearchAndReplaceForCampaignNames', $data ?? [], null);
        $this->setIfExists('SearchAndReplaceForCustomParameters', $data ?? [], null);
        $this->setIfExists('SearchAndReplaceForFinalURLSuffix', $data ?? [], null);
        $this->setIfExists('PauseCampaignsWithoutSupportedLocations', $data ?? [], null);
        $this->setIfExists('EnableParentLocationMapping', $data ?? [], null);
        $this->setIfExists('AssociatedStoreId', $data ?? [], null);
        $this->setIfExists('RaiseProductGroupBidsToMinimum', $data ?? [], null);
        $this->setIfExists('SearchAndDsaMixedCampaignAsSearchCampaign', $data ?? [], null);
        $this->setIfExists('AccountUrlOptions', $data ?? [], null);
        $this->setIfExists('EnableAutoCurrencyConversion', $data ?? [], null);
        $this->setIfExists('UpdateBiddingStrategies', $data ?? [], null);
        $this->setIfExists('AssociatedUetTagId', $data ?? [], null);
        $this->setIfExists('AutoDeviceBidOptimization', $data ?? [], null);
        $this->setIfExists('AdScheduleUseSearcherTimezone', $data ?? [], null);
        $this->setIfExists('PauseAIMAdGroupIfAllAudienceCriterionNotImported', $data ?? [], null);
        $this->setIfExists('RenameCampaignNameWithSuffix', $data ?? [], null);
        $this->setIfExists('UpdateAdUrls', $data ?? [], null);
        $this->setIfExists('UpdateSitelinkUrls', $data ?? [], null);
        $this->setIfExists('UpdateAssetAutomationCampaignSetting', $data ?? [], null);
        $this->setIfExists('ForwardCompatibilityMap', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'GoogleImportOption');
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets NewEntities
     *
     * @return bool|null
     */
    public function getNewEntities()
    {
        if (!isset($this->container['NewEntities']) || is_null($this->container['NewEntities'])) {
            return null;
        }
        return $this->container['NewEntities'];
    }

    /**
     * Sets NewEntities
     *
     * @param bool|null $NewEntities NewEntities
     *
     * @return self
     */
    public function setNewEntities($NewEntities)
    {
        if (is_null($NewEntities)) {
            array_push($this->openAPINullablesSetToNull, 'NewEntities');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewEntities', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewEntities'] = $NewEntities;

        return $this;
    }

    /**
     * Gets NewPausedCampaignsAndChildEntities
     *
     * @return bool|null
     */
    public function getNewPausedCampaignsAndChildEntities()
    {
        if (!isset($this->container['NewPausedCampaignsAndChildEntities']) || is_null($this->container['NewPausedCampaignsAndChildEntities'])) {
            return null;
        }
        return $this->container['NewPausedCampaignsAndChildEntities'];
    }

    /**
     * Sets NewPausedCampaignsAndChildEntities
     *
     * @param bool|null $NewPausedCampaignsAndChildEntities NewPausedCampaignsAndChildEntities
     *
     * @return self
     */
    public function setNewPausedCampaignsAndChildEntities($NewPausedCampaignsAndChildEntities)
    {
        if (is_null($NewPausedCampaignsAndChildEntities)) {
            array_push($this->openAPINullablesSetToNull, 'NewPausedCampaignsAndChildEntities');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewPausedCampaignsAndChildEntities', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewPausedCampaignsAndChildEntities'] = $NewPausedCampaignsAndChildEntities;

        return $this;
    }

    /**
     * Gets NewActiveCampaignsAndChildEntities
     *
     * @return bool|null
     */
    public function getNewActiveCampaignsAndChildEntities()
    {
        if (!isset($this->container['NewActiveCampaignsAndChildEntities']) || is_null($this->container['NewActiveCampaignsAndChildEntities'])) {
            return null;
        }
        return $this->container['NewActiveCampaignsAndChildEntities'];
    }

    /**
     * Sets NewActiveCampaignsAndChildEntities
     *
     * @param bool|null $NewActiveCampaignsAndChildEntities NewActiveCampaignsAndChildEntities
     *
     * @return self
     */
    public function setNewActiveCampaignsAndChildEntities($NewActiveCampaignsAndChildEntities)
    {
        if (is_null($NewActiveCampaignsAndChildEntities)) {
            array_push($this->openAPINullablesSetToNull, 'NewActiveCampaignsAndChildEntities');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewActiveCampaignsAndChildEntities', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewActiveCampaignsAndChildEntities'] = $NewActiveCampaignsAndChildEntities;

        return $this;
    }

    /**
     * Gets NewAdGroupsAndChildEntitiesForExistingCampaigns
     *
     * @return bool|null
     */
    public function getNewAdGroupsAndChildEntitiesForExistingCampaigns()
    {
        if (!isset($this->container['NewAdGroupsAndChildEntitiesForExistingCampaigns']) || is_null($this->container['NewAdGroupsAndChildEntitiesForExistingCampaigns'])) {
            return null;
        }
        return $this->container['NewAdGroupsAndChildEntitiesForExistingCampaigns'];
    }

    /**
     * Sets NewAdGroupsAndChildEntitiesForExistingCampaigns
     *
     * @param bool|null $NewAdGroupsAndChildEntitiesForExistingCampaigns NewAdGroupsAndChildEntitiesForExistingCampaigns
     *
     * @return self
     */
    public function setNewAdGroupsAndChildEntitiesForExistingCampaigns($NewAdGroupsAndChildEntitiesForExistingCampaigns)
    {
        if (is_null($NewAdGroupsAndChildEntitiesForExistingCampaigns)) {
            array_push($this->openAPINullablesSetToNull, 'NewAdGroupsAndChildEntitiesForExistingCampaigns');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewAdGroupsAndChildEntitiesForExistingCampaigns', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewAdGroupsAndChildEntitiesForExistingCampaigns'] = $NewAdGroupsAndChildEntitiesForExistingCampaigns;

        return $this;
    }

    /**
     * Gets NewActiveAdsForExistingAdGroups
     *
     * @return bool|null
     */
    public function getNewActiveAdsForExistingAdGroups()
    {
        if (!isset($this->container['NewActiveAdsForExistingAdGroups']) || is_null($this->container['NewActiveAdsForExistingAdGroups'])) {
            return null;
        }
        return $this->container['NewActiveAdsForExistingAdGroups'];
    }

    /**
     * Sets NewActiveAdsForExistingAdGroups
     *
     * @param bool|null $NewActiveAdsForExistingAdGroups NewActiveAdsForExistingAdGroups
     *
     * @return self
     */
    public function setNewActiveAdsForExistingAdGroups($NewActiveAdsForExistingAdGroups)
    {
        if (is_null($NewActiveAdsForExistingAdGroups)) {
            array_push($this->openAPINullablesSetToNull, 'NewActiveAdsForExistingAdGroups');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewActiveAdsForExistingAdGroups', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewActiveAdsForExistingAdGroups'] = $NewActiveAdsForExistingAdGroups;

        return $this;
    }

    /**
     * Gets NewKeywordsForExistingAdGroups
     *
     * @return bool|null
     */
    public function getNewKeywordsForExistingAdGroups()
    {
        if (!isset($this->container['NewKeywordsForExistingAdGroups']) || is_null($this->container['NewKeywordsForExistingAdGroups'])) {
            return null;
        }
        return $this->container['NewKeywordsForExistingAdGroups'];
    }

    /**
     * Sets NewKeywordsForExistingAdGroups
     *
     * @param bool|null $NewKeywordsForExistingAdGroups NewKeywordsForExistingAdGroups
     *
     * @return self
     */
    public function setNewKeywordsForExistingAdGroups($NewKeywordsForExistingAdGroups)
    {
        if (is_null($NewKeywordsForExistingAdGroups)) {
            array_push($this->openAPINullablesSetToNull, 'NewKeywordsForExistingAdGroups');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewKeywordsForExistingAdGroups', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewKeywordsForExistingAdGroups'] = $NewKeywordsForExistingAdGroups;

        return $this;
    }

    /**
     * Gets NewNegativeKeywordsForExistingParents
     *
     * @return bool|null
     */
    public function getNewNegativeKeywordsForExistingParents()
    {
        if (!isset($this->container['NewNegativeKeywordsForExistingParents']) || is_null($this->container['NewNegativeKeywordsForExistingParents'])) {
            return null;
        }
        return $this->container['NewNegativeKeywordsForExistingParents'];
    }

    /**
     * Sets NewNegativeKeywordsForExistingParents
     *
     * @param bool|null $NewNegativeKeywordsForExistingParents NewNegativeKeywordsForExistingParents
     *
     * @return self
     */
    public function setNewNegativeKeywordsForExistingParents($NewNegativeKeywordsForExistingParents)
    {
        if (is_null($NewNegativeKeywordsForExistingParents)) {
            array_push($this->openAPINullablesSetToNull, 'NewNegativeKeywordsForExistingParents');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewNegativeKeywordsForExistingParents', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewNegativeKeywordsForExistingParents'] = $NewNegativeKeywordsForExistingParents;

        return $this;
    }

    /**
     * Gets NewNegativeKeywordLists
     *
     * @return bool|null
     */
    public function getNewNegativeKeywordLists()
    {
        if (!isset($this->container['NewNegativeKeywordLists']) || is_null($this->container['NewNegativeKeywordLists'])) {
            return null;
        }
        return $this->container['NewNegativeKeywordLists'];
    }

    /**
     * Sets NewNegativeKeywordLists
     *
     * @param bool|null $NewNegativeKeywordLists NewNegativeKeywordLists
     *
     * @return self
     */
    public function setNewNegativeKeywordLists($NewNegativeKeywordLists)
    {
        if (is_null($NewNegativeKeywordLists)) {
            array_push($this->openAPINullablesSetToNull, 'NewNegativeKeywordLists');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewNegativeKeywordLists', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewNegativeKeywordLists'] = $NewNegativeKeywordLists;

        return $this;
    }

    /**
     * Gets NewAccountNegativeKeywords
     *
     * @return bool|null
     */
    public function getNewAccountNegativeKeywords()
    {
        if (!isset($this->container['NewAccountNegativeKeywords']) || is_null($this->container['NewAccountNegativeKeywords'])) {
            return null;
        }
        return $this->container['NewAccountNegativeKeywords'];
    }

    /**
     * Sets NewAccountNegativeKeywords
     *
     * @param bool|null $NewAccountNegativeKeywords NewAccountNegativeKeywords
     *
     * @return self
     */
    public function setNewAccountNegativeKeywords($NewAccountNegativeKeywords)
    {
        if (is_null($NewAccountNegativeKeywords)) {
            array_push($this->openAPINullablesSetToNull, 'NewAccountNegativeKeywords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewAccountNegativeKeywords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewAccountNegativeKeywords'] = $NewAccountNegativeKeywords;

        return $this;
    }

    /**
     * Gets PauseNewCampaigns
     *
     * @return bool|null
     */
    public function getPauseNewCampaigns()
    {
        if (!isset($this->container['PauseNewCampaigns']) || is_null($this->container['PauseNewCampaigns'])) {
            return null;
        }
        return $this->container['PauseNewCampaigns'];
    }

    /**
     * Sets PauseNewCampaigns
     *
     * @param bool|null $PauseNewCampaigns PauseNewCampaigns
     *
     * @return self
     */
    public function setPauseNewCampaigns($PauseNewCampaigns)
    {
        if (is_null($PauseNewCampaigns)) {
            array_push($this->openAPINullablesSetToNull, 'PauseNewCampaigns');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PauseNewCampaigns', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PauseNewCampaigns'] = $PauseNewCampaigns;

        return $this;
    }

    /**
     * Gets NewKeywordUrls
     *
     * @return bool|null
     */
    public function getNewKeywordUrls()
    {
        if (!isset($this->container['NewKeywordUrls']) || is_null($this->container['NewKeywordUrls'])) {
            return null;
        }
        return $this->container['NewKeywordUrls'];
    }

    /**
     * Sets NewKeywordUrls
     *
     * @param bool|null $NewKeywordUrls NewKeywordUrls
     *
     * @return self
     */
    public function setNewKeywordUrls($NewKeywordUrls)
    {
        if (is_null($NewKeywordUrls)) {
            array_push($this->openAPINullablesSetToNull, 'NewKeywordUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewKeywordUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewKeywordUrls'] = $NewKeywordUrls;

        return $this;
    }

    /**
     * Gets NewUrlOptions
     *
     * @return bool|null
     */
    public function getNewUrlOptions()
    {
        if (!isset($this->container['NewUrlOptions']) || is_null($this->container['NewUrlOptions'])) {
            return null;
        }
        return $this->container['NewUrlOptions'];
    }

    /**
     * Sets NewUrlOptions
     *
     * @param bool|null $NewUrlOptions NewUrlOptions
     *
     * @return self
     */
    public function setNewUrlOptions($NewUrlOptions)
    {
        if (is_null($NewUrlOptions)) {
            array_push($this->openAPINullablesSetToNull, 'NewUrlOptions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewUrlOptions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewUrlOptions'] = $NewUrlOptions;

        return $this;
    }

    /**
     * Gets NewNegativeSites
     *
     * @return bool|null
     */
    public function getNewNegativeSites()
    {
        if (!isset($this->container['NewNegativeSites']) || is_null($this->container['NewNegativeSites'])) {
            return null;
        }
        return $this->container['NewNegativeSites'];
    }

    /**
     * Sets NewNegativeSites
     *
     * @param bool|null $NewNegativeSites NewNegativeSites
     *
     * @return self
     */
    public function setNewNegativeSites($NewNegativeSites)
    {
        if (is_null($NewNegativeSites)) {
            array_push($this->openAPINullablesSetToNull, 'NewNegativeSites');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewNegativeSites', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewNegativeSites'] = $NewNegativeSites;

        return $this;
    }

    /**
     * Gets NewPausedAdsForExistingAdGroups
     *
     * @return bool|null
     */
    public function getNewPausedAdsForExistingAdGroups()
    {
        if (!isset($this->container['NewPausedAdsForExistingAdGroups']) || is_null($this->container['NewPausedAdsForExistingAdGroups'])) {
            return null;
        }
        return $this->container['NewPausedAdsForExistingAdGroups'];
    }

    /**
     * Sets NewPausedAdsForExistingAdGroups
     *
     * @param bool|null $NewPausedAdsForExistingAdGroups NewPausedAdsForExistingAdGroups
     *
     * @return self
     */
    public function setNewPausedAdsForExistingAdGroups($NewPausedAdsForExistingAdGroups)
    {
        if (is_null($NewPausedAdsForExistingAdGroups)) {
            array_push($this->openAPINullablesSetToNull, 'NewPausedAdsForExistingAdGroups');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewPausedAdsForExistingAdGroups', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewPausedAdsForExistingAdGroups'] = $NewPausedAdsForExistingAdGroups;

        return $this;
    }

    /**
     * Gets NewLabels
     *
     * @return bool|null
     */
    public function getNewLabels()
    {
        if (!isset($this->container['NewLabels']) || is_null($this->container['NewLabels'])) {
            return null;
        }
        return $this->container['NewLabels'];
    }

    /**
     * Sets NewLabels
     *
     * @param bool|null $NewLabels NewLabels
     *
     * @return self
     */
    public function setNewLabels($NewLabels)
    {
        if (is_null($NewLabels)) {
            array_push($this->openAPINullablesSetToNull, 'NewLabels');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewLabels', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewLabels'] = $NewLabels;

        return $this;
    }

    /**
     * Gets NewProductFilters
     *
     * @return bool|null
     */
    public function getNewProductFilters()
    {
        if (!isset($this->container['NewProductFilters']) || is_null($this->container['NewProductFilters'])) {
            return null;
        }
        return $this->container['NewProductFilters'];
    }

    /**
     * Sets NewProductFilters
     *
     * @param bool|null $NewProductFilters NewProductFilters
     *
     * @return self
     */
    public function setNewProductFilters($NewProductFilters)
    {
        if (is_null($NewProductFilters)) {
            array_push($this->openAPINullablesSetToNull, 'NewProductFilters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewProductFilters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewProductFilters'] = $NewProductFilters;

        return $this;
    }

    /**
     * Gets NewLocationTargets
     *
     * @return bool|null
     */
    public function getNewLocationTargets()
    {
        if (!isset($this->container['NewLocationTargets']) || is_null($this->container['NewLocationTargets'])) {
            return null;
        }
        return $this->container['NewLocationTargets'];
    }

    /**
     * Sets NewLocationTargets
     *
     * @param bool|null $NewLocationTargets NewLocationTargets
     *
     * @return self
     */
    public function setNewLocationTargets($NewLocationTargets)
    {
        if (is_null($NewLocationTargets)) {
            array_push($this->openAPINullablesSetToNull, 'NewLocationTargets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewLocationTargets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewLocationTargets'] = $NewLocationTargets;

        return $this;
    }

    /**
     * Gets NewAdSchedules
     *
     * @return bool|null
     */
    public function getNewAdSchedules()
    {
        if (!isset($this->container['NewAdSchedules']) || is_null($this->container['NewAdSchedules'])) {
            return null;
        }
        return $this->container['NewAdSchedules'];
    }

    /**
     * Sets NewAdSchedules
     *
     * @param bool|null $NewAdSchedules NewAdSchedules
     *
     * @return self
     */
    public function setNewAdSchedules($NewAdSchedules)
    {
        if (is_null($NewAdSchedules)) {
            array_push($this->openAPINullablesSetToNull, 'NewAdSchedules');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewAdSchedules', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewAdSchedules'] = $NewAdSchedules;

        return $this;
    }

    /**
     * Gets NewDeviceTargets
     *
     * @return bool|null
     */
    public function getNewDeviceTargets()
    {
        if (!isset($this->container['NewDeviceTargets']) || is_null($this->container['NewDeviceTargets'])) {
            return null;
        }
        return $this->container['NewDeviceTargets'];
    }

    /**
     * Sets NewDeviceTargets
     *
     * @param bool|null $NewDeviceTargets NewDeviceTargets
     *
     * @return self
     */
    public function setNewDeviceTargets($NewDeviceTargets)
    {
        if (is_null($NewDeviceTargets)) {
            array_push($this->openAPINullablesSetToNull, 'NewDeviceTargets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewDeviceTargets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewDeviceTargets'] = $NewDeviceTargets;

        return $this;
    }

    /**
     * Gets NewDemographicTargets
     *
     * @return bool|null
     */
    public function getNewDemographicTargets()
    {
        if (!isset($this->container['NewDemographicTargets']) || is_null($this->container['NewDemographicTargets'])) {
            return null;
        }
        return $this->container['NewDemographicTargets'];
    }

    /**
     * Sets NewDemographicTargets
     *
     * @param bool|null $NewDemographicTargets NewDemographicTargets
     *
     * @return self
     */
    public function setNewDemographicTargets($NewDemographicTargets)
    {
        if (is_null($NewDemographicTargets)) {
            array_push($this->openAPINullablesSetToNull, 'NewDemographicTargets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewDemographicTargets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewDemographicTargets'] = $NewDemographicTargets;

        return $this;
    }

    /**
     * Gets NewAudienceTargets
     *
     * @return bool|null
     */
    public function getNewAudienceTargets()
    {
        if (!isset($this->container['NewAudienceTargets']) || is_null($this->container['NewAudienceTargets'])) {
            return null;
        }
        return $this->container['NewAudienceTargets'];
    }

    /**
     * Sets NewAudienceTargets
     *
     * @param bool|null $NewAudienceTargets NewAudienceTargets
     *
     * @return self
     */
    public function setNewAudienceTargets($NewAudienceTargets)
    {
        if (is_null($NewAudienceTargets)) {
            array_push($this->openAPINullablesSetToNull, 'NewAudienceTargets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewAudienceTargets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewAudienceTargets'] = $NewAudienceTargets;

        return $this;
    }

    /**
     * Gets NewAppAdExtensions
     *
     * @return bool|null
     */
    public function getNewAppAdExtensions()
    {
        if (!isset($this->container['NewAppAdExtensions']) || is_null($this->container['NewAppAdExtensions'])) {
            return null;
        }
        return $this->container['NewAppAdExtensions'];
    }

    /**
     * Sets NewAppAdExtensions
     *
     * @param bool|null $NewAppAdExtensions NewAppAdExtensions
     *
     * @return self
     */
    public function setNewAppAdExtensions($NewAppAdExtensions)
    {
        if (is_null($NewAppAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewAppAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewAppAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewAppAdExtensions'] = $NewAppAdExtensions;

        return $this;
    }

    /**
     * Gets NewCallAdExtensions
     *
     * @return bool|null
     */
    public function getNewCallAdExtensions()
    {
        if (!isset($this->container['NewCallAdExtensions']) || is_null($this->container['NewCallAdExtensions'])) {
            return null;
        }
        return $this->container['NewCallAdExtensions'];
    }

    /**
     * Sets NewCallAdExtensions
     *
     * @param bool|null $NewCallAdExtensions NewCallAdExtensions
     *
     * @return self
     */
    public function setNewCallAdExtensions($NewCallAdExtensions)
    {
        if (is_null($NewCallAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewCallAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewCallAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewCallAdExtensions'] = $NewCallAdExtensions;

        return $this;
    }

    /**
     * Gets NewCalloutAdExtensions
     *
     * @return bool|null
     */
    public function getNewCalloutAdExtensions()
    {
        if (!isset($this->container['NewCalloutAdExtensions']) || is_null($this->container['NewCalloutAdExtensions'])) {
            return null;
        }
        return $this->container['NewCalloutAdExtensions'];
    }

    /**
     * Sets NewCalloutAdExtensions
     *
     * @param bool|null $NewCalloutAdExtensions NewCalloutAdExtensions
     *
     * @return self
     */
    public function setNewCalloutAdExtensions($NewCalloutAdExtensions)
    {
        if (is_null($NewCalloutAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewCalloutAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewCalloutAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewCalloutAdExtensions'] = $NewCalloutAdExtensions;

        return $this;
    }

    /**
     * Gets NewPriceAdExtensions
     *
     * @return bool|null
     */
    public function getNewPriceAdExtensions()
    {
        if (!isset($this->container['NewPriceAdExtensions']) || is_null($this->container['NewPriceAdExtensions'])) {
            return null;
        }
        return $this->container['NewPriceAdExtensions'];
    }

    /**
     * Sets NewPriceAdExtensions
     *
     * @param bool|null $NewPriceAdExtensions NewPriceAdExtensions
     *
     * @return self
     */
    public function setNewPriceAdExtensions($NewPriceAdExtensions)
    {
        if (is_null($NewPriceAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewPriceAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewPriceAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewPriceAdExtensions'] = $NewPriceAdExtensions;

        return $this;
    }

    /**
     * Gets NewLocationAdExtensions
     *
     * @return bool|null
     */
    public function getNewLocationAdExtensions()
    {
        if (!isset($this->container['NewLocationAdExtensions']) || is_null($this->container['NewLocationAdExtensions'])) {
            return null;
        }
        return $this->container['NewLocationAdExtensions'];
    }

    /**
     * Sets NewLocationAdExtensions
     *
     * @param bool|null $NewLocationAdExtensions NewLocationAdExtensions
     *
     * @return self
     */
    public function setNewLocationAdExtensions($NewLocationAdExtensions)
    {
        if (is_null($NewLocationAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewLocationAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewLocationAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewLocationAdExtensions'] = $NewLocationAdExtensions;

        return $this;
    }

    /**
     * Gets NewReviewAdExtensions
     *
     * @return bool|null
     */
    public function getNewReviewAdExtensions()
    {
        if (!isset($this->container['NewReviewAdExtensions']) || is_null($this->container['NewReviewAdExtensions'])) {
            return null;
        }
        return $this->container['NewReviewAdExtensions'];
    }

    /**
     * Sets NewReviewAdExtensions
     *
     * @param bool|null $NewReviewAdExtensions NewReviewAdExtensions
     *
     * @return self
     */
    public function setNewReviewAdExtensions($NewReviewAdExtensions)
    {
        if (is_null($NewReviewAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewReviewAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewReviewAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewReviewAdExtensions'] = $NewReviewAdExtensions;

        return $this;
    }

    /**
     * Gets NewSitelinkAdExtensions
     *
     * @return bool|null
     */
    public function getNewSitelinkAdExtensions()
    {
        if (!isset($this->container['NewSitelinkAdExtensions']) || is_null($this->container['NewSitelinkAdExtensions'])) {
            return null;
        }
        return $this->container['NewSitelinkAdExtensions'];
    }

    /**
     * Sets NewSitelinkAdExtensions
     *
     * @param bool|null $NewSitelinkAdExtensions NewSitelinkAdExtensions
     *
     * @return self
     */
    public function setNewSitelinkAdExtensions($NewSitelinkAdExtensions)
    {
        if (is_null($NewSitelinkAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewSitelinkAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewSitelinkAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewSitelinkAdExtensions'] = $NewSitelinkAdExtensions;

        return $this;
    }

    /**
     * Gets NewStructuredSnippetAdExtensions
     *
     * @return bool|null
     */
    public function getNewStructuredSnippetAdExtensions()
    {
        if (!isset($this->container['NewStructuredSnippetAdExtensions']) || is_null($this->container['NewStructuredSnippetAdExtensions'])) {
            return null;
        }
        return $this->container['NewStructuredSnippetAdExtensions'];
    }

    /**
     * Sets NewStructuredSnippetAdExtensions
     *
     * @param bool|null $NewStructuredSnippetAdExtensions NewStructuredSnippetAdExtensions
     *
     * @return self
     */
    public function setNewStructuredSnippetAdExtensions($NewStructuredSnippetAdExtensions)
    {
        if (is_null($NewStructuredSnippetAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewStructuredSnippetAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewStructuredSnippetAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewStructuredSnippetAdExtensions'] = $NewStructuredSnippetAdExtensions;

        return $this;
    }

    /**
     * Gets NewPromotionAdExtensions
     *
     * @return bool|null
     */
    public function getNewPromotionAdExtensions()
    {
        if (!isset($this->container['NewPromotionAdExtensions']) || is_null($this->container['NewPromotionAdExtensions'])) {
            return null;
        }
        return $this->container['NewPromotionAdExtensions'];
    }

    /**
     * Sets NewPromotionAdExtensions
     *
     * @param bool|null $NewPromotionAdExtensions NewPromotionAdExtensions
     *
     * @return self
     */
    public function setNewPromotionAdExtensions($NewPromotionAdExtensions)
    {
        if (is_null($NewPromotionAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewPromotionAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewPromotionAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewPromotionAdExtensions'] = $NewPromotionAdExtensions;

        return $this;
    }

    /**
     * Gets NewImageAdExtensions
     *
     * @return bool|null
     */
    public function getNewImageAdExtensions()
    {
        if (!isset($this->container['NewImageAdExtensions']) || is_null($this->container['NewImageAdExtensions'])) {
            return null;
        }
        return $this->container['NewImageAdExtensions'];
    }

    /**
     * Sets NewImageAdExtensions
     *
     * @param bool|null $NewImageAdExtensions NewImageAdExtensions
     *
     * @return self
     */
    public function setNewImageAdExtensions($NewImageAdExtensions)
    {
        if (is_null($NewImageAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewImageAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewImageAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewImageAdExtensions'] = $NewImageAdExtensions;

        return $this;
    }

    /**
     * Gets NewLogoAdExtensions
     *
     * @return bool|null
     */
    public function getNewLogoAdExtensions()
    {
        if (!isset($this->container['NewLogoAdExtensions']) || is_null($this->container['NewLogoAdExtensions'])) {
            return null;
        }
        return $this->container['NewLogoAdExtensions'];
    }

    /**
     * Sets NewLogoAdExtensions
     *
     * @param bool|null $NewLogoAdExtensions NewLogoAdExtensions
     *
     * @return self
     */
    public function setNewLogoAdExtensions($NewLogoAdExtensions)
    {
        if (is_null($NewLogoAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewLogoAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewLogoAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewLogoAdExtensions'] = $NewLogoAdExtensions;

        return $this;
    }

    /**
     * Gets NewLeadFormAdExtensions
     *
     * @return bool|null
     */
    public function getNewLeadFormAdExtensions()
    {
        if (!isset($this->container['NewLeadFormAdExtensions']) || is_null($this->container['NewLeadFormAdExtensions'])) {
            return null;
        }
        return $this->container['NewLeadFormAdExtensions'];
    }

    /**
     * Sets NewLeadFormAdExtensions
     *
     * @param bool|null $NewLeadFormAdExtensions NewLeadFormAdExtensions
     *
     * @return self
     */
    public function setNewLeadFormAdExtensions($NewLeadFormAdExtensions)
    {
        if (is_null($NewLeadFormAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'NewLeadFormAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewLeadFormAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewLeadFormAdExtensions'] = $NewLeadFormAdExtensions;

        return $this;
    }

    /**
     * Gets NewPageFeeds
     *
     * @return bool|null
     */
    public function getNewPageFeeds()
    {
        if (!isset($this->container['NewPageFeeds']) || is_null($this->container['NewPageFeeds'])) {
            return null;
        }
        return $this->container['NewPageFeeds'];
    }

    /**
     * Sets NewPageFeeds
     *
     * @param bool|null $NewPageFeeds NewPageFeeds
     *
     * @return self
     */
    public function setNewPageFeeds($NewPageFeeds)
    {
        if (is_null($NewPageFeeds)) {
            array_push($this->openAPINullablesSetToNull, 'NewPageFeeds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewPageFeeds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewPageFeeds'] = $NewPageFeeds;

        return $this;
    }

    /**
     * Gets NewAdCustomizerFeeds
     *
     * @return bool|null
     */
    public function getNewAdCustomizerFeeds()
    {
        if (!isset($this->container['NewAdCustomizerFeeds']) || is_null($this->container['NewAdCustomizerFeeds'])) {
            return null;
        }
        return $this->container['NewAdCustomizerFeeds'];
    }

    /**
     * Sets NewAdCustomizerFeeds
     *
     * @param bool|null $NewAdCustomizerFeeds NewAdCustomizerFeeds
     *
     * @return self
     */
    public function setNewAdCustomizerFeeds($NewAdCustomizerFeeds)
    {
        if (is_null($NewAdCustomizerFeeds)) {
            array_push($this->openAPINullablesSetToNull, 'NewAdCustomizerFeeds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewAdCustomizerFeeds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewAdCustomizerFeeds'] = $NewAdCustomizerFeeds;

        return $this;
    }

    /**
     * Gets NewBrandSuitability
     *
     * @return bool|null
     */
    public function getNewBrandSuitability()
    {
        if (!isset($this->container['NewBrandSuitability']) || is_null($this->container['NewBrandSuitability'])) {
            return null;
        }
        return $this->container['NewBrandSuitability'];
    }

    /**
     * Sets NewBrandSuitability
     *
     * @param bool|null $NewBrandSuitability NewBrandSuitability
     *
     * @return self
     */
    public function setNewBrandSuitability($NewBrandSuitability)
    {
        if (is_null($NewBrandSuitability)) {
            array_push($this->openAPINullablesSetToNull, 'NewBrandSuitability');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewBrandSuitability', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewBrandSuitability'] = $NewBrandSuitability;

        return $this;
    }

    /**
     * Gets NewConversionGoals
     *
     * @return bool|null
     */
    public function getNewConversionGoals()
    {
        if (!isset($this->container['NewConversionGoals']) || is_null($this->container['NewConversionGoals'])) {
            return null;
        }
        return $this->container['NewConversionGoals'];
    }

    /**
     * Sets NewConversionGoals
     *
     * @param bool|null $NewConversionGoals NewConversionGoals
     *
     * @return self
     */
    public function setNewConversionGoals($NewConversionGoals)
    {
        if (is_null($NewConversionGoals)) {
            array_push($this->openAPINullablesSetToNull, 'NewConversionGoals');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewConversionGoals', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewConversionGoals'] = $NewConversionGoals;

        return $this;
    }

    /**
     * Gets NewCarouselAd
     *
     * @return bool|null
     */
    public function getNewCarouselAd()
    {
        if (!isset($this->container['NewCarouselAd']) || is_null($this->container['NewCarouselAd'])) {
            return null;
        }
        return $this->container['NewCarouselAd'];
    }

    /**
     * Sets NewCarouselAd
     *
     * @param bool|null $NewCarouselAd NewCarouselAd
     *
     * @return self
     */
    public function setNewCarouselAd($NewCarouselAd)
    {
        if (is_null($NewCarouselAd)) {
            array_push($this->openAPINullablesSetToNull, 'NewCarouselAd');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewCarouselAd', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewCarouselAd'] = $NewCarouselAd;

        return $this;
    }

    /**
     * Gets UpdateEntities
     *
     * @return bool|null
     */
    public function getUpdateEntities()
    {
        if (!isset($this->container['UpdateEntities']) || is_null($this->container['UpdateEntities'])) {
            return null;
        }
        return $this->container['UpdateEntities'];
    }

    /**
     * Sets UpdateEntities
     *
     * @param bool|null $UpdateEntities UpdateEntities
     *
     * @return self
     */
    public function setUpdateEntities($UpdateEntities)
    {
        if (is_null($UpdateEntities)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateEntities');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateEntities', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateEntities'] = $UpdateEntities;

        return $this;
    }

    /**
     * Gets UpdateCampaignBudgets
     *
     * @return bool|null
     */
    public function getUpdateCampaignBudgets()
    {
        if (!isset($this->container['UpdateCampaignBudgets']) || is_null($this->container['UpdateCampaignBudgets'])) {
            return null;
        }
        return $this->container['UpdateCampaignBudgets'];
    }

    /**
     * Sets UpdateCampaignBudgets
     *
     * @param bool|null $UpdateCampaignBudgets UpdateCampaignBudgets
     *
     * @return self
     */
    public function setUpdateCampaignBudgets($UpdateCampaignBudgets)
    {
        if (is_null($UpdateCampaignBudgets)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateCampaignBudgets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateCampaignBudgets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateCampaignBudgets'] = $UpdateCampaignBudgets;

        return $this;
    }

    /**
     * Gets UpdateBids
     *
     * @return bool|null
     */
    public function getUpdateBids()
    {
        if (!isset($this->container['UpdateBids']) || is_null($this->container['UpdateBids'])) {
            return null;
        }
        return $this->container['UpdateBids'];
    }

    /**
     * Sets UpdateBids
     *
     * @param bool|null $UpdateBids UpdateBids
     *
     * @return self
     */
    public function setUpdateBids($UpdateBids)
    {
        if (is_null($UpdateBids)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateBids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateBids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateBids'] = $UpdateBids;

        return $this;
    }

    /**
     * Gets UpdateNegativeKeywordLists
     *
     * @return bool|null
     */
    public function getUpdateNegativeKeywordLists()
    {
        if (!isset($this->container['UpdateNegativeKeywordLists']) || is_null($this->container['UpdateNegativeKeywordLists'])) {
            return null;
        }
        return $this->container['UpdateNegativeKeywordLists'];
    }

    /**
     * Sets UpdateNegativeKeywordLists
     *
     * @param bool|null $UpdateNegativeKeywordLists UpdateNegativeKeywordLists
     *
     * @return self
     */
    public function setUpdateNegativeKeywordLists($UpdateNegativeKeywordLists)
    {
        if (is_null($UpdateNegativeKeywordLists)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateNegativeKeywordLists');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateNegativeKeywordLists', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateNegativeKeywordLists'] = $UpdateNegativeKeywordLists;

        return $this;
    }

    /**
     * Gets UpdateAccountNegativeKeywords
     *
     * @return bool|null
     */
    public function getUpdateAccountNegativeKeywords()
    {
        if (!isset($this->container['UpdateAccountNegativeKeywords']) || is_null($this->container['UpdateAccountNegativeKeywords'])) {
            return null;
        }
        return $this->container['UpdateAccountNegativeKeywords'];
    }

    /**
     * Sets UpdateAccountNegativeKeywords
     *
     * @param bool|null $UpdateAccountNegativeKeywords UpdateAccountNegativeKeywords
     *
     * @return self
     */
    public function setUpdateAccountNegativeKeywords($UpdateAccountNegativeKeywords)
    {
        if (is_null($UpdateAccountNegativeKeywords)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateAccountNegativeKeywords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateAccountNegativeKeywords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateAccountNegativeKeywords'] = $UpdateAccountNegativeKeywords;

        return $this;
    }

    /**
     * Gets UpdateNegativeSites
     *
     * @return bool|null
     */
    public function getUpdateNegativeSites()
    {
        if (!isset($this->container['UpdateNegativeSites']) || is_null($this->container['UpdateNegativeSites'])) {
            return null;
        }
        return $this->container['UpdateNegativeSites'];
    }

    /**
     * Sets UpdateNegativeSites
     *
     * @param bool|null $UpdateNegativeSites UpdateNegativeSites
     *
     * @return self
     */
    public function setUpdateNegativeSites($UpdateNegativeSites)
    {
        if (is_null($UpdateNegativeSites)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateNegativeSites');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateNegativeSites', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateNegativeSites'] = $UpdateNegativeSites;

        return $this;
    }

    /**
     * Gets UpdateKeywordUrls
     *
     * @return bool|null
     */
    public function getUpdateKeywordUrls()
    {
        if (!isset($this->container['UpdateKeywordUrls']) || is_null($this->container['UpdateKeywordUrls'])) {
            return null;
        }
        return $this->container['UpdateKeywordUrls'];
    }

    /**
     * Sets UpdateKeywordUrls
     *
     * @param bool|null $UpdateKeywordUrls UpdateKeywordUrls
     *
     * @return self
     */
    public function setUpdateKeywordUrls($UpdateKeywordUrls)
    {
        if (is_null($UpdateKeywordUrls)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateKeywordUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateKeywordUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateKeywordUrls'] = $UpdateKeywordUrls;

        return $this;
    }

    /**
     * Gets UpdateUrlOptions
     *
     * @return bool|null
     */
    public function getUpdateUrlOptions()
    {
        if (!isset($this->container['UpdateUrlOptions']) || is_null($this->container['UpdateUrlOptions'])) {
            return null;
        }
        return $this->container['UpdateUrlOptions'];
    }

    /**
     * Sets UpdateUrlOptions
     *
     * @param bool|null $UpdateUrlOptions UpdateUrlOptions
     *
     * @return self
     */
    public function setUpdateUrlOptions($UpdateUrlOptions)
    {
        if (is_null($UpdateUrlOptions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateUrlOptions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateUrlOptions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateUrlOptions'] = $UpdateUrlOptions;

        return $this;
    }

    /**
     * Gets UpdateCampaignNames
     *
     * @return bool|null
     */
    public function getUpdateCampaignNames()
    {
        if (!isset($this->container['UpdateCampaignNames']) || is_null($this->container['UpdateCampaignNames'])) {
            return null;
        }
        return $this->container['UpdateCampaignNames'];
    }

    /**
     * Sets UpdateCampaignNames
     *
     * @param bool|null $UpdateCampaignNames UpdateCampaignNames
     *
     * @return self
     */
    public function setUpdateCampaignNames($UpdateCampaignNames)
    {
        if (is_null($UpdateCampaignNames)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateCampaignNames');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateCampaignNames', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateCampaignNames'] = $UpdateCampaignNames;

        return $this;
    }

    /**
     * Gets UpdateLabels
     *
     * @return bool|null
     */
    public function getUpdateLabels()
    {
        if (!isset($this->container['UpdateLabels']) || is_null($this->container['UpdateLabels'])) {
            return null;
        }
        return $this->container['UpdateLabels'];
    }

    /**
     * Sets UpdateLabels
     *
     * @param bool|null $UpdateLabels UpdateLabels
     *
     * @return self
     */
    public function setUpdateLabels($UpdateLabels)
    {
        if (is_null($UpdateLabels)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateLabels');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateLabels', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateLabels'] = $UpdateLabels;

        return $this;
    }

    /**
     * Gets UpdateProductFilters
     *
     * @return bool|null
     */
    public function getUpdateProductFilters()
    {
        if (!isset($this->container['UpdateProductFilters']) || is_null($this->container['UpdateProductFilters'])) {
            return null;
        }
        return $this->container['UpdateProductFilters'];
    }

    /**
     * Sets UpdateProductFilters
     *
     * @param bool|null $UpdateProductFilters UpdateProductFilters
     *
     * @return self
     */
    public function setUpdateProductFilters($UpdateProductFilters)
    {
        if (is_null($UpdateProductFilters)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateProductFilters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateProductFilters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateProductFilters'] = $UpdateProductFilters;

        return $this;
    }

    /**
     * Gets UpdateConversionGoals
     *
     * @return bool|null
     */
    public function getUpdateConversionGoals()
    {
        if (!isset($this->container['UpdateConversionGoals']) || is_null($this->container['UpdateConversionGoals'])) {
            return null;
        }
        return $this->container['UpdateConversionGoals'];
    }

    /**
     * Sets UpdateConversionGoals
     *
     * @param bool|null $UpdateConversionGoals UpdateConversionGoals
     *
     * @return self
     */
    public function setUpdateConversionGoals($UpdateConversionGoals)
    {
        if (is_null($UpdateConversionGoals)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateConversionGoals');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateConversionGoals', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateConversionGoals'] = $UpdateConversionGoals;

        return $this;
    }

    /**
     * Gets UpdateLocationTargets
     *
     * @return bool|null
     */
    public function getUpdateLocationTargets()
    {
        if (!isset($this->container['UpdateLocationTargets']) || is_null($this->container['UpdateLocationTargets'])) {
            return null;
        }
        return $this->container['UpdateLocationTargets'];
    }

    /**
     * Sets UpdateLocationTargets
     *
     * @param bool|null $UpdateLocationTargets UpdateLocationTargets
     *
     * @return self
     */
    public function setUpdateLocationTargets($UpdateLocationTargets)
    {
        if (is_null($UpdateLocationTargets)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateLocationTargets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateLocationTargets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateLocationTargets'] = $UpdateLocationTargets;

        return $this;
    }

    /**
     * Gets UpdateAdSchedules
     *
     * @return bool|null
     */
    public function getUpdateAdSchedules()
    {
        if (!isset($this->container['UpdateAdSchedules']) || is_null($this->container['UpdateAdSchedules'])) {
            return null;
        }
        return $this->container['UpdateAdSchedules'];
    }

    /**
     * Sets UpdateAdSchedules
     *
     * @param bool|null $UpdateAdSchedules UpdateAdSchedules
     *
     * @return self
     */
    public function setUpdateAdSchedules($UpdateAdSchedules)
    {
        if (is_null($UpdateAdSchedules)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateAdSchedules');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateAdSchedules', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateAdSchedules'] = $UpdateAdSchedules;

        return $this;
    }

    /**
     * Gets UpdateDeviceTargets
     *
     * @return bool|null
     */
    public function getUpdateDeviceTargets()
    {
        if (!isset($this->container['UpdateDeviceTargets']) || is_null($this->container['UpdateDeviceTargets'])) {
            return null;
        }
        return $this->container['UpdateDeviceTargets'];
    }

    /**
     * Sets UpdateDeviceTargets
     *
     * @param bool|null $UpdateDeviceTargets UpdateDeviceTargets
     *
     * @return self
     */
    public function setUpdateDeviceTargets($UpdateDeviceTargets)
    {
        if (is_null($UpdateDeviceTargets)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateDeviceTargets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateDeviceTargets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateDeviceTargets'] = $UpdateDeviceTargets;

        return $this;
    }

    /**
     * Gets UpdateDemographicTargets
     *
     * @return bool|null
     */
    public function getUpdateDemographicTargets()
    {
        if (!isset($this->container['UpdateDemographicTargets']) || is_null($this->container['UpdateDemographicTargets'])) {
            return null;
        }
        return $this->container['UpdateDemographicTargets'];
    }

    /**
     * Sets UpdateDemographicTargets
     *
     * @param bool|null $UpdateDemographicTargets UpdateDemographicTargets
     *
     * @return self
     */
    public function setUpdateDemographicTargets($UpdateDemographicTargets)
    {
        if (is_null($UpdateDemographicTargets)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateDemographicTargets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateDemographicTargets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateDemographicTargets'] = $UpdateDemographicTargets;

        return $this;
    }

    /**
     * Gets UpdateCampaignAdGroupLanguages
     *
     * @return bool|null
     */
    public function getUpdateCampaignAdGroupLanguages()
    {
        if (!isset($this->container['UpdateCampaignAdGroupLanguages']) || is_null($this->container['UpdateCampaignAdGroupLanguages'])) {
            return null;
        }
        return $this->container['UpdateCampaignAdGroupLanguages'];
    }

    /**
     * Sets UpdateCampaignAdGroupLanguages
     *
     * @param bool|null $UpdateCampaignAdGroupLanguages UpdateCampaignAdGroupLanguages
     *
     * @return self
     */
    public function setUpdateCampaignAdGroupLanguages($UpdateCampaignAdGroupLanguages)
    {
        if (is_null($UpdateCampaignAdGroupLanguages)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateCampaignAdGroupLanguages');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateCampaignAdGroupLanguages', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateCampaignAdGroupLanguages'] = $UpdateCampaignAdGroupLanguages;

        return $this;
    }

    /**
     * Gets UpdateAudienceTargets
     *
     * @return bool|null
     */
    public function getUpdateAudienceTargets()
    {
        if (!isset($this->container['UpdateAudienceTargets']) || is_null($this->container['UpdateAudienceTargets'])) {
            return null;
        }
        return $this->container['UpdateAudienceTargets'];
    }

    /**
     * Sets UpdateAudienceTargets
     *
     * @param bool|null $UpdateAudienceTargets UpdateAudienceTargets
     *
     * @return self
     */
    public function setUpdateAudienceTargets($UpdateAudienceTargets)
    {
        if (is_null($UpdateAudienceTargets)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateAudienceTargets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateAudienceTargets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateAudienceTargets'] = $UpdateAudienceTargets;

        return $this;
    }

    /**
     * Gets UpdateAppAdExtensions
     *
     * @return bool|null
     */
    public function getUpdateAppAdExtensions()
    {
        if (!isset($this->container['UpdateAppAdExtensions']) || is_null($this->container['UpdateAppAdExtensions'])) {
            return null;
        }
        return $this->container['UpdateAppAdExtensions'];
    }

    /**
     * Sets UpdateAppAdExtensions
     *
     * @param bool|null $UpdateAppAdExtensions UpdateAppAdExtensions
     *
     * @return self
     */
    public function setUpdateAppAdExtensions($UpdateAppAdExtensions)
    {
        if (is_null($UpdateAppAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateAppAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateAppAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateAppAdExtensions'] = $UpdateAppAdExtensions;

        return $this;
    }

    /**
     * Gets UpdateCallAdExtensions
     *
     * @return bool|null
     */
    public function getUpdateCallAdExtensions()
    {
        if (!isset($this->container['UpdateCallAdExtensions']) || is_null($this->container['UpdateCallAdExtensions'])) {
            return null;
        }
        return $this->container['UpdateCallAdExtensions'];
    }

    /**
     * Sets UpdateCallAdExtensions
     *
     * @param bool|null $UpdateCallAdExtensions UpdateCallAdExtensions
     *
     * @return self
     */
    public function setUpdateCallAdExtensions($UpdateCallAdExtensions)
    {
        if (is_null($UpdateCallAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateCallAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateCallAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateCallAdExtensions'] = $UpdateCallAdExtensions;

        return $this;
    }

    /**
     * Gets UpdateCalloutAdExtensions
     *
     * @return bool|null
     */
    public function getUpdateCalloutAdExtensions()
    {
        if (!isset($this->container['UpdateCalloutAdExtensions']) || is_null($this->container['UpdateCalloutAdExtensions'])) {
            return null;
        }
        return $this->container['UpdateCalloutAdExtensions'];
    }

    /**
     * Sets UpdateCalloutAdExtensions
     *
     * @param bool|null $UpdateCalloutAdExtensions UpdateCalloutAdExtensions
     *
     * @return self
     */
    public function setUpdateCalloutAdExtensions($UpdateCalloutAdExtensions)
    {
        if (is_null($UpdateCalloutAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateCalloutAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateCalloutAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateCalloutAdExtensions'] = $UpdateCalloutAdExtensions;

        return $this;
    }

    /**
     * Gets UpdatePriceAdExtensions
     *
     * @return bool|null
     */
    public function getUpdatePriceAdExtensions()
    {
        if (!isset($this->container['UpdatePriceAdExtensions']) || is_null($this->container['UpdatePriceAdExtensions'])) {
            return null;
        }
        return $this->container['UpdatePriceAdExtensions'];
    }

    /**
     * Sets UpdatePriceAdExtensions
     *
     * @param bool|null $UpdatePriceAdExtensions UpdatePriceAdExtensions
     *
     * @return self
     */
    public function setUpdatePriceAdExtensions($UpdatePriceAdExtensions)
    {
        if (is_null($UpdatePriceAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdatePriceAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdatePriceAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdatePriceAdExtensions'] = $UpdatePriceAdExtensions;

        return $this;
    }

    /**
     * Gets UpdateLocationAdExtensions
     *
     * @return bool|null
     */
    public function getUpdateLocationAdExtensions()
    {
        if (!isset($this->container['UpdateLocationAdExtensions']) || is_null($this->container['UpdateLocationAdExtensions'])) {
            return null;
        }
        return $this->container['UpdateLocationAdExtensions'];
    }

    /**
     * Sets UpdateLocationAdExtensions
     *
     * @param bool|null $UpdateLocationAdExtensions UpdateLocationAdExtensions
     *
     * @return self
     */
    public function setUpdateLocationAdExtensions($UpdateLocationAdExtensions)
    {
        if (is_null($UpdateLocationAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateLocationAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateLocationAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateLocationAdExtensions'] = $UpdateLocationAdExtensions;

        return $this;
    }

    /**
     * Gets UpdateReviewAdExtensions
     *
     * @return bool|null
     */
    public function getUpdateReviewAdExtensions()
    {
        if (!isset($this->container['UpdateReviewAdExtensions']) || is_null($this->container['UpdateReviewAdExtensions'])) {
            return null;
        }
        return $this->container['UpdateReviewAdExtensions'];
    }

    /**
     * Sets UpdateReviewAdExtensions
     *
     * @param bool|null $UpdateReviewAdExtensions UpdateReviewAdExtensions
     *
     * @return self
     */
    public function setUpdateReviewAdExtensions($UpdateReviewAdExtensions)
    {
        if (is_null($UpdateReviewAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateReviewAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateReviewAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateReviewAdExtensions'] = $UpdateReviewAdExtensions;

        return $this;
    }

    /**
     * Gets UpdateSitelinkAdExtensions
     *
     * @return bool|null
     */
    public function getUpdateSitelinkAdExtensions()
    {
        if (!isset($this->container['UpdateSitelinkAdExtensions']) || is_null($this->container['UpdateSitelinkAdExtensions'])) {
            return null;
        }
        return $this->container['UpdateSitelinkAdExtensions'];
    }

    /**
     * Sets UpdateSitelinkAdExtensions
     *
     * @param bool|null $UpdateSitelinkAdExtensions UpdateSitelinkAdExtensions
     *
     * @return self
     */
    public function setUpdateSitelinkAdExtensions($UpdateSitelinkAdExtensions)
    {
        if (is_null($UpdateSitelinkAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateSitelinkAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateSitelinkAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateSitelinkAdExtensions'] = $UpdateSitelinkAdExtensions;

        return $this;
    }

    /**
     * Gets UpdateStructuredSnippetAdExtensions
     *
     * @return bool|null
     */
    public function getUpdateStructuredSnippetAdExtensions()
    {
        if (!isset($this->container['UpdateStructuredSnippetAdExtensions']) || is_null($this->container['UpdateStructuredSnippetAdExtensions'])) {
            return null;
        }
        return $this->container['UpdateStructuredSnippetAdExtensions'];
    }

    /**
     * Sets UpdateStructuredSnippetAdExtensions
     *
     * @param bool|null $UpdateStructuredSnippetAdExtensions UpdateStructuredSnippetAdExtensions
     *
     * @return self
     */
    public function setUpdateStructuredSnippetAdExtensions($UpdateStructuredSnippetAdExtensions)
    {
        if (is_null($UpdateStructuredSnippetAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateStructuredSnippetAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateStructuredSnippetAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateStructuredSnippetAdExtensions'] = $UpdateStructuredSnippetAdExtensions;

        return $this;
    }

    /**
     * Gets UpdatePromotionAdExtensions
     *
     * @return bool|null
     */
    public function getUpdatePromotionAdExtensions()
    {
        if (!isset($this->container['UpdatePromotionAdExtensions']) || is_null($this->container['UpdatePromotionAdExtensions'])) {
            return null;
        }
        return $this->container['UpdatePromotionAdExtensions'];
    }

    /**
     * Sets UpdatePromotionAdExtensions
     *
     * @param bool|null $UpdatePromotionAdExtensions UpdatePromotionAdExtensions
     *
     * @return self
     */
    public function setUpdatePromotionAdExtensions($UpdatePromotionAdExtensions)
    {
        if (is_null($UpdatePromotionAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdatePromotionAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdatePromotionAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdatePromotionAdExtensions'] = $UpdatePromotionAdExtensions;

        return $this;
    }

    /**
     * Gets UpdateImageAdExtensions
     *
     * @return bool|null
     */
    public function getUpdateImageAdExtensions()
    {
        if (!isset($this->container['UpdateImageAdExtensions']) || is_null($this->container['UpdateImageAdExtensions'])) {
            return null;
        }
        return $this->container['UpdateImageAdExtensions'];
    }

    /**
     * Sets UpdateImageAdExtensions
     *
     * @param bool|null $UpdateImageAdExtensions UpdateImageAdExtensions
     *
     * @return self
     */
    public function setUpdateImageAdExtensions($UpdateImageAdExtensions)
    {
        if (is_null($UpdateImageAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateImageAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateImageAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateImageAdExtensions'] = $UpdateImageAdExtensions;

        return $this;
    }

    /**
     * Gets UpdateLogoAdExtensions
     *
     * @return bool|null
     */
    public function getUpdateLogoAdExtensions()
    {
        if (!isset($this->container['UpdateLogoAdExtensions']) || is_null($this->container['UpdateLogoAdExtensions'])) {
            return null;
        }
        return $this->container['UpdateLogoAdExtensions'];
    }

    /**
     * Sets UpdateLogoAdExtensions
     *
     * @param bool|null $UpdateLogoAdExtensions UpdateLogoAdExtensions
     *
     * @return self
     */
    public function setUpdateLogoAdExtensions($UpdateLogoAdExtensions)
    {
        if (is_null($UpdateLogoAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateLogoAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateLogoAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateLogoAdExtensions'] = $UpdateLogoAdExtensions;

        return $this;
    }

    /**
     * Gets UpdateLeadFormAdExtensions
     *
     * @return bool|null
     */
    public function getUpdateLeadFormAdExtensions()
    {
        if (!isset($this->container['UpdateLeadFormAdExtensions']) || is_null($this->container['UpdateLeadFormAdExtensions'])) {
            return null;
        }
        return $this->container['UpdateLeadFormAdExtensions'];
    }

    /**
     * Sets UpdateLeadFormAdExtensions
     *
     * @param bool|null $UpdateLeadFormAdExtensions UpdateLeadFormAdExtensions
     *
     * @return self
     */
    public function setUpdateLeadFormAdExtensions($UpdateLeadFormAdExtensions)
    {
        if (is_null($UpdateLeadFormAdExtensions)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateLeadFormAdExtensions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateLeadFormAdExtensions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateLeadFormAdExtensions'] = $UpdateLeadFormAdExtensions;

        return $this;
    }

    /**
     * Gets UpdateStatusForCampaigns
     *
     * @return bool|null
     */
    public function getUpdateStatusForCampaigns()
    {
        if (!isset($this->container['UpdateStatusForCampaigns']) || is_null($this->container['UpdateStatusForCampaigns'])) {
            return null;
        }
        return $this->container['UpdateStatusForCampaigns'];
    }

    /**
     * Sets UpdateStatusForCampaigns
     *
     * @param bool|null $UpdateStatusForCampaigns UpdateStatusForCampaigns
     *
     * @return self
     */
    public function setUpdateStatusForCampaigns($UpdateStatusForCampaigns)
    {
        if (is_null($UpdateStatusForCampaigns)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateStatusForCampaigns');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateStatusForCampaigns', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateStatusForCampaigns'] = $UpdateStatusForCampaigns;

        return $this;
    }

    /**
     * Gets UpdateStatusForAdGroups
     *
     * @return bool|null
     */
    public function getUpdateStatusForAdGroups()
    {
        if (!isset($this->container['UpdateStatusForAdGroups']) || is_null($this->container['UpdateStatusForAdGroups'])) {
            return null;
        }
        return $this->container['UpdateStatusForAdGroups'];
    }

    /**
     * Sets UpdateStatusForAdGroups
     *
     * @param bool|null $UpdateStatusForAdGroups UpdateStatusForAdGroups
     *
     * @return self
     */
    public function setUpdateStatusForAdGroups($UpdateStatusForAdGroups)
    {
        if (is_null($UpdateStatusForAdGroups)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateStatusForAdGroups');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateStatusForAdGroups', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateStatusForAdGroups'] = $UpdateStatusForAdGroups;

        return $this;
    }

    /**
     * Gets UpdateStatusForAds
     *
     * @return bool|null
     */
    public function getUpdateStatusForAds()
    {
        if (!isset($this->container['UpdateStatusForAds']) || is_null($this->container['UpdateStatusForAds'])) {
            return null;
        }
        return $this->container['UpdateStatusForAds'];
    }

    /**
     * Sets UpdateStatusForAds
     *
     * @param bool|null $UpdateStatusForAds UpdateStatusForAds
     *
     * @return self
     */
    public function setUpdateStatusForAds($UpdateStatusForAds)
    {
        if (is_null($UpdateStatusForAds)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateStatusForAds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateStatusForAds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateStatusForAds'] = $UpdateStatusForAds;

        return $this;
    }

    /**
     * Gets UpdateStatusForKeywords
     *
     * @return bool|null
     */
    public function getUpdateStatusForKeywords()
    {
        if (!isset($this->container['UpdateStatusForKeywords']) || is_null($this->container['UpdateStatusForKeywords'])) {
            return null;
        }
        return $this->container['UpdateStatusForKeywords'];
    }

    /**
     * Sets UpdateStatusForKeywords
     *
     * @param bool|null $UpdateStatusForKeywords UpdateStatusForKeywords
     *
     * @return self
     */
    public function setUpdateStatusForKeywords($UpdateStatusForKeywords)
    {
        if (is_null($UpdateStatusForKeywords)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateStatusForKeywords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateStatusForKeywords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateStatusForKeywords'] = $UpdateStatusForKeywords;

        return $this;
    }

    /**
     * Gets UpdateAdGroupNetwork
     *
     * @return bool|null
     */
    public function getUpdateAdGroupNetwork()
    {
        if (!isset($this->container['UpdateAdGroupNetwork']) || is_null($this->container['UpdateAdGroupNetwork'])) {
            return null;
        }
        return $this->container['UpdateAdGroupNetwork'];
    }

    /**
     * Sets UpdateAdGroupNetwork
     *
     * @param bool|null $UpdateAdGroupNetwork UpdateAdGroupNetwork
     *
     * @return self
     */
    public function setUpdateAdGroupNetwork($UpdateAdGroupNetwork)
    {
        if (is_null($UpdateAdGroupNetwork)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateAdGroupNetwork');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateAdGroupNetwork', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateAdGroupNetwork'] = $UpdateAdGroupNetwork;

        return $this;
    }

    /**
     * Gets UpdatePageFeeds
     *
     * @return bool|null
     */
    public function getUpdatePageFeeds()
    {
        if (!isset($this->container['UpdatePageFeeds']) || is_null($this->container['UpdatePageFeeds'])) {
            return null;
        }
        return $this->container['UpdatePageFeeds'];
    }

    /**
     * Sets UpdatePageFeeds
     *
     * @param bool|null $UpdatePageFeeds UpdatePageFeeds
     *
     * @return self
     */
    public function setUpdatePageFeeds($UpdatePageFeeds)
    {
        if (is_null($UpdatePageFeeds)) {
            array_push($this->openAPINullablesSetToNull, 'UpdatePageFeeds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdatePageFeeds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdatePageFeeds'] = $UpdatePageFeeds;

        return $this;
    }

    /**
     * Gets UpdateAdCustomizerFeeds
     *
     * @return bool|null
     */
    public function getUpdateAdCustomizerFeeds()
    {
        if (!isset($this->container['UpdateAdCustomizerFeeds']) || is_null($this->container['UpdateAdCustomizerFeeds'])) {
            return null;
        }
        return $this->container['UpdateAdCustomizerFeeds'];
    }

    /**
     * Sets UpdateAdCustomizerFeeds
     *
     * @param bool|null $UpdateAdCustomizerFeeds UpdateAdCustomizerFeeds
     *
     * @return self
     */
    public function setUpdateAdCustomizerFeeds($UpdateAdCustomizerFeeds)
    {
        if (is_null($UpdateAdCustomizerFeeds)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateAdCustomizerFeeds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateAdCustomizerFeeds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateAdCustomizerFeeds'] = $UpdateAdCustomizerFeeds;

        return $this;
    }

    /**
     * Gets UpdateBrandSuitability
     *
     * @return bool|null
     */
    public function getUpdateBrandSuitability()
    {
        if (!isset($this->container['UpdateBrandSuitability']) || is_null($this->container['UpdateBrandSuitability'])) {
            return null;
        }
        return $this->container['UpdateBrandSuitability'];
    }

    /**
     * Sets UpdateBrandSuitability
     *
     * @param bool|null $UpdateBrandSuitability UpdateBrandSuitability
     *
     * @return self
     */
    public function setUpdateBrandSuitability($UpdateBrandSuitability)
    {
        if (is_null($UpdateBrandSuitability)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateBrandSuitability');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateBrandSuitability', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateBrandSuitability'] = $UpdateBrandSuitability;

        return $this;
    }

    /**
     * Gets UpdateAdCustomizerAttributes
     *
     * @return bool|null
     */
    public function getUpdateAdCustomizerAttributes()
    {
        if (!isset($this->container['UpdateAdCustomizerAttributes']) || is_null($this->container['UpdateAdCustomizerAttributes'])) {
            return null;
        }
        return $this->container['UpdateAdCustomizerAttributes'];
    }

    /**
     * Sets UpdateAdCustomizerAttributes
     *
     * @param bool|null $UpdateAdCustomizerAttributes UpdateAdCustomizerAttributes
     *
     * @return self
     */
    public function setUpdateAdCustomizerAttributes($UpdateAdCustomizerAttributes)
    {
        if (is_null($UpdateAdCustomizerAttributes)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateAdCustomizerAttributes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateAdCustomizerAttributes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateAdCustomizerAttributes'] = $UpdateAdCustomizerAttributes;

        return $this;
    }

    /**
     * Gets DeleteRemovedEntities
     *
     * @return bool|null
     */
    public function getDeleteRemovedEntities()
    {
        if (!isset($this->container['DeleteRemovedEntities']) || is_null($this->container['DeleteRemovedEntities'])) {
            return null;
        }
        return $this->container['DeleteRemovedEntities'];
    }

    /**
     * Sets DeleteRemovedEntities
     *
     * @param bool|null $DeleteRemovedEntities DeleteRemovedEntities
     *
     * @return self
     */
    public function setDeleteRemovedEntities($DeleteRemovedEntities)
    {
        if (is_null($DeleteRemovedEntities)) {
            array_push($this->openAPINullablesSetToNull, 'DeleteRemovedEntities');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DeleteRemovedEntities', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DeleteRemovedEntities'] = $DeleteRemovedEntities;

        return $this;
    }

    /**
     * Gets RaiseBidsToMinimum
     *
     * @return bool|null
     */
    public function getRaiseBidsToMinimum()
    {
        if (!isset($this->container['RaiseBidsToMinimum']) || is_null($this->container['RaiseBidsToMinimum'])) {
            return null;
        }
        return $this->container['RaiseBidsToMinimum'];
    }

    /**
     * Sets RaiseBidsToMinimum
     *
     * @param bool|null $RaiseBidsToMinimum RaiseBidsToMinimum
     *
     * @return self
     */
    public function setRaiseBidsToMinimum($RaiseBidsToMinimum)
    {
        if (is_null($RaiseBidsToMinimum)) {
            array_push($this->openAPINullablesSetToNull, 'RaiseBidsToMinimum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RaiseBidsToMinimum', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RaiseBidsToMinimum'] = $RaiseBidsToMinimum;

        return $this;
    }

    /**
     * Gets RaiseCampaignBudgetsToMinimum
     *
     * @return bool|null
     */
    public function getRaiseCampaignBudgetsToMinimum()
    {
        if (!isset($this->container['RaiseCampaignBudgetsToMinimum']) || is_null($this->container['RaiseCampaignBudgetsToMinimum'])) {
            return null;
        }
        return $this->container['RaiseCampaignBudgetsToMinimum'];
    }

    /**
     * Sets RaiseCampaignBudgetsToMinimum
     *
     * @param bool|null $RaiseCampaignBudgetsToMinimum RaiseCampaignBudgetsToMinimum
     *
     * @return self
     */
    public function setRaiseCampaignBudgetsToMinimum($RaiseCampaignBudgetsToMinimum)
    {
        if (is_null($RaiseCampaignBudgetsToMinimum)) {
            array_push($this->openAPINullablesSetToNull, 'RaiseCampaignBudgetsToMinimum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RaiseCampaignBudgetsToMinimum', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RaiseCampaignBudgetsToMinimum'] = $RaiseCampaignBudgetsToMinimum;

        return $this;
    }

    /**
     * Gets AdjustmentForCampaignBudgets
     *
     * @return float|null
     */
    public function getAdjustmentForCampaignBudgets()
    {
        if (!isset($this->container['AdjustmentForCampaignBudgets']) || is_null($this->container['AdjustmentForCampaignBudgets'])) {
            return null;
        }
        return $this->container['AdjustmentForCampaignBudgets'];
    }

    /**
     * Sets AdjustmentForCampaignBudgets
     *
     * @param float|null $AdjustmentForCampaignBudgets AdjustmentForCampaignBudgets
     *
     * @return self
     */
    public function setAdjustmentForCampaignBudgets($AdjustmentForCampaignBudgets)
    {
        if (is_null($AdjustmentForCampaignBudgets)) {
            array_push($this->openAPINullablesSetToNull, 'AdjustmentForCampaignBudgets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdjustmentForCampaignBudgets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdjustmentForCampaignBudgets'] = $AdjustmentForCampaignBudgets;

        return $this;
    }

    /**
     * Gets AdjustmentForBids
     *
     * @return float|null
     */
    public function getAdjustmentForBids()
    {
        if (!isset($this->container['AdjustmentForBids']) || is_null($this->container['AdjustmentForBids'])) {
            return null;
        }
        return $this->container['AdjustmentForBids'];
    }

    /**
     * Sets AdjustmentForBids
     *
     * @param float|null $AdjustmentForBids AdjustmentForBids
     *
     * @return self
     */
    public function setAdjustmentForBids($AdjustmentForBids)
    {
        if (is_null($AdjustmentForBids)) {
            array_push($this->openAPINullablesSetToNull, 'AdjustmentForBids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdjustmentForBids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdjustmentForBids'] = $AdjustmentForBids;

        return $this;
    }

    /**
     * Gets SuffixForUrls
     *
     * @return string|null
     */
    public function getSuffixForUrls()
    {
        if (!isset($this->container['SuffixForUrls']) || is_null($this->container['SuffixForUrls'])) {
            return null;
        }
        return $this->container['SuffixForUrls'];
    }

    /**
     * Sets SuffixForUrls
     *
     * @param string|null $SuffixForUrls SuffixForUrls
     *
     * @return self
     */
    public function setSuffixForUrls($SuffixForUrls)
    {
        if (is_null($SuffixForUrls)) {
            array_push($this->openAPINullablesSetToNull, 'SuffixForUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuffixForUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuffixForUrls'] = $SuffixForUrls;

        return $this;
    }

    /**
     * Gets SearchAndReplaceForUrls
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty|null
     */
    public function getSearchAndReplaceForUrls()
    {
        if (!isset($this->container['SearchAndReplaceForUrls']) || is_null($this->container['SearchAndReplaceForUrls'])) {
            return null;
        }
        return $this->container['SearchAndReplaceForUrls'];
    }

    /**
     * Sets SearchAndReplaceForUrls
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty|null $SearchAndReplaceForUrls SearchAndReplaceForUrls
     *
     * @return self
     */
    public function setSearchAndReplaceForUrls($SearchAndReplaceForUrls)
    {
        if (is_null($SearchAndReplaceForUrls)) {
            array_push($this->openAPINullablesSetToNull, 'SearchAndReplaceForUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SearchAndReplaceForUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SearchAndReplaceForUrls'] = $SearchAndReplaceForUrls;

        return $this;
    }

    /**
     * Gets SuffixForTrackingTemplates
     *
     * @return string|null
     */
    public function getSuffixForTrackingTemplates()
    {
        if (!isset($this->container['SuffixForTrackingTemplates']) || is_null($this->container['SuffixForTrackingTemplates'])) {
            return null;
        }
        return $this->container['SuffixForTrackingTemplates'];
    }

    /**
     * Sets SuffixForTrackingTemplates
     *
     * @param string|null $SuffixForTrackingTemplates SuffixForTrackingTemplates
     *
     * @return self
     */
    public function setSuffixForTrackingTemplates($SuffixForTrackingTemplates)
    {
        if (is_null($SuffixForTrackingTemplates)) {
            array_push($this->openAPINullablesSetToNull, 'SuffixForTrackingTemplates');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuffixForTrackingTemplates', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuffixForTrackingTemplates'] = $SuffixForTrackingTemplates;

        return $this;
    }

    /**
     * Gets SearchAndReplaceForTrackingTemplates
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty|null
     */
    public function getSearchAndReplaceForTrackingTemplates()
    {
        if (!isset($this->container['SearchAndReplaceForTrackingTemplates']) || is_null($this->container['SearchAndReplaceForTrackingTemplates'])) {
            return null;
        }
        return $this->container['SearchAndReplaceForTrackingTemplates'];
    }

    /**
     * Sets SearchAndReplaceForTrackingTemplates
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty|null $SearchAndReplaceForTrackingTemplates SearchAndReplaceForTrackingTemplates
     *
     * @return self
     */
    public function setSearchAndReplaceForTrackingTemplates($SearchAndReplaceForTrackingTemplates)
    {
        if (is_null($SearchAndReplaceForTrackingTemplates)) {
            array_push($this->openAPINullablesSetToNull, 'SearchAndReplaceForTrackingTemplates');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SearchAndReplaceForTrackingTemplates', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SearchAndReplaceForTrackingTemplates'] = $SearchAndReplaceForTrackingTemplates;

        return $this;
    }

    /**
     * Gets SuffixForCampaignNames
     *
     * @return string|null
     */
    public function getSuffixForCampaignNames()
    {
        if (!isset($this->container['SuffixForCampaignNames']) || is_null($this->container['SuffixForCampaignNames'])) {
            return null;
        }
        return $this->container['SuffixForCampaignNames'];
    }

    /**
     * Sets SuffixForCampaignNames
     *
     * @param string|null $SuffixForCampaignNames SuffixForCampaignNames
     *
     * @return self
     */
    public function setSuffixForCampaignNames($SuffixForCampaignNames)
    {
        if (is_null($SuffixForCampaignNames)) {
            array_push($this->openAPINullablesSetToNull, 'SuffixForCampaignNames');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuffixForCampaignNames', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuffixForCampaignNames'] = $SuffixForCampaignNames;

        return $this;
    }

    /**
     * Gets SearchAndReplaceForCampaignNames
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty|null
     */
    public function getSearchAndReplaceForCampaignNames()
    {
        if (!isset($this->container['SearchAndReplaceForCampaignNames']) || is_null($this->container['SearchAndReplaceForCampaignNames'])) {
            return null;
        }
        return $this->container['SearchAndReplaceForCampaignNames'];
    }

    /**
     * Sets SearchAndReplaceForCampaignNames
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty|null $SearchAndReplaceForCampaignNames SearchAndReplaceForCampaignNames
     *
     * @return self
     */
    public function setSearchAndReplaceForCampaignNames($SearchAndReplaceForCampaignNames)
    {
        if (is_null($SearchAndReplaceForCampaignNames)) {
            array_push($this->openAPINullablesSetToNull, 'SearchAndReplaceForCampaignNames');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SearchAndReplaceForCampaignNames', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SearchAndReplaceForCampaignNames'] = $SearchAndReplaceForCampaignNames;

        return $this;
    }

    /**
     * Gets SearchAndReplaceForCustomParameters
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty|null
     */
    public function getSearchAndReplaceForCustomParameters()
    {
        if (!isset($this->container['SearchAndReplaceForCustomParameters']) || is_null($this->container['SearchAndReplaceForCustomParameters'])) {
            return null;
        }
        return $this->container['SearchAndReplaceForCustomParameters'];
    }

    /**
     * Sets SearchAndReplaceForCustomParameters
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty|null $SearchAndReplaceForCustomParameters SearchAndReplaceForCustomParameters
     *
     * @return self
     */
    public function setSearchAndReplaceForCustomParameters($SearchAndReplaceForCustomParameters)
    {
        if (is_null($SearchAndReplaceForCustomParameters)) {
            array_push($this->openAPINullablesSetToNull, 'SearchAndReplaceForCustomParameters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SearchAndReplaceForCustomParameters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SearchAndReplaceForCustomParameters'] = $SearchAndReplaceForCustomParameters;

        return $this;
    }

    /**
     * Gets SearchAndReplaceForFinalURLSuffix
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty|null
     */
    public function getSearchAndReplaceForFinalURLSuffix()
    {
        if (!isset($this->container['SearchAndReplaceForFinalURLSuffix']) || is_null($this->container['SearchAndReplaceForFinalURLSuffix'])) {
            return null;
        }
        return $this->container['SearchAndReplaceForFinalURLSuffix'];
    }

    /**
     * Sets SearchAndReplaceForFinalURLSuffix
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportSearchAndReplaceForStringProperty|null $SearchAndReplaceForFinalURLSuffix SearchAndReplaceForFinalURLSuffix
     *
     * @return self
     */
    public function setSearchAndReplaceForFinalURLSuffix($SearchAndReplaceForFinalURLSuffix)
    {
        if (is_null($SearchAndReplaceForFinalURLSuffix)) {
            array_push($this->openAPINullablesSetToNull, 'SearchAndReplaceForFinalURLSuffix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SearchAndReplaceForFinalURLSuffix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SearchAndReplaceForFinalURLSuffix'] = $SearchAndReplaceForFinalURLSuffix;

        return $this;
    }

    /**
     * Gets PauseCampaignsWithoutSupportedLocations
     *
     * @return bool|null
     */
    public function getPauseCampaignsWithoutSupportedLocations()
    {
        if (!isset($this->container['PauseCampaignsWithoutSupportedLocations']) || is_null($this->container['PauseCampaignsWithoutSupportedLocations'])) {
            return null;
        }
        return $this->container['PauseCampaignsWithoutSupportedLocations'];
    }

    /**
     * Sets PauseCampaignsWithoutSupportedLocations
     *
     * @param bool|null $PauseCampaignsWithoutSupportedLocations PauseCampaignsWithoutSupportedLocations
     *
     * @return self
     */
    public function setPauseCampaignsWithoutSupportedLocations($PauseCampaignsWithoutSupportedLocations)
    {
        if (is_null($PauseCampaignsWithoutSupportedLocations)) {
            array_push($this->openAPINullablesSetToNull, 'PauseCampaignsWithoutSupportedLocations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PauseCampaignsWithoutSupportedLocations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PauseCampaignsWithoutSupportedLocations'] = $PauseCampaignsWithoutSupportedLocations;

        return $this;
    }

    /**
     * Gets EnableParentLocationMapping
     *
     * @return bool|null
     */
    public function getEnableParentLocationMapping()
    {
        if (!isset($this->container['EnableParentLocationMapping']) || is_null($this->container['EnableParentLocationMapping'])) {
            return null;
        }
        return $this->container['EnableParentLocationMapping'];
    }

    /**
     * Sets EnableParentLocationMapping
     *
     * @param bool|null $EnableParentLocationMapping EnableParentLocationMapping
     *
     * @return self
     */
    public function setEnableParentLocationMapping($EnableParentLocationMapping)
    {
        if (is_null($EnableParentLocationMapping)) {
            array_push($this->openAPINullablesSetToNull, 'EnableParentLocationMapping');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EnableParentLocationMapping', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EnableParentLocationMapping'] = $EnableParentLocationMapping;

        return $this;
    }

    /**
     * Gets AssociatedStoreId
     *
     * @return string|null
     */
    public function getAssociatedStoreId()
    {
        if (!isset($this->container['AssociatedStoreId']) || is_null($this->container['AssociatedStoreId'])) {
            return null;
        }
        return $this->container['AssociatedStoreId'];
    }

    /**
     * Sets AssociatedStoreId
     *
     * @param string|null $AssociatedStoreId AssociatedStoreId
     *
     * @return self
     */
    public function setAssociatedStoreId($AssociatedStoreId)
    {
        if (is_null($AssociatedStoreId)) {
            array_push($this->openAPINullablesSetToNull, 'AssociatedStoreId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AssociatedStoreId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AssociatedStoreId'] = $AssociatedStoreId;

        return $this;
    }

    /**
     * Gets RaiseProductGroupBidsToMinimum
     *
     * @return bool|null
     */
    public function getRaiseProductGroupBidsToMinimum()
    {
        if (!isset($this->container['RaiseProductGroupBidsToMinimum']) || is_null($this->container['RaiseProductGroupBidsToMinimum'])) {
            return null;
        }
        return $this->container['RaiseProductGroupBidsToMinimum'];
    }

    /**
     * Sets RaiseProductGroupBidsToMinimum
     *
     * @param bool|null $RaiseProductGroupBidsToMinimum RaiseProductGroupBidsToMinimum
     *
     * @return self
     */
    public function setRaiseProductGroupBidsToMinimum($RaiseProductGroupBidsToMinimum)
    {
        if (is_null($RaiseProductGroupBidsToMinimum)) {
            array_push($this->openAPINullablesSetToNull, 'RaiseProductGroupBidsToMinimum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RaiseProductGroupBidsToMinimum', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RaiseProductGroupBidsToMinimum'] = $RaiseProductGroupBidsToMinimum;

        return $this;
    }

    /**
     * Gets SearchAndDsaMixedCampaignAsSearchCampaign
     *
     * @return bool|null
     */
    public function getSearchAndDsaMixedCampaignAsSearchCampaign()
    {
        if (!isset($this->container['SearchAndDsaMixedCampaignAsSearchCampaign']) || is_null($this->container['SearchAndDsaMixedCampaignAsSearchCampaign'])) {
            return null;
        }
        return $this->container['SearchAndDsaMixedCampaignAsSearchCampaign'];
    }

    /**
     * Sets SearchAndDsaMixedCampaignAsSearchCampaign
     *
     * @param bool|null $SearchAndDsaMixedCampaignAsSearchCampaign SearchAndDsaMixedCampaignAsSearchCampaign
     *
     * @return self
     */
    public function setSearchAndDsaMixedCampaignAsSearchCampaign($SearchAndDsaMixedCampaignAsSearchCampaign)
    {
        if (is_null($SearchAndDsaMixedCampaignAsSearchCampaign)) {
            array_push($this->openAPINullablesSetToNull, 'SearchAndDsaMixedCampaignAsSearchCampaign');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SearchAndDsaMixedCampaignAsSearchCampaign', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SearchAndDsaMixedCampaignAsSearchCampaign'] = $SearchAndDsaMixedCampaignAsSearchCampaign;

        return $this;
    }

    /**
     * Gets AccountUrlOptions
     *
     * @return bool|null
     */
    public function getAccountUrlOptions()
    {
        if (!isset($this->container['AccountUrlOptions']) || is_null($this->container['AccountUrlOptions'])) {
            return null;
        }
        return $this->container['AccountUrlOptions'];
    }

    /**
     * Sets AccountUrlOptions
     *
     * @param bool|null $AccountUrlOptions AccountUrlOptions
     *
     * @return self
     */
    public function setAccountUrlOptions($AccountUrlOptions)
    {
        if (is_null($AccountUrlOptions)) {
            array_push($this->openAPINullablesSetToNull, 'AccountUrlOptions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AccountUrlOptions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AccountUrlOptions'] = $AccountUrlOptions;

        return $this;
    }

    /**
     * Gets EnableAutoCurrencyConversion
     *
     * @return bool|null
     */
    public function getEnableAutoCurrencyConversion()
    {
        if (!isset($this->container['EnableAutoCurrencyConversion']) || is_null($this->container['EnableAutoCurrencyConversion'])) {
            return null;
        }
        return $this->container['EnableAutoCurrencyConversion'];
    }

    /**
     * Sets EnableAutoCurrencyConversion
     *
     * @param bool|null $EnableAutoCurrencyConversion EnableAutoCurrencyConversion
     *
     * @return self
     */
    public function setEnableAutoCurrencyConversion($EnableAutoCurrencyConversion)
    {
        if (is_null($EnableAutoCurrencyConversion)) {
            array_push($this->openAPINullablesSetToNull, 'EnableAutoCurrencyConversion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EnableAutoCurrencyConversion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EnableAutoCurrencyConversion'] = $EnableAutoCurrencyConversion;

        return $this;
    }

    /**
     * Gets UpdateBiddingStrategies
     *
     * @return bool|null
     */
    public function getUpdateBiddingStrategies()
    {
        if (!isset($this->container['UpdateBiddingStrategies']) || is_null($this->container['UpdateBiddingStrategies'])) {
            return null;
        }
        return $this->container['UpdateBiddingStrategies'];
    }

    /**
     * Sets UpdateBiddingStrategies
     *
     * @param bool|null $UpdateBiddingStrategies UpdateBiddingStrategies
     *
     * @return self
     */
    public function setUpdateBiddingStrategies($UpdateBiddingStrategies)
    {
        if (is_null($UpdateBiddingStrategies)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateBiddingStrategies');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateBiddingStrategies', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateBiddingStrategies'] = $UpdateBiddingStrategies;

        return $this;
    }

    /**
     * Gets AssociatedUetTagId
     *
     * @return string|null
     */
    public function getAssociatedUetTagId()
    {
        if (!isset($this->container['AssociatedUetTagId']) || is_null($this->container['AssociatedUetTagId'])) {
            return null;
        }
        return $this->container['AssociatedUetTagId'];
    }

    /**
     * Sets AssociatedUetTagId
     *
     * @param string|null $AssociatedUetTagId AssociatedUetTagId
     *
     * @return self
     */
    public function setAssociatedUetTagId($AssociatedUetTagId)
    {
        if (is_null($AssociatedUetTagId)) {
            array_push($this->openAPINullablesSetToNull, 'AssociatedUetTagId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AssociatedUetTagId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AssociatedUetTagId'] = $AssociatedUetTagId;

        return $this;
    }

    /**
     * Gets AutoDeviceBidOptimization
     *
     * @return bool|null
     */
    public function getAutoDeviceBidOptimization()
    {
        if (!isset($this->container['AutoDeviceBidOptimization']) || is_null($this->container['AutoDeviceBidOptimization'])) {
            return null;
        }
        return $this->container['AutoDeviceBidOptimization'];
    }

    /**
     * Sets AutoDeviceBidOptimization
     *
     * @param bool|null $AutoDeviceBidOptimization AutoDeviceBidOptimization
     *
     * @return self
     */
    public function setAutoDeviceBidOptimization($AutoDeviceBidOptimization)
    {
        if (is_null($AutoDeviceBidOptimization)) {
            array_push($this->openAPINullablesSetToNull, 'AutoDeviceBidOptimization');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AutoDeviceBidOptimization', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AutoDeviceBidOptimization'] = $AutoDeviceBidOptimization;

        return $this;
    }

    /**
     * Gets AdScheduleUseSearcherTimezone
     *
     * @return bool|null
     */
    public function getAdScheduleUseSearcherTimezone()
    {
        if (!isset($this->container['AdScheduleUseSearcherTimezone']) || is_null($this->container['AdScheduleUseSearcherTimezone'])) {
            return null;
        }
        return $this->container['AdScheduleUseSearcherTimezone'];
    }

    /**
     * Sets AdScheduleUseSearcherTimezone
     *
     * @param bool|null $AdScheduleUseSearcherTimezone AdScheduleUseSearcherTimezone
     *
     * @return self
     */
    public function setAdScheduleUseSearcherTimezone($AdScheduleUseSearcherTimezone)
    {
        if (is_null($AdScheduleUseSearcherTimezone)) {
            array_push($this->openAPINullablesSetToNull, 'AdScheduleUseSearcherTimezone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdScheduleUseSearcherTimezone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdScheduleUseSearcherTimezone'] = $AdScheduleUseSearcherTimezone;

        return $this;
    }

    /**
     * Gets PauseAIMAdGroupIfAllAudienceCriterionNotImported
     *
     * @return bool|null
     */
    public function getPauseAIMAdGroupIfAllAudienceCriterionNotImported()
    {
        if (!isset($this->container['PauseAIMAdGroupIfAllAudienceCriterionNotImported']) || is_null($this->container['PauseAIMAdGroupIfAllAudienceCriterionNotImported'])) {
            return null;
        }
        return $this->container['PauseAIMAdGroupIfAllAudienceCriterionNotImported'];
    }

    /**
     * Sets PauseAIMAdGroupIfAllAudienceCriterionNotImported
     *
     * @param bool|null $PauseAIMAdGroupIfAllAudienceCriterionNotImported PauseAIMAdGroupIfAllAudienceCriterionNotImported
     *
     * @return self
     */
    public function setPauseAIMAdGroupIfAllAudienceCriterionNotImported($PauseAIMAdGroupIfAllAudienceCriterionNotImported)
    {
        if (is_null($PauseAIMAdGroupIfAllAudienceCriterionNotImported)) {
            array_push($this->openAPINullablesSetToNull, 'PauseAIMAdGroupIfAllAudienceCriterionNotImported');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PauseAIMAdGroupIfAllAudienceCriterionNotImported', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PauseAIMAdGroupIfAllAudienceCriterionNotImported'] = $PauseAIMAdGroupIfAllAudienceCriterionNotImported;

        return $this;
    }

    /**
     * Gets RenameCampaignNameWithSuffix
     *
     * @return bool|null
     */
    public function getRenameCampaignNameWithSuffix()
    {
        if (!isset($this->container['RenameCampaignNameWithSuffix']) || is_null($this->container['RenameCampaignNameWithSuffix'])) {
            return null;
        }
        return $this->container['RenameCampaignNameWithSuffix'];
    }

    /**
     * Sets RenameCampaignNameWithSuffix
     *
     * @param bool|null $RenameCampaignNameWithSuffix RenameCampaignNameWithSuffix
     *
     * @return self
     */
    public function setRenameCampaignNameWithSuffix($RenameCampaignNameWithSuffix)
    {
        if (is_null($RenameCampaignNameWithSuffix)) {
            array_push($this->openAPINullablesSetToNull, 'RenameCampaignNameWithSuffix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RenameCampaignNameWithSuffix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RenameCampaignNameWithSuffix'] = $RenameCampaignNameWithSuffix;

        return $this;
    }

    /**
     * Gets UpdateAdUrls
     *
     * @return bool|null
     */
    public function getUpdateAdUrls()
    {
        if (!isset($this->container['UpdateAdUrls']) || is_null($this->container['UpdateAdUrls'])) {
            return null;
        }
        return $this->container['UpdateAdUrls'];
    }

    /**
     * Sets UpdateAdUrls
     *
     * @param bool|null $UpdateAdUrls UpdateAdUrls
     *
     * @return self
     */
    public function setUpdateAdUrls($UpdateAdUrls)
    {
        if (is_null($UpdateAdUrls)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateAdUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateAdUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateAdUrls'] = $UpdateAdUrls;

        return $this;
    }

    /**
     * Gets UpdateSitelinkUrls
     *
     * @return bool|null
     */
    public function getUpdateSitelinkUrls()
    {
        if (!isset($this->container['UpdateSitelinkUrls']) || is_null($this->container['UpdateSitelinkUrls'])) {
            return null;
        }
        return $this->container['UpdateSitelinkUrls'];
    }

    /**
     * Sets UpdateSitelinkUrls
     *
     * @param bool|null $UpdateSitelinkUrls UpdateSitelinkUrls
     *
     * @return self
     */
    public function setUpdateSitelinkUrls($UpdateSitelinkUrls)
    {
        if (is_null($UpdateSitelinkUrls)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateSitelinkUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateSitelinkUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateSitelinkUrls'] = $UpdateSitelinkUrls;

        return $this;
    }

    /**
     * Gets UpdateAssetAutomationCampaignSetting
     *
     * @return bool|null
     */
    public function getUpdateAssetAutomationCampaignSetting()
    {
        if (!isset($this->container['UpdateAssetAutomationCampaignSetting']) || is_null($this->container['UpdateAssetAutomationCampaignSetting'])) {
            return null;
        }
        return $this->container['UpdateAssetAutomationCampaignSetting'];
    }

    /**
     * Sets UpdateAssetAutomationCampaignSetting
     *
     * @param bool|null $UpdateAssetAutomationCampaignSetting UpdateAssetAutomationCampaignSetting
     *
     * @return self
     */
    public function setUpdateAssetAutomationCampaignSetting($UpdateAssetAutomationCampaignSetting)
    {
        if (is_null($UpdateAssetAutomationCampaignSetting)) {
            array_push($this->openAPINullablesSetToNull, 'UpdateAssetAutomationCampaignSetting');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpdateAssetAutomationCampaignSetting', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpdateAssetAutomationCampaignSetting'] = $UpdateAssetAutomationCampaignSetting;

        return $this;
    }

    /**
     * Gets ForwardCompatibilityMap
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]|null
     */
    public function getForwardCompatibilityMap()
    {
        if (!isset($this->container['ForwardCompatibilityMap']) || is_null($this->container['ForwardCompatibilityMap'])) {
            return null;
        }
        return $this->container['ForwardCompatibilityMap'];
    }

    /**
     * Sets ForwardCompatibilityMap
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]|null $ForwardCompatibilityMap ForwardCompatibilityMap
     *
     * @return self
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
        if (is_null($ForwardCompatibilityMap)) {
            array_push($this->openAPINullablesSetToNull, 'ForwardCompatibilityMap');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ForwardCompatibilityMap', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ForwardCompatibilityMap'] = $ForwardCompatibilityMap;

        return $this;
    }

    /**
     * Gets Type
     *
     * @return string|null
     */
    public function getType()
    {
        if (!isset($this->container['Type']) || is_null($this->container['Type'])) {
            return null;
        }
        return $this->container['Type'];
    }

    /**
     * Sets Type
     *
     * @param string|null $Type Type
     *
     * @return self
     */
    public function setType($Type)
    {
        if (is_null($Type)) {
            array_push($this->openAPINullablesSetToNull, 'Type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Type'] = $Type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
