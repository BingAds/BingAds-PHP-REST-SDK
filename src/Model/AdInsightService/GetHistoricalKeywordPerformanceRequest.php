<?php
/**
 * GetHistoricalKeywordPerformanceRequest
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

class GetHistoricalKeywordPerformanceRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetHistoricalKeywordPerformanceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Keywords' => 'string[]',
        'TimeInterval' => '\Microsoft\MsAds\Rest\Model\AdInsightService\TimeInterval',
        'TargetAdPosition' => '\Microsoft\MsAds\Rest\Model\AdInsightService\AdPosition',
        'MatchTypes' => '\Microsoft\MsAds\Rest\Model\AdInsightService\MatchType[]',
        'Language' => 'string',
        'PublisherCountries' => 'string[]',
        'Devices' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Keywords' => null,
        'TimeInterval' => null,
        'TargetAdPosition' => null,
        'MatchTypes' => null,
        'Language' => null,
        'PublisherCountries' => null,
        'Devices' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Keywords' => true,
        'TimeInterval' => false,
        'TargetAdPosition' => false,
        'MatchTypes' => true,
        'Language' => true,
        'PublisherCountries' => true,
        'Devices' => true
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
        'Keywords' => 'Keywords',
        'TimeInterval' => 'TimeInterval',
        'TargetAdPosition' => 'TargetAdPosition',
        'MatchTypes' => 'MatchTypes',
        'Language' => 'Language',
        'PublisherCountries' => 'PublisherCountries',
        'Devices' => 'Devices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Keywords' => 'setKeywords',
        'TimeInterval' => 'setTimeInterval',
        'TargetAdPosition' => 'setTargetAdPosition',
        'MatchTypes' => 'setMatchTypes',
        'Language' => 'setLanguage',
        'PublisherCountries' => 'setPublisherCountries',
        'Devices' => 'setDevices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Keywords' => 'getKeywords',
        'TimeInterval' => 'getTimeInterval',
        'TargetAdPosition' => 'getTargetAdPosition',
        'MatchTypes' => 'getMatchTypes',
        'Language' => 'getLanguage',
        'PublisherCountries' => 'getPublisherCountries',
        'Devices' => 'getDevices'
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
        $this->setIfExists('Keywords', $data ?? [], null);
        $this->setIfExists('TimeInterval', $data ?? [], null);
        $this->setIfExists('TargetAdPosition', $data ?? [], null);
        $this->setIfExists('MatchTypes', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('PublisherCountries', $data ?? [], null);
        $this->setIfExists('Devices', $data ?? [], null);
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
     * Gets Keywords
     *
     * @return string[]|null
     */
    public function getKeywords()
    {
        if (!isset($this->container['Keywords']) || is_null($this->container['Keywords'])) {
            return null;
        }
        return $this->container['Keywords'];
    }

    /**
     * Sets Keywords
     *
     * @param string[]|null $Keywords Keywords
     *
     * @return self
     */
    public function setKeywords($Keywords)
    {
        if (is_null($Keywords)) {
            array_push($this->openAPINullablesSetToNull, 'Keywords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Keywords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Keywords'] = $Keywords;

        return $this;
    }

    /**
     * Gets TimeInterval
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\TimeInterval|mixed|null
     */
    public function getTimeInterval()
    {
        if (!isset($this->container['TimeInterval']) || is_null($this->container['TimeInterval'])) {
            return null;
        }
        if ((is_object($this->container['TimeInterval']) || is_string($this->container['TimeInterval'])) && method_exists($this->container['TimeInterval'], 'getValue')) {
            return $this->container['TimeInterval']->getValue();
        }
        return $this->container['TimeInterval'];
    }

    /**
     * Sets TimeInterval
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\TimeInterval|mixed|null $TimeInterval TimeInterval
     *
     * @return self
     */
    public function setTimeInterval($TimeInterval)
    {
        if (is_null($TimeInterval)) {
            throw new \InvalidArgumentException('non-nullable TimeInterval cannot be null');
        }
        if (!$TimeInterval instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\TimeInterval) {
            $TimeInterval = new \Microsoft\MsAds\Rest\Model\AdInsightService\TimeInterval($TimeInterval);
        }
        $this->container['TimeInterval'] = $TimeInterval;

        return $this;
    }

    /**
     * Gets TargetAdPosition
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\AdPosition|mixed|null
     */
    public function getTargetAdPosition()
    {
        if (!isset($this->container['TargetAdPosition']) || is_null($this->container['TargetAdPosition'])) {
            return null;
        }
        if ((is_object($this->container['TargetAdPosition']) || is_string($this->container['TargetAdPosition'])) && method_exists($this->container['TargetAdPosition'], 'getValue')) {
            return $this->container['TargetAdPosition']->getValue();
        }
        return $this->container['TargetAdPosition'];
    }

    /**
     * Sets TargetAdPosition
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\AdPosition|mixed|null $TargetAdPosition TargetAdPosition
     *
     * @return self
     */
    public function setTargetAdPosition($TargetAdPosition)
    {
        if (is_null($TargetAdPosition)) {
            throw new \InvalidArgumentException('non-nullable TargetAdPosition cannot be null');
        }
        if (!$TargetAdPosition instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\AdPosition) {
            $TargetAdPosition = new \Microsoft\MsAds\Rest\Model\AdInsightService\AdPosition($TargetAdPosition);
        }
        $this->container['TargetAdPosition'] = $TargetAdPosition;

        return $this;
    }

    /**
     * Gets MatchTypes
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\MatchType[]|mixed|null
     */
    public function getMatchTypes()
    {
        if (!isset($this->container['MatchTypes']) || is_null($this->container['MatchTypes'])) {
            return null;
        }
        $values = [];
        if (is_array($this->container['MatchTypes'])) {
            foreach ($this->container['MatchTypes'] as $MatchTypesItem) {
                if ((is_object($MatchTypesItem) || is_string($MatchTypesItem)) && method_exists($MatchTypesItem, 'getValue')) {
                    $values[] = $MatchTypesItem->getValue();
                }
            }
        }
        if (count($values) > 0) {
            return $values;
        }
        return $this->container['MatchTypes'];
    }

    /**
     * Sets MatchTypes
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\MatchType[]|mixed|null $MatchTypes MatchTypes
     *
     * @return self
     */
    public function setMatchTypes($MatchTypes)
    {
        if (is_null($MatchTypes)) {
            array_push($this->openAPINullablesSetToNull, 'MatchTypes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MatchTypes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_array($MatchTypes)) {
            $MatchTypes = [$MatchTypes];
        }
        foreach ($MatchTypes as $key => $MatchTypesItem) {
            if (!$MatchTypesItem instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\MatchType) {
                $MatchTypes[$key] = new \Microsoft\MsAds\Rest\Model\AdInsightService\MatchType($MatchTypesItem);
            }
        }
        $this->container['MatchTypes'] = $MatchTypes;

        return $this;
    }

    /**
     * Gets Language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        if (!isset($this->container['Language']) || is_null($this->container['Language'])) {
            return null;
        }
        return $this->container['Language'];
    }

    /**
     * Sets Language
     *
     * @param string|null $Language Language
     *
     * @return self
     */
    public function setLanguage($Language)
    {
        if (is_null($Language)) {
            array_push($this->openAPINullablesSetToNull, 'Language');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Language', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Language'] = $Language;

        return $this;
    }

    /**
     * Gets PublisherCountries
     *
     * @return string[]|null
     */
    public function getPublisherCountries()
    {
        if (!isset($this->container['PublisherCountries']) || is_null($this->container['PublisherCountries'])) {
            return null;
        }
        return $this->container['PublisherCountries'];
    }

    /**
     * Sets PublisherCountries
     *
     * @param string[]|null $PublisherCountries PublisherCountries
     *
     * @return self
     */
    public function setPublisherCountries($PublisherCountries)
    {
        if (is_null($PublisherCountries)) {
            array_push($this->openAPINullablesSetToNull, 'PublisherCountries');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PublisherCountries', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PublisherCountries'] = $PublisherCountries;

        return $this;
    }

    /**
     * Gets Devices
     *
     * @return string[]|null
     */
    public function getDevices()
    {
        if (!isset($this->container['Devices']) || is_null($this->container['Devices'])) {
            return null;
        }
        return $this->container['Devices'];
    }

    /**
     * Sets Devices
     *
     * @param string[]|null $Devices Devices
     *
     * @return self
     */
    public function setDevices($Devices)
    {
        if (is_null($Devices)) {
            array_push($this->openAPINullablesSetToNull, 'Devices');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Devices', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Devices'] = $Devices;

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
