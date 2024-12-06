<?php

namespace Ahmeti\Ubl;

/**
 * Boyut bilgileri girilir
 */
class Dimension
{
    /**
     * @param  string|null  $AttributeID  Hangi özelliğin ölçüldüğü girilir.
     * @param  array|null  $Measure  Ölçüm girilir. (attrs = unitCode="MTR")
     * @param  string|null  $Description  Açıklama girilir.
     * @param  array|null  $MinimumMeasure  Minimum ölçüm girilir. (attrs = unitCode="MTR")
     * @param  array|null  $MaximumMeasure  Maximum ölçüm girilir. (attrs = unitCode="MTR")
     */
    public function __construct(
        public ?string $AttributeID = null,
        public ?array $Measure = null,
        public ?string $Description = null,
        public ?array $MinimumMeasure = null,
        public ?array $MaximumMeasure = null
    ) {}
}
