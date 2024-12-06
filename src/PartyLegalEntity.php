<?php

namespace Ahmeti\Ubl;

/**
 * Tarafın sicil bilgilerini veya merkez bilgilerini içerir.
 */
class PartyLegalEntity
{
    /**
     * @param  string|null  $RegistrationName  Kayıt ismi girilir.
     * @param  string|null  $CompanyID  Kayıt numarası girilir.
     * @param  string|null  $RegistrationDate  Kayıt tarihi girilir.
     * @param  bool|null  $SolePrioprietorshipIndicator  Tek bir kişiye ait olup olmadığını belirtir.
     * @param  array|null  $CorporateStockAmount  Ödenmiş sermaye bilgisi girilir. (attrs)
     * @param  bool|null  $FullyPaidSharesIndicator  Şirketin halka açık olup olmadığının göstergesi girilebilir.
     * @param  CorporateRegistrationScheme|null  $CorporateRegistrationScheme  Kayıtlı olduğu yerin bilgilerini içerir.
     * @param  HeadOfficeParty|null  $HeadOfficeParty  Merkez bilgilerini içerir.
     */
    public function __construct(
        public ?string $RegistrationName = null,
        public ?string $CompanyID = null,
        public ?string $RegistrationDate = null,
        public ?bool $SolePrioprietorshipIndicator = null,
        public ?array $CorporateStockAmount = null,
        public ?bool $FullyPaidSharesIndicator = null,
        public ?CorporateRegistrationScheme $CorporateRegistrationScheme = null,
        public ?HeadOfficeParty $HeadOfficeParty = null
    ) {}
}
