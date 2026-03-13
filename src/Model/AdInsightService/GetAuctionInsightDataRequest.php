<?php
/**
 * GetAuctionInsightDataRequest
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

class GetAuctionInsightDataRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetAuctionInsightDataRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'EntityType' => '\Microsoft\MsAds\Rest\Model\AdInsightService\EntityType',
        'EntityIds' => 'string[]',
        'SearchParameters' => '\Microsoft\MsAds\Rest\Model\AdInsightService\SearchParameter[]',
        'ReturnAdditionalFields' => '\Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightKpiAdditionalField'
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
        'EntityIds' => 'int64',
        'SearchParameters' => null,
        'ReturnAdditionalFields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'EntityType' => false,
        'EntityIds' => true,
        'SearchParameters' => true,
        'ReturnAdditionalFields' => false
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
        'EntityIds' => 'EntityIds',
        'SearchParameters' => 'SearchParameters',
        'ReturnAdditionalFields' => 'ReturnAdditionalFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'EntityType' => 'setEntityType',
        'EntityIds' => 'setEntityIds',
        'SearchParameters' => 'setSearchParameters',
        'ReturnAdditionalFields' => 'setReturnAdditionalFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'EntityType' => 'getEntityType',
        'EntityIds' => 'getEntityIds',
        'SearchParameters' => 'getSearchParameters',
        'ReturnAdditionalFields' => 'getReturnAdditionalFields'
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
        $this->setIfExists('EntityIds', $data ?? [], null);
        $this->setIfExists('SearchParameters', $data ?? [], null);
        $this->setIfExists('ReturnAdditionalFields', $data ?? [], null);
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
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\EntityType|mixed|null
     */
    public function getEntityType()
    {
        if (!isset($this->container['EntityType']) || is_null($this->container['EntityType'])) {
            return null;
        }
        if ((is_object($this->container['EntityType']) || is_string($this->container['EntityType'])) && method_exists($this->container['EntityType'], 'getValue')) {
            return $this->container['EntityType']->getValue();
        }
        return $this->container['EntityType'];
    }

    /**
     * Sets EntityType
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\EntityType|mixed|null $EntityType EntityType
     *
     * @return self
     */
    public function setEntityType($EntityType)
    {
        if (is_null($EntityType)) {
            throw new \InvalidArgumentException('non-nullable EntityType cannot be null');
        }
        if (!$EntityType instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\EntityType) {
            $EntityType = new \Microsoft\MsAds\Rest\Model\AdInsightService\EntityType($EntityType);
        }
        $this->container['EntityType'] = $EntityType;

        return $this;
    }

    /**
     * Gets EntityIds
     *
     * @return string[]|null
     */
    public function getEntityIds()
    {
        if (!isset($this->container['EntityIds']) || is_null($this->container['EntityIds'])) {
            return null;
        }
        return $this->container['EntityIds'];
    }

    /**
     * Sets EntityIds
     *
     * @param string[]|null $EntityIds EntityIds
     *
     * @return self
     */
    public function setEntityIds($EntityIds)
    {
        if (is_null($EntityIds)) {
            array_push($this->openAPINullablesSetToNull, 'EntityIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EntityIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EntityIds'] = $EntityIds;

        return $this;
    }

    /**
     * Gets SearchParameters
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SearchParameter[]|null
     */
    public function getSearchParameters()
    {
        if (!isset($this->container['SearchParameters']) || is_null($this->container['SearchParameters'])) {
            return null;
        }
        return $this->container['SearchParameters'];
    }

    /**
     * Sets SearchParameters
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\SearchParameter[]|null $SearchParameters SearchParameters
     *
     * @return self
     */
    public function setSearchParameters($SearchParameters)
    {
        if (is_null($SearchParameters)) {
            array_push($this->openAPINullablesSetToNull, 'SearchParameters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SearchParameters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SearchParameters'] = $SearchParameters;

        return $this;
    }

    /**
     * Gets ReturnAdditionalFields
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightKpiAdditionalField|mixed|null
     */
    public function getReturnAdditionalFields()
    {
        if (!isset($this->container['ReturnAdditionalFields']) || is_null($this->container['ReturnAdditionalFields'])) {
            return null;
        }
        if ((is_object($this->container['ReturnAdditionalFields']) || is_string($this->container['ReturnAdditionalFields'])) && method_exists($this->container['ReturnAdditionalFields'], 'getValue')) {
            return $this->container['ReturnAdditionalFields']->getValue();
        }
        return $this->container['ReturnAdditionalFields'];
    }

    /**
     * Sets ReturnAdditionalFields
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightKpiAdditionalField|mixed|null $ReturnAdditionalFields ReturnAdditionalFields
     *
     * @return self
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        if (is_null($ReturnAdditionalFields)) {
            throw new \InvalidArgumentException('non-nullable ReturnAdditionalFields cannot be null');
        }
        if (!$ReturnAdditionalFields instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightKpiAdditionalField) {
            $ReturnAdditionalFields = new \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightKpiAdditionalField($ReturnAdditionalFields);
        }
        $this->container['ReturnAdditionalFields'] = $ReturnAdditionalFields;

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
