<?php

namespace Ahmeti\Ubl;

/**
 * Kurumun kayıtlı olduğu organizasyon hakkında bilgileri tutar. Örneğin sanayi odası veya ticaret odası.
 */
class CorporateRegistrationScheme
{
    /**
     * @param  string|null  $ID  Kayıt yeri numarası girilebilir.
     * @param  string|null  $Name  Kayıt yeri ismi girilebilir.
     * @param  string|null  $CorporateRegistrationTypeCode  Kayıt yeri tipi girilebilir
     * @param  JurisdictionRegionAddress|null  $JuridictionRegionAddress  Kayıt yeri adresi girilebilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $Name = null,
        public ?string $CorporateRegistrationTypeCode = null,
        public ?JurisdictionRegionAddress $JuridictionRegionAddress = null
    ) {}
}
