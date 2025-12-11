<?php
/**
 * BidStrategy
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

class BidStrategy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BidStrategy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'AssociatedCampaignType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType',
        'BiddingScheme' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BiddingScheme',
        'AssociationCount' => 'int',
        'Scope' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\EntityScope',
        'CurrencyCode' => 'string',
        'ReportingTimeZone' => 'string'
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
        'AssociatedCampaignType' => null,
        'BiddingScheme' => null,
        'AssociationCount' => 'int32',
        'Scope' => null,
        'CurrencyCode' => null,
        'ReportingTimeZone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'Name' => true,
        'AssociatedCampaignType' => false,
        'BiddingScheme' => true,
        'AssociationCount' => true,
        'Scope' => false,
        'CurrencyCode' => true,
        'ReportingTimeZone' => true
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
        'AssociatedCampaignType' => 'AssociatedCampaignType',
        'BiddingScheme' => 'BiddingScheme',
        'AssociationCount' => 'AssociationCount',
        'Scope' => 'Scope',
        'CurrencyCode' => 'CurrencyCode',
        'ReportingTimeZone' => 'ReportingTimeZone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'Name' => 'setName',
        'AssociatedCampaignType' => 'setAssociatedCampaignType',
        'BiddingScheme' => 'setBiddingScheme',
        'AssociationCount' => 'setAssociationCount',
        'Scope' => 'setScope',
        'CurrencyCode' => 'setCurrencyCode',
        'ReportingTimeZone' => 'setReportingTimeZone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'Name' => 'getName',
        'AssociatedCampaignType' => 'getAssociatedCampaignType',
        'BiddingScheme' => 'getBiddingScheme',
        'AssociationCount' => 'getAssociationCount',
        'Scope' => 'getScope',
        'CurrencyCode' => 'getCurrencyCode',
        'ReportingTimeZone' => 'getReportingTimeZone'
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
        $this->setIfExists('AssociatedCampaignType', $data ?? [], null);
        $this->setIfExists('BiddingScheme', $data ?? [], null);
        $this->setIfExists('AssociationCount', $data ?? [], null);
        $this->setIfExists('Scope', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('ReportingTimeZone', $data ?? [], null);
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
     * Gets AssociatedCampaignType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType|mixed|null
     */
    public function getAssociatedCampaignType()
    {
        if (!isset($this->container['AssociatedCampaignType']) || is_null($this->container['AssociatedCampaignType'])) {
            return null;
        }
        if ((is_object($this->container['AssociatedCampaignType']) || is_string($this->container['AssociatedCampaignType'])) && method_exists($this->container['AssociatedCampaignType'], 'getValue')) {
            return $this->container['AssociatedCampaignType']->getValue();
        }
        return $this->container['AssociatedCampaignType'];
    }

    /**
     * Sets AssociatedCampaignType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType|mixed|null $AssociatedCampaignType AssociatedCampaignType
     *
     * @return self
     */
    public function setAssociatedCampaignType($AssociatedCampaignType)
    {
        if (is_null($AssociatedCampaignType)) {
            throw new \InvalidArgumentException('non-nullable AssociatedCampaignType cannot be null');
        }
        if (!$AssociatedCampaignType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType) {
            $AssociatedCampaignType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType($AssociatedCampaignType);
        }
        $this->container['AssociatedCampaignType'] = $AssociatedCampaignType;

        return $this;
    }

    /**
     * Gets BiddingScheme
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\BiddingScheme|null
     */
    public function getBiddingScheme()
    {
        if (!isset($this->container['BiddingScheme']) || is_null($this->container['BiddingScheme'])) {
            return null;
        }
        return $this->container['BiddingScheme'];
    }

    /**
     * Sets BiddingScheme
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\BiddingScheme|null $BiddingScheme BiddingScheme
     *
     * @return self
     */
    public function setBiddingScheme($BiddingScheme)
    {
        if (is_null($BiddingScheme)) {
            array_push($this->openAPINullablesSetToNull, 'BiddingScheme');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BiddingScheme', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BiddingScheme'] = $BiddingScheme;

        return $this;
    }

    /**
     * Gets AssociationCount
     *
     * @return int|null
     */
    public function getAssociationCount()
    {
        if (!isset($this->container['AssociationCount']) || is_null($this->container['AssociationCount'])) {
            return null;
        }
        return $this->container['AssociationCount'];
    }

    /**
     * Sets AssociationCount
     *
     * @param int|null $AssociationCount AssociationCount
     *
     * @return self
     */
    public function setAssociationCount($AssociationCount)
    {
        if (is_null($AssociationCount)) {
            array_push($this->openAPINullablesSetToNull, 'AssociationCount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AssociationCount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AssociationCount'] = $AssociationCount;

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
     * Gets ReportingTimeZone
     *
     * @return string|null
     */
    public function getReportingTimeZone()
    {
        if (!isset($this->container['ReportingTimeZone']) || is_null($this->container['ReportingTimeZone'])) {
            return null;
        }
        return $this->container['ReportingTimeZone'];
    }

    /**
     * Sets ReportingTimeZone
     *
     * @param string|null $ReportingTimeZone ReportingTimeZone
     *
     * @return self
     */
    public function setReportingTimeZone($ReportingTimeZone)
    {
        if (is_null($ReportingTimeZone)) {
            array_push($this->openAPINullablesSetToNull, 'ReportingTimeZone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ReportingTimeZone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ReportingTimeZone'] = $ReportingTimeZone;

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
