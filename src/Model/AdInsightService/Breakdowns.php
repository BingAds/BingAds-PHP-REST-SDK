<?php
/**
 * Breakdowns
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

class Breakdowns implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Breakdowns';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Age' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown',
        'Device' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown',
        'Gender' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown',
        'InMarket' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown',
        'Industry' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown',
        'JobFunction' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown',
        'LocationCountry' => '\Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown',
        'Location' => '\Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown',
        'LocationSubGeography' => '\Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown',
        'LocationMetroArea' => '\Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown',
        'LocationCity' => '\Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown',
        'LocationPostalCode' => '\Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown',
        'LocationCounty' => '\Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Age' => null,
        'Device' => null,
        'Gender' => null,
        'InMarket' => null,
        'Industry' => null,
        'JobFunction' => null,
        'LocationCountry' => null,
        'Location' => null,
        'LocationSubGeography' => null,
        'LocationMetroArea' => null,
        'LocationCity' => null,
        'LocationPostalCode' => null,
        'LocationCounty' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Age' => true,
        'Device' => true,
        'Gender' => true,
        'InMarket' => true,
        'Industry' => true,
        'JobFunction' => true,
        'LocationCountry' => true,
        'Location' => true,
        'LocationSubGeography' => true,
        'LocationMetroArea' => true,
        'LocationCity' => true,
        'LocationPostalCode' => true,
        'LocationCounty' => true
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
        'Age' => 'Age',
        'Device' => 'Device',
        'Gender' => 'Gender',
        'InMarket' => 'InMarket',
        'Industry' => 'Industry',
        'JobFunction' => 'JobFunction',
        'LocationCountry' => 'LocationCountry',
        'Location' => 'Location',
        'LocationSubGeography' => 'LocationSubGeography',
        'LocationMetroArea' => 'LocationMetroArea',
        'LocationCity' => 'LocationCity',
        'LocationPostalCode' => 'LocationPostalCode',
        'LocationCounty' => 'LocationCounty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Age' => 'setAge',
        'Device' => 'setDevice',
        'Gender' => 'setGender',
        'InMarket' => 'setInMarket',
        'Industry' => 'setIndustry',
        'JobFunction' => 'setJobFunction',
        'LocationCountry' => 'setLocationCountry',
        'Location' => 'setLocation',
        'LocationSubGeography' => 'setLocationSubGeography',
        'LocationMetroArea' => 'setLocationMetroArea',
        'LocationCity' => 'setLocationCity',
        'LocationPostalCode' => 'setLocationPostalCode',
        'LocationCounty' => 'setLocationCounty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Age' => 'getAge',
        'Device' => 'getDevice',
        'Gender' => 'getGender',
        'InMarket' => 'getInMarket',
        'Industry' => 'getIndustry',
        'JobFunction' => 'getJobFunction',
        'LocationCountry' => 'getLocationCountry',
        'Location' => 'getLocation',
        'LocationSubGeography' => 'getLocationSubGeography',
        'LocationMetroArea' => 'getLocationMetroArea',
        'LocationCity' => 'getLocationCity',
        'LocationPostalCode' => 'getLocationPostalCode',
        'LocationCounty' => 'getLocationCounty'
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
        $this->setIfExists('Age', $data ?? [], null);
        $this->setIfExists('Device', $data ?? [], null);
        $this->setIfExists('Gender', $data ?? [], null);
        $this->setIfExists('InMarket', $data ?? [], null);
        $this->setIfExists('Industry', $data ?? [], null);
        $this->setIfExists('JobFunction', $data ?? [], null);
        $this->setIfExists('LocationCountry', $data ?? [], null);
        $this->setIfExists('Location', $data ?? [], null);
        $this->setIfExists('LocationSubGeography', $data ?? [], null);
        $this->setIfExists('LocationMetroArea', $data ?? [], null);
        $this->setIfExists('LocationCity', $data ?? [], null);
        $this->setIfExists('LocationPostalCode', $data ?? [], null);
        $this->setIfExists('LocationCounty', $data ?? [], null);
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
     * Gets Age
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null
     */
    public function getAge()
    {
        if (!isset($this->container['Age']) || is_null($this->container['Age'])) {
            return null;
        }
        return $this->container['Age'];
    }

    /**
     * Sets Age
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null $Age Age
     *
     * @return self
     */
    public function setAge($Age)
    {
        if (is_null($Age)) {
            array_push($this->openAPINullablesSetToNull, 'Age');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Age', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Age'] = $Age;

        return $this;
    }

    /**
     * Gets Device
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null
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
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null $Device Device
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
     * Gets Gender
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null
     */
    public function getGender()
    {
        if (!isset($this->container['Gender']) || is_null($this->container['Gender'])) {
            return null;
        }
        return $this->container['Gender'];
    }

    /**
     * Sets Gender
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null $Gender Gender
     *
     * @return self
     */
    public function setGender($Gender)
    {
        if (is_null($Gender)) {
            array_push($this->openAPINullablesSetToNull, 'Gender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Gender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Gender'] = $Gender;

        return $this;
    }

    /**
     * Gets InMarket
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null
     */
    public function getInMarket()
    {
        if (!isset($this->container['InMarket']) || is_null($this->container['InMarket'])) {
            return null;
        }
        return $this->container['InMarket'];
    }

    /**
     * Sets InMarket
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null $InMarket InMarket
     *
     * @return self
     */
    public function setInMarket($InMarket)
    {
        if (is_null($InMarket)) {
            array_push($this->openAPINullablesSetToNull, 'InMarket');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('InMarket', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['InMarket'] = $InMarket;

        return $this;
    }

    /**
     * Gets Industry
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null
     */
    public function getIndustry()
    {
        if (!isset($this->container['Industry']) || is_null($this->container['Industry'])) {
            return null;
        }
        return $this->container['Industry'];
    }

    /**
     * Sets Industry
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null $Industry Industry
     *
     * @return self
     */
    public function setIndustry($Industry)
    {
        if (is_null($Industry)) {
            array_push($this->openAPINullablesSetToNull, 'Industry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Industry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Industry'] = $Industry;

        return $this;
    }

    /**
     * Gets JobFunction
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null
     */
    public function getJobFunction()
    {
        if (!isset($this->container['JobFunction']) || is_null($this->container['JobFunction'])) {
            return null;
        }
        return $this->container['JobFunction'];
    }

    /**
     * Sets JobFunction
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Breakdown|null $JobFunction JobFunction
     *
     * @return self
     */
    public function setJobFunction($JobFunction)
    {
        if (is_null($JobFunction)) {
            array_push($this->openAPINullablesSetToNull, 'JobFunction');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('JobFunction', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['JobFunction'] = $JobFunction;

        return $this;
    }

    /**
     * Gets LocationCountry
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null
     */
    public function getLocationCountry()
    {
        if (!isset($this->container['LocationCountry']) || is_null($this->container['LocationCountry'])) {
            return null;
        }
        return $this->container['LocationCountry'];
    }

    /**
     * Sets LocationCountry
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null $LocationCountry LocationCountry
     *
     * @return self
     */
    public function setLocationCountry($LocationCountry)
    {
        if (is_null($LocationCountry)) {
            array_push($this->openAPINullablesSetToNull, 'LocationCountry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LocationCountry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LocationCountry'] = $LocationCountry;

        return $this;
    }

    /**
     * Gets Location
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null
     */
    public function getLocation()
    {
        if (!isset($this->container['Location']) || is_null($this->container['Location'])) {
            return null;
        }
        return $this->container['Location'];
    }

    /**
     * Sets Location
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null $Location Location
     *
     * @return self
     */
    public function setLocation($Location)
    {
        if (is_null($Location)) {
            array_push($this->openAPINullablesSetToNull, 'Location');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Location', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Location'] = $Location;

        return $this;
    }

    /**
     * Gets LocationSubGeography
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null
     */
    public function getLocationSubGeography()
    {
        if (!isset($this->container['LocationSubGeography']) || is_null($this->container['LocationSubGeography'])) {
            return null;
        }
        return $this->container['LocationSubGeography'];
    }

    /**
     * Sets LocationSubGeography
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null $LocationSubGeography LocationSubGeography
     *
     * @return self
     */
    public function setLocationSubGeography($LocationSubGeography)
    {
        if (is_null($LocationSubGeography)) {
            array_push($this->openAPINullablesSetToNull, 'LocationSubGeography');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LocationSubGeography', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LocationSubGeography'] = $LocationSubGeography;

        return $this;
    }

    /**
     * Gets LocationMetroArea
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null
     */
    public function getLocationMetroArea()
    {
        if (!isset($this->container['LocationMetroArea']) || is_null($this->container['LocationMetroArea'])) {
            return null;
        }
        return $this->container['LocationMetroArea'];
    }

    /**
     * Sets LocationMetroArea
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null $LocationMetroArea LocationMetroArea
     *
     * @return self
     */
    public function setLocationMetroArea($LocationMetroArea)
    {
        if (is_null($LocationMetroArea)) {
            array_push($this->openAPINullablesSetToNull, 'LocationMetroArea');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LocationMetroArea', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LocationMetroArea'] = $LocationMetroArea;

        return $this;
    }

    /**
     * Gets LocationCity
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null
     */
    public function getLocationCity()
    {
        if (!isset($this->container['LocationCity']) || is_null($this->container['LocationCity'])) {
            return null;
        }
        return $this->container['LocationCity'];
    }

    /**
     * Sets LocationCity
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null $LocationCity LocationCity
     *
     * @return self
     */
    public function setLocationCity($LocationCity)
    {
        if (is_null($LocationCity)) {
            array_push($this->openAPINullablesSetToNull, 'LocationCity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LocationCity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LocationCity'] = $LocationCity;

        return $this;
    }

    /**
     * Gets LocationPostalCode
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null
     */
    public function getLocationPostalCode()
    {
        if (!isset($this->container['LocationPostalCode']) || is_null($this->container['LocationPostalCode'])) {
            return null;
        }
        return $this->container['LocationPostalCode'];
    }

    /**
     * Sets LocationPostalCode
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null $LocationPostalCode LocationPostalCode
     *
     * @return self
     */
    public function setLocationPostalCode($LocationPostalCode)
    {
        if (is_null($LocationPostalCode)) {
            array_push($this->openAPINullablesSetToNull, 'LocationPostalCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LocationPostalCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LocationPostalCode'] = $LocationPostalCode;

        return $this;
    }

    /**
     * Gets LocationCounty
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null
     */
    public function getLocationCounty()
    {
        if (!isset($this->container['LocationCounty']) || is_null($this->container['LocationCounty'])) {
            return null;
        }
        return $this->container['LocationCounty'];
    }

    /**
     * Sets LocationCounty
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\LocationBreakdown|null $LocationCounty LocationCounty
     *
     * @return self
     */
    public function setLocationCounty($LocationCounty)
    {
        if (is_null($LocationCounty)) {
            array_push($this->openAPINullablesSetToNull, 'LocationCounty');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LocationCounty', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LocationCounty'] = $LocationCounty;

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
