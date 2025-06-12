<?php
/**
 * VanityPharmaWebsiteDescription
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

class VanityPharmaWebsiteDescription
{
    /**
     * Possible values of this enum
     */
    public const UNSPECIFIED = 'Unspecified';

    public const PRESCRIPTION_TREATMENT_WEBSITE_EN = 'PrescriptionTreatmentWebsite_En';

    public const PRESCRIPTION_TREATMENT_WEBSITE_ES = 'PrescriptionTreatmentWebsite_Es';

    public const PRESCRIPTION_DEVICE_WEBSITE_EN = 'PrescriptionDeviceWebsite_En';

    public const PRESCRIPTION_DEVICE_WEBSITE_ES = 'PrescriptionDeviceWebsite_Es';

    public const MEDICAL_DEVICE_WEBSITE_EN = 'MedicalDeviceWebsite_En';

    public const MEDICAL_DEVICE_WEBSITE_ES = 'MedicalDeviceWebsite_Es';

    public const PREVENTATIVE_TREATMENT_WEBSITE_EN = 'PreventativeTreatmentWebsite_En';

    public const PREVENTATIVE_TREATMENT_WEBSITE_ES = 'PreventativeTreatmentWebsite_Es';

    public const PRESCRIPTION_CONTRACEPTION_WEBSITE_EN = 'PrescriptionContraceptionWebsite_En';

    public const PRESCRIPTION_CONTRACEPTION_WEBSITE_ES = 'PrescriptionContraceptionWebsite_Es';

    public const PRESCRIPTION_VACCINE_WEBSITE_EN = 'PrescriptionVaccineWebsite_En';

    public const PRESCRIPTION_VACCINE_WEBSITE_ES = 'PrescriptionVaccineWebsite_Es';


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
            self::UNSPECIFIED,
            self::PRESCRIPTION_TREATMENT_WEBSITE_EN,
            self::PRESCRIPTION_TREATMENT_WEBSITE_ES,
            self::PRESCRIPTION_DEVICE_WEBSITE_EN,
            self::PRESCRIPTION_DEVICE_WEBSITE_ES,
            self::MEDICAL_DEVICE_WEBSITE_EN,
            self::MEDICAL_DEVICE_WEBSITE_ES,
            self::PREVENTATIVE_TREATMENT_WEBSITE_EN,
            self::PREVENTATIVE_TREATMENT_WEBSITE_ES,
            self::PRESCRIPTION_CONTRACEPTION_WEBSITE_EN,
            self::PRESCRIPTION_CONTRACEPTION_WEBSITE_ES,
            self::PRESCRIPTION_VACCINE_WEBSITE_EN,
            self::PRESCRIPTION_VACCINE_WEBSITE_ES
        ];
    }
}
