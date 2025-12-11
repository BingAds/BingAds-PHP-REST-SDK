<?php
/**
 * SitelinkAdExtension
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

class SitelinkAdExtension extends AdExtension implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SitelinkAdExtension';

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
        'DisplayText' => 'string',
        'DestinationUrl' => 'string',
        'Description1' => 'string',
        'Description2' => 'string',
        'FinalAppUrls' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AppUrl[]',
        'FinalMobileUrls' => 'string[]',
        'FinalUrls' => 'string[]',
        'TrackingUrlTemplate' => 'string',
        'FinalUrlSuffix' => 'string',
        'UrlCustomParameters' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters',
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
        'DisplayText' => null,
        'DestinationUrl' => null,
        'Description1' => null,
        'Description2' => null,
        'FinalAppUrls' => null,
        'FinalMobileUrls' => null,
        'FinalUrls' => null,
        'TrackingUrlTemplate' => null,
        'FinalUrlSuffix' => null,
        'UrlCustomParameters' => null,
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
        'DisplayText' => true,
        'DestinationUrl' => true,
        'Description1' => true,
        'Description2' => true,
        'FinalAppUrls' => true,
        'FinalMobileUrls' => true,
        'FinalUrls' => true,
        'TrackingUrlTemplate' => true,
        'FinalUrlSuffix' => true,
        'UrlCustomParameters' => true,
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
        'DisplayText' => 'DisplayText',
        'DestinationUrl' => 'DestinationUrl',
        'Description1' => 'Description1',
        'Description2' => 'Description2',
        'FinalAppUrls' => 'FinalAppUrls',
        'FinalMobileUrls' => 'FinalMobileUrls',
        'FinalUrls' => 'FinalUrls',
        'TrackingUrlTemplate' => 'TrackingUrlTemplate',
        'FinalUrlSuffix' => 'FinalUrlSuffix',
        'UrlCustomParameters' => 'UrlCustomParameters',
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
        'DisplayText' => 'setDisplayText',
        'DestinationUrl' => 'setDestinationUrl',
        'Description1' => 'setDescription1',
        'Description2' => 'setDescription2',
        'FinalAppUrls' => 'setFinalAppUrls',
        'FinalMobileUrls' => 'setFinalMobileUrls',
        'FinalUrls' => 'setFinalUrls',
        'TrackingUrlTemplate' => 'setTrackingUrlTemplate',
        'FinalUrlSuffix' => 'setFinalUrlSuffix',
        'UrlCustomParameters' => 'setUrlCustomParameters',
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
        'DisplayText' => 'getDisplayText',
        'DestinationUrl' => 'getDestinationUrl',
        'Description1' => 'getDescription1',
        'Description2' => 'getDescription2',
        'FinalAppUrls' => 'getFinalAppUrls',
        'FinalMobileUrls' => 'getFinalMobileUrls',
        'FinalUrls' => 'getFinalUrls',
        'TrackingUrlTemplate' => 'getTrackingUrlTemplate',
        'FinalUrlSuffix' => 'getFinalUrlSuffix',
        'UrlCustomParameters' => 'getUrlCustomParameters',
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
        $this->setIfExists('DisplayText', $data ?? [], null);
        $this->setIfExists('DestinationUrl', $data ?? [], null);
        $this->setIfExists('Description1', $data ?? [], null);
        $this->setIfExists('Description2', $data ?? [], null);
        $this->setIfExists('FinalAppUrls', $data ?? [], null);
        $this->setIfExists('FinalMobileUrls', $data ?? [], null);
        $this->setIfExists('FinalUrls', $data ?? [], null);
        $this->setIfExists('TrackingUrlTemplate', $data ?? [], null);
        $this->setIfExists('FinalUrlSuffix', $data ?? [], null);
        $this->setIfExists('UrlCustomParameters', $data ?? [], null);
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
