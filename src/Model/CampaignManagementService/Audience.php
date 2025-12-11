<?php
/**
 * Audience
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

class Audience implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'Type';

    /**
     * Associative array for mapping discriminator values to model class names
     *
     * @var string[]
     */
    public const MAPPINGS = [
        'CombinedList' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\CombinedList',
        'Custom' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomAudience',
        'CustomerList' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomerList',
        'ImpressionBasedRemarketingList' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ImpressionBasedRemarketingList',
        'InMarket' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\InMarketAudience',
        'Product' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductAudience',
        'RemarketingList' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\RemarketingList',
        'SimilarRemarketingList' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\SimilarRemarketingList',
    ];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Audience';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'Description' => 'string',
        'Scope' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope',
        'ParentId' => 'string',
        'MembershipDuration' => 'int',
        'Type' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceType',
        'SearchSize' => 'string',
        'AudienceNetworkSize' => 'string',
        'SupportedCampaignTypes' => 'string[]',
        'CustomerShare' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomerShare',
        'ForwardCompatibilityMap' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]',
        'TagId' => 'string',
        'Rule' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\RemarketingRule',
        'ProductAudienceType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductAudienceType',
        'SourceId' => 'string',
        'CombinationRules' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CombinationRule[]',
        'EntityType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ImpressionBasedEntityType',
        'CampaignId' => 'string',
        'AdGroupId' => 'string',
        'CampaignIds' => 'string[]',
        'AdGroupIds' => 'string[]'
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
        'Description' => null,
        'Scope' => null,
        'ParentId' => 'int64',
        'MembershipDuration' => 'int32',
        'Type' => null,
        'SearchSize' => 'int64',
        'AudienceNetworkSize' => 'int64',
        'SupportedCampaignTypes' => null,
        'CustomerShare' => null,
        'ForwardCompatibilityMap' => null,
        'TagId' => 'int64',
        'Rule' => null,
        'ProductAudienceType' => null,
        'SourceId' => 'int64',
        'CombinationRules' => null,
        'EntityType' => null,
        'CampaignId' => 'int64',
        'AdGroupId' => 'int64',
        'CampaignIds' => 'int64',
        'AdGroupIds' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'Name' => true,
        'Description' => true,
        'Scope' => false,
        'ParentId' => true,
        'MembershipDuration' => true,
        'Type' => false,
        'SearchSize' => true,
        'AudienceNetworkSize' => true,
        'SupportedCampaignTypes' => true,
        'CustomerShare' => true,
        'ForwardCompatibilityMap' => true,
        'TagId' => true,
        'Rule' => true,
        'ProductAudienceType' => false,
        'SourceId' => false,
        'CombinationRules' => true,
        'EntityType' => false,
        'CampaignId' => true,
        'AdGroupId' => true,
        'CampaignIds' => true,
        'AdGroupIds' => true
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
        'Description' => 'Description',
        'Scope' => 'Scope',
        'ParentId' => 'ParentId',
        'MembershipDuration' => 'MembershipDuration',
        'Type' => 'Type',
        'SearchSize' => 'SearchSize',
        'AudienceNetworkSize' => 'AudienceNetworkSize',
        'SupportedCampaignTypes' => 'SupportedCampaignTypes',
        'CustomerShare' => 'CustomerShare',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap',
        'TagId' => 'TagId',
        'Rule' => 'Rule',
        'ProductAudienceType' => 'ProductAudienceType',
        'SourceId' => 'SourceId',
        'CombinationRules' => 'CombinationRules',
        'EntityType' => 'EntityType',
        'CampaignId' => 'CampaignId',
        'AdGroupId' => 'AdGroupId',
        'CampaignIds' => 'CampaignIds',
        'AdGroupIds' => 'AdGroupIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'Name' => 'setName',
        'Description' => 'setDescription',
        'Scope' => 'setScope',
        'ParentId' => 'setParentId',
        'MembershipDuration' => 'setMembershipDuration',
        'Type' => 'setType',
        'SearchSize' => 'setSearchSize',
        'AudienceNetworkSize' => 'setAudienceNetworkSize',
        'SupportedCampaignTypes' => 'setSupportedCampaignTypes',
        'CustomerShare' => 'setCustomerShare',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap',
        'TagId' => 'setTagId',
        'Rule' => 'setRule',
        'ProductAudienceType' => 'setProductAudienceType',
        'SourceId' => 'setSourceId',
        'CombinationRules' => 'setCombinationRules',
        'EntityType' => 'setEntityType',
        'CampaignId' => 'setCampaignId',
        'AdGroupId' => 'setAdGroupId',
        'CampaignIds' => 'setCampaignIds',
        'AdGroupIds' => 'setAdGroupIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'Name' => 'getName',
        'Description' => 'getDescription',
        'Scope' => 'getScope',
        'ParentId' => 'getParentId',
        'MembershipDuration' => 'getMembershipDuration',
        'Type' => 'getType',
        'SearchSize' => 'getSearchSize',
        'AudienceNetworkSize' => 'getAudienceNetworkSize',
        'SupportedCampaignTypes' => 'getSupportedCampaignTypes',
        'CustomerShare' => 'getCustomerShare',
        'ForwardCompatibilityMap' => 'getForwardCompatibilityMap',
        'TagId' => 'getTagId',
        'Rule' => 'getRule',
        'ProductAudienceType' => 'getProductAudienceType',
        'SourceId' => 'getSourceId',
        'CombinationRules' => 'getCombinationRules',
        'EntityType' => 'getEntityType',
        'CampaignId' => 'getCampaignId',
        'AdGroupId' => 'getAdGroupId',
        'CampaignIds' => 'getCampaignIds',
        'AdGroupIds' => 'getAdGroupIds'
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
        $this->setIfExists('Description', $data ?? [], null);
        $this->setIfExists('Scope', $data ?? [], null);
        $this->setIfExists('ParentId', $data ?? [], null);
        $this->setIfExists('MembershipDuration', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], null);
        $this->setIfExists('SearchSize', $data ?? [], null);
        $this->setIfExists('AudienceNetworkSize', $data ?? [], null);
        $this->setIfExists('SupportedCampaignTypes', $data ?? [], null);
        $this->setIfExists('CustomerShare', $data ?? [], null);
        $this->setIfExists('ForwardCompatibilityMap', $data ?? [], null);
        $this->setIfExists('TagId', $data ?? [], null);
        $this->setIfExists('Rule', $data ?? [], null);
        $this->setIfExists('ProductAudienceType', $data ?? [], null);
        $this->setIfExists('SourceId', $data ?? [], null);
        $this->setIfExists('CombinationRules', $data ?? [], null);
        $this->setIfExists('EntityType', $data ?? [], null);
        $this->setIfExists('CampaignId', $data ?? [], null);
        $this->setIfExists('AdGroupId', $data ?? [], null);
        $this->setIfExists('CampaignIds', $data ?? [], null);
        $this->setIfExists('AdGroupIds', $data ?? [], null);

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
     * Gets Description
     *
     * @return string|null
     */
    public function getDescription()
    {
        if (!isset($this->container['Description']) || is_null($this->container['Description'])) {
            return null;
        }
        return $this->container['Description'];
    }

    /**
     * Sets Description
     *
     * @param string|null $Description Description
     *
     * @return self
     */
    public function setDescription($Description)
    {
        if (is_null($Description)) {
            array_push($this->openAPINullablesSetToNull, 'Description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Description'] = $Description;

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
     * Gets ParentId
     *
     * @return string|null
     */
    public function getParentId()
    {
        if (!isset($this->container['ParentId']) || is_null($this->container['ParentId'])) {
            return null;
        }
        return $this->container['ParentId'];
    }

    /**
     * Sets ParentId
     *
     * @param string|null $ParentId ParentId
     *
     * @return self
     */
    public function setParentId($ParentId)
    {
        if (is_null($ParentId)) {
            array_push($this->openAPINullablesSetToNull, 'ParentId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ParentId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ParentId'] = $ParentId;

        return $this;
    }

    /**
     * Gets MembershipDuration
     *
     * @return int|null
     */
    public function getMembershipDuration()
    {
        if (!isset($this->container['MembershipDuration']) || is_null($this->container['MembershipDuration'])) {
            return null;
        }
        return $this->container['MembershipDuration'];
    }

    /**
     * Sets MembershipDuration
     *
     * @param int|null $MembershipDuration MembershipDuration
     *
     * @return self
     */
    public function setMembershipDuration($MembershipDuration)
    {
        if (is_null($MembershipDuration)) {
            array_push($this->openAPINullablesSetToNull, 'MembershipDuration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MembershipDuration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MembershipDuration'] = $MembershipDuration;

        return $this;
    }

    /**
     * Gets Type
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceType|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceType|mixed|null $Type Type
     *
     * @return self
     */
    public function setType($Type)
    {
        if (is_null($Type)) {
            throw new \InvalidArgumentException('non-nullable Type cannot be null');
        }
        if (!$Type instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceType) {
            $Type = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceType($Type);
        }
        $this->container['Type'] = $Type;

        return $this;
    }

    /**
     * Gets SearchSize
     *
     * @return string|null
     */
    public function getSearchSize()
    {
        if (!isset($this->container['SearchSize']) || is_null($this->container['SearchSize'])) {
            return null;
        }
        return $this->container['SearchSize'];
    }

    /**
     * Sets SearchSize
     *
     * @param string|null $SearchSize SearchSize
     *
     * @return self
     */
    public function setSearchSize($SearchSize)
    {
        if (is_null($SearchSize)) {
            array_push($this->openAPINullablesSetToNull, 'SearchSize');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SearchSize', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SearchSize'] = $SearchSize;

        return $this;
    }

    /**
     * Gets AudienceNetworkSize
     *
     * @return string|null
     */
    public function getAudienceNetworkSize()
    {
        if (!isset($this->container['AudienceNetworkSize']) || is_null($this->container['AudienceNetworkSize'])) {
            return null;
        }
        return $this->container['AudienceNetworkSize'];
    }

    /**
     * Sets AudienceNetworkSize
     *
     * @param string|null $AudienceNetworkSize AudienceNetworkSize
     *
     * @return self
     */
    public function setAudienceNetworkSize($AudienceNetworkSize)
    {
        if (is_null($AudienceNetworkSize)) {
            array_push($this->openAPINullablesSetToNull, 'AudienceNetworkSize');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AudienceNetworkSize', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AudienceNetworkSize'] = $AudienceNetworkSize;

        return $this;
    }

    /**
     * Gets SupportedCampaignTypes
     *
     * @return string[]|null
     */
    public function getSupportedCampaignTypes()
    {
        if (!isset($this->container['SupportedCampaignTypes']) || is_null($this->container['SupportedCampaignTypes'])) {
            return null;
        }
        return $this->container['SupportedCampaignTypes'];
    }

    /**
     * Sets SupportedCampaignTypes
     *
     * @param string[]|null $SupportedCampaignTypes SupportedCampaignTypes
     *
     * @return self
     */
    public function setSupportedCampaignTypes($SupportedCampaignTypes)
    {
        if (is_null($SupportedCampaignTypes)) {
            array_push($this->openAPINullablesSetToNull, 'SupportedCampaignTypes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SupportedCampaignTypes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SupportedCampaignTypes'] = $SupportedCampaignTypes;

        return $this;
    }

    /**
     * Gets CustomerShare
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomerShare|null
     */
    public function getCustomerShare()
    {
        if (!isset($this->container['CustomerShare']) || is_null($this->container['CustomerShare'])) {
            return null;
        }
        return $this->container['CustomerShare'];
    }

    /**
     * Sets CustomerShare
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomerShare|null $CustomerShare CustomerShare
     *
     * @return self
     */
    public function setCustomerShare($CustomerShare)
    {
        if (is_null($CustomerShare)) {
            array_push($this->openAPINullablesSetToNull, 'CustomerShare');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CustomerShare', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CustomerShare'] = $CustomerShare;

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
     * Gets Rule
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\RemarketingRule|null
     */
    public function getRule()
    {
        if (!isset($this->container['Rule']) || is_null($this->container['Rule'])) {
            return null;
        }
        return $this->container['Rule'];
    }

    /**
     * Sets Rule
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\RemarketingRule|null $Rule Rule
     *
     * @return self
     */
    public function setRule($Rule)
    {
        if (is_null($Rule)) {
            array_push($this->openAPINullablesSetToNull, 'Rule');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Rule', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Rule'] = $Rule;

        return $this;
    }

    /**
     * Gets ProductAudienceType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductAudienceType|mixed|null
     */
    public function getProductAudienceType()
    {
        if (!isset($this->container['ProductAudienceType']) || is_null($this->container['ProductAudienceType'])) {
            return null;
        }
        if ((is_object($this->container['ProductAudienceType']) || is_string($this->container['ProductAudienceType'])) && method_exists($this->container['ProductAudienceType'], 'getValue')) {
            return $this->container['ProductAudienceType']->getValue();
        }
        return $this->container['ProductAudienceType'];
    }

    /**
     * Sets ProductAudienceType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductAudienceType|mixed|null $ProductAudienceType ProductAudienceType
     *
     * @return self
     */
    public function setProductAudienceType($ProductAudienceType)
    {
        if (is_null($ProductAudienceType)) {
            throw new \InvalidArgumentException('non-nullable ProductAudienceType cannot be null');
        }
        if (!$ProductAudienceType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductAudienceType) {
            $ProductAudienceType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductAudienceType($ProductAudienceType);
        }
        $this->container['ProductAudienceType'] = $ProductAudienceType;

        return $this;
    }

    /**
     * Gets SourceId
     *
     * @return string|null
     */
    public function getSourceId()
    {
        if (!isset($this->container['SourceId']) || is_null($this->container['SourceId'])) {
            return null;
        }
        return $this->container['SourceId'];
    }

    /**
     * Sets SourceId
     *
     * @param string|null $SourceId SourceId
     *
     * @return self
     */
    public function setSourceId($SourceId)
    {
        if (is_null($SourceId)) {
            throw new \InvalidArgumentException('non-nullable SourceId cannot be null');
        }
        $this->container['SourceId'] = $SourceId;

        return $this;
    }

    /**
     * Gets CombinationRules
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CombinationRule[]|null
     */
    public function getCombinationRules()
    {
        if (!isset($this->container['CombinationRules']) || is_null($this->container['CombinationRules'])) {
            return null;
        }
        return $this->container['CombinationRules'];
    }

    /**
     * Sets CombinationRules
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CombinationRule[]|null $CombinationRules CombinationRules
     *
     * @return self
     */
    public function setCombinationRules($CombinationRules)
    {
        if (is_null($CombinationRules)) {
            array_push($this->openAPINullablesSetToNull, 'CombinationRules');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CombinationRules', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CombinationRules'] = $CombinationRules;

        return $this;
    }

    /**
     * Gets EntityType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImpressionBasedEntityType|mixed|null
     */
    public function getEntityType()
    {
        if (!isset($this->container['EntityType']) || is_null($this->container['EntityType'])) {
            return null;
        }
        if ((is_object($this->container['EntityType']) || is_string($this->container['EntityType'])) && method_exists($this->container['EntityType'], 'getValue')) {
            return $this->container['EntityType']->getValue();
        }
        return $this->container['EntityType'];
    }

    /**
     * Sets EntityType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImpressionBasedEntityType|mixed|null $EntityType EntityType
     *
     * @return self
     */
    public function setEntityType($EntityType)
    {
        if (is_null($EntityType)) {
            throw new \InvalidArgumentException('non-nullable EntityType cannot be null');
        }
        if (!$EntityType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImpressionBasedEntityType) {
            $EntityType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImpressionBasedEntityType($EntityType);
        }
        $this->container['EntityType'] = $EntityType;

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
     * Gets CampaignIds
     *
     * @return string[]|null
     */
    public function getCampaignIds()
    {
        if (!isset($this->container['CampaignIds']) || is_null($this->container['CampaignIds'])) {
            return null;
        }
        return $this->container['CampaignIds'];
    }

    /**
     * Sets CampaignIds
     *
     * @param string[]|null $CampaignIds CampaignIds
     *
     * @return self
     */
    public function setCampaignIds($CampaignIds)
    {
        if (is_null($CampaignIds)) {
            array_push($this->openAPINullablesSetToNull, 'CampaignIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CampaignIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CampaignIds'] = $CampaignIds;

        return $this;
    }

    /**
     * Gets AdGroupIds
     *
     * @return string[]|null
     */
    public function getAdGroupIds()
    {
        if (!isset($this->container['AdGroupIds']) || is_null($this->container['AdGroupIds'])) {
            return null;
        }
        return $this->container['AdGroupIds'];
    }

    /**
     * Sets AdGroupIds
     *
     * @param string[]|null $AdGroupIds AdGroupIds
     *
     * @return self
     */
    public function setAdGroupIds($AdGroupIds)
    {
        if (is_null($AdGroupIds)) {
            array_push($this->openAPINullablesSetToNull, 'AdGroupIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdGroupIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdGroupIds'] = $AdGroupIds;

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
