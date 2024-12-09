<?php

namespace Ahmeti\Ubl\Utils;

class UblCustomAttr
{
    /**
     * @param  array|null  $schemaID  XML Attribute'leri
     * @param  int|float|string|null  $Value  XML Değeri
     */
    public function __construct(
        public ?array $schemaID = null,
        public null|int|float|string $Value = null
    ) {}
}
