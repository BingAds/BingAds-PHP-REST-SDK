<?php
/**
 * GetEstimatedBidByKeywordsRequest
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

class GetEstimatedBidByKeywordsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetEstimatedBidByKeywordsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Keywords' => '\Microsoft\MsAds\Rest\Model\AdInsightService\KeywordAndMatchType[]',
        'TargetPositionForAds' => '\Microsoft\MsAds\Rest\Model\AdInsightService\TargetAdPosition',
        'Language' => 'string',
        'LocationIds' => 'string[]',
        'CurrencyCode' => '\Microsoft\MsAds\Rest\Model\AdInsightService\CurrencyCode',
        'CampaignId' => 'string',
        'AdGroupId' => 'string',
        'EntityLevelBid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Keywords' => null,
        'TargetPositionForAds' => null,
        'Language' => null,
        'LocationIds' => 'int64',
        'CurrencyCode' => null,
        'CampaignId' => 'int64',
        'AdGroupId' => 'int64',
        'EntityLevelBid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Keywords' => true,
        'TargetPositionForAds' => false,
        'Language' => true,
        'LocationIds' => true,
        'CurrencyCode' => false,
        'CampaignId' => true,
        'AdGroupId' => true,
        'EntityLevelBid' => true
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
        'Keywords' => 'Keywords',
        'TargetPositionForAds' => 'TargetPositionForAds',
        'Language' => 'Language',
        'LocationIds' => 'LocationIds',
        'CurrencyCode' => 'CurrencyCode',
        'CampaignId' => 'CampaignId',
        'AdGroupId' => 'AdGroupId',
        'EntityLevelBid' => 'EntityLevelBid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Keywords' => 'setKeywords',
        'TargetPositionForAds' => 'setTargetPositionForAds',
        'Language' => 'setLanguage',
        'LocationIds' => 'setLocationIds',
        'CurrencyCode' => 'setCurrencyCode',
        'CampaignId' => 'setCampaignId',
        'AdGroupId' => 'setAdGroupId',
        'EntityLevelBid' => 'setEntityLevelBid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Keywords' => 'getKeywords',
        'TargetPositionForAds' => 'getTargetPositionForAds',
        'Language' => 'getLanguage',
        'LocationIds' => 'getLocationIds',
        'CurrencyCode' => 'getCurrencyCode',
        'CampaignId' => 'getCampaignId',
        'AdGroupId' => 'getAdGroupId',
        'EntityLevelBid' => 'getEntityLevelBid'
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
        $this->setIfExists('Keywords', $data ?? [], null);
        $this->setIfExists('TargetPositionForAds', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('LocationIds', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('CampaignId', $data ?? [], null);
        $this->setIfExists('AdGroupId', $data ?? [], null);
        $this->setIfExists('EntityLevelBid', $data ?? [], null);
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
     * Gets Keywords
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\KeywordAndMatchType[]|null
     */
    public function getKeywords()
    {
        if (!isset($this->container['Keywords']) || is_null($this->container['Keywords'])) {
            return null;
        }
        return $this->container['Keywords'];
    }

    /**
     * Sets Keywords
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\KeywordAndMatchType[]|null $Keywords Keywords
     *
     * @return self
     */
    public function setKeywords($Keywords)
    {
        if (is_null($Keywords)) {
            array_push($this->openAPINullablesSetToNull, 'Keywords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Keywords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Keywords'] = $Keywords;

        return $this;
    }

    /**
     * Gets TargetPositionForAds
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\TargetAdPosition|mixed|null
     */
    public function getTargetPositionForAds()
    {
        if (!isset($this->container['TargetPositionForAds']) || is_null($this->container['TargetPositionForAds'])) {
            return null;
        }
        if ((is_object($this->container['TargetPositionForAds']) || is_string($this->container['TargetPositionForAds'])) && method_exists($this->container['TargetPositionForAds'], 'getValue')) {
            return $this->container['TargetPositionForAds']->getValue();
        }
        return $this->container['TargetPositionForAds'];
    }

    /**
     * Sets TargetPositionForAds
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\TargetAdPosition|mixed|null $TargetPositionForAds TargetPositionForAds
     *
     * @return self
     */
    public function setTargetPositionForAds($TargetPositionForAds)
    {
        if (is_null($TargetPositionForAds)) {
            throw new \InvalidArgumentException('non-nullable TargetPositionForAds cannot be null');
        }
        if (!$TargetPositionForAds instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\TargetAdPosition) {
            $TargetPositionForAds = new \Microsoft\MsAds\Rest\Model\AdInsightService\TargetAdPosition($TargetPositionForAds);
        }
        $this->container['TargetPositionForAds'] = $TargetPositionForAds;

        return $this;
    }

    /**
     * Gets Language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        if (!isset($this->container['Language']) || is_null($this->container['Language'])) {
            return null;
        }
        return $this->container['Language'];
    }

    /**
     * Sets Language
     *
     * @param string|null $Language Language
     *
     * @return self
     */
    public function setLanguage($Language)
    {
        if (is_null($Language)) {
            array_push($this->openAPINullablesSetToNull, 'Language');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Language', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Language'] = $Language;

        return $this;
    }

    /**
     * Gets LocationIds
     *
     * @return string[]|null
     */
    public function getLocationIds()
    {
        if (!isset($this->container['LocationIds']) || is_null($this->container['LocationIds'])) {
            return null;
        }
        return $this->container['LocationIds'];
    }

    /**
     * Sets LocationIds
     *
     * @param string[]|null $LocationIds LocationIds
     *
     * @return self
     */
    public function setLocationIds($LocationIds)
    {
        if (is_null($LocationIds)) {
            array_push($this->openAPINullablesSetToNull, 'LocationIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LocationIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LocationIds'] = $LocationIds;

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
     * Gets EntityLevelBid
     *
     * @return string|null
     */
    public function getEntityLevelBid()
    {
        if (!isset($this->container['EntityLevelBid']) || is_null($this->container['EntityLevelBid'])) {
            return null;
        }
        return $this->container['EntityLevelBid'];
    }

    /**
     * Sets EntityLevelBid
     *
     * @param string|null $EntityLevelBid EntityLevelBid
     *
     * @return self
     */
    public function setEntityLevelBid($EntityLevelBid)
    {
        if (is_null($EntityLevelBid)) {
            array_push($this->openAPINullablesSetToNull, 'EntityLevelBid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EntityLevelBid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EntityLevelBid'] = $EntityLevelBid;

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
