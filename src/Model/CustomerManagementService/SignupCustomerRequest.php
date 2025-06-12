<?php
/**
 * SignupCustomerRequest
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

class SignupCustomerRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SignupCustomerRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Customer' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\Customer',
        'Account' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AdvertiserAccount',
        'ParentCustomerId' => 'string',
        'UserInvitation' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UserInvitation',
        'UserId' => 'string',
        'User' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\User'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Customer' => null,
        'Account' => null,
        'ParentCustomerId' => 'int64',
        'UserInvitation' => null,
        'UserId' => 'int64',
        'User' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Customer' => true,
        'Account' => true,
        'ParentCustomerId' => true,
        'UserInvitation' => true,
        'UserId' => true,
        'User' => true
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
        'Customer' => 'Customer',
        'Account' => 'Account',
        'ParentCustomerId' => 'ParentCustomerId',
        'UserInvitation' => 'UserInvitation',
        'UserId' => 'UserId',
        'User' => 'User'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Customer' => 'setCustomer',
        'Account' => 'setAccount',
        'ParentCustomerId' => 'setParentCustomerId',
        'UserInvitation' => 'setUserInvitation',
        'UserId' => 'setUserId',
        'User' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Customer' => 'getCustomer',
        'Account' => 'getAccount',
        'ParentCustomerId' => 'getParentCustomerId',
        'UserInvitation' => 'getUserInvitation',
        'UserId' => 'getUserId',
        'User' => 'getUser'
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
        $this->setIfExists('Customer', $data ?? [], null);
        $this->setIfExists('Account', $data ?? [], null);
        $this->setIfExists('ParentCustomerId', $data ?? [], null);
        $this->setIfExists('UserInvitation', $data ?? [], null);
        $this->setIfExists('UserId', $data ?? [], null);
        $this->setIfExists('User', $data ?? [], null);
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
     * Gets Customer
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\Customer|null
     */
    public function getCustomer()
    {
        if (!isset($this->container['Customer']) || is_null($this->container['Customer'])) {
            return null;
        }
        return $this->container['Customer'];
    }

    /**
     * Sets Customer
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\Customer|null $Customer Customer
     *
     * @return self
     */
    public function setCustomer($Customer)
    {
        if (is_null($Customer)) {
            array_push($this->openAPINullablesSetToNull, 'Customer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Customer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Customer'] = $Customer;

        return $this;
    }

    /**
     * Gets Account
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\AdvertiserAccount|null
     */
    public function getAccount()
    {
        if (!isset($this->container['Account']) || is_null($this->container['Account'])) {
            return null;
        }
        return $this->container['Account'];
    }

    /**
     * Sets Account
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\AdvertiserAccount|null $Account Account
     *
     * @return self
     */
    public function setAccount($Account)
    {
        if (is_null($Account)) {
            array_push($this->openAPINullablesSetToNull, 'Account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Account'] = $Account;

        return $this;
    }

    /**
     * Gets ParentCustomerId
     *
     * @return string|null
     */
    public function getParentCustomerId()
    {
        if (!isset($this->container['ParentCustomerId']) || is_null($this->container['ParentCustomerId'])) {
            return null;
        }
        return $this->container['ParentCustomerId'];
    }

    /**
     * Sets ParentCustomerId
     *
     * @param string|null $ParentCustomerId ParentCustomerId
     *
     * @return self
     */
    public function setParentCustomerId($ParentCustomerId)
    {
        if (is_null($ParentCustomerId)) {
            array_push($this->openAPINullablesSetToNull, 'ParentCustomerId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ParentCustomerId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ParentCustomerId'] = $ParentCustomerId;

        return $this;
    }

    /**
     * Gets UserInvitation
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\UserInvitation|null
     */
    public function getUserInvitation()
    {
        if (!isset($this->container['UserInvitation']) || is_null($this->container['UserInvitation'])) {
            return null;
        }
        return $this->container['UserInvitation'];
    }

    /**
     * Sets UserInvitation
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\UserInvitation|null $UserInvitation UserInvitation
     *
     * @return self
     */
    public function setUserInvitation($UserInvitation)
    {
        if (is_null($UserInvitation)) {
            array_push($this->openAPINullablesSetToNull, 'UserInvitation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UserInvitation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UserInvitation'] = $UserInvitation;

        return $this;
    }

    /**
     * Gets UserId
     *
     * @return string|null
     */
    public function getUserId()
    {
        if (!isset($this->container['UserId']) || is_null($this->container['UserId'])) {
            return null;
        }
        return $this->container['UserId'];
    }

    /**
     * Sets UserId
     *
     * @param string|null $UserId UserId
     *
     * @return self
     */
    public function setUserId($UserId)
    {
        if (is_null($UserId)) {
            array_push($this->openAPINullablesSetToNull, 'UserId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UserId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UserId'] = $UserId;

        return $this;
    }

    /**
     * Gets User
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\User|null
     */
    public function getUser()
    {
        if (!isset($this->container['User']) || is_null($this->container['User'])) {
            return null;
        }
        return $this->container['User'];
    }

    /**
     * Sets User
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\User|null $User User
     *
     * @return self
     */
    public function setUser($User)
    {
        if (is_null($User)) {
            array_push($this->openAPINullablesSetToNull, 'User');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('User', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['User'] = $User;

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
