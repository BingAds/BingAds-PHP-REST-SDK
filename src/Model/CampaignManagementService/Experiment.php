<?php
/**
 * Experiment
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

class Experiment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Experiment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'StartDate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Date',
        'EndDate' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Date',
        'BaseCampaignId' => 'string',
        'ExperimentCampaignId' => 'string',
        'TrafficSplitPercent' => 'int',
        'ExperimentStatus' => 'string',
        'ExperimentType' => 'string'
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
        'StartDate' => null,
        'EndDate' => null,
        'BaseCampaignId' => 'int64',
        'ExperimentCampaignId' => 'int64',
        'TrafficSplitPercent' => 'int32',
        'ExperimentStatus' => null,
        'ExperimentType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'Name' => true,
        'StartDate' => true,
        'EndDate' => true,
        'BaseCampaignId' => true,
        'ExperimentCampaignId' => true,
        'TrafficSplitPercent' => true,
        'ExperimentStatus' => true,
        'ExperimentType' => true
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
        'StartDate' => 'StartDate',
        'EndDate' => 'EndDate',
        'BaseCampaignId' => 'BaseCampaignId',
        'ExperimentCampaignId' => 'ExperimentCampaignId',
        'TrafficSplitPercent' => 'TrafficSplitPercent',
        'ExperimentStatus' => 'ExperimentStatus',
        'ExperimentType' => 'ExperimentType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'Name' => 'setName',
        'StartDate' => 'setStartDate',
        'EndDate' => 'setEndDate',
        'BaseCampaignId' => 'setBaseCampaignId',
        'ExperimentCampaignId' => 'setExperimentCampaignId',
        'TrafficSplitPercent' => 'setTrafficSplitPercent',
        'ExperimentStatus' => 'setExperimentStatus',
        'ExperimentType' => 'setExperimentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'Name' => 'getName',
        'StartDate' => 'getStartDate',
        'EndDate' => 'getEndDate',
        'BaseCampaignId' => 'getBaseCampaignId',
        'ExperimentCampaignId' => 'getExperimentCampaignId',
        'TrafficSplitPercent' => 'getTrafficSplitPercent',
        'ExperimentStatus' => 'getExperimentStatus',
        'ExperimentType' => 'getExperimentType'
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
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('BaseCampaignId', $data ?? [], null);
        $this->setIfExists('ExperimentCampaignId', $data ?? [], null);
        $this->setIfExists('TrafficSplitPercent', $data ?? [], null);
        $this->setIfExists('ExperimentStatus', $data ?? [], null);
        $this->setIfExists('ExperimentType', $data ?? [], null);
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
        $this->container['Name'] = $Name;

        return $this;
    }

    /**
     * Gets StartDate
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null $StartDate StartDate
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
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Date|null $EndDate EndDate
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
     * Gets BaseCampaignId
     *
     * @return string|null
     */
    public function getBaseCampaignId()
    {
        if (!isset($this->container['BaseCampaignId']) || is_null($this->container['BaseCampaignId'])) {
            return null;
        }
        return $this->container['BaseCampaignId'];
    }

    /**
     * Sets BaseCampaignId
     *
     * @param string|null $BaseCampaignId BaseCampaignId
     *
     * @return self
     */
    public function setBaseCampaignId($BaseCampaignId)
    {
        if (is_null($BaseCampaignId)) {
            array_push($this->openAPINullablesSetToNull, 'BaseCampaignId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BaseCampaignId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BaseCampaignId'] = $BaseCampaignId;

        return $this;
    }

    /**
     * Gets ExperimentCampaignId
     *
     * @return string|null
     */
    public function getExperimentCampaignId()
    {
        if (!isset($this->container['ExperimentCampaignId']) || is_null($this->container['ExperimentCampaignId'])) {
            return null;
        }
        return $this->container['ExperimentCampaignId'];
    }

    /**
     * Sets ExperimentCampaignId
     *
     * @param string|null $ExperimentCampaignId ExperimentCampaignId
     *
     * @return self
     */
    public function setExperimentCampaignId($ExperimentCampaignId)
    {
        if (is_null($ExperimentCampaignId)) {
            array_push($this->openAPINullablesSetToNull, 'ExperimentCampaignId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExperimentCampaignId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExperimentCampaignId'] = $ExperimentCampaignId;

        return $this;
    }

    /**
     * Gets TrafficSplitPercent
     *
     * @return int|null
     */
    public function getTrafficSplitPercent()
    {
        if (!isset($this->container['TrafficSplitPercent']) || is_null($this->container['TrafficSplitPercent'])) {
            return null;
        }
        return $this->container['TrafficSplitPercent'];
    }

    /**
     * Sets TrafficSplitPercent
     *
     * @param int|null $TrafficSplitPercent TrafficSplitPercent
     *
     * @return self
     */
    public function setTrafficSplitPercent($TrafficSplitPercent)
    {
        if (is_null($TrafficSplitPercent)) {
            array_push($this->openAPINullablesSetToNull, 'TrafficSplitPercent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TrafficSplitPercent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TrafficSplitPercent'] = $TrafficSplitPercent;

        return $this;
    }

    /**
     * Gets ExperimentStatus
     *
     * @return string|null
     */
    public function getExperimentStatus()
    {
        if (!isset($this->container['ExperimentStatus']) || is_null($this->container['ExperimentStatus'])) {
            return null;
        }
        return $this->container['ExperimentStatus'];
    }

    /**
     * Sets ExperimentStatus
     *
     * @param string|null $ExperimentStatus ExperimentStatus
     *
     * @return self
     */
    public function setExperimentStatus($ExperimentStatus)
    {
        if (is_null($ExperimentStatus)) {
            array_push($this->openAPINullablesSetToNull, 'ExperimentStatus');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExperimentStatus', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExperimentStatus'] = $ExperimentStatus;

        return $this;
    }

    /**
     * Gets ExperimentType
     *
     * @return string|null
     */
    public function getExperimentType()
    {
        if (!isset($this->container['ExperimentType']) || is_null($this->container['ExperimentType'])) {
            return null;
        }
        return $this->container['ExperimentType'];
    }

    /**
     * Sets ExperimentType
     *
     * @param string|null $ExperimentType ExperimentType
     *
     * @return self
     */
    public function setExperimentType($ExperimentType)
    {
        if (is_null($ExperimentType)) {
            array_push($this->openAPINullablesSetToNull, 'ExperimentType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExperimentType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExperimentType'] = $ExperimentType;

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
