<?php

namespace Ahmeti\Ubl;

/**
 * Tarafın vergi kimlik numarası veya TC kimlik numarası metin olarak girilir.
 */
class PartyIdentification
{
    public function __construct(
        public ?string $ID = null
    ) {}
}
