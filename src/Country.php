<?php

namespace Ahmeti\Ubl;

/**
 * Ülke bilgisi girilecektir.
 */
class Country
{
    /**
     * @param  string|null  $IdentificationCode  “IdentificationCode” elemanı ülkeleri tanımlamak için kullanılan kodlu elemandır. Bu eleman değer kümesini ISO 3166-1-alpha-2 Ülke Kodları listesinden almalıdır.
     * @param  string|null  $Name  Ülkeleri tanımlamak için kullanılan metin elemanıdır.
     */
    public function __construct(
        public ?string $IdentificationCode = null,
        public ?string $Name = null
    ) {}
}
