<?php

namespace Ahmeti\Ubl;

/**
 * Mal/hizmetin birim fiyatı girilir
 */
class Price
{
    /**
     * @param  array|null  $PriceAmount  (val = string, attrs = [currencyID="TRY"])
     */
    public function __construct(
        public ?array $PriceAmount = null
    ) {}
}
