<?php
/**
 * GetAudienceFullEstimationRequest
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

class GetAudienceFullEstimationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetAudienceFullEstimationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Age' => '\Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOfAgeEnum',
        'Gender' => '\Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOfGenderEnum',
        'Audience' => '\Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong',
        'Company' => '\Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong',
        'Industry' => '\Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong',
        'JobFunction' => '\Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong',
        'Location' => '\Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong',
        'RadiusTargets' => '\Microsoft\MsAds\Rest\Model\AdInsightService\RadiusTarget[]',
        'CampaignBiddingStrategy' => 'int',
        'CampaignSubType' => 'int',
        'Feed' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Feed',
        'DailyBudget' => 'float',
        'Bid' => 'float',
        'Currency' => '\Microsoft\MsAds\Rest\Model\AdInsightService\Currency'
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
        'Gender' => null,
        'Audience' => null,
        'Company' => null,
        'Industry' => null,
        'JobFunction' => null,
        'Location' => null,
        'RadiusTargets' => null,
        'CampaignBiddingStrategy' => 'int32',
        'CampaignSubType' => 'int32',
        'Feed' => null,
        'DailyBudget' => 'double',
        'Bid' => 'double',
        'Currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Age' => true,
        'Gender' => true,
        'Audience' => true,
        'Company' => true,
        'Industry' => true,
        'JobFunction' => true,
        'Location' => true,
        'RadiusTargets' => true,
        'CampaignBiddingStrategy' => true,
        'CampaignSubType' => true,
        'Feed' => true,
        'DailyBudget' => true,
        'Bid' => true,
        'Currency' => false
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
        'Gender' => 'Gender',
        'Audience' => 'Audience',
        'Company' => 'Company',
        'Industry' => 'Industry',
        'JobFunction' => 'JobFunction',
        'Location' => 'Location',
        'RadiusTargets' => 'RadiusTargets',
        'CampaignBiddingStrategy' => 'CampaignBiddingStrategy',
        'CampaignSubType' => 'CampaignSubType',
        'Feed' => 'Feed',
        'DailyBudget' => 'DailyBudget',
        'Bid' => 'Bid',
        'Currency' => 'Currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Age' => 'setAge',
        'Gender' => 'setGender',
        'Audience' => 'setAudience',
        'Company' => 'setCompany',
        'Industry' => 'setIndustry',
        'JobFunction' => 'setJobFunction',
        'Location' => 'setLocation',
        'RadiusTargets' => 'setRadiusTargets',
        'CampaignBiddingStrategy' => 'setCampaignBiddingStrategy',
        'CampaignSubType' => 'setCampaignSubType',
        'Feed' => 'setFeed',
        'DailyBudget' => 'setDailyBudget',
        'Bid' => 'setBid',
        'Currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Age' => 'getAge',
        'Gender' => 'getGender',
        'Audience' => 'getAudience',
        'Company' => 'getCompany',
        'Industry' => 'getIndustry',
        'JobFunction' => 'getJobFunction',
        'Location' => 'getLocation',
        'RadiusTargets' => 'getRadiusTargets',
        'CampaignBiddingStrategy' => 'getCampaignBiddingStrategy',
        'CampaignSubType' => 'getCampaignSubType',
        'Feed' => 'getFeed',
        'DailyBudget' => 'getDailyBudget',
        'Bid' => 'getBid',
        'Currency' => 'getCurrency'
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
        $this->setIfExists('Gender', $data ?? [], null);
        $this->setIfExists('Audience', $data ?? [], null);
        $this->setIfExists('Company', $data ?? [], null);
        $this->setIfExists('Industry', $data ?? [], null);
        $this->setIfExists('JobFunction', $data ?? [], null);
        $this->setIfExists('Location', $data ?? [], null);
        $this->setIfExists('RadiusTargets', $data ?? [], null);
        $this->setIfExists('CampaignBiddingStrategy', $data ?? [], null);
        $this->setIfExists('CampaignSubType', $data ?? [], null);
        $this->setIfExists('Feed', $data ?? [], null);
        $this->setIfExists('DailyBudget', $data ?? [], null);
        $this->setIfExists('Bid', $data ?? [], null);
        $this->setIfExists('Currency', $data ?? [], null);
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
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOfAgeEnum|null
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
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOfAgeEnum|null $Age Age
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
     * Gets Gender
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOfGenderEnum|null
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
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOfGenderEnum|null $Gender Gender
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
     * Gets Audience
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong|null
     */
    public function getAudience()
    {
        if (!isset($this->container['Audience']) || is_null($this->container['Audience'])) {
            return null;
        }
        return $this->container['Audience'];
    }

    /**
     * Sets Audience
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong|null $Audience Audience
     *
     * @return self
     */
    public function setAudience($Audience)
    {
        if (is_null($Audience)) {
            array_push($this->openAPINullablesSetToNull, 'Audience');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Audience', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Audience'] = $Audience;

        return $this;
    }

    /**
     * Gets Company
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong|null
     */
    public function getCompany()
    {
        if (!isset($this->container['Company']) || is_null($this->container['Company'])) {
            return null;
        }
        return $this->container['Company'];
    }

    /**
     * Sets Company
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong|null $Company Company
     *
     * @return self
     */
    public function setCompany($Company)
    {
        if (is_null($Company)) {
            array_push($this->openAPINullablesSetToNull, 'Company');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Company', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Company'] = $Company;

        return $this;
    }

    /**
     * Gets Industry
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong|null
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
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong|null $Industry Industry
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
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong|null
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
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong|null $JobFunction JobFunction
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
     * Gets Location
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong|null
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
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\SelectionOflong|null $Location Location
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
     * Gets RadiusTargets
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\RadiusTarget[]|null
     */
    public function getRadiusTargets()
    {
        if (!isset($this->container['RadiusTargets']) || is_null($this->container['RadiusTargets'])) {
            return null;
        }
        return $this->container['RadiusTargets'];
    }

    /**
     * Sets RadiusTargets
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\RadiusTarget[]|null $RadiusTargets RadiusTargets
     *
     * @return self
     */
    public function setRadiusTargets($RadiusTargets)
    {
        if (is_null($RadiusTargets)) {
            array_push($this->openAPINullablesSetToNull, 'RadiusTargets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('RadiusTargets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['RadiusTargets'] = $RadiusTargets;

        return $this;
    }

    /**
     * Gets CampaignBiddingStrategy
     *
     * @return int|null
     */
    public function getCampaignBiddingStrategy()
    {
        if (!isset($this->container['CampaignBiddingStrategy']) || is_null($this->container['CampaignBiddingStrategy'])) {
            return null;
        }
        return $this->container['CampaignBiddingStrategy'];
    }

    /**
     * Sets CampaignBiddingStrategy
     *
     * @param int|null $CampaignBiddingStrategy CampaignBiddingStrategy
     *
     * @return self
     */
    public function setCampaignBiddingStrategy($CampaignBiddingStrategy)
    {
        if (is_null($CampaignBiddingStrategy)) {
            array_push($this->openAPINullablesSetToNull, 'CampaignBiddingStrategy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CampaignBiddingStrategy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CampaignBiddingStrategy'] = $CampaignBiddingStrategy;

        return $this;
    }

    /**
     * Gets CampaignSubType
     *
     * @return int|null
     */
    public function getCampaignSubType()
    {
        if (!isset($this->container['CampaignSubType']) || is_null($this->container['CampaignSubType'])) {
            return null;
        }
        return $this->container['CampaignSubType'];
    }

    /**
     * Sets CampaignSubType
     *
     * @param int|null $CampaignSubType CampaignSubType
     *
     * @return self
     */
    public function setCampaignSubType($CampaignSubType)
    {
        if (is_null($CampaignSubType)) {
            array_push($this->openAPINullablesSetToNull, 'CampaignSubType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CampaignSubType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CampaignSubType'] = $CampaignSubType;

        return $this;
    }

    /**
     * Gets Feed
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\Feed|null
     */
    public function getFeed()
    {
        if (!isset($this->container['Feed']) || is_null($this->container['Feed'])) {
            return null;
        }
        return $this->container['Feed'];
    }

    /**
     * Sets Feed
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\Feed|null $Feed Feed
     *
     * @return self
     */
    public function setFeed($Feed)
    {
        if (is_null($Feed)) {
            array_push($this->openAPINullablesSetToNull, 'Feed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Feed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Feed'] = $Feed;

        return $this;
    }

    /**
     * Gets DailyBudget
     *
     * @return float|null
     */
    public function getDailyBudget()
    {
        if (!isset($this->container['DailyBudget']) || is_null($this->container['DailyBudget'])) {
            return null;
        }
        return $this->container['DailyBudget'];
    }

    /**
     * Sets DailyBudget
     *
     * @param float|null $DailyBudget DailyBudget
     *
     * @return self
     */
    public function setDailyBudget($DailyBudget)
    {
        if (is_null($DailyBudget)) {
            array_push($this->openAPINullablesSetToNull, 'DailyBudget');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DailyBudget', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DailyBudget'] = $DailyBudget;

        return $this;
    }

    /**
     * Gets Bid
     *
     * @return float|null
     */
    public function getBid()
    {
        if (!isset($this->container['Bid']) || is_null($this->container['Bid'])) {
            return null;
        }
        return $this->container['Bid'];
    }

    /**
     * Sets Bid
     *
     * @param float|null $Bid Bid
     *
     * @return self
     */
    public function setBid($Bid)
    {
        if (is_null($Bid)) {
            array_push($this->openAPINullablesSetToNull, 'Bid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Bid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Bid'] = $Bid;

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
