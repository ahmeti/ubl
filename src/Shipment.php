<?php

namespace Ahmeti\Ubl;

/**
 * Gönderi (Kargo) bilgileri girilir.
 */
class Shipment
{
    /**
     * Kargo numarası girilir.
     */
    public ?string $ID = null;

    /**
     * Kargonun nasıl paketlenip taşınacağı kodlu olarak tanımlar (örneğin kırılacak mal).
     */
    public ?string $HandlingCode = null;

    /**
     * Kargonun nasıl paketlenip taşınacağı serbest metin olarak tanımlar.
     */
    public ?string $HandlingInstructions = null;

    /**
     * Brüt ağırlık girilir.
     * (val = string, attrs = [unitCode="KGM"])
     */
    public ?array $GrossWeightMeasure = null;

    /**
     * Net ağırlık girilir.
     * (val = string, attrs = [unitCode="KGM"])
     */
    public ?array $NetWeightMeasure = null;

    /**
     * Brüt hacim girilir.
     * (val = string, attrs = [unitCode="KGM"])
     */
    public ?array $GrossVolumeMeasure = null;

    /**
     * Net hacim girilir.
     * (val = string, attrs = [unitCode="KGM"])
     */
    public ?array $NetVolumeMeasure = null;

    /**
     * Toplam mal miktarı girilir.
     * (val = string, attrs = [unitCode="KGM"])
     */
    public ?array $TotalGoodsItemQuantity = null;

    /**
     * Toplam taşıma ünitesi miktarı girilir.
     * (val = string, attrs = [unitCode="KGM"])
     */
    public ?array $TotalTransportHandlingUnitQuantity = null;

    /**
     * Sigorta tutarı girilir.
     * (val = string, attrs = [unitCode="KGM"])
     */
    public ?array $InsuranceValueAmount = null;

    /**
     * Beyan edilen gümrük değeri tutarı girilir.
     * (val = string, attrs = [unitCode="KGM"])
     */
    public ?array $DeclaredCustomsValueAmount = null;

    /**
     * Beyan edilen taşıma ücreti (navlun) girilir.
     * (val = string, attrs = [unitCode="KGM"])
     */
    public ?array $DeclaredForCarriageValueAmount = null;

    /**
     * Ürünün GTIP kıymet değeri girilir.
     * (val = string, attrs = [unitCode="KGM"])
     */
    public ?array $DeclaredStatisticsValueAmount = null;

    /**
     * FOB değeri girilir.
     * (val = string, attrs = [unitCode="KGM"])
     */
    public ?array $FreeOnBoardValueAmount = null;

    /**
     * Özel talimatlar serbest metin olarak
     */
    public ?string $SpecialInstructions = null;

    /**
     * DespatchLine/Shipment elemanı içerisinde kullanımında fiyat bilgileri girilir.
     */
    public ?GoodsItem $GoodsItem = null;

    /**
     * Gönderinin hangi aşamada olduğu bilgisi girilir. Ayrıca taşıyıcı (plaka, şoför) gibi detay bilgiler girilir.
     */
    public ?ShipmentStage $ShipmentStage = null;

    /**
     * DespatchAdvice dokümanı içerisinde kullanımında taşıyıcı firma, fiili sevk tarihi ve asıl teslim tarihi bilgileri girilir.
     */
    public ?Delivery $Delivery = null;

    /**
     * Taşıma üniteleri bilgisi girilir.
     */
    public ?TransportHandlingUnit $TransportHandlingUnit = null;

    /**
     * Ürünlerin geri iade edileceği adres girilir.
     */
    public ?ReturnAddress $ReturnAddress = null;

    /**
     * İlk ulaşım limanı girilir.
     */
    public ?FirstArrivalPortLocation $FirstArrivalPortLocation = null;

    /**
     * Son çıkış limanı girilir.
     */
    public ?LastExitPortLocation $LastExitPortLocation = null;
}
