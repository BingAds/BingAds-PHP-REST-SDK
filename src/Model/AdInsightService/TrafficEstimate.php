<?php
/**
 * TrafficEstimate
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

class TrafficEstimate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TrafficEstimate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Impressions' => 'float',
        'Clicks' => 'float',
        'TotalCost' => 'float',
        'Ctr' => 'float',
        'AverageCpc' => 'float',
        'AveragePosition' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Impressions' => 'double',
        'Clicks' => 'double',
        'TotalCost' => 'double',
        'Ctr' => 'double',
        'AverageCpc' => 'double',
        'AveragePosition' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Impressions' => false,
        'Clicks' => false,
        'TotalCost' => false,
        'Ctr' => false,
        'AverageCpc' => false,
        'AveragePosition' => false
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
        'Impressions' => 'Impressions',
        'Clicks' => 'Clicks',
        'TotalCost' => 'TotalCost',
        'Ctr' => 'Ctr',
        'AverageCpc' => 'AverageCpc',
        'AveragePosition' => 'AveragePosition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Impressions' => 'setImpressions',
        'Clicks' => 'setClicks',
        'TotalCost' => 'setTotalCost',
        'Ctr' => 'setCtr',
        'AverageCpc' => 'setAverageCpc',
        'AveragePosition' => 'setAveragePosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Impressions' => 'getImpressions',
        'Clicks' => 'getClicks',
        'TotalCost' => 'getTotalCost',
        'Ctr' => 'getCtr',
        'AverageCpc' => 'getAverageCpc',
        'AveragePosition' => 'getAveragePosition'
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
        $this->setIfExists('Impressions', $data ?? [], null);
        $this->setIfExists('Clicks', $data ?? [], null);
        $this->setIfExists('TotalCost', $data ?? [], null);
        $this->setIfExists('Ctr', $data ?? [], null);
        $this->setIfExists('AverageCpc', $data ?? [], null);
        $this->setIfExists('AveragePosition', $data ?? [], null);
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
     * Gets Impressions
     *
     * @return float|null
     */
    public function getImpressions()
    {
        if (!isset($this->container['Impressions']) || is_null($this->container['Impressions'])) {
            return null;
        }
        return $this->container['Impressions'];
    }

    /**
     * Sets Impressions
     *
     * @param float|null $Impressions Impressions
     *
     * @return self
     */
    public function setImpressions($Impressions)
    {
        if (is_null($Impressions)) {
            throw new \InvalidArgumentException('non-nullable Impressions cannot be null');
        }
        $this->container['Impressions'] = $Impressions;

        return $this;
    }

    /**
     * Gets Clicks
     *
     * @return float|null
     */
    public function getClicks()
    {
        if (!isset($this->container['Clicks']) || is_null($this->container['Clicks'])) {
            return null;
        }
        return $this->container['Clicks'];
    }

    /**
     * Sets Clicks
     *
     * @param float|null $Clicks Clicks
     *
     * @return self
     */
    public function setClicks($Clicks)
    {
        if (is_null($Clicks)) {
            throw new \InvalidArgumentException('non-nullable Clicks cannot be null');
        }
        $this->container['Clicks'] = $Clicks;

        return $this;
    }

    /**
     * Gets TotalCost
     *
     * @return float|null
     */
    public function getTotalCost()
    {
        if (!isset($this->container['TotalCost']) || is_null($this->container['TotalCost'])) {
            return null;
        }
        return $this->container['TotalCost'];
    }

    /**
     * Sets TotalCost
     *
     * @param float|null $TotalCost TotalCost
     *
     * @return self
     */
    public function setTotalCost($TotalCost)
    {
        if (is_null($TotalCost)) {
            throw new \InvalidArgumentException('non-nullable TotalCost cannot be null');
        }
        $this->container['TotalCost'] = $TotalCost;

        return $this;
    }

    /**
     * Gets Ctr
     *
     * @return float|null
     */
    public function getCtr()
    {
        if (!isset($this->container['Ctr']) || is_null($this->container['Ctr'])) {
            return null;
        }
        return $this->container['Ctr'];
    }

    /**
     * Sets Ctr
     *
     * @param float|null $Ctr Ctr
     *
     * @return self
     */
    public function setCtr($Ctr)
    {
        if (is_null($Ctr)) {
            throw new \InvalidArgumentException('non-nullable Ctr cannot be null');
        }
        $this->container['Ctr'] = $Ctr;

        return $this;
    }

    /**
     * Gets AverageCpc
     *
     * @return float|null
     */
    public function getAverageCpc()
    {
        if (!isset($this->container['AverageCpc']) || is_null($this->container['AverageCpc'])) {
            return null;
        }
        return $this->container['AverageCpc'];
    }

    /**
     * Sets AverageCpc
     *
     * @param float|null $AverageCpc AverageCpc
     *
     * @return self
     */
    public function setAverageCpc($AverageCpc)
    {
        if (is_null($AverageCpc)) {
            throw new \InvalidArgumentException('non-nullable AverageCpc cannot be null');
        }
        $this->container['AverageCpc'] = $AverageCpc;

        return $this;
    }

    /**
     * Gets AveragePosition
     *
     * @return float|null
     */
    public function getAveragePosition()
    {
        if (!isset($this->container['AveragePosition']) || is_null($this->container['AveragePosition'])) {
            return null;
        }
        return $this->container['AveragePosition'];
    }

    /**
     * Sets AveragePosition
     *
     * @param float|null $AveragePosition AveragePosition
     *
     * @return self
     */
    public function setAveragePosition($AveragePosition)
    {
        if (is_null($AveragePosition)) {
            throw new \InvalidArgumentException('non-nullable AveragePosition cannot be null');
        }
        $this->container['AveragePosition'] = $AveragePosition;

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
