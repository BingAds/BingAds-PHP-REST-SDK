<?php
/**
 * ShareOfVoiceReportFilter
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

class ShareOfVoiceReportFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShareOfVoiceReportFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AdDistribution' => '\Microsoft\MsAds\Rest\Model\ReportingService\AdDistributionReportFilter',
        'BidMatchType' => '\Microsoft\MsAds\Rest\Model\ReportingService\BidMatchTypeReportFilter',
        'DeliveredMatchType' => '\Microsoft\MsAds\Rest\Model\ReportingService\DeliveredMatchTypeReportFilter',
        'Keywords' => 'string[]',
        'Language' => '\Microsoft\MsAds\Rest\Model\ReportingService\LanguageReportFilter',
        'DeviceType' => '\Microsoft\MsAds\Rest\Model\ReportingService\DeviceTypeReportFilter',
        'AccountStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\AccountStatusReportFilter',
        'CampaignStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\CampaignStatusReportFilter',
        'AdGroupStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter',
        'KeywordStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\KeywordStatusReportFilter',
        'BidStrategyType' => '\Microsoft\MsAds\Rest\Model\ReportingService\BidStrategyTypeReportFilter'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'AdDistribution' => null,
        'BidMatchType' => null,
        'DeliveredMatchType' => null,
        'Keywords' => null,
        'Language' => null,
        'DeviceType' => null,
        'AccountStatus' => null,
        'CampaignStatus' => null,
        'AdGroupStatus' => null,
        'KeywordStatus' => null,
        'BidStrategyType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AdDistribution' => false,
        'BidMatchType' => false,
        'DeliveredMatchType' => false,
        'Keywords' => true,
        'Language' => false,
        'DeviceType' => false,
        'AccountStatus' => false,
        'CampaignStatus' => false,
        'AdGroupStatus' => false,
        'KeywordStatus' => false,
        'BidStrategyType' => false
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
        'AdDistribution' => 'AdDistribution',
        'BidMatchType' => 'BidMatchType',
        'DeliveredMatchType' => 'DeliveredMatchType',
        'Keywords' => 'Keywords',
        'Language' => 'Language',
        'DeviceType' => 'DeviceType',
        'AccountStatus' => 'AccountStatus',
        'CampaignStatus' => 'CampaignStatus',
        'AdGroupStatus' => 'AdGroupStatus',
        'KeywordStatus' => 'KeywordStatus',
        'BidStrategyType' => 'BidStrategyType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AdDistribution' => 'setAdDistribution',
        'BidMatchType' => 'setBidMatchType',
        'DeliveredMatchType' => 'setDeliveredMatchType',
        'Keywords' => 'setKeywords',
        'Language' => 'setLanguage',
        'DeviceType' => 'setDeviceType',
        'AccountStatus' => 'setAccountStatus',
        'CampaignStatus' => 'setCampaignStatus',
        'AdGroupStatus' => 'setAdGroupStatus',
        'KeywordStatus' => 'setKeywordStatus',
        'BidStrategyType' => 'setBidStrategyType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AdDistribution' => 'getAdDistribution',
        'BidMatchType' => 'getBidMatchType',
        'DeliveredMatchType' => 'getDeliveredMatchType',
        'Keywords' => 'getKeywords',
        'Language' => 'getLanguage',
        'DeviceType' => 'getDeviceType',
        'AccountStatus' => 'getAccountStatus',
        'CampaignStatus' => 'getCampaignStatus',
        'AdGroupStatus' => 'getAdGroupStatus',
        'KeywordStatus' => 'getKeywordStatus',
        'BidStrategyType' => 'getBidStrategyType'
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
        $this->setIfExists('AdDistribution', $data ?? [], null);
        $this->setIfExists('BidMatchType', $data ?? [], null);
        $this->setIfExists('DeliveredMatchType', $data ?? [], null);
        $this->setIfExists('Keywords', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('DeviceType', $data ?? [], null);
        $this->setIfExists('AccountStatus', $data ?? [], null);
        $this->setIfExists('CampaignStatus', $data ?? [], null);
        $this->setIfExists('AdGroupStatus', $data ?? [], null);
        $this->setIfExists('KeywordStatus', $data ?? [], null);
        $this->setIfExists('BidStrategyType', $data ?? [], null);
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
     * Gets AdDistribution
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\AdDistributionReportFilter|mixed|null
     */
    public function getAdDistribution()
    {
        if (!isset($this->container['AdDistribution']) || is_null($this->container['AdDistribution'])) {
            return null;
        }
        if ((is_object($this->container['AdDistribution']) || is_string($this->container['AdDistribution'])) && method_exists($this->container['AdDistribution'], 'getValue')) {
            return $this->container['AdDistribution']->getValue();
        }
        return $this->container['AdDistribution'];
    }

    /**
     * Sets AdDistribution
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\AdDistributionReportFilter|mixed|null $AdDistribution AdDistribution
     *
     * @return self
     */
    public function setAdDistribution($AdDistribution)
    {
        if (is_null($AdDistribution)) {
            throw new \InvalidArgumentException('non-nullable AdDistribution cannot be null');
        }
        if (!$AdDistribution instanceof \Microsoft\MsAds\Rest\Model\ReportingService\AdDistributionReportFilter) {
            $AdDistribution = new \Microsoft\MsAds\Rest\Model\ReportingService\AdDistributionReportFilter($AdDistribution);
        }
        $this->container['AdDistribution'] = $AdDistribution;

        return $this;
    }

    /**
     * Gets BidMatchType
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\BidMatchTypeReportFilter|mixed|null
     */
    public function getBidMatchType()
    {
        if (!isset($this->container['BidMatchType']) || is_null($this->container['BidMatchType'])) {
            return null;
        }
        if ((is_object($this->container['BidMatchType']) || is_string($this->container['BidMatchType'])) && method_exists($this->container['BidMatchType'], 'getValue')) {
            return $this->container['BidMatchType']->getValue();
        }
        return $this->container['BidMatchType'];
    }

    /**
     * Sets BidMatchType
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\BidMatchTypeReportFilter|mixed|null $BidMatchType BidMatchType
     *
     * @return self
     */
    public function setBidMatchType($BidMatchType)
    {
        if (is_null($BidMatchType)) {
            throw new \InvalidArgumentException('non-nullable BidMatchType cannot be null');
        }
        if (!$BidMatchType instanceof \Microsoft\MsAds\Rest\Model\ReportingService\BidMatchTypeReportFilter) {
            $BidMatchType = new \Microsoft\MsAds\Rest\Model\ReportingService\BidMatchTypeReportFilter($BidMatchType);
        }
        $this->container['BidMatchType'] = $BidMatchType;

        return $this;
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
     * Gets Keywords
     *
     * @return string[]|null
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
     * @param string[]|null $Keywords Keywords
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
     * Gets DeviceType
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\DeviceTypeReportFilter|mixed|null
     */
    public function getDeviceType()
    {
        if (!isset($this->container['DeviceType']) || is_null($this->container['DeviceType'])) {
            return null;
        }
        if ((is_object($this->container['DeviceType']) || is_string($this->container['DeviceType'])) && method_exists($this->container['DeviceType'], 'getValue')) {
            return $this->container['DeviceType']->getValue();
        }
        return $this->container['DeviceType'];
    }

    /**
     * Sets DeviceType
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\DeviceTypeReportFilter|mixed|null $DeviceType DeviceType
     *
     * @return self
     */
    public function setDeviceType($DeviceType)
    {
        if (is_null($DeviceType)) {
            throw new \InvalidArgumentException('non-nullable DeviceType cannot be null');
        }
        if (!$DeviceType instanceof \Microsoft\MsAds\Rest\Model\ReportingService\DeviceTypeReportFilter) {
            $DeviceType = new \Microsoft\MsAds\Rest\Model\ReportingService\DeviceTypeReportFilter($DeviceType);
        }
        $this->container['DeviceType'] = $DeviceType;

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
     * Gets BidStrategyType
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\BidStrategyTypeReportFilter|mixed|null
     */
    public function getBidStrategyType()
    {
        if (!isset($this->container['BidStrategyType']) || is_null($this->container['BidStrategyType'])) {
            return null;
        }
        if ((is_object($this->container['BidStrategyType']) || is_string($this->container['BidStrategyType'])) && method_exists($this->container['BidStrategyType'], 'getValue')) {
            return $this->container['BidStrategyType']->getValue();
        }
        return $this->container['BidStrategyType'];
    }

    /**
     * Sets BidStrategyType
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\BidStrategyTypeReportFilter|mixed|null $BidStrategyType BidStrategyType
     *
     * @return self
     */
    public function setBidStrategyType($BidStrategyType)
    {
        if (is_null($BidStrategyType)) {
            throw new \InvalidArgumentException('non-nullable BidStrategyType cannot be null');
        }
        if (!$BidStrategyType instanceof \Microsoft\MsAds\Rest\Model\ReportingService\BidStrategyTypeReportFilter) {
            $BidStrategyType = new \Microsoft\MsAds\Rest\Model\ReportingService\BidStrategyTypeReportFilter($BidStrategyType);
        }
        $this->container['BidStrategyType'] = $BidStrategyType;

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
