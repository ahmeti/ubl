<?php

namespace Ahmeti\Ubl;

/**
 * Vergi ve diğer yasal yükümlülüklerin hesaplaması ile ilgili bilgiler ile belge
 * üzerinde hesaplanan toplam vergi ve yasal yükümlülük tutarı girilecektir.
 */
class TaxTotal
{
    /**
     * Hesaplanan vergilerin toplam tutarı girilir.
     */
    public ?string $TaxAmount = null;

    /**
     * Vergi hesaplaması ile ilgili bilgilere yer verilir.
     */
    public ?TaxSubtotal $TaxSubtotal = null;
}
