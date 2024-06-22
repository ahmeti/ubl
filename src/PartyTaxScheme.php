<?php

namespace Ahmeti\Ubl;

/**
 * Bu eleman aracılığıyla Tarafın(Party) vergi dairesi ile ilgili bilgiler verilir
 */
class PartyTaxScheme
{
    /**
     * İhracat faturasında ilgili ülkedeki kurumun resmi ünvanı yazılır.
     */
    public ?string $RegistrationName = null;

    /**
     * İhracat faturasında ilgili ülkedeki kurumun vergi kayıt kodu yazılır.
     */
    public ?string $CompanyID = null;

    /**
     * Vergi Dairesi adı
     */
    public ?TaxScheme $TaxScheme = null;
}
