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
 * The supported parameters for requesting the authorization service URL.
 */
class OAuthUrlParameters
{
    /**
     * Your application's registered client identifier.
     */
    public string $ClientId;

    /**
     * The authorization response type.
     * For implicit grant flow, the response type is 'token'.
     * For authorization code grant flow, the response type is 'code'.
     */
    public string $ResponseType;

    /**
     * The URI where you want the authorization response to be redirected.
     */
    public string $RedirectUri;

    /**
     * An opaque value used by the client to maintain state between the request and callback.
     */
    public string $State;

    public function __construct()
    {
    }

    /**
     * Includes the client ID.
     *
     * @param  string  $clientId
     * @return OAuthUrlParameters this builder
     */
    public function withClientId(string $clientId): OAuthUrlParameters
    {
        $this->ClientId = $clientId;
        return $this;
    }

    /**
     * Includes the response type.
     *
     * @param  string  $responseType
     * @return OAuthUrlParameters this builder
     */
    public function withResponseType(string $responseType): OAuthUrlParameters
    {
        $this->ResponseType = $responseType;
        return $this;
    }

    /**
     * Includes the redirect URI.
     *
     * @param  string  $redirectUri
     * @return OAuthUrlParameters this builder
     */
    public function withRedirectUri(string $redirectUri): OAuthUrlParameters
    {
        $this->RedirectUri = $redirectUri;
        return $this;
    }

    /**
     * Includes the state.
     *
     * @param  string  $state
     * @return OAuthUrlParameters this builder
     */
    public function withState(string $state): OAuthUrlParameters
    {
        $this->State = $state;
        return $this;
    }

}
