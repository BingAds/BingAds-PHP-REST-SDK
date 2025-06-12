<?php
/**
 * PerformanceInsightsUrlId
 * AdInsightService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\AdInsightService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\AdInsightService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class PerformanceInsightsUrlId
{
    /**
     * Possible values of this enum
     */
    public const REC_RECOMMENDATION_PAGE = 'RecRecommendationPage';

    public const REC_COMPETITION_PAGE = 'RecCompetitionPage';

    public const SETTING_CREATE_ORDER = 'SettingCreateOrder';

    public const SETTING_REMOVE_HOLD = 'SettingRemoveHold';

    public const SETTING_ADD_FUNDS = 'SettingAddFunds';

    public const REPORT_SEARCH_TERM = 'ReportSearchTerm';

    public const REPORT_PUBLISHER_WEBSITE = 'ReportPublisherWebsite';

    public const REPORT_AUCTION_INSIGHTS = 'ReportAuctionInsights';

    public const HELP_DOC_NETWORK_SETTING = 'HelpDocNetworkSetting';

    public const HELP_DOC_EDITORIAL = 'HelpDocEditorial';

    public const HELP_DOC_WEBSITE_REPORT = 'HelpDocWebsiteReport';

    public const HELP_DOC_WEBSITE_EXCLUSION = 'HelpDocWebsiteExclusion';

    public const HELP_DOC_CREATE_ORDER = 'HelpDocCreateOrder';

    public const HELP_DOC_REMOVE_HOLD = 'HelpDocRemoveHold';

    public const HELP_DOC_ADD_FUNDS = 'HelpDocAddFunds';

    public const HELP_DOC_RECOMMENDATION = 'HelpDocRecommendation';

    public const HELP_DOC_AUDIENCE_NETWORK = 'HelpDocAudienceNetwork';


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
            self::REC_RECOMMENDATION_PAGE,
            self::REC_COMPETITION_PAGE,
            self::SETTING_CREATE_ORDER,
            self::SETTING_REMOVE_HOLD,
            self::SETTING_ADD_FUNDS,
            self::REPORT_SEARCH_TERM,
            self::REPORT_PUBLISHER_WEBSITE,
            self::REPORT_AUCTION_INSIGHTS,
            self::HELP_DOC_NETWORK_SETTING,
            self::HELP_DOC_EDITORIAL,
            self::HELP_DOC_WEBSITE_REPORT,
            self::HELP_DOC_WEBSITE_EXCLUSION,
            self::HELP_DOC_CREATE_ORDER,
            self::HELP_DOC_REMOVE_HOLD,
            self::HELP_DOC_ADD_FUNDS,
            self::HELP_DOC_RECOMMENDATION,
            self::HELP_DOC_AUDIENCE_NETWORK
        ];
    }
}
