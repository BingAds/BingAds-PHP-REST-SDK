<?php
/**
 * ReportTime
 * ReportingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\ReportingService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\ReportingService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class ReportTime implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ReportTime';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'PredefinedTime' => '\Microsoft\MsAds\Rest\Model\ReportingService\ReportTimePeriod',
        'CustomDateRangeStart' => '\Microsoft\MsAds\Rest\Model\ReportingService\Date',
        'CustomDateRangeEnd' => '\Microsoft\MsAds\Rest\Model\ReportingService\Date',
        'ReportTimeZone' => '\Microsoft\MsAds\Rest\Model\ReportingService\ReportTimeZone'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'PredefinedTime' => null,
        'CustomDateRangeStart' => null,
        'CustomDateRangeEnd' => null,
        'ReportTimeZone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'PredefinedTime' => false,
        'CustomDateRangeStart' => true,
        'CustomDateRangeEnd' => true,
        'ReportTimeZone' => false
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
        'PredefinedTime' => 'PredefinedTime',
        'CustomDateRangeStart' => 'CustomDateRangeStart',
        'CustomDateRangeEnd' => 'CustomDateRangeEnd',
        'ReportTimeZone' => 'ReportTimeZone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'PredefinedTime' => 'setPredefinedTime',
        'CustomDateRangeStart' => 'setCustomDateRangeStart',
        'CustomDateRangeEnd' => 'setCustomDateRangeEnd',
        'ReportTimeZone' => 'setReportTimeZone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'PredefinedTime' => 'getPredefinedTime',
        'CustomDateRangeStart' => 'getCustomDateRangeStart',
        'CustomDateRangeEnd' => 'getCustomDateRangeEnd',
        'ReportTimeZone' => 'getReportTimeZone'
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
        $this->setIfExists('PredefinedTime', $data ?? [], null);
        $this->setIfExists('CustomDateRangeStart', $data ?? [], null);
        $this->setIfExists('CustomDateRangeEnd', $data ?? [], null);
        $this->setIfExists('ReportTimeZone', $data ?? [], null);
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
     * Gets PredefinedTime
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\ReportTimePeriod|mixed|null
     */
    public function getPredefinedTime()
    {
        if (!isset($this->container['PredefinedTime']) || is_null($this->container['PredefinedTime'])) {
            return null;
        }
        if ((is_object($this->container['PredefinedTime']) || is_string($this->container['PredefinedTime'])) && method_exists($this->container['PredefinedTime'], 'getValue')) {
            return $this->container['PredefinedTime']->getValue();
        }
        return $this->container['PredefinedTime'];
    }

    /**
     * Sets PredefinedTime
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\ReportTimePeriod|mixed|null $PredefinedTime PredefinedTime
     *
     * @return self
     */
    public function setPredefinedTime($PredefinedTime)
    {
        if (is_null($PredefinedTime)) {
            throw new \InvalidArgumentException('non-nullable PredefinedTime cannot be null');
        }
        if (!$PredefinedTime instanceof \Microsoft\MsAds\Rest\Model\ReportingService\ReportTimePeriod) {
            $PredefinedTime = new \Microsoft\MsAds\Rest\Model\ReportingService\ReportTimePeriod($PredefinedTime);
        }
        $this->container['PredefinedTime'] = $PredefinedTime;

        return $this;
    }

    /**
     * Gets CustomDateRangeStart
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\Date|null
     */
    public function getCustomDateRangeStart()
    {
        if (!isset($this->container['CustomDateRangeStart']) || is_null($this->container['CustomDateRangeStart'])) {
            return null;
        }
        return $this->container['CustomDateRangeStart'];
    }

    /**
     * Sets CustomDateRangeStart
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\Date|null $CustomDateRangeStart CustomDateRangeStart
     *
     * @return self
     */
    public function setCustomDateRangeStart($CustomDateRangeStart)
    {
        if (is_null($CustomDateRangeStart)) {
            array_push($this->openAPINullablesSetToNull, 'CustomDateRangeStart');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CustomDateRangeStart', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CustomDateRangeStart'] = $CustomDateRangeStart;

        return $this;
    }

    /**
     * Gets CustomDateRangeEnd
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\Date|null
     */
    public function getCustomDateRangeEnd()
    {
        if (!isset($this->container['CustomDateRangeEnd']) || is_null($this->container['CustomDateRangeEnd'])) {
            return null;
        }
        return $this->container['CustomDateRangeEnd'];
    }

    /**
     * Sets CustomDateRangeEnd
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\Date|null $CustomDateRangeEnd CustomDateRangeEnd
     *
     * @return self
     */
    public function setCustomDateRangeEnd($CustomDateRangeEnd)
    {
        if (is_null($CustomDateRangeEnd)) {
            array_push($this->openAPINullablesSetToNull, 'CustomDateRangeEnd');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CustomDateRangeEnd', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CustomDateRangeEnd'] = $CustomDateRangeEnd;

        return $this;
    }

    /**
     * Gets ReportTimeZone
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\ReportTimeZone|mixed|null
     */
    public function getReportTimeZone()
    {
        if (!isset($this->container['ReportTimeZone']) || is_null($this->container['ReportTimeZone'])) {
            return null;
        }
        if ((is_object($this->container['ReportTimeZone']) || is_string($this->container['ReportTimeZone'])) && method_exists($this->container['ReportTimeZone'], 'getValue')) {
            return $this->container['ReportTimeZone']->getValue();
        }
        return $this->container['ReportTimeZone'];
    }

    /**
     * Sets ReportTimeZone
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\ReportTimeZone|mixed|null $ReportTimeZone ReportTimeZone
     *
     * @return self
     */
    public function setReportTimeZone($ReportTimeZone)
    {
        if (is_null($ReportTimeZone)) {
            throw new \InvalidArgumentException('non-nullable ReportTimeZone cannot be null');
        }
        if (!$ReportTimeZone instanceof \Microsoft\MsAds\Rest\Model\ReportingService\ReportTimeZone) {
            $ReportTimeZone = new \Microsoft\MsAds\Rest\Model\ReportingService\ReportTimeZone($ReportTimeZone);
        }
        $this->container['ReportTimeZone'] = $ReportTimeZone;

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
