<?php
/**
 * ImportJob
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

class ImportJob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'Type';

    /**
     * Associative array for mapping discriminator values to model class names
     *
     * @var string[]
     */
    public const MAPPINGS = [
        'FileImportJob' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\FileImportJob',
        'GoogleImportJob' => 'Microsoft\MsAds\Rest\Model\CampaignManagementService\GoogleImportJob',
    ];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ImportJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CredentialId' => 'string',
        'GoogleAccountId' => 'string',
        'CampaignAdGroupIds' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignAdGroupIds[]',
        'GoogleUserName' => 'string',
        'Name' => 'string',
        'Id' => 'string',
        'Type' => 'string',
        'Status' => 'string',
        'NotificationType' => 'string',
        'CreatedByUserId' => 'string',
        'CreatedByUserName' => 'string',
        'Frequency' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Frequency',
        'LastRunTimeInUTC' => '\DateTime',
        'CreatedDateTimeInUTC' => '\DateTime',
        'ImportOption' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportOption',
        'NotificationEmail' => 'string',
        'FileUrl' => 'string',
        'FileSource' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'CredentialId' => null,
        'GoogleAccountId' => 'int64',
        'CampaignAdGroupIds' => null,
        'GoogleUserName' => null,
        'Name' => null,
        'Id' => 'int64',
        'Type' => null,
        'Status' => null,
        'NotificationType' => null,
        'CreatedByUserId' => 'int64',
        'CreatedByUserName' => null,
        'Frequency' => null,
        'LastRunTimeInUTC' => 'date-time',
        'CreatedDateTimeInUTC' => 'date-time',
        'ImportOption' => null,
        'NotificationEmail' => null,
        'FileUrl' => null,
        'FileSource' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CredentialId' => true,
        'GoogleAccountId' => true,
        'CampaignAdGroupIds' => true,
        'GoogleUserName' => true,
        'Name' => true,
        'Id' => true,
        'Type' => true,
        'Status' => true,
        'NotificationType' => true,
        'CreatedByUserId' => true,
        'CreatedByUserName' => true,
        'Frequency' => true,
        'LastRunTimeInUTC' => true,
        'CreatedDateTimeInUTC' => true,
        'ImportOption' => true,
        'NotificationEmail' => true,
        'FileUrl' => true,
        'FileSource' => true
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
        'CredentialId' => 'CredentialId',
        'GoogleAccountId' => 'GoogleAccountId',
        'CampaignAdGroupIds' => 'CampaignAdGroupIds',
        'GoogleUserName' => 'GoogleUserName',
        'Name' => 'Name',
        'Id' => 'Id',
        'Type' => 'Type',
        'Status' => 'Status',
        'NotificationType' => 'NotificationType',
        'CreatedByUserId' => 'CreatedByUserId',
        'CreatedByUserName' => 'CreatedByUserName',
        'Frequency' => 'Frequency',
        'LastRunTimeInUTC' => 'LastRunTimeInUTC',
        'CreatedDateTimeInUTC' => 'CreatedDateTimeInUTC',
        'ImportOption' => 'ImportOption',
        'NotificationEmail' => 'NotificationEmail',
        'FileUrl' => 'FileUrl',
        'FileSource' => 'FileSource'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CredentialId' => 'setCredentialId',
        'GoogleAccountId' => 'setGoogleAccountId',
        'CampaignAdGroupIds' => 'setCampaignAdGroupIds',
        'GoogleUserName' => 'setGoogleUserName',
        'Name' => 'setName',
        'Id' => 'setId',
        'Type' => 'setType',
        'Status' => 'setStatus',
        'NotificationType' => 'setNotificationType',
        'CreatedByUserId' => 'setCreatedByUserId',
        'CreatedByUserName' => 'setCreatedByUserName',
        'Frequency' => 'setFrequency',
        'LastRunTimeInUTC' => 'setLastRunTimeInUTC',
        'CreatedDateTimeInUTC' => 'setCreatedDateTimeInUTC',
        'ImportOption' => 'setImportOption',
        'NotificationEmail' => 'setNotificationEmail',
        'FileUrl' => 'setFileUrl',
        'FileSource' => 'setFileSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CredentialId' => 'getCredentialId',
        'GoogleAccountId' => 'getGoogleAccountId',
        'CampaignAdGroupIds' => 'getCampaignAdGroupIds',
        'GoogleUserName' => 'getGoogleUserName',
        'Name' => 'getName',
        'Id' => 'getId',
        'Type' => 'getType',
        'Status' => 'getStatus',
        'NotificationType' => 'getNotificationType',
        'CreatedByUserId' => 'getCreatedByUserId',
        'CreatedByUserName' => 'getCreatedByUserName',
        'Frequency' => 'getFrequency',
        'LastRunTimeInUTC' => 'getLastRunTimeInUTC',
        'CreatedDateTimeInUTC' => 'getCreatedDateTimeInUTC',
        'ImportOption' => 'getImportOption',
        'NotificationEmail' => 'getNotificationEmail',
        'FileUrl' => 'getFileUrl',
        'FileSource' => 'getFileSource'
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
        $this->setIfExists('CredentialId', $data ?? [], null);
        $this->setIfExists('GoogleAccountId', $data ?? [], null);
        $this->setIfExists('CampaignAdGroupIds', $data ?? [], null);
        $this->setIfExists('GoogleUserName', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'FileImportJob');
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('NotificationType', $data ?? [], null);
        $this->setIfExists('CreatedByUserId', $data ?? [], null);
        $this->setIfExists('CreatedByUserName', $data ?? [], null);
        $this->setIfExists('Frequency', $data ?? [], null);
        $this->setIfExists('LastRunTimeInUTC', $data ?? [], null);
        $this->setIfExists('CreatedDateTimeInUTC', $data ?? [], null);
        $this->setIfExists('ImportOption', $data ?? [], null);
        $this->setIfExists('NotificationEmail', $data ?? [], null);
        $this->setIfExists('FileUrl', $data ?? [], null);
        $this->setIfExists('FileSource', $data ?? [], null);

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
     * Gets CredentialId
     *
     * @return string|null
     */
    public function getCredentialId()
    {
        if (!isset($this->container['CredentialId']) || is_null($this->container['CredentialId'])) {
            return null;
        }
        return $this->container['CredentialId'];
    }

    /**
     * Sets CredentialId
     *
     * @param string|null $CredentialId CredentialId
     *
     * @return self
     */
    public function setCredentialId($CredentialId)
    {
        if (is_null($CredentialId)) {
            array_push($this->openAPINullablesSetToNull, 'CredentialId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CredentialId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CredentialId'] = $CredentialId;

        return $this;
    }

    /**
     * Gets GoogleAccountId
     *
     * @return string|null
     */
    public function getGoogleAccountId()
    {
        if (!isset($this->container['GoogleAccountId']) || is_null($this->container['GoogleAccountId'])) {
            return null;
        }
        return $this->container['GoogleAccountId'];
    }

    /**
     * Sets GoogleAccountId
     *
     * @param string|null $GoogleAccountId GoogleAccountId
     *
     * @return self
     */
    public function setGoogleAccountId($GoogleAccountId)
    {
        if (is_null($GoogleAccountId)) {
            array_push($this->openAPINullablesSetToNull, 'GoogleAccountId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('GoogleAccountId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['GoogleAccountId'] = $GoogleAccountId;

        return $this;
    }

    /**
     * Gets CampaignAdGroupIds
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignAdGroupIds[]|null
     */
    public function getCampaignAdGroupIds()
    {
        if (!isset($this->container['CampaignAdGroupIds']) || is_null($this->container['CampaignAdGroupIds'])) {
            return null;
        }
        return $this->container['CampaignAdGroupIds'];
    }

    /**
     * Sets CampaignAdGroupIds
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\CampaignAdGroupIds[]|null $CampaignAdGroupIds CampaignAdGroupIds
     *
     * @return self
     */
    public function setCampaignAdGroupIds($CampaignAdGroupIds)
    {
        if (is_null($CampaignAdGroupIds)) {
            array_push($this->openAPINullablesSetToNull, 'CampaignAdGroupIds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CampaignAdGroupIds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CampaignAdGroupIds'] = $CampaignAdGroupIds;

        return $this;
    }

    /**
     * Gets GoogleUserName
     *
     * @return string|null
     */
    public function getGoogleUserName()
    {
        if (!isset($this->container['GoogleUserName']) || is_null($this->container['GoogleUserName'])) {
            return null;
        }
        return $this->container['GoogleUserName'];
    }

    /**
     * Sets GoogleUserName
     *
     * @param string|null $GoogleUserName GoogleUserName
     *
     * @return self
     */
    public function setGoogleUserName($GoogleUserName)
    {
        if (is_null($GoogleUserName)) {
            array_push($this->openAPINullablesSetToNull, 'GoogleUserName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('GoogleUserName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['GoogleUserName'] = $GoogleUserName;

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
     * Gets NotificationType
     *
     * @return string|null
     */
    public function getNotificationType()
    {
        if (!isset($this->container['NotificationType']) || is_null($this->container['NotificationType'])) {
            return null;
        }
        return $this->container['NotificationType'];
    }

    /**
     * Sets NotificationType
     *
     * @param string|null $NotificationType NotificationType
     *
     * @return self
     */
    public function setNotificationType($NotificationType)
    {
        if (is_null($NotificationType)) {
            array_push($this->openAPINullablesSetToNull, 'NotificationType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NotificationType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NotificationType'] = $NotificationType;

        return $this;
    }

    /**
     * Gets CreatedByUserId
     *
     * @return string|null
     */
    public function getCreatedByUserId()
    {
        if (!isset($this->container['CreatedByUserId']) || is_null($this->container['CreatedByUserId'])) {
            return null;
        }
        return $this->container['CreatedByUserId'];
    }

    /**
     * Sets CreatedByUserId
     *
     * @param string|null $CreatedByUserId CreatedByUserId
     *
     * @return self
     */
    public function setCreatedByUserId($CreatedByUserId)
    {
        if (is_null($CreatedByUserId)) {
            array_push($this->openAPINullablesSetToNull, 'CreatedByUserId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CreatedByUserId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CreatedByUserId'] = $CreatedByUserId;

        return $this;
    }

    /**
     * Gets CreatedByUserName
     *
     * @return string|null
     */
    public function getCreatedByUserName()
    {
        if (!isset($this->container['CreatedByUserName']) || is_null($this->container['CreatedByUserName'])) {
            return null;
        }
        return $this->container['CreatedByUserName'];
    }

    /**
     * Sets CreatedByUserName
     *
     * @param string|null $CreatedByUserName CreatedByUserName
     *
     * @return self
     */
    public function setCreatedByUserName($CreatedByUserName)
    {
        if (is_null($CreatedByUserName)) {
            array_push($this->openAPINullablesSetToNull, 'CreatedByUserName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CreatedByUserName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CreatedByUserName'] = $CreatedByUserName;

        return $this;
    }

    /**
     * Gets Frequency
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Frequency|null
     */
    public function getFrequency()
    {
        if (!isset($this->container['Frequency']) || is_null($this->container['Frequency'])) {
            return null;
        }
        return $this->container['Frequency'];
    }

    /**
     * Sets Frequency
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Frequency|null $Frequency Frequency
     *
     * @return self
     */
    public function setFrequency($Frequency)
    {
        if (is_null($Frequency)) {
            array_push($this->openAPINullablesSetToNull, 'Frequency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Frequency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Frequency'] = $Frequency;

        return $this;
    }

    /**
     * Gets LastRunTimeInUTC
     *
     * @return \DateTime|null
     */
    public function getLastRunTimeInUTC()
    {
        if (!isset($this->container['LastRunTimeInUTC']) || is_null($this->container['LastRunTimeInUTC'])) {
            return null;
        }
        return $this->container['LastRunTimeInUTC'];
    }

    /**
     * Sets LastRunTimeInUTC
     *
     * @param \DateTime|null $LastRunTimeInUTC LastRunTimeInUTC
     *
     * @return self
     */
    public function setLastRunTimeInUTC($LastRunTimeInUTC)
    {
        if (is_null($LastRunTimeInUTC)) {
            array_push($this->openAPINullablesSetToNull, 'LastRunTimeInUTC');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LastRunTimeInUTC', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LastRunTimeInUTC'] = $LastRunTimeInUTC;

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
     * Gets ImportOption
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportOption|null
     */
    public function getImportOption()
    {
        if (!isset($this->container['ImportOption']) || is_null($this->container['ImportOption'])) {
            return null;
        }
        return $this->container['ImportOption'];
    }

    /**
     * Sets ImportOption
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImportOption|null $ImportOption ImportOption
     *
     * @return self
     */
    public function setImportOption($ImportOption)
    {
        if (is_null($ImportOption)) {
            array_push($this->openAPINullablesSetToNull, 'ImportOption');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ImportOption', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ImportOption'] = $ImportOption;

        return $this;
    }

    /**
     * Gets NotificationEmail
     *
     * @return string|null
     */
    public function getNotificationEmail()
    {
        if (!isset($this->container['NotificationEmail']) || is_null($this->container['NotificationEmail'])) {
            return null;
        }
        return $this->container['NotificationEmail'];
    }

    /**
     * Sets NotificationEmail
     *
     * @param string|null $NotificationEmail NotificationEmail
     *
     * @return self
     */
    public function setNotificationEmail($NotificationEmail)
    {
        if (is_null($NotificationEmail)) {
            array_push($this->openAPINullablesSetToNull, 'NotificationEmail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('NotificationEmail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['NotificationEmail'] = $NotificationEmail;

        return $this;
    }

    /**
     * Gets FileUrl
     *
     * @return string|null
     */
    public function getFileUrl()
    {
        if (!isset($this->container['FileUrl']) || is_null($this->container['FileUrl'])) {
            return null;
        }
        return $this->container['FileUrl'];
    }

    /**
     * Sets FileUrl
     *
     * @param string|null $FileUrl FileUrl
     *
     * @return self
     */
    public function setFileUrl($FileUrl)
    {
        if (is_null($FileUrl)) {
            array_push($this->openAPINullablesSetToNull, 'FileUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FileUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FileUrl'] = $FileUrl;

        return $this;
    }

    /**
     * Gets FileSource
     *
     * @return string|null
     */
    public function getFileSource()
    {
        if (!isset($this->container['FileSource']) || is_null($this->container['FileSource'])) {
            return null;
        }
        return $this->container['FileSource'];
    }

    /**
     * Sets FileSource
     *
     * @param string|null $FileSource FileSource
     *
     * @return self
     */
    public function setFileSource($FileSource)
    {
        if (is_null($FileSource)) {
            array_push($this->openAPINullablesSetToNull, 'FileSource');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FileSource', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FileSource'] = $FileSource;

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
