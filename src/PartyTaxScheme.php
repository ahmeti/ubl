<?php

namespace Ahmeti\Ubl;

/**
 * Bu eleman aracılığıyla Tarafın(Party) vergi dairesi ile ilgili bilgiler verilir
 */
class PartyTaxScheme
{
    /**
     * @param  string|null  $RegistrationName  İhracat faturasında ilgili ülkedeki kurumun resmi ünvanı yazılır.
     * @param  string|null  $CompanyID  İhracat faturasında ilgili ülkedeki kurumun vergi kayıt kodu yazılır.
     * @param  TaxScheme|null  $TaxScheme  Vergi Dairesi adı
     */
    public function __construct(
        public ?string $RegistrationName = null,
        public ?string $CompanyID = null,
        public ?TaxScheme $TaxScheme = null
    ) {}
}
