<?php
/**
 * GetSharedEntityAssociationsBySharedEntityIdsRequest
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

class GetSharedEntityAssociationsBySharedEntityIdsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetSharedEntityAssociationsBySharedEntityIdsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'EntityType' => 'string',
        'SharedEntityIds' => 'string[]',
        'SharedEntityType' => 'string',
        'SharedEntityScope' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'EntityType' => null,
        'SharedEntityIds' => 'int64',
        'SharedEntityType' => null,
        'SharedEntityScope' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'EntityType' => true,
        'SharedEntityIds' => true,
        'SharedEntityType' => true,
        'SharedEntityScope' => false
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
        'EntityType' => 'EntityType',
        'SharedEntityIds' => 'SharedEntityIds',
        'SharedEntityType' => 'SharedEntityType',
        'SharedEntityScope' => 'SharedEntityScope'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'EntityType' => 'setEntityType',
        'SharedEntityIds' => 'setSharedEntityIds',
        'SharedEntityType' => 'setSharedEntityType',
        'SharedEntityScope' => 'setSharedEntityScope'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'EntityType' => 'getEntityType',
        'SharedEntityIds' => 'getSharedEntityIds',
        'SharedEntityType' => 'getSharedEntityType',
        'SharedEntityScope' => 'getSharedEntityScope'
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
        $this->setIfExists('EntityType', $data ?? [], null);
        $this->setIfExists('SharedEntityIds', $data ?? [], null);
        $this->setIfExists('SharedEntityType', $data ?? [], null);
        $this->setIfExists('SharedEntityScope', $data ?? [], null);
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
     * Gets EntityType
     *
     * @return string|null
     */
    public function getEntityType()
    {
        if (!isset($this->container['EntityType']) || is_null($this->container['EntityType'])) {
            return null;
        }
        return $this->container['EntityType'];
    }

    /**
     * Sets EntityType
     *
     * @param string|null $EntityType EntityType
     *
     * @return self
     */
    public function setEntityType($EntityType)
    {
        if (is_null($EntityType)) {
            array_push($this->openAPINullablesSetToNull, 'EntityType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EntityType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EntityType'] = $EntityType;

        return $this;
    }

    /**
     * Gets SharedEntityIds
     *
     * @return string[]|null
     */
    public function getSharedEntityIds()
    {
        if (!isset($this->container['SharedEntityIds']) || is_null($this->container['SharedEntityIds'])) {
            return null;
        }
        return $this->container['SharedEntityIds'];
    }

    /**
     * Sets SharedEntityIds
     *
     * @param string[]|null $SharedEntityIds SharedEntityIds
     *
     * @return self
     */
    public function setSharedEntityIds($SharedEntityIds)
    {
        if (is_null($SharedEntityIds)) {
            array_push($this->openAPINullablesSetToNull, 'SharedEntityIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SharedEntityIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SharedEntityIds'] = $SharedEntityIds;

        return $this;
    }

    /**
     * Gets SharedEntityType
     *
     * @return string|null
     */
    public function getSharedEntityType()
    {
        if (!isset($this->container['SharedEntityType']) || is_null($this->container['SharedEntityType'])) {
            return null;
        }
        return $this->container['SharedEntityType'];
    }

    /**
     * Sets SharedEntityType
     *
     * @param string|null $SharedEntityType SharedEntityType
     *
     * @return self
     */
    public function setSharedEntityType($SharedEntityType)
    {
        if (is_null($SharedEntityType)) {
            array_push($this->openAPINullablesSetToNull, 'SharedEntityType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SharedEntityType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SharedEntityType'] = $SharedEntityType;

        return $this;
    }

    /**
     * Gets SharedEntityScope
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope|mixed|null
     */
    public function getSharedEntityScope()
    {
        if (!isset($this->container['SharedEntityScope']) || is_null($this->container['SharedEntityScope'])) {
            return null;
        }
        if ((is_object($this->container['SharedEntityScope']) || is_string($this->container['SharedEntityScope'])) && method_exists($this->container['SharedEntityScope'], 'getValue')) {
            return $this->container['SharedEntityScope']->getValue();
        }
        return $this->container['SharedEntityScope'];
    }

    /**
     * Sets SharedEntityScope
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope|mixed|null $SharedEntityScope SharedEntityScope
     *
     * @return self
     */
    public function setSharedEntityScope($SharedEntityScope)
    {
        if (is_null($SharedEntityScope)) {
            throw new \InvalidArgumentException('non-nullable SharedEntityScope cannot be null');
        }
        if (!$SharedEntityScope instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope) {
            $SharedEntityScope = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope($SharedEntityScope);
        }
        $this->container['SharedEntityScope'] = $SharedEntityScope;

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
