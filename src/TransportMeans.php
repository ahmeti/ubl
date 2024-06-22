<?php

namespace Ahmeti\Ubl;

/**
 * Taşıma şekli bilgileri girilir.
 */
class TransportMeans
{
    /**
     * Seyahat/Sefer numarası girilir.
     */
    public ?string $JourneyID = null;

    /**
     * Kayıtlı olduğu ülke kodlu olarak girilir.
     */
    public ?string $RegistrationNationalityID = null;

    /**
     * Kayıtlı olduğu ülke serbest metin olarak girilir.
     */
    public ?string $RegistrationNationality = null;

    /**
     * Yön bilgisi kodlu olarak girilir.
     */
    public ?string $DirectionCode = null;

    /**
     * Taşıma şekli kodlu olarak girilir.
     */
    public ?string $TransportMeansTypeCode = null;

    /**
     * Ticaret servisi kodlu olarak girilir.
     */
    public ?string $TradeServiceCode = null;

    /**
     * İstifleme bilgisi kodlu olarak girilir.
     */
    public ?Stowage $Stowage = null;

    /**
     * Hava taşımacılığı bilgisi girilir.
     */
    public ?AirTransport $AirTransport = null;

    /**
     * Karayolu taşımacılığı bilgisi girilir.
     */
    public ?RoadTransport $RoadTransport = null;

    /**
     * Demiryolu taşımacılığı bilgisi girilir.
     */
    public ?RailTransport $RailTransport = null;

    /**
     * Deniz taşımacılığı bilgisi girilir.
     */
    public ?MaritimeTransport $MaritimeTransport = null;

    /**
     * Bu araca sahip olan taraf bilgisi girilir.
     */
    public ?OwnerParty $OwnerParty = null;

    /**
     * Ölçüm bilgileri girilir.
     */
    public ?MeasurementDimension $MeasurementDimension = null;
}
