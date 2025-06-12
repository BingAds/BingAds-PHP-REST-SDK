<?php
/**
 * LanguageName
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

class LanguageName
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const ALBANIAN = 'Albanian';

    public const ARABIC = 'Arabic';

    public const BULGARIAN = 'Bulgarian';

    public const TRADITIONAL_CHINESE = 'TraditionalChinese';

    public const CROATIAN = 'Croatian';

    public const CZECH = 'Czech';

    public const DANISH = 'Danish';

    public const DUTCH = 'Dutch';

    public const ENGLISH = 'English';

    public const ESTONIAN = 'Estonian';

    public const FINNISH = 'Finnish';

    public const FRENCH = 'French';

    public const GERMAN = 'German';

    public const GREEK = 'Greek';

    public const HEBREW = 'Hebrew';

    public const HINDI = 'Hindi';

    public const HUNGARIAN = 'Hungarian';

    public const ICELANDIC = 'Icelandic';

    public const INDONESIAN = 'Indonesian';

    public const ITALIAN = 'Italian';

    public const JAPANESE = 'Japanese';

    public const KOREAN = 'Korean';

    public const LATVIAN = 'Latvian';

    public const LITHUANIAN = 'Lithuanian';

    public const MACEDONIAN = 'Macedonian';

    public const MALAY = 'Malay';

    public const MALTESE = 'Maltese';

    public const NORWEGIAN = 'Norwegian';

    public const POLISH = 'Polish';

    public const PORTUGUESE = 'Portuguese';

    public const ROMANIAN = 'Romanian';

    public const RUSSIAN = 'Russian';

    public const SERBIAN = 'Serbian';

    public const SLOVAK = 'Slovak';

    public const SLOVENIAN = 'Slovenian';

    public const SPANISH = 'Spanish';

    public const SWEDISH = 'Swedish';

    public const TAGALOG = 'Tagalog';

    public const THAI = 'Thai';

    public const TURKISH = 'Turkish';

    public const VIETNAMESE = 'Vietnamese';

    public const SIMPLIFIED_CHINESE = 'SimplifiedChinese';

    public const BOSNIAN = 'Bosnian';

    public const ALL = 'All';


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
            self::ALBANIAN,
            self::ARABIC,
            self::BULGARIAN,
            self::TRADITIONAL_CHINESE,
            self::CROATIAN,
            self::CZECH,
            self::DANISH,
            self::DUTCH,
            self::ENGLISH,
            self::ESTONIAN,
            self::FINNISH,
            self::FRENCH,
            self::GERMAN,
            self::GREEK,
            self::HEBREW,
            self::HINDI,
            self::HUNGARIAN,
            self::ICELANDIC,
            self::INDONESIAN,
            self::ITALIAN,
            self::JAPANESE,
            self::KOREAN,
            self::LATVIAN,
            self::LITHUANIAN,
            self::MACEDONIAN,
            self::MALAY,
            self::MALTESE,
            self::NORWEGIAN,
            self::POLISH,
            self::PORTUGUESE,
            self::ROMANIAN,
            self::RUSSIAN,
            self::SERBIAN,
            self::SLOVAK,
            self::SLOVENIAN,
            self::SPANISH,
            self::SWEDISH,
            self::TAGALOG,
            self::THAI,
            self::TURKISH,
            self::VIETNAMESE,
            self::SIMPLIFIED_CHINESE,
            self::BOSNIAN,
            self::ALL
        ];
    }
}
