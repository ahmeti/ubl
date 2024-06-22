<?php

namespace Ahmeti\Ubl;

/**
 * Tarafın sicil bilgilerini veya merkez bilgilerini içerir.
 */
class PartyLegalEntity
{
    /**
     * Kayıt ismi girilir.
     */
    public ?string $RegistrationName = null;

    /**
     * Kayıt numarası girilir.
     */
    public ?string $CompanyID = null;

    /**
     * Kayıt tarihi girilir.
     */
    public ?string $RegistrationDate = null;

    /**
     * Tek bir kişiye ait olup olmadığını belirtir.
     */
    public ?bool $SolePrioprietorshipIndicator = null;

    /**
     * Ödenmiş sermaye bilgisi girilir.
     * (attrs)
     */
    public ?array $CorporateStockAmount = null;

    /**
     * Şirketin halka açık olup olmadığının göstergesi girilebilir.
     */
    public ?bool $FullyPaidSharesIndicator = null;

    /**
     * Kayıtlı olduğu yerin bilgilerini içerir.
     */
    public ?CorporateRegistrationScheme $CorporateRegistrationScheme = null;

    /**
     *  Merkez bilgilerini içerir.
     */
    public ?HeadOfficeParty $HeadOfficeParty = null;
}
