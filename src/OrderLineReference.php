<?php

namespace Ahmeti\Ubl;

/**
 * Siparişin kalemlerine referans atmak için kullanılır
 */
class OrderLineReference
{
    /**
     * Kalem numarası girilir.
     */
    public ?string $LineID = null;

    /**
     * Alıcının verdiği kalem numarası verilir.
     */
    public ?string $SalesOrderLineID = null;

    /**
     * Sipariş Kaleminin tekil numarası girilir.
     */
    public ?string $UUID = null;

    /**
     * Kalemin durumu girilir.
     */
    public ?string $LineStatusCode = null;

    /**
     * İlgili sipariş belgesine referans verilir.
     */
    public ?OrderReference $OrderReference = null;
}
