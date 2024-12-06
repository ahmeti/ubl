<?php

namespace Ahmeti\Ubl;

class BuyerCustomerParty
{
    public function __construct(
        public ?Party $Party = null
    ) {}
}
