<?php
/**
 * AuctionInsightEntry
 * AdInsightService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\AdInsightService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\AdInsightService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class AuctionInsightEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AuctionInsightEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'DisplayDomain' => 'string',
        'AggregatedKpi' => '\Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightKpi',
        'SegmentedKpis' => '\Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightKpi[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'DisplayDomain' => null,
        'AggregatedKpi' => null,
        'SegmentedKpis' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'DisplayDomain' => true,
        'AggregatedKpi' => true,
        'SegmentedKpis' => true
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
        'DisplayDomain' => 'DisplayDomain',
        'AggregatedKpi' => 'AggregatedKpi',
        'SegmentedKpis' => 'SegmentedKpis'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'DisplayDomain' => 'setDisplayDomain',
        'AggregatedKpi' => 'setAggregatedKpi',
        'SegmentedKpis' => 'setSegmentedKpis'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'DisplayDomain' => 'getDisplayDomain',
        'AggregatedKpi' => 'getAggregatedKpi',
        'SegmentedKpis' => 'getSegmentedKpis'
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
        $this->setIfExists('DisplayDomain', $data ?? [], null);
        $this->setIfExists('AggregatedKpi', $data ?? [], null);
        $this->setIfExists('SegmentedKpis', $data ?? [], null);
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
     * Gets DisplayDomain
     *
     * @return string|null
     */
    public function getDisplayDomain()
    {
        if (!isset($this->container['DisplayDomain']) || is_null($this->container['DisplayDomain'])) {
            return null;
        }
        return $this->container['DisplayDomain'];
    }

    /**
     * Sets DisplayDomain
     *
     * @param string|null $DisplayDomain DisplayDomain
     *
     * @return self
     */
    public function setDisplayDomain($DisplayDomain)
    {
        if (is_null($DisplayDomain)) {
            array_push($this->openAPINullablesSetToNull, 'DisplayDomain');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DisplayDomain', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DisplayDomain'] = $DisplayDomain;

        return $this;
    }

    /**
     * Gets AggregatedKpi
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightKpi|null
     */
    public function getAggregatedKpi()
    {
        if (!isset($this->container['AggregatedKpi']) || is_null($this->container['AggregatedKpi'])) {
            return null;
        }
        return $this->container['AggregatedKpi'];
    }

    /**
     * Sets AggregatedKpi
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightKpi|null $AggregatedKpi AggregatedKpi
     *
     * @return self
     */
    public function setAggregatedKpi($AggregatedKpi)
    {
        if (is_null($AggregatedKpi)) {
            array_push($this->openAPINullablesSetToNull, 'AggregatedKpi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AggregatedKpi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AggregatedKpi'] = $AggregatedKpi;

        return $this;
    }

    /**
     * Gets SegmentedKpis
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightKpi[]|null
     */
    public function getSegmentedKpis()
    {
        if (!isset($this->container['SegmentedKpis']) || is_null($this->container['SegmentedKpis'])) {
            return null;
        }
        return $this->container['SegmentedKpis'];
    }

    /**
     * Sets SegmentedKpis
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightKpi[]|null $SegmentedKpis SegmentedKpis
     *
     * @return self
     */
    public function setSegmentedKpis($SegmentedKpis)
    {
        if (is_null($SegmentedKpis)) {
            array_push($this->openAPINullablesSetToNull, 'SegmentedKpis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SegmentedKpis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SegmentedKpis'] = $SegmentedKpis;

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
