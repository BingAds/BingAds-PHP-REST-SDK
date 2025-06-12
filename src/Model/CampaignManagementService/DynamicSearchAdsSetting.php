<?php
/**
 * DynamicSearchAdsSetting
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

class DynamicSearchAdsSetting extends Setting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DynamicSearchAdsSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'DomainName' => 'string',
        'Language' => 'string',
        'Source' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\DynamicSearchAdsSource',
        'PageFeedIds' => 'string[]',
        'DynamicDescriptionEnabled' => 'bool',
        'Type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'DomainName' => null,
        'Language' => null,
        'Source' => null,
        'PageFeedIds' => 'int64',
        'DynamicDescriptionEnabled' => null,
        'Type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'DomainName' => true,
        'Language' => true,
        'Source' => false,
        'PageFeedIds' => true,
        'DynamicDescriptionEnabled' => true,
        'Type' => true
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
        'DomainName' => 'DomainName',
        'Language' => 'Language',
        'Source' => 'Source',
        'PageFeedIds' => 'PageFeedIds',
        'DynamicDescriptionEnabled' => 'DynamicDescriptionEnabled',
        'Type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'DomainName' => 'setDomainName',
        'Language' => 'setLanguage',
        'Source' => 'setSource',
        'PageFeedIds' => 'setPageFeedIds',
        'DynamicDescriptionEnabled' => 'setDynamicDescriptionEnabled',
        'Type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'DomainName' => 'getDomainName',
        'Language' => 'getLanguage',
        'Source' => 'getSource',
        'PageFeedIds' => 'getPageFeedIds',
        'DynamicDescriptionEnabled' => 'getDynamicDescriptionEnabled',
        'Type' => 'getType'
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
        $this->setIfExists('DomainName', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('Source', $data ?? [], null);
        $this->setIfExists('PageFeedIds', $data ?? [], null);
        $this->setIfExists('DynamicDescriptionEnabled', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'DynamicSearchAdsSetting');
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
     * Gets DomainName
     *
     * @return string|null
     */
    public function getDomainName()
    {
        if (!isset($this->container['DomainName']) || is_null($this->container['DomainName'])) {
            return null;
        }
        return $this->container['DomainName'];
    }

    /**
     * Sets DomainName
     *
     * @param string|null $DomainName DomainName
     *
     * @return self
     */
    public function setDomainName($DomainName)
    {
        if (is_null($DomainName)) {
            array_push($this->openAPINullablesSetToNull, 'DomainName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DomainName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DomainName'] = $DomainName;

        return $this;
    }

    /**
     * Gets Language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        if (!isset($this->container['Language']) || is_null($this->container['Language'])) {
            return null;
        }
        return $this->container['Language'];
    }

    /**
     * Sets Language
     *
     * @param string|null $Language Language
     *
     * @return self
     */
    public function setLanguage($Language)
    {
        if (is_null($Language)) {
            array_push($this->openAPINullablesSetToNull, 'Language');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Language', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Language'] = $Language;

        return $this;
    }

    /**
     * Gets Source
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\DynamicSearchAdsSource|mixed|null
     */
    public function getSource()
    {
        if (!isset($this->container['Source']) || is_null($this->container['Source'])) {
            return null;
        }
        if ((is_object($this->container['Source']) || is_string($this->container['Source'])) && method_exists($this->container['Source'], 'getValue')) {
            return $this->container['Source']->getValue();
        }
        return $this->container['Source'];
    }

    /**
     * Sets Source
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\DynamicSearchAdsSource|mixed|null $Source Source
     *
     * @return self
     */
    public function setSource($Source)
    {
        if (is_null($Source)) {
            throw new \InvalidArgumentException('non-nullable Source cannot be null');
        }
        if (!$Source instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\DynamicSearchAdsSource) {
            $Source = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\DynamicSearchAdsSource($Source);
        }
        $this->container['Source'] = $Source;

        return $this;
    }

    /**
     * Gets PageFeedIds
     *
     * @return string[]|null
     */
    public function getPageFeedIds()
    {
        if (!isset($this->container['PageFeedIds']) || is_null($this->container['PageFeedIds'])) {
            return null;
        }
        return $this->container['PageFeedIds'];
    }

    /**
     * Sets PageFeedIds
     *
     * @param string[]|null $PageFeedIds PageFeedIds
     *
     * @return self
     */
    public function setPageFeedIds($PageFeedIds)
    {
        if (is_null($PageFeedIds)) {
            array_push($this->openAPINullablesSetToNull, 'PageFeedIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PageFeedIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PageFeedIds'] = $PageFeedIds;

        return $this;
    }

    /**
     * Gets DynamicDescriptionEnabled
     *
     * @return bool|null
     */
    public function getDynamicDescriptionEnabled()
    {
        if (!isset($this->container['DynamicDescriptionEnabled']) || is_null($this->container['DynamicDescriptionEnabled'])) {
            return null;
        }
        return $this->container['DynamicDescriptionEnabled'];
    }

    /**
     * Sets DynamicDescriptionEnabled
     *
     * @param bool|null $DynamicDescriptionEnabled DynamicDescriptionEnabled
     *
     * @return self
     */
    public function setDynamicDescriptionEnabled($DynamicDescriptionEnabled)
    {
        if (is_null($DynamicDescriptionEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'DynamicDescriptionEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DynamicDescriptionEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DynamicDescriptionEnabled'] = $DynamicDescriptionEnabled;

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
