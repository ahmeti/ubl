<?php

namespace Ahmeti\Ubl;

/**
 * Hesap bilgilerinin tutulduğu bölümdür.
 */
class FinancialAccount
{
    /**
     * Hesap numarası metin olarak girilir.
     */
    public ?string $ID = null;

    /**
     * Hesabın para birimi kodu girilir.
     */
    public ?string $CurrencyCode = null;

    /**
     * Ödeme ile ilgili açıklama serbest metin olarak girilir.
     */
    public ?string $PaymentNote = null;

    /**
     * Hesabın bulunduğu banka ve şube bilgileri girilebilir.
     */
    public ?FinancialInstitutionBranch $FinancialInstitutionBranch = null;
}
