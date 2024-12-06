<?php

namespace Ahmeti\Ubl;

/**
 * Bir belgenin belli bir kalemine yanıt verilirken bu eleman kullanılabilecektir.
 */
class LineResponse
{
    /**
     * @param  LineReference|null  $LineReference  Kalem Bilgisi
     * @param  Response|null  $Response  Yanıt
     */
    public function __construct(
        public ?LineReference $LineReference = null,
        public ?Response $Response = null
    ) {}
}
