<?php

namespace Ahmeti\Ubl\Utils;

class UblCustomAttr
{
    /**
     * @param  array|null  $schemaID  XML Attribute'leri
     * @param  string|null  $Value  XML Değeri
     */
    public function __construct(
        public ?array $schemaID = null,
        public ?string $Value = null
    ) {}
}
