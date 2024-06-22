<?php

namespace Ahmeti\Ubl;

/**
 * Bu elemanda irsaliyede yer alan gönderilere ait bilgiler yer alacaktır
 */
class DespatchLine
{
    /**
     * İrsaliye kalemi numarası girilir.
     */
    public ?string $ID = null;

    /**
     * Kalem ile ilgili açıklama girilir.
     */
    public ?string $Note = null;

    /**
     * Gönderimi gerçekleştirilen mal adedi girilir.
     * (val = string, attrs = [unitCode="C62"])
     */
    public ?array $DeliveredQuantity = null;

    /**
     * İleriki bir tarihte gönderilecek mal adedi bilgisi girilir.
     * (val = string, attrs = [unitCode="C62"])
     */
    public ?array $OutstandingQuantity = null;

    /**
     * İleriki tarihte gönderilecek malın sebebi girilir.
     */
    public ?string $OutstandingReason = null;

    /**
     * Fazla miktarda gönderilen malın adedi girilir.
     * (val = string, attrs = [unitCode="C62"])
     */
    public ?array $OversupplyQuantity = null;

    /**
     * İlgili sipariş dokümanı kalemine referans girilir.
     */
    public ?OrderLineReference $OrderLineReference = null;

    /**
     * İlgili dokümanlara referans girilir.
     */
    public ?DocumentReference $DocumentReference = null;

    /**
     * Mal bilgisi girilir.
     */
    public ?Item $Item = null;

    /**
     * Ürün gönderi (kargo) bilgileri girilir.
     */
    public ?Shipment $Shipment = null;
}
