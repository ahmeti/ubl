<?php

namespace Ahmeti\Ubl;

/**
 * Kurumun kayıtlı olduğu organizasyon hakkında bilgileri tutar. Örneğin sanayi odası veya ticaret odası.
 */
class CorporateRegistrationScheme
{
    /**
     * Kayıt yeri numarası girilebilir.
     */
    public ?string $ID = null;

    /**
     * Kayıt yeri ismi girilebilir.
     */
    public ?string $Name = null;

    /**
     * Kayıt yeri tipi girilebilir
     */
    public ?string $CorporateRegistrationTypeCode = null;

    /**
     * Kayıt yeri adresi girilebilir.
     */
    public ?JurisdictionRegionAddress $JuridictionRegionAddress = null;
}
