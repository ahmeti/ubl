<?php

namespace Ahmeti\Ubl;

/**
 * Bu elemanda teslim alınan mal hakkında bilgiler yer alacaktır.
 */
class ReceiptLine
{
    /**
     * @param  string|null  $ID  Kalem numarası girilir.
     * @param  array|null  $Note  Kalem açıklaması girilir.
     * @param  array|null  $ReceivedQuantity  Teslim alınan mal adedi girilir. (val = string, attrs = [unitCode="C62"])
     * @param  array|null  $ShortQuantity  Eksik olan mal adedi girilir. (val = string, attrs = [unitCode="C62"])
     * @param  array|null  $RejectedQuantity  Kabul edilmeyen mal adedi girilir. (val = string, attrs = [unitCode="C62"])
     * @param  string|null  $RejectReasonCode  Reddedilme sebebi kodu girilir.
     * @param  string|null  $RejectReason  Reddedilme sebebi açıklaması girilir.
     * @param  array|null  $OversupplyQuantity  Fazla teslim alınan mal adedi girilir. (val = string, attrs = [unitCode="C62"])
     * @param  string|null  $ReceivedDate  Teslim alma tarihi girilir.
     * @param  string|null  $TimingComplaintCode  Geç teslim edilmesi durumunda şikayet kodlu olarak girilir.
     * @param  string|null  $TimingComplaint  Geç teslim edilmesi durumunda şikayet açıklaması girilir.
     * @param  OrderLineReference|null  $OrderLineReference  İlgili sipariş dokümanı kalemi bilgisi girilir.
     * @param  DespatchLineReference|null  $DespatchLineReference  İlgili irsaliye dokümanı kalemi girilir.
     * @param  DocumentReference|null  $DocumentReference  İlgili dokümanların bilgisi girilir.
     * @param  Item|null  $Item  Teslim alınan mal bilgisi girilir.
     * @param  Shipment|null  $Shipment  Mal birim fiyatı girilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?array $Note = null,
        public ?array $ReceivedQuantity = null,
        public ?array $ShortQuantity = null,
        public ?array $RejectedQuantity = null,
        public ?string $RejectReasonCode = null,
        public ?string $RejectReason = null,
        public ?array $OversupplyQuantity = null,
        public ?string $ReceivedDate = null,
        public ?string $TimingComplaintCode = null,
        public ?string $TimingComplaint = null,
        public ?OrderLineReference $OrderLineReference = null,
        public ?DespatchLineReference $DespatchLineReference = null,
        public ?DocumentReference $DocumentReference = null,
        public ?Item $Item = null,
        public ?Shipment $Shipment = null
    ) {}
}
