<?php
/**
 * ResponsiveAd
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

class ResponsiveAd extends Ad implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ResponsiveAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Headline' => 'string',
        'LongHeadlineString' => 'string',
        'Text' => 'string',
        'BusinessName' => 'string',
        'CallToAction' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CallToAction',
        'CallToActionLanguage' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\LanguageName',
        'Images' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]',
        'Videos' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]',
        'Headlines' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]',
        'LongHeadline' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink',
        'LongHeadlines' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]',
        'Descriptions' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]',
        'ImpressionTrackingUrls' => 'string[]',
        'VerifiedTrackingSettings' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\VerifiedTrackingSetting',
        'AdSubType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdSubType',
        'Id' => 'string',
        'Type' => 'string',
        'Status' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdStatus',
        'EditorialStatus' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdEditorialStatus',
        'DevicePreference' => 'string',
        'AdFormatPreference' => 'string',
        'TrackingUrlTemplate' => 'string',
        'FinalUrlSuffix' => 'string',
        'UrlCustomParameters' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters',
        'FinalUrls' => 'string[]',
        'FinalMobileUrls' => 'string[]',
        'FinalAppUrls' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AppUrl[]',
        'ForwardCompatibilityMap' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Headline' => null,
        'LongHeadlineString' => null,
        'Text' => null,
        'BusinessName' => null,
        'CallToAction' => null,
        'CallToActionLanguage' => null,
        'Images' => null,
        'Videos' => null,
        'Headlines' => null,
        'LongHeadline' => null,
        'LongHeadlines' => null,
        'Descriptions' => null,
        'ImpressionTrackingUrls' => null,
        'VerifiedTrackingSettings' => null,
        'AdSubType' => null,
        'Id' => 'int64',
        'Type' => null,
        'Status' => null,
        'EditorialStatus' => null,
        'DevicePreference' => 'int64',
        'AdFormatPreference' => null,
        'TrackingUrlTemplate' => null,
        'FinalUrlSuffix' => null,
        'UrlCustomParameters' => null,
        'FinalUrls' => null,
        'FinalMobileUrls' => null,
        'FinalAppUrls' => null,
        'ForwardCompatibilityMap' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Headline' => true,
        'LongHeadlineString' => true,
        'Text' => true,
        'BusinessName' => true,
        'CallToAction' => false,
        'CallToActionLanguage' => false,
        'Images' => true,
        'Videos' => true,
        'Headlines' => true,
        'LongHeadline' => true,
        'LongHeadlines' => true,
        'Descriptions' => true,
        'ImpressionTrackingUrls' => true,
        'VerifiedTrackingSettings' => true,
        'AdSubType' => false,
        'Id' => true,
        'Type' => true,
        'Status' => false,
        'EditorialStatus' => false,
        'DevicePreference' => true,
        'AdFormatPreference' => true,
        'TrackingUrlTemplate' => true,
        'FinalUrlSuffix' => true,
        'UrlCustomParameters' => true,
        'FinalUrls' => true,
        'FinalMobileUrls' => true,
        'FinalAppUrls' => true,
        'ForwardCompatibilityMap' => true
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
        'Headline' => 'Headline',
        'LongHeadlineString' => 'LongHeadlineString',
        'Text' => 'Text',
        'BusinessName' => 'BusinessName',
        'CallToAction' => 'CallToAction',
        'CallToActionLanguage' => 'CallToActionLanguage',
        'Images' => 'Images',
        'Videos' => 'Videos',
        'Headlines' => 'Headlines',
        'LongHeadline' => 'LongHeadline',
        'LongHeadlines' => 'LongHeadlines',
        'Descriptions' => 'Descriptions',
        'ImpressionTrackingUrls' => 'ImpressionTrackingUrls',
        'VerifiedTrackingSettings' => 'VerifiedTrackingSettings',
        'AdSubType' => 'AdSubType',
        'Id' => 'Id',
        'Type' => 'Type',
        'Status' => 'Status',
        'EditorialStatus' => 'EditorialStatus',
        'DevicePreference' => 'DevicePreference',
        'AdFormatPreference' => 'AdFormatPreference',
        'TrackingUrlTemplate' => 'TrackingUrlTemplate',
        'FinalUrlSuffix' => 'FinalUrlSuffix',
        'UrlCustomParameters' => 'UrlCustomParameters',
        'FinalUrls' => 'FinalUrls',
        'FinalMobileUrls' => 'FinalMobileUrls',
        'FinalAppUrls' => 'FinalAppUrls',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Headline' => 'setHeadline',
        'LongHeadlineString' => 'setLongHeadlineString',
        'Text' => 'setText',
        'BusinessName' => 'setBusinessName',
        'CallToAction' => 'setCallToAction',
        'CallToActionLanguage' => 'setCallToActionLanguage',
        'Images' => 'setImages',
        'Videos' => 'setVideos',
        'Headlines' => 'setHeadlines',
        'LongHeadline' => 'setLongHeadline',
        'LongHeadlines' => 'setLongHeadlines',
        'Descriptions' => 'setDescriptions',
        'ImpressionTrackingUrls' => 'setImpressionTrackingUrls',
        'VerifiedTrackingSettings' => 'setVerifiedTrackingSettings',
        'AdSubType' => 'setAdSubType',
        'Id' => 'setId',
        'Type' => 'setType',
        'Status' => 'setStatus',
        'EditorialStatus' => 'setEditorialStatus',
        'DevicePreference' => 'setDevicePreference',
        'AdFormatPreference' => 'setAdFormatPreference',
        'TrackingUrlTemplate' => 'setTrackingUrlTemplate',
        'FinalUrlSuffix' => 'setFinalUrlSuffix',
        'UrlCustomParameters' => 'setUrlCustomParameters',
        'FinalUrls' => 'setFinalUrls',
        'FinalMobileUrls' => 'setFinalMobileUrls',
        'FinalAppUrls' => 'setFinalAppUrls',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Headline' => 'getHeadline',
        'LongHeadlineString' => 'getLongHeadlineString',
        'Text' => 'getText',
        'BusinessName' => 'getBusinessName',
        'CallToAction' => 'getCallToAction',
        'CallToActionLanguage' => 'getCallToActionLanguage',
        'Images' => 'getImages',
        'Videos' => 'getVideos',
        'Headlines' => 'getHeadlines',
        'LongHeadline' => 'getLongHeadline',
        'LongHeadlines' => 'getLongHeadlines',
        'Descriptions' => 'getDescriptions',
        'ImpressionTrackingUrls' => 'getImpressionTrackingUrls',
        'VerifiedTrackingSettings' => 'getVerifiedTrackingSettings',
        'AdSubType' => 'getAdSubType',
        'Id' => 'getId',
        'Type' => 'getType',
        'Status' => 'getStatus',
        'EditorialStatus' => 'getEditorialStatus',
        'DevicePreference' => 'getDevicePreference',
        'AdFormatPreference' => 'getAdFormatPreference',
        'TrackingUrlTemplate' => 'getTrackingUrlTemplate',
        'FinalUrlSuffix' => 'getFinalUrlSuffix',
        'UrlCustomParameters' => 'getUrlCustomParameters',
        'FinalUrls' => 'getFinalUrls',
        'FinalMobileUrls' => 'getFinalMobileUrls',
        'FinalAppUrls' => 'getFinalAppUrls',
        'ForwardCompatibilityMap' => 'getForwardCompatibilityMap'
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
        $this->setIfExists('Headline', $data ?? [], null);
        $this->setIfExists('LongHeadlineString', $data ?? [], null);
        $this->setIfExists('Text', $data ?? [], null);
        $this->setIfExists('BusinessName', $data ?? [], null);
        $this->setIfExists('CallToAction', $data ?? [], null);
        $this->setIfExists('CallToActionLanguage', $data ?? [], null);
        $this->setIfExists('Images', $data ?? [], null);
        $this->setIfExists('Videos', $data ?? [], null);
        $this->setIfExists('Headlines', $data ?? [], null);
        $this->setIfExists('LongHeadline', $data ?? [], null);
        $this->setIfExists('LongHeadlines', $data ?? [], null);
        $this->setIfExists('Descriptions', $data ?? [], null);
        $this->setIfExists('ImpressionTrackingUrls', $data ?? [], null);
        $this->setIfExists('VerifiedTrackingSettings', $data ?? [], null);
        $this->setIfExists('AdSubType', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'ResponsiveAd');
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('EditorialStatus', $data ?? [], null);
        $this->setIfExists('DevicePreference', $data ?? [], null);
        $this->setIfExists('AdFormatPreference', $data ?? [], null);
        $this->setIfExists('TrackingUrlTemplate', $data ?? [], null);
        $this->setIfExists('FinalUrlSuffix', $data ?? [], null);
        $this->setIfExists('UrlCustomParameters', $data ?? [], null);
        $this->setIfExists('FinalUrls', $data ?? [], null);
        $this->setIfExists('FinalMobileUrls', $data ?? [], null);
        $this->setIfExists('FinalAppUrls', $data ?? [], null);
        $this->setIfExists('ForwardCompatibilityMap', $data ?? [], null);
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
     * Gets Headline
     *
     * @return string|null
     */
    public function getHeadline()
    {
        if (!isset($this->container['Headline']) || is_null($this->container['Headline'])) {
            return null;
        }
        return $this->container['Headline'];
    }

    /**
     * Sets Headline
     *
     * @param string|null $Headline Headline
     *
     * @return self
     */
    public function setHeadline($Headline)
    {
        if (is_null($Headline)) {
            array_push($this->openAPINullablesSetToNull, 'Headline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Headline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Headline'] = $Headline;

        return $this;
    }

    /**
     * Gets LongHeadlineString
     *
     * @return string|null
     */
    public function getLongHeadlineString()
    {
        if (!isset($this->container['LongHeadlineString']) || is_null($this->container['LongHeadlineString'])) {
            return null;
        }
        return $this->container['LongHeadlineString'];
    }

    /**
     * Sets LongHeadlineString
     *
     * @param string|null $LongHeadlineString LongHeadlineString
     *
     * @return self
     */
    public function setLongHeadlineString($LongHeadlineString)
    {
        if (is_null($LongHeadlineString)) {
            array_push($this->openAPINullablesSetToNull, 'LongHeadlineString');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LongHeadlineString', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LongHeadlineString'] = $LongHeadlineString;

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
     * Gets CallToAction
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CallToAction|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CallToAction|mixed|null $CallToAction CallToAction
     *
     * @return self
     */
    public function setCallToAction($CallToAction)
    {
        if (is_null($CallToAction)) {
            throw new \InvalidArgumentException('non-nullable CallToAction cannot be null');
        }
        if (!$CallToAction instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\CallToAction) {
            $CallToAction = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\CallToAction($CallToAction);
        }
        $this->container['CallToAction'] = $CallToAction;

        return $this;
    }

    /**
     * Gets CallToActionLanguage
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\LanguageName|mixed|null
     */
    public function getCallToActionLanguage()
    {
        if (!isset($this->container['CallToActionLanguage']) || is_null($this->container['CallToActionLanguage'])) {
            return null;
        }
        if ((is_object($this->container['CallToActionLanguage']) || is_string($this->container['CallToActionLanguage'])) && method_exists($this->container['CallToActionLanguage'], 'getValue')) {
            return $this->container['CallToActionLanguage']->getValue();
        }
        return $this->container['CallToActionLanguage'];
    }

    /**
     * Sets CallToActionLanguage
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\LanguageName|mixed|null $CallToActionLanguage CallToActionLanguage
     *
     * @return self
     */
    public function setCallToActionLanguage($CallToActionLanguage)
    {
        if (is_null($CallToActionLanguage)) {
            throw new \InvalidArgumentException('non-nullable CallToActionLanguage cannot be null');
        }
        if (!$CallToActionLanguage instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\LanguageName) {
            $CallToActionLanguage = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\LanguageName($CallToActionLanguage);
        }
        $this->container['CallToActionLanguage'] = $CallToActionLanguage;

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
     * Gets Videos
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]|null
     */
    public function getVideos()
    {
        if (!isset($this->container['Videos']) || is_null($this->container['Videos'])) {
            return null;
        }
        return $this->container['Videos'];
    }

    /**
     * Sets Videos
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]|null $Videos Videos
     *
     * @return self
     */
    public function setVideos($Videos)
    {
        if (is_null($Videos)) {
            array_push($this->openAPINullablesSetToNull, 'Videos');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Videos', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Videos'] = $Videos;

        return $this;
    }

    /**
     * Gets Headlines
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]|null
     */
    public function getHeadlines()
    {
        if (!isset($this->container['Headlines']) || is_null($this->container['Headlines'])) {
            return null;
        }
        return $this->container['Headlines'];
    }

    /**
     * Sets Headlines
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]|null $Headlines Headlines
     *
     * @return self
     */
    public function setHeadlines($Headlines)
    {
        if (is_null($Headlines)) {
            array_push($this->openAPINullablesSetToNull, 'Headlines');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Headlines', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Headlines'] = $Headlines;

        return $this;
    }

    /**
     * Gets LongHeadline
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink|null
     */
    public function getLongHeadline()
    {
        if (!isset($this->container['LongHeadline']) || is_null($this->container['LongHeadline'])) {
            return null;
        }
        return $this->container['LongHeadline'];
    }

    /**
     * Sets LongHeadline
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink|null $LongHeadline LongHeadline
     *
     * @return self
     */
    public function setLongHeadline($LongHeadline)
    {
        if (is_null($LongHeadline)) {
            array_push($this->openAPINullablesSetToNull, 'LongHeadline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LongHeadline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LongHeadline'] = $LongHeadline;

        return $this;
    }

    /**
     * Gets LongHeadlines
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]|null
     */
    public function getLongHeadlines()
    {
        if (!isset($this->container['LongHeadlines']) || is_null($this->container['LongHeadlines'])) {
            return null;
        }
        return $this->container['LongHeadlines'];
    }

    /**
     * Sets LongHeadlines
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]|null $LongHeadlines LongHeadlines
     *
     * @return self
     */
    public function setLongHeadlines($LongHeadlines)
    {
        if (is_null($LongHeadlines)) {
            array_push($this->openAPINullablesSetToNull, 'LongHeadlines');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LongHeadlines', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LongHeadlines'] = $LongHeadlines;

        return $this;
    }

    /**
     * Gets Descriptions
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]|null
     */
    public function getDescriptions()
    {
        if (!isset($this->container['Descriptions']) || is_null($this->container['Descriptions'])) {
            return null;
        }
        return $this->container['Descriptions'];
    }

    /**
     * Sets Descriptions
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]|null $Descriptions Descriptions
     *
     * @return self
     */
    public function setDescriptions($Descriptions)
    {
        if (is_null($Descriptions)) {
            array_push($this->openAPINullablesSetToNull, 'Descriptions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Descriptions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Descriptions'] = $Descriptions;

        return $this;
    }

    /**
     * Gets ImpressionTrackingUrls
     *
     * @return string[]|null
     */
    public function getImpressionTrackingUrls()
    {
        if (!isset($this->container['ImpressionTrackingUrls']) || is_null($this->container['ImpressionTrackingUrls'])) {
            return null;
        }
        return $this->container['ImpressionTrackingUrls'];
    }

    /**
     * Sets ImpressionTrackingUrls
     *
     * @param string[]|null $ImpressionTrackingUrls ImpressionTrackingUrls
     *
     * @return self
     */
    public function setImpressionTrackingUrls($ImpressionTrackingUrls)
    {
        if (is_null($ImpressionTrackingUrls)) {
            array_push($this->openAPINullablesSetToNull, 'ImpressionTrackingUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ImpressionTrackingUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ImpressionTrackingUrls'] = $ImpressionTrackingUrls;

        return $this;
    }

    /**
     * Gets VerifiedTrackingSettings
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\VerifiedTrackingSetting|null
     */
    public function getVerifiedTrackingSettings()
    {
        if (!isset($this->container['VerifiedTrackingSettings']) || is_null($this->container['VerifiedTrackingSettings'])) {
            return null;
        }
        return $this->container['VerifiedTrackingSettings'];
    }

    /**
     * Sets VerifiedTrackingSettings
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\VerifiedTrackingSetting|null $VerifiedTrackingSettings VerifiedTrackingSettings
     *
     * @return self
     */
    public function setVerifiedTrackingSettings($VerifiedTrackingSettings)
    {
        if (is_null($VerifiedTrackingSettings)) {
            array_push($this->openAPINullablesSetToNull, 'VerifiedTrackingSettings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('VerifiedTrackingSettings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['VerifiedTrackingSettings'] = $VerifiedTrackingSettings;

        return $this;
    }

    /**
     * Gets AdSubType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdSubType|mixed|null
     */
    public function getAdSubType()
    {
        if (!isset($this->container['AdSubType']) || is_null($this->container['AdSubType'])) {
            return null;
        }
        if ((is_object($this->container['AdSubType']) || is_string($this->container['AdSubType'])) && method_exists($this->container['AdSubType'], 'getValue')) {
            return $this->container['AdSubType']->getValue();
        }
        return $this->container['AdSubType'];
    }

    /**
     * Sets AdSubType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdSubType|mixed|null $AdSubType AdSubType
     *
     * @return self
     */
    public function setAdSubType($AdSubType)
    {
        if (is_null($AdSubType)) {
            throw new \InvalidArgumentException('non-nullable AdSubType cannot be null');
        }
        if (!$AdSubType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdSubType) {
            $AdSubType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdSubType($AdSubType);
        }
        $this->container['AdSubType'] = $AdSubType;

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
     * Gets Status
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdStatus|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdStatus($Status);
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets EditorialStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdEditorialStatus|mixed|null
     */
    public function getEditorialStatus()
    {
        if (!isset($this->container['EditorialStatus']) || is_null($this->container['EditorialStatus'])) {
            return null;
        }
        if ((is_object($this->container['EditorialStatus']) || is_string($this->container['EditorialStatus'])) && method_exists($this->container['EditorialStatus'], 'getValue')) {
            return $this->container['EditorialStatus']->getValue();
        }
        return $this->container['EditorialStatus'];
    }

    /**
     * Sets EditorialStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdEditorialStatus|mixed|null $EditorialStatus EditorialStatus
     *
     * @return self
     */
    public function setEditorialStatus($EditorialStatus)
    {
        if (is_null($EditorialStatus)) {
            throw new \InvalidArgumentException('non-nullable EditorialStatus cannot be null');
        }
        if (!$EditorialStatus instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdEditorialStatus) {
            $EditorialStatus = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdEditorialStatus($EditorialStatus);
        }
        $this->container['EditorialStatus'] = $EditorialStatus;

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
     * Gets AdFormatPreference
     *
     * @return string|null
     */
    public function getAdFormatPreference()
    {
        if (!isset($this->container['AdFormatPreference']) || is_null($this->container['AdFormatPreference'])) {
            return null;
        }
        return $this->container['AdFormatPreference'];
    }

    /**
     * Sets AdFormatPreference
     *
     * @param string|null $AdFormatPreference AdFormatPreference
     *
     * @return self
     */
    public function setAdFormatPreference($AdFormatPreference)
    {
        if (is_null($AdFormatPreference)) {
            array_push($this->openAPINullablesSetToNull, 'AdFormatPreference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdFormatPreference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdFormatPreference'] = $AdFormatPreference;

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
