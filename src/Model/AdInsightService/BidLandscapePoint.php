<?php
/**
 * BidLandscapePoint
 * AdInsightService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\AdInsightService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\AdInsightService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class BidLandscapePoint implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BidLandscapePoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Bid' => 'float',
        'Clicks' => 'float',
        'Impressions' => 'string',
        'TopImpressions' => 'string',
        'CurrencyCode' => '\Microsoft\MsAds\Rest\Model\AdInsightService\CurrencyCode',
        'Cost' => 'float',
        'MarginalCPC' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Bid' => 'double',
        'Clicks' => 'double',
        'Impressions' => 'int64',
        'TopImpressions' => 'int64',
        'CurrencyCode' => null,
        'Cost' => 'double',
        'MarginalCPC' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Bid' => false,
        'Clicks' => true,
        'Impressions' => false,
        'TopImpressions' => true,
        'CurrencyCode' => false,
        'Cost' => true,
        'MarginalCPC' => true
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
        'Bid' => 'Bid',
        'Clicks' => 'Clicks',
        'Impressions' => 'Impressions',
        'TopImpressions' => 'TopImpressions',
        'CurrencyCode' => 'CurrencyCode',
        'Cost' => 'Cost',
        'MarginalCPC' => 'MarginalCPC'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Bid' => 'setBid',
        'Clicks' => 'setClicks',
        'Impressions' => 'setImpressions',
        'TopImpressions' => 'setTopImpressions',
        'CurrencyCode' => 'setCurrencyCode',
        'Cost' => 'setCost',
        'MarginalCPC' => 'setMarginalCPC'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Bid' => 'getBid',
        'Clicks' => 'getClicks',
        'Impressions' => 'getImpressions',
        'TopImpressions' => 'getTopImpressions',
        'CurrencyCode' => 'getCurrencyCode',
        'Cost' => 'getCost',
        'MarginalCPC' => 'getMarginalCPC'
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
        $this->setIfExists('Bid', $data ?? [], null);
        $this->setIfExists('Clicks', $data ?? [], null);
        $this->setIfExists('Impressions', $data ?? [], null);
        $this->setIfExists('TopImpressions', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('Cost', $data ?? [], null);
        $this->setIfExists('MarginalCPC', $data ?? [], null);
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
     * Gets Bid
     *
     * @return float|null
     */
    public function getBid()
    {
        if (!isset($this->container['Bid']) || is_null($this->container['Bid'])) {
            return null;
        }
        return $this->container['Bid'];
    }

    /**
     * Sets Bid
     *
     * @param float|null $Bid Bid
     *
     * @return self
     */
    public function setBid($Bid)
    {
        if (is_null($Bid)) {
            throw new \InvalidArgumentException('non-nullable Bid cannot be null');
        }
        $this->container['Bid'] = $Bid;

        return $this;
    }

    /**
     * Gets Clicks
     *
     * @return float|null
     */
    public function getClicks()
    {
        if (!isset($this->container['Clicks']) || is_null($this->container['Clicks'])) {
            return null;
        }
        return $this->container['Clicks'];
    }

    /**
     * Sets Clicks
     *
     * @param float|null $Clicks Clicks
     *
     * @return self
     */
    public function setClicks($Clicks)
    {
        if (is_null($Clicks)) {
            array_push($this->openAPINullablesSetToNull, 'Clicks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Clicks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Clicks'] = $Clicks;

        return $this;
    }

    /**
     * Gets Impressions
     *
     * @return string|null
     */
    public function getImpressions()
    {
        if (!isset($this->container['Impressions']) || is_null($this->container['Impressions'])) {
            return null;
        }
        return $this->container['Impressions'];
    }

    /**
     * Sets Impressions
     *
     * @param string|null $Impressions Impressions
     *
     * @return self
     */
    public function setImpressions($Impressions)
    {
        if (is_null($Impressions)) {
            throw new \InvalidArgumentException('non-nullable Impressions cannot be null');
        }
        $this->container['Impressions'] = $Impressions;

        return $this;
    }

    /**
     * Gets TopImpressions
     *
     * @return string|null
     */
    public function getTopImpressions()
    {
        if (!isset($this->container['TopImpressions']) || is_null($this->container['TopImpressions'])) {
            return null;
        }
        return $this->container['TopImpressions'];
    }

    /**
     * Sets TopImpressions
     *
     * @param string|null $TopImpressions TopImpressions
     *
     * @return self
     */
    public function setTopImpressions($TopImpressions)
    {
        if (is_null($TopImpressions)) {
            array_push($this->openAPINullablesSetToNull, 'TopImpressions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TopImpressions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TopImpressions'] = $TopImpressions;

        return $this;
    }

    /**
     * Gets CurrencyCode
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\CurrencyCode|mixed|null
     */
    public function getCurrencyCode()
    {
        if (!isset($this->container['CurrencyCode']) || is_null($this->container['CurrencyCode'])) {
            return null;
        }
        if ((is_object($this->container['CurrencyCode']) || is_string($this->container['CurrencyCode'])) && method_exists($this->container['CurrencyCode'], 'getValue')) {
            return $this->container['CurrencyCode']->getValue();
        }
        return $this->container['CurrencyCode'];
    }

    /**
     * Sets CurrencyCode
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\CurrencyCode|mixed|null $CurrencyCode CurrencyCode
     *
     * @return self
     */
    public function setCurrencyCode($CurrencyCode)
    {
        if (is_null($CurrencyCode)) {
            throw new \InvalidArgumentException('non-nullable CurrencyCode cannot be null');
        }
        if (!$CurrencyCode instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\CurrencyCode) {
            $CurrencyCode = new \Microsoft\MsAds\Rest\Model\AdInsightService\CurrencyCode($CurrencyCode);
        }
        $this->container['CurrencyCode'] = $CurrencyCode;

        return $this;
    }

    /**
     * Gets Cost
     *
     * @return float|null
     */
    public function getCost()
    {
        if (!isset($this->container['Cost']) || is_null($this->container['Cost'])) {
            return null;
        }
        return $this->container['Cost'];
    }

    /**
     * Sets Cost
     *
     * @param float|null $Cost Cost
     *
     * @return self
     */
    public function setCost($Cost)
    {
        if (is_null($Cost)) {
            array_push($this->openAPINullablesSetToNull, 'Cost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Cost', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Cost'] = $Cost;

        return $this;
    }

    /**
     * Gets MarginalCPC
     *
     * @return float|null
     */
    public function getMarginalCPC()
    {
        if (!isset($this->container['MarginalCPC']) || is_null($this->container['MarginalCPC'])) {
            return null;
        }
        return $this->container['MarginalCPC'];
    }

    /**
     * Sets MarginalCPC
     *
     * @param float|null $MarginalCPC MarginalCPC
     *
     * @return self
     */
    public function setMarginalCPC($MarginalCPC)
    {
        if (is_null($MarginalCPC)) {
            array_push($this->openAPINullablesSetToNull, 'MarginalCPC');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('MarginalCPC', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['MarginalCPC'] = $MarginalCPC;

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
