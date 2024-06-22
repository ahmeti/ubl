<?php

namespace Ahmeti\Ubl;

/**
 * Kalem ile ilgili tanımlayıcı bilgilere bu elemanda yer verilecektir.
 */
class LineReference
{
    /**
     * Kalem Numarası. Kalemin sıra numarası girilecektir.
     */
    public ?string $LineID = null;

    /**
     * Kalemin durum bilgisi girilebilecektir.
     */
    public ?string $LineStatusCode = null;

    /**
     * Referans Belge
     */
    public ?DocumentReference $DocumentReference = null;
}
