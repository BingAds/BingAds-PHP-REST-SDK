<?php
/**
 * KeywordDemographic
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

class KeywordDemographic implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'KeywordDemographic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Device' => 'string',
        'EighteenToTwentyFour' => 'float',
        'TwentyFiveToThirtyFour' => 'float',
        'ThirtyFiveToFourtyNine' => 'float',
        'FiftyToSixtyFour' => 'float',
        'SixtyFiveAndAbove' => 'float',
        'AgeUnknown' => 'float',
        'Female' => 'float',
        'Male' => 'float',
        'GenderUnknown' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Device' => null,
        'EighteenToTwentyFour' => 'double',
        'TwentyFiveToThirtyFour' => 'double',
        'ThirtyFiveToFourtyNine' => 'double',
        'FiftyToSixtyFour' => 'double',
        'SixtyFiveAndAbove' => 'double',
        'AgeUnknown' => 'double',
        'Female' => 'double',
        'Male' => 'double',
        'GenderUnknown' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Device' => true,
        'EighteenToTwentyFour' => false,
        'TwentyFiveToThirtyFour' => false,
        'ThirtyFiveToFourtyNine' => false,
        'FiftyToSixtyFour' => false,
        'SixtyFiveAndAbove' => false,
        'AgeUnknown' => false,
        'Female' => false,
        'Male' => false,
        'GenderUnknown' => false
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
        'Device' => 'Device',
        'EighteenToTwentyFour' => 'EighteenToTwentyFour',
        'TwentyFiveToThirtyFour' => 'TwentyFiveToThirtyFour',
        'ThirtyFiveToFourtyNine' => 'ThirtyFiveToFourtyNine',
        'FiftyToSixtyFour' => 'FiftyToSixtyFour',
        'SixtyFiveAndAbove' => 'SixtyFiveAndAbove',
        'AgeUnknown' => 'AgeUnknown',
        'Female' => 'Female',
        'Male' => 'Male',
        'GenderUnknown' => 'GenderUnknown'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Device' => 'setDevice',
        'EighteenToTwentyFour' => 'setEighteenToTwentyFour',
        'TwentyFiveToThirtyFour' => 'setTwentyFiveToThirtyFour',
        'ThirtyFiveToFourtyNine' => 'setThirtyFiveToFourtyNine',
        'FiftyToSixtyFour' => 'setFiftyToSixtyFour',
        'SixtyFiveAndAbove' => 'setSixtyFiveAndAbove',
        'AgeUnknown' => 'setAgeUnknown',
        'Female' => 'setFemale',
        'Male' => 'setMale',
        'GenderUnknown' => 'setGenderUnknown'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Device' => 'getDevice',
        'EighteenToTwentyFour' => 'getEighteenToTwentyFour',
        'TwentyFiveToThirtyFour' => 'getTwentyFiveToThirtyFour',
        'ThirtyFiveToFourtyNine' => 'getThirtyFiveToFourtyNine',
        'FiftyToSixtyFour' => 'getFiftyToSixtyFour',
        'SixtyFiveAndAbove' => 'getSixtyFiveAndAbove',
        'AgeUnknown' => 'getAgeUnknown',
        'Female' => 'getFemale',
        'Male' => 'getMale',
        'GenderUnknown' => 'getGenderUnknown'
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
        $this->setIfExists('Device', $data ?? [], null);
        $this->setIfExists('EighteenToTwentyFour', $data ?? [], null);
        $this->setIfExists('TwentyFiveToThirtyFour', $data ?? [], null);
        $this->setIfExists('ThirtyFiveToFourtyNine', $data ?? [], null);
        $this->setIfExists('FiftyToSixtyFour', $data ?? [], null);
        $this->setIfExists('SixtyFiveAndAbove', $data ?? [], null);
        $this->setIfExists('AgeUnknown', $data ?? [], null);
        $this->setIfExists('Female', $data ?? [], null);
        $this->setIfExists('Male', $data ?? [], null);
        $this->setIfExists('GenderUnknown', $data ?? [], null);
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
     * Gets Device
     *
     * @return string|null
     */
    public function getDevice()
    {
        if (!isset($this->container['Device']) || is_null($this->container['Device'])) {
            return null;
        }
        return $this->container['Device'];
    }

    /**
     * Sets Device
     *
     * @param string|null $Device Device
     *
     * @return self
     */
    public function setDevice($Device)
    {
        if (is_null($Device)) {
            array_push($this->openAPINullablesSetToNull, 'Device');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Device', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Device'] = $Device;

        return $this;
    }

    /**
     * Gets EighteenToTwentyFour
     *
     * @return float|null
     */
    public function getEighteenToTwentyFour()
    {
        if (!isset($this->container['EighteenToTwentyFour']) || is_null($this->container['EighteenToTwentyFour'])) {
            return null;
        }
        return $this->container['EighteenToTwentyFour'];
    }

    /**
     * Sets EighteenToTwentyFour
     *
     * @param float|null $EighteenToTwentyFour EighteenToTwentyFour
     *
     * @return self
     */
    public function setEighteenToTwentyFour($EighteenToTwentyFour)
    {
        if (is_null($EighteenToTwentyFour)) {
            throw new \InvalidArgumentException('non-nullable EighteenToTwentyFour cannot be null');
        }
        $this->container['EighteenToTwentyFour'] = $EighteenToTwentyFour;

        return $this;
    }

    /**
     * Gets TwentyFiveToThirtyFour
     *
     * @return float|null
     */
    public function getTwentyFiveToThirtyFour()
    {
        if (!isset($this->container['TwentyFiveToThirtyFour']) || is_null($this->container['TwentyFiveToThirtyFour'])) {
            return null;
        }
        return $this->container['TwentyFiveToThirtyFour'];
    }

    /**
     * Sets TwentyFiveToThirtyFour
     *
     * @param float|null $TwentyFiveToThirtyFour TwentyFiveToThirtyFour
     *
     * @return self
     */
    public function setTwentyFiveToThirtyFour($TwentyFiveToThirtyFour)
    {
        if (is_null($TwentyFiveToThirtyFour)) {
            throw new \InvalidArgumentException('non-nullable TwentyFiveToThirtyFour cannot be null');
        }
        $this->container['TwentyFiveToThirtyFour'] = $TwentyFiveToThirtyFour;

        return $this;
    }

    /**
     * Gets ThirtyFiveToFourtyNine
     *
     * @return float|null
     */
    public function getThirtyFiveToFourtyNine()
    {
        if (!isset($this->container['ThirtyFiveToFourtyNine']) || is_null($this->container['ThirtyFiveToFourtyNine'])) {
            return null;
        }
        return $this->container['ThirtyFiveToFourtyNine'];
    }

    /**
     * Sets ThirtyFiveToFourtyNine
     *
     * @param float|null $ThirtyFiveToFourtyNine ThirtyFiveToFourtyNine
     *
     * @return self
     */
    public function setThirtyFiveToFourtyNine($ThirtyFiveToFourtyNine)
    {
        if (is_null($ThirtyFiveToFourtyNine)) {
            throw new \InvalidArgumentException('non-nullable ThirtyFiveToFourtyNine cannot be null');
        }
        $this->container['ThirtyFiveToFourtyNine'] = $ThirtyFiveToFourtyNine;

        return $this;
    }

    /**
     * Gets FiftyToSixtyFour
     *
     * @return float|null
     */
    public function getFiftyToSixtyFour()
    {
        if (!isset($this->container['FiftyToSixtyFour']) || is_null($this->container['FiftyToSixtyFour'])) {
            return null;
        }
        return $this->container['FiftyToSixtyFour'];
    }

    /**
     * Sets FiftyToSixtyFour
     *
     * @param float|null $FiftyToSixtyFour FiftyToSixtyFour
     *
     * @return self
     */
    public function setFiftyToSixtyFour($FiftyToSixtyFour)
    {
        if (is_null($FiftyToSixtyFour)) {
            throw new \InvalidArgumentException('non-nullable FiftyToSixtyFour cannot be null');
        }
        $this->container['FiftyToSixtyFour'] = $FiftyToSixtyFour;

        return $this;
    }

    /**
     * Gets SixtyFiveAndAbove
     *
     * @return float|null
     */
    public function getSixtyFiveAndAbove()
    {
        if (!isset($this->container['SixtyFiveAndAbove']) || is_null($this->container['SixtyFiveAndAbove'])) {
            return null;
        }
        return $this->container['SixtyFiveAndAbove'];
    }

    /**
     * Sets SixtyFiveAndAbove
     *
     * @param float|null $SixtyFiveAndAbove SixtyFiveAndAbove
     *
     * @return self
     */
    public function setSixtyFiveAndAbove($SixtyFiveAndAbove)
    {
        if (is_null($SixtyFiveAndAbove)) {
            throw new \InvalidArgumentException('non-nullable SixtyFiveAndAbove cannot be null');
        }
        $this->container['SixtyFiveAndAbove'] = $SixtyFiveAndAbove;

        return $this;
    }

    /**
     * Gets AgeUnknown
     *
     * @return float|null
     */
    public function getAgeUnknown()
    {
        if (!isset($this->container['AgeUnknown']) || is_null($this->container['AgeUnknown'])) {
            return null;
        }
        return $this->container['AgeUnknown'];
    }

    /**
     * Sets AgeUnknown
     *
     * @param float|null $AgeUnknown AgeUnknown
     *
     * @return self
     */
    public function setAgeUnknown($AgeUnknown)
    {
        if (is_null($AgeUnknown)) {
            throw new \InvalidArgumentException('non-nullable AgeUnknown cannot be null');
        }
        $this->container['AgeUnknown'] = $AgeUnknown;

        return $this;
    }

    /**
     * Gets Female
     *
     * @return float|null
     */
    public function getFemale()
    {
        if (!isset($this->container['Female']) || is_null($this->container['Female'])) {
            return null;
        }
        return $this->container['Female'];
    }

    /**
     * Sets Female
     *
     * @param float|null $Female Female
     *
     * @return self
     */
    public function setFemale($Female)
    {
        if (is_null($Female)) {
            throw new \InvalidArgumentException('non-nullable Female cannot be null');
        }
        $this->container['Female'] = $Female;

        return $this;
    }

    /**
     * Gets Male
     *
     * @return float|null
     */
    public function getMale()
    {
        if (!isset($this->container['Male']) || is_null($this->container['Male'])) {
            return null;
        }
        return $this->container['Male'];
    }

    /**
     * Sets Male
     *
     * @param float|null $Male Male
     *
     * @return self
     */
    public function setMale($Male)
    {
        if (is_null($Male)) {
            throw new \InvalidArgumentException('non-nullable Male cannot be null');
        }
        $this->container['Male'] = $Male;

        return $this;
    }

    /**
     * Gets GenderUnknown
     *
     * @return float|null
     */
    public function getGenderUnknown()
    {
        if (!isset($this->container['GenderUnknown']) || is_null($this->container['GenderUnknown'])) {
            return null;
        }
        return $this->container['GenderUnknown'];
    }

    /**
     * Sets GenderUnknown
     *
     * @param float|null $GenderUnknown GenderUnknown
     *
     * @return self
     */
    public function setGenderUnknown($GenderUnknown)
    {
        if (is_null($GenderUnknown)) {
            throw new \InvalidArgumentException('non-nullable GenderUnknown cannot be null');
        }
        $this->container['GenderUnknown'] = $GenderUnknown;

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
