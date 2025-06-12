<?php
/**
 * DayTimeCriterion
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

class DayTimeCriterion extends Criterion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DayTimeCriterion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Day' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Day',
        'FromHour' => 'int',
        'FromMinute' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute',
        'ToHour' => 'int',
        'ToMinute' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute',
        'Type' => 'string'
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
        'FromHour' => 'int32',
        'FromMinute' => null,
        'ToHour' => 'int32',
        'ToMinute' => null,
        'Type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Day' => false,
        'FromHour' => true,
        'FromMinute' => false,
        'ToHour' => true,
        'ToMinute' => false,
        'Type' => true
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
        'FromHour' => 'FromHour',
        'FromMinute' => 'FromMinute',
        'ToHour' => 'ToHour',
        'ToMinute' => 'ToMinute',
        'Type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Day' => 'setDay',
        'FromHour' => 'setFromHour',
        'FromMinute' => 'setFromMinute',
        'ToHour' => 'setToHour',
        'ToMinute' => 'setToMinute',
        'Type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Day' => 'getDay',
        'FromHour' => 'getFromHour',
        'FromMinute' => 'getFromMinute',
        'ToHour' => 'getToHour',
        'ToMinute' => 'getToMinute',
        'Type' => 'getType'
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
        $this->setIfExists('FromHour', $data ?? [], null);
        $this->setIfExists('FromMinute', $data ?? [], null);
        $this->setIfExists('ToHour', $data ?? [], null);
        $this->setIfExists('ToMinute', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'DayTimeCriterion');
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
     * Gets FromHour
     *
     * @return int|null
     */
    public function getFromHour()
    {
        if (!isset($this->container['FromHour']) || is_null($this->container['FromHour'])) {
            return null;
        }
        return $this->container['FromHour'];
    }

    /**
     * Sets FromHour
     *
     * @param int|null $FromHour FromHour
     *
     * @return self
     */
    public function setFromHour($FromHour)
    {
        if (is_null($FromHour)) {
            array_push($this->openAPINullablesSetToNull, 'FromHour');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FromHour', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FromHour'] = $FromHour;

        return $this;
    }

    /**
     * Gets FromMinute
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null
     */
    public function getFromMinute()
    {
        if (!isset($this->container['FromMinute']) || is_null($this->container['FromMinute'])) {
            return null;
        }
        if ((is_object($this->container['FromMinute']) || is_string($this->container['FromMinute'])) && method_exists($this->container['FromMinute'], 'getValue')) {
            return $this->container['FromMinute']->getValue();
        }
        return $this->container['FromMinute'];
    }

    /**
     * Sets FromMinute
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null $FromMinute FromMinute
     *
     * @return self
     */
    public function setFromMinute($FromMinute)
    {
        if (is_null($FromMinute)) {
            throw new \InvalidArgumentException('non-nullable FromMinute cannot be null');
        }
        if (!$FromMinute instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute) {
            $FromMinute = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute($FromMinute);
        }
        $this->container['FromMinute'] = $FromMinute;

        return $this;
    }

    /**
     * Gets ToHour
     *
     * @return int|null
     */
    public function getToHour()
    {
        if (!isset($this->container['ToHour']) || is_null($this->container['ToHour'])) {
            return null;
        }
        return $this->container['ToHour'];
    }

    /**
     * Sets ToHour
     *
     * @param int|null $ToHour ToHour
     *
     * @return self
     */
    public function setToHour($ToHour)
    {
        if (is_null($ToHour)) {
            array_push($this->openAPINullablesSetToNull, 'ToHour');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ToHour', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ToHour'] = $ToHour;

        return $this;
    }

    /**
     * Gets ToMinute
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null
     */
    public function getToMinute()
    {
        if (!isset($this->container['ToMinute']) || is_null($this->container['ToMinute'])) {
            return null;
        }
        if ((is_object($this->container['ToMinute']) || is_string($this->container['ToMinute'])) && method_exists($this->container['ToMinute'], 'getValue')) {
            return $this->container['ToMinute']->getValue();
        }
        return $this->container['ToMinute'];
    }

    /**
     * Sets ToMinute
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null $ToMinute ToMinute
     *
     * @return self
     */
    public function setToMinute($ToMinute)
    {
        if (is_null($ToMinute)) {
            throw new \InvalidArgumentException('non-nullable ToMinute cannot be null');
        }
        if (!$ToMinute instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute) {
            $ToMinute = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute($ToMinute);
        }
        $this->container['ToMinute'] = $ToMinute;

        return $this;
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
