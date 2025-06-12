<?php
/**
 * AdGroupAdditionalField
 * CampaignManagementService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CampaignManagementService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CampaignManagementService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class AdGroupAdditionalField
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const AD_SCHEDULE_USE_SEARCHER_TIME_ZONE = 'AdScheduleUseSearcherTimeZone';

    public const AD_GROUP_TYPE = 'AdGroupType';

    public const CPV_BID = 'CpvBid';

    public const CPM_BID = 'CpmBid';

    public const MULTIMEDIA_ADS_BID_ADJUSTMENT = 'MultimediaAdsBidAdjustment';

    public const COMMISSION_RATE = 'CommissionRate';

    public const PERCENT_CPC_BID = 'PercentCpcBid';

    public const MCPA_BID = 'McpaBid';

    public const USE_OPTIMIZED_TARGETING = 'UseOptimizedTargeting';

    public const FREQUENCY_CAP_SETTINGS = 'FrequencyCapSettings';

    public const USE_PREDICTIVE_TARGETING = 'UsePredictiveTargeting';


    // If this is an enum with flags true, you can combine multiple values with a comma i.e "value1,value2"
    private static bool $isFlags = true;
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
            self::NONE,
            self::AD_SCHEDULE_USE_SEARCHER_TIME_ZONE,
            self::AD_GROUP_TYPE,
            self::CPV_BID,
            self::CPM_BID,
            self::MULTIMEDIA_ADS_BID_ADJUSTMENT,
            self::COMMISSION_RATE,
            self::PERCENT_CPC_BID,
            self::MCPA_BID,
            self::USE_OPTIMIZED_TARGETING,
            self::FREQUENCY_CAP_SETTINGS,
            self::USE_PREDICTIVE_TARGETING
        ];
    }
}
