<?php

namespace Ahmeti\Ubl;

/**
 * Yanıta ait detaylar bu elemanda gösterilecektir
 */
class Response
{
    /**
     * @param  string|null  $ReferenceID  Response elemanını tekil olarak tanımlayan numaradır.
     * @param  string|null  $ResponseCode  YanıtKodu
     * @param  string|null  $Description  Tanımlama. Yanıt ile ilgili açıklamalar bu elemana serbest metin olarak yazılabilecektir.
     */
    public function __construct(
        public ?string $ReferenceID = null,
        public ?string $ResponseCode = null,
        public ?string $Description = null
    ) {}
}
