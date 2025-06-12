<?php
/**
 * CustomerFinancialStatus
 * CustomerManagementService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\CustomerManagementService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\CustomerManagementService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class CustomerFinancialStatus
{
    /**
     * Possible values of this enum
     */
    public const PROPOSALS_ONLY = 'ProposalsOnly';

    public const PENDING_CREDIT_CHECK = 'PendingCreditCheck';

    public const CLEAR_FINANCIAL_STATUS = 'ClearFinancialStatus';

    public const SOLD_TO_ONLY = 'SoldToOnly';

    public const CREDIT_HOLD = 'CreditHold';

    public const CREDIT_WARNING = 'CreditWarning';


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
            self::PROPOSALS_ONLY,
            self::PENDING_CREDIT_CHECK,
            self::CLEAR_FINANCIAL_STATUS,
            self::SOLD_TO_ONLY,
            self::CREDIT_HOLD,
            self::CREDIT_WARNING
        ];
    }
}
