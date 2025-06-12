<?php
/**
 * ProductMatchCountReportColumn
 * ReportingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest\Model\ReportingService
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest\Model\ReportingService;
use Microsoft\MsAds\Rest\ObjectSerializer;
use Microsoft\MsAds\Rest\ModelInterface;

class ProductMatchCountReportColumn
{
    /**
     * Possible values of this enum
     */
    public const CUSTOMER_ID = 'CustomerId';

    public const CUSTOMER_NAME = 'CustomerName';

    public const ACCOUNT_ID = 'AccountId';

    public const ACCOUNT_NUMBER = 'AccountNumber';

    public const ACCOUNT_NAME = 'AccountName';

    public const CAMPAIGN_ID = 'CampaignId';

    public const CAMPAIGN_NAME = 'CampaignName';

    public const AD_GROUP_ID = 'AdGroupId';

    public const AD_GROUP_NAME = 'AdGroupName';

    public const PRODUCT_GROUP = 'ProductGroup';

    public const PARTITION_TYPE = 'PartitionType';

    public const AD_GROUP_CRITERION_ID = 'AdGroupCriterionId';

    public const MATCHED_PRODUCTS_AT_CAMPAIGN = 'MatchedProductsAtCampaign';

    public const MATCHED_PRODUCTS_AT_AD_GROUP = 'MatchedProductsAtAdGroup';

    public const MATCHED_PRODUCTS_AT_PRODUCT_GROUP = 'MatchedProductsAtProductGroup';

    public const CAMPAIGN_TYPE = 'CampaignType';

    public const ASSET_GROUP_ID = 'AssetGroupId';

    public const ASSET_GROUP_NAME = 'AssetGroupName';


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
            self::CUSTOMER_ID,
            self::CUSTOMER_NAME,
            self::ACCOUNT_ID,
            self::ACCOUNT_NUMBER,
            self::ACCOUNT_NAME,
            self::CAMPAIGN_ID,
            self::CAMPAIGN_NAME,
            self::AD_GROUP_ID,
            self::AD_GROUP_NAME,
            self::PRODUCT_GROUP,
            self::PARTITION_TYPE,
            self::AD_GROUP_CRITERION_ID,
            self::MATCHED_PRODUCTS_AT_CAMPAIGN,
            self::MATCHED_PRODUCTS_AT_AD_GROUP,
            self::MATCHED_PRODUCTS_AT_PRODUCT_GROUP,
            self::CAMPAIGN_TYPE,
            self::ASSET_GROUP_ID,
            self::ASSET_GROUP_NAME
        ];
    }
}
