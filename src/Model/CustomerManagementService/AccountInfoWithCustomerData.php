<?php
/**
 * AccountInfoWithCustomerData
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

class AccountInfoWithCustomerData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AccountInfoWithCustomerData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CustomerId' => 'string',
        'CustomerName' => 'string',
        'AccountId' => 'string',
        'AccountName' => 'string',
        'AccountNumber' => 'string',
        'AccountLifeCycleStatus' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountLifeCycleStatus',
        'PauseReason' => 'int',
        'AccountMode' => 'string'
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
        'CustomerName' => null,
        'AccountId' => 'int64',
        'AccountName' => null,
        'AccountNumber' => null,
        'AccountLifeCycleStatus' => null,
        'PauseReason' => 'uint8',
        'AccountMode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CustomerId' => true,
        'CustomerName' => true,
        'AccountId' => false,
        'AccountName' => true,
        'AccountNumber' => true,
        'AccountLifeCycleStatus' => false,
        'PauseReason' => true,
        'AccountMode' => true
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
        'CustomerName' => 'CustomerName',
        'AccountId' => 'AccountId',
        'AccountName' => 'AccountName',
        'AccountNumber' => 'AccountNumber',
        'AccountLifeCycleStatus' => 'AccountLifeCycleStatus',
        'PauseReason' => 'PauseReason',
        'AccountMode' => 'AccountMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CustomerId' => 'setCustomerId',
        'CustomerName' => 'setCustomerName',
        'AccountId' => 'setAccountId',
        'AccountName' => 'setAccountName',
        'AccountNumber' => 'setAccountNumber',
        'AccountLifeCycleStatus' => 'setAccountLifeCycleStatus',
        'PauseReason' => 'setPauseReason',
        'AccountMode' => 'setAccountMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CustomerId' => 'getCustomerId',
        'CustomerName' => 'getCustomerName',
        'AccountId' => 'getAccountId',
        'AccountName' => 'getAccountName',
        'AccountNumber' => 'getAccountNumber',
        'AccountLifeCycleStatus' => 'getAccountLifeCycleStatus',
        'PauseReason' => 'getPauseReason',
        'AccountMode' => 'getAccountMode'
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
        $this->setIfExists('CustomerName', $data ?? [], null);
        $this->setIfExists('AccountId', $data ?? [], null);
        $this->setIfExists('AccountName', $data ?? [], null);
        $this->setIfExists('AccountNumber', $data ?? [], null);
        $this->setIfExists('AccountLifeCycleStatus', $data ?? [], null);
        $this->setIfExists('PauseReason', $data ?? [], null);
        $this->setIfExists('AccountMode', $data ?? [], null);
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
            array_push($this->openAPINullablesSetToNull, 'CustomerId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CustomerId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CustomerId'] = $CustomerId;

        return $this;
    }

    /**
     * Gets CustomerName
     *
     * @return string|null
     */
    public function getCustomerName()
    {
        if (!isset($this->container['CustomerName']) || is_null($this->container['CustomerName'])) {
            return null;
        }
        return $this->container['CustomerName'];
    }

    /**
     * Sets CustomerName
     *
     * @param string|null $CustomerName CustomerName
     *
     * @return self
     */
    public function setCustomerName($CustomerName)
    {
        if (is_null($CustomerName)) {
            array_push($this->openAPINullablesSetToNull, 'CustomerName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CustomerName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CustomerName'] = $CustomerName;

        return $this;
    }

    /**
     * Gets AccountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        if (!isset($this->container['AccountId']) || is_null($this->container['AccountId'])) {
            return null;
        }
        return $this->container['AccountId'];
    }

    /**
     * Sets AccountId
     *
     * @param string|null $AccountId AccountId
     *
     * @return self
     */
    public function setAccountId($AccountId)
    {
        if (is_null($AccountId)) {
            throw new \InvalidArgumentException('non-nullable AccountId cannot be null');
        }
        $this->container['AccountId'] = $AccountId;

        return $this;
    }

    /**
     * Gets AccountName
     *
     * @return string|null
     */
    public function getAccountName()
    {
        if (!isset($this->container['AccountName']) || is_null($this->container['AccountName'])) {
            return null;
        }
        return $this->container['AccountName'];
    }

    /**
     * Sets AccountName
     *
     * @param string|null $AccountName AccountName
     *
     * @return self
     */
    public function setAccountName($AccountName)
    {
        if (is_null($AccountName)) {
            array_push($this->openAPINullablesSetToNull, 'AccountName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AccountName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AccountName'] = $AccountName;

        return $this;
    }

    /**
     * Gets AccountNumber
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        if (!isset($this->container['AccountNumber']) || is_null($this->container['AccountNumber'])) {
            return null;
        }
        return $this->container['AccountNumber'];
    }

    /**
     * Sets AccountNumber
     *
     * @param string|null $AccountNumber AccountNumber
     *
     * @return self
     */
    public function setAccountNumber($AccountNumber)
    {
        if (is_null($AccountNumber)) {
            array_push($this->openAPINullablesSetToNull, 'AccountNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AccountNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AccountNumber'] = $AccountNumber;

        return $this;
    }

    /**
     * Gets AccountLifeCycleStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountLifeCycleStatus|mixed|null
     */
    public function getAccountLifeCycleStatus()
    {
        if (!isset($this->container['AccountLifeCycleStatus']) || is_null($this->container['AccountLifeCycleStatus'])) {
            return null;
        }
        if ((is_object($this->container['AccountLifeCycleStatus']) || is_string($this->container['AccountLifeCycleStatus'])) && method_exists($this->container['AccountLifeCycleStatus'], 'getValue')) {
            return $this->container['AccountLifeCycleStatus']->getValue();
        }
        return $this->container['AccountLifeCycleStatus'];
    }

    /**
     * Sets AccountLifeCycleStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountLifeCycleStatus|mixed|null $AccountLifeCycleStatus AccountLifeCycleStatus
     *
     * @return self
     */
    public function setAccountLifeCycleStatus($AccountLifeCycleStatus)
    {
        if (is_null($AccountLifeCycleStatus)) {
            throw new \InvalidArgumentException('non-nullable AccountLifeCycleStatus cannot be null');
        }
        if (!$AccountLifeCycleStatus instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountLifeCycleStatus) {
            $AccountLifeCycleStatus = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountLifeCycleStatus($AccountLifeCycleStatus);
        }
        $this->container['AccountLifeCycleStatus'] = $AccountLifeCycleStatus;

        return $this;
    }

    /**
     * Gets PauseReason
     *
     * @return int|null
     */
    public function getPauseReason()
    {
        if (!isset($this->container['PauseReason']) || is_null($this->container['PauseReason'])) {
            return null;
        }
        return $this->container['PauseReason'];
    }

    /**
     * Sets PauseReason
     *
     * @param int|null $PauseReason PauseReason
     *
     * @return self
     */
    public function setPauseReason($PauseReason)
    {
        if (is_null($PauseReason)) {
            array_push($this->openAPINullablesSetToNull, 'PauseReason');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PauseReason', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PauseReason'] = $PauseReason;

        return $this;
    }

    /**
     * Gets AccountMode
     *
     * @return string|null
     */
    public function getAccountMode()
    {
        if (!isset($this->container['AccountMode']) || is_null($this->container['AccountMode'])) {
            return null;
        }
        return $this->container['AccountMode'];
    }

    /**
     * Sets AccountMode
     *
     * @param string|null $AccountMode AccountMode
     *
     * @return self
     */
    public function setAccountMode($AccountMode)
    {
        if (is_null($AccountMode)) {
            array_push($this->openAPINullablesSetToNull, 'AccountMode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AccountMode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AccountMode'] = $AccountMode;

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
