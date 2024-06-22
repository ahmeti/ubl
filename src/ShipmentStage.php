<?php

namespace Ahmeti\Ubl;

/**
 * Bu elemana taşıma faz bilgileri yazılır.
 */
class ShipmentStage
{
    /**
     * Aşama bilgisi numarasi girilir.
     */
    public ?string $ID = null;

    /**
     *  Bu taşıma fazının hangi modda (hava, deniz, kara) gerçekleştiği bilgisi girilir.
     */
    public ?string $TransportModeCode = null;

    /**
     * Bu taşıma fazının nasıl bir araç ile gerçekleştiği bilgisi girilir (örneğin, kamyon, tır, gemi)
     */
    public ?string $TransportMeansCode = null;

    /**
     * Bu fazda gerçekleştirilen taşımanın güzergahı kodlu olarak girilir.
     */
    public ?string $TransitDirectionCode = null;

    /**
     * Fazla ilgili detay bilgi girilir (örneğin güzergah)
     */
    public ?string $Instructions = null;

    /**
     * Fazla ilgili detay bilgi girilir (örneğin güzergah)
     */
    public ?TransitPeriod $TransitPeriod = null;

    /**
     * Taşımada kullanılan vasıta hakkında detay bilgi girilir (örneğin kamyon plaka numarası)
     */
    public ?TransportMeans $TransportMeans = null;

    /**
     * Şoför bilgileri girilir.
     *
     * @var DriverPerson[]
     */
    public ?array $DriverPerson = null;
}
