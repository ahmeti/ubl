<?php

namespace Ahmeti\Ubl;

class ReceiptAdvice
{
    public ?string $UBLVersionID = null;

    public ?string $CustomizationID = null;

    public ?string $ProfileID = null;

    public ?string $ID = null;

    public ?string $CopyIndicator = null;

    public ?string $UUID = null;

    public ?string $IssueDate = null;

    public ?string $IssueTime = null;

    public ?array $Note = null;

    public ?string $ReceiptAdviceTypeCode = null;

    public ?OrderReference $OrderReference = null;

    public ?DespatchDocumentReference $DespatchDocumentReference = null;

    public ?AdditionalDocumentReference $AdditionalDocumentReference = null;

    public ?Signature $Signature = null;

    public ?DeliveryCustomerParty $DeliveryCustomerParty = null;

    public ?Shipment $Shipment = null;

    public ?ReceiptLine $ReceiptLine = null;
}
