<?php
/**
 * AssetGroup
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

class AssetGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AssetGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'Status' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupStatus',
        'StartDate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Date',
        'EndDate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Date',
        'Path1' => 'string',
        'Path2' => 'string',
        'BusinessName' => 'string',
        'Headlines' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]',
        'LongHeadlines' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]',
        'Descriptions' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]',
        'Images' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]',
        'Videos' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink[]',
        'CallToAction' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CallToAction',
        'FinalUrls' => 'string[]',
        'AssetGroupSearchThemes' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupSearchTheme[]',
        'FinalMobileUrls' => 'string[]',
        'TrackingUrlTemplate' => 'string',
        'FinalUrlSuffix' => 'string',
        'UrlCustomParameters' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters',
        'EditorialStatus' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupEditorialStatus',
        'AssetGroupUrlTargets' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupUrlTarget[]',
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
        'Id' => 'int64',
        'Name' => null,
        'Status' => null,
        'StartDate' => null,
        'EndDate' => null,
        'Path1' => null,
        'Path2' => null,
        'BusinessName' => null,
        'Headlines' => null,
        'LongHeadlines' => null,
        'Descriptions' => null,
        'Images' => null,
        'Videos' => null,
        'CallToAction' => null,
        'FinalUrls' => null,
        'AssetGroupSearchThemes' => null,
        'FinalMobileUrls' => null,
        'TrackingUrlTemplate' => null,
        'FinalUrlSuffix' => null,
        'UrlCustomParameters' => null,
        'EditorialStatus' => null,
        'AssetGroupUrlTargets' => null,
        'ForwardCompatibilityMap' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'Name' => true,
        'Status' => false,
        'StartDate' => true,
        'EndDate' => true,
        'Path1' => true,
        'Path2' => true,
        'BusinessName' => true,
        'Headlines' => true,
        'LongHeadlines' => true,
        'Descriptions' => true,
        'Images' => true,
        'Videos' => true,
        'CallToAction' => false,
        'FinalUrls' => true,
        'AssetGroupSearchThemes' => true,
        'FinalMobileUrls' => true,
        'TrackingUrlTemplate' => true,
        'FinalUrlSuffix' => true,
        'UrlCustomParameters' => true,
        'EditorialStatus' => false,
        'AssetGroupUrlTargets' => true,
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
        'Id' => 'Id',
        'Name' => 'Name',
        'Status' => 'Status',
        'StartDate' => 'StartDate',
        'EndDate' => 'EndDate',
        'Path1' => 'Path1',
        'Path2' => 'Path2',
        'BusinessName' => 'BusinessName',
        'Headlines' => 'Headlines',
        'LongHeadlines' => 'LongHeadlines',
        'Descriptions' => 'Descriptions',
        'Images' => 'Images',
        'Videos' => 'Videos',
        'CallToAction' => 'CallToAction',
        'FinalUrls' => 'FinalUrls',
        'AssetGroupSearchThemes' => 'AssetGroupSearchThemes',
        'FinalMobileUrls' => 'FinalMobileUrls',
        'TrackingUrlTemplate' => 'TrackingUrlTemplate',
        'FinalUrlSuffix' => 'FinalUrlSuffix',
        'UrlCustomParameters' => 'UrlCustomParameters',
        'EditorialStatus' => 'EditorialStatus',
        'AssetGroupUrlTargets' => 'AssetGroupUrlTargets',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'Name' => 'setName',
        'Status' => 'setStatus',
        'StartDate' => 'setStartDate',
        'EndDate' => 'setEndDate',
        'Path1' => 'setPath1',
        'Path2' => 'setPath2',
        'BusinessName' => 'setBusinessName',
        'Headlines' => 'setHeadlines',
        'LongHeadlines' => 'setLongHeadlines',
        'Descriptions' => 'setDescriptions',
        'Images' => 'setImages',
        'Videos' => 'setVideos',
        'CallToAction' => 'setCallToAction',
        'FinalUrls' => 'setFinalUrls',
        'AssetGroupSearchThemes' => 'setAssetGroupSearchThemes',
        'FinalMobileUrls' => 'setFinalMobileUrls',
        'TrackingUrlTemplate' => 'setTrackingUrlTemplate',
        'FinalUrlSuffix' => 'setFinalUrlSuffix',
        'UrlCustomParameters' => 'setUrlCustomParameters',
        'EditorialStatus' => 'setEditorialStatus',
        'AssetGroupUrlTargets' => 'setAssetGroupUrlTargets',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'Name' => 'getName',
        'Status' => 'getStatus',
        'StartDate' => 'getStartDate',
        'EndDate' => 'getEndDate',
        'Path1' => 'getPath1',
        'Path2' => 'getPath2',
        'BusinessName' => 'getBusinessName',
        'Headlines' => 'getHeadlines',
        'LongHeadlines' => 'getLongHeadlines',
        'Descriptions' => 'getDescriptions',
        'Images' => 'getImages',
        'Videos' => 'getVideos',
        'CallToAction' => 'getCallToAction',
        'FinalUrls' => 'getFinalUrls',
        'AssetGroupSearchThemes' => 'getAssetGroupSearchThemes',
        'FinalMobileUrls' => 'getFinalMobileUrls',
        'TrackingUrlTemplate' => 'getTrackingUrlTemplate',
        'FinalUrlSuffix' => 'getFinalUrlSuffix',
        'UrlCustomParameters' => 'getUrlCustomParameters',
        'EditorialStatus' => 'getEditorialStatus',
        'AssetGroupUrlTargets' => 'getAssetGroupUrlTargets',
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
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('Path1', $data ?? [], null);
        $this->setIfExists('Path2', $data ?? [], null);
        $this->setIfExists('BusinessName', $data ?? [], null);
        $this->setIfExists('Headlines', $data ?? [], null);
        $this->setIfExists('LongHeadlines', $data ?? [], null);
        $this->setIfExists('Descriptions', $data ?? [], null);
        $this->setIfExists('Images', $data ?? [], null);
        $this->setIfExists('Videos', $data ?? [], null);
        $this->setIfExists('CallToAction', $data ?? [], null);
        $this->setIfExists('FinalUrls', $data ?? [], null);
        $this->setIfExists('AssetGroupSearchThemes', $data ?? [], null);
        $this->setIfExists('FinalMobileUrls', $data ?? [], null);
        $this->setIfExists('TrackingUrlTemplate', $data ?? [], null);
        $this->setIfExists('FinalUrlSuffix', $data ?? [], null);
        $this->setIfExists('UrlCustomParameters', $data ?? [], null);
        $this->setIfExists('EditorialStatus', $data ?? [], null);
        $this->setIfExists('AssetGroupUrlTargets', $data ?? [], null);
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
     * Gets Status
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupStatus|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupStatus($Status);
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets StartDate
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null
     */
    public function getStartDate()
    {
        if (!isset($this->container['StartDate']) || is_null($this->container['StartDate'])) {
            return null;
        }
        return $this->container['StartDate'];
    }

    /**
     * Sets StartDate
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null $StartDate StartDate
     *
     * @return self
     */
    public function setStartDate($StartDate)
    {
        if (is_null($StartDate)) {
            array_push($this->openAPINullablesSetToNull, 'StartDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StartDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StartDate'] = $StartDate;

        return $this;
    }

    /**
     * Gets EndDate
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null
     */
    public function getEndDate()
    {
        if (!isset($this->container['EndDate']) || is_null($this->container['EndDate'])) {
            return null;
        }
        return $this->container['EndDate'];
    }

    /**
     * Sets EndDate
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null $EndDate EndDate
     *
     * @return self
     */
    public function setEndDate($EndDate)
    {
        if (is_null($EndDate)) {
            array_push($this->openAPINullablesSetToNull, 'EndDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EndDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EndDate'] = $EndDate;

        return $this;
    }

    /**
     * Gets Path1
     *
     * @return string|null
     */
    public function getPath1()
    {
        if (!isset($this->container['Path1']) || is_null($this->container['Path1'])) {
            return null;
        }
        return $this->container['Path1'];
    }

    /**
     * Sets Path1
     *
     * @param string|null $Path1 Path1
     *
     * @return self
     */
    public function setPath1($Path1)
    {
        if (is_null($Path1)) {
            array_push($this->openAPINullablesSetToNull, 'Path1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Path1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Path1'] = $Path1;

        return $this;
    }

    /**
     * Gets Path2
     *
     * @return string|null
     */
    public function getPath2()
    {
        if (!isset($this->container['Path2']) || is_null($this->container['Path2'])) {
            return null;
        }
        return $this->container['Path2'];
    }

    /**
     * Sets Path2
     *
     * @param string|null $Path2 Path2
     *
     * @return self
     */
    public function setPath2($Path2)
    {
        if (is_null($Path2)) {
            array_push($this->openAPINullablesSetToNull, 'Path2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Path2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Path2'] = $Path2;

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
     * Gets AssetGroupSearchThemes
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupSearchTheme[]|null
     */
    public function getAssetGroupSearchThemes()
    {
        if (!isset($this->container['AssetGroupSearchThemes']) || is_null($this->container['AssetGroupSearchThemes'])) {
            return null;
        }
        return $this->container['AssetGroupSearchThemes'];
    }

    /**
     * Sets AssetGroupSearchThemes
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupSearchTheme[]|null $AssetGroupSearchThemes AssetGroupSearchThemes
     *
     * @return self
     */
    public function setAssetGroupSearchThemes($AssetGroupSearchThemes)
    {
        if (is_null($AssetGroupSearchThemes)) {
            array_push($this->openAPINullablesSetToNull, 'AssetGroupSearchThemes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AssetGroupSearchThemes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AssetGroupSearchThemes'] = $AssetGroupSearchThemes;

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
     * Gets EditorialStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupEditorialStatus|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupEditorialStatus|mixed|null $EditorialStatus EditorialStatus
     *
     * @return self
     */
    public function setEditorialStatus($EditorialStatus)
    {
        if (is_null($EditorialStatus)) {
            throw new \InvalidArgumentException('non-nullable EditorialStatus cannot be null');
        }
        if (!$EditorialStatus instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupEditorialStatus) {
            $EditorialStatus = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupEditorialStatus($EditorialStatus);
        }
        $this->container['EditorialStatus'] = $EditorialStatus;

        return $this;
    }

    /**
     * Gets AssetGroupUrlTargets
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupUrlTarget[]|null
     */
    public function getAssetGroupUrlTargets()
    {
        if (!isset($this->container['AssetGroupUrlTargets']) || is_null($this->container['AssetGroupUrlTargets'])) {
            return null;
        }
        return $this->container['AssetGroupUrlTargets'];
    }

    /**
     * Sets AssetGroupUrlTargets
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupUrlTarget[]|null $AssetGroupUrlTargets AssetGroupUrlTargets
     *
     * @return self
     */
    public function setAssetGroupUrlTargets($AssetGroupUrlTargets)
    {
        if (is_null($AssetGroupUrlTargets)) {
            array_push($this->openAPINullablesSetToNull, 'AssetGroupUrlTargets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AssetGroupUrlTargets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AssetGroupUrlTargets'] = $AssetGroupUrlTargets;

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
