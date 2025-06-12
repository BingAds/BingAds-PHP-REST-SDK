<?php
/**
 * DayTime
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

class DayTime implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DayTime';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Day' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Day',
        'StartHour' => 'int',
        'StartMinute' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute',
        'EndHour' => 'int',
        'EndMinute' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Day' => null,
        'StartHour' => 'int32',
        'StartMinute' => null,
        'EndHour' => 'int32',
        'EndMinute' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Day' => false,
        'StartHour' => false,
        'StartMinute' => false,
        'EndHour' => false,
        'EndMinute' => false
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
        'Day' => 'Day',
        'StartHour' => 'StartHour',
        'StartMinute' => 'StartMinute',
        'EndHour' => 'EndHour',
        'EndMinute' => 'EndMinute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Day' => 'setDay',
        'StartHour' => 'setStartHour',
        'StartMinute' => 'setStartMinute',
        'EndHour' => 'setEndHour',
        'EndMinute' => 'setEndMinute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Day' => 'getDay',
        'StartHour' => 'getStartHour',
        'StartMinute' => 'getStartMinute',
        'EndHour' => 'getEndHour',
        'EndMinute' => 'getEndMinute'
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
        $this->setIfExists('Day', $data ?? [], null);
        $this->setIfExists('StartHour', $data ?? [], null);
        $this->setIfExists('StartMinute', $data ?? [], null);
        $this->setIfExists('EndHour', $data ?? [], null);
        $this->setIfExists('EndMinute', $data ?? [], null);
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
     * Gets Day
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day|mixed|null
     */
    public function getDay()
    {
        if (!isset($this->container['Day']) || is_null($this->container['Day'])) {
            return null;
        }
        if ((is_object($this->container['Day']) || is_string($this->container['Day'])) && method_exists($this->container['Day'], 'getValue')) {
            return $this->container['Day']->getValue();
        }
        return $this->container['Day'];
    }

    /**
     * Sets Day
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day|mixed|null $Day Day
     *
     * @return self
     */
    public function setDay($Day)
    {
        if (is_null($Day)) {
            throw new \InvalidArgumentException('non-nullable Day cannot be null');
        }
        if (!$Day instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day) {
            $Day = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day($Day);
        }
        $this->container['Day'] = $Day;

        return $this;
    }

    /**
     * Gets StartHour
     *
     * @return int|null
     */
    public function getStartHour()
    {
        if (!isset($this->container['StartHour']) || is_null($this->container['StartHour'])) {
            return null;
        }
        return $this->container['StartHour'];
    }

    /**
     * Sets StartHour
     *
     * @param int|null $StartHour StartHour
     *
     * @return self
     */
    public function setStartHour($StartHour)
    {
        if (is_null($StartHour)) {
            throw new \InvalidArgumentException('non-nullable StartHour cannot be null');
        }
        $this->container['StartHour'] = $StartHour;

        return $this;
    }

    /**
     * Gets StartMinute
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null
     */
    public function getStartMinute()
    {
        if (!isset($this->container['StartMinute']) || is_null($this->container['StartMinute'])) {
            return null;
        }
        if ((is_object($this->container['StartMinute']) || is_string($this->container['StartMinute'])) && method_exists($this->container['StartMinute'], 'getValue')) {
            return $this->container['StartMinute']->getValue();
        }
        return $this->container['StartMinute'];
    }

    /**
     * Sets StartMinute
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null $StartMinute StartMinute
     *
     * @return self
     */
    public function setStartMinute($StartMinute)
    {
        if (is_null($StartMinute)) {
            throw new \InvalidArgumentException('non-nullable StartMinute cannot be null');
        }
        if (!$StartMinute instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute) {
            $StartMinute = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute($StartMinute);
        }
        $this->container['StartMinute'] = $StartMinute;

        return $this;
    }

    /**
     * Gets EndHour
     *
     * @return int|null
     */
    public function getEndHour()
    {
        if (!isset($this->container['EndHour']) || is_null($this->container['EndHour'])) {
            return null;
        }
        return $this->container['EndHour'];
    }

    /**
     * Sets EndHour
     *
     * @param int|null $EndHour EndHour
     *
     * @return self
     */
    public function setEndHour($EndHour)
    {
        if (is_null($EndHour)) {
            throw new \InvalidArgumentException('non-nullable EndHour cannot be null');
        }
        $this->container['EndHour'] = $EndHour;

        return $this;
    }

    /**
     * Gets EndMinute
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null
     */
    public function getEndMinute()
    {
        if (!isset($this->container['EndMinute']) || is_null($this->container['EndMinute'])) {
            return null;
        }
        if ((is_object($this->container['EndMinute']) || is_string($this->container['EndMinute'])) && method_exists($this->container['EndMinute'], 'getValue')) {
            return $this->container['EndMinute']->getValue();
        }
        return $this->container['EndMinute'];
    }

    /**
     * Sets EndMinute
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null $EndMinute EndMinute
     *
     * @return self
     */
    public function setEndMinute($EndMinute)
    {
        if (is_null($EndMinute)) {
            throw new \InvalidArgumentException('non-nullable EndMinute cannot be null');
        }
        if (!$EndMinute instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute) {
            $EndMinute = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute($EndMinute);
        }
        $this->container['EndMinute'] = $EndMinute;

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
