<?php
/**
 * BMCStore
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

class BMCStore implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BMCStore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'IsActive' => 'bool',
        'IsProductAdsEnabled' => 'bool',
        'HasCatalog' => 'bool',
        'SubType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\BMCStoreSubType',
        'StoreUrl' => 'string'
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
        'IsActive' => null,
        'IsProductAdsEnabled' => null,
        'HasCatalog' => null,
        'SubType' => null,
        'StoreUrl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => false,
        'Name' => true,
        'IsActive' => false,
        'IsProductAdsEnabled' => false,
        'HasCatalog' => false,
        'SubType' => false,
        'StoreUrl' => true
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
        'IsActive' => 'IsActive',
        'IsProductAdsEnabled' => 'IsProductAdsEnabled',
        'HasCatalog' => 'HasCatalog',
        'SubType' => 'SubType',
        'StoreUrl' => 'StoreUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'Name' => 'setName',
        'IsActive' => 'setIsActive',
        'IsProductAdsEnabled' => 'setIsProductAdsEnabled',
        'HasCatalog' => 'setHasCatalog',
        'SubType' => 'setSubType',
        'StoreUrl' => 'setStoreUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'Name' => 'getName',
        'IsActive' => 'getIsActive',
        'IsProductAdsEnabled' => 'getIsProductAdsEnabled',
        'HasCatalog' => 'getHasCatalog',
        'SubType' => 'getSubType',
        'StoreUrl' => 'getStoreUrl'
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
        $this->setIfExists('IsActive', $data ?? [], null);
        $this->setIfExists('IsProductAdsEnabled', $data ?? [], null);
        $this->setIfExists('HasCatalog', $data ?? [], null);
        $this->setIfExists('SubType', $data ?? [], null);
        $this->setIfExists('StoreUrl', $data ?? [], null);
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
            throw new \InvalidArgumentException('non-nullable Id cannot be null');
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
     * Gets IsActive
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        if (!isset($this->container['IsActive']) || is_null($this->container['IsActive'])) {
            return null;
        }
        return $this->container['IsActive'];
    }

    /**
     * Sets IsActive
     *
     * @param bool|null $IsActive IsActive
     *
     * @return self
     */
    public function setIsActive($IsActive)
    {
        if (is_null($IsActive)) {
            throw new \InvalidArgumentException('non-nullable IsActive cannot be null');
        }
        $this->container['IsActive'] = $IsActive;

        return $this;
    }

    /**
     * Gets IsProductAdsEnabled
     *
     * @return bool|null
     */
    public function getIsProductAdsEnabled()
    {
        if (!isset($this->container['IsProductAdsEnabled']) || is_null($this->container['IsProductAdsEnabled'])) {
            return null;
        }
        return $this->container['IsProductAdsEnabled'];
    }

    /**
     * Sets IsProductAdsEnabled
     *
     * @param bool|null $IsProductAdsEnabled IsProductAdsEnabled
     *
     * @return self
     */
    public function setIsProductAdsEnabled($IsProductAdsEnabled)
    {
        if (is_null($IsProductAdsEnabled)) {
            throw new \InvalidArgumentException('non-nullable IsProductAdsEnabled cannot be null');
        }
        $this->container['IsProductAdsEnabled'] = $IsProductAdsEnabled;

        return $this;
    }

    /**
     * Gets HasCatalog
     *
     * @return bool|null
     */
    public function getHasCatalog()
    {
        if (!isset($this->container['HasCatalog']) || is_null($this->container['HasCatalog'])) {
            return null;
        }
        return $this->container['HasCatalog'];
    }

    /**
     * Sets HasCatalog
     *
     * @param bool|null $HasCatalog HasCatalog
     *
     * @return self
     */
    public function setHasCatalog($HasCatalog)
    {
        if (is_null($HasCatalog)) {
            throw new \InvalidArgumentException('non-nullable HasCatalog cannot be null');
        }
        $this->container['HasCatalog'] = $HasCatalog;

        return $this;
    }

    /**
     * Gets SubType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\BMCStoreSubType|mixed|null
     */
    public function getSubType()
    {
        if (!isset($this->container['SubType']) || is_null($this->container['SubType'])) {
            return null;
        }
        if ((is_object($this->container['SubType']) || is_string($this->container['SubType'])) && method_exists($this->container['SubType'], 'getValue')) {
            return $this->container['SubType']->getValue();
        }
        return $this->container['SubType'];
    }

    /**
     * Sets SubType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\BMCStoreSubType|mixed|null $SubType SubType
     *
     * @return self
     */
    public function setSubType($SubType)
    {
        if (is_null($SubType)) {
            throw new \InvalidArgumentException('non-nullable SubType cannot be null');
        }
        if (!$SubType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\BMCStoreSubType) {
            $SubType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\BMCStoreSubType($SubType);
        }
        $this->container['SubType'] = $SubType;

        return $this;
    }

    /**
     * Gets StoreUrl
     *
     * @return string|null
     */
    public function getStoreUrl()
    {
        if (!isset($this->container['StoreUrl']) || is_null($this->container['StoreUrl'])) {
            return null;
        }
        return $this->container['StoreUrl'];
    }

    /**
     * Sets StoreUrl
     *
     * @param string|null $StoreUrl StoreUrl
     *
     * @return self
     */
    public function setStoreUrl($StoreUrl)
    {
        if (is_null($StoreUrl)) {
            array_push($this->openAPINullablesSetToNull, 'StoreUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StoreUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StoreUrl'] = $StoreUrl;

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
