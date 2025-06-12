<?php
/**
 * CouponRedemption
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

class CouponRedemption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CouponRedemption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AccountId' => 'string',
        'AccountNumber' => 'string',
        'SpendToThreshold' => 'float',
        'Balance' => 'float',
        'CurrencyCode' => 'string',
        'RedemptionDate' => '\DateTime',
        'ExpirationDate' => '\DateTime',
        'ActivationDate' => '\DateTime'
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
        'AccountNumber' => null,
        'SpendToThreshold' => 'double',
        'Balance' => 'double',
        'CurrencyCode' => null,
        'RedemptionDate' => 'date-time',
        'ExpirationDate' => 'date-time',
        'ActivationDate' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AccountId' => false,
        'AccountNumber' => true,
        'SpendToThreshold' => false,
        'Balance' => false,
        'CurrencyCode' => true,
        'RedemptionDate' => false,
        'ExpirationDate' => false,
        'ActivationDate' => true
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
        'AccountNumber' => 'AccountNumber',
        'SpendToThreshold' => 'SpendToThreshold',
        'Balance' => 'Balance',
        'CurrencyCode' => 'CurrencyCode',
        'RedemptionDate' => 'RedemptionDate',
        'ExpirationDate' => 'ExpirationDate',
        'ActivationDate' => 'ActivationDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AccountId' => 'setAccountId',
        'AccountNumber' => 'setAccountNumber',
        'SpendToThreshold' => 'setSpendToThreshold',
        'Balance' => 'setBalance',
        'CurrencyCode' => 'setCurrencyCode',
        'RedemptionDate' => 'setRedemptionDate',
        'ExpirationDate' => 'setExpirationDate',
        'ActivationDate' => 'setActivationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AccountId' => 'getAccountId',
        'AccountNumber' => 'getAccountNumber',
        'SpendToThreshold' => 'getSpendToThreshold',
        'Balance' => 'getBalance',
        'CurrencyCode' => 'getCurrencyCode',
        'RedemptionDate' => 'getRedemptionDate',
        'ExpirationDate' => 'getExpirationDate',
        'ActivationDate' => 'getActivationDate'
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
        $this->setIfExists('AccountNumber', $data ?? [], null);
        $this->setIfExists('SpendToThreshold', $data ?? [], null);
        $this->setIfExists('Balance', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('RedemptionDate', $data ?? [], null);
        $this->setIfExists('ExpirationDate', $data ?? [], null);
        $this->setIfExists('ActivationDate', $data ?? [], null);
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
     * Gets SpendToThreshold
     *
     * @return float|null
     */
    public function getSpendToThreshold()
    {
        if (!isset($this->container['SpendToThreshold']) || is_null($this->container['SpendToThreshold'])) {
            return null;
        }
        return $this->container['SpendToThreshold'];
    }

    /**
     * Sets SpendToThreshold
     *
     * @param float|null $SpendToThreshold SpendToThreshold
     *
     * @return self
     */
    public function setSpendToThreshold($SpendToThreshold)
    {
        if (is_null($SpendToThreshold)) {
            throw new \InvalidArgumentException('non-nullable SpendToThreshold cannot be null');
        }
        $this->container['SpendToThreshold'] = $SpendToThreshold;

        return $this;
    }

    /**
     * Gets Balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        if (!isset($this->container['Balance']) || is_null($this->container['Balance'])) {
            return null;
        }
        return $this->container['Balance'];
    }

    /**
     * Sets Balance
     *
     * @param float|null $Balance Balance
     *
     * @return self
     */
    public function setBalance($Balance)
    {
        if (is_null($Balance)) {
            throw new \InvalidArgumentException('non-nullable Balance cannot be null');
        }
        $this->container['Balance'] = $Balance;

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
     * Gets RedemptionDate
     *
     * @return \DateTime|null
     */
    public function getRedemptionDate()
    {
        if (!isset($this->container['RedemptionDate']) || is_null($this->container['RedemptionDate'])) {
            return null;
        }
        return $this->container['RedemptionDate'];
    }

    /**
     * Sets RedemptionDate
     *
     * @param \DateTime|null $RedemptionDate RedemptionDate
     *
     * @return self
     */
    public function setRedemptionDate($RedemptionDate)
    {
        if (is_null($RedemptionDate)) {
            throw new \InvalidArgumentException('non-nullable RedemptionDate cannot be null');
        }
        $this->container['RedemptionDate'] = $RedemptionDate;

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
     * Gets ActivationDate
     *
     * @return \DateTime|null
     */
    public function getActivationDate()
    {
        if (!isset($this->container['ActivationDate']) || is_null($this->container['ActivationDate'])) {
            return null;
        }
        return $this->container['ActivationDate'];
    }

    /**
     * Sets ActivationDate
     *
     * @param \DateTime|null $ActivationDate ActivationDate
     *
     * @return self
     */
    public function setActivationDate($ActivationDate)
    {
        if (is_null($ActivationDate)) {
            array_push($this->openAPINullablesSetToNull, 'ActivationDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ActivationDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ActivationDate'] = $ActivationDate;

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
