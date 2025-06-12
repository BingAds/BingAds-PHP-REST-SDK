<?php
/**
 * SecretQuestion
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

class SecretQuestion
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const FAVORITE_PETS_NAME = 'FavoritePetsName';

    public const FAVORITE_MOVIE = 'FavoriteMovie';

    public const ANNIVERSARY = 'Anniversary';

    public const FATHER_MIDDLE_NAME = 'FatherMiddleName';

    public const SPOUSE_MIDDLE_NAME = 'SpouseMiddleName';

    public const FIRST_CHILD_MIDDLE_NAME = 'FirstChildMiddleName';

    public const HIGH_SCHOOL_NAME = 'HighSchoolName';

    public const FAVORITE_TEACHER_NAME = 'FavoriteTeacherName';

    public const FAVORITE_SPORTS_TEAM = 'FavoriteSportsTeam';


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
            self::NONE,
            self::FAVORITE_PETS_NAME,
            self::FAVORITE_MOVIE,
            self::ANNIVERSARY,
            self::FATHER_MIDDLE_NAME,
            self::SPOUSE_MIDDLE_NAME,
            self::FIRST_CHILD_MIDDLE_NAME,
            self::HIGH_SCHOOL_NAME,
            self::FAVORITE_TEACHER_NAME,
            self::FAVORITE_SPORTS_TEAM
        ];
    }
}
