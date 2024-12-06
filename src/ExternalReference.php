<?php

namespace Ahmeti\Ubl;

/**
 *  İlişkilendirilmek istenen dokümanın URI formatında referansını tutar.
 */
class ExternalReference
{
    /**
     * @param  string|null  $URI  Dökümanın URI adresi.
     */
    public function __construct(
        public ?string $URI = null
    ) {}
}
