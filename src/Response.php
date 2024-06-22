<?php

namespace Ahmeti\Ubl;

/**
 * Yanıta ait detaylar bu elemanda gösterilecektir
 */
class Response
{
    /**
     * Response elemanını tekil olarak tanımlayan numaradır.
     */
    public ?string $ReferenceID = null;

    /**
     * YanıtKodu
     */
    public ?string $ResponseCode = null;

    /**
     * Tanımlama. Yanıt ile ilgili açıklamalar bu elemana serbest metin olarak yazılabilecektir.
     */
    public ?string $Description = null;
}
