<?php
/**
 * OfflineGoalConversionSummary
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

class OfflineGoalConversionSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OfflineGoalConversionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'GoalId' => 'string',
        'ConversionName' => 'string',
        'OverallSuccessCount' => 'string',
        'OverallUnattributedCount' => 'string',
        'OverallSuccessRate' => 'float',
        'OverallAlerts' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\OfflineConversionAlert[]',
        'DailySummaries' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\OfflineGoalDailySummary[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'GoalId' => 'int64',
        'ConversionName' => null,
        'OverallSuccessCount' => 'int64',
        'OverallUnattributedCount' => 'int64',
        'OverallSuccessRate' => 'double',
        'OverallAlerts' => null,
        'DailySummaries' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'GoalId' => false,
        'ConversionName' => true,
        'OverallSuccessCount' => false,
        'OverallUnattributedCount' => false,
        'OverallSuccessRate' => false,
        'OverallAlerts' => true,
        'DailySummaries' => true
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
        'GoalId' => 'GoalId',
        'ConversionName' => 'ConversionName',
        'OverallSuccessCount' => 'OverallSuccessCount',
        'OverallUnattributedCount' => 'OverallUnattributedCount',
        'OverallSuccessRate' => 'OverallSuccessRate',
        'OverallAlerts' => 'OverallAlerts',
        'DailySummaries' => 'DailySummaries'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'GoalId' => 'setGoalId',
        'ConversionName' => 'setConversionName',
        'OverallSuccessCount' => 'setOverallSuccessCount',
        'OverallUnattributedCount' => 'setOverallUnattributedCount',
        'OverallSuccessRate' => 'setOverallSuccessRate',
        'OverallAlerts' => 'setOverallAlerts',
        'DailySummaries' => 'setDailySummaries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'GoalId' => 'getGoalId',
        'ConversionName' => 'getConversionName',
        'OverallSuccessCount' => 'getOverallSuccessCount',
        'OverallUnattributedCount' => 'getOverallUnattributedCount',
        'OverallSuccessRate' => 'getOverallSuccessRate',
        'OverallAlerts' => 'getOverallAlerts',
        'DailySummaries' => 'getDailySummaries'
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
        $this->setIfExists('GoalId', $data ?? [], null);
        $this->setIfExists('ConversionName', $data ?? [], null);
        $this->setIfExists('OverallSuccessCount', $data ?? [], null);
        $this->setIfExists('OverallUnattributedCount', $data ?? [], null);
        $this->setIfExists('OverallSuccessRate', $data ?? [], null);
        $this->setIfExists('OverallAlerts', $data ?? [], null);
        $this->setIfExists('DailySummaries', $data ?? [], null);
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
     * Gets GoalId
     *
     * @return string|null
     */
    public function getGoalId()
    {
        if (!isset($this->container['GoalId']) || is_null($this->container['GoalId'])) {
            return null;
        }
        return $this->container['GoalId'];
    }

    /**
     * Sets GoalId
     *
     * @param string|null $GoalId GoalId
     *
     * @return self
     */
    public function setGoalId($GoalId)
    {
        if (is_null($GoalId)) {
            throw new \InvalidArgumentException('non-nullable GoalId cannot be null');
        }
        $this->container['GoalId'] = $GoalId;

        return $this;
    }

    /**
     * Gets ConversionName
     *
     * @return string|null
     */
    public function getConversionName()
    {
        if (!isset($this->container['ConversionName']) || is_null($this->container['ConversionName'])) {
            return null;
        }
        return $this->container['ConversionName'];
    }

    /**
     * Sets ConversionName
     *
     * @param string|null $ConversionName ConversionName
     *
     * @return self
     */
    public function setConversionName($ConversionName)
    {
        if (is_null($ConversionName)) {
            array_push($this->openAPINullablesSetToNull, 'ConversionName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ConversionName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ConversionName'] = $ConversionName;

        return $this;
    }

    /**
     * Gets OverallSuccessCount
     *
     * @return string|null
     */
    public function getOverallSuccessCount()
    {
        if (!isset($this->container['OverallSuccessCount']) || is_null($this->container['OverallSuccessCount'])) {
            return null;
        }
        return $this->container['OverallSuccessCount'];
    }

    /**
     * Sets OverallSuccessCount
     *
     * @param string|null $OverallSuccessCount OverallSuccessCount
     *
     * @return self
     */
    public function setOverallSuccessCount($OverallSuccessCount)
    {
        if (is_null($OverallSuccessCount)) {
            throw new \InvalidArgumentException('non-nullable OverallSuccessCount cannot be null');
        }
        $this->container['OverallSuccessCount'] = $OverallSuccessCount;

        return $this;
    }

    /**
     * Gets OverallUnattributedCount
     *
     * @return string|null
     */
    public function getOverallUnattributedCount()
    {
        if (!isset($this->container['OverallUnattributedCount']) || is_null($this->container['OverallUnattributedCount'])) {
            return null;
        }
        return $this->container['OverallUnattributedCount'];
    }

    /**
     * Sets OverallUnattributedCount
     *
     * @param string|null $OverallUnattributedCount OverallUnattributedCount
     *
     * @return self
     */
    public function setOverallUnattributedCount($OverallUnattributedCount)
    {
        if (is_null($OverallUnattributedCount)) {
            throw new \InvalidArgumentException('non-nullable OverallUnattributedCount cannot be null');
        }
        $this->container['OverallUnattributedCount'] = $OverallUnattributedCount;

        return $this;
    }

    /**
     * Gets OverallSuccessRate
     *
     * @return float|null
     */
    public function getOverallSuccessRate()
    {
        if (!isset($this->container['OverallSuccessRate']) || is_null($this->container['OverallSuccessRate'])) {
            return null;
        }
        return $this->container['OverallSuccessRate'];
    }

    /**
     * Sets OverallSuccessRate
     *
     * @param float|null $OverallSuccessRate OverallSuccessRate
     *
     * @return self
     */
    public function setOverallSuccessRate($OverallSuccessRate)
    {
        if (is_null($OverallSuccessRate)) {
            throw new \InvalidArgumentException('non-nullable OverallSuccessRate cannot be null');
        }
        $this->container['OverallSuccessRate'] = $OverallSuccessRate;

        return $this;
    }

    /**
     * Gets OverallAlerts
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\OfflineConversionAlert[]|null
     */
    public function getOverallAlerts()
    {
        if (!isset($this->container['OverallAlerts']) || is_null($this->container['OverallAlerts'])) {
            return null;
        }
        return $this->container['OverallAlerts'];
    }

    /**
     * Sets OverallAlerts
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\OfflineConversionAlert[]|null $OverallAlerts OverallAlerts
     *
     * @return self
     */
    public function setOverallAlerts($OverallAlerts)
    {
        if (is_null($OverallAlerts)) {
            array_push($this->openAPINullablesSetToNull, 'OverallAlerts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('OverallAlerts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['OverallAlerts'] = $OverallAlerts;

        return $this;
    }

    /**
     * Gets DailySummaries
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\OfflineGoalDailySummary[]|null
     */
    public function getDailySummaries()
    {
        if (!isset($this->container['DailySummaries']) || is_null($this->container['DailySummaries'])) {
            return null;
        }
        return $this->container['DailySummaries'];
    }

    /**
     * Sets DailySummaries
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\OfflineGoalDailySummary[]|null $DailySummaries DailySummaries
     *
     * @return self
     */
    public function setDailySummaries($DailySummaries)
    {
        if (is_null($DailySummaries)) {
            array_push($this->openAPINullablesSetToNull, 'DailySummaries');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DailySummaries', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DailySummaries'] = $DailySummaries;

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
