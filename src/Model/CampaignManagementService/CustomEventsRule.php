<?php
/**
 * CustomEventsRule
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

class CustomEventsRule extends RemarketingRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CustomEventsRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Type' => 'string',
        'CategoryOperator' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator',
        'Category' => 'string',
        'ActionOperator' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator',
        'Action' => 'string',
        'LabelOperator' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator',
        'Label' => 'string',
        'ValueOperator' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\NumberOperator',
        'Value' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Type' => null,
        'CategoryOperator' => null,
        'Category' => null,
        'ActionOperator' => null,
        'Action' => null,
        'LabelOperator' => null,
        'Label' => null,
        'ValueOperator' => null,
        'Value' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Type' => true,
        'CategoryOperator' => false,
        'Category' => true,
        'ActionOperator' => false,
        'Action' => true,
        'LabelOperator' => false,
        'Label' => true,
        'ValueOperator' => false,
        'Value' => true
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
        'Type' => 'Type',
        'CategoryOperator' => 'CategoryOperator',
        'Category' => 'Category',
        'ActionOperator' => 'ActionOperator',
        'Action' => 'Action',
        'LabelOperator' => 'LabelOperator',
        'Label' => 'Label',
        'ValueOperator' => 'ValueOperator',
        'Value' => 'Value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Type' => 'setType',
        'CategoryOperator' => 'setCategoryOperator',
        'Category' => 'setCategory',
        'ActionOperator' => 'setActionOperator',
        'Action' => 'setAction',
        'LabelOperator' => 'setLabelOperator',
        'Label' => 'setLabel',
        'ValueOperator' => 'setValueOperator',
        'Value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Type' => 'getType',
        'CategoryOperator' => 'getCategoryOperator',
        'Category' => 'getCategory',
        'ActionOperator' => 'getActionOperator',
        'Action' => 'getAction',
        'LabelOperator' => 'getLabelOperator',
        'Label' => 'getLabel',
        'ValueOperator' => 'getValueOperator',
        'Value' => 'getValue'
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
        $this->setIfExists('Type', $data ?? [], 'CustomEvents');
        $this->setIfExists('CategoryOperator', $data ?? [], null);
        $this->setIfExists('Category', $data ?? [], null);
        $this->setIfExists('ActionOperator', $data ?? [], null);
        $this->setIfExists('Action', $data ?? [], null);
        $this->setIfExists('LabelOperator', $data ?? [], null);
        $this->setIfExists('Label', $data ?? [], null);
        $this->setIfExists('ValueOperator', $data ?? [], null);
        $this->setIfExists('Value', $data ?? [], null);
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
     * Gets Type
     *
     * @return string|null
     */
    public function getType()
    {
        if (!isset($this->container['Type']) || is_null($this->container['Type'])) {
            return null;
        }
        return $this->container['Type'];
    }

    /**
     * Sets Type
     *
     * @param string|null $Type Type
     *
     * @return self
     */
    public function setType($Type)
    {
        if (is_null($Type)) {
            array_push($this->openAPINullablesSetToNull, 'Type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Type'] = $Type;

        return $this;
    }

    /**
     * Gets CategoryOperator
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator|mixed|null
     */
    public function getCategoryOperator()
    {
        if (!isset($this->container['CategoryOperator']) || is_null($this->container['CategoryOperator'])) {
            return null;
        }
        if ((is_object($this->container['CategoryOperator']) || is_string($this->container['CategoryOperator'])) && method_exists($this->container['CategoryOperator'], 'getValue')) {
            return $this->container['CategoryOperator']->getValue();
        }
        return $this->container['CategoryOperator'];
    }

    /**
     * Sets CategoryOperator
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator|mixed|null $CategoryOperator CategoryOperator
     *
     * @return self
     */
    public function setCategoryOperator($CategoryOperator)
    {
        if (is_null($CategoryOperator)) {
            throw new \InvalidArgumentException('non-nullable CategoryOperator cannot be null');
        }
        if (!$CategoryOperator instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator) {
            $CategoryOperator = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator($CategoryOperator);
        }
        $this->container['CategoryOperator'] = $CategoryOperator;

        return $this;
    }

    /**
     * Gets Category
     *
     * @return string|null
     */
    public function getCategory()
    {
        if (!isset($this->container['Category']) || is_null($this->container['Category'])) {
            return null;
        }
        return $this->container['Category'];
    }

    /**
     * Sets Category
     *
     * @param string|null $Category Category
     *
     * @return self
     */
    public function setCategory($Category)
    {
        if (is_null($Category)) {
            array_push($this->openAPINullablesSetToNull, 'Category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Category', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Category'] = $Category;

        return $this;
    }

    /**
     * Gets ActionOperator
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator|mixed|null
     */
    public function getActionOperator()
    {
        if (!isset($this->container['ActionOperator']) || is_null($this->container['ActionOperator'])) {
            return null;
        }
        if ((is_object($this->container['ActionOperator']) || is_string($this->container['ActionOperator'])) && method_exists($this->container['ActionOperator'], 'getValue')) {
            return $this->container['ActionOperator']->getValue();
        }
        return $this->container['ActionOperator'];
    }

    /**
     * Sets ActionOperator
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator|mixed|null $ActionOperator ActionOperator
     *
     * @return self
     */
    public function setActionOperator($ActionOperator)
    {
        if (is_null($ActionOperator)) {
            throw new \InvalidArgumentException('non-nullable ActionOperator cannot be null');
        }
        if (!$ActionOperator instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator) {
            $ActionOperator = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator($ActionOperator);
        }
        $this->container['ActionOperator'] = $ActionOperator;

        return $this;
    }

    /**
     * Gets Action
     *
     * @return string|null
     */
    public function getAction()
    {
        if (!isset($this->container['Action']) || is_null($this->container['Action'])) {
            return null;
        }
        return $this->container['Action'];
    }

    /**
     * Sets Action
     *
     * @param string|null $Action Action
     *
     * @return self
     */
    public function setAction($Action)
    {
        if (is_null($Action)) {
            array_push($this->openAPINullablesSetToNull, 'Action');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Action', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Action'] = $Action;

        return $this;
    }

    /**
     * Gets LabelOperator
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator|mixed|null
     */
    public function getLabelOperator()
    {
        if (!isset($this->container['LabelOperator']) || is_null($this->container['LabelOperator'])) {
            return null;
        }
        if ((is_object($this->container['LabelOperator']) || is_string($this->container['LabelOperator'])) && method_exists($this->container['LabelOperator'], 'getValue')) {
            return $this->container['LabelOperator']->getValue();
        }
        return $this->container['LabelOperator'];
    }

    /**
     * Sets LabelOperator
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator|mixed|null $LabelOperator LabelOperator
     *
     * @return self
     */
    public function setLabelOperator($LabelOperator)
    {
        if (is_null($LabelOperator)) {
            throw new \InvalidArgumentException('non-nullable LabelOperator cannot be null');
        }
        if (!$LabelOperator instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator) {
            $LabelOperator = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\StringOperator($LabelOperator);
        }
        $this->container['LabelOperator'] = $LabelOperator;

        return $this;
    }

    /**
     * Gets Label
     *
     * @return string|null
     */
    public function getLabel()
    {
        if (!isset($this->container['Label']) || is_null($this->container['Label'])) {
            return null;
        }
        return $this->container['Label'];
    }

    /**
     * Sets Label
     *
     * @param string|null $Label Label
     *
     * @return self
     */
    public function setLabel($Label)
    {
        if (is_null($Label)) {
            array_push($this->openAPINullablesSetToNull, 'Label');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Label', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Label'] = $Label;

        return $this;
    }

    /**
     * Gets ValueOperator
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\NumberOperator|mixed|null
     */
    public function getValueOperator()
    {
        if (!isset($this->container['ValueOperator']) || is_null($this->container['ValueOperator'])) {
            return null;
        }
        if ((is_object($this->container['ValueOperator']) || is_string($this->container['ValueOperator'])) && method_exists($this->container['ValueOperator'], 'getValue')) {
            return $this->container['ValueOperator']->getValue();
        }
        return $this->container['ValueOperator'];
    }

    /**
     * Sets ValueOperator
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\NumberOperator|mixed|null $ValueOperator ValueOperator
     *
     * @return self
     */
    public function setValueOperator($ValueOperator)
    {
        if (is_null($ValueOperator)) {
            throw new \InvalidArgumentException('non-nullable ValueOperator cannot be null');
        }
        if (!$ValueOperator instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\NumberOperator) {
            $ValueOperator = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\NumberOperator($ValueOperator);
        }
        $this->container['ValueOperator'] = $ValueOperator;

        return $this;
    }

    /**
     * Gets Value
     *
     * @return float|null
     */
    public function getValue()
    {
        if (!isset($this->container['Value']) || is_null($this->container['Value'])) {
            return null;
        }
        return $this->container['Value'];
    }

    /**
     * Sets Value
     *
     * @param float|null $Value Value
     *
     * @return self
     */
    public function setValue($Value)
    {
        if (is_null($Value)) {
            array_push($this->openAPINullablesSetToNull, 'Value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Value'] = $Value;

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
