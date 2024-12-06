<?php

namespace Ahmeti\Ubl;

/**
 * Tarafları (kurum ve şahıslar) tanımlamak için kullanılır.
 */
class Party
{
    /**
     * @param  string|null  $WebsiteURI  Tarafın web sayfası adresi metin olarak girilir.
     * @param  string|null  $IndustryClassificationCode  Tarafın ana faaliyet (NACE) kodu girilecektir.
     * @param  PartyIdentification|null  $PartyIdentification  Tarafın vergi kimlik numarası veya TC kimlik numarası metin olarak girilir.
     * @param  PartyName|null  $PartyName  Taraf eğer kurum ise kurum ismi bu elemana metin olarak girilir.
     * @param  PostalAddress|null  $PostalAddress  Tarafın adresi girilir.
     * @param  PostalAddress|null  $PhysicalLocation  Tarafın var ise depo bilgileri girilir.
     * @param  PartyTaxScheme|null  $PartyTaxScheme  Tarafın vergi kimlik numarası girilmişse bu alana vergi dairesi adı girilir.
     * @param  PartyLegalEntity|null  $PartyLegalEntity  Tarafın diğer kayıtlı olduğu yerlerin bilgileri ve kayıtlı olduğu yerlerdeki kayıt numaraları detaylı olarak girilecektir.
     * @param  Contact|null  $Contact  Tarafın iletişim bilgileri girilir.
     * @param  Person|null  $Person  Taraf eğer şahıssa bu eleman kullanılır.
     * @param  AgentParty|null  $AgentParty  Tarafın şubesine ait bilgiler bu elemana girilir.
     */
    public function __construct(
        public ?string $WebsiteURI = null,
        public ?string $IndustryClassificationCode = null,
        public ?PartyIdentification $PartyIdentification = null,
        public ?PartyName $PartyName = null,
        public ?PostalAddress $PostalAddress = null,
        public ?PostalAddress $PhysicalLocation = null,
        public ?PartyTaxScheme $PartyTaxScheme = null,
        public ?PartyLegalEntity $PartyLegalEntity = null,
        public ?Contact $Contact = null,
        public ?Person $Person = null,
        public ?AgentParty $AgentParty = null
    ) {}
}
