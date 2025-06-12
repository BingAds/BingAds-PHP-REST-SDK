<?php
/**
 * BillingDocumentInfo
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

class BillingDocumentInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BillingDocumentInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AccountId' => 'string',
        'AccountName' => 'string',
        'AccountNumber' => 'string',
        'Amount' => 'float',
        'CurrencyCode' => 'string',
        'DocumentDate' => '\DateTime',
        'DocumentId' => 'string',
        'CustomerId' => 'int',
        'CampaignId' => 'string',
        'DocumentNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'AccountId' => 'int64',
        'AccountName' => null,
        'AccountNumber' => null,
        'Amount' => 'double',
        'CurrencyCode' => null,
        'DocumentDate' => 'date-time',
        'DocumentId' => 'int64',
        'CustomerId' => 'int32',
        'CampaignId' => 'int64',
        'DocumentNumber' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AccountId' => false,
        'AccountName' => true,
        'AccountNumber' => true,
        'Amount' => false,
        'CurrencyCode' => true,
        'DocumentDate' => true,
        'DocumentId' => true,
        'CustomerId' => true,
        'CampaignId' => true,
        'DocumentNumber' => true
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
        'AccountId' => 'AccountId',
        'AccountName' => 'AccountName',
        'AccountNumber' => 'AccountNumber',
        'Amount' => 'Amount',
        'CurrencyCode' => 'CurrencyCode',
        'DocumentDate' => 'DocumentDate',
        'DocumentId' => 'DocumentId',
        'CustomerId' => 'CustomerId',
        'CampaignId' => 'CampaignId',
        'DocumentNumber' => 'DocumentNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AccountId' => 'setAccountId',
        'AccountName' => 'setAccountName',
        'AccountNumber' => 'setAccountNumber',
        'Amount' => 'setAmount',
        'CurrencyCode' => 'setCurrencyCode',
        'DocumentDate' => 'setDocumentDate',
        'DocumentId' => 'setDocumentId',
        'CustomerId' => 'setCustomerId',
        'CampaignId' => 'setCampaignId',
        'DocumentNumber' => 'setDocumentNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AccountId' => 'getAccountId',
        'AccountName' => 'getAccountName',
        'AccountNumber' => 'getAccountNumber',
        'Amount' => 'getAmount',
        'CurrencyCode' => 'getCurrencyCode',
        'DocumentDate' => 'getDocumentDate',
        'DocumentId' => 'getDocumentId',
        'CustomerId' => 'getCustomerId',
        'CampaignId' => 'getCampaignId',
        'DocumentNumber' => 'getDocumentNumber'
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
        $this->setIfExists('AccountId', $data ?? [], null);
        $this->setIfExists('AccountName', $data ?? [], null);
        $this->setIfExists('AccountNumber', $data ?? [], null);
        $this->setIfExists('Amount', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('DocumentDate', $data ?? [], null);
        $this->setIfExists('DocumentId', $data ?? [], null);
        $this->setIfExists('CustomerId', $data ?? [], null);
        $this->setIfExists('CampaignId', $data ?? [], null);
        $this->setIfExists('DocumentNumber', $data ?? [], null);
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
     * Gets Amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        if (!isset($this->container['Amount']) || is_null($this->container['Amount'])) {
            return null;
        }
        return $this->container['Amount'];
    }

    /**
     * Sets Amount
     *
     * @param float|null $Amount Amount
     *
     * @return self
     */
    public function setAmount($Amount)
    {
        if (is_null($Amount)) {
            throw new \InvalidArgumentException('non-nullable Amount cannot be null');
        }
        $this->container['Amount'] = $Amount;

        return $this;
    }

    /**
     * Gets CurrencyCode
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        if (!isset($this->container['CurrencyCode']) || is_null($this->container['CurrencyCode'])) {
            return null;
        }
        return $this->container['CurrencyCode'];
    }

    /**
     * Sets CurrencyCode
     *
     * @param string|null $CurrencyCode CurrencyCode
     *
     * @return self
     */
    public function setCurrencyCode($CurrencyCode)
    {
        if (is_null($CurrencyCode)) {
            array_push($this->openAPINullablesSetToNull, 'CurrencyCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CurrencyCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CurrencyCode'] = $CurrencyCode;

        return $this;
    }

    /**
     * Gets DocumentDate
     *
     * @return \DateTime|null
     */
    public function getDocumentDate()
    {
        if (!isset($this->container['DocumentDate']) || is_null($this->container['DocumentDate'])) {
            return null;
        }
        return $this->container['DocumentDate'];
    }

    /**
     * Sets DocumentDate
     *
     * @param \DateTime|null $DocumentDate DocumentDate
     *
     * @return self
     */
    public function setDocumentDate($DocumentDate)
    {
        if (is_null($DocumentDate)) {
            array_push($this->openAPINullablesSetToNull, 'DocumentDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DocumentDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DocumentDate'] = $DocumentDate;

        return $this;
    }

    /**
     * Gets DocumentId
     *
     * @return string|null
     */
    public function getDocumentId()
    {
        if (!isset($this->container['DocumentId']) || is_null($this->container['DocumentId'])) {
            return null;
        }
        return $this->container['DocumentId'];
    }

    /**
     * Sets DocumentId
     *
     * @param string|null $DocumentId DocumentId
     *
     * @return self
     */
    public function setDocumentId($DocumentId)
    {
        if (is_null($DocumentId)) {
            array_push($this->openAPINullablesSetToNull, 'DocumentId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DocumentId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DocumentId'] = $DocumentId;

        return $this;
    }

    /**
     * Gets CustomerId
     *
     * @return int|null
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
     * @param int|null $CustomerId CustomerId
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
     * Gets CampaignId
     *
     * @return string|null
     */
    public function getCampaignId()
    {
        if (!isset($this->container['CampaignId']) || is_null($this->container['CampaignId'])) {
            return null;
        }
        return $this->container['CampaignId'];
    }

    /**
     * Sets CampaignId
     *
     * @param string|null $CampaignId CampaignId
     *
     * @return self
     */
    public function setCampaignId($CampaignId)
    {
        if (is_null($CampaignId)) {
            array_push($this->openAPINullablesSetToNull, 'CampaignId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CampaignId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CampaignId'] = $CampaignId;

        return $this;
    }

    /**
     * Gets DocumentNumber
     *
     * @return string|null
     */
    public function getDocumentNumber()
    {
        if (!isset($this->container['DocumentNumber']) || is_null($this->container['DocumentNumber'])) {
            return null;
        }
        return $this->container['DocumentNumber'];
    }

    /**
     * Sets DocumentNumber
     *
     * @param string|null $DocumentNumber DocumentNumber
     *
     * @return self
     */
    public function setDocumentNumber($DocumentNumber)
    {
        if (is_null($DocumentNumber)) {
            array_push($this->openAPINullablesSetToNull, 'DocumentNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DocumentNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DocumentNumber'] = $DocumentNumber;

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
