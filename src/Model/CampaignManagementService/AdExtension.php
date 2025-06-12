<?php
/**
 * AdExtension
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

class AdExtension implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'Type';

    /**
     * Associative array for mapping discriminator values to model class names
     *
     * @var string[]
     */
    public const MAPPINGS = [
        'ActionAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ActionAdExtension',
        'AppAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\AppAdExtension',
        'CallAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\CallAdExtension',
        'CalloutAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\CalloutAdExtension',
        'DataTableAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\DataTableAdExtension',
        'DisclaimerAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\DisclaimerAdExtension',
        'FilterLinkAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\FilterLinkAdExtension',
        'FlyerAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\FlyerAdExtension',
        'ImageAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAdExtension',
        'LeadFormAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormAdExtension',
        'LocationAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationAdExtension',
        'LogoAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\LogoAdExtension',
        'NewsAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\NewsAdExtension',
        'PriceAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceAdExtension',
        'PromotionAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionAdExtension',
        'ReviewAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ReviewAdExtension',
        'SitelinkAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\SitelinkAdExtension',
        'StructuredSnippetAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\StructuredSnippetAdExtension',
        'VideoAdExtension' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoAdExtension',
    ];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AdExtension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Address' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Address',
        'GeoPoint' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\GeoPoint',
        'GeoCodeStatus' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BusinessGeoCodeStatus',
        'CompanyName' => 'string',
        'PhoneNumber' => 'string',
        'Status' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus',
        'Scheduling' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Schedule',
        'DevicePreference' => 'string',
        'Id' => 'string',
        'Type' => 'string',
        'Version' => 'int',
        'ForwardCompatibilityMap' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]',
        'CountryCode' => 'string',
        'IsCallOnly' => 'bool',
        'IsCallTrackingEnabled' => 'bool',
        'RequireTollFreeTrackingNumber' => 'bool',
        'AlternativeText' => 'string',
        'Description' => 'string',
        'DestinationUrl' => 'string',
        'ImageMediaIds' => 'string[]',
        'TrackingUrlTemplate' => 'string',
        'FinalUrlSuffix' => 'string',
        'UrlCustomParameters' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters',
        'FinalUrls' => 'string[]',
        'FinalMobileUrls' => 'string[]',
        'FinalAppUrls' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AppUrl[]',
        'Images' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]',
        'DisplayText' => 'string',
        'Layouts' => 'string[]',
        'SourceType' => 'string',
        'AppPlatform' => 'string',
        'AppStoreId' => 'string',
        'Name' => 'string',
        'SourceUrl' => 'string',
        'Filter' => 'string',
        'Priority' => 'int',
        'IsExact' => 'bool',
        'Text' => 'string',
        'Source' => 'string',
        'Url' => 'string',
        'NameUrl' => 'string',
        'Description1' => 'string',
        'Description2' => 'string',
        'ActionType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ActionAdExtensionActionType',
        'Language' => 'string',
        'Header' => 'string',
        'Values' => 'string[]',
        'PriceExtensionType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceExtensionType',
        'TableRows' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceTableRow[]',
        'PromotionItem' => 'string',
        'DiscountModifier' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionDiscountModifier',
        'PercentOff' => 'float',
        'MoneyAmountOff' => 'float',
        'PromotionCode' => 'string',
        'OrdersOverAmount' => 'float',
        'PromotionStartDate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Date',
        'PromotionEndDate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Date',
        'PromotionOccasion' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionOccasion',
        'CurrencyCode' => 'string',
        'AdExtensionHeaderType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionHeaderType',
        'Texts' => 'string[]',
        'FlyerName' => 'string',
        'StoreId' => 'string',
        'ImageMediaUrls' => 'string[]',
        'ActionText' => 'string',
        'VideoId' => 'string',
        'ThumbnailId' => 'string',
        'ThumbnailUrl' => 'string',
        'Title' => 'string',
        'PopupText' => 'string',
        'LineText' => 'string',
        'DisclaimerLayout' => 'string',
        'BusinessName' => 'string',
        'BusinessLogo' => 'string',
        'BusinessLogoUrl' => 'string',
        'DomainName' => 'string',
        'CallToAction' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormCallToAction',
        'ActionName' => 'string',
        'ActionDescription' => 'string',
        'CorporateImage' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAsset',
        'CorporateImageInternalUrl' => 'string',
        'FormHeadline' => 'string',
        'FormBusinessName' => 'string',
        'FormDescription' => 'string',
        'FormPolicyUrl' => 'string',
        'FormQuestions' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormQuestionDefinition[]',
        'ConfirmationMessage' => 'string',
        'ConfirmationDescription' => 'string',
        'ConfirmationAction' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ConfirmationAction',
        'ConfirmationUrl' => 'string',
        'LeadDelivery' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadDelivery',
        'LeadEmails' => 'string',
        'LeadWebhookUrl' => 'string',
        'LeadWebhookKey' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Address' => null,
        'GeoPoint' => null,
        'GeoCodeStatus' => null,
        'CompanyName' => null,
        'PhoneNumber' => null,
        'Status' => null,
        'Scheduling' => null,
        'DevicePreference' => 'int64',
        'Id' => 'int64',
        'Type' => null,
        'Version' => 'int32',
        'ForwardCompatibilityMap' => null,
        'CountryCode' => null,
        'IsCallOnly' => null,
        'IsCallTrackingEnabled' => null,
        'RequireTollFreeTrackingNumber' => null,
        'AlternativeText' => null,
        'Description' => null,
        'DestinationUrl' => null,
        'ImageMediaIds' => 'int64',
        'TrackingUrlTemplate' => null,
        'FinalUrlSuffix' => null,
        'UrlCustomParameters' => null,
        'FinalUrls' => null,
        'FinalMobileUrls' => null,
        'FinalAppUrls' => null,
        'Images' => null,
        'DisplayText' => null,
        'Layouts' => null,
        'SourceType' => null,
        'AppPlatform' => null,
        'AppStoreId' => null,
        'Name' => null,
        'SourceUrl' => null,
        'Filter' => null,
        'Priority' => 'int32',
        'IsExact' => null,
        'Text' => null,
        'Source' => null,
        'Url' => null,
        'NameUrl' => null,
        'Description1' => null,
        'Description2' => null,
        'ActionType' => null,
        'Language' => null,
        'Header' => null,
        'Values' => null,
        'PriceExtensionType' => null,
        'TableRows' => null,
        'PromotionItem' => null,
        'DiscountModifier' => null,
        'PercentOff' => 'double',
        'MoneyAmountOff' => 'double',
        'PromotionCode' => null,
        'OrdersOverAmount' => 'double',
        'PromotionStartDate' => null,
        'PromotionEndDate' => null,
        'PromotionOccasion' => null,
        'CurrencyCode' => null,
        'AdExtensionHeaderType' => null,
        'Texts' => null,
        'FlyerName' => null,
        'StoreId' => 'int64',
        'ImageMediaUrls' => null,
        'ActionText' => null,
        'VideoId' => 'int64',
        'ThumbnailId' => 'int64',
        'ThumbnailUrl' => null,
        'Title' => null,
        'PopupText' => null,
        'LineText' => null,
        'DisclaimerLayout' => null,
        'BusinessName' => null,
        'BusinessLogo' => 'int64',
        'BusinessLogoUrl' => null,
        'DomainName' => null,
        'CallToAction' => null,
        'ActionName' => null,
        'ActionDescription' => null,
        'CorporateImage' => null,
        'CorporateImageInternalUrl' => null,
        'FormHeadline' => null,
        'FormBusinessName' => null,
        'FormDescription' => null,
        'FormPolicyUrl' => null,
        'FormQuestions' => null,
        'ConfirmationMessage' => null,
        'ConfirmationDescription' => null,
        'ConfirmationAction' => null,
        'ConfirmationUrl' => null,
        'LeadDelivery' => null,
        'LeadEmails' => null,
        'LeadWebhookUrl' => null,
        'LeadWebhookKey' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Address' => true,
        'GeoPoint' => true,
        'GeoCodeStatus' => false,
        'CompanyName' => true,
        'PhoneNumber' => true,
        'Status' => false,
        'Scheduling' => true,
        'DevicePreference' => true,
        'Id' => true,
        'Type' => true,
        'Version' => true,
        'ForwardCompatibilityMap' => true,
        'CountryCode' => true,
        'IsCallOnly' => true,
        'IsCallTrackingEnabled' => true,
        'RequireTollFreeTrackingNumber' => true,
        'AlternativeText' => true,
        'Description' => true,
        'DestinationUrl' => true,
        'ImageMediaIds' => true,
        'TrackingUrlTemplate' => true,
        'FinalUrlSuffix' => true,
        'UrlCustomParameters' => true,
        'FinalUrls' => true,
        'FinalMobileUrls' => true,
        'FinalAppUrls' => true,
        'Images' => true,
        'DisplayText' => true,
        'Layouts' => true,
        'SourceType' => true,
        'AppPlatform' => true,
        'AppStoreId' => true,
        'Name' => true,
        'SourceUrl' => true,
        'Filter' => true,
        'Priority' => false,
        'IsExact' => false,
        'Text' => true,
        'Source' => true,
        'Url' => true,
        'NameUrl' => true,
        'Description1' => true,
        'Description2' => true,
        'ActionType' => false,
        'Language' => true,
        'Header' => true,
        'Values' => true,
        'PriceExtensionType' => false,
        'TableRows' => true,
        'PromotionItem' => true,
        'DiscountModifier' => false,
        'PercentOff' => true,
        'MoneyAmountOff' => true,
        'PromotionCode' => true,
        'OrdersOverAmount' => true,
        'PromotionStartDate' => true,
        'PromotionEndDate' => true,
        'PromotionOccasion' => false,
        'CurrencyCode' => true,
        'AdExtensionHeaderType' => false,
        'Texts' => true,
        'FlyerName' => true,
        'StoreId' => true,
        'ImageMediaUrls' => true,
        'ActionText' => true,
        'VideoId' => true,
        'ThumbnailId' => true,
        'ThumbnailUrl' => true,
        'Title' => true,
        'PopupText' => true,
        'LineText' => true,
        'DisclaimerLayout' => true,
        'BusinessName' => true,
        'BusinessLogo' => true,
        'BusinessLogoUrl' => true,
        'DomainName' => true,
        'CallToAction' => false,
        'ActionName' => true,
        'ActionDescription' => true,
        'CorporateImage' => true,
        'CorporateImageInternalUrl' => true,
        'FormHeadline' => true,
        'FormBusinessName' => true,
        'FormDescription' => true,
        'FormPolicyUrl' => true,
        'FormQuestions' => true,
        'ConfirmationMessage' => true,
        'ConfirmationDescription' => true,
        'ConfirmationAction' => false,
        'ConfirmationUrl' => true,
        'LeadDelivery' => false,
        'LeadEmails' => true,
        'LeadWebhookUrl' => true,
        'LeadWebhookKey' => true
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
        'Address' => 'Address',
        'GeoPoint' => 'GeoPoint',
        'GeoCodeStatus' => 'GeoCodeStatus',
        'CompanyName' => 'CompanyName',
        'PhoneNumber' => 'PhoneNumber',
        'Status' => 'Status',
        'Scheduling' => 'Scheduling',
        'DevicePreference' => 'DevicePreference',
        'Id' => 'Id',
        'Type' => 'Type',
        'Version' => 'Version',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap',
        'CountryCode' => 'CountryCode',
        'IsCallOnly' => 'IsCallOnly',
        'IsCallTrackingEnabled' => 'IsCallTrackingEnabled',
        'RequireTollFreeTrackingNumber' => 'RequireTollFreeTrackingNumber',
        'AlternativeText' => 'AlternativeText',
        'Description' => 'Description',
        'DestinationUrl' => 'DestinationUrl',
        'ImageMediaIds' => 'ImageMediaIds',
        'TrackingUrlTemplate' => 'TrackingUrlTemplate',
        'FinalUrlSuffix' => 'FinalUrlSuffix',
        'UrlCustomParameters' => 'UrlCustomParameters',
        'FinalUrls' => 'FinalUrls',
        'FinalMobileUrls' => 'FinalMobileUrls',
        'FinalAppUrls' => 'FinalAppUrls',
        'Images' => 'Images',
        'DisplayText' => 'DisplayText',
        'Layouts' => 'Layouts',
        'SourceType' => 'SourceType',
        'AppPlatform' => 'AppPlatform',
        'AppStoreId' => 'AppStoreId',
        'Name' => 'Name',
        'SourceUrl' => 'SourceUrl',
        'Filter' => 'Filter',
        'Priority' => 'Priority',
        'IsExact' => 'IsExact',
        'Text' => 'Text',
        'Source' => 'Source',
        'Url' => 'Url',
        'NameUrl' => 'NameUrl',
        'Description1' => 'Description1',
        'Description2' => 'Description2',
        'ActionType' => 'ActionType',
        'Language' => 'Language',
        'Header' => 'Header',
        'Values' => 'Values',
        'PriceExtensionType' => 'PriceExtensionType',
        'TableRows' => 'TableRows',
        'PromotionItem' => 'PromotionItem',
        'DiscountModifier' => 'DiscountModifier',
        'PercentOff' => 'PercentOff',
        'MoneyAmountOff' => 'MoneyAmountOff',
        'PromotionCode' => 'PromotionCode',
        'OrdersOverAmount' => 'OrdersOverAmount',
        'PromotionStartDate' => 'PromotionStartDate',
        'PromotionEndDate' => 'PromotionEndDate',
        'PromotionOccasion' => 'PromotionOccasion',
        'CurrencyCode' => 'CurrencyCode',
        'AdExtensionHeaderType' => 'AdExtensionHeaderType',
        'Texts' => 'Texts',
        'FlyerName' => 'FlyerName',
        'StoreId' => 'StoreId',
        'ImageMediaUrls' => 'ImageMediaUrls',
        'ActionText' => 'ActionText',
        'VideoId' => 'VideoId',
        'ThumbnailId' => 'ThumbnailId',
        'ThumbnailUrl' => 'ThumbnailUrl',
        'Title' => 'Title',
        'PopupText' => 'PopupText',
        'LineText' => 'LineText',
        'DisclaimerLayout' => 'DisclaimerLayout',
        'BusinessName' => 'BusinessName',
        'BusinessLogo' => 'BusinessLogo',
        'BusinessLogoUrl' => 'BusinessLogoUrl',
        'DomainName' => 'DomainName',
        'CallToAction' => 'CallToAction',
        'ActionName' => 'ActionName',
        'ActionDescription' => 'ActionDescription',
        'CorporateImage' => 'CorporateImage',
        'CorporateImageInternalUrl' => 'CorporateImageInternalUrl',
        'FormHeadline' => 'FormHeadline',
        'FormBusinessName' => 'FormBusinessName',
        'FormDescription' => 'FormDescription',
        'FormPolicyUrl' => 'FormPolicyUrl',
        'FormQuestions' => 'FormQuestions',
        'ConfirmationMessage' => 'ConfirmationMessage',
        'ConfirmationDescription' => 'ConfirmationDescription',
        'ConfirmationAction' => 'ConfirmationAction',
        'ConfirmationUrl' => 'ConfirmationUrl',
        'LeadDelivery' => 'LeadDelivery',
        'LeadEmails' => 'LeadEmails',
        'LeadWebhookUrl' => 'LeadWebhookUrl',
        'LeadWebhookKey' => 'LeadWebhookKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Address' => 'setAddress',
        'GeoPoint' => 'setGeoPoint',
        'GeoCodeStatus' => 'setGeoCodeStatus',
        'CompanyName' => 'setCompanyName',
        'PhoneNumber' => 'setPhoneNumber',
        'Status' => 'setStatus',
        'Scheduling' => 'setScheduling',
        'DevicePreference' => 'setDevicePreference',
        'Id' => 'setId',
        'Type' => 'setType',
        'Version' => 'setVersion',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap',
        'CountryCode' => 'setCountryCode',
        'IsCallOnly' => 'setIsCallOnly',
        'IsCallTrackingEnabled' => 'setIsCallTrackingEnabled',
        'RequireTollFreeTrackingNumber' => 'setRequireTollFreeTrackingNumber',
        'AlternativeText' => 'setAlternativeText',
        'Description' => 'setDescription',
        'DestinationUrl' => 'setDestinationUrl',
        'ImageMediaIds' => 'setImageMediaIds',
        'TrackingUrlTemplate' => 'setTrackingUrlTemplate',
        'FinalUrlSuffix' => 'setFinalUrlSuffix',
        'UrlCustomParameters' => 'setUrlCustomParameters',
        'FinalUrls' => 'setFinalUrls',
        'FinalMobileUrls' => 'setFinalMobileUrls',
        'FinalAppUrls' => 'setFinalAppUrls',
        'Images' => 'setImages',
        'DisplayText' => 'setDisplayText',
        'Layouts' => 'setLayouts',
        'SourceType' => 'setSourceType',
        'AppPlatform' => 'setAppPlatform',
        'AppStoreId' => 'setAppStoreId',
        'Name' => 'setName',
        'SourceUrl' => 'setSourceUrl',
        'Filter' => 'setFilter',
        'Priority' => 'setPriority',
        'IsExact' => 'setIsExact',
        'Text' => 'setText',
        'Source' => 'setSource',
        'Url' => 'setUrl',
        'NameUrl' => 'setNameUrl',
        'Description1' => 'setDescription1',
        'Description2' => 'setDescription2',
        'ActionType' => 'setActionType',
        'Language' => 'setLanguage',
        'Header' => 'setHeader',
        'Values' => 'setValues',
        'PriceExtensionType' => 'setPriceExtensionType',
        'TableRows' => 'setTableRows',
        'PromotionItem' => 'setPromotionItem',
        'DiscountModifier' => 'setDiscountModifier',
        'PercentOff' => 'setPercentOff',
        'MoneyAmountOff' => 'setMoneyAmountOff',
        'PromotionCode' => 'setPromotionCode',
        'OrdersOverAmount' => 'setOrdersOverAmount',
        'PromotionStartDate' => 'setPromotionStartDate',
        'PromotionEndDate' => 'setPromotionEndDate',
        'PromotionOccasion' => 'setPromotionOccasion',
        'CurrencyCode' => 'setCurrencyCode',
        'AdExtensionHeaderType' => 'setAdExtensionHeaderType',
        'Texts' => 'setTexts',
        'FlyerName' => 'setFlyerName',
        'StoreId' => 'setStoreId',
        'ImageMediaUrls' => 'setImageMediaUrls',
        'ActionText' => 'setActionText',
        'VideoId' => 'setVideoId',
        'ThumbnailId' => 'setThumbnailId',
        'ThumbnailUrl' => 'setThumbnailUrl',
        'Title' => 'setTitle',
        'PopupText' => 'setPopupText',
        'LineText' => 'setLineText',
        'DisclaimerLayout' => 'setDisclaimerLayout',
        'BusinessName' => 'setBusinessName',
        'BusinessLogo' => 'setBusinessLogo',
        'BusinessLogoUrl' => 'setBusinessLogoUrl',
        'DomainName' => 'setDomainName',
        'CallToAction' => 'setCallToAction',
        'ActionName' => 'setActionName',
        'ActionDescription' => 'setActionDescription',
        'CorporateImage' => 'setCorporateImage',
        'CorporateImageInternalUrl' => 'setCorporateImageInternalUrl',
        'FormHeadline' => 'setFormHeadline',
        'FormBusinessName' => 'setFormBusinessName',
        'FormDescription' => 'setFormDescription',
        'FormPolicyUrl' => 'setFormPolicyUrl',
        'FormQuestions' => 'setFormQuestions',
        'ConfirmationMessage' => 'setConfirmationMessage',
        'ConfirmationDescription' => 'setConfirmationDescription',
        'ConfirmationAction' => 'setConfirmationAction',
        'ConfirmationUrl' => 'setConfirmationUrl',
        'LeadDelivery' => 'setLeadDelivery',
        'LeadEmails' => 'setLeadEmails',
        'LeadWebhookUrl' => 'setLeadWebhookUrl',
        'LeadWebhookKey' => 'setLeadWebhookKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Address' => 'getAddress',
        'GeoPoint' => 'getGeoPoint',
        'GeoCodeStatus' => 'getGeoCodeStatus',
        'CompanyName' => 'getCompanyName',
        'PhoneNumber' => 'getPhoneNumber',
        'Status' => 'getStatus',
        'Scheduling' => 'getScheduling',
        'DevicePreference' => 'getDevicePreference',
        'Id' => 'getId',
        'Type' => 'getType',
        'Version' => 'getVersion',
        'ForwardCompatibilityMap' => 'getForwardCompatibilityMap',
        'CountryCode' => 'getCountryCode',
        'IsCallOnly' => 'getIsCallOnly',
        'IsCallTrackingEnabled' => 'getIsCallTrackingEnabled',
        'RequireTollFreeTrackingNumber' => 'getRequireTollFreeTrackingNumber',
        'AlternativeText' => 'getAlternativeText',
        'Description' => 'getDescription',
        'DestinationUrl' => 'getDestinationUrl',
        'ImageMediaIds' => 'getImageMediaIds',
        'TrackingUrlTemplate' => 'getTrackingUrlTemplate',
        'FinalUrlSuffix' => 'getFinalUrlSuffix',
        'UrlCustomParameters' => 'getUrlCustomParameters',
        'FinalUrls' => 'getFinalUrls',
        'FinalMobileUrls' => 'getFinalMobileUrls',
        'FinalAppUrls' => 'getFinalAppUrls',
        'Images' => 'getImages',
        'DisplayText' => 'getDisplayText',
        'Layouts' => 'getLayouts',
        'SourceType' => 'getSourceType',
        'AppPlatform' => 'getAppPlatform',
        'AppStoreId' => 'getAppStoreId',
        'Name' => 'getName',
        'SourceUrl' => 'getSourceUrl',
        'Filter' => 'getFilter',
        'Priority' => 'getPriority',
        'IsExact' => 'getIsExact',
        'Text' => 'getText',
        'Source' => 'getSource',
        'Url' => 'getUrl',
        'NameUrl' => 'getNameUrl',
        'Description1' => 'getDescription1',
        'Description2' => 'getDescription2',
        'ActionType' => 'getActionType',
        'Language' => 'getLanguage',
        'Header' => 'getHeader',
        'Values' => 'getValues',
        'PriceExtensionType' => 'getPriceExtensionType',
        'TableRows' => 'getTableRows',
        'PromotionItem' => 'getPromotionItem',
        'DiscountModifier' => 'getDiscountModifier',
        'PercentOff' => 'getPercentOff',
        'MoneyAmountOff' => 'getMoneyAmountOff',
        'PromotionCode' => 'getPromotionCode',
        'OrdersOverAmount' => 'getOrdersOverAmount',
        'PromotionStartDate' => 'getPromotionStartDate',
        'PromotionEndDate' => 'getPromotionEndDate',
        'PromotionOccasion' => 'getPromotionOccasion',
        'CurrencyCode' => 'getCurrencyCode',
        'AdExtensionHeaderType' => 'getAdExtensionHeaderType',
        'Texts' => 'getTexts',
        'FlyerName' => 'getFlyerName',
        'StoreId' => 'getStoreId',
        'ImageMediaUrls' => 'getImageMediaUrls',
        'ActionText' => 'getActionText',
        'VideoId' => 'getVideoId',
        'ThumbnailId' => 'getThumbnailId',
        'ThumbnailUrl' => 'getThumbnailUrl',
        'Title' => 'getTitle',
        'PopupText' => 'getPopupText',
        'LineText' => 'getLineText',
        'DisclaimerLayout' => 'getDisclaimerLayout',
        'BusinessName' => 'getBusinessName',
        'BusinessLogo' => 'getBusinessLogo',
        'BusinessLogoUrl' => 'getBusinessLogoUrl',
        'DomainName' => 'getDomainName',
        'CallToAction' => 'getCallToAction',
        'ActionName' => 'getActionName',
        'ActionDescription' => 'getActionDescription',
        'CorporateImage' => 'getCorporateImage',
        'CorporateImageInternalUrl' => 'getCorporateImageInternalUrl',
        'FormHeadline' => 'getFormHeadline',
        'FormBusinessName' => 'getFormBusinessName',
        'FormDescription' => 'getFormDescription',
        'FormPolicyUrl' => 'getFormPolicyUrl',
        'FormQuestions' => 'getFormQuestions',
        'ConfirmationMessage' => 'getConfirmationMessage',
        'ConfirmationDescription' => 'getConfirmationDescription',
        'ConfirmationAction' => 'getConfirmationAction',
        'ConfirmationUrl' => 'getConfirmationUrl',
        'LeadDelivery' => 'getLeadDelivery',
        'LeadEmails' => 'getLeadEmails',
        'LeadWebhookUrl' => 'getLeadWebhookUrl',
        'LeadWebhookKey' => 'getLeadWebhookKey'
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
        $this->setIfExists('Address', $data ?? [], null);
        $this->setIfExists('GeoPoint', $data ?? [], null);
        $this->setIfExists('GeoCodeStatus', $data ?? [], null);
        $this->setIfExists('CompanyName', $data ?? [], null);
        $this->setIfExists('PhoneNumber', $data ?? [], null);
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('Scheduling', $data ?? [], null);
        $this->setIfExists('DevicePreference', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'LeadFormAdExtension');
        $this->setIfExists('Version', $data ?? [], null);
        $this->setIfExists('ForwardCompatibilityMap', $data ?? [], null);
        $this->setIfExists('CountryCode', $data ?? [], null);
        $this->setIfExists('IsCallOnly', $data ?? [], null);
        $this->setIfExists('IsCallTrackingEnabled', $data ?? [], null);
        $this->setIfExists('RequireTollFreeTrackingNumber', $data ?? [], null);
        $this->setIfExists('AlternativeText', $data ?? [], null);
        $this->setIfExists('Description', $data ?? [], null);
        $this->setIfExists('DestinationUrl', $data ?? [], null);
        $this->setIfExists('ImageMediaIds', $data ?? [], null);
        $this->setIfExists('TrackingUrlTemplate', $data ?? [], null);
        $this->setIfExists('FinalUrlSuffix', $data ?? [], null);
        $this->setIfExists('UrlCustomParameters', $data ?? [], null);
        $this->setIfExists('FinalUrls', $data ?? [], null);
        $this->setIfExists('FinalMobileUrls', $data ?? [], null);
        $this->setIfExists('FinalAppUrls', $data ?? [], null);
        $this->setIfExists('Images', $data ?? [], null);
        $this->setIfExists('DisplayText', $data ?? [], null);
        $this->setIfExists('Layouts', $data ?? [], null);
        $this->setIfExists('SourceType', $data ?? [], null);
        $this->setIfExists('AppPlatform', $data ?? [], null);
        $this->setIfExists('AppStoreId', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('SourceUrl', $data ?? [], null);
        $this->setIfExists('Filter', $data ?? [], null);
        $this->setIfExists('Priority', $data ?? [], null);
        $this->setIfExists('IsExact', $data ?? [], null);
        $this->setIfExists('Text', $data ?? [], null);
        $this->setIfExists('Source', $data ?? [], null);
        $this->setIfExists('Url', $data ?? [], null);
        $this->setIfExists('NameUrl', $data ?? [], null);
        $this->setIfExists('Description1', $data ?? [], null);
        $this->setIfExists('Description2', $data ?? [], null);
        $this->setIfExists('ActionType', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('Header', $data ?? [], null);
        $this->setIfExists('Values', $data ?? [], null);
        $this->setIfExists('PriceExtensionType', $data ?? [], null);
        $this->setIfExists('TableRows', $data ?? [], null);
        $this->setIfExists('PromotionItem', $data ?? [], null);
        $this->setIfExists('DiscountModifier', $data ?? [], null);
        $this->setIfExists('PercentOff', $data ?? [], null);
        $this->setIfExists('MoneyAmountOff', $data ?? [], null);
        $this->setIfExists('PromotionCode', $data ?? [], null);
        $this->setIfExists('OrdersOverAmount', $data ?? [], null);
        $this->setIfExists('PromotionStartDate', $data ?? [], null);
        $this->setIfExists('PromotionEndDate', $data ?? [], null);
        $this->setIfExists('PromotionOccasion', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('AdExtensionHeaderType', $data ?? [], null);
        $this->setIfExists('Texts', $data ?? [], null);
        $this->setIfExists('FlyerName', $data ?? [], null);
        $this->setIfExists('StoreId', $data ?? [], null);
        $this->setIfExists('ImageMediaUrls', $data ?? [], null);
        $this->setIfExists('ActionText', $data ?? [], null);
        $this->setIfExists('VideoId', $data ?? [], null);
        $this->setIfExists('ThumbnailId', $data ?? [], null);
        $this->setIfExists('ThumbnailUrl', $data ?? [], null);
        $this->setIfExists('Title', $data ?? [], null);
        $this->setIfExists('PopupText', $data ?? [], null);
        $this->setIfExists('LineText', $data ?? [], null);
        $this->setIfExists('DisclaimerLayout', $data ?? [], null);
        $this->setIfExists('BusinessName', $data ?? [], null);
        $this->setIfExists('BusinessLogo', $data ?? [], null);
        $this->setIfExists('BusinessLogoUrl', $data ?? [], null);
        $this->setIfExists('DomainName', $data ?? [], null);
        $this->setIfExists('CallToAction', $data ?? [], null);
        $this->setIfExists('ActionName', $data ?? [], null);
        $this->setIfExists('ActionDescription', $data ?? [], null);
        $this->setIfExists('CorporateImage', $data ?? [], null);
        $this->setIfExists('CorporateImageInternalUrl', $data ?? [], null);
        $this->setIfExists('FormHeadline', $data ?? [], null);
        $this->setIfExists('FormBusinessName', $data ?? [], null);
        $this->setIfExists('FormDescription', $data ?? [], null);
        $this->setIfExists('FormPolicyUrl', $data ?? [], null);
        $this->setIfExists('FormQuestions', $data ?? [], null);
        $this->setIfExists('ConfirmationMessage', $data ?? [], null);
        $this->setIfExists('ConfirmationDescription', $data ?? [], null);
        $this->setIfExists('ConfirmationAction', $data ?? [], null);
        $this->setIfExists('ConfirmationUrl', $data ?? [], null);
        $this->setIfExists('LeadDelivery', $data ?? [], null);
        $this->setIfExists('LeadEmails', $data ?? [], null);
        $this->setIfExists('LeadWebhookUrl', $data ?? [], null);
        $this->setIfExists('LeadWebhookKey', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['Type'] = static::$openAPIModelName;
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
     * Gets Address
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Address|null
     */
    public function getAddress()
    {
        if (!isset($this->container['Address']) || is_null($this->container['Address'])) {
            return null;
        }
        return $this->container['Address'];
    }

    /**
     * Sets Address
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Address|null $Address Address
     *
     * @return self
     */
    public function setAddress($Address)
    {
        if (is_null($Address)) {
            array_push($this->openAPINullablesSetToNull, 'Address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Address'] = $Address;

        return $this;
    }

    /**
     * Gets GeoPoint
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\GeoPoint|null
     */
    public function getGeoPoint()
    {
        if (!isset($this->container['GeoPoint']) || is_null($this->container['GeoPoint'])) {
            return null;
        }
        return $this->container['GeoPoint'];
    }

    /**
     * Sets GeoPoint
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\GeoPoint|null $GeoPoint GeoPoint
     *
     * @return self
     */
    public function setGeoPoint($GeoPoint)
    {
        if (is_null($GeoPoint)) {
            array_push($this->openAPINullablesSetToNull, 'GeoPoint');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('GeoPoint', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['GeoPoint'] = $GeoPoint;

        return $this;
    }

    /**
     * Gets GeoCodeStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\BusinessGeoCodeStatus|mixed|null
     */
    public function getGeoCodeStatus()
    {
        if (!isset($this->container['GeoCodeStatus']) || is_null($this->container['GeoCodeStatus'])) {
            return null;
        }
        if ((is_object($this->container['GeoCodeStatus']) || is_string($this->container['GeoCodeStatus'])) && method_exists($this->container['GeoCodeStatus'], 'getValue')) {
            return $this->container['GeoCodeStatus']->getValue();
        }
        return $this->container['GeoCodeStatus'];
    }

    /**
     * Sets GeoCodeStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\BusinessGeoCodeStatus|mixed|null $GeoCodeStatus GeoCodeStatus
     *
     * @return self
     */
    public function setGeoCodeStatus($GeoCodeStatus)
    {
        if (is_null($GeoCodeStatus)) {
            throw new \InvalidArgumentException('non-nullable GeoCodeStatus cannot be null');
        }
        if (!$GeoCodeStatus instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\BusinessGeoCodeStatus) {
            $GeoCodeStatus = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\BusinessGeoCodeStatus($GeoCodeStatus);
        }
        $this->container['GeoCodeStatus'] = $GeoCodeStatus;

        return $this;
    }

    /**
     * Gets CompanyName
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        if (!isset($this->container['CompanyName']) || is_null($this->container['CompanyName'])) {
            return null;
        }
        return $this->container['CompanyName'];
    }

    /**
     * Sets CompanyName
     *
     * @param string|null $CompanyName CompanyName
     *
     * @return self
     */
    public function setCompanyName($CompanyName)
    {
        if (is_null($CompanyName)) {
            array_push($this->openAPINullablesSetToNull, 'CompanyName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CompanyName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CompanyName'] = $CompanyName;

        return $this;
    }

    /**
     * Gets PhoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        if (!isset($this->container['PhoneNumber']) || is_null($this->container['PhoneNumber'])) {
            return null;
        }
        return $this->container['PhoneNumber'];
    }

    /**
     * Sets PhoneNumber
     *
     * @param string|null $PhoneNumber PhoneNumber
     *
     * @return self
     */
    public function setPhoneNumber($PhoneNumber)
    {
        if (is_null($PhoneNumber)) {
            array_push($this->openAPINullablesSetToNull, 'PhoneNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PhoneNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PhoneNumber'] = $PhoneNumber;

        return $this;
    }

    /**
     * Gets Status
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus|mixed|null
     */
    public function getStatus()
    {
        if (!isset($this->container['Status']) || is_null($this->container['Status'])) {
            return null;
        }
        if ((is_object($this->container['Status']) || is_string($this->container['Status'])) && method_exists($this->container['Status'], 'getValue')) {
            return $this->container['Status']->getValue();
        }
        return $this->container['Status'];
    }

    /**
     * Sets Status
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus($Status);
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets Scheduling
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Schedule|null
     */
    public function getScheduling()
    {
        if (!isset($this->container['Scheduling']) || is_null($this->container['Scheduling'])) {
            return null;
        }
        return $this->container['Scheduling'];
    }

    /**
     * Sets Scheduling
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Schedule|null $Scheduling Scheduling
     *
     * @return self
     */
    public function setScheduling($Scheduling)
    {
        if (is_null($Scheduling)) {
            array_push($this->openAPINullablesSetToNull, 'Scheduling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Scheduling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Scheduling'] = $Scheduling;

        return $this;
    }

    /**
     * Gets DevicePreference
     *
     * @return string|null
     */
    public function getDevicePreference()
    {
        if (!isset($this->container['DevicePreference']) || is_null($this->container['DevicePreference'])) {
            return null;
        }
        return $this->container['DevicePreference'];
    }

    /**
     * Sets DevicePreference
     *
     * @param string|null $DevicePreference DevicePreference
     *
     * @return self
     */
    public function setDevicePreference($DevicePreference)
    {
        if (is_null($DevicePreference)) {
            array_push($this->openAPINullablesSetToNull, 'DevicePreference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DevicePreference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DevicePreference'] = $DevicePreference;

        return $this;
    }

    /**
     * Gets Id
     *
     * @return string|null
     */
    public function getId()
    {
        if (!isset($this->container['Id']) || is_null($this->container['Id'])) {
            return null;
        }
        return $this->container['Id'];
    }

    /**
     * Sets Id
     *
     * @param string|null $Id Id
     *
     * @return self
     */
    public function setId($Id)
    {
        if (is_null($Id)) {
            array_push($this->openAPINullablesSetToNull, 'Id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Id'] = $Id;

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
     * Gets Version
     *
     * @return int|null
     */
    public function getVersion()
    {
        if (!isset($this->container['Version']) || is_null($this->container['Version'])) {
            return null;
        }
        return $this->container['Version'];
    }

    /**
     * Sets Version
     *
     * @param int|null $Version Version
     *
     * @return self
     */
    public function setVersion($Version)
    {
        if (is_null($Version)) {
            array_push($this->openAPINullablesSetToNull, 'Version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Version'] = $Version;

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
     * Gets CountryCode
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        if (!isset($this->container['CountryCode']) || is_null($this->container['CountryCode'])) {
            return null;
        }
        return $this->container['CountryCode'];
    }

    /**
     * Sets CountryCode
     *
     * @param string|null $CountryCode CountryCode
     *
     * @return self
     */
    public function setCountryCode($CountryCode)
    {
        if (is_null($CountryCode)) {
            array_push($this->openAPINullablesSetToNull, 'CountryCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CountryCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CountryCode'] = $CountryCode;

        return $this;
    }

    /**
     * Gets IsCallOnly
     *
     * @return bool|null
     */
    public function getIsCallOnly()
    {
        if (!isset($this->container['IsCallOnly']) || is_null($this->container['IsCallOnly'])) {
            return null;
        }
        return $this->container['IsCallOnly'];
    }

    /**
     * Sets IsCallOnly
     *
     * @param bool|null $IsCallOnly IsCallOnly
     *
     * @return self
     */
    public function setIsCallOnly($IsCallOnly)
    {
        if (is_null($IsCallOnly)) {
            array_push($this->openAPINullablesSetToNull, 'IsCallOnly');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsCallOnly', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsCallOnly'] = $IsCallOnly;

        return $this;
    }

    /**
     * Gets IsCallTrackingEnabled
     *
     * @return bool|null
     */
    public function getIsCallTrackingEnabled()
    {
        if (!isset($this->container['IsCallTrackingEnabled']) || is_null($this->container['IsCallTrackingEnabled'])) {
            return null;
        }
        return $this->container['IsCallTrackingEnabled'];
    }

    /**
     * Sets IsCallTrackingEnabled
     *
     * @param bool|null $IsCallTrackingEnabled IsCallTrackingEnabled
     *
     * @return self
     */
    public function setIsCallTrackingEnabled($IsCallTrackingEnabled)
    {
        if (is_null($IsCallTrackingEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'IsCallTrackingEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsCallTrackingEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsCallTrackingEnabled'] = $IsCallTrackingEnabled;

        return $this;
    }

    /**
     * Gets RequireTollFreeTrackingNumber
     *
     * @return bool|null
     */
    public function getRequireTollFreeTrackingNumber()
    {
        if (!isset($this->container['RequireTollFreeTrackingNumber']) || is_null($this->container['RequireTollFreeTrackingNumber'])) {
            return null;
        }
        return $this->container['RequireTollFreeTrackingNumber'];
    }

    /**
     * Sets RequireTollFreeTrackingNumber
     *
     * @param bool|null $RequireTollFreeTrackingNumber RequireTollFreeTrackingNumber
     *
     * @return self
     */
    public function setRequireTollFreeTrackingNumber($RequireTollFreeTrackingNumber)
    {
        if (is_null($RequireTollFreeTrackingNumber)) {
            array_push($this->openAPINullablesSetToNull, 'RequireTollFreeTrackingNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RequireTollFreeTrackingNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RequireTollFreeTrackingNumber'] = $RequireTollFreeTrackingNumber;

        return $this;
    }

    /**
     * Gets AlternativeText
     *
     * @return string|null
     */
    public function getAlternativeText()
    {
        if (!isset($this->container['AlternativeText']) || is_null($this->container['AlternativeText'])) {
            return null;
        }
        return $this->container['AlternativeText'];
    }

    /**
     * Sets AlternativeText
     *
     * @param string|null $AlternativeText AlternativeText
     *
     * @return self
     */
    public function setAlternativeText($AlternativeText)
    {
        if (is_null($AlternativeText)) {
            array_push($this->openAPINullablesSetToNull, 'AlternativeText');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AlternativeText', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AlternativeText'] = $AlternativeText;

        return $this;
    }

    /**
     * Gets Description
     *
     * @return string|null
     */
    public function getDescription()
    {
        if (!isset($this->container['Description']) || is_null($this->container['Description'])) {
            return null;
        }
        return $this->container['Description'];
    }

    /**
     * Sets Description
     *
     * @param string|null $Description Description
     *
     * @return self
     */
    public function setDescription($Description)
    {
        if (is_null($Description)) {
            array_push($this->openAPINullablesSetToNull, 'Description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Description'] = $Description;

        return $this;
    }

    /**
     * Gets DestinationUrl
     *
     * @return string|null
     */
    public function getDestinationUrl()
    {
        if (!isset($this->container['DestinationUrl']) || is_null($this->container['DestinationUrl'])) {
            return null;
        }
        return $this->container['DestinationUrl'];
    }

    /**
     * Sets DestinationUrl
     *
     * @param string|null $DestinationUrl DestinationUrl
     *
     * @return self
     */
    public function setDestinationUrl($DestinationUrl)
    {
        if (is_null($DestinationUrl)) {
            array_push($this->openAPINullablesSetToNull, 'DestinationUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DestinationUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DestinationUrl'] = $DestinationUrl;

        return $this;
    }

    /**
     * Gets ImageMediaIds
     *
     * @return string[]|null
     */
    public function getImageMediaIds()
    {
        if (!isset($this->container['ImageMediaIds']) || is_null($this->container['ImageMediaIds'])) {
            return null;
        }
        return $this->container['ImageMediaIds'];
    }

    /**
     * Sets ImageMediaIds
     *
     * @param string[]|null $ImageMediaIds ImageMediaIds
     *
     * @return self
     */
    public function setImageMediaIds($ImageMediaIds)
    {
        if (is_null($ImageMediaIds)) {
            array_push($this->openAPINullablesSetToNull, 'ImageMediaIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ImageMediaIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ImageMediaIds'] = $ImageMediaIds;

        return $this;
    }

    /**
     * Gets TrackingUrlTemplate
     *
     * @return string|null
     */
    public function getTrackingUrlTemplate()
    {
        if (!isset($this->container['TrackingUrlTemplate']) || is_null($this->container['TrackingUrlTemplate'])) {
            return null;
        }
        return $this->container['TrackingUrlTemplate'];
    }

    /**
     * Sets TrackingUrlTemplate
     *
     * @param string|null $TrackingUrlTemplate TrackingUrlTemplate
     *
     * @return self
     */
    public function setTrackingUrlTemplate($TrackingUrlTemplate)
    {
        if (is_null($TrackingUrlTemplate)) {
            array_push($this->openAPINullablesSetToNull, 'TrackingUrlTemplate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TrackingUrlTemplate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TrackingUrlTemplate'] = $TrackingUrlTemplate;

        return $this;
    }

    /**
     * Gets FinalUrlSuffix
     *
     * @return string|null
     */
    public function getFinalUrlSuffix()
    {
        if (!isset($this->container['FinalUrlSuffix']) || is_null($this->container['FinalUrlSuffix'])) {
            return null;
        }
        return $this->container['FinalUrlSuffix'];
    }

    /**
     * Sets FinalUrlSuffix
     *
     * @param string|null $FinalUrlSuffix FinalUrlSuffix
     *
     * @return self
     */
    public function setFinalUrlSuffix($FinalUrlSuffix)
    {
        if (is_null($FinalUrlSuffix)) {
            array_push($this->openAPINullablesSetToNull, 'FinalUrlSuffix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FinalUrlSuffix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FinalUrlSuffix'] = $FinalUrlSuffix;

        return $this;
    }

    /**
     * Gets UrlCustomParameters
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters|null
     */
    public function getUrlCustomParameters()
    {
        if (!isset($this->container['UrlCustomParameters']) || is_null($this->container['UrlCustomParameters'])) {
            return null;
        }
        return $this->container['UrlCustomParameters'];
    }

    /**
     * Sets UrlCustomParameters
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters|null $UrlCustomParameters UrlCustomParameters
     *
     * @return self
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
        if (is_null($UrlCustomParameters)) {
            array_push($this->openAPINullablesSetToNull, 'UrlCustomParameters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UrlCustomParameters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UrlCustomParameters'] = $UrlCustomParameters;

        return $this;
    }

    /**
     * Gets FinalUrls
     *
     * @return string[]|null
     */
    public function getFinalUrls()
    {
        if (!isset($this->container['FinalUrls']) || is_null($this->container['FinalUrls'])) {
            return null;
        }
        return $this->container['FinalUrls'];
    }

    /**
     * Sets FinalUrls
     *
     * @param string[]|null $FinalUrls FinalUrls
     *
     * @return self
     */
    public function setFinalUrls($FinalUrls)
    {
        if (is_null($FinalUrls)) {
            array_push($this->openAPINullablesSetToNull, 'FinalUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FinalUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FinalUrls'] = $FinalUrls;

        return $this;
    }

    /**
     * Gets FinalMobileUrls
     *
     * @return string[]|null
     */
    public function getFinalMobileUrls()
    {
        if (!isset($this->container['FinalMobileUrls']) || is_null($this->container['FinalMobileUrls'])) {
            return null;
        }
        return $this->container['FinalMobileUrls'];
    }

    /**
     * Sets FinalMobileUrls
     *
     * @param string[]|null $FinalMobileUrls FinalMobileUrls
     *
     * @return self
     */
    public function setFinalMobileUrls($FinalMobileUrls)
    {
        if (is_null($FinalMobileUrls)) {
            array_push($this->openAPINullablesSetToNull, 'FinalMobileUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FinalMobileUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FinalMobileUrls'] = $FinalMobileUrls;

        return $this;
    }

    /**
     * Gets FinalAppUrls
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AppUrl[]|null
     */
    public function getFinalAppUrls()
    {
        if (!isset($this->container['FinalAppUrls']) || is_null($this->container['FinalAppUrls'])) {
            return null;
        }
        return $this->container['FinalAppUrls'];
    }

    /**
     * Sets FinalAppUrls
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AppUrl[]|null $FinalAppUrls FinalAppUrls
     *
     * @return self
     */
    public function setFinalAppUrls($FinalAppUrls)
    {
        if (is_null($FinalAppUrls)) {
            array_push($this->openAPINullablesSetToNull, 'FinalAppUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FinalAppUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FinalAppUrls'] = $FinalAppUrls;

        return $this;
    }

    /**
     * Gets Images
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]|null
     */
    public function getImages()
    {
        if (!isset($this->container['Images']) || is_null($this->container['Images'])) {
            return null;
        }
        return $this->container['Images'];
    }

    /**
     * Sets Images
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]|null $Images Images
     *
     * @return self
     */
    public function setImages($Images)
    {
        if (is_null($Images)) {
            array_push($this->openAPINullablesSetToNull, 'Images');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Images', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Images'] = $Images;

        return $this;
    }

    /**
     * Gets DisplayText
     *
     * @return string|null
     */
    public function getDisplayText()
    {
        if (!isset($this->container['DisplayText']) || is_null($this->container['DisplayText'])) {
            return null;
        }
        return $this->container['DisplayText'];
    }

    /**
     * Sets DisplayText
     *
     * @param string|null $DisplayText DisplayText
     *
     * @return self
     */
    public function setDisplayText($DisplayText)
    {
        if (is_null($DisplayText)) {
            array_push($this->openAPINullablesSetToNull, 'DisplayText');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DisplayText', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DisplayText'] = $DisplayText;

        return $this;
    }

    /**
     * Gets Layouts
     *
     * @return string[]|null
     */
    public function getLayouts()
    {
        if (!isset($this->container['Layouts']) || is_null($this->container['Layouts'])) {
            return null;
        }
        return $this->container['Layouts'];
    }

    /**
     * Sets Layouts
     *
     * @param string[]|null $Layouts Layouts
     *
     * @return self
     */
    public function setLayouts($Layouts)
    {
        if (is_null($Layouts)) {
            array_push($this->openAPINullablesSetToNull, 'Layouts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Layouts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Layouts'] = $Layouts;

        return $this;
    }

    /**
     * Gets SourceType
     *
     * @return string|null
     */
    public function getSourceType()
    {
        if (!isset($this->container['SourceType']) || is_null($this->container['SourceType'])) {
            return null;
        }
        return $this->container['SourceType'];
    }

    /**
     * Sets SourceType
     *
     * @param string|null $SourceType SourceType
     *
     * @return self
     */
    public function setSourceType($SourceType)
    {
        if (is_null($SourceType)) {
            array_push($this->openAPINullablesSetToNull, 'SourceType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SourceType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SourceType'] = $SourceType;

        return $this;
    }

    /**
     * Gets AppPlatform
     *
     * @return string|null
     */
    public function getAppPlatform()
    {
        if (!isset($this->container['AppPlatform']) || is_null($this->container['AppPlatform'])) {
            return null;
        }
        return $this->container['AppPlatform'];
    }

    /**
     * Sets AppPlatform
     *
     * @param string|null $AppPlatform AppPlatform
     *
     * @return self
     */
    public function setAppPlatform($AppPlatform)
    {
        if (is_null($AppPlatform)) {
            array_push($this->openAPINullablesSetToNull, 'AppPlatform');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AppPlatform', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AppPlatform'] = $AppPlatform;

        return $this;
    }

    /**
     * Gets AppStoreId
     *
     * @return string|null
     */
    public function getAppStoreId()
    {
        if (!isset($this->container['AppStoreId']) || is_null($this->container['AppStoreId'])) {
            return null;
        }
        return $this->container['AppStoreId'];
    }

    /**
     * Sets AppStoreId
     *
     * @param string|null $AppStoreId AppStoreId
     *
     * @return self
     */
    public function setAppStoreId($AppStoreId)
    {
        if (is_null($AppStoreId)) {
            array_push($this->openAPINullablesSetToNull, 'AppStoreId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AppStoreId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AppStoreId'] = $AppStoreId;

        return $this;
    }

    /**
     * Gets Name
     *
     * @return string|null
     */
    public function getName()
    {
        if (!isset($this->container['Name']) || is_null($this->container['Name'])) {
            return null;
        }
        return $this->container['Name'];
    }

    /**
     * Sets Name
     *
     * @param string|null $Name Name
     *
     * @return self
     */
    public function setName($Name)
    {
        if (is_null($Name)) {
            array_push($this->openAPINullablesSetToNull, 'Name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Name'] = $Name;

        return $this;
    }

    /**
     * Gets SourceUrl
     *
     * @return string|null
     */
    public function getSourceUrl()
    {
        if (!isset($this->container['SourceUrl']) || is_null($this->container['SourceUrl'])) {
            return null;
        }
        return $this->container['SourceUrl'];
    }

    /**
     * Sets SourceUrl
     *
     * @param string|null $SourceUrl SourceUrl
     *
     * @return self
     */
    public function setSourceUrl($SourceUrl)
    {
        if (is_null($SourceUrl)) {
            array_push($this->openAPINullablesSetToNull, 'SourceUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SourceUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SourceUrl'] = $SourceUrl;

        return $this;
    }

    /**
     * Gets Filter
     *
     * @return string|null
     */
    public function getFilter()
    {
        if (!isset($this->container['Filter']) || is_null($this->container['Filter'])) {
            return null;
        }
        return $this->container['Filter'];
    }

    /**
     * Sets Filter
     *
     * @param string|null $Filter Filter
     *
     * @return self
     */
    public function setFilter($Filter)
    {
        if (is_null($Filter)) {
            array_push($this->openAPINullablesSetToNull, 'Filter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Filter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Filter'] = $Filter;

        return $this;
    }

    /**
     * Gets Priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        if (!isset($this->container['Priority']) || is_null($this->container['Priority'])) {
            return null;
        }
        return $this->container['Priority'];
    }

    /**
     * Sets Priority
     *
     * @param int|null $Priority Priority
     *
     * @return self
     */
    public function setPriority($Priority)
    {
        if (is_null($Priority)) {
            throw new \InvalidArgumentException('non-nullable Priority cannot be null');
        }
        $this->container['Priority'] = $Priority;

        return $this;
    }

    /**
     * Gets IsExact
     *
     * @return bool|null
     */
    public function getIsExact()
    {
        if (!isset($this->container['IsExact']) || is_null($this->container['IsExact'])) {
            return null;
        }
        return $this->container['IsExact'];
    }

    /**
     * Sets IsExact
     *
     * @param bool|null $IsExact IsExact
     *
     * @return self
     */
    public function setIsExact($IsExact)
    {
        if (is_null($IsExact)) {
            throw new \InvalidArgumentException('non-nullable IsExact cannot be null');
        }
        $this->container['IsExact'] = $IsExact;

        return $this;
    }

    /**
     * Gets Text
     *
     * @return string|null
     */
    public function getText()
    {
        if (!isset($this->container['Text']) || is_null($this->container['Text'])) {
            return null;
        }
        return $this->container['Text'];
    }

    /**
     * Sets Text
     *
     * @param string|null $Text Text
     *
     * @return self
     */
    public function setText($Text)
    {
        if (is_null($Text)) {
            array_push($this->openAPINullablesSetToNull, 'Text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Text'] = $Text;

        return $this;
    }

    /**
     * Gets Source
     *
     * @return string|null
     */
    public function getSource()
    {
        if (!isset($this->container['Source']) || is_null($this->container['Source'])) {
            return null;
        }
        return $this->container['Source'];
    }

    /**
     * Sets Source
     *
     * @param string|null $Source Source
     *
     * @return self
     */
    public function setSource($Source)
    {
        if (is_null($Source)) {
            array_push($this->openAPINullablesSetToNull, 'Source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Source'] = $Source;

        return $this;
    }

    /**
     * Gets Url
     *
     * @return string|null
     */
    public function getUrl()
    {
        if (!isset($this->container['Url']) || is_null($this->container['Url'])) {
            return null;
        }
        return $this->container['Url'];
    }

    /**
     * Sets Url
     *
     * @param string|null $Url Url
     *
     * @return self
     */
    public function setUrl($Url)
    {
        if (is_null($Url)) {
            array_push($this->openAPINullablesSetToNull, 'Url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Url'] = $Url;

        return $this;
    }

    /**
     * Gets NameUrl
     *
     * @return string|null
     */
    public function getNameUrl()
    {
        if (!isset($this->container['NameUrl']) || is_null($this->container['NameUrl'])) {
            return null;
        }
        return $this->container['NameUrl'];
    }

    /**
     * Sets NameUrl
     *
     * @param string|null $NameUrl NameUrl
     *
     * @return self
     */
    public function setNameUrl($NameUrl)
    {
        if (is_null($NameUrl)) {
            array_push($this->openAPINullablesSetToNull, 'NameUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NameUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NameUrl'] = $NameUrl;

        return $this;
    }

    /**
     * Gets Description1
     *
     * @return string|null
     */
    public function getDescription1()
    {
        if (!isset($this->container['Description1']) || is_null($this->container['Description1'])) {
            return null;
        }
        return $this->container['Description1'];
    }

    /**
     * Sets Description1
     *
     * @param string|null $Description1 Description1
     *
     * @return self
     */
    public function setDescription1($Description1)
    {
        if (is_null($Description1)) {
            array_push($this->openAPINullablesSetToNull, 'Description1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Description1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Description1'] = $Description1;

        return $this;
    }

    /**
     * Gets Description2
     *
     * @return string|null
     */
    public function getDescription2()
    {
        if (!isset($this->container['Description2']) || is_null($this->container['Description2'])) {
            return null;
        }
        return $this->container['Description2'];
    }

    /**
     * Sets Description2
     *
     * @param string|null $Description2 Description2
     *
     * @return self
     */
    public function setDescription2($Description2)
    {
        if (is_null($Description2)) {
            array_push($this->openAPINullablesSetToNull, 'Description2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Description2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Description2'] = $Description2;

        return $this;
    }

    /**
     * Gets ActionType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ActionAdExtensionActionType|mixed|null
     */
    public function getActionType()
    {
        if (!isset($this->container['ActionType']) || is_null($this->container['ActionType'])) {
            return null;
        }
        if ((is_object($this->container['ActionType']) || is_string($this->container['ActionType'])) && method_exists($this->container['ActionType'], 'getValue')) {
            return $this->container['ActionType']->getValue();
        }
        return $this->container['ActionType'];
    }

    /**
     * Sets ActionType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ActionAdExtensionActionType|mixed|null $ActionType ActionType
     *
     * @return self
     */
    public function setActionType($ActionType)
    {
        if (is_null($ActionType)) {
            throw new \InvalidArgumentException('non-nullable ActionType cannot be null');
        }
        if (!$ActionType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ActionAdExtensionActionType) {
            $ActionType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ActionAdExtensionActionType($ActionType);
        }
        $this->container['ActionType'] = $ActionType;

        return $this;
    }

    /**
     * Gets Language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        if (!isset($this->container['Language']) || is_null($this->container['Language'])) {
            return null;
        }
        return $this->container['Language'];
    }

    /**
     * Sets Language
     *
     * @param string|null $Language Language
     *
     * @return self
     */
    public function setLanguage($Language)
    {
        if (is_null($Language)) {
            array_push($this->openAPINullablesSetToNull, 'Language');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Language', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Language'] = $Language;

        return $this;
    }

    /**
     * Gets Header
     *
     * @return string|null
     */
    public function getHeader()
    {
        if (!isset($this->container['Header']) || is_null($this->container['Header'])) {
            return null;
        }
        return $this->container['Header'];
    }

    /**
     * Sets Header
     *
     * @param string|null $Header Header
     *
     * @return self
     */
    public function setHeader($Header)
    {
        if (is_null($Header)) {
            array_push($this->openAPINullablesSetToNull, 'Header');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Header', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Header'] = $Header;

        return $this;
    }

    /**
     * Gets Values
     *
     * @return string[]|null
     */
    public function getValues()
    {
        if (!isset($this->container['Values']) || is_null($this->container['Values'])) {
            return null;
        }
        return $this->container['Values'];
    }

    /**
     * Sets Values
     *
     * @param string[]|null $Values Values
     *
     * @return self
     */
    public function setValues($Values)
    {
        if (is_null($Values)) {
            array_push($this->openAPINullablesSetToNull, 'Values');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Values', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Values'] = $Values;

        return $this;
    }

    /**
     * Gets PriceExtensionType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceExtensionType|mixed|null
     */
    public function getPriceExtensionType()
    {
        if (!isset($this->container['PriceExtensionType']) || is_null($this->container['PriceExtensionType'])) {
            return null;
        }
        if ((is_object($this->container['PriceExtensionType']) || is_string($this->container['PriceExtensionType'])) && method_exists($this->container['PriceExtensionType'], 'getValue')) {
            return $this->container['PriceExtensionType']->getValue();
        }
        return $this->container['PriceExtensionType'];
    }

    /**
     * Sets PriceExtensionType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceExtensionType|mixed|null $PriceExtensionType PriceExtensionType
     *
     * @return self
     */
    public function setPriceExtensionType($PriceExtensionType)
    {
        if (is_null($PriceExtensionType)) {
            throw new \InvalidArgumentException('non-nullable PriceExtensionType cannot be null');
        }
        if (!$PriceExtensionType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceExtensionType) {
            $PriceExtensionType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceExtensionType($PriceExtensionType);
        }
        $this->container['PriceExtensionType'] = $PriceExtensionType;

        return $this;
    }

    /**
     * Gets TableRows
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceTableRow[]|null
     */
    public function getTableRows()
    {
        if (!isset($this->container['TableRows']) || is_null($this->container['TableRows'])) {
            return null;
        }
        return $this->container['TableRows'];
    }

    /**
     * Sets TableRows
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceTableRow[]|null $TableRows TableRows
     *
     * @return self
     */
    public function setTableRows($TableRows)
    {
        if (is_null($TableRows)) {
            array_push($this->openAPINullablesSetToNull, 'TableRows');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TableRows', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TableRows'] = $TableRows;

        return $this;
    }

    /**
     * Gets PromotionItem
     *
     * @return string|null
     */
    public function getPromotionItem()
    {
        if (!isset($this->container['PromotionItem']) || is_null($this->container['PromotionItem'])) {
            return null;
        }
        return $this->container['PromotionItem'];
    }

    /**
     * Sets PromotionItem
     *
     * @param string|null $PromotionItem PromotionItem
     *
     * @return self
     */
    public function setPromotionItem($PromotionItem)
    {
        if (is_null($PromotionItem)) {
            array_push($this->openAPINullablesSetToNull, 'PromotionItem');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PromotionItem', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PromotionItem'] = $PromotionItem;

        return $this;
    }

    /**
     * Gets DiscountModifier
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionDiscountModifier|mixed|null
     */
    public function getDiscountModifier()
    {
        if (!isset($this->container['DiscountModifier']) || is_null($this->container['DiscountModifier'])) {
            return null;
        }
        if ((is_object($this->container['DiscountModifier']) || is_string($this->container['DiscountModifier'])) && method_exists($this->container['DiscountModifier'], 'getValue')) {
            return $this->container['DiscountModifier']->getValue();
        }
        return $this->container['DiscountModifier'];
    }

    /**
     * Sets DiscountModifier
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionDiscountModifier|mixed|null $DiscountModifier DiscountModifier
     *
     * @return self
     */
    public function setDiscountModifier($DiscountModifier)
    {
        if (is_null($DiscountModifier)) {
            throw new \InvalidArgumentException('non-nullable DiscountModifier cannot be null');
        }
        if (!$DiscountModifier instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionDiscountModifier) {
            $DiscountModifier = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionDiscountModifier($DiscountModifier);
        }
        $this->container['DiscountModifier'] = $DiscountModifier;

        return $this;
    }

    /**
     * Gets PercentOff
     *
     * @return float|null
     */
    public function getPercentOff()
    {
        if (!isset($this->container['PercentOff']) || is_null($this->container['PercentOff'])) {
            return null;
        }
        return $this->container['PercentOff'];
    }

    /**
     * Sets PercentOff
     *
     * @param float|null $PercentOff PercentOff
     *
     * @return self
     */
    public function setPercentOff($PercentOff)
    {
        if (is_null($PercentOff)) {
            array_push($this->openAPINullablesSetToNull, 'PercentOff');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PercentOff', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PercentOff'] = $PercentOff;

        return $this;
    }

    /**
     * Gets MoneyAmountOff
     *
     * @return float|null
     */
    public function getMoneyAmountOff()
    {
        if (!isset($this->container['MoneyAmountOff']) || is_null($this->container['MoneyAmountOff'])) {
            return null;
        }
        return $this->container['MoneyAmountOff'];
    }

    /**
     * Sets MoneyAmountOff
     *
     * @param float|null $MoneyAmountOff MoneyAmountOff
     *
     * @return self
     */
    public function setMoneyAmountOff($MoneyAmountOff)
    {
        if (is_null($MoneyAmountOff)) {
            array_push($this->openAPINullablesSetToNull, 'MoneyAmountOff');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MoneyAmountOff', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MoneyAmountOff'] = $MoneyAmountOff;

        return $this;
    }

    /**
     * Gets PromotionCode
     *
     * @return string|null
     */
    public function getPromotionCode()
    {
        if (!isset($this->container['PromotionCode']) || is_null($this->container['PromotionCode'])) {
            return null;
        }
        return $this->container['PromotionCode'];
    }

    /**
     * Sets PromotionCode
     *
     * @param string|null $PromotionCode PromotionCode
     *
     * @return self
     */
    public function setPromotionCode($PromotionCode)
    {
        if (is_null($PromotionCode)) {
            array_push($this->openAPINullablesSetToNull, 'PromotionCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PromotionCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PromotionCode'] = $PromotionCode;

        return $this;
    }

    /**
     * Gets OrdersOverAmount
     *
     * @return float|null
     */
    public function getOrdersOverAmount()
    {
        if (!isset($this->container['OrdersOverAmount']) || is_null($this->container['OrdersOverAmount'])) {
            return null;
        }
        return $this->container['OrdersOverAmount'];
    }

    /**
     * Sets OrdersOverAmount
     *
     * @param float|null $OrdersOverAmount OrdersOverAmount
     *
     * @return self
     */
    public function setOrdersOverAmount($OrdersOverAmount)
    {
        if (is_null($OrdersOverAmount)) {
            array_push($this->openAPINullablesSetToNull, 'OrdersOverAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('OrdersOverAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['OrdersOverAmount'] = $OrdersOverAmount;

        return $this;
    }

    /**
     * Gets PromotionStartDate
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null
     */
    public function getPromotionStartDate()
    {
        if (!isset($this->container['PromotionStartDate']) || is_null($this->container['PromotionStartDate'])) {
            return null;
        }
        return $this->container['PromotionStartDate'];
    }

    /**
     * Sets PromotionStartDate
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null $PromotionStartDate PromotionStartDate
     *
     * @return self
     */
    public function setPromotionStartDate($PromotionStartDate)
    {
        if (is_null($PromotionStartDate)) {
            array_push($this->openAPINullablesSetToNull, 'PromotionStartDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PromotionStartDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PromotionStartDate'] = $PromotionStartDate;

        return $this;
    }

    /**
     * Gets PromotionEndDate
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null
     */
    public function getPromotionEndDate()
    {
        if (!isset($this->container['PromotionEndDate']) || is_null($this->container['PromotionEndDate'])) {
            return null;
        }
        return $this->container['PromotionEndDate'];
    }

    /**
     * Sets PromotionEndDate
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null $PromotionEndDate PromotionEndDate
     *
     * @return self
     */
    public function setPromotionEndDate($PromotionEndDate)
    {
        if (is_null($PromotionEndDate)) {
            array_push($this->openAPINullablesSetToNull, 'PromotionEndDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PromotionEndDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PromotionEndDate'] = $PromotionEndDate;

        return $this;
    }

    /**
     * Gets PromotionOccasion
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionOccasion|mixed|null
     */
    public function getPromotionOccasion()
    {
        if (!isset($this->container['PromotionOccasion']) || is_null($this->container['PromotionOccasion'])) {
            return null;
        }
        if ((is_object($this->container['PromotionOccasion']) || is_string($this->container['PromotionOccasion'])) && method_exists($this->container['PromotionOccasion'], 'getValue')) {
            return $this->container['PromotionOccasion']->getValue();
        }
        return $this->container['PromotionOccasion'];
    }

    /**
     * Sets PromotionOccasion
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionOccasion|mixed|null $PromotionOccasion PromotionOccasion
     *
     * @return self
     */
    public function setPromotionOccasion($PromotionOccasion)
    {
        if (is_null($PromotionOccasion)) {
            throw new \InvalidArgumentException('non-nullable PromotionOccasion cannot be null');
        }
        if (!$PromotionOccasion instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionOccasion) {
            $PromotionOccasion = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionOccasion($PromotionOccasion);
        }
        $this->container['PromotionOccasion'] = $PromotionOccasion;

        return $this;
    }

    /**
     * Gets CurrencyCode
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        if (!isset($this->container['CurrencyCode']) || is_null($this->container['CurrencyCode'])) {
            return null;
        }
        return $this->container['CurrencyCode'];
    }

    /**
     * Sets CurrencyCode
     *
     * @param string|null $CurrencyCode CurrencyCode
     *
     * @return self
     */
    public function setCurrencyCode($CurrencyCode)
    {
        if (is_null($CurrencyCode)) {
            array_push($this->openAPINullablesSetToNull, 'CurrencyCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CurrencyCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CurrencyCode'] = $CurrencyCode;

        return $this;
    }

    /**
     * Gets AdExtensionHeaderType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionHeaderType|mixed|null
     */
    public function getAdExtensionHeaderType()
    {
        if (!isset($this->container['AdExtensionHeaderType']) || is_null($this->container['AdExtensionHeaderType'])) {
            return null;
        }
        if ((is_object($this->container['AdExtensionHeaderType']) || is_string($this->container['AdExtensionHeaderType'])) && method_exists($this->container['AdExtensionHeaderType'], 'getValue')) {
            return $this->container['AdExtensionHeaderType']->getValue();
        }
        return $this->container['AdExtensionHeaderType'];
    }

    /**
     * Sets AdExtensionHeaderType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionHeaderType|mixed|null $AdExtensionHeaderType AdExtensionHeaderType
     *
     * @return self
     */
    public function setAdExtensionHeaderType($AdExtensionHeaderType)
    {
        if (is_null($AdExtensionHeaderType)) {
            throw new \InvalidArgumentException('non-nullable AdExtensionHeaderType cannot be null');
        }
        if (!$AdExtensionHeaderType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionHeaderType) {
            $AdExtensionHeaderType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionHeaderType($AdExtensionHeaderType);
        }
        $this->container['AdExtensionHeaderType'] = $AdExtensionHeaderType;

        return $this;
    }

    /**
     * Gets Texts
     *
     * @return string[]|null
     */
    public function getTexts()
    {
        if (!isset($this->container['Texts']) || is_null($this->container['Texts'])) {
            return null;
        }
        return $this->container['Texts'];
    }

    /**
     * Sets Texts
     *
     * @param string[]|null $Texts Texts
     *
     * @return self
     */
    public function setTexts($Texts)
    {
        if (is_null($Texts)) {
            array_push($this->openAPINullablesSetToNull, 'Texts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Texts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Texts'] = $Texts;

        return $this;
    }

    /**
     * Gets FlyerName
     *
     * @return string|null
     */
    public function getFlyerName()
    {
        if (!isset($this->container['FlyerName']) || is_null($this->container['FlyerName'])) {
            return null;
        }
        return $this->container['FlyerName'];
    }

    /**
     * Sets FlyerName
     *
     * @param string|null $FlyerName FlyerName
     *
     * @return self
     */
    public function setFlyerName($FlyerName)
    {
        if (is_null($FlyerName)) {
            array_push($this->openAPINullablesSetToNull, 'FlyerName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FlyerName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FlyerName'] = $FlyerName;

        return $this;
    }

    /**
     * Gets StoreId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        if (!isset($this->container['StoreId']) || is_null($this->container['StoreId'])) {
            return null;
        }
        return $this->container['StoreId'];
    }

    /**
     * Sets StoreId
     *
     * @param string|null $StoreId StoreId
     *
     * @return self
     */
    public function setStoreId($StoreId)
    {
        if (is_null($StoreId)) {
            array_push($this->openAPINullablesSetToNull, 'StoreId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StoreId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StoreId'] = $StoreId;

        return $this;
    }

    /**
     * Gets ImageMediaUrls
     *
     * @return string[]|null
     */
    public function getImageMediaUrls()
    {
        if (!isset($this->container['ImageMediaUrls']) || is_null($this->container['ImageMediaUrls'])) {
            return null;
        }
        return $this->container['ImageMediaUrls'];
    }

    /**
     * Sets ImageMediaUrls
     *
     * @param string[]|null $ImageMediaUrls ImageMediaUrls
     *
     * @return self
     */
    public function setImageMediaUrls($ImageMediaUrls)
    {
        if (is_null($ImageMediaUrls)) {
            array_push($this->openAPINullablesSetToNull, 'ImageMediaUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ImageMediaUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ImageMediaUrls'] = $ImageMediaUrls;

        return $this;
    }

    /**
     * Gets ActionText
     *
     * @return string|null
     */
    public function getActionText()
    {
        if (!isset($this->container['ActionText']) || is_null($this->container['ActionText'])) {
            return null;
        }
        return $this->container['ActionText'];
    }

    /**
     * Sets ActionText
     *
     * @param string|null $ActionText ActionText
     *
     * @return self
     */
    public function setActionText($ActionText)
    {
        if (is_null($ActionText)) {
            array_push($this->openAPINullablesSetToNull, 'ActionText');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ActionText', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ActionText'] = $ActionText;

        return $this;
    }

    /**
     * Gets VideoId
     *
     * @return string|null
     */
    public function getVideoId()
    {
        if (!isset($this->container['VideoId']) || is_null($this->container['VideoId'])) {
            return null;
        }
        return $this->container['VideoId'];
    }

    /**
     * Sets VideoId
     *
     * @param string|null $VideoId VideoId
     *
     * @return self
     */
    public function setVideoId($VideoId)
    {
        if (is_null($VideoId)) {
            array_push($this->openAPINullablesSetToNull, 'VideoId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('VideoId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['VideoId'] = $VideoId;

        return $this;
    }

    /**
     * Gets ThumbnailId
     *
     * @return string|null
     */
    public function getThumbnailId()
    {
        if (!isset($this->container['ThumbnailId']) || is_null($this->container['ThumbnailId'])) {
            return null;
        }
        return $this->container['ThumbnailId'];
    }

    /**
     * Sets ThumbnailId
     *
     * @param string|null $ThumbnailId ThumbnailId
     *
     * @return self
     */
    public function setThumbnailId($ThumbnailId)
    {
        if (is_null($ThumbnailId)) {
            array_push($this->openAPINullablesSetToNull, 'ThumbnailId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ThumbnailId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ThumbnailId'] = $ThumbnailId;

        return $this;
    }

    /**
     * Gets ThumbnailUrl
     *
     * @return string|null
     */
    public function getThumbnailUrl()
    {
        if (!isset($this->container['ThumbnailUrl']) || is_null($this->container['ThumbnailUrl'])) {
            return null;
        }
        return $this->container['ThumbnailUrl'];
    }

    /**
     * Sets ThumbnailUrl
     *
     * @param string|null $ThumbnailUrl ThumbnailUrl
     *
     * @return self
     */
    public function setThumbnailUrl($ThumbnailUrl)
    {
        if (is_null($ThumbnailUrl)) {
            array_push($this->openAPINullablesSetToNull, 'ThumbnailUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ThumbnailUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ThumbnailUrl'] = $ThumbnailUrl;

        return $this;
    }

    /**
     * Gets Title
     *
     * @return string|null
     */
    public function getTitle()
    {
        if (!isset($this->container['Title']) || is_null($this->container['Title'])) {
            return null;
        }
        return $this->container['Title'];
    }

    /**
     * Sets Title
     *
     * @param string|null $Title Title
     *
     * @return self
     */
    public function setTitle($Title)
    {
        if (is_null($Title)) {
            array_push($this->openAPINullablesSetToNull, 'Title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Title'] = $Title;

        return $this;
    }

    /**
     * Gets PopupText
     *
     * @return string|null
     */
    public function getPopupText()
    {
        if (!isset($this->container['PopupText']) || is_null($this->container['PopupText'])) {
            return null;
        }
        return $this->container['PopupText'];
    }

    /**
     * Sets PopupText
     *
     * @param string|null $PopupText PopupText
     *
     * @return self
     */
    public function setPopupText($PopupText)
    {
        if (is_null($PopupText)) {
            array_push($this->openAPINullablesSetToNull, 'PopupText');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PopupText', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PopupText'] = $PopupText;

        return $this;
    }

    /**
     * Gets LineText
     *
     * @return string|null
     */
    public function getLineText()
    {
        if (!isset($this->container['LineText']) || is_null($this->container['LineText'])) {
            return null;
        }
        return $this->container['LineText'];
    }

    /**
     * Sets LineText
     *
     * @param string|null $LineText LineText
     *
     * @return self
     */
    public function setLineText($LineText)
    {
        if (is_null($LineText)) {
            array_push($this->openAPINullablesSetToNull, 'LineText');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LineText', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LineText'] = $LineText;

        return $this;
    }

    /**
     * Gets DisclaimerLayout
     *
     * @return string|null
     */
    public function getDisclaimerLayout()
    {
        if (!isset($this->container['DisclaimerLayout']) || is_null($this->container['DisclaimerLayout'])) {
            return null;
        }
        return $this->container['DisclaimerLayout'];
    }

    /**
     * Sets DisclaimerLayout
     *
     * @param string|null $DisclaimerLayout DisclaimerLayout
     *
     * @return self
     */
    public function setDisclaimerLayout($DisclaimerLayout)
    {
        if (is_null($DisclaimerLayout)) {
            array_push($this->openAPINullablesSetToNull, 'DisclaimerLayout');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DisclaimerLayout', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DisclaimerLayout'] = $DisclaimerLayout;

        return $this;
    }

    /**
     * Gets BusinessName
     *
     * @return string|null
     */
    public function getBusinessName()
    {
        if (!isset($this->container['BusinessName']) || is_null($this->container['BusinessName'])) {
            return null;
        }
        return $this->container['BusinessName'];
    }

    /**
     * Sets BusinessName
     *
     * @param string|null $BusinessName BusinessName
     *
     * @return self
     */
    public function setBusinessName($BusinessName)
    {
        if (is_null($BusinessName)) {
            array_push($this->openAPINullablesSetToNull, 'BusinessName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BusinessName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BusinessName'] = $BusinessName;

        return $this;
    }

    /**
     * Gets BusinessLogo
     *
     * @return string|null
     */
    public function getBusinessLogo()
    {
        if (!isset($this->container['BusinessLogo']) || is_null($this->container['BusinessLogo'])) {
            return null;
        }
        return $this->container['BusinessLogo'];
    }

    /**
     * Sets BusinessLogo
     *
     * @param string|null $BusinessLogo BusinessLogo
     *
     * @return self
     */
    public function setBusinessLogo($BusinessLogo)
    {
        if (is_null($BusinessLogo)) {
            array_push($this->openAPINullablesSetToNull, 'BusinessLogo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BusinessLogo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BusinessLogo'] = $BusinessLogo;

        return $this;
    }

    /**
     * Gets BusinessLogoUrl
     *
     * @return string|null
     */
    public function getBusinessLogoUrl()
    {
        if (!isset($this->container['BusinessLogoUrl']) || is_null($this->container['BusinessLogoUrl'])) {
            return null;
        }
        return $this->container['BusinessLogoUrl'];
    }

    /**
     * Sets BusinessLogoUrl
     *
     * @param string|null $BusinessLogoUrl BusinessLogoUrl
     *
     * @return self
     */
    public function setBusinessLogoUrl($BusinessLogoUrl)
    {
        if (is_null($BusinessLogoUrl)) {
            array_push($this->openAPINullablesSetToNull, 'BusinessLogoUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BusinessLogoUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BusinessLogoUrl'] = $BusinessLogoUrl;

        return $this;
    }

    /**
     * Gets DomainName
     *
     * @return string|null
     */
    public function getDomainName()
    {
        if (!isset($this->container['DomainName']) || is_null($this->container['DomainName'])) {
            return null;
        }
        return $this->container['DomainName'];
    }

    /**
     * Sets DomainName
     *
     * @param string|null $DomainName DomainName
     *
     * @return self
     */
    public function setDomainName($DomainName)
    {
        if (is_null($DomainName)) {
            array_push($this->openAPINullablesSetToNull, 'DomainName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DomainName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DomainName'] = $DomainName;

        return $this;
    }

    /**
     * Gets CallToAction
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormCallToAction|mixed|null
     */
    public function getCallToAction()
    {
        if (!isset($this->container['CallToAction']) || is_null($this->container['CallToAction'])) {
            return null;
        }
        if ((is_object($this->container['CallToAction']) || is_string($this->container['CallToAction'])) && method_exists($this->container['CallToAction'], 'getValue')) {
            return $this->container['CallToAction']->getValue();
        }
        return $this->container['CallToAction'];
    }

    /**
     * Sets CallToAction
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormCallToAction|mixed|null $CallToAction CallToAction
     *
     * @return self
     */
    public function setCallToAction($CallToAction)
    {
        if (is_null($CallToAction)) {
            throw new \InvalidArgumentException('non-nullable CallToAction cannot be null');
        }
        if (!$CallToAction instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormCallToAction) {
            $CallToAction = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormCallToAction($CallToAction);
        }
        $this->container['CallToAction'] = $CallToAction;

        return $this;
    }

    /**
     * Gets ActionName
     *
     * @return string|null
     */
    public function getActionName()
    {
        if (!isset($this->container['ActionName']) || is_null($this->container['ActionName'])) {
            return null;
        }
        return $this->container['ActionName'];
    }

    /**
     * Sets ActionName
     *
     * @param string|null $ActionName ActionName
     *
     * @return self
     */
    public function setActionName($ActionName)
    {
        if (is_null($ActionName)) {
            array_push($this->openAPINullablesSetToNull, 'ActionName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ActionName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ActionName'] = $ActionName;

        return $this;
    }

    /**
     * Gets ActionDescription
     *
     * @return string|null
     */
    public function getActionDescription()
    {
        if (!isset($this->container['ActionDescription']) || is_null($this->container['ActionDescription'])) {
            return null;
        }
        return $this->container['ActionDescription'];
    }

    /**
     * Sets ActionDescription
     *
     * @param string|null $ActionDescription ActionDescription
     *
     * @return self
     */
    public function setActionDescription($ActionDescription)
    {
        if (is_null($ActionDescription)) {
            array_push($this->openAPINullablesSetToNull, 'ActionDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ActionDescription', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ActionDescription'] = $ActionDescription;

        return $this;
    }

    /**
     * Gets CorporateImage
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAsset|null
     */
    public function getCorporateImage()
    {
        if (!isset($this->container['CorporateImage']) || is_null($this->container['CorporateImage'])) {
            return null;
        }
        return $this->container['CorporateImage'];
    }

    /**
     * Sets CorporateImage
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAsset|null $CorporateImage CorporateImage
     *
     * @return self
     */
    public function setCorporateImage($CorporateImage)
    {
        if (is_null($CorporateImage)) {
            array_push($this->openAPINullablesSetToNull, 'CorporateImage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CorporateImage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CorporateImage'] = $CorporateImage;

        return $this;
    }

    /**
     * Gets CorporateImageInternalUrl
     *
     * @return string|null
     */
    public function getCorporateImageInternalUrl()
    {
        if (!isset($this->container['CorporateImageInternalUrl']) || is_null($this->container['CorporateImageInternalUrl'])) {
            return null;
        }
        return $this->container['CorporateImageInternalUrl'];
    }

    /**
     * Sets CorporateImageInternalUrl
     *
     * @param string|null $CorporateImageInternalUrl CorporateImageInternalUrl
     *
     * @return self
     */
    public function setCorporateImageInternalUrl($CorporateImageInternalUrl)
    {
        if (is_null($CorporateImageInternalUrl)) {
            array_push($this->openAPINullablesSetToNull, 'CorporateImageInternalUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CorporateImageInternalUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CorporateImageInternalUrl'] = $CorporateImageInternalUrl;

        return $this;
    }

    /**
     * Gets FormHeadline
     *
     * @return string|null
     */
    public function getFormHeadline()
    {
        if (!isset($this->container['FormHeadline']) || is_null($this->container['FormHeadline'])) {
            return null;
        }
        return $this->container['FormHeadline'];
    }

    /**
     * Sets FormHeadline
     *
     * @param string|null $FormHeadline FormHeadline
     *
     * @return self
     */
    public function setFormHeadline($FormHeadline)
    {
        if (is_null($FormHeadline)) {
            array_push($this->openAPINullablesSetToNull, 'FormHeadline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormHeadline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormHeadline'] = $FormHeadline;

        return $this;
    }

    /**
     * Gets FormBusinessName
     *
     * @return string|null
     */
    public function getFormBusinessName()
    {
        if (!isset($this->container['FormBusinessName']) || is_null($this->container['FormBusinessName'])) {
            return null;
        }
        return $this->container['FormBusinessName'];
    }

    /**
     * Sets FormBusinessName
     *
     * @param string|null $FormBusinessName FormBusinessName
     *
     * @return self
     */
    public function setFormBusinessName($FormBusinessName)
    {
        if (is_null($FormBusinessName)) {
            array_push($this->openAPINullablesSetToNull, 'FormBusinessName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormBusinessName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormBusinessName'] = $FormBusinessName;

        return $this;
    }

    /**
     * Gets FormDescription
     *
     * @return string|null
     */
    public function getFormDescription()
    {
        if (!isset($this->container['FormDescription']) || is_null($this->container['FormDescription'])) {
            return null;
        }
        return $this->container['FormDescription'];
    }

    /**
     * Sets FormDescription
     *
     * @param string|null $FormDescription FormDescription
     *
     * @return self
     */
    public function setFormDescription($FormDescription)
    {
        if (is_null($FormDescription)) {
            array_push($this->openAPINullablesSetToNull, 'FormDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormDescription', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormDescription'] = $FormDescription;

        return $this;
    }

    /**
     * Gets FormPolicyUrl
     *
     * @return string|null
     */
    public function getFormPolicyUrl()
    {
        if (!isset($this->container['FormPolicyUrl']) || is_null($this->container['FormPolicyUrl'])) {
            return null;
        }
        return $this->container['FormPolicyUrl'];
    }

    /**
     * Sets FormPolicyUrl
     *
     * @param string|null $FormPolicyUrl FormPolicyUrl
     *
     * @return self
     */
    public function setFormPolicyUrl($FormPolicyUrl)
    {
        if (is_null($FormPolicyUrl)) {
            array_push($this->openAPINullablesSetToNull, 'FormPolicyUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormPolicyUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormPolicyUrl'] = $FormPolicyUrl;

        return $this;
    }

    /**
     * Gets FormQuestions
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormQuestionDefinition[]|null
     */
    public function getFormQuestions()
    {
        if (!isset($this->container['FormQuestions']) || is_null($this->container['FormQuestions'])) {
            return null;
        }
        return $this->container['FormQuestions'];
    }

    /**
     * Sets FormQuestions
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormQuestionDefinition[]|null $FormQuestions FormQuestions
     *
     * @return self
     */
    public function setFormQuestions($FormQuestions)
    {
        if (is_null($FormQuestions)) {
            array_push($this->openAPINullablesSetToNull, 'FormQuestions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormQuestions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormQuestions'] = $FormQuestions;

        return $this;
    }

    /**
     * Gets ConfirmationMessage
     *
     * @return string|null
     */
    public function getConfirmationMessage()
    {
        if (!isset($this->container['ConfirmationMessage']) || is_null($this->container['ConfirmationMessage'])) {
            return null;
        }
        return $this->container['ConfirmationMessage'];
    }

    /**
     * Sets ConfirmationMessage
     *
     * @param string|null $ConfirmationMessage ConfirmationMessage
     *
     * @return self
     */
    public function setConfirmationMessage($ConfirmationMessage)
    {
        if (is_null($ConfirmationMessage)) {
            array_push($this->openAPINullablesSetToNull, 'ConfirmationMessage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ConfirmationMessage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ConfirmationMessage'] = $ConfirmationMessage;

        return $this;
    }

    /**
     * Gets ConfirmationDescription
     *
     * @return string|null
     */
    public function getConfirmationDescription()
    {
        if (!isset($this->container['ConfirmationDescription']) || is_null($this->container['ConfirmationDescription'])) {
            return null;
        }
        return $this->container['ConfirmationDescription'];
    }

    /**
     * Sets ConfirmationDescription
     *
     * @param string|null $ConfirmationDescription ConfirmationDescription
     *
     * @return self
     */
    public function setConfirmationDescription($ConfirmationDescription)
    {
        if (is_null($ConfirmationDescription)) {
            array_push($this->openAPINullablesSetToNull, 'ConfirmationDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ConfirmationDescription', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ConfirmationDescription'] = $ConfirmationDescription;

        return $this;
    }

    /**
     * Gets ConfirmationAction
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConfirmationAction|mixed|null
     */
    public function getConfirmationAction()
    {
        if (!isset($this->container['ConfirmationAction']) || is_null($this->container['ConfirmationAction'])) {
            return null;
        }
        if ((is_object($this->container['ConfirmationAction']) || is_string($this->container['ConfirmationAction'])) && method_exists($this->container['ConfirmationAction'], 'getValue')) {
            return $this->container['ConfirmationAction']->getValue();
        }
        return $this->container['ConfirmationAction'];
    }

    /**
     * Sets ConfirmationAction
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConfirmationAction|mixed|null $ConfirmationAction ConfirmationAction
     *
     * @return self
     */
    public function setConfirmationAction($ConfirmationAction)
    {
        if (is_null($ConfirmationAction)) {
            throw new \InvalidArgumentException('non-nullable ConfirmationAction cannot be null');
        }
        if (!$ConfirmationAction instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConfirmationAction) {
            $ConfirmationAction = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConfirmationAction($ConfirmationAction);
        }
        $this->container['ConfirmationAction'] = $ConfirmationAction;

        return $this;
    }

    /**
     * Gets ConfirmationUrl
     *
     * @return string|null
     */
    public function getConfirmationUrl()
    {
        if (!isset($this->container['ConfirmationUrl']) || is_null($this->container['ConfirmationUrl'])) {
            return null;
        }
        return $this->container['ConfirmationUrl'];
    }

    /**
     * Sets ConfirmationUrl
     *
     * @param string|null $ConfirmationUrl ConfirmationUrl
     *
     * @return self
     */
    public function setConfirmationUrl($ConfirmationUrl)
    {
        if (is_null($ConfirmationUrl)) {
            array_push($this->openAPINullablesSetToNull, 'ConfirmationUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ConfirmationUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ConfirmationUrl'] = $ConfirmationUrl;

        return $this;
    }

    /**
     * Gets LeadDelivery
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadDelivery|mixed|null
     */
    public function getLeadDelivery()
    {
        if (!isset($this->container['LeadDelivery']) || is_null($this->container['LeadDelivery'])) {
            return null;
        }
        if ((is_object($this->container['LeadDelivery']) || is_string($this->container['LeadDelivery'])) && method_exists($this->container['LeadDelivery'], 'getValue')) {
            return $this->container['LeadDelivery']->getValue();
        }
        return $this->container['LeadDelivery'];
    }

    /**
     * Sets LeadDelivery
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadDelivery|mixed|null $LeadDelivery LeadDelivery
     *
     * @return self
     */
    public function setLeadDelivery($LeadDelivery)
    {
        if (is_null($LeadDelivery)) {
            throw new \InvalidArgumentException('non-nullable LeadDelivery cannot be null');
        }
        if (!$LeadDelivery instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadDelivery) {
            $LeadDelivery = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadDelivery($LeadDelivery);
        }
        $this->container['LeadDelivery'] = $LeadDelivery;

        return $this;
    }

    /**
     * Gets LeadEmails
     *
     * @return string|null
     */
    public function getLeadEmails()
    {
        if (!isset($this->container['LeadEmails']) || is_null($this->container['LeadEmails'])) {
            return null;
        }
        return $this->container['LeadEmails'];
    }

    /**
     * Sets LeadEmails
     *
     * @param string|null $LeadEmails LeadEmails
     *
     * @return self
     */
    public function setLeadEmails($LeadEmails)
    {
        if (is_null($LeadEmails)) {
            array_push($this->openAPINullablesSetToNull, 'LeadEmails');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LeadEmails', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LeadEmails'] = $LeadEmails;

        return $this;
    }

    /**
     * Gets LeadWebhookUrl
     *
     * @return string|null
     */
    public function getLeadWebhookUrl()
    {
        if (!isset($this->container['LeadWebhookUrl']) || is_null($this->container['LeadWebhookUrl'])) {
            return null;
        }
        return $this->container['LeadWebhookUrl'];
    }

    /**
     * Sets LeadWebhookUrl
     *
     * @param string|null $LeadWebhookUrl LeadWebhookUrl
     *
     * @return self
     */
    public function setLeadWebhookUrl($LeadWebhookUrl)
    {
        if (is_null($LeadWebhookUrl)) {
            array_push($this->openAPINullablesSetToNull, 'LeadWebhookUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LeadWebhookUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LeadWebhookUrl'] = $LeadWebhookUrl;

        return $this;
    }

    /**
     * Gets LeadWebhookKey
     *
     * @return string|null
     */
    public function getLeadWebhookKey()
    {
        if (!isset($this->container['LeadWebhookKey']) || is_null($this->container['LeadWebhookKey'])) {
            return null;
        }
        return $this->container['LeadWebhookKey'];
    }

    /**
     * Sets LeadWebhookKey
     *
     * @param string|null $LeadWebhookKey LeadWebhookKey
     *
     * @return self
     */
    public function setLeadWebhookKey($LeadWebhookKey)
    {
        if (is_null($LeadWebhookKey)) {
            array_push($this->openAPINullablesSetToNull, 'LeadWebhookKey');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LeadWebhookKey', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LeadWebhookKey'] = $LeadWebhookKey;

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
