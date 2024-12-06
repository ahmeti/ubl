<?php

namespace Ahmeti\Ubl;

/**
 * Belge üzerinde yer alan vergi türü, muafiyet ve istisnalara ilişkin bilgiler girilir.
 */
class TaxCategory
{
    /**
     * @param  string|null  $Name  Vergi türü ismi girilebilecektir.
     * @param  string|null  $TaxExemptionReasonCode  Vergi muafiyet, istisna sebepleri bu alana kodlu olarak girilecektir.
     * @param  string|null  $TaxExemptionReason  Vergi muafiyet, istisna sebepleri bu alana serbest metin olarak girilecektir.
     * @param  TaxScheme|null  $TaxScheme  Uygulanan vergi türü hakkında bilgiler girilir.
     */
    public function __construct(
        public ?string $Name = null,
        public ?string $TaxExemptionReasonCode = null,
        public ?string $TaxExemptionReason = null,
        public ?TaxScheme $TaxScheme = null
    ) {}
}
