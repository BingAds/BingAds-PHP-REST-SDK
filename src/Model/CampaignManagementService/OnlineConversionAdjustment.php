<?php
/**
 * OnlineConversionAdjustment
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

class OnlineConversionAdjustment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OnlineConversionAdjustment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'TransactionId' => 'string',
        'ConversionName' => 'string',
        'AdjustmentTime' => '\DateTime',
        'AdjustmentType' => 'string',
        'AdjustmentValue' => 'float',
        'AdjustmentCurrencyCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'TransactionId' => null,
        'ConversionName' => null,
        'AdjustmentTime' => 'date-time',
        'AdjustmentType' => null,
        'AdjustmentValue' => 'double',
        'AdjustmentCurrencyCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'TransactionId' => true,
        'ConversionName' => true,
        'AdjustmentTime' => false,
        'AdjustmentType' => true,
        'AdjustmentValue' => true,
        'AdjustmentCurrencyCode' => true
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
        'TransactionId' => 'TransactionId',
        'ConversionName' => 'ConversionName',
        'AdjustmentTime' => 'AdjustmentTime',
        'AdjustmentType' => 'AdjustmentType',
        'AdjustmentValue' => 'AdjustmentValue',
        'AdjustmentCurrencyCode' => 'AdjustmentCurrencyCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'TransactionId' => 'setTransactionId',
        'ConversionName' => 'setConversionName',
        'AdjustmentTime' => 'setAdjustmentTime',
        'AdjustmentType' => 'setAdjustmentType',
        'AdjustmentValue' => 'setAdjustmentValue',
        'AdjustmentCurrencyCode' => 'setAdjustmentCurrencyCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'TransactionId' => 'getTransactionId',
        'ConversionName' => 'getConversionName',
        'AdjustmentTime' => 'getAdjustmentTime',
        'AdjustmentType' => 'getAdjustmentType',
        'AdjustmentValue' => 'getAdjustmentValue',
        'AdjustmentCurrencyCode' => 'getAdjustmentCurrencyCode'
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
        $this->setIfExists('TransactionId', $data ?? [], null);
        $this->setIfExists('ConversionName', $data ?? [], null);
        $this->setIfExists('AdjustmentTime', $data ?? [], null);
        $this->setIfExists('AdjustmentType', $data ?? [], null);
        $this->setIfExists('AdjustmentValue', $data ?? [], null);
        $this->setIfExists('AdjustmentCurrencyCode', $data ?? [], null);
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
     * Gets TransactionId
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        if (!isset($this->container['TransactionId']) || is_null($this->container['TransactionId'])) {
            return null;
        }
        return $this->container['TransactionId'];
    }

    /**
     * Sets TransactionId
     *
     * @param string|null $TransactionId TransactionId
     *
     * @return self
     */
    public function setTransactionId($TransactionId)
    {
        if (is_null($TransactionId)) {
            array_push($this->openAPINullablesSetToNull, 'TransactionId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TransactionId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TransactionId'] = $TransactionId;

        return $this;
    }

    /**
     * Gets ConversionName
     *
     * @return string|null
     */
    public function getConversionName()
    {
        if (!isset($this->container['ConversionName']) || is_null($this->container['ConversionName'])) {
            return null;
        }
        return $this->container['ConversionName'];
    }

    /**
     * Sets ConversionName
     *
     * @param string|null $ConversionName ConversionName
     *
     * @return self
     */
    public function setConversionName($ConversionName)
    {
        if (is_null($ConversionName)) {
            array_push($this->openAPINullablesSetToNull, 'ConversionName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ConversionName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ConversionName'] = $ConversionName;

        return $this;
    }

    /**
     * Gets AdjustmentTime
     *
     * @return \DateTime|null
     */
    public function getAdjustmentTime()
    {
        if (!isset($this->container['AdjustmentTime']) || is_null($this->container['AdjustmentTime'])) {
            return null;
        }
        return $this->container['AdjustmentTime'];
    }

    /**
     * Sets AdjustmentTime
     *
     * @param \DateTime|null $AdjustmentTime AdjustmentTime
     *
     * @return self
     */
    public function setAdjustmentTime($AdjustmentTime)
    {
        if (is_null($AdjustmentTime)) {
            throw new \InvalidArgumentException('non-nullable AdjustmentTime cannot be null');
        }
        $this->container['AdjustmentTime'] = $AdjustmentTime;

        return $this;
    }

    /**
     * Gets AdjustmentType
     *
     * @return string|null
     */
    public function getAdjustmentType()
    {
        if (!isset($this->container['AdjustmentType']) || is_null($this->container['AdjustmentType'])) {
            return null;
        }
        return $this->container['AdjustmentType'];
    }

    /**
     * Sets AdjustmentType
     *
     * @param string|null $AdjustmentType AdjustmentType
     *
     * @return self
     */
    public function setAdjustmentType($AdjustmentType)
    {
        if (is_null($AdjustmentType)) {
            array_push($this->openAPINullablesSetToNull, 'AdjustmentType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdjustmentType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdjustmentType'] = $AdjustmentType;

        return $this;
    }

    /**
     * Gets AdjustmentValue
     *
     * @return float|null
     */
    public function getAdjustmentValue()
    {
        if (!isset($this->container['AdjustmentValue']) || is_null($this->container['AdjustmentValue'])) {
            return null;
        }
        return $this->container['AdjustmentValue'];
    }

    /**
     * Sets AdjustmentValue
     *
     * @param float|null $AdjustmentValue AdjustmentValue
     *
     * @return self
     */
    public function setAdjustmentValue($AdjustmentValue)
    {
        if (is_null($AdjustmentValue)) {
            array_push($this->openAPINullablesSetToNull, 'AdjustmentValue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdjustmentValue', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdjustmentValue'] = $AdjustmentValue;

        return $this;
    }

    /**
     * Gets AdjustmentCurrencyCode
     *
     * @return string|null
     */
    public function getAdjustmentCurrencyCode()
    {
        if (!isset($this->container['AdjustmentCurrencyCode']) || is_null($this->container['AdjustmentCurrencyCode'])) {
            return null;
        }
        return $this->container['AdjustmentCurrencyCode'];
    }

    /**
     * Sets AdjustmentCurrencyCode
     *
     * @param string|null $AdjustmentCurrencyCode AdjustmentCurrencyCode
     *
     * @return self
     */
    public function setAdjustmentCurrencyCode($AdjustmentCurrencyCode)
    {
        if (is_null($AdjustmentCurrencyCode)) {
            array_push($this->openAPINullablesSetToNull, 'AdjustmentCurrencyCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdjustmentCurrencyCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdjustmentCurrencyCode'] = $AdjustmentCurrencyCode;

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
