<?php
/**
 * ConversionGoalAdditionalField
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

class ConversionGoalAdditionalField
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const VIEW_THROUGH_CONVERSION_WINDOW_IN_MINUTES = 'ViewThroughConversionWindowInMinutes';

    public const IS_EXTERNALLY_ATTRIBUTED = 'IsExternallyAttributed';

    public const GOAL_CATEGORY = 'GoalCategory';

    public const INACTIVE_DUE_TO_TAG_UNAVAILABLE = 'InactiveDueToTagUnavailable';

    public const ATTRIBUTION_MODEL_TYPE = 'AttributionModelType';

    public const IS_ENHANCED_CONVERSIONS_ENABLED = 'IsEnhancedConversionsEnabled';

    public const IS_AUTO_GOAL = 'IsAutoGoal';

    public const DATA_DRIVEN_ATTRIBUTE = 'DataDrivenAttribute';

    public const APPLICATION_DOWNLOAD_GOAL = 'ApplicationDownloadGoal';


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
            self::VIEW_THROUGH_CONVERSION_WINDOW_IN_MINUTES,
            self::IS_EXTERNALLY_ATTRIBUTED,
            self::GOAL_CATEGORY,
            self::INACTIVE_DUE_TO_TAG_UNAVAILABLE,
            self::ATTRIBUTION_MODEL_TYPE,
            self::IS_ENHANCED_CONVERSIONS_ENABLED,
            self::IS_AUTO_GOAL,
            self::DATA_DRIVEN_ATTRIBUTE,
            self::APPLICATION_DOWNLOAD_GOAL
        ];
    }
}
