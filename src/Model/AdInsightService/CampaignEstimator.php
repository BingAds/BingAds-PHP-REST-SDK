<?php
/**
 * CampaignEstimator
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

class CampaignEstimator implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CampaignEstimator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CampaignId' => 'string',
        'DailyBudget' => 'float',
        'Criteria' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Criterion[]',
        'AdGroupEstimators' => '\Microsoft\MsAds\Rest\Model\AdInsightService\AdGroupEstimator[]',
        'NegativeKeywords' => '\Microsoft\MsAds\Rest\Model\AdInsightService\NegativeKeyword[]'
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
        'DailyBudget' => 'double',
        'Criteria' => null,
        'AdGroupEstimators' => null,
        'NegativeKeywords' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CampaignId' => true,
        'DailyBudget' => true,
        'Criteria' => true,
        'AdGroupEstimators' => true,
        'NegativeKeywords' => true
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
        'DailyBudget' => 'DailyBudget',
        'Criteria' => 'Criteria',
        'AdGroupEstimators' => 'AdGroupEstimators',
        'NegativeKeywords' => 'NegativeKeywords'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CampaignId' => 'setCampaignId',
        'DailyBudget' => 'setDailyBudget',
        'Criteria' => 'setCriteria',
        'AdGroupEstimators' => 'setAdGroupEstimators',
        'NegativeKeywords' => 'setNegativeKeywords'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CampaignId' => 'getCampaignId',
        'DailyBudget' => 'getDailyBudget',
        'Criteria' => 'getCriteria',
        'AdGroupEstimators' => 'getAdGroupEstimators',
        'NegativeKeywords' => 'getNegativeKeywords'
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
        $this->setIfExists('DailyBudget', $data ?? [], null);
        $this->setIfExists('Criteria', $data ?? [], null);
        $this->setIfExists('AdGroupEstimators', $data ?? [], null);
        $this->setIfExists('NegativeKeywords', $data ?? [], null);
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
     * Gets DailyBudget
     *
     * @return float|null
     */
    public function getDailyBudget()
    {
        if (!isset($this->container['DailyBudget']) || is_null($this->container['DailyBudget'])) {
            return null;
        }
        return $this->container['DailyBudget'];
    }

    /**
     * Sets DailyBudget
     *
     * @param float|null $DailyBudget DailyBudget
     *
     * @return self
     */
    public function setDailyBudget($DailyBudget)
    {
        if (is_null($DailyBudget)) {
            array_push($this->openAPINullablesSetToNull, 'DailyBudget');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DailyBudget', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DailyBudget'] = $DailyBudget;

        return $this;
    }

    /**
     * Gets Criteria
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Criterion[]|null
     */
    public function getCriteria()
    {
        if (!isset($this->container['Criteria']) || is_null($this->container['Criteria'])) {
            return null;
        }
        return $this->container['Criteria'];
    }

    /**
     * Sets Criteria
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Criterion[]|null $Criteria Criteria
     *
     * @return self
     */
    public function setCriteria($Criteria)
    {
        if (is_null($Criteria)) {
            array_push($this->openAPINullablesSetToNull, 'Criteria');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Criteria', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Criteria'] = $Criteria;

        return $this;
    }

    /**
     * Gets AdGroupEstimators
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\AdGroupEstimator[]|null
     */
    public function getAdGroupEstimators()
    {
        if (!isset($this->container['AdGroupEstimators']) || is_null($this->container['AdGroupEstimators'])) {
            return null;
        }
        return $this->container['AdGroupEstimators'];
    }

    /**
     * Sets AdGroupEstimators
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\AdGroupEstimator[]|null $AdGroupEstimators AdGroupEstimators
     *
     * @return self
     */
    public function setAdGroupEstimators($AdGroupEstimators)
    {
        if (is_null($AdGroupEstimators)) {
            array_push($this->openAPINullablesSetToNull, 'AdGroupEstimators');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdGroupEstimators', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdGroupEstimators'] = $AdGroupEstimators;

        return $this;
    }

    /**
     * Gets NegativeKeywords
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\NegativeKeyword[]|null
     */
    public function getNegativeKeywords()
    {
        if (!isset($this->container['NegativeKeywords']) || is_null($this->container['NegativeKeywords'])) {
            return null;
        }
        return $this->container['NegativeKeywords'];
    }

    /**
     * Sets NegativeKeywords
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\NegativeKeyword[]|null $NegativeKeywords NegativeKeywords
     *
     * @return self
     */
    public function setNegativeKeywords($NegativeKeywords)
    {
        if (is_null($NegativeKeywords)) {
            array_push($this->openAPINullablesSetToNull, 'NegativeKeywords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NegativeKeywords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NegativeKeywords'] = $NegativeKeywords;

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
