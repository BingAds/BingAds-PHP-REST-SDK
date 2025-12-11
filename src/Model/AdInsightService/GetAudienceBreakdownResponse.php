<?php
/**
 * GetAudienceBreakdownResponse
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

class GetAudienceBreakdownResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetAudienceBreakdownResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'EstAudienceSize' => '\Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult',
        'EstImpression' => '\Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult',
        'IsImpressionTooSpecific' => 'bool',
        'IsPrivacyCheckPassed' => 'bool',
        'SuggestedBid' => 'float',
        'Currency' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Currency',
        'Breakdowns' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Breakdowns'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'EstAudienceSize' => null,
        'EstImpression' => null,
        'IsImpressionTooSpecific' => null,
        'IsPrivacyCheckPassed' => null,
        'SuggestedBid' => 'double',
        'Currency' => null,
        'Breakdowns' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'EstAudienceSize' => true,
        'EstImpression' => true,
        'IsImpressionTooSpecific' => true,
        'IsPrivacyCheckPassed' => true,
        'SuggestedBid' => true,
        'Currency' => false,
        'Breakdowns' => true
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
        'EstAudienceSize' => 'EstAudienceSize',
        'EstImpression' => 'EstImpression',
        'IsImpressionTooSpecific' => 'IsImpressionTooSpecific',
        'IsPrivacyCheckPassed' => 'IsPrivacyCheckPassed',
        'SuggestedBid' => 'SuggestedBid',
        'Currency' => 'Currency',
        'Breakdowns' => 'Breakdowns'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'EstAudienceSize' => 'setEstAudienceSize',
        'EstImpression' => 'setEstImpression',
        'IsImpressionTooSpecific' => 'setIsImpressionTooSpecific',
        'IsPrivacyCheckPassed' => 'setIsPrivacyCheckPassed',
        'SuggestedBid' => 'setSuggestedBid',
        'Currency' => 'setCurrency',
        'Breakdowns' => 'setBreakdowns'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'EstAudienceSize' => 'getEstAudienceSize',
        'EstImpression' => 'getEstImpression',
        'IsImpressionTooSpecific' => 'getIsImpressionTooSpecific',
        'IsPrivacyCheckPassed' => 'getIsPrivacyCheckPassed',
        'SuggestedBid' => 'getSuggestedBid',
        'Currency' => 'getCurrency',
        'Breakdowns' => 'getBreakdowns'
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
        $this->setIfExists('EstAudienceSize', $data ?? [], null);
        $this->setIfExists('EstImpression', $data ?? [], null);
        $this->setIfExists('IsImpressionTooSpecific', $data ?? [], null);
        $this->setIfExists('IsPrivacyCheckPassed', $data ?? [], null);
        $this->setIfExists('SuggestedBid', $data ?? [], null);
        $this->setIfExists('Currency', $data ?? [], null);
        $this->setIfExists('Breakdowns', $data ?? [], null);
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
     * Gets EstAudienceSize
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult|null
     */
    public function getEstAudienceSize()
    {
        if (!isset($this->container['EstAudienceSize']) || is_null($this->container['EstAudienceSize'])) {
            return null;
        }
        return $this->container['EstAudienceSize'];
    }

    /**
     * Sets EstAudienceSize
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult|null $EstAudienceSize EstAudienceSize
     *
     * @return self
     */
    public function setEstAudienceSize($EstAudienceSize)
    {
        if (is_null($EstAudienceSize)) {
            array_push($this->openAPINullablesSetToNull, 'EstAudienceSize');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EstAudienceSize', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EstAudienceSize'] = $EstAudienceSize;

        return $this;
    }

    /**
     * Gets EstImpression
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult|null
     */
    public function getEstImpression()
    {
        if (!isset($this->container['EstImpression']) || is_null($this->container['EstImpression'])) {
            return null;
        }
        return $this->container['EstImpression'];
    }

    /**
     * Sets EstImpression
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult|null $EstImpression EstImpression
     *
     * @return self
     */
    public function setEstImpression($EstImpression)
    {
        if (is_null($EstImpression)) {
            array_push($this->openAPINullablesSetToNull, 'EstImpression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EstImpression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EstImpression'] = $EstImpression;

        return $this;
    }

    /**
     * Gets IsImpressionTooSpecific
     *
     * @return bool|null
     */
    public function getIsImpressionTooSpecific()
    {
        if (!isset($this->container['IsImpressionTooSpecific']) || is_null($this->container['IsImpressionTooSpecific'])) {
            return null;
        }
        return $this->container['IsImpressionTooSpecific'];
    }

    /**
     * Sets IsImpressionTooSpecific
     *
     * @param bool|null $IsImpressionTooSpecific IsImpressionTooSpecific
     *
     * @return self
     */
    public function setIsImpressionTooSpecific($IsImpressionTooSpecific)
    {
        if (is_null($IsImpressionTooSpecific)) {
            array_push($this->openAPINullablesSetToNull, 'IsImpressionTooSpecific');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsImpressionTooSpecific', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsImpressionTooSpecific'] = $IsImpressionTooSpecific;

        return $this;
    }

    /**
     * Gets IsPrivacyCheckPassed
     *
     * @return bool|null
     */
    public function getIsPrivacyCheckPassed()
    {
        if (!isset($this->container['IsPrivacyCheckPassed']) || is_null($this->container['IsPrivacyCheckPassed'])) {
            return null;
        }
        return $this->container['IsPrivacyCheckPassed'];
    }

    /**
     * Sets IsPrivacyCheckPassed
     *
     * @param bool|null $IsPrivacyCheckPassed IsPrivacyCheckPassed
     *
     * @return self
     */
    public function setIsPrivacyCheckPassed($IsPrivacyCheckPassed)
    {
        if (is_null($IsPrivacyCheckPassed)) {
            array_push($this->openAPINullablesSetToNull, 'IsPrivacyCheckPassed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsPrivacyCheckPassed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsPrivacyCheckPassed'] = $IsPrivacyCheckPassed;

        return $this;
    }

    /**
     * Gets SuggestedBid
     *
     * @return float|null
     */
    public function getSuggestedBid()
    {
        if (!isset($this->container['SuggestedBid']) || is_null($this->container['SuggestedBid'])) {
            return null;
        }
        return $this->container['SuggestedBid'];
    }

    /**
     * Sets SuggestedBid
     *
     * @param float|null $SuggestedBid SuggestedBid
     *
     * @return self
     */
    public function setSuggestedBid($SuggestedBid)
    {
        if (is_null($SuggestedBid)) {
            array_push($this->openAPINullablesSetToNull, 'SuggestedBid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuggestedBid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuggestedBid'] = $SuggestedBid;

        return $this;
    }

    /**
     * Gets Currency
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Currency|mixed|null
     */
    public function getCurrency()
    {
        if (!isset($this->container['Currency']) || is_null($this->container['Currency'])) {
            return null;
        }
        if ((is_object($this->container['Currency']) || is_string($this->container['Currency'])) && method_exists($this->container['Currency'], 'getValue')) {
            return $this->container['Currency']->getValue();
        }
        return $this->container['Currency'];
    }

    /**
     * Sets Currency
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Currency|mixed|null $Currency Currency
     *
     * @return self
     */
    public function setCurrency($Currency)
    {
        if (is_null($Currency)) {
            throw new \InvalidArgumentException('non-nullable Currency cannot be null');
        }
        if (!$Currency instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\Currency) {
            $Currency = new \Microsoft\MsAds\Rest\Model\AdInsightService\Currency($Currency);
        }
        $this->container['Currency'] = $Currency;

        return $this;
    }

    /**
     * Gets Breakdowns
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdowns|null
     */
    public function getBreakdowns()
    {
        if (!isset($this->container['Breakdowns']) || is_null($this->container['Breakdowns'])) {
            return null;
        }
        return $this->container['Breakdowns'];
    }

    /**
     * Sets Breakdowns
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdowns|null $Breakdowns Breakdowns
     *
     * @return self
     */
    public function setBreakdowns($Breakdowns)
    {
        if (is_null($Breakdowns)) {
            array_push($this->openAPINullablesSetToNull, 'Breakdowns');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Breakdowns', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Breakdowns'] = $Breakdowns;

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
