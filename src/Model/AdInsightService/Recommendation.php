<?php
/**
 * Recommendation
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

class Recommendation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'Type';

    /**
     * Associative array for mapping discriminator values to model class names
     *
     * @var string[]
     */
    public const MAPPINGS = [
        'Recommendation' => 'Microsoft\MsAds\Rest\Model\AdInsightService\RecommendationBase',
        'ResponsiveSearchAdsRecommendation' => 'Microsoft\MsAds\Rest\Model\AdInsightService\ResponsiveSearchAdsRecommendation',
    ];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Recommendation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'SuggestedAd' => '\Microsoft\MsAds\Rest\Model\AdInsightService\SuggestedResponsiveSearchAd',
        'AccountId' => 'string',
        'CampaignId' => 'string',
        'AdGroupId' => 'string',
        'RecommendationType' => 'string',
        'RecommendationId' => 'string',
        'RecommendationHash' => 'string',
        'CurrentClicks' => 'string',
        'EstimatedIncreaseInClicks' => 'string',
        'CurrentCost' => 'float',
        'EstimatedIncreaseInCost' => 'float',
        'CurrentImpressions' => 'string',
        'EstimatedIncreaseInImpressions' => 'string',
        'CurrentConversions' => 'string',
        'EstimatedIncreaseInConversions' => 'string',
        'Type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'SuggestedAd' => null,
        'AccountId' => 'int64',
        'CampaignId' => 'int64',
        'AdGroupId' => 'int64',
        'RecommendationType' => null,
        'RecommendationId' => null,
        'RecommendationHash' => null,
        'CurrentClicks' => 'int64',
        'EstimatedIncreaseInClicks' => 'int64',
        'CurrentCost' => 'double',
        'EstimatedIncreaseInCost' => 'double',
        'CurrentImpressions' => 'int64',
        'EstimatedIncreaseInImpressions' => 'int64',
        'CurrentConversions' => 'int64',
        'EstimatedIncreaseInConversions' => 'int64',
        'Type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'SuggestedAd' => true,
        'AccountId' => false,
        'CampaignId' => true,
        'AdGroupId' => true,
        'RecommendationType' => true,
        'RecommendationId' => true,
        'RecommendationHash' => true,
        'CurrentClicks' => false,
        'EstimatedIncreaseInClicks' => false,
        'CurrentCost' => false,
        'EstimatedIncreaseInCost' => false,
        'CurrentImpressions' => false,
        'EstimatedIncreaseInImpressions' => false,
        'CurrentConversions' => false,
        'EstimatedIncreaseInConversions' => false,
        'Type' => true
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
        'SuggestedAd' => 'SuggestedAd',
        'AccountId' => 'AccountId',
        'CampaignId' => 'CampaignId',
        'AdGroupId' => 'AdGroupId',
        'RecommendationType' => 'RecommendationType',
        'RecommendationId' => 'RecommendationId',
        'RecommendationHash' => 'RecommendationHash',
        'CurrentClicks' => 'CurrentClicks',
        'EstimatedIncreaseInClicks' => 'EstimatedIncreaseInClicks',
        'CurrentCost' => 'CurrentCost',
        'EstimatedIncreaseInCost' => 'EstimatedIncreaseInCost',
        'CurrentImpressions' => 'CurrentImpressions',
        'EstimatedIncreaseInImpressions' => 'EstimatedIncreaseInImpressions',
        'CurrentConversions' => 'CurrentConversions',
        'EstimatedIncreaseInConversions' => 'EstimatedIncreaseInConversions',
        'Type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'SuggestedAd' => 'setSuggestedAd',
        'AccountId' => 'setAccountId',
        'CampaignId' => 'setCampaignId',
        'AdGroupId' => 'setAdGroupId',
        'RecommendationType' => 'setRecommendationType',
        'RecommendationId' => 'setRecommendationId',
        'RecommendationHash' => 'setRecommendationHash',
        'CurrentClicks' => 'setCurrentClicks',
        'EstimatedIncreaseInClicks' => 'setEstimatedIncreaseInClicks',
        'CurrentCost' => 'setCurrentCost',
        'EstimatedIncreaseInCost' => 'setEstimatedIncreaseInCost',
        'CurrentImpressions' => 'setCurrentImpressions',
        'EstimatedIncreaseInImpressions' => 'setEstimatedIncreaseInImpressions',
        'CurrentConversions' => 'setCurrentConversions',
        'EstimatedIncreaseInConversions' => 'setEstimatedIncreaseInConversions',
        'Type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'SuggestedAd' => 'getSuggestedAd',
        'AccountId' => 'getAccountId',
        'CampaignId' => 'getCampaignId',
        'AdGroupId' => 'getAdGroupId',
        'RecommendationType' => 'getRecommendationType',
        'RecommendationId' => 'getRecommendationId',
        'RecommendationHash' => 'getRecommendationHash',
        'CurrentClicks' => 'getCurrentClicks',
        'EstimatedIncreaseInClicks' => 'getEstimatedIncreaseInClicks',
        'CurrentCost' => 'getCurrentCost',
        'EstimatedIncreaseInCost' => 'getEstimatedIncreaseInCost',
        'CurrentImpressions' => 'getCurrentImpressions',
        'EstimatedIncreaseInImpressions' => 'getEstimatedIncreaseInImpressions',
        'CurrentConversions' => 'getCurrentConversions',
        'EstimatedIncreaseInConversions' => 'getEstimatedIncreaseInConversions',
        'Type' => 'getType'
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
        $this->setIfExists('SuggestedAd', $data ?? [], null);
        $this->setIfExists('AccountId', $data ?? [], null);
        $this->setIfExists('CampaignId', $data ?? [], null);
        $this->setIfExists('AdGroupId', $data ?? [], null);
        $this->setIfExists('RecommendationType', $data ?? [], null);
        $this->setIfExists('RecommendationId', $data ?? [], null);
        $this->setIfExists('RecommendationHash', $data ?? [], null);
        $this->setIfExists('CurrentClicks', $data ?? [], null);
        $this->setIfExists('EstimatedIncreaseInClicks', $data ?? [], null);
        $this->setIfExists('CurrentCost', $data ?? [], null);
        $this->setIfExists('EstimatedIncreaseInCost', $data ?? [], null);
        $this->setIfExists('CurrentImpressions', $data ?? [], null);
        $this->setIfExists('EstimatedIncreaseInImpressions', $data ?? [], null);
        $this->setIfExists('CurrentConversions', $data ?? [], null);
        $this->setIfExists('EstimatedIncreaseInConversions', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'Recommendation');

        // Initialize discriminator property with the model name.
        $this->container['Type'] = static::$openAPIModelName;
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
     * Gets SuggestedAd
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestedResponsiveSearchAd|null
     */
    public function getSuggestedAd()
    {
        if (!isset($this->container['SuggestedAd']) || is_null($this->container['SuggestedAd'])) {
            return null;
        }
        return $this->container['SuggestedAd'];
    }

    /**
     * Sets SuggestedAd
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\SuggestedResponsiveSearchAd|null $SuggestedAd SuggestedAd
     *
     * @return self
     */
    public function setSuggestedAd($SuggestedAd)
    {
        if (is_null($SuggestedAd)) {
            array_push($this->openAPINullablesSetToNull, 'SuggestedAd');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuggestedAd', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuggestedAd'] = $SuggestedAd;

        return $this;
    }

    /**
     * Gets AccountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        if (!isset($this->container['AccountId']) || is_null($this->container['AccountId'])) {
            return null;
        }
        return $this->container['AccountId'];
    }

    /**
     * Sets AccountId
     *
     * @param string|null $AccountId AccountId
     *
     * @return self
     */
    public function setAccountId($AccountId)
    {
        if (is_null($AccountId)) {
            throw new \InvalidArgumentException('non-nullable AccountId cannot be null');
        }
        $this->container['AccountId'] = $AccountId;

        return $this;
    }

    /**
     * Gets CampaignId
     *
     * @return string|null
     */
    public function getCampaignId()
    {
        if (!isset($this->container['CampaignId']) || is_null($this->container['CampaignId'])) {
            return null;
        }
        return $this->container['CampaignId'];
    }

    /**
     * Sets CampaignId
     *
     * @param string|null $CampaignId CampaignId
     *
     * @return self
     */
    public function setCampaignId($CampaignId)
    {
        if (is_null($CampaignId)) {
            array_push($this->openAPINullablesSetToNull, 'CampaignId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CampaignId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CampaignId'] = $CampaignId;

        return $this;
    }

    /**
     * Gets AdGroupId
     *
     * @return string|null
     */
    public function getAdGroupId()
    {
        if (!isset($this->container['AdGroupId']) || is_null($this->container['AdGroupId'])) {
            return null;
        }
        return $this->container['AdGroupId'];
    }

    /**
     * Sets AdGroupId
     *
     * @param string|null $AdGroupId AdGroupId
     *
     * @return self
     */
    public function setAdGroupId($AdGroupId)
    {
        if (is_null($AdGroupId)) {
            array_push($this->openAPINullablesSetToNull, 'AdGroupId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AdGroupId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AdGroupId'] = $AdGroupId;

        return $this;
    }

    /**
     * Gets RecommendationType
     *
     * @return string|null
     */
    public function getRecommendationType()
    {
        if (!isset($this->container['RecommendationType']) || is_null($this->container['RecommendationType'])) {
            return null;
        }
        return $this->container['RecommendationType'];
    }

    /**
     * Sets RecommendationType
     *
     * @param string|null $RecommendationType RecommendationType
     *
     * @return self
     */
    public function setRecommendationType($RecommendationType)
    {
        if (is_null($RecommendationType)) {
            array_push($this->openAPINullablesSetToNull, 'RecommendationType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RecommendationType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RecommendationType'] = $RecommendationType;

        return $this;
    }

    /**
     * Gets RecommendationId
     *
     * @return string|null
     */
    public function getRecommendationId()
    {
        if (!isset($this->container['RecommendationId']) || is_null($this->container['RecommendationId'])) {
            return null;
        }
        return $this->container['RecommendationId'];
    }

    /**
     * Sets RecommendationId
     *
     * @param string|null $RecommendationId RecommendationId
     *
     * @return self
     */
    public function setRecommendationId($RecommendationId)
    {
        if (is_null($RecommendationId)) {
            array_push($this->openAPINullablesSetToNull, 'RecommendationId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RecommendationId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RecommendationId'] = $RecommendationId;

        return $this;
    }

    /**
     * Gets RecommendationHash
     *
     * @return string|null
     */
    public function getRecommendationHash()
    {
        if (!isset($this->container['RecommendationHash']) || is_null($this->container['RecommendationHash'])) {
            return null;
        }
        return $this->container['RecommendationHash'];
    }

    /**
     * Sets RecommendationHash
     *
     * @param string|null $RecommendationHash RecommendationHash
     *
     * @return self
     */
    public function setRecommendationHash($RecommendationHash)
    {
        if (is_null($RecommendationHash)) {
            array_push($this->openAPINullablesSetToNull, 'RecommendationHash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RecommendationHash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RecommendationHash'] = $RecommendationHash;

        return $this;
    }

    /**
     * Gets CurrentClicks
     *
     * @return string|null
     */
    public function getCurrentClicks()
    {
        if (!isset($this->container['CurrentClicks']) || is_null($this->container['CurrentClicks'])) {
            return null;
        }
        return $this->container['CurrentClicks'];
    }

    /**
     * Sets CurrentClicks
     *
     * @param string|null $CurrentClicks CurrentClicks
     *
     * @return self
     */
    public function setCurrentClicks($CurrentClicks)
    {
        if (is_null($CurrentClicks)) {
            throw new \InvalidArgumentException('non-nullable CurrentClicks cannot be null');
        }
        $this->container['CurrentClicks'] = $CurrentClicks;

        return $this;
    }

    /**
     * Gets EstimatedIncreaseInClicks
     *
     * @return string|null
     */
    public function getEstimatedIncreaseInClicks()
    {
        if (!isset($this->container['EstimatedIncreaseInClicks']) || is_null($this->container['EstimatedIncreaseInClicks'])) {
            return null;
        }
        return $this->container['EstimatedIncreaseInClicks'];
    }

    /**
     * Sets EstimatedIncreaseInClicks
     *
     * @param string|null $EstimatedIncreaseInClicks EstimatedIncreaseInClicks
     *
     * @return self
     */
    public function setEstimatedIncreaseInClicks($EstimatedIncreaseInClicks)
    {
        if (is_null($EstimatedIncreaseInClicks)) {
            throw new \InvalidArgumentException('non-nullable EstimatedIncreaseInClicks cannot be null');
        }
        $this->container['EstimatedIncreaseInClicks'] = $EstimatedIncreaseInClicks;

        return $this;
    }

    /**
     * Gets CurrentCost
     *
     * @return float|null
     */
    public function getCurrentCost()
    {
        if (!isset($this->container['CurrentCost']) || is_null($this->container['CurrentCost'])) {
            return null;
        }
        return $this->container['CurrentCost'];
    }

    /**
     * Sets CurrentCost
     *
     * @param float|null $CurrentCost CurrentCost
     *
     * @return self
     */
    public function setCurrentCost($CurrentCost)
    {
        if (is_null($CurrentCost)) {
            throw new \InvalidArgumentException('non-nullable CurrentCost cannot be null');
        }
        $this->container['CurrentCost'] = $CurrentCost;

        return $this;
    }

    /**
     * Gets EstimatedIncreaseInCost
     *
     * @return float|null
     */
    public function getEstimatedIncreaseInCost()
    {
        if (!isset($this->container['EstimatedIncreaseInCost']) || is_null($this->container['EstimatedIncreaseInCost'])) {
            return null;
        }
        return $this->container['EstimatedIncreaseInCost'];
    }

    /**
     * Sets EstimatedIncreaseInCost
     *
     * @param float|null $EstimatedIncreaseInCost EstimatedIncreaseInCost
     *
     * @return self
     */
    public function setEstimatedIncreaseInCost($EstimatedIncreaseInCost)
    {
        if (is_null($EstimatedIncreaseInCost)) {
            throw new \InvalidArgumentException('non-nullable EstimatedIncreaseInCost cannot be null');
        }
        $this->container['EstimatedIncreaseInCost'] = $EstimatedIncreaseInCost;

        return $this;
    }

    /**
     * Gets CurrentImpressions
     *
     * @return string|null
     */
    public function getCurrentImpressions()
    {
        if (!isset($this->container['CurrentImpressions']) || is_null($this->container['CurrentImpressions'])) {
            return null;
        }
        return $this->container['CurrentImpressions'];
    }

    /**
     * Sets CurrentImpressions
     *
     * @param string|null $CurrentImpressions CurrentImpressions
     *
     * @return self
     */
    public function setCurrentImpressions($CurrentImpressions)
    {
        if (is_null($CurrentImpressions)) {
            throw new \InvalidArgumentException('non-nullable CurrentImpressions cannot be null');
        }
        $this->container['CurrentImpressions'] = $CurrentImpressions;

        return $this;
    }

    /**
     * Gets EstimatedIncreaseInImpressions
     *
     * @return string|null
     */
    public function getEstimatedIncreaseInImpressions()
    {
        if (!isset($this->container['EstimatedIncreaseInImpressions']) || is_null($this->container['EstimatedIncreaseInImpressions'])) {
            return null;
        }
        return $this->container['EstimatedIncreaseInImpressions'];
    }

    /**
     * Sets EstimatedIncreaseInImpressions
     *
     * @param string|null $EstimatedIncreaseInImpressions EstimatedIncreaseInImpressions
     *
     * @return self
     */
    public function setEstimatedIncreaseInImpressions($EstimatedIncreaseInImpressions)
    {
        if (is_null($EstimatedIncreaseInImpressions)) {
            throw new \InvalidArgumentException('non-nullable EstimatedIncreaseInImpressions cannot be null');
        }
        $this->container['EstimatedIncreaseInImpressions'] = $EstimatedIncreaseInImpressions;

        return $this;
    }

    /**
     * Gets CurrentConversions
     *
     * @return string|null
     */
    public function getCurrentConversions()
    {
        if (!isset($this->container['CurrentConversions']) || is_null($this->container['CurrentConversions'])) {
            return null;
        }
        return $this->container['CurrentConversions'];
    }

    /**
     * Sets CurrentConversions
     *
     * @param string|null $CurrentConversions CurrentConversions
     *
     * @return self
     */
    public function setCurrentConversions($CurrentConversions)
    {
        if (is_null($CurrentConversions)) {
            throw new \InvalidArgumentException('non-nullable CurrentConversions cannot be null');
        }
        $this->container['CurrentConversions'] = $CurrentConversions;

        return $this;
    }

    /**
     * Gets EstimatedIncreaseInConversions
     *
     * @return string|null
     */
    public function getEstimatedIncreaseInConversions()
    {
        if (!isset($this->container['EstimatedIncreaseInConversions']) || is_null($this->container['EstimatedIncreaseInConversions'])) {
            return null;
        }
        return $this->container['EstimatedIncreaseInConversions'];
    }

    /**
     * Sets EstimatedIncreaseInConversions
     *
     * @param string|null $EstimatedIncreaseInConversions EstimatedIncreaseInConversions
     *
     * @return self
     */
    public function setEstimatedIncreaseInConversions($EstimatedIncreaseInConversions)
    {
        if (is_null($EstimatedIncreaseInConversions)) {
            throw new \InvalidArgumentException('non-nullable EstimatedIncreaseInConversions cannot be null');
        }
        $this->container['EstimatedIncreaseInConversions'] = $EstimatedIncreaseInConversions;

        return $this;
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
