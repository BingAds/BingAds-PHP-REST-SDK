<?php
/**
 * CategoryClickCoverageReportFilter
 * ReportingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\ReportingService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\ReportingService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class CategoryClickCoverageReportFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CategoryClickCoverageReportFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CountryCode' => 'string[]',
        'L1Vertical' => 'string[]',
        'L2Vertical' => 'string[]',
        'L3Vertical' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'CountryCode' => null,
        'L1Vertical' => null,
        'L2Vertical' => null,
        'L3Vertical' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CountryCode' => true,
        'L1Vertical' => true,
        'L2Vertical' => true,
        'L3Vertical' => true
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
        'CountryCode' => 'CountryCode',
        'L1Vertical' => 'L1Vertical',
        'L2Vertical' => 'L2Vertical',
        'L3Vertical' => 'L3Vertical'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CountryCode' => 'setCountryCode',
        'L1Vertical' => 'setL1Vertical',
        'L2Vertical' => 'setL2Vertical',
        'L3Vertical' => 'setL3Vertical'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CountryCode' => 'getCountryCode',
        'L1Vertical' => 'getL1Vertical',
        'L2Vertical' => 'getL2Vertical',
        'L3Vertical' => 'getL3Vertical'
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
        $this->setIfExists('CountryCode', $data ?? [], null);
        $this->setIfExists('L1Vertical', $data ?? [], null);
        $this->setIfExists('L2Vertical', $data ?? [], null);
        $this->setIfExists('L3Vertical', $data ?? [], null);
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
     * Gets CountryCode
     *
     * @return string[]|null
     */
    public function getCountryCode()
    {
        if (!isset($this->container['CountryCode']) || is_null($this->container['CountryCode'])) {
            return null;
        }
        return $this->container['CountryCode'];
    }

    /**
     * Sets CountryCode
     *
     * @param string[]|null $CountryCode CountryCode
     *
     * @return self
     */
    public function setCountryCode($CountryCode)
    {
        if (is_null($CountryCode)) {
            array_push($this->openAPINullablesSetToNull, 'CountryCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CountryCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CountryCode'] = $CountryCode;

        return $this;
    }

    /**
     * Gets L1Vertical
     *
     * @return string[]|null
     */
    public function getL1Vertical()
    {
        if (!isset($this->container['L1Vertical']) || is_null($this->container['L1Vertical'])) {
            return null;
        }
        return $this->container['L1Vertical'];
    }

    /**
     * Sets L1Vertical
     *
     * @param string[]|null $L1Vertical L1Vertical
     *
     * @return self
     */
    public function setL1Vertical($L1Vertical)
    {
        if (is_null($L1Vertical)) {
            array_push($this->openAPINullablesSetToNull, 'L1Vertical');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('L1Vertical', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['L1Vertical'] = $L1Vertical;

        return $this;
    }

    /**
     * Gets L2Vertical
     *
     * @return string[]|null
     */
    public function getL2Vertical()
    {
        if (!isset($this->container['L2Vertical']) || is_null($this->container['L2Vertical'])) {
            return null;
        }
        return $this->container['L2Vertical'];
    }

    /**
     * Sets L2Vertical
     *
     * @param string[]|null $L2Vertical L2Vertical
     *
     * @return self
     */
    public function setL2Vertical($L2Vertical)
    {
        if (is_null($L2Vertical)) {
            array_push($this->openAPINullablesSetToNull, 'L2Vertical');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('L2Vertical', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['L2Vertical'] = $L2Vertical;

        return $this;
    }

    /**
     * Gets L3Vertical
     *
     * @return string[]|null
     */
    public function getL3Vertical()
    {
        if (!isset($this->container['L3Vertical']) || is_null($this->container['L3Vertical'])) {
            return null;
        }
        return $this->container['L3Vertical'];
    }

    /**
     * Sets L3Vertical
     *
     * @param string[]|null $L3Vertical L3Vertical
     *
     * @return self
     */
    public function setL3Vertical($L3Vertical)
    {
        if (is_null($L3Vertical)) {
            array_push($this->openAPINullablesSetToNull, 'L3Vertical');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('L3Vertical', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['L3Vertical'] = $L3Vertical;

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
