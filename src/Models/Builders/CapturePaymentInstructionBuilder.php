<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayPalRESTAPIsLib\Models\CapturePaymentInstruction;
use PayPalRESTAPIsLib\Models\PlatformFee;

/**
 * Builder for model CapturePaymentInstruction
 *
 * @see CapturePaymentInstruction
 */
class CapturePaymentInstructionBuilder
{
    /**
     * @var CapturePaymentInstruction
     */
    private $instance;

    private function __construct(CapturePaymentInstruction $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Capture Payment Instruction Builder object.
     */
    public static function init(): self
    {
        return new self(new CapturePaymentInstruction());
    }

    /**
     * Sets platform fees field.
     *
     * @param PlatformFee[]|null $value
     */
    public function platformFees(?array $value): self
    {
        $this->instance->setPlatformFees($value);
        return $this;
    }

    /**
     * Sets disbursement mode field.
     *
     * @param string|null $value
     */
    public function disbursementMode(?string $value): self
    {
        $this->instance->setDisbursementMode($value);
        return $this;
    }

    /**
     * Sets payee receivable fx rate id field.
     *
     * @param string|null $value
     */
    public function payeeReceivableFxRateId(?string $value): self
    {
        $this->instance->setPayeeReceivableFxRateId($value);
        return $this;
    }

    /**
     * Initializes a new Capture Payment Instruction object.
     */
    public function build(): CapturePaymentInstruction
    {
        return CoreHelper::clone($this->instance);
    }
}
