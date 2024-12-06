<?php

namespace Ahmeti\Ubl;

/**
 * Taşıma şekli bilgileri girilir.
 */
class TransportMeans
{
    /**
     * @param  string|null  $JourneyID  Seyahat/Sefer numarası girilir.
     * @param  string|null  $RegistrationNationalityID  Kayıtlı olduğu ülke kodlu olarak girilir.
     * @param  string|null  $RegistrationNationality  Kayıtlı olduğu ülke serbest metin olarak girilir.
     * @param  string|null  $DirectionCode  Yön bilgisi kodlu olarak girilir.
     * @param  string|null  $TransportMeansTypeCode  Taşıma şekli kodlu olarak girilir.
     * @param  string|null  $TradeServiceCode  Ticaret servisi kodlu olarak girilir.
     * @param  Stowage|null  $Stowage  İstifleme bilgisi kodlu olarak girilir.
     * @param  AirTransport|null  $AirTransport  Hava taşımacılığı bilgisi girilir.
     * @param  RoadTransport|null  $RoadTransport  Karayolu taşımacılığı bilgisi girilir.
     * @param  RailTransport|null  $RailTransport  Demiryolu taşımacılığı bilgisi girilir.
     * @param  MaritimeTransport|null  $MaritimeTransport  Deniz taşımacılığı bilgisi girilir.
     * @param  OwnerParty|null  $OwnerParty  Bu araca sahip olan taraf bilgisi girilir.
     * @param  MeasurementDimension|null  $MeasurementDimension  Ölçüm bilgileri girilir.
     */
    public function __construct(
        public ?string $JourneyID = null,
        public ?string $RegistrationNationalityID = null,
        public ?string $RegistrationNationality = null,
        public ?string $DirectionCode = null,
        public ?string $TransportMeansTypeCode = null,
        public ?string $TradeServiceCode = null,
        public ?Stowage $Stowage = null,
        public ?AirTransport $AirTransport = null,
        public ?RoadTransport $RoadTransport = null,
        public ?RailTransport $RailTransport = null,
        public ?MaritimeTransport $MaritimeTransport = null,
        public ?OwnerParty $OwnerParty = null,
        public ?MeasurementDimension $MeasurementDimension = null

    ) {}
}
