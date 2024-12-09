<?php

namespace Ahmeti\Ubl;

use Ahmeti\Ubl\Utils\UblCustomAttr;

/**
 * Mal/hizmetin birim fiyatı girilir
 */
class Price
{
    /**
     * @param  UblCustomAttr|null  $PriceAmount  (val = string, attrs = [currencyID="TRY"])
     */
    public function __construct(
        public ?UblCustomAttr $PriceAmount = null
    ) {}
}
