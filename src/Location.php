<?php

namespace Ahmeti\Ubl;

/**
 * Mekan bilgisi girilir.
 */
class Location
{
    /**
     * Mekanı tanımlamak için kullanılır (örneğin GLN numarası)
     */
    public ?string $ID = null;

    /**
     * Addres bilgisini tutar.
     */
    public ?Address $Address = null;
}
