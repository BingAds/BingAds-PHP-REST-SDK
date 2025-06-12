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
 * Represents a user who intends to access the corresponding customer and account.
 */
class AuthorizationData
{
    /**
     * An object representing the authentication headers that should be used in calls to the Bing Ads API.
     */
    public Authentication $Authentication;

    /**
     * The identifier of the account that owns the entities in the request. Used as the CustomerAccountId header element in calls to the Bing Ads API.
     */
    public string $AccountId = '';

    /**
     * The identifier of the customer that owns the account. Used as the CustomerId header element in calls to the Bing Ads API.
     */
    public string $CustomerId = '';

    /**
     * The Bing Ads developer access token. Used as the DeveloperToken header element in calls to the Bing Ads API.
     */
    public string $DeveloperToken = '';


    public function __construct()
    {
    }

    /**
     * Includes the authentication.
     *
     * @param  Authentication  $authentication
     * @return AuthorizationData this builder
     */
    public function withAuthentication(Authentication $authentication): AuthorizationData
    {
        $this->Authentication = $authentication;
        return $this;
    }

    /**
     * Includes the account ID.
     *
     * @param  string  $accountId
     * @return AuthorizationData this builder
     */
    public function withAccountId(string $accountId): AuthorizationData
    {
        $this->AccountId = $accountId;
        return $this;
    }

    /**
     * Includes the customer ID.
     *
     * @param  string  $customerId
     * @return AuthorizationData this builder
     */
    public function withCustomerId(string $customerId): AuthorizationData
    {
        $this->CustomerId = $customerId;
        return $this;
    }

    /**
     * Includes the developer token.
     *
     * @param  string  $developerToken
     * @return AuthorizationData this builder
     */
    public function withDeveloperToken(string $developerToken): AuthorizationData
    {
        $this->DeveloperToken = $developerToken;
        return $this;
    }
}
