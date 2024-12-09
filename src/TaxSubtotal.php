<?php

namespace Ahmeti\Ubl;

use Ahmeti\Ubl\Utils\UblCustomAttr;

/**
 * Vergi ve diğer yasal yükümlülüklerin hesaplaması ile ilgili bilgilere yer verilecektir
 */
class TaxSubtotal
{
    /**
     * @param  UblCustomAttr|null  $TaxableAmount  Verginin üzerinden hesaplandığı tutar (matrah) bilgisi girilecektir. (val = string, attrs = [currencyID="TRY"])
     * @param  UblCustomAttr|null  $TaxAmount  Hesaplanan Vergi Tutarıdır. (val = string, attrs = [currencyID="TRY"])
     * @param  int|null  $CalculationSequenceNumeric  Vergi hesaplamasında belli bir sıra izlenmesi veya birden fazla vergi hesaplaması yapılması halinde ilgili sıra numarası girilecektir.
     * @param  array|null  $TransactionCurrencyTaxAmount  Belge para birimi cinsinden toplam vergi tutarıdır. (val = string, attrs = [currencyID="TRY"])
     * @param  int|null  $Percent  Vergi oranı girilebilecektir.
     * @param  array|null  $BaseUnitMeasure  Vergileme ölçüsü olarak miktar(kilogram,  metre vb.) kullanılması halinde ilgili tarife bilgileri bu elemana girilecektir. (val = string, attrs = [currencyID="TRY"])
     * @param  array|null  $PerUnitAmount  Vergileme ölçüsü olarak tutar(perakende satış fiyatı gibi.) kullanılması halinde ilgili tarife bilgileri bu elemana girilecektir. (val = string, attrs = [currencyID="TRY"])
     * @param  TaxCategory|null  $TaxCategory  Verginin türü ile ilgili bilgiler girilecektir.
     */
    public function __construct(
        public ?UblCustomAttr $TaxableAmount = null,
        public ?UblCustomAttr $TaxAmount = null,
        public ?int $CalculationSequenceNumeric = null,
        public ?array $TransactionCurrencyTaxAmount = null,
        public ?int $Percent = null,
        public ?array $BaseUnitMeasure = null,
        public ?array $PerUnitAmount = null,
        public ?TaxCategory $TaxCategory = null
    ) {}
}
