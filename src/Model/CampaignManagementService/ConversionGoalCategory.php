<?php
/**
 * ConversionGoalCategory
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

class ConversionGoalCategory
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const NONE = 'None';

    public const PURCHASE = 'Purchase';

    public const ADD_TO_CART = 'AddToCart';

    public const BEGIN_CHECKOUT = 'BeginCheckout';

    public const SUBSCRIBE = 'Subscribe';

    public const SUBMIT_LEAD_FORM = 'SubmitLeadForm';

    public const BOOK_APPOINTMENT = 'BookAppointment';

    public const SIGNUP = 'Signup';

    public const REQUEST_QUOTE = 'RequestQuote';

    public const GET_DIRECTIONS = 'GetDirections';

    public const OUTBOUND_CLICK = 'OutboundClick';

    public const CONTACT = 'Contact';

    public const PAGE_VIEW = 'PageView';

    public const DOWNLOAD = 'Download';

    public const OTHER = 'Other';


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
            self::NONE,
            self::PURCHASE,
            self::ADD_TO_CART,
            self::BEGIN_CHECKOUT,
            self::SUBSCRIBE,
            self::SUBMIT_LEAD_FORM,
            self::BOOK_APPOINTMENT,
            self::SIGNUP,
            self::REQUEST_QUOTE,
            self::GET_DIRECTIONS,
            self::OUTBOUND_CLICK,
            self::CONTACT,
            self::PAGE_VIEW,
            self::DOWNLOAD,
            self::OTHER
        ];
    }
}
