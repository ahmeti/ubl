<?php

namespace Ahmeti\Ubl;

/**
 * Taşıma ekipmanı bilgileri girilir.
 */
class TransportEquipment
{
    /**
     * Tekil numarası girilir. Örneğin Dorse Plaka numarası.
     * (val = string, attrs = [schemeID="DORSEPLAKA"])
     */
    public ?array $ID = null;

    /**
     * Ekipman tipi kodu girilir.
     */
    public ?string $TransportEquipmentTypeCode = null;

    /**
     * Serbest metin açıklama girilir.
     */
    public ?string $Description = null;
}
