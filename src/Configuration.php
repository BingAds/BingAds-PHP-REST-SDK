<?php
/**
 * Configuration
 * PHP version 7.4
 *
 * @category Class
 * @package  Microsoft\MsAds\Rest
 * @author   Microsoft Advertising
 */

namespace Microsoft\MsAds\Rest;

use InvalidArgumentException;
use Microsoft\MsAds\Rest\Auth\ApiEnvironment;
use Microsoft\MsAds\Rest\Auth\AuthorizationData;
use Microsoft\MsAds\Rest\Auth\OAuthDesktopMobileAuthCodeGrant;
use Microsoft\MsAds\Rest\Auth\OAuthDesktopMobileImplicitGrant;
use Microsoft\MsAds\Rest\Auth\OAuthWebAuthCodeGrant;
use Microsoft\MsAds\Rest\Auth\PasswordAuthentication;
use Microsoft\MsAds\Rest\Auth\ServiceClientType;

class Configuration
{
    public const BOOLEAN_FORMAT_INT = 'int';
    public const BOOLEAN_FORMAT_STRING = 'string';

    /**
     * @var ?Configuration
     */
    private static ?Configuration $defaultConfiguration = null;

    /**
     * Associate array to store API key(s)
     * Available for authentication scheme:
     * Authorization
     * UserName
     * Password
     * CustomerAccountId
     * CustomerId
     * DeveloperToken
     * @var string[]
     */
    protected array $apiKeys = [];

    /**
     * The authorization data
     *
     * @var AuthorizationData
     */
    protected static AuthorizationData $authorizationData;

    /**
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected array $apiKeyPrefixes = [];

    /**
     * Access token for OAuth/Bearer authentication
     *
     * @var string
     */
    protected string $accessToken = '';

    /**
     * Boolean format for query string
     *
     * @var string
     */
    protected string $booleanFormatForQueryString = self::BOOLEAN_FORMAT_INT;

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected string $username = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected string $password = '';

    /**
     * The hostSettings
     *
     * @var array
     */
    protected array $hostSettings =
    [
        ApiEnvironment::SANDBOX => [
            ServiceClientType::AD_INSIGHT => ['url' => 'https://adinsight.api.sandbox.bingads.microsoft.com'],
            ServiceClientType::CAMPAIGN_MANAGEMENT => ['url' => 'https://campaign.api.sandbox.bingads.microsoft.com'],
            ServiceClientType::BULK => ['url' => 'https://bulk.api.sandbox.bingads.microsoft.com'],
            ServiceClientType::CUSTOMER_BILLING => ['url' => 'https://clientcenter.api.sandbox.bingads.microsoft.com'],
            ServiceClientType::CUSTOMER_MANAGEMENT => ['url' => 'https://clientcenter.api.sandbox.bingads.microsoft.com'],
            ServiceClientType::REPORTING => ['url' => 'https://reporting.api.sandbox.bingads.microsoft.com']
        ],
        ApiEnvironment::PRODUCTION => [
            ServiceClientType::AD_INSIGHT => ['url' => 'https://adinsight.api.bingads.microsoft.com'],
            ServiceClientType::CAMPAIGN_MANAGEMENT => ['url' => 'https://campaign.api.bingads.microsoft.com'],
            ServiceClientType::BULK => ['url' => 'https://bulk.api.bingads.microsoft.com'],
            ServiceClientType::CUSTOMER_BILLING => ['url' => 'https://clientcenter.api.bingads.microsoft.com'],
            ServiceClientType::CUSTOMER_MANAGEMENT => ['url' => 'https://clientcenter.api.bingads.microsoft.com'],
            ServiceClientType::REPORTING => ['url' => 'https://reporting.api.bingads.microsoft.com']
        ],
    ];

    /**
     * User agent of the HTTP request, set to "BingAdsSDKPHP.RestApi 13.0.24.1" by default
     *
     * @var string
     */
    protected string $userAgent = 'BingAdsSDKPHP.RestApi 13.0.24.1 ' . PHP_VERSION;

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected bool $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected string $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected string $tempFolderPath;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    /**
     * Sets the authorization data
     *
     * @param  AuthorizationData  $authorizationData  The authorization data
     *
     * @return $this
     */
    public function setAuthorizationData(AuthorizationData $authorizationData): Configuration
    {
        self::$authorizationData = $authorizationData;
        self::refreshAuthorizationData();
        return $this;
    }

    /**
     * Refreshes the authorization data
     */
    public function refreshAuthorizationData(): void
    {
        if(isset(self::$authorizationData->Authentication))
        {
            $authentication = self::$authorizationData->Authentication;
            if($authentication instanceof PasswordAuthentication)
            {
                $this->username = $authentication->UserName;
                $this->password = $authentication->Password;
                $this->setApiKey('UserName', $this->username);
                $this->setApiKey('Password', $this->password);
            }
            elseif($authentication instanceof OAuthWebAuthCodeGrant ||
                $authentication instanceof OAuthDesktopMobileAuthCodeGrant ||
                $authentication instanceof OAuthDesktopMobileImplicitGrant)
            {
                if(isset($authentication->OAuthTokens)){
                    $this->accessToken = $authentication->OAuthTokens->AccessToken;
                    $this->setApiKey('Authorization', $this->accessToken);
                    $this->setApiKeyPrefix('Authorization', 'Bearer');
                }
            }
        }

        if (empty(self::$authorizationData->AccountId) ||
            empty(self::$authorizationData->CustomerId) ||
            empty(self::$authorizationData->DeveloperToken)) {
            throw new InvalidArgumentException('Authorization data must contain AccountId, CustomerId, and DeveloperToken.');
        }

        $this->setApiKey('CustomerAccountId', self::$authorizationData->AccountId);
        $this->setApiKey('CustomerId', self::$authorizationData->CustomerId);
        $this->setApiKey('DeveloperToken', self::$authorizationData->DeveloperToken);
    }

    /**
     * Gets the authorization data
     *
     * @return AuthorizationData
     */
    public function getAuthorizationData(): AuthorizationData
    {
        return self::$authorizationData;
    }

    /**
     * Sets API key
     *
     * @param  string  $apiKeyIdentifier API key identifier (authentication scheme)
     * @param  string  $key              API key or token
     *
     * @return $this
     */
    public function setApiKey(string $apiKeyIdentifier, string $key): Configuration
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }

    /**
     * Sets API keys
     *
     * @param  array  $apiKeys API key(s) or token(s)
     *
     * @return $this
     */
    public function setApiKeys(array $apiKeys): Configuration
    {
        foreach ($apiKeys as $key => $value) {
            $this->setApiKey($key, $value);
        }
        return $this;
    }

    /**
     * Gets API key
     *
     * @param  string  $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return null|string API key or token
     */
    public function getApiKey(string $apiKeyIdentifier): ?string
    {
        return $this->apiKeys[$apiKeyIdentifier] ?? null;
    }

    /**
     * Gets API keys
     *
     * @return array API key(s) or token(s)
     */
    public function getApiKeys(): array
    {
        return $this->apiKeys;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param  string  $apiKeyIdentifier API key identifier (authentication scheme)
     * @param  string  $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiKeyPrefix(string $apiKeyIdentifier, string $prefix): Configuration
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }

    /**
     * Gets API key prefix
     *
     * @param  string  $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return null|string
     */
    public function getApiKeyPrefix(string $apiKeyIdentifier): ?string
    {
        return $this->apiKeyPrefixes[$apiKeyIdentifier] ?? null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param  string  $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken(string $accessToken): Configuration
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * Sets boolean format for query string.
     *
     * @param string $booleanFormat Boolean format for query string
     *
     * @return $this
     */
    public function setBooleanFormatForQueryString(string $booleanFormat): Configuration
    {
        $this->booleanFormatForQueryString = $booleanFormat;

        return $this;
    }

    /**
     * Gets boolean format for query string.
     *
     * @return string Boolean format for query string
     */
    public function getBooleanFormatForQueryString(): string
    {
        return $this->booleanFormatForQueryString;
    }

    /**
     * Sets the username for HTTP basic authentication
     *
     * @param  string  $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername(string $username): Configuration
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param  string  $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword(string $password): Configuration
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Gets the host with environment and index
     *
     * @param  string  $hostEnv  Host environment (e.g. Production, Sandbox)
     * @param  string  $hostIndex  Service name (e.g. CampaignManagement, Reporting)
     *
     * @return string
     */
    public function getHost(string $hostEnv, string $hostIndex): string
    {
        return self::getHostString($this->getHostSettings(), $hostEnv, $hostIndex);
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param  bool  $debug Debug flag
     *
     * @return $this
     */
    public function setDebug(bool $debug): Configuration
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug(): bool
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param  string  $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile(string $debugFile): Configuration
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile(): string
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param  string  $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath(string $tempFolderPath): Configuration
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath(): string
    {
        return $this->tempFolderPath;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration(): Configuration
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the default configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport(): string
    {
        $report  = 'PHP SDK (Microsoft\MsAds\Rest) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    The version of the OpenAPI document: 1.0.0' . PHP_EOL;
        $report .= '    SDK Package Version: 13.0.24.1' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Get API key (with prefix if set)
     *
     * @param  string  $apiKeyIdentifier name of apikey
     *
     * @return null|string API key with the prefix
     */
    public function getApiKeyWithPrefix(string $apiKeyIdentifier): ?string
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }

    /**
     * Sets the host settings
     *
     * @param  array  $hostSettings an array of host settings
     *
     * @return $this
     */
    public function setHostSettings(array $hostSettings): Configuration
    {
        $this->hostSettings = $hostSettings;
        return $this;
    }

    /**
     * Returns an array of host settings
     *
     * @return array an array of host settings
     */
    public function getHostSettings(): array
    {
        return $this->hostSettings;
    }

/**
     * Returns URL based on host settings, index and variables
     *
     * @param  array  $hostSettings  array of host settings, generated from getHostSettings() or equivalent from the API clients
     * @param  string  $hostEnv      host environment (e.g. Production, Sandbox)
     * @param  string  $hostIndex    service name (e.g. CampaignManagement, Reporting)
     * @param  array|null  $variables  hash of variable and the corresponding value (optional)
     * @return string URL based on host settings
     */
    public static function getHostString(array $hostSettings, string $hostEnv, string $hostIndex, ?array $variables = null): string
    {
        if (null === $variables) {
            $variables = [];
        }

        if (!array_key_exists($hostEnv, $hostSettings)) {
            throw new InvalidArgumentException("Invalid host environment `$hostEnv` when selecting the host. Must be one of ".join(',', array_keys($hostSettings)));
        }

        $hostSettings = $hostSettings[$hostEnv];
        if (!array_key_exists($hostIndex, $hostSettings)) {
            throw new InvalidArgumentException("Invalid host index `$hostIndex` when selecting the host. Must be one of ".join(',', array_keys($hostSettings)));
        }
        $host = $hostSettings[$hostIndex];
        if (!array_key_exists("url", $host)) {
            throw new InvalidArgumentException("Invalid host settings. Must contain a `url` key.");
        }
        $url = $host["url"];

        // go through variable and assign a value
        foreach ($host["variables"] ?? [] as $name => $variable) {
            if (array_key_exists($name, $variables)) { // check to see if it's in the variables provided by the user
                if (!isset($variable['enum_values']) || in_array($variables[$name], $variable["enum_values"], true)) { // check to see if the value is in the enum
                    $url = str_replace("{".$name."}", $variables[$name], $url);
                } else {
                    throw new InvalidArgumentException("The variable `$name` in the host URL has invalid value ".$variables[$name].". Must be ".join(',', $variable["enum_values"]).".");
                }
            } else {
                // use default value
                $url = str_replace("{".$name."}", $variable["default_value"], $url);
            }
        }

        return $url;
    }

    /**
     * Returns URL based on the index and variables
     *
     * @param  string  $hostEnv    host environment (e.g. Production, Sandbox)
     * @param  string  $hostIndex  service name (e.g. CampaignManagement, Reporting)
     * @param  array|null  $variables  hash of variable and the corresponding value (optional)
     * @return string URL based on host settings
     */
    public function getHostFromSettings(string $hostEnv, string $hostIndex, ?array $variables = null): string
    {
        return self::getHostString($this->getHostSettings(), $hostEnv, $hostIndex, $variables);
    }
}
