<?php

namespace Ahmeti\Ubl;

/**
 * Banka bilgisi girilebilir.
 */
class FinancialInstitution
{
    /**
     * @param  string|null  $Name  Banka ismi girilebilir.
     */
    public function __construct(
        public ?string $Name = null
    ) {}
}
