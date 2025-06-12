<?php
/**
 * RecommendationTemplate
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

class RecommendationTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RecommendationTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Style' => 'int',
        'TemplateId' => 'string',
        'TemplateName' => 'string',
        'Version' => 'string',
        'Image' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationImage',
        'Logo' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationImage',
        'BusinessName' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText',
        'ShortHeadline' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText',
        'LongHeadline' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText',
        'Description' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText',
        'Cta' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText',
        'AssetProperties' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationAssetProperty[]',
        'Background' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationBackground',
        'Color' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationColor[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Style' => 'int32',
        'TemplateId' => null,
        'TemplateName' => null,
        'Version' => null,
        'Image' => null,
        'Logo' => null,
        'BusinessName' => null,
        'ShortHeadline' => null,
        'LongHeadline' => null,
        'Description' => null,
        'Cta' => null,
        'AssetProperties' => null,
        'Background' => null,
        'Color' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Style' => false,
        'TemplateId' => true,
        'TemplateName' => true,
        'Version' => true,
        'Image' => true,
        'Logo' => true,
        'BusinessName' => true,
        'ShortHeadline' => true,
        'LongHeadline' => true,
        'Description' => true,
        'Cta' => true,
        'AssetProperties' => true,
        'Background' => true,
        'Color' => true
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
        'Style' => 'style',
        'TemplateId' => 'templateId',
        'TemplateName' => 'templateName',
        'Version' => 'version',
        'Image' => 'image',
        'Logo' => 'logo',
        'BusinessName' => 'businessName',
        'ShortHeadline' => 'shortHeadline',
        'LongHeadline' => 'longHeadline',
        'Description' => 'description',
        'Cta' => 'cta',
        'AssetProperties' => 'assetProperties',
        'Background' => 'background',
        'Color' => 'color'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Style' => 'setStyle',
        'TemplateId' => 'setTemplateId',
        'TemplateName' => 'setTemplateName',
        'Version' => 'setVersion',
        'Image' => 'setImage',
        'Logo' => 'setLogo',
        'BusinessName' => 'setBusinessName',
        'ShortHeadline' => 'setShortHeadline',
        'LongHeadline' => 'setLongHeadline',
        'Description' => 'setDescription',
        'Cta' => 'setCta',
        'AssetProperties' => 'setAssetProperties',
        'Background' => 'setBackground',
        'Color' => 'setColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Style' => 'getStyle',
        'TemplateId' => 'getTemplateId',
        'TemplateName' => 'getTemplateName',
        'Version' => 'getVersion',
        'Image' => 'getImage',
        'Logo' => 'getLogo',
        'BusinessName' => 'getBusinessName',
        'ShortHeadline' => 'getShortHeadline',
        'LongHeadline' => 'getLongHeadline',
        'Description' => 'getDescription',
        'Cta' => 'getCta',
        'AssetProperties' => 'getAssetProperties',
        'Background' => 'getBackground',
        'Color' => 'getColor'
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
        $this->setIfExists('Style', $data ?? [], null);
        $this->setIfExists('TemplateId', $data ?? [], null);
        $this->setIfExists('TemplateName', $data ?? [], null);
        $this->setIfExists('Version', $data ?? [], null);
        $this->setIfExists('Image', $data ?? [], null);
        $this->setIfExists('Logo', $data ?? [], null);
        $this->setIfExists('BusinessName', $data ?? [], null);
        $this->setIfExists('ShortHeadline', $data ?? [], null);
        $this->setIfExists('LongHeadline', $data ?? [], null);
        $this->setIfExists('Description', $data ?? [], null);
        $this->setIfExists('Cta', $data ?? [], null);
        $this->setIfExists('AssetProperties', $data ?? [], null);
        $this->setIfExists('Background', $data ?? [], null);
        $this->setIfExists('Color', $data ?? [], null);
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
     * Gets Style
     *
     * @return int|null
     */
    public function getStyle()
    {
        if (!isset($this->container['Style']) || is_null($this->container['Style'])) {
            return null;
        }
        return $this->container['Style'];
    }

    /**
     * Sets Style
     *
     * @param int|null $Style Style
     *
     * @return self
     */
    public function setStyle($Style)
    {
        if (is_null($Style)) {
            throw new \InvalidArgumentException('non-nullable Style cannot be null');
        }
        $this->container['Style'] = $Style;

        return $this;
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
     * Gets Version
     *
     * @return string|null
     */
    public function getVersion()
    {
        if (!isset($this->container['Version']) || is_null($this->container['Version'])) {
            return null;
        }
        return $this->container['Version'];
    }

    /**
     * Sets Version
     *
     * @param string|null $Version Version
     *
     * @return self
     */
    public function setVersion($Version)
    {
        if (is_null($Version)) {
            array_push($this->openAPINullablesSetToNull, 'Version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Version'] = $Version;

        return $this;
    }

    /**
     * Gets Image
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationImage|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationImage|null $Image Image
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
     * Gets Logo
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationImage|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationImage|null $Logo Logo
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
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText|null $BusinessName BusinessName
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
     * Gets ShortHeadline
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText|null
     */
    public function getShortHeadline()
    {
        if (!isset($this->container['ShortHeadline']) || is_null($this->container['ShortHeadline'])) {
            return null;
        }
        return $this->container['ShortHeadline'];
    }

    /**
     * Sets ShortHeadline
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText|null $ShortHeadline ShortHeadline
     *
     * @return self
     */
    public function setShortHeadline($ShortHeadline)
    {
        if (is_null($ShortHeadline)) {
            array_push($this->openAPINullablesSetToNull, 'ShortHeadline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ShortHeadline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ShortHeadline'] = $ShortHeadline;

        return $this;
    }

    /**
     * Gets LongHeadline
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText|null
     */
    public function getLongHeadline()
    {
        if (!isset($this->container['LongHeadline']) || is_null($this->container['LongHeadline'])) {
            return null;
        }
        return $this->container['LongHeadline'];
    }

    /**
     * Sets LongHeadline
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText|null $LongHeadline LongHeadline
     *
     * @return self
     */
    public function setLongHeadline($LongHeadline)
    {
        if (is_null($LongHeadline)) {
            array_push($this->openAPINullablesSetToNull, 'LongHeadline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LongHeadline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LongHeadline'] = $LongHeadline;

        return $this;
    }

    /**
     * Gets Description
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText|null
     */
    public function getDescription()
    {
        if (!isset($this->container['Description']) || is_null($this->container['Description'])) {
            return null;
        }
        return $this->container['Description'];
    }

    /**
     * Sets Description
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText|null $Description Description
     *
     * @return self
     */
    public function setDescription($Description)
    {
        if (is_null($Description)) {
            array_push($this->openAPINullablesSetToNull, 'Description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Description'] = $Description;

        return $this;
    }

    /**
     * Gets Cta
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText|null
     */
    public function getCta()
    {
        if (!isset($this->container['Cta']) || is_null($this->container['Cta'])) {
            return null;
        }
        return $this->container['Cta'];
    }

    /**
     * Sets Cta
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationText|null $Cta Cta
     *
     * @return self
     */
    public function setCta($Cta)
    {
        if (is_null($Cta)) {
            array_push($this->openAPINullablesSetToNull, 'Cta');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Cta', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Cta'] = $Cta;

        return $this;
    }

    /**
     * Gets AssetProperties
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationAssetProperty[]|null
     */
    public function getAssetProperties()
    {
        if (!isset($this->container['AssetProperties']) || is_null($this->container['AssetProperties'])) {
            return null;
        }
        return $this->container['AssetProperties'];
    }

    /**
     * Sets AssetProperties
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationAssetProperty[]|null $AssetProperties AssetProperties
     *
     * @return self
     */
    public function setAssetProperties($AssetProperties)
    {
        if (is_null($AssetProperties)) {
            array_push($this->openAPINullablesSetToNull, 'AssetProperties');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AssetProperties', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AssetProperties'] = $AssetProperties;

        return $this;
    }

    /**
     * Gets Background
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationBackground|null
     */
    public function getBackground()
    {
        if (!isset($this->container['Background']) || is_null($this->container['Background'])) {
            return null;
        }
        return $this->container['Background'];
    }

    /**
     * Sets Background
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationBackground|null $Background Background
     *
     * @return self
     */
    public function setBackground($Background)
    {
        if (is_null($Background)) {
            array_push($this->openAPINullablesSetToNull, 'Background');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Background', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Background'] = $Background;

        return $this;
    }

    /**
     * Gets Color
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationColor[]|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RecommendationColor[]|null $Color Color
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
