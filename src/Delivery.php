<?php

namespace Ahmeti\Ubl;

/**
 * Ürün tesliman bilgileri detaylı olarak girilir.
 */
class Delivery
{
    /**
     * @param  string|null  $ID  Teslimatı belge içerisinde tekil olarak tanımlar.
     * @param  string|null  $Quantity  Ürün miktarı girilir.
     * @param  string|null  $ActualDeliveryDate  Gerçekleşen teslim tarihi yazılır.
     * @param  string|null  $ActualDeliveryTime  Gerçekleşen teslim zamanı yazılır.
     * @param  string|null  $LatestDeliveryDate  Son teslim tarihi girilir.
     * @param  string|null  $LatestDeliveryTime  Son teslim zamanı girilir.
     * @param  string|null  $TrackingID  Takip numarası girilir.
     * @param  DeliveryAddress|null  $DeliveryAddress  Teslimat adresi girilir.
     * @param  AlternativeDeliveryLocation|null  $AlternativeDeliveryLocation  Alternatif teslim yeri girilir
     * @param  EstimatedDeliveryPeriod|null  $EstimatedDeliveryPeriod  Tahmini teslim dönemi girilir.
     * @param  CarrierParty|null  $CarrierParty  Taşıyıcı taraf girilir.
     * @param  DeliveryParty|null  $DeliveryParty  Teslimat yapılacak (ürünleri teslim alacak) taraf girilir.
     * @param  Despatch|null  $Despatch  Gönderi bilgisi girilir.
     * @param  DeliveryTerms|null  $DeliveryTerms  Teslimat şartları girilir.
     * @param  Shipment|null  $Shipment  Yük/kargo bilgileri girilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $Quantity = null,
        public ?string $ActualDeliveryDate = null,
        public ?string $ActualDeliveryTime = null,
        public ?string $LatestDeliveryDate = null,
        public ?string $LatestDeliveryTime = null,
        public ?string $TrackingID = null,
        public ?DeliveryAddress $DeliveryAddress = null,
        public ?AlternativeDeliveryLocation $AlternativeDeliveryLocation = null,
        public ?EstimatedDeliveryPeriod $EstimatedDeliveryPeriod = null,
        public ?CarrierParty $CarrierParty = null,
        public ?DeliveryParty $DeliveryParty = null,
        public ?Despatch $Despatch = null,
        public ?DeliveryTerms $DeliveryTerms = null,
        public ?Shipment $Shipment = null
    ) {}
}
