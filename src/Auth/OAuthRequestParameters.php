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
 * The supported parameters for requesting OAuth tokens the authorization service.
 */
class OAuthRequestParameters
{
    /**
     * Your application's registered client identifier.
     */
    public string $ClientId = '';

    /**
     * Your application's registered client secret.
     * This parameter is required with OAuthWebAuthCodeGrant requests.
     */
    public string $ClientSecret = '';

    /**
     * The URI where you want the authorization response to be redirected.
     */
    public string $RedirectUri = '';

    /**
     * The authorization grant param name.
     * For example the grant param name could be 'refresh_token' or 'authorization_code'.
     */
    public string $GrantType = '';

    /**
     * The authorization grant param name.
     * For example the grant param name could be 'refresh_token' or 'code'.
     */
    public string $GrantParamName = '';

    /**
     * The value depends on the $GrantType and $GrantParamName.
     * For example if $GrantType and $GrantParamName are both set to 'refresh_token',
     * the value is equal to the last known and valid refresh token.
     */
    public string $GrantValue = '';

    public function __construct()
    {
    }

    /**
     * Includes the client ID.
     *
     * @param  string  $clientId
     * @return OAuthRequestParameters this builder
     */
    public function withClientId(string $clientId): OAuthRequestParameters
    {
        $this->ClientId = $clientId;
        return $this;
    }

    /**
     * Includes the client secret.
     *
     * @param  string  $clientSecret
     * @return OAuthRequestParameters this builder
     */
    public function withClientSecret(string $clientSecret): OAuthRequestParameters
    {
        $this->ClientSecret = $clientSecret;
        return $this;
    }

    /**
     * Includes the redirect URI.
     *
     * @param  string  $redirectUri
     * @return OAuthRequestParameters this builder
     */
    public function withRedirectUri(string $redirectUri): OAuthRequestParameters
    {
        $this->RedirectUri = $redirectUri;
        return $this;
    }

    /**
     * Includes the grant type.
     *
     * @param  string  $grantType
     * @return OAuthRequestParameters this builder
     */
    public function withGrantType(string $grantType): OAuthRequestParameters
    {
        $this->GrantType = $grantType;
        return $this;
    }

    /**
     * Includes the grant param name.
     *
     * @param  string  $grantParamName
     * @return OAuthRequestParameters this builder
     */
    public function withGrantParamName(string $grantParamName): OAuthRequestParameters
    {
        $this->GrantParamName = $grantParamName;
        return $this;
    }

    /**
     * Includes the grant value.
     *
     * @param  string  $grantValue
     * @return OAuthRequestParameters this builder
     */
    public function withGrantValue(string $grantValue): OAuthRequestParameters
    {
        $this->GrantValue = $grantValue;
        return $this;
    }

}
