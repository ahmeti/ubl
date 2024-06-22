<?php

namespace Ahmeti\Ubl;

/**
 * Kur bilgileri ve kurun tarihi girilir
 */
class ExchangeRate
{
    /**
     * Kaynak Para Birimi Kodu.
     */
    public ?string $SourceCurrencyCode = null;

    /**
     * Hedef Para Birimi Kodu.
     */
    public ?string $TargetCurrencyCode = null;

    /**
     * Döviz kuru girilir.
     */
    public ?float $CalculationRate = null;

    /**
     * Kurun tarihi yıl-ay-gün şeklinde girilir.
     */
    public ?string $Date = null;
}
