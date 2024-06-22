<?php

namespace Ahmeti\Ubl;

/**
 * Bir belgenin belli bir kalemine yanıt verilirken bu eleman kullanılabilecektir.
 */
class LineResponse
{
    /**
     * Kalem Bilgisi
     */
    public ?LineReference $LineReference = null;

    /**
     * Yanıt
     */
    public ?Response $Response = null;
}
