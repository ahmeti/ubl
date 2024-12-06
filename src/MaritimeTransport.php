<?php

namespace Ahmeti\Ubl;

/**
 * Deniz taşımacılığındaki gemi bilgileri girilir.
 */
class MaritimeTransport
{
    /**
     * @param  string|null  $VesselID  Geminin varsa IMO ve MMSI numarası girilir.
     * @param  string|null  $VesselName  Geminin adı girilir.
     * @param  string|null  $RadioCallSignID  Geminin radyo çağrı adı girilir.
     * @param  string|null  $ShipsRequirements  Geminin ihtiyaçları bu elemana girilir.
     * @param  array|null  $GrossTonnageMeasure  Geminin brüt ağırlığı girilir. (attrs)
     * @param  array|null  $NetTonnageMeasure  Geminin net ağırlığı girilir. (attrs)
     * @param  RegistryCertificateDocumentReference|null  $RegistryCertificateDocumentReference  Geminin kayıt dokümanı referansı girilir.
     * @param  RegistryPortLocation|null  $RegistryPortLocation  Geminin kayıt limanı bilgisi girilir.
     */
    public function __construct(
        public ?string $VesselID,
        public ?string $VesselName,
        public ?string $RadioCallSignID,
        public ?string $ShipsRequirements,
        public ?array $GrossTonnageMeasure = null,
        public ?array $NetTonnageMeasure = null,
        public ?RegistryCertificateDocumentReference $RegistryCertificateDocumentReference = null,
        public ?RegistryPortLocation $RegistryPortLocation = null
    ) {}
}
