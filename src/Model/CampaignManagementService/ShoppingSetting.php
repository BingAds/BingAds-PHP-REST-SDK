<?php
/**
 * ShoppingSetting
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

class ShoppingSetting extends Setting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShoppingSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Type' => 'string',
        'Priority' => 'int',
        'SalesCountryCode' => 'string',
        'StoreId' => 'string',
        'LocalInventoryAdsEnabled' => 'bool',
        'ShoppableAdsEnabled' => 'bool',
        'FeedLabel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Type' => null,
        'Priority' => 'int32',
        'SalesCountryCode' => null,
        'StoreId' => 'int64',
        'LocalInventoryAdsEnabled' => null,
        'ShoppableAdsEnabled' => null,
        'FeedLabel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Type' => true,
        'Priority' => true,
        'SalesCountryCode' => true,
        'StoreId' => true,
        'LocalInventoryAdsEnabled' => true,
        'ShoppableAdsEnabled' => true,
        'FeedLabel' => true
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
        'Type' => 'Type',
        'Priority' => 'Priority',
        'SalesCountryCode' => 'SalesCountryCode',
        'StoreId' => 'StoreId',
        'LocalInventoryAdsEnabled' => 'LocalInventoryAdsEnabled',
        'ShoppableAdsEnabled' => 'ShoppableAdsEnabled',
        'FeedLabel' => 'FeedLabel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Type' => 'setType',
        'Priority' => 'setPriority',
        'SalesCountryCode' => 'setSalesCountryCode',
        'StoreId' => 'setStoreId',
        'LocalInventoryAdsEnabled' => 'setLocalInventoryAdsEnabled',
        'ShoppableAdsEnabled' => 'setShoppableAdsEnabled',
        'FeedLabel' => 'setFeedLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Type' => 'getType',
        'Priority' => 'getPriority',
        'SalesCountryCode' => 'getSalesCountryCode',
        'StoreId' => 'getStoreId',
        'LocalInventoryAdsEnabled' => 'getLocalInventoryAdsEnabled',
        'ShoppableAdsEnabled' => 'getShoppableAdsEnabled',
        'FeedLabel' => 'getFeedLabel'
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
        $this->setIfExists('Type', $data ?? [], null);
        $this->setIfExists('Priority', $data ?? [], null);
        $this->setIfExists('SalesCountryCode', $data ?? [], null);
        $this->setIfExists('StoreId', $data ?? [], null);
        $this->setIfExists('LocalInventoryAdsEnabled', $data ?? [], null);
        $this->setIfExists('ShoppableAdsEnabled', $data ?? [], null);
        $this->setIfExists('FeedLabel', $data ?? [], null);
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
     * Gets Type
     *
     * @return string|null
     */
    public function getType()
    {
        if (!isset($this->container['Type']) || is_null($this->container['Type'])) {
            return null;
        }
        return $this->container['Type'];
    }

    /**
     * Sets Type
     *
     * @param string|null $Type Type
     *
     * @return self
     */
    public function setType($Type)
    {
        if (is_null($Type)) {
            array_push($this->openAPINullablesSetToNull, 'Type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Type'] = $Type;

        return $this;
    }

    /**
     * Gets Priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        if (!isset($this->container['Priority']) || is_null($this->container['Priority'])) {
            return null;
        }
        return $this->container['Priority'];
    }

    /**
     * Sets Priority
     *
     * @param int|null $Priority Priority
     *
     * @return self
     */
    public function setPriority($Priority)
    {
        if (is_null($Priority)) {
            array_push($this->openAPINullablesSetToNull, 'Priority');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Priority', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Priority'] = $Priority;

        return $this;
    }

    /**
     * Gets SalesCountryCode
     *
     * @return string|null
     */
    public function getSalesCountryCode()
    {
        if (!isset($this->container['SalesCountryCode']) || is_null($this->container['SalesCountryCode'])) {
            return null;
        }
        return $this->container['SalesCountryCode'];
    }

    /**
     * Sets SalesCountryCode
     *
     * @param string|null $SalesCountryCode SalesCountryCode
     *
     * @return self
     */
    public function setSalesCountryCode($SalesCountryCode)
    {
        if (is_null($SalesCountryCode)) {
            array_push($this->openAPINullablesSetToNull, 'SalesCountryCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SalesCountryCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SalesCountryCode'] = $SalesCountryCode;

        return $this;
    }

    /**
     * Gets StoreId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        if (!isset($this->container['StoreId']) || is_null($this->container['StoreId'])) {
            return null;
        }
        return $this->container['StoreId'];
    }

    /**
     * Sets StoreId
     *
     * @param string|null $StoreId StoreId
     *
     * @return self
     */
    public function setStoreId($StoreId)
    {
        if (is_null($StoreId)) {
            array_push($this->openAPINullablesSetToNull, 'StoreId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StoreId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StoreId'] = $StoreId;

        return $this;
    }

    /**
     * Gets LocalInventoryAdsEnabled
     *
     * @return bool|null
     */
    public function getLocalInventoryAdsEnabled()
    {
        if (!isset($this->container['LocalInventoryAdsEnabled']) || is_null($this->container['LocalInventoryAdsEnabled'])) {
            return null;
        }
        return $this->container['LocalInventoryAdsEnabled'];
    }

    /**
     * Sets LocalInventoryAdsEnabled
     *
     * @param bool|null $LocalInventoryAdsEnabled LocalInventoryAdsEnabled
     *
     * @return self
     */
    public function setLocalInventoryAdsEnabled($LocalInventoryAdsEnabled)
    {
        if (is_null($LocalInventoryAdsEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'LocalInventoryAdsEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LocalInventoryAdsEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LocalInventoryAdsEnabled'] = $LocalInventoryAdsEnabled;

        return $this;
    }

    /**
     * Gets ShoppableAdsEnabled
     *
     * @return bool|null
     */
    public function getShoppableAdsEnabled()
    {
        if (!isset($this->container['ShoppableAdsEnabled']) || is_null($this->container['ShoppableAdsEnabled'])) {
            return null;
        }
        return $this->container['ShoppableAdsEnabled'];
    }

    /**
     * Sets ShoppableAdsEnabled
     *
     * @param bool|null $ShoppableAdsEnabled ShoppableAdsEnabled
     *
     * @return self
     */
    public function setShoppableAdsEnabled($ShoppableAdsEnabled)
    {
        if (is_null($ShoppableAdsEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'ShoppableAdsEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ShoppableAdsEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ShoppableAdsEnabled'] = $ShoppableAdsEnabled;

        return $this;
    }

    /**
     * Gets FeedLabel
     *
     * @return string|null
     */
    public function getFeedLabel()
    {
        if (!isset($this->container['FeedLabel']) || is_null($this->container['FeedLabel'])) {
            return null;
        }
        return $this->container['FeedLabel'];
    }

    /**
     * Sets FeedLabel
     *
     * @param string|null $FeedLabel FeedLabel
     *
     * @return self
     */
    public function setFeedLabel($FeedLabel)
    {
        if (is_null($FeedLabel)) {
            array_push($this->openAPINullablesSetToNull, 'FeedLabel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FeedLabel', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FeedLabel'] = $FeedLabel;

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
