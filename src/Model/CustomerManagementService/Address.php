<?php
/**
 * Address
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
        'City' => 'string',
        'CountryCode' => 'string',
        'Id' => 'string',
        'Line1' => 'string',
        'Line2' => 'string',
        'Line3' => 'string',
        'Line4' => 'string',
        'PostalCode' => 'string',
        'StateOrProvince' => 'string',
        'TimeStamp' => 'string',
        'BusinessName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'City' => null,
        'CountryCode' => null,
        'Id' => 'int64',
        'Line1' => null,
        'Line2' => null,
        'Line3' => null,
        'Line4' => null,
        'PostalCode' => null,
        'StateOrProvince' => null,
        'TimeStamp' => 'byte',
        'BusinessName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'City' => true,
        'CountryCode' => true,
        'Id' => true,
        'Line1' => true,
        'Line2' => true,
        'Line3' => true,
        'Line4' => true,
        'PostalCode' => true,
        'StateOrProvince' => true,
        'TimeStamp' => true,
        'BusinessName' => true
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
        'City' => 'City',
        'CountryCode' => 'CountryCode',
        'Id' => 'Id',
        'Line1' => 'Line1',
        'Line2' => 'Line2',
        'Line3' => 'Line3',
        'Line4' => 'Line4',
        'PostalCode' => 'PostalCode',
        'StateOrProvince' => 'StateOrProvince',
        'TimeStamp' => 'TimeStamp',
        'BusinessName' => 'BusinessName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'City' => 'setCity',
        'CountryCode' => 'setCountryCode',
        'Id' => 'setId',
        'Line1' => 'setLine1',
        'Line2' => 'setLine2',
        'Line3' => 'setLine3',
        'Line4' => 'setLine4',
        'PostalCode' => 'setPostalCode',
        'StateOrProvince' => 'setStateOrProvince',
        'TimeStamp' => 'setTimeStamp',
        'BusinessName' => 'setBusinessName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'City' => 'getCity',
        'CountryCode' => 'getCountryCode',
        'Id' => 'getId',
        'Line1' => 'getLine1',
        'Line2' => 'getLine2',
        'Line3' => 'getLine3',
        'Line4' => 'getLine4',
        'PostalCode' => 'getPostalCode',
        'StateOrProvince' => 'getStateOrProvince',
        'TimeStamp' => 'getTimeStamp',
        'BusinessName' => 'getBusinessName'
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
        $this->setIfExists('City', $data ?? [], null);
        $this->setIfExists('CountryCode', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Line1', $data ?? [], null);
        $this->setIfExists('Line2', $data ?? [], null);
        $this->setIfExists('Line3', $data ?? [], null);
        $this->setIfExists('Line4', $data ?? [], null);
        $this->setIfExists('PostalCode', $data ?? [], null);
        $this->setIfExists('StateOrProvince', $data ?? [], null);
        $this->setIfExists('TimeStamp', $data ?? [], null);
        $this->setIfExists('BusinessName', $data ?? [], null);
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
     * Gets City
     *
     * @return string|null
     */
    public function getCity()
    {
        if (!isset($this->container['City']) || is_null($this->container['City'])) {
            return null;
        }
        return $this->container['City'];
    }

    /**
     * Sets City
     *
     * @param string|null $City City
     *
     * @return self
     */
    public function setCity($City)
    {
        if (is_null($City)) {
            array_push($this->openAPINullablesSetToNull, 'City');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('City', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['City'] = $City;

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
     * Gets Line1
     *
     * @return string|null
     */
    public function getLine1()
    {
        if (!isset($this->container['Line1']) || is_null($this->container['Line1'])) {
            return null;
        }
        return $this->container['Line1'];
    }

    /**
     * Sets Line1
     *
     * @param string|null $Line1 Line1
     *
     * @return self
     */
    public function setLine1($Line1)
    {
        if (is_null($Line1)) {
            array_push($this->openAPINullablesSetToNull, 'Line1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Line1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Line1'] = $Line1;

        return $this;
    }

    /**
     * Gets Line2
     *
     * @return string|null
     */
    public function getLine2()
    {
        if (!isset($this->container['Line2']) || is_null($this->container['Line2'])) {
            return null;
        }
        return $this->container['Line2'];
    }

    /**
     * Sets Line2
     *
     * @param string|null $Line2 Line2
     *
     * @return self
     */
    public function setLine2($Line2)
    {
        if (is_null($Line2)) {
            array_push($this->openAPINullablesSetToNull, 'Line2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Line2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Line2'] = $Line2;

        return $this;
    }

    /**
     * Gets Line3
     *
     * @return string|null
     */
    public function getLine3()
    {
        if (!isset($this->container['Line3']) || is_null($this->container['Line3'])) {
            return null;
        }
        return $this->container['Line3'];
    }

    /**
     * Sets Line3
     *
     * @param string|null $Line3 Line3
     *
     * @return self
     */
    public function setLine3($Line3)
    {
        if (is_null($Line3)) {
            array_push($this->openAPINullablesSetToNull, 'Line3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Line3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Line3'] = $Line3;

        return $this;
    }

    /**
     * Gets Line4
     *
     * @return string|null
     */
    public function getLine4()
    {
        if (!isset($this->container['Line4']) || is_null($this->container['Line4'])) {
            return null;
        }
        return $this->container['Line4'];
    }

    /**
     * Sets Line4
     *
     * @param string|null $Line4 Line4
     *
     * @return self
     */
    public function setLine4($Line4)
    {
        if (is_null($Line4)) {
            array_push($this->openAPINullablesSetToNull, 'Line4');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Line4', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Line4'] = $Line4;

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
     * Gets StateOrProvince
     *
     * @return string|null
     */
    public function getStateOrProvince()
    {
        if (!isset($this->container['StateOrProvince']) || is_null($this->container['StateOrProvince'])) {
            return null;
        }
        return $this->container['StateOrProvince'];
    }

    /**
     * Sets StateOrProvince
     *
     * @param string|null $StateOrProvince StateOrProvince
     *
     * @return self
     */
    public function setStateOrProvince($StateOrProvince)
    {
        if (is_null($StateOrProvince)) {
            array_push($this->openAPINullablesSetToNull, 'StateOrProvince');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StateOrProvince', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StateOrProvince'] = $StateOrProvince;

        return $this;
    }

    /**
     * Gets TimeStamp
     *
     * @return string|null
     */
    public function getTimeStamp()
    {
        if (!isset($this->container['TimeStamp']) || is_null($this->container['TimeStamp'])) {
            return null;
        }
        return $this->container['TimeStamp'];
    }

    /**
     * Sets TimeStamp
     *
     * @param string|null $TimeStamp TimeStamp
     *
     * @return self
     */
    public function setTimeStamp($TimeStamp)
    {
        if (is_null($TimeStamp)) {
            array_push($this->openAPINullablesSetToNull, 'TimeStamp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TimeStamp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TimeStamp'] = $TimeStamp;

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
