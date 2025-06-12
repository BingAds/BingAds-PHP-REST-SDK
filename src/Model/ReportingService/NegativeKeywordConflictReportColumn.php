<?php
/**
 * NegativeKeywordConflictReportColumn
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

class NegativeKeywordConflictReportColumn
{
    /**
     * Possible values of this enum
     */
    public const ACCOUNT_NAME = 'AccountName';

    public const ACCOUNT_NUMBER = 'AccountNumber';

    public const ACCOUNT_ID = 'AccountId';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const CAMPAIGN_ID = 'CampaignId';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const AD_GROUP_ID = 'AdGroupId';

    public const KEYWORD = 'Keyword';

    public const KEYWORD_ID = 'KeywordId';

    public const NEGATIVE_KEYWORD = 'NegativeKeyword';

    public const CONFLICT_LEVEL = 'ConflictLevel';

    public const BID_MATCH_TYPE = 'BidMatchType';

    public const NEGATIVE_KEYWORD_LIST_ID = 'NegativeKeywordListId';

    public const NEGATIVE_KEYWORD_LIST = 'NegativeKeywordList';

    public const NEGATIVE_KEYWORD_ID = 'NegativeKeywordId';

    public const NEGATIVE_KEYWORD_MATCH_TYPE = 'NegativeKeywordMatchType';

    public const ACCOUNT_STATUS = 'AccountStatus';

    public const CAMPAIGN_STATUS = 'CampaignStatus';

    public const AD_GROUP_STATUS = 'AdGroupStatus';

    public const KEYWORD_STATUS = 'KeywordStatus';

    public const CONFLICT_TYPE = 'ConflictType';


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
            self::ACCOUNT_NAME,
            self::ACCOUNT_NUMBER,
            self::ACCOUNT_ID,
            self::CAMPAIGN_NAME,
            self::CAMPAIGN_ID,
            self::AD_GROUP_NAME,
            self::AD_GROUP_ID,
            self::KEYWORD,
            self::KEYWORD_ID,
            self::NEGATIVE_KEYWORD,
            self::CONFLICT_LEVEL,
            self::BID_MATCH_TYPE,
            self::NEGATIVE_KEYWORD_LIST_ID,
            self::NEGATIVE_KEYWORD_LIST,
            self::NEGATIVE_KEYWORD_ID,
            self::NEGATIVE_KEYWORD_MATCH_TYPE,
            self::ACCOUNT_STATUS,
            self::CAMPAIGN_STATUS,
            self::AD_GROUP_STATUS,
            self::KEYWORD_STATUS,
            self::CONFLICT_TYPE
        ];
    }
}
