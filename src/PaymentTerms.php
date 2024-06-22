<?php

namespace Ahmeti\Ubl;

/**
 * Ödeme koşullarının girildiği elemandır
 */
class PaymentTerms
{
    /**
     * Ödeme koşulları ile ilgili açıklama serbest metin olarak girilir.
     */
    public ?array $Note = null;

    /**
     * Ödemenin gecikmesi durumunda uygulanacak ceza oranı numerik olarak girilir.
     */
    public ?int $PenaltySurchargePercent = null;

    /**
     * Ödeme tutarı numerik olarak girilebilir.
     * (attrs)
     */
    public ?array $Amount = null;

    /**
     * Ödemenin gecikmesi durumunda uygulanacak ceza tutarı numerik olarak girilir.
     * (attrs)
     */
    public ?array $PenaltyAmount = null;

    /**
     * Son ödeme günü yıl-ay-gün formatında girilir.
     */
    public ?string $PaymentDueDate = null;

    /**
     * Ödeme dönemi girilir.
     */
    public ?SettlementPeriod $SettlementPeriod = null;
}
