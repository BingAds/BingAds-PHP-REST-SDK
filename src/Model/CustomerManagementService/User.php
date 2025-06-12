<?php
/**
 * User
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

class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ContactInfo' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\ContactInfo',
        'CustomerId' => 'string',
        'Id' => 'string',
        'JobTitle' => 'string',
        'LastModifiedByUserId' => 'string',
        'LastModifiedTime' => '\DateTime',
        'Lcid' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\LCID',
        'Name' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\PersonName',
        'Password' => 'string',
        'SecretAnswer' => 'string',
        'SecretQuestion' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\SecretQuestion',
        'UserLifeCycleStatus' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\UserLifeCycleStatus',
        'TimeStamp' => 'string',
        'UserName' => 'string',
        'ForwardCompatibilityMap' => '\Microsoft\MsAds\Rest\Model\CustomerManagementService\KeyValuePairOfstringAndstring[]',
        'AuthenticationToken' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ContactInfo' => null,
        'CustomerId' => 'int64',
        'Id' => 'int64',
        'JobTitle' => null,
        'LastModifiedByUserId' => 'int64',
        'LastModifiedTime' => 'date-time',
        'Lcid' => null,
        'Name' => null,
        'Password' => null,
        'SecretAnswer' => null,
        'SecretQuestion' => null,
        'UserLifeCycleStatus' => null,
        'TimeStamp' => 'byte',
        'UserName' => null,
        'ForwardCompatibilityMap' => null,
        'AuthenticationToken' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ContactInfo' => true,
        'CustomerId' => true,
        'Id' => true,
        'JobTitle' => true,
        'LastModifiedByUserId' => true,
        'LastModifiedTime' => true,
        'Lcid' => false,
        'Name' => true,
        'Password' => true,
        'SecretAnswer' => true,
        'SecretQuestion' => false,
        'UserLifeCycleStatus' => false,
        'TimeStamp' => true,
        'UserName' => true,
        'ForwardCompatibilityMap' => true,
        'AuthenticationToken' => true
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
        'ContactInfo' => 'ContactInfo',
        'CustomerId' => 'CustomerId',
        'Id' => 'Id',
        'JobTitle' => 'JobTitle',
        'LastModifiedByUserId' => 'LastModifiedByUserId',
        'LastModifiedTime' => 'LastModifiedTime',
        'Lcid' => 'Lcid',
        'Name' => 'Name',
        'Password' => 'Password',
        'SecretAnswer' => 'SecretAnswer',
        'SecretQuestion' => 'SecretQuestion',
        'UserLifeCycleStatus' => 'UserLifeCycleStatus',
        'TimeStamp' => 'TimeStamp',
        'UserName' => 'UserName',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap',
        'AuthenticationToken' => 'AuthenticationToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ContactInfo' => 'setContactInfo',
        'CustomerId' => 'setCustomerId',
        'Id' => 'setId',
        'JobTitle' => 'setJobTitle',
        'LastModifiedByUserId' => 'setLastModifiedByUserId',
        'LastModifiedTime' => 'setLastModifiedTime',
        'Lcid' => 'setLcid',
        'Name' => 'setName',
        'Password' => 'setPassword',
        'SecretAnswer' => 'setSecretAnswer',
        'SecretQuestion' => 'setSecretQuestion',
        'UserLifeCycleStatus' => 'setUserLifeCycleStatus',
        'TimeStamp' => 'setTimeStamp',
        'UserName' => 'setUserName',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap',
        'AuthenticationToken' => 'setAuthenticationToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ContactInfo' => 'getContactInfo',
        'CustomerId' => 'getCustomerId',
        'Id' => 'getId',
        'JobTitle' => 'getJobTitle',
        'LastModifiedByUserId' => 'getLastModifiedByUserId',
        'LastModifiedTime' => 'getLastModifiedTime',
        'Lcid' => 'getLcid',
        'Name' => 'getName',
        'Password' => 'getPassword',
        'SecretAnswer' => 'getSecretAnswer',
        'SecretQuestion' => 'getSecretQuestion',
        'UserLifeCycleStatus' => 'getUserLifeCycleStatus',
        'TimeStamp' => 'getTimeStamp',
        'UserName' => 'getUserName',
        'ForwardCompatibilityMap' => 'getForwardCompatibilityMap',
        'AuthenticationToken' => 'getAuthenticationToken'
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
        $this->setIfExists('ContactInfo', $data ?? [], null);
        $this->setIfExists('CustomerId', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('JobTitle', $data ?? [], null);
        $this->setIfExists('LastModifiedByUserId', $data ?? [], null);
        $this->setIfExists('LastModifiedTime', $data ?? [], null);
        $this->setIfExists('Lcid', $data ?? [], null);
        $this->setIfExists('Name', $data ?? [], null);
        $this->setIfExists('Password', $data ?? [], null);
        $this->setIfExists('SecretAnswer', $data ?? [], null);
        $this->setIfExists('SecretQuestion', $data ?? [], null);
        $this->setIfExists('UserLifeCycleStatus', $data ?? [], null);
        $this->setIfExists('TimeStamp', $data ?? [], null);
        $this->setIfExists('UserName', $data ?? [], null);
        $this->setIfExists('ForwardCompatibilityMap', $data ?? [], null);
        $this->setIfExists('AuthenticationToken', $data ?? [], null);
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
     * Gets ContactInfo
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\ContactInfo|null
     */
    public function getContactInfo()
    {
        if (!isset($this->container['ContactInfo']) || is_null($this->container['ContactInfo'])) {
            return null;
        }
        return $this->container['ContactInfo'];
    }

    /**
     * Sets ContactInfo
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\ContactInfo|null $ContactInfo ContactInfo
     *
     * @return self
     */
    public function setContactInfo($ContactInfo)
    {
        if (is_null($ContactInfo)) {
            array_push($this->openAPINullablesSetToNull, 'ContactInfo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ContactInfo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ContactInfo'] = $ContactInfo;

        return $this;
    }

    /**
     * Gets CustomerId
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        if (!isset($this->container['CustomerId']) || is_null($this->container['CustomerId'])) {
            return null;
        }
        return $this->container['CustomerId'];
    }

    /**
     * Sets CustomerId
     *
     * @param string|null $CustomerId CustomerId
     *
     * @return self
     */
    public function setCustomerId($CustomerId)
    {
        if (is_null($CustomerId)) {
            array_push($this->openAPINullablesSetToNull, 'CustomerId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CustomerId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CustomerId'] = $CustomerId;

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
     * Gets JobTitle
     *
     * @return string|null
     */
    public function getJobTitle()
    {
        if (!isset($this->container['JobTitle']) || is_null($this->container['JobTitle'])) {
            return null;
        }
        return $this->container['JobTitle'];
    }

    /**
     * Sets JobTitle
     *
     * @param string|null $JobTitle JobTitle
     *
     * @return self
     */
    public function setJobTitle($JobTitle)
    {
        if (is_null($JobTitle)) {
            array_push($this->openAPINullablesSetToNull, 'JobTitle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('JobTitle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['JobTitle'] = $JobTitle;

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
            array_push($this->openAPINullablesSetToNull, 'LastModifiedByUserId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LastModifiedByUserId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LastModifiedByUserId'] = $LastModifiedByUserId;

        return $this;
    }

    /**
     * Gets LastModifiedTime
     *
     * @return \DateTime|null
     */
    public function getLastModifiedTime()
    {
        if (!isset($this->container['LastModifiedTime']) || is_null($this->container['LastModifiedTime'])) {
            return null;
        }
        return $this->container['LastModifiedTime'];
    }

    /**
     * Sets LastModifiedTime
     *
     * @param \DateTime|null $LastModifiedTime LastModifiedTime
     *
     * @return self
     */
    public function setLastModifiedTime($LastModifiedTime)
    {
        if (is_null($LastModifiedTime)) {
            array_push($this->openAPINullablesSetToNull, 'LastModifiedTime');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LastModifiedTime', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LastModifiedTime'] = $LastModifiedTime;

        return $this;
    }

    /**
     * Gets Lcid
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\LCID|mixed|null
     */
    public function getLcid()
    {
        if (!isset($this->container['Lcid']) || is_null($this->container['Lcid'])) {
            return null;
        }
        if ((is_object($this->container['Lcid']) || is_string($this->container['Lcid'])) && method_exists($this->container['Lcid'], 'getValue')) {
            return $this->container['Lcid']->getValue();
        }
        return $this->container['Lcid'];
    }

    /**
     * Sets Lcid
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\LCID|mixed|null $Lcid Lcid
     *
     * @return self
     */
    public function setLcid($Lcid)
    {
        if (is_null($Lcid)) {
            throw new \InvalidArgumentException('non-nullable Lcid cannot be null');
        }
        if (!$Lcid instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\LCID) {
            $Lcid = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\LCID($Lcid);
        }
        $this->container['Lcid'] = $Lcid;

        return $this;
    }

    /**
     * Gets Name
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\PersonName|null
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
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\PersonName|null $Name Name
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
     * Gets Password
     *
     * @return string|null
     */
    public function getPassword()
    {
        if (!isset($this->container['Password']) || is_null($this->container['Password'])) {
            return null;
        }
        return $this->container['Password'];
    }

    /**
     * Sets Password
     *
     * @param string|null $Password Password
     *
     * @return self
     */
    public function setPassword($Password)
    {
        if (is_null($Password)) {
            array_push($this->openAPINullablesSetToNull, 'Password');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Password', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Password'] = $Password;

        return $this;
    }

    /**
     * Gets SecretAnswer
     *
     * @return string|null
     */
    public function getSecretAnswer()
    {
        if (!isset($this->container['SecretAnswer']) || is_null($this->container['SecretAnswer'])) {
            return null;
        }
        return $this->container['SecretAnswer'];
    }

    /**
     * Sets SecretAnswer
     *
     * @param string|null $SecretAnswer SecretAnswer
     *
     * @return self
     */
    public function setSecretAnswer($SecretAnswer)
    {
        if (is_null($SecretAnswer)) {
            array_push($this->openAPINullablesSetToNull, 'SecretAnswer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('SecretAnswer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['SecretAnswer'] = $SecretAnswer;

        return $this;
    }

    /**
     * Gets SecretQuestion
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\SecretQuestion|mixed|null
     */
    public function getSecretQuestion()
    {
        if (!isset($this->container['SecretQuestion']) || is_null($this->container['SecretQuestion'])) {
            return null;
        }
        if ((is_object($this->container['SecretQuestion']) || is_string($this->container['SecretQuestion'])) && method_exists($this->container['SecretQuestion'], 'getValue')) {
            return $this->container['SecretQuestion']->getValue();
        }
        return $this->container['SecretQuestion'];
    }

    /**
     * Sets SecretQuestion
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\SecretQuestion|mixed|null $SecretQuestion SecretQuestion
     *
     * @return self
     */
    public function setSecretQuestion($SecretQuestion)
    {
        if (is_null($SecretQuestion)) {
            throw new \InvalidArgumentException('non-nullable SecretQuestion cannot be null');
        }
        if (!$SecretQuestion instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\SecretQuestion) {
            $SecretQuestion = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\SecretQuestion($SecretQuestion);
        }
        $this->container['SecretQuestion'] = $SecretQuestion;

        return $this;
    }

    /**
     * Gets UserLifeCycleStatus
     *
     * @return \Microsoft\MsAds\Rest\Model\CustomerManagementService\UserLifeCycleStatus|mixed|null
     */
    public function getUserLifeCycleStatus()
    {
        if (!isset($this->container['UserLifeCycleStatus']) || is_null($this->container['UserLifeCycleStatus'])) {
            return null;
        }
        if ((is_object($this->container['UserLifeCycleStatus']) || is_string($this->container['UserLifeCycleStatus'])) && method_exists($this->container['UserLifeCycleStatus'], 'getValue')) {
            return $this->container['UserLifeCycleStatus']->getValue();
        }
        return $this->container['UserLifeCycleStatus'];
    }

    /**
     * Sets UserLifeCycleStatus
     *
     * @param \Microsoft\MsAds\Rest\Model\CustomerManagementService\UserLifeCycleStatus|mixed|null $UserLifeCycleStatus UserLifeCycleStatus
     *
     * @return self
     */
    public function setUserLifeCycleStatus($UserLifeCycleStatus)
    {
        if (is_null($UserLifeCycleStatus)) {
            throw new \InvalidArgumentException('non-nullable UserLifeCycleStatus cannot be null');
        }
        if (!$UserLifeCycleStatus instanceof \Microsoft\MsAds\Rest\Model\CustomerManagementService\UserLifeCycleStatus) {
            $UserLifeCycleStatus = new \Microsoft\MsAds\Rest\Model\CustomerManagementService\UserLifeCycleStatus($UserLifeCycleStatus);
        }
        $this->container['UserLifeCycleStatus'] = $UserLifeCycleStatus;

        return $this;
    }

    /**
     * Gets TimeStamp
     *
     * @return string|null
     */
    public function getTimeStamp()
    {
        if (!isset($this->container['TimeStamp']) || is_null($this->container['TimeStamp'])) {
            return null;
        }
        return $this->container['TimeStamp'];
    }

    /**
     * Sets TimeStamp
     *
     * @param string|null $TimeStamp TimeStamp
     *
     * @return self
     */
    public function setTimeStamp($TimeStamp)
    {
        if (is_null($TimeStamp)) {
            array_push($this->openAPINullablesSetToNull, 'TimeStamp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('TimeStamp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['TimeStamp'] = $TimeStamp;

        return $this;
    }

    /**
     * Gets UserName
     *
     * @return string|null
     */
    public function getUserName()
    {
        if (!isset($this->container['UserName']) || is_null($this->container['UserName'])) {
            return null;
        }
        return $this->container['UserName'];
    }

    /**
     * Sets UserName
     *
     * @param string|null $UserName UserName
     *
     * @return self
     */
    public function setUserName($UserName)
    {
        if (is_null($UserName)) {
            array_push($this->openAPINullablesSetToNull, 'UserName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('UserName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['UserName'] = $UserName;

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
     * Gets AuthenticationToken
     *
     * @return string|null
     */
    public function getAuthenticationToken()
    {
        if (!isset($this->container['AuthenticationToken']) || is_null($this->container['AuthenticationToken'])) {
            return null;
        }
        return $this->container['AuthenticationToken'];
    }

    /**
     * Sets AuthenticationToken
     *
     * @param string|null $AuthenticationToken AuthenticationToken
     *
     * @return self
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
        if (is_null($AuthenticationToken)) {
            array_push($this->openAPINullablesSetToNull, 'AuthenticationToken');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('AuthenticationToken', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['AuthenticationToken'] = $AuthenticationToken;

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
