<?php
/**
 * GetKeywordIdeasRequest
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

class GetKeywordIdeasRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetKeywordIdeasRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ExpandIdeas' => 'bool',
        'IdeaAttributes' => '\Microsoft\MsAds\Rest\Model\AdInsightService\KeywordIdeaAttribute[]',
        'SearchParameters' => '\Microsoft\MsAds\Rest\Model\AdInsightService\SearchParameter[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ExpandIdeas' => null,
        'IdeaAttributes' => null,
        'SearchParameters' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ExpandIdeas' => true,
        'IdeaAttributes' => true,
        'SearchParameters' => true
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
        'ExpandIdeas' => 'ExpandIdeas',
        'IdeaAttributes' => 'IdeaAttributes',
        'SearchParameters' => 'SearchParameters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ExpandIdeas' => 'setExpandIdeas',
        'IdeaAttributes' => 'setIdeaAttributes',
        'SearchParameters' => 'setSearchParameters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ExpandIdeas' => 'getExpandIdeas',
        'IdeaAttributes' => 'getIdeaAttributes',
        'SearchParameters' => 'getSearchParameters'
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
        $this->setIfExists('ExpandIdeas', $data ?? [], null);
        $this->setIfExists('IdeaAttributes', $data ?? [], null);
        $this->setIfExists('SearchParameters', $data ?? [], null);
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
     * Gets ExpandIdeas
     *
     * @return bool|null
     */
    public function getExpandIdeas()
    {
        if (!isset($this->container['ExpandIdeas']) || is_null($this->container['ExpandIdeas'])) {
            return null;
        }
        return $this->container['ExpandIdeas'];
    }

    /**
     * Sets ExpandIdeas
     *
     * @param bool|null $ExpandIdeas ExpandIdeas
     *
     * @return self
     */
    public function setExpandIdeas($ExpandIdeas)
    {
        if (is_null($ExpandIdeas)) {
            array_push($this->openAPINullablesSetToNull, 'ExpandIdeas');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExpandIdeas', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExpandIdeas'] = $ExpandIdeas;

        return $this;
    }

    /**
     * Gets IdeaAttributes
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\KeywordIdeaAttribute[]|mixed|null
     */
    public function getIdeaAttributes()
    {
        if (!isset($this->container['IdeaAttributes']) || is_null($this->container['IdeaAttributes'])) {
            return null;
        }
        $values = [];
        if (is_array($this->container['IdeaAttributes'])) {
            foreach ($this->container['IdeaAttributes'] as $IdeaAttributesItem) {
                if ((is_object($IdeaAttributesItem) || is_string($IdeaAttributesItem)) && method_exists($IdeaAttributesItem, 'getValue')) {
                    $values[] = $IdeaAttributesItem->getValue();
                }
            }
        }
        if (count($values) > 0) {
            return $values;
        }
        return $this->container['IdeaAttributes'];
    }

    /**
     * Sets IdeaAttributes
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\KeywordIdeaAttribute[]|mixed|null $IdeaAttributes IdeaAttributes
     *
     * @return self
     */
    public function setIdeaAttributes($IdeaAttributes)
    {
        if (is_null($IdeaAttributes)) {
            array_push($this->openAPINullablesSetToNull, 'IdeaAttributes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IdeaAttributes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_array($IdeaAttributes)) {
            $IdeaAttributes = [$IdeaAttributes];
        }
        foreach ($IdeaAttributes as $key => $IdeaAttributesItem) {
            if (!$IdeaAttributesItem instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\KeywordIdeaAttribute) {
                $IdeaAttributes[$key] = new \Microsoft\MsAds\Rest\Model\AdInsightService\KeywordIdeaAttribute($IdeaAttributesItem);
            }
        }
        $this->container['IdeaAttributes'] = $IdeaAttributes;

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
