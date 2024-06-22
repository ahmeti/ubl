<?php

namespace Ahmeti\Ubl;

/**
 * Siparişe ait bilgiler girilecektir.
 */
class OrderReference
{
    /**
     * Sipariş numarası girilecektir.
     */
    public ?string $ID = null;

    /**
     * Satıcının verdiği sipariş numarası girilecektir.
     */
    public ?string $SalesOrderID = null;

    /**
     * Sipariş tarihi girilecektir.
     */
    public ?string $IssueDate = null;

    /**
     * Sipariş tipi girilecektir.
     */
    public ?string $OrderTypeCode = null;

    /**
     * Ek dökümanlar
     */
    public ?DocumentReference $DocumentReference = null;
}
