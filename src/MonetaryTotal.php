<?php

namespace Ahmeti\Ubl;

/**
 * Parasal toplamlar ile genel tutarların girildiği elemandır
 */
class MonetaryTotal
{
    /**
     * @param  array|null  $LineExtensionAmount  Mal/hizmet miktarı ile Mal/hizmet birim fiyatının çarpımı ile bulunan tutardır. (val = string, attrs = [currencyID="TRY"])
     * @param  array|null  $TaxExclusiveAmount  Vergiler hariç, ıskonto veya artırım dahil toplam tutar girilir. (Vergi Matrahı) (val = string, attrs = [currencyID="TRY"])
     * @param  array|null  $TaxInclusiveAmount  Vergiler, iskonto ve artırım dahil toplam tutar girilir. (val = string, attrs = [currencyID="TRY"])
     * @param  array|null  $AllowanceTotalAmount  Toplam iskonto tutarı girilir. (val = string, attrs = [currencyID="TRY"])
     * @param  array|null  $ChargeTotalAmount  Toplam fiyat artırımı tutarı girilir. (val = string, attrs = [currencyID="TRY"])
     * @param  array|null  $PayableRoundingAmount  Yuvarlama tutarı girilir. (val = string, attrs = [currencyID="TRY"])
     * @param  array|null  $PayableAmount  Ödenecek tutar girilir. (val = string, attrs = [currencyID="TRY"])
     */
    public function __construct(
        public ?array $LineExtensionAmount = null,
        public ?array $TaxExclusiveAmount = null,
        public ?array $TaxInclusiveAmount = null,
        public ?array $AllowanceTotalAmount = null,
        public ?array $ChargeTotalAmount = null,
        public ?array $PayableRoundingAmount = null,
        public ?array $PayableAmount = null
    ) {}
}
