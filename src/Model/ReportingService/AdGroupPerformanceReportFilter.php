<?php
/**
 * AdGroupPerformanceReportFilter
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

class AdGroupPerformanceReportFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AdGroupPerformanceReportFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AdDistribution' => '\Microsoft\MsAds\Rest\Model\ReportingService\AdDistributionReportFilter',
        'Status' => '\Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter',
        'DeviceType' => '\Microsoft\MsAds\Rest\Model\ReportingService\DeviceTypeReportFilter',
        'DeviceOS' => '\Microsoft\MsAds\Rest\Model\ReportingService\DeviceOSReportFilter',
        'Language' => '\Microsoft\MsAds\Rest\Model\ReportingService\LanguageReportFilter',
        'AccountStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\AccountStatusReportFilter',
        'CampaignStatus' => '\Microsoft\MsAds\Rest\Model\ReportingService\CampaignStatusReportFilter'
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
        'Status' => null,
        'DeviceType' => null,
        'DeviceOS' => null,
        'Language' => null,
        'AccountStatus' => null,
        'CampaignStatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AdDistribution' => false,
        'Status' => false,
        'DeviceType' => false,
        'DeviceOS' => false,
        'Language' => false,
        'AccountStatus' => false,
        'CampaignStatus' => false
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
        'Status' => 'Status',
        'DeviceType' => 'DeviceType',
        'DeviceOS' => 'DeviceOS',
        'Language' => 'Language',
        'AccountStatus' => 'AccountStatus',
        'CampaignStatus' => 'CampaignStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AdDistribution' => 'setAdDistribution',
        'Status' => 'setStatus',
        'DeviceType' => 'setDeviceType',
        'DeviceOS' => 'setDeviceOS',
        'Language' => 'setLanguage',
        'AccountStatus' => 'setAccountStatus',
        'CampaignStatus' => 'setCampaignStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AdDistribution' => 'getAdDistribution',
        'Status' => 'getStatus',
        'DeviceType' => 'getDeviceType',
        'DeviceOS' => 'getDeviceOS',
        'Language' => 'getLanguage',
        'AccountStatus' => 'getAccountStatus',
        'CampaignStatus' => 'getCampaignStatus'
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
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('DeviceType', $data ?? [], null);
        $this->setIfExists('DeviceOS', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('AccountStatus', $data ?? [], null);
        $this->setIfExists('CampaignStatus', $data ?? [], null);
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
     * Gets Status
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter|mixed|null
     */
    public function getStatus()
    {
        if (!isset($this->container['Status']) || is_null($this->container['Status'])) {
            return null;
        }
        if ((is_object($this->container['Status']) || is_string($this->container['Status'])) && method_exists($this->container['Status'], 'getValue')) {
            return $this->container['Status']->getValue();
        }
        return $this->container['Status'];
    }

    /**
     * Sets Status
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter) {
            $Status = new \Microsoft\MsAds\Rest\Model\ReportingService\AdGroupStatusReportFilter($Status);
        }
        $this->container['Status'] = $Status;

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
     * Gets DeviceOS
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\DeviceOSReportFilter|mixed|null
     */
    public function getDeviceOS()
    {
        if (!isset($this->container['DeviceOS']) || is_null($this->container['DeviceOS'])) {
            return null;
        }
        if ((is_object($this->container['DeviceOS']) || is_string($this->container['DeviceOS'])) && method_exists($this->container['DeviceOS'], 'getValue')) {
            return $this->container['DeviceOS']->getValue();
        }
        return $this->container['DeviceOS'];
    }

    /**
     * Sets DeviceOS
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\DeviceOSReportFilter|mixed|null $DeviceOS DeviceOS
     *
     * @return self
     */
    public function setDeviceOS($DeviceOS)
    {
        if (is_null($DeviceOS)) {
            throw new \InvalidArgumentException('non-nullable DeviceOS cannot be null');
        }
        if (!$DeviceOS instanceof \Microsoft\MsAds\Rest\Model\ReportingService\DeviceOSReportFilter) {
            $DeviceOS = new \Microsoft\MsAds\Rest\Model\ReportingService\DeviceOSReportFilter($DeviceOS);
        }
        $this->container['DeviceOS'] = $DeviceOS;

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
