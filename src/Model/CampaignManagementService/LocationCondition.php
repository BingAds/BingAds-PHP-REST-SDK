<?php
/**
 * LocationCondition
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

class LocationCondition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LocationCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'IncludedLocations' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationConditionItem[]',
        'ExcludedLocations' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationConditionItem[]',
        'IncludedLocationIntent' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption',
        'ExcludedLocationIntent' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption',
        'IsPrimary' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'IncludedLocations' => null,
        'ExcludedLocations' => null,
        'IncludedLocationIntent' => null,
        'ExcludedLocationIntent' => null,
        'IsPrimary' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'IncludedLocations' => true,
        'ExcludedLocations' => true,
        'IncludedLocationIntent' => false,
        'ExcludedLocationIntent' => false,
        'IsPrimary' => false
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
        'IncludedLocations' => 'IncludedLocations',
        'ExcludedLocations' => 'ExcludedLocations',
        'IncludedLocationIntent' => 'IncludedLocationIntent',
        'ExcludedLocationIntent' => 'ExcludedLocationIntent',
        'IsPrimary' => 'IsPrimary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'IncludedLocations' => 'setIncludedLocations',
        'ExcludedLocations' => 'setExcludedLocations',
        'IncludedLocationIntent' => 'setIncludedLocationIntent',
        'ExcludedLocationIntent' => 'setExcludedLocationIntent',
        'IsPrimary' => 'setIsPrimary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'IncludedLocations' => 'getIncludedLocations',
        'ExcludedLocations' => 'getExcludedLocations',
        'IncludedLocationIntent' => 'getIncludedLocationIntent',
        'ExcludedLocationIntent' => 'getExcludedLocationIntent',
        'IsPrimary' => 'getIsPrimary'
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
        $this->setIfExists('IncludedLocations', $data ?? [], null);
        $this->setIfExists('ExcludedLocations', $data ?? [], null);
        $this->setIfExists('IncludedLocationIntent', $data ?? [], null);
        $this->setIfExists('ExcludedLocationIntent', $data ?? [], null);
        $this->setIfExists('IsPrimary', $data ?? [], null);
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
     * Gets IncludedLocations
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationConditionItem[]|null
     */
    public function getIncludedLocations()
    {
        if (!isset($this->container['IncludedLocations']) || is_null($this->container['IncludedLocations'])) {
            return null;
        }
        return $this->container['IncludedLocations'];
    }

    /**
     * Sets IncludedLocations
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationConditionItem[]|null $IncludedLocations IncludedLocations
     *
     * @return self
     */
    public function setIncludedLocations($IncludedLocations)
    {
        if (is_null($IncludedLocations)) {
            array_push($this->openAPINullablesSetToNull, 'IncludedLocations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IncludedLocations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IncludedLocations'] = $IncludedLocations;

        return $this;
    }

    /**
     * Gets ExcludedLocations
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationConditionItem[]|null
     */
    public function getExcludedLocations()
    {
        if (!isset($this->container['ExcludedLocations']) || is_null($this->container['ExcludedLocations'])) {
            return null;
        }
        return $this->container['ExcludedLocations'];
    }

    /**
     * Sets ExcludedLocations
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\LocationConditionItem[]|null $ExcludedLocations ExcludedLocations
     *
     * @return self
     */
    public function setExcludedLocations($ExcludedLocations)
    {
        if (is_null($ExcludedLocations)) {
            array_push($this->openAPINullablesSetToNull, 'ExcludedLocations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExcludedLocations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExcludedLocations'] = $ExcludedLocations;

        return $this;
    }

    /**
     * Gets IncludedLocationIntent
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption|mixed|null
     */
    public function getIncludedLocationIntent()
    {
        if (!isset($this->container['IncludedLocationIntent']) || is_null($this->container['IncludedLocationIntent'])) {
            return null;
        }
        if ((is_object($this->container['IncludedLocationIntent']) || is_string($this->container['IncludedLocationIntent'])) && method_exists($this->container['IncludedLocationIntent'], 'getValue')) {
            return $this->container['IncludedLocationIntent']->getValue();
        }
        return $this->container['IncludedLocationIntent'];
    }

    /**
     * Sets IncludedLocationIntent
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption|mixed|null $IncludedLocationIntent IncludedLocationIntent
     *
     * @return self
     */
    public function setIncludedLocationIntent($IncludedLocationIntent)
    {
        if (is_null($IncludedLocationIntent)) {
            throw new \InvalidArgumentException('non-nullable IncludedLocationIntent cannot be null');
        }
        if (!$IncludedLocationIntent instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption) {
            $IncludedLocationIntent = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption($IncludedLocationIntent);
        }
        $this->container['IncludedLocationIntent'] = $IncludedLocationIntent;

        return $this;
    }

    /**
     * Gets ExcludedLocationIntent
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption|mixed|null
     */
    public function getExcludedLocationIntent()
    {
        if (!isset($this->container['ExcludedLocationIntent']) || is_null($this->container['ExcludedLocationIntent'])) {
            return null;
        }
        if ((is_object($this->container['ExcludedLocationIntent']) || is_string($this->container['ExcludedLocationIntent'])) && method_exists($this->container['ExcludedLocationIntent'], 'getValue')) {
            return $this->container['ExcludedLocationIntent']->getValue();
        }
        return $this->container['ExcludedLocationIntent'];
    }

    /**
     * Sets ExcludedLocationIntent
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption|mixed|null $ExcludedLocationIntent ExcludedLocationIntent
     *
     * @return self
     */
    public function setExcludedLocationIntent($ExcludedLocationIntent)
    {
        if (is_null($ExcludedLocationIntent)) {
            throw new \InvalidArgumentException('non-nullable ExcludedLocationIntent cannot be null');
        }
        if (!$ExcludedLocationIntent instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption) {
            $ExcludedLocationIntent = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\IntentOption($ExcludedLocationIntent);
        }
        $this->container['ExcludedLocationIntent'] = $ExcludedLocationIntent;

        return $this;
    }

    /**
     * Gets IsPrimary
     *
     * @return bool|null
     */
    public function getIsPrimary()
    {
        if (!isset($this->container['IsPrimary']) || is_null($this->container['IsPrimary'])) {
            return null;
        }
        return $this->container['IsPrimary'];
    }

    /**
     * Sets IsPrimary
     *
     * @param bool|null $IsPrimary IsPrimary
     *
     * @return self
     */
    public function setIsPrimary($IsPrimary)
    {
        if (is_null($IsPrimary)) {
            throw new \InvalidArgumentException('non-nullable IsPrimary cannot be null');
        }
        $this->container['IsPrimary'] = $IsPrimary;

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
