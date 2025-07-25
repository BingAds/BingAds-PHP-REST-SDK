<?php
/**
 * AdRecommendationTextRefineOperation
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

class AdRecommendationTextRefineOperation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AdRecommendationTextRefineOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'TextField' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextField',
        'TextFieldIndex' => 'int',
        'TextTone' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextTone'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'TextField' => null,
        'TextFieldIndex' => 'int32',
        'TextTone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'TextField' => false,
        'TextFieldIndex' => false,
        'TextTone' => false
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
        'TextField' => 'TextField',
        'TextFieldIndex' => 'TextFieldIndex',
        'TextTone' => 'TextTone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'TextField' => 'setTextField',
        'TextFieldIndex' => 'setTextFieldIndex',
        'TextTone' => 'setTextTone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'TextField' => 'getTextField',
        'TextFieldIndex' => 'getTextFieldIndex',
        'TextTone' => 'getTextTone'
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
        $this->setIfExists('TextField', $data ?? [], null);
        $this->setIfExists('TextFieldIndex', $data ?? [], null);
        $this->setIfExists('TextTone', $data ?? [], null);
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
     * Gets TextField
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextField|mixed|null
     */
    public function getTextField()
    {
        if (!isset($this->container['TextField']) || is_null($this->container['TextField'])) {
            return null;
        }
        if ((is_object($this->container['TextField']) || is_string($this->container['TextField'])) && method_exists($this->container['TextField'], 'getValue')) {
            return $this->container['TextField']->getValue();
        }
        return $this->container['TextField'];
    }

    /**
     * Sets TextField
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextField|mixed|null $TextField TextField
     *
     * @return self
     */
    public function setTextField($TextField)
    {
        if (is_null($TextField)) {
            throw new \InvalidArgumentException('non-nullable TextField cannot be null');
        }
        if (!$TextField instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextField) {
            $TextField = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextField($TextField);
        }
        $this->container['TextField'] = $TextField;

        return $this;
    }

    /**
     * Gets TextFieldIndex
     *
     * @return int|null
     */
    public function getTextFieldIndex()
    {
        if (!isset($this->container['TextFieldIndex']) || is_null($this->container['TextFieldIndex'])) {
            return null;
        }
        return $this->container['TextFieldIndex'];
    }

    /**
     * Sets TextFieldIndex
     *
     * @param int|null $TextFieldIndex TextFieldIndex
     *
     * @return self
     */
    public function setTextFieldIndex($TextFieldIndex)
    {
        if (is_null($TextFieldIndex)) {
            throw new \InvalidArgumentException('non-nullable TextFieldIndex cannot be null');
        }
        $this->container['TextFieldIndex'] = $TextFieldIndex;

        return $this;
    }

    /**
     * Gets TextTone
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextTone|mixed|null
     */
    public function getTextTone()
    {
        if (!isset($this->container['TextTone']) || is_null($this->container['TextTone'])) {
            return null;
        }
        if ((is_object($this->container['TextTone']) || is_string($this->container['TextTone'])) && method_exists($this->container['TextTone'], 'getValue')) {
            return $this->container['TextTone']->getValue();
        }
        return $this->container['TextTone'];
    }

    /**
     * Sets TextTone
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextTone|mixed|null $TextTone TextTone
     *
     * @return self
     */
    public function setTextTone($TextTone)
    {
        if (is_null($TextTone)) {
            throw new \InvalidArgumentException('non-nullable TextTone cannot be null');
        }
        if (!$TextTone instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextTone) {
            $TextTone = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextTone($TextTone);
        }
        $this->container['TextTone'] = $TextTone;

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
