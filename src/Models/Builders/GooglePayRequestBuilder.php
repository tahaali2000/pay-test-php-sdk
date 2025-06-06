<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\GooglePayCardAttributes;
use PayPalRESTAPIsLib\Models\GooglePayDecryptedTokenData;
use PayPalRESTAPIsLib\Models\GooglePayRequest;
use PayPalRESTAPIsLib\Models\PhoneNumberWithCountryCode;

/**
 * Builder for model GooglePayRequest
 *
 * @see GooglePayRequest
 */
class GooglePayRequestBuilder
{
    /**
     * @var GooglePayRequest
     */
    private $instance;

    private function __construct(GooglePayRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Google Pay Request Builder object.
     */
    public static function init(): self
    {
        return new self(new GooglePayRequest());
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets email address field.
     *
     * @param string|null $value
     */
    public function emailAddress(?string $value): self
    {
        $this->instance->setEmailAddress($value);
        return $this;
    }

    /**
     * Sets phone number field.
     *
     * @param PhoneNumberWithCountryCode|null $value
     */
    public function phoneNumber(?PhoneNumberWithCountryCode $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Sets card field.
     *
     * @param array|null $value
     */
    public function card(?array $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets decrypted token field.
     *
     * @param GooglePayDecryptedTokenData|null $value
     */
    public function decryptedToken(?GooglePayDecryptedTokenData $value): self
    {
        $this->instance->setDecryptedToken($value);
        return $this;
    }

    /**
     * Sets assurance details field.
     *
     * @param array|null $value
     */
    public function assuranceDetails(?array $value): self
    {
        $this->instance->setAssuranceDetails($value);
        return $this;
    }

    /**
     * Sets attributes field.
     *
     * @param GooglePayCardAttributes|null $value
     */
    public function attributes(?GooglePayCardAttributes $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Initializes a new Google Pay Request object.
     */
    public function build(): GooglePayRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
