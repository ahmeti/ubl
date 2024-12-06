<?php

namespace Ahmeti\Ubl;

/**
 * Satıcı bilgilerini tutan elemandır
 */
class SupplierParty
{
    /**
     * @param  Party|null  $Party  Satıcı tarafı tanımlar
     * @param  DespatchContact|null  $DespatchContact  DespatchSupplierParty elemanı altında kullanılması durumunda teslim eden bilgisi girilir.
     */
    public function __construct(
        public ?Party $Party = null,
        public ?DespatchContact $DespatchContact = null
    ) {}
}
