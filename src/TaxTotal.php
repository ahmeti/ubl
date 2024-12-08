<?php

namespace Ahmeti\Ubl;

/**
 * Vergi ve diğer yasal yükümlülüklerin hesaplaması ile ilgili bilgiler ile belge
 * üzerinde hesaplanan toplam vergi ve yasal yükümlülük tutarı girilecektir.
 */
class TaxTotal
{
    /**
     * @param  array  $TaxAmount  Hesaplanan vergilerin toplam tutarı girilir.
     * @param  TaxSubtotal[]|null  $TaxSubtotal  Vergi hesaplaması ile ilgili bilgilere yer verilir.
     */
    public function __construct(
        public array $TaxAmount = [],
        public ?array $TaxSubtotal = []
    ) {}
}
