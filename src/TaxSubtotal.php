<?php

namespace Ahmeti\Ubl;

/**
 * Vergi ve diğer yasal yükümlülüklerin hesaplaması ile ilgili bilgilere yer verilecektir
 */
class TaxSubtotal
{
    /**
     * Verginin üzerinden hesaplandığı tutar (matrah) bilgisi girilecektir.
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $TaxableAmount = null;

    /**
     * Hesaplanan Vergi Tutarıdır.
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $TaxAmount = null;

    /**
     * Vergi hesaplamasında belli bir sıra izlenmesi veya birden fazla vergi hesaplaması yapılması halinde ilgili sıra numarası girilecektir.
     */
    public ?int $CalculationSequenceNumeric = null;

    /**
     * Belge para birimi cinsinden toplam vergi tutarıdır.
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $TransactionCurrencyTaxAmount = null;

    /**
     * Vergi oranı girilebilecektir.
     */
    public ?int $Percent = null;

    /**
     * Vergileme ölçüsü olarak miktar(kilogram,  metre vb.) kullanılması halinde ilgili tarife bilgileri bu elemana girilecektir.
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $BaseUnitMeasure = null;

    /**
     * Vergileme ölçüsü olarak tutar(perakende satış fiyatı gibi.) kullanılması halinde ilgili tarife bilgileri bu elemana girilecektir.
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $PerUnitAmount = null;

    /**
     * Verginin türü ile ilgili bilgiler girilecektir.
     */
    public ?TaxCategory $TaxCategory = null;
}
