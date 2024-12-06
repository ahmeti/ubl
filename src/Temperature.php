<?php

namespace Ahmeti\Ubl;

/**
 * Sıcaklık bilgisi girilir.
 */
class Temperature
{
    /**
     * @param  string|null  $AttributeID  Sıcaklık nitelik numarası girilir.
     * @param  array|null  $Measure  Ölçüm girilir. (unitCode="CEL")
     * @param  string|null  $Description  Açıklama girilir
     */
    public function __construct(
        public ?string $AttributeID = null,
        public ?array $Measure = null,
        public ?string $Description = null
    ) {}
}
