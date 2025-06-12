<?php
/**
 * RecommendationTemplateVideo
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

class RecommendationTemplateVideo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RecommendationTemplateVideo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'TemplateId' => 'string',
        'Logo' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationLogo',
        'BusinessName' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationBusinessName',
        'Duration' => 'int',
        'Audio' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationAudio',
        'Width' => 'int',
        'Height' => 'int',
        'BackgroundColor' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\SolidBackgroundAsset',
        'Scenes' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationScene[]'
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
        'Logo' => null,
        'BusinessName' => null,
        'Duration' => 'int32',
        'Audio' => null,
        'Width' => 'int32',
        'Height' => 'int32',
        'BackgroundColor' => null,
        'Scenes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'TemplateId' => true,
        'Logo' => true,
        'BusinessName' => true,
        'Duration' => false,
        'Audio' => true,
        'Width' => false,
        'Height' => false,
        'BackgroundColor' => true,
        'Scenes' => true
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
        'TemplateId' => 'templateId',
        'Logo' => 'logo',
        'BusinessName' => 'businessName',
        'Duration' => 'duration',
        'Audio' => 'audio',
        'Width' => 'width',
        'Height' => 'height',
        'BackgroundColor' => 'backgroundColor',
        'Scenes' => 'scenes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'TemplateId' => 'setTemplateId',
        'Logo' => 'setLogo',
        'BusinessName' => 'setBusinessName',
        'Duration' => 'setDuration',
        'Audio' => 'setAudio',
        'Width' => 'setWidth',
        'Height' => 'setHeight',
        'BackgroundColor' => 'setBackgroundColor',
        'Scenes' => 'setScenes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'TemplateId' => 'getTemplateId',
        'Logo' => 'getLogo',
        'BusinessName' => 'getBusinessName',
        'Duration' => 'getDuration',
        'Audio' => 'getAudio',
        'Width' => 'getWidth',
        'Height' => 'getHeight',
        'BackgroundColor' => 'getBackgroundColor',
        'Scenes' => 'getScenes'
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
        $this->setIfExists('Logo', $data ?? [], null);
        $this->setIfExists('BusinessName', $data ?? [], null);
        $this->setIfExists('Duration', $data ?? [], null);
        $this->setIfExists('Audio', $data ?? [], null);
        $this->setIfExists('Width', $data ?? [], null);
        $this->setIfExists('Height', $data ?? [], null);
        $this->setIfExists('BackgroundColor', $data ?? [], null);
        $this->setIfExists('Scenes', $data ?? [], null);
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
     * Gets Logo
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationLogo|null
     */
    public function getLogo()
    {
        if (!isset($this->container['Logo']) || is_null($this->container['Logo'])) {
            return null;
        }
        return $this->container['Logo'];
    }

    /**
     * Sets Logo
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationLogo|null $Logo Logo
     *
     * @return self
     */
    public function setLogo($Logo)
    {
        if (is_null($Logo)) {
            array_push($this->openAPINullablesSetToNull, 'Logo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Logo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Logo'] = $Logo;

        return $this;
    }

    /**
     * Gets BusinessName
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationBusinessName|null
     */
    public function getBusinessName()
    {
        if (!isset($this->container['BusinessName']) || is_null($this->container['BusinessName'])) {
            return null;
        }
        return $this->container['BusinessName'];
    }

    /**
     * Sets BusinessName
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationBusinessName|null $BusinessName BusinessName
     *
     * @return self
     */
    public function setBusinessName($BusinessName)
    {
        if (is_null($BusinessName)) {
            array_push($this->openAPINullablesSetToNull, 'BusinessName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BusinessName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BusinessName'] = $BusinessName;

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
     * Gets Audio
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationAudio|null
     */
    public function getAudio()
    {
        if (!isset($this->container['Audio']) || is_null($this->container['Audio'])) {
            return null;
        }
        return $this->container['Audio'];
    }

    /**
     * Sets Audio
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationAudio|null $Audio Audio
     *
     * @return self
     */
    public function setAudio($Audio)
    {
        if (is_null($Audio)) {
            array_push($this->openAPINullablesSetToNull, 'Audio');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Audio', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Audio'] = $Audio;

        return $this;
    }

    /**
     * Gets Width
     *
     * @return int|null
     */
    public function getWidth()
    {
        if (!isset($this->container['Width']) || is_null($this->container['Width'])) {
            return null;
        }
        return $this->container['Width'];
    }

    /**
     * Sets Width
     *
     * @param int|null $Width Width
     *
     * @return self
     */
    public function setWidth($Width)
    {
        if (is_null($Width)) {
            throw new \InvalidArgumentException('non-nullable Width cannot be null');
        }
        $this->container['Width'] = $Width;

        return $this;
    }

    /**
     * Gets Height
     *
     * @return int|null
     */
    public function getHeight()
    {
        if (!isset($this->container['Height']) || is_null($this->container['Height'])) {
            return null;
        }
        return $this->container['Height'];
    }

    /**
     * Sets Height
     *
     * @param int|null $Height Height
     *
     * @return self
     */
    public function setHeight($Height)
    {
        if (is_null($Height)) {
            throw new \InvalidArgumentException('non-nullable Height cannot be null');
        }
        $this->container['Height'] = $Height;

        return $this;
    }

    /**
     * Gets BackgroundColor
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\SolidBackgroundAsset|null
     */
    public function getBackgroundColor()
    {
        if (!isset($this->container['BackgroundColor']) || is_null($this->container['BackgroundColor'])) {
            return null;
        }
        return $this->container['BackgroundColor'];
    }

    /**
     * Sets BackgroundColor
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\SolidBackgroundAsset|null $BackgroundColor BackgroundColor
     *
     * @return self
     */
    public function setBackgroundColor($BackgroundColor)
    {
        if (is_null($BackgroundColor)) {
            array_push($this->openAPINullablesSetToNull, 'BackgroundColor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BackgroundColor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BackgroundColor'] = $BackgroundColor;

        return $this;
    }

    /**
     * Gets Scenes
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationScene[]|null
     */
    public function getScenes()
    {
        if (!isset($this->container['Scenes']) || is_null($this->container['Scenes'])) {
            return null;
        }
        return $this->container['Scenes'];
    }

    /**
     * Sets Scenes
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationScene[]|null $Scenes Scenes
     *
     * @return self
     */
    public function setScenes($Scenes)
    {
        if (is_null($Scenes)) {
            array_push($this->openAPINullablesSetToNull, 'Scenes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Scenes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Scenes'] = $Scenes;

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
