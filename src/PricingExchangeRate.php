<?php

namespace Ahmeti\Ubl;

class PricingExchangeRate
{
    /**
     * Kaynak para birim kodu girilir. Örnek: EUR
     */
    public ?string $SourceCurrencyCode = null;

    /**
     * Hedef para birim kodu girilir. Örnek: TRY
     */
    public ?string $TargetCurrencyCode = null;

    /**
     * Kur bilgisi girilir. Noktadan önce en fazla 15, noktadan sonra (kuruş) en fazla 4 haneli olmalıdır. Örnek: 25.5762
     */
    public ?string $CalculationRate = null;
}
