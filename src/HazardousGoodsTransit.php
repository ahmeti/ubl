<?php

namespace Ahmeti\Ubl;

/**
 * Taşıma sırasındaki tehlikeli malları anlatır.
 */
class HazardousGoodsTransit
{
    /**
     * @param  string|null  $TransportEmergencyCardCode  Taşıma sırasında her hangi bir tehlikeli durum olması durumunda nasıl müdahale edileceğini anlatan kod girilebilir.
     * @param  string|null  $PackagingCriteriaCode  Paketleme kriterleri kodu girilir.
     * @param  string|null  $HazardousRegulationCode  Ürünün taşımasına yönelik kanun ve kuralları belirten kod girilir.
     * @param  string|null  $InhalationToxicityZoneCode  ABD Ulaştırma Bakanlığı tarafından belirlenen Tehlikeli Maddeler için Soluma Toksisitesi Tehlike Bölgesini belirten kod girilir.
     * @param  string|null  $TransportAuthorizationCode  Tehlikeli kargonun taşınmasının yetki kodu girilir.
     * @param  MaximumTemperature|null  $MaximumTemperature  Ürünü güvenle taşınması için gerekli maximum sıcaklık girilir.
     * @param  MinimumTemperature|null  $MinimumTemperature  Ürünü güvenle taşınması için gerekli minimum sıcaklık girilir.
     */
    public function __construct(
        public ?string $TransportEmergencyCardCode = null,
        public ?string $PackagingCriteriaCode = null,
        public ?string $HazardousRegulationCode = null,
        public ?string $InhalationToxicityZoneCode = null,
        public ?string $TransportAuthorizationCode = null,
        public ?MaximumTemperature $MaximumTemperature = null,
        public ?MinimumTemperature $MinimumTemperature = null
    ) {}
}
