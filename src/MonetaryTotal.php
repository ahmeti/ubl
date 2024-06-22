<?php

namespace Ahmeti\Ubl;

/**
 * Parasal toplamlar ile genel tutarların girildiği elemandır
 */
class MonetaryTotal
{
    /**
     * Mal/hizmet miktarı ile Mal/hizmet birim fiyatının çarpımı ile bulunan tutardır.
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $LineExtensionAmount = null;

    /**
     * Vergiler hariç, ıskonto veya artırım dahil toplam tutar girilir.(Vergi Matrahı).
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $TaxExclusiveAmount = null;

    /**
     * Vergiler, ıskonto ve artırım dahil toplam tutar girilir.
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $TaxInclusiveAmount = null;

    /**
     * Toplam ıskonto tutarı girilir.
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $AllowanceTotalAmount = null;

    /**
     * Toplam fiyat artırımı tutarı girilir.
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $ChargeTotalAmount = null;

    /**
     * Yuvarlama tutarı girilir.
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $PayableRoundingAmount = null;

    /**
     * Ödenecek tutar girilir.
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $PayableAmount = null;
}
