<?php

namespace CustomerManagementFramework\Model\OAuth;

/**
 * OAuth1 token response model
 *
 * @see https://tools.ietf.org/html/rfc5849#section-2.3
 */
interface OAuth1TokenInterface extends OAuthTokenInterface
{
    /**
     * Get token
     *
     * @return string
     */
    public function getToken();

    /**
     * Set token
     *
     * @param string $token
     * @return $this
     */
    public function setToken($token);

    /**
     * Get token secret
     *
     * @return string
     */
    public function getTokenSecret();

    /**
     * Set token secret
     *
     * @param string $tokenSecret
     * @return $this
     */
    public function setTokenSecret($tokenSecret);
}