<?php
/**
 * KeywordIdea
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

class KeywordIdea implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'KeywordIdea';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Keyword' => 'string',
        'AdGroupId' => 'string',
        'AdGroupName' => 'string',
        'Source' => '\Microsoft\MsAds\Rest\Model\AdInsightService\SourceType',
        'MonthlySearchCounts' => 'string[]',
        'SuggestedBid' => 'float',
        'Competition' => '\Microsoft\MsAds\Rest\Model\AdInsightService\CompetitionLevel',
        'Relevance' => 'float',
        'AdImpressionShare' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Keyword' => null,
        'AdGroupId' => 'int64',
        'AdGroupName' => null,
        'Source' => null,
        'MonthlySearchCounts' => 'int64',
        'SuggestedBid' => 'double',
        'Competition' => null,
        'Relevance' => 'double',
        'AdImpressionShare' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Keyword' => true,
        'AdGroupId' => true,
        'AdGroupName' => true,
        'Source' => false,
        'MonthlySearchCounts' => true,
        'SuggestedBid' => true,
        'Competition' => false,
        'Relevance' => true,
        'AdImpressionShare' => true
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
        'Keyword' => 'Keyword',
        'AdGroupId' => 'AdGroupId',
        'AdGroupName' => 'AdGroupName',
        'Source' => 'Source',
        'MonthlySearchCounts' => 'MonthlySearchCounts',
        'SuggestedBid' => 'SuggestedBid',
        'Competition' => 'Competition',
        'Relevance' => 'Relevance',
        'AdImpressionShare' => 'AdImpressionShare'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Keyword' => 'setKeyword',
        'AdGroupId' => 'setAdGroupId',
        'AdGroupName' => 'setAdGroupName',
        'Source' => 'setSource',
        'MonthlySearchCounts' => 'setMonthlySearchCounts',
        'SuggestedBid' => 'setSuggestedBid',
        'Competition' => 'setCompetition',
        'Relevance' => 'setRelevance',
        'AdImpressionShare' => 'setAdImpressionShare'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Keyword' => 'getKeyword',
        'AdGroupId' => 'getAdGroupId',
        'AdGroupName' => 'getAdGroupName',
        'Source' => 'getSource',
        'MonthlySearchCounts' => 'getMonthlySearchCounts',
        'SuggestedBid' => 'getSuggestedBid',
        'Competition' => 'getCompetition',
        'Relevance' => 'getRelevance',
        'AdImpressionShare' => 'getAdImpressionShare'
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
        $this->setIfExists('Keyword', $data ?? [], null);
        $this->setIfExists('AdGroupId', $data ?? [], null);
        $this->setIfExists('AdGroupName', $data ?? [], null);
        $this->setIfExists('Source', $data ?? [], null);
        $this->setIfExists('MonthlySearchCounts', $data ?? [], null);
        $this->setIfExists('SuggestedBid', $data ?? [], null);
        $this->setIfExists('Competition', $data ?? [], null);
        $this->setIfExists('Relevance', $data ?? [], null);
        $this->setIfExists('AdImpressionShare', $data ?? [], null);
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
     * Gets Keyword
     *
     * @return string|null
     */
    public function getKeyword()
    {
        if (!isset($this->container['Keyword']) || is_null($this->container['Keyword'])) {
            return null;
        }
        return $this->container['Keyword'];
    }

    /**
     * Sets Keyword
     *
     * @param string|null $Keyword Keyword
     *
     * @return self
     */
    public function setKeyword($Keyword)
    {
        if (is_null($Keyword)) {
            array_push($this->openAPINullablesSetToNull, 'Keyword');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Keyword', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Keyword'] = $Keyword;

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
     * Gets AdGroupName
     *
     * @return string|null
     */
    public function getAdGroupName()
    {
        if (!isset($this->container['AdGroupName']) || is_null($this->container['AdGroupName'])) {
            return null;
        }
        return $this->container['AdGroupName'];
    }

    /**
     * Sets AdGroupName
     *
     * @param string|null $AdGroupName AdGroupName
     *
     * @return self
     */
    public function setAdGroupName($AdGroupName)
    {
        if (is_null($AdGroupName)) {
            array_push($this->openAPINullablesSetToNull, 'AdGroupName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdGroupName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdGroupName'] = $AdGroupName;

        return $this;
    }

    /**
     * Gets Source
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SourceType|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\SourceType|mixed|null $Source Source
     *
     * @return self
     */
    public function setSource($Source)
    {
        if (is_null($Source)) {
            throw new \InvalidArgumentException('non-nullable Source cannot be null');
        }
        if (!$Source instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\SourceType) {
            $Source = new \Microsoft\MsAds\Rest\Model\AdInsightService\SourceType($Source);
        }
        $this->container['Source'] = $Source;

        return $this;
    }

    /**
     * Gets MonthlySearchCounts
     *
     * @return string[]|null
     */
    public function getMonthlySearchCounts()
    {
        if (!isset($this->container['MonthlySearchCounts']) || is_null($this->container['MonthlySearchCounts'])) {
            return null;
        }
        return $this->container['MonthlySearchCounts'];
    }

    /**
     * Sets MonthlySearchCounts
     *
     * @param string[]|null $MonthlySearchCounts MonthlySearchCounts
     *
     * @return self
     */
    public function setMonthlySearchCounts($MonthlySearchCounts)
    {
        if (is_null($MonthlySearchCounts)) {
            array_push($this->openAPINullablesSetToNull, 'MonthlySearchCounts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MonthlySearchCounts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MonthlySearchCounts'] = $MonthlySearchCounts;

        return $this;
    }

    /**
     * Gets SuggestedBid
     *
     * @return float|null
     */
    public function getSuggestedBid()
    {
        if (!isset($this->container['SuggestedBid']) || is_null($this->container['SuggestedBid'])) {
            return null;
        }
        return $this->container['SuggestedBid'];
    }

    /**
     * Sets SuggestedBid
     *
     * @param float|null $SuggestedBid SuggestedBid
     *
     * @return self
     */
    public function setSuggestedBid($SuggestedBid)
    {
        if (is_null($SuggestedBid)) {
            array_push($this->openAPINullablesSetToNull, 'SuggestedBid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuggestedBid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuggestedBid'] = $SuggestedBid;

        return $this;
    }

    /**
     * Gets Competition
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\CompetitionLevel|mixed|null
     */
    public function getCompetition()
    {
        if (!isset($this->container['Competition']) || is_null($this->container['Competition'])) {
            return null;
        }
        if ((is_object($this->container['Competition']) || is_string($this->container['Competition'])) && method_exists($this->container['Competition'], 'getValue')) {
            return $this->container['Competition']->getValue();
        }
        return $this->container['Competition'];
    }

    /**
     * Sets Competition
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\CompetitionLevel|mixed|null $Competition Competition
     *
     * @return self
     */
    public function setCompetition($Competition)
    {
        if (is_null($Competition)) {
            throw new \InvalidArgumentException('non-nullable Competition cannot be null');
        }
        if (!$Competition instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\CompetitionLevel) {
            $Competition = new \Microsoft\MsAds\Rest\Model\AdInsightService\CompetitionLevel($Competition);
        }
        $this->container['Competition'] = $Competition;

        return $this;
    }

    /**
     * Gets Relevance
     *
     * @return float|null
     */
    public function getRelevance()
    {
        if (!isset($this->container['Relevance']) || is_null($this->container['Relevance'])) {
            return null;
        }
        return $this->container['Relevance'];
    }

    /**
     * Sets Relevance
     *
     * @param float|null $Relevance Relevance
     *
     * @return self
     */
    public function setRelevance($Relevance)
    {
        if (is_null($Relevance)) {
            array_push($this->openAPINullablesSetToNull, 'Relevance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Relevance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Relevance'] = $Relevance;

        return $this;
    }

    /**
     * Gets AdImpressionShare
     *
     * @return float|null
     */
    public function getAdImpressionShare()
    {
        if (!isset($this->container['AdImpressionShare']) || is_null($this->container['AdImpressionShare'])) {
            return null;
        }
        return $this->container['AdImpressionShare'];
    }

    /**
     * Sets AdImpressionShare
     *
     * @param float|null $AdImpressionShare AdImpressionShare
     *
     * @return self
     */
    public function setAdImpressionShare($AdImpressionShare)
    {
        if (is_null($AdImpressionShare)) {
            array_push($this->openAPINullablesSetToNull, 'AdImpressionShare');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdImpressionShare', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdImpressionShare'] = $AdImpressionShare;

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
