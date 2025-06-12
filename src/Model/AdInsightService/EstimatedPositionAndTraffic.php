<?php
/**
 * EstimatedPositionAndTraffic
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

class EstimatedPositionAndTraffic implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'EstimatedPositionAndTraffic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'MatchType' => '\Microsoft\MsAds\Rest\Model\AdInsightService\MatchType',
        'MinClicksPerWeek' => 'float',
        'MaxClicksPerWeek' => 'float',
        'AverageCPC' => 'float',
        'MinImpressionsPerWeek' => 'string',
        'MaxImpressionsPerWeek' => 'string',
        'CTR' => 'float',
        'MinTotalCostPerWeek' => 'float',
        'MaxTotalCostPerWeek' => 'float',
        'CurrencyCode' => '\Microsoft\MsAds\Rest\Model\AdInsightService\CurrencyCode',
        'EstimatedAdPosition' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'MatchType' => null,
        'MinClicksPerWeek' => 'double',
        'MaxClicksPerWeek' => 'double',
        'AverageCPC' => 'double',
        'MinImpressionsPerWeek' => 'int64',
        'MaxImpressionsPerWeek' => 'int64',
        'CTR' => 'double',
        'MinTotalCostPerWeek' => 'double',
        'MaxTotalCostPerWeek' => 'double',
        'CurrencyCode' => null,
        'EstimatedAdPosition' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'MatchType' => false,
        'MinClicksPerWeek' => false,
        'MaxClicksPerWeek' => false,
        'AverageCPC' => false,
        'MinImpressionsPerWeek' => false,
        'MaxImpressionsPerWeek' => false,
        'CTR' => false,
        'MinTotalCostPerWeek' => false,
        'MaxTotalCostPerWeek' => false,
        'CurrencyCode' => false,
        'EstimatedAdPosition' => false
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
        'MatchType' => 'MatchType',
        'MinClicksPerWeek' => 'MinClicksPerWeek',
        'MaxClicksPerWeek' => 'MaxClicksPerWeek',
        'AverageCPC' => 'AverageCPC',
        'MinImpressionsPerWeek' => 'MinImpressionsPerWeek',
        'MaxImpressionsPerWeek' => 'MaxImpressionsPerWeek',
        'CTR' => 'CTR',
        'MinTotalCostPerWeek' => 'MinTotalCostPerWeek',
        'MaxTotalCostPerWeek' => 'MaxTotalCostPerWeek',
        'CurrencyCode' => 'CurrencyCode',
        'EstimatedAdPosition' => 'EstimatedAdPosition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'MatchType' => 'setMatchType',
        'MinClicksPerWeek' => 'setMinClicksPerWeek',
        'MaxClicksPerWeek' => 'setMaxClicksPerWeek',
        'AverageCPC' => 'setAverageCPC',
        'MinImpressionsPerWeek' => 'setMinImpressionsPerWeek',
        'MaxImpressionsPerWeek' => 'setMaxImpressionsPerWeek',
        'CTR' => 'setCTR',
        'MinTotalCostPerWeek' => 'setMinTotalCostPerWeek',
        'MaxTotalCostPerWeek' => 'setMaxTotalCostPerWeek',
        'CurrencyCode' => 'setCurrencyCode',
        'EstimatedAdPosition' => 'setEstimatedAdPosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'MatchType' => 'getMatchType',
        'MinClicksPerWeek' => 'getMinClicksPerWeek',
        'MaxClicksPerWeek' => 'getMaxClicksPerWeek',
        'AverageCPC' => 'getAverageCPC',
        'MinImpressionsPerWeek' => 'getMinImpressionsPerWeek',
        'MaxImpressionsPerWeek' => 'getMaxImpressionsPerWeek',
        'CTR' => 'getCTR',
        'MinTotalCostPerWeek' => 'getMinTotalCostPerWeek',
        'MaxTotalCostPerWeek' => 'getMaxTotalCostPerWeek',
        'CurrencyCode' => 'getCurrencyCode',
        'EstimatedAdPosition' => 'getEstimatedAdPosition'
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
        $this->setIfExists('MatchType', $data ?? [], null);
        $this->setIfExists('MinClicksPerWeek', $data ?? [], null);
        $this->setIfExists('MaxClicksPerWeek', $data ?? [], null);
        $this->setIfExists('AverageCPC', $data ?? [], null);
        $this->setIfExists('MinImpressionsPerWeek', $data ?? [], null);
        $this->setIfExists('MaxImpressionsPerWeek', $data ?? [], null);
        $this->setIfExists('CTR', $data ?? [], null);
        $this->setIfExists('MinTotalCostPerWeek', $data ?? [], null);
        $this->setIfExists('MaxTotalCostPerWeek', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('EstimatedAdPosition', $data ?? [], null);
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
     * Gets MatchType
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\MatchType|mixed|null
     */
    public function getMatchType()
    {
        if (!isset($this->container['MatchType']) || is_null($this->container['MatchType'])) {
            return null;
        }
        if ((is_object($this->container['MatchType']) || is_string($this->container['MatchType'])) && method_exists($this->container['MatchType'], 'getValue')) {
            return $this->container['MatchType']->getValue();
        }
        return $this->container['MatchType'];
    }

    /**
     * Sets MatchType
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\MatchType|mixed|null $MatchType MatchType
     *
     * @return self
     */
    public function setMatchType($MatchType)
    {
        if (is_null($MatchType)) {
            throw new \InvalidArgumentException('non-nullable MatchType cannot be null');
        }
        if (!$MatchType instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\MatchType) {
            $MatchType = new \Microsoft\MsAds\Rest\Model\AdInsightService\MatchType($MatchType);
        }
        $this->container['MatchType'] = $MatchType;

        return $this;
    }

    /**
     * Gets MinClicksPerWeek
     *
     * @return float|null
     */
    public function getMinClicksPerWeek()
    {
        if (!isset($this->container['MinClicksPerWeek']) || is_null($this->container['MinClicksPerWeek'])) {
            return null;
        }
        return $this->container['MinClicksPerWeek'];
    }

    /**
     * Sets MinClicksPerWeek
     *
     * @param float|null $MinClicksPerWeek MinClicksPerWeek
     *
     * @return self
     */
    public function setMinClicksPerWeek($MinClicksPerWeek)
    {
        if (is_null($MinClicksPerWeek)) {
            throw new \InvalidArgumentException('non-nullable MinClicksPerWeek cannot be null');
        }
        $this->container['MinClicksPerWeek'] = $MinClicksPerWeek;

        return $this;
    }

    /**
     * Gets MaxClicksPerWeek
     *
     * @return float|null
     */
    public function getMaxClicksPerWeek()
    {
        if (!isset($this->container['MaxClicksPerWeek']) || is_null($this->container['MaxClicksPerWeek'])) {
            return null;
        }
        return $this->container['MaxClicksPerWeek'];
    }

    /**
     * Sets MaxClicksPerWeek
     *
     * @param float|null $MaxClicksPerWeek MaxClicksPerWeek
     *
     * @return self
     */
    public function setMaxClicksPerWeek($MaxClicksPerWeek)
    {
        if (is_null($MaxClicksPerWeek)) {
            throw new \InvalidArgumentException('non-nullable MaxClicksPerWeek cannot be null');
        }
        $this->container['MaxClicksPerWeek'] = $MaxClicksPerWeek;

        return $this;
    }

    /**
     * Gets AverageCPC
     *
     * @return float|null
     */
    public function getAverageCPC()
    {
        if (!isset($this->container['AverageCPC']) || is_null($this->container['AverageCPC'])) {
            return null;
        }
        return $this->container['AverageCPC'];
    }

    /**
     * Sets AverageCPC
     *
     * @param float|null $AverageCPC AverageCPC
     *
     * @return self
     */
    public function setAverageCPC($AverageCPC)
    {
        if (is_null($AverageCPC)) {
            throw new \InvalidArgumentException('non-nullable AverageCPC cannot be null');
        }
        $this->container['AverageCPC'] = $AverageCPC;

        return $this;
    }

    /**
     * Gets MinImpressionsPerWeek
     *
     * @return string|null
     */
    public function getMinImpressionsPerWeek()
    {
        if (!isset($this->container['MinImpressionsPerWeek']) || is_null($this->container['MinImpressionsPerWeek'])) {
            return null;
        }
        return $this->container['MinImpressionsPerWeek'];
    }

    /**
     * Sets MinImpressionsPerWeek
     *
     * @param string|null $MinImpressionsPerWeek MinImpressionsPerWeek
     *
     * @return self
     */
    public function setMinImpressionsPerWeek($MinImpressionsPerWeek)
    {
        if (is_null($MinImpressionsPerWeek)) {
            throw new \InvalidArgumentException('non-nullable MinImpressionsPerWeek cannot be null');
        }
        $this->container['MinImpressionsPerWeek'] = $MinImpressionsPerWeek;

        return $this;
    }

    /**
     * Gets MaxImpressionsPerWeek
     *
     * @return string|null
     */
    public function getMaxImpressionsPerWeek()
    {
        if (!isset($this->container['MaxImpressionsPerWeek']) || is_null($this->container['MaxImpressionsPerWeek'])) {
            return null;
        }
        return $this->container['MaxImpressionsPerWeek'];
    }

    /**
     * Sets MaxImpressionsPerWeek
     *
     * @param string|null $MaxImpressionsPerWeek MaxImpressionsPerWeek
     *
     * @return self
     */
    public function setMaxImpressionsPerWeek($MaxImpressionsPerWeek)
    {
        if (is_null($MaxImpressionsPerWeek)) {
            throw new \InvalidArgumentException('non-nullable MaxImpressionsPerWeek cannot be null');
        }
        $this->container['MaxImpressionsPerWeek'] = $MaxImpressionsPerWeek;

        return $this;
    }

    /**
     * Gets CTR
     *
     * @return float|null
     */
    public function getCTR()
    {
        if (!isset($this->container['CTR']) || is_null($this->container['CTR'])) {
            return null;
        }
        return $this->container['CTR'];
    }

    /**
     * Sets CTR
     *
     * @param float|null $CTR CTR
     *
     * @return self
     */
    public function setCTR($CTR)
    {
        if (is_null($CTR)) {
            throw new \InvalidArgumentException('non-nullable CTR cannot be null');
        }
        $this->container['CTR'] = $CTR;

        return $this;
    }

    /**
     * Gets MinTotalCostPerWeek
     *
     * @return float|null
     */
    public function getMinTotalCostPerWeek()
    {
        if (!isset($this->container['MinTotalCostPerWeek']) || is_null($this->container['MinTotalCostPerWeek'])) {
            return null;
        }
        return $this->container['MinTotalCostPerWeek'];
    }

    /**
     * Sets MinTotalCostPerWeek
     *
     * @param float|null $MinTotalCostPerWeek MinTotalCostPerWeek
     *
     * @return self
     */
    public function setMinTotalCostPerWeek($MinTotalCostPerWeek)
    {
        if (is_null($MinTotalCostPerWeek)) {
            throw new \InvalidArgumentException('non-nullable MinTotalCostPerWeek cannot be null');
        }
        $this->container['MinTotalCostPerWeek'] = $MinTotalCostPerWeek;

        return $this;
    }

    /**
     * Gets MaxTotalCostPerWeek
     *
     * @return float|null
     */
    public function getMaxTotalCostPerWeek()
    {
        if (!isset($this->container['MaxTotalCostPerWeek']) || is_null($this->container['MaxTotalCostPerWeek'])) {
            return null;
        }
        return $this->container['MaxTotalCostPerWeek'];
    }

    /**
     * Sets MaxTotalCostPerWeek
     *
     * @param float|null $MaxTotalCostPerWeek MaxTotalCostPerWeek
     *
     * @return self
     */
    public function setMaxTotalCostPerWeek($MaxTotalCostPerWeek)
    {
        if (is_null($MaxTotalCostPerWeek)) {
            throw new \InvalidArgumentException('non-nullable MaxTotalCostPerWeek cannot be null');
        }
        $this->container['MaxTotalCostPerWeek'] = $MaxTotalCostPerWeek;

        return $this;
    }

    /**
     * Gets CurrencyCode
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\CurrencyCode|mixed|null
     */
    public function getCurrencyCode()
    {
        if (!isset($this->container['CurrencyCode']) || is_null($this->container['CurrencyCode'])) {
            return null;
        }
        if ((is_object($this->container['CurrencyCode']) || is_string($this->container['CurrencyCode'])) && method_exists($this->container['CurrencyCode'], 'getValue')) {
            return $this->container['CurrencyCode']->getValue();
        }
        return $this->container['CurrencyCode'];
    }

    /**
     * Sets CurrencyCode
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\CurrencyCode|mixed|null $CurrencyCode CurrencyCode
     *
     * @return self
     */
    public function setCurrencyCode($CurrencyCode)
    {
        if (is_null($CurrencyCode)) {
            throw new \InvalidArgumentException('non-nullable CurrencyCode cannot be null');
        }
        if (!$CurrencyCode instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\CurrencyCode) {
            $CurrencyCode = new \Microsoft\MsAds\Rest\Model\AdInsightService\CurrencyCode($CurrencyCode);
        }
        $this->container['CurrencyCode'] = $CurrencyCode;

        return $this;
    }

    /**
     * Gets EstimatedAdPosition
     *
     * @return float|null
     */
    public function getEstimatedAdPosition()
    {
        if (!isset($this->container['EstimatedAdPosition']) || is_null($this->container['EstimatedAdPosition'])) {
            return null;
        }
        return $this->container['EstimatedAdPosition'];
    }

    /**
     * Sets EstimatedAdPosition
     *
     * @param float|null $EstimatedAdPosition EstimatedAdPosition
     *
     * @return self
     */
    public function setEstimatedAdPosition($EstimatedAdPosition)
    {
        if (is_null($EstimatedAdPosition)) {
            throw new \InvalidArgumentException('non-nullable EstimatedAdPosition cannot be null');
        }
        $this->container['EstimatedAdPosition'] = $EstimatedAdPosition;

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
