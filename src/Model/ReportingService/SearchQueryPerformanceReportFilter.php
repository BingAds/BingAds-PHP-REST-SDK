<?php
/**
 * SearchQueryPerformanceReportFilter
 * ReportingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\ReportingService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\ReportingService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class SearchQueryPerformanceReportFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SearchQueryPerformanceReportFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'DeliveredMatchType' => '\Microsoft\MsAds\Rest\Model\ReportingService\DeliveredMatchTypeReportFilter',
        'SearchQueries' => 'string[]',
        'AdType' => '\Microsoft\MsAds\Rest\Model\ReportingService\AdTypeReportFilter',
        'CampaignStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\CampaignStatusReportFilter',
        'AdStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\AdStatusReportFilter',
        'Language' => '\Microsoft\MsAds\Rest\Model\ReportingService\LanguageReportFilter',
        'AccountStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\AccountStatusReportFilter',
        'AdGroupStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter',
        'KeywordStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\KeywordStatusReportFilter',
        'ExcludeZeroClicks' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'DeliveredMatchType' => null,
        'SearchQueries' => null,
        'AdType' => null,
        'CampaignStatus' => null,
        'AdStatus' => null,
        'Language' => null,
        'AccountStatus' => null,
        'AdGroupStatus' => null,
        'KeywordStatus' => null,
        'ExcludeZeroClicks' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'DeliveredMatchType' => false,
        'SearchQueries' => true,
        'AdType' => false,
        'CampaignStatus' => false,
        'AdStatus' => false,
        'Language' => false,
        'AccountStatus' => false,
        'AdGroupStatus' => false,
        'KeywordStatus' => false,
        'ExcludeZeroClicks' => false
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
        'DeliveredMatchType' => 'DeliveredMatchType',
        'SearchQueries' => 'SearchQueries',
        'AdType' => 'AdType',
        'CampaignStatus' => 'CampaignStatus',
        'AdStatus' => 'AdStatus',
        'Language' => 'Language',
        'AccountStatus' => 'AccountStatus',
        'AdGroupStatus' => 'AdGroupStatus',
        'KeywordStatus' => 'KeywordStatus',
        'ExcludeZeroClicks' => 'ExcludeZeroClicks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'DeliveredMatchType' => 'setDeliveredMatchType',
        'SearchQueries' => 'setSearchQueries',
        'AdType' => 'setAdType',
        'CampaignStatus' => 'setCampaignStatus',
        'AdStatus' => 'setAdStatus',
        'Language' => 'setLanguage',
        'AccountStatus' => 'setAccountStatus',
        'AdGroupStatus' => 'setAdGroupStatus',
        'KeywordStatus' => 'setKeywordStatus',
        'ExcludeZeroClicks' => 'setExcludeZeroClicks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'DeliveredMatchType' => 'getDeliveredMatchType',
        'SearchQueries' => 'getSearchQueries',
        'AdType' => 'getAdType',
        'CampaignStatus' => 'getCampaignStatus',
        'AdStatus' => 'getAdStatus',
        'Language' => 'getLanguage',
        'AccountStatus' => 'getAccountStatus',
        'AdGroupStatus' => 'getAdGroupStatus',
        'KeywordStatus' => 'getKeywordStatus',
        'ExcludeZeroClicks' => 'getExcludeZeroClicks'
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
        $this->setIfExists('DeliveredMatchType', $data ?? [], null);
        $this->setIfExists('SearchQueries', $data ?? [], null);
        $this->setIfExists('AdType', $data ?? [], null);
        $this->setIfExists('CampaignStatus', $data ?? [], null);
        $this->setIfExists('AdStatus', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('AccountStatus', $data ?? [], null);
        $this->setIfExists('AdGroupStatus', $data ?? [], null);
        $this->setIfExists('KeywordStatus', $data ?? [], null);
        $this->setIfExists('ExcludeZeroClicks', $data ?? [], null);
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
     * Gets DeliveredMatchType
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\DeliveredMatchTypeReportFilter|mixed|null
     */
    public function getDeliveredMatchType()
    {
        if (!isset($this->container['DeliveredMatchType']) || is_null($this->container['DeliveredMatchType'])) {
            return null;
        }
        if ((is_object($this->container['DeliveredMatchType']) || is_string($this->container['DeliveredMatchType'])) && method_exists($this->container['DeliveredMatchType'], 'getValue')) {
            return $this->container['DeliveredMatchType']->getValue();
        }
        return $this->container['DeliveredMatchType'];
    }

    /**
     * Sets DeliveredMatchType
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\DeliveredMatchTypeReportFilter|mixed|null $DeliveredMatchType DeliveredMatchType
     *
     * @return self
     */
    public function setDeliveredMatchType($DeliveredMatchType)
    {
        if (is_null($DeliveredMatchType)) {
            throw new \InvalidArgumentException('non-nullable DeliveredMatchType cannot be null');
        }
        if (!$DeliveredMatchType instanceof \Microsoft\MsAds\Rest\Model\ReportingService\DeliveredMatchTypeReportFilter) {
            $DeliveredMatchType = new \Microsoft\MsAds\Rest\Model\ReportingService\DeliveredMatchTypeReportFilter($DeliveredMatchType);
        }
        $this->container['DeliveredMatchType'] = $DeliveredMatchType;

        return $this;
    }

    /**
     * Gets SearchQueries
     *
     * @return string[]|null
     */
    public function getSearchQueries()
    {
        if (!isset($this->container['SearchQueries']) || is_null($this->container['SearchQueries'])) {
            return null;
        }
        return $this->container['SearchQueries'];
    }

    /**
     * Sets SearchQueries
     *
     * @param string[]|null $SearchQueries SearchQueries
     *
     * @return self
     */
    public function setSearchQueries($SearchQueries)
    {
        if (is_null($SearchQueries)) {
            array_push($this->openAPINullablesSetToNull, 'SearchQueries');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SearchQueries', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SearchQueries'] = $SearchQueries;

        return $this;
    }

    /**
     * Gets AdType
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\AdTypeReportFilter|mixed|null
     */
    public function getAdType()
    {
        if (!isset($this->container['AdType']) || is_null($this->container['AdType'])) {
            return null;
        }
        if ((is_object($this->container['AdType']) || is_string($this->container['AdType'])) && method_exists($this->container['AdType'], 'getValue')) {
            return $this->container['AdType']->getValue();
        }
        return $this->container['AdType'];
    }

    /**
     * Sets AdType
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\AdTypeReportFilter|mixed|null $AdType AdType
     *
     * @return self
     */
    public function setAdType($AdType)
    {
        if (is_null($AdType)) {
            throw new \InvalidArgumentException('non-nullable AdType cannot be null');
        }
        if (!$AdType instanceof \Microsoft\MsAds\Rest\Model\ReportingService\AdTypeReportFilter) {
            $AdType = new \Microsoft\MsAds\Rest\Model\ReportingService\AdTypeReportFilter($AdType);
        }
        $this->container['AdType'] = $AdType;

        return $this;
    }

    /**
     * Gets CampaignStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\CampaignStatusReportFilter|mixed|null
     */
    public function getCampaignStatus()
    {
        if (!isset($this->container['CampaignStatus']) || is_null($this->container['CampaignStatus'])) {
            return null;
        }
        if ((is_object($this->container['CampaignStatus']) || is_string($this->container['CampaignStatus'])) && method_exists($this->container['CampaignStatus'], 'getValue')) {
            return $this->container['CampaignStatus']->getValue();
        }
        return $this->container['CampaignStatus'];
    }

    /**
     * Sets CampaignStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\CampaignStatusReportFilter|mixed|null $CampaignStatus CampaignStatus
     *
     * @return self
     */
    public function setCampaignStatus($CampaignStatus)
    {
        if (is_null($CampaignStatus)) {
            throw new \InvalidArgumentException('non-nullable CampaignStatus cannot be null');
        }
        if (!$CampaignStatus instanceof \Microsoft\MsAds\Rest\Model\ReportingService\CampaignStatusReportFilter) {
            $CampaignStatus = new \Microsoft\MsAds\Rest\Model\ReportingService\CampaignStatusReportFilter($CampaignStatus);
        }
        $this->container['CampaignStatus'] = $CampaignStatus;

        return $this;
    }

    /**
     * Gets AdStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\AdStatusReportFilter|mixed|null
     */
    public function getAdStatus()
    {
        if (!isset($this->container['AdStatus']) || is_null($this->container['AdStatus'])) {
            return null;
        }
        if ((is_object($this->container['AdStatus']) || is_string($this->container['AdStatus'])) && method_exists($this->container['AdStatus'], 'getValue')) {
            return $this->container['AdStatus']->getValue();
        }
        return $this->container['AdStatus'];
    }

    /**
     * Sets AdStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\AdStatusReportFilter|mixed|null $AdStatus AdStatus
     *
     * @return self
     */
    public function setAdStatus($AdStatus)
    {
        if (is_null($AdStatus)) {
            throw new \InvalidArgumentException('non-nullable AdStatus cannot be null');
        }
        if (!$AdStatus instanceof \Microsoft\MsAds\Rest\Model\ReportingService\AdStatusReportFilter) {
            $AdStatus = new \Microsoft\MsAds\Rest\Model\ReportingService\AdStatusReportFilter($AdStatus);
        }
        $this->container['AdStatus'] = $AdStatus;

        return $this;
    }

    /**
     * Gets Language
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\LanguageReportFilter|mixed|null
     */
    public function getLanguage()
    {
        if (!isset($this->container['Language']) || is_null($this->container['Language'])) {
            return null;
        }
        if ((is_object($this->container['Language']) || is_string($this->container['Language'])) && method_exists($this->container['Language'], 'getValue')) {
            return $this->container['Language']->getValue();
        }
        return $this->container['Language'];
    }

    /**
     * Sets Language
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\LanguageReportFilter|mixed|null $Language Language
     *
     * @return self
     */
    public function setLanguage($Language)
    {
        if (is_null($Language)) {
            throw new \InvalidArgumentException('non-nullable Language cannot be null');
        }
        if (!$Language instanceof \Microsoft\MsAds\Rest\Model\ReportingService\LanguageReportFilter) {
            $Language = new \Microsoft\MsAds\Rest\Model\ReportingService\LanguageReportFilter($Language);
        }
        $this->container['Language'] = $Language;

        return $this;
    }

    /**
     * Gets AccountStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\AccountStatusReportFilter|mixed|null
     */
    public function getAccountStatus()
    {
        if (!isset($this->container['AccountStatus']) || is_null($this->container['AccountStatus'])) {
            return null;
        }
        if ((is_object($this->container['AccountStatus']) || is_string($this->container['AccountStatus'])) && method_exists($this->container['AccountStatus'], 'getValue')) {
            return $this->container['AccountStatus']->getValue();
        }
        return $this->container['AccountStatus'];
    }

    /**
     * Sets AccountStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\AccountStatusReportFilter|mixed|null $AccountStatus AccountStatus
     *
     * @return self
     */
    public function setAccountStatus($AccountStatus)
    {
        if (is_null($AccountStatus)) {
            throw new \InvalidArgumentException('non-nullable AccountStatus cannot be null');
        }
        if (!$AccountStatus instanceof \Microsoft\MsAds\Rest\Model\ReportingService\AccountStatusReportFilter) {
            $AccountStatus = new \Microsoft\MsAds\Rest\Model\ReportingService\AccountStatusReportFilter($AccountStatus);
        }
        $this->container['AccountStatus'] = $AccountStatus;

        return $this;
    }

    /**
     * Gets AdGroupStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter|mixed|null
     */
    public function getAdGroupStatus()
    {
        if (!isset($this->container['AdGroupStatus']) || is_null($this->container['AdGroupStatus'])) {
            return null;
        }
        if ((is_object($this->container['AdGroupStatus']) || is_string($this->container['AdGroupStatus'])) && method_exists($this->container['AdGroupStatus'], 'getValue')) {
            return $this->container['AdGroupStatus']->getValue();
        }
        return $this->container['AdGroupStatus'];
    }

    /**
     * Sets AdGroupStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter|mixed|null $AdGroupStatus AdGroupStatus
     *
     * @return self
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
        if (is_null($AdGroupStatus)) {
            throw new \InvalidArgumentException('non-nullable AdGroupStatus cannot be null');
        }
        if (!$AdGroupStatus instanceof \Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter) {
            $AdGroupStatus = new \Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter($AdGroupStatus);
        }
        $this->container['AdGroupStatus'] = $AdGroupStatus;

        return $this;
    }

    /**
     * Gets KeywordStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\KeywordStatusReportFilter|mixed|null
     */
    public function getKeywordStatus()
    {
        if (!isset($this->container['KeywordStatus']) || is_null($this->container['KeywordStatus'])) {
            return null;
        }
        if ((is_object($this->container['KeywordStatus']) || is_string($this->container['KeywordStatus'])) && method_exists($this->container['KeywordStatus'], 'getValue')) {
            return $this->container['KeywordStatus']->getValue();
        }
        return $this->container['KeywordStatus'];
    }

    /**
     * Sets KeywordStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\KeywordStatusReportFilter|mixed|null $KeywordStatus KeywordStatus
     *
     * @return self
     */
    public function setKeywordStatus($KeywordStatus)
    {
        if (is_null($KeywordStatus)) {
            throw new \InvalidArgumentException('non-nullable KeywordStatus cannot be null');
        }
        if (!$KeywordStatus instanceof \Microsoft\MsAds\Rest\Model\ReportingService\KeywordStatusReportFilter) {
            $KeywordStatus = new \Microsoft\MsAds\Rest\Model\ReportingService\KeywordStatusReportFilter($KeywordStatus);
        }
        $this->container['KeywordStatus'] = $KeywordStatus;

        return $this;
    }

    /**
     * Gets ExcludeZeroClicks
     *
     * @return bool|null
     */
    public function getExcludeZeroClicks()
    {
        if (!isset($this->container['ExcludeZeroClicks']) || is_null($this->container['ExcludeZeroClicks'])) {
            return null;
        }
        return $this->container['ExcludeZeroClicks'];
    }

    /**
     * Sets ExcludeZeroClicks
     *
     * @param bool|null $ExcludeZeroClicks ExcludeZeroClicks
     *
     * @return self
     */
    public function setExcludeZeroClicks($ExcludeZeroClicks)
    {
        if (is_null($ExcludeZeroClicks)) {
            throw new \InvalidArgumentException('non-nullable ExcludeZeroClicks cannot be null');
        }
        $this->container['ExcludeZeroClicks'] = $ExcludeZeroClicks;

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
