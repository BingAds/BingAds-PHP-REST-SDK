<?php
/**
 * CouponInfoData
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

class CouponInfoData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CouponInfoData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AccountId' => 'int',
        'CouponId' => 'int',
        'ClaimDate' => '\DateTime',
        'Status' => 'int',
        'RedemptionDate' => '\DateTime',
        'ExpirationDate' => '\DateTime',
        'PercentOff' => 'float',
        'CouponValue' => 'float',
        'UpfrontSpending' => 'float',
        'ActiveDuration' => 'int',
        'SpendToThreshold' => 'float',
        'StartDate' => '\DateTime',
        'EndDate' => '\DateTime',
        'Balance' => 'float',
        'CurrencyCode' => 'string',
        'FeatureId' => 'int',
        'CouponType' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'AccountId' => 'int32',
        'CouponId' => 'int32',
        'ClaimDate' => 'date-time',
        'Status' => 'uint8',
        'RedemptionDate' => 'date-time',
        'ExpirationDate' => 'date-time',
        'PercentOff' => 'double',
        'CouponValue' => 'double',
        'UpfrontSpending' => 'double',
        'ActiveDuration' => 'int32',
        'SpendToThreshold' => 'double',
        'StartDate' => 'date-time',
        'EndDate' => 'date-time',
        'Balance' => 'double',
        'CurrencyCode' => null,
        'FeatureId' => 'int32',
        'CouponType' => 'uint8'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AccountId' => false,
        'CouponId' => true,
        'ClaimDate' => true,
        'Status' => true,
        'RedemptionDate' => true,
        'ExpirationDate' => true,
        'PercentOff' => true,
        'CouponValue' => true,
        'UpfrontSpending' => true,
        'ActiveDuration' => true,
        'SpendToThreshold' => true,
        'StartDate' => true,
        'EndDate' => true,
        'Balance' => true,
        'CurrencyCode' => true,
        'FeatureId' => true,
        'CouponType' => true
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
        'CouponId' => 'CouponId',
        'ClaimDate' => 'ClaimDate',
        'Status' => 'Status',
        'RedemptionDate' => 'RedemptionDate',
        'ExpirationDate' => 'ExpirationDate',
        'PercentOff' => 'PercentOff',
        'CouponValue' => 'CouponValue',
        'UpfrontSpending' => 'UpfrontSpending',
        'ActiveDuration' => 'ActiveDuration',
        'SpendToThreshold' => 'SpendToThreshold',
        'StartDate' => 'StartDate',
        'EndDate' => 'EndDate',
        'Balance' => 'Balance',
        'CurrencyCode' => 'CurrencyCode',
        'FeatureId' => 'FeatureId',
        'CouponType' => 'CouponType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AccountId' => 'setAccountId',
        'CouponId' => 'setCouponId',
        'ClaimDate' => 'setClaimDate',
        'Status' => 'setStatus',
        'RedemptionDate' => 'setRedemptionDate',
        'ExpirationDate' => 'setExpirationDate',
        'PercentOff' => 'setPercentOff',
        'CouponValue' => 'setCouponValue',
        'UpfrontSpending' => 'setUpfrontSpending',
        'ActiveDuration' => 'setActiveDuration',
        'SpendToThreshold' => 'setSpendToThreshold',
        'StartDate' => 'setStartDate',
        'EndDate' => 'setEndDate',
        'Balance' => 'setBalance',
        'CurrencyCode' => 'setCurrencyCode',
        'FeatureId' => 'setFeatureId',
        'CouponType' => 'setCouponType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AccountId' => 'getAccountId',
        'CouponId' => 'getCouponId',
        'ClaimDate' => 'getClaimDate',
        'Status' => 'getStatus',
        'RedemptionDate' => 'getRedemptionDate',
        'ExpirationDate' => 'getExpirationDate',
        'PercentOff' => 'getPercentOff',
        'CouponValue' => 'getCouponValue',
        'UpfrontSpending' => 'getUpfrontSpending',
        'ActiveDuration' => 'getActiveDuration',
        'SpendToThreshold' => 'getSpendToThreshold',
        'StartDate' => 'getStartDate',
        'EndDate' => 'getEndDate',
        'Balance' => 'getBalance',
        'CurrencyCode' => 'getCurrencyCode',
        'FeatureId' => 'getFeatureId',
        'CouponType' => 'getCouponType'
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
        $this->setIfExists('CouponId', $data ?? [], null);
        $this->setIfExists('ClaimDate', $data ?? [], null);
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('RedemptionDate', $data ?? [], null);
        $this->setIfExists('ExpirationDate', $data ?? [], null);
        $this->setIfExists('PercentOff', $data ?? [], null);
        $this->setIfExists('CouponValue', $data ?? [], null);
        $this->setIfExists('UpfrontSpending', $data ?? [], null);
        $this->setIfExists('ActiveDuration', $data ?? [], null);
        $this->setIfExists('SpendToThreshold', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('Balance', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('FeatureId', $data ?? [], null);
        $this->setIfExists('CouponType', $data ?? [], null);
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
     * @return int|null
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
     * @param int|null $AccountId AccountId
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
     * Gets CouponId
     *
     * @return int|null
     */
    public function getCouponId()
    {
        if (!isset($this->container['CouponId']) || is_null($this->container['CouponId'])) {
            return null;
        }
        return $this->container['CouponId'];
    }

    /**
     * Sets CouponId
     *
     * @param int|null $CouponId CouponId
     *
     * @return self
     */
    public function setCouponId($CouponId)
    {
        if (is_null($CouponId)) {
            array_push($this->openAPINullablesSetToNull, 'CouponId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CouponId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CouponId'] = $CouponId;

        return $this;
    }

    /**
     * Gets ClaimDate
     *
     * @return \DateTime|null
     */
    public function getClaimDate()
    {
        if (!isset($this->container['ClaimDate']) || is_null($this->container['ClaimDate'])) {
            return null;
        }
        return $this->container['ClaimDate'];
    }

    /**
     * Sets ClaimDate
     *
     * @param \DateTime|null $ClaimDate ClaimDate
     *
     * @return self
     */
    public function setClaimDate($ClaimDate)
    {
        if (is_null($ClaimDate)) {
            array_push($this->openAPINullablesSetToNull, 'ClaimDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ClaimDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ClaimDate'] = $ClaimDate;

        return $this;
    }

    /**
     * Gets Status
     *
     * @return int|null
     */
    public function getStatus()
    {
        if (!isset($this->container['Status']) || is_null($this->container['Status'])) {
            return null;
        }
        return $this->container['Status'];
    }

    /**
     * Sets Status
     *
     * @param int|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            array_push($this->openAPINullablesSetToNull, 'Status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets RedemptionDate
     *
     * @return \DateTime|null
     */
    public function getRedemptionDate()
    {
        if (!isset($this->container['RedemptionDate']) || is_null($this->container['RedemptionDate'])) {
            return null;
        }
        return $this->container['RedemptionDate'];
    }

    /**
     * Sets RedemptionDate
     *
     * @param \DateTime|null $RedemptionDate RedemptionDate
     *
     * @return self
     */
    public function setRedemptionDate($RedemptionDate)
    {
        if (is_null($RedemptionDate)) {
            array_push($this->openAPINullablesSetToNull, 'RedemptionDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RedemptionDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RedemptionDate'] = $RedemptionDate;

        return $this;
    }

    /**
     * Gets ExpirationDate
     *
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        if (!isset($this->container['ExpirationDate']) || is_null($this->container['ExpirationDate'])) {
            return null;
        }
        return $this->container['ExpirationDate'];
    }

    /**
     * Sets ExpirationDate
     *
     * @param \DateTime|null $ExpirationDate ExpirationDate
     *
     * @return self
     */
    public function setExpirationDate($ExpirationDate)
    {
        if (is_null($ExpirationDate)) {
            array_push($this->openAPINullablesSetToNull, 'ExpirationDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExpirationDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExpirationDate'] = $ExpirationDate;

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
     * Gets CouponValue
     *
     * @return float|null
     */
    public function getCouponValue()
    {
        if (!isset($this->container['CouponValue']) || is_null($this->container['CouponValue'])) {
            return null;
        }
        return $this->container['CouponValue'];
    }

    /**
     * Sets CouponValue
     *
     * @param float|null $CouponValue CouponValue
     *
     * @return self
     */
    public function setCouponValue($CouponValue)
    {
        if (is_null($CouponValue)) {
            array_push($this->openAPINullablesSetToNull, 'CouponValue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CouponValue', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CouponValue'] = $CouponValue;

        return $this;
    }

    /**
     * Gets UpfrontSpending
     *
     * @return float|null
     */
    public function getUpfrontSpending()
    {
        if (!isset($this->container['UpfrontSpending']) || is_null($this->container['UpfrontSpending'])) {
            return null;
        }
        return $this->container['UpfrontSpending'];
    }

    /**
     * Sets UpfrontSpending
     *
     * @param float|null $UpfrontSpending UpfrontSpending
     *
     * @return self
     */
    public function setUpfrontSpending($UpfrontSpending)
    {
        if (is_null($UpfrontSpending)) {
            array_push($this->openAPINullablesSetToNull, 'UpfrontSpending');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UpfrontSpending', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UpfrontSpending'] = $UpfrontSpending;

        return $this;
    }

    /**
     * Gets ActiveDuration
     *
     * @return int|null
     */
    public function getActiveDuration()
    {
        if (!isset($this->container['ActiveDuration']) || is_null($this->container['ActiveDuration'])) {
            return null;
        }
        return $this->container['ActiveDuration'];
    }

    /**
     * Sets ActiveDuration
     *
     * @param int|null $ActiveDuration ActiveDuration
     *
     * @return self
     */
    public function setActiveDuration($ActiveDuration)
    {
        if (is_null($ActiveDuration)) {
            array_push($this->openAPINullablesSetToNull, 'ActiveDuration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ActiveDuration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ActiveDuration'] = $ActiveDuration;

        return $this;
    }

    /**
     * Gets SpendToThreshold
     *
     * @return float|null
     */
    public function getSpendToThreshold()
    {
        if (!isset($this->container['SpendToThreshold']) || is_null($this->container['SpendToThreshold'])) {
            return null;
        }
        return $this->container['SpendToThreshold'];
    }

    /**
     * Sets SpendToThreshold
     *
     * @param float|null $SpendToThreshold SpendToThreshold
     *
     * @return self
     */
    public function setSpendToThreshold($SpendToThreshold)
    {
        if (is_null($SpendToThreshold)) {
            array_push($this->openAPINullablesSetToNull, 'SpendToThreshold');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SpendToThreshold', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SpendToThreshold'] = $SpendToThreshold;

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
     * Gets Balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        if (!isset($this->container['Balance']) || is_null($this->container['Balance'])) {
            return null;
        }
        return $this->container['Balance'];
    }

    /**
     * Sets Balance
     *
     * @param float|null $Balance Balance
     *
     * @return self
     */
    public function setBalance($Balance)
    {
        if (is_null($Balance)) {
            array_push($this->openAPINullablesSetToNull, 'Balance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Balance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Balance'] = $Balance;

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
     * Gets FeatureId
     *
     * @return int|null
     */
    public function getFeatureId()
    {
        if (!isset($this->container['FeatureId']) || is_null($this->container['FeatureId'])) {
            return null;
        }
        return $this->container['FeatureId'];
    }

    /**
     * Sets FeatureId
     *
     * @param int|null $FeatureId FeatureId
     *
     * @return self
     */
    public function setFeatureId($FeatureId)
    {
        if (is_null($FeatureId)) {
            array_push($this->openAPINullablesSetToNull, 'FeatureId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FeatureId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FeatureId'] = $FeatureId;

        return $this;
    }

    /**
     * Gets CouponType
     *
     * @return int|null
     */
    public function getCouponType()
    {
        if (!isset($this->container['CouponType']) || is_null($this->container['CouponType'])) {
            return null;
        }
        return $this->container['CouponType'];
    }

    /**
     * Sets CouponType
     *
     * @param int|null $CouponType CouponType
     *
     * @return self
     */
    public function setCouponType($CouponType)
    {
        if (is_null($CouponType)) {
            array_push($this->openAPINullablesSetToNull, 'CouponType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CouponType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CouponType'] = $CouponType;

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
