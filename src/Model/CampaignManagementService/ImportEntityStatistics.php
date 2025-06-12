<?php
/**
 * ImportEntityStatistics
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

class ImportEntityStatistics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ImportEntityStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'EntityType' => 'string',
        'Additions' => 'int',
        'Changes' => 'int',
        'Errors' => 'int',
        'Deletions' => 'int',
        'Total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'EntityType' => null,
        'Additions' => 'int32',
        'Changes' => 'int32',
        'Errors' => 'int32',
        'Deletions' => 'int32',
        'Total' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'EntityType' => true,
        'Additions' => true,
        'Changes' => true,
        'Errors' => true,
        'Deletions' => true,
        'Total' => true
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
        'EntityType' => 'EntityType',
        'Additions' => 'Additions',
        'Changes' => 'Changes',
        'Errors' => 'Errors',
        'Deletions' => 'Deletions',
        'Total' => 'Total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'EntityType' => 'setEntityType',
        'Additions' => 'setAdditions',
        'Changes' => 'setChanges',
        'Errors' => 'setErrors',
        'Deletions' => 'setDeletions',
        'Total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'EntityType' => 'getEntityType',
        'Additions' => 'getAdditions',
        'Changes' => 'getChanges',
        'Errors' => 'getErrors',
        'Deletions' => 'getDeletions',
        'Total' => 'getTotal'
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
        $this->setIfExists('EntityType', $data ?? [], null);
        $this->setIfExists('Additions', $data ?? [], null);
        $this->setIfExists('Changes', $data ?? [], null);
        $this->setIfExists('Errors', $data ?? [], null);
        $this->setIfExists('Deletions', $data ?? [], null);
        $this->setIfExists('Total', $data ?? [], null);
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
     * Gets EntityType
     *
     * @return string|null
     */
    public function getEntityType()
    {
        if (!isset($this->container['EntityType']) || is_null($this->container['EntityType'])) {
            return null;
        }
        return $this->container['EntityType'];
    }

    /**
     * Sets EntityType
     *
     * @param string|null $EntityType EntityType
     *
     * @return self
     */
    public function setEntityType($EntityType)
    {
        if (is_null($EntityType)) {
            array_push($this->openAPINullablesSetToNull, 'EntityType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EntityType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EntityType'] = $EntityType;

        return $this;
    }

    /**
     * Gets Additions
     *
     * @return int|null
     */
    public function getAdditions()
    {
        if (!isset($this->container['Additions']) || is_null($this->container['Additions'])) {
            return null;
        }
        return $this->container['Additions'];
    }

    /**
     * Sets Additions
     *
     * @param int|null $Additions Additions
     *
     * @return self
     */
    public function setAdditions($Additions)
    {
        if (is_null($Additions)) {
            array_push($this->openAPINullablesSetToNull, 'Additions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Additions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Additions'] = $Additions;

        return $this;
    }

    /**
     * Gets Changes
     *
     * @return int|null
     */
    public function getChanges()
    {
        if (!isset($this->container['Changes']) || is_null($this->container['Changes'])) {
            return null;
        }
        return $this->container['Changes'];
    }

    /**
     * Sets Changes
     *
     * @param int|null $Changes Changes
     *
     * @return self
     */
    public function setChanges($Changes)
    {
        if (is_null($Changes)) {
            array_push($this->openAPINullablesSetToNull, 'Changes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Changes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Changes'] = $Changes;

        return $this;
    }

    /**
     * Gets Errors
     *
     * @return int|null
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
     * @param int|null $Errors Errors
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
     * Gets Deletions
     *
     * @return int|null
     */
    public function getDeletions()
    {
        if (!isset($this->container['Deletions']) || is_null($this->container['Deletions'])) {
            return null;
        }
        return $this->container['Deletions'];
    }

    /**
     * Sets Deletions
     *
     * @param int|null $Deletions Deletions
     *
     * @return self
     */
    public function setDeletions($Deletions)
    {
        if (is_null($Deletions)) {
            array_push($this->openAPINullablesSetToNull, 'Deletions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Deletions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Deletions'] = $Deletions;

        return $this;
    }

    /**
     * Gets Total
     *
     * @return int|null
     */
    public function getTotal()
    {
        if (!isset($this->container['Total']) || is_null($this->container['Total'])) {
            return null;
        }
        return $this->container['Total'];
    }

    /**
     * Sets Total
     *
     * @param int|null $Total Total
     *
     * @return self
     */
    public function setTotal($Total)
    {
        if (is_null($Total)) {
            array_push($this->openAPINullablesSetToNull, 'Total');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Total', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Total'] = $Total;

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
