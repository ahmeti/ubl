<?php

namespace Ahmeti\Ubl;

/**
 * Tren bilgisini içerir.
 */
class RailTransport
{
    /**
     * @param  string|null  $TrainID  Tren numarası girilir.
     * @param  string|null  $RailCarID  Vagon numarası girilir.
     */
    public function __construct(
        public ?string $TrainID = null,
        public ?string $RailCarID = null
    ) {}
}
