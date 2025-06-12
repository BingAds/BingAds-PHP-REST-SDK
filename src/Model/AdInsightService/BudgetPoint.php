<?php
/**
 * BudgetPoint
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

class BudgetPoint implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BudgetPoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'BudgetAmount' => 'float',
        'BudgetPointType' => '\Microsoft\MsAds\Rest\Model\AdInsightService\BudgetPointType',
        'EstimatedWeeklyClicks' => 'float',
        'EstimatedWeeklyCost' => 'float',
        'EstimatedWeeklyImpressions' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'BudgetAmount' => 'double',
        'BudgetPointType' => null,
        'EstimatedWeeklyClicks' => 'double',
        'EstimatedWeeklyCost' => 'double',
        'EstimatedWeeklyImpressions' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'BudgetAmount' => false,
        'BudgetPointType' => false,
        'EstimatedWeeklyClicks' => false,
        'EstimatedWeeklyCost' => false,
        'EstimatedWeeklyImpressions' => false
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
        'BudgetAmount' => 'BudgetAmount',
        'BudgetPointType' => 'BudgetPointType',
        'EstimatedWeeklyClicks' => 'EstimatedWeeklyClicks',
        'EstimatedWeeklyCost' => 'EstimatedWeeklyCost',
        'EstimatedWeeklyImpressions' => 'EstimatedWeeklyImpressions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'BudgetAmount' => 'setBudgetAmount',
        'BudgetPointType' => 'setBudgetPointType',
        'EstimatedWeeklyClicks' => 'setEstimatedWeeklyClicks',
        'EstimatedWeeklyCost' => 'setEstimatedWeeklyCost',
        'EstimatedWeeklyImpressions' => 'setEstimatedWeeklyImpressions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'BudgetAmount' => 'getBudgetAmount',
        'BudgetPointType' => 'getBudgetPointType',
        'EstimatedWeeklyClicks' => 'getEstimatedWeeklyClicks',
        'EstimatedWeeklyCost' => 'getEstimatedWeeklyCost',
        'EstimatedWeeklyImpressions' => 'getEstimatedWeeklyImpressions'
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
        $this->setIfExists('BudgetAmount', $data ?? [], null);
        $this->setIfExists('BudgetPointType', $data ?? [], null);
        $this->setIfExists('EstimatedWeeklyClicks', $data ?? [], null);
        $this->setIfExists('EstimatedWeeklyCost', $data ?? [], null);
        $this->setIfExists('EstimatedWeeklyImpressions', $data ?? [], null);
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
     * Gets BudgetAmount
     *
     * @return float|null
     */
    public function getBudgetAmount()
    {
        if (!isset($this->container['BudgetAmount']) || is_null($this->container['BudgetAmount'])) {
            return null;
        }
        return $this->container['BudgetAmount'];
    }

    /**
     * Sets BudgetAmount
     *
     * @param float|null $BudgetAmount BudgetAmount
     *
     * @return self
     */
    public function setBudgetAmount($BudgetAmount)
    {
        if (is_null($BudgetAmount)) {
            throw new \InvalidArgumentException('non-nullable BudgetAmount cannot be null');
        }
        $this->container['BudgetAmount'] = $BudgetAmount;

        return $this;
    }

    /**
     * Gets BudgetPointType
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\BudgetPointType|mixed|null
     */
    public function getBudgetPointType()
    {
        if (!isset($this->container['BudgetPointType']) || is_null($this->container['BudgetPointType'])) {
            return null;
        }
        if ((is_object($this->container['BudgetPointType']) || is_string($this->container['BudgetPointType'])) && method_exists($this->container['BudgetPointType'], 'getValue')) {
            return $this->container['BudgetPointType']->getValue();
        }
        return $this->container['BudgetPointType'];
    }

    /**
     * Sets BudgetPointType
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\BudgetPointType|mixed|null $BudgetPointType BudgetPointType
     *
     * @return self
     */
    public function setBudgetPointType($BudgetPointType)
    {
        if (is_null($BudgetPointType)) {
            throw new \InvalidArgumentException('non-nullable BudgetPointType cannot be null');
        }
        if (!$BudgetPointType instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\BudgetPointType) {
            $BudgetPointType = new \Microsoft\MsAds\Rest\Model\AdInsightService\BudgetPointType($BudgetPointType);
        }
        $this->container['BudgetPointType'] = $BudgetPointType;

        return $this;
    }

    /**
     * Gets EstimatedWeeklyClicks
     *
     * @return float|null
     */
    public function getEstimatedWeeklyClicks()
    {
        if (!isset($this->container['EstimatedWeeklyClicks']) || is_null($this->container['EstimatedWeeklyClicks'])) {
            return null;
        }
        return $this->container['EstimatedWeeklyClicks'];
    }

    /**
     * Sets EstimatedWeeklyClicks
     *
     * @param float|null $EstimatedWeeklyClicks EstimatedWeeklyClicks
     *
     * @return self
     */
    public function setEstimatedWeeklyClicks($EstimatedWeeklyClicks)
    {
        if (is_null($EstimatedWeeklyClicks)) {
            throw new \InvalidArgumentException('non-nullable EstimatedWeeklyClicks cannot be null');
        }
        $this->container['EstimatedWeeklyClicks'] = $EstimatedWeeklyClicks;

        return $this;
    }

    /**
     * Gets EstimatedWeeklyCost
     *
     * @return float|null
     */
    public function getEstimatedWeeklyCost()
    {
        if (!isset($this->container['EstimatedWeeklyCost']) || is_null($this->container['EstimatedWeeklyCost'])) {
            return null;
        }
        return $this->container['EstimatedWeeklyCost'];
    }

    /**
     * Sets EstimatedWeeklyCost
     *
     * @param float|null $EstimatedWeeklyCost EstimatedWeeklyCost
     *
     * @return self
     */
    public function setEstimatedWeeklyCost($EstimatedWeeklyCost)
    {
        if (is_null($EstimatedWeeklyCost)) {
            throw new \InvalidArgumentException('non-nullable EstimatedWeeklyCost cannot be null');
        }
        $this->container['EstimatedWeeklyCost'] = $EstimatedWeeklyCost;

        return $this;
    }

    /**
     * Gets EstimatedWeeklyImpressions
     *
     * @return float|null
     */
    public function getEstimatedWeeklyImpressions()
    {
        if (!isset($this->container['EstimatedWeeklyImpressions']) || is_null($this->container['EstimatedWeeklyImpressions'])) {
            return null;
        }
        return $this->container['EstimatedWeeklyImpressions'];
    }

    /**
     * Sets EstimatedWeeklyImpressions
     *
     * @param float|null $EstimatedWeeklyImpressions EstimatedWeeklyImpressions
     *
     * @return self
     */
    public function setEstimatedWeeklyImpressions($EstimatedWeeklyImpressions)
    {
        if (is_null($EstimatedWeeklyImpressions)) {
            throw new \InvalidArgumentException('non-nullable EstimatedWeeklyImpressions cannot be null');
        }
        $this->container['EstimatedWeeklyImpressions'] = $EstimatedWeeklyImpressions;

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
