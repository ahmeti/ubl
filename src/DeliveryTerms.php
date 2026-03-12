<?php

namespace Ahmeti\Ubl;

use Ahmeti\Ubl\Utils\UblCustomAttr;

/**
 * Teslimat koşulları girilir.
 */
class DeliveryTerms
{
    /**
     * @param  UblCustomAttr|null  $ID  Teslim koşulları girilir. new UblCustomAttr(['schemeID' => 'INCOTERMS'], 'CIF')
     * @param  string|null  $SpecialTerms  Teslimat koşulları serbest metin olarak girilir.
     * @param  float|null  $Amount  Teslimat koşullarının kapsadığı tutar girilebilir
     */
    public function __construct(
        public ?UblCustomAttr $ID = null,
        public ?string $SpecialTerms = null,
        public ?float $Amount = null
    ) {}
}
