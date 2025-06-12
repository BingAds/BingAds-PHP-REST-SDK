<?php
/**
 * UploadEntityRecordsResponse
 * BulkService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\BulkService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\BulkService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class UploadEntityRecordsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UploadEntityRecordsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'EntityRecords' => 'string[]',
        'RequestId' => 'string',
        'RequestStatus' => 'string',
        'Errors' => '\Microsoft\MsAds\Rest\Model\BulkService\OperationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'EntityRecords' => null,
        'RequestId' => null,
        'RequestStatus' => null,
        'Errors' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'EntityRecords' => true,
        'RequestId' => true,
        'RequestStatus' => true,
        'Errors' => true
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
        'EntityRecords' => 'EntityRecords',
        'RequestId' => 'RequestId',
        'RequestStatus' => 'RequestStatus',
        'Errors' => 'Errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'EntityRecords' => 'setEntityRecords',
        'RequestId' => 'setRequestId',
        'RequestStatus' => 'setRequestStatus',
        'Errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'EntityRecords' => 'getEntityRecords',
        'RequestId' => 'getRequestId',
        'RequestStatus' => 'getRequestStatus',
        'Errors' => 'getErrors'
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
        $this->setIfExists('EntityRecords', $data ?? [], null);
        $this->setIfExists('RequestId', $data ?? [], null);
        $this->setIfExists('RequestStatus', $data ?? [], null);
        $this->setIfExists('Errors', $data ?? [], null);
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
     * Gets EntityRecords
     *
     * @return string[]|null
     */
    public function getEntityRecords()
    {
        if (!isset($this->container['EntityRecords']) || is_null($this->container['EntityRecords'])) {
            return null;
        }
        return $this->container['EntityRecords'];
    }

    /**
     * Sets EntityRecords
     *
     * @param string[]|null $EntityRecords EntityRecords
     *
     * @return self
     */
    public function setEntityRecords($EntityRecords)
    {
        if (is_null($EntityRecords)) {
            array_push($this->openAPINullablesSetToNull, 'EntityRecords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EntityRecords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EntityRecords'] = $EntityRecords;

        return $this;
    }

    /**
     * Gets RequestId
     *
     * @return string|null
     */
    public function getRequestId()
    {
        if (!isset($this->container['RequestId']) || is_null($this->container['RequestId'])) {
            return null;
        }
        return $this->container['RequestId'];
    }

    /**
     * Sets RequestId
     *
     * @param string|null $RequestId RequestId
     *
     * @return self
     */
    public function setRequestId($RequestId)
    {
        if (is_null($RequestId)) {
            array_push($this->openAPINullablesSetToNull, 'RequestId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RequestId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RequestId'] = $RequestId;

        return $this;
    }

    /**
     * Gets RequestStatus
     *
     * @return string|null
     */
    public function getRequestStatus()
    {
        if (!isset($this->container['RequestStatus']) || is_null($this->container['RequestStatus'])) {
            return null;
        }
        return $this->container['RequestStatus'];
    }

    /**
     * Sets RequestStatus
     *
     * @param string|null $RequestStatus RequestStatus
     *
     * @return self
     */
    public function setRequestStatus($RequestStatus)
    {
        if (is_null($RequestStatus)) {
            array_push($this->openAPINullablesSetToNull, 'RequestStatus');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RequestStatus', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RequestStatus'] = $RequestStatus;

        return $this;
    }

    /**
     * Gets Errors
     *
     * @return \Microsoft\MsAds\Rest\Model\BulkService\OperationError[]|null
     */
    public function getErrors()
    {
        if (!isset($this->container['Errors']) || is_null($this->container['Errors'])) {
            return null;
        }
        return $this->container['Errors'];
    }

    /**
     * Sets Errors
     *
     * @param \Microsoft\MsAds\Rest\Model\BulkService\OperationError[]|null $Errors Errors
     *
     * @return self
     */
    public function setErrors($Errors)
    {
        if (is_null($Errors)) {
            array_push($this->openAPINullablesSetToNull, 'Errors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Errors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Errors'] = $Errors;

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
