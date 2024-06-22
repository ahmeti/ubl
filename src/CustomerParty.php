<?php

namespace Ahmeti\Ubl;

/**
 * Alıcı tarafın bilgilerini tutan elemandır.
 */
class CustomerParty
{
    /**
     * Alıcı tarafın bilgilerini tutan elemandır.
     */
    public ?Party $Party = null;

    /**
     * ReceiptAdvice içerisinde kullanımında teslim alan bilgisi girilebilir.
     */
    public ?DeliveryContact $DeliveryContact = null;
}
