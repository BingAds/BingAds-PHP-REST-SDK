<?php
/**
 * UpdateUserRolesRequest
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

class UpdateUserRolesRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UpdateUserRolesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CustomerId' => 'string',
        'UserId' => 'string',
        'NewRoleId' => 'int',
        'NewAccountIds' => 'string[]',
        'NewCustomerIds' => 'string[]',
        'DeleteRoleId' => 'int',
        'DeleteAccountIds' => 'string[]',
        'DeleteCustomerIds' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'CustomerId' => 'int64',
        'UserId' => 'int64',
        'NewRoleId' => 'int32',
        'NewAccountIds' => 'int64',
        'NewCustomerIds' => 'int64',
        'DeleteRoleId' => 'int32',
        'DeleteAccountIds' => 'int64',
        'DeleteCustomerIds' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CustomerId' => false,
        'UserId' => false,
        'NewRoleId' => true,
        'NewAccountIds' => true,
        'NewCustomerIds' => true,
        'DeleteRoleId' => true,
        'DeleteAccountIds' => true,
        'DeleteCustomerIds' => true
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
        'CustomerId' => 'CustomerId',
        'UserId' => 'UserId',
        'NewRoleId' => 'NewRoleId',
        'NewAccountIds' => 'NewAccountIds',
        'NewCustomerIds' => 'NewCustomerIds',
        'DeleteRoleId' => 'DeleteRoleId',
        'DeleteAccountIds' => 'DeleteAccountIds',
        'DeleteCustomerIds' => 'DeleteCustomerIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CustomerId' => 'setCustomerId',
        'UserId' => 'setUserId',
        'NewRoleId' => 'setNewRoleId',
        'NewAccountIds' => 'setNewAccountIds',
        'NewCustomerIds' => 'setNewCustomerIds',
        'DeleteRoleId' => 'setDeleteRoleId',
        'DeleteAccountIds' => 'setDeleteAccountIds',
        'DeleteCustomerIds' => 'setDeleteCustomerIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CustomerId' => 'getCustomerId',
        'UserId' => 'getUserId',
        'NewRoleId' => 'getNewRoleId',
        'NewAccountIds' => 'getNewAccountIds',
        'NewCustomerIds' => 'getNewCustomerIds',
        'DeleteRoleId' => 'getDeleteRoleId',
        'DeleteAccountIds' => 'getDeleteAccountIds',
        'DeleteCustomerIds' => 'getDeleteCustomerIds'
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
        $this->setIfExists('CustomerId', $data ?? [], null);
        $this->setIfExists('UserId', $data ?? [], null);
        $this->setIfExists('NewRoleId', $data ?? [], null);
        $this->setIfExists('NewAccountIds', $data ?? [], null);
        $this->setIfExists('NewCustomerIds', $data ?? [], null);
        $this->setIfExists('DeleteRoleId', $data ?? [], null);
        $this->setIfExists('DeleteAccountIds', $data ?? [], null);
        $this->setIfExists('DeleteCustomerIds', $data ?? [], null);
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
     * Gets CustomerId
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        if (!isset($this->container['CustomerId']) || is_null($this->container['CustomerId'])) {
            return null;
        }
        return $this->container['CustomerId'];
    }

    /**
     * Sets CustomerId
     *
     * @param string|null $CustomerId CustomerId
     *
     * @return self
     */
    public function setCustomerId($CustomerId)
    {
        if (is_null($CustomerId)) {
            throw new \InvalidArgumentException('non-nullable CustomerId cannot be null');
        }
        $this->container['CustomerId'] = $CustomerId;

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
            throw new \InvalidArgumentException('non-nullable UserId cannot be null');
        }
        $this->container['UserId'] = $UserId;

        return $this;
    }

    /**
     * Gets NewRoleId
     *
     * @return int|null
     */
    public function getNewRoleId()
    {
        if (!isset($this->container['NewRoleId']) || is_null($this->container['NewRoleId'])) {
            return null;
        }
        return $this->container['NewRoleId'];
    }

    /**
     * Sets NewRoleId
     *
     * @param int|null $NewRoleId NewRoleId
     *
     * @return self
     */
    public function setNewRoleId($NewRoleId)
    {
        if (is_null($NewRoleId)) {
            array_push($this->openAPINullablesSetToNull, 'NewRoleId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewRoleId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewRoleId'] = $NewRoleId;

        return $this;
    }

    /**
     * Gets NewAccountIds
     *
     * @return string[]|null
     */
    public function getNewAccountIds()
    {
        if (!isset($this->container['NewAccountIds']) || is_null($this->container['NewAccountIds'])) {
            return null;
        }
        return $this->container['NewAccountIds'];
    }

    /**
     * Sets NewAccountIds
     *
     * @param string[]|null $NewAccountIds NewAccountIds
     *
     * @return self
     */
    public function setNewAccountIds($NewAccountIds)
    {
        if (is_null($NewAccountIds)) {
            array_push($this->openAPINullablesSetToNull, 'NewAccountIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewAccountIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewAccountIds'] = $NewAccountIds;

        return $this;
    }

    /**
     * Gets NewCustomerIds
     *
     * @return string[]|null
     */
    public function getNewCustomerIds()
    {
        if (!isset($this->container['NewCustomerIds']) || is_null($this->container['NewCustomerIds'])) {
            return null;
        }
        return $this->container['NewCustomerIds'];
    }

    /**
     * Sets NewCustomerIds
     *
     * @param string[]|null $NewCustomerIds NewCustomerIds
     *
     * @return self
     */
    public function setNewCustomerIds($NewCustomerIds)
    {
        if (is_null($NewCustomerIds)) {
            array_push($this->openAPINullablesSetToNull, 'NewCustomerIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NewCustomerIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NewCustomerIds'] = $NewCustomerIds;

        return $this;
    }

    /**
     * Gets DeleteRoleId
     *
     * @return int|null
     */
    public function getDeleteRoleId()
    {
        if (!isset($this->container['DeleteRoleId']) || is_null($this->container['DeleteRoleId'])) {
            return null;
        }
        return $this->container['DeleteRoleId'];
    }

    /**
     * Sets DeleteRoleId
     *
     * @param int|null $DeleteRoleId DeleteRoleId
     *
     * @return self
     */
    public function setDeleteRoleId($DeleteRoleId)
    {
        if (is_null($DeleteRoleId)) {
            array_push($this->openAPINullablesSetToNull, 'DeleteRoleId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DeleteRoleId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DeleteRoleId'] = $DeleteRoleId;

        return $this;
    }

    /**
     * Gets DeleteAccountIds
     *
     * @return string[]|null
     */
    public function getDeleteAccountIds()
    {
        if (!isset($this->container['DeleteAccountIds']) || is_null($this->container['DeleteAccountIds'])) {
            return null;
        }
        return $this->container['DeleteAccountIds'];
    }

    /**
     * Sets DeleteAccountIds
     *
     * @param string[]|null $DeleteAccountIds DeleteAccountIds
     *
     * @return self
     */
    public function setDeleteAccountIds($DeleteAccountIds)
    {
        if (is_null($DeleteAccountIds)) {
            array_push($this->openAPINullablesSetToNull, 'DeleteAccountIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DeleteAccountIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DeleteAccountIds'] = $DeleteAccountIds;

        return $this;
    }

    /**
     * Gets DeleteCustomerIds
     *
     * @return string[]|null
     */
    public function getDeleteCustomerIds()
    {
        if (!isset($this->container['DeleteCustomerIds']) || is_null($this->container['DeleteCustomerIds'])) {
            return null;
        }
        return $this->container['DeleteCustomerIds'];
    }

    /**
     * Sets DeleteCustomerIds
     *
     * @param string[]|null $DeleteCustomerIds DeleteCustomerIds
     *
     * @return self
     */
    public function setDeleteCustomerIds($DeleteCustomerIds)
    {
        if (is_null($DeleteCustomerIds)) {
            array_push($this->openAPINullablesSetToNull, 'DeleteCustomerIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DeleteCustomerIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DeleteCustomerIds'] = $DeleteCustomerIds;

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
