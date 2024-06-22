<?php

namespace Ahmeti\Ubl;

/**
 * Ürün hakkında gümrük numaralandırma bilgisi girilir.
 */
class CustomsDeclaration
{
    /**
     * Ürünün ilgili gümrük numarası girilir
     */
    public ?string $ID = null;

    /**
     * Numaralandırmayı yapan kurum bilgisi girilir
     */
    public ?IssuerParty $IssuerParty = null;
}
