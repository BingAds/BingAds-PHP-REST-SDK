<?php
/**
 * DistributeCouponsRequest
 * CustomerBillingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CustomerBillingService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CustomerBillingService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class DistributeCouponsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DistributeCouponsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AccountIds' => 'int[]',
        'ClassName' => 'string',
        'FeatureId' => 'int',
        'SendNotification' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'AccountIds' => 'int32',
        'ClassName' => null,
        'FeatureId' => 'int32',
        'SendNotification' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AccountIds' => true,
        'ClassName' => true,
        'FeatureId' => true,
        'SendNotification' => false
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
        'AccountIds' => 'AccountIds',
        'ClassName' => 'ClassName',
        'FeatureId' => 'FeatureId',
        'SendNotification' => 'SendNotification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AccountIds' => 'setAccountIds',
        'ClassName' => 'setClassName',
        'FeatureId' => 'setFeatureId',
        'SendNotification' => 'setSendNotification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AccountIds' => 'getAccountIds',
        'ClassName' => 'getClassName',
        'FeatureId' => 'getFeatureId',
        'SendNotification' => 'getSendNotification'
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
        $this->setIfExists('AccountIds', $data ?? [], null);
        $this->setIfExists('ClassName', $data ?? [], null);
        $this->setIfExists('FeatureId', $data ?? [], null);
        $this->setIfExists('SendNotification', $data ?? [], null);
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
     * Gets AccountIds
     *
     * @return int[]|null
     */
    public function getAccountIds()
    {
        if (!isset($this->container['AccountIds']) || is_null($this->container['AccountIds'])) {
            return null;
        }
        return $this->container['AccountIds'];
    }

    /**
     * Sets AccountIds
     *
     * @param int[]|null $AccountIds AccountIds
     *
     * @return self
     */
    public function setAccountIds($AccountIds)
    {
        if (is_null($AccountIds)) {
            array_push($this->openAPINullablesSetToNull, 'AccountIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AccountIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AccountIds'] = $AccountIds;

        return $this;
    }

    /**
     * Gets ClassName
     *
     * @return string|null
     */
    public function getClassName()
    {
        if (!isset($this->container['ClassName']) || is_null($this->container['ClassName'])) {
            return null;
        }
        return $this->container['ClassName'];
    }

    /**
     * Sets ClassName
     *
     * @param string|null $ClassName ClassName
     *
     * @return self
     */
    public function setClassName($ClassName)
    {
        if (is_null($ClassName)) {
            array_push($this->openAPINullablesSetToNull, 'ClassName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ClassName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ClassName'] = $ClassName;

        return $this;
    }

    /**
     * Gets FeatureId
     *
     * @return int|null
     */
    public function getFeatureId()
    {
        if (!isset($this->container['FeatureId']) || is_null($this->container['FeatureId'])) {
            return null;
        }
        return $this->container['FeatureId'];
    }

    /**
     * Sets FeatureId
     *
     * @param int|null $FeatureId FeatureId
     *
     * @return self
     */
    public function setFeatureId($FeatureId)
    {
        if (is_null($FeatureId)) {
            array_push($this->openAPINullablesSetToNull, 'FeatureId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FeatureId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FeatureId'] = $FeatureId;

        return $this;
    }

    /**
     * Gets SendNotification
     *
     * @return bool|null
     */
    public function getSendNotification()
    {
        if (!isset($this->container['SendNotification']) || is_null($this->container['SendNotification'])) {
            return null;
        }
        return $this->container['SendNotification'];
    }

    /**
     * Sets SendNotification
     *
     * @param bool|null $SendNotification SendNotification
     *
     * @return self
     */
    public function setSendNotification($SendNotification)
    {
        if (is_null($SendNotification)) {
            throw new \InvalidArgumentException('non-nullable SendNotification cannot be null');
        }
        $this->container['SendNotification'] = $SendNotification;

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
