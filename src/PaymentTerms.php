<?php

namespace Ahmeti\Ubl;

/**
 * Ödeme koşullarının girildiği elemandır
 */
class PaymentTerms
{
    /**
     * @param  string|null  $Note  Ödeme koşulları ile ilgili açıklama serbest metin olarak girilir.
     * @param  int|null  $PenaltySurchargePercent  Ödemenin gecikmesi durumunda uygulanacak ceza oranı numerik olarak girilir.
     * @param  array|null  $Amount  Ödeme tutarı numerik olarak girilebilir. (attrs)
     * @param  array|null  $PenaltyAmount  Ödemenin gecikmesi durumunda uygulanacak ceza tutarı numerik olarak girilir. (attrs)
     * @param  string|null  $PaymentDueDate  Son ödeme günü yıl-ay-gün formatında girilir.
     * @param  SettlementPeriod|null  $SettlementPeriod  Ödeme dönemi girilir.
     */
    public function __construct(
        public ?string $Note = null,
        public ?int $PenaltySurchargePercent = null,
        public ?array $Amount = null,
        public ?array $PenaltyAmount = null,
        public ?string $PaymentDueDate = null,
        public ?SettlementPeriod $SettlementPeriod = null
    ) {}
}
