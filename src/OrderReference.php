<?php

namespace Ahmeti\Ubl;

/**
 * Siparişe ait bilgiler girilecektir.
 */
class OrderReference
{
    /**
     * @param  string|null  $ID  Sipariş numarası girilir.
     * @param  string|null  $SalesOrderID  Satıcının verdiği sipariş numarası girilir.
     * @param  string|null  $IssueDate  Sipariş tarihi girilir.
     * @param  string|null  $OrderTypeCode  Sipariş tipi girilir.
     * @param  DocumentReference|null  $DocumentReference  Ek dökümanlar
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $SalesOrderID = null,
        public ?string $IssueDate = null,
        public ?string $OrderTypeCode = null,
        public ?DocumentReference $DocumentReference = null
    ) {}
}
