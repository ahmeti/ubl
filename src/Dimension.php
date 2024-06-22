<?php

namespace Ahmeti\Ubl;

/**
 * Boyut bilgileri girilir
 */
class Dimension
{
    /**
     * Hangi özelliğin ölçüldüğü girilir.
     */
    public ?string $AttributeID = null;

    /**
     * Ölçüm girilir.
     * (attrs = unitCode="MTR")
     */
    public ?array $Measure = null;

    /**
     * Açıklama girilir.
     */
    public ?string $Description = null;

    /**
     * Minimum ölçüm girilir.
     * (attrs = unitCode="MTR")
     */
    public ?array $MinimumMeasure = null;

    /**
     * Maximum ölçüm girilir.
     * (attrs = unitCode="MTR")
     */
    public ?array $MaximumMeasure = null;
}
