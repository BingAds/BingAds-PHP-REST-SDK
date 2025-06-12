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
 * Represents the access_token, refresh_token, and expires_in values returned or sent via the authorization service.
 */
class OAuthTokens
{
    /**
     * Represents the access_token value returned by the authorization service.
     */
    public string $AccessToken = '';

    /**
     * Represents the expires_in value returned by the authorization service.
     */
    public int $AccessTokenExpiresInSeconds = 0;

    /**
     * Represents the refresh_token value returned or sent via the authorization service.
     */
    public string $RefreshToken = '';

    /**
     * Represents the full set of fragments returned from the authorization service
     * in response to an access token request.
     */
    public array $ResponseFragments = [];

    public function __construct()
    {
    }

    /**
     * Includes the access token.
     *
     * @param  string  $accessToken
     *
     * @return OAuthTokens this builder
     */
    public function withAccessToken(string $accessToken): OAuthTokens
    {
        $this->AccessToken = $accessToken;
        return $this;
    }

    /**
     * Includes the access token expiration time in seconds.
     *
     * @param  int  $accessTokenExpiresInSeconds
     *
     * @return OAuthTokens this builder
     */
    public function withAccessTokenExpiresInSeconds(int $accessTokenExpiresInSeconds): OAuthTokens
    {
        $this->AccessTokenExpiresInSeconds = $accessTokenExpiresInSeconds;
        return $this;
    }

    /**
     * Includes the refresh token.
     *
     * @param  string  $refreshToken
     *
     * @return OAuthTokens this builder
     */
    public function withRefreshToken(string $refreshToken): OAuthTokens
    {
        $this->RefreshToken = $refreshToken;
        return $this;
    }

    /**
     * Includes the response fragments.
     *
     * @param  array  $responseFragments
     *
     * @return OAuthTokens this builder
     */
    public function withResponseFragments(array $responseFragments): OAuthTokens
    {
        $this->ResponseFragments = $responseFragments;
        return $this;
    }
}
