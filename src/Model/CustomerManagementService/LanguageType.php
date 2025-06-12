<?php
/**
 * LanguageType
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

class LanguageType
{
    /**
     * Possible values of this enum
     */
    public const DANISH = 'Danish';

    public const DUTCH = 'Dutch';

    public const ENGLISH = 'English';

    public const FINNISH = 'Finnish';

    public const FRENCH = 'French';

    public const GERMAN = 'German';

    public const ITALIAN = 'Italian';

    public const JAPANESE = 'Japanese';

    public const NORWEGIAN = 'Norwegian';

    public const PORTUGUESE = 'Portuguese';

    public const SWEDISH = 'Swedish';

    public const SPANISH = 'Spanish';

    public const ARABIC = 'Arabic';

    public const HEBREW = 'Hebrew';

    public const KOREAN = 'Korean';

    public const RUSSIAN = 'Russian';

    public const TRADITIONAL_CHINESE = 'TraditionalChinese';

    public const SIMPLIFIED_CHINESE = 'SimplifiedChinese';

    public const THAI = 'Thai';

    public const TURKISH = 'Turkish';

    public const FILIPINO = 'Filipino';

    public const INDONESIAN = 'Indonesian';

    public const POLISH = 'Polish';

    public const VIETNAMESE = 'Vietnamese';

    public const MALAY = 'Malay';

    public const UKRAINIAN = 'Ukrainian';

    public const CZECH = 'Czech';

    public const ROMANIAN = 'Romanian';

    public const GREEK = 'Greek';

    public const HUNGARIAN = 'Hungarian';

    public const HINDI = 'Hindi';

    public const BULGARIAN = 'Bulgarian';

    public const LITHUANIAN = 'Lithuanian';

    public const CROATIAN = 'Croatian';

    public const LATVIAN = 'Latvian';

    public const SLOVENIAN = 'Slovenian';


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
            self::DANISH,
            self::DUTCH,
            self::ENGLISH,
            self::FINNISH,
            self::FRENCH,
            self::GERMAN,
            self::ITALIAN,
            self::JAPANESE,
            self::NORWEGIAN,
            self::PORTUGUESE,
            self::SWEDISH,
            self::SPANISH,
            self::ARABIC,
            self::HEBREW,
            self::KOREAN,
            self::RUSSIAN,
            self::TRADITIONAL_CHINESE,
            self::SIMPLIFIED_CHINESE,
            self::THAI,
            self::TURKISH,
            self::FILIPINO,
            self::INDONESIAN,
            self::POLISH,
            self::VIETNAMESE,
            self::MALAY,
            self::UKRAINIAN,
            self::CZECH,
            self::ROMANIAN,
            self::GREEK,
            self::HUNGARIAN,
            self::HINDI,
            self::BULGARIAN,
            self::LITHUANIAN,
            self::CROATIAN,
            self::LATVIAN,
            self::SLOVENIAN
        ];
    }
}
