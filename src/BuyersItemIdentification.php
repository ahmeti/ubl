<?php

namespace Ahmeti\Ubl;

/**
 * Alıcının mal/hizmete verdiği tanımlama bilgisi girilir.
 */
class BuyersItemIdentification extends ItemIdentification
{
    public function __construct(
        public ?string $ID = null
    ) {}
}
