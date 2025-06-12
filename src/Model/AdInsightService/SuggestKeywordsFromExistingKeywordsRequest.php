<?php
/**
 * SuggestKeywordsFromExistingKeywordsRequest
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

class SuggestKeywordsFromExistingKeywordsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SuggestKeywordsFromExistingKeywordsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Keywords' => 'string[]',
        'Language' => 'string',
        'PublisherCountries' => 'string[]',
        'MaxSuggestionsPerKeyword' => 'int',
        'SuggestionType' => 'int',
        'RemoveDuplicates' => 'bool',
        'ExcludeBrand' => 'bool',
        'AdGroupId' => 'string',
        'CampaignId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Keywords' => null,
        'Language' => null,
        'PublisherCountries' => null,
        'MaxSuggestionsPerKeyword' => 'int32',
        'SuggestionType' => 'int32',
        'RemoveDuplicates' => null,
        'ExcludeBrand' => null,
        'AdGroupId' => 'int64',
        'CampaignId' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Keywords' => true,
        'Language' => true,
        'PublisherCountries' => true,
        'MaxSuggestionsPerKeyword' => true,
        'SuggestionType' => true,
        'RemoveDuplicates' => true,
        'ExcludeBrand' => true,
        'AdGroupId' => true,
        'CampaignId' => true
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
        'Keywords' => 'Keywords',
        'Language' => 'Language',
        'PublisherCountries' => 'PublisherCountries',
        'MaxSuggestionsPerKeyword' => 'MaxSuggestionsPerKeyword',
        'SuggestionType' => 'SuggestionType',
        'RemoveDuplicates' => 'RemoveDuplicates',
        'ExcludeBrand' => 'ExcludeBrand',
        'AdGroupId' => 'AdGroupId',
        'CampaignId' => 'CampaignId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Keywords' => 'setKeywords',
        'Language' => 'setLanguage',
        'PublisherCountries' => 'setPublisherCountries',
        'MaxSuggestionsPerKeyword' => 'setMaxSuggestionsPerKeyword',
        'SuggestionType' => 'setSuggestionType',
        'RemoveDuplicates' => 'setRemoveDuplicates',
        'ExcludeBrand' => 'setExcludeBrand',
        'AdGroupId' => 'setAdGroupId',
        'CampaignId' => 'setCampaignId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Keywords' => 'getKeywords',
        'Language' => 'getLanguage',
        'PublisherCountries' => 'getPublisherCountries',
        'MaxSuggestionsPerKeyword' => 'getMaxSuggestionsPerKeyword',
        'SuggestionType' => 'getSuggestionType',
        'RemoveDuplicates' => 'getRemoveDuplicates',
        'ExcludeBrand' => 'getExcludeBrand',
        'AdGroupId' => 'getAdGroupId',
        'CampaignId' => 'getCampaignId'
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
        $this->setIfExists('Keywords', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('PublisherCountries', $data ?? [], null);
        $this->setIfExists('MaxSuggestionsPerKeyword', $data ?? [], null);
        $this->setIfExists('SuggestionType', $data ?? [], null);
        $this->setIfExists('RemoveDuplicates', $data ?? [], null);
        $this->setIfExists('ExcludeBrand', $data ?? [], null);
        $this->setIfExists('AdGroupId', $data ?? [], null);
        $this->setIfExists('CampaignId', $data ?? [], null);
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
     * Gets Keywords
     *
     * @return string[]|null
     */
    public function getKeywords()
    {
        if (!isset($this->container['Keywords']) || is_null($this->container['Keywords'])) {
            return null;
        }
        return $this->container['Keywords'];
    }

    /**
     * Sets Keywords
     *
     * @param string[]|null $Keywords Keywords
     *
     * @return self
     */
    public function setKeywords($Keywords)
    {
        if (is_null($Keywords)) {
            array_push($this->openAPINullablesSetToNull, 'Keywords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Keywords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Keywords'] = $Keywords;

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
     * Gets PublisherCountries
     *
     * @return string[]|null
     */
    public function getPublisherCountries()
    {
        if (!isset($this->container['PublisherCountries']) || is_null($this->container['PublisherCountries'])) {
            return null;
        }
        return $this->container['PublisherCountries'];
    }

    /**
     * Sets PublisherCountries
     *
     * @param string[]|null $PublisherCountries PublisherCountries
     *
     * @return self
     */
    public function setPublisherCountries($PublisherCountries)
    {
        if (is_null($PublisherCountries)) {
            array_push($this->openAPINullablesSetToNull, 'PublisherCountries');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PublisherCountries', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PublisherCountries'] = $PublisherCountries;

        return $this;
    }

    /**
     * Gets MaxSuggestionsPerKeyword
     *
     * @return int|null
     */
    public function getMaxSuggestionsPerKeyword()
    {
        if (!isset($this->container['MaxSuggestionsPerKeyword']) || is_null($this->container['MaxSuggestionsPerKeyword'])) {
            return null;
        }
        return $this->container['MaxSuggestionsPerKeyword'];
    }

    /**
     * Sets MaxSuggestionsPerKeyword
     *
     * @param int|null $MaxSuggestionsPerKeyword MaxSuggestionsPerKeyword
     *
     * @return self
     */
    public function setMaxSuggestionsPerKeyword($MaxSuggestionsPerKeyword)
    {
        if (is_null($MaxSuggestionsPerKeyword)) {
            array_push($this->openAPINullablesSetToNull, 'MaxSuggestionsPerKeyword');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MaxSuggestionsPerKeyword', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MaxSuggestionsPerKeyword'] = $MaxSuggestionsPerKeyword;

        return $this;
    }

    /**
     * Gets SuggestionType
     *
     * @return int|null
     */
    public function getSuggestionType()
    {
        if (!isset($this->container['SuggestionType']) || is_null($this->container['SuggestionType'])) {
            return null;
        }
        return $this->container['SuggestionType'];
    }

    /**
     * Sets SuggestionType
     *
     * @param int|null $SuggestionType SuggestionType
     *
     * @return self
     */
    public function setSuggestionType($SuggestionType)
    {
        if (is_null($SuggestionType)) {
            array_push($this->openAPINullablesSetToNull, 'SuggestionType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuggestionType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuggestionType'] = $SuggestionType;

        return $this;
    }

    /**
     * Gets RemoveDuplicates
     *
     * @return bool|null
     */
    public function getRemoveDuplicates()
    {
        if (!isset($this->container['RemoveDuplicates']) || is_null($this->container['RemoveDuplicates'])) {
            return null;
        }
        return $this->container['RemoveDuplicates'];
    }

    /**
     * Sets RemoveDuplicates
     *
     * @param bool|null $RemoveDuplicates RemoveDuplicates
     *
     * @return self
     */
    public function setRemoveDuplicates($RemoveDuplicates)
    {
        if (is_null($RemoveDuplicates)) {
            array_push($this->openAPINullablesSetToNull, 'RemoveDuplicates');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RemoveDuplicates', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RemoveDuplicates'] = $RemoveDuplicates;

        return $this;
    }

    /**
     * Gets ExcludeBrand
     *
     * @return bool|null
     */
    public function getExcludeBrand()
    {
        if (!isset($this->container['ExcludeBrand']) || is_null($this->container['ExcludeBrand'])) {
            return null;
        }
        return $this->container['ExcludeBrand'];
    }

    /**
     * Sets ExcludeBrand
     *
     * @param bool|null $ExcludeBrand ExcludeBrand
     *
     * @return self
     */
    public function setExcludeBrand($ExcludeBrand)
    {
        if (is_null($ExcludeBrand)) {
            array_push($this->openAPINullablesSetToNull, 'ExcludeBrand');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExcludeBrand', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExcludeBrand'] = $ExcludeBrand;

        return $this;
    }

    /**
     * Gets AdGroupId
     *
     * @return string|null
     */
    public function getAdGroupId()
    {
        if (!isset($this->container['AdGroupId']) || is_null($this->container['AdGroupId'])) {
            return null;
        }
        return $this->container['AdGroupId'];
    }

    /**
     * Sets AdGroupId
     *
     * @param string|null $AdGroupId AdGroupId
     *
     * @return self
     */
    public function setAdGroupId($AdGroupId)
    {
        if (is_null($AdGroupId)) {
            array_push($this->openAPINullablesSetToNull, 'AdGroupId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdGroupId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdGroupId'] = $AdGroupId;

        return $this;
    }

    /**
     * Gets CampaignId
     *
     * @return string|null
     */
    public function getCampaignId()
    {
        if (!isset($this->container['CampaignId']) || is_null($this->container['CampaignId'])) {
            return null;
        }
        return $this->container['CampaignId'];
    }

    /**
     * Sets CampaignId
     *
     * @param string|null $CampaignId CampaignId
     *
     * @return self
     */
    public function setCampaignId($CampaignId)
    {
        if (is_null($CampaignId)) {
            array_push($this->openAPINullablesSetToNull, 'CampaignId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CampaignId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CampaignId'] = $CampaignId;

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
