<?php
/**
 * ConversionGoalType
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

class ConversionGoalType
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const URL = 'Url';

    public const DURATION = 'Duration';

    public const PAGES_VIEWED_PER_VISIT = 'PagesViewedPerVisit';

    public const EVENT = 'Event';

    public const APP_INSTALL = 'AppInstall';

    public const OFFLINE_CONVERSION = 'OfflineConversion';

    public const IN_STORE_TRANSACTION = 'InStoreTransaction';


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
            self::URL,
            self::DURATION,
            self::PAGES_VIEWED_PER_VISIT,
            self::EVENT,
            self::APP_INSTALL,
            self::OFFLINE_CONVERSION,
            self::IN_STORE_TRANSACTION
        ];
    }
}
