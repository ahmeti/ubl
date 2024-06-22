<?php

namespace Ahmeti\Ubl;

/**
 * Taşıma sırasındaki tehlikeli malları anlatır.
 */
class HazardousGoodsTransit
{
    /**
     * Taşıma sırasında her hangi bir tehlikeli durum olması durumunda nasıl müdahale edileceğini anlatan kod girilebilir.
     */
    public ?string $TransportEmergencyCardCode = null;

    /**
     * Paketleme kriterleri kodu girilir.
     */
    public ?string $PackagingCriteriaCode = null;

    /**
     * Ürünün taşımasına yönelik kanun ve kuralları belirten kod girilir.
     */
    public ?string $HazardousRegulationCode = null;

    /**
     * ABD Ulaştırma Bakanlığı tarafından belirlenen Tehlikeli Maddeler için Soluma Toksisitesi Tehlike Bölgesini belirten kod girilir.
     */
    public ?string $InhalationToxicityZoneCode = null;

    /**
     * Tehlikeli kargonun taşınmasının yetki kodu girilir.
     */
    public ?string $TransportAuthorizationCode = null;

    /**
     * Ürünü güvenle taşınması için gerekli maximum sıcaklık girilir.
     */
    public ?MaximumTemperature $MaximumTemperature = null;

    /**
     * Ürünü güvenle taşınması için gerekli minimum sıcaklık girilir.
     */
    public ?MinimumTemperature $MinimumTemperature = null;
}
