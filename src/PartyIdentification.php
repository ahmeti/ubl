<?php

namespace Ahmeti\Ubl;

use Ahmeti\Ubl\Utils\UblCustomAttr;

/**
 * Tarafın vergi kimlik numarası veya TC kimlik numarası metin olarak girilir.
 */
class PartyIdentification
{
    public function __construct(
        public ?UblCustomAttr $ID = null
    ) {}
}
