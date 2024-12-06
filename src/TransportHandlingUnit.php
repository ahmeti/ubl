<?php

namespace Ahmeti\Ubl;

/**
 * Taşıma ünitesi hakkında detaylı bilgi girilir.
 */
class TransportHandlingUnit
{
    /**
     * @param  string|null  $ID  Taşıma ünitesi numarası girilir.
     * @param  string|null  $TransportHandlingUnitTypeCode  Taşıma ünitesi tipi kodlu olarak girilir.
     * @param  string|null  $HandlingCode  Nasıl paketlenip taşınacağı kodlu olarak tanımlar.
     * @param  string|null  $HandlingInstructions  Nasıl paketlenip taşınacağıserbest metin olarak tanımlar.
     * @param  bool|null  $HazardousRiskIndicator  Tehlikeli madde içerip içermediğini belirtir.
     * @param  int|null  $TotalGoodsItemQuantity  Toplam ürün miktarı girilir.
     * @param  int|null  $TotalPackageQuantity  Toplam paket miktarı girilir.
     * @param  string|null  $DamageRemarks  Zarar bilgisi girilir.
     * @param  string|null  $TraceID  Takip numarası girilir.
     * @param  ActualPackage|null  $ActualPackage  İçerdiği paket bilgileri girilir.
     * @param  TransportEquipment[]|null  $TransportEquipment  Ekipman bilgisi girilir.
     * @param  TransportMeans|null  $TransportMeans  Taşıma şekli bilgisi girilir.
     * @param  HazardousGoodsTransit|null  $HazardousGoodsTransit  Taşıma sırasındaki tehlikeli malların bilgisi girilir.
     * @param  MeasurementDimension|null  $MeasurementDimension  Taşıma ünitesi ölçüleri girilir.
     * @param  MinimumTemperature|null  $MinimumTemperature  Taşıma ünitesi için maksimum sıcaklık girilir.
     * @param  MaximumTemperature|null  $MaximumTemperature  Taşıma ünitesi için minimum sıcaklık girilir.
     * @param  FloorSpaceMeasurementDimension|null  $FloorSpaceMeasurementDimension  Yerde kapladığı alan bilgisi girilir.
     * @param  PalletSpaceMeasurementDimension|null  $PalletSpaceMeasurementDimension  Palette kapladığı alan blgisi girilir.
     * @param  ShipmentDocumentReference|null  $ShipmentDocumentReference  İlgili gönderi belgesine referans girilir.
     * @param  CustomsDeclaration|null  $CustomsDeclaration  Gümrük numaralandırma bilgisi girilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $TransportHandlingUnitTypeCode = null,
        public ?string $HandlingCode = null,
        public ?string $HandlingInstructions = null,
        public ?bool $HazardousRiskIndicator = null,
        public ?int $TotalGoodsItemQuantity = null,
        public ?int $TotalPackageQuantity = null,
        public ?string $DamageRemarks = null,
        public ?string $TraceID = null,
        public ?ActualPackage $ActualPackage = null,
        public ?array $TransportEquipment = null,
        public ?TransportMeans $TransportMeans = null,
        public ?HazardousGoodsTransit $HazardousGoodsTransit = null,
        public ?MeasurementDimension $MeasurementDimension = null,
        public ?MinimumTemperature $MinimumTemperature = null,
        public ?MaximumTemperature $MaximumTemperature = null,
        public ?FloorSpaceMeasurementDimension $FloorSpaceMeasurementDimension = null,
        public ?PalletSpaceMeasurementDimension $PalletSpaceMeasurementDimension = null,
        public ?ShipmentDocumentReference $ShipmentDocumentReference = null,
        public ?CustomsDeclaration $CustomsDeclaration = null
    ) {}
}
