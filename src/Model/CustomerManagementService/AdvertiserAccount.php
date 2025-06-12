<?php
/**
 * AdvertiserAccount
 * CustomerManagementService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CustomerManagementService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CustomerManagementService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class AdvertiserAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AdvertiserAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'BillToCustomerId' => 'string',
        'CurrencyCode' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\CurrencyCode',
        'AccountFinancialStatus' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountFinancialStatus',
        'Id' => 'string',
        'Language' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\LanguageType',
        'LastModifiedByUserId' => 'string',
        'LastModifiedTime' => '\DateTime',
        'Name' => 'string',
        'Number' => 'string',
        'ParentCustomerId' => 'string',
        'PaymentMethodId' => 'string',
        'PaymentMethodType' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\PaymentMethodType',
        'PrimaryUserId' => 'string',
        'AccountLifeCycleStatus' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountLifeCycleStatus',
        'TimeStamp' => 'string',
        'TimeZone' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\TimeZoneType',
        'PauseReason' => 'int',
        'ForwardCompatibilityMap' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValuePairOfstringAndstring[]',
        'LinkedAgencies' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerInfo[]',
        'SalesHouseCustomerId' => 'string',
        'TaxInformation' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValuePairOfstringAndstring[]',
        'BackUpPaymentInstrumentId' => 'string',
        'BillingThresholdAmount' => 'float',
        'BusinessAddress' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\Address',
        'AutoTagType' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AutoTagType',
        'SoldToPaymentInstrumentId' => 'string',
        'TaxCertificate' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountTaxCertificate',
        'AccountMode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'BillToCustomerId' => 'int64',
        'CurrencyCode' => null,
        'AccountFinancialStatus' => null,
        'Id' => 'int64',
        'Language' => null,
        'LastModifiedByUserId' => 'int64',
        'LastModifiedTime' => 'date-time',
        'Name' => null,
        'Number' => null,
        'ParentCustomerId' => 'int64',
        'PaymentMethodId' => 'int64',
        'PaymentMethodType' => null,
        'PrimaryUserId' => 'int64',
        'AccountLifeCycleStatus' => null,
        'TimeStamp' => 'byte',
        'TimeZone' => null,
        'PauseReason' => 'uint8',
        'ForwardCompatibilityMap' => null,
        'LinkedAgencies' => null,
        'SalesHouseCustomerId' => 'int64',
        'TaxInformation' => null,
        'BackUpPaymentInstrumentId' => 'int64',
        'BillingThresholdAmount' => 'double',
        'BusinessAddress' => null,
        'AutoTagType' => null,
        'SoldToPaymentInstrumentId' => 'int64',
        'TaxCertificate' => null,
        'AccountMode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'BillToCustomerId' => true,
        'CurrencyCode' => false,
        'AccountFinancialStatus' => false,
        'Id' => true,
        'Language' => false,
        'LastModifiedByUserId' => true,
        'LastModifiedTime' => true,
        'Name' => true,
        'Number' => true,
        'ParentCustomerId' => false,
        'PaymentMethodId' => true,
        'PaymentMethodType' => false,
        'PrimaryUserId' => true,
        'AccountLifeCycleStatus' => false,
        'TimeStamp' => true,
        'TimeZone' => false,
        'PauseReason' => true,
        'ForwardCompatibilityMap' => true,
        'LinkedAgencies' => true,
        'SalesHouseCustomerId' => true,
        'TaxInformation' => true,
        'BackUpPaymentInstrumentId' => true,
        'BillingThresholdAmount' => true,
        'BusinessAddress' => true,
        'AutoTagType' => false,
        'SoldToPaymentInstrumentId' => true,
        'TaxCertificate' => true,
        'AccountMode' => true
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
        'BillToCustomerId' => 'BillToCustomerId',
        'CurrencyCode' => 'CurrencyCode',
        'AccountFinancialStatus' => 'AccountFinancialStatus',
        'Id' => 'Id',
        'Language' => 'Language',
        'LastModifiedByUserId' => 'LastModifiedByUserId',
        'LastModifiedTime' => 'LastModifiedTime',
        'Name' => 'Name',
        'Number' => 'Number',
        'ParentCustomerId' => 'ParentCustomerId',
        'PaymentMethodId' => 'PaymentMethodId',
        'PaymentMethodType' => 'PaymentMethodType',
        'PrimaryUserId' => 'PrimaryUserId',
        'AccountLifeCycleStatus' => 'AccountLifeCycleStatus',
        'TimeStamp' => 'TimeStamp',
        'TimeZone' => 'TimeZone',
        'PauseReason' => 'PauseReason',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap',
        'LinkedAgencies' => 'LinkedAgencies',
        'SalesHouseCustomerId' => 'SalesHouseCustomerId',
        'TaxInformation' => 'TaxInformation',
        'BackUpPaymentInstrumentId' => 'BackUpPaymentInstrumentId',
        'BillingThresholdAmount' => 'BillingThresholdAmount',
        'BusinessAddress' => 'BusinessAddress',
        'AutoTagType' => 'AutoTagType',
        'SoldToPaymentInstrumentId' => 'SoldToPaymentInstrumentId',
        'TaxCertificate' => 'TaxCertificate',
        'AccountMode' => 'AccountMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'BillToCustomerId' => 'setBillToCustomerId',
        'CurrencyCode' => 'setCurrencyCode',
        'AccountFinancialStatus' => 'setAccountFinancialStatus',
        'Id' => 'setId',
        'Language' => 'setLanguage',
        'LastModifiedByUserId' => 'setLastModifiedByUserId',
        'LastModifiedTime' => 'setLastModifiedTime',
        'Name' => 'setName',
        'Number' => 'setNumber',
        'ParentCustomerId' => 'setParentCustomerId',
        'PaymentMethodId' => 'setPaymentMethodId',
        'PaymentMethodType' => 'setPaymentMethodType',
        'PrimaryUserId' => 'setPrimaryUserId',
        'AccountLifeCycleStatus' => 'setAccountLifeCycleStatus',
        'TimeStamp' => 'setTimeStamp',
        'TimeZone' => 'setTimeZone',
        'PauseReason' => 'setPauseReason',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap',
        'LinkedAgencies' => 'setLinkedAgencies',
        'SalesHouseCustomerId' => 'setSalesHouseCustomerId',
        'TaxInformation' => 'setTaxInformation',
        'BackUpPaymentInstrumentId' => 'setBackUpPaymentInstrumentId',
        'BillingThresholdAmount' => 'setBillingThresholdAmount',
        'BusinessAddress' => 'setBusinessAddress',
        'AutoTagType' => 'setAutoTagType',
        'SoldToPaymentInstrumentId' => 'setSoldToPaymentInstrumentId',
        'TaxCertificate' => 'setTaxCertificate',
        'AccountMode' => 'setAccountMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'BillToCustomerId' => 'getBillToCustomerId',
        'CurrencyCode' => 'getCurrencyCode',
        'AccountFinancialStatus' => 'getAccountFinancialStatus',
        'Id' => 'getId',
        'Language' => 'getLanguage',
        'LastModifiedByUserId' => 'getLastModifiedByUserId',
        'LastModifiedTime' => 'getLastModifiedTime',
        'Name' => 'getName',
        'Number' => 'getNumber',
        'ParentCustomerId' => 'getParentCustomerId',
        'PaymentMethodId' => 'getPaymentMethodId',
        'PaymentMethodType' => 'getPaymentMethodType',
        'PrimaryUserId' => 'getPrimaryUserId',
        'AccountLifeCycleStatus' => 'getAccountLifeCycleStatus',
        'TimeStamp' => 'getTimeStamp',
        'TimeZone' => 'getTimeZone',
        'PauseReason' => 'getPauseReason',
        'ForwardCompatibilityMap' => 'getForwardCompatibilityMap',
        'LinkedAgencies' => 'getLinkedAgencies',
        'SalesHouseCustomerId' => 'getSalesHouseCustomerId',
        'TaxInformation' => 'getTaxInformation',
        'BackUpPaymentInstrumentId' => 'getBackUpPaymentInstrumentId',
        'BillingThresholdAmount' => 'getBillingThresholdAmount',
        'BusinessAddress' => 'getBusinessAddress',
        'AutoTagType' => 'getAutoTagType',
        'SoldToPaymentInstrumentId' => 'getSoldToPaymentInstrumentId',
        'TaxCertificate' => 'getTaxCertificate',
        'AccountMode' => 'getAccountMode'
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
        $this->setIfExists('BillToCustomerId', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('AccountFinancialStatus', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('LastModifiedByUserId', $data ?? [], null);
        $this->setIfExists('LastModifiedTime', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('Number', $data ?? [], null);
        $this->setIfExists('ParentCustomerId', $data ?? [], null);
        $this->setIfExists('PaymentMethodId', $data ?? [], null);
        $this->setIfExists('PaymentMethodType', $data ?? [], null);
        $this->setIfExists('PrimaryUserId', $data ?? [], null);
        $this->setIfExists('AccountLifeCycleStatus', $data ?? [], null);
        $this->setIfExists('TimeStamp', $data ?? [], null);
        $this->setIfExists('TimeZone', $data ?? [], null);
        $this->setIfExists('PauseReason', $data ?? [], null);
        $this->setIfExists('ForwardCompatibilityMap', $data ?? [], null);
        $this->setIfExists('LinkedAgencies', $data ?? [], null);
        $this->setIfExists('SalesHouseCustomerId', $data ?? [], null);
        $this->setIfExists('TaxInformation', $data ?? [], null);
        $this->setIfExists('BackUpPaymentInstrumentId', $data ?? [], null);
        $this->setIfExists('BillingThresholdAmount', $data ?? [], null);
        $this->setIfExists('BusinessAddress', $data ?? [], null);
        $this->setIfExists('AutoTagType', $data ?? [], null);
        $this->setIfExists('SoldToPaymentInstrumentId', $data ?? [], null);
        $this->setIfExists('TaxCertificate', $data ?? [], null);
        $this->setIfExists('AccountMode', $data ?? [], null);
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
     * Gets BillToCustomerId
     *
     * @return string|null
     */
    public function getBillToCustomerId()
    {
        if (!isset($this->container['BillToCustomerId']) || is_null($this->container['BillToCustomerId'])) {
            return null;
        }
        return $this->container['BillToCustomerId'];
    }

    /**
     * Sets BillToCustomerId
     *
     * @param string|null $BillToCustomerId BillToCustomerId
     *
     * @return self
     */
    public function setBillToCustomerId($BillToCustomerId)
    {
        if (is_null($BillToCustomerId)) {
            array_push($this->openAPINullablesSetToNull, 'BillToCustomerId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BillToCustomerId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BillToCustomerId'] = $BillToCustomerId;

        return $this;
    }

    /**
     * Gets CurrencyCode
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\CurrencyCode|mixed|null
     */
    public function getCurrencyCode()
    {
        if (!isset($this->container['CurrencyCode']) || is_null($this->container['CurrencyCode'])) {
            return null;
        }
        if ((is_object($this->container['CurrencyCode']) || is_string($this->container['CurrencyCode'])) && method_exists($this->container['CurrencyCode'], 'getValue')) {
            return $this->container['CurrencyCode']->getValue();
        }
        return $this->container['CurrencyCode'];
    }

    /**
     * Sets CurrencyCode
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\CurrencyCode|mixed|null $CurrencyCode CurrencyCode
     *
     * @return self
     */
    public function setCurrencyCode($CurrencyCode)
    {
        if (is_null($CurrencyCode)) {
            throw new \InvalidArgumentException('non-nullable CurrencyCode cannot be null');
        }
        if (!$CurrencyCode instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\CurrencyCode) {
            $CurrencyCode = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\CurrencyCode($CurrencyCode);
        }
        $this->container['CurrencyCode'] = $CurrencyCode;

        return $this;
    }

    /**
     * Gets AccountFinancialStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountFinancialStatus|mixed|null
     */
    public function getAccountFinancialStatus()
    {
        if (!isset($this->container['AccountFinancialStatus']) || is_null($this->container['AccountFinancialStatus'])) {
            return null;
        }
        if ((is_object($this->container['AccountFinancialStatus']) || is_string($this->container['AccountFinancialStatus'])) && method_exists($this->container['AccountFinancialStatus'], 'getValue')) {
            return $this->container['AccountFinancialStatus']->getValue();
        }
        return $this->container['AccountFinancialStatus'];
    }

    /**
     * Sets AccountFinancialStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountFinancialStatus|mixed|null $AccountFinancialStatus AccountFinancialStatus
     *
     * @return self
     */
    public function setAccountFinancialStatus($AccountFinancialStatus)
    {
        if (is_null($AccountFinancialStatus)) {
            throw new \InvalidArgumentException('non-nullable AccountFinancialStatus cannot be null');
        }
        if (!$AccountFinancialStatus instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountFinancialStatus) {
            $AccountFinancialStatus = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountFinancialStatus($AccountFinancialStatus);
        }
        $this->container['AccountFinancialStatus'] = $AccountFinancialStatus;

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
     * Gets Language
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\LanguageType|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\LanguageType|mixed|null $Language Language
     *
     * @return self
     */
    public function setLanguage($Language)
    {
        if (is_null($Language)) {
            throw new \InvalidArgumentException('non-nullable Language cannot be null');
        }
        if (!$Language instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\LanguageType) {
            $Language = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\LanguageType($Language);
        }
        $this->container['Language'] = $Language;

        return $this;
    }

    /**
     * Gets LastModifiedByUserId
     *
     * @return string|null
     */
    public function getLastModifiedByUserId()
    {
        if (!isset($this->container['LastModifiedByUserId']) || is_null($this->container['LastModifiedByUserId'])) {
            return null;
        }
        return $this->container['LastModifiedByUserId'];
    }

    /**
     * Sets LastModifiedByUserId
     *
     * @param string|null $LastModifiedByUserId LastModifiedByUserId
     *
     * @return self
     */
    public function setLastModifiedByUserId($LastModifiedByUserId)
    {
        if (is_null($LastModifiedByUserId)) {
            array_push($this->openAPINullablesSetToNull, 'LastModifiedByUserId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LastModifiedByUserId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LastModifiedByUserId'] = $LastModifiedByUserId;

        return $this;
    }

    /**
     * Gets LastModifiedTime
     *
     * @return \DateTime|null
     */
    public function getLastModifiedTime()
    {
        if (!isset($this->container['LastModifiedTime']) || is_null($this->container['LastModifiedTime'])) {
            return null;
        }
        return $this->container['LastModifiedTime'];
    }

    /**
     * Sets LastModifiedTime
     *
     * @param \DateTime|null $LastModifiedTime LastModifiedTime
     *
     * @return self
     */
    public function setLastModifiedTime($LastModifiedTime)
    {
        if (is_null($LastModifiedTime)) {
            array_push($this->openAPINullablesSetToNull, 'LastModifiedTime');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LastModifiedTime', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LastModifiedTime'] = $LastModifiedTime;

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
     * Gets Number
     *
     * @return string|null
     */
    public function getNumber()
    {
        if (!isset($this->container['Number']) || is_null($this->container['Number'])) {
            return null;
        }
        return $this->container['Number'];
    }

    /**
     * Sets Number
     *
     * @param string|null $Number Number
     *
     * @return self
     */
    public function setNumber($Number)
    {
        if (is_null($Number)) {
            array_push($this->openAPINullablesSetToNull, 'Number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Number'] = $Number;

        return $this;
    }

    /**
     * Gets ParentCustomerId
     *
     * @return string|null
     */
    public function getParentCustomerId()
    {
        if (!isset($this->container['ParentCustomerId']) || is_null($this->container['ParentCustomerId'])) {
            return null;
        }
        return $this->container['ParentCustomerId'];
    }

    /**
     * Sets ParentCustomerId
     *
     * @param string|null $ParentCustomerId ParentCustomerId
     *
     * @return self
     */
    public function setParentCustomerId($ParentCustomerId)
    {
        if (is_null($ParentCustomerId)) {
            throw new \InvalidArgumentException('non-nullable ParentCustomerId cannot be null');
        }
        $this->container['ParentCustomerId'] = $ParentCustomerId;

        return $this;
    }

    /**
     * Gets PaymentMethodId
     *
     * @return string|null
     */
    public function getPaymentMethodId()
    {
        if (!isset($this->container['PaymentMethodId']) || is_null($this->container['PaymentMethodId'])) {
            return null;
        }
        return $this->container['PaymentMethodId'];
    }

    /**
     * Sets PaymentMethodId
     *
     * @param string|null $PaymentMethodId PaymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId($PaymentMethodId)
    {
        if (is_null($PaymentMethodId)) {
            array_push($this->openAPINullablesSetToNull, 'PaymentMethodId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PaymentMethodId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PaymentMethodId'] = $PaymentMethodId;

        return $this;
    }

    /**
     * Gets PaymentMethodType
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\PaymentMethodType|mixed|null
     */
    public function getPaymentMethodType()
    {
        if (!isset($this->container['PaymentMethodType']) || is_null($this->container['PaymentMethodType'])) {
            return null;
        }
        if ((is_object($this->container['PaymentMethodType']) || is_string($this->container['PaymentMethodType'])) && method_exists($this->container['PaymentMethodType'], 'getValue')) {
            return $this->container['PaymentMethodType']->getValue();
        }
        return $this->container['PaymentMethodType'];
    }

    /**
     * Sets PaymentMethodType
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\PaymentMethodType|mixed|null $PaymentMethodType PaymentMethodType
     *
     * @return self
     */
    public function setPaymentMethodType($PaymentMethodType)
    {
        if (is_null($PaymentMethodType)) {
            throw new \InvalidArgumentException('non-nullable PaymentMethodType cannot be null');
        }
        if (!$PaymentMethodType instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\PaymentMethodType) {
            $PaymentMethodType = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\PaymentMethodType($PaymentMethodType);
        }
        $this->container['PaymentMethodType'] = $PaymentMethodType;

        return $this;
    }

    /**
     * Gets PrimaryUserId
     *
     * @return string|null
     */
    public function getPrimaryUserId()
    {
        if (!isset($this->container['PrimaryUserId']) || is_null($this->container['PrimaryUserId'])) {
            return null;
        }
        return $this->container['PrimaryUserId'];
    }

    /**
     * Sets PrimaryUserId
     *
     * @param string|null $PrimaryUserId PrimaryUserId
     *
     * @return self
     */
    public function setPrimaryUserId($PrimaryUserId)
    {
        if (is_null($PrimaryUserId)) {
            array_push($this->openAPINullablesSetToNull, 'PrimaryUserId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PrimaryUserId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PrimaryUserId'] = $PrimaryUserId;

        return $this;
    }

    /**
     * Gets AccountLifeCycleStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountLifeCycleStatus|mixed|null
     */
    public function getAccountLifeCycleStatus()
    {
        if (!isset($this->container['AccountLifeCycleStatus']) || is_null($this->container['AccountLifeCycleStatus'])) {
            return null;
        }
        if ((is_object($this->container['AccountLifeCycleStatus']) || is_string($this->container['AccountLifeCycleStatus'])) && method_exists($this->container['AccountLifeCycleStatus'], 'getValue')) {
            return $this->container['AccountLifeCycleStatus']->getValue();
        }
        return $this->container['AccountLifeCycleStatus'];
    }

    /**
     * Sets AccountLifeCycleStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountLifeCycleStatus|mixed|null $AccountLifeCycleStatus AccountLifeCycleStatus
     *
     * @return self
     */
    public function setAccountLifeCycleStatus($AccountLifeCycleStatus)
    {
        if (is_null($AccountLifeCycleStatus)) {
            throw new \InvalidArgumentException('non-nullable AccountLifeCycleStatus cannot be null');
        }
        if (!$AccountLifeCycleStatus instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountLifeCycleStatus) {
            $AccountLifeCycleStatus = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountLifeCycleStatus($AccountLifeCycleStatus);
        }
        $this->container['AccountLifeCycleStatus'] = $AccountLifeCycleStatus;

        return $this;
    }

    /**
     * Gets TimeStamp
     *
     * @return string|null
     */
    public function getTimeStamp()
    {
        if (!isset($this->container['TimeStamp']) || is_null($this->container['TimeStamp'])) {
            return null;
        }
        return $this->container['TimeStamp'];
    }

    /**
     * Sets TimeStamp
     *
     * @param string|null $TimeStamp TimeStamp
     *
     * @return self
     */
    public function setTimeStamp($TimeStamp)
    {
        if (is_null($TimeStamp)) {
            array_push($this->openAPINullablesSetToNull, 'TimeStamp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TimeStamp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TimeStamp'] = $TimeStamp;

        return $this;
    }

    /**
     * Gets TimeZone
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\TimeZoneType|mixed|null
     */
    public function getTimeZone()
    {
        if (!isset($this->container['TimeZone']) || is_null($this->container['TimeZone'])) {
            return null;
        }
        if ((is_object($this->container['TimeZone']) || is_string($this->container['TimeZone'])) && method_exists($this->container['TimeZone'], 'getValue')) {
            return $this->container['TimeZone']->getValue();
        }
        return $this->container['TimeZone'];
    }

    /**
     * Sets TimeZone
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\TimeZoneType|mixed|null $TimeZone TimeZone
     *
     * @return self
     */
    public function setTimeZone($TimeZone)
    {
        if (is_null($TimeZone)) {
            throw new \InvalidArgumentException('non-nullable TimeZone cannot be null');
        }
        if (!$TimeZone instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\TimeZoneType) {
            $TimeZone = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\TimeZoneType($TimeZone);
        }
        $this->container['TimeZone'] = $TimeZone;

        return $this;
    }

    /**
     * Gets PauseReason
     *
     * @return int|null
     */
    public function getPauseReason()
    {
        if (!isset($this->container['PauseReason']) || is_null($this->container['PauseReason'])) {
            return null;
        }
        return $this->container['PauseReason'];
    }

    /**
     * Sets PauseReason
     *
     * @param int|null $PauseReason PauseReason
     *
     * @return self
     */
    public function setPauseReason($PauseReason)
    {
        if (is_null($PauseReason)) {
            array_push($this->openAPINullablesSetToNull, 'PauseReason');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PauseReason', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PauseReason'] = $PauseReason;

        return $this;
    }

    /**
     * Gets ForwardCompatibilityMap
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValuePairOfstringAndstring[]|null
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
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValuePairOfstringAndstring[]|null $ForwardCompatibilityMap ForwardCompatibilityMap
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
     * Gets LinkedAgencies
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerInfo[]|null
     */
    public function getLinkedAgencies()
    {
        if (!isset($this->container['LinkedAgencies']) || is_null($this->container['LinkedAgencies'])) {
            return null;
        }
        return $this->container['LinkedAgencies'];
    }

    /**
     * Sets LinkedAgencies
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerInfo[]|null $LinkedAgencies LinkedAgencies
     *
     * @return self
     */
    public function setLinkedAgencies($LinkedAgencies)
    {
        if (is_null($LinkedAgencies)) {
            array_push($this->openAPINullablesSetToNull, 'LinkedAgencies');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LinkedAgencies', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LinkedAgencies'] = $LinkedAgencies;

        return $this;
    }

    /**
     * Gets SalesHouseCustomerId
     *
     * @return string|null
     */
    public function getSalesHouseCustomerId()
    {
        if (!isset($this->container['SalesHouseCustomerId']) || is_null($this->container['SalesHouseCustomerId'])) {
            return null;
        }
        return $this->container['SalesHouseCustomerId'];
    }

    /**
     * Sets SalesHouseCustomerId
     *
     * @param string|null $SalesHouseCustomerId SalesHouseCustomerId
     *
     * @return self
     */
    public function setSalesHouseCustomerId($SalesHouseCustomerId)
    {
        if (is_null($SalesHouseCustomerId)) {
            array_push($this->openAPINullablesSetToNull, 'SalesHouseCustomerId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SalesHouseCustomerId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SalesHouseCustomerId'] = $SalesHouseCustomerId;

        return $this;
    }

    /**
     * Gets TaxInformation
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValuePairOfstringAndstring[]|null
     */
    public function getTaxInformation()
    {
        if (!isset($this->container['TaxInformation']) || is_null($this->container['TaxInformation'])) {
            return null;
        }
        return $this->container['TaxInformation'];
    }

    /**
     * Sets TaxInformation
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValuePairOfstringAndstring[]|null $TaxInformation TaxInformation
     *
     * @return self
     */
    public function setTaxInformation($TaxInformation)
    {
        if (is_null($TaxInformation)) {
            array_push($this->openAPINullablesSetToNull, 'TaxInformation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TaxInformation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TaxInformation'] = $TaxInformation;

        return $this;
    }

    /**
     * Gets BackUpPaymentInstrumentId
     *
     * @return string|null
     */
    public function getBackUpPaymentInstrumentId()
    {
        if (!isset($this->container['BackUpPaymentInstrumentId']) || is_null($this->container['BackUpPaymentInstrumentId'])) {
            return null;
        }
        return $this->container['BackUpPaymentInstrumentId'];
    }

    /**
     * Sets BackUpPaymentInstrumentId
     *
     * @param string|null $BackUpPaymentInstrumentId BackUpPaymentInstrumentId
     *
     * @return self
     */
    public function setBackUpPaymentInstrumentId($BackUpPaymentInstrumentId)
    {
        if (is_null($BackUpPaymentInstrumentId)) {
            array_push($this->openAPINullablesSetToNull, 'BackUpPaymentInstrumentId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BackUpPaymentInstrumentId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BackUpPaymentInstrumentId'] = $BackUpPaymentInstrumentId;

        return $this;
    }

    /**
     * Gets BillingThresholdAmount
     *
     * @return float|null
     */
    public function getBillingThresholdAmount()
    {
        if (!isset($this->container['BillingThresholdAmount']) || is_null($this->container['BillingThresholdAmount'])) {
            return null;
        }
        return $this->container['BillingThresholdAmount'];
    }

    /**
     * Sets BillingThresholdAmount
     *
     * @param float|null $BillingThresholdAmount BillingThresholdAmount
     *
     * @return self
     */
    public function setBillingThresholdAmount($BillingThresholdAmount)
    {
        if (is_null($BillingThresholdAmount)) {
            array_push($this->openAPINullablesSetToNull, 'BillingThresholdAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BillingThresholdAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BillingThresholdAmount'] = $BillingThresholdAmount;

        return $this;
    }

    /**
     * Gets BusinessAddress
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\Address|null
     */
    public function getBusinessAddress()
    {
        if (!isset($this->container['BusinessAddress']) || is_null($this->container['BusinessAddress'])) {
            return null;
        }
        return $this->container['BusinessAddress'];
    }

    /**
     * Sets BusinessAddress
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\Address|null $BusinessAddress BusinessAddress
     *
     * @return self
     */
    public function setBusinessAddress($BusinessAddress)
    {
        if (is_null($BusinessAddress)) {
            array_push($this->openAPINullablesSetToNull, 'BusinessAddress');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BusinessAddress', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BusinessAddress'] = $BusinessAddress;

        return $this;
    }

    /**
     * Gets AutoTagType
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\AutoTagType|mixed|null
     */
    public function getAutoTagType()
    {
        if (!isset($this->container['AutoTagType']) || is_null($this->container['AutoTagType'])) {
            return null;
        }
        if ((is_object($this->container['AutoTagType']) || is_string($this->container['AutoTagType'])) && method_exists($this->container['AutoTagType'], 'getValue')) {
            return $this->container['AutoTagType']->getValue();
        }
        return $this->container['AutoTagType'];
    }

    /**
     * Sets AutoTagType
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\AutoTagType|mixed|null $AutoTagType AutoTagType
     *
     * @return self
     */
    public function setAutoTagType($AutoTagType)
    {
        if (is_null($AutoTagType)) {
            throw new \InvalidArgumentException('non-nullable AutoTagType cannot be null');
        }
        if (!$AutoTagType instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\AutoTagType) {
            $AutoTagType = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\AutoTagType($AutoTagType);
        }
        $this->container['AutoTagType'] = $AutoTagType;

        return $this;
    }

    /**
     * Gets SoldToPaymentInstrumentId
     *
     * @return string|null
     */
    public function getSoldToPaymentInstrumentId()
    {
        if (!isset($this->container['SoldToPaymentInstrumentId']) || is_null($this->container['SoldToPaymentInstrumentId'])) {
            return null;
        }
        return $this->container['SoldToPaymentInstrumentId'];
    }

    /**
     * Sets SoldToPaymentInstrumentId
     *
     * @param string|null $SoldToPaymentInstrumentId SoldToPaymentInstrumentId
     *
     * @return self
     */
    public function setSoldToPaymentInstrumentId($SoldToPaymentInstrumentId)
    {
        if (is_null($SoldToPaymentInstrumentId)) {
            array_push($this->openAPINullablesSetToNull, 'SoldToPaymentInstrumentId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SoldToPaymentInstrumentId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SoldToPaymentInstrumentId'] = $SoldToPaymentInstrumentId;

        return $this;
    }

    /**
     * Gets TaxCertificate
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountTaxCertificate|null
     */
    public function getTaxCertificate()
    {
        if (!isset($this->container['TaxCertificate']) || is_null($this->container['TaxCertificate'])) {
            return null;
        }
        return $this->container['TaxCertificate'];
    }

    /**
     * Sets TaxCertificate
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\AccountTaxCertificate|null $TaxCertificate TaxCertificate
     *
     * @return self
     */
    public function setTaxCertificate($TaxCertificate)
    {
        if (is_null($TaxCertificate)) {
            array_push($this->openAPINullablesSetToNull, 'TaxCertificate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TaxCertificate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TaxCertificate'] = $TaxCertificate;

        return $this;
    }

    /**
     * Gets AccountMode
     *
     * @return string|null
     */
    public function getAccountMode()
    {
        if (!isset($this->container['AccountMode']) || is_null($this->container['AccountMode'])) {
            return null;
        }
        return $this->container['AccountMode'];
    }

    /**
     * Sets AccountMode
     *
     * @param string|null $AccountMode AccountMode
     *
     * @return self
     */
    public function setAccountMode($AccountMode)
    {
        if (is_null($AccountMode)) {
            array_push($this->openAPINullablesSetToNull, 'AccountMode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AccountMode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AccountMode'] = $AccountMode;

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
