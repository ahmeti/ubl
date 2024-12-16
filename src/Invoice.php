<?php

namespace Ahmeti\Ubl;

class Invoice
{
    /**
     * @param  DespatchDocumentReference[]  $DespatchDocumentReference  İrsaliye bilgileri girilir.
     * @param  BillingReference[]  $BillingReference  İade edilen fatura bilgileri girilir.
     * @param  DocumentReference[]  $AdditionalDocumentReference  Referans dokümanlar girilir.
     * @param  InvoiceLine[]  $InvoiceLine  Fatura kalemleri girilir.
     */
    public function __construct(
        public ?string $UBLVersionID = null,
        public ?string $CustomizationID = null,
        public ?string $ProfileID = null,
        public ?string $ID = null,
        public string $CopyIndicator = 'false',
        public ?string $UUID = null,
        public ?string $IssueDate = null,
        public ?string $IssueTime = null,
        public ?string $InvoiceTypeCode = null,
        public ?array $Note = null,
        public ?string $DocumentCurrencyCode = null,
        public ?int $LineCountNumeric = null,
        public ?OrderReference $OrderReference = null,
        public array $DespatchDocumentReference = [],
        public array $BillingReference = [],
        public array $AdditionalDocumentReference = [],
        public ?Signature $Signature = null,
        public ?AccountingSupplierParty $AccountingSupplierParty = null,
        public ?AccountingCustomerParty $AccountingCustomerParty = null,
        public ?PaymentMeans $PaymentMeans = null,
        public ?AllowanceCharge $AllowanceCharge = null,
        public ?PricingExchangeRate $PricingExchangeRate = null,
        public ?TaxTotal $TaxTotal = null,
        public ?LegalMonetaryTotal $LegalMonetaryTotal = null,
        public ?BuyerCustomerParty $BuyerCustomerParty = null,
        public ?Delivery $Delivery = null,
        public ?PaymentTerms $PaymentTerms = null,
        public ?OriginatorDocumentReference $OriginatorDocumentReference = null,
        public ?PaymentAlternativeExchangeRate $PaymentAlternativeExchangeRate = null,
        public ?InvoicePeriod $InvoicePeriod = null,
        public ?TaxRepresentativeParty $TaxRepresentativeParty = null,
        public array $InvoiceLine = []
    ) {}
}
