<?php
/**
 * ClientLink
 * CustomerManagementService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CustomerManagementService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CustomerManagementService;

use ArrayAccess;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class ClientLink implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ClientLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'Type' => 'string',
        'ClientEntityId' => 'string',
        'ClientEntityNumber' => 'string',
        'ClientEntityName' => 'string',
        'ManagingCustomerId' => 'string',
        'ManagingCustomerNumber' => 'string',
        'ManagingCustomerName' => 'string',
        'Note' => 'string',
        'Name' => 'string',
        'InviterEmail' => 'string',
        'InviterName' => 'string',
        'InviterPhone' => 'string',
        'IsBillToClient' => 'bool',
        'StartDate' => '\DateTime',
        'Status' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ClientLinkStatus',
        'SuppressNotification' => 'bool',
        'LastModifiedDateTime' => '\DateTime',
        'LastModifiedByUserId' => 'string',
        'Timestamp' => 'string',
        'ForwardCompatibilityMap' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValuePairOfstringAndstring[]',
        'CustomerLinkPermission' => 'string'
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
        'ClientEntityId' => 'int64',
        'ClientEntityNumber' => null,
        'ClientEntityName' => null,
        'ManagingCustomerId' => 'int64',
        'ManagingCustomerNumber' => null,
        'ManagingCustomerName' => null,
        'Note' => null,
        'Name' => null,
        'InviterEmail' => null,
        'InviterName' => null,
        'InviterPhone' => null,
        'IsBillToClient' => null,
        'StartDate' => 'date-time',
        'Status' => null,
        'SuppressNotification' => null,
        'LastModifiedDateTime' => 'date-time',
        'LastModifiedByUserId' => 'int64',
        'Timestamp' => 'byte',
        'ForwardCompatibilityMap' => null,
        'CustomerLinkPermission' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'Type' => true,
        'ClientEntityId' => true,
        'ClientEntityNumber' => true,
        'ClientEntityName' => true,
        'ManagingCustomerId' => true,
        'ManagingCustomerNumber' => true,
        'ManagingCustomerName' => true,
        'Note' => true,
        'Name' => true,
        'InviterEmail' => true,
        'InviterName' => true,
        'InviterPhone' => true,
        'IsBillToClient' => true,
        'StartDate' => true,
        'Status' => false,
        'SuppressNotification' => false,
        'LastModifiedDateTime' => false,
        'LastModifiedByUserId' => false,
        'Timestamp' => true,
        'ForwardCompatibilityMap' => true,
        'CustomerLinkPermission' => true
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
        'ClientEntityId' => 'ClientEntityId',
        'ClientEntityNumber' => 'ClientEntityNumber',
        'ClientEntityName' => 'ClientEntityName',
        'ManagingCustomerId' => 'ManagingCustomerId',
        'ManagingCustomerNumber' => 'ManagingCustomerNumber',
        'ManagingCustomerName' => 'ManagingCustomerName',
        'Note' => 'Note',
        'Name' => 'Name',
        'InviterEmail' => 'InviterEmail',
        'InviterName' => 'InviterName',
        'InviterPhone' => 'InviterPhone',
        'IsBillToClient' => 'IsBillToClient',
        'StartDate' => 'StartDate',
        'Status' => 'Status',
        'SuppressNotification' => 'SuppressNotification',
        'LastModifiedDateTime' => 'LastModifiedDateTime',
        'LastModifiedByUserId' => 'LastModifiedByUserId',
        'Timestamp' => 'Timestamp',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap',
        'CustomerLinkPermission' => 'CustomerLinkPermission'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'Type' => 'setType',
        'ClientEntityId' => 'setClientEntityId',
        'ClientEntityNumber' => 'setClientEntityNumber',
        'ClientEntityName' => 'setClientEntityName',
        'ManagingCustomerId' => 'setManagingCustomerId',
        'ManagingCustomerNumber' => 'setManagingCustomerNumber',
        'ManagingCustomerName' => 'setManagingCustomerName',
        'Note' => 'setNote',
        'Name' => 'setName',
        'InviterEmail' => 'setInviterEmail',
        'InviterName' => 'setInviterName',
        'InviterPhone' => 'setInviterPhone',
        'IsBillToClient' => 'setIsBillToClient',
        'StartDate' => 'setStartDate',
        'Status' => 'setStatus',
        'SuppressNotification' => 'setSuppressNotification',
        'LastModifiedDateTime' => 'setLastModifiedDateTime',
        'LastModifiedByUserId' => 'setLastModifiedByUserId',
        'Timestamp' => 'setTimestamp',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap',
        'CustomerLinkPermission' => 'setCustomerLinkPermission'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'Type' => 'getType',
        'ClientEntityId' => 'getClientEntityId',
        'ClientEntityNumber' => 'getClientEntityNumber',
        'ClientEntityName' => 'getClientEntityName',
        'ManagingCustomerId' => 'getManagingCustomerId',
        'ManagingCustomerNumber' => 'getManagingCustomerNumber',
        'ManagingCustomerName' => 'getManagingCustomerName',
        'Note' => 'getNote',
        'Name' => 'getName',
        'InviterEmail' => 'getInviterEmail',
        'InviterName' => 'getInviterName',
        'InviterPhone' => 'getInviterPhone',
        'IsBillToClient' => 'getIsBillToClient',
        'StartDate' => 'getStartDate',
        'Status' => 'getStatus',
        'SuppressNotification' => 'getSuppressNotification',
        'LastModifiedDateTime' => 'getLastModifiedDateTime',
        'LastModifiedByUserId' => 'getLastModifiedByUserId',
        'Timestamp' => 'getTimestamp',
        'ForwardCompatibilityMap' => 'getForwardCompatibilityMap',
        'CustomerLinkPermission' => 'getCustomerLinkPermission'
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
        $this->setIfExists('Type', $data ?? [], null);
        $this->setIfExists('ClientEntityId', $data ?? [], null);
        $this->setIfExists('ClientEntityNumber', $data ?? [], null);
        $this->setIfExists('ClientEntityName', $data ?? [], null);
        $this->setIfExists('ManagingCustomerId', $data ?? [], null);
        $this->setIfExists('ManagingCustomerNumber', $data ?? [], null);
        $this->setIfExists('ManagingCustomerName', $data ?? [], null);
        $this->setIfExists('Note', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('InviterEmail', $data ?? [], null);
        $this->setIfExists('InviterName', $data ?? [], null);
        $this->setIfExists('InviterPhone', $data ?? [], null);
        $this->setIfExists('IsBillToClient', $data ?? [], null);
        $this->setIfExists('StartDate', $data ?? [], null);
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('SuppressNotification', $data ?? [], null);
        $this->setIfExists('LastModifiedDateTime', $data ?? [], null);
        $this->setIfExists('LastModifiedByUserId', $data ?? [], null);
        $this->setIfExists('Timestamp', $data ?? [], null);
        $this->setIfExists('ForwardCompatibilityMap', $data ?? [], null);
        $this->setIfExists('CustomerLinkPermission', $data ?? [], null);
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
     * Gets ClientEntityId
     *
     * @return string|null
     */
    public function getClientEntityId()
    {
        if (!isset($this->container['ClientEntityId']) || is_null($this->container['ClientEntityId'])) {
            return null;
        }
        return $this->container['ClientEntityId'];
    }

    /**
     * Sets ClientEntityId
     *
     * @param string|null $ClientEntityId ClientEntityId
     *
     * @return self
     */
    public function setClientEntityId($ClientEntityId)
    {
        if (is_null($ClientEntityId)) {
            array_push($this->openAPINullablesSetToNull, 'ClientEntityId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ClientEntityId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ClientEntityId'] = $ClientEntityId;

        return $this;
    }

    /**
     * Gets ClientEntityNumber
     *
     * @return string|null
     */
    public function getClientEntityNumber()
    {
        if (!isset($this->container['ClientEntityNumber']) || is_null($this->container['ClientEntityNumber'])) {
            return null;
        }
        return $this->container['ClientEntityNumber'];
    }

    /**
     * Sets ClientEntityNumber
     *
     * @param string|null $ClientEntityNumber ClientEntityNumber
     *
     * @return self
     */
    public function setClientEntityNumber($ClientEntityNumber)
    {
        if (is_null($ClientEntityNumber)) {
            array_push($this->openAPINullablesSetToNull, 'ClientEntityNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ClientEntityNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ClientEntityNumber'] = $ClientEntityNumber;

        return $this;
    }

    /**
     * Gets ClientEntityName
     *
     * @return string|null
     */
    public function getClientEntityName()
    {
        if (!isset($this->container['ClientEntityName']) || is_null($this->container['ClientEntityName'])) {
            return null;
        }
        return $this->container['ClientEntityName'];
    }

    /**
     * Sets ClientEntityName
     *
     * @param string|null $ClientEntityName ClientEntityName
     *
     * @return self
     */
    public function setClientEntityName($ClientEntityName)
    {
        if (is_null($ClientEntityName)) {
            array_push($this->openAPINullablesSetToNull, 'ClientEntityName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ClientEntityName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ClientEntityName'] = $ClientEntityName;

        return $this;
    }

    /**
     * Gets ManagingCustomerId
     *
     * @return string|null
     */
    public function getManagingCustomerId()
    {
        if (!isset($this->container['ManagingCustomerId']) || is_null($this->container['ManagingCustomerId'])) {
            return null;
        }
        return $this->container['ManagingCustomerId'];
    }

    /**
     * Sets ManagingCustomerId
     *
     * @param string|null $ManagingCustomerId ManagingCustomerId
     *
     * @return self
     */
    public function setManagingCustomerId($ManagingCustomerId)
    {
        if (is_null($ManagingCustomerId)) {
            array_push($this->openAPINullablesSetToNull, 'ManagingCustomerId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ManagingCustomerId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ManagingCustomerId'] = $ManagingCustomerId;

        return $this;
    }

    /**
     * Gets ManagingCustomerNumber
     *
     * @return string|null
     */
    public function getManagingCustomerNumber()
    {
        if (!isset($this->container['ManagingCustomerNumber']) || is_null($this->container['ManagingCustomerNumber'])) {
            return null;
        }
        return $this->container['ManagingCustomerNumber'];
    }

    /**
     * Sets ManagingCustomerNumber
     *
     * @param string|null $ManagingCustomerNumber ManagingCustomerNumber
     *
     * @return self
     */
    public function setManagingCustomerNumber($ManagingCustomerNumber)
    {
        if (is_null($ManagingCustomerNumber)) {
            array_push($this->openAPINullablesSetToNull, 'ManagingCustomerNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ManagingCustomerNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ManagingCustomerNumber'] = $ManagingCustomerNumber;

        return $this;
    }

    /**
     * Gets ManagingCustomerName
     *
     * @return string|null
     */
    public function getManagingCustomerName()
    {
        if (!isset($this->container['ManagingCustomerName']) || is_null($this->container['ManagingCustomerName'])) {
            return null;
        }
        return $this->container['ManagingCustomerName'];
    }

    /**
     * Sets ManagingCustomerName
     *
     * @param string|null $ManagingCustomerName ManagingCustomerName
     *
     * @return self
     */
    public function setManagingCustomerName($ManagingCustomerName)
    {
        if (is_null($ManagingCustomerName)) {
            array_push($this->openAPINullablesSetToNull, 'ManagingCustomerName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ManagingCustomerName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ManagingCustomerName'] = $ManagingCustomerName;

        return $this;
    }

    /**
     * Gets Note
     *
     * @return string|null
     */
    public function getNote()
    {
        if (!isset($this->container['Note']) || is_null($this->container['Note'])) {
            return null;
        }
        return $this->container['Note'];
    }

    /**
     * Sets Note
     *
     * @param string|null $Note Note
     *
     * @return self
     */
    public function setNote($Note)
    {
        if (is_null($Note)) {
            array_push($this->openAPINullablesSetToNull, 'Note');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Note', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Note'] = $Note;

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
     * Gets InviterEmail
     *
     * @return string|null
     */
    public function getInviterEmail()
    {
        if (!isset($this->container['InviterEmail']) || is_null($this->container['InviterEmail'])) {
            return null;
        }
        return $this->container['InviterEmail'];
    }

    /**
     * Sets InviterEmail
     *
     * @param string|null $InviterEmail InviterEmail
     *
     * @return self
     */
    public function setInviterEmail($InviterEmail)
    {
        if (is_null($InviterEmail)) {
            array_push($this->openAPINullablesSetToNull, 'InviterEmail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('InviterEmail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['InviterEmail'] = $InviterEmail;

        return $this;
    }

    /**
     * Gets InviterName
     *
     * @return string|null
     */
    public function getInviterName()
    {
        if (!isset($this->container['InviterName']) || is_null($this->container['InviterName'])) {
            return null;
        }
        return $this->container['InviterName'];
    }

    /**
     * Sets InviterName
     *
     * @param string|null $InviterName InviterName
     *
     * @return self
     */
    public function setInviterName($InviterName)
    {
        if (is_null($InviterName)) {
            array_push($this->openAPINullablesSetToNull, 'InviterName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('InviterName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['InviterName'] = $InviterName;

        return $this;
    }

    /**
     * Gets InviterPhone
     *
     * @return string|null
     */
    public function getInviterPhone()
    {
        if (!isset($this->container['InviterPhone']) || is_null($this->container['InviterPhone'])) {
            return null;
        }
        return $this->container['InviterPhone'];
    }

    /**
     * Sets InviterPhone
     *
     * @param string|null $InviterPhone InviterPhone
     *
     * @return self
     */
    public function setInviterPhone($InviterPhone)
    {
        if (is_null($InviterPhone)) {
            array_push($this->openAPINullablesSetToNull, 'InviterPhone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('InviterPhone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['InviterPhone'] = $InviterPhone;

        return $this;
    }

    /**
     * Gets IsBillToClient
     *
     * @return bool|null
     */
    public function getIsBillToClient()
    {
        if (!isset($this->container['IsBillToClient']) || is_null($this->container['IsBillToClient'])) {
            return null;
        }
        return $this->container['IsBillToClient'];
    }

    /**
     * Sets IsBillToClient
     *
     * @param bool|null $IsBillToClient IsBillToClient
     *
     * @return self
     */
    public function setIsBillToClient($IsBillToClient)
    {
        if (is_null($IsBillToClient)) {
            array_push($this->openAPINullablesSetToNull, 'IsBillToClient');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('IsBillToClient', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['IsBillToClient'] = $IsBillToClient;

        return $this;
    }

    /**
     * Gets StartDate
     *
     * @return \DateTime|null
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
     * @param \DateTime|null $StartDate StartDate
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
     * Gets Status
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\ClientLinkStatus|mixed|null
     */
    public function getStatus()
    {
        if (!isset($this->container['Status']) || is_null($this->container['Status'])) {
            return null;
        }
        if ((is_object($this->container['Status']) || is_string($this->container['Status'])) && method_exists($this->container['Status'], 'getValue')) {
            return $this->container['Status']->getValue();
        }
        return $this->container['Status'];
    }

    /**
     * Sets Status
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\ClientLinkStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\ClientLinkStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\ClientLinkStatus($Status);
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets SuppressNotification
     *
     * @return bool|null
     */
    public function getSuppressNotification()
    {
        if (!isset($this->container['SuppressNotification']) || is_null($this->container['SuppressNotification'])) {
            return null;
        }
        return $this->container['SuppressNotification'];
    }

    /**
     * Sets SuppressNotification
     *
     * @param bool|null $SuppressNotification SuppressNotification
     *
     * @return self
     */
    public function setSuppressNotification($SuppressNotification)
    {
        if (is_null($SuppressNotification)) {
            throw new \InvalidArgumentException('non-nullable SuppressNotification cannot be null');
        }
        $this->container['SuppressNotification'] = $SuppressNotification;

        return $this;
    }

    /**
     * Gets LastModifiedDateTime
     *
     * @return \DateTime|null
     */
    public function getLastModifiedDateTime()
    {
        if (!isset($this->container['LastModifiedDateTime']) || is_null($this->container['LastModifiedDateTime'])) {
            return null;
        }
        return $this->container['LastModifiedDateTime'];
    }

    /**
     * Sets LastModifiedDateTime
     *
     * @param \DateTime|null $LastModifiedDateTime LastModifiedDateTime
     *
     * @return self
     */
    public function setLastModifiedDateTime($LastModifiedDateTime)
    {
        if (is_null($LastModifiedDateTime)) {
            throw new \InvalidArgumentException('non-nullable LastModifiedDateTime cannot be null');
        }
        $this->container['LastModifiedDateTime'] = $LastModifiedDateTime;

        return $this;
    }

    /**
     * Gets LastModifiedByUserId
     *
     * @return string|null
     */
    public function getLastModifiedByUserId()
    {
        if (!isset($this->container['LastModifiedByUserId']) || is_null($this->container['LastModifiedByUserId'])) {
            return null;
        }
        return $this->container['LastModifiedByUserId'];
    }

    /**
     * Sets LastModifiedByUserId
     *
     * @param string|null $LastModifiedByUserId LastModifiedByUserId
     *
     * @return self
     */
    public function setLastModifiedByUserId($LastModifiedByUserId)
    {
        if (is_null($LastModifiedByUserId)) {
            throw new \InvalidArgumentException('non-nullable LastModifiedByUserId cannot be null');
        }
        $this->container['LastModifiedByUserId'] = $LastModifiedByUserId;

        return $this;
    }

    /**
     * Gets Timestamp
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        if (!isset($this->container['Timestamp']) || is_null($this->container['Timestamp'])) {
            return null;
        }
        return $this->container['Timestamp'];
    }

    /**
     * Sets Timestamp
     *
     * @param string|null $Timestamp Timestamp
     *
     * @return self
     */
    public function setTimestamp($Timestamp)
    {
        if (is_null($Timestamp)) {
            array_push($this->openAPINullablesSetToNull, 'Timestamp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Timestamp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Timestamp'] = $Timestamp;

        return $this;
    }

    /**
     * Gets ForwardCompatibilityMap
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValuePairOfstringAndstring[]|null
     */
    public function getForwardCompatibilityMap()
    {
        if (!isset($this->container['ForwardCompatibilityMap']) || is_null($this->container['ForwardCompatibilityMap'])) {
            return null;
        }
        return $this->container['ForwardCompatibilityMap'];
    }

    /**
     * Sets ForwardCompatibilityMap
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValuePairOfstringAndstring[]|null $ForwardCompatibilityMap ForwardCompatibilityMap
     *
     * @return self
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
        if (is_null($ForwardCompatibilityMap)) {
            array_push($this->openAPINullablesSetToNull, 'ForwardCompatibilityMap');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ForwardCompatibilityMap', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ForwardCompatibilityMap'] = $ForwardCompatibilityMap;

        return $this;
    }

    /**
     * Gets CustomerLinkPermission
     *
     * @return string|null
     */
    public function getCustomerLinkPermission()
    {
        if (!isset($this->container['CustomerLinkPermission']) || is_null($this->container['CustomerLinkPermission'])) {
            return null;
        }
        return $this->container['CustomerLinkPermission'];
    }

    /**
     * Sets CustomerLinkPermission
     *
     * @param string|null $CustomerLinkPermission CustomerLinkPermission
     *
     * @return self
     */
    public function setCustomerLinkPermission($CustomerLinkPermission)
    {
        if (is_null($CustomerLinkPermission)) {
            array_push($this->openAPINullablesSetToNull, 'CustomerLinkPermission');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CustomerLinkPermission', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CustomerLinkPermission'] = $CustomerLinkPermission;

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
