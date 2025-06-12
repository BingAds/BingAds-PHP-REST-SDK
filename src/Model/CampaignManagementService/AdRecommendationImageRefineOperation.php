<?php
/**
 * AdRecommendationImageRefineOperation
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

class AdRecommendationImageRefineOperation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AdRecommendationImageRefineOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ImageRefineType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageRefineType',
        'ImageIndex' => 'int',
        'Prompt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ImageRefineType' => null,
        'ImageIndex' => 'int32',
        'Prompt' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ImageRefineType' => false,
        'ImageIndex' => false,
        'Prompt' => true
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
        'ImageRefineType' => 'ImageRefineType',
        'ImageIndex' => 'ImageIndex',
        'Prompt' => 'Prompt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ImageRefineType' => 'setImageRefineType',
        'ImageIndex' => 'setImageIndex',
        'Prompt' => 'setPrompt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ImageRefineType' => 'getImageRefineType',
        'ImageIndex' => 'getImageIndex',
        'Prompt' => 'getPrompt'
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
        $this->setIfExists('ImageRefineType', $data ?? [], null);
        $this->setIfExists('ImageIndex', $data ?? [], null);
        $this->setIfExists('Prompt', $data ?? [], null);
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
     * Gets ImageRefineType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageRefineType|mixed|null
     */
    public function getImageRefineType()
    {
        if (!isset($this->container['ImageRefineType']) || is_null($this->container['ImageRefineType'])) {
            return null;
        }
        if ((is_object($this->container['ImageRefineType']) || is_string($this->container['ImageRefineType'])) && method_exists($this->container['ImageRefineType'], 'getValue')) {
            return $this->container['ImageRefineType']->getValue();
        }
        return $this->container['ImageRefineType'];
    }

    /**
     * Sets ImageRefineType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageRefineType|mixed|null $ImageRefineType ImageRefineType
     *
     * @return self
     */
    public function setImageRefineType($ImageRefineType)
    {
        if (is_null($ImageRefineType)) {
            throw new \InvalidArgumentException('non-nullable ImageRefineType cannot be null');
        }
        if (!$ImageRefineType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageRefineType) {
            $ImageRefineType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageRefineType($ImageRefineType);
        }
        $this->container['ImageRefineType'] = $ImageRefineType;

        return $this;
    }

    /**
     * Gets ImageIndex
     *
     * @return int|null
     */
    public function getImageIndex()
    {
        if (!isset($this->container['ImageIndex']) || is_null($this->container['ImageIndex'])) {
            return null;
        }
        return $this->container['ImageIndex'];
    }

    /**
     * Sets ImageIndex
     *
     * @param int|null $ImageIndex ImageIndex
     *
     * @return self
     */
    public function setImageIndex($ImageIndex)
    {
        if (is_null($ImageIndex)) {
            throw new \InvalidArgumentException('non-nullable ImageIndex cannot be null');
        }
        $this->container['ImageIndex'] = $ImageIndex;

        return $this;
    }

    /**
     * Gets Prompt
     *
     * @return string|null
     */
    public function getPrompt()
    {
        if (!isset($this->container['Prompt']) || is_null($this->container['Prompt'])) {
            return null;
        }
        return $this->container['Prompt'];
    }

    /**
     * Sets Prompt
     *
     * @param string|null $Prompt Prompt
     *
     * @return self
     */
    public function setPrompt($Prompt)
    {
        if (is_null($Prompt)) {
            array_push($this->openAPINullablesSetToNull, 'Prompt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Prompt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Prompt'] = $Prompt;

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
