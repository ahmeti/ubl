<?php

namespace Ahmeti\Ubl;

class DespatchSupplierParty
{
    public function __construct(
        public ?Party $Party = null,
        public ?DespatchContact $DespatchContact = null
    ) {}
}
