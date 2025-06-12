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
 * Represents the deprecated UserName and Password authentication headers.
 */
class PasswordAuthentication extends Authentication
{
    public string $UserName;

    public string $Password;

    public function __construct()
    {
        $this->Type = 'PasswordAuthentication';
    }

    /**
     * Includes the username.
     *
     * @param  string  $userName
     *
     * @return PasswordAuthentication this builder
     */
    public function withUserName(string $userName): PasswordAuthentication
    {
        $this->UserName = $userName;
        return $this;
    }

    /**
     * Includes the password.
     *
     * @param  string  $password
     *
     * @return PasswordAuthentication this builder
     */
    public function withPassword(string $password): PasswordAuthentication
    {
        $this->Password = $password;
        return $this;
    }

}
