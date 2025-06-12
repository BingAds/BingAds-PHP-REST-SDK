<?php
/**
 * HealthCheckData
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

class HealthCheckData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'HealthCheckData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'HealthCheckEntity' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckEntity',
        'HealthCheckName' => 'string',
        'HealthCheckDataVersion' => 'string',
        'HealthCheckJsonData' => 'string',
        'HealthCheckSubEntityResults' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckSubEntityData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'HealthCheckEntity' => null,
        'HealthCheckName' => null,
        'HealthCheckDataVersion' => null,
        'HealthCheckJsonData' => null,
        'HealthCheckSubEntityResults' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'HealthCheckEntity' => true,
        'HealthCheckName' => true,
        'HealthCheckDataVersion' => true,
        'HealthCheckJsonData' => true,
        'HealthCheckSubEntityResults' => true
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
        'HealthCheckEntity' => 'HealthCheckEntity',
        'HealthCheckName' => 'HealthCheckName',
        'HealthCheckDataVersion' => 'HealthCheckDataVersion',
        'HealthCheckJsonData' => 'HealthCheckJsonData',
        'HealthCheckSubEntityResults' => 'HealthCheckSubEntityResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'HealthCheckEntity' => 'setHealthCheckEntity',
        'HealthCheckName' => 'setHealthCheckName',
        'HealthCheckDataVersion' => 'setHealthCheckDataVersion',
        'HealthCheckJsonData' => 'setHealthCheckJsonData',
        'HealthCheckSubEntityResults' => 'setHealthCheckSubEntityResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'HealthCheckEntity' => 'getHealthCheckEntity',
        'HealthCheckName' => 'getHealthCheckName',
        'HealthCheckDataVersion' => 'getHealthCheckDataVersion',
        'HealthCheckJsonData' => 'getHealthCheckJsonData',
        'HealthCheckSubEntityResults' => 'getHealthCheckSubEntityResults'
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
        $this->setIfExists('HealthCheckEntity', $data ?? [], null);
        $this->setIfExists('HealthCheckName', $data ?? [], null);
        $this->setIfExists('HealthCheckDataVersion', $data ?? [], null);
        $this->setIfExists('HealthCheckJsonData', $data ?? [], null);
        $this->setIfExists('HealthCheckSubEntityResults', $data ?? [], null);
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
     * Gets HealthCheckEntity
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckEntity|null
     */
    public function getHealthCheckEntity()
    {
        if (!isset($this->container['HealthCheckEntity']) || is_null($this->container['HealthCheckEntity'])) {
            return null;
        }
        return $this->container['HealthCheckEntity'];
    }

    /**
     * Sets HealthCheckEntity
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckEntity|null $HealthCheckEntity HealthCheckEntity
     *
     * @return self
     */
    public function setHealthCheckEntity($HealthCheckEntity)
    {
        if (is_null($HealthCheckEntity)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckEntity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckEntity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckEntity'] = $HealthCheckEntity;

        return $this;
    }

    /**
     * Gets HealthCheckName
     *
     * @return string|null
     */
    public function getHealthCheckName()
    {
        if (!isset($this->container['HealthCheckName']) || is_null($this->container['HealthCheckName'])) {
            return null;
        }
        return $this->container['HealthCheckName'];
    }

    /**
     * Sets HealthCheckName
     *
     * @param string|null $HealthCheckName HealthCheckName
     *
     * @return self
     */
    public function setHealthCheckName($HealthCheckName)
    {
        if (is_null($HealthCheckName)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckName'] = $HealthCheckName;

        return $this;
    }

    /**
     * Gets HealthCheckDataVersion
     *
     * @return string|null
     */
    public function getHealthCheckDataVersion()
    {
        if (!isset($this->container['HealthCheckDataVersion']) || is_null($this->container['HealthCheckDataVersion'])) {
            return null;
        }
        return $this->container['HealthCheckDataVersion'];
    }

    /**
     * Sets HealthCheckDataVersion
     *
     * @param string|null $HealthCheckDataVersion HealthCheckDataVersion
     *
     * @return self
     */
    public function setHealthCheckDataVersion($HealthCheckDataVersion)
    {
        if (is_null($HealthCheckDataVersion)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckDataVersion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckDataVersion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckDataVersion'] = $HealthCheckDataVersion;

        return $this;
    }

    /**
     * Gets HealthCheckJsonData
     *
     * @return string|null
     */
    public function getHealthCheckJsonData()
    {
        if (!isset($this->container['HealthCheckJsonData']) || is_null($this->container['HealthCheckJsonData'])) {
            return null;
        }
        return $this->container['HealthCheckJsonData'];
    }

    /**
     * Sets HealthCheckJsonData
     *
     * @param string|null $HealthCheckJsonData HealthCheckJsonData
     *
     * @return self
     */
    public function setHealthCheckJsonData($HealthCheckJsonData)
    {
        if (is_null($HealthCheckJsonData)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckJsonData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckJsonData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckJsonData'] = $HealthCheckJsonData;

        return $this;
    }

    /**
     * Gets HealthCheckSubEntityResults
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckSubEntityData|null
     */
    public function getHealthCheckSubEntityResults()
    {
        if (!isset($this->container['HealthCheckSubEntityResults']) || is_null($this->container['HealthCheckSubEntityResults'])) {
            return null;
        }
        return $this->container['HealthCheckSubEntityResults'];
    }

    /**
     * Sets HealthCheckSubEntityResults
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckSubEntityData|null $HealthCheckSubEntityResults HealthCheckSubEntityResults
     *
     * @return self
     */
    public function setHealthCheckSubEntityResults($HealthCheckSubEntityResults)
    {
        if (is_null($HealthCheckSubEntityResults)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckSubEntityResults');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckSubEntityResults', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckSubEntityResults'] = $HealthCheckSubEntityResults;

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
