<?php

namespace Ahmeti\Ubl;

/**
 * İstif yeri bilgisi girilir.
 */
class Stowage
{
    /**
     * @param  string|null  $LocationID  İstif yeri mekan numarası girilir.
     * @param  Location|null  $Location  Mekan bilgisi detaylı olarak girilir.
     * @param  MeasurementDimension|null  $MeasurementDimension  İstif yeri ölçüleri girilir.
     */
    public function __construct(
        public ?string $LocationID = null,
        public ?Location $Location = null,
        public ?MeasurementDimension $MeasurementDimension = null
    ) {}
}
