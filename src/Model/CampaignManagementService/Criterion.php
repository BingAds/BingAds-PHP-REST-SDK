<?php
/**
 * Criterion
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

class Criterion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'Type';

    /**
     * Associative array for mapping discriminator values to model class names
     *
     * @var string[]
     */
    public const MAPPINGS = [
        'AgeCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeCriterion',
        'AudienceCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceCriterion',
        'DayTimeCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\DayTimeCriterion',
        'DealCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\DealCriterion',
        'DeviceCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\DeviceCriterion',
        'GenderCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderCriterion',
        'GenreCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\GenreCriterion',
        'HotelAdvanceBookingWindowCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelAdvanceBookingWindowCriterion',
        'HotelCheckInDateCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelCheckInDateCriterion',
        'HotelCheckInDayCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelCheckInDayCriterion',
        'HotelDateSelectionTypeCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelDateSelectionTypeCriterion',
        'HotelGroup' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelGroup',
        'HotelLengthOfStayCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelLengthOfStayCriterion',
        'LocationCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationCriterion',
        'LocationIntentCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationIntentCriterion',
        'PlacementCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\PlacementCriterion',
        'ProductPartition' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductPartition',
        'ProductScope' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductScope',
        'ProfileCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ProfileCriterion',
        'RadiusCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\RadiusCriterion',
        'StoreCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\StoreCriterion',
        'TopicCriterion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\TopicCriterion',
        'Webpage' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\Webpage',
    ];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Criterion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ParentCriterionId' => 'string',
        'Condition' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductCondition',
        'PartitionType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductPartitionType',
        'Type' => 'string',
        'Listing' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelListing',
        'ListingType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelListingType',
        'MinDays' => 'int',
        'MaxDays' => 'int',
        'StartDate' => '\DateTime',
        'EndDate' => '\DateTime',
        'CheckInDay' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Day',
        'HotelDateSelectionType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelDateSelectionType',
        'MinNights' => 'int',
        'MaxNights' => 'int',
        'Conditions' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductCondition[]',
        'Parameter' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\WebpageParameter',
        'AgeRange' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeRange',
        'DeviceName' => 'string',
        'OSName' => 'string',
        'Day' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Day',
        'FromHour' => 'int',
        'FromMinute' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute',
        'ToHour' => 'int',
        'ToMinute' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute',
        'GenderType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderType',
        'Name' => 'string',
        'Radius' => 'string',
        'RadiusUnit' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\DistanceUnit',
        'LatitudeDegrees' => 'float',
        'LongitudeDegrees' => 'float',
        'LocationId' => 'string',
        'LocationType' => 'string',
        'DisplayName' => 'string',
        'EnclosedLocationIds' => 'string[]',
        'IntentOption' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption',
        'AudienceId' => 'string',
        'AudienceType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceType',
        'ProfileId' => 'string',
        'ProfileType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ProfileType',
        'StoreId' => 'string',
        'DealId' => 'string',
        'GenreId' => 'string',
        'PlacementId' => 'string',
        'PlacementName' => 'string',
        'TopicId' => 'string',
        'TopicName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ParentCriterionId' => 'int64',
        'Condition' => null,
        'PartitionType' => null,
        'Type' => null,
        'Listing' => null,
        'ListingType' => null,
        'MinDays' => 'int32',
        'MaxDays' => 'int32',
        'StartDate' => 'date-time',
        'EndDate' => 'date-time',
        'CheckInDay' => null,
        'HotelDateSelectionType' => null,
        'MinNights' => 'int32',
        'MaxNights' => 'int32',
        'Conditions' => null,
        'Parameter' => null,
        'AgeRange' => null,
        'DeviceName' => null,
        'OSName' => null,
        'Day' => null,
        'FromHour' => 'int32',
        'FromMinute' => null,
        'ToHour' => 'int32',
        'ToMinute' => null,
        'GenderType' => null,
        'Name' => null,
        'Radius' => 'int64',
        'RadiusUnit' => null,
        'LatitudeDegrees' => 'double',
        'LongitudeDegrees' => 'double',
        'LocationId' => 'int64',
        'LocationType' => null,
        'DisplayName' => null,
        'EnclosedLocationIds' => 'int64',
        'IntentOption' => null,
        'AudienceId' => 'int64',
        'AudienceType' => null,
        'ProfileId' => 'int64',
        'ProfileType' => null,
        'StoreId' => 'int64',
        'DealId' => 'int64',
        'GenreId' => 'int64',
        'PlacementId' => 'int64',
        'PlacementName' => null,
        'TopicId' => 'int64',
        'TopicName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ParentCriterionId' => true,
        'Condition' => true,
        'PartitionType' => false,
        'Type' => true,
        'Listing' => true,
        'ListingType' => false,
        'MinDays' => true,
        'MaxDays' => true,
        'StartDate' => true,
        'EndDate' => true,
        'CheckInDay' => false,
        'HotelDateSelectionType' => false,
        'MinNights' => true,
        'MaxNights' => true,
        'Conditions' => true,
        'Parameter' => true,
        'AgeRange' => false,
        'DeviceName' => true,
        'OSName' => true,
        'Day' => false,
        'FromHour' => true,
        'FromMinute' => false,
        'ToHour' => true,
        'ToMinute' => false,
        'GenderType' => false,
        'Name' => true,
        'Radius' => true,
        'RadiusUnit' => false,
        'LatitudeDegrees' => true,
        'LongitudeDegrees' => true,
        'LocationId' => true,
        'LocationType' => true,
        'DisplayName' => true,
        'EnclosedLocationIds' => true,
        'IntentOption' => false,
        'AudienceId' => true,
        'AudienceType' => false,
        'ProfileId' => false,
        'ProfileType' => false,
        'StoreId' => true,
        'DealId' => false,
        'GenreId' => false,
        'PlacementId' => false,
        'PlacementName' => true,
        'TopicId' => false,
        'TopicName' => true
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
        'ParentCriterionId' => 'ParentCriterionId',
        'Condition' => 'Condition',
        'PartitionType' => 'PartitionType',
        'Type' => 'Type',
        'Listing' => 'Listing',
        'ListingType' => 'ListingType',
        'MinDays' => 'MinDays',
        'MaxDays' => 'MaxDays',
        'StartDate' => 'StartDate',
        'EndDate' => 'EndDate',
        'CheckInDay' => 'CheckInDay',
        'HotelDateSelectionType' => 'HotelDateSelectionType',
        'MinNights' => 'MinNights',
        'MaxNights' => 'MaxNights',
        'Conditions' => 'Conditions',
        'Parameter' => 'Parameter',
        'AgeRange' => 'AgeRange',
        'DeviceName' => 'DeviceName',
        'OSName' => 'OSName',
        'Day' => 'Day',
        'FromHour' => 'FromHour',
        'FromMinute' => 'FromMinute',
        'ToHour' => 'ToHour',
        'ToMinute' => 'ToMinute',
        'GenderType' => 'GenderType',
        'Name' => 'Name',
        'Radius' => 'Radius',
        'RadiusUnit' => 'RadiusUnit',
        'LatitudeDegrees' => 'LatitudeDegrees',
        'LongitudeDegrees' => 'LongitudeDegrees',
        'LocationId' => 'LocationId',
        'LocationType' => 'LocationType',
        'DisplayName' => 'DisplayName',
        'EnclosedLocationIds' => 'EnclosedLocationIds',
        'IntentOption' => 'IntentOption',
        'AudienceId' => 'AudienceId',
        'AudienceType' => 'AudienceType',
        'ProfileId' => 'ProfileId',
        'ProfileType' => 'ProfileType',
        'StoreId' => 'StoreId',
        'DealId' => 'DealId',
        'GenreId' => 'GenreId',
        'PlacementId' => 'PlacementId',
        'PlacementName' => 'PlacementName',
        'TopicId' => 'TopicId',
        'TopicName' => 'TopicName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ParentCriterionId' => 'setParentCriterionId',
        'Condition' => 'setCondition',
        'PartitionType' => 'setPartitionType',
        'Type' => 'setType',
        'Listing' => 'setListing',
        'ListingType' => 'setListingType',
        'MinDays' => 'setMinDays',
        'MaxDays' => 'setMaxDays',
        'StartDate' => 'setStartDate',
        'EndDate' => 'setEndDate',
        'CheckInDay' => 'setCheckInDay',
        'HotelDateSelectionType' => 'setHotelDateSelectionType',
        'MinNights' => 'setMinNights',
        'MaxNights' => 'setMaxNights',
        'Conditions' => 'setConditions',
        'Parameter' => 'setParameter',
        'AgeRange' => 'setAgeRange',
        'DeviceName' => 'setDeviceName',
        'OSName' => 'setOSName',
        'Day' => 'setDay',
        'FromHour' => 'setFromHour',
        'FromMinute' => 'setFromMinute',
        'ToHour' => 'setToHour',
        'ToMinute' => 'setToMinute',
        'GenderType' => 'setGenderType',
        'Name' => 'setName',
        'Radius' => 'setRadius',
        'RadiusUnit' => 'setRadiusUnit',
        'LatitudeDegrees' => 'setLatitudeDegrees',
        'LongitudeDegrees' => 'setLongitudeDegrees',
        'LocationId' => 'setLocationId',
        'LocationType' => 'setLocationType',
        'DisplayName' => 'setDisplayName',
        'EnclosedLocationIds' => 'setEnclosedLocationIds',
        'IntentOption' => 'setIntentOption',
        'AudienceId' => 'setAudienceId',
        'AudienceType' => 'setAudienceType',
        'ProfileId' => 'setProfileId',
        'ProfileType' => 'setProfileType',
        'StoreId' => 'setStoreId',
        'DealId' => 'setDealId',
        'GenreId' => 'setGenreId',
        'PlacementId' => 'setPlacementId',
        'PlacementName' => 'setPlacementName',
        'TopicId' => 'setTopicId',
        'TopicName' => 'setTopicName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ParentCriterionId' => 'getParentCriterionId',
        'Condition' => 'getCondition',
        'PartitionType' => 'getPartitionType',
        'Type' => 'getType',
        'Listing' => 'getListing',
        'ListingType' => 'getListingType',
        'MinDays' => 'getMinDays',
        'MaxDays' => 'getMaxDays',
        'StartDate' => 'getStartDate',
        'EndDate' => 'getEndDate',
        'CheckInDay' => 'getCheckInDay',
        'HotelDateSelectionType' => 'getHotelDateSelectionType',
        'MinNights' => 'getMinNights',
        'MaxNights' => 'getMaxNights',
        'Conditions' => 'getConditions',
        'Parameter' => 'getParameter',
        'AgeRange' => 'getAgeRange',
        'DeviceName' => 'getDeviceName',
        'OSName' => 'getOSName',
        'Day' => 'getDay',
        'FromHour' => 'getFromHour',
        'FromMinute' => 'getFromMinute',
        'ToHour' => 'getToHour',
        'ToMinute' => 'getToMinute',
        'GenderType' => 'getGenderType',
        'Name' => 'getName',
        'Radius' => 'getRadius',
        'RadiusUnit' => 'getRadiusUnit',
        'LatitudeDegrees' => 'getLatitudeDegrees',
        'LongitudeDegrees' => 'getLongitudeDegrees',
        'LocationId' => 'getLocationId',
        'LocationType' => 'getLocationType',
        'DisplayName' => 'getDisplayName',
        'EnclosedLocationIds' => 'getEnclosedLocationIds',
        'IntentOption' => 'getIntentOption',
        'AudienceId' => 'getAudienceId',
        'AudienceType' => 'getAudienceType',
        'ProfileId' => 'getProfileId',
        'ProfileType' => 'getProfileType',
        'StoreId' => 'getStoreId',
        'DealId' => 'getDealId',
        'GenreId' => 'getGenreId',
        'PlacementId' => 'getPlacementId',
        'PlacementName' => 'getPlacementName',
        'TopicId' => 'getTopicId',
        'TopicName' => 'getTopicName'
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
        $this->setIfExists('ParentCriterionId', $data ?? [], null);
        $this->setIfExists('Condition', $data ?? [], null);
        $this->setIfExists('PartitionType', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'TopicCriterion');
        $this->setIfExists('Listing', $data ?? [], null);
        $this->setIfExists('ListingType', $data ?? [], null);
        $this->setIfExists('MinDays', $data ?? [], null);
        $this->setIfExists('MaxDays', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('CheckInDay', $data ?? [], null);
        $this->setIfExists('HotelDateSelectionType', $data ?? [], null);
        $this->setIfExists('MinNights', $data ?? [], null);
        $this->setIfExists('MaxNights', $data ?? [], null);
        $this->setIfExists('Conditions', $data ?? [], null);
        $this->setIfExists('Parameter', $data ?? [], null);
        $this->setIfExists('AgeRange', $data ?? [], null);
        $this->setIfExists('DeviceName', $data ?? [], null);
        $this->setIfExists('OSName', $data ?? [], null);
        $this->setIfExists('Day', $data ?? [], null);
        $this->setIfExists('FromHour', $data ?? [], null);
        $this->setIfExists('FromMinute', $data ?? [], null);
        $this->setIfExists('ToHour', $data ?? [], null);
        $this->setIfExists('ToMinute', $data ?? [], null);
        $this->setIfExists('GenderType', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('Radius', $data ?? [], null);
        $this->setIfExists('RadiusUnit', $data ?? [], null);
        $this->setIfExists('LatitudeDegrees', $data ?? [], null);
        $this->setIfExists('LongitudeDegrees', $data ?? [], null);
        $this->setIfExists('LocationId', $data ?? [], null);
        $this->setIfExists('LocationType', $data ?? [], null);
        $this->setIfExists('DisplayName', $data ?? [], null);
        $this->setIfExists('EnclosedLocationIds', $data ?? [], null);
        $this->setIfExists('IntentOption', $data ?? [], null);
        $this->setIfExists('AudienceId', $data ?? [], null);
        $this->setIfExists('AudienceType', $data ?? [], null);
        $this->setIfExists('ProfileId', $data ?? [], null);
        $this->setIfExists('ProfileType', $data ?? [], null);
        $this->setIfExists('StoreId', $data ?? [], null);
        $this->setIfExists('DealId', $data ?? [], null);
        $this->setIfExists('GenreId', $data ?? [], null);
        $this->setIfExists('PlacementId', $data ?? [], null);
        $this->setIfExists('PlacementName', $data ?? [], null);
        $this->setIfExists('TopicId', $data ?? [], null);
        $this->setIfExists('TopicName', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['Type'] = static::$openAPIModelName;
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
     * Gets ParentCriterionId
     *
     * @return string|null
     */
    public function getParentCriterionId()
    {
        if (!isset($this->container['ParentCriterionId']) || is_null($this->container['ParentCriterionId'])) {
            return null;
        }
        return $this->container['ParentCriterionId'];
    }

    /**
     * Sets ParentCriterionId
     *
     * @param string|null $ParentCriterionId ParentCriterionId
     *
     * @return self
     */
    public function setParentCriterionId($ParentCriterionId)
    {
        if (is_null($ParentCriterionId)) {
            array_push($this->openAPINullablesSetToNull, 'ParentCriterionId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ParentCriterionId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ParentCriterionId'] = $ParentCriterionId;

        return $this;
    }

    /**
     * Gets Condition
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductCondition|null
     */
    public function getCondition()
    {
        if (!isset($this->container['Condition']) || is_null($this->container['Condition'])) {
            return null;
        }
        return $this->container['Condition'];
    }

    /**
     * Sets Condition
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductCondition|null $Condition Condition
     *
     * @return self
     */
    public function setCondition($Condition)
    {
        if (is_null($Condition)) {
            array_push($this->openAPINullablesSetToNull, 'Condition');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Condition', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Condition'] = $Condition;

        return $this;
    }

    /**
     * Gets PartitionType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductPartitionType|mixed|null
     */
    public function getPartitionType()
    {
        if (!isset($this->container['PartitionType']) || is_null($this->container['PartitionType'])) {
            return null;
        }
        if ((is_object($this->container['PartitionType']) || is_string($this->container['PartitionType'])) && method_exists($this->container['PartitionType'], 'getValue')) {
            return $this->container['PartitionType']->getValue();
        }
        return $this->container['PartitionType'];
    }

    /**
     * Sets PartitionType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductPartitionType|mixed|null $PartitionType PartitionType
     *
     * @return self
     */
    public function setPartitionType($PartitionType)
    {
        if (is_null($PartitionType)) {
            throw new \InvalidArgumentException('non-nullable PartitionType cannot be null');
        }
        if (!$PartitionType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductPartitionType) {
            $PartitionType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductPartitionType($PartitionType);
        }
        $this->container['PartitionType'] = $PartitionType;

        return $this;
    }

    /**
     * Gets Type
     *
     * @return string|null
     */
    public function getType()
    {
        if (!isset($this->container['Type']) || is_null($this->container['Type'])) {
            return null;
        }
        return $this->container['Type'];
    }

    /**
     * Sets Type
     *
     * @param string|null $Type Type
     *
     * @return self
     */
    public function setType($Type)
    {
        if (is_null($Type)) {
            array_push($this->openAPINullablesSetToNull, 'Type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Type'] = $Type;

        return $this;
    }

    /**
     * Gets Listing
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelListing|null
     */
    public function getListing()
    {
        if (!isset($this->container['Listing']) || is_null($this->container['Listing'])) {
            return null;
        }
        return $this->container['Listing'];
    }

    /**
     * Sets Listing
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelListing|null $Listing Listing
     *
     * @return self
     */
    public function setListing($Listing)
    {
        if (is_null($Listing)) {
            array_push($this->openAPINullablesSetToNull, 'Listing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Listing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Listing'] = $Listing;

        return $this;
    }

    /**
     * Gets ListingType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelListingType|mixed|null
     */
    public function getListingType()
    {
        if (!isset($this->container['ListingType']) || is_null($this->container['ListingType'])) {
            return null;
        }
        if ((is_object($this->container['ListingType']) || is_string($this->container['ListingType'])) && method_exists($this->container['ListingType'], 'getValue')) {
            return $this->container['ListingType']->getValue();
        }
        return $this->container['ListingType'];
    }

    /**
     * Sets ListingType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelListingType|mixed|null $ListingType ListingType
     *
     * @return self
     */
    public function setListingType($ListingType)
    {
        if (is_null($ListingType)) {
            throw new \InvalidArgumentException('non-nullable ListingType cannot be null');
        }
        if (!$ListingType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelListingType) {
            $ListingType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelListingType($ListingType);
        }
        $this->container['ListingType'] = $ListingType;

        return $this;
    }

    /**
     * Gets MinDays
     *
     * @return int|null
     */
    public function getMinDays()
    {
        if (!isset($this->container['MinDays']) || is_null($this->container['MinDays'])) {
            return null;
        }
        return $this->container['MinDays'];
    }

    /**
     * Sets MinDays
     *
     * @param int|null $MinDays MinDays
     *
     * @return self
     */
    public function setMinDays($MinDays)
    {
        if (is_null($MinDays)) {
            array_push($this->openAPINullablesSetToNull, 'MinDays');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MinDays', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MinDays'] = $MinDays;

        return $this;
    }

    /**
     * Gets MaxDays
     *
     * @return int|null
     */
    public function getMaxDays()
    {
        if (!isset($this->container['MaxDays']) || is_null($this->container['MaxDays'])) {
            return null;
        }
        return $this->container['MaxDays'];
    }

    /**
     * Sets MaxDays
     *
     * @param int|null $MaxDays MaxDays
     *
     * @return self
     */
    public function setMaxDays($MaxDays)
    {
        if (is_null($MaxDays)) {
            array_push($this->openAPINullablesSetToNull, 'MaxDays');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MaxDays', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MaxDays'] = $MaxDays;

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
     * Gets CheckInDay
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day|mixed|null
     */
    public function getCheckInDay()
    {
        if (!isset($this->container['CheckInDay']) || is_null($this->container['CheckInDay'])) {
            return null;
        }
        if ((is_object($this->container['CheckInDay']) || is_string($this->container['CheckInDay'])) && method_exists($this->container['CheckInDay'], 'getValue')) {
            return $this->container['CheckInDay']->getValue();
        }
        return $this->container['CheckInDay'];
    }

    /**
     * Sets CheckInDay
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day|mixed|null $CheckInDay CheckInDay
     *
     * @return self
     */
    public function setCheckInDay($CheckInDay)
    {
        if (is_null($CheckInDay)) {
            throw new \InvalidArgumentException('non-nullable CheckInDay cannot be null');
        }
        if (!$CheckInDay instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day) {
            $CheckInDay = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day($CheckInDay);
        }
        $this->container['CheckInDay'] = $CheckInDay;

        return $this;
    }

    /**
     * Gets HotelDateSelectionType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelDateSelectionType|mixed|null
     */
    public function getHotelDateSelectionType()
    {
        if (!isset($this->container['HotelDateSelectionType']) || is_null($this->container['HotelDateSelectionType'])) {
            return null;
        }
        if ((is_object($this->container['HotelDateSelectionType']) || is_string($this->container['HotelDateSelectionType'])) && method_exists($this->container['HotelDateSelectionType'], 'getValue')) {
            return $this->container['HotelDateSelectionType']->getValue();
        }
        return $this->container['HotelDateSelectionType'];
    }

    /**
     * Sets HotelDateSelectionType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelDateSelectionType|mixed|null $HotelDateSelectionType HotelDateSelectionType
     *
     * @return self
     */
    public function setHotelDateSelectionType($HotelDateSelectionType)
    {
        if (is_null($HotelDateSelectionType)) {
            throw new \InvalidArgumentException('non-nullable HotelDateSelectionType cannot be null');
        }
        if (!$HotelDateSelectionType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelDateSelectionType) {
            $HotelDateSelectionType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\HotelDateSelectionType($HotelDateSelectionType);
        }
        $this->container['HotelDateSelectionType'] = $HotelDateSelectionType;

        return $this;
    }

    /**
     * Gets MinNights
     *
     * @return int|null
     */
    public function getMinNights()
    {
        if (!isset($this->container['MinNights']) || is_null($this->container['MinNights'])) {
            return null;
        }
        return $this->container['MinNights'];
    }

    /**
     * Sets MinNights
     *
     * @param int|null $MinNights MinNights
     *
     * @return self
     */
    public function setMinNights($MinNights)
    {
        if (is_null($MinNights)) {
            array_push($this->openAPINullablesSetToNull, 'MinNights');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MinNights', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MinNights'] = $MinNights;

        return $this;
    }

    /**
     * Gets MaxNights
     *
     * @return int|null
     */
    public function getMaxNights()
    {
        if (!isset($this->container['MaxNights']) || is_null($this->container['MaxNights'])) {
            return null;
        }
        return $this->container['MaxNights'];
    }

    /**
     * Sets MaxNights
     *
     * @param int|null $MaxNights MaxNights
     *
     * @return self
     */
    public function setMaxNights($MaxNights)
    {
        if (is_null($MaxNights)) {
            array_push($this->openAPINullablesSetToNull, 'MaxNights');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MaxNights', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MaxNights'] = $MaxNights;

        return $this;
    }

    /**
     * Gets Conditions
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductCondition[]|null
     */
    public function getConditions()
    {
        if (!isset($this->container['Conditions']) || is_null($this->container['Conditions'])) {
            return null;
        }
        return $this->container['Conditions'];
    }

    /**
     * Sets Conditions
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductCondition[]|null $Conditions Conditions
     *
     * @return self
     */
    public function setConditions($Conditions)
    {
        if (is_null($Conditions)) {
            array_push($this->openAPINullablesSetToNull, 'Conditions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Conditions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Conditions'] = $Conditions;

        return $this;
    }

    /**
     * Gets Parameter
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\WebpageParameter|null
     */
    public function getParameter()
    {
        if (!isset($this->container['Parameter']) || is_null($this->container['Parameter'])) {
            return null;
        }
        return $this->container['Parameter'];
    }

    /**
     * Sets Parameter
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\WebpageParameter|null $Parameter Parameter
     *
     * @return self
     */
    public function setParameter($Parameter)
    {
        if (is_null($Parameter)) {
            array_push($this->openAPINullablesSetToNull, 'Parameter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Parameter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Parameter'] = $Parameter;

        return $this;
    }

    /**
     * Gets AgeRange
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeRange|mixed|null
     */
    public function getAgeRange()
    {
        if (!isset($this->container['AgeRange']) || is_null($this->container['AgeRange'])) {
            return null;
        }
        if ((is_object($this->container['AgeRange']) || is_string($this->container['AgeRange'])) && method_exists($this->container['AgeRange'], 'getValue')) {
            return $this->container['AgeRange']->getValue();
        }
        return $this->container['AgeRange'];
    }

    /**
     * Sets AgeRange
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeRange|mixed|null $AgeRange AgeRange
     *
     * @return self
     */
    public function setAgeRange($AgeRange)
    {
        if (is_null($AgeRange)) {
            throw new \InvalidArgumentException('non-nullable AgeRange cannot be null');
        }
        if (!$AgeRange instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeRange) {
            $AgeRange = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeRange($AgeRange);
        }
        $this->container['AgeRange'] = $AgeRange;

        return $this;
    }

    /**
     * Gets DeviceName
     *
     * @return string|null
     */
    public function getDeviceName()
    {
        if (!isset($this->container['DeviceName']) || is_null($this->container['DeviceName'])) {
            return null;
        }
        return $this->container['DeviceName'];
    }

    /**
     * Sets DeviceName
     *
     * @param string|null $DeviceName DeviceName
     *
     * @return self
     */
    public function setDeviceName($DeviceName)
    {
        if (is_null($DeviceName)) {
            array_push($this->openAPINullablesSetToNull, 'DeviceName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DeviceName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DeviceName'] = $DeviceName;

        return $this;
    }

    /**
     * Gets OSName
     *
     * @return string|null
     */
    public function getOSName()
    {
        if (!isset($this->container['OSName']) || is_null($this->container['OSName'])) {
            return null;
        }
        return $this->container['OSName'];
    }

    /**
     * Sets OSName
     *
     * @param string|null $OSName OSName
     *
     * @return self
     */
    public function setOSName($OSName)
    {
        if (is_null($OSName)) {
            array_push($this->openAPINullablesSetToNull, 'OSName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('OSName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['OSName'] = $OSName;

        return $this;
    }

    /**
     * Gets Day
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day|mixed|null
     */
    public function getDay()
    {
        if (!isset($this->container['Day']) || is_null($this->container['Day'])) {
            return null;
        }
        if ((is_object($this->container['Day']) || is_string($this->container['Day'])) && method_exists($this->container['Day'], 'getValue')) {
            return $this->container['Day']->getValue();
        }
        return $this->container['Day'];
    }

    /**
     * Sets Day
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day|mixed|null $Day Day
     *
     * @return self
     */
    public function setDay($Day)
    {
        if (is_null($Day)) {
            throw new \InvalidArgumentException('non-nullable Day cannot be null');
        }
        if (!$Day instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day) {
            $Day = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\Day($Day);
        }
        $this->container['Day'] = $Day;

        return $this;
    }

    /**
     * Gets FromHour
     *
     * @return int|null
     */
    public function getFromHour()
    {
        if (!isset($this->container['FromHour']) || is_null($this->container['FromHour'])) {
            return null;
        }
        return $this->container['FromHour'];
    }

    /**
     * Sets FromHour
     *
     * @param int|null $FromHour FromHour
     *
     * @return self
     */
    public function setFromHour($FromHour)
    {
        if (is_null($FromHour)) {
            array_push($this->openAPINullablesSetToNull, 'FromHour');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FromHour', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FromHour'] = $FromHour;

        return $this;
    }

    /**
     * Gets FromMinute
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null
     */
    public function getFromMinute()
    {
        if (!isset($this->container['FromMinute']) || is_null($this->container['FromMinute'])) {
            return null;
        }
        if ((is_object($this->container['FromMinute']) || is_string($this->container['FromMinute'])) && method_exists($this->container['FromMinute'], 'getValue')) {
            return $this->container['FromMinute']->getValue();
        }
        return $this->container['FromMinute'];
    }

    /**
     * Sets FromMinute
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null $FromMinute FromMinute
     *
     * @return self
     */
    public function setFromMinute($FromMinute)
    {
        if (is_null($FromMinute)) {
            throw new \InvalidArgumentException('non-nullable FromMinute cannot be null');
        }
        if (!$FromMinute instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute) {
            $FromMinute = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute($FromMinute);
        }
        $this->container['FromMinute'] = $FromMinute;

        return $this;
    }

    /**
     * Gets ToHour
     *
     * @return int|null
     */
    public function getToHour()
    {
        if (!isset($this->container['ToHour']) || is_null($this->container['ToHour'])) {
            return null;
        }
        return $this->container['ToHour'];
    }

    /**
     * Sets ToHour
     *
     * @param int|null $ToHour ToHour
     *
     * @return self
     */
    public function setToHour($ToHour)
    {
        if (is_null($ToHour)) {
            array_push($this->openAPINullablesSetToNull, 'ToHour');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ToHour', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ToHour'] = $ToHour;

        return $this;
    }

    /**
     * Gets ToMinute
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null
     */
    public function getToMinute()
    {
        if (!isset($this->container['ToMinute']) || is_null($this->container['ToMinute'])) {
            return null;
        }
        if ((is_object($this->container['ToMinute']) || is_string($this->container['ToMinute'])) && method_exists($this->container['ToMinute'], 'getValue')) {
            return $this->container['ToMinute']->getValue();
        }
        return $this->container['ToMinute'];
    }

    /**
     * Sets ToMinute
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute|mixed|null $ToMinute ToMinute
     *
     * @return self
     */
    public function setToMinute($ToMinute)
    {
        if (is_null($ToMinute)) {
            throw new \InvalidArgumentException('non-nullable ToMinute cannot be null');
        }
        if (!$ToMinute instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute) {
            $ToMinute = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\Minute($ToMinute);
        }
        $this->container['ToMinute'] = $ToMinute;

        return $this;
    }

    /**
     * Gets GenderType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderType|mixed|null
     */
    public function getGenderType()
    {
        if (!isset($this->container['GenderType']) || is_null($this->container['GenderType'])) {
            return null;
        }
        if ((is_object($this->container['GenderType']) || is_string($this->container['GenderType'])) && method_exists($this->container['GenderType'], 'getValue')) {
            return $this->container['GenderType']->getValue();
        }
        return $this->container['GenderType'];
    }

    /**
     * Sets GenderType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderType|mixed|null $GenderType GenderType
     *
     * @return self
     */
    public function setGenderType($GenderType)
    {
        if (is_null($GenderType)) {
            throw new \InvalidArgumentException('non-nullable GenderType cannot be null');
        }
        if (!$GenderType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderType) {
            $GenderType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderType($GenderType);
        }
        $this->container['GenderType'] = $GenderType;

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
     * Gets Radius
     *
     * @return string|null
     */
    public function getRadius()
    {
        if (!isset($this->container['Radius']) || is_null($this->container['Radius'])) {
            return null;
        }
        return $this->container['Radius'];
    }

    /**
     * Sets Radius
     *
     * @param string|null $Radius Radius
     *
     * @return self
     */
    public function setRadius($Radius)
    {
        if (is_null($Radius)) {
            array_push($this->openAPINullablesSetToNull, 'Radius');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Radius', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Radius'] = $Radius;

        return $this;
    }

    /**
     * Gets RadiusUnit
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\DistanceUnit|mixed|null
     */
    public function getRadiusUnit()
    {
        if (!isset($this->container['RadiusUnit']) || is_null($this->container['RadiusUnit'])) {
            return null;
        }
        if ((is_object($this->container['RadiusUnit']) || is_string($this->container['RadiusUnit'])) && method_exists($this->container['RadiusUnit'], 'getValue')) {
            return $this->container['RadiusUnit']->getValue();
        }
        return $this->container['RadiusUnit'];
    }

    /**
     * Sets RadiusUnit
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\DistanceUnit|mixed|null $RadiusUnit RadiusUnit
     *
     * @return self
     */
    public function setRadiusUnit($RadiusUnit)
    {
        if (is_null($RadiusUnit)) {
            throw new \InvalidArgumentException('non-nullable RadiusUnit cannot be null');
        }
        if (!$RadiusUnit instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\DistanceUnit) {
            $RadiusUnit = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\DistanceUnit($RadiusUnit);
        }
        $this->container['RadiusUnit'] = $RadiusUnit;

        return $this;
    }

    /**
     * Gets LatitudeDegrees
     *
     * @return float|null
     */
    public function getLatitudeDegrees()
    {
        if (!isset($this->container['LatitudeDegrees']) || is_null($this->container['LatitudeDegrees'])) {
            return null;
        }
        return $this->container['LatitudeDegrees'];
    }

    /**
     * Sets LatitudeDegrees
     *
     * @param float|null $LatitudeDegrees LatitudeDegrees
     *
     * @return self
     */
    public function setLatitudeDegrees($LatitudeDegrees)
    {
        if (is_null($LatitudeDegrees)) {
            array_push($this->openAPINullablesSetToNull, 'LatitudeDegrees');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LatitudeDegrees', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LatitudeDegrees'] = $LatitudeDegrees;

        return $this;
    }

    /**
     * Gets LongitudeDegrees
     *
     * @return float|null
     */
    public function getLongitudeDegrees()
    {
        if (!isset($this->container['LongitudeDegrees']) || is_null($this->container['LongitudeDegrees'])) {
            return null;
        }
        return $this->container['LongitudeDegrees'];
    }

    /**
     * Sets LongitudeDegrees
     *
     * @param float|null $LongitudeDegrees LongitudeDegrees
     *
     * @return self
     */
    public function setLongitudeDegrees($LongitudeDegrees)
    {
        if (is_null($LongitudeDegrees)) {
            array_push($this->openAPINullablesSetToNull, 'LongitudeDegrees');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LongitudeDegrees', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LongitudeDegrees'] = $LongitudeDegrees;

        return $this;
    }

    /**
     * Gets LocationId
     *
     * @return string|null
     */
    public function getLocationId()
    {
        if (!isset($this->container['LocationId']) || is_null($this->container['LocationId'])) {
            return null;
        }
        return $this->container['LocationId'];
    }

    /**
     * Sets LocationId
     *
     * @param string|null $LocationId LocationId
     *
     * @return self
     */
    public function setLocationId($LocationId)
    {
        if (is_null($LocationId)) {
            array_push($this->openAPINullablesSetToNull, 'LocationId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LocationId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LocationId'] = $LocationId;

        return $this;
    }

    /**
     * Gets LocationType
     *
     * @return string|null
     */
    public function getLocationType()
    {
        if (!isset($this->container['LocationType']) || is_null($this->container['LocationType'])) {
            return null;
        }
        return $this->container['LocationType'];
    }

    /**
     * Sets LocationType
     *
     * @param string|null $LocationType LocationType
     *
     * @return self
     */
    public function setLocationType($LocationType)
    {
        if (is_null($LocationType)) {
            array_push($this->openAPINullablesSetToNull, 'LocationType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LocationType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LocationType'] = $LocationType;

        return $this;
    }

    /**
     * Gets DisplayName
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        if (!isset($this->container['DisplayName']) || is_null($this->container['DisplayName'])) {
            return null;
        }
        return $this->container['DisplayName'];
    }

    /**
     * Sets DisplayName
     *
     * @param string|null $DisplayName DisplayName
     *
     * @return self
     */
    public function setDisplayName($DisplayName)
    {
        if (is_null($DisplayName)) {
            array_push($this->openAPINullablesSetToNull, 'DisplayName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DisplayName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DisplayName'] = $DisplayName;

        return $this;
    }

    /**
     * Gets EnclosedLocationIds
     *
     * @return string[]|null
     */
    public function getEnclosedLocationIds()
    {
        if (!isset($this->container['EnclosedLocationIds']) || is_null($this->container['EnclosedLocationIds'])) {
            return null;
        }
        return $this->container['EnclosedLocationIds'];
    }

    /**
     * Sets EnclosedLocationIds
     *
     * @param string[]|null $EnclosedLocationIds EnclosedLocationIds
     *
     * @return self
     */
    public function setEnclosedLocationIds($EnclosedLocationIds)
    {
        if (is_null($EnclosedLocationIds)) {
            array_push($this->openAPINullablesSetToNull, 'EnclosedLocationIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EnclosedLocationIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EnclosedLocationIds'] = $EnclosedLocationIds;

        return $this;
    }

    /**
     * Gets IntentOption
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption|mixed|null
     */
    public function getIntentOption()
    {
        if (!isset($this->container['IntentOption']) || is_null($this->container['IntentOption'])) {
            return null;
        }
        if ((is_object($this->container['IntentOption']) || is_string($this->container['IntentOption'])) && method_exists($this->container['IntentOption'], 'getValue')) {
            return $this->container['IntentOption']->getValue();
        }
        return $this->container['IntentOption'];
    }

    /**
     * Sets IntentOption
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption|mixed|null $IntentOption IntentOption
     *
     * @return self
     */
    public function setIntentOption($IntentOption)
    {
        if (is_null($IntentOption)) {
            throw new \InvalidArgumentException('non-nullable IntentOption cannot be null');
        }
        if (!$IntentOption instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption) {
            $IntentOption = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption($IntentOption);
        }
        $this->container['IntentOption'] = $IntentOption;

        return $this;
    }

    /**
     * Gets AudienceId
     *
     * @return string|null
     */
    public function getAudienceId()
    {
        if (!isset($this->container['AudienceId']) || is_null($this->container['AudienceId'])) {
            return null;
        }
        return $this->container['AudienceId'];
    }

    /**
     * Sets AudienceId
     *
     * @param string|null $AudienceId AudienceId
     *
     * @return self
     */
    public function setAudienceId($AudienceId)
    {
        if (is_null($AudienceId)) {
            array_push($this->openAPINullablesSetToNull, 'AudienceId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AudienceId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AudienceId'] = $AudienceId;

        return $this;
    }

    /**
     * Gets AudienceType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceType|mixed|null
     */
    public function getAudienceType()
    {
        if (!isset($this->container['AudienceType']) || is_null($this->container['AudienceType'])) {
            return null;
        }
        if ((is_object($this->container['AudienceType']) || is_string($this->container['AudienceType'])) && method_exists($this->container['AudienceType'], 'getValue')) {
            return $this->container['AudienceType']->getValue();
        }
        return $this->container['AudienceType'];
    }

    /**
     * Sets AudienceType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceType|mixed|null $AudienceType AudienceType
     *
     * @return self
     */
    public function setAudienceType($AudienceType)
    {
        if (is_null($AudienceType)) {
            throw new \InvalidArgumentException('non-nullable AudienceType cannot be null');
        }
        if (!$AudienceType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceType) {
            $AudienceType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceType($AudienceType);
        }
        $this->container['AudienceType'] = $AudienceType;

        return $this;
    }

    /**
     * Gets ProfileId
     *
     * @return string|null
     */
    public function getProfileId()
    {
        if (!isset($this->container['ProfileId']) || is_null($this->container['ProfileId'])) {
            return null;
        }
        return $this->container['ProfileId'];
    }

    /**
     * Sets ProfileId
     *
     * @param string|null $ProfileId ProfileId
     *
     * @return self
     */
    public function setProfileId($ProfileId)
    {
        if (is_null($ProfileId)) {
            throw new \InvalidArgumentException('non-nullable ProfileId cannot be null');
        }
        $this->container['ProfileId'] = $ProfileId;

        return $this;
    }

    /**
     * Gets ProfileType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProfileType|mixed|null
     */
    public function getProfileType()
    {
        if (!isset($this->container['ProfileType']) || is_null($this->container['ProfileType'])) {
            return null;
        }
        if ((is_object($this->container['ProfileType']) || is_string($this->container['ProfileType'])) && method_exists($this->container['ProfileType'], 'getValue')) {
            return $this->container['ProfileType']->getValue();
        }
        return $this->container['ProfileType'];
    }

    /**
     * Sets ProfileType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProfileType|mixed|null $ProfileType ProfileType
     *
     * @return self
     */
    public function setProfileType($ProfileType)
    {
        if (is_null($ProfileType)) {
            throw new \InvalidArgumentException('non-nullable ProfileType cannot be null');
        }
        if (!$ProfileType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProfileType) {
            $ProfileType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProfileType($ProfileType);
        }
        $this->container['ProfileType'] = $ProfileType;

        return $this;
    }

    /**
     * Gets StoreId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        if (!isset($this->container['StoreId']) || is_null($this->container['StoreId'])) {
            return null;
        }
        return $this->container['StoreId'];
    }

    /**
     * Sets StoreId
     *
     * @param string|null $StoreId StoreId
     *
     * @return self
     */
    public function setStoreId($StoreId)
    {
        if (is_null($StoreId)) {
            array_push($this->openAPINullablesSetToNull, 'StoreId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StoreId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StoreId'] = $StoreId;

        return $this;
    }

    /**
     * Gets DealId
     *
     * @return string|null
     */
    public function getDealId()
    {
        if (!isset($this->container['DealId']) || is_null($this->container['DealId'])) {
            return null;
        }
        return $this->container['DealId'];
    }

    /**
     * Sets DealId
     *
     * @param string|null $DealId DealId
     *
     * @return self
     */
    public function setDealId($DealId)
    {
        if (is_null($DealId)) {
            throw new \InvalidArgumentException('non-nullable DealId cannot be null');
        }
        $this->container['DealId'] = $DealId;

        return $this;
    }

    /**
     * Gets GenreId
     *
     * @return string|null
     */
    public function getGenreId()
    {
        if (!isset($this->container['GenreId']) || is_null($this->container['GenreId'])) {
            return null;
        }
        return $this->container['GenreId'];
    }

    /**
     * Sets GenreId
     *
     * @param string|null $GenreId GenreId
     *
     * @return self
     */
    public function setGenreId($GenreId)
    {
        if (is_null($GenreId)) {
            throw new \InvalidArgumentException('non-nullable GenreId cannot be null');
        }
        $this->container['GenreId'] = $GenreId;

        return $this;
    }

    /**
     * Gets PlacementId
     *
     * @return string|null
     */
    public function getPlacementId()
    {
        if (!isset($this->container['PlacementId']) || is_null($this->container['PlacementId'])) {
            return null;
        }
        return $this->container['PlacementId'];
    }

    /**
     * Sets PlacementId
     *
     * @param string|null $PlacementId PlacementId
     *
     * @return self
     */
    public function setPlacementId($PlacementId)
    {
        if (is_null($PlacementId)) {
            throw new \InvalidArgumentException('non-nullable PlacementId cannot be null');
        }
        $this->container['PlacementId'] = $PlacementId;

        return $this;
    }

    /**
     * Gets PlacementName
     *
     * @return string|null
     */
    public function getPlacementName()
    {
        if (!isset($this->container['PlacementName']) || is_null($this->container['PlacementName'])) {
            return null;
        }
        return $this->container['PlacementName'];
    }

    /**
     * Sets PlacementName
     *
     * @param string|null $PlacementName PlacementName
     *
     * @return self
     */
    public function setPlacementName($PlacementName)
    {
        if (is_null($PlacementName)) {
            array_push($this->openAPINullablesSetToNull, 'PlacementName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PlacementName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PlacementName'] = $PlacementName;

        return $this;
    }

    /**
     * Gets TopicId
     *
     * @return string|null
     */
    public function getTopicId()
    {
        if (!isset($this->container['TopicId']) || is_null($this->container['TopicId'])) {
            return null;
        }
        return $this->container['TopicId'];
    }

    /**
     * Sets TopicId
     *
     * @param string|null $TopicId TopicId
     *
     * @return self
     */
    public function setTopicId($TopicId)
    {
        if (is_null($TopicId)) {
            throw new \InvalidArgumentException('non-nullable TopicId cannot be null');
        }
        $this->container['TopicId'] = $TopicId;

        return $this;
    }

    /**
     * Gets TopicName
     *
     * @return string|null
     */
    public function getTopicName()
    {
        if (!isset($this->container['TopicName']) || is_null($this->container['TopicName'])) {
            return null;
        }
        return $this->container['TopicName'];
    }

    /**
     * Sets TopicName
     *
     * @param string|null $TopicName TopicName
     *
     * @return self
     */
    public function setTopicName($TopicName)
    {
        if (is_null($TopicName)) {
            array_push($this->openAPINullablesSetToNull, 'TopicName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TopicName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TopicName'] = $TopicName;

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
