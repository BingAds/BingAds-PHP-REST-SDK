<?php
/**
 * BrandKit
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

class BrandKit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BrandKit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'BusinessName' => 'string',
        'Images' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitImage[]',
        'SquareLogos' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitImage[]',
        'LandscapeLogos' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitImage[]',
        'Palettes' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitPalette[]',
        'Fonts' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitFont[]'
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
        'BusinessName' => null,
        'Images' => null,
        'SquareLogos' => null,
        'LandscapeLogos' => null,
        'Palettes' => null,
        'Fonts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'Name' => true,
        'BusinessName' => true,
        'Images' => true,
        'SquareLogos' => true,
        'LandscapeLogos' => true,
        'Palettes' => true,
        'Fonts' => true
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
        'BusinessName' => 'BusinessName',
        'Images' => 'Images',
        'SquareLogos' => 'SquareLogos',
        'LandscapeLogos' => 'LandscapeLogos',
        'Palettes' => 'Palettes',
        'Fonts' => 'Fonts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'Name' => 'setName',
        'BusinessName' => 'setBusinessName',
        'Images' => 'setImages',
        'SquareLogos' => 'setSquareLogos',
        'LandscapeLogos' => 'setLandscapeLogos',
        'Palettes' => 'setPalettes',
        'Fonts' => 'setFonts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'Name' => 'getName',
        'BusinessName' => 'getBusinessName',
        'Images' => 'getImages',
        'SquareLogos' => 'getSquareLogos',
        'LandscapeLogos' => 'getLandscapeLogos',
        'Palettes' => 'getPalettes',
        'Fonts' => 'getFonts'
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
        $this->setIfExists('BusinessName', $data ?? [], null);
        $this->setIfExists('Images', $data ?? [], null);
        $this->setIfExists('SquareLogos', $data ?? [], null);
        $this->setIfExists('LandscapeLogos', $data ?? [], null);
        $this->setIfExists('Palettes', $data ?? [], null);
        $this->setIfExists('Fonts', $data ?? [], null);
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
     * Gets BusinessName
     *
     * @return string|null
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
     * @param string|null $BusinessName BusinessName
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
     * Gets Images
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitImage[]|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitImage[]|null $Images Images
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
     * Gets SquareLogos
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitImage[]|null
     */
    public function getSquareLogos()
    {
        if (!isset($this->container['SquareLogos']) || is_null($this->container['SquareLogos'])) {
            return null;
        }
        return $this->container['SquareLogos'];
    }

    /**
     * Sets SquareLogos
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitImage[]|null $SquareLogos SquareLogos
     *
     * @return self
     */
    public function setSquareLogos($SquareLogos)
    {
        if (is_null($SquareLogos)) {
            array_push($this->openAPINullablesSetToNull, 'SquareLogos');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SquareLogos', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SquareLogos'] = $SquareLogos;

        return $this;
    }

    /**
     * Gets LandscapeLogos
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitImage[]|null
     */
    public function getLandscapeLogos()
    {
        if (!isset($this->container['LandscapeLogos']) || is_null($this->container['LandscapeLogos'])) {
            return null;
        }
        return $this->container['LandscapeLogos'];
    }

    /**
     * Sets LandscapeLogos
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitImage[]|null $LandscapeLogos LandscapeLogos
     *
     * @return self
     */
    public function setLandscapeLogos($LandscapeLogos)
    {
        if (is_null($LandscapeLogos)) {
            array_push($this->openAPINullablesSetToNull, 'LandscapeLogos');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LandscapeLogos', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LandscapeLogos'] = $LandscapeLogos;

        return $this;
    }

    /**
     * Gets Palettes
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitPalette[]|null
     */
    public function getPalettes()
    {
        if (!isset($this->container['Palettes']) || is_null($this->container['Palettes'])) {
            return null;
        }
        return $this->container['Palettes'];
    }

    /**
     * Sets Palettes
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitPalette[]|null $Palettes Palettes
     *
     * @return self
     */
    public function setPalettes($Palettes)
    {
        if (is_null($Palettes)) {
            array_push($this->openAPINullablesSetToNull, 'Palettes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Palettes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Palettes'] = $Palettes;

        return $this;
    }

    /**
     * Gets Fonts
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitFont[]|null
     */
    public function getFonts()
    {
        if (!isset($this->container['Fonts']) || is_null($this->container['Fonts'])) {
            return null;
        }
        return $this->container['Fonts'];
    }

    /**
     * Sets Fonts
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\BrandKitFont[]|null $Fonts Fonts
     *
     * @return self
     */
    public function setFonts($Fonts)
    {
        if (is_null($Fonts)) {
            array_push($this->openAPINullablesSetToNull, 'Fonts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Fonts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Fonts'] = $Fonts;

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
