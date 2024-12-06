<?php

namespace Ahmeti\Ubl;

/**
 * Hesap bilgilerinin tutulduğu bölümdür.
 */
class FinancialAccount
{
    /**
     * @param  string|null  $ID  Hesap numarası metin olarak girilir.
     * @param  string|null  $CurrencyCode  Hesabın para birimi kodu girilir.
     * @param  string|null  $PaymentNote  Ödeme ile ilgili açıklama serbest metin olarak girilir.
     * @param  FinancialInstitutionBranch|null  $FinancialInstitutionBranch  Hesabın bulunduğu banka ve şube bilgileri girilebilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $CurrencyCode = null,
        public ?string $PaymentNote = null,
        public ?FinancialInstitutionBranch $FinancialInstitutionBranch = null
    ) {}
}
