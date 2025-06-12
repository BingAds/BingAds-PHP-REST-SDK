<?php
/**
 * Coupon
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

class Coupon implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Coupon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CouponCode' => 'string',
        'ClassName' => 'string',
        'CouponType' => 'string',
        'Amount' => 'float',
        'SpendThreshold' => 'float',
        'CurrencyCode' => 'string',
        'PercentOff' => 'float',
        'ActiveDuration' => 'int',
        'ExpirationDate' => '\DateTime',
        'StartDate' => '\DateTime',
        'EndDate' => '\DateTime',
        'SendToEmail' => 'string',
        'SendToDate' => '\DateTime',
        'IsRedeemed' => 'bool',
        'RedemptionInfo' => '\Microsoft\MsAds\Rest\Model\CustomerBillingService\CouponRedemption',
        'ClaimInfo' => '\Microsoft\MsAds\Rest\Model\CustomerBillingService\CouponClaimInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'CouponCode' => null,
        'ClassName' => null,
        'CouponType' => null,
        'Amount' => 'double',
        'SpendThreshold' => 'double',
        'CurrencyCode' => null,
        'PercentOff' => 'double',
        'ActiveDuration' => 'int32',
        'ExpirationDate' => 'date-time',
        'StartDate' => 'date-time',
        'EndDate' => 'date-time',
        'SendToEmail' => null,
        'SendToDate' => 'date-time',
        'IsRedeemed' => null,
        'RedemptionInfo' => null,
        'ClaimInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CouponCode' => true,
        'ClassName' => true,
        'CouponType' => true,
        'Amount' => false,
        'SpendThreshold' => false,
        'CurrencyCode' => true,
        'PercentOff' => true,
        'ActiveDuration' => true,
        'ExpirationDate' => true,
        'StartDate' => true,
        'EndDate' => true,
        'SendToEmail' => true,
        'SendToDate' => true,
        'IsRedeemed' => false,
        'RedemptionInfo' => true,
        'ClaimInfo' => true
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
        'CouponCode' => 'CouponCode',
        'ClassName' => 'ClassName',
        'CouponType' => 'CouponType',
        'Amount' => 'Amount',
        'SpendThreshold' => 'SpendThreshold',
        'CurrencyCode' => 'CurrencyCode',
        'PercentOff' => 'PercentOff',
        'ActiveDuration' => 'ActiveDuration',
        'ExpirationDate' => 'ExpirationDate',
        'StartDate' => 'StartDate',
        'EndDate' => 'EndDate',
        'SendToEmail' => 'SendToEmail',
        'SendToDate' => 'SendToDate',
        'IsRedeemed' => 'IsRedeemed',
        'RedemptionInfo' => 'RedemptionInfo',
        'ClaimInfo' => 'ClaimInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CouponCode' => 'setCouponCode',
        'ClassName' => 'setClassName',
        'CouponType' => 'setCouponType',
        'Amount' => 'setAmount',
        'SpendThreshold' => 'setSpendThreshold',
        'CurrencyCode' => 'setCurrencyCode',
        'PercentOff' => 'setPercentOff',
        'ActiveDuration' => 'setActiveDuration',
        'ExpirationDate' => 'setExpirationDate',
        'StartDate' => 'setStartDate',
        'EndDate' => 'setEndDate',
        'SendToEmail' => 'setSendToEmail',
        'SendToDate' => 'setSendToDate',
        'IsRedeemed' => 'setIsRedeemed',
        'RedemptionInfo' => 'setRedemptionInfo',
        'ClaimInfo' => 'setClaimInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CouponCode' => 'getCouponCode',
        'ClassName' => 'getClassName',
        'CouponType' => 'getCouponType',
        'Amount' => 'getAmount',
        'SpendThreshold' => 'getSpendThreshold',
        'CurrencyCode' => 'getCurrencyCode',
        'PercentOff' => 'getPercentOff',
        'ActiveDuration' => 'getActiveDuration',
        'ExpirationDate' => 'getExpirationDate',
        'StartDate' => 'getStartDate',
        'EndDate' => 'getEndDate',
        'SendToEmail' => 'getSendToEmail',
        'SendToDate' => 'getSendToDate',
        'IsRedeemed' => 'getIsRedeemed',
        'RedemptionInfo' => 'getRedemptionInfo',
        'ClaimInfo' => 'getClaimInfo'
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
        $this->setIfExists('CouponCode', $data ?? [], null);
        $this->setIfExists('ClassName', $data ?? [], null);
        $this->setIfExists('CouponType', $data ?? [], null);
        $this->setIfExists('Amount', $data ?? [], null);
        $this->setIfExists('SpendThreshold', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('PercentOff', $data ?? [], null);
        $this->setIfExists('ActiveDuration', $data ?? [], null);
        $this->setIfExists('ExpirationDate', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('SendToEmail', $data ?? [], null);
        $this->setIfExists('SendToDate', $data ?? [], null);
        $this->setIfExists('IsRedeemed', $data ?? [], null);
        $this->setIfExists('RedemptionInfo', $data ?? [], null);
        $this->setIfExists('ClaimInfo', $data ?? [], null);
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
     * Gets CouponCode
     *
     * @return string|null
     */
    public function getCouponCode()
    {
        if (!isset($this->container['CouponCode']) || is_null($this->container['CouponCode'])) {
            return null;
        }
        return $this->container['CouponCode'];
    }

    /**
     * Sets CouponCode
     *
     * @param string|null $CouponCode CouponCode
     *
     * @return self
     */
    public function setCouponCode($CouponCode)
    {
        if (is_null($CouponCode)) {
            array_push($this->openAPINullablesSetToNull, 'CouponCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CouponCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CouponCode'] = $CouponCode;

        return $this;
    }

    /**
     * Gets ClassName
     *
     * @return string|null
     */
    public function getClassName()
    {
        if (!isset($this->container['ClassName']) || is_null($this->container['ClassName'])) {
            return null;
        }
        return $this->container['ClassName'];
    }

    /**
     * Sets ClassName
     *
     * @param string|null $ClassName ClassName
     *
     * @return self
     */
    public function setClassName($ClassName)
    {
        if (is_null($ClassName)) {
            array_push($this->openAPINullablesSetToNull, 'ClassName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ClassName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ClassName'] = $ClassName;

        return $this;
    }

    /**
     * Gets CouponType
     *
     * @return string|null
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
     * @param string|null $CouponType CouponType
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
     * Gets Amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        if (!isset($this->container['Amount']) || is_null($this->container['Amount'])) {
            return null;
        }
        return $this->container['Amount'];
    }

    /**
     * Sets Amount
     *
     * @param float|null $Amount Amount
     *
     * @return self
     */
    public function setAmount($Amount)
    {
        if (is_null($Amount)) {
            throw new \InvalidArgumentException('non-nullable Amount cannot be null');
        }
        $this->container['Amount'] = $Amount;

        return $this;
    }

    /**
     * Gets SpendThreshold
     *
     * @return float|null
     */
    public function getSpendThreshold()
    {
        if (!isset($this->container['SpendThreshold']) || is_null($this->container['SpendThreshold'])) {
            return null;
        }
        return $this->container['SpendThreshold'];
    }

    /**
     * Sets SpendThreshold
     *
     * @param float|null $SpendThreshold SpendThreshold
     *
     * @return self
     */
    public function setSpendThreshold($SpendThreshold)
    {
        if (is_null($SpendThreshold)) {
            throw new \InvalidArgumentException('non-nullable SpendThreshold cannot be null');
        }
        $this->container['SpendThreshold'] = $SpendThreshold;

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
     * Gets SendToEmail
     *
     * @return string|null
     */
    public function getSendToEmail()
    {
        if (!isset($this->container['SendToEmail']) || is_null($this->container['SendToEmail'])) {
            return null;
        }
        return $this->container['SendToEmail'];
    }

    /**
     * Sets SendToEmail
     *
     * @param string|null $SendToEmail SendToEmail
     *
     * @return self
     */
    public function setSendToEmail($SendToEmail)
    {
        if (is_null($SendToEmail)) {
            array_push($this->openAPINullablesSetToNull, 'SendToEmail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SendToEmail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SendToEmail'] = $SendToEmail;

        return $this;
    }

    /**
     * Gets SendToDate
     *
     * @return \DateTime|null
     */
    public function getSendToDate()
    {
        if (!isset($this->container['SendToDate']) || is_null($this->container['SendToDate'])) {
            return null;
        }
        return $this->container['SendToDate'];
    }

    /**
     * Sets SendToDate
     *
     * @param \DateTime|null $SendToDate SendToDate
     *
     * @return self
     */
    public function setSendToDate($SendToDate)
    {
        if (is_null($SendToDate)) {
            array_push($this->openAPINullablesSetToNull, 'SendToDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SendToDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SendToDate'] = $SendToDate;

        return $this;
    }

    /**
     * Gets IsRedeemed
     *
     * @return bool|null
     */
    public function getIsRedeemed()
    {
        if (!isset($this->container['IsRedeemed']) || is_null($this->container['IsRedeemed'])) {
            return null;
        }
        return $this->container['IsRedeemed'];
    }

    /**
     * Sets IsRedeemed
     *
     * @param bool|null $IsRedeemed IsRedeemed
     *
     * @return self
     */
    public function setIsRedeemed($IsRedeemed)
    {
        if (is_null($IsRedeemed)) {
            throw new \InvalidArgumentException('non-nullable IsRedeemed cannot be null');
        }
        $this->container['IsRedeemed'] = $IsRedeemed;

        return $this;
    }

    /**
     * Gets RedemptionInfo
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\CouponRedemption|null
     */
    public function getRedemptionInfo()
    {
        if (!isset($this->container['RedemptionInfo']) || is_null($this->container['RedemptionInfo'])) {
            return null;
        }
        return $this->container['RedemptionInfo'];
    }

    /**
     * Sets RedemptionInfo
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerBillingService\CouponRedemption|null $RedemptionInfo RedemptionInfo
     *
     * @return self
     */
    public function setRedemptionInfo($RedemptionInfo)
    {
        if (is_null($RedemptionInfo)) {
            array_push($this->openAPINullablesSetToNull, 'RedemptionInfo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RedemptionInfo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RedemptionInfo'] = $RedemptionInfo;

        return $this;
    }

    /**
     * Gets ClaimInfo
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerBillingService\CouponClaimInfo|null
     */
    public function getClaimInfo()
    {
        if (!isset($this->container['ClaimInfo']) || is_null($this->container['ClaimInfo'])) {
            return null;
        }
        return $this->container['ClaimInfo'];
    }

    /**
     * Sets ClaimInfo
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerBillingService\CouponClaimInfo|null $ClaimInfo ClaimInfo
     *
     * @return self
     */
    public function setClaimInfo($ClaimInfo)
    {
        if (is_null($ClaimInfo)) {
            array_push($this->openAPINullablesSetToNull, 'ClaimInfo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ClaimInfo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ClaimInfo'] = $ClaimInfo;

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
