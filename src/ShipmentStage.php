<?php

namespace Ahmeti\Ubl;

/**
 * Bu elemana taşıma faz bilgileri yazılır.
 */
class ShipmentStage
{
    /**
     * @param  string|null  $ID  Aşama bilgisi numarasi girilir.
     * @param  string|null  $TransportModeCode  Bu taşıma fazının hangi modda (hava, deniz, kara) gerçekleştiği bilgisi girilir.
     * @param  string|null  $TransportMeansCode  Bu taşıma fazının nasıl bir araç ile gerçekleştiği bilgisi girilir (örneğin, kamyon, tır, gemi)
     * @param  string|null  $TransitDirectionCode  Bu fazda gerçekleştirilen taşımanın güzergahı kodlu olarak girilir.
     * @param  string|null  $Instructions  Fazla ilgili detay bilgi girilir (örneğin güzergah)
     * @param  TransitPeriod|null  $TransitPeriod  Fazla ilgili detay bilgi girilir (örneğin güzergah)
     * @param  TransportMeans|null  $TransportMeans  Taşımada kullanılan vasıta hakkında detay bilgi girilir (örneğin kamyon plaka numarası)
     * @param  DriverPerson[]|null  $DriverPerson  Şoför bilgileri girilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $TransportModeCode = null,
        public ?string $TransportMeansCode = null,
        public ?string $TransitDirectionCode = null,
        public ?string $Instructions = null,
        public ?TransitPeriod $TransitPeriod = null,
        public ?TransportMeans $TransportMeans = null,
        public ?array $DriverPerson = null
    ) {}
}
