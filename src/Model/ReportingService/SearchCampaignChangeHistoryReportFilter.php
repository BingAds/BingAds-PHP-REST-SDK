<?php
/**
 * SearchCampaignChangeHistoryReportFilter
 * ReportingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\ReportingService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\ReportingService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class SearchCampaignChangeHistoryReportFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SearchCampaignChangeHistoryReportFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ItemChanged' => '\Microsoft\MsAds\Rest\Model\ReportingService\ChangeEntityReportFilter',
        'HowChanged' => '\Microsoft\MsAds\Rest\Model\ReportingService\ChangeTypeReportFilter',
        'AdDistribution' => '\Microsoft\MsAds\Rest\Model\ReportingService\AdDistributionReportFilter'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ItemChanged' => null,
        'HowChanged' => null,
        'AdDistribution' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ItemChanged' => false,
        'HowChanged' => false,
        'AdDistribution' => false
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
        'ItemChanged' => 'ItemChanged',
        'HowChanged' => 'HowChanged',
        'AdDistribution' => 'AdDistribution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ItemChanged' => 'setItemChanged',
        'HowChanged' => 'setHowChanged',
        'AdDistribution' => 'setAdDistribution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ItemChanged' => 'getItemChanged',
        'HowChanged' => 'getHowChanged',
        'AdDistribution' => 'getAdDistribution'
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
        $this->setIfExists('ItemChanged', $data ?? [], null);
        $this->setIfExists('HowChanged', $data ?? [], null);
        $this->setIfExists('AdDistribution', $data ?? [], null);
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
     * Gets ItemChanged
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\ChangeEntityReportFilter|mixed|null
     */
    public function getItemChanged()
    {
        if (!isset($this->container['ItemChanged']) || is_null($this->container['ItemChanged'])) {
            return null;
        }
        if ((is_object($this->container['ItemChanged']) || is_string($this->container['ItemChanged'])) && method_exists($this->container['ItemChanged'], 'getValue')) {
            return $this->container['ItemChanged']->getValue();
        }
        return $this->container['ItemChanged'];
    }

    /**
     * Sets ItemChanged
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\ChangeEntityReportFilter|mixed|null $ItemChanged ItemChanged
     *
     * @return self
     */
    public function setItemChanged($ItemChanged)
    {
        if (is_null($ItemChanged)) {
            throw new \InvalidArgumentException('non-nullable ItemChanged cannot be null');
        }
        if (!$ItemChanged instanceof \Microsoft\MsAds\Rest\Model\ReportingService\ChangeEntityReportFilter) {
            $ItemChanged = new \Microsoft\MsAds\Rest\Model\ReportingService\ChangeEntityReportFilter($ItemChanged);
        }
        $this->container['ItemChanged'] = $ItemChanged;

        return $this;
    }

    /**
     * Gets HowChanged
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\ChangeTypeReportFilter|mixed|null
     */
    public function getHowChanged()
    {
        if (!isset($this->container['HowChanged']) || is_null($this->container['HowChanged'])) {
            return null;
        }
        if ((is_object($this->container['HowChanged']) || is_string($this->container['HowChanged'])) && method_exists($this->container['HowChanged'], 'getValue')) {
            return $this->container['HowChanged']->getValue();
        }
        return $this->container['HowChanged'];
    }

    /**
     * Sets HowChanged
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\ChangeTypeReportFilter|mixed|null $HowChanged HowChanged
     *
     * @return self
     */
    public function setHowChanged($HowChanged)
    {
        if (is_null($HowChanged)) {
            throw new \InvalidArgumentException('non-nullable HowChanged cannot be null');
        }
        if (!$HowChanged instanceof \Microsoft\MsAds\Rest\Model\ReportingService\ChangeTypeReportFilter) {
            $HowChanged = new \Microsoft\MsAds\Rest\Model\ReportingService\ChangeTypeReportFilter($HowChanged);
        }
        $this->container['HowChanged'] = $HowChanged;

        return $this;
    }

    /**
     * Gets AdDistribution
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\AdDistributionReportFilter|mixed|null
     */
    public function getAdDistribution()
    {
        if (!isset($this->container['AdDistribution']) || is_null($this->container['AdDistribution'])) {
            return null;
        }
        if ((is_object($this->container['AdDistribution']) || is_string($this->container['AdDistribution'])) && method_exists($this->container['AdDistribution'], 'getValue')) {
            return $this->container['AdDistribution']->getValue();
        }
        return $this->container['AdDistribution'];
    }

    /**
     * Sets AdDistribution
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\AdDistributionReportFilter|mixed|null $AdDistribution AdDistribution
     *
     * @return self
     */
    public function setAdDistribution($AdDistribution)
    {
        if (is_null($AdDistribution)) {
            throw new \InvalidArgumentException('non-nullable AdDistribution cannot be null');
        }
        if (!$AdDistribution instanceof \Microsoft\MsAds\Rest\Model\ReportingService\AdDistributionReportFilter) {
            $AdDistribution = new \Microsoft\MsAds\Rest\Model\ReportingService\AdDistributionReportFilter($AdDistribution);
        }
        $this->container['AdDistribution'] = $AdDistribution;

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
