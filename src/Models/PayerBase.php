<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models;

use PayPalRESTAPIsLib\ApiHelper;
use stdClass;

/**
 * The customer who approves and pays for the order. The customer is also known as the payer.
 */
class PayerBase implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $emailAddress;

    /**
     * @var string|null
     */
    private $payerId;

    /**
     * Returns Email Address.
     * The internationalized email address.<blockquote><strong>Note:</strong> Up to 64 characters are
     * allowed before and 255 characters are allowed after the <code>@</code> sign. However, the generally
     * accepted maximum length for an email address is 254 characters. The pattern verifies that an
     * unquoted <code>@</code> sign exists.</blockquote>
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * Sets Email Address.
     * The internationalized email address.<blockquote><strong>Note:</strong> Up to 64 characters are
     * allowed before and 255 characters are allowed after the <code>@</code> sign. However, the generally
     * accepted maximum length for an email address is 254 characters. The pattern verifies that an
     * unquoted <code>@</code> sign exists.</blockquote>
     *
     * @maps email_address
     */
    public function setEmailAddress(?string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Returns Payer Id.
     * The account identifier for a PayPal account.
     */
    public function getPayerId(): ?string
    {
        return $this->payerId;
    }

    /**
     * Sets Payer Id.
     * The account identifier for a PayPal account.
     *
     * @maps payer_id
     */
    public function setPayerId(?string $payerId): void
    {
        $this->payerId = $payerId;
    }

    /**
     * Converts the PayerBase object to a human-readable string representation.
     *
     * @return string The string representation of the PayerBase object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PayerBase',
            ['emailAddress' => $this->emailAddress, 'payerId' => $this->payerId]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->emailAddress)) {
            $json['email_address'] = $this->emailAddress;
        }
        if (isset($this->payerId)) {
            $json['payer_id']      = $this->payerId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
