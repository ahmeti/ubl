<?php

namespace Ahmeti\Ubl;

class PaymentAlternativeExchangeRate
{
    public function __construct(
        public ?string $SourceCurrencyCode = null,
        public ?string $TargetCurrencyCode = null,
        public ?string $CalculationRate = null
    ) {}
}
