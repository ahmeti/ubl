<?php

namespace Ahmeti\Ubl;

use Ahmeti\Ubl\Utils\UblCustomAttr;

/**
 * Vergi ve diğer yasal yükümlülüklerin hesaplaması ile ilgili bilgiler ile belge
 * üzerinde hesaplanan toplam vergi ve yasal yükümlülük tutarı girilecektir.
 */
class TaxTotal
{
    /**
     * @param  UblCustomAttr|null  $TaxAmount  Hesaplanan vergilerin toplam tutarı girilir.
     * @param  TaxSubtotal[]|null  $TaxSubtotal  Vergi hesaplaması ile ilgili bilgilere yer verilir.
     */
    public function __construct(
        public ?UblCustomAttr $TaxAmount = null,
        public ?array $TaxSubtotal = []
    ) {}
}
