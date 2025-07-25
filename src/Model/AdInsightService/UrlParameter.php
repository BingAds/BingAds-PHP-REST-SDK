<?php
/**
 * UrlParameter
 * AdInsightService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\AdInsightService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\AdInsightService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class UrlParameter extends PerformanceInsightsMessageParameter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UrlParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'SuggestedText' => 'string',
        'UrlCategory' => '\Microsoft\MsAds\Rest\Model\AdInsightService\PerformanceInsightsUrlCategory',
        'UrlId' => '\Microsoft\MsAds\Rest\Model\AdInsightService\PerformanceInsightsUrlId',
        'SuggestedUrl' => 'string',
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
        'SuggestedText' => null,
        'UrlCategory' => null,
        'UrlId' => null,
        'SuggestedUrl' => null,
        'Type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'SuggestedText' => true,
        'UrlCategory' => false,
        'UrlId' => false,
        'SuggestedUrl' => true,
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
        'SuggestedText' => 'SuggestedText',
        'UrlCategory' => 'UrlCategory',
        'UrlId' => 'UrlId',
        'SuggestedUrl' => 'SuggestedUrl',
        'Type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'SuggestedText' => 'setSuggestedText',
        'UrlCategory' => 'setUrlCategory',
        'UrlId' => 'setUrlId',
        'SuggestedUrl' => 'setSuggestedUrl',
        'Type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'SuggestedText' => 'getSuggestedText',
        'UrlCategory' => 'getUrlCategory',
        'UrlId' => 'getUrlId',
        'SuggestedUrl' => 'getSuggestedUrl',
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
        $this->setIfExists('SuggestedText', $data ?? [], null);
        $this->setIfExists('UrlCategory', $data ?? [], null);
        $this->setIfExists('UrlId', $data ?? [], null);
        $this->setIfExists('SuggestedUrl', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'Url');
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
     * Gets SuggestedText
     *
     * @return string|null
     */
    public function getSuggestedText()
    {
        if (!isset($this->container['SuggestedText']) || is_null($this->container['SuggestedText'])) {
            return null;
        }
        return $this->container['SuggestedText'];
    }

    /**
     * Sets SuggestedText
     *
     * @param string|null $SuggestedText SuggestedText
     *
     * @return self
     */
    public function setSuggestedText($SuggestedText)
    {
        if (is_null($SuggestedText)) {
            array_push($this->openAPINullablesSetToNull, 'SuggestedText');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuggestedText', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuggestedText'] = $SuggestedText;

        return $this;
    }

    /**
     * Gets UrlCategory
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\PerformanceInsightsUrlCategory|mixed|null
     */
    public function getUrlCategory()
    {
        if (!isset($this->container['UrlCategory']) || is_null($this->container['UrlCategory'])) {
            return null;
        }
        if ((is_object($this->container['UrlCategory']) || is_string($this->container['UrlCategory'])) && method_exists($this->container['UrlCategory'], 'getValue')) {
            return $this->container['UrlCategory']->getValue();
        }
        return $this->container['UrlCategory'];
    }

    /**
     * Sets UrlCategory
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\PerformanceInsightsUrlCategory|mixed|null $UrlCategory UrlCategory
     *
     * @return self
     */
    public function setUrlCategory($UrlCategory)
    {
        if (is_null($UrlCategory)) {
            throw new \InvalidArgumentException('non-nullable UrlCategory cannot be null');
        }
        if (!$UrlCategory instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\PerformanceInsightsUrlCategory) {
            $UrlCategory = new \Microsoft\MsAds\Rest\Model\AdInsightService\PerformanceInsightsUrlCategory($UrlCategory);
        }
        $this->container['UrlCategory'] = $UrlCategory;

        return $this;
    }

    /**
     * Gets UrlId
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\PerformanceInsightsUrlId|mixed|null
     */
    public function getUrlId()
    {
        if (!isset($this->container['UrlId']) || is_null($this->container['UrlId'])) {
            return null;
        }
        if ((is_object($this->container['UrlId']) || is_string($this->container['UrlId'])) && method_exists($this->container['UrlId'], 'getValue')) {
            return $this->container['UrlId']->getValue();
        }
        return $this->container['UrlId'];
    }

    /**
     * Sets UrlId
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\PerformanceInsightsUrlId|mixed|null $UrlId UrlId
     *
     * @return self
     */
    public function setUrlId($UrlId)
    {
        if (is_null($UrlId)) {
            throw new \InvalidArgumentException('non-nullable UrlId cannot be null');
        }
        if (!$UrlId instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\PerformanceInsightsUrlId) {
            $UrlId = new \Microsoft\MsAds\Rest\Model\AdInsightService\PerformanceInsightsUrlId($UrlId);
        }
        $this->container['UrlId'] = $UrlId;

        return $this;
    }

    /**
     * Gets SuggestedUrl
     *
     * @return string|null
     */
    public function getSuggestedUrl()
    {
        if (!isset($this->container['SuggestedUrl']) || is_null($this->container['SuggestedUrl'])) {
            return null;
        }
        return $this->container['SuggestedUrl'];
    }

    /**
     * Sets SuggestedUrl
     *
     * @param string|null $SuggestedUrl SuggestedUrl
     *
     * @return self
     */
    public function setSuggestedUrl($SuggestedUrl)
    {
        if (is_null($SuggestedUrl)) {
            array_push($this->openAPINullablesSetToNull, 'SuggestedUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuggestedUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuggestedUrl'] = $SuggestedUrl;

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
