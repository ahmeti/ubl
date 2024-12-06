<?php

namespace Ahmeti\Ubl;

/**
 * Satıcının mal/hizmete verdiği tanımlama bilgisi girilir.
 */
class SellersItemIdentification extends ItemIdentification
{
    public function __construct(
        public ?string $ID = null
    ) {}
}
