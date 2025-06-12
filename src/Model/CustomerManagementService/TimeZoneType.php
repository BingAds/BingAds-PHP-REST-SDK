<?php
/**
 * TimeZoneType
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

class TimeZoneType
{
    /**
     * Possible values of this enum
     */
    public const NUKUALOFA = 'Nukualofa';

    public const FIJI_KAMCHATKA_MARSHALL_ISLAND = 'FijiKamchatkaMarshallIsland';

    public const AUCKLAND_WELLINGTON = 'AucklandWellington';

    public const SOLOMON_ISLAND_NEW_CALEDONIA = 'SolomonIslandNewCaledonia';

    public const VLADIVOSTOK = 'Vladivostok';

    public const HOBART = 'Hobart';

    public const GUAM_PORT_MORESBY = 'GuamPortMoresby';

    public const CANBERRA_MELBOURNE_SYDNEY = 'CanberraMelbourneSydney';

    public const BRISBANE = 'Brisbane';

    public const DARWIN = 'Darwin';

    public const ADELAIDE = 'Adelaide';

    public const YAKUTSK = 'Yakutsk';

    public const SEOUL = 'Seoul';

    public const OSAKA_SAPPORO_TOKYO = 'OsakaSapporoTokyo';

    public const TAIPEI = 'Taipei';

    public const PERTH = 'Perth';

    public const KUALA_LUMPUR_SINGAPORE = 'KualaLumpurSingapore';

    public const IRKUTSK_ULAAN_BATAAR = 'IrkutskUlaanBataar';

    public const BEIJING_CHONGQING_HONG_KONG_URUMQI = 'BeijingChongqingHongKongUrumqi';

    public const KRASNOYARSK = 'Krasnoyarsk';

    public const BANGKOK_HANOI_JAKARTA = 'BangkokHanoiJakarta';

    public const RANGOON = 'Rangoon';

    public const SRI_JAYAWARDENEPURA = 'SriJayawardenepura';

    public const ASTANA_DHAKA = 'AstanaDhaka';

    public const ALMATY_NOVOSIBIRSK = 'AlmatyNovosibirsk';

    public const KATHMANDU = 'Kathmandu';

    public const CHENNAI_KOLKATA_MUMBAI_NEW_DELHI = 'ChennaiKolkataMumbaiNewDelhi';

    public const ISLAMABAD_KARACHI_TASHKENT = 'IslamabadKarachiTashkent';

    public const EKATERINBURG = 'Ekaterinburg';

    public const KABUL = 'Kabul';

    public const BAKU_TBILISI_YEREVAN = 'BakuTbilisiYerevan';

    public const ABU_DHABI_MUSCAT = 'AbuDhabiMuscat';

    public const TEHRAN = 'Tehran';

    public const NAIROBI = 'Nairobi';

    public const MOSCOW_ST_PETERSBURG_VOLGOGRAD = 'MoscowStPetersburgVolgograd';

    public const KUWAIT_RIYADH = 'KuwaitRiyadh';

    public const BAGHDAD = 'Baghdad';

    public const JERUSALEM = 'Jerusalem';

    public const HELSINKI_KYIV_RIGA_SOFIA_TALLINN_VILNIUS = 'HelsinkiKyivRigaSofiaTallinnVilnius';

    public const HARARE_PRETORIA = 'HararePretoria';

    public const CAIRO = 'Cairo';

    public const BUCHAREST = 'Bucharest';

    public const ATHENS_BUCKAREST_ISTANBUL = 'AthensBuckarestIstanbul';

    public const WEST_CENTRAL_AFRICA = 'WestCentralAfrica';

    public const SARAJEVO_SKOPJE_WARSAW_ZAGREB = 'SarajevoSkopjeWarsawZagreb';

    public const BRUSSELS_COPENHAGEN_MADRID_PARIS = 'BrusselsCopenhagenMadridParis';

    public const BELGRADE_BRATISLAVA_BUDAPEST_LJUBLJANA_PRAGUE = 'BelgradeBratislavaBudapestLjubljanaPrague';

    public const AMSTERDAM_BERLIN_BERN_ROME_STOCKHOLM_VIENNA = 'AmsterdamBerlinBernRomeStockholmVienna';

    public const CASABLANCA_MONROVIA = 'CasablancaMonrovia';

    public const GREENWICH_MEAN_TIME_DUBLIN_EDINBURGH_LISBON_LONDON = 'GreenwichMeanTimeDublinEdinburghLisbonLondon';

    public const AZORES = 'Azores';

    public const CAPE_VERDE_ISLAND = 'CapeVerdeIsland';

    public const MID_ATLANTIC = 'MidAtlantic';

    public const BRASILIA = 'Brasilia';

    public const BUENOS_AIRES_GEORGETOWN = 'BuenosAiresGeorgetown';

    public const GREENLAND = 'Greenland';

    public const NEWFOUNDLAND = 'Newfoundland';

    public const ATLANTIC_TIME_CANADA = 'AtlanticTimeCanada';

    public const CARACAS_LA_PAZ = 'CaracasLaPaz';

    public const SANTIAGO = 'Santiago';

    public const BOGOTA_LIMA_QUITO = 'BogotaLimaQuito';

    public const EASTERN_TIME_US_CANADA = 'EasternTimeUSCanada';

    public const INDIANA_EAST = 'IndianaEast';

    public const CENTRAL_AMERICA = 'CentralAmerica';

    public const CENTRAL_TIME_US_CANADA = 'CentralTimeUSCanada';

    public const GUADALAJARA_MEXICO_CITY_MONTERREY = 'GuadalajaraMexicoCityMonterrey';

    public const SASKATCHEWAN = 'Saskatchewan';

    public const ARIZONA = 'Arizona';

    public const CHIHUAHUA_LA_PAZ_MAZATLAN = 'ChihuahuaLaPazMazatlan';

    public const MOUNTAIN_TIME_US_CANADA = 'MountainTimeUSCanada';

    public const PACIFIC_TIME_US_CANADA_TIJUANA = 'PacificTimeUSCanadaTijuana';

    public const ALASKA = 'Alaska';

    public const HAWAII = 'Hawaii';

    public const MIDWAY_ISLAND_AND_SAMOA = 'MidwayIslandAndSamoa';

    public const INTERNATIONAL_DATE_LINE_WEST = 'InternationalDateLineWest';


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
            self::NUKUALOFA,
            self::FIJI_KAMCHATKA_MARSHALL_ISLAND,
            self::AUCKLAND_WELLINGTON,
            self::SOLOMON_ISLAND_NEW_CALEDONIA,
            self::VLADIVOSTOK,
            self::HOBART,
            self::GUAM_PORT_MORESBY,
            self::CANBERRA_MELBOURNE_SYDNEY,
            self::BRISBANE,
            self::DARWIN,
            self::ADELAIDE,
            self::YAKUTSK,
            self::SEOUL,
            self::OSAKA_SAPPORO_TOKYO,
            self::TAIPEI,
            self::PERTH,
            self::KUALA_LUMPUR_SINGAPORE,
            self::IRKUTSK_ULAAN_BATAAR,
            self::BEIJING_CHONGQING_HONG_KONG_URUMQI,
            self::KRASNOYARSK,
            self::BANGKOK_HANOI_JAKARTA,
            self::RANGOON,
            self::SRI_JAYAWARDENEPURA,
            self::ASTANA_DHAKA,
            self::ALMATY_NOVOSIBIRSK,
            self::KATHMANDU,
            self::CHENNAI_KOLKATA_MUMBAI_NEW_DELHI,
            self::ISLAMABAD_KARACHI_TASHKENT,
            self::EKATERINBURG,
            self::KABUL,
            self::BAKU_TBILISI_YEREVAN,
            self::ABU_DHABI_MUSCAT,
            self::TEHRAN,
            self::NAIROBI,
            self::MOSCOW_ST_PETERSBURG_VOLGOGRAD,
            self::KUWAIT_RIYADH,
            self::BAGHDAD,
            self::JERUSALEM,
            self::HELSINKI_KYIV_RIGA_SOFIA_TALLINN_VILNIUS,
            self::HARARE_PRETORIA,
            self::CAIRO,
            self::BUCHAREST,
            self::ATHENS_BUCKAREST_ISTANBUL,
            self::WEST_CENTRAL_AFRICA,
            self::SARAJEVO_SKOPJE_WARSAW_ZAGREB,
            self::BRUSSELS_COPENHAGEN_MADRID_PARIS,
            self::BELGRADE_BRATISLAVA_BUDAPEST_LJUBLJANA_PRAGUE,
            self::AMSTERDAM_BERLIN_BERN_ROME_STOCKHOLM_VIENNA,
            self::CASABLANCA_MONROVIA,
            self::GREENWICH_MEAN_TIME_DUBLIN_EDINBURGH_LISBON_LONDON,
            self::AZORES,
            self::CAPE_VERDE_ISLAND,
            self::MID_ATLANTIC,
            self::BRASILIA,
            self::BUENOS_AIRES_GEORGETOWN,
            self::GREENLAND,
            self::NEWFOUNDLAND,
            self::ATLANTIC_TIME_CANADA,
            self::CARACAS_LA_PAZ,
            self::SANTIAGO,
            self::BOGOTA_LIMA_QUITO,
            self::EASTERN_TIME_US_CANADA,
            self::INDIANA_EAST,
            self::CENTRAL_AMERICA,
            self::CENTRAL_TIME_US_CANADA,
            self::GUADALAJARA_MEXICO_CITY_MONTERREY,
            self::SASKATCHEWAN,
            self::ARIZONA,
            self::CHIHUAHUA_LA_PAZ_MAZATLAN,
            self::MOUNTAIN_TIME_US_CANADA,
            self::PACIFIC_TIME_US_CANADA_TIJUANA,
            self::ALASKA,
            self::HAWAII,
            self::MIDWAY_ISLAND_AND_SAMOA,
            self::INTERNATIONAL_DATE_LINE_WEST
        ];
    }
}
