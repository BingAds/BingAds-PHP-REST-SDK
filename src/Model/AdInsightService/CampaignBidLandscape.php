<?php
/**
 * CampaignBidLandscape
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

class CampaignBidLandscape implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CampaignBidLandscape';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CampaignId' => 'string',
        'CampaignBidLandscapeType' => '\Microsoft\MsAds\Rest\Model\AdInsightService\CampaignBidLandscapeType',
        'StartDate' => '\Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear',
        'EndDate' => '\Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear',
        'CampaignBidLandscapePoints' => '\Microsoft\MsAds\Rest\Model\AdInsightService\CampaignBidLandscapePoint[]'
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
        'CampaignBidLandscapeType' => null,
        'StartDate' => null,
        'EndDate' => null,
        'CampaignBidLandscapePoints' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CampaignId' => false,
        'CampaignBidLandscapeType' => false,
        'StartDate' => true,
        'EndDate' => true,
        'CampaignBidLandscapePoints' => true
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
        'CampaignBidLandscapeType' => 'CampaignBidLandscapeType',
        'StartDate' => 'StartDate',
        'EndDate' => 'EndDate',
        'CampaignBidLandscapePoints' => 'CampaignBidLandscapePoints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CampaignId' => 'setCampaignId',
        'CampaignBidLandscapeType' => 'setCampaignBidLandscapeType',
        'StartDate' => 'setStartDate',
        'EndDate' => 'setEndDate',
        'CampaignBidLandscapePoints' => 'setCampaignBidLandscapePoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CampaignId' => 'getCampaignId',
        'CampaignBidLandscapeType' => 'getCampaignBidLandscapeType',
        'StartDate' => 'getStartDate',
        'EndDate' => 'getEndDate',
        'CampaignBidLandscapePoints' => 'getCampaignBidLandscapePoints'
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
        $this->setIfExists('CampaignBidLandscapeType', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('CampaignBidLandscapePoints', $data ?? [], null);
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
     * Gets CampaignBidLandscapeType
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\CampaignBidLandscapeType|mixed|null
     */
    public function getCampaignBidLandscapeType()
    {
        if (!isset($this->container['CampaignBidLandscapeType']) || is_null($this->container['CampaignBidLandscapeType'])) {
            return null;
        }
        if ((is_object($this->container['CampaignBidLandscapeType']) || is_string($this->container['CampaignBidLandscapeType'])) && method_exists($this->container['CampaignBidLandscapeType'], 'getValue')) {
            return $this->container['CampaignBidLandscapeType']->getValue();
        }
        return $this->container['CampaignBidLandscapeType'];
    }

    /**
     * Sets CampaignBidLandscapeType
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\CampaignBidLandscapeType|mixed|null $CampaignBidLandscapeType CampaignBidLandscapeType
     *
     * @return self
     */
    public function setCampaignBidLandscapeType($CampaignBidLandscapeType)
    {
        if (is_null($CampaignBidLandscapeType)) {
            throw new \InvalidArgumentException('non-nullable CampaignBidLandscapeType cannot be null');
        }
        if (!$CampaignBidLandscapeType instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\CampaignBidLandscapeType) {
            $CampaignBidLandscapeType = new \Microsoft\MsAds\Rest\Model\AdInsightService\CampaignBidLandscapeType($CampaignBidLandscapeType);
        }
        $this->container['CampaignBidLandscapeType'] = $CampaignBidLandscapeType;

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
     * Gets CampaignBidLandscapePoints
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\CampaignBidLandscapePoint[]|null
     */
    public function getCampaignBidLandscapePoints()
    {
        if (!isset($this->container['CampaignBidLandscapePoints']) || is_null($this->container['CampaignBidLandscapePoints'])) {
            return null;
        }
        return $this->container['CampaignBidLandscapePoints'];
    }

    /**
     * Sets CampaignBidLandscapePoints
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\CampaignBidLandscapePoint[]|null $CampaignBidLandscapePoints CampaignBidLandscapePoints
     *
     * @return self
     */
    public function setCampaignBidLandscapePoints($CampaignBidLandscapePoints)
    {
        if (is_null($CampaignBidLandscapePoints)) {
            array_push($this->openAPINullablesSetToNull, 'CampaignBidLandscapePoints');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CampaignBidLandscapePoints', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CampaignBidLandscapePoints'] = $CampaignBidLandscapePoints;

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
