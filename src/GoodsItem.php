<?php

namespace Ahmeti\Ubl;

/**
 * Taşıması gerçekleşen mallar hakkındaki bilgileri içerir
 */
class GoodsItem
{
    /**
     * @param  string|null  $ID  İlgili ürünü belge içinde tekil olarak tanımlar.
     * @param  string|null  $Description  Serbet metin olarak açıklama girilebilir.
     * @param  bool|null  $HazardousRiskIndicator  Ürün tehlikeli madde kategorisinde sayılıp sayılamayacağını gösteren bilgi.
     * @param  Amount|null  $DeclaredCustomsValueAmount  Gümrük değeri tutarı girilir.
     * @param  Amount|null  $DeclaredForCarriageValueAmount  Nakliye tutarı (navlun) girilir.
     * @param  Amount|null  $DeclaredStatisticsValueAmount  Ürünün GTIP kıymet değeri girilir.
     * @param  Amount|null  $FreeOnBoardValueAmount  FOB tutarı girilir.
     * @param  Amount|null  $InsuranceValueAmount  Sigorta tutarı girilir.
     * @param  Amount|null  $ValueAmount  Ürünün değeri girilir. Ana seviyedeki Shipment'ın altında kullanımında toplam tutar bilgisi girilebilir.
     * @param  Measure|null  $GrossWeightMeasure  Brüt ağırlığı girilir.
     * @param  Measure|null  $NetWeightMeasure  Net ağırlığı girilir.
     * @param  Measure|null  $ChargableWeightMeasure  Belli bir ücretin uygulanabileceği brüt ağırlığı girilir.
     * @param  Measure|null  $GrossVolumeMeasure  Brüt hacim girilir.
     * @param  Measure|null  $NetVolumeMeasure  Net hacim girilir.
     * @param  int|null  $Quantity  Miktar girilir.
     * @param  string|null  $RequiredCustomsID  Ürünün veya malın GTIP numarası girilir.
     * @param  string|null  $CustomsStatusCode  Gümrük durum kodu girilir.
     * @param  string|null  $CustomsTariffQuantity  İstatistiksel, tarife veya mali ama
     * @param  bool|null  $CustomsImportClassifiedIndicator  Malların gümrükte ithalat için sınıflandırılmış olup olmadığını belirtir.
     * @param  string|null  $ChargeableQuantity  Belli bir ücretin uygulanabileceği miktar girilir.
     * @param  string|null  $ReturnableQuantity  Malların ne kadarının geri gelebileceği girilir.
     * @param  string|null  $TraceID  Takip numarası girilir.
     * @param  Item|null  $Item  Malların fatura kalemleriyle olan ilişkileri girilir.
     * @param  FreightAllowanceCharge|null  $FreightAllowanceCharge  Taşıma bedelinde indirim/fiyat artırımı var ise girilir.
     * @param  InvoiceLine|null  $InvoiceLine  Birim fiyat ve kalem toplam fiyat bilgileri girilir.
     * @param  Temperature|null  $Temperature  Sevkiyattaki mallar ile ilgili her türlü sıcaklık bilgisi girilebilir.
     * @param  OriginAddress|null  $OriginAddress  Ürünlerin üretildiği adres girilir.
     * @param  MeasurementDimension|null  $MeasurementDimension  Ürünlerin diğer ölçümleri girilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $Description = null,
        public ?bool $HazardousRiskIndicator = null,
        public ?Amount $DeclaredCustomsValueAmount = null,
        public ?Amount $DeclaredForCarriageValueAmount = null,
        public ?Amount $DeclaredStatisticsValueAmount = null,
        public ?Amount $FreeOnBoardValueAmount = null,
        public ?Amount $InsuranceValueAmount = null,
        public ?Amount $ValueAmount = null,
        public ?Measure $GrossWeightMeasure = null,
        public ?Measure $NetWeightMeasure = null,
        public ?Measure $ChargableWeightMeasure = null,
        public ?Measure $GrossVolumeMeasure = null,
        public ?Measure $NetVolumeMeasure = null,
        public ?int $Quantity = null,
        public ?string $RequiredCustomsID = null,
        public ?string $CustomsStatusCode = null,
        public ?string $CustomsTariffQuantity = null,
        public ?bool $CustomsImportClassifiedIndicator = null,
        public ?string $ChargeableQuantity = null,
        public ?string $ReturnableQuantity = null,
        public ?string $TraceID = null,
        public ?Item $Item = null,
        public ?FreightAllowanceCharge $FreightAllowanceCharge = null,
        public ?InvoiceLine $InvoiceLine = null,
        public ?Temperature $Temperature = null,
        public ?OriginAddress $OriginAddress = null,
        public ?MeasurementDimension $MeasurementDimension = null
    ) {}
}
