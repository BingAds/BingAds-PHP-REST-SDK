<?php
/**
 * ConversionGoal
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

class ConversionGoal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'Type';

    /**
     * Associative array for mapping discriminator values to model class names
     *
     * @var string[]
     */
    public const MAPPINGS = [
        'AppDownload' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\AppDownloadGoal',
        'AppInstall' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\AppInstallGoal',
        'Duration' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\DurationGoal',
        'Event' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\EventGoal',
        'InStoreTransaction' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\InStoreTransactionGoal',
        'OfflineConversion' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\OfflineConversionGoal',
        'PagesViewedPerVisit' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\PagesViewedPerVisitGoal',
        'Url' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\UrlGoal',
    ];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ConversionGoal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'Status' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalStatus',
        'Type' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalType',
        'Scope' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope',
        'CountType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalCountType',
        'Revenue' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalRevenue',
        'ConversionWindowInMinutes' => 'int',
        'TagId' => 'string',
        'TrackingStatus' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalTrackingStatus',
        'ExcludeFromBidding' => 'bool',
        'ViewThroughConversionWindowInMinutes' => 'int',
        'GoalCategory' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalCategory',
        'AttributionModelType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AttributionModelType',
        'IsEnhancedConversionsEnabled' => 'bool',
        'IsAutoGoal' => 'bool',
        'UrlExpression' => 'string',
        'UrlOperator' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator',
        'MinimumDurationInSeconds' => 'int',
        'MinimumPagesViewed' => 'int',
        'CategoryExpression' => 'string',
        'CategoryOperator' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator',
        'ActionExpression' => 'string',
        'ActionOperator' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator',
        'LabelExpression' => 'string',
        'LabelOperator' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator',
        'Value' => 'float',
        'ValueOperator' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ValueOperator',
        'AppPlatform' => 'string',
        'AppStoreId' => 'string',
        'IsExternallyAttributed' => 'bool'
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
        'Type' => null,
        'Scope' => null,
        'CountType' => null,
        'Revenue' => null,
        'ConversionWindowInMinutes' => 'int32',
        'TagId' => 'int64',
        'TrackingStatus' => null,
        'ExcludeFromBidding' => null,
        'ViewThroughConversionWindowInMinutes' => 'int32',
        'GoalCategory' => null,
        'AttributionModelType' => null,
        'IsEnhancedConversionsEnabled' => null,
        'IsAutoGoal' => null,
        'UrlExpression' => null,
        'UrlOperator' => null,
        'MinimumDurationInSeconds' => 'int32',
        'MinimumPagesViewed' => 'int32',
        'CategoryExpression' => null,
        'CategoryOperator' => null,
        'ActionExpression' => null,
        'ActionOperator' => null,
        'LabelExpression' => null,
        'LabelOperator' => null,
        'Value' => 'double',
        'ValueOperator' => null,
        'AppPlatform' => null,
        'AppStoreId' => null,
        'IsExternallyAttributed' => null
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
        'Type' => false,
        'Scope' => false,
        'CountType' => false,
        'Revenue' => true,
        'ConversionWindowInMinutes' => true,
        'TagId' => true,
        'TrackingStatus' => false,
        'ExcludeFromBidding' => true,
        'ViewThroughConversionWindowInMinutes' => true,
        'GoalCategory' => false,
        'AttributionModelType' => false,
        'IsEnhancedConversionsEnabled' => true,
        'IsAutoGoal' => true,
        'UrlExpression' => true,
        'UrlOperator' => false,
        'MinimumDurationInSeconds' => true,
        'MinimumPagesViewed' => true,
        'CategoryExpression' => true,
        'CategoryOperator' => false,
        'ActionExpression' => true,
        'ActionOperator' => false,
        'LabelExpression' => true,
        'LabelOperator' => false,
        'Value' => true,
        'ValueOperator' => false,
        'AppPlatform' => true,
        'AppStoreId' => true,
        'IsExternallyAttributed' => true
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
        'Type' => 'Type',
        'Scope' => 'Scope',
        'CountType' => 'CountType',
        'Revenue' => 'Revenue',
        'ConversionWindowInMinutes' => 'ConversionWindowInMinutes',
        'TagId' => 'TagId',
        'TrackingStatus' => 'TrackingStatus',
        'ExcludeFromBidding' => 'ExcludeFromBidding',
        'ViewThroughConversionWindowInMinutes' => 'ViewThroughConversionWindowInMinutes',
        'GoalCategory' => 'GoalCategory',
        'AttributionModelType' => 'AttributionModelType',
        'IsEnhancedConversionsEnabled' => 'IsEnhancedConversionsEnabled',
        'IsAutoGoal' => 'IsAutoGoal',
        'UrlExpression' => 'UrlExpression',
        'UrlOperator' => 'UrlOperator',
        'MinimumDurationInSeconds' => 'MinimumDurationInSeconds',
        'MinimumPagesViewed' => 'MinimumPagesViewed',
        'CategoryExpression' => 'CategoryExpression',
        'CategoryOperator' => 'CategoryOperator',
        'ActionExpression' => 'ActionExpression',
        'ActionOperator' => 'ActionOperator',
        'LabelExpression' => 'LabelExpression',
        'LabelOperator' => 'LabelOperator',
        'Value' => 'Value',
        'ValueOperator' => 'ValueOperator',
        'AppPlatform' => 'AppPlatform',
        'AppStoreId' => 'AppStoreId',
        'IsExternallyAttributed' => 'IsExternallyAttributed'
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
        'Type' => 'setType',
        'Scope' => 'setScope',
        'CountType' => 'setCountType',
        'Revenue' => 'setRevenue',
        'ConversionWindowInMinutes' => 'setConversionWindowInMinutes',
        'TagId' => 'setTagId',
        'TrackingStatus' => 'setTrackingStatus',
        'ExcludeFromBidding' => 'setExcludeFromBidding',
        'ViewThroughConversionWindowInMinutes' => 'setViewThroughConversionWindowInMinutes',
        'GoalCategory' => 'setGoalCategory',
        'AttributionModelType' => 'setAttributionModelType',
        'IsEnhancedConversionsEnabled' => 'setIsEnhancedConversionsEnabled',
        'IsAutoGoal' => 'setIsAutoGoal',
        'UrlExpression' => 'setUrlExpression',
        'UrlOperator' => 'setUrlOperator',
        'MinimumDurationInSeconds' => 'setMinimumDurationInSeconds',
        'MinimumPagesViewed' => 'setMinimumPagesViewed',
        'CategoryExpression' => 'setCategoryExpression',
        'CategoryOperator' => 'setCategoryOperator',
        'ActionExpression' => 'setActionExpression',
        'ActionOperator' => 'setActionOperator',
        'LabelExpression' => 'setLabelExpression',
        'LabelOperator' => 'setLabelOperator',
        'Value' => 'setValue',
        'ValueOperator' => 'setValueOperator',
        'AppPlatform' => 'setAppPlatform',
        'AppStoreId' => 'setAppStoreId',
        'IsExternallyAttributed' => 'setIsExternallyAttributed'
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
        'Type' => 'getType',
        'Scope' => 'getScope',
        'CountType' => 'getCountType',
        'Revenue' => 'getRevenue',
        'ConversionWindowInMinutes' => 'getConversionWindowInMinutes',
        'TagId' => 'getTagId',
        'TrackingStatus' => 'getTrackingStatus',
        'ExcludeFromBidding' => 'getExcludeFromBidding',
        'ViewThroughConversionWindowInMinutes' => 'getViewThroughConversionWindowInMinutes',
        'GoalCategory' => 'getGoalCategory',
        'AttributionModelType' => 'getAttributionModelType',
        'IsEnhancedConversionsEnabled' => 'getIsEnhancedConversionsEnabled',
        'IsAutoGoal' => 'getIsAutoGoal',
        'UrlExpression' => 'getUrlExpression',
        'UrlOperator' => 'getUrlOperator',
        'MinimumDurationInSeconds' => 'getMinimumDurationInSeconds',
        'MinimumPagesViewed' => 'getMinimumPagesViewed',
        'CategoryExpression' => 'getCategoryExpression',
        'CategoryOperator' => 'getCategoryOperator',
        'ActionExpression' => 'getActionExpression',
        'ActionOperator' => 'getActionOperator',
        'LabelExpression' => 'getLabelExpression',
        'LabelOperator' => 'getLabelOperator',
        'Value' => 'getValue',
        'ValueOperator' => 'getValueOperator',
        'AppPlatform' => 'getAppPlatform',
        'AppStoreId' => 'getAppStoreId',
        'IsExternallyAttributed' => 'getIsExternallyAttributed'
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
        $this->setIfExists('Type', $data ?? [], null);
        $this->setIfExists('Scope', $data ?? [], null);
        $this->setIfExists('CountType', $data ?? [], null);
        $this->setIfExists('Revenue', $data ?? [], null);
        $this->setIfExists('ConversionWindowInMinutes', $data ?? [], null);
        $this->setIfExists('TagId', $data ?? [], null);
        $this->setIfExists('TrackingStatus', $data ?? [], null);
        $this->setIfExists('ExcludeFromBidding', $data ?? [], null);
        $this->setIfExists('ViewThroughConversionWindowInMinutes', $data ?? [], null);
        $this->setIfExists('GoalCategory', $data ?? [], null);
        $this->setIfExists('AttributionModelType', $data ?? [], null);
        $this->setIfExists('IsEnhancedConversionsEnabled', $data ?? [], null);
        $this->setIfExists('IsAutoGoal', $data ?? [], null);
        $this->setIfExists('UrlExpression', $data ?? [], null);
        $this->setIfExists('UrlOperator', $data ?? [], null);
        $this->setIfExists('MinimumDurationInSeconds', $data ?? [], null);
        $this->setIfExists('MinimumPagesViewed', $data ?? [], null);
        $this->setIfExists('CategoryExpression', $data ?? [], null);
        $this->setIfExists('CategoryOperator', $data ?? [], null);
        $this->setIfExists('ActionExpression', $data ?? [], null);
        $this->setIfExists('ActionOperator', $data ?? [], null);
        $this->setIfExists('LabelExpression', $data ?? [], null);
        $this->setIfExists('LabelOperator', $data ?? [], null);
        $this->setIfExists('Value', $data ?? [], null);
        $this->setIfExists('ValueOperator', $data ?? [], null);
        $this->setIfExists('AppPlatform', $data ?? [], null);
        $this->setIfExists('AppStoreId', $data ?? [], null);
        $this->setIfExists('IsExternallyAttributed', $data ?? [], null);

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
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalStatus|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalStatus($Status);
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets Type
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalType|mixed|null
     */
    public function getType()
    {
        if (!isset($this->container['Type']) || is_null($this->container['Type'])) {
            return null;
        }
        if ((is_object($this->container['Type']) || is_string($this->container['Type'])) && method_exists($this->container['Type'], 'getValue')) {
            return $this->container['Type']->getValue();
        }
        return $this->container['Type'];
    }

    /**
     * Sets Type
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalType|mixed|null $Type Type
     *
     * @return self
     */
    public function setType($Type)
    {
        if (is_null($Type)) {
            throw new \InvalidArgumentException('non-nullable Type cannot be null');
        }
        if (!$Type instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalType) {
            $Type = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalType($Type);
        }
        $this->container['Type'] = $Type;

        return $this;
    }

    /**
     * Gets Scope
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope|mixed|null
     */
    public function getScope()
    {
        if (!isset($this->container['Scope']) || is_null($this->container['Scope'])) {
            return null;
        }
        if ((is_object($this->container['Scope']) || is_string($this->container['Scope'])) && method_exists($this->container['Scope'], 'getValue')) {
            return $this->container['Scope']->getValue();
        }
        return $this->container['Scope'];
    }

    /**
     * Sets Scope
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope|mixed|null $Scope Scope
     *
     * @return self
     */
    public function setScope($Scope)
    {
        if (is_null($Scope)) {
            throw new \InvalidArgumentException('non-nullable Scope cannot be null');
        }
        if (!$Scope instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope) {
            $Scope = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope($Scope);
        }
        $this->container['Scope'] = $Scope;

        return $this;
    }

    /**
     * Gets CountType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalCountType|mixed|null
     */
    public function getCountType()
    {
        if (!isset($this->container['CountType']) || is_null($this->container['CountType'])) {
            return null;
        }
        if ((is_object($this->container['CountType']) || is_string($this->container['CountType'])) && method_exists($this->container['CountType'], 'getValue')) {
            return $this->container['CountType']->getValue();
        }
        return $this->container['CountType'];
    }

    /**
     * Sets CountType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalCountType|mixed|null $CountType CountType
     *
     * @return self
     */
    public function setCountType($CountType)
    {
        if (is_null($CountType)) {
            throw new \InvalidArgumentException('non-nullable CountType cannot be null');
        }
        if (!$CountType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalCountType) {
            $CountType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalCountType($CountType);
        }
        $this->container['CountType'] = $CountType;

        return $this;
    }

    /**
     * Gets Revenue
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalRevenue|null
     */
    public function getRevenue()
    {
        if (!isset($this->container['Revenue']) || is_null($this->container['Revenue'])) {
            return null;
        }
        return $this->container['Revenue'];
    }

    /**
     * Sets Revenue
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalRevenue|null $Revenue Revenue
     *
     * @return self
     */
    public function setRevenue($Revenue)
    {
        if (is_null($Revenue)) {
            array_push($this->openAPINullablesSetToNull, 'Revenue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Revenue', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Revenue'] = $Revenue;

        return $this;
    }

    /**
     * Gets ConversionWindowInMinutes
     *
     * @return int|null
     */
    public function getConversionWindowInMinutes()
    {
        if (!isset($this->container['ConversionWindowInMinutes']) || is_null($this->container['ConversionWindowInMinutes'])) {
            return null;
        }
        return $this->container['ConversionWindowInMinutes'];
    }

    /**
     * Sets ConversionWindowInMinutes
     *
     * @param int|null $ConversionWindowInMinutes ConversionWindowInMinutes
     *
     * @return self
     */
    public function setConversionWindowInMinutes($ConversionWindowInMinutes)
    {
        if (is_null($ConversionWindowInMinutes)) {
            array_push($this->openAPINullablesSetToNull, 'ConversionWindowInMinutes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ConversionWindowInMinutes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ConversionWindowInMinutes'] = $ConversionWindowInMinutes;

        return $this;
    }

    /**
     * Gets TagId
     *
     * @return string|null
     */
    public function getTagId()
    {
        if (!isset($this->container['TagId']) || is_null($this->container['TagId'])) {
            return null;
        }
        return $this->container['TagId'];
    }

    /**
     * Sets TagId
     *
     * @param string|null $TagId TagId
     *
     * @return self
     */
    public function setTagId($TagId)
    {
        if (is_null($TagId)) {
            array_push($this->openAPINullablesSetToNull, 'TagId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TagId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TagId'] = $TagId;

        return $this;
    }

    /**
     * Gets TrackingStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalTrackingStatus|mixed|null
     */
    public function getTrackingStatus()
    {
        if (!isset($this->container['TrackingStatus']) || is_null($this->container['TrackingStatus'])) {
            return null;
        }
        if ((is_object($this->container['TrackingStatus']) || is_string($this->container['TrackingStatus'])) && method_exists($this->container['TrackingStatus'], 'getValue')) {
            return $this->container['TrackingStatus']->getValue();
        }
        return $this->container['TrackingStatus'];
    }

    /**
     * Sets TrackingStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalTrackingStatus|mixed|null $TrackingStatus TrackingStatus
     *
     * @return self
     */
    public function setTrackingStatus($TrackingStatus)
    {
        if (is_null($TrackingStatus)) {
            throw new \InvalidArgumentException('non-nullable TrackingStatus cannot be null');
        }
        if (!$TrackingStatus instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalTrackingStatus) {
            $TrackingStatus = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalTrackingStatus($TrackingStatus);
        }
        $this->container['TrackingStatus'] = $TrackingStatus;

        return $this;
    }

    /**
     * Gets ExcludeFromBidding
     *
     * @return bool|null
     */
    public function getExcludeFromBidding()
    {
        if (!isset($this->container['ExcludeFromBidding']) || is_null($this->container['ExcludeFromBidding'])) {
            return null;
        }
        return $this->container['ExcludeFromBidding'];
    }

    /**
     * Sets ExcludeFromBidding
     *
     * @param bool|null $ExcludeFromBidding ExcludeFromBidding
     *
     * @return self
     */
    public function setExcludeFromBidding($ExcludeFromBidding)
    {
        if (is_null($ExcludeFromBidding)) {
            array_push($this->openAPINullablesSetToNull, 'ExcludeFromBidding');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExcludeFromBidding', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExcludeFromBidding'] = $ExcludeFromBidding;

        return $this;
    }

    /**
     * Gets ViewThroughConversionWindowInMinutes
     *
     * @return int|null
     */
    public function getViewThroughConversionWindowInMinutes()
    {
        if (!isset($this->container['ViewThroughConversionWindowInMinutes']) || is_null($this->container['ViewThroughConversionWindowInMinutes'])) {
            return null;
        }
        return $this->container['ViewThroughConversionWindowInMinutes'];
    }

    /**
     * Sets ViewThroughConversionWindowInMinutes
     *
     * @param int|null $ViewThroughConversionWindowInMinutes ViewThroughConversionWindowInMinutes
     *
     * @return self
     */
    public function setViewThroughConversionWindowInMinutes($ViewThroughConversionWindowInMinutes)
    {
        if (is_null($ViewThroughConversionWindowInMinutes)) {
            array_push($this->openAPINullablesSetToNull, 'ViewThroughConversionWindowInMinutes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ViewThroughConversionWindowInMinutes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ViewThroughConversionWindowInMinutes'] = $ViewThroughConversionWindowInMinutes;

        return $this;
    }

    /**
     * Gets GoalCategory
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalCategory|mixed|null
     */
    public function getGoalCategory()
    {
        if (!isset($this->container['GoalCategory']) || is_null($this->container['GoalCategory'])) {
            return null;
        }
        if ((is_object($this->container['GoalCategory']) || is_string($this->container['GoalCategory'])) && method_exists($this->container['GoalCategory'], 'getValue')) {
            return $this->container['GoalCategory']->getValue();
        }
        return $this->container['GoalCategory'];
    }

    /**
     * Sets GoalCategory
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalCategory|mixed|null $GoalCategory GoalCategory
     *
     * @return self
     */
    public function setGoalCategory($GoalCategory)
    {
        if (is_null($GoalCategory)) {
            throw new \InvalidArgumentException('non-nullable GoalCategory cannot be null');
        }
        if (!$GoalCategory instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalCategory) {
            $GoalCategory = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionGoalCategory($GoalCategory);
        }
        $this->container['GoalCategory'] = $GoalCategory;

        return $this;
    }

    /**
     * Gets AttributionModelType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AttributionModelType|mixed|null
     */
    public function getAttributionModelType()
    {
        if (!isset($this->container['AttributionModelType']) || is_null($this->container['AttributionModelType'])) {
            return null;
        }
        if ((is_object($this->container['AttributionModelType']) || is_string($this->container['AttributionModelType'])) && method_exists($this->container['AttributionModelType'], 'getValue')) {
            return $this->container['AttributionModelType']->getValue();
        }
        return $this->container['AttributionModelType'];
    }

    /**
     * Sets AttributionModelType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AttributionModelType|mixed|null $AttributionModelType AttributionModelType
     *
     * @return self
     */
    public function setAttributionModelType($AttributionModelType)
    {
        if (is_null($AttributionModelType)) {
            throw new \InvalidArgumentException('non-nullable AttributionModelType cannot be null');
        }
        if (!$AttributionModelType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AttributionModelType) {
            $AttributionModelType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AttributionModelType($AttributionModelType);
        }
        $this->container['AttributionModelType'] = $AttributionModelType;

        return $this;
    }

    /**
     * Gets IsEnhancedConversionsEnabled
     *
     * @return bool|null
     */
    public function getIsEnhancedConversionsEnabled()
    {
        if (!isset($this->container['IsEnhancedConversionsEnabled']) || is_null($this->container['IsEnhancedConversionsEnabled'])) {
            return null;
        }
        return $this->container['IsEnhancedConversionsEnabled'];
    }

    /**
     * Sets IsEnhancedConversionsEnabled
     *
     * @param bool|null $IsEnhancedConversionsEnabled IsEnhancedConversionsEnabled
     *
     * @return self
     */
    public function setIsEnhancedConversionsEnabled($IsEnhancedConversionsEnabled)
    {
        if (is_null($IsEnhancedConversionsEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'IsEnhancedConversionsEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsEnhancedConversionsEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsEnhancedConversionsEnabled'] = $IsEnhancedConversionsEnabled;

        return $this;
    }

    /**
     * Gets IsAutoGoal
     *
     * @return bool|null
     */
    public function getIsAutoGoal()
    {
        if (!isset($this->container['IsAutoGoal']) || is_null($this->container['IsAutoGoal'])) {
            return null;
        }
        return $this->container['IsAutoGoal'];
    }

    /**
     * Sets IsAutoGoal
     *
     * @param bool|null $IsAutoGoal IsAutoGoal
     *
     * @return self
     */
    public function setIsAutoGoal($IsAutoGoal)
    {
        if (is_null($IsAutoGoal)) {
            array_push($this->openAPINullablesSetToNull, 'IsAutoGoal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsAutoGoal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsAutoGoal'] = $IsAutoGoal;

        return $this;
    }

    /**
     * Gets UrlExpression
     *
     * @return string|null
     */
    public function getUrlExpression()
    {
        if (!isset($this->container['UrlExpression']) || is_null($this->container['UrlExpression'])) {
            return null;
        }
        return $this->container['UrlExpression'];
    }

    /**
     * Sets UrlExpression
     *
     * @param string|null $UrlExpression UrlExpression
     *
     * @return self
     */
    public function setUrlExpression($UrlExpression)
    {
        if (is_null($UrlExpression)) {
            array_push($this->openAPINullablesSetToNull, 'UrlExpression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UrlExpression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UrlExpression'] = $UrlExpression;

        return $this;
    }

    /**
     * Gets UrlOperator
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator|mixed|null
     */
    public function getUrlOperator()
    {
        if (!isset($this->container['UrlOperator']) || is_null($this->container['UrlOperator'])) {
            return null;
        }
        if ((is_object($this->container['UrlOperator']) || is_string($this->container['UrlOperator'])) && method_exists($this->container['UrlOperator'], 'getValue')) {
            return $this->container['UrlOperator']->getValue();
        }
        return $this->container['UrlOperator'];
    }

    /**
     * Sets UrlOperator
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator|mixed|null $UrlOperator UrlOperator
     *
     * @return self
     */
    public function setUrlOperator($UrlOperator)
    {
        if (is_null($UrlOperator)) {
            throw new \InvalidArgumentException('non-nullable UrlOperator cannot be null');
        }
        if (!$UrlOperator instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator) {
            $UrlOperator = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator($UrlOperator);
        }
        $this->container['UrlOperator'] = $UrlOperator;

        return $this;
    }

    /**
     * Gets MinimumDurationInSeconds
     *
     * @return int|null
     */
    public function getMinimumDurationInSeconds()
    {
        if (!isset($this->container['MinimumDurationInSeconds']) || is_null($this->container['MinimumDurationInSeconds'])) {
            return null;
        }
        return $this->container['MinimumDurationInSeconds'];
    }

    /**
     * Sets MinimumDurationInSeconds
     *
     * @param int|null $MinimumDurationInSeconds MinimumDurationInSeconds
     *
     * @return self
     */
    public function setMinimumDurationInSeconds($MinimumDurationInSeconds)
    {
        if (is_null($MinimumDurationInSeconds)) {
            array_push($this->openAPINullablesSetToNull, 'MinimumDurationInSeconds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MinimumDurationInSeconds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MinimumDurationInSeconds'] = $MinimumDurationInSeconds;

        return $this;
    }

    /**
     * Gets MinimumPagesViewed
     *
     * @return int|null
     */
    public function getMinimumPagesViewed()
    {
        if (!isset($this->container['MinimumPagesViewed']) || is_null($this->container['MinimumPagesViewed'])) {
            return null;
        }
        return $this->container['MinimumPagesViewed'];
    }

    /**
     * Sets MinimumPagesViewed
     *
     * @param int|null $MinimumPagesViewed MinimumPagesViewed
     *
     * @return self
     */
    public function setMinimumPagesViewed($MinimumPagesViewed)
    {
        if (is_null($MinimumPagesViewed)) {
            array_push($this->openAPINullablesSetToNull, 'MinimumPagesViewed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MinimumPagesViewed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MinimumPagesViewed'] = $MinimumPagesViewed;

        return $this;
    }

    /**
     * Gets CategoryExpression
     *
     * @return string|null
     */
    public function getCategoryExpression()
    {
        if (!isset($this->container['CategoryExpression']) || is_null($this->container['CategoryExpression'])) {
            return null;
        }
        return $this->container['CategoryExpression'];
    }

    /**
     * Sets CategoryExpression
     *
     * @param string|null $CategoryExpression CategoryExpression
     *
     * @return self
     */
    public function setCategoryExpression($CategoryExpression)
    {
        if (is_null($CategoryExpression)) {
            array_push($this->openAPINullablesSetToNull, 'CategoryExpression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CategoryExpression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CategoryExpression'] = $CategoryExpression;

        return $this;
    }

    /**
     * Gets CategoryOperator
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator|mixed|null
     */
    public function getCategoryOperator()
    {
        if (!isset($this->container['CategoryOperator']) || is_null($this->container['CategoryOperator'])) {
            return null;
        }
        if ((is_object($this->container['CategoryOperator']) || is_string($this->container['CategoryOperator'])) && method_exists($this->container['CategoryOperator'], 'getValue')) {
            return $this->container['CategoryOperator']->getValue();
        }
        return $this->container['CategoryOperator'];
    }

    /**
     * Sets CategoryOperator
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator|mixed|null $CategoryOperator CategoryOperator
     *
     * @return self
     */
    public function setCategoryOperator($CategoryOperator)
    {
        if (is_null($CategoryOperator)) {
            throw new \InvalidArgumentException('non-nullable CategoryOperator cannot be null');
        }
        if (!$CategoryOperator instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator) {
            $CategoryOperator = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator($CategoryOperator);
        }
        $this->container['CategoryOperator'] = $CategoryOperator;

        return $this;
    }

    /**
     * Gets ActionExpression
     *
     * @return string|null
     */
    public function getActionExpression()
    {
        if (!isset($this->container['ActionExpression']) || is_null($this->container['ActionExpression'])) {
            return null;
        }
        return $this->container['ActionExpression'];
    }

    /**
     * Sets ActionExpression
     *
     * @param string|null $ActionExpression ActionExpression
     *
     * @return self
     */
    public function setActionExpression($ActionExpression)
    {
        if (is_null($ActionExpression)) {
            array_push($this->openAPINullablesSetToNull, 'ActionExpression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ActionExpression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ActionExpression'] = $ActionExpression;

        return $this;
    }

    /**
     * Gets ActionOperator
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator|mixed|null
     */
    public function getActionOperator()
    {
        if (!isset($this->container['ActionOperator']) || is_null($this->container['ActionOperator'])) {
            return null;
        }
        if ((is_object($this->container['ActionOperator']) || is_string($this->container['ActionOperator'])) && method_exists($this->container['ActionOperator'], 'getValue')) {
            return $this->container['ActionOperator']->getValue();
        }
        return $this->container['ActionOperator'];
    }

    /**
     * Sets ActionOperator
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator|mixed|null $ActionOperator ActionOperator
     *
     * @return self
     */
    public function setActionOperator($ActionOperator)
    {
        if (is_null($ActionOperator)) {
            throw new \InvalidArgumentException('non-nullable ActionOperator cannot be null');
        }
        if (!$ActionOperator instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator) {
            $ActionOperator = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator($ActionOperator);
        }
        $this->container['ActionOperator'] = $ActionOperator;

        return $this;
    }

    /**
     * Gets LabelExpression
     *
     * @return string|null
     */
    public function getLabelExpression()
    {
        if (!isset($this->container['LabelExpression']) || is_null($this->container['LabelExpression'])) {
            return null;
        }
        return $this->container['LabelExpression'];
    }

    /**
     * Sets LabelExpression
     *
     * @param string|null $LabelExpression LabelExpression
     *
     * @return self
     */
    public function setLabelExpression($LabelExpression)
    {
        if (is_null($LabelExpression)) {
            array_push($this->openAPINullablesSetToNull, 'LabelExpression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LabelExpression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LabelExpression'] = $LabelExpression;

        return $this;
    }

    /**
     * Gets LabelOperator
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator|mixed|null
     */
    public function getLabelOperator()
    {
        if (!isset($this->container['LabelOperator']) || is_null($this->container['LabelOperator'])) {
            return null;
        }
        if ((is_object($this->container['LabelOperator']) || is_string($this->container['LabelOperator'])) && method_exists($this->container['LabelOperator'], 'getValue')) {
            return $this->container['LabelOperator']->getValue();
        }
        return $this->container['LabelOperator'];
    }

    /**
     * Sets LabelOperator
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator|mixed|null $LabelOperator LabelOperator
     *
     * @return self
     */
    public function setLabelOperator($LabelOperator)
    {
        if (is_null($LabelOperator)) {
            throw new \InvalidArgumentException('non-nullable LabelOperator cannot be null');
        }
        if (!$LabelOperator instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator) {
            $LabelOperator = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ExpressionOperator($LabelOperator);
        }
        $this->container['LabelOperator'] = $LabelOperator;

        return $this;
    }

    /**
     * Gets Value
     *
     * @return float|null
     */
    public function getValue()
    {
        if (!isset($this->container['Value']) || is_null($this->container['Value'])) {
            return null;
        }
        return $this->container['Value'];
    }

    /**
     * Sets Value
     *
     * @param float|null $Value Value
     *
     * @return self
     */
    public function setValue($Value)
    {
        if (is_null($Value)) {
            array_push($this->openAPINullablesSetToNull, 'Value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Value'] = $Value;

        return $this;
    }

    /**
     * Gets ValueOperator
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ValueOperator|mixed|null
     */
    public function getValueOperator()
    {
        if (!isset($this->container['ValueOperator']) || is_null($this->container['ValueOperator'])) {
            return null;
        }
        if ((is_object($this->container['ValueOperator']) || is_string($this->container['ValueOperator'])) && method_exists($this->container['ValueOperator'], 'getValue')) {
            return $this->container['ValueOperator']->getValue();
        }
        return $this->container['ValueOperator'];
    }

    /**
     * Sets ValueOperator
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ValueOperator|mixed|null $ValueOperator ValueOperator
     *
     * @return self
     */
    public function setValueOperator($ValueOperator)
    {
        if (is_null($ValueOperator)) {
            throw new \InvalidArgumentException('non-nullable ValueOperator cannot be null');
        }
        if (!$ValueOperator instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ValueOperator) {
            $ValueOperator = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ValueOperator($ValueOperator);
        }
        $this->container['ValueOperator'] = $ValueOperator;

        return $this;
    }

    /**
     * Gets AppPlatform
     *
     * @return string|null
     */
    public function getAppPlatform()
    {
        if (!isset($this->container['AppPlatform']) || is_null($this->container['AppPlatform'])) {
            return null;
        }
        return $this->container['AppPlatform'];
    }

    /**
     * Sets AppPlatform
     *
     * @param string|null $AppPlatform AppPlatform
     *
     * @return self
     */
    public function setAppPlatform($AppPlatform)
    {
        if (is_null($AppPlatform)) {
            array_push($this->openAPINullablesSetToNull, 'AppPlatform');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AppPlatform', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AppPlatform'] = $AppPlatform;

        return $this;
    }

    /**
     * Gets AppStoreId
     *
     * @return string|null
     */
    public function getAppStoreId()
    {
        if (!isset($this->container['AppStoreId']) || is_null($this->container['AppStoreId'])) {
            return null;
        }
        return $this->container['AppStoreId'];
    }

    /**
     * Sets AppStoreId
     *
     * @param string|null $AppStoreId AppStoreId
     *
     * @return self
     */
    public function setAppStoreId($AppStoreId)
    {
        if (is_null($AppStoreId)) {
            array_push($this->openAPINullablesSetToNull, 'AppStoreId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AppStoreId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AppStoreId'] = $AppStoreId;

        return $this;
    }

    /**
     * Gets IsExternallyAttributed
     *
     * @return bool|null
     */
    public function getIsExternallyAttributed()
    {
        if (!isset($this->container['IsExternallyAttributed']) || is_null($this->container['IsExternallyAttributed'])) {
            return null;
        }
        return $this->container['IsExternallyAttributed'];
    }

    /**
     * Sets IsExternallyAttributed
     *
     * @param bool|null $IsExternallyAttributed IsExternallyAttributed
     *
     * @return self
     */
    public function setIsExternallyAttributed($IsExternallyAttributed)
    {
        if (is_null($IsExternallyAttributed)) {
            array_push($this->openAPINullablesSetToNull, 'IsExternallyAttributed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsExternallyAttributed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsExternallyAttributed'] = $IsExternallyAttributed;

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
