<?php

namespace Ahmeti\Ubl;

/**
 * Belge üzerinde yer alan vergi türü, muafiyet ve istisnalara ilişkin bilgiler girilir.
 */
class TaxCategory
{
    /**
     * Vergi türü ismi girilebilecektir.
     */
    public ?string $Name = null;

    /**
     * Vergi muafiyet, istisna sebepleri bu alana kodlu olarak girilecektir.
     */
    public ?string $TaxExemptionReasonCode = null;

    /**
     * Vergi muafiyet, istisna sebepleri bu alana serbest metin olarak girilecektir.
     */
    public ?string $TaxExemptionReason = null;

    /**
     * Uygulanan vergi türü hakkında bilgiler girilir.
     */
    public ?TaxScheme $TaxScheme = null;
}
