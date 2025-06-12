<?php
/**
 * InsertionOrder
 * CustomerBillingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CustomerBillingService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CustomerBillingService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class InsertionOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InsertionOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AccountId' => 'string',
        'BookingCountryCode' => 'string',
        'Comment' => 'string',
        'EndDate' => '\DateTime',
        'Id' => 'string',
        'LastModifiedByUserId' => 'string',
        'LastModifiedTime' => '\DateTime',
        'NotificationThreshold' => 'float',
        'ReferenceId' => 'string',
        'SpendCapAmount' => 'float',
        'StartDate' => '\DateTime',
        'Name' => 'string',
        'Status' => '\Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderStatus',
        'PurchaseOrder' => 'string',
        'PendingChanges' => '\Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderPendingChanges',
        'AccountNumber' => 'string',
        'BudgetRemaining' => 'float',
        'BudgetSpent' => 'float',
        'BudgetRemainingPercent' => 'float',
        'BudgetSpentPercent' => 'float',
        'SeriesName' => 'string',
        'IsInSeries' => 'bool',
        'SeriesFrequencyType' => 'string',
        'IsUnlimited' => 'bool',
        'IsEndless' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'AccountId' => 'int64',
        'BookingCountryCode' => null,
        'Comment' => null,
        'EndDate' => 'date-time',
        'Id' => 'int64',
        'LastModifiedByUserId' => 'int64',
        'LastModifiedTime' => 'date-time',
        'NotificationThreshold' => 'double',
        'ReferenceId' => 'int64',
        'SpendCapAmount' => 'double',
        'StartDate' => 'date-time',
        'Name' => null,
        'Status' => null,
        'PurchaseOrder' => null,
        'PendingChanges' => null,
        'AccountNumber' => null,
        'BudgetRemaining' => 'double',
        'BudgetSpent' => 'double',
        'BudgetRemainingPercent' => 'double',
        'BudgetSpentPercent' => 'double',
        'SeriesName' => null,
        'IsInSeries' => null,
        'SeriesFrequencyType' => null,
        'IsUnlimited' => null,
        'IsEndless' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AccountId' => false,
        'BookingCountryCode' => true,
        'Comment' => true,
        'EndDate' => true,
        'Id' => true,
        'LastModifiedByUserId' => true,
        'LastModifiedTime' => true,
        'NotificationThreshold' => true,
        'ReferenceId' => true,
        'SpendCapAmount' => true,
        'StartDate' => true,
        'Name' => true,
        'Status' => false,
        'PurchaseOrder' => true,
        'PendingChanges' => true,
        'AccountNumber' => true,
        'BudgetRemaining' => true,
        'BudgetSpent' => true,
        'BudgetRemainingPercent' => true,
        'BudgetSpentPercent' => true,
        'SeriesName' => true,
        'IsInSeries' => true,
        'SeriesFrequencyType' => true,
        'IsUnlimited' => true,
        'IsEndless' => true
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
        'AccountId' => 'AccountId',
        'BookingCountryCode' => 'BookingCountryCode',
        'Comment' => 'Comment',
        'EndDate' => 'EndDate',
        'Id' => 'Id',
        'LastModifiedByUserId' => 'LastModifiedByUserId',
        'LastModifiedTime' => 'LastModifiedTime',
        'NotificationThreshold' => 'NotificationThreshold',
        'ReferenceId' => 'ReferenceId',
        'SpendCapAmount' => 'SpendCapAmount',
        'StartDate' => 'StartDate',
        'Name' => 'Name',
        'Status' => 'Status',
        'PurchaseOrder' => 'PurchaseOrder',
        'PendingChanges' => 'PendingChanges',
        'AccountNumber' => 'AccountNumber',
        'BudgetRemaining' => 'BudgetRemaining',
        'BudgetSpent' => 'BudgetSpent',
        'BudgetRemainingPercent' => 'BudgetRemainingPercent',
        'BudgetSpentPercent' => 'BudgetSpentPercent',
        'SeriesName' => 'SeriesName',
        'IsInSeries' => 'IsInSeries',
        'SeriesFrequencyType' => 'SeriesFrequencyType',
        'IsUnlimited' => 'IsUnlimited',
        'IsEndless' => 'IsEndless'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AccountId' => 'setAccountId',
        'BookingCountryCode' => 'setBookingCountryCode',
        'Comment' => 'setComment',
        'EndDate' => 'setEndDate',
        'Id' => 'setId',
        'LastModifiedByUserId' => 'setLastModifiedByUserId',
        'LastModifiedTime' => 'setLastModifiedTime',
        'NotificationThreshold' => 'setNotificationThreshold',
        'ReferenceId' => 'setReferenceId',
        'SpendCapAmount' => 'setSpendCapAmount',
        'StartDate' => 'setStartDate',
        'Name' => 'setName',
        'Status' => 'setStatus',
        'PurchaseOrder' => 'setPurchaseOrder',
        'PendingChanges' => 'setPendingChanges',
        'AccountNumber' => 'setAccountNumber',
        'BudgetRemaining' => 'setBudgetRemaining',
        'BudgetSpent' => 'setBudgetSpent',
        'BudgetRemainingPercent' => 'setBudgetRemainingPercent',
        'BudgetSpentPercent' => 'setBudgetSpentPercent',
        'SeriesName' => 'setSeriesName',
        'IsInSeries' => 'setIsInSeries',
        'SeriesFrequencyType' => 'setSeriesFrequencyType',
        'IsUnlimited' => 'setIsUnlimited',
        'IsEndless' => 'setIsEndless'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AccountId' => 'getAccountId',
        'BookingCountryCode' => 'getBookingCountryCode',
        'Comment' => 'getComment',
        'EndDate' => 'getEndDate',
        'Id' => 'getId',
        'LastModifiedByUserId' => 'getLastModifiedByUserId',
        'LastModifiedTime' => 'getLastModifiedTime',
        'NotificationThreshold' => 'getNotificationThreshold',
        'ReferenceId' => 'getReferenceId',
        'SpendCapAmount' => 'getSpendCapAmount',
        'StartDate' => 'getStartDate',
        'Name' => 'getName',
        'Status' => 'getStatus',
        'PurchaseOrder' => 'getPurchaseOrder',
        'PendingChanges' => 'getPendingChanges',
        'AccountNumber' => 'getAccountNumber',
        'BudgetRemaining' => 'getBudgetRemaining',
        'BudgetSpent' => 'getBudgetSpent',
        'BudgetRemainingPercent' => 'getBudgetRemainingPercent',
        'BudgetSpentPercent' => 'getBudgetSpentPercent',
        'SeriesName' => 'getSeriesName',
        'IsInSeries' => 'getIsInSeries',
        'SeriesFrequencyType' => 'getSeriesFrequencyType',
        'IsUnlimited' => 'getIsUnlimited',
        'IsEndless' => 'getIsEndless'
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
        $this->setIfExists('AccountId', $data ?? [], null);
        $this->setIfExists('BookingCountryCode', $data ?? [], null);
        $this->setIfExists('Comment', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('LastModifiedByUserId', $data ?? [], null);
        $this->setIfExists('LastModifiedTime', $data ?? [], null);
        $this->setIfExists('NotificationThreshold', $data ?? [], null);
        $this->setIfExists('ReferenceId', $data ?? [], null);
        $this->setIfExists('SpendCapAmount', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('PurchaseOrder', $data ?? [], null);
        $this->setIfExists('PendingChanges', $data ?? [], null);
        $this->setIfExists('AccountNumber', $data ?? [], null);
        $this->setIfExists('BudgetRemaining', $data ?? [], null);
        $this->setIfExists('BudgetSpent', $data ?? [], null);
        $this->setIfExists('BudgetRemainingPercent', $data ?? [], null);
        $this->setIfExists('BudgetSpentPercent', $data ?? [], null);
        $this->setIfExists('SeriesName', $data ?? [], null);
        $this->setIfExists('IsInSeries', $data ?? [], null);
        $this->setIfExists('SeriesFrequencyType', $data ?? [], null);
        $this->setIfExists('IsUnlimited', $data ?? [], null);
        $this->setIfExists('IsEndless', $data ?? [], null);
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
     * Gets AccountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        if (!isset($this->container['AccountId']) || is_null($this->container['AccountId'])) {
            return null;
        }
        return $this->container['AccountId'];
    }

    /**
     * Sets AccountId
     *
     * @param string|null $AccountId AccountId
     *
     * @return self
     */
    public function setAccountId($AccountId)
    {
        if (is_null($AccountId)) {
            throw new \InvalidArgumentException('non-nullable AccountId cannot be null');
        }
        $this->container['AccountId'] = $AccountId;

        return $this;
    }

    /**
     * Gets BookingCountryCode
     *
     * @return string|null
     */
    public function getBookingCountryCode()
    {
        if (!isset($this->container['BookingCountryCode']) || is_null($this->container['BookingCountryCode'])) {
            return null;
        }
        return $this->container['BookingCountryCode'];
    }

    /**
     * Sets BookingCountryCode
     *
     * @param string|null $BookingCountryCode BookingCountryCode
     *
     * @return self
     */
    public function setBookingCountryCode($BookingCountryCode)
    {
        if (is_null($BookingCountryCode)) {
            array_push($this->openAPINullablesSetToNull, 'BookingCountryCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BookingCountryCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BookingCountryCode'] = $BookingCountryCode;

        return $this;
    }

    /**
     * Gets Comment
     *
     * @return string|null
     */
    public function getComment()
    {
        if (!isset($this->container['Comment']) || is_null($this->container['Comment'])) {
            return null;
        }
        return $this->container['Comment'];
    }

    /**
     * Sets Comment
     *
     * @param string|null $Comment Comment
     *
     * @return self
     */
    public function setComment($Comment)
    {
        if (is_null($Comment)) {
            array_push($this->openAPINullablesSetToNull, 'Comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Comment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Comment'] = $Comment;

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
     * Gets NotificationThreshold
     *
     * @return float|null
     */
    public function getNotificationThreshold()
    {
        if (!isset($this->container['NotificationThreshold']) || is_null($this->container['NotificationThreshold'])) {
            return null;
        }
        return $this->container['NotificationThreshold'];
    }

    /**
     * Sets NotificationThreshold
     *
     * @param float|null $NotificationThreshold NotificationThreshold
     *
     * @return self
     */
    public function setNotificationThreshold($NotificationThreshold)
    {
        if (is_null($NotificationThreshold)) {
            array_push($this->openAPINullablesSetToNull, 'NotificationThreshold');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NotificationThreshold', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NotificationThreshold'] = $NotificationThreshold;

        return $this;
    }

    /**
     * Gets ReferenceId
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        if (!isset($this->container['ReferenceId']) || is_null($this->container['ReferenceId'])) {
            return null;
        }
        return $this->container['ReferenceId'];
    }

    /**
     * Sets ReferenceId
     *
     * @param string|null $ReferenceId ReferenceId
     *
     * @return self
     */
    public function setReferenceId($ReferenceId)
    {
        if (is_null($ReferenceId)) {
            array_push($this->openAPINullablesSetToNull, 'ReferenceId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ReferenceId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ReferenceId'] = $ReferenceId;

        return $this;
    }

    /**
     * Gets SpendCapAmount
     *
     * @return float|null
     */
    public function getSpendCapAmount()
    {
        if (!isset($this->container['SpendCapAmount']) || is_null($this->container['SpendCapAmount'])) {
            return null;
        }
        return $this->container['SpendCapAmount'];
    }

    /**
     * Sets SpendCapAmount
     *
     * @param float|null $SpendCapAmount SpendCapAmount
     *
     * @return self
     */
    public function setSpendCapAmount($SpendCapAmount)
    {
        if (is_null($SpendCapAmount)) {
            array_push($this->openAPINullablesSetToNull, 'SpendCapAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SpendCapAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SpendCapAmount'] = $SpendCapAmount;

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
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderStatus|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderStatus($Status);
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets PurchaseOrder
     *
     * @return string|null
     */
    public function getPurchaseOrder()
    {
        if (!isset($this->container['PurchaseOrder']) || is_null($this->container['PurchaseOrder'])) {
            return null;
        }
        return $this->container['PurchaseOrder'];
    }

    /**
     * Sets PurchaseOrder
     *
     * @param string|null $PurchaseOrder PurchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder($PurchaseOrder)
    {
        if (is_null($PurchaseOrder)) {
            array_push($this->openAPINullablesSetToNull, 'PurchaseOrder');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PurchaseOrder', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PurchaseOrder'] = $PurchaseOrder;

        return $this;
    }

    /**
     * Gets PendingChanges
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderPendingChanges|null
     */
    public function getPendingChanges()
    {
        if (!isset($this->container['PendingChanges']) || is_null($this->container['PendingChanges'])) {
            return null;
        }
        return $this->container['PendingChanges'];
    }

    /**
     * Sets PendingChanges
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerBillingService\InsertionOrderPendingChanges|null $PendingChanges PendingChanges
     *
     * @return self
     */
    public function setPendingChanges($PendingChanges)
    {
        if (is_null($PendingChanges)) {
            array_push($this->openAPINullablesSetToNull, 'PendingChanges');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('PendingChanges', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['PendingChanges'] = $PendingChanges;

        return $this;
    }

    /**
     * Gets AccountNumber
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        if (!isset($this->container['AccountNumber']) || is_null($this->container['AccountNumber'])) {
            return null;
        }
        return $this->container['AccountNumber'];
    }

    /**
     * Sets AccountNumber
     *
     * @param string|null $AccountNumber AccountNumber
     *
     * @return self
     */
    public function setAccountNumber($AccountNumber)
    {
        if (is_null($AccountNumber)) {
            array_push($this->openAPINullablesSetToNull, 'AccountNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AccountNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AccountNumber'] = $AccountNumber;

        return $this;
    }

    /**
     * Gets BudgetRemaining
     *
     * @return float|null
     */
    public function getBudgetRemaining()
    {
        if (!isset($this->container['BudgetRemaining']) || is_null($this->container['BudgetRemaining'])) {
            return null;
        }
        return $this->container['BudgetRemaining'];
    }

    /**
     * Sets BudgetRemaining
     *
     * @param float|null $BudgetRemaining BudgetRemaining
     *
     * @return self
     */
    public function setBudgetRemaining($BudgetRemaining)
    {
        if (is_null($BudgetRemaining)) {
            array_push($this->openAPINullablesSetToNull, 'BudgetRemaining');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BudgetRemaining', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BudgetRemaining'] = $BudgetRemaining;

        return $this;
    }

    /**
     * Gets BudgetSpent
     *
     * @return float|null
     */
    public function getBudgetSpent()
    {
        if (!isset($this->container['BudgetSpent']) || is_null($this->container['BudgetSpent'])) {
            return null;
        }
        return $this->container['BudgetSpent'];
    }

    /**
     * Sets BudgetSpent
     *
     * @param float|null $BudgetSpent BudgetSpent
     *
     * @return self
     */
    public function setBudgetSpent($BudgetSpent)
    {
        if (is_null($BudgetSpent)) {
            array_push($this->openAPINullablesSetToNull, 'BudgetSpent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BudgetSpent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BudgetSpent'] = $BudgetSpent;

        return $this;
    }

    /**
     * Gets BudgetRemainingPercent
     *
     * @return float|null
     */
    public function getBudgetRemainingPercent()
    {
        if (!isset($this->container['BudgetRemainingPercent']) || is_null($this->container['BudgetRemainingPercent'])) {
            return null;
        }
        return $this->container['BudgetRemainingPercent'];
    }

    /**
     * Sets BudgetRemainingPercent
     *
     * @param float|null $BudgetRemainingPercent BudgetRemainingPercent
     *
     * @return self
     */
    public function setBudgetRemainingPercent($BudgetRemainingPercent)
    {
        if (is_null($BudgetRemainingPercent)) {
            array_push($this->openAPINullablesSetToNull, 'BudgetRemainingPercent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BudgetRemainingPercent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BudgetRemainingPercent'] = $BudgetRemainingPercent;

        return $this;
    }

    /**
     * Gets BudgetSpentPercent
     *
     * @return float|null
     */
    public function getBudgetSpentPercent()
    {
        if (!isset($this->container['BudgetSpentPercent']) || is_null($this->container['BudgetSpentPercent'])) {
            return null;
        }
        return $this->container['BudgetSpentPercent'];
    }

    /**
     * Sets BudgetSpentPercent
     *
     * @param float|null $BudgetSpentPercent BudgetSpentPercent
     *
     * @return self
     */
    public function setBudgetSpentPercent($BudgetSpentPercent)
    {
        if (is_null($BudgetSpentPercent)) {
            array_push($this->openAPINullablesSetToNull, 'BudgetSpentPercent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BudgetSpentPercent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BudgetSpentPercent'] = $BudgetSpentPercent;

        return $this;
    }

    /**
     * Gets SeriesName
     *
     * @return string|null
     */
    public function getSeriesName()
    {
        if (!isset($this->container['SeriesName']) || is_null($this->container['SeriesName'])) {
            return null;
        }
        return $this->container['SeriesName'];
    }

    /**
     * Sets SeriesName
     *
     * @param string|null $SeriesName SeriesName
     *
     * @return self
     */
    public function setSeriesName($SeriesName)
    {
        if (is_null($SeriesName)) {
            array_push($this->openAPINullablesSetToNull, 'SeriesName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SeriesName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SeriesName'] = $SeriesName;

        return $this;
    }

    /**
     * Gets IsInSeries
     *
     * @return bool|null
     */
    public function getIsInSeries()
    {
        if (!isset($this->container['IsInSeries']) || is_null($this->container['IsInSeries'])) {
            return null;
        }
        return $this->container['IsInSeries'];
    }

    /**
     * Sets IsInSeries
     *
     * @param bool|null $IsInSeries IsInSeries
     *
     * @return self
     */
    public function setIsInSeries($IsInSeries)
    {
        if (is_null($IsInSeries)) {
            array_push($this->openAPINullablesSetToNull, 'IsInSeries');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsInSeries', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsInSeries'] = $IsInSeries;

        return $this;
    }

    /**
     * Gets SeriesFrequencyType
     *
     * @return string|null
     */
    public function getSeriesFrequencyType()
    {
        if (!isset($this->container['SeriesFrequencyType']) || is_null($this->container['SeriesFrequencyType'])) {
            return null;
        }
        return $this->container['SeriesFrequencyType'];
    }

    /**
     * Sets SeriesFrequencyType
     *
     * @param string|null $SeriesFrequencyType SeriesFrequencyType
     *
     * @return self
     */
    public function setSeriesFrequencyType($SeriesFrequencyType)
    {
        if (is_null($SeriesFrequencyType)) {
            array_push($this->openAPINullablesSetToNull, 'SeriesFrequencyType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SeriesFrequencyType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SeriesFrequencyType'] = $SeriesFrequencyType;

        return $this;
    }

    /**
     * Gets IsUnlimited
     *
     * @return bool|null
     */
    public function getIsUnlimited()
    {
        if (!isset($this->container['IsUnlimited']) || is_null($this->container['IsUnlimited'])) {
            return null;
        }
        return $this->container['IsUnlimited'];
    }

    /**
     * Sets IsUnlimited
     *
     * @param bool|null $IsUnlimited IsUnlimited
     *
     * @return self
     */
    public function setIsUnlimited($IsUnlimited)
    {
        if (is_null($IsUnlimited)) {
            array_push($this->openAPINullablesSetToNull, 'IsUnlimited');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsUnlimited', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsUnlimited'] = $IsUnlimited;

        return $this;
    }

    /**
     * Gets IsEndless
     *
     * @return bool|null
     */
    public function getIsEndless()
    {
        if (!isset($this->container['IsEndless']) || is_null($this->container['IsEndless'])) {
            return null;
        }
        return $this->container['IsEndless'];
    }

    /**
     * Sets IsEndless
     *
     * @param bool|null $IsEndless IsEndless
     *
     * @return self
     */
    public function setIsEndless($IsEndless)
    {
        if (is_null($IsEndless)) {
            array_push($this->openAPINullablesSetToNull, 'IsEndless');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsEndless', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsEndless'] = $IsEndless;

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
