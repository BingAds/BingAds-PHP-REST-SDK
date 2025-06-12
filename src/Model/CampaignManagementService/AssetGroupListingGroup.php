<?php
/**
 * AssetGroupListingGroup
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

class AssetGroupListingGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AssetGroupListingGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'AssetGroupId' => 'string',
        'AssetGroupListingType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupListingType',
        'ParentListingGroupId' => 'string',
        'Dimension' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductCondition',
        'IsExcluded' => 'bool',
        'ListingGroupPath' => 'string'
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
        'AssetGroupId' => 'int64',
        'AssetGroupListingType' => null,
        'ParentListingGroupId' => 'int64',
        'Dimension' => null,
        'IsExcluded' => null,
        'ListingGroupPath' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'AssetGroupId' => false,
        'AssetGroupListingType' => false,
        'ParentListingGroupId' => true,
        'Dimension' => true,
        'IsExcluded' => false,
        'ListingGroupPath' => true
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
        'AssetGroupId' => 'AssetGroupId',
        'AssetGroupListingType' => 'AssetGroupListingType',
        'ParentListingGroupId' => 'ParentListingGroupId',
        'Dimension' => 'Dimension',
        'IsExcluded' => 'IsExcluded',
        'ListingGroupPath' => 'ListingGroupPath'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'AssetGroupId' => 'setAssetGroupId',
        'AssetGroupListingType' => 'setAssetGroupListingType',
        'ParentListingGroupId' => 'setParentListingGroupId',
        'Dimension' => 'setDimension',
        'IsExcluded' => 'setIsExcluded',
        'ListingGroupPath' => 'setListingGroupPath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'AssetGroupId' => 'getAssetGroupId',
        'AssetGroupListingType' => 'getAssetGroupListingType',
        'ParentListingGroupId' => 'getParentListingGroupId',
        'Dimension' => 'getDimension',
        'IsExcluded' => 'getIsExcluded',
        'ListingGroupPath' => 'getListingGroupPath'
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
        $this->setIfExists('AssetGroupId', $data ?? [], null);
        $this->setIfExists('AssetGroupListingType', $data ?? [], null);
        $this->setIfExists('ParentListingGroupId', $data ?? [], null);
        $this->setIfExists('Dimension', $data ?? [], null);
        $this->setIfExists('IsExcluded', $data ?? [], null);
        $this->setIfExists('ListingGroupPath', $data ?? [], null);
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
     * Gets AssetGroupId
     *
     * @return string|null
     */
    public function getAssetGroupId()
    {
        if (!isset($this->container['AssetGroupId']) || is_null($this->container['AssetGroupId'])) {
            return null;
        }
        return $this->container['AssetGroupId'];
    }

    /**
     * Sets AssetGroupId
     *
     * @param string|null $AssetGroupId AssetGroupId
     *
     * @return self
     */
    public function setAssetGroupId($AssetGroupId)
    {
        if (is_null($AssetGroupId)) {
            throw new \InvalidArgumentException('non-nullable AssetGroupId cannot be null');
        }
        $this->container['AssetGroupId'] = $AssetGroupId;

        return $this;
    }

    /**
     * Gets AssetGroupListingType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupListingType|mixed|null
     */
    public function getAssetGroupListingType()
    {
        if (!isset($this->container['AssetGroupListingType']) || is_null($this->container['AssetGroupListingType'])) {
            return null;
        }
        if ((is_object($this->container['AssetGroupListingType']) || is_string($this->container['AssetGroupListingType'])) && method_exists($this->container['AssetGroupListingType'], 'getValue')) {
            return $this->container['AssetGroupListingType']->getValue();
        }
        return $this->container['AssetGroupListingType'];
    }

    /**
     * Sets AssetGroupListingType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupListingType|mixed|null $AssetGroupListingType AssetGroupListingType
     *
     * @return self
     */
    public function setAssetGroupListingType($AssetGroupListingType)
    {
        if (is_null($AssetGroupListingType)) {
            throw new \InvalidArgumentException('non-nullable AssetGroupListingType cannot be null');
        }
        if (!$AssetGroupListingType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupListingType) {
            $AssetGroupListingType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AssetGroupListingType($AssetGroupListingType);
        }
        $this->container['AssetGroupListingType'] = $AssetGroupListingType;

        return $this;
    }

    /**
     * Gets ParentListingGroupId
     *
     * @return string|null
     */
    public function getParentListingGroupId()
    {
        if (!isset($this->container['ParentListingGroupId']) || is_null($this->container['ParentListingGroupId'])) {
            return null;
        }
        return $this->container['ParentListingGroupId'];
    }

    /**
     * Sets ParentListingGroupId
     *
     * @param string|null $ParentListingGroupId ParentListingGroupId
     *
     * @return self
     */
    public function setParentListingGroupId($ParentListingGroupId)
    {
        if (is_null($ParentListingGroupId)) {
            array_push($this->openAPINullablesSetToNull, 'ParentListingGroupId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ParentListingGroupId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ParentListingGroupId'] = $ParentListingGroupId;

        return $this;
    }

    /**
     * Gets Dimension
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductCondition|null
     */
    public function getDimension()
    {
        if (!isset($this->container['Dimension']) || is_null($this->container['Dimension'])) {
            return null;
        }
        return $this->container['Dimension'];
    }

    /**
     * Sets Dimension
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ProductCondition|null $Dimension Dimension
     *
     * @return self
     */
    public function setDimension($Dimension)
    {
        if (is_null($Dimension)) {
            array_push($this->openAPINullablesSetToNull, 'Dimension');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Dimension', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Dimension'] = $Dimension;

        return $this;
    }

    /**
     * Gets IsExcluded
     *
     * @return bool|null
     */
    public function getIsExcluded()
    {
        if (!isset($this->container['IsExcluded']) || is_null($this->container['IsExcluded'])) {
            return null;
        }
        return $this->container['IsExcluded'];
    }

    /**
     * Sets IsExcluded
     *
     * @param bool|null $IsExcluded IsExcluded
     *
     * @return self
     */
    public function setIsExcluded($IsExcluded)
    {
        if (is_null($IsExcluded)) {
            throw new \InvalidArgumentException('non-nullable IsExcluded cannot be null');
        }
        $this->container['IsExcluded'] = $IsExcluded;

        return $this;
    }

    /**
     * Gets ListingGroupPath
     *
     * @return string|null
     */
    public function getListingGroupPath()
    {
        if (!isset($this->container['ListingGroupPath']) || is_null($this->container['ListingGroupPath'])) {
            return null;
        }
        return $this->container['ListingGroupPath'];
    }

    /**
     * Sets ListingGroupPath
     *
     * @param string|null $ListingGroupPath ListingGroupPath
     *
     * @return self
     */
    public function setListingGroupPath($ListingGroupPath)
    {
        if (is_null($ListingGroupPath)) {
            array_push($this->openAPINullablesSetToNull, 'ListingGroupPath');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ListingGroupPath', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ListingGroupPath'] = $ListingGroupPath;

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
