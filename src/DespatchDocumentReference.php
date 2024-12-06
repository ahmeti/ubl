<?php

namespace Ahmeti\Ubl;

class DespatchDocumentReference
{
    public function __construct(
        public ?string $ID = null,
        public ?string $IssueDate = null
    ) {}
}
