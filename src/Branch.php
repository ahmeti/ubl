<?php

namespace Ahmeti\Ubl;

/**
 * Şube bilgisi girilir.
 */
class Branch
{
    /**
     * Şube adı girilir.
     */
    public ?string $Name = null;

    /**
     * Banka bilgisi girilir.
     */
    public ?FinancialInstitution $FinancialInstitution = null;
}
