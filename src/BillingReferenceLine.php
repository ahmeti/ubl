<?php

namespace Ahmeti\Ubl;

/**
 * Fatura ile ilgili belgelerin kalemlerine referans eklemek için kullanılır.
 */
class BillingReferenceLine
{
    /**
     * Kalem numarası girilir.
     */
    public ?string $ID = null;

    /**
     * Kalemin tutarı girilir
     */
    public ?string $Amount = null;

    /**
     * Kaleme eğer indirim veya fiyat artırımı uygulanmışsa girilir.
     */
    public ?AllowanceCharge $AllowanceCharge = null;
}
