<?php

namespace Ahmeti\Ubl;

/**
 * Satıcı bilgilerini tutan elemandır
 */
class SupplierParty
{
    /**
     * Satıcı tarafı tanımlar
     */
    public ?Party $Party = null;

    /**
     * DespatchSupplierParty elemanı altında kullanılması durumunda teslim eden bilgisi girilir.
     */
    public ?DespatchContact $DespatchContact = null;
}
