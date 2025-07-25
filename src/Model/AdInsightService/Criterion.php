<?php
/**
 * Criterion
 * AdInsightService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\AdInsightService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\AdInsightService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class Criterion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'Type';

    /**
     * Associative array for mapping discriminator values to model class names
     *
     * @var string[]
     */
    public const MAPPINGS = [
        'DeviceCriterion' => 'Microsoft\MsAds\Rest\Model\AdInsightService\DeviceCriterion',
        'LanguageCriterion' => 'Microsoft\MsAds\Rest\Model\AdInsightService\LanguageCriterion',
        'LocationCriterion' => 'Microsoft\MsAds\Rest\Model\AdInsightService\LocationCriterion',
        'NetworkCriterion' => 'Microsoft\MsAds\Rest\Model\AdInsightService\NetworkCriterion',
    ];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Criterion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'LocationId' => 'string',
        'Type' => 'string',
        'Language' => 'string',
        'Network' => '\Microsoft\MsAds\Rest\Model\AdInsightService\NetworkType',
        'DeviceName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'LocationId' => 'int64',
        'Type' => null,
        'Language' => null,
        'Network' => null,
        'DeviceName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'LocationId' => false,
        'Type' => true,
        'Language' => true,
        'Network' => false,
        'DeviceName' => true
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
        'LocationId' => 'LocationId',
        'Type' => 'Type',
        'Language' => 'Language',
        'Network' => 'Network',
        'DeviceName' => 'DeviceName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'LocationId' => 'setLocationId',
        'Type' => 'setType',
        'Language' => 'setLanguage',
        'Network' => 'setNetwork',
        'DeviceName' => 'setDeviceName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'LocationId' => 'getLocationId',
        'Type' => 'getType',
        'Language' => 'getLanguage',
        'Network' => 'getNetwork',
        'DeviceName' => 'getDeviceName'
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
        $this->setIfExists('LocationId', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'DeviceCriterion');
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('Network', $data ?? [], null);
        $this->setIfExists('DeviceName', $data ?? [], null);

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
     * Gets LocationId
     *
     * @return string|null
     */
    public function getLocationId()
    {
        if (!isset($this->container['LocationId']) || is_null($this->container['LocationId'])) {
            return null;
        }
        return $this->container['LocationId'];
    }

    /**
     * Sets LocationId
     *
     * @param string|null $LocationId LocationId
     *
     * @return self
     */
    public function setLocationId($LocationId)
    {
        if (is_null($LocationId)) {
            throw new \InvalidArgumentException('non-nullable LocationId cannot be null');
        }
        $this->container['LocationId'] = $LocationId;

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
     * Gets Network
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\NetworkType|mixed|null
     */
    public function getNetwork()
    {
        if (!isset($this->container['Network']) || is_null($this->container['Network'])) {
            return null;
        }
        if ((is_object($this->container['Network']) || is_string($this->container['Network'])) && method_exists($this->container['Network'], 'getValue')) {
            return $this->container['Network']->getValue();
        }
        return $this->container['Network'];
    }

    /**
     * Sets Network
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\NetworkType|mixed|null $Network Network
     *
     * @return self
     */
    public function setNetwork($Network)
    {
        if (is_null($Network)) {
            throw new \InvalidArgumentException('non-nullable Network cannot be null');
        }
        if (!$Network instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\NetworkType) {
            $Network = new \Microsoft\MsAds\Rest\Model\AdInsightService\NetworkType($Network);
        }
        $this->container['Network'] = $Network;

        return $this;
    }

    /**
     * Gets DeviceName
     *
     * @return string|null
     */
    public function getDeviceName()
    {
        if (!isset($this->container['DeviceName']) || is_null($this->container['DeviceName'])) {
            return null;
        }
        return $this->container['DeviceName'];
    }

    /**
     * Sets DeviceName
     *
     * @param string|null $DeviceName DeviceName
     *
     * @return self
     */
    public function setDeviceName($DeviceName)
    {
        if (is_null($DeviceName)) {
            array_push($this->openAPINullablesSetToNull, 'DeviceName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DeviceName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DeviceName'] = $DeviceName;

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
