<?php
/**
 * SearchCustomersRequest
 * CustomerManagementService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CustomerManagementService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CustomerManagementService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class SearchCustomersRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SearchCustomersRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Predicates' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\Predicate[]',
        'DateRange' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\DateRange',
        'Ordering' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\OrderBy[]',
        'PageInfo' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\Paging'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Predicates' => null,
        'DateRange' => null,
        'Ordering' => null,
        'PageInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Predicates' => true,
        'DateRange' => true,
        'Ordering' => true,
        'PageInfo' => true
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
        'Predicates' => 'Predicates',
        'DateRange' => 'DateRange',
        'Ordering' => 'Ordering',
        'PageInfo' => 'PageInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Predicates' => 'setPredicates',
        'DateRange' => 'setDateRange',
        'Ordering' => 'setOrdering',
        'PageInfo' => 'setPageInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Predicates' => 'getPredicates',
        'DateRange' => 'getDateRange',
        'Ordering' => 'getOrdering',
        'PageInfo' => 'getPageInfo'
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
        $this->setIfExists('Predicates', $data ?? [], null);
        $this->setIfExists('DateRange', $data ?? [], null);
        $this->setIfExists('Ordering', $data ?? [], null);
        $this->setIfExists('PageInfo', $data ?? [], null);
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
     * Gets Predicates
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\Predicate[]|null
     */
    public function getPredicates()
    {
        if (!isset($this->container['Predicates']) || is_null($this->container['Predicates'])) {
            return null;
        }
        return $this->container['Predicates'];
    }

    /**
     * Sets Predicates
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\Predicate[]|null $Predicates Predicates
     *
     * @return self
     */
    public function setPredicates($Predicates)
    {
        if (is_null($Predicates)) {
            array_push($this->openAPINullablesSetToNull, 'Predicates');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Predicates', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Predicates'] = $Predicates;

        return $this;
    }

    /**
     * Gets DateRange
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\DateRange|null
     */
    public function getDateRange()
    {
        if (!isset($this->container['DateRange']) || is_null($this->container['DateRange'])) {
            return null;
        }
        return $this->container['DateRange'];
    }

    /**
     * Sets DateRange
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\DateRange|null $DateRange DateRange
     *
     * @return self
     */
    public function setDateRange($DateRange)
    {
        if (is_null($DateRange)) {
            array_push($this->openAPINullablesSetToNull, 'DateRange');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DateRange', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DateRange'] = $DateRange;

        return $this;
    }

    /**
     * Gets Ordering
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\OrderBy[]|null
     */
    public function getOrdering()
    {
        if (!isset($this->container['Ordering']) || is_null($this->container['Ordering'])) {
            return null;
        }
        return $this->container['Ordering'];
    }

    /**
     * Sets Ordering
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\OrderBy[]|null $Ordering Ordering
     *
     * @return self
     */
    public function setOrdering($Ordering)
    {
        if (is_null($Ordering)) {
            array_push($this->openAPINullablesSetToNull, 'Ordering');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Ordering', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Ordering'] = $Ordering;

        return $this;
    }

    /**
     * Gets PageInfo
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\Paging|null
     */
    public function getPageInfo()
    {
        if (!isset($this->container['PageInfo']) || is_null($this->container['PageInfo'])) {
            return null;
        }
        return $this->container['PageInfo'];
    }

    /**
     * Sets PageInfo
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\Paging|null $PageInfo PageInfo
     *
     * @return self
     */
    public function setPageInfo($PageInfo)
    {
        if (is_null($PageInfo)) {
            array_push($this->openAPINullablesSetToNull, 'PageInfo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PageInfo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PageInfo'] = $PageInfo;

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
