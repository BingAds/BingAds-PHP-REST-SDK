<?php
/**
 * PromotionAdExtension
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

class PromotionAdExtension extends AdExtension implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PromotionAdExtension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Status' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus',
        'Scheduling' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Schedule',
        'DevicePreference' => 'string',
        'Id' => 'string',
        'Type' => 'string',
        'Version' => 'int',
        'PromotionItem' => 'string',
        'DiscountModifier' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionDiscountModifier',
        'PercentOff' => 'float',
        'MoneyAmountOff' => 'float',
        'PromotionCode' => 'string',
        'OrdersOverAmount' => 'float',
        'PromotionStartDate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Date',
        'PromotionEndDate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Date',
        'PromotionOccasion' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionOccasion',
        'Language' => 'string',
        'CurrencyCode' => 'string',
        'FinalAppUrls' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AppUrl[]',
        'FinalMobileUrls' => 'string[]',
        'FinalUrls' => 'string[]',
        'UrlCustomParameters' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CustomParameters',
        'TrackingUrlTemplate' => 'string',
        'FinalUrlSuffix' => 'string',
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
        'Status' => null,
        'Scheduling' => null,
        'DevicePreference' => 'int64',
        'Id' => 'int64',
        'Type' => null,
        'Version' => 'int32',
        'PromotionItem' => null,
        'DiscountModifier' => null,
        'PercentOff' => 'double',
        'MoneyAmountOff' => 'double',
        'PromotionCode' => null,
        'OrdersOverAmount' => 'double',
        'PromotionStartDate' => null,
        'PromotionEndDate' => null,
        'PromotionOccasion' => null,
        'Language' => null,
        'CurrencyCode' => null,
        'FinalAppUrls' => null,
        'FinalMobileUrls' => null,
        'FinalUrls' => null,
        'UrlCustomParameters' => null,
        'TrackingUrlTemplate' => null,
        'FinalUrlSuffix' => null,
        'ForwardCompatibilityMap' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Status' => false,
        'Scheduling' => true,
        'DevicePreference' => true,
        'Id' => true,
        'Type' => true,
        'Version' => true,
        'PromotionItem' => true,
        'DiscountModifier' => false,
        'PercentOff' => true,
        'MoneyAmountOff' => true,
        'PromotionCode' => true,
        'OrdersOverAmount' => true,
        'PromotionStartDate' => true,
        'PromotionEndDate' => true,
        'PromotionOccasion' => false,
        'Language' => true,
        'CurrencyCode' => true,
        'FinalAppUrls' => true,
        'FinalMobileUrls' => true,
        'FinalUrls' => true,
        'UrlCustomParameters' => true,
        'TrackingUrlTemplate' => true,
        'FinalUrlSuffix' => true,
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
        'Status' => 'Status',
        'Scheduling' => 'Scheduling',
        'DevicePreference' => 'DevicePreference',
        'Id' => 'Id',
        'Type' => 'Type',
        'Version' => 'Version',
        'PromotionItem' => 'PromotionItem',
        'DiscountModifier' => 'DiscountModifier',
        'PercentOff' => 'PercentOff',
        'MoneyAmountOff' => 'MoneyAmountOff',
        'PromotionCode' => 'PromotionCode',
        'OrdersOverAmount' => 'OrdersOverAmount',
        'PromotionStartDate' => 'PromotionStartDate',
        'PromotionEndDate' => 'PromotionEndDate',
        'PromotionOccasion' => 'PromotionOccasion',
        'Language' => 'Language',
        'CurrencyCode' => 'CurrencyCode',
        'FinalAppUrls' => 'FinalAppUrls',
        'FinalMobileUrls' => 'FinalMobileUrls',
        'FinalUrls' => 'FinalUrls',
        'UrlCustomParameters' => 'UrlCustomParameters',
        'TrackingUrlTemplate' => 'TrackingUrlTemplate',
        'FinalUrlSuffix' => 'FinalUrlSuffix',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Status' => 'setStatus',
        'Scheduling' => 'setScheduling',
        'DevicePreference' => 'setDevicePreference',
        'Id' => 'setId',
        'Type' => 'setType',
        'Version' => 'setVersion',
        'PromotionItem' => 'setPromotionItem',
        'DiscountModifier' => 'setDiscountModifier',
        'PercentOff' => 'setPercentOff',
        'MoneyAmountOff' => 'setMoneyAmountOff',
        'PromotionCode' => 'setPromotionCode',
        'OrdersOverAmount' => 'setOrdersOverAmount',
        'PromotionStartDate' => 'setPromotionStartDate',
        'PromotionEndDate' => 'setPromotionEndDate',
        'PromotionOccasion' => 'setPromotionOccasion',
        'Language' => 'setLanguage',
        'CurrencyCode' => 'setCurrencyCode',
        'FinalAppUrls' => 'setFinalAppUrls',
        'FinalMobileUrls' => 'setFinalMobileUrls',
        'FinalUrls' => 'setFinalUrls',
        'UrlCustomParameters' => 'setUrlCustomParameters',
        'TrackingUrlTemplate' => 'setTrackingUrlTemplate',
        'FinalUrlSuffix' => 'setFinalUrlSuffix',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Status' => 'getStatus',
        'Scheduling' => 'getScheduling',
        'DevicePreference' => 'getDevicePreference',
        'Id' => 'getId',
        'Type' => 'getType',
        'Version' => 'getVersion',
        'PromotionItem' => 'getPromotionItem',
        'DiscountModifier' => 'getDiscountModifier',
        'PercentOff' => 'getPercentOff',
        'MoneyAmountOff' => 'getMoneyAmountOff',
        'PromotionCode' => 'getPromotionCode',
        'OrdersOverAmount' => 'getOrdersOverAmount',
        'PromotionStartDate' => 'getPromotionStartDate',
        'PromotionEndDate' => 'getPromotionEndDate',
        'PromotionOccasion' => 'getPromotionOccasion',
        'Language' => 'getLanguage',
        'CurrencyCode' => 'getCurrencyCode',
        'FinalAppUrls' => 'getFinalAppUrls',
        'FinalMobileUrls' => 'getFinalMobileUrls',
        'FinalUrls' => 'getFinalUrls',
        'UrlCustomParameters' => 'getUrlCustomParameters',
        'TrackingUrlTemplate' => 'getTrackingUrlTemplate',
        'FinalUrlSuffix' => 'getFinalUrlSuffix',
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
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('Scheduling', $data ?? [], null);
        $this->setIfExists('DevicePreference', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], null);
        $this->setIfExists('Version', $data ?? [], null);
        $this->setIfExists('PromotionItem', $data ?? [], null);
        $this->setIfExists('DiscountModifier', $data ?? [], null);
        $this->setIfExists('PercentOff', $data ?? [], null);
        $this->setIfExists('MoneyAmountOff', $data ?? [], null);
        $this->setIfExists('PromotionCode', $data ?? [], null);
        $this->setIfExists('OrdersOverAmount', $data ?? [], null);
        $this->setIfExists('PromotionStartDate', $data ?? [], null);
        $this->setIfExists('PromotionEndDate', $data ?? [], null);
        $this->setIfExists('PromotionOccasion', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('FinalAppUrls', $data ?? [], null);
        $this->setIfExists('FinalMobileUrls', $data ?? [], null);
        $this->setIfExists('FinalUrls', $data ?? [], null);
        $this->setIfExists('UrlCustomParameters', $data ?? [], null);
        $this->setIfExists('TrackingUrlTemplate', $data ?? [], null);
        $this->setIfExists('FinalUrlSuffix', $data ?? [], null);
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
     * Gets Status
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus($Status);
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets Scheduling
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Schedule|null
     */
    public function getScheduling()
    {
        if (!isset($this->container['Scheduling']) || is_null($this->container['Scheduling'])) {
            return null;
        }
        return $this->container['Scheduling'];
    }

    /**
     * Sets Scheduling
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Schedule|null $Scheduling Scheduling
     *
     * @return self
     */
    public function setScheduling($Scheduling)
    {
        if (is_null($Scheduling)) {
            array_push($this->openAPINullablesSetToNull, 'Scheduling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Scheduling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Scheduling'] = $Scheduling;

        return $this;
    }

    /**
     * Gets DevicePreference
     *
     * @return string|null
     */
    public function getDevicePreference()
    {
        if (!isset($this->container['DevicePreference']) || is_null($this->container['DevicePreference'])) {
            return null;
        }
        return $this->container['DevicePreference'];
    }

    /**
     * Sets DevicePreference
     *
     * @param string|null $DevicePreference DevicePreference
     *
     * @return self
     */
    public function setDevicePreference($DevicePreference)
    {
        if (is_null($DevicePreference)) {
            array_push($this->openAPINullablesSetToNull, 'DevicePreference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DevicePreference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DevicePreference'] = $DevicePreference;

        return $this;
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
     * Gets Version
     *
     * @return int|null
     */
    public function getVersion()
    {
        if (!isset($this->container['Version']) || is_null($this->container['Version'])) {
            return null;
        }
        return $this->container['Version'];
    }

    /**
     * Sets Version
     *
     * @param int|null $Version Version
     *
     * @return self
     */
    public function setVersion($Version)
    {
        if (is_null($Version)) {
            array_push($this->openAPINullablesSetToNull, 'Version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Version'] = $Version;

        return $this;
    }

    /**
     * Gets PromotionItem
     *
     * @return string|null
     */
    public function getPromotionItem()
    {
        if (!isset($this->container['PromotionItem']) || is_null($this->container['PromotionItem'])) {
            return null;
        }
        return $this->container['PromotionItem'];
    }

    /**
     * Sets PromotionItem
     *
     * @param string|null $PromotionItem PromotionItem
     *
     * @return self
     */
    public function setPromotionItem($PromotionItem)
    {
        if (is_null($PromotionItem)) {
            array_push($this->openAPINullablesSetToNull, 'PromotionItem');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PromotionItem', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PromotionItem'] = $PromotionItem;

        return $this;
    }

    /**
     * Gets DiscountModifier
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionDiscountModifier|mixed|null
     */
    public function getDiscountModifier()
    {
        if (!isset($this->container['DiscountModifier']) || is_null($this->container['DiscountModifier'])) {
            return null;
        }
        if ((is_object($this->container['DiscountModifier']) || is_string($this->container['DiscountModifier'])) && method_exists($this->container['DiscountModifier'], 'getValue')) {
            return $this->container['DiscountModifier']->getValue();
        }
        return $this->container['DiscountModifier'];
    }

    /**
     * Sets DiscountModifier
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionDiscountModifier|mixed|null $DiscountModifier DiscountModifier
     *
     * @return self
     */
    public function setDiscountModifier($DiscountModifier)
    {
        if (is_null($DiscountModifier)) {
            throw new \InvalidArgumentException('non-nullable DiscountModifier cannot be null');
        }
        if (!$DiscountModifier instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionDiscountModifier) {
            $DiscountModifier = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionDiscountModifier($DiscountModifier);
        }
        $this->container['DiscountModifier'] = $DiscountModifier;

        return $this;
    }

    /**
     * Gets PercentOff
     *
     * @return float|null
     */
    public function getPercentOff()
    {
        if (!isset($this->container['PercentOff']) || is_null($this->container['PercentOff'])) {
            return null;
        }
        return $this->container['PercentOff'];
    }

    /**
     * Sets PercentOff
     *
     * @param float|null $PercentOff PercentOff
     *
     * @return self
     */
    public function setPercentOff($PercentOff)
    {
        if (is_null($PercentOff)) {
            array_push($this->openAPINullablesSetToNull, 'PercentOff');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PercentOff', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PercentOff'] = $PercentOff;

        return $this;
    }

    /**
     * Gets MoneyAmountOff
     *
     * @return float|null
     */
    public function getMoneyAmountOff()
    {
        if (!isset($this->container['MoneyAmountOff']) || is_null($this->container['MoneyAmountOff'])) {
            return null;
        }
        return $this->container['MoneyAmountOff'];
    }

    /**
     * Sets MoneyAmountOff
     *
     * @param float|null $MoneyAmountOff MoneyAmountOff
     *
     * @return self
     */
    public function setMoneyAmountOff($MoneyAmountOff)
    {
        if (is_null($MoneyAmountOff)) {
            array_push($this->openAPINullablesSetToNull, 'MoneyAmountOff');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MoneyAmountOff', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MoneyAmountOff'] = $MoneyAmountOff;

        return $this;
    }

    /**
     * Gets PromotionCode
     *
     * @return string|null
     */
    public function getPromotionCode()
    {
        if (!isset($this->container['PromotionCode']) || is_null($this->container['PromotionCode'])) {
            return null;
        }
        return $this->container['PromotionCode'];
    }

    /**
     * Sets PromotionCode
     *
     * @param string|null $PromotionCode PromotionCode
     *
     * @return self
     */
    public function setPromotionCode($PromotionCode)
    {
        if (is_null($PromotionCode)) {
            array_push($this->openAPINullablesSetToNull, 'PromotionCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PromotionCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PromotionCode'] = $PromotionCode;

        return $this;
    }

    /**
     * Gets OrdersOverAmount
     *
     * @return float|null
     */
    public function getOrdersOverAmount()
    {
        if (!isset($this->container['OrdersOverAmount']) || is_null($this->container['OrdersOverAmount'])) {
            return null;
        }
        return $this->container['OrdersOverAmount'];
    }

    /**
     * Sets OrdersOverAmount
     *
     * @param float|null $OrdersOverAmount OrdersOverAmount
     *
     * @return self
     */
    public function setOrdersOverAmount($OrdersOverAmount)
    {
        if (is_null($OrdersOverAmount)) {
            array_push($this->openAPINullablesSetToNull, 'OrdersOverAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('OrdersOverAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['OrdersOverAmount'] = $OrdersOverAmount;

        return $this;
    }

    /**
     * Gets PromotionStartDate
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null
     */
    public function getPromotionStartDate()
    {
        if (!isset($this->container['PromotionStartDate']) || is_null($this->container['PromotionStartDate'])) {
            return null;
        }
        return $this->container['PromotionStartDate'];
    }

    /**
     * Sets PromotionStartDate
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null $PromotionStartDate PromotionStartDate
     *
     * @return self
     */
    public function setPromotionStartDate($PromotionStartDate)
    {
        if (is_null($PromotionStartDate)) {
            array_push($this->openAPINullablesSetToNull, 'PromotionStartDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PromotionStartDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PromotionStartDate'] = $PromotionStartDate;

        return $this;
    }

    /**
     * Gets PromotionEndDate
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null
     */
    public function getPromotionEndDate()
    {
        if (!isset($this->container['PromotionEndDate']) || is_null($this->container['PromotionEndDate'])) {
            return null;
        }
        return $this->container['PromotionEndDate'];
    }

    /**
     * Sets PromotionEndDate
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null $PromotionEndDate PromotionEndDate
     *
     * @return self
     */
    public function setPromotionEndDate($PromotionEndDate)
    {
        if (is_null($PromotionEndDate)) {
            array_push($this->openAPINullablesSetToNull, 'PromotionEndDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PromotionEndDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PromotionEndDate'] = $PromotionEndDate;

        return $this;
    }

    /**
     * Gets PromotionOccasion
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionOccasion|mixed|null
     */
    public function getPromotionOccasion()
    {
        if (!isset($this->container['PromotionOccasion']) || is_null($this->container['PromotionOccasion'])) {
            return null;
        }
        if ((is_object($this->container['PromotionOccasion']) || is_string($this->container['PromotionOccasion'])) && method_exists($this->container['PromotionOccasion'], 'getValue')) {
            return $this->container['PromotionOccasion']->getValue();
        }
        return $this->container['PromotionOccasion'];
    }

    /**
     * Sets PromotionOccasion
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionOccasion|mixed|null $PromotionOccasion PromotionOccasion
     *
     * @return self
     */
    public function setPromotionOccasion($PromotionOccasion)
    {
        if (is_null($PromotionOccasion)) {
            throw new \InvalidArgumentException('non-nullable PromotionOccasion cannot be null');
        }
        if (!$PromotionOccasion instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionOccasion) {
            $PromotionOccasion = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\PromotionOccasion($PromotionOccasion);
        }
        $this->container['PromotionOccasion'] = $PromotionOccasion;

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
     * Gets CurrencyCode
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        if (!isset($this->container['CurrencyCode']) || is_null($this->container['CurrencyCode'])) {
            return null;
        }
        return $this->container['CurrencyCode'];
    }

    /**
     * Sets CurrencyCode
     *
     * @param string|null $CurrencyCode CurrencyCode
     *
     * @return self
     */
    public function setCurrencyCode($CurrencyCode)
    {
        if (is_null($CurrencyCode)) {
            array_push($this->openAPINullablesSetToNull, 'CurrencyCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CurrencyCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CurrencyCode'] = $CurrencyCode;

        return $this;
    }

    /**
     * Gets FinalAppUrls
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AppUrl[]|null
     */
    public function getFinalAppUrls()
    {
        if (!isset($this->container['FinalAppUrls']) || is_null($this->container['FinalAppUrls'])) {
            return null;
        }
        return $this->container['FinalAppUrls'];
    }

    /**
     * Sets FinalAppUrls
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AppUrl[]|null $FinalAppUrls FinalAppUrls
     *
     * @return self
     */
    public function setFinalAppUrls($FinalAppUrls)
    {
        if (is_null($FinalAppUrls)) {
            array_push($this->openAPINullablesSetToNull, 'FinalAppUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FinalAppUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FinalAppUrls'] = $FinalAppUrls;

        return $this;
    }

    /**
     * Gets FinalMobileUrls
     *
     * @return string[]|null
     */
    public function getFinalMobileUrls()
    {
        if (!isset($this->container['FinalMobileUrls']) || is_null($this->container['FinalMobileUrls'])) {
            return null;
        }
        return $this->container['FinalMobileUrls'];
    }

    /**
     * Sets FinalMobileUrls
     *
     * @param string[]|null $FinalMobileUrls FinalMobileUrls
     *
     * @return self
     */
    public function setFinalMobileUrls($FinalMobileUrls)
    {
        if (is_null($FinalMobileUrls)) {
            array_push($this->openAPINullablesSetToNull, 'FinalMobileUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FinalMobileUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FinalMobileUrls'] = $FinalMobileUrls;

        return $this;
    }

    /**
     * Gets FinalUrls
     *
     * @return string[]|null
     */
    public function getFinalUrls()
    {
        if (!isset($this->container['FinalUrls']) || is_null($this->container['FinalUrls'])) {
            return null;
        }
        return $this->container['FinalUrls'];
    }

    /**
     * Sets FinalUrls
     *
     * @param string[]|null $FinalUrls FinalUrls
     *
     * @return self
     */
    public function setFinalUrls($FinalUrls)
    {
        if (is_null($FinalUrls)) {
            array_push($this->openAPINullablesSetToNull, 'FinalUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FinalUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FinalUrls'] = $FinalUrls;

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
