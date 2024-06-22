<?php

namespace Ahmeti\Ubl;

class ApplicationResponse
{
    public ?string $UBLVersionID = null;

    public ?string $CustomizationID = null;

    public ?string $ProfileID = null;

    public ?string $ID = null;

    public ?string $UUID = null;

    public ?string $IssueDate = null;

    public ?string $IssueTime = null;

    public ?array $Note = null;

    public ?Signature $Signature = null;

    public ?SenderParty $SenderParty = null;

    public ?ReceiverParty $ReceiverParty = null;

    public ?DocumentResponse $DocumentResponse = null;
}
