<?php

namespace Ahmeti\Ubl;

/**
 * Ülke bilgisi girilecektir.
 */
class Country
{
    /**
     * “IdentificationCode” elemanı ülkeleri tanımlamak için kullanılan kodlu elemandır.
     * Bu eleman değer kümesini ISO 3166-1-alpha-2 Ülke Kodları listesinden almalıdır.
     */
    public ?string $IdentificationCode = null;

    /**
     * Ülkeleri tanımlamak için kullanılan metin elemanıdır.
     */
    public ?string $Name = null;
}
