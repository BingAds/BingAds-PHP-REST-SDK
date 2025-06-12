<?php
/**
 * LeadFormCallToAction
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

class LeadFormCallToAction
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const CUSTOM_TEXT = 'CustomText';

    public const APPLY_NOW = 'ApplyNow';

    public const BOOK_NOW = 'BookNow';

    public const CONTACT_US = 'ContactUs';

    public const DOWNLOAD = 'Download';

    public const GET_OFFER = 'GetOffer';

    public const GET_QUOTE = 'GetQuote';

    public const LEARN_MORE = 'LearnMore';

    public const SIGN_UP = 'SignUp';

    public const SUBSCRIBE = 'Subscribe';


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
            self::CUSTOM_TEXT,
            self::APPLY_NOW,
            self::BOOK_NOW,
            self::CONTACT_US,
            self::DOWNLOAD,
            self::GET_OFFER,
            self::GET_QUOTE,
            self::LEARN_MORE,
            self::SIGN_UP,
            self::SUBSCRIBE
        ];
    }
}
