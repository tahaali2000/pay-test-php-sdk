<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\BancontactPaymentRequest;
use PayPalRESTAPIsLib\Models\ExperienceContext;

/**
 * Builder for model BancontactPaymentRequest
 *
 * @see BancontactPaymentRequest
 */
class BancontactPaymentRequestBuilder
{
    /**
     * @var BancontactPaymentRequest
     */
    private $instance;

    private function __construct(BancontactPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bancontact Payment Request Builder object.
     *
     * @param string $name
     * @param string $countryCode
     */
    public static function init(string $name, string $countryCode): self
    {
        return new self(new BancontactPaymentRequest($name, $countryCode));
    }

    /**
     * Sets experience context field.
     *
     * @param ExperienceContext|null $value
     */
    public function experienceContext(?ExperienceContext $value): self
    {
        $this->instance->setExperienceContext($value);
        return $this;
    }

    /**
     * Initializes a new Bancontact Payment Request object.
     */
    public function build(): BancontactPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
