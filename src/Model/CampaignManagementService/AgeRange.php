<?php
/**
 * AgeRange
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

class AgeRange
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const EIGHTEEN_TO_TWENTY_FOUR = 'EighteenToTwentyFour';

    public const TWENTY_FIVE_TO_THIRTY_FOUR = 'TwentyFiveToThirtyFour';

    public const THIRTY_FIVE_TO_FOURTY_NINE = 'ThirtyFiveToFourtyNine';

    public const FIFTY_TO_SIXTY_FOUR = 'FiftyToSixtyFour';

    public const SIXTY_FIVE_AND_ABOVE = 'SixtyFiveAndAbove';

    public const THIRTY_FIVE_TO_FIFTY_FOUR = 'ThirtyFiveToFiftyFour';

    public const FIFTY_FIVE_AND_ABOVE = 'FiftyFiveAndAbove';


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
            self::EIGHTEEN_TO_TWENTY_FOUR,
            self::TWENTY_FIVE_TO_THIRTY_FOUR,
            self::THIRTY_FIVE_TO_FOURTY_NINE,
            self::FIFTY_TO_SIXTY_FOUR,
            self::SIXTY_FIVE_AND_ABOVE,
            self::THIRTY_FIVE_TO_FIFTY_FOUR,
            self::FIFTY_FIVE_AND_ABOVE
        ];
    }
}
