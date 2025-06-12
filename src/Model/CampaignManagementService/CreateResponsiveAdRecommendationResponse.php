<?php
/**
 * CreateResponsiveAdRecommendationResponse
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

class CreateResponsiveAdRecommendationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CreateResponsiveAdRecommendationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ResponsiveAd' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ResponsiveAd',
        'ImageSuggestions' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageSuggestion[]',
        'VideoSuggestions' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationVideoSuggestion[]',
        'PromptBrandWarning' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ResponsiveAd' => null,
        'ImageSuggestions' => null,
        'VideoSuggestions' => null,
        'PromptBrandWarning' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ResponsiveAd' => true,
        'ImageSuggestions' => true,
        'VideoSuggestions' => true,
        'PromptBrandWarning' => true
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
        'ResponsiveAd' => 'ResponsiveAd',
        'ImageSuggestions' => 'ImageSuggestions',
        'VideoSuggestions' => 'VideoSuggestions',
        'PromptBrandWarning' => 'PromptBrandWarning'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ResponsiveAd' => 'setResponsiveAd',
        'ImageSuggestions' => 'setImageSuggestions',
        'VideoSuggestions' => 'setVideoSuggestions',
        'PromptBrandWarning' => 'setPromptBrandWarning'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ResponsiveAd' => 'getResponsiveAd',
        'ImageSuggestions' => 'getImageSuggestions',
        'VideoSuggestions' => 'getVideoSuggestions',
        'PromptBrandWarning' => 'getPromptBrandWarning'
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
        $this->setIfExists('ResponsiveAd', $data ?? [], null);
        $this->setIfExists('ImageSuggestions', $data ?? [], null);
        $this->setIfExists('VideoSuggestions', $data ?? [], null);
        $this->setIfExists('PromptBrandWarning', $data ?? [], null);
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
     * Gets ResponsiveAd
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ResponsiveAd|null
     */
    public function getResponsiveAd()
    {
        if (!isset($this->container['ResponsiveAd']) || is_null($this->container['ResponsiveAd'])) {
            return null;
        }
        return $this->container['ResponsiveAd'];
    }

    /**
     * Sets ResponsiveAd
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ResponsiveAd|null $ResponsiveAd ResponsiveAd
     *
     * @return self
     */
    public function setResponsiveAd($ResponsiveAd)
    {
        if (is_null($ResponsiveAd)) {
            array_push($this->openAPINullablesSetToNull, 'ResponsiveAd');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ResponsiveAd', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ResponsiveAd'] = $ResponsiveAd;

        return $this;
    }

    /**
     * Gets ImageSuggestions
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageSuggestion[]|null
     */
    public function getImageSuggestions()
    {
        if (!isset($this->container['ImageSuggestions']) || is_null($this->container['ImageSuggestions'])) {
            return null;
        }
        return $this->container['ImageSuggestions'];
    }

    /**
     * Sets ImageSuggestions
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationImageSuggestion[]|null $ImageSuggestions ImageSuggestions
     *
     * @return self
     */
    public function setImageSuggestions($ImageSuggestions)
    {
        if (is_null($ImageSuggestions)) {
            array_push($this->openAPINullablesSetToNull, 'ImageSuggestions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ImageSuggestions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ImageSuggestions'] = $ImageSuggestions;

        return $this;
    }

    /**
     * Gets VideoSuggestions
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationVideoSuggestion[]|null
     */
    public function getVideoSuggestions()
    {
        if (!isset($this->container['VideoSuggestions']) || is_null($this->container['VideoSuggestions'])) {
            return null;
        }
        return $this->container['VideoSuggestions'];
    }

    /**
     * Sets VideoSuggestions
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationVideoSuggestion[]|null $VideoSuggestions VideoSuggestions
     *
     * @return self
     */
    public function setVideoSuggestions($VideoSuggestions)
    {
        if (is_null($VideoSuggestions)) {
            array_push($this->openAPINullablesSetToNull, 'VideoSuggestions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('VideoSuggestions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['VideoSuggestions'] = $VideoSuggestions;

        return $this;
    }

    /**
     * Gets PromptBrandWarning
     *
     * @return string|null
     */
    public function getPromptBrandWarning()
    {
        if (!isset($this->container['PromptBrandWarning']) || is_null($this->container['PromptBrandWarning'])) {
            return null;
        }
        return $this->container['PromptBrandWarning'];
    }

    /**
     * Sets PromptBrandWarning
     *
     * @param string|null $PromptBrandWarning PromptBrandWarning
     *
     * @return self
     */
    public function setPromptBrandWarning($PromptBrandWarning)
    {
        if (is_null($PromptBrandWarning)) {
            array_push($this->openAPINullablesSetToNull, 'PromptBrandWarning');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PromptBrandWarning', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PromptBrandWarning'] = $PromptBrandWarning;

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
