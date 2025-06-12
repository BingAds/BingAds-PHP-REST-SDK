<?php
/**
 * AdCenterAuthorizationFault
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

class AdCenterAuthorizationFault extends ApplicationFault implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AdCenterAuthorizationFault';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ErrorMessage' => 'string',
        'MTServerName' => 'string',
        'FaultingLayer' => '\Microsoft\MsAds\Rest\Model\BulkService\FaultSource',
        'ErrorSourceSystem' => 'string',
        'TrackingId' => 'string',
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
        'ErrorMessage' => null,
        'MTServerName' => null,
        'FaultingLayer' => null,
        'ErrorSourceSystem' => null,
        'TrackingId' => null,
        'Type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ErrorMessage' => true,
        'MTServerName' => true,
        'FaultingLayer' => false,
        'ErrorSourceSystem' => true,
        'TrackingId' => true,
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
        'ErrorMessage' => 'ErrorMessage',
        'MTServerName' => 'MTServerName',
        'FaultingLayer' => 'FaultingLayer',
        'ErrorSourceSystem' => 'ErrorSourceSystem',
        'TrackingId' => 'TrackingId',
        'Type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ErrorMessage' => 'setErrorMessage',
        'MTServerName' => 'setMTServerName',
        'FaultingLayer' => 'setFaultingLayer',
        'ErrorSourceSystem' => 'setErrorSourceSystem',
        'TrackingId' => 'setTrackingId',
        'Type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ErrorMessage' => 'getErrorMessage',
        'MTServerName' => 'getMTServerName',
        'FaultingLayer' => 'getFaultingLayer',
        'ErrorSourceSystem' => 'getErrorSourceSystem',
        'TrackingId' => 'getTrackingId',
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
        $this->setIfExists('ErrorMessage', $data ?? [], null);
        $this->setIfExists('MTServerName', $data ?? [], null);
        $this->setIfExists('FaultingLayer', $data ?? [], null);
        $this->setIfExists('ErrorSourceSystem', $data ?? [], null);
        $this->setIfExists('TrackingId', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'AdCenterAuthorizationFault');
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
     * Gets ErrorMessage
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        if (!isset($this->container['ErrorMessage']) || is_null($this->container['ErrorMessage'])) {
            return null;
        }
        return $this->container['ErrorMessage'];
    }

    /**
     * Sets ErrorMessage
     *
     * @param string|null $ErrorMessage ErrorMessage
     *
     * @return self
     */
    public function setErrorMessage($ErrorMessage)
    {
        if (is_null($ErrorMessage)) {
            array_push($this->openAPINullablesSetToNull, 'ErrorMessage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ErrorMessage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ErrorMessage'] = $ErrorMessage;

        return $this;
    }

    /**
     * Gets MTServerName
     *
     * @return string|null
     */
    public function getMTServerName()
    {
        if (!isset($this->container['MTServerName']) || is_null($this->container['MTServerName'])) {
            return null;
        }
        return $this->container['MTServerName'];
    }

    /**
     * Sets MTServerName
     *
     * @param string|null $MTServerName MTServerName
     *
     * @return self
     */
    public function setMTServerName($MTServerName)
    {
        if (is_null($MTServerName)) {
            array_push($this->openAPINullablesSetToNull, 'MTServerName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MTServerName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MTServerName'] = $MTServerName;

        return $this;
    }

    /**
     * Gets FaultingLayer
     *
     * @return \Microsoft\MsAds\Rest\Model\BulkService\FaultSource|mixed|null
     */
    public function getFaultingLayer()
    {
        if (!isset($this->container['FaultingLayer']) || is_null($this->container['FaultingLayer'])) {
            return null;
        }
        if ((is_object($this->container['FaultingLayer']) || is_string($this->container['FaultingLayer'])) && method_exists($this->container['FaultingLayer'], 'getValue')) {
            return $this->container['FaultingLayer']->getValue();
        }
        return $this->container['FaultingLayer'];
    }

    /**
     * Sets FaultingLayer
     *
     * @param \Microsoft\MsAds\Rest\Model\BulkService\FaultSource|mixed|null $FaultingLayer FaultingLayer
     *
     * @return self
     */
    public function setFaultingLayer($FaultingLayer)
    {
        if (is_null($FaultingLayer)) {
            throw new \InvalidArgumentException('non-nullable FaultingLayer cannot be null');
        }
        if (!$FaultingLayer instanceof \Microsoft\MsAds\Rest\Model\BulkService\FaultSource) {
            $FaultingLayer = new \Microsoft\MsAds\Rest\Model\BulkService\FaultSource($FaultingLayer);
        }
        $this->container['FaultingLayer'] = $FaultingLayer;

        return $this;
    }

    /**
     * Gets ErrorSourceSystem
     *
     * @return string|null
     */
    public function getErrorSourceSystem()
    {
        if (!isset($this->container['ErrorSourceSystem']) || is_null($this->container['ErrorSourceSystem'])) {
            return null;
        }
        return $this->container['ErrorSourceSystem'];
    }

    /**
     * Sets ErrorSourceSystem
     *
     * @param string|null $ErrorSourceSystem ErrorSourceSystem
     *
     * @return self
     */
    public function setErrorSourceSystem($ErrorSourceSystem)
    {
        if (is_null($ErrorSourceSystem)) {
            array_push($this->openAPINullablesSetToNull, 'ErrorSourceSystem');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ErrorSourceSystem', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ErrorSourceSystem'] = $ErrorSourceSystem;

        return $this;
    }

    /**
     * Gets TrackingId
     *
     * @return string|null
     */
    public function getTrackingId()
    {
        if (!isset($this->container['TrackingId']) || is_null($this->container['TrackingId'])) {
            return null;
        }
        return $this->container['TrackingId'];
    }

    /**
     * Sets TrackingId
     *
     * @param string|null $TrackingId TrackingId
     *
     * @return self
     */
    public function setTrackingId($TrackingId)
    {
        if (is_null($TrackingId)) {
            array_push($this->openAPINullablesSetToNull, 'TrackingId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TrackingId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TrackingId'] = $TrackingId;

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
