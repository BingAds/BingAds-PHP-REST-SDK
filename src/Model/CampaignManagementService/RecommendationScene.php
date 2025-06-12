<?php
/**
 * RecommendationScene
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

class RecommendationScene implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RecommendationScene';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Image' => 'string',
        'Images' => 'string[]',
        'ImageData' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoRecommendationImageData[]',
        'Text' => 'string[]',
        'TextData' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoRecommendationTextData[]',
        'Logos' => 'string[]',
        'LogoData' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoRecommendationImageData[]',
        'KeyFrame' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyFrame'
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
        'Images' => null,
        'ImageData' => null,
        'Text' => null,
        'TextData' => null,
        'Logos' => null,
        'LogoData' => null,
        'KeyFrame' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Image' => true,
        'Images' => true,
        'ImageData' => true,
        'Text' => true,
        'TextData' => true,
        'Logos' => true,
        'LogoData' => true,
        'KeyFrame' => true
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
        'Image' => 'image',
        'Images' => 'images',
        'ImageData' => 'imageData',
        'Text' => 'text',
        'TextData' => 'textData',
        'Logos' => 'logos',
        'LogoData' => 'logoData',
        'KeyFrame' => 'keyFrame'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Image' => 'setImage',
        'Images' => 'setImages',
        'ImageData' => 'setImageData',
        'Text' => 'setText',
        'TextData' => 'setTextData',
        'Logos' => 'setLogos',
        'LogoData' => 'setLogoData',
        'KeyFrame' => 'setKeyFrame'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Image' => 'getImage',
        'Images' => 'getImages',
        'ImageData' => 'getImageData',
        'Text' => 'getText',
        'TextData' => 'getTextData',
        'Logos' => 'getLogos',
        'LogoData' => 'getLogoData',
        'KeyFrame' => 'getKeyFrame'
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
        $this->setIfExists('Images', $data ?? [], null);
        $this->setIfExists('ImageData', $data ?? [], null);
        $this->setIfExists('Text', $data ?? [], null);
        $this->setIfExists('TextData', $data ?? [], null);
        $this->setIfExists('Logos', $data ?? [], null);
        $this->setIfExists('LogoData', $data ?? [], null);
        $this->setIfExists('KeyFrame', $data ?? [], null);
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
     * @return string|null
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
     * @param string|null $Image Image
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
     * Gets Images
     *
     * @return string[]|null
     */
    public function getImages()
    {
        if (!isset($this->container['Images']) || is_null($this->container['Images'])) {
            return null;
        }
        return $this->container['Images'];
    }

    /**
     * Sets Images
     *
     * @param string[]|null $Images Images
     *
     * @return self
     */
    public function setImages($Images)
    {
        if (is_null($Images)) {
            array_push($this->openAPINullablesSetToNull, 'Images');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Images', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Images'] = $Images;

        return $this;
    }

    /**
     * Gets ImageData
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoRecommendationImageData[]|null
     */
    public function getImageData()
    {
        if (!isset($this->container['ImageData']) || is_null($this->container['ImageData'])) {
            return null;
        }
        return $this->container['ImageData'];
    }

    /**
     * Sets ImageData
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoRecommendationImageData[]|null $ImageData ImageData
     *
     * @return self
     */
    public function setImageData($ImageData)
    {
        if (is_null($ImageData)) {
            array_push($this->openAPINullablesSetToNull, 'ImageData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ImageData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ImageData'] = $ImageData;

        return $this;
    }

    /**
     * Gets Text
     *
     * @return string[]|null
     */
    public function getText()
    {
        if (!isset($this->container['Text']) || is_null($this->container['Text'])) {
            return null;
        }
        return $this->container['Text'];
    }

    /**
     * Sets Text
     *
     * @param string[]|null $Text Text
     *
     * @return self
     */
    public function setText($Text)
    {
        if (is_null($Text)) {
            array_push($this->openAPINullablesSetToNull, 'Text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Text'] = $Text;

        return $this;
    }

    /**
     * Gets TextData
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoRecommendationTextData[]|null
     */
    public function getTextData()
    {
        if (!isset($this->container['TextData']) || is_null($this->container['TextData'])) {
            return null;
        }
        return $this->container['TextData'];
    }

    /**
     * Sets TextData
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoRecommendationTextData[]|null $TextData TextData
     *
     * @return self
     */
    public function setTextData($TextData)
    {
        if (is_null($TextData)) {
            array_push($this->openAPINullablesSetToNull, 'TextData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TextData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TextData'] = $TextData;

        return $this;
    }

    /**
     * Gets Logos
     *
     * @return string[]|null
     */
    public function getLogos()
    {
        if (!isset($this->container['Logos']) || is_null($this->container['Logos'])) {
            return null;
        }
        return $this->container['Logos'];
    }

    /**
     * Sets Logos
     *
     * @param string[]|null $Logos Logos
     *
     * @return self
     */
    public function setLogos($Logos)
    {
        if (is_null($Logos)) {
            array_push($this->openAPINullablesSetToNull, 'Logos');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Logos', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Logos'] = $Logos;

        return $this;
    }

    /**
     * Gets LogoData
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoRecommendationImageData[]|null
     */
    public function getLogoData()
    {
        if (!isset($this->container['LogoData']) || is_null($this->container['LogoData'])) {
            return null;
        }
        return $this->container['LogoData'];
    }

    /**
     * Sets LogoData
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoRecommendationImageData[]|null $LogoData LogoData
     *
     * @return self
     */
    public function setLogoData($LogoData)
    {
        if (is_null($LogoData)) {
            array_push($this->openAPINullablesSetToNull, 'LogoData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LogoData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LogoData'] = $LogoData;

        return $this;
    }

    /**
     * Gets KeyFrame
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyFrame|null
     */
    public function getKeyFrame()
    {
        if (!isset($this->container['KeyFrame']) || is_null($this->container['KeyFrame'])) {
            return null;
        }
        return $this->container['KeyFrame'];
    }

    /**
     * Sets KeyFrame
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyFrame|null $KeyFrame KeyFrame
     *
     * @return self
     */
    public function setKeyFrame($KeyFrame)
    {
        if (is_null($KeyFrame)) {
            array_push($this->openAPINullablesSetToNull, 'KeyFrame');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('KeyFrame', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['KeyFrame'] = $KeyFrame;

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
