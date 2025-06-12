<?php
/**
 * RecommendationImage
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

class RecommendationImage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RecommendationImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AssetId' => 'string',
        'Url' => 'string',
        'Editable' => 'bool',
        'Source' => 'string',
        'RecommendationId' => 'string',
        'ImageSize' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationImageSize',
        'CropSetting' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationCropSetting[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'AssetId' => null,
        'Url' => null,
        'Editable' => null,
        'Source' => null,
        'RecommendationId' => null,
        'ImageSize' => null,
        'CropSetting' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AssetId' => true,
        'Url' => true,
        'Editable' => false,
        'Source' => true,
        'RecommendationId' => true,
        'ImageSize' => true,
        'CropSetting' => true
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
        'AssetId' => 'assetId',
        'Url' => 'url',
        'Editable' => 'editable',
        'Source' => 'source',
        'RecommendationId' => 'recommendationId',
        'ImageSize' => 'imageSize',
        'CropSetting' => 'cropSetting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AssetId' => 'setAssetId',
        'Url' => 'setUrl',
        'Editable' => 'setEditable',
        'Source' => 'setSource',
        'RecommendationId' => 'setRecommendationId',
        'ImageSize' => 'setImageSize',
        'CropSetting' => 'setCropSetting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AssetId' => 'getAssetId',
        'Url' => 'getUrl',
        'Editable' => 'getEditable',
        'Source' => 'getSource',
        'RecommendationId' => 'getRecommendationId',
        'ImageSize' => 'getImageSize',
        'CropSetting' => 'getCropSetting'
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
        $this->setIfExists('AssetId', $data ?? [], null);
        $this->setIfExists('Url', $data ?? [], null);
        $this->setIfExists('Editable', $data ?? [], null);
        $this->setIfExists('Source', $data ?? [], null);
        $this->setIfExists('RecommendationId', $data ?? [], null);
        $this->setIfExists('ImageSize', $data ?? [], null);
        $this->setIfExists('CropSetting', $data ?? [], null);
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
     * Gets AssetId
     *
     * @return string|null
     */
    public function getAssetId()
    {
        if (!isset($this->container['AssetId']) || is_null($this->container['AssetId'])) {
            return null;
        }
        return $this->container['AssetId'];
    }

    /**
     * Sets AssetId
     *
     * @param string|null $AssetId AssetId
     *
     * @return self
     */
    public function setAssetId($AssetId)
    {
        if (is_null($AssetId)) {
            array_push($this->openAPINullablesSetToNull, 'AssetId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AssetId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AssetId'] = $AssetId;

        return $this;
    }

    /**
     * Gets Url
     *
     * @return string|null
     */
    public function getUrl()
    {
        if (!isset($this->container['Url']) || is_null($this->container['Url'])) {
            return null;
        }
        return $this->container['Url'];
    }

    /**
     * Sets Url
     *
     * @param string|null $Url Url
     *
     * @return self
     */
    public function setUrl($Url)
    {
        if (is_null($Url)) {
            array_push($this->openAPINullablesSetToNull, 'Url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Url'] = $Url;

        return $this;
    }

    /**
     * Gets Editable
     *
     * @return bool|null
     */
    public function getEditable()
    {
        if (!isset($this->container['Editable']) || is_null($this->container['Editable'])) {
            return null;
        }
        return $this->container['Editable'];
    }

    /**
     * Sets Editable
     *
     * @param bool|null $Editable Editable
     *
     * @return self
     */
    public function setEditable($Editable)
    {
        if (is_null($Editable)) {
            throw new \InvalidArgumentException('non-nullable Editable cannot be null');
        }
        $this->container['Editable'] = $Editable;

        return $this;
    }

    /**
     * Gets Source
     *
     * @return string|null
     */
    public function getSource()
    {
        if (!isset($this->container['Source']) || is_null($this->container['Source'])) {
            return null;
        }
        return $this->container['Source'];
    }

    /**
     * Sets Source
     *
     * @param string|null $Source Source
     *
     * @return self
     */
    public function setSource($Source)
    {
        if (is_null($Source)) {
            array_push($this->openAPINullablesSetToNull, 'Source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Source'] = $Source;

        return $this;
    }

    /**
     * Gets RecommendationId
     *
     * @return string|null
     */
    public function getRecommendationId()
    {
        if (!isset($this->container['RecommendationId']) || is_null($this->container['RecommendationId'])) {
            return null;
        }
        return $this->container['RecommendationId'];
    }

    /**
     * Sets RecommendationId
     *
     * @param string|null $RecommendationId RecommendationId
     *
     * @return self
     */
    public function setRecommendationId($RecommendationId)
    {
        if (is_null($RecommendationId)) {
            array_push($this->openAPINullablesSetToNull, 'RecommendationId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RecommendationId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RecommendationId'] = $RecommendationId;

        return $this;
    }

    /**
     * Gets ImageSize
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationImageSize|null
     */
    public function getImageSize()
    {
        if (!isset($this->container['ImageSize']) || is_null($this->container['ImageSize'])) {
            return null;
        }
        return $this->container['ImageSize'];
    }

    /**
     * Sets ImageSize
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationImageSize|null $ImageSize ImageSize
     *
     * @return self
     */
    public function setImageSize($ImageSize)
    {
        if (is_null($ImageSize)) {
            array_push($this->openAPINullablesSetToNull, 'ImageSize');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ImageSize', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ImageSize'] = $ImageSize;

        return $this;
    }

    /**
     * Gets CropSetting
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationCropSetting[]|null
     */
    public function getCropSetting()
    {
        if (!isset($this->container['CropSetting']) || is_null($this->container['CropSetting'])) {
            return null;
        }
        return $this->container['CropSetting'];
    }

    /**
     * Sets CropSetting
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationCropSetting[]|null $CropSetting CropSetting
     *
     * @return self
     */
    public function setCropSetting($CropSetting)
    {
        if (is_null($CropSetting)) {
            array_push($this->openAPINullablesSetToNull, 'CropSetting');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CropSetting', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CropSetting'] = $CropSetting;

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
