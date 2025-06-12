<?php
/**
 * Address
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

class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'StreetAddress' => 'string',
        'StreetAddress2' => 'string',
        'CityName' => 'string',
        'ProvinceCode' => 'string',
        'ProvinceName' => 'string',
        'PostalCode' => 'string',
        'CountryCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'StreetAddress' => null,
        'StreetAddress2' => null,
        'CityName' => null,
        'ProvinceCode' => null,
        'ProvinceName' => null,
        'PostalCode' => null,
        'CountryCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'StreetAddress' => true,
        'StreetAddress2' => true,
        'CityName' => true,
        'ProvinceCode' => true,
        'ProvinceName' => true,
        'PostalCode' => true,
        'CountryCode' => true
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
        'StreetAddress' => 'StreetAddress',
        'StreetAddress2' => 'StreetAddress2',
        'CityName' => 'CityName',
        'ProvinceCode' => 'ProvinceCode',
        'ProvinceName' => 'ProvinceName',
        'PostalCode' => 'PostalCode',
        'CountryCode' => 'CountryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'StreetAddress' => 'setStreetAddress',
        'StreetAddress2' => 'setStreetAddress2',
        'CityName' => 'setCityName',
        'ProvinceCode' => 'setProvinceCode',
        'ProvinceName' => 'setProvinceName',
        'PostalCode' => 'setPostalCode',
        'CountryCode' => 'setCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'StreetAddress' => 'getStreetAddress',
        'StreetAddress2' => 'getStreetAddress2',
        'CityName' => 'getCityName',
        'ProvinceCode' => 'getProvinceCode',
        'ProvinceName' => 'getProvinceName',
        'PostalCode' => 'getPostalCode',
        'CountryCode' => 'getCountryCode'
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
        $this->setIfExists('StreetAddress', $data ?? [], null);
        $this->setIfExists('StreetAddress2', $data ?? [], null);
        $this->setIfExists('CityName', $data ?? [], null);
        $this->setIfExists('ProvinceCode', $data ?? [], null);
        $this->setIfExists('ProvinceName', $data ?? [], null);
        $this->setIfExists('PostalCode', $data ?? [], null);
        $this->setIfExists('CountryCode', $data ?? [], null);
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
     * Gets StreetAddress
     *
     * @return string|null
     */
    public function getStreetAddress()
    {
        if (!isset($this->container['StreetAddress']) || is_null($this->container['StreetAddress'])) {
            return null;
        }
        return $this->container['StreetAddress'];
    }

    /**
     * Sets StreetAddress
     *
     * @param string|null $StreetAddress StreetAddress
     *
     * @return self
     */
    public function setStreetAddress($StreetAddress)
    {
        if (is_null($StreetAddress)) {
            array_push($this->openAPINullablesSetToNull, 'StreetAddress');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StreetAddress', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StreetAddress'] = $StreetAddress;

        return $this;
    }

    /**
     * Gets StreetAddress2
     *
     * @return string|null
     */
    public function getStreetAddress2()
    {
        if (!isset($this->container['StreetAddress2']) || is_null($this->container['StreetAddress2'])) {
            return null;
        }
        return $this->container['StreetAddress2'];
    }

    /**
     * Sets StreetAddress2
     *
     * @param string|null $StreetAddress2 StreetAddress2
     *
     * @return self
     */
    public function setStreetAddress2($StreetAddress2)
    {
        if (is_null($StreetAddress2)) {
            array_push($this->openAPINullablesSetToNull, 'StreetAddress2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StreetAddress2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StreetAddress2'] = $StreetAddress2;

        return $this;
    }

    /**
     * Gets CityName
     *
     * @return string|null
     */
    public function getCityName()
    {
        if (!isset($this->container['CityName']) || is_null($this->container['CityName'])) {
            return null;
        }
        return $this->container['CityName'];
    }

    /**
     * Sets CityName
     *
     * @param string|null $CityName CityName
     *
     * @return self
     */
    public function setCityName($CityName)
    {
        if (is_null($CityName)) {
            array_push($this->openAPINullablesSetToNull, 'CityName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CityName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CityName'] = $CityName;

        return $this;
    }

    /**
     * Gets ProvinceCode
     *
     * @return string|null
     */
    public function getProvinceCode()
    {
        if (!isset($this->container['ProvinceCode']) || is_null($this->container['ProvinceCode'])) {
            return null;
        }
        return $this->container['ProvinceCode'];
    }

    /**
     * Sets ProvinceCode
     *
     * @param string|null $ProvinceCode ProvinceCode
     *
     * @return self
     */
    public function setProvinceCode($ProvinceCode)
    {
        if (is_null($ProvinceCode)) {
            array_push($this->openAPINullablesSetToNull, 'ProvinceCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ProvinceCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ProvinceCode'] = $ProvinceCode;

        return $this;
    }

    /**
     * Gets ProvinceName
     *
     * @return string|null
     */
    public function getProvinceName()
    {
        if (!isset($this->container['ProvinceName']) || is_null($this->container['ProvinceName'])) {
            return null;
        }
        return $this->container['ProvinceName'];
    }

    /**
     * Sets ProvinceName
     *
     * @param string|null $ProvinceName ProvinceName
     *
     * @return self
     */
    public function setProvinceName($ProvinceName)
    {
        if (is_null($ProvinceName)) {
            array_push($this->openAPINullablesSetToNull, 'ProvinceName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ProvinceName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ProvinceName'] = $ProvinceName;

        return $this;
    }

    /**
     * Gets PostalCode
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        if (!isset($this->container['PostalCode']) || is_null($this->container['PostalCode'])) {
            return null;
        }
        return $this->container['PostalCode'];
    }

    /**
     * Sets PostalCode
     *
     * @param string|null $PostalCode PostalCode
     *
     * @return self
     */
    public function setPostalCode($PostalCode)
    {
        if (is_null($PostalCode)) {
            array_push($this->openAPINullablesSetToNull, 'PostalCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PostalCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PostalCode'] = $PostalCode;

        return $this;
    }

    /**
     * Gets CountryCode
     *
     * @return string|null
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
     * @param string|null $CountryCode CountryCode
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
