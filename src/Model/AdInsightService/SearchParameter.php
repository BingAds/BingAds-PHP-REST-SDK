<?php
/**
 * SearchParameter
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

class SearchParameter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'Type';

    /**
     * Associative array for mapping discriminator values to model class names
     *
     * @var string[]
     */
    public const MAPPINGS = [
        'AuctionSegmentSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\AuctionSegmentSearchParameter',
        'CategorySearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\CategorySearchParameter',
        'CompetitionSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\CompetitionSearchParameter',
        'DateRangeSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\DateRangeSearchParameter',
        'DeviceSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\DeviceSearchParameter',
        'ExcludeAccountKeywordsSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\ExcludeAccountKeywordsSearchParameter',
        'IdeaTextSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\IdeaTextSearchParameter',
        'ImpressionShareSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\ImpressionShareSearchParameter',
        'LanguageSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\LanguageSearchParameter',
        'LocationSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\LocationSearchParameter',
        'NetworkSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\NetworkSearchParameter',
        'QuerySearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\QuerySearchParameter',
        'SearchVolumeSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\SearchVolumeSearchParameter',
        'SuggestedBidSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\SuggestedBidSearchParameter',
        'UrlSearchParameter' => 'Microsoft\MsAds\Rest\Model\AdInsightService\UrlSearchParameter',
    ];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SearchParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Queries' => 'string[]',
        'Type' => 'string',
        'Url' => 'string',
        'CategoryId' => 'string',
        'Minimum' => 'float',
        'Maximum' => 'float',
        'Included' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Keyword[]',
        'Excluded' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Keyword[]',
        'ExcludeAccountKeywords' => 'bool',
        'Locations' => '\Microsoft\MsAds\Rest\Model\AdInsightService\LocationCriterion[]',
        'Network' => '\Microsoft\MsAds\Rest\Model\AdInsightService\NetworkCriterion',
        'Device' => '\Microsoft\MsAds\Rest\Model\AdInsightService\DeviceCriterion',
        'Languages' => '\Microsoft\MsAds\Rest\Model\AdInsightService\LanguageCriterion[]',
        'CompetitionLevels' => '\Microsoft\MsAds\Rest\Model\AdInsightService\CompetitionLevel[]',
        'StartDate' => '\Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear',
        'EndDate' => '\Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear',
        'Segment' => '\Microsoft\MsAds\Rest\Model\AdInsightService\AuctionSegment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'Queries' => null,
        'Type' => null,
        'Url' => null,
        'CategoryId' => 'int64',
        'Minimum' => 'double',
        'Maximum' => 'double',
        'Included' => null,
        'Excluded' => null,
        'ExcludeAccountKeywords' => null,
        'Locations' => null,
        'Network' => null,
        'Device' => null,
        'Languages' => null,
        'CompetitionLevels' => null,
        'StartDate' => null,
        'EndDate' => null,
        'Segment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Queries' => true,
        'Type' => true,
        'Url' => true,
        'CategoryId' => false,
        'Minimum' => true,
        'Maximum' => true,
        'Included' => true,
        'Excluded' => true,
        'ExcludeAccountKeywords' => false,
        'Locations' => true,
        'Network' => true,
        'Device' => true,
        'Languages' => true,
        'CompetitionLevels' => true,
        'StartDate' => true,
        'EndDate' => true,
        'Segment' => false
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
        'Queries' => 'Queries',
        'Type' => 'Type',
        'Url' => 'Url',
        'CategoryId' => 'CategoryId',
        'Minimum' => 'Minimum',
        'Maximum' => 'Maximum',
        'Included' => 'Included',
        'Excluded' => 'Excluded',
        'ExcludeAccountKeywords' => 'ExcludeAccountKeywords',
        'Locations' => 'Locations',
        'Network' => 'Network',
        'Device' => 'Device',
        'Languages' => 'Languages',
        'CompetitionLevels' => 'CompetitionLevels',
        'StartDate' => 'StartDate',
        'EndDate' => 'EndDate',
        'Segment' => 'Segment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Queries' => 'setQueries',
        'Type' => 'setType',
        'Url' => 'setUrl',
        'CategoryId' => 'setCategoryId',
        'Minimum' => 'setMinimum',
        'Maximum' => 'setMaximum',
        'Included' => 'setIncluded',
        'Excluded' => 'setExcluded',
        'ExcludeAccountKeywords' => 'setExcludeAccountKeywords',
        'Locations' => 'setLocations',
        'Network' => 'setNetwork',
        'Device' => 'setDevice',
        'Languages' => 'setLanguages',
        'CompetitionLevels' => 'setCompetitionLevels',
        'StartDate' => 'setStartDate',
        'EndDate' => 'setEndDate',
        'Segment' => 'setSegment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Queries' => 'getQueries',
        'Type' => 'getType',
        'Url' => 'getUrl',
        'CategoryId' => 'getCategoryId',
        'Minimum' => 'getMinimum',
        'Maximum' => 'getMaximum',
        'Included' => 'getIncluded',
        'Excluded' => 'getExcluded',
        'ExcludeAccountKeywords' => 'getExcludeAccountKeywords',
        'Locations' => 'getLocations',
        'Network' => 'getNetwork',
        'Device' => 'getDevice',
        'Languages' => 'getLanguages',
        'CompetitionLevels' => 'getCompetitionLevels',
        'StartDate' => 'getStartDate',
        'EndDate' => 'getEndDate',
        'Segment' => 'getSegment'
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
        $this->setIfExists('Queries', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'AuctionSegmentSearchParameter');
        $this->setIfExists('Url', $data ?? [], null);
        $this->setIfExists('CategoryId', $data ?? [], null);
        $this->setIfExists('Minimum', $data ?? [], null);
        $this->setIfExists('Maximum', $data ?? [], null);
        $this->setIfExists('Included', $data ?? [], null);
        $this->setIfExists('Excluded', $data ?? [], null);
        $this->setIfExists('ExcludeAccountKeywords', $data ?? [], null);
        $this->setIfExists('Locations', $data ?? [], null);
        $this->setIfExists('Network', $data ?? [], null);
        $this->setIfExists('Device', $data ?? [], null);
        $this->setIfExists('Languages', $data ?? [], null);
        $this->setIfExists('CompetitionLevels', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('EndDate', $data ?? [], null);
        $this->setIfExists('Segment', $data ?? [], null);

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
     * Gets Queries
     *
     * @return string[]|null
     */
    public function getQueries()
    {
        if (!isset($this->container['Queries']) || is_null($this->container['Queries'])) {
            return null;
        }
        return $this->container['Queries'];
    }

    /**
     * Sets Queries
     *
     * @param string[]|null $Queries Queries
     *
     * @return self
     */
    public function setQueries($Queries)
    {
        if (is_null($Queries)) {
            array_push($this->openAPINullablesSetToNull, 'Queries');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Queries', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Queries'] = $Queries;

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
     * Gets CategoryId
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        if (!isset($this->container['CategoryId']) || is_null($this->container['CategoryId'])) {
            return null;
        }
        return $this->container['CategoryId'];
    }

    /**
     * Sets CategoryId
     *
     * @param string|null $CategoryId CategoryId
     *
     * @return self
     */
    public function setCategoryId($CategoryId)
    {
        if (is_null($CategoryId)) {
            throw new \InvalidArgumentException('non-nullable CategoryId cannot be null');
        }
        $this->container['CategoryId'] = $CategoryId;

        return $this;
    }

    /**
     * Gets Minimum
     *
     * @return float|null
     */
    public function getMinimum()
    {
        if (!isset($this->container['Minimum']) || is_null($this->container['Minimum'])) {
            return null;
        }
        return $this->container['Minimum'];
    }

    /**
     * Sets Minimum
     *
     * @param float|null $Minimum Minimum
     *
     * @return self
     */
    public function setMinimum($Minimum)
    {
        if (is_null($Minimum)) {
            array_push($this->openAPINullablesSetToNull, 'Minimum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Minimum', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Minimum'] = $Minimum;

        return $this;
    }

    /**
     * Gets Maximum
     *
     * @return float|null
     */
    public function getMaximum()
    {
        if (!isset($this->container['Maximum']) || is_null($this->container['Maximum'])) {
            return null;
        }
        return $this->container['Maximum'];
    }

    /**
     * Sets Maximum
     *
     * @param float|null $Maximum Maximum
     *
     * @return self
     */
    public function setMaximum($Maximum)
    {
        if (is_null($Maximum)) {
            array_push($this->openAPINullablesSetToNull, 'Maximum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Maximum', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Maximum'] = $Maximum;

        return $this;
    }

    /**
     * Gets Included
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Keyword[]|null
     */
    public function getIncluded()
    {
        if (!isset($this->container['Included']) || is_null($this->container['Included'])) {
            return null;
        }
        return $this->container['Included'];
    }

    /**
     * Sets Included
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Keyword[]|null $Included Included
     *
     * @return self
     */
    public function setIncluded($Included)
    {
        if (is_null($Included)) {
            array_push($this->openAPINullablesSetToNull, 'Included');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Included', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Included'] = $Included;

        return $this;
    }

    /**
     * Gets Excluded
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Keyword[]|null
     */
    public function getExcluded()
    {
        if (!isset($this->container['Excluded']) || is_null($this->container['Excluded'])) {
            return null;
        }
        return $this->container['Excluded'];
    }

    /**
     * Sets Excluded
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Keyword[]|null $Excluded Excluded
     *
     * @return self
     */
    public function setExcluded($Excluded)
    {
        if (is_null($Excluded)) {
            array_push($this->openAPINullablesSetToNull, 'Excluded');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Excluded', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Excluded'] = $Excluded;

        return $this;
    }

    /**
     * Gets ExcludeAccountKeywords
     *
     * @return bool|null
     */
    public function getExcludeAccountKeywords()
    {
        if (!isset($this->container['ExcludeAccountKeywords']) || is_null($this->container['ExcludeAccountKeywords'])) {
            return null;
        }
        return $this->container['ExcludeAccountKeywords'];
    }

    /**
     * Sets ExcludeAccountKeywords
     *
     * @param bool|null $ExcludeAccountKeywords ExcludeAccountKeywords
     *
     * @return self
     */
    public function setExcludeAccountKeywords($ExcludeAccountKeywords)
    {
        if (is_null($ExcludeAccountKeywords)) {
            throw new \InvalidArgumentException('non-nullable ExcludeAccountKeywords cannot be null');
        }
        $this->container['ExcludeAccountKeywords'] = $ExcludeAccountKeywords;

        return $this;
    }

    /**
     * Gets Locations
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\LocationCriterion[]|null
     */
    public function getLocations()
    {
        if (!isset($this->container['Locations']) || is_null($this->container['Locations'])) {
            return null;
        }
        return $this->container['Locations'];
    }

    /**
     * Sets Locations
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\LocationCriterion[]|null $Locations Locations
     *
     * @return self
     */
    public function setLocations($Locations)
    {
        if (is_null($Locations)) {
            array_push($this->openAPINullablesSetToNull, 'Locations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Locations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Locations'] = $Locations;

        return $this;
    }

    /**
     * Gets Network
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\NetworkCriterion|null
     */
    public function getNetwork()
    {
        if (!isset($this->container['Network']) || is_null($this->container['Network'])) {
            return null;
        }
        return $this->container['Network'];
    }

    /**
     * Sets Network
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\NetworkCriterion|null $Network Network
     *
     * @return self
     */
    public function setNetwork($Network)
    {
        if (is_null($Network)) {
            array_push($this->openAPINullablesSetToNull, 'Network');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Network', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Network'] = $Network;

        return $this;
    }

    /**
     * Gets Device
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\DeviceCriterion|null
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
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\DeviceCriterion|null $Device Device
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
     * Gets Languages
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\LanguageCriterion[]|null
     */
    public function getLanguages()
    {
        if (!isset($this->container['Languages']) || is_null($this->container['Languages'])) {
            return null;
        }
        return $this->container['Languages'];
    }

    /**
     * Sets Languages
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\LanguageCriterion[]|null $Languages Languages
     *
     * @return self
     */
    public function setLanguages($Languages)
    {
        if (is_null($Languages)) {
            array_push($this->openAPINullablesSetToNull, 'Languages');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Languages', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Languages'] = $Languages;

        return $this;
    }

    /**
     * Gets CompetitionLevels
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\CompetitionLevel[]|mixed|null
     */
    public function getCompetitionLevels()
    {
        if (!isset($this->container['CompetitionLevels']) || is_null($this->container['CompetitionLevels'])) {
            return null;
        }
        $values = [];
        if (is_array($this->container['CompetitionLevels'])) {
            foreach ($this->container['CompetitionLevels'] as $CompetitionLevelsItem) {
                if ((is_object($CompetitionLevelsItem) || is_string($CompetitionLevelsItem)) && method_exists($CompetitionLevelsItem, 'getValue')) {
                    $values[] = $CompetitionLevelsItem->getValue();
                }
            }
        }
        if (count($values) > 0) {
            return $values;
        }
        return $this->container['CompetitionLevels'];
    }

    /**
     * Sets CompetitionLevels
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\CompetitionLevel[]|mixed|null $CompetitionLevels CompetitionLevels
     *
     * @return self
     */
    public function setCompetitionLevels($CompetitionLevels)
    {
        if (is_null($CompetitionLevels)) {
            array_push($this->openAPINullablesSetToNull, 'CompetitionLevels');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CompetitionLevels', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_array($CompetitionLevels)) {
            $CompetitionLevels = [$CompetitionLevels];
        }
        foreach ($CompetitionLevels as $key => $CompetitionLevelsItem) {
            if (!$CompetitionLevelsItem instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\CompetitionLevel) {
                $CompetitionLevels[$key] = new \Microsoft\MsAds\Rest\Model\AdInsightService\CompetitionLevel($CompetitionLevelsItem);
            }
        }
        $this->container['CompetitionLevels'] = $CompetitionLevels;

        return $this;
    }

    /**
     * Gets StartDate
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear|null
     */
    public function getStartDate()
    {
        if (!isset($this->container['StartDate']) || is_null($this->container['StartDate'])) {
            return null;
        }
        return $this->container['StartDate'];
    }

    /**
     * Sets StartDate
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear|null $StartDate StartDate
     *
     * @return self
     */
    public function setStartDate($StartDate)
    {
        if (is_null($StartDate)) {
            array_push($this->openAPINullablesSetToNull, 'StartDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('StartDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['StartDate'] = $StartDate;

        return $this;
    }

    /**
     * Gets EndDate
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear|null
     */
    public function getEndDate()
    {
        if (!isset($this->container['EndDate']) || is_null($this->container['EndDate'])) {
            return null;
        }
        return $this->container['EndDate'];
    }

    /**
     * Sets EndDate
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\DayMonthAndYear|null $EndDate EndDate
     *
     * @return self
     */
    public function setEndDate($EndDate)
    {
        if (is_null($EndDate)) {
            array_push($this->openAPINullablesSetToNull, 'EndDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EndDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EndDate'] = $EndDate;

        return $this;
    }

    /**
     * Gets Segment
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionSegment|mixed|null
     */
    public function getSegment()
    {
        if (!isset($this->container['Segment']) || is_null($this->container['Segment'])) {
            return null;
        }
        if ((is_object($this->container['Segment']) || is_string($this->container['Segment'])) && method_exists($this->container['Segment'], 'getValue')) {
            return $this->container['Segment']->getValue();
        }
        return $this->container['Segment'];
    }

    /**
     * Sets Segment
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionSegment|mixed|null $Segment Segment
     *
     * @return self
     */
    public function setSegment($Segment)
    {
        if (is_null($Segment)) {
            throw new \InvalidArgumentException('non-nullable Segment cannot be null');
        }
        if (!$Segment instanceof \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionSegment) {
            $Segment = new \Microsoft\MsAds\Rest\Model\AdInsightService\AuctionSegment($Segment);
        }
        $this->container['Segment'] = $Segment;

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
