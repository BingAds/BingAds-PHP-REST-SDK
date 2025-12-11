<?php
/**
 * ProductPartitionUnitPerformanceReportRequest
 * ReportingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\ReportingService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\ReportingService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class ProductPartitionUnitPerformanceReportRequest extends ReportRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ProductPartitionUnitPerformanceReportRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ReportName' => 'string',
        'Format' => '\Microsoft\MsAds\Rest\Model\ReportingService\ReportFormat',
        'ReturnOnlyCompleteData' => 'bool',
        'ExcludeReportHeader' => 'bool',
        'ExcludeReportFooter' => 'bool',
        'ExcludeColumnHeaders' => 'bool',
        'FormatVersion' => 'string',
        'Scope' => '\Microsoft\MsAds\Rest\Model\ReportingService\AccountThroughAdGroupReportScope',
        'Filter' => '\Microsoft\MsAds\Rest\Model\ReportingService\ProductPartitionUnitPerformanceReportFilter',
        'Time' => '\Microsoft\MsAds\Rest\Model\ReportingService\ReportTime',
        'Aggregation' => '\Microsoft\MsAds\Rest\Model\ReportingService\ReportAggregation',
        'Columns' => '\Microsoft\MsAds\Rest\Model\ReportingService\ProductPartitionUnitPerformanceReportColumn[]',
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
        'ReportName' => null,
        'Format' => null,
        'ReturnOnlyCompleteData' => null,
        'ExcludeReportHeader' => null,
        'ExcludeReportFooter' => null,
        'ExcludeColumnHeaders' => null,
        'FormatVersion' => null,
        'Scope' => null,
        'Filter' => null,
        'Time' => null,
        'Aggregation' => null,
        'Columns' => null,
        'Type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ReportName' => true,
        'Format' => false,
        'ReturnOnlyCompleteData' => true,
        'ExcludeReportHeader' => true,
        'ExcludeReportFooter' => true,
        'ExcludeColumnHeaders' => true,
        'FormatVersion' => true,
        'Scope' => true,
        'Filter' => true,
        'Time' => true,
        'Aggregation' => false,
        'Columns' => true,
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
        'ReportName' => 'ReportName',
        'Format' => 'Format',
        'ReturnOnlyCompleteData' => 'ReturnOnlyCompleteData',
        'ExcludeReportHeader' => 'ExcludeReportHeader',
        'ExcludeReportFooter' => 'ExcludeReportFooter',
        'ExcludeColumnHeaders' => 'ExcludeColumnHeaders',
        'FormatVersion' => 'FormatVersion',
        'Scope' => 'Scope',
        'Filter' => 'Filter',
        'Time' => 'Time',
        'Aggregation' => 'Aggregation',
        'Columns' => 'Columns',
        'Type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ReportName' => 'setReportName',
        'Format' => 'setFormat',
        'ReturnOnlyCompleteData' => 'setReturnOnlyCompleteData',
        'ExcludeReportHeader' => 'setExcludeReportHeader',
        'ExcludeReportFooter' => 'setExcludeReportFooter',
        'ExcludeColumnHeaders' => 'setExcludeColumnHeaders',
        'FormatVersion' => 'setFormatVersion',
        'Scope' => 'setScope',
        'Filter' => 'setFilter',
        'Time' => 'setTime',
        'Aggregation' => 'setAggregation',
        'Columns' => 'setColumns',
        'Type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ReportName' => 'getReportName',
        'Format' => 'getFormat',
        'ReturnOnlyCompleteData' => 'getReturnOnlyCompleteData',
        'ExcludeReportHeader' => 'getExcludeReportHeader',
        'ExcludeReportFooter' => 'getExcludeReportFooter',
        'ExcludeColumnHeaders' => 'getExcludeColumnHeaders',
        'FormatVersion' => 'getFormatVersion',
        'Scope' => 'getScope',
        'Filter' => 'getFilter',
        'Time' => 'getTime',
        'Aggregation' => 'getAggregation',
        'Columns' => 'getColumns',
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
        $this->setIfExists('ReportName', $data ?? [], null);
        $this->setIfExists('Format', $data ?? [], null);
        $this->setIfExists('ReturnOnlyCompleteData', $data ?? [], null);
        $this->setIfExists('ExcludeReportHeader', $data ?? [], null);
        $this->setIfExists('ExcludeReportFooter', $data ?? [], null);
        $this->setIfExists('ExcludeColumnHeaders', $data ?? [], null);
        $this->setIfExists('FormatVersion', $data ?? [], null);
        $this->setIfExists('Scope', $data ?? [], null);
        $this->setIfExists('Filter', $data ?? [], null);
        $this->setIfExists('Time', $data ?? [], null);
        $this->setIfExists('Aggregation', $data ?? [], null);
        $this->setIfExists('Columns', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'ProductPartitionUnitPerformanceReportRequest');
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
     * Gets ReportName
     *
     * @return string|null
     */
    public function getReportName()
    {
        if (!isset($this->container['ReportName']) || is_null($this->container['ReportName'])) {
            return null;
        }
        return $this->container['ReportName'];
    }

    /**
     * Sets ReportName
     *
     * @param string|null $ReportName ReportName
     *
     * @return self
     */
    public function setReportName($ReportName)
    {
        if (is_null($ReportName)) {
            array_push($this->openAPINullablesSetToNull, 'ReportName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ReportName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ReportName'] = $ReportName;

        return $this;
    }

    /**
     * Gets Format
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\ReportFormat|mixed|null
     */
    public function getFormat()
    {
        if (!isset($this->container['Format']) || is_null($this->container['Format'])) {
            return null;
        }
        if ((is_object($this->container['Format']) || is_string($this->container['Format'])) && method_exists($this->container['Format'], 'getValue')) {
            return $this->container['Format']->getValue();
        }
        return $this->container['Format'];
    }

    /**
     * Sets Format
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\ReportFormat|mixed|null $Format Format
     *
     * @return self
     */
    public function setFormat($Format)
    {
        if (is_null($Format)) {
            throw new \InvalidArgumentException('non-nullable Format cannot be null');
        }
        if (!$Format instanceof \Microsoft\MsAds\Rest\Model\ReportingService\ReportFormat) {
            $Format = new \Microsoft\MsAds\Rest\Model\ReportingService\ReportFormat($Format);
        }
        $this->container['Format'] = $Format;

        return $this;
    }

    /**
     * Gets ReturnOnlyCompleteData
     *
     * @return bool|null
     */
    public function getReturnOnlyCompleteData()
    {
        if (!isset($this->container['ReturnOnlyCompleteData']) || is_null($this->container['ReturnOnlyCompleteData'])) {
            return null;
        }
        return $this->container['ReturnOnlyCompleteData'];
    }

    /**
     * Sets ReturnOnlyCompleteData
     *
     * @param bool|null $ReturnOnlyCompleteData ReturnOnlyCompleteData
     *
     * @return self
     */
    public function setReturnOnlyCompleteData($ReturnOnlyCompleteData)
    {
        if (is_null($ReturnOnlyCompleteData)) {
            array_push($this->openAPINullablesSetToNull, 'ReturnOnlyCompleteData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ReturnOnlyCompleteData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ReturnOnlyCompleteData'] = $ReturnOnlyCompleteData;

        return $this;
    }

    /**
     * Gets ExcludeReportHeader
     *
     * @return bool|null
     */
    public function getExcludeReportHeader()
    {
        if (!isset($this->container['ExcludeReportHeader']) || is_null($this->container['ExcludeReportHeader'])) {
            return null;
        }
        return $this->container['ExcludeReportHeader'];
    }

    /**
     * Sets ExcludeReportHeader
     *
     * @param bool|null $ExcludeReportHeader ExcludeReportHeader
     *
     * @return self
     */
    public function setExcludeReportHeader($ExcludeReportHeader)
    {
        if (is_null($ExcludeReportHeader)) {
            array_push($this->openAPINullablesSetToNull, 'ExcludeReportHeader');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExcludeReportHeader', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExcludeReportHeader'] = $ExcludeReportHeader;

        return $this;
    }

    /**
     * Gets ExcludeReportFooter
     *
     * @return bool|null
     */
    public function getExcludeReportFooter()
    {
        if (!isset($this->container['ExcludeReportFooter']) || is_null($this->container['ExcludeReportFooter'])) {
            return null;
        }
        return $this->container['ExcludeReportFooter'];
    }

    /**
     * Sets ExcludeReportFooter
     *
     * @param bool|null $ExcludeReportFooter ExcludeReportFooter
     *
     * @return self
     */
    public function setExcludeReportFooter($ExcludeReportFooter)
    {
        if (is_null($ExcludeReportFooter)) {
            array_push($this->openAPINullablesSetToNull, 'ExcludeReportFooter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExcludeReportFooter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExcludeReportFooter'] = $ExcludeReportFooter;

        return $this;
    }

    /**
     * Gets ExcludeColumnHeaders
     *
     * @return bool|null
     */
    public function getExcludeColumnHeaders()
    {
        if (!isset($this->container['ExcludeColumnHeaders']) || is_null($this->container['ExcludeColumnHeaders'])) {
            return null;
        }
        return $this->container['ExcludeColumnHeaders'];
    }

    /**
     * Sets ExcludeColumnHeaders
     *
     * @param bool|null $ExcludeColumnHeaders ExcludeColumnHeaders
     *
     * @return self
     */
    public function setExcludeColumnHeaders($ExcludeColumnHeaders)
    {
        if (is_null($ExcludeColumnHeaders)) {
            array_push($this->openAPINullablesSetToNull, 'ExcludeColumnHeaders');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ExcludeColumnHeaders', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ExcludeColumnHeaders'] = $ExcludeColumnHeaders;

        return $this;
    }

    /**
     * Gets FormatVersion
     *
     * @return string|null
     */
    public function getFormatVersion()
    {
        if (!isset($this->container['FormatVersion']) || is_null($this->container['FormatVersion'])) {
            return null;
        }
        return $this->container['FormatVersion'];
    }

    /**
     * Sets FormatVersion
     *
     * @param string|null $FormatVersion FormatVersion
     *
     * @return self
     */
    public function setFormatVersion($FormatVersion)
    {
        if (is_null($FormatVersion)) {
            array_push($this->openAPINullablesSetToNull, 'FormatVersion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormatVersion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormatVersion'] = $FormatVersion;

        return $this;
    }

    /**
     * Gets Scope
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\AccountThroughAdGroupReportScope|null
     */
    public function getScope()
    {
        if (!isset($this->container['Scope']) || is_null($this->container['Scope'])) {
            return null;
        }
        return $this->container['Scope'];
    }

    /**
     * Sets Scope
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\AccountThroughAdGroupReportScope|null $Scope Scope
     *
     * @return self
     */
    public function setScope($Scope)
    {
        if (is_null($Scope)) {
            array_push($this->openAPINullablesSetToNull, 'Scope');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Scope', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Scope'] = $Scope;

        return $this;
    }

    /**
     * Gets Filter
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\ProductPartitionUnitPerformanceReportFilter|null
     */
    public function getFilter()
    {
        if (!isset($this->container['Filter']) || is_null($this->container['Filter'])) {
            return null;
        }
        return $this->container['Filter'];
    }

    /**
     * Sets Filter
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\ProductPartitionUnitPerformanceReportFilter|null $Filter Filter
     *
     * @return self
     */
    public function setFilter($Filter)
    {
        if (is_null($Filter)) {
            array_push($this->openAPINullablesSetToNull, 'Filter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Filter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Filter'] = $Filter;

        return $this;
    }

    /**
     * Gets Time
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\ReportTime|null
     */
    public function getTime()
    {
        if (!isset($this->container['Time']) || is_null($this->container['Time'])) {
            return null;
        }
        return $this->container['Time'];
    }

    /**
     * Sets Time
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\ReportTime|null $Time Time
     *
     * @return self
     */
    public function setTime($Time)
    {
        if (is_null($Time)) {
            array_push($this->openAPINullablesSetToNull, 'Time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Time'] = $Time;

        return $this;
    }

    /**
     * Gets Aggregation
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\ReportAggregation|mixed|null
     */
    public function getAggregation()
    {
        if (!isset($this->container['Aggregation']) || is_null($this->container['Aggregation'])) {
            return null;
        }
        if ((is_object($this->container['Aggregation']) || is_string($this->container['Aggregation'])) && method_exists($this->container['Aggregation'], 'getValue')) {
            return $this->container['Aggregation']->getValue();
        }
        return $this->container['Aggregation'];
    }

    /**
     * Sets Aggregation
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\ReportAggregation|mixed|null $Aggregation Aggregation
     *
     * @return self
     */
    public function setAggregation($Aggregation)
    {
        if (is_null($Aggregation)) {
            throw new \InvalidArgumentException('non-nullable Aggregation cannot be null');
        }
        if (!$Aggregation instanceof \Microsoft\MsAds\Rest\Model\ReportingService\ReportAggregation) {
            $Aggregation = new \Microsoft\MsAds\Rest\Model\ReportingService\ReportAggregation($Aggregation);
        }
        $this->container['Aggregation'] = $Aggregation;

        return $this;
    }

    /**
     * Gets Columns
     *
     * @return \Microsoft\MsAds\Rest\Model\ReportingService\ProductPartitionUnitPerformanceReportColumn[]|mixed|null
     */
    public function getColumns()
    {
        if (!isset($this->container['Columns']) || is_null($this->container['Columns'])) {
            return null;
        }
        $values = [];
        if (is_array($this->container['Columns'])) {
            foreach ($this->container['Columns'] as $ColumnsItem) {
                if ((is_object($ColumnsItem) || is_string($ColumnsItem)) && method_exists($ColumnsItem, 'getValue')) {
                    $values[] = $ColumnsItem->getValue();
                }
            }
        }
        if (count($values) > 0) {
            return $values;
        }
        return $this->container['Columns'];
    }

    /**
     * Sets Columns
     *
     * @param \Microsoft\MsAds\Rest\Model\ReportingService\ProductPartitionUnitPerformanceReportColumn[]|mixed|null $Columns Columns
     *
     * @return self
     */
    public function setColumns($Columns)
    {
        if (is_null($Columns)) {
            array_push($this->openAPINullablesSetToNull, 'Columns');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Columns', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_array($Columns)) {
            $Columns = [$Columns];
        }
        foreach ($Columns as $key => $ColumnsItem) {
            if (!$ColumnsItem instanceof \Microsoft\MsAds\Rest\Model\ReportingService\ProductPartitionUnitPerformanceReportColumn) {
                $Columns[$key] = new \Microsoft\MsAds\Rest\Model\ReportingService\ProductPartitionUnitPerformanceReportColumn($ColumnsItem);
            }
        }
        $this->container['Columns'] = $Columns;

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
