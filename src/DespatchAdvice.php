<?php

namespace Ahmeti\Ubl;

class DespatchAdvice
{
    public function __construct(
        public ?string $UBLVersionID = null,
        public ?string $CustomizationID = null,
        public ?string $ProfileID = null,
        public ?string $ID = null,
        public ?string $CopyIndicator = null,
        public ?string $UUID = null,
        public ?string $IssueDate = null,
        public ?string $IssueTime = null,
        public ?string $DespatchAdviceTypeCode = null,
        public ?int $LineCountNumeric = null,
        public ?array $Note = null,
        public ?OrderReference $OrderReference = null,
        public ?AdditionalDocumentReference $AdditionalDocumentReference = null,
        public ?Signature $Signature = null,
        public ?DespatchSupplierParty $DespatchSupplierParty = null,
        public ?DeliveryCustomerParty $DeliveryCustomerParty = null,
        public ?Shipment $Shipment = null,
        public ?array $DespatchLine = null
    ) {}
}
