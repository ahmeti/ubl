<?php

namespace Ahmeti\Ubl;

use Ahmeti\Ubl\Utils\UblCustomAttr;

/**
 * Bu elemana belgelerde kullanılan mali mühür/elektronik imza ile ilgili bilgiler girilir.
 */
class Signature
{
    /**
     * @param  UblCustomAttr|null  $ID  Bu alana dokumana eklenecek elektronik imza ile ilgili bir referans numarası verilecektir.
     * @param  SignatoryParty|null  $SignatoryParty  Bu alana dokumanı imzalayan imza sahibinin bilgileri eklenecektir.
     * @param  DigitalSignatureAttachment|null  $DigitalSignatureAttachment  Bu alana UBLExtensions alanına eklenen dijital imzaya referans eklenecektir.
     */
    public function __construct(
        public ?UblCustomAttr $ID = null,
        public ?SignatoryParty $SignatoryParty = null,
        public ?DigitalSignatureAttachment $DigitalSignatureAttachment = null
    ) {}
}
