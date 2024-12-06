<?php

namespace Ahmeti\Ubl;

/**
 * Şahısla ilgili bilgiler girilecektir.
 */
class Person
{
    /**
     * @param  string|null  $FirstName  Şahsın ilk adı girilecektir.
     * @param  string|null  $FamilyName  Şahsın soyadı girilecektir.
     * @param  string|null  $Title  Şahsın ünvanı girilecektir.
     * @param  string|null  $MiddleName  Şahsın diğer isimleri yazılacaktır.
     * @param  string|null  $NameSuffix  Şahsın adının ön eki varsa bu alana girilecektir.
     * @param  string|null  $NationalityID  Şahsın milliyeti girilecektir.
     * @param  FinancialAccount|null  $FinancialAccount  Şahsın hesap bilgileri girilecektir.
     * @param  IdentityDocumentReference|null  $IdentityDocumentReference  Şahsın kimlik dokümanına (Örneğin pasaport numarası buraya yazılacaktır) referans girilebilecektir.
     */
    public function __construct(
        public ?string $FirstName = null,
        public ?string $FamilyName = null,
        public ?string $Title = null,
        public ?string $MiddleName = null,
        public ?string $NameSuffix = null,
        public ?string $NationalityID = null,
        public ?FinancialAccount $FinancialAccount = null,
        public ?IdentityDocumentReference $IdentityDocumentReference = null
    ) {}
}
