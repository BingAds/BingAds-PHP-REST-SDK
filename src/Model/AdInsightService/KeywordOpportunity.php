<?php
/**
 * KeywordOpportunity
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

class KeywordOpportunity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'KeywordOpportunity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AdGroupId' => 'string',
        'CampaignId' => 'string',
        'AdGroupName' => 'string',
        'CampaignName' => 'string',
        'MatchType' => 'int',
        'SuggestedKeyword' => 'string',
        'SuggestedBid' => 'float',
        'MonthlySearches' => 'string',
        'Competition' => 'float',
        'EstimatedIncreaseInClicks' => 'float',
        'EstimatedIncreaseInCost' => 'float',
        'EstimatedIncreaseInImpressions' => 'string',
        'OpportunityKey' => 'string',
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
        'AdGroupId' => 'int64',
        'CampaignId' => 'int64',
        'AdGroupName' => null,
        'CampaignName' => null,
        'MatchType' => 'int32',
        'SuggestedKeyword' => null,
        'SuggestedBid' => 'double',
        'MonthlySearches' => 'int64',
        'Competition' => 'double',
        'EstimatedIncreaseInClicks' => 'double',
        'EstimatedIncreaseInCost' => 'double',
        'EstimatedIncreaseInImpressions' => 'int64',
        'OpportunityKey' => null,
        'Type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AdGroupId' => false,
        'CampaignId' => false,
        'AdGroupName' => true,
        'CampaignName' => true,
        'MatchType' => false,
        'SuggestedKeyword' => true,
        'SuggestedBid' => false,
        'MonthlySearches' => false,
        'Competition' => false,
        'EstimatedIncreaseInClicks' => false,
        'EstimatedIncreaseInCost' => false,
        'EstimatedIncreaseInImpressions' => false,
        'OpportunityKey' => true,
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
        'AdGroupId' => 'AdGroupId',
        'CampaignId' => 'CampaignId',
        'AdGroupName' => 'AdGroupName',
        'CampaignName' => 'CampaignName',
        'MatchType' => 'MatchType',
        'SuggestedKeyword' => 'SuggestedKeyword',
        'SuggestedBid' => 'SuggestedBid',
        'MonthlySearches' => 'MonthlySearches',
        'Competition' => 'Competition',
        'EstimatedIncreaseInClicks' => 'EstimatedIncreaseInClicks',
        'EstimatedIncreaseInCost' => 'EstimatedIncreaseInCost',
        'EstimatedIncreaseInImpressions' => 'EstimatedIncreaseInImpressions',
        'OpportunityKey' => 'OpportunityKey',
        'Type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AdGroupId' => 'setAdGroupId',
        'CampaignId' => 'setCampaignId',
        'AdGroupName' => 'setAdGroupName',
        'CampaignName' => 'setCampaignName',
        'MatchType' => 'setMatchType',
        'SuggestedKeyword' => 'setSuggestedKeyword',
        'SuggestedBid' => 'setSuggestedBid',
        'MonthlySearches' => 'setMonthlySearches',
        'Competition' => 'setCompetition',
        'EstimatedIncreaseInClicks' => 'setEstimatedIncreaseInClicks',
        'EstimatedIncreaseInCost' => 'setEstimatedIncreaseInCost',
        'EstimatedIncreaseInImpressions' => 'setEstimatedIncreaseInImpressions',
        'OpportunityKey' => 'setOpportunityKey',
        'Type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AdGroupId' => 'getAdGroupId',
        'CampaignId' => 'getCampaignId',
        'AdGroupName' => 'getAdGroupName',
        'CampaignName' => 'getCampaignName',
        'MatchType' => 'getMatchType',
        'SuggestedKeyword' => 'getSuggestedKeyword',
        'SuggestedBid' => 'getSuggestedBid',
        'MonthlySearches' => 'getMonthlySearches',
        'Competition' => 'getCompetition',
        'EstimatedIncreaseInClicks' => 'getEstimatedIncreaseInClicks',
        'EstimatedIncreaseInCost' => 'getEstimatedIncreaseInCost',
        'EstimatedIncreaseInImpressions' => 'getEstimatedIncreaseInImpressions',
        'OpportunityKey' => 'getOpportunityKey',
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
        $this->setIfExists('AdGroupId', $data ?? [], null);
        $this->setIfExists('CampaignId', $data ?? [], null);
        $this->setIfExists('AdGroupName', $data ?? [], null);
        $this->setIfExists('CampaignName', $data ?? [], null);
        $this->setIfExists('MatchType', $data ?? [], null);
        $this->setIfExists('SuggestedKeyword', $data ?? [], null);
        $this->setIfExists('SuggestedBid', $data ?? [], null);
        $this->setIfExists('MonthlySearches', $data ?? [], null);
        $this->setIfExists('Competition', $data ?? [], null);
        $this->setIfExists('EstimatedIncreaseInClicks', $data ?? [], null);
        $this->setIfExists('EstimatedIncreaseInCost', $data ?? [], null);
        $this->setIfExists('EstimatedIncreaseInImpressions', $data ?? [], null);
        $this->setIfExists('OpportunityKey', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], null);
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
            throw new \InvalidArgumentException('non-nullable AdGroupId cannot be null');
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
            throw new \InvalidArgumentException('non-nullable CampaignId cannot be null');
        }
        $this->container['CampaignId'] = $CampaignId;

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
     * Gets CampaignName
     *
     * @return string|null
     */
    public function getCampaignName()
    {
        if (!isset($this->container['CampaignName']) || is_null($this->container['CampaignName'])) {
            return null;
        }
        return $this->container['CampaignName'];
    }

    /**
     * Sets CampaignName
     *
     * @param string|null $CampaignName CampaignName
     *
     * @return self
     */
    public function setCampaignName($CampaignName)
    {
        if (is_null($CampaignName)) {
            array_push($this->openAPINullablesSetToNull, 'CampaignName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CampaignName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CampaignName'] = $CampaignName;

        return $this;
    }

    /**
     * Gets MatchType
     *
     * @return int|null
     */
    public function getMatchType()
    {
        if (!isset($this->container['MatchType']) || is_null($this->container['MatchType'])) {
            return null;
        }
        return $this->container['MatchType'];
    }

    /**
     * Sets MatchType
     *
     * @param int|null $MatchType MatchType
     *
     * @return self
     */
    public function setMatchType($MatchType)
    {
        if (is_null($MatchType)) {
            throw new \InvalidArgumentException('non-nullable MatchType cannot be null');
        }
        $this->container['MatchType'] = $MatchType;

        return $this;
    }

    /**
     * Gets SuggestedKeyword
     *
     * @return string|null
     */
    public function getSuggestedKeyword()
    {
        if (!isset($this->container['SuggestedKeyword']) || is_null($this->container['SuggestedKeyword'])) {
            return null;
        }
        return $this->container['SuggestedKeyword'];
    }

    /**
     * Sets SuggestedKeyword
     *
     * @param string|null $SuggestedKeyword SuggestedKeyword
     *
     * @return self
     */
    public function setSuggestedKeyword($SuggestedKeyword)
    {
        if (is_null($SuggestedKeyword)) {
            array_push($this->openAPINullablesSetToNull, 'SuggestedKeyword');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuggestedKeyword', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuggestedKeyword'] = $SuggestedKeyword;

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
            throw new \InvalidArgumentException('non-nullable SuggestedBid cannot be null');
        }
        $this->container['SuggestedBid'] = $SuggestedBid;

        return $this;
    }

    /**
     * Gets MonthlySearches
     *
     * @return string|null
     */
    public function getMonthlySearches()
    {
        if (!isset($this->container['MonthlySearches']) || is_null($this->container['MonthlySearches'])) {
            return null;
        }
        return $this->container['MonthlySearches'];
    }

    /**
     * Sets MonthlySearches
     *
     * @param string|null $MonthlySearches MonthlySearches
     *
     * @return self
     */
    public function setMonthlySearches($MonthlySearches)
    {
        if (is_null($MonthlySearches)) {
            throw new \InvalidArgumentException('non-nullable MonthlySearches cannot be null');
        }
        $this->container['MonthlySearches'] = $MonthlySearches;

        return $this;
    }

    /**
     * Gets Competition
     *
     * @return float|null
     */
    public function getCompetition()
    {
        if (!isset($this->container['Competition']) || is_null($this->container['Competition'])) {
            return null;
        }
        return $this->container['Competition'];
    }

    /**
     * Sets Competition
     *
     * @param float|null $Competition Competition
     *
     * @return self
     */
    public function setCompetition($Competition)
    {
        if (is_null($Competition)) {
            throw new \InvalidArgumentException('non-nullable Competition cannot be null');
        }
        $this->container['Competition'] = $Competition;

        return $this;
    }

    /**
     * Gets EstimatedIncreaseInClicks
     *
     * @return float|null
     */
    public function getEstimatedIncreaseInClicks()
    {
        if (!isset($this->container['EstimatedIncreaseInClicks']) || is_null($this->container['EstimatedIncreaseInClicks'])) {
            return null;
        }
        return $this->container['EstimatedIncreaseInClicks'];
    }

    /**
     * Sets EstimatedIncreaseInClicks
     *
     * @param float|null $EstimatedIncreaseInClicks EstimatedIncreaseInClicks
     *
     * @return self
     */
    public function setEstimatedIncreaseInClicks($EstimatedIncreaseInClicks)
    {
        if (is_null($EstimatedIncreaseInClicks)) {
            throw new \InvalidArgumentException('non-nullable EstimatedIncreaseInClicks cannot be null');
        }
        $this->container['EstimatedIncreaseInClicks'] = $EstimatedIncreaseInClicks;

        return $this;
    }

    /**
     * Gets EstimatedIncreaseInCost
     *
     * @return float|null
     */
    public function getEstimatedIncreaseInCost()
    {
        if (!isset($this->container['EstimatedIncreaseInCost']) || is_null($this->container['EstimatedIncreaseInCost'])) {
            return null;
        }
        return $this->container['EstimatedIncreaseInCost'];
    }

    /**
     * Sets EstimatedIncreaseInCost
     *
     * @param float|null $EstimatedIncreaseInCost EstimatedIncreaseInCost
     *
     * @return self
     */
    public function setEstimatedIncreaseInCost($EstimatedIncreaseInCost)
    {
        if (is_null($EstimatedIncreaseInCost)) {
            throw new \InvalidArgumentException('non-nullable EstimatedIncreaseInCost cannot be null');
        }
        $this->container['EstimatedIncreaseInCost'] = $EstimatedIncreaseInCost;

        return $this;
    }

    /**
     * Gets EstimatedIncreaseInImpressions
     *
     * @return string|null
     */
    public function getEstimatedIncreaseInImpressions()
    {
        if (!isset($this->container['EstimatedIncreaseInImpressions']) || is_null($this->container['EstimatedIncreaseInImpressions'])) {
            return null;
        }
        return $this->container['EstimatedIncreaseInImpressions'];
    }

    /**
     * Sets EstimatedIncreaseInImpressions
     *
     * @param string|null $EstimatedIncreaseInImpressions EstimatedIncreaseInImpressions
     *
     * @return self
     */
    public function setEstimatedIncreaseInImpressions($EstimatedIncreaseInImpressions)
    {
        if (is_null($EstimatedIncreaseInImpressions)) {
            throw new \InvalidArgumentException('non-nullable EstimatedIncreaseInImpressions cannot be null');
        }
        $this->container['EstimatedIncreaseInImpressions'] = $EstimatedIncreaseInImpressions;

        return $this;
    }

    /**
     * Gets OpportunityKey
     *
     * @return string|null
     */
    public function getOpportunityKey()
    {
        if (!isset($this->container['OpportunityKey']) || is_null($this->container['OpportunityKey'])) {
            return null;
        }
        return $this->container['OpportunityKey'];
    }

    /**
     * Sets OpportunityKey
     *
     * @param string|null $OpportunityKey OpportunityKey
     *
     * @return self
     */
    public function setOpportunityKey($OpportunityKey)
    {
        if (is_null($OpportunityKey)) {
            array_push($this->openAPINullablesSetToNull, 'OpportunityKey');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('OpportunityKey', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['OpportunityKey'] = $OpportunityKey;

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
