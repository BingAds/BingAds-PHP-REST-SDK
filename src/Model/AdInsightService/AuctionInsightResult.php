<?php
/**
 * AuctionInsightResult
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

class AuctionInsightResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AuctionInsightResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Segments' => '\Microsoft\MsAds\Rest\Model\AdInsightService\AuctionSegment[]',
        'Entries' => '\Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightEntry[]',
        'UsedImpressions' => 'float',
        'UsedKeywords' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Segments' => null,
        'Entries' => null,
        'UsedImpressions' => 'double',
        'UsedKeywords' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Segments' => true,
        'Entries' => true,
        'UsedImpressions' => false,
        'UsedKeywords' => false
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
        'Segments' => 'Segments',
        'Entries' => 'Entries',
        'UsedImpressions' => 'UsedImpressions',
        'UsedKeywords' => 'UsedKeywords'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Segments' => 'setSegments',
        'Entries' => 'setEntries',
        'UsedImpressions' => 'setUsedImpressions',
        'UsedKeywords' => 'setUsedKeywords'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Segments' => 'getSegments',
        'Entries' => 'getEntries',
        'UsedImpressions' => 'getUsedImpressions',
        'UsedKeywords' => 'getUsedKeywords'
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
        $this->setIfExists('Segments', $data ?? [], null);
        $this->setIfExists('Entries', $data ?? [], null);
        $this->setIfExists('UsedImpressions', $data ?? [], null);
        $this->setIfExists('UsedKeywords', $data ?? [], null);
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
     * Gets Segments
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionSegment[]|mixed|null
     */
    public function getSegments()
    {
        if (!isset($this->container['Segments']) || is_null($this->container['Segments'])) {
            return null;
        }
        $values = [];
        if (is_array($this->container['Segments'])) {
            foreach ($this->container['Segments'] as $SegmentsItem) {
                if ((is_object($SegmentsItem) || is_string($SegmentsItem)) && method_exists($SegmentsItem, 'getValue')) {
                    $values[] = $SegmentsItem->getValue();
                }
            }
        }
        if (count($values) > 0) {
            return $values;
        }
        return $this->container['Segments'];
    }

    /**
     * Sets Segments
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionSegment[]|mixed|null $Segments Segments
     *
     * @return self
     */
    public function setSegments($Segments)
    {
        if (is_null($Segments)) {
            array_push($this->openAPINullablesSetToNull, 'Segments');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Segments', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_array($Segments)) {
            $Segments = [$Segments];
        }
        foreach ($Segments as $key => $SegmentsItem) {
            if (!$SegmentsItem instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionSegment) {
                $Segments[$key] = new \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionSegment($SegmentsItem);
            }
        }
        $this->container['Segments'] = $Segments;

        return $this;
    }

    /**
     * Gets Entries
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightEntry[]|null
     */
    public function getEntries()
    {
        if (!isset($this->container['Entries']) || is_null($this->container['Entries'])) {
            return null;
        }
        return $this->container['Entries'];
    }

    /**
     * Sets Entries
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionInsightEntry[]|null $Entries Entries
     *
     * @return self
     */
    public function setEntries($Entries)
    {
        if (is_null($Entries)) {
            array_push($this->openAPINullablesSetToNull, 'Entries');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Entries', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Entries'] = $Entries;

        return $this;
    }

    /**
     * Gets UsedImpressions
     *
     * @return float|null
     */
    public function getUsedImpressions()
    {
        if (!isset($this->container['UsedImpressions']) || is_null($this->container['UsedImpressions'])) {
            return null;
        }
        return $this->container['UsedImpressions'];
    }

    /**
     * Sets UsedImpressions
     *
     * @param float|null $UsedImpressions UsedImpressions
     *
     * @return self
     */
    public function setUsedImpressions($UsedImpressions)
    {
        if (is_null($UsedImpressions)) {
            throw new \InvalidArgumentException('non-nullable UsedImpressions cannot be null');
        }
        $this->container['UsedImpressions'] = $UsedImpressions;

        return $this;
    }

    /**
     * Gets UsedKeywords
     *
     * @return float|null
     */
    public function getUsedKeywords()
    {
        if (!isset($this->container['UsedKeywords']) || is_null($this->container['UsedKeywords'])) {
            return null;
        }
        return $this->container['UsedKeywords'];
    }

    /**
     * Sets UsedKeywords
     *
     * @param float|null $UsedKeywords UsedKeywords
     *
     * @return self
     */
    public function setUsedKeywords($UsedKeywords)
    {
        if (is_null($UsedKeywords)) {
            throw new \InvalidArgumentException('non-nullable UsedKeywords cannot be null');
        }
        $this->container['UsedKeywords'] = $UsedKeywords;

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
