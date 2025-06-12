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

use Exception;

/**
 * Represents an OAuth token request exception.
 */
class OAuthTokenRequestException extends Exception
{
    public string $Error;
    public string $Description;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Includes the error.
     *
     * @param  string  $error
     *
     * @return OAuthTokenRequestException
     */
    public function withError(string $error): OAuthTokenRequestException
    {
        $this->Error = $error;
        return $this;
    }

    /**
     * Includes the error description.
     *
     * @param  string  $description
     *
     * @return OAuthTokenRequestException
     */
    public function withDescription(string $description): OAuthTokenRequestException
    {
        $this->Description = $description;
        return $this;
    }
}
