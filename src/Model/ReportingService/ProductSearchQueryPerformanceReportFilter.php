<?php
/**
 * ProductSearchQueryPerformanceReportFilter
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

class ProductSearchQueryPerformanceReportFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ProductSearchQueryPerformanceReportFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AccountStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\AccountStatusReportFilter',
        'AdStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\AdStatusReportFilter',
        'AdType' => '\Microsoft\MsAds\Rest\Model\ReportingService\AdTypeReportFilter',
        'CampaignStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\CampaignStatusReportFilter',
        'ExcludeZeroClicks' => 'bool',
        'Language' => '\Microsoft\MsAds\Rest\Model\ReportingService\LanguageReportFilter',
        'SearchQueries' => 'string[]',
        'AdGroupStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter',
        'AssetGroupStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\AssetGroupStatusReportFilter'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'AccountStatus' => null,
        'AdStatus' => null,
        'AdType' => null,
        'CampaignStatus' => null,
        'ExcludeZeroClicks' => null,
        'Language' => null,
        'SearchQueries' => null,
        'AdGroupStatus' => null,
        'AssetGroupStatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AccountStatus' => false,
        'AdStatus' => false,
        'AdType' => false,
        'CampaignStatus' => false,
        'ExcludeZeroClicks' => false,
        'Language' => false,
        'SearchQueries' => true,
        'AdGroupStatus' => false,
        'AssetGroupStatus' => false
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
        'AccountStatus' => 'AccountStatus',
        'AdStatus' => 'AdStatus',
        'AdType' => 'AdType',
        'CampaignStatus' => 'CampaignStatus',
        'ExcludeZeroClicks' => 'ExcludeZeroClicks',
        'Language' => 'Language',
        'SearchQueries' => 'SearchQueries',
        'AdGroupStatus' => 'AdGroupStatus',
        'AssetGroupStatus' => 'AssetGroupStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AccountStatus' => 'setAccountStatus',
        'AdStatus' => 'setAdStatus',
        'AdType' => 'setAdType',
        'CampaignStatus' => 'setCampaignStatus',
        'ExcludeZeroClicks' => 'setExcludeZeroClicks',
        'Language' => 'setLanguage',
        'SearchQueries' => 'setSearchQueries',
        'AdGroupStatus' => 'setAdGroupStatus',
        'AssetGroupStatus' => 'setAssetGroupStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AccountStatus' => 'getAccountStatus',
        'AdStatus' => 'getAdStatus',
        'AdType' => 'getAdType',
        'CampaignStatus' => 'getCampaignStatus',
        'ExcludeZeroClicks' => 'getExcludeZeroClicks',
        'Language' => 'getLanguage',
        'SearchQueries' => 'getSearchQueries',
        'AdGroupStatus' => 'getAdGroupStatus',
        'AssetGroupStatus' => 'getAssetGroupStatus'
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
        $this->setIfExists('AccountStatus', $data ?? [], null);
        $this->setIfExists('AdStatus', $data ?? [], null);
        $this->setIfExists('AdType', $data ?? [], null);
        $this->setIfExists('CampaignStatus', $data ?? [], null);
        $this->setIfExists('ExcludeZeroClicks', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('SearchQueries', $data ?? [], null);
        $this->setIfExists('AdGroupStatus', $data ?? [], null);
        $this->setIfExists('AssetGroupStatus', $data ?? [], null);
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
     * Gets AssetGroupStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\AssetGroupStatusReportFilter|mixed|null
     */
    public function getAssetGroupStatus()
    {
        if (!isset($this->container['AssetGroupStatus']) || is_null($this->container['AssetGroupStatus'])) {
            return null;
        }
        if ((is_object($this->container['AssetGroupStatus']) || is_string($this->container['AssetGroupStatus'])) && method_exists($this->container['AssetGroupStatus'], 'getValue')) {
            return $this->container['AssetGroupStatus']->getValue();
        }
        return $this->container['AssetGroupStatus'];
    }

    /**
     * Sets AssetGroupStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\AssetGroupStatusReportFilter|mixed|null $AssetGroupStatus AssetGroupStatus
     *
     * @return self
     */
    public function setAssetGroupStatus($AssetGroupStatus)
    {
        if (is_null($AssetGroupStatus)) {
            throw new \InvalidArgumentException('non-nullable AssetGroupStatus cannot be null');
        }
        if (!$AssetGroupStatus instanceof \Microsoft\MsAds\Rest\Model\ReportingService\AssetGroupStatusReportFilter) {
            $AssetGroupStatus = new \Microsoft\MsAds\Rest\Model\ReportingService\AssetGroupStatusReportFilter($AssetGroupStatus);
        }
        $this->container['AssetGroupStatus'] = $AssetGroupStatus;

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
