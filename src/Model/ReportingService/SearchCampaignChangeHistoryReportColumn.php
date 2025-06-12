<?php
/**
 * SearchCampaignChangeHistoryReportColumn
 * ReportingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\ReportingService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\ReportingService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class SearchCampaignChangeHistoryReportColumn
{
    /**
     * Possible values of this enum
     */
    public const DATE_TIME = 'DateTime';

    public const ACCOUNT_ID = 'AccountId';

    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_NUMBER = 'AccountNumber';

    public const CHANGED_BY = 'ChangedBy';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CAMPAIGN_ID = 'CampaignId';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const AD_GROUP_ID = 'AdGroupId';

    public const AD_TITLE = 'AdTitle';

    public const AD_DESCRIPTION = 'AdDescription';

    public const DISPLAY_URL = 'DisplayUrl';

    public const KEYWORD = 'Keyword';

    public const ITEM_CHANGED = 'ItemChanged';

    public const ATTRIBUTE_CHANGED = 'AttributeChanged';

    public const HOW_CHANGED = 'HowChanged';

    public const OLD_VALUE = 'OldValue';

    public const NEW_VALUE = 'NewValue';

    public const ENTITY_NAME = 'EntityName';

    public const ENTITY_ID = 'EntityId';

    public const TOOL = 'Tool';


    // If this is an enum with flags true, you can combine multiple values with a comma i.e "value1,value2"
    private static bool $isFlags = false;
    private $value;

    /**
     * Constructor
     */
    public function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * Gets the value of the enum
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value of the enum
     */
    public function setValue($value)
    {
        $this->validateValue($value);
        if (is_array($value) && self::$isFlags) {
            $value = implode(',', $value);
        }
        $this->value = $value;
    }

    public static function isFlags(): bool
    {
        return self::$isFlags;
    }

    public static function validateValue($value): bool
    {
        $values = (self::$isFlags)
            ? ((is_string($value) ? explode(',', $value) : $value))
            : [$value];
        foreach ($values as $v) {
            if (!in_array($v, self::getAllowableEnumValues(), true)) {
                throw new \InvalidArgumentException(sprintf(
                    'Invalid value for enum %s, must be one of: %s',
                    __CLASS__,
                    implode(', ', self::getAllowableEnumValues())
                ));
            }
        }
        return true;
    }

    public function __toString()
    {
        return strval($this->value);
    }

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::DATE_TIME,
            self::ACCOUNT_ID,
            self::ACCOUNT_NAME,
            self::ACCOUNT_NUMBER,
            self::CHANGED_BY,
            self::CAMPAIGN_NAME,
            self::CAMPAIGN_ID,
            self::AD_GROUP_NAME,
            self::AD_GROUP_ID,
            self::AD_TITLE,
            self::AD_DESCRIPTION,
            self::DISPLAY_URL,
            self::KEYWORD,
            self::ITEM_CHANGED,
            self::ATTRIBUTE_CHANGED,
            self::HOW_CHANGED,
            self::OLD_VALUE,
            self::NEW_VALUE,
            self::ENTITY_NAME,
            self::ENTITY_ID,
            self::TOOL
        ];
    }
}
