<?php
/**
 * LinkedInCompanyData
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

class LinkedInCompanyData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LinkedInCompanyData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CompanyId' => 'string',
        'CompanyName' => 'string',
        'CompanyLogo' => 'string',
        'Industry' => 'string',
        'CompanySize' => 'string',
        'CompanySizeCategory' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CompanySizeCategory',
        'CompanyUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'CompanyId' => 'int64',
        'CompanyName' => null,
        'CompanyLogo' => null,
        'Industry' => null,
        'CompanySize' => null,
        'CompanySizeCategory' => null,
        'CompanyUrl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CompanyId' => false,
        'CompanyName' => true,
        'CompanyLogo' => true,
        'Industry' => true,
        'CompanySize' => true,
        'CompanySizeCategory' => false,
        'CompanyUrl' => true
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
        'CompanyId' => 'CompanyId',
        'CompanyName' => 'CompanyName',
        'CompanyLogo' => 'CompanyLogo',
        'Industry' => 'Industry',
        'CompanySize' => 'CompanySize',
        'CompanySizeCategory' => 'CompanySizeCategory',
        'CompanyUrl' => 'CompanyUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CompanyId' => 'setCompanyId',
        'CompanyName' => 'setCompanyName',
        'CompanyLogo' => 'setCompanyLogo',
        'Industry' => 'setIndustry',
        'CompanySize' => 'setCompanySize',
        'CompanySizeCategory' => 'setCompanySizeCategory',
        'CompanyUrl' => 'setCompanyUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CompanyId' => 'getCompanyId',
        'CompanyName' => 'getCompanyName',
        'CompanyLogo' => 'getCompanyLogo',
        'Industry' => 'getIndustry',
        'CompanySize' => 'getCompanySize',
        'CompanySizeCategory' => 'getCompanySizeCategory',
        'CompanyUrl' => 'getCompanyUrl'
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
        $this->setIfExists('CompanyId', $data ?? [], null);
        $this->setIfExists('CompanyName', $data ?? [], null);
        $this->setIfExists('CompanyLogo', $data ?? [], null);
        $this->setIfExists('Industry', $data ?? [], null);
        $this->setIfExists('CompanySize', $data ?? [], null);
        $this->setIfExists('CompanySizeCategory', $data ?? [], null);
        $this->setIfExists('CompanyUrl', $data ?? [], null);
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
     * Gets CompanyId
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        if (!isset($this->container['CompanyId']) || is_null($this->container['CompanyId'])) {
            return null;
        }
        return $this->container['CompanyId'];
    }

    /**
     * Sets CompanyId
     *
     * @param string|null $CompanyId CompanyId
     *
     * @return self
     */
    public function setCompanyId($CompanyId)
    {
        if (is_null($CompanyId)) {
            throw new \InvalidArgumentException('non-nullable CompanyId cannot be null');
        }
        $this->container['CompanyId'] = $CompanyId;

        return $this;
    }

    /**
     * Gets CompanyName
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        if (!isset($this->container['CompanyName']) || is_null($this->container['CompanyName'])) {
            return null;
        }
        return $this->container['CompanyName'];
    }

    /**
     * Sets CompanyName
     *
     * @param string|null $CompanyName CompanyName
     *
     * @return self
     */
    public function setCompanyName($CompanyName)
    {
        if (is_null($CompanyName)) {
            array_push($this->openAPINullablesSetToNull, 'CompanyName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CompanyName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CompanyName'] = $CompanyName;

        return $this;
    }

    /**
     * Gets CompanyLogo
     *
     * @return string|null
     */
    public function getCompanyLogo()
    {
        if (!isset($this->container['CompanyLogo']) || is_null($this->container['CompanyLogo'])) {
            return null;
        }
        return $this->container['CompanyLogo'];
    }

    /**
     * Sets CompanyLogo
     *
     * @param string|null $CompanyLogo CompanyLogo
     *
     * @return self
     */
    public function setCompanyLogo($CompanyLogo)
    {
        if (is_null($CompanyLogo)) {
            array_push($this->openAPINullablesSetToNull, 'CompanyLogo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CompanyLogo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CompanyLogo'] = $CompanyLogo;

        return $this;
    }

    /**
     * Gets Industry
     *
     * @return string|null
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
     * @param string|null $Industry Industry
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
     * Gets CompanySize
     *
     * @return string|null
     */
    public function getCompanySize()
    {
        if (!isset($this->container['CompanySize']) || is_null($this->container['CompanySize'])) {
            return null;
        }
        return $this->container['CompanySize'];
    }

    /**
     * Sets CompanySize
     *
     * @param string|null $CompanySize CompanySize
     *
     * @return self
     */
    public function setCompanySize($CompanySize)
    {
        if (is_null($CompanySize)) {
            array_push($this->openAPINullablesSetToNull, 'CompanySize');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CompanySize', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CompanySize'] = $CompanySize;

        return $this;
    }

    /**
     * Gets CompanySizeCategory
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CompanySizeCategory|mixed|null
     */
    public function getCompanySizeCategory()
    {
        if (!isset($this->container['CompanySizeCategory']) || is_null($this->container['CompanySizeCategory'])) {
            return null;
        }
        if ((is_object($this->container['CompanySizeCategory']) || is_string($this->container['CompanySizeCategory'])) && method_exists($this->container['CompanySizeCategory'], 'getValue')) {
            return $this->container['CompanySizeCategory']->getValue();
        }
        return $this->container['CompanySizeCategory'];
    }

    /**
     * Sets CompanySizeCategory
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CompanySizeCategory|mixed|null $CompanySizeCategory CompanySizeCategory
     *
     * @return self
     */
    public function setCompanySizeCategory($CompanySizeCategory)
    {
        if (is_null($CompanySizeCategory)) {
            throw new \InvalidArgumentException('non-nullable CompanySizeCategory cannot be null');
        }
        if (!$CompanySizeCategory instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\CompanySizeCategory) {
            $CompanySizeCategory = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\CompanySizeCategory($CompanySizeCategory);
        }
        $this->container['CompanySizeCategory'] = $CompanySizeCategory;

        return $this;
    }

    /**
     * Gets CompanyUrl
     *
     * @return string|null
     */
    public function getCompanyUrl()
    {
        if (!isset($this->container['CompanyUrl']) || is_null($this->container['CompanyUrl'])) {
            return null;
        }
        return $this->container['CompanyUrl'];
    }

    /**
     * Sets CompanyUrl
     *
     * @param string|null $CompanyUrl CompanyUrl
     *
     * @return self
     */
    public function setCompanyUrl($CompanyUrl)
    {
        if (is_null($CompanyUrl)) {
            array_push($this->openAPINullablesSetToNull, 'CompanyUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CompanyUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CompanyUrl'] = $CompanyUrl;

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
