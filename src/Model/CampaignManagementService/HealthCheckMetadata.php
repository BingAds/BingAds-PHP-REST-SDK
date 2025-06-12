<?php
/**
 * HealthCheckMetadata
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

class HealthCheckMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'HealthCheckMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'HealthCheckName' => 'string',
        'HealthCheckDisplayName' => 'string',
        'HealthCheckDescription' => 'string',
        'HealthCheckSubType' => 'string',
        'HealthCheckCategory' => 'string',
        'HealthCheckSeverity' => 'string',
        'HealthCheckCategoryDisplayName' => 'string',
        'HealthCheckColumnsMetadata' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckColumnMetadata[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'HealthCheckName' => null,
        'HealthCheckDisplayName' => null,
        'HealthCheckDescription' => null,
        'HealthCheckSubType' => null,
        'HealthCheckCategory' => null,
        'HealthCheckSeverity' => null,
        'HealthCheckCategoryDisplayName' => null,
        'HealthCheckColumnsMetadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'HealthCheckName' => true,
        'HealthCheckDisplayName' => true,
        'HealthCheckDescription' => true,
        'HealthCheckSubType' => true,
        'HealthCheckCategory' => true,
        'HealthCheckSeverity' => true,
        'HealthCheckCategoryDisplayName' => true,
        'HealthCheckColumnsMetadata' => true
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
        'HealthCheckName' => 'HealthCheckName',
        'HealthCheckDisplayName' => 'HealthCheckDisplayName',
        'HealthCheckDescription' => 'HealthCheckDescription',
        'HealthCheckSubType' => 'HealthCheckSubType',
        'HealthCheckCategory' => 'HealthCheckCategory',
        'HealthCheckSeverity' => 'HealthCheckSeverity',
        'HealthCheckCategoryDisplayName' => 'HealthCheckCategoryDisplayName',
        'HealthCheckColumnsMetadata' => 'HealthCheckColumnsMetadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'HealthCheckName' => 'setHealthCheckName',
        'HealthCheckDisplayName' => 'setHealthCheckDisplayName',
        'HealthCheckDescription' => 'setHealthCheckDescription',
        'HealthCheckSubType' => 'setHealthCheckSubType',
        'HealthCheckCategory' => 'setHealthCheckCategory',
        'HealthCheckSeverity' => 'setHealthCheckSeverity',
        'HealthCheckCategoryDisplayName' => 'setHealthCheckCategoryDisplayName',
        'HealthCheckColumnsMetadata' => 'setHealthCheckColumnsMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'HealthCheckName' => 'getHealthCheckName',
        'HealthCheckDisplayName' => 'getHealthCheckDisplayName',
        'HealthCheckDescription' => 'getHealthCheckDescription',
        'HealthCheckSubType' => 'getHealthCheckSubType',
        'HealthCheckCategory' => 'getHealthCheckCategory',
        'HealthCheckSeverity' => 'getHealthCheckSeverity',
        'HealthCheckCategoryDisplayName' => 'getHealthCheckCategoryDisplayName',
        'HealthCheckColumnsMetadata' => 'getHealthCheckColumnsMetadata'
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
        $this->setIfExists('HealthCheckName', $data ?? [], null);
        $this->setIfExists('HealthCheckDisplayName', $data ?? [], null);
        $this->setIfExists('HealthCheckDescription', $data ?? [], null);
        $this->setIfExists('HealthCheckSubType', $data ?? [], null);
        $this->setIfExists('HealthCheckCategory', $data ?? [], null);
        $this->setIfExists('HealthCheckSeverity', $data ?? [], null);
        $this->setIfExists('HealthCheckCategoryDisplayName', $data ?? [], null);
        $this->setIfExists('HealthCheckColumnsMetadata', $data ?? [], null);
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
     * Gets HealthCheckName
     *
     * @return string|null
     */
    public function getHealthCheckName()
    {
        if (!isset($this->container['HealthCheckName']) || is_null($this->container['HealthCheckName'])) {
            return null;
        }
        return $this->container['HealthCheckName'];
    }

    /**
     * Sets HealthCheckName
     *
     * @param string|null $HealthCheckName HealthCheckName
     *
     * @return self
     */
    public function setHealthCheckName($HealthCheckName)
    {
        if (is_null($HealthCheckName)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckName'] = $HealthCheckName;

        return $this;
    }

    /**
     * Gets HealthCheckDisplayName
     *
     * @return string|null
     */
    public function getHealthCheckDisplayName()
    {
        if (!isset($this->container['HealthCheckDisplayName']) || is_null($this->container['HealthCheckDisplayName'])) {
            return null;
        }
        return $this->container['HealthCheckDisplayName'];
    }

    /**
     * Sets HealthCheckDisplayName
     *
     * @param string|null $HealthCheckDisplayName HealthCheckDisplayName
     *
     * @return self
     */
    public function setHealthCheckDisplayName($HealthCheckDisplayName)
    {
        if (is_null($HealthCheckDisplayName)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckDisplayName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckDisplayName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckDisplayName'] = $HealthCheckDisplayName;

        return $this;
    }

    /**
     * Gets HealthCheckDescription
     *
     * @return string|null
     */
    public function getHealthCheckDescription()
    {
        if (!isset($this->container['HealthCheckDescription']) || is_null($this->container['HealthCheckDescription'])) {
            return null;
        }
        return $this->container['HealthCheckDescription'];
    }

    /**
     * Sets HealthCheckDescription
     *
     * @param string|null $HealthCheckDescription HealthCheckDescription
     *
     * @return self
     */
    public function setHealthCheckDescription($HealthCheckDescription)
    {
        if (is_null($HealthCheckDescription)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckDescription', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckDescription'] = $HealthCheckDescription;

        return $this;
    }

    /**
     * Gets HealthCheckSubType
     *
     * @return string|null
     */
    public function getHealthCheckSubType()
    {
        if (!isset($this->container['HealthCheckSubType']) || is_null($this->container['HealthCheckSubType'])) {
            return null;
        }
        return $this->container['HealthCheckSubType'];
    }

    /**
     * Sets HealthCheckSubType
     *
     * @param string|null $HealthCheckSubType HealthCheckSubType
     *
     * @return self
     */
    public function setHealthCheckSubType($HealthCheckSubType)
    {
        if (is_null($HealthCheckSubType)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckSubType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckSubType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckSubType'] = $HealthCheckSubType;

        return $this;
    }

    /**
     * Gets HealthCheckCategory
     *
     * @return string|null
     */
    public function getHealthCheckCategory()
    {
        if (!isset($this->container['HealthCheckCategory']) || is_null($this->container['HealthCheckCategory'])) {
            return null;
        }
        return $this->container['HealthCheckCategory'];
    }

    /**
     * Sets HealthCheckCategory
     *
     * @param string|null $HealthCheckCategory HealthCheckCategory
     *
     * @return self
     */
    public function setHealthCheckCategory($HealthCheckCategory)
    {
        if (is_null($HealthCheckCategory)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckCategory');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckCategory', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckCategory'] = $HealthCheckCategory;

        return $this;
    }

    /**
     * Gets HealthCheckSeverity
     *
     * @return string|null
     */
    public function getHealthCheckSeverity()
    {
        if (!isset($this->container['HealthCheckSeverity']) || is_null($this->container['HealthCheckSeverity'])) {
            return null;
        }
        return $this->container['HealthCheckSeverity'];
    }

    /**
     * Sets HealthCheckSeverity
     *
     * @param string|null $HealthCheckSeverity HealthCheckSeverity
     *
     * @return self
     */
    public function setHealthCheckSeverity($HealthCheckSeverity)
    {
        if (is_null($HealthCheckSeverity)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckSeverity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckSeverity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckSeverity'] = $HealthCheckSeverity;

        return $this;
    }

    /**
     * Gets HealthCheckCategoryDisplayName
     *
     * @return string|null
     */
    public function getHealthCheckCategoryDisplayName()
    {
        if (!isset($this->container['HealthCheckCategoryDisplayName']) || is_null($this->container['HealthCheckCategoryDisplayName'])) {
            return null;
        }
        return $this->container['HealthCheckCategoryDisplayName'];
    }

    /**
     * Sets HealthCheckCategoryDisplayName
     *
     * @param string|null $HealthCheckCategoryDisplayName HealthCheckCategoryDisplayName
     *
     * @return self
     */
    public function setHealthCheckCategoryDisplayName($HealthCheckCategoryDisplayName)
    {
        if (is_null($HealthCheckCategoryDisplayName)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckCategoryDisplayName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckCategoryDisplayName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckCategoryDisplayName'] = $HealthCheckCategoryDisplayName;

        return $this;
    }

    /**
     * Gets HealthCheckColumnsMetadata
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckColumnMetadata[]|null
     */
    public function getHealthCheckColumnsMetadata()
    {
        if (!isset($this->container['HealthCheckColumnsMetadata']) || is_null($this->container['HealthCheckColumnsMetadata'])) {
            return null;
        }
        return $this->container['HealthCheckColumnsMetadata'];
    }

    /**
     * Sets HealthCheckColumnsMetadata
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckColumnMetadata[]|null $HealthCheckColumnsMetadata HealthCheckColumnsMetadata
     *
     * @return self
     */
    public function setHealthCheckColumnsMetadata($HealthCheckColumnsMetadata)
    {
        if (is_null($HealthCheckColumnsMetadata)) {
            array_push($this->openAPINullablesSetToNull, 'HealthCheckColumnsMetadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('HealthCheckColumnsMetadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['HealthCheckColumnsMetadata'] = $HealthCheckColumnsMetadata;

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
