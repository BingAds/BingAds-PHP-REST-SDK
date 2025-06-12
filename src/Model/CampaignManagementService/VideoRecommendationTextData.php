<?php
/**
 * VideoRecommendationTextData
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

class VideoRecommendationTextData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'VideoRecommendationTextData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Font' => 'string',
        'FontWeight' => 'string',
        'Color' => 'string',
        'MaxLength' => 'int',
        'ItemId' => 'string',
        'Hint' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Font' => null,
        'FontWeight' => null,
        'Color' => null,
        'MaxLength' => 'int32',
        'ItemId' => null,
        'Hint' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Font' => true,
        'FontWeight' => true,
        'Color' => true,
        'MaxLength' => false,
        'ItemId' => true,
        'Hint' => true
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
        'Font' => 'font',
        'FontWeight' => 'fontWeight',
        'Color' => 'color',
        'MaxLength' => 'maxLength',
        'ItemId' => 'itemId',
        'Hint' => 'hint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Font' => 'setFont',
        'FontWeight' => 'setFontWeight',
        'Color' => 'setColor',
        'MaxLength' => 'setMaxLength',
        'ItemId' => 'setItemId',
        'Hint' => 'setHint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Font' => 'getFont',
        'FontWeight' => 'getFontWeight',
        'Color' => 'getColor',
        'MaxLength' => 'getMaxLength',
        'ItemId' => 'getItemId',
        'Hint' => 'getHint'
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
        $this->setIfExists('Font', $data ?? [], null);
        $this->setIfExists('FontWeight', $data ?? [], null);
        $this->setIfExists('Color', $data ?? [], null);
        $this->setIfExists('MaxLength', $data ?? [], null);
        $this->setIfExists('ItemId', $data ?? [], null);
        $this->setIfExists('Hint', $data ?? [], null);
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
     * Gets Font
     *
     * @return string|null
     */
    public function getFont()
    {
        if (!isset($this->container['Font']) || is_null($this->container['Font'])) {
            return null;
        }
        return $this->container['Font'];
    }

    /**
     * Sets Font
     *
     * @param string|null $Font Font
     *
     * @return self
     */
    public function setFont($Font)
    {
        if (is_null($Font)) {
            array_push($this->openAPINullablesSetToNull, 'Font');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Font', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Font'] = $Font;

        return $this;
    }

    /**
     * Gets FontWeight
     *
     * @return string|null
     */
    public function getFontWeight()
    {
        if (!isset($this->container['FontWeight']) || is_null($this->container['FontWeight'])) {
            return null;
        }
        return $this->container['FontWeight'];
    }

    /**
     * Sets FontWeight
     *
     * @param string|null $FontWeight FontWeight
     *
     * @return self
     */
    public function setFontWeight($FontWeight)
    {
        if (is_null($FontWeight)) {
            array_push($this->openAPINullablesSetToNull, 'FontWeight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FontWeight', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FontWeight'] = $FontWeight;

        return $this;
    }

    /**
     * Gets Color
     *
     * @return string|null
     */
    public function getColor()
    {
        if (!isset($this->container['Color']) || is_null($this->container['Color'])) {
            return null;
        }
        return $this->container['Color'];
    }

    /**
     * Sets Color
     *
     * @param string|null $Color Color
     *
     * @return self
     */
    public function setColor($Color)
    {
        if (is_null($Color)) {
            array_push($this->openAPINullablesSetToNull, 'Color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Color', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Color'] = $Color;

        return $this;
    }

    /**
     * Gets MaxLength
     *
     * @return int|null
     */
    public function getMaxLength()
    {
        if (!isset($this->container['MaxLength']) || is_null($this->container['MaxLength'])) {
            return null;
        }
        return $this->container['MaxLength'];
    }

    /**
     * Sets MaxLength
     *
     * @param int|null $MaxLength MaxLength
     *
     * @return self
     */
    public function setMaxLength($MaxLength)
    {
        if (is_null($MaxLength)) {
            throw new \InvalidArgumentException('non-nullable MaxLength cannot be null');
        }
        $this->container['MaxLength'] = $MaxLength;

        return $this;
    }

    /**
     * Gets ItemId
     *
     * @return string|null
     */
    public function getItemId()
    {
        if (!isset($this->container['ItemId']) || is_null($this->container['ItemId'])) {
            return null;
        }
        return $this->container['ItemId'];
    }

    /**
     * Sets ItemId
     *
     * @param string|null $ItemId ItemId
     *
     * @return self
     */
    public function setItemId($ItemId)
    {
        if (is_null($ItemId)) {
            array_push($this->openAPINullablesSetToNull, 'ItemId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ItemId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ItemId'] = $ItemId;

        return $this;
    }

    /**
     * Gets Hint
     *
     * @return string|null
     */
    public function getHint()
    {
        if (!isset($this->container['Hint']) || is_null($this->container['Hint'])) {
            return null;
        }
        return $this->container['Hint'];
    }

    /**
     * Sets Hint
     *
     * @param string|null $Hint Hint
     *
     * @return self
     */
    public function setHint($Hint)
    {
        if (is_null($Hint)) {
            array_push($this->openAPINullablesSetToNull, 'Hint');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Hint', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Hint'] = $Hint;

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
