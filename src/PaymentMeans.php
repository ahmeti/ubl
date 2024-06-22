<?php

namespace Ahmeti\Ubl;

/**
 * Ödeme şeklinin girildiği elemandır.
 */
class PaymentMeans
{
    /**
     * Ödeme şeklinin kodu girilir. Bu eleman için UN/EDIFACT 4461 Ödeme Çeşitleri Kod Listesi kullanılacaktır.
     */
    public ?string $PaymentMeansCode = null;

    /**
     * Son ödeme günü yıl-ay-gün formatında girilir.
     */
    public ?string $PaymentDueDate = null;

    /**
     * Ödeme kanalı kodu girilir.
     */
    public ?string $PaymentChannelCode = null;

    /**
     * Ödeme ile ilgili açıklamalar serbest metin olarak girilir.
     */
    public ?string $InstructionNote = null;

    /**
     * Ödeme yapan tarafın hesap bilgileri girilir.
     */
    public ?PayerFinancialAccount $PayerFinancialAccount = null;

    /**
     * Ödeme yapılacak hesap girilir.
     */
    public ?PayeeFinancialAccount $PayeeFinancialAccount = null;
}
