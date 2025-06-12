<?php
/**
 * GetAudienceFullEstimationResponse
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

class GetAudienceFullEstimationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetAudienceFullEstimationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'EstImpression' => '\Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult',
        'EstAudienceSize' => '\Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult',
        'EstClick' => '\Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult',
        'EstSpend' => '\Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult',
        'EstCostPerEvent' => '\Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult',
        'EstCTR' => '\Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfdouble',
        'SuggestedBid' => 'float',
        'SuggestedBudget' => 'float',
        'EventsLostToBid' => 'int',
        'EventsLostToBudget' => 'int',
        'EstReachAudienceSize' => '\Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult',
        'EstReachImpression' => '\Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult',
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
        'EstImpression' => null,
        'EstAudienceSize' => null,
        'EstClick' => null,
        'EstSpend' => null,
        'EstCostPerEvent' => null,
        'EstCTR' => null,
        'SuggestedBid' => 'double',
        'SuggestedBudget' => 'double',
        'EventsLostToBid' => 'int32',
        'EventsLostToBudget' => 'int32',
        'EstReachAudienceSize' => null,
        'EstReachImpression' => null,
        'Currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'EstImpression' => true,
        'EstAudienceSize' => true,
        'EstClick' => true,
        'EstSpend' => true,
        'EstCostPerEvent' => true,
        'EstCTR' => true,
        'SuggestedBid' => true,
        'SuggestedBudget' => true,
        'EventsLostToBid' => true,
        'EventsLostToBudget' => true,
        'EstReachAudienceSize' => true,
        'EstReachImpression' => true,
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
        'EstImpression' => 'EstImpression',
        'EstAudienceSize' => 'EstAudienceSize',
        'EstClick' => 'EstClick',
        'EstSpend' => 'EstSpend',
        'EstCostPerEvent' => 'EstCostPerEvent',
        'EstCTR' => 'EstCTR',
        'SuggestedBid' => 'SuggestedBid',
        'SuggestedBudget' => 'SuggestedBudget',
        'EventsLostToBid' => 'EventsLostToBid',
        'EventsLostToBudget' => 'EventsLostToBudget',
        'EstReachAudienceSize' => 'EstReachAudienceSize',
        'EstReachImpression' => 'EstReachImpression',
        'Currency' => 'Currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'EstImpression' => 'setEstImpression',
        'EstAudienceSize' => 'setEstAudienceSize',
        'EstClick' => 'setEstClick',
        'EstSpend' => 'setEstSpend',
        'EstCostPerEvent' => 'setEstCostPerEvent',
        'EstCTR' => 'setEstCTR',
        'SuggestedBid' => 'setSuggestedBid',
        'SuggestedBudget' => 'setSuggestedBudget',
        'EventsLostToBid' => 'setEventsLostToBid',
        'EventsLostToBudget' => 'setEventsLostToBudget',
        'EstReachAudienceSize' => 'setEstReachAudienceSize',
        'EstReachImpression' => 'setEstReachImpression',
        'Currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'EstImpression' => 'getEstImpression',
        'EstAudienceSize' => 'getEstAudienceSize',
        'EstClick' => 'getEstClick',
        'EstSpend' => 'getEstSpend',
        'EstCostPerEvent' => 'getEstCostPerEvent',
        'EstCTR' => 'getEstCTR',
        'SuggestedBid' => 'getSuggestedBid',
        'SuggestedBudget' => 'getSuggestedBudget',
        'EventsLostToBid' => 'getEventsLostToBid',
        'EventsLostToBudget' => 'getEventsLostToBudget',
        'EstReachAudienceSize' => 'getEstReachAudienceSize',
        'EstReachImpression' => 'getEstReachImpression',
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
        $this->setIfExists('EstImpression', $data ?? [], null);
        $this->setIfExists('EstAudienceSize', $data ?? [], null);
        $this->setIfExists('EstClick', $data ?? [], null);
        $this->setIfExists('EstSpend', $data ?? [], null);
        $this->setIfExists('EstCostPerEvent', $data ?? [], null);
        $this->setIfExists('EstCTR', $data ?? [], null);
        $this->setIfExists('SuggestedBid', $data ?? [], null);
        $this->setIfExists('SuggestedBudget', $data ?? [], null);
        $this->setIfExists('EventsLostToBid', $data ?? [], null);
        $this->setIfExists('EventsLostToBudget', $data ?? [], null);
        $this->setIfExists('EstReachAudienceSize', $data ?? [], null);
        $this->setIfExists('EstReachImpression', $data ?? [], null);
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
     * Gets EstImpression
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult|null
     */
    public function getEstImpression()
    {
        if (!isset($this->container['EstImpression']) || is_null($this->container['EstImpression'])) {
            return null;
        }
        return $this->container['EstImpression'];
    }

    /**
     * Sets EstImpression
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult|null $EstImpression EstImpression
     *
     * @return self
     */
    public function setEstImpression($EstImpression)
    {
        if (is_null($EstImpression)) {
            array_push($this->openAPINullablesSetToNull, 'EstImpression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EstImpression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EstImpression'] = $EstImpression;

        return $this;
    }

    /**
     * Gets EstAudienceSize
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult|null
     */
    public function getEstAudienceSize()
    {
        if (!isset($this->container['EstAudienceSize']) || is_null($this->container['EstAudienceSize'])) {
            return null;
        }
        return $this->container['EstAudienceSize'];
    }

    /**
     * Sets EstAudienceSize
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult|null $EstAudienceSize EstAudienceSize
     *
     * @return self
     */
    public function setEstAudienceSize($EstAudienceSize)
    {
        if (is_null($EstAudienceSize)) {
            array_push($this->openAPINullablesSetToNull, 'EstAudienceSize');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EstAudienceSize', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EstAudienceSize'] = $EstAudienceSize;

        return $this;
    }

    /**
     * Gets EstClick
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult|null
     */
    public function getEstClick()
    {
        if (!isset($this->container['EstClick']) || is_null($this->container['EstClick'])) {
            return null;
        }
        return $this->container['EstClick'];
    }

    /**
     * Sets EstClick
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult|null $EstClick EstClick
     *
     * @return self
     */
    public function setEstClick($EstClick)
    {
        if (is_null($EstClick)) {
            array_push($this->openAPINullablesSetToNull, 'EstClick');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EstClick', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EstClick'] = $EstClick;

        return $this;
    }

    /**
     * Gets EstSpend
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult|null
     */
    public function getEstSpend()
    {
        if (!isset($this->container['EstSpend']) || is_null($this->container['EstSpend'])) {
            return null;
        }
        return $this->container['EstSpend'];
    }

    /**
     * Sets EstSpend
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult|null $EstSpend EstSpend
     *
     * @return self
     */
    public function setEstSpend($EstSpend)
    {
        if (is_null($EstSpend)) {
            array_push($this->openAPINullablesSetToNull, 'EstSpend');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EstSpend', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EstSpend'] = $EstSpend;

        return $this;
    }

    /**
     * Gets EstCostPerEvent
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult|null
     */
    public function getEstCostPerEvent()
    {
        if (!isset($this->container['EstCostPerEvent']) || is_null($this->container['EstCostPerEvent'])) {
            return null;
        }
        return $this->container['EstCostPerEvent'];
    }

    /**
     * Sets EstCostPerEvent
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfDecimalRoundedResult|null $EstCostPerEvent EstCostPerEvent
     *
     * @return self
     */
    public function setEstCostPerEvent($EstCostPerEvent)
    {
        if (is_null($EstCostPerEvent)) {
            array_push($this->openAPINullablesSetToNull, 'EstCostPerEvent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EstCostPerEvent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EstCostPerEvent'] = $EstCostPerEvent;

        return $this;
    }

    /**
     * Gets EstCTR
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfdouble|null
     */
    public function getEstCTR()
    {
        if (!isset($this->container['EstCTR']) || is_null($this->container['EstCTR'])) {
            return null;
        }
        return $this->container['EstCTR'];
    }

    /**
     * Sets EstCTR
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\RangeResultOfdouble|null $EstCTR EstCTR
     *
     * @return self
     */
    public function setEstCTR($EstCTR)
    {
        if (is_null($EstCTR)) {
            array_push($this->openAPINullablesSetToNull, 'EstCTR');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EstCTR', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EstCTR'] = $EstCTR;

        return $this;
    }

    /**
     * Gets SuggestedBid
     *
     * @return float|null
     */
    public function getSuggestedBid()
    {
        if (!isset($this->container['SuggestedBid']) || is_null($this->container['SuggestedBid'])) {
            return null;
        }
        return $this->container['SuggestedBid'];
    }

    /**
     * Sets SuggestedBid
     *
     * @param float|null $SuggestedBid SuggestedBid
     *
     * @return self
     */
    public function setSuggestedBid($SuggestedBid)
    {
        if (is_null($SuggestedBid)) {
            array_push($this->openAPINullablesSetToNull, 'SuggestedBid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuggestedBid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuggestedBid'] = $SuggestedBid;

        return $this;
    }

    /**
     * Gets SuggestedBudget
     *
     * @return float|null
     */
    public function getSuggestedBudget()
    {
        if (!isset($this->container['SuggestedBudget']) || is_null($this->container['SuggestedBudget'])) {
            return null;
        }
        return $this->container['SuggestedBudget'];
    }

    /**
     * Sets SuggestedBudget
     *
     * @param float|null $SuggestedBudget SuggestedBudget
     *
     * @return self
     */
    public function setSuggestedBudget($SuggestedBudget)
    {
        if (is_null($SuggestedBudget)) {
            array_push($this->openAPINullablesSetToNull, 'SuggestedBudget');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SuggestedBudget', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SuggestedBudget'] = $SuggestedBudget;

        return $this;
    }

    /**
     * Gets EventsLostToBid
     *
     * @return int|null
     */
    public function getEventsLostToBid()
    {
        if (!isset($this->container['EventsLostToBid']) || is_null($this->container['EventsLostToBid'])) {
            return null;
        }
        return $this->container['EventsLostToBid'];
    }

    /**
     * Sets EventsLostToBid
     *
     * @param int|null $EventsLostToBid EventsLostToBid
     *
     * @return self
     */
    public function setEventsLostToBid($EventsLostToBid)
    {
        if (is_null($EventsLostToBid)) {
            array_push($this->openAPINullablesSetToNull, 'EventsLostToBid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EventsLostToBid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EventsLostToBid'] = $EventsLostToBid;

        return $this;
    }

    /**
     * Gets EventsLostToBudget
     *
     * @return int|null
     */
    public function getEventsLostToBudget()
    {
        if (!isset($this->container['EventsLostToBudget']) || is_null($this->container['EventsLostToBudget'])) {
            return null;
        }
        return $this->container['EventsLostToBudget'];
    }

    /**
     * Sets EventsLostToBudget
     *
     * @param int|null $EventsLostToBudget EventsLostToBudget
     *
     * @return self
     */
    public function setEventsLostToBudget($EventsLostToBudget)
    {
        if (is_null($EventsLostToBudget)) {
            array_push($this->openAPINullablesSetToNull, 'EventsLostToBudget');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EventsLostToBudget', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EventsLostToBudget'] = $EventsLostToBudget;

        return $this;
    }

    /**
     * Gets EstReachAudienceSize
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult|null
     */
    public function getEstReachAudienceSize()
    {
        if (!isset($this->container['EstReachAudienceSize']) || is_null($this->container['EstReachAudienceSize'])) {
            return null;
        }
        return $this->container['EstReachAudienceSize'];
    }

    /**
     * Sets EstReachAudienceSize
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult|null $EstReachAudienceSize EstReachAudienceSize
     *
     * @return self
     */
    public function setEstReachAudienceSize($EstReachAudienceSize)
    {
        if (is_null($EstReachAudienceSize)) {
            array_push($this->openAPINullablesSetToNull, 'EstReachAudienceSize');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EstReachAudienceSize', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EstReachAudienceSize'] = $EstReachAudienceSize;

        return $this;
    }

    /**
     * Gets EstReachImpression
     *
     * @return \Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult|null
     */
    public function getEstReachImpression()
    {
        if (!isset($this->container['EstReachImpression']) || is_null($this->container['EstReachImpression'])) {
            return null;
        }
        return $this->container['EstReachImpression'];
    }

    /**
     * Sets EstReachImpression
     *
     * @param \Microsoft\MsAds\Rest\Model\AdInsightService\DecimalRoundedResult|null $EstReachImpression EstReachImpression
     *
     * @return self
     */
    public function setEstReachImpression($EstReachImpression)
    {
        if (is_null($EstReachImpression)) {
            array_push($this->openAPINullablesSetToNull, 'EstReachImpression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('EstReachImpression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['EstReachImpression'] = $EstReachImpression;

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
