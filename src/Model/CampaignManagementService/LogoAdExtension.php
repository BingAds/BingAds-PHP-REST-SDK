<?php
/**
 * LogoAdExtension
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

class LogoAdExtension extends AdExtension implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LogoAdExtension';

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
        'BusinessName' => 'string',
        'BusinessLogo' => 'string',
        'BusinessLogoUrl' => 'string',
        'DomainName' => 'string',
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
        'BusinessName' => null,
        'BusinessLogo' => 'int64',
        'BusinessLogoUrl' => null,
        'DomainName' => null,
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
        'BusinessName' => true,
        'BusinessLogo' => true,
        'BusinessLogoUrl' => true,
        'DomainName' => true,
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
        'BusinessName' => 'BusinessName',
        'BusinessLogo' => 'BusinessLogo',
        'BusinessLogoUrl' => 'BusinessLogoUrl',
        'DomainName' => 'DomainName',
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
        'BusinessName' => 'setBusinessName',
        'BusinessLogo' => 'setBusinessLogo',
        'BusinessLogoUrl' => 'setBusinessLogoUrl',
        'DomainName' => 'setDomainName',
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
        'BusinessName' => 'getBusinessName',
        'BusinessLogo' => 'getBusinessLogo',
        'BusinessLogoUrl' => 'getBusinessLogoUrl',
        'DomainName' => 'getDomainName',
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
        $this->setIfExists('BusinessName', $data ?? [], null);
        $this->setIfExists('BusinessLogo', $data ?? [], null);
        $this->setIfExists('BusinessLogoUrl', $data ?? [], null);
        $this->setIfExists('DomainName', $data ?? [], null);
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
