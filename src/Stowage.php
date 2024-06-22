<?php

namespace Ahmeti\Ubl;

/**
 * İstif yeri bilgisi girilir.
 */
class Stowage
{
    /**
     * İstif yeri mekan numarası girilir.
     */
    public ?string $LocationID = null;

    /**
     * Mekan bilgisi detaylı olarak girilir.
     */
    public ?Location $Location = null;

    /**
     * İstif yeri ölçüleri girilir.
     */
    public ?MeasurementDimension $MeasurementDimension = null;
}
