<?php
/**
 * Customer
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

class Customer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CustomerFinancialStatus' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerFinancialStatus',
        'Id' => 'string',
        'Industry' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\Industry',
        'LastModifiedByUserId' => 'string',
        'LastModifiedTime' => '\DateTime',
        'MarketCountry' => 'string',
        'MarketLanguage' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\LanguageType',
        'Name' => 'string',
        'ServiceLevel' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ServiceLevel',
        'CustomerLifeCycleStatus' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerLifeCycleStatus',
        'TimeStamp' => 'string',
        'Number' => 'string',
        'CustomerAddress' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\Address',
        'ForwardCompatibilityMap' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValuePairOfstringAndstring[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'CustomerFinancialStatus' => null,
        'Id' => 'int64',
        'Industry' => null,
        'LastModifiedByUserId' => 'int64',
        'LastModifiedTime' => 'date-time',
        'MarketCountry' => null,
        'MarketLanguage' => null,
        'Name' => null,
        'ServiceLevel' => null,
        'CustomerLifeCycleStatus' => null,
        'TimeStamp' => 'byte',
        'Number' => null,
        'CustomerAddress' => null,
        'ForwardCompatibilityMap' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CustomerFinancialStatus' => false,
        'Id' => true,
        'Industry' => false,
        'LastModifiedByUserId' => true,
        'LastModifiedTime' => true,
        'MarketCountry' => true,
        'MarketLanguage' => false,
        'Name' => true,
        'ServiceLevel' => false,
        'CustomerLifeCycleStatus' => false,
        'TimeStamp' => true,
        'Number' => true,
        'CustomerAddress' => true,
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
        'CustomerFinancialStatus' => 'CustomerFinancialStatus',
        'Id' => 'Id',
        'Industry' => 'Industry',
        'LastModifiedByUserId' => 'LastModifiedByUserId',
        'LastModifiedTime' => 'LastModifiedTime',
        'MarketCountry' => 'MarketCountry',
        'MarketLanguage' => 'MarketLanguage',
        'Name' => 'Name',
        'ServiceLevel' => 'ServiceLevel',
        'CustomerLifeCycleStatus' => 'CustomerLifeCycleStatus',
        'TimeStamp' => 'TimeStamp',
        'Number' => 'Number',
        'CustomerAddress' => 'CustomerAddress',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CustomerFinancialStatus' => 'setCustomerFinancialStatus',
        'Id' => 'setId',
        'Industry' => 'setIndustry',
        'LastModifiedByUserId' => 'setLastModifiedByUserId',
        'LastModifiedTime' => 'setLastModifiedTime',
        'MarketCountry' => 'setMarketCountry',
        'MarketLanguage' => 'setMarketLanguage',
        'Name' => 'setName',
        'ServiceLevel' => 'setServiceLevel',
        'CustomerLifeCycleStatus' => 'setCustomerLifeCycleStatus',
        'TimeStamp' => 'setTimeStamp',
        'Number' => 'setNumber',
        'CustomerAddress' => 'setCustomerAddress',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CustomerFinancialStatus' => 'getCustomerFinancialStatus',
        'Id' => 'getId',
        'Industry' => 'getIndustry',
        'LastModifiedByUserId' => 'getLastModifiedByUserId',
        'LastModifiedTime' => 'getLastModifiedTime',
        'MarketCountry' => 'getMarketCountry',
        'MarketLanguage' => 'getMarketLanguage',
        'Name' => 'getName',
        'ServiceLevel' => 'getServiceLevel',
        'CustomerLifeCycleStatus' => 'getCustomerLifeCycleStatus',
        'TimeStamp' => 'getTimeStamp',
        'Number' => 'getNumber',
        'CustomerAddress' => 'getCustomerAddress',
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
        $this->setIfExists('CustomerFinancialStatus', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Industry', $data ?? [], null);
        $this->setIfExists('LastModifiedByUserId', $data ?? [], null);
        $this->setIfExists('LastModifiedTime', $data ?? [], null);
        $this->setIfExists('MarketCountry', $data ?? [], null);
        $this->setIfExists('MarketLanguage', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('ServiceLevel', $data ?? [], null);
        $this->setIfExists('CustomerLifeCycleStatus', $data ?? [], null);
        $this->setIfExists('TimeStamp', $data ?? [], null);
        $this->setIfExists('Number', $data ?? [], null);
        $this->setIfExists('CustomerAddress', $data ?? [], null);
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
     * Gets CustomerFinancialStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerFinancialStatus|mixed|null
     */
    public function getCustomerFinancialStatus()
    {
        if (!isset($this->container['CustomerFinancialStatus']) || is_null($this->container['CustomerFinancialStatus'])) {
            return null;
        }
        if ((is_object($this->container['CustomerFinancialStatus']) || is_string($this->container['CustomerFinancialStatus'])) && method_exists($this->container['CustomerFinancialStatus'], 'getValue')) {
            return $this->container['CustomerFinancialStatus']->getValue();
        }
        return $this->container['CustomerFinancialStatus'];
    }

    /**
     * Sets CustomerFinancialStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerFinancialStatus|mixed|null $CustomerFinancialStatus CustomerFinancialStatus
     *
     * @return self
     */
    public function setCustomerFinancialStatus($CustomerFinancialStatus)
    {
        if (is_null($CustomerFinancialStatus)) {
            throw new \InvalidArgumentException('non-nullable CustomerFinancialStatus cannot be null');
        }
        if (!$CustomerFinancialStatus instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerFinancialStatus) {
            $CustomerFinancialStatus = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerFinancialStatus($CustomerFinancialStatus);
        }
        $this->container['CustomerFinancialStatus'] = $CustomerFinancialStatus;

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
     * Gets Industry
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\Industry|mixed|null
     */
    public function getIndustry()
    {
        if (!isset($this->container['Industry']) || is_null($this->container['Industry'])) {
            return null;
        }
        if ((is_object($this->container['Industry']) || is_string($this->container['Industry'])) && method_exists($this->container['Industry'], 'getValue')) {
            return $this->container['Industry']->getValue();
        }
        return $this->container['Industry'];
    }

    /**
     * Sets Industry
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\Industry|mixed|null $Industry Industry
     *
     * @return self
     */
    public function setIndustry($Industry)
    {
        if (is_null($Industry)) {
            throw new \InvalidArgumentException('non-nullable Industry cannot be null');
        }
        if (!$Industry instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\Industry) {
            $Industry = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\Industry($Industry);
        }
        $this->container['Industry'] = $Industry;

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
     * Gets MarketCountry
     *
     * @return string|null
     */
    public function getMarketCountry()
    {
        if (!isset($this->container['MarketCountry']) || is_null($this->container['MarketCountry'])) {
            return null;
        }
        return $this->container['MarketCountry'];
    }

    /**
     * Sets MarketCountry
     *
     * @param string|null $MarketCountry MarketCountry
     *
     * @return self
     */
    public function setMarketCountry($MarketCountry)
    {
        if (is_null($MarketCountry)) {
            array_push($this->openAPINullablesSetToNull, 'MarketCountry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MarketCountry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MarketCountry'] = $MarketCountry;

        return $this;
    }

    /**
     * Gets MarketLanguage
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\LanguageType|mixed|null
     */
    public function getMarketLanguage()
    {
        if (!isset($this->container['MarketLanguage']) || is_null($this->container['MarketLanguage'])) {
            return null;
        }
        if ((is_object($this->container['MarketLanguage']) || is_string($this->container['MarketLanguage'])) && method_exists($this->container['MarketLanguage'], 'getValue')) {
            return $this->container['MarketLanguage']->getValue();
        }
        return $this->container['MarketLanguage'];
    }

    /**
     * Sets MarketLanguage
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\LanguageType|mixed|null $MarketLanguage MarketLanguage
     *
     * @return self
     */
    public function setMarketLanguage($MarketLanguage)
    {
        if (is_null($MarketLanguage)) {
            throw new \InvalidArgumentException('non-nullable MarketLanguage cannot be null');
        }
        if (!$MarketLanguage instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\LanguageType) {
            $MarketLanguage = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\LanguageType($MarketLanguage);
        }
        $this->container['MarketLanguage'] = $MarketLanguage;

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
     * Gets ServiceLevel
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\ServiceLevel|mixed|null
     */
    public function getServiceLevel()
    {
        if (!isset($this->container['ServiceLevel']) || is_null($this->container['ServiceLevel'])) {
            return null;
        }
        if ((is_object($this->container['ServiceLevel']) || is_string($this->container['ServiceLevel'])) && method_exists($this->container['ServiceLevel'], 'getValue')) {
            return $this->container['ServiceLevel']->getValue();
        }
        return $this->container['ServiceLevel'];
    }

    /**
     * Sets ServiceLevel
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\ServiceLevel|mixed|null $ServiceLevel ServiceLevel
     *
     * @return self
     */
    public function setServiceLevel($ServiceLevel)
    {
        if (is_null($ServiceLevel)) {
            throw new \InvalidArgumentException('non-nullable ServiceLevel cannot be null');
        }
        if (!$ServiceLevel instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\ServiceLevel) {
            $ServiceLevel = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\ServiceLevel($ServiceLevel);
        }
        $this->container['ServiceLevel'] = $ServiceLevel;

        return $this;
    }

    /**
     * Gets CustomerLifeCycleStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerLifeCycleStatus|mixed|null
     */
    public function getCustomerLifeCycleStatus()
    {
        if (!isset($this->container['CustomerLifeCycleStatus']) || is_null($this->container['CustomerLifeCycleStatus'])) {
            return null;
        }
        if ((is_object($this->container['CustomerLifeCycleStatus']) || is_string($this->container['CustomerLifeCycleStatus'])) && method_exists($this->container['CustomerLifeCycleStatus'], 'getValue')) {
            return $this->container['CustomerLifeCycleStatus']->getValue();
        }
        return $this->container['CustomerLifeCycleStatus'];
    }

    /**
     * Sets CustomerLifeCycleStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerLifeCycleStatus|mixed|null $CustomerLifeCycleStatus CustomerLifeCycleStatus
     *
     * @return self
     */
    public function setCustomerLifeCycleStatus($CustomerLifeCycleStatus)
    {
        if (is_null($CustomerLifeCycleStatus)) {
            throw new \InvalidArgumentException('non-nullable CustomerLifeCycleStatus cannot be null');
        }
        if (!$CustomerLifeCycleStatus instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerLifeCycleStatus) {
            $CustomerLifeCycleStatus = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\CustomerLifeCycleStatus($CustomerLifeCycleStatus);
        }
        $this->container['CustomerLifeCycleStatus'] = $CustomerLifeCycleStatus;

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
     * Gets CustomerAddress
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\Address|null
     */
    public function getCustomerAddress()
    {
        if (!isset($this->container['CustomerAddress']) || is_null($this->container['CustomerAddress'])) {
            return null;
        }
        return $this->container['CustomerAddress'];
    }

    /**
     * Sets CustomerAddress
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\Address|null $CustomerAddress CustomerAddress
     *
     * @return self
     */
    public function setCustomerAddress($CustomerAddress)
    {
        if (is_null($CustomerAddress)) {
            array_push($this->openAPINullablesSetToNull, 'CustomerAddress');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CustomerAddress', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CustomerAddress'] = $CustomerAddress;

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
