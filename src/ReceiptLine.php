<?php

namespace Ahmeti\Ubl;

/**
 * Bu elemanda teslim alınan mal hakkında bilgiler yer alacaktır.
 */
class ReceiptLine
{
    /**
     * Kalem numarası girilir.
     */
    public ?string $ID = null;

    /**
     * Kalem açıklaması girilir.
     */
    public ?array $Note = null;

    /**
     * Teslim alınan mal adedi girilir.
     * (val = string, attrs = [unitCode="C62"])
     */
    public ?array $ReceivedQuantity = null;

    /**
     * Eksik olan mal adedi girilir.
     * (val = string, attrs = [unitCode="C62"])
     */
    public ?array $ShortQuantity;

    /**
     * Kabul edilmeyen mal adedi girilir.
     * (val = string, attrs = [unitCode="C62"])
     */
    public ?array $RejectedQuantity = null;

    /**
     * Reddedilme sebebi kodu girilir.
     */
    public ?string $RejectReasonCode = null;

    /**
     * Reddedilme sebebi açıklaması girilir.
     */
    public ?string $RejectReason = null;

    /**
     * Fazla teslim alınan mal adedi girilir.
     * (val = string, attrs = [unitCode="C62"])
     */
    public ?array $OversupplyQuantity = null;

    /**
     * Teslim alma tarihi girilir.
     */
    public ?string $ReceivedDate = null;

    /**
     * Geç teslim edilmesi durumunda şikayet kodlu olarak girilir.
     */
    public ?string $TimingComplaintCode = null;

    /**
     * Geç teslim edilmesi durumunda şikayet açıklaması girilir.
     */
    public ?string $TimingComplaint = null;

    /**
     * İlgili sipariş dokümanı kalemi bilgisi girilir.
     */
    public ?OrderLineReference $OrderLineReference = null;

    /**
     *  İlgili irsaliye dokümanı kalemi girilir.
     */
    public ?DespatchLineReference $DespatchLineReference = null;

    /**
     *  İlgili dokümanların bilgisi girilir.
     */
    public ?DocumentReference $DocumentReference = null;

    /**
     * Teslim alınan mal bilgisi girilir.
     */
    public ?Item $Item = null;

    /**
     *  Mal birim fiyatı girilir.
     */
    public ?Shipment $Shipment = null;
}
