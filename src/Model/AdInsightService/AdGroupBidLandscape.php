<?php
/**
 * AdGroupBidLandscape
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

class AdGroupBidLandscape implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AdGroupBidLandscape';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AdGroupId' => 'string',
        'AdGroupBidLandscapeType' => '\Microsoft\MsAds\Rest\Model\AdInsightService\AdGroupBidLandscapeType',
        'StartDate' => '\Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear',
        'EndDate' => '\Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear',
        'BidLandscapePoints' => '\Microsoft\MsAds\Rest\Model\AdInsightService\BidLandscapePoint[]'
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
        'AdGroupBidLandscapeType' => null,
        'StartDate' => null,
        'EndDate' => null,
        'BidLandscapePoints' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AdGroupId' => false,
        'AdGroupBidLandscapeType' => false,
        'StartDate' => true,
        'EndDate' => true,
        'BidLandscapePoints' => true
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
        'AdGroupBidLandscapeType' => 'AdGroupBidLandscapeType',
        'StartDate' => 'StartDate',
        'EndDate' => 'EndDate',
        'BidLandscapePoints' => 'BidLandscapePoints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AdGroupId' => 'setAdGroupId',
        'AdGroupBidLandscapeType' => 'setAdGroupBidLandscapeType',
        'StartDate' => 'setStartDate',
        'EndDate' => 'setEndDate',
        'BidLandscapePoints' => 'setBidLandscapePoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AdGroupId' => 'getAdGroupId',
        'AdGroupBidLandscapeType' => 'getAdGroupBidLandscapeType',
        'StartDate' => 'getStartDate',
        'EndDate' => 'getEndDate',
        'BidLandscapePoints' => 'getBidLandscapePoints'
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
        $this->setIfExists('AdGroupBidLandscapeType', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('BidLandscapePoints', $data ?? [], null);
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
     * Gets AdGroupBidLandscapeType
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\AdGroupBidLandscapeType|mixed|null
     */
    public function getAdGroupBidLandscapeType()
    {
        if (!isset($this->container['AdGroupBidLandscapeType']) || is_null($this->container['AdGroupBidLandscapeType'])) {
            return null;
        }
        if ((is_object($this->container['AdGroupBidLandscapeType']) || is_string($this->container['AdGroupBidLandscapeType'])) && method_exists($this->container['AdGroupBidLandscapeType'], 'getValue')) {
            return $this->container['AdGroupBidLandscapeType']->getValue();
        }
        return $this->container['AdGroupBidLandscapeType'];
    }

    /**
     * Sets AdGroupBidLandscapeType
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\AdGroupBidLandscapeType|mixed|null $AdGroupBidLandscapeType AdGroupBidLandscapeType
     *
     * @return self
     */
    public function setAdGroupBidLandscapeType($AdGroupBidLandscapeType)
    {
        if (is_null($AdGroupBidLandscapeType)) {
            throw new \InvalidArgumentException('non-nullable AdGroupBidLandscapeType cannot be null');
        }
        if (!$AdGroupBidLandscapeType instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\AdGroupBidLandscapeType) {
            $AdGroupBidLandscapeType = new \Microsoft\MsAds\Rest\Model\AdInsightService\AdGroupBidLandscapeType($AdGroupBidLandscapeType);
        }
        $this->container['AdGroupBidLandscapeType'] = $AdGroupBidLandscapeType;

        return $this;
    }

    /**
     * Gets StartDate
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear|null
     */
    public function getStartDate()
    {
        if (!isset($this->container['StartDate']) || is_null($this->container['StartDate'])) {
            return null;
        }
        return $this->container['StartDate'];
    }

    /**
     * Sets StartDate
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear|null $StartDate StartDate
     *
     * @return self
     */
    public function setStartDate($StartDate)
    {
        if (is_null($StartDate)) {
            array_push($this->openAPINullablesSetToNull, 'StartDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StartDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StartDate'] = $StartDate;

        return $this;
    }

    /**
     * Gets EndDate
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear|null
     */
    public function getEndDate()
    {
        if (!isset($this->container['EndDate']) || is_null($this->container['EndDate'])) {
            return null;
        }
        return $this->container['EndDate'];
    }

    /**
     * Sets EndDate
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear|null $EndDate EndDate
     *
     * @return self
     */
    public function setEndDate($EndDate)
    {
        if (is_null($EndDate)) {
            array_push($this->openAPINullablesSetToNull, 'EndDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EndDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EndDate'] = $EndDate;

        return $this;
    }

    /**
     * Gets BidLandscapePoints
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\BidLandscapePoint[]|null
     */
    public function getBidLandscapePoints()
    {
        if (!isset($this->container['BidLandscapePoints']) || is_null($this->container['BidLandscapePoints'])) {
            return null;
        }
        return $this->container['BidLandscapePoints'];
    }

    /**
     * Sets BidLandscapePoints
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\BidLandscapePoint[]|null $BidLandscapePoints BidLandscapePoints
     *
     * @return self
     */
    public function setBidLandscapePoints($BidLandscapePoints)
    {
        if (is_null($BidLandscapePoints)) {
            array_push($this->openAPINullablesSetToNull, 'BidLandscapePoints');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BidLandscapePoints', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BidLandscapePoints'] = $BidLandscapePoints;

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
