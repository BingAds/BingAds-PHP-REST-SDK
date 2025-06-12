<?php
/**
 * CreateResponsiveAdRecommendationRequest
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

class CreateResponsiveAdRecommendationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CreateResponsiveAdRecommendationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'AdSubType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdSubType',
        'FinalUrls' => 'string[]',
        'Prompt' => 'string',
        'TextTone' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextTone',
        'VideoType' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationVideoType',
        'BrandKitId' => 'string',
        'ReturnAdditionalFields' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationAdditionalField'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'AdSubType' => null,
        'FinalUrls' => null,
        'Prompt' => null,
        'TextTone' => null,
        'VideoType' => null,
        'BrandKitId' => 'int64',
        'ReturnAdditionalFields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'AdSubType' => false,
        'FinalUrls' => true,
        'Prompt' => true,
        'TextTone' => false,
        'VideoType' => false,
        'BrandKitId' => true,
        'ReturnAdditionalFields' => false
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
        'AdSubType' => 'AdSubType',
        'FinalUrls' => 'FinalUrls',
        'Prompt' => 'Prompt',
        'TextTone' => 'TextTone',
        'VideoType' => 'VideoType',
        'BrandKitId' => 'BrandKitId',
        'ReturnAdditionalFields' => 'ReturnAdditionalFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'AdSubType' => 'setAdSubType',
        'FinalUrls' => 'setFinalUrls',
        'Prompt' => 'setPrompt',
        'TextTone' => 'setTextTone',
        'VideoType' => 'setVideoType',
        'BrandKitId' => 'setBrandKitId',
        'ReturnAdditionalFields' => 'setReturnAdditionalFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'AdSubType' => 'getAdSubType',
        'FinalUrls' => 'getFinalUrls',
        'Prompt' => 'getPrompt',
        'TextTone' => 'getTextTone',
        'VideoType' => 'getVideoType',
        'BrandKitId' => 'getBrandKitId',
        'ReturnAdditionalFields' => 'getReturnAdditionalFields'
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
        $this->setIfExists('AdSubType', $data ?? [], null);
        $this->setIfExists('FinalUrls', $data ?? [], null);
        $this->setIfExists('Prompt', $data ?? [], null);
        $this->setIfExists('TextTone', $data ?? [], null);
        $this->setIfExists('VideoType', $data ?? [], null);
        $this->setIfExists('BrandKitId', $data ?? [], null);
        $this->setIfExists('ReturnAdditionalFields', $data ?? [], null);
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
     * Gets AdSubType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdSubType|mixed|null
     */
    public function getAdSubType()
    {
        if (!isset($this->container['AdSubType']) || is_null($this->container['AdSubType'])) {
            return null;
        }
        if ((is_object($this->container['AdSubType']) || is_string($this->container['AdSubType'])) && method_exists($this->container['AdSubType'], 'getValue')) {
            return $this->container['AdSubType']->getValue();
        }
        return $this->container['AdSubType'];
    }

    /**
     * Sets AdSubType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdSubType|mixed|null $AdSubType AdSubType
     *
     * @return self
     */
    public function setAdSubType($AdSubType)
    {
        if (is_null($AdSubType)) {
            throw new \InvalidArgumentException('non-nullable AdSubType cannot be null');
        }
        if (!$AdSubType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdSubType) {
            $AdSubType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdSubType($AdSubType);
        }
        $this->container['AdSubType'] = $AdSubType;

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
     * Gets Prompt
     *
     * @return string|null
     */
    public function getPrompt()
    {
        if (!isset($this->container['Prompt']) || is_null($this->container['Prompt'])) {
            return null;
        }
        return $this->container['Prompt'];
    }

    /**
     * Sets Prompt
     *
     * @param string|null $Prompt Prompt
     *
     * @return self
     */
    public function setPrompt($Prompt)
    {
        if (is_null($Prompt)) {
            array_push($this->openAPINullablesSetToNull, 'Prompt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Prompt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Prompt'] = $Prompt;

        return $this;
    }

    /**
     * Gets TextTone
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextTone|mixed|null
     */
    public function getTextTone()
    {
        if (!isset($this->container['TextTone']) || is_null($this->container['TextTone'])) {
            return null;
        }
        if ((is_object($this->container['TextTone']) || is_string($this->container['TextTone'])) && method_exists($this->container['TextTone'], 'getValue')) {
            return $this->container['TextTone']->getValue();
        }
        return $this->container['TextTone'];
    }

    /**
     * Sets TextTone
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextTone|mixed|null $TextTone TextTone
     *
     * @return self
     */
    public function setTextTone($TextTone)
    {
        if (is_null($TextTone)) {
            throw new \InvalidArgumentException('non-nullable TextTone cannot be null');
        }
        if (!$TextTone instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextTone) {
            $TextTone = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationTextTone($TextTone);
        }
        $this->container['TextTone'] = $TextTone;

        return $this;
    }

    /**
     * Gets VideoType
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationVideoType|mixed|null
     */
    public function getVideoType()
    {
        if (!isset($this->container['VideoType']) || is_null($this->container['VideoType'])) {
            return null;
        }
        if ((is_object($this->container['VideoType']) || is_string($this->container['VideoType'])) && method_exists($this->container['VideoType'], 'getValue')) {
            return $this->container['VideoType']->getValue();
        }
        return $this->container['VideoType'];
    }

    /**
     * Sets VideoType
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationVideoType|mixed|null $VideoType VideoType
     *
     * @return self
     */
    public function setVideoType($VideoType)
    {
        if (is_null($VideoType)) {
            throw new \InvalidArgumentException('non-nullable VideoType cannot be null');
        }
        if (!$VideoType instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationVideoType) {
            $VideoType = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationVideoType($VideoType);
        }
        $this->container['VideoType'] = $VideoType;

        return $this;
    }

    /**
     * Gets BrandKitId
     *
     * @return string|null
     */
    public function getBrandKitId()
    {
        if (!isset($this->container['BrandKitId']) || is_null($this->container['BrandKitId'])) {
            return null;
        }
        return $this->container['BrandKitId'];
    }

    /**
     * Sets BrandKitId
     *
     * @param string|null $BrandKitId BrandKitId
     *
     * @return self
     */
    public function setBrandKitId($BrandKitId)
    {
        if (is_null($BrandKitId)) {
            array_push($this->openAPINullablesSetToNull, 'BrandKitId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('BrandKitId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['BrandKitId'] = $BrandKitId;

        return $this;
    }

    /**
     * Gets ReturnAdditionalFields
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationAdditionalField|mixed|null
     */
    public function getReturnAdditionalFields()
    {
        if (!isset($this->container['ReturnAdditionalFields']) || is_null($this->container['ReturnAdditionalFields'])) {
            return null;
        }
        if ((is_object($this->container['ReturnAdditionalFields']) || is_string($this->container['ReturnAdditionalFields'])) && method_exists($this->container['ReturnAdditionalFields'], 'getValue')) {
            return $this->container['ReturnAdditionalFields']->getValue();
        }
        return $this->container['ReturnAdditionalFields'];
    }

    /**
     * Sets ReturnAdditionalFields
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationAdditionalField|mixed|null $ReturnAdditionalFields ReturnAdditionalFields
     *
     * @return self
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        if (is_null($ReturnAdditionalFields)) {
            throw new \InvalidArgumentException('non-nullable ReturnAdditionalFields cannot be null');
        }
        if (!$ReturnAdditionalFields instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationAdditionalField) {
            $ReturnAdditionalFields = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdRecommendationAdditionalField($ReturnAdditionalFields);
        }
        $this->container['ReturnAdditionalFields'] = $ReturnAdditionalFields;

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
