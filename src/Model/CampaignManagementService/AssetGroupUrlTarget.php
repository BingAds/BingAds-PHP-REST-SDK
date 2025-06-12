<?php
/**
 * AssetGroupUrlTarget
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

class AssetGroupUrlTarget implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AssetGroupUrlTarget';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'TargetCondition1' => 'string',
        'TargetConditionOperator1' => 'string',
        'TargetValue1' => 'string',
        'TargetCondition2' => 'string',
        'TargetConditionOperator2' => 'string',
        'TargetValue2' => 'string',
        'TargetCondition3' => 'string',
        'TargetConditionOperator3' => 'string',
        'TargetValue3' => 'string',
        'Status' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\GenericEntityStatus'
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
        'TargetCondition1' => null,
        'TargetConditionOperator1' => null,
        'TargetValue1' => null,
        'TargetCondition2' => null,
        'TargetConditionOperator2' => null,
        'TargetValue2' => null,
        'TargetCondition3' => null,
        'TargetConditionOperator3' => null,
        'TargetValue3' => null,
        'Status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'TargetCondition1' => true,
        'TargetConditionOperator1' => true,
        'TargetValue1' => true,
        'TargetCondition2' => true,
        'TargetConditionOperator2' => true,
        'TargetValue2' => true,
        'TargetCondition3' => true,
        'TargetConditionOperator3' => true,
        'TargetValue3' => true,
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
        'TargetCondition1' => 'TargetCondition1',
        'TargetConditionOperator1' => 'TargetConditionOperator1',
        'TargetValue1' => 'TargetValue1',
        'TargetCondition2' => 'TargetCondition2',
        'TargetConditionOperator2' => 'TargetConditionOperator2',
        'TargetValue2' => 'TargetValue2',
        'TargetCondition3' => 'TargetCondition3',
        'TargetConditionOperator3' => 'TargetConditionOperator3',
        'TargetValue3' => 'TargetValue3',
        'Status' => 'Status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'TargetCondition1' => 'setTargetCondition1',
        'TargetConditionOperator1' => 'setTargetConditionOperator1',
        'TargetValue1' => 'setTargetValue1',
        'TargetCondition2' => 'setTargetCondition2',
        'TargetConditionOperator2' => 'setTargetConditionOperator2',
        'TargetValue2' => 'setTargetValue2',
        'TargetCondition3' => 'setTargetCondition3',
        'TargetConditionOperator3' => 'setTargetConditionOperator3',
        'TargetValue3' => 'setTargetValue3',
        'Status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'TargetCondition1' => 'getTargetCondition1',
        'TargetConditionOperator1' => 'getTargetConditionOperator1',
        'TargetValue1' => 'getTargetValue1',
        'TargetCondition2' => 'getTargetCondition2',
        'TargetConditionOperator2' => 'getTargetConditionOperator2',
        'TargetValue2' => 'getTargetValue2',
        'TargetCondition3' => 'getTargetCondition3',
        'TargetConditionOperator3' => 'getTargetConditionOperator3',
        'TargetValue3' => 'getTargetValue3',
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
        $this->setIfExists('TargetCondition1', $data ?? [], null);
        $this->setIfExists('TargetConditionOperator1', $data ?? [], null);
        $this->setIfExists('TargetValue1', $data ?? [], null);
        $this->setIfExists('TargetCondition2', $data ?? [], null);
        $this->setIfExists('TargetConditionOperator2', $data ?? [], null);
        $this->setIfExists('TargetValue2', $data ?? [], null);
        $this->setIfExists('TargetCondition3', $data ?? [], null);
        $this->setIfExists('TargetConditionOperator3', $data ?? [], null);
        $this->setIfExists('TargetValue3', $data ?? [], null);
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
     * Gets TargetCondition1
     *
     * @return string|null
     */
    public function getTargetCondition1()
    {
        if (!isset($this->container['TargetCondition1']) || is_null($this->container['TargetCondition1'])) {
            return null;
        }
        return $this->container['TargetCondition1'];
    }

    /**
     * Sets TargetCondition1
     *
     * @param string|null $TargetCondition1 TargetCondition1
     *
     * @return self
     */
    public function setTargetCondition1($TargetCondition1)
    {
        if (is_null($TargetCondition1)) {
            array_push($this->openAPINullablesSetToNull, 'TargetCondition1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetCondition1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetCondition1'] = $TargetCondition1;

        return $this;
    }

    /**
     * Gets TargetConditionOperator1
     *
     * @return string|null
     */
    public function getTargetConditionOperator1()
    {
        if (!isset($this->container['TargetConditionOperator1']) || is_null($this->container['TargetConditionOperator1'])) {
            return null;
        }
        return $this->container['TargetConditionOperator1'];
    }

    /**
     * Sets TargetConditionOperator1
     *
     * @param string|null $TargetConditionOperator1 TargetConditionOperator1
     *
     * @return self
     */
    public function setTargetConditionOperator1($TargetConditionOperator1)
    {
        if (is_null($TargetConditionOperator1)) {
            array_push($this->openAPINullablesSetToNull, 'TargetConditionOperator1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetConditionOperator1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetConditionOperator1'] = $TargetConditionOperator1;

        return $this;
    }

    /**
     * Gets TargetValue1
     *
     * @return string|null
     */
    public function getTargetValue1()
    {
        if (!isset($this->container['TargetValue1']) || is_null($this->container['TargetValue1'])) {
            return null;
        }
        return $this->container['TargetValue1'];
    }

    /**
     * Sets TargetValue1
     *
     * @param string|null $TargetValue1 TargetValue1
     *
     * @return self
     */
    public function setTargetValue1($TargetValue1)
    {
        if (is_null($TargetValue1)) {
            array_push($this->openAPINullablesSetToNull, 'TargetValue1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetValue1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetValue1'] = $TargetValue1;

        return $this;
    }

    /**
     * Gets TargetCondition2
     *
     * @return string|null
     */
    public function getTargetCondition2()
    {
        if (!isset($this->container['TargetCondition2']) || is_null($this->container['TargetCondition2'])) {
            return null;
        }
        return $this->container['TargetCondition2'];
    }

    /**
     * Sets TargetCondition2
     *
     * @param string|null $TargetCondition2 TargetCondition2
     *
     * @return self
     */
    public function setTargetCondition2($TargetCondition2)
    {
        if (is_null($TargetCondition2)) {
            array_push($this->openAPINullablesSetToNull, 'TargetCondition2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetCondition2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetCondition2'] = $TargetCondition2;

        return $this;
    }

    /**
     * Gets TargetConditionOperator2
     *
     * @return string|null
     */
    public function getTargetConditionOperator2()
    {
        if (!isset($this->container['TargetConditionOperator2']) || is_null($this->container['TargetConditionOperator2'])) {
            return null;
        }
        return $this->container['TargetConditionOperator2'];
    }

    /**
     * Sets TargetConditionOperator2
     *
     * @param string|null $TargetConditionOperator2 TargetConditionOperator2
     *
     * @return self
     */
    public function setTargetConditionOperator2($TargetConditionOperator2)
    {
        if (is_null($TargetConditionOperator2)) {
            array_push($this->openAPINullablesSetToNull, 'TargetConditionOperator2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetConditionOperator2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetConditionOperator2'] = $TargetConditionOperator2;

        return $this;
    }

    /**
     * Gets TargetValue2
     *
     * @return string|null
     */
    public function getTargetValue2()
    {
        if (!isset($this->container['TargetValue2']) || is_null($this->container['TargetValue2'])) {
            return null;
        }
        return $this->container['TargetValue2'];
    }

    /**
     * Sets TargetValue2
     *
     * @param string|null $TargetValue2 TargetValue2
     *
     * @return self
     */
    public function setTargetValue2($TargetValue2)
    {
        if (is_null($TargetValue2)) {
            array_push($this->openAPINullablesSetToNull, 'TargetValue2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetValue2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetValue2'] = $TargetValue2;

        return $this;
    }

    /**
     * Gets TargetCondition3
     *
     * @return string|null
     */
    public function getTargetCondition3()
    {
        if (!isset($this->container['TargetCondition3']) || is_null($this->container['TargetCondition3'])) {
            return null;
        }
        return $this->container['TargetCondition3'];
    }

    /**
     * Sets TargetCondition3
     *
     * @param string|null $TargetCondition3 TargetCondition3
     *
     * @return self
     */
    public function setTargetCondition3($TargetCondition3)
    {
        if (is_null($TargetCondition3)) {
            array_push($this->openAPINullablesSetToNull, 'TargetCondition3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetCondition3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetCondition3'] = $TargetCondition3;

        return $this;
    }

    /**
     * Gets TargetConditionOperator3
     *
     * @return string|null
     */
    public function getTargetConditionOperator3()
    {
        if (!isset($this->container['TargetConditionOperator3']) || is_null($this->container['TargetConditionOperator3'])) {
            return null;
        }
        return $this->container['TargetConditionOperator3'];
    }

    /**
     * Sets TargetConditionOperator3
     *
     * @param string|null $TargetConditionOperator3 TargetConditionOperator3
     *
     * @return self
     */
    public function setTargetConditionOperator3($TargetConditionOperator3)
    {
        if (is_null($TargetConditionOperator3)) {
            array_push($this->openAPINullablesSetToNull, 'TargetConditionOperator3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetConditionOperator3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetConditionOperator3'] = $TargetConditionOperator3;

        return $this;
    }

    /**
     * Gets TargetValue3
     *
     * @return string|null
     */
    public function getTargetValue3()
    {
        if (!isset($this->container['TargetValue3']) || is_null($this->container['TargetValue3'])) {
            return null;
        }
        return $this->container['TargetValue3'];
    }

    /**
     * Sets TargetValue3
     *
     * @param string|null $TargetValue3 TargetValue3
     *
     * @return self
     */
    public function setTargetValue3($TargetValue3)
    {
        if (is_null($TargetValue3)) {
            array_push($this->openAPINullablesSetToNull, 'TargetValue3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TargetValue3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TargetValue3'] = $TargetValue3;

        return $this;
    }

    /**
     * Gets Status
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenericEntityStatus|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenericEntityStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenericEntityStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenericEntityStatus($Status);
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
