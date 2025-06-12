<?php
/**
 * BiddingScheme
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

class BiddingScheme implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'Type';

    /**
     * Associative array for mapping discriminator values to model class names
     *
     * @var string[]
     */
    public const MAPPINGS = [
        'CommissionBiddingScheme' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\CommissionBiddingScheme',
        'CostPerSale' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\CostPerSaleBiddingScheme',
        'EnhancedCpc' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\EnhancedCpcBiddingScheme',
        'InheritFromParent' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\InheritFromParentBiddingScheme',
        'ManualCpaBiddingScheme' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ManualCpaBiddingScheme',
        'ManualCpc' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ManualCpcBiddingScheme',
        'ManualCpm' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ManualCpmBiddingScheme',
        'ManualCpv' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ManualCpvBiddingScheme',
        'MaxClicks' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\MaxClicksBiddingScheme',
        'MaxConversionValueBiddingScheme' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\MaxConversionValueBiddingScheme',
        'MaxConversions' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\MaxConversionsBiddingScheme',
        'MaxRoasBiddingScheme' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\MaxRoasBiddingScheme',
        'PercentCpcBiddingScheme' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\PercentCpcBiddingScheme',
        'TargetCpa' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\TargetCpaBiddingScheme',
        'TargetImpressionShareBiddingScheme' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\TargetImpressionShareBiddingScheme',
        'TargetRoasBiddingScheme' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\TargetRoasBiddingScheme',
    ];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BiddingScheme';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Type' => 'string',
        'MaxCpc' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid',
        'TargetCpa' => 'float',
        'ManualCpc' => 'float',
        'InheritedBidStrategyType' => 'string',
        'TargetRoas' => 'float',
        'TargetImpressionShare' => 'float',
        'TargetAdPosition' => 'string',
        'MaxPercentCpc' => 'float',
        'CommissionRate' => 'float',
        'ManualCpi' => 'float',
        'TargetCostPerSale' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Type' => null,
        'MaxCpc' => null,
        'TargetCpa' => 'double',
        'ManualCpc' => 'double',
        'InheritedBidStrategyType' => null,
        'TargetRoas' => 'double',
        'TargetImpressionShare' => 'double',
        'TargetAdPosition' => null,
        'MaxPercentCpc' => 'double',
        'CommissionRate' => 'double',
        'ManualCpi' => 'double',
        'TargetCostPerSale' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Type' => true,
        'MaxCpc' => true,
        'TargetCpa' => true,
        'ManualCpc' => true,
        'InheritedBidStrategyType' => true,
        'TargetRoas' => true,
        'TargetImpressionShare' => true,
        'TargetAdPosition' => true,
        'MaxPercentCpc' => true,
        'CommissionRate' => true,
        'ManualCpi' => true,
        'TargetCostPerSale' => true
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
        'Type' => 'Type',
        'MaxCpc' => 'MaxCpc',
        'TargetCpa' => 'TargetCpa',
        'ManualCpc' => 'ManualCpc',
        'InheritedBidStrategyType' => 'InheritedBidStrategyType',
        'TargetRoas' => 'TargetRoas',
        'TargetImpressionShare' => 'TargetImpressionShare',
        'TargetAdPosition' => 'TargetAdPosition',
        'MaxPercentCpc' => 'MaxPercentCpc',
        'CommissionRate' => 'CommissionRate',
        'ManualCpi' => 'ManualCpi',
        'TargetCostPerSale' => 'TargetCostPerSale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Type' => 'setType',
        'MaxCpc' => 'setMaxCpc',
        'TargetCpa' => 'setTargetCpa',
        'ManualCpc' => 'setManualCpc',
        'InheritedBidStrategyType' => 'setInheritedBidStrategyType',
        'TargetRoas' => 'setTargetRoas',
        'TargetImpressionShare' => 'setTargetImpressionShare',
        'TargetAdPosition' => 'setTargetAdPosition',
        'MaxPercentCpc' => 'setMaxPercentCpc',
        'CommissionRate' => 'setCommissionRate',
        'ManualCpi' => 'setManualCpi',
        'TargetCostPerSale' => 'setTargetCostPerSale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Type' => 'getType',
        'MaxCpc' => 'getMaxCpc',
        'TargetCpa' => 'getTargetCpa',
        'ManualCpc' => 'getManualCpc',
        'InheritedBidStrategyType' => 'getInheritedBidStrategyType',
        'TargetRoas' => 'getTargetRoas',
        'TargetImpressionShare' => 'getTargetImpressionShare',
        'TargetAdPosition' => 'getTargetAdPosition',
        'MaxPercentCpc' => 'getMaxPercentCpc',
        'CommissionRate' => 'getCommissionRate',
        'ManualCpi' => 'getManualCpi',
        'TargetCostPerSale' => 'getTargetCostPerSale'
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
        $this->setIfExists('Type', $data ?? [], 'CostPerSale');
        $this->setIfExists('MaxCpc', $data ?? [], null);
        $this->setIfExists('TargetCpa', $data ?? [], null);
        $this->setIfExists('ManualCpc', $data ?? [], null);
        $this->setIfExists('InheritedBidStrategyType', $data ?? [], null);
        $this->setIfExists('TargetRoas', $data ?? [], null);
        $this->setIfExists('TargetImpressionShare', $data ?? [], null);
        $this->setIfExists('TargetAdPosition', $data ?? [], null);
        $this->setIfExists('MaxPercentCpc', $data ?? [], null);
        $this->setIfExists('CommissionRate', $data ?? [], null);
        $this->setIfExists('ManualCpi', $data ?? [], null);
        $this->setIfExists('TargetCostPerSale', $data ?? [], null);

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
     * Gets MaxCpc
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid|null
     */
    public function getMaxCpc()
    {
        if (!isset($this->container['MaxCpc']) || is_null($this->container['MaxCpc'])) {
            return null;
        }
        return $this->container['MaxCpc'];
    }

    /**
     * Sets MaxCpc
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Bid|null $MaxCpc MaxCpc
     *
     * @return self
     */
    public function setMaxCpc($MaxCpc)
    {
        if (is_null($MaxCpc)) {
            array_push($this->openAPINullablesSetToNull, 'MaxCpc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MaxCpc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MaxCpc'] = $MaxCpc;

        return $this;
    }

    /**
     * Gets TargetCpa
     *
     * @return float|null
     */
    public function getTargetCpa()
    {
        if (!isset($this->container['TargetCpa']) || is_null($this->container['TargetCpa'])) {
            return null;
        }
        return $this->container['TargetCpa'];
    }

    /**
     * Sets TargetCpa
     *
     * @param float|null $TargetCpa TargetCpa
     *
     * @return self
     */
    public function setTargetCpa($TargetCpa)
    {
        if (is_null($TargetCpa)) {
            array_push($this->openAPINullablesSetToNull, 'TargetCpa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetCpa', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetCpa'] = $TargetCpa;

        return $this;
    }

    /**
     * Gets ManualCpc
     *
     * @return float|null
     */
    public function getManualCpc()
    {
        if (!isset($this->container['ManualCpc']) || is_null($this->container['ManualCpc'])) {
            return null;
        }
        return $this->container['ManualCpc'];
    }

    /**
     * Sets ManualCpc
     *
     * @param float|null $ManualCpc ManualCpc
     *
     * @return self
     */
    public function setManualCpc($ManualCpc)
    {
        if (is_null($ManualCpc)) {
            array_push($this->openAPINullablesSetToNull, 'ManualCpc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ManualCpc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ManualCpc'] = $ManualCpc;

        return $this;
    }

    /**
     * Gets InheritedBidStrategyType
     *
     * @return string|null
     */
    public function getInheritedBidStrategyType()
    {
        if (!isset($this->container['InheritedBidStrategyType']) || is_null($this->container['InheritedBidStrategyType'])) {
            return null;
        }
        return $this->container['InheritedBidStrategyType'];
    }

    /**
     * Sets InheritedBidStrategyType
     *
     * @param string|null $InheritedBidStrategyType InheritedBidStrategyType
     *
     * @return self
     */
    public function setInheritedBidStrategyType($InheritedBidStrategyType)
    {
        if (is_null($InheritedBidStrategyType)) {
            array_push($this->openAPINullablesSetToNull, 'InheritedBidStrategyType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('InheritedBidStrategyType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['InheritedBidStrategyType'] = $InheritedBidStrategyType;

        return $this;
    }

    /**
     * Gets TargetRoas
     *
     * @return float|null
     */
    public function getTargetRoas()
    {
        if (!isset($this->container['TargetRoas']) || is_null($this->container['TargetRoas'])) {
            return null;
        }
        return $this->container['TargetRoas'];
    }

    /**
     * Sets TargetRoas
     *
     * @param float|null $TargetRoas TargetRoas
     *
     * @return self
     */
    public function setTargetRoas($TargetRoas)
    {
        if (is_null($TargetRoas)) {
            array_push($this->openAPINullablesSetToNull, 'TargetRoas');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetRoas', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetRoas'] = $TargetRoas;

        return $this;
    }

    /**
     * Gets TargetImpressionShare
     *
     * @return float|null
     */
    public function getTargetImpressionShare()
    {
        if (!isset($this->container['TargetImpressionShare']) || is_null($this->container['TargetImpressionShare'])) {
            return null;
        }
        return $this->container['TargetImpressionShare'];
    }

    /**
     * Sets TargetImpressionShare
     *
     * @param float|null $TargetImpressionShare TargetImpressionShare
     *
     * @return self
     */
    public function setTargetImpressionShare($TargetImpressionShare)
    {
        if (is_null($TargetImpressionShare)) {
            array_push($this->openAPINullablesSetToNull, 'TargetImpressionShare');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetImpressionShare', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetImpressionShare'] = $TargetImpressionShare;

        return $this;
    }

    /**
     * Gets TargetAdPosition
     *
     * @return string|null
     */
    public function getTargetAdPosition()
    {
        if (!isset($this->container['TargetAdPosition']) || is_null($this->container['TargetAdPosition'])) {
            return null;
        }
        return $this->container['TargetAdPosition'];
    }

    /**
     * Sets TargetAdPosition
     *
     * @param string|null $TargetAdPosition TargetAdPosition
     *
     * @return self
     */
    public function setTargetAdPosition($TargetAdPosition)
    {
        if (is_null($TargetAdPosition)) {
            array_push($this->openAPINullablesSetToNull, 'TargetAdPosition');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetAdPosition', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetAdPosition'] = $TargetAdPosition;

        return $this;
    }

    /**
     * Gets MaxPercentCpc
     *
     * @return float|null
     */
    public function getMaxPercentCpc()
    {
        if (!isset($this->container['MaxPercentCpc']) || is_null($this->container['MaxPercentCpc'])) {
            return null;
        }
        return $this->container['MaxPercentCpc'];
    }

    /**
     * Sets MaxPercentCpc
     *
     * @param float|null $MaxPercentCpc MaxPercentCpc
     *
     * @return self
     */
    public function setMaxPercentCpc($MaxPercentCpc)
    {
        if (is_null($MaxPercentCpc)) {
            array_push($this->openAPINullablesSetToNull, 'MaxPercentCpc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MaxPercentCpc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MaxPercentCpc'] = $MaxPercentCpc;

        return $this;
    }

    /**
     * Gets CommissionRate
     *
     * @return float|null
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
     * @param float|null $CommissionRate CommissionRate
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
     * Gets ManualCpi
     *
     * @return float|null
     */
    public function getManualCpi()
    {
        if (!isset($this->container['ManualCpi']) || is_null($this->container['ManualCpi'])) {
            return null;
        }
        return $this->container['ManualCpi'];
    }

    /**
     * Sets ManualCpi
     *
     * @param float|null $ManualCpi ManualCpi
     *
     * @return self
     */
    public function setManualCpi($ManualCpi)
    {
        if (is_null($ManualCpi)) {
            array_push($this->openAPINullablesSetToNull, 'ManualCpi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ManualCpi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ManualCpi'] = $ManualCpi;

        return $this;
    }

    /**
     * Gets TargetCostPerSale
     *
     * @return float|null
     */
    public function getTargetCostPerSale()
    {
        if (!isset($this->container['TargetCostPerSale']) || is_null($this->container['TargetCostPerSale'])) {
            return null;
        }
        return $this->container['TargetCostPerSale'];
    }

    /**
     * Sets TargetCostPerSale
     *
     * @param float|null $TargetCostPerSale TargetCostPerSale
     *
     * @return self
     */
    public function setTargetCostPerSale($TargetCostPerSale)
    {
        if (is_null($TargetCostPerSale)) {
            array_push($this->openAPINullablesSetToNull, 'TargetCostPerSale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetCostPerSale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetCostPerSale'] = $TargetCostPerSale;

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
