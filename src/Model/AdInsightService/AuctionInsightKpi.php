<?php
/**
 * AuctionInsightKpi
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

class AuctionInsightKpi implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AuctionInsightKpi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Segments' => 'string[]',
        'ImpressionShare' => 'float',
        'OverlapRate' => 'float',
        'AveragePosition' => 'float',
        'AboveRate' => 'float',
        'TopOfPageRate' => 'float',
        'OutrankingShare' => 'float',
        'AbsoluteTopOfPageRate' => 'float'
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
        'ImpressionShare' => 'double',
        'OverlapRate' => 'double',
        'AveragePosition' => 'double',
        'AboveRate' => 'double',
        'TopOfPageRate' => 'double',
        'OutrankingShare' => 'double',
        'AbsoluteTopOfPageRate' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Segments' => true,
        'ImpressionShare' => false,
        'OverlapRate' => false,
        'AveragePosition' => false,
        'AboveRate' => false,
        'TopOfPageRate' => false,
        'OutrankingShare' => false,
        'AbsoluteTopOfPageRate' => false
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
        'ImpressionShare' => 'ImpressionShare',
        'OverlapRate' => 'OverlapRate',
        'AveragePosition' => 'AveragePosition',
        'AboveRate' => 'AboveRate',
        'TopOfPageRate' => 'TopOfPageRate',
        'OutrankingShare' => 'OutrankingShare',
        'AbsoluteTopOfPageRate' => 'AbsoluteTopOfPageRate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Segments' => 'setSegments',
        'ImpressionShare' => 'setImpressionShare',
        'OverlapRate' => 'setOverlapRate',
        'AveragePosition' => 'setAveragePosition',
        'AboveRate' => 'setAboveRate',
        'TopOfPageRate' => 'setTopOfPageRate',
        'OutrankingShare' => 'setOutrankingShare',
        'AbsoluteTopOfPageRate' => 'setAbsoluteTopOfPageRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Segments' => 'getSegments',
        'ImpressionShare' => 'getImpressionShare',
        'OverlapRate' => 'getOverlapRate',
        'AveragePosition' => 'getAveragePosition',
        'AboveRate' => 'getAboveRate',
        'TopOfPageRate' => 'getTopOfPageRate',
        'OutrankingShare' => 'getOutrankingShare',
        'AbsoluteTopOfPageRate' => 'getAbsoluteTopOfPageRate'
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
        $this->setIfExists('ImpressionShare', $data ?? [], null);
        $this->setIfExists('OverlapRate', $data ?? [], null);
        $this->setIfExists('AveragePosition', $data ?? [], null);
        $this->setIfExists('AboveRate', $data ?? [], null);
        $this->setIfExists('TopOfPageRate', $data ?? [], null);
        $this->setIfExists('OutrankingShare', $data ?? [], null);
        $this->setIfExists('AbsoluteTopOfPageRate', $data ?? [], null);
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
     * @return string[]|null
     */
    public function getSegments()
    {
        if (!isset($this->container['Segments']) || is_null($this->container['Segments'])) {
            return null;
        }
        return $this->container['Segments'];
    }

    /**
     * Sets Segments
     *
     * @param string[]|null $Segments Segments
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
        $this->container['Segments'] = $Segments;

        return $this;
    }

    /**
     * Gets ImpressionShare
     *
     * @return float|null
     */
    public function getImpressionShare()
    {
        if (!isset($this->container['ImpressionShare']) || is_null($this->container['ImpressionShare'])) {
            return null;
        }
        return $this->container['ImpressionShare'];
    }

    /**
     * Sets ImpressionShare
     *
     * @param float|null $ImpressionShare ImpressionShare
     *
     * @return self
     */
    public function setImpressionShare($ImpressionShare)
    {
        if (is_null($ImpressionShare)) {
            throw new \InvalidArgumentException('non-nullable ImpressionShare cannot be null');
        }
        $this->container['ImpressionShare'] = $ImpressionShare;

        return $this;
    }

    /**
     * Gets OverlapRate
     *
     * @return float|null
     */
    public function getOverlapRate()
    {
        if (!isset($this->container['OverlapRate']) || is_null($this->container['OverlapRate'])) {
            return null;
        }
        return $this->container['OverlapRate'];
    }

    /**
     * Sets OverlapRate
     *
     * @param float|null $OverlapRate OverlapRate
     *
     * @return self
     */
    public function setOverlapRate($OverlapRate)
    {
        if (is_null($OverlapRate)) {
            throw new \InvalidArgumentException('non-nullable OverlapRate cannot be null');
        }
        $this->container['OverlapRate'] = $OverlapRate;

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
     * Gets AboveRate
     *
     * @return float|null
     */
    public function getAboveRate()
    {
        if (!isset($this->container['AboveRate']) || is_null($this->container['AboveRate'])) {
            return null;
        }
        return $this->container['AboveRate'];
    }

    /**
     * Sets AboveRate
     *
     * @param float|null $AboveRate AboveRate
     *
     * @return self
     */
    public function setAboveRate($AboveRate)
    {
        if (is_null($AboveRate)) {
            throw new \InvalidArgumentException('non-nullable AboveRate cannot be null');
        }
        $this->container['AboveRate'] = $AboveRate;

        return $this;
    }

    /**
     * Gets TopOfPageRate
     *
     * @return float|null
     */
    public function getTopOfPageRate()
    {
        if (!isset($this->container['TopOfPageRate']) || is_null($this->container['TopOfPageRate'])) {
            return null;
        }
        return $this->container['TopOfPageRate'];
    }

    /**
     * Sets TopOfPageRate
     *
     * @param float|null $TopOfPageRate TopOfPageRate
     *
     * @return self
     */
    public function setTopOfPageRate($TopOfPageRate)
    {
        if (is_null($TopOfPageRate)) {
            throw new \InvalidArgumentException('non-nullable TopOfPageRate cannot be null');
        }
        $this->container['TopOfPageRate'] = $TopOfPageRate;

        return $this;
    }

    /**
     * Gets OutrankingShare
     *
     * @return float|null
     */
    public function getOutrankingShare()
    {
        if (!isset($this->container['OutrankingShare']) || is_null($this->container['OutrankingShare'])) {
            return null;
        }
        return $this->container['OutrankingShare'];
    }

    /**
     * Sets OutrankingShare
     *
     * @param float|null $OutrankingShare OutrankingShare
     *
     * @return self
     */
    public function setOutrankingShare($OutrankingShare)
    {
        if (is_null($OutrankingShare)) {
            throw new \InvalidArgumentException('non-nullable OutrankingShare cannot be null');
        }
        $this->container['OutrankingShare'] = $OutrankingShare;

        return $this;
    }

    /**
     * Gets AbsoluteTopOfPageRate
     *
     * @return float|null
     */
    public function getAbsoluteTopOfPageRate()
    {
        if (!isset($this->container['AbsoluteTopOfPageRate']) || is_null($this->container['AbsoluteTopOfPageRate'])) {
            return null;
        }
        return $this->container['AbsoluteTopOfPageRate'];
    }

    /**
     * Sets AbsoluteTopOfPageRate
     *
     * @param float|null $AbsoluteTopOfPageRate AbsoluteTopOfPageRate
     *
     * @return self
     */
    public function setAbsoluteTopOfPageRate($AbsoluteTopOfPageRate)
    {
        if (is_null($AbsoluteTopOfPageRate)) {
            throw new \InvalidArgumentException('non-nullable AbsoluteTopOfPageRate cannot be null');
        }
        $this->container['AbsoluteTopOfPageRate'] = $AbsoluteTopOfPageRate;

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
