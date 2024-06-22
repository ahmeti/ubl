<?php

namespace Ahmeti\Ubl;

/**
 * Taşıma ünitesi hakkında detaylı bilgi girilir.
 */
class TransportHandlingUnit
{
    /**
     * Taşıma ünitesi numarası girilir.
     */
    public ?string $ID = null;

    /**
     * Taşıma ünitesi tipi kodlu olarak girilir.
     */
    public ?string $TransportHandlingUnitTypeCode = null;

    /**
     * Nasıl paketlenip taşınacağı kodlu olarak tanımlar.
     */
    public ?string $HandlingCode = null;

    /**
     * Nasıl paketlenip taşınacağıserbest metin olarak tanımlar.
     */
    public ?string $HandlingInstructions = null;

    /**
     * Tehlikeli madde içerip içermediğini belirtir.
     */
    public ?bool $HazardousRiskIndicator = null;

    /**
     * Toplam ürün miktarı girilir.
     */
    public ?int $TotalGoodsItemQuantity = null;

    /**
     * Toplam paket miktarı girilir.
     */
    public ?int $TotalPackageQuantity = null;

    /**
     * Zarar bilgisi girilir.
     */
    public ?string $DamageRemarks = null;

    /**
     * Takip numarası girilir.
     */
    public ?string $TraceID = null;

    /**
     * İçerdiği paket bilgileri girilir.
     */
    public ?ActualPackage $ActualPackage = null;

    /**
     * Ekipman bilgisi girilir.
     *
     * @var TransportEquipment[]
     */
    public ?array $TransportEquipment = null;

    /**
     * Taşıma şekli bilgisi girilir.
     */
    public ?TransportMeans $TransportMeans = null;

    /**
     * Taşıma sırasındaki tehlikeli malların bilgisi girilir.
     */
    public ?HazardousGoodsTransit $HazardousGoodsTransit = null;

    /**
     * Taşıma ünitesi ölçüleri girilir.
     */
    public ?MeasurementDimension $MeasurementDimension = null;

    /**
     * Taşıma ünitesi için maksimum sıcaklık girilir.
     */
    public ?MinimumTemperature $MinimumTemperature = null;

    /**
     *  Taşıma ünitesi için minimum sıcaklık girilir.
     */
    public ?MaximumTemperature $MaximumTemperature = null;

    /**
     * Yerde kapladığı alan bilgisi girilir.
     */
    public ?FloorSpaceMeasurementDimension $FloorSpaceMeasurementDimension = null;

    /**
     * Palette kapladığı alan blgisi girilir.
     */
    public ?PalletSpaceMeasurementDimension $PalletSpaceMeasurementDimension = null;

    /**
     * İlgili gönderi belgesine referans girilir.
     */
    public ?ShipmentDocumentReference $ShipmentDocumentReference = null;

    /**
     * Gümrük numaralandırma bilgisi girilir.
     */
    public ?CustomsDeclaration $CustomsDeclaration = null;
}
