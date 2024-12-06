<?php

namespace Ahmeti\Ubl;

class DeliveryCustomerParty
{
    public function __construct(
        public ?Party $Party = null,
        public ?DeliveryContact $DeliveryContact = null
    ) {}
}
