<?php
/**
 * Notification
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

class Notification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Notification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'TypeId' => 'int',
        'Id' => 'string',
        'Severity' => 'int',
        'Title' => 'string',
        'Message' => 'string',
        'AdditionalInfo' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValueEntityOfstringAndstring[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'TypeId' => 'int32',
        'Id' => 'int64',
        'Severity' => 'uint8',
        'Title' => null,
        'Message' => null,
        'AdditionalInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'TypeId' => false,
        'Id' => false,
        'Severity' => false,
        'Title' => true,
        'Message' => true,
        'AdditionalInfo' => true
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
        'TypeId' => 'TypeId',
        'Id' => 'Id',
        'Severity' => 'Severity',
        'Title' => 'Title',
        'Message' => 'Message',
        'AdditionalInfo' => 'AdditionalInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'TypeId' => 'setTypeId',
        'Id' => 'setId',
        'Severity' => 'setSeverity',
        'Title' => 'setTitle',
        'Message' => 'setMessage',
        'AdditionalInfo' => 'setAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'TypeId' => 'getTypeId',
        'Id' => 'getId',
        'Severity' => 'getSeverity',
        'Title' => 'getTitle',
        'Message' => 'getMessage',
        'AdditionalInfo' => 'getAdditionalInfo'
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
        $this->setIfExists('TypeId', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Severity', $data ?? [], null);
        $this->setIfExists('Title', $data ?? [], null);
        $this->setIfExists('Message', $data ?? [], null);
        $this->setIfExists('AdditionalInfo', $data ?? [], null);
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
     * Gets TypeId
     *
     * @return int|null
     */
    public function getTypeId()
    {
        if (!isset($this->container['TypeId']) || is_null($this->container['TypeId'])) {
            return null;
        }
        return $this->container['TypeId'];
    }

    /**
     * Sets TypeId
     *
     * @param int|null $TypeId TypeId
     *
     * @return self
     */
    public function setTypeId($TypeId)
    {
        if (is_null($TypeId)) {
            throw new \InvalidArgumentException('non-nullable TypeId cannot be null');
        }
        $this->container['TypeId'] = $TypeId;

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
            throw new \InvalidArgumentException('non-nullable Id cannot be null');
        }
        $this->container['Id'] = $Id;

        return $this;
    }

    /**
     * Gets Severity
     *
     * @return int|null
     */
    public function getSeverity()
    {
        if (!isset($this->container['Severity']) || is_null($this->container['Severity'])) {
            return null;
        }
        return $this->container['Severity'];
    }

    /**
     * Sets Severity
     *
     * @param int|null $Severity Severity
     *
     * @return self
     */
    public function setSeverity($Severity)
    {
        if (is_null($Severity)) {
            throw new \InvalidArgumentException('non-nullable Severity cannot be null');
        }
        $this->container['Severity'] = $Severity;

        return $this;
    }

    /**
     * Gets Title
     *
     * @return string|null
     */
    public function getTitle()
    {
        if (!isset($this->container['Title']) || is_null($this->container['Title'])) {
            return null;
        }
        return $this->container['Title'];
    }

    /**
     * Sets Title
     *
     * @param string|null $Title Title
     *
     * @return self
     */
    public function setTitle($Title)
    {
        if (is_null($Title)) {
            array_push($this->openAPINullablesSetToNull, 'Title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Title'] = $Title;

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
     * Gets AdditionalInfo
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValueEntityOfstringAndstring[]|null
     */
    public function getAdditionalInfo()
    {
        if (!isset($this->container['AdditionalInfo']) || is_null($this->container['AdditionalInfo'])) {
            return null;
        }
        return $this->container['AdditionalInfo'];
    }

    /**
     * Sets AdditionalInfo
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValueEntityOfstringAndstring[]|null $AdditionalInfo AdditionalInfo
     *
     * @return self
     */
    public function setAdditionalInfo($AdditionalInfo)
    {
        if (is_null($AdditionalInfo)) {
            array_push($this->openAPINullablesSetToNull, 'AdditionalInfo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdditionalInfo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdditionalInfo'] = $AdditionalInfo;

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
