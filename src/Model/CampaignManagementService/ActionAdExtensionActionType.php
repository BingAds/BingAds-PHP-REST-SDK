<?php
/**
 * ActionAdExtensionActionType
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

class ActionAdExtensionActionType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const ACT_NOW = 'ActNow';

    public const APPLY_NOW = 'ApplyNow';

    public const BET_NOW = 'BetNow';

    public const BID_NOW = 'BidNow';

    public const BOOK_A_CAR = 'BookACar';

    public const BOOK_HOTEL = 'BookHotel';

    public const BOOK_NOW = 'BookNow';

    public const BROWSE = 'Browse';

    public const BUY_NOW = 'BuyNow';

    public const CHAT_NOW = 'ChatNow';

    public const COMPARE = 'Compare';

    public const CONTACT_US = 'ContactUs';

    public const COUPON = 'Coupon';

    public const DONATE = 'Donate';

    public const DOWNLOAD = 'Download';

    public const EMAIL_NOW = 'EmailNow';

    public const ENROLL_NOW = 'EnrollNow';

    public const EXPLORE = 'Explore';

    public const FILE_NOW = 'FileNow';

    public const FIND_JOB = 'FindJob';

    public const FREE_PLAY = 'FreePlay';

    public const FREE_QUOTE = 'FreeQuote';

    public const FREE_TRIAL = 'FreeTrial';

    public const GET_DEALS = 'GetDeals';

    public const GET_OFFER = 'GetOffer';

    public const GET_QUOTE = 'GetQuote';

    public const JOIN_NOW = 'JoinNow';

    public const LEARN_MORE = 'LearnMore';

    public const LISTEN_NOW = 'ListenNow';

    public const LOG_IN = 'LogIn';

    public const MESSAGE = 'Message';

    public const NEW_CARS = 'NewCars';

    public const ORDER_NOW = 'OrderNow';

    public const PLAY_GAME = 'PlayGame';

    public const PLAY_NOW = 'PlayNow';

    public const POST_JOB = 'PostJob';

    public const REGISTER = 'Register';

    public const RENT_A_CAR = 'RentACar';

    public const RENT_NOW = 'RentNow';

    public const RESERVE = 'Reserve';

    public const SALE = 'Sale';

    public const SAVE_NOW = 'SaveNow';

    public const SCHEDULE = 'Schedule';

    public const SEE_MENU = 'SeeMenu';

    public const SEE_MORE = 'SeeMore';

    public const SEE_OFFER = 'SeeOffer';

    public const SELL_NOW = 'SellNow';

    public const SHOP_NOW = 'ShopNow';

    public const SHOWTIMES = 'Showtimes';

    public const SIGN_IN = 'SignIn';

    public const SIGN_UP = 'SignUp';

    public const START_FREE = 'StartFree';

    public const START_NOW = 'StartNow';

    public const SUBSCRIBE = 'Subscribe';

    public const TEST_DRIVE = 'TestDrive';

    public const TRY_NOW = 'TryNow';

    public const USED_CARS = 'UsedCars';

    public const VIEW_CARS = 'ViewCars';

    public const VIEW_NOW = 'ViewNow';

    public const VIEW_PLANS = 'ViewPlans';

    public const VISIT_SITE = 'VisitSite';

    public const VOTE_NOW = 'VoteNow';

    public const WATCH = 'Watch';

    public const WATCH_MORE = 'WatchMore';

    public const WATCH_NOW = 'WatchNow';

    public const DIRECTIONS = 'Directions';

    public const FIND_STORE = 'FindStore';

    public const SWITCH_NOW = 'SwitchNow';

    public const VISIT_STORE = 'VisitStore';

    public const RENEW_NOW = 'RenewNow';

    public const REORDER = 'Reorder';

    public const BUILD_NOW = 'BuildNow';

    public const DEALERS = 'Dealers';

    public const GET_DEMO = 'GetDemo';

    public const GET_NOW = 'GetNow';

    public const GO_TO_DEMO = 'GoToDemo';

    public const SEE_DEMO = 'SeeDemo';

    public const SEE_MODELS = 'SeeModels';

    public const SEE_OFFERS = 'SeeOffers';

    public const VIEW_DEMO = 'ViewDemo';


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
            self::ACT_NOW,
            self::APPLY_NOW,
            self::BET_NOW,
            self::BID_NOW,
            self::BOOK_A_CAR,
            self::BOOK_HOTEL,
            self::BOOK_NOW,
            self::BROWSE,
            self::BUY_NOW,
            self::CHAT_NOW,
            self::COMPARE,
            self::CONTACT_US,
            self::COUPON,
            self::DONATE,
            self::DOWNLOAD,
            self::EMAIL_NOW,
            self::ENROLL_NOW,
            self::EXPLORE,
            self::FILE_NOW,
            self::FIND_JOB,
            self::FREE_PLAY,
            self::FREE_QUOTE,
            self::FREE_TRIAL,
            self::GET_DEALS,
            self::GET_OFFER,
            self::GET_QUOTE,
            self::JOIN_NOW,
            self::LEARN_MORE,
            self::LISTEN_NOW,
            self::LOG_IN,
            self::MESSAGE,
            self::NEW_CARS,
            self::ORDER_NOW,
            self::PLAY_GAME,
            self::PLAY_NOW,
            self::POST_JOB,
            self::REGISTER,
            self::RENT_A_CAR,
            self::RENT_NOW,
            self::RESERVE,
            self::SALE,
            self::SAVE_NOW,
            self::SCHEDULE,
            self::SEE_MENU,
            self::SEE_MORE,
            self::SEE_OFFER,
            self::SELL_NOW,
            self::SHOP_NOW,
            self::SHOWTIMES,
            self::SIGN_IN,
            self::SIGN_UP,
            self::START_FREE,
            self::START_NOW,
            self::SUBSCRIBE,
            self::TEST_DRIVE,
            self::TRY_NOW,
            self::USED_CARS,
            self::VIEW_CARS,
            self::VIEW_NOW,
            self::VIEW_PLANS,
            self::VISIT_SITE,
            self::VOTE_NOW,
            self::WATCH,
            self::WATCH_MORE,
            self::WATCH_NOW,
            self::DIRECTIONS,
            self::FIND_STORE,
            self::SWITCH_NOW,
            self::VISIT_STORE,
            self::RENEW_NOW,
            self::REORDER,
            self::BUILD_NOW,
            self::DEALERS,
            self::GET_DEMO,
            self::GET_NOW,
            self::GO_TO_DEMO,
            self::SEE_DEMO,
            self::SEE_MODELS,
            self::SEE_OFFERS,
            self::VIEW_DEMO
        ];
    }
}
