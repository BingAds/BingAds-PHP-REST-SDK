<?php
/**
 * RecommendationCropSetting
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

class RecommendationCropSetting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RecommendationCropSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'SourceX' => 'int',
        'SourceY' => 'int',
        'SourceWidth' => 'int',
        'SourceHeight' => 'int',
        'AspectRatio' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'SourceX' => 'int32',
        'SourceY' => 'int32',
        'SourceWidth' => 'int32',
        'SourceHeight' => 'int32',
        'AspectRatio' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'SourceX' => false,
        'SourceY' => false,
        'SourceWidth' => false,
        'SourceHeight' => false,
        'AspectRatio' => true
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
        'SourceX' => 'sourceX',
        'SourceY' => 'sourceY',
        'SourceWidth' => 'sourceWidth',
        'SourceHeight' => 'sourceHeight',
        'AspectRatio' => 'aspectRatio'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'SourceX' => 'setSourceX',
        'SourceY' => 'setSourceY',
        'SourceWidth' => 'setSourceWidth',
        'SourceHeight' => 'setSourceHeight',
        'AspectRatio' => 'setAspectRatio'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'SourceX' => 'getSourceX',
        'SourceY' => 'getSourceY',
        'SourceWidth' => 'getSourceWidth',
        'SourceHeight' => 'getSourceHeight',
        'AspectRatio' => 'getAspectRatio'
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
        $this->setIfExists('SourceX', $data ?? [], null);
        $this->setIfExists('SourceY', $data ?? [], null);
        $this->setIfExists('SourceWidth', $data ?? [], null);
        $this->setIfExists('SourceHeight', $data ?? [], null);
        $this->setIfExists('AspectRatio', $data ?? [], null);
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
     * Gets SourceX
     *
     * @return int|null
     */
    public function getSourceX()
    {
        if (!isset($this->container['SourceX']) || is_null($this->container['SourceX'])) {
            return null;
        }
        return $this->container['SourceX'];
    }

    /**
     * Sets SourceX
     *
     * @param int|null $SourceX SourceX
     *
     * @return self
     */
    public function setSourceX($SourceX)
    {
        if (is_null($SourceX)) {
            throw new \InvalidArgumentException('non-nullable SourceX cannot be null');
        }
        $this->container['SourceX'] = $SourceX;

        return $this;
    }

    /**
     * Gets SourceY
     *
     * @return int|null
     */
    public function getSourceY()
    {
        if (!isset($this->container['SourceY']) || is_null($this->container['SourceY'])) {
            return null;
        }
        return $this->container['SourceY'];
    }

    /**
     * Sets SourceY
     *
     * @param int|null $SourceY SourceY
     *
     * @return self
     */
    public function setSourceY($SourceY)
    {
        if (is_null($SourceY)) {
            throw new \InvalidArgumentException('non-nullable SourceY cannot be null');
        }
        $this->container['SourceY'] = $SourceY;

        return $this;
    }

    /**
     * Gets SourceWidth
     *
     * @return int|null
     */
    public function getSourceWidth()
    {
        if (!isset($this->container['SourceWidth']) || is_null($this->container['SourceWidth'])) {
            return null;
        }
        return $this->container['SourceWidth'];
    }

    /**
     * Sets SourceWidth
     *
     * @param int|null $SourceWidth SourceWidth
     *
     * @return self
     */
    public function setSourceWidth($SourceWidth)
    {
        if (is_null($SourceWidth)) {
            throw new \InvalidArgumentException('non-nullable SourceWidth cannot be null');
        }
        $this->container['SourceWidth'] = $SourceWidth;

        return $this;
    }

    /**
     * Gets SourceHeight
     *
     * @return int|null
     */
    public function getSourceHeight()
    {
        if (!isset($this->container['SourceHeight']) || is_null($this->container['SourceHeight'])) {
            return null;
        }
        return $this->container['SourceHeight'];
    }

    /**
     * Sets SourceHeight
     *
     * @param int|null $SourceHeight SourceHeight
     *
     * @return self
     */
    public function setSourceHeight($SourceHeight)
    {
        if (is_null($SourceHeight)) {
            throw new \InvalidArgumentException('non-nullable SourceHeight cannot be null');
        }
        $this->container['SourceHeight'] = $SourceHeight;

        return $this;
    }

    /**
     * Gets AspectRatio
     *
     * @return string|null
     */
    public function getAspectRatio()
    {
        if (!isset($this->container['AspectRatio']) || is_null($this->container['AspectRatio'])) {
            return null;
        }
        return $this->container['AspectRatio'];
    }

    /**
     * Sets AspectRatio
     *
     * @param string|null $AspectRatio AspectRatio
     *
     * @return self
     */
    public function setAspectRatio($AspectRatio)
    {
        if (is_null($AspectRatio)) {
            array_push($this->openAPINullablesSetToNull, 'AspectRatio');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AspectRatio', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AspectRatio'] = $AspectRatio;

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
