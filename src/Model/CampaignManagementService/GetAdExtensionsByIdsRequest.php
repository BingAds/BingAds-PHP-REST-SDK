<?php
/**
 * GetAdExtensionsByIdsRequest
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

class GetAdExtensionsByIdsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetAdExtensionsByIdsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AccountId' => 'string',
        'AdExtensionIds' => 'string[]',
        'AdExtensionType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionsTypeFilter',
        'ReturnAdditionalFields' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionAdditionalField'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'AccountId' => 'int64',
        'AdExtensionIds' => 'int64',
        'AdExtensionType' => null,
        'ReturnAdditionalFields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AccountId' => false,
        'AdExtensionIds' => true,
        'AdExtensionType' => false,
        'ReturnAdditionalFields' => false
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
        'AccountId' => 'AccountId',
        'AdExtensionIds' => 'AdExtensionIds',
        'AdExtensionType' => 'AdExtensionType',
        'ReturnAdditionalFields' => 'ReturnAdditionalFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AccountId' => 'setAccountId',
        'AdExtensionIds' => 'setAdExtensionIds',
        'AdExtensionType' => 'setAdExtensionType',
        'ReturnAdditionalFields' => 'setReturnAdditionalFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AccountId' => 'getAccountId',
        'AdExtensionIds' => 'getAdExtensionIds',
        'AdExtensionType' => 'getAdExtensionType',
        'ReturnAdditionalFields' => 'getReturnAdditionalFields'
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
        $this->setIfExists('AccountId', $data ?? [], null);
        $this->setIfExists('AdExtensionIds', $data ?? [], null);
        $this->setIfExists('AdExtensionType', $data ?? [], null);
        $this->setIfExists('ReturnAdditionalFields', $data ?? [], null);
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
     * Gets AccountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        if (!isset($this->container['AccountId']) || is_null($this->container['AccountId'])) {
            return null;
        }
        return $this->container['AccountId'];
    }

    /**
     * Sets AccountId
     *
     * @param string|null $AccountId AccountId
     *
     * @return self
     */
    public function setAccountId($AccountId)
    {
        if (is_null($AccountId)) {
            throw new \InvalidArgumentException('non-nullable AccountId cannot be null');
        }
        $this->container['AccountId'] = $AccountId;

        return $this;
    }

    /**
     * Gets AdExtensionIds
     *
     * @return string[]|null
     */
    public function getAdExtensionIds()
    {
        if (!isset($this->container['AdExtensionIds']) || is_null($this->container['AdExtensionIds'])) {
            return null;
        }
        return $this->container['AdExtensionIds'];
    }

    /**
     * Sets AdExtensionIds
     *
     * @param string[]|null $AdExtensionIds AdExtensionIds
     *
     * @return self
     */
    public function setAdExtensionIds($AdExtensionIds)
    {
        if (is_null($AdExtensionIds)) {
            array_push($this->openAPINullablesSetToNull, 'AdExtensionIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdExtensionIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdExtensionIds'] = $AdExtensionIds;

        return $this;
    }

    /**
     * Gets AdExtensionType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionsTypeFilter|mixed|null
     */
    public function getAdExtensionType()
    {
        if (!isset($this->container['AdExtensionType']) || is_null($this->container['AdExtensionType'])) {
            return null;
        }
        if ((is_object($this->container['AdExtensionType']) || is_string($this->container['AdExtensionType'])) && method_exists($this->container['AdExtensionType'], 'getValue')) {
            return $this->container['AdExtensionType']->getValue();
        }
        return $this->container['AdExtensionType'];
    }

    /**
     * Sets AdExtensionType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionsTypeFilter|mixed|null $AdExtensionType AdExtensionType
     *
     * @return self
     */
    public function setAdExtensionType($AdExtensionType)
    {
        if (is_null($AdExtensionType)) {
            throw new \InvalidArgumentException('non-nullable AdExtensionType cannot be null');
        }
        if (!$AdExtensionType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionsTypeFilter) {
            $AdExtensionType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionsTypeFilter($AdExtensionType);
        }
        $this->container['AdExtensionType'] = $AdExtensionType;

        return $this;
    }

    /**
     * Gets ReturnAdditionalFields
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionAdditionalField|mixed|null
     */
    public function getReturnAdditionalFields()
    {
        if (!isset($this->container['ReturnAdditionalFields']) || is_null($this->container['ReturnAdditionalFields'])) {
            return null;
        }
        if ((is_object($this->container['ReturnAdditionalFields']) || is_string($this->container['ReturnAdditionalFields'])) && method_exists($this->container['ReturnAdditionalFields'], 'getValue')) {
            return $this->container['ReturnAdditionalFields']->getValue();
        }
        return $this->container['ReturnAdditionalFields'];
    }

    /**
     * Sets ReturnAdditionalFields
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionAdditionalField|mixed|null $ReturnAdditionalFields ReturnAdditionalFields
     *
     * @return self
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        if (is_null($ReturnAdditionalFields)) {
            throw new \InvalidArgumentException('non-nullable ReturnAdditionalFields cannot be null');
        }
        if (!$ReturnAdditionalFields instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionAdditionalField) {
            $ReturnAdditionalFields = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionAdditionalField($ReturnAdditionalFields);
        }
        $this->container['ReturnAdditionalFields'] = $ReturnAdditionalFields;

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
