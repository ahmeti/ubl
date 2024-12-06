<?php

namespace Ahmeti\Ubl;

class PricingExchangeRate
{
    /**
     * @param  string|null  $SourceCurrencyCode  Kaynak para birim kodu girilir. Örnek: EUR
     * @param  string|null  $TargetCurrencyCode  Hedef para birim kodu girilir. Örnek: TRY
     * @param  string|null  $CalculationRate  Kur bilgisi girilir. Noktadan önce en fazla 15, noktadan sonra (kuruş) en fazla 4 haneli olmalıdır. Örnek: 25.5762
     */
    public function __construct(
        public ?string $SourceCurrencyCode = null,
        public ?string $TargetCurrencyCode = null,
        public ?string $CalculationRate = null
    ) {}
}
