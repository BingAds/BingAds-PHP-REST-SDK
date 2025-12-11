<?php
/**
 * Asset
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

class Asset implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'Type';

    /**
     * Associative array for mapping discriminator values to model class names
     *
     * @var string[]
     */
    public const MAPPINGS = [
        'ImageAsset' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAsset',
        'TextAsset' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\TextAsset',
        'VideoAsset' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoAsset',
    ];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Asset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'Type' => 'string',
        'Text' => 'string',
        'SubType' => 'string',
        'CropX' => 'int',
        'CropY' => 'int',
        'CropWidth' => 'int',
        'CropHeight' => 'int',
        'TargetWidth' => 'int',
        'TargetHeight' => 'int',
        'ThumbnailImage' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAsset'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Id' => 'int64',
        'Name' => null,
        'Type' => null,
        'Text' => null,
        'SubType' => null,
        'CropX' => 'int32',
        'CropY' => 'int32',
        'CropWidth' => 'int32',
        'CropHeight' => 'int32',
        'TargetWidth' => 'int32',
        'TargetHeight' => 'int32',
        'ThumbnailImage' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'Name' => true,
        'Type' => true,
        'Text' => true,
        'SubType' => true,
        'CropX' => true,
        'CropY' => true,
        'CropWidth' => true,
        'CropHeight' => true,
        'TargetWidth' => true,
        'TargetHeight' => true,
        'ThumbnailImage' => true
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
        'Id' => 'Id',
        'Name' => 'Name',
        'Type' => 'Type',
        'Text' => 'Text',
        'SubType' => 'SubType',
        'CropX' => 'CropX',
        'CropY' => 'CropY',
        'CropWidth' => 'CropWidth',
        'CropHeight' => 'CropHeight',
        'TargetWidth' => 'TargetWidth',
        'TargetHeight' => 'TargetHeight',
        'ThumbnailImage' => 'ThumbnailImage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'Name' => 'setName',
        'Type' => 'setType',
        'Text' => 'setText',
        'SubType' => 'setSubType',
        'CropX' => 'setCropX',
        'CropY' => 'setCropY',
        'CropWidth' => 'setCropWidth',
        'CropHeight' => 'setCropHeight',
        'TargetWidth' => 'setTargetWidth',
        'TargetHeight' => 'setTargetHeight',
        'ThumbnailImage' => 'setThumbnailImage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'Name' => 'getName',
        'Type' => 'getType',
        'Text' => 'getText',
        'SubType' => 'getSubType',
        'CropX' => 'getCropX',
        'CropY' => 'getCropY',
        'CropWidth' => 'getCropWidth',
        'CropHeight' => 'getCropHeight',
        'TargetWidth' => 'getTargetWidth',
        'TargetHeight' => 'getTargetHeight',
        'ThumbnailImage' => 'getThumbnailImage'
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
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], null);
        $this->setIfExists('Text', $data ?? [], null);
        $this->setIfExists('SubType', $data ?? [], null);
        $this->setIfExists('CropX', $data ?? [], null);
        $this->setIfExists('CropY', $data ?? [], null);
        $this->setIfExists('CropWidth', $data ?? [], null);
        $this->setIfExists('CropHeight', $data ?? [], null);
        $this->setIfExists('TargetWidth', $data ?? [], null);
        $this->setIfExists('TargetHeight', $data ?? [], null);
        $this->setIfExists('ThumbnailImage', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['Type'] = static::$openAPIModelName;
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
     * Gets Id
     *
     * @return string|null
     */
    public function getId()
    {
        if (!isset($this->container['Id']) || is_null($this->container['Id'])) {
            return null;
        }
        return $this->container['Id'];
    }

    /**
     * Sets Id
     *
     * @param string|null $Id Id
     *
     * @return self
     */
    public function setId($Id)
    {
        if (is_null($Id)) {
            array_push($this->openAPINullablesSetToNull, 'Id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Id'] = $Id;

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
     * Gets Text
     *
     * @return string|null
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
     * @param string|null $Text Text
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
     * Gets SubType
     *
     * @return string|null
     */
    public function getSubType()
    {
        if (!isset($this->container['SubType']) || is_null($this->container['SubType'])) {
            return null;
        }
        return $this->container['SubType'];
    }

    /**
     * Sets SubType
     *
     * @param string|null $SubType SubType
     *
     * @return self
     */
    public function setSubType($SubType)
    {
        if (is_null($SubType)) {
            array_push($this->openAPINullablesSetToNull, 'SubType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SubType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SubType'] = $SubType;

        return $this;
    }

    /**
     * Gets CropX
     *
     * @return int|null
     */
    public function getCropX()
    {
        if (!isset($this->container['CropX']) || is_null($this->container['CropX'])) {
            return null;
        }
        return $this->container['CropX'];
    }

    /**
     * Sets CropX
     *
     * @param int|null $CropX CropX
     *
     * @return self
     */
    public function setCropX($CropX)
    {
        if (is_null($CropX)) {
            array_push($this->openAPINullablesSetToNull, 'CropX');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CropX', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CropX'] = $CropX;

        return $this;
    }

    /**
     * Gets CropY
     *
     * @return int|null
     */
    public function getCropY()
    {
        if (!isset($this->container['CropY']) || is_null($this->container['CropY'])) {
            return null;
        }
        return $this->container['CropY'];
    }

    /**
     * Sets CropY
     *
     * @param int|null $CropY CropY
     *
     * @return self
     */
    public function setCropY($CropY)
    {
        if (is_null($CropY)) {
            array_push($this->openAPINullablesSetToNull, 'CropY');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CropY', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CropY'] = $CropY;

        return $this;
    }

    /**
     * Gets CropWidth
     *
     * @return int|null
     */
    public function getCropWidth()
    {
        if (!isset($this->container['CropWidth']) || is_null($this->container['CropWidth'])) {
            return null;
        }
        return $this->container['CropWidth'];
    }

    /**
     * Sets CropWidth
     *
     * @param int|null $CropWidth CropWidth
     *
     * @return self
     */
    public function setCropWidth($CropWidth)
    {
        if (is_null($CropWidth)) {
            array_push($this->openAPINullablesSetToNull, 'CropWidth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CropWidth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CropWidth'] = $CropWidth;

        return $this;
    }

    /**
     * Gets CropHeight
     *
     * @return int|null
     */
    public function getCropHeight()
    {
        if (!isset($this->container['CropHeight']) || is_null($this->container['CropHeight'])) {
            return null;
        }
        return $this->container['CropHeight'];
    }

    /**
     * Sets CropHeight
     *
     * @param int|null $CropHeight CropHeight
     *
     * @return self
     */
    public function setCropHeight($CropHeight)
    {
        if (is_null($CropHeight)) {
            array_push($this->openAPINullablesSetToNull, 'CropHeight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CropHeight', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CropHeight'] = $CropHeight;

        return $this;
    }

    /**
     * Gets TargetWidth
     *
     * @return int|null
     */
    public function getTargetWidth()
    {
        if (!isset($this->container['TargetWidth']) || is_null($this->container['TargetWidth'])) {
            return null;
        }
        return $this->container['TargetWidth'];
    }

    /**
     * Sets TargetWidth
     *
     * @param int|null $TargetWidth TargetWidth
     *
     * @return self
     */
    public function setTargetWidth($TargetWidth)
    {
        if (is_null($TargetWidth)) {
            array_push($this->openAPINullablesSetToNull, 'TargetWidth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetWidth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetWidth'] = $TargetWidth;

        return $this;
    }

    /**
     * Gets TargetHeight
     *
     * @return int|null
     */
    public function getTargetHeight()
    {
        if (!isset($this->container['TargetHeight']) || is_null($this->container['TargetHeight'])) {
            return null;
        }
        return $this->container['TargetHeight'];
    }

    /**
     * Sets TargetHeight
     *
     * @param int|null $TargetHeight TargetHeight
     *
     * @return self
     */
    public function setTargetHeight($TargetHeight)
    {
        if (is_null($TargetHeight)) {
            array_push($this->openAPINullablesSetToNull, 'TargetHeight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetHeight', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetHeight'] = $TargetHeight;

        return $this;
    }

    /**
     * Gets ThumbnailImage
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAsset|null
     */
    public function getThumbnailImage()
    {
        if (!isset($this->container['ThumbnailImage']) || is_null($this->container['ThumbnailImage'])) {
            return null;
        }
        return $this->container['ThumbnailImage'];
    }

    /**
     * Sets ThumbnailImage
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAsset|null $ThumbnailImage ThumbnailImage
     *
     * @return self
     */
    public function setThumbnailImage($ThumbnailImage)
    {
        if (is_null($ThumbnailImage)) {
            array_push($this->openAPINullablesSetToNull, 'ThumbnailImage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ThumbnailImage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ThumbnailImage'] = $ThumbnailImage;

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
