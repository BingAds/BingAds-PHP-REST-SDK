<?php
/**
 * LeadFormAdExtension
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

class LeadFormAdExtension extends AdExtension implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LeadFormAdExtension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'CallToAction' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormCallToAction',
        'ActionName' => 'string',
        'ActionDescription' => 'string',
        'CorporateImage' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAsset',
        'CorporateImageInternalUrl' => 'string',
        'FormHeadline' => 'string',
        'FormBusinessName' => 'string',
        'FormDescription' => 'string',
        'FormPolicyUrl' => 'string',
        'FormQuestions' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormQuestionDefinition[]',
        'ConfirmationMessage' => 'string',
        'ConfirmationDescription' => 'string',
        'ConfirmationAction' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\ConfirmationAction',
        'ConfirmationUrl' => 'string',
        'LeadDelivery' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadDelivery',
        'LeadEmails' => 'string',
        'LeadWebhookUrl' => 'string',
        'LeadWebhookKey' => 'string',
        'Language' => 'string',
        'Status' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus',
        'Scheduling' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\Schedule',
        'DevicePreference' => 'string',
        'Id' => 'string',
        'Type' => 'string',
        'Version' => 'int',
        'ForwardCompatibilityMap' => '\Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'CallToAction' => null,
        'ActionName' => null,
        'ActionDescription' => null,
        'CorporateImage' => null,
        'CorporateImageInternalUrl' => null,
        'FormHeadline' => null,
        'FormBusinessName' => null,
        'FormDescription' => null,
        'FormPolicyUrl' => null,
        'FormQuestions' => null,
        'ConfirmationMessage' => null,
        'ConfirmationDescription' => null,
        'ConfirmationAction' => null,
        'ConfirmationUrl' => null,
        'LeadDelivery' => null,
        'LeadEmails' => null,
        'LeadWebhookUrl' => null,
        'LeadWebhookKey' => null,
        'Language' => null,
        'Status' => null,
        'Scheduling' => null,
        'DevicePreference' => 'int64',
        'Id' => 'int64',
        'Type' => null,
        'Version' => 'int32',
        'ForwardCompatibilityMap' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'CallToAction' => false,
        'ActionName' => true,
        'ActionDescription' => true,
        'CorporateImage' => true,
        'CorporateImageInternalUrl' => true,
        'FormHeadline' => true,
        'FormBusinessName' => true,
        'FormDescription' => true,
        'FormPolicyUrl' => true,
        'FormQuestions' => true,
        'ConfirmationMessage' => true,
        'ConfirmationDescription' => true,
        'ConfirmationAction' => false,
        'ConfirmationUrl' => true,
        'LeadDelivery' => false,
        'LeadEmails' => true,
        'LeadWebhookUrl' => true,
        'LeadWebhookKey' => true,
        'Language' => true,
        'Status' => false,
        'Scheduling' => true,
        'DevicePreference' => true,
        'Id' => true,
        'Type' => true,
        'Version' => true,
        'ForwardCompatibilityMap' => true
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
        'CallToAction' => 'CallToAction',
        'ActionName' => 'ActionName',
        'ActionDescription' => 'ActionDescription',
        'CorporateImage' => 'CorporateImage',
        'CorporateImageInternalUrl' => 'CorporateImageInternalUrl',
        'FormHeadline' => 'FormHeadline',
        'FormBusinessName' => 'FormBusinessName',
        'FormDescription' => 'FormDescription',
        'FormPolicyUrl' => 'FormPolicyUrl',
        'FormQuestions' => 'FormQuestions',
        'ConfirmationMessage' => 'ConfirmationMessage',
        'ConfirmationDescription' => 'ConfirmationDescription',
        'ConfirmationAction' => 'ConfirmationAction',
        'ConfirmationUrl' => 'ConfirmationUrl',
        'LeadDelivery' => 'LeadDelivery',
        'LeadEmails' => 'LeadEmails',
        'LeadWebhookUrl' => 'LeadWebhookUrl',
        'LeadWebhookKey' => 'LeadWebhookKey',
        'Language' => 'Language',
        'Status' => 'Status',
        'Scheduling' => 'Scheduling',
        'DevicePreference' => 'DevicePreference',
        'Id' => 'Id',
        'Type' => 'Type',
        'Version' => 'Version',
        'ForwardCompatibilityMap' => 'ForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'CallToAction' => 'setCallToAction',
        'ActionName' => 'setActionName',
        'ActionDescription' => 'setActionDescription',
        'CorporateImage' => 'setCorporateImage',
        'CorporateImageInternalUrl' => 'setCorporateImageInternalUrl',
        'FormHeadline' => 'setFormHeadline',
        'FormBusinessName' => 'setFormBusinessName',
        'FormDescription' => 'setFormDescription',
        'FormPolicyUrl' => 'setFormPolicyUrl',
        'FormQuestions' => 'setFormQuestions',
        'ConfirmationMessage' => 'setConfirmationMessage',
        'ConfirmationDescription' => 'setConfirmationDescription',
        'ConfirmationAction' => 'setConfirmationAction',
        'ConfirmationUrl' => 'setConfirmationUrl',
        'LeadDelivery' => 'setLeadDelivery',
        'LeadEmails' => 'setLeadEmails',
        'LeadWebhookUrl' => 'setLeadWebhookUrl',
        'LeadWebhookKey' => 'setLeadWebhookKey',
        'Language' => 'setLanguage',
        'Status' => 'setStatus',
        'Scheduling' => 'setScheduling',
        'DevicePreference' => 'setDevicePreference',
        'Id' => 'setId',
        'Type' => 'setType',
        'Version' => 'setVersion',
        'ForwardCompatibilityMap' => 'setForwardCompatibilityMap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'CallToAction' => 'getCallToAction',
        'ActionName' => 'getActionName',
        'ActionDescription' => 'getActionDescription',
        'CorporateImage' => 'getCorporateImage',
        'CorporateImageInternalUrl' => 'getCorporateImageInternalUrl',
        'FormHeadline' => 'getFormHeadline',
        'FormBusinessName' => 'getFormBusinessName',
        'FormDescription' => 'getFormDescription',
        'FormPolicyUrl' => 'getFormPolicyUrl',
        'FormQuestions' => 'getFormQuestions',
        'ConfirmationMessage' => 'getConfirmationMessage',
        'ConfirmationDescription' => 'getConfirmationDescription',
        'ConfirmationAction' => 'getConfirmationAction',
        'ConfirmationUrl' => 'getConfirmationUrl',
        'LeadDelivery' => 'getLeadDelivery',
        'LeadEmails' => 'getLeadEmails',
        'LeadWebhookUrl' => 'getLeadWebhookUrl',
        'LeadWebhookKey' => 'getLeadWebhookKey',
        'Language' => 'getLanguage',
        'Status' => 'getStatus',
        'Scheduling' => 'getScheduling',
        'DevicePreference' => 'getDevicePreference',
        'Id' => 'getId',
        'Type' => 'getType',
        'Version' => 'getVersion',
        'ForwardCompatibilityMap' => 'getForwardCompatibilityMap'
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
        $this->setIfExists('CallToAction', $data ?? [], null);
        $this->setIfExists('ActionName', $data ?? [], null);
        $this->setIfExists('ActionDescription', $data ?? [], null);
        $this->setIfExists('CorporateImage', $data ?? [], null);
        $this->setIfExists('CorporateImageInternalUrl', $data ?? [], null);
        $this->setIfExists('FormHeadline', $data ?? [], null);
        $this->setIfExists('FormBusinessName', $data ?? [], null);
        $this->setIfExists('FormDescription', $data ?? [], null);
        $this->setIfExists('FormPolicyUrl', $data ?? [], null);
        $this->setIfExists('FormQuestions', $data ?? [], null);
        $this->setIfExists('ConfirmationMessage', $data ?? [], null);
        $this->setIfExists('ConfirmationDescription', $data ?? [], null);
        $this->setIfExists('ConfirmationAction', $data ?? [], null);
        $this->setIfExists('ConfirmationUrl', $data ?? [], null);
        $this->setIfExists('LeadDelivery', $data ?? [], null);
        $this->setIfExists('LeadEmails', $data ?? [], null);
        $this->setIfExists('LeadWebhookUrl', $data ?? [], null);
        $this->setIfExists('LeadWebhookKey', $data ?? [], null);
        $this->setIfExists('Language', $data ?? [], null);
        $this->setIfExists('Status', $data ?? [], null);
        $this->setIfExists('Scheduling', $data ?? [], null);
        $this->setIfExists('DevicePreference', $data ?? [], null);
        $this->setIfExists('Id', $data ?? [], null);
        $this->setIfExists('Type', $data ?? [], 'LeadFormAdExtension');
        $this->setIfExists('Version', $data ?? [], null);
        $this->setIfExists('ForwardCompatibilityMap', $data ?? [], null);
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
     * Gets CallToAction
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormCallToAction|mixed|null
     */
    public function getCallToAction()
    {
        if (!isset($this->container['CallToAction']) || is_null($this->container['CallToAction'])) {
            return null;
        }
        if ((is_object($this->container['CallToAction']) || is_string($this->container['CallToAction'])) && method_exists($this->container['CallToAction'], 'getValue')) {
            return $this->container['CallToAction']->getValue();
        }
        return $this->container['CallToAction'];
    }

    /**
     * Sets CallToAction
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormCallToAction|mixed|null $CallToAction CallToAction
     *
     * @return self
     */
    public function setCallToAction($CallToAction)
    {
        if (is_null($CallToAction)) {
            throw new \InvalidArgumentException('non-nullable CallToAction cannot be null');
        }
        if (!$CallToAction instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormCallToAction) {
            $CallToAction = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormCallToAction($CallToAction);
        }
        $this->container['CallToAction'] = $CallToAction;

        return $this;
    }

    /**
     * Gets ActionName
     *
     * @return string|null
     */
    public function getActionName()
    {
        if (!isset($this->container['ActionName']) || is_null($this->container['ActionName'])) {
            return null;
        }
        return $this->container['ActionName'];
    }

    /**
     * Sets ActionName
     *
     * @param string|null $ActionName ActionName
     *
     * @return self
     */
    public function setActionName($ActionName)
    {
        if (is_null($ActionName)) {
            array_push($this->openAPINullablesSetToNull, 'ActionName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ActionName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ActionName'] = $ActionName;

        return $this;
    }

    /**
     * Gets ActionDescription
     *
     * @return string|null
     */
    public function getActionDescription()
    {
        if (!isset($this->container['ActionDescription']) || is_null($this->container['ActionDescription'])) {
            return null;
        }
        return $this->container['ActionDescription'];
    }

    /**
     * Sets ActionDescription
     *
     * @param string|null $ActionDescription ActionDescription
     *
     * @return self
     */
    public function setActionDescription($ActionDescription)
    {
        if (is_null($ActionDescription)) {
            array_push($this->openAPINullablesSetToNull, 'ActionDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ActionDescription', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ActionDescription'] = $ActionDescription;

        return $this;
    }

    /**
     * Gets CorporateImage
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAsset|null
     */
    public function getCorporateImage()
    {
        if (!isset($this->container['CorporateImage']) || is_null($this->container['CorporateImage'])) {
            return null;
        }
        return $this->container['CorporateImage'];
    }

    /**
     * Sets CorporateImage
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ImageAsset|null $CorporateImage CorporateImage
     *
     * @return self
     */
    public function setCorporateImage($CorporateImage)
    {
        if (is_null($CorporateImage)) {
            array_push($this->openAPINullablesSetToNull, 'CorporateImage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CorporateImage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CorporateImage'] = $CorporateImage;

        return $this;
    }

    /**
     * Gets CorporateImageInternalUrl
     *
     * @return string|null
     */
    public function getCorporateImageInternalUrl()
    {
        if (!isset($this->container['CorporateImageInternalUrl']) || is_null($this->container['CorporateImageInternalUrl'])) {
            return null;
        }
        return $this->container['CorporateImageInternalUrl'];
    }

    /**
     * Sets CorporateImageInternalUrl
     *
     * @param string|null $CorporateImageInternalUrl CorporateImageInternalUrl
     *
     * @return self
     */
    public function setCorporateImageInternalUrl($CorporateImageInternalUrl)
    {
        if (is_null($CorporateImageInternalUrl)) {
            array_push($this->openAPINullablesSetToNull, 'CorporateImageInternalUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('CorporateImageInternalUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['CorporateImageInternalUrl'] = $CorporateImageInternalUrl;

        return $this;
    }

    /**
     * Gets FormHeadline
     *
     * @return string|null
     */
    public function getFormHeadline()
    {
        if (!isset($this->container['FormHeadline']) || is_null($this->container['FormHeadline'])) {
            return null;
        }
        return $this->container['FormHeadline'];
    }

    /**
     * Sets FormHeadline
     *
     * @param string|null $FormHeadline FormHeadline
     *
     * @return self
     */
    public function setFormHeadline($FormHeadline)
    {
        if (is_null($FormHeadline)) {
            array_push($this->openAPINullablesSetToNull, 'FormHeadline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormHeadline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormHeadline'] = $FormHeadline;

        return $this;
    }

    /**
     * Gets FormBusinessName
     *
     * @return string|null
     */
    public function getFormBusinessName()
    {
        if (!isset($this->container['FormBusinessName']) || is_null($this->container['FormBusinessName'])) {
            return null;
        }
        return $this->container['FormBusinessName'];
    }

    /**
     * Sets FormBusinessName
     *
     * @param string|null $FormBusinessName FormBusinessName
     *
     * @return self
     */
    public function setFormBusinessName($FormBusinessName)
    {
        if (is_null($FormBusinessName)) {
            array_push($this->openAPINullablesSetToNull, 'FormBusinessName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormBusinessName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormBusinessName'] = $FormBusinessName;

        return $this;
    }

    /**
     * Gets FormDescription
     *
     * @return string|null
     */
    public function getFormDescription()
    {
        if (!isset($this->container['FormDescription']) || is_null($this->container['FormDescription'])) {
            return null;
        }
        return $this->container['FormDescription'];
    }

    /**
     * Sets FormDescription
     *
     * @param string|null $FormDescription FormDescription
     *
     * @return self
     */
    public function setFormDescription($FormDescription)
    {
        if (is_null($FormDescription)) {
            array_push($this->openAPINullablesSetToNull, 'FormDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormDescription', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormDescription'] = $FormDescription;

        return $this;
    }

    /**
     * Gets FormPolicyUrl
     *
     * @return string|null
     */
    public function getFormPolicyUrl()
    {
        if (!isset($this->container['FormPolicyUrl']) || is_null($this->container['FormPolicyUrl'])) {
            return null;
        }
        return $this->container['FormPolicyUrl'];
    }

    /**
     * Sets FormPolicyUrl
     *
     * @param string|null $FormPolicyUrl FormPolicyUrl
     *
     * @return self
     */
    public function setFormPolicyUrl($FormPolicyUrl)
    {
        if (is_null($FormPolicyUrl)) {
            array_push($this->openAPINullablesSetToNull, 'FormPolicyUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormPolicyUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormPolicyUrl'] = $FormPolicyUrl;

        return $this;
    }

    /**
     * Gets FormQuestions
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormQuestionDefinition[]|null
     */
    public function getFormQuestions()
    {
        if (!isset($this->container['FormQuestions']) || is_null($this->container['FormQuestions'])) {
            return null;
        }
        return $this->container['FormQuestions'];
    }

    /**
     * Sets FormQuestions
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadFormQuestionDefinition[]|null $FormQuestions FormQuestions
     *
     * @return self
     */
    public function setFormQuestions($FormQuestions)
    {
        if (is_null($FormQuestions)) {
            array_push($this->openAPINullablesSetToNull, 'FormQuestions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('FormQuestions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['FormQuestions'] = $FormQuestions;

        return $this;
    }

    /**
     * Gets ConfirmationMessage
     *
     * @return string|null
     */
    public function getConfirmationMessage()
    {
        if (!isset($this->container['ConfirmationMessage']) || is_null($this->container['ConfirmationMessage'])) {
            return null;
        }
        return $this->container['ConfirmationMessage'];
    }

    /**
     * Sets ConfirmationMessage
     *
     * @param string|null $ConfirmationMessage ConfirmationMessage
     *
     * @return self
     */
    public function setConfirmationMessage($ConfirmationMessage)
    {
        if (is_null($ConfirmationMessage)) {
            array_push($this->openAPINullablesSetToNull, 'ConfirmationMessage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ConfirmationMessage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ConfirmationMessage'] = $ConfirmationMessage;

        return $this;
    }

    /**
     * Gets ConfirmationDescription
     *
     * @return string|null
     */
    public function getConfirmationDescription()
    {
        if (!isset($this->container['ConfirmationDescription']) || is_null($this->container['ConfirmationDescription'])) {
            return null;
        }
        return $this->container['ConfirmationDescription'];
    }

    /**
     * Sets ConfirmationDescription
     *
     * @param string|null $ConfirmationDescription ConfirmationDescription
     *
     * @return self
     */
    public function setConfirmationDescription($ConfirmationDescription)
    {
        if (is_null($ConfirmationDescription)) {
            array_push($this->openAPINullablesSetToNull, 'ConfirmationDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ConfirmationDescription', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ConfirmationDescription'] = $ConfirmationDescription;

        return $this;
    }

    /**
     * Gets ConfirmationAction
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConfirmationAction|mixed|null
     */
    public function getConfirmationAction()
    {
        if (!isset($this->container['ConfirmationAction']) || is_null($this->container['ConfirmationAction'])) {
            return null;
        }
        if ((is_object($this->container['ConfirmationAction']) || is_string($this->container['ConfirmationAction'])) && method_exists($this->container['ConfirmationAction'], 'getValue')) {
            return $this->container['ConfirmationAction']->getValue();
        }
        return $this->container['ConfirmationAction'];
    }

    /**
     * Sets ConfirmationAction
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConfirmationAction|mixed|null $ConfirmationAction ConfirmationAction
     *
     * @return self
     */
    public function setConfirmationAction($ConfirmationAction)
    {
        if (is_null($ConfirmationAction)) {
            throw new \InvalidArgumentException('non-nullable ConfirmationAction cannot be null');
        }
        if (!$ConfirmationAction instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConfirmationAction) {
            $ConfirmationAction = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\ConfirmationAction($ConfirmationAction);
        }
        $this->container['ConfirmationAction'] = $ConfirmationAction;

        return $this;
    }

    /**
     * Gets ConfirmationUrl
     *
     * @return string|null
     */
    public function getConfirmationUrl()
    {
        if (!isset($this->container['ConfirmationUrl']) || is_null($this->container['ConfirmationUrl'])) {
            return null;
        }
        return $this->container['ConfirmationUrl'];
    }

    /**
     * Sets ConfirmationUrl
     *
     * @param string|null $ConfirmationUrl ConfirmationUrl
     *
     * @return self
     */
    public function setConfirmationUrl($ConfirmationUrl)
    {
        if (is_null($ConfirmationUrl)) {
            array_push($this->openAPINullablesSetToNull, 'ConfirmationUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ConfirmationUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ConfirmationUrl'] = $ConfirmationUrl;

        return $this;
    }

    /**
     * Gets LeadDelivery
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadDelivery|mixed|null
     */
    public function getLeadDelivery()
    {
        if (!isset($this->container['LeadDelivery']) || is_null($this->container['LeadDelivery'])) {
            return null;
        }
        if ((is_object($this->container['LeadDelivery']) || is_string($this->container['LeadDelivery'])) && method_exists($this->container['LeadDelivery'], 'getValue')) {
            return $this->container['LeadDelivery']->getValue();
        }
        return $this->container['LeadDelivery'];
    }

    /**
     * Sets LeadDelivery
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadDelivery|mixed|null $LeadDelivery LeadDelivery
     *
     * @return self
     */
    public function setLeadDelivery($LeadDelivery)
    {
        if (is_null($LeadDelivery)) {
            throw new \InvalidArgumentException('non-nullable LeadDelivery cannot be null');
        }
        if (!$LeadDelivery instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadDelivery) {
            $LeadDelivery = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\LeadDelivery($LeadDelivery);
        }
        $this->container['LeadDelivery'] = $LeadDelivery;

        return $this;
    }

    /**
     * Gets LeadEmails
     *
     * @return string|null
     */
    public function getLeadEmails()
    {
        if (!isset($this->container['LeadEmails']) || is_null($this->container['LeadEmails'])) {
            return null;
        }
        return $this->container['LeadEmails'];
    }

    /**
     * Sets LeadEmails
     *
     * @param string|null $LeadEmails LeadEmails
     *
     * @return self
     */
    public function setLeadEmails($LeadEmails)
    {
        if (is_null($LeadEmails)) {
            array_push($this->openAPINullablesSetToNull, 'LeadEmails');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LeadEmails', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LeadEmails'] = $LeadEmails;

        return $this;
    }

    /**
     * Gets LeadWebhookUrl
     *
     * @return string|null
     */
    public function getLeadWebhookUrl()
    {
        if (!isset($this->container['LeadWebhookUrl']) || is_null($this->container['LeadWebhookUrl'])) {
            return null;
        }
        return $this->container['LeadWebhookUrl'];
    }

    /**
     * Sets LeadWebhookUrl
     *
     * @param string|null $LeadWebhookUrl LeadWebhookUrl
     *
     * @return self
     */
    public function setLeadWebhookUrl($LeadWebhookUrl)
    {
        if (is_null($LeadWebhookUrl)) {
            array_push($this->openAPINullablesSetToNull, 'LeadWebhookUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LeadWebhookUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LeadWebhookUrl'] = $LeadWebhookUrl;

        return $this;
    }

    /**
     * Gets LeadWebhookKey
     *
     * @return string|null
     */
    public function getLeadWebhookKey()
    {
        if (!isset($this->container['LeadWebhookKey']) || is_null($this->container['LeadWebhookKey'])) {
            return null;
        }
        return $this->container['LeadWebhookKey'];
    }

    /**
     * Sets LeadWebhookKey
     *
     * @param string|null $LeadWebhookKey LeadWebhookKey
     *
     * @return self
     */
    public function setLeadWebhookKey($LeadWebhookKey)
    {
        if (is_null($LeadWebhookKey)) {
            array_push($this->openAPINullablesSetToNull, 'LeadWebhookKey');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('LeadWebhookKey', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['LeadWebhookKey'] = $LeadWebhookKey;

        return $this;
    }

    /**
     * Gets Language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        if (!isset($this->container['Language']) || is_null($this->container['Language'])) {
            return null;
        }
        return $this->container['Language'];
    }

    /**
     * Sets Language
     *
     * @param string|null $Language Language
     *
     * @return self
     */
    public function setLanguage($Language)
    {
        if (is_null($Language)) {
            array_push($this->openAPINullablesSetToNull, 'Language');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Language', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Language'] = $Language;

        return $this;
    }

    /**
     * Gets Status
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus|mixed|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus|mixed|null $Status Status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        if (is_null($Status)) {
            throw new \InvalidArgumentException('non-nullable Status cannot be null');
        }
        if (!$Status instanceof \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus) {
            $Status = new \Microsoft\MsAds\Rest\Model\CampaignManagementService\AdExtensionStatus($Status);
        }
        $this->container['Status'] = $Status;

        return $this;
    }

    /**
     * Gets Scheduling
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\Schedule|null
     */
    public function getScheduling()
    {
        if (!isset($this->container['Scheduling']) || is_null($this->container['Scheduling'])) {
            return null;
        }
        return $this->container['Scheduling'];
    }

    /**
     * Sets Scheduling
     *
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\Schedule|null $Scheduling Scheduling
     *
     * @return self
     */
    public function setScheduling($Scheduling)
    {
        if (is_null($Scheduling)) {
            array_push($this->openAPINullablesSetToNull, 'Scheduling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Scheduling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Scheduling'] = $Scheduling;

        return $this;
    }

    /**
     * Gets DevicePreference
     *
     * @return string|null
     */
    public function getDevicePreference()
    {
        if (!isset($this->container['DevicePreference']) || is_null($this->container['DevicePreference'])) {
            return null;
        }
        return $this->container['DevicePreference'];
    }

    /**
     * Sets DevicePreference
     *
     * @param string|null $DevicePreference DevicePreference
     *
     * @return self
     */
    public function setDevicePreference($DevicePreference)
    {
        if (is_null($DevicePreference)) {
            array_push($this->openAPINullablesSetToNull, 'DevicePreference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('DevicePreference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['DevicePreference'] = $DevicePreference;

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
     * Gets Version
     *
     * @return int|null
     */
    public function getVersion()
    {
        if (!isset($this->container['Version']) || is_null($this->container['Version'])) {
            return null;
        }
        return $this->container['Version'];
    }

    /**
     * Sets Version
     *
     * @param int|null $Version Version
     *
     * @return self
     */
    public function setVersion($Version)
    {
        if (is_null($Version)) {
            array_push($this->openAPINullablesSetToNull, 'Version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('Version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['Version'] = $Version;

        return $this;
    }

    /**
     * Gets ForwardCompatibilityMap
     *
     * @return \Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]|null
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
     * @param \Microsoft\MsAds\Rest\Model\CampaignManagementService\KeyValuePairOfstringAndstring[]|null $ForwardCompatibilityMap ForwardCompatibilityMap
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
