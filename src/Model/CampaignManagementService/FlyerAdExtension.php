<?php
/**
 * FlyerAdExtension
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

class FlyerAdExtension extends AdExtension implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FlyerAdExtension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Status' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus',
        'Scheduling' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Schedule',
        'DevicePreference' => 'string',
        'Id' => 'string',
        'Type' => 'string',
        'Version' => 'int',
        'FlyerName' => 'string',
        'StoreId' => 'string',
        'Description' => 'string',
        'ImageMediaIds' => 'string[]',
        'ImageMediaUrls' => 'string[]',
        'FinalMobileUrls' => 'string[]',
        'FinalUrls' => 'string[]',
        'UrlCustomParameters' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters',
        'TrackingUrlTemplate' => 'string',
        'FinalUrlSuffix' => 'string',
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
        'Status' => null,
        'Scheduling' => null,
        'DevicePreference' => 'int64',
        'Id' => 'int64',
        'Type' => null,
        'Version' => 'int32',
        'FlyerName' => null,
        'StoreId' => 'int64',
        'Description' => null,
        'ImageMediaIds' => 'int64',
        'ImageMediaUrls' => null,
        'FinalMobileUrls' => null,
        'FinalUrls' => null,
        'UrlCustomParameters' => null,
        'TrackingUrlTemplate' => null,
        'FinalUrlSuffix' => null,
        'FinalAppUrls' => null,
        'ForwardCompatibilityMap' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Status' => false,
        'Scheduling' => true,
        'DevicePreference' => true,
        'Id' => true,
        'Type' => true,
        'Version' => true,
        'FlyerName' => true,
        'StoreId' => true,
        'Description' => true,
        'ImageMediaIds' => true,
        'ImageMediaUrls' => true,
        'FinalMobileUrls' => true,
        'FinalUrls' => true,
        'UrlCustomParameters' => true,
        'TrackingUrlTemplate' => true,
        'FinalUrlSuffix' => true,
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
        'Status' => 'Status',
        'Scheduling' => 'Scheduling',
        'DevicePreference' => 'DevicePreference',
        'Id' => 'Id',
        'Type' => 'Type',
        'Version' => 'Version',
        'FlyerName' => 'FlyerName',
        'StoreId' => 'StoreId',
        'Description' => 'Description',
        'ImageMediaIds' => 'ImageMediaIds',
        'ImageMediaUrls' => 'ImageMediaUrls',
        'FinalMobileUrls' => 'FinalMobileUrls',
        'FinalUrls' => 'FinalUrls',
        'UrlCustomParameters' => 'UrlCustomParameters',
        'TrackingUrlTemplate' => 'TrackingUrlTemplate',
        'FinalUrlSuffix' => 'FinalUrlSuffix',
        'FinalAppUrls' => 'FinalAppUrls',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Status' => 'setStatus',
        'Scheduling' => 'setScheduling',
        'DevicePreference' => 'setDevicePreference',
        'Id' => 'setId',
        'Type' => 'setType',
        'Version' => 'setVersion',
        'FlyerName' => 'setFlyerName',
        'StoreId' => 'setStoreId',
        'Description' => 'setDescription',
        'ImageMediaIds' => 'setImageMediaIds',
        'ImageMediaUrls' => 'setImageMediaUrls',
        'FinalMobileUrls' => 'setFinalMobileUrls',
        'FinalUrls' => 'setFinalUrls',
        'UrlCustomParameters' => 'setUrlCustomParameters',
        'TrackingUrlTemplate' => 'setTrackingUrlTemplate',
        'FinalUrlSuffix' => 'setFinalUrlSuffix',
        'FinalAppUrls' => 'setFinalAppUrls',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Status' => 'getStatus',
        'Scheduling' => 'getScheduling',
        'DevicePreference' => 'getDevicePreference',
        'Id' => 'getId',
        'Type' => 'getType',
        'Version' => 'getVersion',
        'FlyerName' => 'getFlyerName',
        'StoreId' => 'getStoreId',
        'Description' => 'getDescription',
        'ImageMediaIds' => 'getImageMediaIds',
        'ImageMediaUrls' => 'getImageMediaUrls',
        'FinalMobileUrls' => 'getFinalMobileUrls',
        'FinalUrls' => 'getFinalUrls',
        'UrlCustomParameters' => 'getUrlCustomParameters',
        'TrackingUrlTemplate' => 'getTrackingUrlTemplate',
        'FinalUrlSuffix' => 'getFinalUrlSuffix',
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
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('Scheduling', $data ?? [], null);
        $this->setIfExists('DevicePreference', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], null);
        $this->setIfExists('Version', $data ?? [], null);
        $this->setIfExists('FlyerName', $data ?? [], null);
        $this->setIfExists('StoreId', $data ?? [], null);
        $this->setIfExists('Description', $data ?? [], null);
        $this->setIfExists('ImageMediaIds', $data ?? [], null);
        $this->setIfExists('ImageMediaUrls', $data ?? [], null);
        $this->setIfExists('FinalMobileUrls', $data ?? [], null);
        $this->setIfExists('FinalUrls', $data ?? [], null);
        $this->setIfExists('UrlCustomParameters', $data ?? [], null);
        $this->setIfExists('TrackingUrlTemplate', $data ?? [], null);
        $this->setIfExists('FinalUrlSuffix', $data ?? [], null);
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
