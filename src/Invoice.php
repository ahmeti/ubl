<?php

namespace Ahmeti\Ubl;

class Invoice
{
    public ?string $UBLVersionID = null;

    public ?string $CustomizationID = null;

    public ?string $ProfileID = null;

    public ?string $ID = null;

    public ?string $CopyIndicator = null;

    public ?string $UUID = null;

    public ?string $IssueDate = null;

    public ?string $IssueTime = null;

    public ?string $InvoiceTypeCode = null;

    public ?array $Note = null;

    public ?string $DocumentCurrencyCode = null;

    public ?string $LineCountNumeric = null;

    public ?OrderReference $OrderReference = null;

    public ?DespatchDocumentReference $DespatchDocumentReference = null;

    public ?BillingReference $BillingReference = null;

    public ?AdditionalDocumentReference $AdditionalDocumentReference = null;

    public ?Signature $Signature = null;

    public ?AccountingSupplierParty $AccountingSupplierParty = null;

    public ?AccountingCustomerParty $AccountingCustomerParty = null;

    public ?PaymentMeans $PaymentMeans = null;

    public ?AllowanceCharge $AllowanceCharge = null;

    public ?PricingExchangeRate $PricingExchangeRate = null;

    public ?TaxTotal $TaxTotal = null;

    public ?LegalMonetaryTotal $LegalMonetaryTotal = null;

    public ?BuyerCustomerParty $BuyerCustomerParty = null;

    public ?Delivery $Delivery = null;

    public ?PaymentTerms $PaymentTerms = null;

    public ?OriginatorDocumentReference $OriginatorDocumentReference = null;

    public ?PaymentAlternativeExchangeRate $PaymentAlternativeExchangeRate = null;

    public ?InvoicePeriod $InvoicePeriod = null;

    public ?TaxRepresentativeParty $TaxRepresentativeParty = null;

    /**
     * @var InvoiceLine[]
     */
    public ?array $InvoiceLine = null;
}
