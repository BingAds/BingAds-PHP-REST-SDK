<?php
/**
 * DownloadCampaignsByAccountIdsRequest
 * BulkService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\BulkService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\BulkService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class DownloadCampaignsByAccountIdsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DownloadCampaignsByAccountIdsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AccountIds' => 'string[]',
        'LastSyncTimeInUTC' => '\DateTime',
        'DownloadEntities' => '\Microsoft\MsAds\Rest\Model\BulkService\DownloadEntity[]',
        'DataScope' => '\Microsoft\MsAds\Rest\Model\BulkService\DataScope',
        'DownloadFileType' => '\Microsoft\MsAds\Rest\Model\BulkService\DownloadFileType',
        'FormatVersion' => 'string',
        'CompressionType' => '\Microsoft\MsAds\Rest\Model\BulkService\CompressionType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'AccountIds' => 'int64',
        'LastSyncTimeInUTC' => 'date-time',
        'DownloadEntities' => null,
        'DataScope' => null,
        'DownloadFileType' => null,
        'FormatVersion' => null,
        'CompressionType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AccountIds' => true,
        'LastSyncTimeInUTC' => true,
        'DownloadEntities' => true,
        'DataScope' => false,
        'DownloadFileType' => false,
        'FormatVersion' => true,
        'CompressionType' => false
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
        'AccountIds' => 'AccountIds',
        'LastSyncTimeInUTC' => 'LastSyncTimeInUTC',
        'DownloadEntities' => 'DownloadEntities',
        'DataScope' => 'DataScope',
        'DownloadFileType' => 'DownloadFileType',
        'FormatVersion' => 'FormatVersion',
        'CompressionType' => 'CompressionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AccountIds' => 'setAccountIds',
        'LastSyncTimeInUTC' => 'setLastSyncTimeInUTC',
        'DownloadEntities' => 'setDownloadEntities',
        'DataScope' => 'setDataScope',
        'DownloadFileType' => 'setDownloadFileType',
        'FormatVersion' => 'setFormatVersion',
        'CompressionType' => 'setCompressionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AccountIds' => 'getAccountIds',
        'LastSyncTimeInUTC' => 'getLastSyncTimeInUTC',
        'DownloadEntities' => 'getDownloadEntities',
        'DataScope' => 'getDataScope',
        'DownloadFileType' => 'getDownloadFileType',
        'FormatVersion' => 'getFormatVersion',
        'CompressionType' => 'getCompressionType'
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
        $this->setIfExists('AccountIds', $data ?? [], null);
        $this->setIfExists('LastSyncTimeInUTC', $data ?? [], null);
        $this->setIfExists('DownloadEntities', $data ?? [], null);
        $this->setIfExists('DataScope', $data ?? [], null);
        $this->setIfExists('DownloadFileType', $data ?? [], null);
        $this->setIfExists('FormatVersion', $data ?? [], null);
        $this->setIfExists('CompressionType', $data ?? [], null);
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
     * Gets AccountIds
     *
     * @return string[]|null
     */
    public function getAccountIds()
    {
        if (!isset($this->container['AccountIds']) || is_null($this->container['AccountIds'])) {
            return null;
        }
        return $this->container['AccountIds'];
    }

    /**
     * Sets AccountIds
     *
     * @param string[]|null $AccountIds AccountIds
     *
     * @return self
     */
    public function setAccountIds($AccountIds)
    {
        if (is_null($AccountIds)) {
            array_push($this->openAPINullablesSetToNull, 'AccountIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AccountIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AccountIds'] = $AccountIds;

        return $this;
    }

    /**
     * Gets LastSyncTimeInUTC
     *
     * @return \DateTime|null
     */
    public function getLastSyncTimeInUTC()
    {
        if (!isset($this->container['LastSyncTimeInUTC']) || is_null($this->container['LastSyncTimeInUTC'])) {
            return null;
        }
        return $this->container['LastSyncTimeInUTC'];
    }

    /**
     * Sets LastSyncTimeInUTC
     *
     * @param \DateTime|null $LastSyncTimeInUTC LastSyncTimeInUTC
     *
     * @return self
     */
    public function setLastSyncTimeInUTC($LastSyncTimeInUTC)
    {
        if (is_null($LastSyncTimeInUTC)) {
            array_push($this->openAPINullablesSetToNull, 'LastSyncTimeInUTC');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LastSyncTimeInUTC', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LastSyncTimeInUTC'] = $LastSyncTimeInUTC;

        return $this;
    }

    /**
     * Gets DownloadEntities
     *
     * @return \Microsoft\MsAds\Rest\Model\BulkService\DownloadEntity[]|mixed|null
     */
    public function getDownloadEntities()
    {
        if (!isset($this->container['DownloadEntities']) || is_null($this->container['DownloadEntities'])) {
            return null;
        }
        $values = [];
        if (is_array($this->container['DownloadEntities'])) {
            foreach ($this->container['DownloadEntities'] as $DownloadEntitiesItem) {
                if ((is_object($DownloadEntitiesItem) || is_string($DownloadEntitiesItem)) && method_exists($DownloadEntitiesItem, 'getValue')) {
                    $values[] = $DownloadEntitiesItem->getValue();
                }
            }
        }
        if (count($values) > 0) {
            return $values;
        }
        return $this->container['DownloadEntities'];
    }

    /**
     * Sets DownloadEntities
     *
     * @param \Microsoft\MsAds\Rest\Model\BulkService\DownloadEntity[]|mixed|null $DownloadEntities DownloadEntities
     *
     * @return self
     */
    public function setDownloadEntities($DownloadEntities)
    {
        if (is_null($DownloadEntities)) {
            array_push($this->openAPINullablesSetToNull, 'DownloadEntities');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DownloadEntities', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_array($DownloadEntities)) {
            $DownloadEntities = [$DownloadEntities];
        }
        foreach ($DownloadEntities as $key => $DownloadEntitiesItem) {
            if (!$DownloadEntitiesItem instanceof \Microsoft\MsAds\Rest\Model\BulkService\DownloadEntity) {
                $DownloadEntities[$key] = new \Microsoft\MsAds\Rest\Model\BulkService\DownloadEntity($DownloadEntitiesItem);
            }
        }
        $this->container['DownloadEntities'] = $DownloadEntities;

        return $this;
    }

    /**
     * Gets DataScope
     *
     * @return \Microsoft\MsAds\Rest\Model\BulkService\DataScope|mixed|null
     */
    public function getDataScope()
    {
        if (!isset($this->container['DataScope']) || is_null($this->container['DataScope'])) {
            return null;
        }
        if ((is_object($this->container['DataScope']) || is_string($this->container['DataScope'])) && method_exists($this->container['DataScope'], 'getValue')) {
            return $this->container['DataScope']->getValue();
        }
        return $this->container['DataScope'];
    }

    /**
     * Sets DataScope
     *
     * @param \Microsoft\MsAds\Rest\Model\BulkService\DataScope|mixed|null $DataScope DataScope
     *
     * @return self
     */
    public function setDataScope($DataScope)
    {
        if (is_null($DataScope)) {
            throw new \InvalidArgumentException('non-nullable DataScope cannot be null');
        }
        if (!$DataScope instanceof \Microsoft\MsAds\Rest\Model\BulkService\DataScope) {
            $DataScope = new \Microsoft\MsAds\Rest\Model\BulkService\DataScope($DataScope);
        }
        $this->container['DataScope'] = $DataScope;

        return $this;
    }

    /**
     * Gets DownloadFileType
     *
     * @return \Microsoft\MsAds\Rest\Model\BulkService\DownloadFileType|mixed|null
     */
    public function getDownloadFileType()
    {
        if (!isset($this->container['DownloadFileType']) || is_null($this->container['DownloadFileType'])) {
            return null;
        }
        if ((is_object($this->container['DownloadFileType']) || is_string($this->container['DownloadFileType'])) && method_exists($this->container['DownloadFileType'], 'getValue')) {
            return $this->container['DownloadFileType']->getValue();
        }
        return $this->container['DownloadFileType'];
    }

    /**
     * Sets DownloadFileType
     *
     * @param \Microsoft\MsAds\Rest\Model\BulkService\DownloadFileType|mixed|null $DownloadFileType DownloadFileType
     *
     * @return self
     */
    public function setDownloadFileType($DownloadFileType)
    {
        if (is_null($DownloadFileType)) {
            throw new \InvalidArgumentException('non-nullable DownloadFileType cannot be null');
        }
        if (!$DownloadFileType instanceof \Microsoft\MsAds\Rest\Model\BulkService\DownloadFileType) {
            $DownloadFileType = new \Microsoft\MsAds\Rest\Model\BulkService\DownloadFileType($DownloadFileType);
        }
        $this->container['DownloadFileType'] = $DownloadFileType;

        return $this;
    }

    /**
     * Gets FormatVersion
     *
     * @return string|null
     */
    public function getFormatVersion()
    {
        if (!isset($this->container['FormatVersion']) || is_null($this->container['FormatVersion'])) {
            return null;
        }
        return $this->container['FormatVersion'];
    }

    /**
     * Sets FormatVersion
     *
     * @param string|null $FormatVersion FormatVersion
     *
     * @return self
     */
    public function setFormatVersion($FormatVersion)
    {
        if (is_null($FormatVersion)) {
            array_push($this->openAPINullablesSetToNull, 'FormatVersion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormatVersion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormatVersion'] = $FormatVersion;

        return $this;
    }

    /**
     * Gets CompressionType
     *
     * @return \Microsoft\MsAds\Rest\Model\BulkService\CompressionType|mixed|null
     */
    public function getCompressionType()
    {
        if (!isset($this->container['CompressionType']) || is_null($this->container['CompressionType'])) {
            return null;
        }
        if ((is_object($this->container['CompressionType']) || is_string($this->container['CompressionType'])) && method_exists($this->container['CompressionType'], 'getValue')) {
            return $this->container['CompressionType']->getValue();
        }
        return $this->container['CompressionType'];
    }

    /**
     * Sets CompressionType
     *
     * @param \Microsoft\MsAds\Rest\Model\BulkService\CompressionType|mixed|null $CompressionType CompressionType
     *
     * @return self
     */
    public function setCompressionType($CompressionType)
    {
        if (is_null($CompressionType)) {
            throw new \InvalidArgumentException('non-nullable CompressionType cannot be null');
        }
        if (!$CompressionType instanceof \Microsoft\MsAds\Rest\Model\BulkService\CompressionType) {
            $CompressionType = new \Microsoft\MsAds\Rest\Model\BulkService\CompressionType($CompressionType);
        }
        $this->container['CompressionType'] = $CompressionType;

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
