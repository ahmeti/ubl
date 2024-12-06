<?php

namespace Ahmeti\Ubl;

/**
 * Taşıma ekipmanı bilgileri girilir.
 */
class TransportEquipment
{
    /**
     * @param  array|null  $ID  Tekil numarası girilir. Örneğin Dorse Plaka numarası. (val = string, attrs = [schemeID="DORSEPLAKA"])
     * @param  string|null  $TransportEquipmentTypeCode  Ekipman tipi kodu girilir.
     * @param  string|null  $Description  Serbest metin açıklama girilir.
     */
    public function __construct(
        public ?array $ID = null,
        public ?string $TransportEquipmentTypeCode = null,
        public ?string $Description = null
    ) {}
}
