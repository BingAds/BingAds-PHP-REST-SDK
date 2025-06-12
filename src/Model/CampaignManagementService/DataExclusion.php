<?php
/**
 * DataExclusion
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

class DataExclusion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DataExclusion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'Description' => 'string',
        'StartDate' => '\DateTime',
        'EndDate' => '\DateTime',
        'DeviceTypeFilter' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\DeviceType',
        'CampaignTypeFilter' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType',
        'CampaignAssociations' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignAssociation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Id' => 'int64',
        'Name' => null,
        'Description' => null,
        'StartDate' => 'date-time',
        'EndDate' => 'date-time',
        'DeviceTypeFilter' => null,
        'CampaignTypeFilter' => null,
        'CampaignAssociations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'Name' => true,
        'Description' => true,
        'StartDate' => true,
        'EndDate' => true,
        'DeviceTypeFilter' => false,
        'CampaignTypeFilter' => false,
        'CampaignAssociations' => true
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
        'Id' => 'Id',
        'Name' => 'Name',
        'Description' => 'Description',
        'StartDate' => 'StartDate',
        'EndDate' => 'EndDate',
        'DeviceTypeFilter' => 'DeviceTypeFilter',
        'CampaignTypeFilter' => 'CampaignTypeFilter',
        'CampaignAssociations' => 'CampaignAssociations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'Name' => 'setName',
        'Description' => 'setDescription',
        'StartDate' => 'setStartDate',
        'EndDate' => 'setEndDate',
        'DeviceTypeFilter' => 'setDeviceTypeFilter',
        'CampaignTypeFilter' => 'setCampaignTypeFilter',
        'CampaignAssociations' => 'setCampaignAssociations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'Name' => 'getName',
        'Description' => 'getDescription',
        'StartDate' => 'getStartDate',
        'EndDate' => 'getEndDate',
        'DeviceTypeFilter' => 'getDeviceTypeFilter',
        'CampaignTypeFilter' => 'getCampaignTypeFilter',
        'CampaignAssociations' => 'getCampaignAssociations'
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
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('Description', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('DeviceTypeFilter', $data ?? [], null);
        $this->setIfExists('CampaignTypeFilter', $data ?? [], null);
        $this->setIfExists('CampaignAssociations', $data ?? [], null);
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

        if (!is_null($this->container['Name']) && (mb_strlen($this->container['Name']) > 255)) {
            $invalidProperties[] = "invalid value for 'Name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['Description']) && (mb_strlen($this->container['Description']) > 2048)) {
            $invalidProperties[] = "invalid value for 'Description', the character length must be smaller than or equal to 2048.";
        }

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
            array_push($this->openAPINullablesSetToNull, 'Id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Id'] = $Id;

        return $this;
    }

    /**
     * Gets Name
     *
     * @return string|null
     */
    public function getName()
    {
        if (!isset($this->container['Name']) || is_null($this->container['Name'])) {
            return null;
        }
        return $this->container['Name'];
    }

    /**
     * Sets Name
     *
     * @param string|null $Name Name
     *
     * @return self
     */
    public function setName($Name)
    {
        if (is_null($Name)) {
            array_push($this->openAPINullablesSetToNull, 'Name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($Name) && (mb_strlen($Name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $Name when calling DataExclusion., must be smaller than or equal to 255.');
        }

        $this->container['Name'] = $Name;

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
        if (!is_null($Description) && (mb_strlen($Description) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $Description when calling DataExclusion., must be smaller than or equal to 2048.');
        }

        $this->container['Description'] = $Description;

        return $this;
    }

    /**
     * Gets StartDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        if (!isset($this->container['StartDate']) || is_null($this->container['StartDate'])) {
            return null;
        }
        return $this->container['StartDate'];
    }

    /**
     * Sets StartDate
     *
     * @param \DateTime|null $StartDate StartDate
     *
     * @return self
     */
    public function setStartDate($StartDate)
    {
        if (is_null($StartDate)) {
            array_push($this->openAPINullablesSetToNull, 'StartDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StartDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StartDate'] = $StartDate;

        return $this;
    }

    /**
     * Gets EndDate
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        if (!isset($this->container['EndDate']) || is_null($this->container['EndDate'])) {
            return null;
        }
        return $this->container['EndDate'];
    }

    /**
     * Sets EndDate
     *
     * @param \DateTime|null $EndDate EndDate
     *
     * @return self
     */
    public function setEndDate($EndDate)
    {
        if (is_null($EndDate)) {
            array_push($this->openAPINullablesSetToNull, 'EndDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EndDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EndDate'] = $EndDate;

        return $this;
    }

    /**
     * Gets DeviceTypeFilter
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\DeviceType|mixed|null
     */
    public function getDeviceTypeFilter()
    {
        if (!isset($this->container['DeviceTypeFilter']) || is_null($this->container['DeviceTypeFilter'])) {
            return null;
        }
        if ((is_object($this->container['DeviceTypeFilter']) || is_string($this->container['DeviceTypeFilter'])) && method_exists($this->container['DeviceTypeFilter'], 'getValue')) {
            return $this->container['DeviceTypeFilter']->getValue();
        }
        return $this->container['DeviceTypeFilter'];
    }

    /**
     * Sets DeviceTypeFilter
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\DeviceType|mixed|null $DeviceTypeFilter DeviceTypeFilter
     *
     * @return self
     */
    public function setDeviceTypeFilter($DeviceTypeFilter)
    {
        if (is_null($DeviceTypeFilter)) {
            throw new \InvalidArgumentException('non-nullable DeviceTypeFilter cannot be null');
        }
        if (!$DeviceTypeFilter instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\DeviceType) {
            $DeviceTypeFilter = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\DeviceType($DeviceTypeFilter);
        }
        $this->container['DeviceTypeFilter'] = $DeviceTypeFilter;

        return $this;
    }

    /**
     * Gets CampaignTypeFilter
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType|mixed|null
     */
    public function getCampaignTypeFilter()
    {
        if (!isset($this->container['CampaignTypeFilter']) || is_null($this->container['CampaignTypeFilter'])) {
            return null;
        }
        if ((is_object($this->container['CampaignTypeFilter']) || is_string($this->container['CampaignTypeFilter'])) && method_exists($this->container['CampaignTypeFilter'], 'getValue')) {
            return $this->container['CampaignTypeFilter']->getValue();
        }
        return $this->container['CampaignTypeFilter'];
    }

    /**
     * Sets CampaignTypeFilter
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType|mixed|null $CampaignTypeFilter CampaignTypeFilter
     *
     * @return self
     */
    public function setCampaignTypeFilter($CampaignTypeFilter)
    {
        if (is_null($CampaignTypeFilter)) {
            throw new \InvalidArgumentException('non-nullable CampaignTypeFilter cannot be null');
        }
        if (!$CampaignTypeFilter instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType) {
            $CampaignTypeFilter = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignType($CampaignTypeFilter);
        }
        $this->container['CampaignTypeFilter'] = $CampaignTypeFilter;

        return $this;
    }

    /**
     * Gets CampaignAssociations
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignAssociation[]|null
     */
    public function getCampaignAssociations()
    {
        if (!isset($this->container['CampaignAssociations']) || is_null($this->container['CampaignAssociations'])) {
            return null;
        }
        return $this->container['CampaignAssociations'];
    }

    /**
     * Sets CampaignAssociations
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignAssociation[]|null $CampaignAssociations CampaignAssociations
     *
     * @return self
     */
    public function setCampaignAssociations($CampaignAssociations)
    {
        if (is_null($CampaignAssociations)) {
            array_push($this->openAPINullablesSetToNull, 'CampaignAssociations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CampaignAssociations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CampaignAssociations'] = $CampaignAssociations;

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
