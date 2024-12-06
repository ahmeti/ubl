<?php

namespace Ahmeti\Ubl;

/**
 * Siparişin kalemlerine referans atmak için kullanılır
 */
class OrderLineReference
{
    /**
     * @param  string|null  $LineID  Kalem numarası girilir.
     * @param  string|null  $SalesOrderLineID  Alıcının verdiği kalem numarası verilir.
     * @param  string|null  $UUID  Sipariş Kaleminin tekil numarası girilir.
     * @param  string|null  $LineStatusCode  Kalemin durumu girilir.
     * @param  OrderReference|null  $OrderReference  İlgili sipariş belgesine referans verilir.
     */
    public function __construct(
        public ?string $LineID = null,
        public ?string $SalesOrderLineID = null,
        public ?string $UUID = null,
        public ?string $LineStatusCode = null,
        public ?OrderReference $OrderReference = null
    ) {}
}
