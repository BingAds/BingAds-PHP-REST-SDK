<?php
/**
 * GetDiagnosticsResponse
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

class GetDiagnosticsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetDiagnosticsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'DiagnosticTileData' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\DiagnosticTileData',
        'DiagnosticCategoryData' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\DiagnosticCategoryData[]',
        'DiagnosticCardData' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\DiagnosticCardData[]',
        'DiagnosticErrors' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'DiagnosticTileData' => null,
        'DiagnosticCategoryData' => null,
        'DiagnosticCardData' => null,
        'DiagnosticErrors' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'DiagnosticTileData' => true,
        'DiagnosticCategoryData' => true,
        'DiagnosticCardData' => true,
        'DiagnosticErrors' => true
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
        'DiagnosticTileData' => 'DiagnosticTileData',
        'DiagnosticCategoryData' => 'DiagnosticCategoryData',
        'DiagnosticCardData' => 'DiagnosticCardData',
        'DiagnosticErrors' => 'DiagnosticErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'DiagnosticTileData' => 'setDiagnosticTileData',
        'DiagnosticCategoryData' => 'setDiagnosticCategoryData',
        'DiagnosticCardData' => 'setDiagnosticCardData',
        'DiagnosticErrors' => 'setDiagnosticErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'DiagnosticTileData' => 'getDiagnosticTileData',
        'DiagnosticCategoryData' => 'getDiagnosticCategoryData',
        'DiagnosticCardData' => 'getDiagnosticCardData',
        'DiagnosticErrors' => 'getDiagnosticErrors'
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
        $this->setIfExists('DiagnosticTileData', $data ?? [], null);
        $this->setIfExists('DiagnosticCategoryData', $data ?? [], null);
        $this->setIfExists('DiagnosticCardData', $data ?? [], null);
        $this->setIfExists('DiagnosticErrors', $data ?? [], null);
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
     * Gets DiagnosticTileData
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\DiagnosticTileData|null
     */
    public function getDiagnosticTileData()
    {
        if (!isset($this->container['DiagnosticTileData']) || is_null($this->container['DiagnosticTileData'])) {
            return null;
        }
        return $this->container['DiagnosticTileData'];
    }

    /**
     * Sets DiagnosticTileData
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\DiagnosticTileData|null $DiagnosticTileData DiagnosticTileData
     *
     * @return self
     */
    public function setDiagnosticTileData($DiagnosticTileData)
    {
        if (is_null($DiagnosticTileData)) {
            array_push($this->openAPINullablesSetToNull, 'DiagnosticTileData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DiagnosticTileData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DiagnosticTileData'] = $DiagnosticTileData;

        return $this;
    }

    /**
     * Gets DiagnosticCategoryData
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\DiagnosticCategoryData[]|null
     */
    public function getDiagnosticCategoryData()
    {
        if (!isset($this->container['DiagnosticCategoryData']) || is_null($this->container['DiagnosticCategoryData'])) {
            return null;
        }
        return $this->container['DiagnosticCategoryData'];
    }

    /**
     * Sets DiagnosticCategoryData
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\DiagnosticCategoryData[]|null $DiagnosticCategoryData DiagnosticCategoryData
     *
     * @return self
     */
    public function setDiagnosticCategoryData($DiagnosticCategoryData)
    {
        if (is_null($DiagnosticCategoryData)) {
            array_push($this->openAPINullablesSetToNull, 'DiagnosticCategoryData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DiagnosticCategoryData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DiagnosticCategoryData'] = $DiagnosticCategoryData;

        return $this;
    }

    /**
     * Gets DiagnosticCardData
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\DiagnosticCardData[]|null
     */
    public function getDiagnosticCardData()
    {
        if (!isset($this->container['DiagnosticCardData']) || is_null($this->container['DiagnosticCardData'])) {
            return null;
        }
        return $this->container['DiagnosticCardData'];
    }

    /**
     * Sets DiagnosticCardData
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\DiagnosticCardData[]|null $DiagnosticCardData DiagnosticCardData
     *
     * @return self
     */
    public function setDiagnosticCardData($DiagnosticCardData)
    {
        if (is_null($DiagnosticCardData)) {
            array_push($this->openAPINullablesSetToNull, 'DiagnosticCardData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DiagnosticCardData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DiagnosticCardData'] = $DiagnosticCardData;

        return $this;
    }

    /**
     * Gets DiagnosticErrors
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckError[]|null
     */
    public function getDiagnosticErrors()
    {
        if (!isset($this->container['DiagnosticErrors']) || is_null($this->container['DiagnosticErrors'])) {
            return null;
        }
        return $this->container['DiagnosticErrors'];
    }

    /**
     * Sets DiagnosticErrors
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\HealthCheckError[]|null $DiagnosticErrors DiagnosticErrors
     *
     * @return self
     */
    public function setDiagnosticErrors($DiagnosticErrors)
    {
        if (is_null($DiagnosticErrors)) {
            array_push($this->openAPINullablesSetToNull, 'DiagnosticErrors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DiagnosticErrors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DiagnosticErrors'] = $DiagnosticErrors;

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
