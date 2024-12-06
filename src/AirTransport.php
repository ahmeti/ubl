<?php

namespace Ahmeti\Ubl;

/**
 * Hava taşımacılığında kullanılan hava aracının numarasını tanımlamak için kullanılır
 */
class AirTransport
{
    /**
     * @param  string|null  $AircraftID  Havayolu araç kodu
     */
    public function __construct(
        public ?string $AircraftID = null
    ) {}
}
