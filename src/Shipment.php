<?php

namespace Ahmeti\Ubl;

/**
 * Gönderi (Kargo) bilgileri girilir.
 */
class Shipment
{
    /**
     * @param  string|null  $ID  Kargo numarası girilir.
     * @param  string|null  $HandlingCode  Kargonun nasıl paketlenip taşınacağı kodlu olarak tanımlar (örneğin kırılacak mal).
     * @param  string|null  $HandlingInstructions  Kargonun nasıl paketlenip taşınacağı serbest metin olarak tanımlar.
     * @param  array|null  $GrossWeightMeasure  Brüt ağırlık girilir. (val = string, attrs = [unitCode="KGM"])
     * @param  array|null  $NetWeightMeasure  Net ağırlık girilir. (val = string, attrs = [unitCode="KGM"])
     * @param  array|null  $GrossVolumeMeasure  Brüt hacim girilir. (val = string, attrs = [unitCode="KGM"])
     * @param  array|null  $NetVolumeMeasure  Net hacim girilir. (val = string, attrs = [unitCode="KGM"])
     * @param  array|null  $TotalGoodsItemQuantity  Toplam mal miktarı girilir. (val = string, attrs = [unitCode="KGM"])
     * @param  array|null  $TotalTransportHandlingUnitQuantity  Toplam taşıma ünitesi miktarı girilir. (val = string, attrs = [unitCode="KGM"])
     * @param  array|null  $InsuranceValueAmount  Sigorta tutarı girilir. (val = string, attrs = [unitCode="KGM"])
     * @param  array|null  $DeclaredCustomsValueAmount  Beyan edilen gümrük değeri tutarı girilir. (val = string, attrs = [unitCode="KGM"])
     * @param  array|null  $DeclaredForCarriageValueAmount  Beyan edilen taşıma ücreti (navlun) girilir. (val = string, attrs = [unitCode="KGM"])
     * @param  array|null  $DeclaredStatisticsValueAmount  Ürünün GTIP kıymet değeri girilir. (val = string, attrs = [unitCode="KGM"])
     * @param  array|null  $FreeOnBoardValueAmount  FOB değeri girilir. (val = string, attrs = [unitCode="KGM"])
     * @param  string|null  $SpecialInstructions  Özel talimatlar serbest metin olarak
     * @param  GoodsItem|null  $GoodsItem  DespatchLine/Shipment elemanı içerisinde kullanımında fiyat bilgileri girilir.
     * @param  ShipmentStage|null  $ShipmentStage  Gönderinin hangi aşamada olduğu bilgisi girilir. Ayrıca taşıyıcı (plaka, şoför) gibi detay bilgiler girilir.
     * @param  Delivery|null  $Delivery  DespatchAdvice dokümanı içerisinde kullanımında taşıyıcı firma, fiili sevk tarihi ve asıl teslim tarihi bilgileri girilir.
     * @param  TransportHandlingUnit|null  $TransportHandlingUnit  Taşıma üniteleri bilgisi girilir.
     * @param  ReturnAddress|null  $ReturnAddress  Ürünlerin geri iade edileceği adres girilir.
     * @param  FirstArrivalPortLocation|null  $FirstArrivalPortLocation  İlk ulaşım limanı girilir.
     * @param  LastExitPortLocation|null  $LastExitPortLocation  Son çıkış limanı girilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $HandlingCode = null,
        public ?string $HandlingInstructions = null,
        public ?array $GrossWeightMeasure = null,
        public ?array $NetWeightMeasure = null,
        public ?array $GrossVolumeMeasure = null,
        public ?array $NetVolumeMeasure = null,
        public ?array $TotalGoodsItemQuantity = null,
        public ?array $TotalTransportHandlingUnitQuantity = null,
        public ?array $InsuranceValueAmount = null,
        public ?array $DeclaredCustomsValueAmount = null,
        public ?array $DeclaredForCarriageValueAmount = null,
        public ?array $DeclaredStatisticsValueAmount = null,
        public ?array $FreeOnBoardValueAmount = null,
        public ?string $SpecialInstructions = null,
        public ?GoodsItem $GoodsItem = null,
        public ?ShipmentStage $ShipmentStage = null,
        public ?Delivery $Delivery = null,
        public ?TransportHandlingUnit $TransportHandlingUnit = null,
        public ?ReturnAddress $ReturnAddress = null,
        public ?FirstArrivalPortLocation $FirstArrivalPortLocation = null,
        public ?LastExitPortLocation $LastExitPortLocation = null
    ) {}
}
