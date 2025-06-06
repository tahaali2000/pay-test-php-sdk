<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\VaultCustomer;

/**
 * Builder for model VaultCustomer
 *
 * @see VaultCustomer
 */
class VaultCustomerBuilder
{
    /**
     * @var VaultCustomer
     */
    private $instance;

    private function __construct(VaultCustomer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Vault Customer Builder object.
     */
    public static function init(): self
    {
        return new self(new VaultCustomer());
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Initializes a new Vault Customer object.
     */
    public function build(): VaultCustomer
    {
        return CoreHelper::clone($this->instance);
    }
}
