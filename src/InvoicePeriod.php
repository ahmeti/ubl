<?php

namespace Ahmeti\Ubl;

class InvoicePeriod
{
    public function __construct(
        public ?string $StartDate = null,
        public ?string $EndDate = null
    ) {}
}
