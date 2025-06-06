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
 * The net amount. Returned when the currency of the refund is different from the currency of the
 * PayPal account where the merchant holds their funds.
 */
class NetAmountBreakdownItem implements \JsonSerializable
{
    /**
     * @var Money|null
     */
    private $payableAmount;

    /**
     * @var Money|null
     */
    private $convertedAmount;

    /**
     * @var ExchangeRate|null
     */
    private $exchangeRate;

    /**
     * Returns Payable Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getPayableAmount(): ?Money
    {
        return $this->payableAmount;
    }

    /**
     * Sets Payable Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps payable_amount
     */
    public function setPayableAmount(?Money $payableAmount): void
    {
        $this->payableAmount = $payableAmount;
    }

    /**
     * Returns Converted Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getConvertedAmount(): ?Money
    {
        return $this->convertedAmount;
    }

    /**
     * Sets Converted Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps converted_amount
     */
    public function setConvertedAmount(?Money $convertedAmount): void
    {
        $this->convertedAmount = $convertedAmount;
    }

    /**
     * Returns Exchange Rate.
     * The exchange rate that determines the amount to convert from one currency to another currency.
     */
    public function getExchangeRate(): ?ExchangeRate
    {
        return $this->exchangeRate;
    }

    /**
     * Sets Exchange Rate.
     * The exchange rate that determines the amount to convert from one currency to another currency.
     *
     * @maps exchange_rate
     */
    public function setExchangeRate(?ExchangeRate $exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }

    /**
     * Converts the NetAmountBreakdownItem object to a human-readable string representation.
     *
     * @return string The string representation of the NetAmountBreakdownItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'NetAmountBreakdownItem',
            [
                'payableAmount' => $this->payableAmount,
                'convertedAmount' => $this->convertedAmount,
                'exchangeRate' => $this->exchangeRate
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
        if (isset($this->payableAmount)) {
            $json['payable_amount']   = $this->payableAmount;
        }
        if (isset($this->convertedAmount)) {
            $json['converted_amount'] = $this->convertedAmount;
        }
        if (isset($this->exchangeRate)) {
            $json['exchange_rate']    = $this->exchangeRate;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
