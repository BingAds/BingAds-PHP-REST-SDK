<?php
/**
 * EditorialReasonCollection
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

class EditorialReasonCollection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'EditorialReasonCollection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AdOrKeywordId' => 'string',
        'AdGroupId' => 'string',
        'Reasons' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\EditorialReason[]',
        'AppealStatus' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AppealStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'AdOrKeywordId' => 'int64',
        'AdGroupId' => 'int64',
        'Reasons' => null,
        'AppealStatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AdOrKeywordId' => false,
        'AdGroupId' => false,
        'Reasons' => true,
        'AppealStatus' => false
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
        'AdOrKeywordId' => 'AdOrKeywordId',
        'AdGroupId' => 'AdGroupId',
        'Reasons' => 'Reasons',
        'AppealStatus' => 'AppealStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AdOrKeywordId' => 'setAdOrKeywordId',
        'AdGroupId' => 'setAdGroupId',
        'Reasons' => 'setReasons',
        'AppealStatus' => 'setAppealStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AdOrKeywordId' => 'getAdOrKeywordId',
        'AdGroupId' => 'getAdGroupId',
        'Reasons' => 'getReasons',
        'AppealStatus' => 'getAppealStatus'
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
        $this->setIfExists('AdOrKeywordId', $data ?? [], null);
        $this->setIfExists('AdGroupId', $data ?? [], null);
        $this->setIfExists('Reasons', $data ?? [], null);
        $this->setIfExists('AppealStatus', $data ?? [], null);
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
     * Gets AdOrKeywordId
     *
     * @return string|null
     */
    public function getAdOrKeywordId()
    {
        if (!isset($this->container['AdOrKeywordId']) || is_null($this->container['AdOrKeywordId'])) {
            return null;
        }
        return $this->container['AdOrKeywordId'];
    }

    /**
     * Sets AdOrKeywordId
     *
     * @param string|null $AdOrKeywordId AdOrKeywordId
     *
     * @return self
     */
    public function setAdOrKeywordId($AdOrKeywordId)
    {
        if (is_null($AdOrKeywordId)) {
            throw new \InvalidArgumentException('non-nullable AdOrKeywordId cannot be null');
        }
        $this->container['AdOrKeywordId'] = $AdOrKeywordId;

        return $this;
    }

    /**
     * Gets AdGroupId
     *
     * @return string|null
     */
    public function getAdGroupId()
    {
        if (!isset($this->container['AdGroupId']) || is_null($this->container['AdGroupId'])) {
            return null;
        }
        return $this->container['AdGroupId'];
    }

    /**
     * Sets AdGroupId
     *
     * @param string|null $AdGroupId AdGroupId
     *
     * @return self
     */
    public function setAdGroupId($AdGroupId)
    {
        if (is_null($AdGroupId)) {
            throw new \InvalidArgumentException('non-nullable AdGroupId cannot be null');
        }
        $this->container['AdGroupId'] = $AdGroupId;

        return $this;
    }

    /**
     * Gets Reasons
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\EditorialReason[]|null
     */
    public function getReasons()
    {
        if (!isset($this->container['Reasons']) || is_null($this->container['Reasons'])) {
            return null;
        }
        return $this->container['Reasons'];
    }

    /**
     * Sets Reasons
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\EditorialReason[]|null $Reasons Reasons
     *
     * @return self
     */
    public function setReasons($Reasons)
    {
        if (is_null($Reasons)) {
            array_push($this->openAPINullablesSetToNull, 'Reasons');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Reasons', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Reasons'] = $Reasons;

        return $this;
    }

    /**
     * Gets AppealStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AppealStatus|mixed|null
     */
    public function getAppealStatus()
    {
        if (!isset($this->container['AppealStatus']) || is_null($this->container['AppealStatus'])) {
            return null;
        }
        if ((is_object($this->container['AppealStatus']) || is_string($this->container['AppealStatus'])) && method_exists($this->container['AppealStatus'], 'getValue')) {
            return $this->container['AppealStatus']->getValue();
        }
        return $this->container['AppealStatus'];
    }

    /**
     * Sets AppealStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AppealStatus|mixed|null $AppealStatus AppealStatus
     *
     * @return self
     */
    public function setAppealStatus($AppealStatus)
    {
        if (is_null($AppealStatus)) {
            throw new \InvalidArgumentException('non-nullable AppealStatus cannot be null');
        }
        if (!$AppealStatus instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AppealStatus) {
            $AppealStatus = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AppealStatus($AppealStatus);
        }
        $this->container['AppealStatus'] = $AppealStatus;

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
