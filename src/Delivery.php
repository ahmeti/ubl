<?php

namespace Ahmeti\Ubl;

/**
 * Ürün tesliman bilgileri detaylı olarak girilir.
 */
class Delivery
{
    /**
     * Teslimatı belge içerisinde tekil olarak tanımlar.
     */
    public ?string $ID = null;

    /**
     * Ürün miktarı girilir.
     */
    public ?string $Quantity = null;

    /**
     * Gerçekleşen teslim tarihi yazılır.
     */
    public ?string $ActualDeliveryDate = null;

    /**
     * Gerçekleşen teslim zamanı yazılır.
     */
    public ?string $ActualDeliveryTime = null;

    /**
     * Son teslim tarihi girilir.
     */
    public ?string $LatestDeliveryDate = null;

    /**
     * Son teslim zamanı girilir.
     */
    public ?string $LatestDeliveryTime = null;

    /**
     * Takip numarası girilir.
     */
    public ?string $TrackingID = null;

    /**
     * Teslimat adresi girilir.
     */
    public ?DeliveryAddress $DeliveryAddress = null;

    /**
     * Alternatif teslim yeri girilir
     */
    public ?AlternativeDeliveryLocation $AlternativeDeliveryLocation = null;

    /**
     * Tahmini teslim dönemi girilir.
     */
    public ?EstimatedDeliveryPeriod $EstimatedDeliveryPeriod = null;

    /**
     * Taşıyıcı taraf girilir.
     */
    public ?CarrierParty $CarrierParty = null;

    /**
     * Teslimat yapılacak (ürünleri teslim alacak) taraf girilir.
     */
    public ?DeliveryParty $DeliveryParty = null;

    /**
     * Gönderi bilgisi girilir.
     */
    public ?Despatch $Despatch = null;

    /**
     *  Teslimat şartları girilir.
     */
    public ?DeliveryTerms $DeliveryTerms = null;

    /**
     * Yük/kargo bilgileri girilir.
     */
    public ?Shipment $Shipment = null;
}
