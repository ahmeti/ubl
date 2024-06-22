<?php

namespace Ahmeti\Ubl;

/**
 * Sıcaklık bilgisi girilir.
 */
class Temperature
{
    /**
     * Sıcaklık nitelik numarası girilir.
     */
    public ?string $AttributeID = null;

    /**
     * Ölçüm girilir.
     * (unitCode="CEL")
     */
    public ?array $Measure = null;

    /**
     * Açıklama girilir
     */
    public ?string $Description = null;
}
