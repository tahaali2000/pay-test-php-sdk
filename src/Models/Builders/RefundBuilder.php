<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\LinkDescription;
use PayPalRESTAPIsLib\Models\Money;
use PayPalRESTAPIsLib\Models\PayeeBase;
use PayPalRESTAPIsLib\Models\Refund;
use PayPalRESTAPIsLib\Models\RefundStatusDetails;
use PayPalRESTAPIsLib\Models\SellerPayableBreakdown;

/**
 * Builder for model Refund
 *
 * @see Refund
 */
class RefundBuilder
{
    /**
     * @var Refund
     */
    private $instance;

    private function __construct(Refund $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Refund Builder object.
     */
    public static function init(): self
    {
        return new self(new Refund());
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets status details field.
     *
     * @param RefundStatusDetails|null $value
     */
    public function statusDetails(?RefundStatusDetails $value): self
    {
        $this->instance->setStatusDetails($value);
        return $this;
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
     * Sets amount field.
     *
     * @param Money|null $value
     */
    public function amount(?Money $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets invoice id field.
     *
     * @param string|null $value
     */
    public function invoiceId(?string $value): self
    {
        $this->instance->setInvoiceId($value);
        return $this;
    }

    /**
     * Sets custom id field.
     *
     * @param string|null $value
     */
    public function customId(?string $value): self
    {
        $this->instance->setCustomId($value);
        return $this;
    }

    /**
     * Sets acquirer reference number field.
     *
     * @param string|null $value
     */
    public function acquirerReferenceNumber(?string $value): self
    {
        $this->instance->setAcquirerReferenceNumber($value);
        return $this;
    }

    /**
     * Sets note to payer field.
     *
     * @param string|null $value
     */
    public function noteToPayer(?string $value): self
    {
        $this->instance->setNoteToPayer($value);
        return $this;
    }

    /**
     * Sets seller payable breakdown field.
     *
     * @param SellerPayableBreakdown|null $value
     */
    public function sellerPayableBreakdown(?SellerPayableBreakdown $value): self
    {
        $this->instance->setSellerPayableBreakdown($value);
        return $this;
    }

    /**
     * Sets payer field.
     *
     * @param PayeeBase|null $value
     */
    public function payer(?PayeeBase $value): self
    {
        $this->instance->setPayer($value);
        return $this;
    }

    /**
     * Sets links field.
     *
     * @param LinkDescription[]|null $value
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Sets create time field.
     *
     * @param string|null $value
     */
    public function createTime(?string $value): self
    {
        $this->instance->setCreateTime($value);
        return $this;
    }

    /**
     * Sets update time field.
     *
     * @param string|null $value
     */
    public function updateTime(?string $value): self
    {
        $this->instance->setUpdateTime($value);
        return $this;
    }

    /**
     * Initializes a new Refund object.
     */
    public function build(): Refund
    {
        return CoreHelper::clone($this->instance);
    }
}
