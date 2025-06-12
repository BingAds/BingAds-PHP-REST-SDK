<?php
/**
 * BudgetOpportunity
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

class BudgetOpportunity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BudgetOpportunity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CampaignId' => 'string',
        'CurrentBudget' => 'float',
        'RecommendedBudget' => 'float',
        'BudgetType' => '\Microsoft\MsAds\Rest\Model\AdInsightService\BudgetLimitType',
        'IncreaseInImpressions' => 'string',
        'PercentageIncreaseInImpressions' => 'int',
        'IncreaseInClicks' => 'float',
        'PercentageIncreaseInClicks' => 'int',
        'BudgetPoints' => '\Microsoft\MsAds\Rest\Model\AdInsightService\BudgetPoint[]',
        'OpportunityKey' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'CampaignId' => 'int64',
        'CurrentBudget' => 'double',
        'RecommendedBudget' => 'double',
        'BudgetType' => null,
        'IncreaseInImpressions' => 'int64',
        'PercentageIncreaseInImpressions' => 'int32',
        'IncreaseInClicks' => 'double',
        'PercentageIncreaseInClicks' => 'int32',
        'BudgetPoints' => null,
        'OpportunityKey' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CampaignId' => false,
        'CurrentBudget' => false,
        'RecommendedBudget' => false,
        'BudgetType' => false,
        'IncreaseInImpressions' => false,
        'PercentageIncreaseInImpressions' => false,
        'IncreaseInClicks' => false,
        'PercentageIncreaseInClicks' => false,
        'BudgetPoints' => true,
        'OpportunityKey' => true
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
        'CampaignId' => 'CampaignId',
        'CurrentBudget' => 'CurrentBudget',
        'RecommendedBudget' => 'RecommendedBudget',
        'BudgetType' => 'BudgetType',
        'IncreaseInImpressions' => 'IncreaseInImpressions',
        'PercentageIncreaseInImpressions' => 'PercentageIncreaseInImpressions',
        'IncreaseInClicks' => 'IncreaseInClicks',
        'PercentageIncreaseInClicks' => 'PercentageIncreaseInClicks',
        'BudgetPoints' => 'BudgetPoints',
        'OpportunityKey' => 'OpportunityKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CampaignId' => 'setCampaignId',
        'CurrentBudget' => 'setCurrentBudget',
        'RecommendedBudget' => 'setRecommendedBudget',
        'BudgetType' => 'setBudgetType',
        'IncreaseInImpressions' => 'setIncreaseInImpressions',
        'PercentageIncreaseInImpressions' => 'setPercentageIncreaseInImpressions',
        'IncreaseInClicks' => 'setIncreaseInClicks',
        'PercentageIncreaseInClicks' => 'setPercentageIncreaseInClicks',
        'BudgetPoints' => 'setBudgetPoints',
        'OpportunityKey' => 'setOpportunityKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CampaignId' => 'getCampaignId',
        'CurrentBudget' => 'getCurrentBudget',
        'RecommendedBudget' => 'getRecommendedBudget',
        'BudgetType' => 'getBudgetType',
        'IncreaseInImpressions' => 'getIncreaseInImpressions',
        'PercentageIncreaseInImpressions' => 'getPercentageIncreaseInImpressions',
        'IncreaseInClicks' => 'getIncreaseInClicks',
        'PercentageIncreaseInClicks' => 'getPercentageIncreaseInClicks',
        'BudgetPoints' => 'getBudgetPoints',
        'OpportunityKey' => 'getOpportunityKey'
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
        $this->setIfExists('CampaignId', $data ?? [], null);
        $this->setIfExists('CurrentBudget', $data ?? [], null);
        $this->setIfExists('RecommendedBudget', $data ?? [], null);
        $this->setIfExists('BudgetType', $data ?? [], null);
        $this->setIfExists('IncreaseInImpressions', $data ?? [], null);
        $this->setIfExists('PercentageIncreaseInImpressions', $data ?? [], null);
        $this->setIfExists('IncreaseInClicks', $data ?? [], null);
        $this->setIfExists('PercentageIncreaseInClicks', $data ?? [], null);
        $this->setIfExists('BudgetPoints', $data ?? [], null);
        $this->setIfExists('OpportunityKey', $data ?? [], null);
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
     * Gets CurrentBudget
     *
     * @return float|null
     */
    public function getCurrentBudget()
    {
        if (!isset($this->container['CurrentBudget']) || is_null($this->container['CurrentBudget'])) {
            return null;
        }
        return $this->container['CurrentBudget'];
    }

    /**
     * Sets CurrentBudget
     *
     * @param float|null $CurrentBudget CurrentBudget
     *
     * @return self
     */
    public function setCurrentBudget($CurrentBudget)
    {
        if (is_null($CurrentBudget)) {
            throw new \InvalidArgumentException('non-nullable CurrentBudget cannot be null');
        }
        $this->container['CurrentBudget'] = $CurrentBudget;

        return $this;
    }

    /**
     * Gets RecommendedBudget
     *
     * @return float|null
     */
    public function getRecommendedBudget()
    {
        if (!isset($this->container['RecommendedBudget']) || is_null($this->container['RecommendedBudget'])) {
            return null;
        }
        return $this->container['RecommendedBudget'];
    }

    /**
     * Sets RecommendedBudget
     *
     * @param float|null $RecommendedBudget RecommendedBudget
     *
     * @return self
     */
    public function setRecommendedBudget($RecommendedBudget)
    {
        if (is_null($RecommendedBudget)) {
            throw new \InvalidArgumentException('non-nullable RecommendedBudget cannot be null');
        }
        $this->container['RecommendedBudget'] = $RecommendedBudget;

        return $this;
    }

    /**
     * Gets BudgetType
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\BudgetLimitType|mixed|null
     */
    public function getBudgetType()
    {
        if (!isset($this->container['BudgetType']) || is_null($this->container['BudgetType'])) {
            return null;
        }
        if ((is_object($this->container['BudgetType']) || is_string($this->container['BudgetType'])) && method_exists($this->container['BudgetType'], 'getValue')) {
            return $this->container['BudgetType']->getValue();
        }
        return $this->container['BudgetType'];
    }

    /**
     * Sets BudgetType
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\BudgetLimitType|mixed|null $BudgetType BudgetType
     *
     * @return self
     */
    public function setBudgetType($BudgetType)
    {
        if (is_null($BudgetType)) {
            throw new \InvalidArgumentException('non-nullable BudgetType cannot be null');
        }
        if (!$BudgetType instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\BudgetLimitType) {
            $BudgetType = new \Microsoft\MsAds\Rest\Model\AdInsightService\BudgetLimitType($BudgetType);
        }
        $this->container['BudgetType'] = $BudgetType;

        return $this;
    }

    /**
     * Gets IncreaseInImpressions
     *
     * @return string|null
     */
    public function getIncreaseInImpressions()
    {
        if (!isset($this->container['IncreaseInImpressions']) || is_null($this->container['IncreaseInImpressions'])) {
            return null;
        }
        return $this->container['IncreaseInImpressions'];
    }

    /**
     * Sets IncreaseInImpressions
     *
     * @param string|null $IncreaseInImpressions IncreaseInImpressions
     *
     * @return self
     */
    public function setIncreaseInImpressions($IncreaseInImpressions)
    {
        if (is_null($IncreaseInImpressions)) {
            throw new \InvalidArgumentException('non-nullable IncreaseInImpressions cannot be null');
        }
        $this->container['IncreaseInImpressions'] = $IncreaseInImpressions;

        return $this;
    }

    /**
     * Gets PercentageIncreaseInImpressions
     *
     * @return int|null
     */
    public function getPercentageIncreaseInImpressions()
    {
        if (!isset($this->container['PercentageIncreaseInImpressions']) || is_null($this->container['PercentageIncreaseInImpressions'])) {
            return null;
        }
        return $this->container['PercentageIncreaseInImpressions'];
    }

    /**
     * Sets PercentageIncreaseInImpressions
     *
     * @param int|null $PercentageIncreaseInImpressions PercentageIncreaseInImpressions
     *
     * @return self
     */
    public function setPercentageIncreaseInImpressions($PercentageIncreaseInImpressions)
    {
        if (is_null($PercentageIncreaseInImpressions)) {
            throw new \InvalidArgumentException('non-nullable PercentageIncreaseInImpressions cannot be null');
        }
        $this->container['PercentageIncreaseInImpressions'] = $PercentageIncreaseInImpressions;

        return $this;
    }

    /**
     * Gets IncreaseInClicks
     *
     * @return float|null
     */
    public function getIncreaseInClicks()
    {
        if (!isset($this->container['IncreaseInClicks']) || is_null($this->container['IncreaseInClicks'])) {
            return null;
        }
        return $this->container['IncreaseInClicks'];
    }

    /**
     * Sets IncreaseInClicks
     *
     * @param float|null $IncreaseInClicks IncreaseInClicks
     *
     * @return self
     */
    public function setIncreaseInClicks($IncreaseInClicks)
    {
        if (is_null($IncreaseInClicks)) {
            throw new \InvalidArgumentException('non-nullable IncreaseInClicks cannot be null');
        }
        $this->container['IncreaseInClicks'] = $IncreaseInClicks;

        return $this;
    }

    /**
     * Gets PercentageIncreaseInClicks
     *
     * @return int|null
     */
    public function getPercentageIncreaseInClicks()
    {
        if (!isset($this->container['PercentageIncreaseInClicks']) || is_null($this->container['PercentageIncreaseInClicks'])) {
            return null;
        }
        return $this->container['PercentageIncreaseInClicks'];
    }

    /**
     * Sets PercentageIncreaseInClicks
     *
     * @param int|null $PercentageIncreaseInClicks PercentageIncreaseInClicks
     *
     * @return self
     */
    public function setPercentageIncreaseInClicks($PercentageIncreaseInClicks)
    {
        if (is_null($PercentageIncreaseInClicks)) {
            throw new \InvalidArgumentException('non-nullable PercentageIncreaseInClicks cannot be null');
        }
        $this->container['PercentageIncreaseInClicks'] = $PercentageIncreaseInClicks;

        return $this;
    }

    /**
     * Gets BudgetPoints
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\BudgetPoint[]|null
     */
    public function getBudgetPoints()
    {
        if (!isset($this->container['BudgetPoints']) || is_null($this->container['BudgetPoints'])) {
            return null;
        }
        return $this->container['BudgetPoints'];
    }

    /**
     * Sets BudgetPoints
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\BudgetPoint[]|null $BudgetPoints BudgetPoints
     *
     * @return self
     */
    public function setBudgetPoints($BudgetPoints)
    {
        if (is_null($BudgetPoints)) {
            array_push($this->openAPINullablesSetToNull, 'BudgetPoints');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BudgetPoints', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BudgetPoints'] = $BudgetPoints;

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
