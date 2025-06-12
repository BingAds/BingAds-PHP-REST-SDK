<?php
/**
 * RadiusTarget
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

class RadiusTarget implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RadiusTarget';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Radius' => 'int',
        'RadiusUnit' => '\Microsoft\MsAds\Rest\Model\AdInsightService\RadiusUnit',
        'CenterLatitude' => 'float',
        'CenterLongitude' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Radius' => 'int32',
        'RadiusUnit' => null,
        'CenterLatitude' => 'double',
        'CenterLongitude' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Radius' => false,
        'RadiusUnit' => false,
        'CenterLatitude' => false,
        'CenterLongitude' => false
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
        'Radius' => 'Radius',
        'RadiusUnit' => 'RadiusUnit',
        'CenterLatitude' => 'CenterLatitude',
        'CenterLongitude' => 'CenterLongitude'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Radius' => 'setRadius',
        'RadiusUnit' => 'setRadiusUnit',
        'CenterLatitude' => 'setCenterLatitude',
        'CenterLongitude' => 'setCenterLongitude'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Radius' => 'getRadius',
        'RadiusUnit' => 'getRadiusUnit',
        'CenterLatitude' => 'getCenterLatitude',
        'CenterLongitude' => 'getCenterLongitude'
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
        $this->setIfExists('Radius', $data ?? [], null);
        $this->setIfExists('RadiusUnit', $data ?? [], null);
        $this->setIfExists('CenterLatitude', $data ?? [], null);
        $this->setIfExists('CenterLongitude', $data ?? [], null);
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
     * Gets Radius
     *
     * @return int|null
     */
    public function getRadius()
    {
        if (!isset($this->container['Radius']) || is_null($this->container['Radius'])) {
            return null;
        }
        return $this->container['Radius'];
    }

    /**
     * Sets Radius
     *
     * @param int|null $Radius Radius
     *
     * @return self
     */
    public function setRadius($Radius)
    {
        if (is_null($Radius)) {
            throw new \InvalidArgumentException('non-nullable Radius cannot be null');
        }
        $this->container['Radius'] = $Radius;

        return $this;
    }

    /**
     * Gets RadiusUnit
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\RadiusUnit|mixed|null
     */
    public function getRadiusUnit()
    {
        if (!isset($this->container['RadiusUnit']) || is_null($this->container['RadiusUnit'])) {
            return null;
        }
        if ((is_object($this->container['RadiusUnit']) || is_string($this->container['RadiusUnit'])) && method_exists($this->container['RadiusUnit'], 'getValue')) {
            return $this->container['RadiusUnit']->getValue();
        }
        return $this->container['RadiusUnit'];
    }

    /**
     * Sets RadiusUnit
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\RadiusUnit|mixed|null $RadiusUnit RadiusUnit
     *
     * @return self
     */
    public function setRadiusUnit($RadiusUnit)
    {
        if (is_null($RadiusUnit)) {
            throw new \InvalidArgumentException('non-nullable RadiusUnit cannot be null');
        }
        if (!$RadiusUnit instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\RadiusUnit) {
            $RadiusUnit = new \Microsoft\MsAds\Rest\Model\AdInsightService\RadiusUnit($RadiusUnit);
        }
        $this->container['RadiusUnit'] = $RadiusUnit;

        return $this;
    }

    /**
     * Gets CenterLatitude
     *
     * @return float|null
     */
    public function getCenterLatitude()
    {
        if (!isset($this->container['CenterLatitude']) || is_null($this->container['CenterLatitude'])) {
            return null;
        }
        return $this->container['CenterLatitude'];
    }

    /**
     * Sets CenterLatitude
     *
     * @param float|null $CenterLatitude CenterLatitude
     *
     * @return self
     */
    public function setCenterLatitude($CenterLatitude)
    {
        if (is_null($CenterLatitude)) {
            throw new \InvalidArgumentException('non-nullable CenterLatitude cannot be null');
        }
        $this->container['CenterLatitude'] = $CenterLatitude;

        return $this;
    }

    /**
     * Gets CenterLongitude
     *
     * @return float|null
     */
    public function getCenterLongitude()
    {
        if (!isset($this->container['CenterLongitude']) || is_null($this->container['CenterLongitude'])) {
            return null;
        }
        return $this->container['CenterLongitude'];
    }

    /**
     * Sets CenterLongitude
     *
     * @param float|null $CenterLongitude CenterLongitude
     *
     * @return self
     */
    public function setCenterLongitude($CenterLongitude)
    {
        if (is_null($CenterLongitude)) {
            throw new \InvalidArgumentException('non-nullable CenterLongitude cannot be null');
        }
        $this->container['CenterLongitude'] = $CenterLongitude;

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
