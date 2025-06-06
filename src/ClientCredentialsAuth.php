<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib;

use PayPalRESTAPIsLib\Models\OAuthToken;

/**
 * Interface for defining the behavior of Authentication.
 */
interface ClientCredentialsAuth
{
    /**
     * String value for oAuthClientId.
     */
    public function getOAuthClientId(): string;

    /**
     * String value for oAuthClientSecret.
     */
    public function getOAuthClientSecret(): string;

    /**
     * OAuthToken value for oAuthToken.
     */
    public function getOAuthToken(): ?OAuthToken;

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $oAuthClientId OAuth 2 Client ID
     * @param string $oAuthClientSecret OAuth 2 Client Secret
     */
    public function equals(string $oAuthClientId, string $oAuthClientSecret): bool;

    /**
     * Fetch the OAuth token.
     *
     * @param array|null $additionalParams Additional parameters to be sent.
     */
    public function fetchToken(?array $additionalParams = null): OAuthToken;

    /**
     * Has the OAuth token expired? If the token argument is not provided then this function will check the
     * expiry of the initial oauthToken, that's set in the client initialization.
     */
    public function isTokenExpired(?OAuthToken $token = null): bool;
}
