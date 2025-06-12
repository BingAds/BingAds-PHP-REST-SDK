<?php
/**
 * ConversionValueRule
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

class ConversionValueRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ConversionValueRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'LocationCondition' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationCondition',
        'AudienceCondition' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceCondition',
        'DeviceCondition' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\DeviceCondition',
        'Value' => 'float',
        'Operation' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionValueRuleOperator',
        'CurrencyCode' => 'string',
        'Status' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionValueRuleStatus'
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
        'LocationCondition' => null,
        'AudienceCondition' => null,
        'DeviceCondition' => null,
        'Value' => 'double',
        'Operation' => null,
        'CurrencyCode' => null,
        'Status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'Name' => true,
        'LocationCondition' => true,
        'AudienceCondition' => true,
        'DeviceCondition' => true,
        'Value' => true,
        'Operation' => false,
        'CurrencyCode' => true,
        'Status' => false
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
        'LocationCondition' => 'LocationCondition',
        'AudienceCondition' => 'AudienceCondition',
        'DeviceCondition' => 'DeviceCondition',
        'Value' => 'Value',
        'Operation' => 'Operation',
        'CurrencyCode' => 'CurrencyCode',
        'Status' => 'Status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'Name' => 'setName',
        'LocationCondition' => 'setLocationCondition',
        'AudienceCondition' => 'setAudienceCondition',
        'DeviceCondition' => 'setDeviceCondition',
        'Value' => 'setValue',
        'Operation' => 'setOperation',
        'CurrencyCode' => 'setCurrencyCode',
        'Status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'Name' => 'getName',
        'LocationCondition' => 'getLocationCondition',
        'AudienceCondition' => 'getAudienceCondition',
        'DeviceCondition' => 'getDeviceCondition',
        'Value' => 'getValue',
        'Operation' => 'getOperation',
        'CurrencyCode' => 'getCurrencyCode',
        'Status' => 'getStatus'
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
        $this->setIfExists('LocationCondition', $data ?? [], null);
        $this->setIfExists('AudienceCondition', $data ?? [], null);
        $this->setIfExists('DeviceCondition', $data ?? [], null);
        $this->setIfExists('Value', $data ?? [], null);
        $this->setIfExists('Operation', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('Status', $data ?? [], null);
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
     * Gets LocationCondition
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationCondition|null
     */
    public function getLocationCondition()
    {
        if (!isset($this->container['LocationCondition']) || is_null($this->container['LocationCondition'])) {
            return null;
        }
        return $this->container['LocationCondition'];
    }

    /**
     * Sets LocationCondition
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationCondition|null $LocationCondition LocationCondition
     *
     * @return self
     */
    public function setLocationCondition($LocationCondition)
    {
        if (is_null($LocationCondition)) {
            array_push($this->openAPINullablesSetToNull, 'LocationCondition');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LocationCondition', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LocationCondition'] = $LocationCondition;

        return $this;
    }

    /**
     * Gets AudienceCondition
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceCondition|null
     */
    public function getAudienceCondition()
    {
        if (!isset($this->container['AudienceCondition']) || is_null($this->container['AudienceCondition'])) {
            return null;
        }
        return $this->container['AudienceCondition'];
    }

    /**
     * Sets AudienceCondition
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceCondition|null $AudienceCondition AudienceCondition
     *
     * @return self
     */
    public function setAudienceCondition($AudienceCondition)
    {
        if (is_null($AudienceCondition)) {
            array_push($this->openAPINullablesSetToNull, 'AudienceCondition');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AudienceCondition', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AudienceCondition'] = $AudienceCondition;

        return $this;
    }

    /**
     * Gets DeviceCondition
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\DeviceCondition|null
     */
    public function getDeviceCondition()
    {
        if (!isset($this->container['DeviceCondition']) || is_null($this->container['DeviceCondition'])) {
            return null;
        }
        return $this->container['DeviceCondition'];
    }

    /**
     * Sets DeviceCondition
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\DeviceCondition|null $DeviceCondition DeviceCondition
     *
     * @return self
     */
    public function setDeviceCondition($DeviceCondition)
    {
        if (is_null($DeviceCondition)) {
            array_push($this->openAPINullablesSetToNull, 'DeviceCondition');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DeviceCondition', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DeviceCondition'] = $DeviceCondition;

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
     * Gets Operation
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionValueRuleOperator|mixed|null
     */
    public function getOperation()
    {
        if (!isset($this->container['Operation']) || is_null($this->container['Operation'])) {
            return null;
        }
        if ((is_object($this->container['Operation']) || is_string($this->container['Operation'])) && method_exists($this->container['Operation'], 'getValue')) {
            return $this->container['Operation']->getValue();
        }
        return $this->container['Operation'];
    }

    /**
     * Sets Operation
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionValueRuleOperator|mixed|null $Operation Operation
     *
     * @return self
     */
    public function setOperation($Operation)
    {
        if (is_null($Operation)) {
            throw new \InvalidArgumentException('non-nullable Operation cannot be null');
        }
        if (!$Operation instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionValueRuleOperator) {
            $Operation = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionValueRuleOperator($Operation);
        }
        $this->container['Operation'] = $Operation;

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
     * Gets Status
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionValueRuleStatus|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionValueRuleStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionValueRuleStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConversionValueRuleStatus($Status);
        }
        $this->container['Status'] = $Status;

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
