<?php

namespace Ahmeti\Ubl;

/**
 * Taşıması gerçekleşen mallar hakkındaki bilgileri içerir
 */
class GoodsItem
{
    /**
     * İlgili ürünü belge içinde tekil olarak tanımlar.
     */
    public ?string $ID = null;

    /**
     * Serbet metin olarak açıklama girilebilir.
     */
    public ?string $Description = null;

    /**
     * Ürün tehlikeli madde kategorisinde sayılıp sayılamayacağını gösteren bilgi.
     */
    public ?bool $HazardousRiskIndicator = null;

    /**
     * Gümrük değeri tutarı girilir.
     */
    public ?Amount $DeclaredCustomsValueAmount = null;

    /**
     * Nakliye tutarı (navlun) girilir.
     */
    public ?Amount $DeclaredForCarriageValueAmount = null;

    /**
     * Ürünün GTIP kıymet değeri girilir.
     */
    public ?Amount $DeclaredStatisticsValueAmount = null;

    /**
     * FOB tutarı girilir.
     */
    public ?Amount $FreeOnBoardValueAmount = null;

    /**
     * Sigorta tutarı girilir.
     */
    public ?Amount $InsuranceValueAmount = null;

    /**
     * Ürünün değeri girilir. Ana seviyedeki Shipment'ın altında kullanımında toplam tutar bilgisi girilebilir.
     */
    public ?Amount $ValueAmount = null;

    /**
     * Brüt ağırlığı girilir.
     */
    public ?Measure $GrossWeightMeasure = null;

    /**
     *  Net ağırlığı girilir.
     */
    public ?Measure $NetWeightMeasure = null;

    /**
     *  Belli bir ücretin uygulanabileceği brüt ağırlığı girilir.
     */
    public ?Measure $ChargableWeightMeasure = null;

    /**
     * Brüt hacim girilir.
     */
    public ?Measure $GrossVolumeMeasure = null;

    /**
     * Net hacim girilir.
     */
    public ?Measure $NetVolumeMeasure = null;

    /**
     * Miktar girilir.
     */
    public ?int $Quantity = null;

    /**
     * Ürünün veya malın GTIP numarası girilir.
     */
    public ?string $RequiredCustomsID = null;

    /**
     * Gümrük durum kodu girilir.
     */
    public ?string $CustomsStatusCode = null;

    /**
     * İstatistiksel, tarife veya mali amaçlı gümrük mal miktarı girilir.
     */
    public ?string $CustomsTariffQuantity = null;

    /**
     * Malların gümrükte ithalat için sınıflandırılmış olup olmadığını belirtir.
     */
    public ?bool $CustomsImportClassifiedIndicator = null;

    /**
     * Belli bir ücretin uygulanabileceği miktar girilir.
     */
    public ?string $ChargeableQuantity = null;

    /**
     * Malların ne kadarının geri gelebileceği girilir.
     */
    public ?string $ReturnableQuantity = null;

    /**
     * Takip numarası girilir.
     */
    public ?string $TraceID = null;

    /**
     * Malların fatura kalemleriyle olan ilişkileri girilir.
     */
    public ?Item $Item = null;

    /**
     * Taşıma bedelinde indirim/fiyat artırımı var ise girilir.
     */
    public ?FreightAllowanceCharge $FreightAllowanceCharge = null;

    /**
     * Birim fiyat ve kalem toplam fiyat bilgileri girilir.
     */
    public ?InvoiceLine $InvoiceLine = null;

    /**
     * Sevkiyattaki mallar ile ilgili her türlü sıcaklık bilgisi girilebilir.
     */
    public ?Temperature $Temperature = null;

    /**
     * Ürünlerin üretildiği adres girilir.
     */
    public ?OriginAddress $OriginAddress = null;

    /**
     * Ürünlerin diğer ölçümleri girilir.
     */
    public ?MeasurementDimension $MeasurementDimension = null;
}
