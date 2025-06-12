<?php
/**
 * ContactInfo
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

class ContactInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ContactInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Address' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\Address',
        'ContactByPhone' => 'bool',
        'ContactByPostalMail' => 'bool',
        'Email' => 'string',
        'EmailFormat' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\EmailFormat',
        'Fax' => 'string',
        'HomePhone' => 'string',
        'Id' => 'string',
        'Mobile' => 'string',
        'Phone1' => 'string',
        'Phone2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Address' => null,
        'ContactByPhone' => null,
        'ContactByPostalMail' => null,
        'Email' => null,
        'EmailFormat' => null,
        'Fax' => null,
        'HomePhone' => null,
        'Id' => 'int64',
        'Mobile' => null,
        'Phone1' => null,
        'Phone2' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Address' => true,
        'ContactByPhone' => true,
        'ContactByPostalMail' => true,
        'Email' => true,
        'EmailFormat' => false,
        'Fax' => true,
        'HomePhone' => true,
        'Id' => true,
        'Mobile' => true,
        'Phone1' => true,
        'Phone2' => true
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
        'Address' => 'Address',
        'ContactByPhone' => 'ContactByPhone',
        'ContactByPostalMail' => 'ContactByPostalMail',
        'Email' => 'Email',
        'EmailFormat' => 'EmailFormat',
        'Fax' => 'Fax',
        'HomePhone' => 'HomePhone',
        'Id' => 'Id',
        'Mobile' => 'Mobile',
        'Phone1' => 'Phone1',
        'Phone2' => 'Phone2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Address' => 'setAddress',
        'ContactByPhone' => 'setContactByPhone',
        'ContactByPostalMail' => 'setContactByPostalMail',
        'Email' => 'setEmail',
        'EmailFormat' => 'setEmailFormat',
        'Fax' => 'setFax',
        'HomePhone' => 'setHomePhone',
        'Id' => 'setId',
        'Mobile' => 'setMobile',
        'Phone1' => 'setPhone1',
        'Phone2' => 'setPhone2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Address' => 'getAddress',
        'ContactByPhone' => 'getContactByPhone',
        'ContactByPostalMail' => 'getContactByPostalMail',
        'Email' => 'getEmail',
        'EmailFormat' => 'getEmailFormat',
        'Fax' => 'getFax',
        'HomePhone' => 'getHomePhone',
        'Id' => 'getId',
        'Mobile' => 'getMobile',
        'Phone1' => 'getPhone1',
        'Phone2' => 'getPhone2'
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
        $this->setIfExists('Address', $data ?? [], null);
        $this->setIfExists('ContactByPhone', $data ?? [], null);
        $this->setIfExists('ContactByPostalMail', $data ?? [], null);
        $this->setIfExists('Email', $data ?? [], null);
        $this->setIfExists('EmailFormat', $data ?? [], null);
        $this->setIfExists('Fax', $data ?? [], null);
        $this->setIfExists('HomePhone', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Mobile', $data ?? [], null);
        $this->setIfExists('Phone1', $data ?? [], null);
        $this->setIfExists('Phone2', $data ?? [], null);
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
     * Gets Address
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\Address|null
     */
    public function getAddress()
    {
        if (!isset($this->container['Address']) || is_null($this->container['Address'])) {
            return null;
        }
        return $this->container['Address'];
    }

    /**
     * Sets Address
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\Address|null $Address Address
     *
     * @return self
     */
    public function setAddress($Address)
    {
        if (is_null($Address)) {
            array_push($this->openAPINullablesSetToNull, 'Address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Address'] = $Address;

        return $this;
    }

    /**
     * Gets ContactByPhone
     *
     * @return bool|null
     */
    public function getContactByPhone()
    {
        if (!isset($this->container['ContactByPhone']) || is_null($this->container['ContactByPhone'])) {
            return null;
        }
        return $this->container['ContactByPhone'];
    }

    /**
     * Sets ContactByPhone
     *
     * @param bool|null $ContactByPhone ContactByPhone
     *
     * @return self
     */
    public function setContactByPhone($ContactByPhone)
    {
        if (is_null($ContactByPhone)) {
            array_push($this->openAPINullablesSetToNull, 'ContactByPhone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ContactByPhone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ContactByPhone'] = $ContactByPhone;

        return $this;
    }

    /**
     * Gets ContactByPostalMail
     *
     * @return bool|null
     */
    public function getContactByPostalMail()
    {
        if (!isset($this->container['ContactByPostalMail']) || is_null($this->container['ContactByPostalMail'])) {
            return null;
        }
        return $this->container['ContactByPostalMail'];
    }

    /**
     * Sets ContactByPostalMail
     *
     * @param bool|null $ContactByPostalMail ContactByPostalMail
     *
     * @return self
     */
    public function setContactByPostalMail($ContactByPostalMail)
    {
        if (is_null($ContactByPostalMail)) {
            array_push($this->openAPINullablesSetToNull, 'ContactByPostalMail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ContactByPostalMail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ContactByPostalMail'] = $ContactByPostalMail;

        return $this;
    }

    /**
     * Gets Email
     *
     * @return string|null
     */
    public function getEmail()
    {
        if (!isset($this->container['Email']) || is_null($this->container['Email'])) {
            return null;
        }
        return $this->container['Email'];
    }

    /**
     * Sets Email
     *
     * @param string|null $Email Email
     *
     * @return self
     */
    public function setEmail($Email)
    {
        if (is_null($Email)) {
            array_push($this->openAPINullablesSetToNull, 'Email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Email'] = $Email;

        return $this;
    }

    /**
     * Gets EmailFormat
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\EmailFormat|mixed|null
     */
    public function getEmailFormat()
    {
        if (!isset($this->container['EmailFormat']) || is_null($this->container['EmailFormat'])) {
            return null;
        }
        if ((is_object($this->container['EmailFormat']) || is_string($this->container['EmailFormat'])) && method_exists($this->container['EmailFormat'], 'getValue')) {
            return $this->container['EmailFormat']->getValue();
        }
        return $this->container['EmailFormat'];
    }

    /**
     * Sets EmailFormat
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\EmailFormat|mixed|null $EmailFormat EmailFormat
     *
     * @return self
     */
    public function setEmailFormat($EmailFormat)
    {
        if (is_null($EmailFormat)) {
            throw new \InvalidArgumentException('non-nullable EmailFormat cannot be null');
        }
        if (!$EmailFormat instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\EmailFormat) {
            $EmailFormat = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\EmailFormat($EmailFormat);
        }
        $this->container['EmailFormat'] = $EmailFormat;

        return $this;
    }

    /**
     * Gets Fax
     *
     * @return string|null
     */
    public function getFax()
    {
        if (!isset($this->container['Fax']) || is_null($this->container['Fax'])) {
            return null;
        }
        return $this->container['Fax'];
    }

    /**
     * Sets Fax
     *
     * @param string|null $Fax Fax
     *
     * @return self
     */
    public function setFax($Fax)
    {
        if (is_null($Fax)) {
            array_push($this->openAPINullablesSetToNull, 'Fax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Fax', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Fax'] = $Fax;

        return $this;
    }

    /**
     * Gets HomePhone
     *
     * @return string|null
     */
    public function getHomePhone()
    {
        if (!isset($this->container['HomePhone']) || is_null($this->container['HomePhone'])) {
            return null;
        }
        return $this->container['HomePhone'];
    }

    /**
     * Sets HomePhone
     *
     * @param string|null $HomePhone HomePhone
     *
     * @return self
     */
    public function setHomePhone($HomePhone)
    {
        if (is_null($HomePhone)) {
            array_push($this->openAPINullablesSetToNull, 'HomePhone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HomePhone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HomePhone'] = $HomePhone;

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
     * Gets Mobile
     *
     * @return string|null
     */
    public function getMobile()
    {
        if (!isset($this->container['Mobile']) || is_null($this->container['Mobile'])) {
            return null;
        }
        return $this->container['Mobile'];
    }

    /**
     * Sets Mobile
     *
     * @param string|null $Mobile Mobile
     *
     * @return self
     */
    public function setMobile($Mobile)
    {
        if (is_null($Mobile)) {
            array_push($this->openAPINullablesSetToNull, 'Mobile');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Mobile', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Mobile'] = $Mobile;

        return $this;
    }

    /**
     * Gets Phone1
     *
     * @return string|null
     */
    public function getPhone1()
    {
        if (!isset($this->container['Phone1']) || is_null($this->container['Phone1'])) {
            return null;
        }
        return $this->container['Phone1'];
    }

    /**
     * Sets Phone1
     *
     * @param string|null $Phone1 Phone1
     *
     * @return self
     */
    public function setPhone1($Phone1)
    {
        if (is_null($Phone1)) {
            array_push($this->openAPINullablesSetToNull, 'Phone1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Phone1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Phone1'] = $Phone1;

        return $this;
    }

    /**
     * Gets Phone2
     *
     * @return string|null
     */
    public function getPhone2()
    {
        if (!isset($this->container['Phone2']) || is_null($this->container['Phone2'])) {
            return null;
        }
        return $this->container['Phone2'];
    }

    /**
     * Sets Phone2
     *
     * @param string|null $Phone2 Phone2
     *
     * @return self
     */
    public function setPhone2($Phone2)
    {
        if (is_null($Phone2)) {
            array_push($this->openAPINullablesSetToNull, 'Phone2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Phone2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Phone2'] = $Phone2;

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
