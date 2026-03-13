<?php
/**
 * OfflineConversionUnattributedReason
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

class OfflineConversionUnattributedReason
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const ADJUSTMENT_ORIGINAL_NOT_FOUND = 'AdjustmentOriginalNotFound';

    public const CONVERSION_ALREADY_RETRACTED = 'ConversionAlreadyRetracted';

    public const DUPLICATE_CONVERSION_KEY = 'DuplicateConversionKey';

    public const CONVERSION_TIME_EXCEEDS_MAX_LOOKBACK = 'ConversionTimeExceedsMaxLookback';

    public const CONVERSION_TIME_IN_FUTURE = 'ConversionTimeInFuture';

    public const GOAL_NOT_FOUND_OR_INACTIVE = 'GoalNotFoundOrInactive';

    public const CLICK_TIMESTAMP_AFTER_CONVERSION = 'ClickTimestampAfterConversion';

    public const NO_MATCHING_CLICK_FOUND = 'NoMatchingClickFound';

    public const MISSING_MATCH_IDENTIFIERS = 'MissingMatchIdentifiers';

    public const OUTSIDE_GOAL_LOOKBACK_WINDOW = 'OutsideGoalLookbackWindow';

    public const ACCOUNT_MISMATCH = 'AccountMismatch';

    public const MALFORMED_DATA = 'MalformedData';

    public const HISTORICAL_CLICK_DATA_EXPIRED = 'HistoricalClickDataExpired';


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
            self::UNKNOWN,
            self::ADJUSTMENT_ORIGINAL_NOT_FOUND,
            self::CONVERSION_ALREADY_RETRACTED,
            self::DUPLICATE_CONVERSION_KEY,
            self::CONVERSION_TIME_EXCEEDS_MAX_LOOKBACK,
            self::CONVERSION_TIME_IN_FUTURE,
            self::GOAL_NOT_FOUND_OR_INACTIVE,
            self::CLICK_TIMESTAMP_AFTER_CONVERSION,
            self::NO_MATCHING_CLICK_FOUND,
            self::MISSING_MATCH_IDENTIFIERS,
            self::OUTSIDE_GOAL_LOOKBACK_WINDOW,
            self::ACCOUNT_MISMATCH,
            self::MALFORMED_DATA,
            self::HISTORICAL_CLICK_DATA_EXPIRED
        ];
    }
}
