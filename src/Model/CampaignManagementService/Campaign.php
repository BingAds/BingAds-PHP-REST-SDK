<?php
/**
 * Campaign
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

class Campaign implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'Status' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignStatus',
        'DailyBudget' => 'float',
        'BudgetType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BudgetLimitType',
        'TimeZone' => 'string',
        'Settings' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Setting[]',
        'CampaignType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType',
        'SubType' => 'string',
        'AudienceAdsBidAdjustment' => 'int',
        'TrackingUrlTemplate' => 'string',
        'FinalUrlSuffix' => 'string',
        'UrlCustomParameters' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters',
        'BiddingScheme' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BiddingScheme',
        'BudgetId' => 'string',
        'Languages' => 'string[]',
        'ExperimentId' => 'string',
        'AdScheduleUseSearcherTimeZone' => 'bool',
        'BidStrategyId' => 'string',
        'MultimediaAdsBidAdjustment' => 'int',
        'GoalIds' => 'string[]',
        'DealIds' => 'string[]',
        'IsDealCampaign' => 'bool',
        'StartDate' => '\DateTime',
        'EndDate' => '\DateTime',
        'UseCampaignLevelDates' => 'bool',
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
        'Status' => null,
        'DailyBudget' => 'double',
        'BudgetType' => null,
        'TimeZone' => null,
        'Settings' => null,
        'CampaignType' => null,
        'SubType' => null,
        'AudienceAdsBidAdjustment' => 'int32',
        'TrackingUrlTemplate' => null,
        'FinalUrlSuffix' => null,
        'UrlCustomParameters' => null,
        'BiddingScheme' => null,
        'BudgetId' => 'int64',
        'Languages' => null,
        'ExperimentId' => 'int64',
        'AdScheduleUseSearcherTimeZone' => null,
        'BidStrategyId' => 'int64',
        'MultimediaAdsBidAdjustment' => 'int32',
        'GoalIds' => 'int64',
        'DealIds' => 'int64',
        'IsDealCampaign' => null,
        'StartDate' => 'date-time',
        'EndDate' => 'date-time',
        'UseCampaignLevelDates' => null,
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
        'Status' => false,
        'DailyBudget' => true,
        'BudgetType' => false,
        'TimeZone' => true,
        'Settings' => true,
        'CampaignType' => false,
        'SubType' => true,
        'AudienceAdsBidAdjustment' => true,
        'TrackingUrlTemplate' => true,
        'FinalUrlSuffix' => true,
        'UrlCustomParameters' => true,
        'BiddingScheme' => true,
        'BudgetId' => true,
        'Languages' => true,
        'ExperimentId' => true,
        'AdScheduleUseSearcherTimeZone' => true,
        'BidStrategyId' => true,
        'MultimediaAdsBidAdjustment' => true,
        'GoalIds' => true,
        'DealIds' => true,
        'IsDealCampaign' => true,
        'StartDate' => true,
        'EndDate' => true,
        'UseCampaignLevelDates' => true,
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
        'Status' => 'Status',
        'DailyBudget' => 'DailyBudget',
        'BudgetType' => 'BudgetType',
        'TimeZone' => 'TimeZone',
        'Settings' => 'Settings',
        'CampaignType' => 'CampaignType',
        'SubType' => 'SubType',
        'AudienceAdsBidAdjustment' => 'AudienceAdsBidAdjustment',
        'TrackingUrlTemplate' => 'TrackingUrlTemplate',
        'FinalUrlSuffix' => 'FinalUrlSuffix',
        'UrlCustomParameters' => 'UrlCustomParameters',
        'BiddingScheme' => 'BiddingScheme',
        'BudgetId' => 'BudgetId',
        'Languages' => 'Languages',
        'ExperimentId' => 'ExperimentId',
        'AdScheduleUseSearcherTimeZone' => 'AdScheduleUseSearcherTimeZone',
        'BidStrategyId' => 'BidStrategyId',
        'MultimediaAdsBidAdjustment' => 'MultimediaAdsBidAdjustment',
        'GoalIds' => 'GoalIds',
        'DealIds' => 'DealIds',
        'IsDealCampaign' => 'IsDealCampaign',
        'StartDate' => 'StartDate',
        'EndDate' => 'EndDate',
        'UseCampaignLevelDates' => 'UseCampaignLevelDates',
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
        'Status' => 'setStatus',
        'DailyBudget' => 'setDailyBudget',
        'BudgetType' => 'setBudgetType',
        'TimeZone' => 'setTimeZone',
        'Settings' => 'setSettings',
        'CampaignType' => 'setCampaignType',
        'SubType' => 'setSubType',
        'AudienceAdsBidAdjustment' => 'setAudienceAdsBidAdjustment',
        'TrackingUrlTemplate' => 'setTrackingUrlTemplate',
        'FinalUrlSuffix' => 'setFinalUrlSuffix',
        'UrlCustomParameters' => 'setUrlCustomParameters',
        'BiddingScheme' => 'setBiddingScheme',
        'BudgetId' => 'setBudgetId',
        'Languages' => 'setLanguages',
        'ExperimentId' => 'setExperimentId',
        'AdScheduleUseSearcherTimeZone' => 'setAdScheduleUseSearcherTimeZone',
        'BidStrategyId' => 'setBidStrategyId',
        'MultimediaAdsBidAdjustment' => 'setMultimediaAdsBidAdjustment',
        'GoalIds' => 'setGoalIds',
        'DealIds' => 'setDealIds',
        'IsDealCampaign' => 'setIsDealCampaign',
        'StartDate' => 'setStartDate',
        'EndDate' => 'setEndDate',
        'UseCampaignLevelDates' => 'setUseCampaignLevelDates',
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
        'Status' => 'getStatus',
        'DailyBudget' => 'getDailyBudget',
        'BudgetType' => 'getBudgetType',
        'TimeZone' => 'getTimeZone',
        'Settings' => 'getSettings',
        'CampaignType' => 'getCampaignType',
        'SubType' => 'getSubType',
        'AudienceAdsBidAdjustment' => 'getAudienceAdsBidAdjustment',
        'TrackingUrlTemplate' => 'getTrackingUrlTemplate',
        'FinalUrlSuffix' => 'getFinalUrlSuffix',
        'UrlCustomParameters' => 'getUrlCustomParameters',
        'BiddingScheme' => 'getBiddingScheme',
        'BudgetId' => 'getBudgetId',
        'Languages' => 'getLanguages',
        'ExperimentId' => 'getExperimentId',
        'AdScheduleUseSearcherTimeZone' => 'getAdScheduleUseSearcherTimeZone',
        'BidStrategyId' => 'getBidStrategyId',
        'MultimediaAdsBidAdjustment' => 'getMultimediaAdsBidAdjustment',
        'GoalIds' => 'getGoalIds',
        'DealIds' => 'getDealIds',
        'IsDealCampaign' => 'getIsDealCampaign',
        'StartDate' => 'getStartDate',
        'EndDate' => 'getEndDate',
        'UseCampaignLevelDates' => 'getUseCampaignLevelDates',
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
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('DailyBudget', $data ?? [], null);
        $this->setIfExists('BudgetType', $data ?? [], null);
        $this->setIfExists('TimeZone', $data ?? [], null);
        $this->setIfExists('Settings', $data ?? [], null);
        $this->setIfExists('CampaignType', $data ?? [], null);
        $this->setIfExists('SubType', $data ?? [], null);
        $this->setIfExists('AudienceAdsBidAdjustment', $data ?? [], null);
        $this->setIfExists('TrackingUrlTemplate', $data ?? [], null);
        $this->setIfExists('FinalUrlSuffix', $data ?? [], null);
        $this->setIfExists('UrlCustomParameters', $data ?? [], null);
        $this->setIfExists('BiddingScheme', $data ?? [], null);
        $this->setIfExists('BudgetId', $data ?? [], null);
        $this->setIfExists('Languages', $data ?? [], null);
        $this->setIfExists('ExperimentId', $data ?? [], null);
        $this->setIfExists('AdScheduleUseSearcherTimeZone', $data ?? [], null);
        $this->setIfExists('BidStrategyId', $data ?? [], null);
        $this->setIfExists('MultimediaAdsBidAdjustment', $data ?? [], null);
        $this->setIfExists('GoalIds', $data ?? [], null);
        $this->setIfExists('DealIds', $data ?? [], null);
        $this->setIfExists('IsDealCampaign', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('UseCampaignLevelDates', $data ?? [], null);
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
     * Gets Status
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignStatus|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignStatus($Status);
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets DailyBudget
     *
     * @return float|null
     */
    public function getDailyBudget()
    {
        if (!isset($this->container['DailyBudget']) || is_null($this->container['DailyBudget'])) {
            return null;
        }
        return $this->container['DailyBudget'];
    }

    /**
     * Sets DailyBudget
     *
     * @param float|null $DailyBudget DailyBudget
     *
     * @return self
     */
    public function setDailyBudget($DailyBudget)
    {
        if (is_null($DailyBudget)) {
            array_push($this->openAPINullablesSetToNull, 'DailyBudget');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DailyBudget', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DailyBudget'] = $DailyBudget;

        return $this;
    }

    /**
     * Gets BudgetType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\BudgetLimitType|mixed|null
     */
    public function getBudgetType()
    {
        if (!isset($this->container['BudgetType']) || is_null($this->container['BudgetType'])) {
            return null;
        }
        if ((is_object($this->container['BudgetType']) || is_string($this->container['BudgetType'])) && method_exists($this->container['BudgetType'], 'getValue')) {
            return $this->container['BudgetType']->getValue();
        }
        return $this->container['BudgetType'];
    }

    /**
     * Sets BudgetType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\BudgetLimitType|mixed|null $BudgetType BudgetType
     *
     * @return self
     */
    public function setBudgetType($BudgetType)
    {
        if (is_null($BudgetType)) {
            throw new \InvalidArgumentException('non-nullable BudgetType cannot be null');
        }
        if (!$BudgetType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\BudgetLimitType) {
            $BudgetType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\BudgetLimitType($BudgetType);
        }
        $this->container['BudgetType'] = $BudgetType;

        return $this;
    }

    /**
     * Gets TimeZone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        if (!isset($this->container['TimeZone']) || is_null($this->container['TimeZone'])) {
            return null;
        }
        return $this->container['TimeZone'];
    }

    /**
     * Sets TimeZone
     *
     * @param string|null $TimeZone TimeZone
     *
     * @return self
     */
    public function setTimeZone($TimeZone)
    {
        if (is_null($TimeZone)) {
            array_push($this->openAPINullablesSetToNull, 'TimeZone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TimeZone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TimeZone'] = $TimeZone;

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
     * Gets CampaignType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType|mixed|null
     */
    public function getCampaignType()
    {
        if (!isset($this->container['CampaignType']) || is_null($this->container['CampaignType'])) {
            return null;
        }
        if ((is_object($this->container['CampaignType']) || is_string($this->container['CampaignType'])) && method_exists($this->container['CampaignType'], 'getValue')) {
            return $this->container['CampaignType']->getValue();
        }
        return $this->container['CampaignType'];
    }

    /**
     * Sets CampaignType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType|mixed|null $CampaignType CampaignType
     *
     * @return self
     */
    public function setCampaignType($CampaignType)
    {
        if (is_null($CampaignType)) {
            throw new \InvalidArgumentException('non-nullable CampaignType cannot be null');
        }
        if (!$CampaignType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType) {
            $CampaignType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType($CampaignType);
        }
        $this->container['CampaignType'] = $CampaignType;

        return $this;
    }

    /**
     * Gets SubType
     *
     * @return string|null
     */
    public function getSubType()
    {
        if (!isset($this->container['SubType']) || is_null($this->container['SubType'])) {
            return null;
        }
        return $this->container['SubType'];
    }

    /**
     * Sets SubType
     *
     * @param string|null $SubType SubType
     *
     * @return self
     */
    public function setSubType($SubType)
    {
        if (is_null($SubType)) {
            array_push($this->openAPINullablesSetToNull, 'SubType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SubType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SubType'] = $SubType;

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
     * Gets BudgetId
     *
     * @return string|null
     */
    public function getBudgetId()
    {
        if (!isset($this->container['BudgetId']) || is_null($this->container['BudgetId'])) {
            return null;
        }
        return $this->container['BudgetId'];
    }

    /**
     * Sets BudgetId
     *
     * @param string|null $BudgetId BudgetId
     *
     * @return self
     */
    public function setBudgetId($BudgetId)
    {
        if (is_null($BudgetId)) {
            array_push($this->openAPINullablesSetToNull, 'BudgetId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BudgetId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BudgetId'] = $BudgetId;

        return $this;
    }

    /**
     * Gets Languages
     *
     * @return string[]|null
     */
    public function getLanguages()
    {
        if (!isset($this->container['Languages']) || is_null($this->container['Languages'])) {
            return null;
        }
        return $this->container['Languages'];
    }

    /**
     * Sets Languages
     *
     * @param string[]|null $Languages Languages
     *
     * @return self
     */
    public function setLanguages($Languages)
    {
        if (is_null($Languages)) {
            array_push($this->openAPINullablesSetToNull, 'Languages');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Languages', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Languages'] = $Languages;

        return $this;
    }

    /**
     * Gets ExperimentId
     *
     * @return string|null
     */
    public function getExperimentId()
    {
        if (!isset($this->container['ExperimentId']) || is_null($this->container['ExperimentId'])) {
            return null;
        }
        return $this->container['ExperimentId'];
    }

    /**
     * Sets ExperimentId
     *
     * @param string|null $ExperimentId ExperimentId
     *
     * @return self
     */
    public function setExperimentId($ExperimentId)
    {
        if (is_null($ExperimentId)) {
            array_push($this->openAPINullablesSetToNull, 'ExperimentId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExperimentId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExperimentId'] = $ExperimentId;

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
     * Gets BidStrategyId
     *
     * @return string|null
     */
    public function getBidStrategyId()
    {
        if (!isset($this->container['BidStrategyId']) || is_null($this->container['BidStrategyId'])) {
            return null;
        }
        return $this->container['BidStrategyId'];
    }

    /**
     * Sets BidStrategyId
     *
     * @param string|null $BidStrategyId BidStrategyId
     *
     * @return self
     */
    public function setBidStrategyId($BidStrategyId)
    {
        if (is_null($BidStrategyId)) {
            array_push($this->openAPINullablesSetToNull, 'BidStrategyId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BidStrategyId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BidStrategyId'] = $BidStrategyId;

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
     * Gets GoalIds
     *
     * @return string[]|null
     */
    public function getGoalIds()
    {
        if (!isset($this->container['GoalIds']) || is_null($this->container['GoalIds'])) {
            return null;
        }
        return $this->container['GoalIds'];
    }

    /**
     * Sets GoalIds
     *
     * @param string[]|null $GoalIds GoalIds
     *
     * @return self
     */
    public function setGoalIds($GoalIds)
    {
        if (is_null($GoalIds)) {
            array_push($this->openAPINullablesSetToNull, 'GoalIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('GoalIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['GoalIds'] = $GoalIds;

        return $this;
    }

    /**
     * Gets DealIds
     *
     * @return string[]|null
     */
    public function getDealIds()
    {
        if (!isset($this->container['DealIds']) || is_null($this->container['DealIds'])) {
            return null;
        }
        return $this->container['DealIds'];
    }

    /**
     * Sets DealIds
     *
     * @param string[]|null $DealIds DealIds
     *
     * @return self
     */
    public function setDealIds($DealIds)
    {
        if (is_null($DealIds)) {
            array_push($this->openAPINullablesSetToNull, 'DealIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DealIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DealIds'] = $DealIds;

        return $this;
    }

    /**
     * Gets IsDealCampaign
     *
     * @return bool|null
     */
    public function getIsDealCampaign()
    {
        if (!isset($this->container['IsDealCampaign']) || is_null($this->container['IsDealCampaign'])) {
            return null;
        }
        return $this->container['IsDealCampaign'];
    }

    /**
     * Sets IsDealCampaign
     *
     * @param bool|null $IsDealCampaign IsDealCampaign
     *
     * @return self
     */
    public function setIsDealCampaign($IsDealCampaign)
    {
        if (is_null($IsDealCampaign)) {
            array_push($this->openAPINullablesSetToNull, 'IsDealCampaign');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsDealCampaign', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsDealCampaign'] = $IsDealCampaign;

        return $this;
    }

    /**
     * Gets StartDate
     *
     * @return \DateTime|null
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
     * @param \DateTime|null $StartDate StartDate
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
     * @return \DateTime|null
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
     * @param \DateTime|null $EndDate EndDate
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
     * Gets UseCampaignLevelDates
     *
     * @return bool|null
     */
    public function getUseCampaignLevelDates()
    {
        if (!isset($this->container['UseCampaignLevelDates']) || is_null($this->container['UseCampaignLevelDates'])) {
            return null;
        }
        return $this->container['UseCampaignLevelDates'];
    }

    /**
     * Sets UseCampaignLevelDates
     *
     * @param bool|null $UseCampaignLevelDates UseCampaignLevelDates
     *
     * @return self
     */
    public function setUseCampaignLevelDates($UseCampaignLevelDates)
    {
        if (is_null($UseCampaignLevelDates)) {
            array_push($this->openAPINullablesSetToNull, 'UseCampaignLevelDates');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UseCampaignLevelDates', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UseCampaignLevelDates'] = $UseCampaignLevelDates;

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
