<?php
/**
 * HTML5
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

class HTML5 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'HTML5';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Id' => 'string',
        'Name' => 'string',
        'Url' => 'string',
        'Text' => 'string',
        'DestinationUrl' => 'string',
        'ThumbnailUrl' => 'string',
        'Width' => 'int',
        'Height' => 'int',
        'Status' => 'string',
        'CreatedDateTimeInUTC' => '\DateTime',
        'ModifiedDateTimeInUTC' => '\DateTime',
        'FailureCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Id' => 'int64',
        'Name' => null,
        'Url' => null,
        'Text' => null,
        'DestinationUrl' => null,
        'ThumbnailUrl' => null,
        'Width' => 'int32',
        'Height' => 'int32',
        'Status' => null,
        'CreatedDateTimeInUTC' => 'date-time',
        'ModifiedDateTimeInUTC' => 'date-time',
        'FailureCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Id' => true,
        'Name' => true,
        'Url' => true,
        'Text' => true,
        'DestinationUrl' => true,
        'ThumbnailUrl' => true,
        'Width' => true,
        'Height' => true,
        'Status' => true,
        'CreatedDateTimeInUTC' => true,
        'ModifiedDateTimeInUTC' => true,
        'FailureCode' => true
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
        'Id' => 'Id',
        'Name' => 'Name',
        'Url' => 'Url',
        'Text' => 'Text',
        'DestinationUrl' => 'DestinationUrl',
        'ThumbnailUrl' => 'ThumbnailUrl',
        'Width' => 'Width',
        'Height' => 'Height',
        'Status' => 'Status',
        'CreatedDateTimeInUTC' => 'CreatedDateTimeInUTC',
        'ModifiedDateTimeInUTC' => 'ModifiedDateTimeInUTC',
        'FailureCode' => 'FailureCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Id' => 'setId',
        'Name' => 'setName',
        'Url' => 'setUrl',
        'Text' => 'setText',
        'DestinationUrl' => 'setDestinationUrl',
        'ThumbnailUrl' => 'setThumbnailUrl',
        'Width' => 'setWidth',
        'Height' => 'setHeight',
        'Status' => 'setStatus',
        'CreatedDateTimeInUTC' => 'setCreatedDateTimeInUTC',
        'ModifiedDateTimeInUTC' => 'setModifiedDateTimeInUTC',
        'FailureCode' => 'setFailureCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Id' => 'getId',
        'Name' => 'getName',
        'Url' => 'getUrl',
        'Text' => 'getText',
        'DestinationUrl' => 'getDestinationUrl',
        'ThumbnailUrl' => 'getThumbnailUrl',
        'Width' => 'getWidth',
        'Height' => 'getHeight',
        'Status' => 'getStatus',
        'CreatedDateTimeInUTC' => 'getCreatedDateTimeInUTC',
        'ModifiedDateTimeInUTC' => 'getModifiedDateTimeInUTC',
        'FailureCode' => 'getFailureCode'
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
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('Url', $data ?? [], null);
        $this->setIfExists('Text', $data ?? [], null);
        $this->setIfExists('DestinationUrl', $data ?? [], null);
        $this->setIfExists('ThumbnailUrl', $data ?? [], null);
        $this->setIfExists('Width', $data ?? [], null);
        $this->setIfExists('Height', $data ?? [], null);
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('CreatedDateTimeInUTC', $data ?? [], null);
        $this->setIfExists('ModifiedDateTimeInUTC', $data ?? [], null);
        $this->setIfExists('FailureCode', $data ?? [], null);
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
     * Gets Id
     *
     * @return string|null
     */
    public function getId()
    {
        if (!isset($this->container['Id']) || is_null($this->container['Id'])) {
            return null;
        }
        return $this->container['Id'];
    }

    /**
     * Sets Id
     *
     * @param string|null $Id Id
     *
     * @return self
     */
    public function setId($Id)
    {
        if (is_null($Id)) {
            array_push($this->openAPINullablesSetToNull, 'Id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Id'] = $Id;

        return $this;
    }

    /**
     * Gets Name
     *
     * @return string|null
     */
    public function getName()
    {
        if (!isset($this->container['Name']) || is_null($this->container['Name'])) {
            return null;
        }
        return $this->container['Name'];
    }

    /**
     * Sets Name
     *
     * @param string|null $Name Name
     *
     * @return self
     */
    public function setName($Name)
    {
        if (is_null($Name)) {
            array_push($this->openAPINullablesSetToNull, 'Name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Name'] = $Name;

        return $this;
    }

    /**
     * Gets Url
     *
     * @return string|null
     */
    public function getUrl()
    {
        if (!isset($this->container['Url']) || is_null($this->container['Url'])) {
            return null;
        }
        return $this->container['Url'];
    }

    /**
     * Sets Url
     *
     * @param string|null $Url Url
     *
     * @return self
     */
    public function setUrl($Url)
    {
        if (is_null($Url)) {
            array_push($this->openAPINullablesSetToNull, 'Url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Url'] = $Url;

        return $this;
    }

    /**
     * Gets Text
     *
     * @return string|null
     */
    public function getText()
    {
        if (!isset($this->container['Text']) || is_null($this->container['Text'])) {
            return null;
        }
        return $this->container['Text'];
    }

    /**
     * Sets Text
     *
     * @param string|null $Text Text
     *
     * @return self
     */
    public function setText($Text)
    {
        if (is_null($Text)) {
            array_push($this->openAPINullablesSetToNull, 'Text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Text'] = $Text;

        return $this;
    }

    /**
     * Gets DestinationUrl
     *
     * @return string|null
     */
    public function getDestinationUrl()
    {
        if (!isset($this->container['DestinationUrl']) || is_null($this->container['DestinationUrl'])) {
            return null;
        }
        return $this->container['DestinationUrl'];
    }

    /**
     * Sets DestinationUrl
     *
     * @param string|null $DestinationUrl DestinationUrl
     *
     * @return self
     */
    public function setDestinationUrl($DestinationUrl)
    {
        if (is_null($DestinationUrl)) {
            array_push($this->openAPINullablesSetToNull, 'DestinationUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DestinationUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DestinationUrl'] = $DestinationUrl;

        return $this;
    }

    /**
     * Gets ThumbnailUrl
     *
     * @return string|null
     */
    public function getThumbnailUrl()
    {
        if (!isset($this->container['ThumbnailUrl']) || is_null($this->container['ThumbnailUrl'])) {
            return null;
        }
        return $this->container['ThumbnailUrl'];
    }

    /**
     * Sets ThumbnailUrl
     *
     * @param string|null $ThumbnailUrl ThumbnailUrl
     *
     * @return self
     */
    public function setThumbnailUrl($ThumbnailUrl)
    {
        if (is_null($ThumbnailUrl)) {
            array_push($this->openAPINullablesSetToNull, 'ThumbnailUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ThumbnailUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ThumbnailUrl'] = $ThumbnailUrl;

        return $this;
    }

    /**
     * Gets Width
     *
     * @return int|null
     */
    public function getWidth()
    {
        if (!isset($this->container['Width']) || is_null($this->container['Width'])) {
            return null;
        }
        return $this->container['Width'];
    }

    /**
     * Sets Width
     *
     * @param int|null $Width Width
     *
     * @return self
     */
    public function setWidth($Width)
    {
        if (is_null($Width)) {
            array_push($this->openAPINullablesSetToNull, 'Width');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Width', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Width'] = $Width;

        return $this;
    }

    /**
     * Gets Height
     *
     * @return int|null
     */
    public function getHeight()
    {
        if (!isset($this->container['Height']) || is_null($this->container['Height'])) {
            return null;
        }
        return $this->container['Height'];
    }

    /**
     * Sets Height
     *
     * @param int|null $Height Height
     *
     * @return self
     */
    public function setHeight($Height)
    {
        if (is_null($Height)) {
            array_push($this->openAPINullablesSetToNull, 'Height');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Height', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Height'] = $Height;

        return $this;
    }

    /**
     * Gets Status
     *
     * @return string|null
     */
    public function getStatus()
    {
        if (!isset($this->container['Status']) || is_null($this->container['Status'])) {
            return null;
        }
        return $this->container['Status'];
    }

    /**
     * Sets Status
     *
     * @param string|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            array_push($this->openAPINullablesSetToNull, 'Status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets CreatedDateTimeInUTC
     *
     * @return \DateTime|null
     */
    public function getCreatedDateTimeInUTC()
    {
        if (!isset($this->container['CreatedDateTimeInUTC']) || is_null($this->container['CreatedDateTimeInUTC'])) {
            return null;
        }
        return $this->container['CreatedDateTimeInUTC'];
    }

    /**
     * Sets CreatedDateTimeInUTC
     *
     * @param \DateTime|null $CreatedDateTimeInUTC CreatedDateTimeInUTC
     *
     * @return self
     */
    public function setCreatedDateTimeInUTC($CreatedDateTimeInUTC)
    {
        if (is_null($CreatedDateTimeInUTC)) {
            array_push($this->openAPINullablesSetToNull, 'CreatedDateTimeInUTC');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CreatedDateTimeInUTC', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CreatedDateTimeInUTC'] = $CreatedDateTimeInUTC;

        return $this;
    }

    /**
     * Gets ModifiedDateTimeInUTC
     *
     * @return \DateTime|null
     */
    public function getModifiedDateTimeInUTC()
    {
        if (!isset($this->container['ModifiedDateTimeInUTC']) || is_null($this->container['ModifiedDateTimeInUTC'])) {
            return null;
        }
        return $this->container['ModifiedDateTimeInUTC'];
    }

    /**
     * Sets ModifiedDateTimeInUTC
     *
     * @param \DateTime|null $ModifiedDateTimeInUTC ModifiedDateTimeInUTC
     *
     * @return self
     */
    public function setModifiedDateTimeInUTC($ModifiedDateTimeInUTC)
    {
        if (is_null($ModifiedDateTimeInUTC)) {
            array_push($this->openAPINullablesSetToNull, 'ModifiedDateTimeInUTC');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ModifiedDateTimeInUTC', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ModifiedDateTimeInUTC'] = $ModifiedDateTimeInUTC;

        return $this;
    }

    /**
     * Gets FailureCode
     *
     * @return string|null
     */
    public function getFailureCode()
    {
        if (!isset($this->container['FailureCode']) || is_null($this->container['FailureCode'])) {
            return null;
        }
        return $this->container['FailureCode'];
    }

    /**
     * Sets FailureCode
     *
     * @param string|null $FailureCode FailureCode
     *
     * @return self
     */
    public function setFailureCode($FailureCode)
    {
        if (is_null($FailureCode)) {
            array_push($this->openAPINullablesSetToNull, 'FailureCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FailureCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FailureCode'] = $FailureCode;

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
