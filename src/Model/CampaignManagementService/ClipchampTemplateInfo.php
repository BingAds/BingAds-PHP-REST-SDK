<?php
/**
 * ClipchampTemplateInfo
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

class ClipchampTemplateInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ClipchampTemplateInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'TemplateId' => 'string',
        'TemplateName' => 'string',
        'TemplateDescription' => 'string',
        'Duration' => 'int',
        'AspectRatio' => 'string',
        'Themes' => 'string[]',
        'NumberOfImages' => 'int',
        'NumberOfText' => 'int',
        'NumberOfLogos' => 'int',
        'TemplateThumbnailUrl' => 'string',
        'TemplatePreviewUrl' => 'string'
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
        'TemplateName' => null,
        'TemplateDescription' => null,
        'Duration' => 'int32',
        'AspectRatio' => null,
        'Themes' => null,
        'NumberOfImages' => 'int32',
        'NumberOfText' => 'int32',
        'NumberOfLogos' => 'int32',
        'TemplateThumbnailUrl' => null,
        'TemplatePreviewUrl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'TemplateId' => true,
        'TemplateName' => true,
        'TemplateDescription' => true,
        'Duration' => false,
        'AspectRatio' => true,
        'Themes' => true,
        'NumberOfImages' => false,
        'NumberOfText' => false,
        'NumberOfLogos' => false,
        'TemplateThumbnailUrl' => true,
        'TemplatePreviewUrl' => true
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
        'TemplateName' => 'TemplateName',
        'TemplateDescription' => 'TemplateDescription',
        'Duration' => 'Duration',
        'AspectRatio' => 'AspectRatio',
        'Themes' => 'Themes',
        'NumberOfImages' => 'NumberOfImages',
        'NumberOfText' => 'NumberOfText',
        'NumberOfLogos' => 'NumberOfLogos',
        'TemplateThumbnailUrl' => 'TemplateThumbnailUrl',
        'TemplatePreviewUrl' => 'TemplatePreviewUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'TemplateId' => 'setTemplateId',
        'TemplateName' => 'setTemplateName',
        'TemplateDescription' => 'setTemplateDescription',
        'Duration' => 'setDuration',
        'AspectRatio' => 'setAspectRatio',
        'Themes' => 'setThemes',
        'NumberOfImages' => 'setNumberOfImages',
        'NumberOfText' => 'setNumberOfText',
        'NumberOfLogos' => 'setNumberOfLogos',
        'TemplateThumbnailUrl' => 'setTemplateThumbnailUrl',
        'TemplatePreviewUrl' => 'setTemplatePreviewUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'TemplateId' => 'getTemplateId',
        'TemplateName' => 'getTemplateName',
        'TemplateDescription' => 'getTemplateDescription',
        'Duration' => 'getDuration',
        'AspectRatio' => 'getAspectRatio',
        'Themes' => 'getThemes',
        'NumberOfImages' => 'getNumberOfImages',
        'NumberOfText' => 'getNumberOfText',
        'NumberOfLogos' => 'getNumberOfLogos',
        'TemplateThumbnailUrl' => 'getTemplateThumbnailUrl',
        'TemplatePreviewUrl' => 'getTemplatePreviewUrl'
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
        $this->setIfExists('TemplateName', $data ?? [], null);
        $this->setIfExists('TemplateDescription', $data ?? [], null);
        $this->setIfExists('Duration', $data ?? [], null);
        $this->setIfExists('AspectRatio', $data ?? [], null);
        $this->setIfExists('Themes', $data ?? [], null);
        $this->setIfExists('NumberOfImages', $data ?? [], null);
        $this->setIfExists('NumberOfText', $data ?? [], null);
        $this->setIfExists('NumberOfLogos', $data ?? [], null);
        $this->setIfExists('TemplateThumbnailUrl', $data ?? [], null);
        $this->setIfExists('TemplatePreviewUrl', $data ?? [], null);
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
     * Gets TemplateName
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        if (!isset($this->container['TemplateName']) || is_null($this->container['TemplateName'])) {
            return null;
        }
        return $this->container['TemplateName'];
    }

    /**
     * Sets TemplateName
     *
     * @param string|null $TemplateName TemplateName
     *
     * @return self
     */
    public function setTemplateName($TemplateName)
    {
        if (is_null($TemplateName)) {
            array_push($this->openAPINullablesSetToNull, 'TemplateName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TemplateName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TemplateName'] = $TemplateName;

        return $this;
    }

    /**
     * Gets TemplateDescription
     *
     * @return string|null
     */
    public function getTemplateDescription()
    {
        if (!isset($this->container['TemplateDescription']) || is_null($this->container['TemplateDescription'])) {
            return null;
        }
        return $this->container['TemplateDescription'];
    }

    /**
     * Sets TemplateDescription
     *
     * @param string|null $TemplateDescription TemplateDescription
     *
     * @return self
     */
    public function setTemplateDescription($TemplateDescription)
    {
        if (is_null($TemplateDescription)) {
            array_push($this->openAPINullablesSetToNull, 'TemplateDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TemplateDescription', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TemplateDescription'] = $TemplateDescription;

        return $this;
    }

    /**
     * Gets Duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        if (!isset($this->container['Duration']) || is_null($this->container['Duration'])) {
            return null;
        }
        return $this->container['Duration'];
    }

    /**
     * Sets Duration
     *
     * @param int|null $Duration Duration
     *
     * @return self
     */
    public function setDuration($Duration)
    {
        if (is_null($Duration)) {
            throw new \InvalidArgumentException('non-nullable Duration cannot be null');
        }
        $this->container['Duration'] = $Duration;

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
     * Gets Themes
     *
     * @return string[]|null
     */
    public function getThemes()
    {
        if (!isset($this->container['Themes']) || is_null($this->container['Themes'])) {
            return null;
        }
        return $this->container['Themes'];
    }

    /**
     * Sets Themes
     *
     * @param string[]|null $Themes Themes
     *
     * @return self
     */
    public function setThemes($Themes)
    {
        if (is_null($Themes)) {
            array_push($this->openAPINullablesSetToNull, 'Themes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Themes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Themes'] = $Themes;

        return $this;
    }

    /**
     * Gets NumberOfImages
     *
     * @return int|null
     */
    public function getNumberOfImages()
    {
        if (!isset($this->container['NumberOfImages']) || is_null($this->container['NumberOfImages'])) {
            return null;
        }
        return $this->container['NumberOfImages'];
    }

    /**
     * Sets NumberOfImages
     *
     * @param int|null $NumberOfImages NumberOfImages
     *
     * @return self
     */
    public function setNumberOfImages($NumberOfImages)
    {
        if (is_null($NumberOfImages)) {
            throw new \InvalidArgumentException('non-nullable NumberOfImages cannot be null');
        }
        $this->container['NumberOfImages'] = $NumberOfImages;

        return $this;
    }

    /**
     * Gets NumberOfText
     *
     * @return int|null
     */
    public function getNumberOfText()
    {
        if (!isset($this->container['NumberOfText']) || is_null($this->container['NumberOfText'])) {
            return null;
        }
        return $this->container['NumberOfText'];
    }

    /**
     * Sets NumberOfText
     *
     * @param int|null $NumberOfText NumberOfText
     *
     * @return self
     */
    public function setNumberOfText($NumberOfText)
    {
        if (is_null($NumberOfText)) {
            throw new \InvalidArgumentException('non-nullable NumberOfText cannot be null');
        }
        $this->container['NumberOfText'] = $NumberOfText;

        return $this;
    }

    /**
     * Gets NumberOfLogos
     *
     * @return int|null
     */
    public function getNumberOfLogos()
    {
        if (!isset($this->container['NumberOfLogos']) || is_null($this->container['NumberOfLogos'])) {
            return null;
        }
        return $this->container['NumberOfLogos'];
    }

    /**
     * Sets NumberOfLogos
     *
     * @param int|null $NumberOfLogos NumberOfLogos
     *
     * @return self
     */
    public function setNumberOfLogos($NumberOfLogos)
    {
        if (is_null($NumberOfLogos)) {
            throw new \InvalidArgumentException('non-nullable NumberOfLogos cannot be null');
        }
        $this->container['NumberOfLogos'] = $NumberOfLogos;

        return $this;
    }

    /**
     * Gets TemplateThumbnailUrl
     *
     * @return string|null
     */
    public function getTemplateThumbnailUrl()
    {
        if (!isset($this->container['TemplateThumbnailUrl']) || is_null($this->container['TemplateThumbnailUrl'])) {
            return null;
        }
        return $this->container['TemplateThumbnailUrl'];
    }

    /**
     * Sets TemplateThumbnailUrl
     *
     * @param string|null $TemplateThumbnailUrl TemplateThumbnailUrl
     *
     * @return self
     */
    public function setTemplateThumbnailUrl($TemplateThumbnailUrl)
    {
        if (is_null($TemplateThumbnailUrl)) {
            array_push($this->openAPINullablesSetToNull, 'TemplateThumbnailUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TemplateThumbnailUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TemplateThumbnailUrl'] = $TemplateThumbnailUrl;

        return $this;
    }

    /**
     * Gets TemplatePreviewUrl
     *
     * @return string|null
     */
    public function getTemplatePreviewUrl()
    {
        if (!isset($this->container['TemplatePreviewUrl']) || is_null($this->container['TemplatePreviewUrl'])) {
            return null;
        }
        return $this->container['TemplatePreviewUrl'];
    }

    /**
     * Sets TemplatePreviewUrl
     *
     * @param string|null $TemplatePreviewUrl TemplatePreviewUrl
     *
     * @return self
     */
    public function setTemplatePreviewUrl($TemplatePreviewUrl)
    {
        if (is_null($TemplatePreviewUrl)) {
            array_push($this->openAPINullablesSetToNull, 'TemplatePreviewUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TemplatePreviewUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TemplatePreviewUrl'] = $TemplatePreviewUrl;

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
