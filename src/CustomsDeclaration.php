<?php

namespace Ahmeti\Ubl;

/**
 * Ürün hakkında gümrük numaralandırma bilgisi girilir.
 */
class CustomsDeclaration
{
    /**
     * @param  string|null  $ID  Ürünün ilgili gümrük numarası girilir
     * @param  IssuerParty|null  $IssuerParty  Numaralandırmayı yapan kurum bilgisi girilir
     */
    public function __construct(
        public ?string $ID = null,
        public ?IssuerParty $IssuerParty = null
    ) {}
}
