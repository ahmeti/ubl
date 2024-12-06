<?php

namespace Ahmeti\Ubl;

/**
 * Teslimat koşulları girilir.
 */
class DeliveryTerms
{
    /**
     * @param  string|null  $ID  Teslim koşulları girilir (örneğin CIF, FOB).
     * @param  string|null  $SpecialTerms  Teslimat koşulları serbest metin olarak girilir.
     * @param  float|null  $Amount  Teslimat koşullarının kapsadığı tutar girilebilir
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $SpecialTerms = null,
        public ?float $Amount = null
    ) {}
}
