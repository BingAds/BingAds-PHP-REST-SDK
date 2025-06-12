<?php
/**
 * PriceTableRow
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

class PriceTableRow implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PriceTableRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Header' => 'string',
        'Description' => 'string',
        'FinalUrls' => 'string[]',
        'FinalMobileUrls' => 'string[]',
        'Price' => 'float',
        'CurrencyCode' => 'string',
        'PriceUnit' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceUnit',
        'PriceQualifier' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceQualifier',
        'TermsAndConditions' => 'string',
        'TermsAndConditionsUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Header' => null,
        'Description' => null,
        'FinalUrls' => null,
        'FinalMobileUrls' => null,
        'Price' => 'double',
        'CurrencyCode' => null,
        'PriceUnit' => null,
        'PriceQualifier' => null,
        'TermsAndConditions' => null,
        'TermsAndConditionsUrl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Header' => true,
        'Description' => true,
        'FinalUrls' => true,
        'FinalMobileUrls' => true,
        'Price' => false,
        'CurrencyCode' => true,
        'PriceUnit' => false,
        'PriceQualifier' => false,
        'TermsAndConditions' => true,
        'TermsAndConditionsUrl' => true
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
        'Header' => 'Header',
        'Description' => 'Description',
        'FinalUrls' => 'FinalUrls',
        'FinalMobileUrls' => 'FinalMobileUrls',
        'Price' => 'Price',
        'CurrencyCode' => 'CurrencyCode',
        'PriceUnit' => 'PriceUnit',
        'PriceQualifier' => 'PriceQualifier',
        'TermsAndConditions' => 'TermsAndConditions',
        'TermsAndConditionsUrl' => 'TermsAndConditionsUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Header' => 'setHeader',
        'Description' => 'setDescription',
        'FinalUrls' => 'setFinalUrls',
        'FinalMobileUrls' => 'setFinalMobileUrls',
        'Price' => 'setPrice',
        'CurrencyCode' => 'setCurrencyCode',
        'PriceUnit' => 'setPriceUnit',
        'PriceQualifier' => 'setPriceQualifier',
        'TermsAndConditions' => 'setTermsAndConditions',
        'TermsAndConditionsUrl' => 'setTermsAndConditionsUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Header' => 'getHeader',
        'Description' => 'getDescription',
        'FinalUrls' => 'getFinalUrls',
        'FinalMobileUrls' => 'getFinalMobileUrls',
        'Price' => 'getPrice',
        'CurrencyCode' => 'getCurrencyCode',
        'PriceUnit' => 'getPriceUnit',
        'PriceQualifier' => 'getPriceQualifier',
        'TermsAndConditions' => 'getTermsAndConditions',
        'TermsAndConditionsUrl' => 'getTermsAndConditionsUrl'
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
        $this->setIfExists('Header', $data ?? [], null);
        $this->setIfExists('Description', $data ?? [], null);
        $this->setIfExists('FinalUrls', $data ?? [], null);
        $this->setIfExists('FinalMobileUrls', $data ?? [], null);
        $this->setIfExists('Price', $data ?? [], null);
        $this->setIfExists('CurrencyCode', $data ?? [], null);
        $this->setIfExists('PriceUnit', $data ?? [], null);
        $this->setIfExists('PriceQualifier', $data ?? [], null);
        $this->setIfExists('TermsAndConditions', $data ?? [], null);
        $this->setIfExists('TermsAndConditionsUrl', $data ?? [], null);
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
     * Gets Header
     *
     * @return string|null
     */
    public function getHeader()
    {
        if (!isset($this->container['Header']) || is_null($this->container['Header'])) {
            return null;
        }
        return $this->container['Header'];
    }

    /**
     * Sets Header
     *
     * @param string|null $Header Header
     *
     * @return self
     */
    public function setHeader($Header)
    {
        if (is_null($Header)) {
            array_push($this->openAPINullablesSetToNull, 'Header');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Header', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Header'] = $Header;

        return $this;
    }

    /**
     * Gets Description
     *
     * @return string|null
     */
    public function getDescription()
    {
        if (!isset($this->container['Description']) || is_null($this->container['Description'])) {
            return null;
        }
        return $this->container['Description'];
    }

    /**
     * Sets Description
     *
     * @param string|null $Description Description
     *
     * @return self
     */
    public function setDescription($Description)
    {
        if (is_null($Description)) {
            array_push($this->openAPINullablesSetToNull, 'Description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Description'] = $Description;

        return $this;
    }

    /**
     * Gets FinalUrls
     *
     * @return string[]|null
     */
    public function getFinalUrls()
    {
        if (!isset($this->container['FinalUrls']) || is_null($this->container['FinalUrls'])) {
            return null;
        }
        return $this->container['FinalUrls'];
    }

    /**
     * Sets FinalUrls
     *
     * @param string[]|null $FinalUrls FinalUrls
     *
     * @return self
     */
    public function setFinalUrls($FinalUrls)
    {
        if (is_null($FinalUrls)) {
            array_push($this->openAPINullablesSetToNull, 'FinalUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FinalUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FinalUrls'] = $FinalUrls;

        return $this;
    }

    /**
     * Gets FinalMobileUrls
     *
     * @return string[]|null
     */
    public function getFinalMobileUrls()
    {
        if (!isset($this->container['FinalMobileUrls']) || is_null($this->container['FinalMobileUrls'])) {
            return null;
        }
        return $this->container['FinalMobileUrls'];
    }

    /**
     * Sets FinalMobileUrls
     *
     * @param string[]|null $FinalMobileUrls FinalMobileUrls
     *
     * @return self
     */
    public function setFinalMobileUrls($FinalMobileUrls)
    {
        if (is_null($FinalMobileUrls)) {
            array_push($this->openAPINullablesSetToNull, 'FinalMobileUrls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FinalMobileUrls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FinalMobileUrls'] = $FinalMobileUrls;

        return $this;
    }

    /**
     * Gets Price
     *
     * @return float|null
     */
    public function getPrice()
    {
        if (!isset($this->container['Price']) || is_null($this->container['Price'])) {
            return null;
        }
        return $this->container['Price'];
    }

    /**
     * Sets Price
     *
     * @param float|null $Price Price
     *
     * @return self
     */
    public function setPrice($Price)
    {
        if (is_null($Price)) {
            throw new \InvalidArgumentException('non-nullable Price cannot be null');
        }
        $this->container['Price'] = $Price;

        return $this;
    }

    /**
     * Gets CurrencyCode
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        if (!isset($this->container['CurrencyCode']) || is_null($this->container['CurrencyCode'])) {
            return null;
        }
        return $this->container['CurrencyCode'];
    }

    /**
     * Sets CurrencyCode
     *
     * @param string|null $CurrencyCode CurrencyCode
     *
     * @return self
     */
    public function setCurrencyCode($CurrencyCode)
    {
        if (is_null($CurrencyCode)) {
            array_push($this->openAPINullablesSetToNull, 'CurrencyCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CurrencyCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CurrencyCode'] = $CurrencyCode;

        return $this;
    }

    /**
     * Gets PriceUnit
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceUnit|mixed|null
     */
    public function getPriceUnit()
    {
        if (!isset($this->container['PriceUnit']) || is_null($this->container['PriceUnit'])) {
            return null;
        }
        if ((is_object($this->container['PriceUnit']) || is_string($this->container['PriceUnit'])) && method_exists($this->container['PriceUnit'], 'getValue')) {
            return $this->container['PriceUnit']->getValue();
        }
        return $this->container['PriceUnit'];
    }

    /**
     * Sets PriceUnit
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceUnit|mixed|null $PriceUnit PriceUnit
     *
     * @return self
     */
    public function setPriceUnit($PriceUnit)
    {
        if (is_null($PriceUnit)) {
            throw new \InvalidArgumentException('non-nullable PriceUnit cannot be null');
        }
        if (!$PriceUnit instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceUnit) {
            $PriceUnit = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceUnit($PriceUnit);
        }
        $this->container['PriceUnit'] = $PriceUnit;

        return $this;
    }

    /**
     * Gets PriceQualifier
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceQualifier|mixed|null
     */
    public function getPriceQualifier()
    {
        if (!isset($this->container['PriceQualifier']) || is_null($this->container['PriceQualifier'])) {
            return null;
        }
        if ((is_object($this->container['PriceQualifier']) || is_string($this->container['PriceQualifier'])) && method_exists($this->container['PriceQualifier'], 'getValue')) {
            return $this->container['PriceQualifier']->getValue();
        }
        return $this->container['PriceQualifier'];
    }

    /**
     * Sets PriceQualifier
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceQualifier|mixed|null $PriceQualifier PriceQualifier
     *
     * @return self
     */
    public function setPriceQualifier($PriceQualifier)
    {
        if (is_null($PriceQualifier)) {
            throw new \InvalidArgumentException('non-nullable PriceQualifier cannot be null');
        }
        if (!$PriceQualifier instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceQualifier) {
            $PriceQualifier = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\PriceQualifier($PriceQualifier);
        }
        $this->container['PriceQualifier'] = $PriceQualifier;

        return $this;
    }

    /**
     * Gets TermsAndConditions
     *
     * @return string|null
     */
    public function getTermsAndConditions()
    {
        if (!isset($this->container['TermsAndConditions']) || is_null($this->container['TermsAndConditions'])) {
            return null;
        }
        return $this->container['TermsAndConditions'];
    }

    /**
     * Sets TermsAndConditions
     *
     * @param string|null $TermsAndConditions TermsAndConditions
     *
     * @return self
     */
    public function setTermsAndConditions($TermsAndConditions)
    {
        if (is_null($TermsAndConditions)) {
            array_push($this->openAPINullablesSetToNull, 'TermsAndConditions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TermsAndConditions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TermsAndConditions'] = $TermsAndConditions;

        return $this;
    }

    /**
     * Gets TermsAndConditionsUrl
     *
     * @return string|null
     */
    public function getTermsAndConditionsUrl()
    {
        if (!isset($this->container['TermsAndConditionsUrl']) || is_null($this->container['TermsAndConditionsUrl'])) {
            return null;
        }
        return $this->container['TermsAndConditionsUrl'];
    }

    /**
     * Sets TermsAndConditionsUrl
     *
     * @param string|null $TermsAndConditionsUrl TermsAndConditionsUrl
     *
     * @return self
     */
    public function setTermsAndConditionsUrl($TermsAndConditionsUrl)
    {
        if (is_null($TermsAndConditionsUrl)) {
            array_push($this->openAPINullablesSetToNull, 'TermsAndConditionsUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TermsAndConditionsUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TermsAndConditionsUrl'] = $TermsAndConditionsUrl;

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
