<?php

namespace Ahmeti\Ubl;

/**
 * Ödeme şeklinin girildiği elemandır.
 */
class PaymentMeans
{
    /**
     * @param  string|null  $PaymentMeansCode  Ödeme şeklinin kodu girilir. Bu eleman için UN/EDIFACT 4461 Ödeme Çeşitleri Kod Listesi kullanılacaktır.
     * @param  string|null  $PaymentDueDate  Son ödeme günü yıl-ay-gün formatında girilir.
     * @param  string|null  $PaymentChannelCode  Ödeme kanalı kodu girilir.
     * @param  string|null  $InstructionNote  Ödeme ile ilgili açıklamalar serbest metin olarak girilir.
     * @param  PayerFinancialAccount|null  $PayerFinancialAccount  Ödeme yapan tarafın hesap bilgileri girilir.
     * @param  PayeeFinancialAccount|null  $PayeeFinancialAccount  Ödeme yapılacak hesap girilir.
     */
    public function __construct(
        public ?string $PaymentMeansCode = null,
        public ?string $PaymentDueDate = null,
        public ?string $PaymentChannelCode = null,
        public ?string $InstructionNote = null,
        public ?PayerFinancialAccount $PayerFinancialAccount = null,
        public ?PayeeFinancialAccount $PayeeFinancialAccount = null
    ) {}
}
