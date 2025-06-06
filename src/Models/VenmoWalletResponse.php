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
 * Venmo wallet response.
 */
class VenmoWalletResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $emailAddress;

    /**
     * @var string|null
     */
    private $accountId;

    /**
     * @var string|null
     */
    private $userName;

    /**
     * @var Name|null
     */
    private $name;

    /**
     * @var PhoneNumber|null
     */
    private $phoneNumber;

    /**
     * @var Address|null
     */
    private $address;

    /**
     * @var VenmoWalletAttributesResponse|null
     */
    private $attributes;

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
     * Returns Account Id.
     * The PayPal payer ID, which is a masked version of the PayPal account number intended for use with
     * third parties. The account number is reversibly encrypted and a proprietary variant of Base32 is
     * used to encode the result.
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * The PayPal payer ID, which is a masked version of the PayPal account number intended for use with
     * third parties. The account number is reversibly encrypted and a proprietary variant of Base32 is
     * used to encode the result.
     *
     * @maps account_id
     */
    public function setAccountId(?string $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * Returns User Name.
     * The Venmo user name chosen by the user, also know as a Venmo handle.
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * Sets User Name.
     * The Venmo user name chosen by the user, also know as a Venmo handle.
     *
     * @maps user_name
     */
    public function setUserName(?string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * Returns Name.
     * The name of the party.
     */
    public function getName(): ?Name
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the party.
     *
     * @maps name
     */
    public function setName(?Name $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Phone Number.
     * The phone number in its canonical international [E.164 numbering plan format](https://www.itu.
     * int/rec/T-REC-E.164/en).
     */
    public function getPhoneNumber(): ?PhoneNumber
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     * The phone number in its canonical international [E.164 numbering plan format](https://www.itu.
     * int/rec/T-REC-E.164/en).
     *
     * @maps phone_number
     */
    public function setPhoneNumber(?PhoneNumber $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     *
     * @maps address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Attributes.
     * Additional attributes associated with the use of a Venmo Wallet.
     */
    public function getAttributes(): ?VenmoWalletAttributesResponse
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     * Additional attributes associated with the use of a Venmo Wallet.
     *
     * @maps attributes
     */
    public function setAttributes(?VenmoWalletAttributesResponse $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * Converts the VenmoWalletResponse object to a human-readable string representation.
     *
     * @return string The string representation of the VenmoWalletResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'VenmoWalletResponse',
            [
                'emailAddress' => $this->emailAddress,
                'accountId' => $this->accountId,
                'userName' => $this->userName,
                'name' => $this->name,
                'phoneNumber' => $this->phoneNumber,
                'address' => $this->address,
                'attributes' => $this->attributes
            ]
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
        if (isset($this->accountId)) {
            $json['account_id']    = $this->accountId;
        }
        if (isset($this->userName)) {
            $json['user_name']     = $this->userName;
        }
        if (isset($this->name)) {
            $json['name']          = $this->name;
        }
        if (isset($this->phoneNumber)) {
            $json['phone_number']  = $this->phoneNumber;
        }
        if (isset($this->address)) {
            $json['address']       = $this->address;
        }
        if (isset($this->attributes)) {
            $json['attributes']    = $this->attributes;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
