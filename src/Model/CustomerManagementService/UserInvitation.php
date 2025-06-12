<?php
/**
 * UserInvitation
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

class UserInvitation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UserInvitation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'FirstName' => 'string',
        'LastName' => 'string',
        'Email' => 'string',
        'CustomerId' => 'string',
        'RoleId' => 'int',
        'AccountIds' => 'string[]',
        'ExpirationDate' => '\DateTime',
        'Lcid' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\LCID'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Id' => 'int64',
        'FirstName' => null,
        'LastName' => null,
        'Email' => null,
        'CustomerId' => 'int64',
        'RoleId' => 'int32',
        'AccountIds' => 'int64',
        'ExpirationDate' => 'date-time',
        'Lcid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => false,
        'FirstName' => true,
        'LastName' => true,
        'Email' => true,
        'CustomerId' => false,
        'RoleId' => false,
        'AccountIds' => true,
        'ExpirationDate' => false,
        'Lcid' => false
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
        'Id' => 'Id',
        'FirstName' => 'FirstName',
        'LastName' => 'LastName',
        'Email' => 'Email',
        'CustomerId' => 'CustomerId',
        'RoleId' => 'RoleId',
        'AccountIds' => 'AccountIds',
        'ExpirationDate' => 'ExpirationDate',
        'Lcid' => 'Lcid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'FirstName' => 'setFirstName',
        'LastName' => 'setLastName',
        'Email' => 'setEmail',
        'CustomerId' => 'setCustomerId',
        'RoleId' => 'setRoleId',
        'AccountIds' => 'setAccountIds',
        'ExpirationDate' => 'setExpirationDate',
        'Lcid' => 'setLcid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'FirstName' => 'getFirstName',
        'LastName' => 'getLastName',
        'Email' => 'getEmail',
        'CustomerId' => 'getCustomerId',
        'RoleId' => 'getRoleId',
        'AccountIds' => 'getAccountIds',
        'ExpirationDate' => 'getExpirationDate',
        'Lcid' => 'getLcid'
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
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('FirstName', $data ?? [], null);
        $this->setIfExists('LastName', $data ?? [], null);
        $this->setIfExists('Email', $data ?? [], null);
        $this->setIfExists('CustomerId', $data ?? [], null);
        $this->setIfExists('RoleId', $data ?? [], null);
        $this->setIfExists('AccountIds', $data ?? [], null);
        $this->setIfExists('ExpirationDate', $data ?? [], null);
        $this->setIfExists('Lcid', $data ?? [], null);
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
            throw new \InvalidArgumentException('non-nullable Id cannot be null');
        }
        $this->container['Id'] = $Id;

        return $this;
    }

    /**
     * Gets FirstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        if (!isset($this->container['FirstName']) || is_null($this->container['FirstName'])) {
            return null;
        }
        return $this->container['FirstName'];
    }

    /**
     * Sets FirstName
     *
     * @param string|null $FirstName FirstName
     *
     * @return self
     */
    public function setFirstName($FirstName)
    {
        if (is_null($FirstName)) {
            array_push($this->openAPINullablesSetToNull, 'FirstName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FirstName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FirstName'] = $FirstName;

        return $this;
    }

    /**
     * Gets LastName
     *
     * @return string|null
     */
    public function getLastName()
    {
        if (!isset($this->container['LastName']) || is_null($this->container['LastName'])) {
            return null;
        }
        return $this->container['LastName'];
    }

    /**
     * Sets LastName
     *
     * @param string|null $LastName LastName
     *
     * @return self
     */
    public function setLastName($LastName)
    {
        if (is_null($LastName)) {
            array_push($this->openAPINullablesSetToNull, 'LastName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LastName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LastName'] = $LastName;

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
     * Gets RoleId
     *
     * @return int|null
     */
    public function getRoleId()
    {
        if (!isset($this->container['RoleId']) || is_null($this->container['RoleId'])) {
            return null;
        }
        return $this->container['RoleId'];
    }

    /**
     * Sets RoleId
     *
     * @param int|null $RoleId RoleId
     *
     * @return self
     */
    public function setRoleId($RoleId)
    {
        if (is_null($RoleId)) {
            throw new \InvalidArgumentException('non-nullable RoleId cannot be null');
        }
        $this->container['RoleId'] = $RoleId;

        return $this;
    }

    /**
     * Gets AccountIds
     *
     * @return string[]|null
     */
    public function getAccountIds()
    {
        if (!isset($this->container['AccountIds']) || is_null($this->container['AccountIds'])) {
            return null;
        }
        return $this->container['AccountIds'];
    }

    /**
     * Sets AccountIds
     *
     * @param string[]|null $AccountIds AccountIds
     *
     * @return self
     */
    public function setAccountIds($AccountIds)
    {
        if (is_null($AccountIds)) {
            array_push($this->openAPINullablesSetToNull, 'AccountIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AccountIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AccountIds'] = $AccountIds;

        return $this;
    }

    /**
     * Gets ExpirationDate
     *
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        if (!isset($this->container['ExpirationDate']) || is_null($this->container['ExpirationDate'])) {
            return null;
        }
        return $this->container['ExpirationDate'];
    }

    /**
     * Sets ExpirationDate
     *
     * @param \DateTime|null $ExpirationDate ExpirationDate
     *
     * @return self
     */
    public function setExpirationDate($ExpirationDate)
    {
        if (is_null($ExpirationDate)) {
            throw new \InvalidArgumentException('non-nullable ExpirationDate cannot be null');
        }
        $this->container['ExpirationDate'] = $ExpirationDate;

        return $this;
    }

    /**
     * Gets Lcid
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\LCID|mixed|null
     */
    public function getLcid()
    {
        if (!isset($this->container['Lcid']) || is_null($this->container['Lcid'])) {
            return null;
        }
        if ((is_object($this->container['Lcid']) || is_string($this->container['Lcid'])) && method_exists($this->container['Lcid'], 'getValue')) {
            return $this->container['Lcid']->getValue();
        }
        return $this->container['Lcid'];
    }

    /**
     * Sets Lcid
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\LCID|mixed|null $Lcid Lcid
     *
     * @return self
     */
    public function setLcid($Lcid)
    {
        if (is_null($Lcid)) {
            throw new \InvalidArgumentException('non-nullable Lcid cannot be null');
        }
        if (!$Lcid instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\LCID) {
            $Lcid = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\LCID($Lcid);
        }
        $this->container['Lcid'] = $Lcid;

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
