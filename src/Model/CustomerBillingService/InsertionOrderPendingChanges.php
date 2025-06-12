<?php
/**
 * InsertionOrderPendingChanges
 * CustomerBillingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CustomerBillingService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CustomerBillingService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class InsertionOrderPendingChanges implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InsertionOrderPendingChanges';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Comment' => 'string',
        'EndDate' => '\DateTime',
        'RequestedByUserId' => 'int',
        'ModifiedDateTime' => '\DateTime',
        'NotificationThreshold' => 'float',
        'ReferenceId' => 'string',
        'SpendCapAmount' => 'float',
        'StartDate' => '\DateTime',
        'Name' => 'string',
        'PurchaseOrder' => 'string',
        'ChangeStatus' => '\Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderPendingChangesStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Comment' => null,
        'EndDate' => 'date-time',
        'RequestedByUserId' => 'int32',
        'ModifiedDateTime' => 'date-time',
        'NotificationThreshold' => 'double',
        'ReferenceId' => 'int64',
        'SpendCapAmount' => 'double',
        'StartDate' => 'date-time',
        'Name' => null,
        'PurchaseOrder' => null,
        'ChangeStatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Comment' => true,
        'EndDate' => true,
        'RequestedByUserId' => true,
        'ModifiedDateTime' => true,
        'NotificationThreshold' => true,
        'ReferenceId' => true,
        'SpendCapAmount' => true,
        'StartDate' => true,
        'Name' => true,
        'PurchaseOrder' => true,
        'ChangeStatus' => false
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
        'Comment' => 'Comment',
        'EndDate' => 'EndDate',
        'RequestedByUserId' => 'RequestedByUserId',
        'ModifiedDateTime' => 'ModifiedDateTime',
        'NotificationThreshold' => 'NotificationThreshold',
        'ReferenceId' => 'ReferenceId',
        'SpendCapAmount' => 'SpendCapAmount',
        'StartDate' => 'StartDate',
        'Name' => 'Name',
        'PurchaseOrder' => 'PurchaseOrder',
        'ChangeStatus' => 'ChangeStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Comment' => 'setComment',
        'EndDate' => 'setEndDate',
        'RequestedByUserId' => 'setRequestedByUserId',
        'ModifiedDateTime' => 'setModifiedDateTime',
        'NotificationThreshold' => 'setNotificationThreshold',
        'ReferenceId' => 'setReferenceId',
        'SpendCapAmount' => 'setSpendCapAmount',
        'StartDate' => 'setStartDate',
        'Name' => 'setName',
        'PurchaseOrder' => 'setPurchaseOrder',
        'ChangeStatus' => 'setChangeStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Comment' => 'getComment',
        'EndDate' => 'getEndDate',
        'RequestedByUserId' => 'getRequestedByUserId',
        'ModifiedDateTime' => 'getModifiedDateTime',
        'NotificationThreshold' => 'getNotificationThreshold',
        'ReferenceId' => 'getReferenceId',
        'SpendCapAmount' => 'getSpendCapAmount',
        'StartDate' => 'getStartDate',
        'Name' => 'getName',
        'PurchaseOrder' => 'getPurchaseOrder',
        'ChangeStatus' => 'getChangeStatus'
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
        $this->setIfExists('Comment', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('RequestedByUserId', $data ?? [], null);
        $this->setIfExists('ModifiedDateTime', $data ?? [], null);
        $this->setIfExists('NotificationThreshold', $data ?? [], null);
        $this->setIfExists('ReferenceId', $data ?? [], null);
        $this->setIfExists('SpendCapAmount', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('PurchaseOrder', $data ?? [], null);
        $this->setIfExists('ChangeStatus', $data ?? [], null);
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
     * Gets Comment
     *
     * @return string|null
     */
    public function getComment()
    {
        if (!isset($this->container['Comment']) || is_null($this->container['Comment'])) {
            return null;
        }
        return $this->container['Comment'];
    }

    /**
     * Sets Comment
     *
     * @param string|null $Comment Comment
     *
     * @return self
     */
    public function setComment($Comment)
    {
        if (is_null($Comment)) {
            array_push($this->openAPINullablesSetToNull, 'Comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Comment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Comment'] = $Comment;

        return $this;
    }

    /**
     * Gets EndDate
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        if (!isset($this->container['EndDate']) || is_null($this->container['EndDate'])) {
            return null;
        }
        return $this->container['EndDate'];
    }

    /**
     * Sets EndDate
     *
     * @param \DateTime|null $EndDate EndDate
     *
     * @return self
     */
    public function setEndDate($EndDate)
    {
        if (is_null($EndDate)) {
            array_push($this->openAPINullablesSetToNull, 'EndDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EndDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EndDate'] = $EndDate;

        return $this;
    }

    /**
     * Gets RequestedByUserId
     *
     * @return int|null
     */
    public function getRequestedByUserId()
    {
        if (!isset($this->container['RequestedByUserId']) || is_null($this->container['RequestedByUserId'])) {
            return null;
        }
        return $this->container['RequestedByUserId'];
    }

    /**
     * Sets RequestedByUserId
     *
     * @param int|null $RequestedByUserId RequestedByUserId
     *
     * @return self
     */
    public function setRequestedByUserId($RequestedByUserId)
    {
        if (is_null($RequestedByUserId)) {
            array_push($this->openAPINullablesSetToNull, 'RequestedByUserId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RequestedByUserId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RequestedByUserId'] = $RequestedByUserId;

        return $this;
    }

    /**
     * Gets ModifiedDateTime
     *
     * @return \DateTime|null
     */
    public function getModifiedDateTime()
    {
        if (!isset($this->container['ModifiedDateTime']) || is_null($this->container['ModifiedDateTime'])) {
            return null;
        }
        return $this->container['ModifiedDateTime'];
    }

    /**
     * Sets ModifiedDateTime
     *
     * @param \DateTime|null $ModifiedDateTime ModifiedDateTime
     *
     * @return self
     */
    public function setModifiedDateTime($ModifiedDateTime)
    {
        if (is_null($ModifiedDateTime)) {
            array_push($this->openAPINullablesSetToNull, 'ModifiedDateTime');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ModifiedDateTime', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ModifiedDateTime'] = $ModifiedDateTime;

        return $this;
    }

    /**
     * Gets NotificationThreshold
     *
     * @return float|null
     */
    public function getNotificationThreshold()
    {
        if (!isset($this->container['NotificationThreshold']) || is_null($this->container['NotificationThreshold'])) {
            return null;
        }
        return $this->container['NotificationThreshold'];
    }

    /**
     * Sets NotificationThreshold
     *
     * @param float|null $NotificationThreshold NotificationThreshold
     *
     * @return self
     */
    public function setNotificationThreshold($NotificationThreshold)
    {
        if (is_null($NotificationThreshold)) {
            array_push($this->openAPINullablesSetToNull, 'NotificationThreshold');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NotificationThreshold', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NotificationThreshold'] = $NotificationThreshold;

        return $this;
    }

    /**
     * Gets ReferenceId
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        if (!isset($this->container['ReferenceId']) || is_null($this->container['ReferenceId'])) {
            return null;
        }
        return $this->container['ReferenceId'];
    }

    /**
     * Sets ReferenceId
     *
     * @param string|null $ReferenceId ReferenceId
     *
     * @return self
     */
    public function setReferenceId($ReferenceId)
    {
        if (is_null($ReferenceId)) {
            array_push($this->openAPINullablesSetToNull, 'ReferenceId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ReferenceId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ReferenceId'] = $ReferenceId;

        return $this;
    }

    /**
     * Gets SpendCapAmount
     *
     * @return float|null
     */
    public function getSpendCapAmount()
    {
        if (!isset($this->container['SpendCapAmount']) || is_null($this->container['SpendCapAmount'])) {
            return null;
        }
        return $this->container['SpendCapAmount'];
    }

    /**
     * Sets SpendCapAmount
     *
     * @param float|null $SpendCapAmount SpendCapAmount
     *
     * @return self
     */
    public function setSpendCapAmount($SpendCapAmount)
    {
        if (is_null($SpendCapAmount)) {
            array_push($this->openAPINullablesSetToNull, 'SpendCapAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SpendCapAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SpendCapAmount'] = $SpendCapAmount;

        return $this;
    }

    /**
     * Gets StartDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        if (!isset($this->container['StartDate']) || is_null($this->container['StartDate'])) {
            return null;
        }
        return $this->container['StartDate'];
    }

    /**
     * Sets StartDate
     *
     * @param \DateTime|null $StartDate StartDate
     *
     * @return self
     */
    public function setStartDate($StartDate)
    {
        if (is_null($StartDate)) {
            array_push($this->openAPINullablesSetToNull, 'StartDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StartDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StartDate'] = $StartDate;

        return $this;
    }

    /**
     * Gets Name
     *
     * @return string|null
     */
    public function getName()
    {
        if (!isset($this->container['Name']) || is_null($this->container['Name'])) {
            return null;
        }
        return $this->container['Name'];
    }

    /**
     * Sets Name
     *
     * @param string|null $Name Name
     *
     * @return self
     */
    public function setName($Name)
    {
        if (is_null($Name)) {
            array_push($this->openAPINullablesSetToNull, 'Name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Name'] = $Name;

        return $this;
    }

    /**
     * Gets PurchaseOrder
     *
     * @return string|null
     */
    public function getPurchaseOrder()
    {
        if (!isset($this->container['PurchaseOrder']) || is_null($this->container['PurchaseOrder'])) {
            return null;
        }
        return $this->container['PurchaseOrder'];
    }

    /**
     * Sets PurchaseOrder
     *
     * @param string|null $PurchaseOrder PurchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder($PurchaseOrder)
    {
        if (is_null($PurchaseOrder)) {
            array_push($this->openAPINullablesSetToNull, 'PurchaseOrder');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PurchaseOrder', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PurchaseOrder'] = $PurchaseOrder;

        return $this;
    }

    /**
     * Gets ChangeStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderPendingChangesStatus|mixed|null
     */
    public function getChangeStatus()
    {
        if (!isset($this->container['ChangeStatus']) || is_null($this->container['ChangeStatus'])) {
            return null;
        }
        if ((is_object($this->container['ChangeStatus']) || is_string($this->container['ChangeStatus'])) && method_exists($this->container['ChangeStatus'], 'getValue')) {
            return $this->container['ChangeStatus']->getValue();
        }
        return $this->container['ChangeStatus'];
    }

    /**
     * Sets ChangeStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderPendingChangesStatus|mixed|null $ChangeStatus ChangeStatus
     *
     * @return self
     */
    public function setChangeStatus($ChangeStatus)
    {
        if (is_null($ChangeStatus)) {
            throw new \InvalidArgumentException('non-nullable ChangeStatus cannot be null');
        }
        if (!$ChangeStatus instanceof \Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderPendingChangesStatus) {
            $ChangeStatus = new \Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderPendingChangesStatus($ChangeStatus);
        }
        $this->container['ChangeStatus'] = $ChangeStatus;

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
