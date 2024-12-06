<?php

namespace Ahmeti\Ubl;

/**
 * Karayolu taşımacılığında kullanılan araç bilgisini içerir
 */
class RoadTransport
{
    /**
     * @param  string|null  $LicensePlateID  Plaka numarası girilir.
     */
    public function __construct(
        public ?string $LicensePlateID = null
    ) {}
}
