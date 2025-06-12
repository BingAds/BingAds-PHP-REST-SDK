<?php
/**
*
* PHP version 7.4
*
* @category Class
* @package  Microsoft\MsAds\Rest\Auth
* @author   Microsoft Advertising
*/

namespace Microsoft\MsAds\Rest\Auth;

/**
 * The abstract base class for all OAuth authentication classes.
 */
abstract class OAuthAuthorization extends Authentication
{
    /**
     * The client identifier corresponding to your registered application.
     */
    public string $ClientId = '';

    /**
     * Contains information about OAuth access tokens received from the Microsoft Account authorization service.
     */
    public OAuthTokens $OAuthTokens;

    /**
     * The URI to which the user of the app will be redirected after receiving user consent.
     */
    public string $RedirectUri = '';

    /**
     * The ApiEnvironment used for the respective authorization URIs. The default is production.
     */
    public string $Environment = ApiEnvironment::PRODUCTION;

    /**
     * Determines the scope used for OAuth authorization .
     */
    public string $OAuthScope = OAuthScope::MSADS_MANAGE;

    /**
     * Optional custom AAD tenant for MS Identity in production.
     */
    public string $Tenant = "common";

    public function __construct()
    {
    }

    /**
     * Includes the client ID.
     *
     * @param  string  $clientId
     * @return OAuthAuthorization this builder
     */
    public function withClientId(string $clientId): OAuthAuthorization
    {
        $this->ClientId = $clientId;
        return $this;
    }

    /**
     * Includes the redirect URI.
     *
     * @param  string  $redirectUri
     * @return OAuthAuthorization this builder
     */
    public function withRedirectUri(string $redirectUri): OAuthAuthorization
    {
        $this->RedirectUri = $redirectUri;
        return $this;
    }

    /**
     * Includes the refresh token.
     *
     * @param  string  $refreshToken
     * @return OAuthAuthorization this builder
     */
    public function withRefreshToken(string $refreshToken): OAuthAuthorization
    {
        $this->OAuthTokens = (new OAuthTokens())->withRefreshToken($refreshToken);
        return $this;
    }

    /**
     * Includes the OAuth tokens.
     *
     * @param  OAuthTokens  $oauthTokens
     * @return OAuthAuthorization this builder
     */
    public function withOAuthTokens(OAuthTokens $oauthTokens): OAuthAuthorization
    {
        $this->OAuthTokens = $oauthTokens;
        return $this;
    }

    /**
     * Includes the environment.
     *
     * @param  string  $environment
     * @return OAuthAuthorization this builder
     */
    public function withEnvironment(string $environment): OAuthAuthorization
    {
        $this->Environment = $environment;
        $this->RedirectUri = UriOAuthService::GetRedirectUrl($environment, $this->OAuthScope);
        return $this;
    }

    /**
     * Includes the OAuthScope.
     *
     * @param  string  $oauthScope
     * @return OAuthAuthorization this builder
     */
    public function withOAuthScope(string $oauthScope): OAuthAuthorization
    {
        $this->OAuthScope = $oauthScope;
        $this->RedirectUri = UriOAuthService::GetRedirectUrl($this->Environment, $oauthScope);
        return $this;
    }

    /**
     * Includes the Tenant flag.
     *
     * @param  string  $tenant
     * @return OAuthAuthorization this builder
     */
    public function withTenant(string $tenant): OAuthAuthorization
    {
        $this->Tenant = $tenant;
        return $this;
    }

    /**
     * Implementations of this abstract method will get the Microsoft Account authorization endpoint
     * where the user should be navigated to give their consent.
     */
    abstract public function GetAuthorizationEndpoint();
}

