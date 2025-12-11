<?php
/**
 * RadiusCriterion
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

class RadiusCriterion extends Criterion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RadiusCriterion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Type' => 'string',
        'Name' => 'string',
        'Radius' => 'string',
        'RadiusUnit' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\DistanceUnit',
        'LatitudeDegrees' => 'float',
        'LongitudeDegrees' => 'float'
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
        'Name' => null,
        'Radius' => 'int64',
        'RadiusUnit' => null,
        'LatitudeDegrees' => 'double',
        'LongitudeDegrees' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Type' => true,
        'Name' => true,
        'Radius' => true,
        'RadiusUnit' => false,
        'LatitudeDegrees' => true,
        'LongitudeDegrees' => true
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
        'Name' => 'Name',
        'Radius' => 'Radius',
        'RadiusUnit' => 'RadiusUnit',
        'LatitudeDegrees' => 'LatitudeDegrees',
        'LongitudeDegrees' => 'LongitudeDegrees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Type' => 'setType',
        'Name' => 'setName',
        'Radius' => 'setRadius',
        'RadiusUnit' => 'setRadiusUnit',
        'LatitudeDegrees' => 'setLatitudeDegrees',
        'LongitudeDegrees' => 'setLongitudeDegrees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Type' => 'getType',
        'Name' => 'getName',
        'Radius' => 'getRadius',
        'RadiusUnit' => 'getRadiusUnit',
        'LatitudeDegrees' => 'getLatitudeDegrees',
        'LongitudeDegrees' => 'getLongitudeDegrees'
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
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('Radius', $data ?? [], null);
        $this->setIfExists('RadiusUnit', $data ?? [], null);
        $this->setIfExists('LatitudeDegrees', $data ?? [], null);
        $this->setIfExists('LongitudeDegrees', $data ?? [], null);
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
     * Gets Name
     *
     * @return string|null
     */
    public function getName()
    {
        if (!isset($this->container['Name']) || is_null($this->container['Name'])) {
            return null;
        }
        return $this->container['Name'];
    }

    /**
     * Sets Name
     *
     * @param string|null $Name Name
     *
     * @return self
     */
    public function setName($Name)
    {
        if (is_null($Name)) {
            array_push($this->openAPINullablesSetToNull, 'Name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Name'] = $Name;

        return $this;
    }

    /**
     * Gets Radius
     *
     * @return string|null
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
     * @param string|null $Radius Radius
     *
     * @return self
     */
    public function setRadius($Radius)
    {
        if (is_null($Radius)) {
            array_push($this->openAPINullablesSetToNull, 'Radius');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Radius', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Radius'] = $Radius;

        return $this;
    }

    /**
     * Gets RadiusUnit
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\DistanceUnit|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\DistanceUnit|mixed|null $RadiusUnit RadiusUnit
     *
     * @return self
     */
    public function setRadiusUnit($RadiusUnit)
    {
        if (is_null($RadiusUnit)) {
            throw new \InvalidArgumentException('non-nullable RadiusUnit cannot be null');
        }
        if (!$RadiusUnit instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\DistanceUnit) {
            $RadiusUnit = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\DistanceUnit($RadiusUnit);
        }
        $this->container['RadiusUnit'] = $RadiusUnit;

        return $this;
    }

    /**
     * Gets LatitudeDegrees
     *
     * @return float|null
     */
    public function getLatitudeDegrees()
    {
        if (!isset($this->container['LatitudeDegrees']) || is_null($this->container['LatitudeDegrees'])) {
            return null;
        }
        return $this->container['LatitudeDegrees'];
    }

    /**
     * Sets LatitudeDegrees
     *
     * @param float|null $LatitudeDegrees LatitudeDegrees
     *
     * @return self
     */
    public function setLatitudeDegrees($LatitudeDegrees)
    {
        if (is_null($LatitudeDegrees)) {
            array_push($this->openAPINullablesSetToNull, 'LatitudeDegrees');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LatitudeDegrees', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LatitudeDegrees'] = $LatitudeDegrees;

        return $this;
    }

    /**
     * Gets LongitudeDegrees
     *
     * @return float|null
     */
    public function getLongitudeDegrees()
    {
        if (!isset($this->container['LongitudeDegrees']) || is_null($this->container['LongitudeDegrees'])) {
            return null;
        }
        return $this->container['LongitudeDegrees'];
    }

    /**
     * Sets LongitudeDegrees
     *
     * @param float|null $LongitudeDegrees LongitudeDegrees
     *
     * @return self
     */
    public function setLongitudeDegrees($LongitudeDegrees)
    {
        if (is_null($LongitudeDegrees)) {
            array_push($this->openAPINullablesSetToNull, 'LongitudeDegrees');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LongitudeDegrees', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LongitudeDegrees'] = $LongitudeDegrees;

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
