<?php
/**
 * AdRecommendationImageSuggestion
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

class AdRecommendationImageSuggestion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AdRecommendationImageSuggestion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Image' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Image',
        'ImageUrl' => 'string',
        'AssetLink' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink',
        'ImageMetadata' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageSuggestionMetadata',
        'InternalTemplate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationTemplate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Image' => null,
        'ImageUrl' => null,
        'AssetLink' => null,
        'ImageMetadata' => null,
        'InternalTemplate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Image' => true,
        'ImageUrl' => true,
        'AssetLink' => true,
        'ImageMetadata' => true,
        'InternalTemplate' => true
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
        'Image' => 'Image',
        'ImageUrl' => 'ImageUrl',
        'AssetLink' => 'AssetLink',
        'ImageMetadata' => 'ImageMetadata',
        'InternalTemplate' => 'Internal_Template'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Image' => 'setImage',
        'ImageUrl' => 'setImageUrl',
        'AssetLink' => 'setAssetLink',
        'ImageMetadata' => 'setImageMetadata',
        'InternalTemplate' => 'setInternalTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Image' => 'getImage',
        'ImageUrl' => 'getImageUrl',
        'AssetLink' => 'getAssetLink',
        'ImageMetadata' => 'getImageMetadata',
        'InternalTemplate' => 'getInternalTemplate'
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
        $this->setIfExists('Image', $data ?? [], null);
        $this->setIfExists('ImageUrl', $data ?? [], null);
        $this->setIfExists('AssetLink', $data ?? [], null);
        $this->setIfExists('ImageMetadata', $data ?? [], null);
        $this->setIfExists('InternalTemplate', $data ?? [], null);
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
     * Gets Image
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Image|null
     */
    public function getImage()
    {
        if (!isset($this->container['Image']) || is_null($this->container['Image'])) {
            return null;
        }
        return $this->container['Image'];
    }

    /**
     * Sets Image
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Image|null $Image Image
     *
     * @return self
     */
    public function setImage($Image)
    {
        if (is_null($Image)) {
            array_push($this->openAPINullablesSetToNull, 'Image');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Image', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Image'] = $Image;

        return $this;
    }

    /**
     * Gets ImageUrl
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        if (!isset($this->container['ImageUrl']) || is_null($this->container['ImageUrl'])) {
            return null;
        }
        return $this->container['ImageUrl'];
    }

    /**
     * Sets ImageUrl
     *
     * @param string|null $ImageUrl ImageUrl
     *
     * @return self
     */
    public function setImageUrl($ImageUrl)
    {
        if (is_null($ImageUrl)) {
            array_push($this->openAPINullablesSetToNull, 'ImageUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ImageUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ImageUrl'] = $ImageUrl;

        return $this;
    }

    /**
     * Gets AssetLink
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink|null
     */
    public function getAssetLink()
    {
        if (!isset($this->container['AssetLink']) || is_null($this->container['AssetLink'])) {
            return null;
        }
        return $this->container['AssetLink'];
    }

    /**
     * Sets AssetLink
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetLink|null $AssetLink AssetLink
     *
     * @return self
     */
    public function setAssetLink($AssetLink)
    {
        if (is_null($AssetLink)) {
            array_push($this->openAPINullablesSetToNull, 'AssetLink');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AssetLink', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AssetLink'] = $AssetLink;

        return $this;
    }

    /**
     * Gets ImageMetadata
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageSuggestionMetadata|null
     */
    public function getImageMetadata()
    {
        if (!isset($this->container['ImageMetadata']) || is_null($this->container['ImageMetadata'])) {
            return null;
        }
        return $this->container['ImageMetadata'];
    }

    /**
     * Sets ImageMetadata
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageSuggestionMetadata|null $ImageMetadata ImageMetadata
     *
     * @return self
     */
    public function setImageMetadata($ImageMetadata)
    {
        if (is_null($ImageMetadata)) {
            array_push($this->openAPINullablesSetToNull, 'ImageMetadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ImageMetadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ImageMetadata'] = $ImageMetadata;

        return $this;
    }

    /**
     * Gets InternalTemplate
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationTemplate|null
     */
    public function getInternalTemplate()
    {
        if (!isset($this->container['InternalTemplate']) || is_null($this->container['InternalTemplate'])) {
            return null;
        }
        return $this->container['InternalTemplate'];
    }

    /**
     * Sets InternalTemplate
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationTemplate|null $InternalTemplate InternalTemplate
     *
     * @return self
     */
    public function setInternalTemplate($InternalTemplate)
    {
        if (is_null($InternalTemplate)) {
            array_push($this->openAPINullablesSetToNull, 'InternalTemplate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('InternalTemplate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['InternalTemplate'] = $InternalTemplate;

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
