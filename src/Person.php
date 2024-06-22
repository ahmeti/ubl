<?php

namespace Ahmeti\Ubl;

/**
 * Şahısla ilgili bilgiler girilecektir.
 */
class Person
{
    /**
     * Şahsın ilk adı girilecektir.
     */
    public ?string $FirstName = null;

    /**
     * Şahsın soyadı girilecektir.
     */
    public ?string $FamilyName = null;

    /**
     * Şahsın ünvanı girilecektir.
     */
    public ?string $Title = null;

    /**
     * Şahsın diğer isimleri yazılacaktır.
     */
    public ?string $MiddleName = null;

    /**
     * Şahsın adının ön eki varsa bu alana girilecektir.
     */
    public ?string $NameSuffix = null;

    /**
     * Şahsın milliyeti girilecektir.
     */
    public ?string $NationalityID = null;

    /**
     * Şahsın hesap bilgileri girilecektir.
     */
    public ?FinancialAccount $FinancialAccount = null;

    /**
     * Şahsın kimlik dokümanına (Örneğin pasaport numarası buraya yazılacaktır) referans girilebilecektir.
     */
    public ?IdentityDocumentReference $IdentityDocumentReference = null;
}
