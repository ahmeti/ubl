<?php

namespace Ahmeti\Ubl;

/**
 * Kalem ile ilgili tanımlayıcı bilgilere bu elemanda yer verilecektir.
 */
class LineReference
{
    /**
     * @param  string|null  $LineID  Kalem Numarası. Kalemin sıra numarası girilecektir.
     * @param  string|null  $LineStatusCode  Kalemin durum bilgisi girilebilecektir.
     * @param  DocumentReference|null  $DocumentReference  Referans Belge
     */
    public function __construct(
        public ?string $LineID = null,
        public ?string $LineStatusCode = null,
        public ?DocumentReference $DocumentReference = null
    ) {}
}
