<?php

namespace Ahmeti\Ubl;

/**
 * Teslimat koşulları girilir.
 */
class DeliveryTerms
{
    /**
     * Teslim koşulları girilir (örneğin CIF, FOB).
     */
    public ?string $ID = null;

    /**
     * Teslimat koşulları serbest metin olarak girilir.
     */
    public ?string $SpecialTerms = null;

    /**
     * Teslimat koşullarının kapsadığı tutar girilebilir
     */
    public ?float $Amount = null;
}
