<?php

namespace Ahmeti\Ubl;

/**
 * Alıcı tarafın bilgilerini tutan elemandır.
 */
class CustomerParty
{
    /**
     * @param  Party|null  $Party  Alıcı tarafın bilgilerini tutan elemandır.
     * @param  DeliveryContact|null  $DeliveryContact  ReceiptAdvice içerisinde kullanımında teslim alan bilgisi girilebilir.
     */
    public function __construct(
        public ?Party $Party,
        public ?DeliveryContact $DeliveryContact = null
    ) {}
}
