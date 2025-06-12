<?php
/**
 * AdGroup
 * CampaignManagementService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CampaignManagementService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CampaignManagementService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class AdGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AdGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'StartDate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Date',
        'EndDate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Date',
        'Language' => 'string',
        'Status' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdGroupStatus',
        'PrivacyStatus' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdGroupPrivacyStatus',
        'CpcBid' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid',
        'Network' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Network',
        'AdRotation' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRotation',
        'AudienceAdsBidAdjustment' => 'int',
        'TrackingUrlTemplate' => 'string',
        'FinalUrlSuffix' => 'string',
        'UrlCustomParameters' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters',
        'BiddingScheme' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BiddingScheme',
        'Settings' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Setting[]',
        'AdScheduleUseSearcherTimeZone' => 'bool',
        'AdGroupType' => 'string',
        'CpvBid' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid',
        'CpmBid' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid',
        'McpaBid' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid',
        'MultimediaAdsBidAdjustment' => 'int',
        'CommissionRate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RateBid',
        'PercentCpcBid' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RateBid',
        'UseOptimizedTargeting' => 'bool',
        'UsePredictiveTargeting' => 'bool',
        'FrequencyCapSettings' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\FrequencyCapSettings[]',
        'ForwardCompatibilityMap' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Id' => 'int64',
        'Name' => null,
        'StartDate' => null,
        'EndDate' => null,
        'Language' => null,
        'Status' => null,
        'PrivacyStatus' => null,
        'CpcBid' => null,
        'Network' => null,
        'AdRotation' => null,
        'AudienceAdsBidAdjustment' => 'int32',
        'TrackingUrlTemplate' => null,
        'FinalUrlSuffix' => null,
        'UrlCustomParameters' => null,
        'BiddingScheme' => null,
        'Settings' => null,
        'AdScheduleUseSearcherTimeZone' => null,
        'AdGroupType' => null,
        'CpvBid' => null,
        'CpmBid' => null,
        'McpaBid' => null,
        'MultimediaAdsBidAdjustment' => 'int32',
        'CommissionRate' => null,
        'PercentCpcBid' => null,
        'UseOptimizedTargeting' => null,
        'UsePredictiveTargeting' => null,
        'FrequencyCapSettings' => null,
        'ForwardCompatibilityMap' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'Name' => true,
        'StartDate' => true,
        'EndDate' => true,
        'Language' => true,
        'Status' => false,
        'PrivacyStatus' => false,
        'CpcBid' => true,
        'Network' => false,
        'AdRotation' => true,
        'AudienceAdsBidAdjustment' => true,
        'TrackingUrlTemplate' => true,
        'FinalUrlSuffix' => true,
        'UrlCustomParameters' => true,
        'BiddingScheme' => true,
        'Settings' => true,
        'AdScheduleUseSearcherTimeZone' => true,
        'AdGroupType' => true,
        'CpvBid' => true,
        'CpmBid' => true,
        'McpaBid' => true,
        'MultimediaAdsBidAdjustment' => true,
        'CommissionRate' => true,
        'PercentCpcBid' => true,
        'UseOptimizedTargeting' => true,
        'UsePredictiveTargeting' => true,
        'FrequencyCapSettings' => true,
        'ForwardCompatibilityMap' => true
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
        'Id' => 'Id',
        'Name' => 'Name',
        'StartDate' => 'StartDate',
        'EndDate' => 'EndDate',
        'Language' => 'Language',
        'Status' => 'Status',
        'PrivacyStatus' => 'PrivacyStatus',
        'CpcBid' => 'CpcBid',
        'Network' => 'Network',
        'AdRotation' => 'AdRotation',
        'AudienceAdsBidAdjustment' => 'AudienceAdsBidAdjustment',
        'TrackingUrlTemplate' => 'TrackingUrlTemplate',
        'FinalUrlSuffix' => 'FinalUrlSuffix',
        'UrlCustomParameters' => 'UrlCustomParameters',
        'BiddingScheme' => 'BiddingScheme',
        'Settings' => 'Settings',
        'AdScheduleUseSearcherTimeZone' => 'AdScheduleUseSearcherTimeZone',
        'AdGroupType' => 'AdGroupType',
        'CpvBid' => 'CpvBid',
        'CpmBid' => 'CpmBid',
        'McpaBid' => 'McpaBid',
        'MultimediaAdsBidAdjustment' => 'MultimediaAdsBidAdjustment',
        'CommissionRate' => 'CommissionRate',
        'PercentCpcBid' => 'PercentCpcBid',
        'UseOptimizedTargeting' => 'UseOptimizedTargeting',
        'UsePredictiveTargeting' => 'UsePredictiveTargeting',
        'FrequencyCapSettings' => 'FrequencyCapSettings',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'Name' => 'setName',
        'StartDate' => 'setStartDate',
        'EndDate' => 'setEndDate',
        'Language' => 'setLanguage',
        'Status' => 'setStatus',
        'PrivacyStatus' => 'setPrivacyStatus',
        'CpcBid' => 'setCpcBid',
        'Network' => 'setNetwork',
        'AdRotation' => 'setAdRotation',
        'AudienceAdsBidAdjustment' => 'setAudienceAdsBidAdjustment',
        'TrackingUrlTemplate' => 'setTrackingUrlTemplate',
        'FinalUrlSuffix' => 'setFinalUrlSuffix',
        'UrlCustomParameters' => 'setUrlCustomParameters',
        'BiddingScheme' => 'setBiddingScheme',
        'Settings' => 'setSettings',
        'AdScheduleUseSearcherTimeZone' => 'setAdScheduleUseSearcherTimeZone',
        'AdGroupType' => 'setAdGroupType',
        'CpvBid' => 'setCpvBid',
        'CpmBid' => 'setCpmBid',
        'McpaBid' => 'setMcpaBid',
        'MultimediaAdsBidAdjustment' => 'setMultimediaAdsBidAdjustment',
        'CommissionRate' => 'setCommissionRate',
        'PercentCpcBid' => 'setPercentCpcBid',
        'UseOptimizedTargeting' => 'setUseOptimizedTargeting',
        'UsePredictiveTargeting' => 'setUsePredictiveTargeting',
        'FrequencyCapSettings' => 'setFrequencyCapSettings',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'Name' => 'getName',
        'StartDate' => 'getStartDate',
        'EndDate' => 'getEndDate',
        'Language' => 'getLanguage',
        'Status' => 'getStatus',
        'PrivacyStatus' => 'getPrivacyStatus',
        'CpcBid' => 'getCpcBid',
        'Network' => 'getNetwork',
        'AdRotation' => 'getAdRotation',
        'AudienceAdsBidAdjustment' => 'getAudienceAdsBidAdjustment',
        'TrackingUrlTemplate' => 'getTrackingUrlTemplate',
        'FinalUrlSuffix' => 'getFinalUrlSuffix',
        'UrlCustomParameters' => 'getUrlCustomParameters',
        'BiddingScheme' => 'getBiddingScheme',
        'Settings' => 'getSettings',
        'AdScheduleUseSearcherTimeZone' => 'getAdScheduleUseSearcherTimeZone',
        'AdGroupType' => 'getAdGroupType',
        'CpvBid' => 'getCpvBid',
        'CpmBid' => 'getCpmBid',
        'McpaBid' => 'getMcpaBid',
        'MultimediaAdsBidAdjustment' => 'getMultimediaAdsBidAdjustment',
        'CommissionRate' => 'getCommissionRate',
        'PercentCpcBid' => 'getPercentCpcBid',
        'UseOptimizedTargeting' => 'getUseOptimizedTargeting',
        'UsePredictiveTargeting' => 'getUsePredictiveTargeting',
        'FrequencyCapSettings' => 'getFrequencyCapSettings',
        'ForwardCompatibilityMap' => 'getForwardCompatibilityMap'
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
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('PrivacyStatus', $data ?? [], null);
        $this->setIfExists('CpcBid', $data ?? [], null);
        $this->setIfExists('Network', $data ?? [], null);
        $this->setIfExists('AdRotation', $data ?? [], null);
        $this->setIfExists('AudienceAdsBidAdjustment', $data ?? [], null);
        $this->setIfExists('TrackingUrlTemplate', $data ?? [], null);
        $this->setIfExists('FinalUrlSuffix', $data ?? [], null);
        $this->setIfExists('UrlCustomParameters', $data ?? [], null);
        $this->setIfExists('BiddingScheme', $data ?? [], null);
        $this->setIfExists('Settings', $data ?? [], null);
        $this->setIfExists('AdScheduleUseSearcherTimeZone', $data ?? [], null);
        $this->setIfExists('AdGroupType', $data ?? [], null);
        $this->setIfExists('CpvBid', $data ?? [], null);
        $this->setIfExists('CpmBid', $data ?? [], null);
        $this->setIfExists('McpaBid', $data ?? [], null);
        $this->setIfExists('MultimediaAdsBidAdjustment', $data ?? [], null);
        $this->setIfExists('CommissionRate', $data ?? [], null);
        $this->setIfExists('PercentCpcBid', $data ?? [], null);
        $this->setIfExists('UseOptimizedTargeting', $data ?? [], null);
        $this->setIfExists('UsePredictiveTargeting', $data ?? [], null);
        $this->setIfExists('FrequencyCapSettings', $data ?? [], null);
        $this->setIfExists('ForwardCompatibilityMap', $data ?? [], null);
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
     * Gets Id
     *
     * @return string|null
     */
    public function getId()
    {
        if (!isset($this->container['Id']) || is_null($this->container['Id'])) {
            return null;
        }
        return $this->container['Id'];
    }

    /**
     * Sets Id
     *
     * @param string|null $Id Id
     *
     * @return self
     */
    public function setId($Id)
    {
        if (is_null($Id)) {
            array_push($this->openAPINullablesSetToNull, 'Id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Id'] = $Id;

        return $this;
    }

    /**
     * Gets Name
     *
     * @return string|null
     */
    public function getName()
    {
        if (!isset($this->container['Name']) || is_null($this->container['Name'])) {
            return null;
        }
        return $this->container['Name'];
    }

    /**
     * Sets Name
     *
     * @param string|null $Name Name
     *
     * @return self
     */
    public function setName($Name)
    {
        if (is_null($Name)) {
            array_push($this->openAPINullablesSetToNull, 'Name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Name'] = $Name;

        return $this;
    }

    /**
     * Gets StartDate
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null $StartDate StartDate
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
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null $EndDate EndDate
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
     * Gets Status
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdGroupStatus|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdGroupStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdGroupStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdGroupStatus($Status);
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets PrivacyStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdGroupPrivacyStatus|mixed|null
     */
    public function getPrivacyStatus()
    {
        if (!isset($this->container['PrivacyStatus']) || is_null($this->container['PrivacyStatus'])) {
            return null;
        }
        if ((is_object($this->container['PrivacyStatus']) || is_string($this->container['PrivacyStatus'])) && method_exists($this->container['PrivacyStatus'], 'getValue')) {
            return $this->container['PrivacyStatus']->getValue();
        }
        return $this->container['PrivacyStatus'];
    }

    /**
     * Sets PrivacyStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdGroupPrivacyStatus|mixed|null $PrivacyStatus PrivacyStatus
     *
     * @return self
     */
    public function setPrivacyStatus($PrivacyStatus)
    {
        if (is_null($PrivacyStatus)) {
            throw new \InvalidArgumentException('non-nullable PrivacyStatus cannot be null');
        }
        if (!$PrivacyStatus instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdGroupPrivacyStatus) {
            $PrivacyStatus = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdGroupPrivacyStatus($PrivacyStatus);
        }
        $this->container['PrivacyStatus'] = $PrivacyStatus;

        return $this;
    }

    /**
     * Gets CpcBid
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid|null
     */
    public function getCpcBid()
    {
        if (!isset($this->container['CpcBid']) || is_null($this->container['CpcBid'])) {
            return null;
        }
        return $this->container['CpcBid'];
    }

    /**
     * Sets CpcBid
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid|null $CpcBid CpcBid
     *
     * @return self
     */
    public function setCpcBid($CpcBid)
    {
        if (is_null($CpcBid)) {
            array_push($this->openAPINullablesSetToNull, 'CpcBid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CpcBid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CpcBid'] = $CpcBid;

        return $this;
    }

    /**
     * Gets Network
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Network|mixed|null
     */
    public function getNetwork()
    {
        if (!isset($this->container['Network']) || is_null($this->container['Network'])) {
            return null;
        }
        if ((is_object($this->container['Network']) || is_string($this->container['Network'])) && method_exists($this->container['Network'], 'getValue')) {
            return $this->container['Network']->getValue();
        }
        return $this->container['Network'];
    }

    /**
     * Sets Network
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Network|mixed|null $Network Network
     *
     * @return self
     */
    public function setNetwork($Network)
    {
        if (is_null($Network)) {
            throw new \InvalidArgumentException('non-nullable Network cannot be null');
        }
        if (!$Network instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\Network) {
            $Network = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\Network($Network);
        }
        $this->container['Network'] = $Network;

        return $this;
    }

    /**
     * Gets AdRotation
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRotation|null
     */
    public function getAdRotation()
    {
        if (!isset($this->container['AdRotation']) || is_null($this->container['AdRotation'])) {
            return null;
        }
        return $this->container['AdRotation'];
    }

    /**
     * Sets AdRotation
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRotation|null $AdRotation AdRotation
     *
     * @return self
     */
    public function setAdRotation($AdRotation)
    {
        if (is_null($AdRotation)) {
            array_push($this->openAPINullablesSetToNull, 'AdRotation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdRotation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdRotation'] = $AdRotation;

        return $this;
    }

    /**
     * Gets AudienceAdsBidAdjustment
     *
     * @return int|null
     */
    public function getAudienceAdsBidAdjustment()
    {
        if (!isset($this->container['AudienceAdsBidAdjustment']) || is_null($this->container['AudienceAdsBidAdjustment'])) {
            return null;
        }
        return $this->container['AudienceAdsBidAdjustment'];
    }

    /**
     * Sets AudienceAdsBidAdjustment
     *
     * @param int|null $AudienceAdsBidAdjustment AudienceAdsBidAdjustment
     *
     * @return self
     */
    public function setAudienceAdsBidAdjustment($AudienceAdsBidAdjustment)
    {
        if (is_null($AudienceAdsBidAdjustment)) {
            array_push($this->openAPINullablesSetToNull, 'AudienceAdsBidAdjustment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AudienceAdsBidAdjustment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AudienceAdsBidAdjustment'] = $AudienceAdsBidAdjustment;

        return $this;
    }

    /**
     * Gets TrackingUrlTemplate
     *
     * @return string|null
     */
    public function getTrackingUrlTemplate()
    {
        if (!isset($this->container['TrackingUrlTemplate']) || is_null($this->container['TrackingUrlTemplate'])) {
            return null;
        }
        return $this->container['TrackingUrlTemplate'];
    }

    /**
     * Sets TrackingUrlTemplate
     *
     * @param string|null $TrackingUrlTemplate TrackingUrlTemplate
     *
     * @return self
     */
    public function setTrackingUrlTemplate($TrackingUrlTemplate)
    {
        if (is_null($TrackingUrlTemplate)) {
            array_push($this->openAPINullablesSetToNull, 'TrackingUrlTemplate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TrackingUrlTemplate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TrackingUrlTemplate'] = $TrackingUrlTemplate;

        return $this;
    }

    /**
     * Gets FinalUrlSuffix
     *
     * @return string|null
     */
    public function getFinalUrlSuffix()
    {
        if (!isset($this->container['FinalUrlSuffix']) || is_null($this->container['FinalUrlSuffix'])) {
            return null;
        }
        return $this->container['FinalUrlSuffix'];
    }

    /**
     * Sets FinalUrlSuffix
     *
     * @param string|null $FinalUrlSuffix FinalUrlSuffix
     *
     * @return self
     */
    public function setFinalUrlSuffix($FinalUrlSuffix)
    {
        if (is_null($FinalUrlSuffix)) {
            array_push($this->openAPINullablesSetToNull, 'FinalUrlSuffix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FinalUrlSuffix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FinalUrlSuffix'] = $FinalUrlSuffix;

        return $this;
    }

    /**
     * Gets UrlCustomParameters
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters|null
     */
    public function getUrlCustomParameters()
    {
        if (!isset($this->container['UrlCustomParameters']) || is_null($this->container['UrlCustomParameters'])) {
            return null;
        }
        return $this->container['UrlCustomParameters'];
    }

    /**
     * Sets UrlCustomParameters
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters|null $UrlCustomParameters UrlCustomParameters
     *
     * @return self
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
        if (is_null($UrlCustomParameters)) {
            array_push($this->openAPINullablesSetToNull, 'UrlCustomParameters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UrlCustomParameters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UrlCustomParameters'] = $UrlCustomParameters;

        return $this;
    }

    /**
     * Gets BiddingScheme
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\BiddingScheme|null
     */
    public function getBiddingScheme()
    {
        if (!isset($this->container['BiddingScheme']) || is_null($this->container['BiddingScheme'])) {
            return null;
        }
        return $this->container['BiddingScheme'];
    }

    /**
     * Sets BiddingScheme
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\BiddingScheme|null $BiddingScheme BiddingScheme
     *
     * @return self
     */
    public function setBiddingScheme($BiddingScheme)
    {
        if (is_null($BiddingScheme)) {
            array_push($this->openAPINullablesSetToNull, 'BiddingScheme');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BiddingScheme', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BiddingScheme'] = $BiddingScheme;

        return $this;
    }

    /**
     * Gets Settings
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Setting[]|null
     */
    public function getSettings()
    {
        if (!isset($this->container['Settings']) || is_null($this->container['Settings'])) {
            return null;
        }
        return $this->container['Settings'];
    }

    /**
     * Sets Settings
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Setting[]|null $Settings Settings
     *
     * @return self
     */
    public function setSettings($Settings)
    {
        if (is_null($Settings)) {
            array_push($this->openAPINullablesSetToNull, 'Settings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Settings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Settings'] = $Settings;

        return $this;
    }

    /**
     * Gets AdScheduleUseSearcherTimeZone
     *
     * @return bool|null
     */
    public function getAdScheduleUseSearcherTimeZone()
    {
        if (!isset($this->container['AdScheduleUseSearcherTimeZone']) || is_null($this->container['AdScheduleUseSearcherTimeZone'])) {
            return null;
        }
        return $this->container['AdScheduleUseSearcherTimeZone'];
    }

    /**
     * Sets AdScheduleUseSearcherTimeZone
     *
     * @param bool|null $AdScheduleUseSearcherTimeZone AdScheduleUseSearcherTimeZone
     *
     * @return self
     */
    public function setAdScheduleUseSearcherTimeZone($AdScheduleUseSearcherTimeZone)
    {
        if (is_null($AdScheduleUseSearcherTimeZone)) {
            array_push($this->openAPINullablesSetToNull, 'AdScheduleUseSearcherTimeZone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdScheduleUseSearcherTimeZone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdScheduleUseSearcherTimeZone'] = $AdScheduleUseSearcherTimeZone;

        return $this;
    }

    /**
     * Gets AdGroupType
     *
     * @return string|null
     */
    public function getAdGroupType()
    {
        if (!isset($this->container['AdGroupType']) || is_null($this->container['AdGroupType'])) {
            return null;
        }
        return $this->container['AdGroupType'];
    }

    /**
     * Sets AdGroupType
     *
     * @param string|null $AdGroupType AdGroupType
     *
     * @return self
     */
    public function setAdGroupType($AdGroupType)
    {
        if (is_null($AdGroupType)) {
            array_push($this->openAPINullablesSetToNull, 'AdGroupType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdGroupType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdGroupType'] = $AdGroupType;

        return $this;
    }

    /**
     * Gets CpvBid
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid|null
     */
    public function getCpvBid()
    {
        if (!isset($this->container['CpvBid']) || is_null($this->container['CpvBid'])) {
            return null;
        }
        return $this->container['CpvBid'];
    }

    /**
     * Sets CpvBid
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid|null $CpvBid CpvBid
     *
     * @return self
     */
    public function setCpvBid($CpvBid)
    {
        if (is_null($CpvBid)) {
            array_push($this->openAPINullablesSetToNull, 'CpvBid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CpvBid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CpvBid'] = $CpvBid;

        return $this;
    }

    /**
     * Gets CpmBid
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid|null
     */
    public function getCpmBid()
    {
        if (!isset($this->container['CpmBid']) || is_null($this->container['CpmBid'])) {
            return null;
        }
        return $this->container['CpmBid'];
    }

    /**
     * Sets CpmBid
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid|null $CpmBid CpmBid
     *
     * @return self
     */
    public function setCpmBid($CpmBid)
    {
        if (is_null($CpmBid)) {
            array_push($this->openAPINullablesSetToNull, 'CpmBid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CpmBid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CpmBid'] = $CpmBid;

        return $this;
    }

    /**
     * Gets McpaBid
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid|null
     */
    public function getMcpaBid()
    {
        if (!isset($this->container['McpaBid']) || is_null($this->container['McpaBid'])) {
            return null;
        }
        return $this->container['McpaBid'];
    }

    /**
     * Sets McpaBid
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid|null $McpaBid McpaBid
     *
     * @return self
     */
    public function setMcpaBid($McpaBid)
    {
        if (is_null($McpaBid)) {
            array_push($this->openAPINullablesSetToNull, 'McpaBid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('McpaBid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['McpaBid'] = $McpaBid;

        return $this;
    }

    /**
     * Gets MultimediaAdsBidAdjustment
     *
     * @return int|null
     */
    public function getMultimediaAdsBidAdjustment()
    {
        if (!isset($this->container['MultimediaAdsBidAdjustment']) || is_null($this->container['MultimediaAdsBidAdjustment'])) {
            return null;
        }
        return $this->container['MultimediaAdsBidAdjustment'];
    }

    /**
     * Sets MultimediaAdsBidAdjustment
     *
     * @param int|null $MultimediaAdsBidAdjustment MultimediaAdsBidAdjustment
     *
     * @return self
     */
    public function setMultimediaAdsBidAdjustment($MultimediaAdsBidAdjustment)
    {
        if (is_null($MultimediaAdsBidAdjustment)) {
            array_push($this->openAPINullablesSetToNull, 'MultimediaAdsBidAdjustment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MultimediaAdsBidAdjustment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MultimediaAdsBidAdjustment'] = $MultimediaAdsBidAdjustment;

        return $this;
    }

    /**
     * Gets CommissionRate
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RateBid|null
     */
    public function getCommissionRate()
    {
        if (!isset($this->container['CommissionRate']) || is_null($this->container['CommissionRate'])) {
            return null;
        }
        return $this->container['CommissionRate'];
    }

    /**
     * Sets CommissionRate
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RateBid|null $CommissionRate CommissionRate
     *
     * @return self
     */
    public function setCommissionRate($CommissionRate)
    {
        if (is_null($CommissionRate)) {
            array_push($this->openAPINullablesSetToNull, 'CommissionRate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CommissionRate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CommissionRate'] = $CommissionRate;

        return $this;
    }

    /**
     * Gets PercentCpcBid
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RateBid|null
     */
    public function getPercentCpcBid()
    {
        if (!isset($this->container['PercentCpcBid']) || is_null($this->container['PercentCpcBid'])) {
            return null;
        }
        return $this->container['PercentCpcBid'];
    }

    /**
     * Sets PercentCpcBid
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RateBid|null $PercentCpcBid PercentCpcBid
     *
     * @return self
     */
    public function setPercentCpcBid($PercentCpcBid)
    {
        if (is_null($PercentCpcBid)) {
            array_push($this->openAPINullablesSetToNull, 'PercentCpcBid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PercentCpcBid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PercentCpcBid'] = $PercentCpcBid;

        return $this;
    }

    /**
     * Gets UseOptimizedTargeting
     *
     * @return bool|null
     */
    public function getUseOptimizedTargeting()
    {
        if (!isset($this->container['UseOptimizedTargeting']) || is_null($this->container['UseOptimizedTargeting'])) {
            return null;
        }
        return $this->container['UseOptimizedTargeting'];
    }

    /**
     * Sets UseOptimizedTargeting
     *
     * @param bool|null $UseOptimizedTargeting UseOptimizedTargeting
     *
     * @return self
     */
    public function setUseOptimizedTargeting($UseOptimizedTargeting)
    {
        if (is_null($UseOptimizedTargeting)) {
            array_push($this->openAPINullablesSetToNull, 'UseOptimizedTargeting');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UseOptimizedTargeting', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UseOptimizedTargeting'] = $UseOptimizedTargeting;

        return $this;
    }

    /**
     * Gets UsePredictiveTargeting
     *
     * @return bool|null
     */
    public function getUsePredictiveTargeting()
    {
        if (!isset($this->container['UsePredictiveTargeting']) || is_null($this->container['UsePredictiveTargeting'])) {
            return null;
        }
        return $this->container['UsePredictiveTargeting'];
    }

    /**
     * Sets UsePredictiveTargeting
     *
     * @param bool|null $UsePredictiveTargeting UsePredictiveTargeting
     *
     * @return self
     */
    public function setUsePredictiveTargeting($UsePredictiveTargeting)
    {
        if (is_null($UsePredictiveTargeting)) {
            array_push($this->openAPINullablesSetToNull, 'UsePredictiveTargeting');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UsePredictiveTargeting', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UsePredictiveTargeting'] = $UsePredictiveTargeting;

        return $this;
    }

    /**
     * Gets FrequencyCapSettings
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\FrequencyCapSettings[]|null
     */
    public function getFrequencyCapSettings()
    {
        if (!isset($this->container['FrequencyCapSettings']) || is_null($this->container['FrequencyCapSettings'])) {
            return null;
        }
        return $this->container['FrequencyCapSettings'];
    }

    /**
     * Sets FrequencyCapSettings
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\FrequencyCapSettings[]|null $FrequencyCapSettings FrequencyCapSettings
     *
     * @return self
     */
    public function setFrequencyCapSettings($FrequencyCapSettings)
    {
        if (is_null($FrequencyCapSettings)) {
            array_push($this->openAPINullablesSetToNull, 'FrequencyCapSettings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FrequencyCapSettings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FrequencyCapSettings'] = $FrequencyCapSettings;

        return $this;
    }

    /**
     * Gets ForwardCompatibilityMap
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]|null
     */
    public function getForwardCompatibilityMap()
    {
        if (!isset($this->container['ForwardCompatibilityMap']) || is_null($this->container['ForwardCompatibilityMap'])) {
            return null;
        }
        return $this->container['ForwardCompatibilityMap'];
    }

    /**
     * Sets ForwardCompatibilityMap
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]|null $ForwardCompatibilityMap ForwardCompatibilityMap
     *
     * @return self
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
        if (is_null($ForwardCompatibilityMap)) {
            array_push($this->openAPINullablesSetToNull, 'ForwardCompatibilityMap');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ForwardCompatibilityMap', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ForwardCompatibilityMap'] = $ForwardCompatibilityMap;

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
