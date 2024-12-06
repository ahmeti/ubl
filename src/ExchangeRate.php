<?php

namespace Ahmeti\Ubl;

/**
 * Kur bilgileri ve kurun tarihi girilir
 */
class ExchangeRate
{
    /**
     * @param  string|null  $SourceCurrencyCode  Kaynak Para Birimi Kodu.
     * @param  string|null  $TargetCurrencyCode  Hedef Para Birimi Kodu.
     * @param  float|null  $CalculationRate  Döviz kuru girilir.
     * @param  string|null  $Date  Kurun tarihi yıl-ay-gün şeklinde girilir.
     */
    public function __construct(
        public ?string $SourceCurrencyCode = null,
        public ?string $TargetCurrencyCode = null,
        public ?float $CalculationRate = null,
        public ?string $Date = null
    ) {}
}
