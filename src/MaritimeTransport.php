<?php

namespace Ahmeti\Ubl;

/**
 * Deniz taşımacılığındaki gemi bilgileri girilir.
 */
class MaritimeTransport
{
    /**
     * Geminin varsa IMO ve MMSI numarası girilir.
     */
    public ?string $VesselID = null;

    /**
     * Geminin adı girilir.
     */
    public ?string $VesselName;

    /**
     * Geminin radyo çağrı adı girilir.
     */
    public ?string $RadioCallSignID;

    /**
     * Geminin ihtiyaçları bu elemana girilir.
     */
    public ?string $ShipsRequirements;

    /**
     * Geminin brüt ağırlığı girilir.
     * (attrs)
     */
    public ?array $GrossTonnageMeasure = null;

    /**
     * Geminin net ağırlığı girilir.
     * (attrs)
     */
    public ?array $NetTonnageMeasure = null;

    /**
     * Geminin kayıt dokümanı referansı girilir.
     */
    public ?RegistryCertificateDocumentReference $RegistryCertificateDocumentReference = null;

    /**
     * Geminin kayıt limanı bilgisi girilir.
     */
    public ?RegistryPortLocation $RegistryPortLocation = null;
}
