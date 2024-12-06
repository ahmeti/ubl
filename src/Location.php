<?php

namespace Ahmeti\Ubl;

/**
 * Mekan bilgisi girilir.
 */
class Location
{
    /**
     * @param  string|null  $ID  Mekanı tanımlamak için kullanılır (örneğin GLN numarası)
     * @param  Address|null  $Address  Addres bilgisini tutar.
     */
    public function __construct(
        public ?string $ID = null,
        public ?Address $Address = null
    ) {}
}
