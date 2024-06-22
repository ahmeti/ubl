<?php

namespace Ahmeti\Ubl;

/**
 * Tarafları (kurum ve şahıslar) tanımlamak için kullanılır.
 */
class Party
{
    /**
     * Tarafın web sayfası adresi metin olarak girilir.
     */
    public ?string $WebsiteURI = null;

    /**
     * Tarafın ana faaliyet (NACE) kodu girilecektir.
     */
    public ?string $IndustryClassificationCode = null;

    /**
     * Tarafın vergi kimlik numarası veya TC kimlik numarası metin olarak girilir.
     */
    public ?PartyIdentification $PartyIdentification = null;

    /**
     * Taraf eğer kurum ise kurum ismi bu elemana metin olarak girilir.
     */
    public ?PartyName $PartyName = null;

    /**
     * Tarafın adresi girilir.
     */
    public ?PostalAddress $PostalAddress = null;

    /**
     * Tarafın var ise depo bilgileri girilir.
     */
    public ?PostalAddress $PhysicalLocation = null;

    /**
     * Tarafın vergi kimlik numarası girilmişse bu alana vergi dairesi adı girilir.
     */
    public ?PartyTaxScheme $PartyTaxScheme = null;

    /**
     * Tarafın diğer kayıtlı olduğu yerlerin bilgileri ve kayıtlı olduğu yerlerdeki kayıt numaraları detaylı olarak girilecektir.
     */
    public ?PartyLegalEntity $PartyLegalEntity = null;

    /**
     * Tarafın iletişim bilgileri girilir.
     */
    public ?Contact $Contact = null;

    /**
     * Taraf eğer şahıssa bu eleman kullanılır.
     */
    public ?Person $Person = null;

    /**
     * Tarafın şubesine ait bilgiler bu elemana girilir.
     */
    public ?AgentParty $AgentParty = null;
}
