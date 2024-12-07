<?php

namespace Ahmeti\Ubl;

/**
 * Bu elemana belgelerde kullanılan mali mühür/elektronik imza ile ilgili bilgiler girilir.
 */
class Signature
{
    /**
     * @param  array  $ID  Bu alana dokumana eklenecek elektronik imza ile ilgili bir referans numarası verilecektir.
     * @param  SignatoryParty|null  $SignatoryParty  Bu alana dokumanı imzalayan imza sahibinin bilgileri eklenecektir.
     * @param  DigitalSignatureAttachment|null  $DigitalSignatureAttachment  Bu alana UBLExtensions alanına eklenen dijital imzaya referans eklenecektir.
     */
    public function __construct(
        public array $ID = [],
        public ?SignatoryParty $SignatoryParty = null,
        public ?DigitalSignatureAttachment $DigitalSignatureAttachment = null
    ) {}
}
