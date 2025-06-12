<?php
/**
 * AdRecommendationImageSuggestionMetadata
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

class AdRecommendationImageSuggestionMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AdRecommendationImageSuggestionMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'TemplateId' => 'string',
        'TemplateVersion' => 'string',
        'TextAssetProperties' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextAssetProperty[]',
        'ImageAssetProperties' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageAssetProperty[]',
        'CustomizedProperties' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationCustomizedProperty[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'TemplateId' => null,
        'TemplateVersion' => null,
        'TextAssetProperties' => null,
        'ImageAssetProperties' => null,
        'CustomizedProperties' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'TemplateId' => true,
        'TemplateVersion' => true,
        'TextAssetProperties' => true,
        'ImageAssetProperties' => true,
        'CustomizedProperties' => true
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
        'TemplateId' => 'TemplateId',
        'TemplateVersion' => 'TemplateVersion',
        'TextAssetProperties' => 'TextAssetProperties',
        'ImageAssetProperties' => 'ImageAssetProperties',
        'CustomizedProperties' => 'CustomizedProperties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'TemplateId' => 'setTemplateId',
        'TemplateVersion' => 'setTemplateVersion',
        'TextAssetProperties' => 'setTextAssetProperties',
        'ImageAssetProperties' => 'setImageAssetProperties',
        'CustomizedProperties' => 'setCustomizedProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'TemplateId' => 'getTemplateId',
        'TemplateVersion' => 'getTemplateVersion',
        'TextAssetProperties' => 'getTextAssetProperties',
        'ImageAssetProperties' => 'getImageAssetProperties',
        'CustomizedProperties' => 'getCustomizedProperties'
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
        $this->setIfExists('TemplateId', $data ?? [], null);
        $this->setIfExists('TemplateVersion', $data ?? [], null);
        $this->setIfExists('TextAssetProperties', $data ?? [], null);
        $this->setIfExists('ImageAssetProperties', $data ?? [], null);
        $this->setIfExists('CustomizedProperties', $data ?? [], null);
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
     * Gets TemplateId
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        if (!isset($this->container['TemplateId']) || is_null($this->container['TemplateId'])) {
            return null;
        }
        return $this->container['TemplateId'];
    }

    /**
     * Sets TemplateId
     *
     * @param string|null $TemplateId TemplateId
     *
     * @return self
     */
    public function setTemplateId($TemplateId)
    {
        if (is_null($TemplateId)) {
            array_push($this->openAPINullablesSetToNull, 'TemplateId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TemplateId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TemplateId'] = $TemplateId;

        return $this;
    }

    /**
     * Gets TemplateVersion
     *
     * @return string|null
     */
    public function getTemplateVersion()
    {
        if (!isset($this->container['TemplateVersion']) || is_null($this->container['TemplateVersion'])) {
            return null;
        }
        return $this->container['TemplateVersion'];
    }

    /**
     * Sets TemplateVersion
     *
     * @param string|null $TemplateVersion TemplateVersion
     *
     * @return self
     */
    public function setTemplateVersion($TemplateVersion)
    {
        if (is_null($TemplateVersion)) {
            array_push($this->openAPINullablesSetToNull, 'TemplateVersion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TemplateVersion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TemplateVersion'] = $TemplateVersion;

        return $this;
    }

    /**
     * Gets TextAssetProperties
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextAssetProperty[]|null
     */
    public function getTextAssetProperties()
    {
        if (!isset($this->container['TextAssetProperties']) || is_null($this->container['TextAssetProperties'])) {
            return null;
        }
        return $this->container['TextAssetProperties'];
    }

    /**
     * Sets TextAssetProperties
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextAssetProperty[]|null $TextAssetProperties TextAssetProperties
     *
     * @return self
     */
    public function setTextAssetProperties($TextAssetProperties)
    {
        if (is_null($TextAssetProperties)) {
            array_push($this->openAPINullablesSetToNull, 'TextAssetProperties');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TextAssetProperties', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TextAssetProperties'] = $TextAssetProperties;

        return $this;
    }

    /**
     * Gets ImageAssetProperties
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageAssetProperty[]|null
     */
    public function getImageAssetProperties()
    {
        if (!isset($this->container['ImageAssetProperties']) || is_null($this->container['ImageAssetProperties'])) {
            return null;
        }
        return $this->container['ImageAssetProperties'];
    }

    /**
     * Sets ImageAssetProperties
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageAssetProperty[]|null $ImageAssetProperties ImageAssetProperties
     *
     * @return self
     */
    public function setImageAssetProperties($ImageAssetProperties)
    {
        if (is_null($ImageAssetProperties)) {
            array_push($this->openAPINullablesSetToNull, 'ImageAssetProperties');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ImageAssetProperties', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ImageAssetProperties'] = $ImageAssetProperties;

        return $this;
    }

    /**
     * Gets CustomizedProperties
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationCustomizedProperty[]|null
     */
    public function getCustomizedProperties()
    {
        if (!isset($this->container['CustomizedProperties']) || is_null($this->container['CustomizedProperties'])) {
            return null;
        }
        return $this->container['CustomizedProperties'];
    }

    /**
     * Sets CustomizedProperties
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationCustomizedProperty[]|null $CustomizedProperties CustomizedProperties
     *
     * @return self
     */
    public function setCustomizedProperties($CustomizedProperties)
    {
        if (is_null($CustomizedProperties)) {
            array_push($this->openAPINullablesSetToNull, 'CustomizedProperties');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CustomizedProperties', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CustomizedProperties'] = $CustomizedProperties;

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
