<?php

namespace Ahmeti\Ubl;

/**
 * Şube bilgisi girilir.
 */
class Branch
{
    /**
     * @param  string|null  $Name  Şube adı girilir.
     * @param  FinancialInstitution|null  $FinancialInstitution  Banka bilgisi girilir.
     */
    public function __construct(
        public ?string $Name = null,
        public ?FinancialInstitution $FinancialInstitution = null
    ) {}
}
