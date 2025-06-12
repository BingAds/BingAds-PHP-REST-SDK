<?php
/**
 * KeywordKPI
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

class KeywordKPI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'KeywordKPI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Device' => 'string',
        'MatchType' => '\Microsoft\MsAds\Rest\Model\AdInsightService\MatchType',
        'AdPosition' => '\Microsoft\MsAds\Rest\Model\AdInsightService\AdPosition',
        'Clicks' => 'int',
        'Impressions' => 'string',
        'AverageCPC' => 'float',
        'CTR' => 'float',
        'TotalCost' => 'float',
        'AverageBid' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Device' => null,
        'MatchType' => null,
        'AdPosition' => null,
        'Clicks' => 'int32',
        'Impressions' => 'int64',
        'AverageCPC' => 'double',
        'CTR' => 'double',
        'TotalCost' => 'double',
        'AverageBid' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Device' => true,
        'MatchType' => false,
        'AdPosition' => false,
        'Clicks' => false,
        'Impressions' => false,
        'AverageCPC' => false,
        'CTR' => false,
        'TotalCost' => false,
        'AverageBid' => false
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
        'Device' => 'Device',
        'MatchType' => 'MatchType',
        'AdPosition' => 'AdPosition',
        'Clicks' => 'Clicks',
        'Impressions' => 'Impressions',
        'AverageCPC' => 'AverageCPC',
        'CTR' => 'CTR',
        'TotalCost' => 'TotalCost',
        'AverageBid' => 'AverageBid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Device' => 'setDevice',
        'MatchType' => 'setMatchType',
        'AdPosition' => 'setAdPosition',
        'Clicks' => 'setClicks',
        'Impressions' => 'setImpressions',
        'AverageCPC' => 'setAverageCPC',
        'CTR' => 'setCTR',
        'TotalCost' => 'setTotalCost',
        'AverageBid' => 'setAverageBid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Device' => 'getDevice',
        'MatchType' => 'getMatchType',
        'AdPosition' => 'getAdPosition',
        'Clicks' => 'getClicks',
        'Impressions' => 'getImpressions',
        'AverageCPC' => 'getAverageCPC',
        'CTR' => 'getCTR',
        'TotalCost' => 'getTotalCost',
        'AverageBid' => 'getAverageBid'
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
        $this->setIfExists('Device', $data ?? [], null);
        $this->setIfExists('MatchType', $data ?? [], null);
        $this->setIfExists('AdPosition', $data ?? [], null);
        $this->setIfExists('Clicks', $data ?? [], null);
        $this->setIfExists('Impressions', $data ?? [], null);
        $this->setIfExists('AverageCPC', $data ?? [], null);
        $this->setIfExists('CTR', $data ?? [], null);
        $this->setIfExists('TotalCost', $data ?? [], null);
        $this->setIfExists('AverageBid', $data ?? [], null);
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
     * Gets Device
     *
     * @return string|null
     */
    public function getDevice()
    {
        if (!isset($this->container['Device']) || is_null($this->container['Device'])) {
            return null;
        }
        return $this->container['Device'];
    }

    /**
     * Sets Device
     *
     * @param string|null $Device Device
     *
     * @return self
     */
    public function setDevice($Device)
    {
        if (is_null($Device)) {
            array_push($this->openAPINullablesSetToNull, 'Device');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Device', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Device'] = $Device;

        return $this;
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
     * Gets AdPosition
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\AdPosition|mixed|null
     */
    public function getAdPosition()
    {
        if (!isset($this->container['AdPosition']) || is_null($this->container['AdPosition'])) {
            return null;
        }
        if ((is_object($this->container['AdPosition']) || is_string($this->container['AdPosition'])) && method_exists($this->container['AdPosition'], 'getValue')) {
            return $this->container['AdPosition']->getValue();
        }
        return $this->container['AdPosition'];
    }

    /**
     * Sets AdPosition
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\AdPosition|mixed|null $AdPosition AdPosition
     *
     * @return self
     */
    public function setAdPosition($AdPosition)
    {
        if (is_null($AdPosition)) {
            throw new \InvalidArgumentException('non-nullable AdPosition cannot be null');
        }
        if (!$AdPosition instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\AdPosition) {
            $AdPosition = new \Microsoft\MsAds\Rest\Model\AdInsightService\AdPosition($AdPosition);
        }
        $this->container['AdPosition'] = $AdPosition;

        return $this;
    }

    /**
     * Gets Clicks
     *
     * @return int|null
     */
    public function getClicks()
    {
        if (!isset($this->container['Clicks']) || is_null($this->container['Clicks'])) {
            return null;
        }
        return $this->container['Clicks'];
    }

    /**
     * Sets Clicks
     *
     * @param int|null $Clicks Clicks
     *
     * @return self
     */
    public function setClicks($Clicks)
    {
        if (is_null($Clicks)) {
            throw new \InvalidArgumentException('non-nullable Clicks cannot be null');
        }
        $this->container['Clicks'] = $Clicks;

        return $this;
    }

    /**
     * Gets Impressions
     *
     * @return string|null
     */
    public function getImpressions()
    {
        if (!isset($this->container['Impressions']) || is_null($this->container['Impressions'])) {
            return null;
        }
        return $this->container['Impressions'];
    }

    /**
     * Sets Impressions
     *
     * @param string|null $Impressions Impressions
     *
     * @return self
     */
    public function setImpressions($Impressions)
    {
        if (is_null($Impressions)) {
            throw new \InvalidArgumentException('non-nullable Impressions cannot be null');
        }
        $this->container['Impressions'] = $Impressions;

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
     * Gets TotalCost
     *
     * @return float|null
     */
    public function getTotalCost()
    {
        if (!isset($this->container['TotalCost']) || is_null($this->container['TotalCost'])) {
            return null;
        }
        return $this->container['TotalCost'];
    }

    /**
     * Sets TotalCost
     *
     * @param float|null $TotalCost TotalCost
     *
     * @return self
     */
    public function setTotalCost($TotalCost)
    {
        if (is_null($TotalCost)) {
            throw new \InvalidArgumentException('non-nullable TotalCost cannot be null');
        }
        $this->container['TotalCost'] = $TotalCost;

        return $this;
    }

    /**
     * Gets AverageBid
     *
     * @return float|null
     */
    public function getAverageBid()
    {
        if (!isset($this->container['AverageBid']) || is_null($this->container['AverageBid'])) {
            return null;
        }
        return $this->container['AverageBid'];
    }

    /**
     * Sets AverageBid
     *
     * @param float|null $AverageBid AverageBid
     *
     * @return self
     */
    public function setAverageBid($AverageBid)
    {
        if (is_null($AverageBid)) {
            throw new \InvalidArgumentException('non-nullable AverageBid cannot be null');
        }
        $this->container['AverageBid'] = $AverageBid;

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
