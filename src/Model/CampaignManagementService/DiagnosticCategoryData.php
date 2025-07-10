<?php
/**
 * DiagnosticCategoryData
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

class DiagnosticCategoryData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DiagnosticCategoryData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CategoryKey' => 'string',
        'CategoryDisplayName' => 'string',
        'CategorySeverity' => 'string',
        'CategoryStatus' => 'string',
        'Description' => 'string',
        'ActionLinks' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckActionLinkMetadata[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'CategoryKey' => null,
        'CategoryDisplayName' => null,
        'CategorySeverity' => null,
        'CategoryStatus' => null,
        'Description' => null,
        'ActionLinks' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CategoryKey' => true,
        'CategoryDisplayName' => true,
        'CategorySeverity' => true,
        'CategoryStatus' => true,
        'Description' => true,
        'ActionLinks' => true
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
        'CategoryKey' => 'CategoryKey',
        'CategoryDisplayName' => 'CategoryDisplayName',
        'CategorySeverity' => 'CategorySeverity',
        'CategoryStatus' => 'CategoryStatus',
        'Description' => 'Description',
        'ActionLinks' => 'ActionLinks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CategoryKey' => 'setCategoryKey',
        'CategoryDisplayName' => 'setCategoryDisplayName',
        'CategorySeverity' => 'setCategorySeverity',
        'CategoryStatus' => 'setCategoryStatus',
        'Description' => 'setDescription',
        'ActionLinks' => 'setActionLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CategoryKey' => 'getCategoryKey',
        'CategoryDisplayName' => 'getCategoryDisplayName',
        'CategorySeverity' => 'getCategorySeverity',
        'CategoryStatus' => 'getCategoryStatus',
        'Description' => 'getDescription',
        'ActionLinks' => 'getActionLinks'
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
        $this->setIfExists('CategoryKey', $data ?? [], null);
        $this->setIfExists('CategoryDisplayName', $data ?? [], null);
        $this->setIfExists('CategorySeverity', $data ?? [], null);
        $this->setIfExists('CategoryStatus', $data ?? [], null);
        $this->setIfExists('Description', $data ?? [], null);
        $this->setIfExists('ActionLinks', $data ?? [], null);
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
     * Gets CategoryKey
     *
     * @return string|null
     */
    public function getCategoryKey()
    {
        if (!isset($this->container['CategoryKey']) || is_null($this->container['CategoryKey'])) {
            return null;
        }
        return $this->container['CategoryKey'];
    }

    /**
     * Sets CategoryKey
     *
     * @param string|null $CategoryKey CategoryKey
     *
     * @return self
     */
    public function setCategoryKey($CategoryKey)
    {
        if (is_null($CategoryKey)) {
            array_push($this->openAPINullablesSetToNull, 'CategoryKey');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CategoryKey', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CategoryKey'] = $CategoryKey;

        return $this;
    }

    /**
     * Gets CategoryDisplayName
     *
     * @return string|null
     */
    public function getCategoryDisplayName()
    {
        if (!isset($this->container['CategoryDisplayName']) || is_null($this->container['CategoryDisplayName'])) {
            return null;
        }
        return $this->container['CategoryDisplayName'];
    }

    /**
     * Sets CategoryDisplayName
     *
     * @param string|null $CategoryDisplayName CategoryDisplayName
     *
     * @return self
     */
    public function setCategoryDisplayName($CategoryDisplayName)
    {
        if (is_null($CategoryDisplayName)) {
            array_push($this->openAPINullablesSetToNull, 'CategoryDisplayName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CategoryDisplayName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CategoryDisplayName'] = $CategoryDisplayName;

        return $this;
    }

    /**
     * Gets CategorySeverity
     *
     * @return string|null
     */
    public function getCategorySeverity()
    {
        if (!isset($this->container['CategorySeverity']) || is_null($this->container['CategorySeverity'])) {
            return null;
        }
        return $this->container['CategorySeverity'];
    }

    /**
     * Sets CategorySeverity
     *
     * @param string|null $CategorySeverity CategorySeverity
     *
     * @return self
     */
    public function setCategorySeverity($CategorySeverity)
    {
        if (is_null($CategorySeverity)) {
            array_push($this->openAPINullablesSetToNull, 'CategorySeverity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CategorySeverity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CategorySeverity'] = $CategorySeverity;

        return $this;
    }

    /**
     * Gets CategoryStatus
     *
     * @return string|null
     */
    public function getCategoryStatus()
    {
        if (!isset($this->container['CategoryStatus']) || is_null($this->container['CategoryStatus'])) {
            return null;
        }
        return $this->container['CategoryStatus'];
    }

    /**
     * Sets CategoryStatus
     *
     * @param string|null $CategoryStatus CategoryStatus
     *
     * @return self
     */
    public function setCategoryStatus($CategoryStatus)
    {
        if (is_null($CategoryStatus)) {
            array_push($this->openAPINullablesSetToNull, 'CategoryStatus');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CategoryStatus', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CategoryStatus'] = $CategoryStatus;

        return $this;
    }

    /**
     * Gets Description
     *
     * @return string|null
     */
    public function getDescription()
    {
        if (!isset($this->container['Description']) || is_null($this->container['Description'])) {
            return null;
        }
        return $this->container['Description'];
    }

    /**
     * Sets Description
     *
     * @param string|null $Description Description
     *
     * @return self
     */
    public function setDescription($Description)
    {
        if (is_null($Description)) {
            array_push($this->openAPINullablesSetToNull, 'Description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Description'] = $Description;

        return $this;
    }

    /**
     * Gets ActionLinks
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckActionLinkMetadata[]|null
     */
    public function getActionLinks()
    {
        if (!isset($this->container['ActionLinks']) || is_null($this->container['ActionLinks'])) {
            return null;
        }
        return $this->container['ActionLinks'];
    }

    /**
     * Sets ActionLinks
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckActionLinkMetadata[]|null $ActionLinks ActionLinks
     *
     * @return self
     */
    public function setActionLinks($ActionLinks)
    {
        if (is_null($ActionLinks)) {
            array_push($this->openAPINullablesSetToNull, 'ActionLinks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ActionLinks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ActionLinks'] = $ActionLinks;

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
