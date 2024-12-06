<?php

namespace Ahmeti\Ubl;

/**
 * Bu alana UBLExtensions alanına eklenen dijital imzaya referans eklenecektir.
 */
class DigitalSignatureAttachment
{
    /**
     * @param  ExternalReference|null  $ExternalReference  Referans Bilgisi (Stowage)
     */
    public function __construct(
        public ?ExternalReference $ExternalReference = null
    ) {}
}
