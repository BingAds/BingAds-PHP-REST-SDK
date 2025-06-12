<?php
/**
 * ClientLinkStatus
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

class ClientLinkStatus
{
    /**
     * Possible values of this enum
     */
    public const LINK_PENDING = 'LinkPending';

    public const LINK_CANCELED = 'LinkCanceled';

    public const LINK_EXPIRED = 'LinkExpired';

    public const LINK_ACCEPTED = 'LinkAccepted';

    public const LINK_DECLINED = 'LinkDeclined';

    public const LINK_IN_PROGRESS = 'LinkInProgress';

    public const ACTIVE = 'Active';

    public const LINK_FAILED = 'LinkFailed';

    public const UNLINK_REQUESTED = 'UnlinkRequested';

    public const UNLINK_PENDING = 'UnlinkPending';

    public const UNLINK_CANCELED = 'UnlinkCanceled';

    public const UNLINK_IN_PROGRESS = 'UnlinkInProgress';

    public const INACTIVE = 'Inactive';

    public const UNLINK_FAILED = 'UnlinkFailed';


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
            self::LINK_PENDING,
            self::LINK_CANCELED,
            self::LINK_EXPIRED,
            self::LINK_ACCEPTED,
            self::LINK_DECLINED,
            self::LINK_IN_PROGRESS,
            self::ACTIVE,
            self::LINK_FAILED,
            self::UNLINK_REQUESTED,
            self::UNLINK_PENDING,
            self::UNLINK_CANCELED,
            self::UNLINK_IN_PROGRESS,
            self::INACTIVE,
            self::UNLINK_FAILED
        ];
    }
}
