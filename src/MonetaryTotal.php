<?php

namespace Ahmeti\Ubl;

use Ahmeti\Ubl\Utils\UblCustomAttr;

/**
 * Parasal toplamlar ile genel tutarların girildiği elemandır
 */
class MonetaryTotal
{
    /**
     * @param  UblCustomAttr|null  $LineExtensionAmount  Mal/hizmet miktarı ile Mal/hizmet birim fiyatının çarpımı ile bulunan tutardır. (val = string, attrs = [currencyID="TRY"])
     * @param  UblCustomAttr|null  $TaxExclusiveAmount  Vergiler hariç, ıskonto veya artırım dahil toplam tutar girilir. (Vergi Matrahı) (val = string, attrs = [currencyID="TRY"])
     * @param  UblCustomAttr|null  $TaxInclusiveAmount  Vergiler, iskonto ve artırım dahil toplam tutar girilir. (val = string, attrs = [currencyID="TRY"])
     * @param  UblCustomAttr|null  $AllowanceTotalAmount  Toplam iskonto tutarı girilir. (val = string, attrs = [currencyID="TRY"])
     * @param  UblCustomAttr|null  $ChargeTotalAmount  Toplam fiyat artırımı tutarı girilir. (val = string, attrs = [currencyID="TRY"])
     * @param  UblCustomAttr|null  $PayableRoundingAmount  Yuvarlama tutarı girilir. (val = string, attrs = [currencyID="TRY"])
     * @param  UblCustomAttr|null  $PayableAmount  Ödenecek tutar girilir. (val = string, attrs = [currencyID="TRY"])
     */
    public function __construct(
        public ?UblCustomAttr $LineExtensionAmount = null,
        public ?UblCustomAttr $TaxExclusiveAmount = null,
        public ?UblCustomAttr $TaxInclusiveAmount = null,
        public ?UblCustomAttr $AllowanceTotalAmount = null,
        public ?UblCustomAttr $ChargeTotalAmount = null,
        public ?UblCustomAttr $PayableRoundingAmount = null,
        public ?UblCustomAttr $PayableAmount = null
    ) {}
}
