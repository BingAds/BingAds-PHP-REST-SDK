<?php
/**
 * BatchErrorCollectionBase
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

class BatchErrorCollectionBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BatchErrorCollectionBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ForwardCompatibilityMap' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]',
        'FieldPath' => 'string',
        'BatchErrors' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BatchError[]',
        'Message' => 'string',
        'ErrorCode' => 'string',
        'Code' => 'int',
        'Details' => 'string',
        'Index' => 'int',
        'Type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ForwardCompatibilityMap' => null,
        'FieldPath' => null,
        'BatchErrors' => null,
        'Message' => null,
        'ErrorCode' => null,
        'Code' => 'int32',
        'Details' => null,
        'Index' => 'int32',
        'Type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ForwardCompatibilityMap' => true,
        'FieldPath' => true,
        'BatchErrors' => true,
        'Message' => true,
        'ErrorCode' => true,
        'Code' => true,
        'Details' => true,
        'Index' => false,
        'Type' => true
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
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap',
        'FieldPath' => 'FieldPath',
        'BatchErrors' => 'BatchErrors',
        'Message' => 'Message',
        'ErrorCode' => 'ErrorCode',
        'Code' => 'Code',
        'Details' => 'Details',
        'Index' => 'Index',
        'Type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap',
        'FieldPath' => 'setFieldPath',
        'BatchErrors' => 'setBatchErrors',
        'Message' => 'setMessage',
        'ErrorCode' => 'setErrorCode',
        'Code' => 'setCode',
        'Details' => 'setDetails',
        'Index' => 'setIndex',
        'Type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ForwardCompatibilityMap' => 'getForwardCompatibilityMap',
        'FieldPath' => 'getFieldPath',
        'BatchErrors' => 'getBatchErrors',
        'Message' => 'getMessage',
        'ErrorCode' => 'getErrorCode',
        'Code' => 'getCode',
        'Details' => 'getDetails',
        'Index' => 'getIndex',
        'Type' => 'getType'
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
        $this->setIfExists('ForwardCompatibilityMap', $data ?? [], null);
        $this->setIfExists('FieldPath', $data ?? [], null);
        $this->setIfExists('BatchErrors', $data ?? [], null);
        $this->setIfExists('Message', $data ?? [], null);
        $this->setIfExists('ErrorCode', $data ?? [], null);
        $this->setIfExists('Code', $data ?? [], null);
        $this->setIfExists('Details', $data ?? [], null);
        $this->setIfExists('Index', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'BatchErrorCollection');
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
     * Gets FieldPath
     *
     * @return string|null
     */
    public function getFieldPath()
    {
        if (!isset($this->container['FieldPath']) || is_null($this->container['FieldPath'])) {
            return null;
        }
        return $this->container['FieldPath'];
    }

    /**
     * Sets FieldPath
     *
     * @param string|null $FieldPath FieldPath
     *
     * @return self
     */
    public function setFieldPath($FieldPath)
    {
        if (is_null($FieldPath)) {
            array_push($this->openAPINullablesSetToNull, 'FieldPath');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FieldPath', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FieldPath'] = $FieldPath;

        return $this;
    }

    /**
     * Gets BatchErrors
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\BatchError[]|null
     */
    public function getBatchErrors()
    {
        if (!isset($this->container['BatchErrors']) || is_null($this->container['BatchErrors'])) {
            return null;
        }
        return $this->container['BatchErrors'];
    }

    /**
     * Sets BatchErrors
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\BatchError[]|null $BatchErrors BatchErrors
     *
     * @return self
     */
    public function setBatchErrors($BatchErrors)
    {
        if (is_null($BatchErrors)) {
            array_push($this->openAPINullablesSetToNull, 'BatchErrors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BatchErrors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BatchErrors'] = $BatchErrors;

        return $this;
    }

    /**
     * Gets Message
     *
     * @return string|null
     */
    public function getMessage()
    {
        if (!isset($this->container['Message']) || is_null($this->container['Message'])) {
            return null;
        }
        return $this->container['Message'];
    }

    /**
     * Sets Message
     *
     * @param string|null $Message Message
     *
     * @return self
     */
    public function setMessage($Message)
    {
        if (is_null($Message)) {
            array_push($this->openAPINullablesSetToNull, 'Message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Message'] = $Message;

        return $this;
    }

    /**
     * Gets ErrorCode
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        if (!isset($this->container['ErrorCode']) || is_null($this->container['ErrorCode'])) {
            return null;
        }
        return $this->container['ErrorCode'];
    }

    /**
     * Sets ErrorCode
     *
     * @param string|null $ErrorCode ErrorCode
     *
     * @return self
     */
    public function setErrorCode($ErrorCode)
    {
        if (is_null($ErrorCode)) {
            array_push($this->openAPINullablesSetToNull, 'ErrorCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ErrorCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ErrorCode'] = $ErrorCode;

        return $this;
    }

    /**
     * Gets Code
     *
     * @return int|null
     */
    public function getCode()
    {
        if (!isset($this->container['Code']) || is_null($this->container['Code'])) {
            return null;
        }
        return $this->container['Code'];
    }

    /**
     * Sets Code
     *
     * @param int|null $Code Code
     *
     * @return self
     */
    public function setCode($Code)
    {
        if (is_null($Code)) {
            array_push($this->openAPINullablesSetToNull, 'Code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Code'] = $Code;

        return $this;
    }

    /**
     * Gets Details
     *
     * @return string|null
     */
    public function getDetails()
    {
        if (!isset($this->container['Details']) || is_null($this->container['Details'])) {
            return null;
        }
        return $this->container['Details'];
    }

    /**
     * Sets Details
     *
     * @param string|null $Details Details
     *
     * @return self
     */
    public function setDetails($Details)
    {
        if (is_null($Details)) {
            array_push($this->openAPINullablesSetToNull, 'Details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Details', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Details'] = $Details;

        return $this;
    }

    /**
     * Gets Index
     *
     * @return int|null
     */
    public function getIndex()
    {
        if (!isset($this->container['Index']) || is_null($this->container['Index'])) {
            return null;
        }
        return $this->container['Index'];
    }

    /**
     * Sets Index
     *
     * @param int|null $Index Index
     *
     * @return self
     */
    public function setIndex($Index)
    {
        if (is_null($Index)) {
            throw new \InvalidArgumentException('non-nullable Index cannot be null');
        }
        $this->container['Index'] = $Index;

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
