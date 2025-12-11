<?php
/**
 * AudienceGroupDimension
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

class AudienceGroupDimension implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'Type';

    /**
     * Associative array for mapping discriminator values to model class names
     *
     * @var string[]
     */
    public const MAPPINGS = [
        'Age' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeDimension',
        'Audience' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceDimension',
        'Gender' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderDimension',
        'Profile' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\ProfileDimension',
    ];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AudienceGroupDimension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Type' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceGroupDimensionType',
        'AgeRanges' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeRange[]',
        'GenderTypes' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderType[]',
        'Audiences' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceInfo[]',
        'Profiles' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ProfileInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Type' => null,
        'AgeRanges' => null,
        'GenderTypes' => null,
        'Audiences' => null,
        'Profiles' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Type' => false,
        'AgeRanges' => true,
        'GenderTypes' => true,
        'Audiences' => true,
        'Profiles' => true
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
        'Type' => 'Type',
        'AgeRanges' => 'AgeRanges',
        'GenderTypes' => 'GenderTypes',
        'Audiences' => 'Audiences',
        'Profiles' => 'Profiles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Type' => 'setType',
        'AgeRanges' => 'setAgeRanges',
        'GenderTypes' => 'setGenderTypes',
        'Audiences' => 'setAudiences',
        'Profiles' => 'setProfiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Type' => 'getType',
        'AgeRanges' => 'getAgeRanges',
        'GenderTypes' => 'getGenderTypes',
        'Audiences' => 'getAudiences',
        'Profiles' => 'getProfiles'
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
        $this->setIfExists('Type', $data ?? [], null);
        $this->setIfExists('AgeRanges', $data ?? [], null);
        $this->setIfExists('GenderTypes', $data ?? [], null);
        $this->setIfExists('Audiences', $data ?? [], null);
        $this->setIfExists('Profiles', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['Type'] = static::$openAPIModelName;
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
     * Gets Type
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceGroupDimensionType|mixed|null
     */
    public function getType()
    {
        if (!isset($this->container['Type']) || is_null($this->container['Type'])) {
            return null;
        }
        if ((is_object($this->container['Type']) || is_string($this->container['Type'])) && method_exists($this->container['Type'], 'getValue')) {
            return $this->container['Type']->getValue();
        }
        return $this->container['Type'];
    }

    /**
     * Sets Type
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceGroupDimensionType|mixed|null $Type Type
     *
     * @return self
     */
    public function setType($Type)
    {
        if (is_null($Type)) {
            throw new \InvalidArgumentException('non-nullable Type cannot be null');
        }
        if (!$Type instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceGroupDimensionType) {
            $Type = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceGroupDimensionType($Type);
        }
        $this->container['Type'] = $Type;

        return $this;
    }

    /**
     * Gets AgeRanges
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeRange[]|mixed|null
     */
    public function getAgeRanges()
    {
        if (!isset($this->container['AgeRanges']) || is_null($this->container['AgeRanges'])) {
            return null;
        }
        $values = [];
        if (is_array($this->container['AgeRanges'])) {
            foreach ($this->container['AgeRanges'] as $AgeRangesItem) {
                if ((is_object($AgeRangesItem) || is_string($AgeRangesItem)) && method_exists($AgeRangesItem, 'getValue')) {
                    $values[] = $AgeRangesItem->getValue();
                }
            }
        }
        if (count($values) > 0) {
            return $values;
        }
        return $this->container['AgeRanges'];
    }

    /**
     * Sets AgeRanges
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeRange[]|mixed|null $AgeRanges AgeRanges
     *
     * @return self
     */
    public function setAgeRanges($AgeRanges)
    {
        if (is_null($AgeRanges)) {
            array_push($this->openAPINullablesSetToNull, 'AgeRanges');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AgeRanges', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_array($AgeRanges)) {
            $AgeRanges = [$AgeRanges];
        }
        foreach ($AgeRanges as $key => $AgeRangesItem) {
            if (!$AgeRangesItem instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeRange) {
                $AgeRanges[$key] = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AgeRange($AgeRangesItem);
            }
        }
        $this->container['AgeRanges'] = $AgeRanges;

        return $this;
    }

    /**
     * Gets GenderTypes
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderType[]|mixed|null
     */
    public function getGenderTypes()
    {
        if (!isset($this->container['GenderTypes']) || is_null($this->container['GenderTypes'])) {
            return null;
        }
        $values = [];
        if (is_array($this->container['GenderTypes'])) {
            foreach ($this->container['GenderTypes'] as $GenderTypesItem) {
                if ((is_object($GenderTypesItem) || is_string($GenderTypesItem)) && method_exists($GenderTypesItem, 'getValue')) {
                    $values[] = $GenderTypesItem->getValue();
                }
            }
        }
        if (count($values) > 0) {
            return $values;
        }
        return $this->container['GenderTypes'];
    }

    /**
     * Sets GenderTypes
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderType[]|mixed|null $GenderTypes GenderTypes
     *
     * @return self
     */
    public function setGenderTypes($GenderTypes)
    {
        if (is_null($GenderTypes)) {
            array_push($this->openAPINullablesSetToNull, 'GenderTypes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('GenderTypes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_array($GenderTypes)) {
            $GenderTypes = [$GenderTypes];
        }
        foreach ($GenderTypes as $key => $GenderTypesItem) {
            if (!$GenderTypesItem instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderType) {
                $GenderTypes[$key] = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\GenderType($GenderTypesItem);
            }
        }
        $this->container['GenderTypes'] = $GenderTypes;

        return $this;
    }

    /**
     * Gets Audiences
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceInfo[]|null
     */
    public function getAudiences()
    {
        if (!isset($this->container['Audiences']) || is_null($this->container['Audiences'])) {
            return null;
        }
        return $this->container['Audiences'];
    }

    /**
     * Sets Audiences
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AudienceInfo[]|null $Audiences Audiences
     *
     * @return self
     */
    public function setAudiences($Audiences)
    {
        if (is_null($Audiences)) {
            array_push($this->openAPINullablesSetToNull, 'Audiences');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Audiences', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Audiences'] = $Audiences;

        return $this;
    }

    /**
     * Gets Profiles
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProfileInfo[]|null
     */
    public function getProfiles()
    {
        if (!isset($this->container['Profiles']) || is_null($this->container['Profiles'])) {
            return null;
        }
        return $this->container['Profiles'];
    }

    /**
     * Sets Profiles
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProfileInfo[]|null $Profiles Profiles
     *
     * @return self
     */
    public function setProfiles($Profiles)
    {
        if (is_null($Profiles)) {
            array_push($this->openAPINullablesSetToNull, 'Profiles');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Profiles', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Profiles'] = $Profiles;

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
