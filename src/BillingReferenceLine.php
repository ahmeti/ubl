<?php

namespace Ahmeti\Ubl;

/**
 * Fatura ile ilgili belgelerin kalemlerine referans eklemek için kullanılır.
 */
class BillingReferenceLine
{
    /**
     * @param  string|null  $ID  Kalem numarası girilir.
     * @param  string|null  $Amount  Kalemin tutarı girilir
     * @param  AllowanceCharge|null  $AllowanceCharge  Kaleme eğer indirim veya fiyat artırımı uygulanmışsa girilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $Amount = null,
        public ?AllowanceCharge $AllowanceCharge = null
    ) {}
}
