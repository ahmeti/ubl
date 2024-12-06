<?php

namespace Ahmeti\Ubl;

/**
 * Bu elemanda irsaliyede yer alan gönderilere ait bilgiler yer alacaktır
 */
class DespatchLine
{
    /**
     * @param  string|null  $ID  İrsaliye kalemi numarası girilir.
     * @param  string|null  $Note  Kalem ile ilgili açıklama girilir.
     * @param  array|null  $DeliveredQuantity  Gönderimi gerçekleştirilen mal adedi girilir. (val = string, attrs = [unitCode="C62"])
     * @param  array|null  $OutstandingQuantity  İleriki bir tarihte gönderilecek mal adedi bilgisi girilir. (val = string, attrs = [unitCode="C62"])
     * @param  string|null  $OutstandingReason  İleriki tarihte gönderilecek malın sebebi girilir.
     * @param  array|null  $OversupplyQuantity  Fazla miktarda gönderilen malın adedi girilir. (val = string, attrs = [unitCode="C62"])
     * @param  OrderLineReference|null  $OrderLineReference  İlgili sipariş dokümanı kalemine referans girilir.
     * @param  DocumentReference|null  $DocumentReference  İlgili dokümanlara referans girilir.
     * @param  Item|null  $Item  Mal bilgisi girilir.
     * @param  Shipment|null  $Shipment  Ürün gönderi (kargo) bilgileri girilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $Note = null,
        public ?array $DeliveredQuantity = null,
        public ?array $OutstandingQuantity = null,
        public ?string $OutstandingReason = null,
        public ?array $OversupplyQuantity = null,
        public ?OrderLineReference $OrderLineReference = null,
        public ?DocumentReference $DocumentReference = null,
        public ?Item $Item = null,
        public ?Shipment $Shipment = null
    ) {}
}
