<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\VaultTokenRequest;

/**
 * Builder for model VaultTokenRequest
 *
 * @see VaultTokenRequest
 */
class VaultTokenRequestBuilder
{
    /**
     * @var VaultTokenRequest
     */
    private $instance;

    private function __construct(VaultTokenRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Vault Token Request Builder object.
     *
     * @param string $id
     * @param string $type
     */
    public static function init(string $id, string $type): self
    {
        return new self(new VaultTokenRequest($id, $type));
    }

    /**
     * Initializes a new Vault Token Request object.
     */
    public function build(): VaultTokenRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
