<?php
/**
 * GetClipchampTemplatesRequest
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

class GetClipchampTemplatesRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetClipchampTemplatesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Mock' => 'bool',
        'MaxAdsCount' => 'int',
        'TemplateFilter' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoTemplateFilter',
        'Locale' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Mock' => null,
        'MaxAdsCount' => 'int32',
        'TemplateFilter' => null,
        'Locale' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Mock' => true,
        'MaxAdsCount' => true,
        'TemplateFilter' => true,
        'Locale' => true
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
        'Mock' => 'Mock',
        'MaxAdsCount' => 'MaxAdsCount',
        'TemplateFilter' => 'TemplateFilter',
        'Locale' => 'Locale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Mock' => 'setMock',
        'MaxAdsCount' => 'setMaxAdsCount',
        'TemplateFilter' => 'setTemplateFilter',
        'Locale' => 'setLocale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Mock' => 'getMock',
        'MaxAdsCount' => 'getMaxAdsCount',
        'TemplateFilter' => 'getTemplateFilter',
        'Locale' => 'getLocale'
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
        $this->setIfExists('Mock', $data ?? [], null);
        $this->setIfExists('MaxAdsCount', $data ?? [], null);
        $this->setIfExists('TemplateFilter', $data ?? [], null);
        $this->setIfExists('Locale', $data ?? [], null);
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
     * Gets Mock
     *
     * @return bool|null
     */
    public function getMock()
    {
        if (!isset($this->container['Mock']) || is_null($this->container['Mock'])) {
            return null;
        }
        return $this->container['Mock'];
    }

    /**
     * Sets Mock
     *
     * @param bool|null $Mock Mock
     *
     * @return self
     */
    public function setMock($Mock)
    {
        if (is_null($Mock)) {
            array_push($this->openAPINullablesSetToNull, 'Mock');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Mock', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Mock'] = $Mock;

        return $this;
    }

    /**
     * Gets MaxAdsCount
     *
     * @return int|null
     */
    public function getMaxAdsCount()
    {
        if (!isset($this->container['MaxAdsCount']) || is_null($this->container['MaxAdsCount'])) {
            return null;
        }
        return $this->container['MaxAdsCount'];
    }

    /**
     * Sets MaxAdsCount
     *
     * @param int|null $MaxAdsCount MaxAdsCount
     *
     * @return self
     */
    public function setMaxAdsCount($MaxAdsCount)
    {
        if (is_null($MaxAdsCount)) {
            array_push($this->openAPINullablesSetToNull, 'MaxAdsCount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MaxAdsCount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MaxAdsCount'] = $MaxAdsCount;

        return $this;
    }

    /**
     * Gets TemplateFilter
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoTemplateFilter|null
     */
    public function getTemplateFilter()
    {
        if (!isset($this->container['TemplateFilter']) || is_null($this->container['TemplateFilter'])) {
            return null;
        }
        return $this->container['TemplateFilter'];
    }

    /**
     * Sets TemplateFilter
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\VideoTemplateFilter|null $TemplateFilter TemplateFilter
     *
     * @return self
     */
    public function setTemplateFilter($TemplateFilter)
    {
        if (is_null($TemplateFilter)) {
            array_push($this->openAPINullablesSetToNull, 'TemplateFilter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TemplateFilter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TemplateFilter'] = $TemplateFilter;

        return $this;
    }

    /**
     * Gets Locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        if (!isset($this->container['Locale']) || is_null($this->container['Locale'])) {
            return null;
        }
        return $this->container['Locale'];
    }

    /**
     * Sets Locale
     *
     * @param string|null $Locale Locale
     *
     * @return self
     */
    public function setLocale($Locale)
    {
        if (is_null($Locale)) {
            array_push($this->openAPINullablesSetToNull, 'Locale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Locale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Locale'] = $Locale;

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
