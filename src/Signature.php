<?php

namespace Ahmeti\Ubl;

/**
 * Bu elemana belgelerde kullanılan mali mühür/elektronik imza ile ilgili bilgiler girilir.
 */
class Signature
{
    /**
     * Bu alana dokumana eklenecek elektronik imza ile ilgili bir referans numarası verilecektir.
     */
    public ?string $ID = null;

    /**
     * Bu alana dokumanı imzalayan imza sahibinin bilgileri eklenecektir.
     */
    public ?SignatoryParty $SignatoryParty = null;

    /**
     * Bu alana UBLExtensions alanına eklenen dijital imzaya referans eklenecektir.
     */
    public ?DigitalSignatureAttachment $DigitalSignatureAttachment = null;
}
