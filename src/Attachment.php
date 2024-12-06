<?php

namespace Ahmeti\Ubl;

/**
 * Belgelerde referans verilmek istenen referansların ya da belgelere eklenmek istenen dokümanların yer aldığı elemandır.
 */
class Attachment
{
    /**
     * @param  ExternalReference|null  $ExternalReference  İlişkilendirilmek istenen dokümanın URI formatında referansını tutar. Eğer Attachment elemanı, bir “DigitalSignatureAttachment” ise (diğer bir deyişle Signature Elemanının içerisine yeralıyorsa) External Reference zorunlu bir elemandır.
     * @param  EmbeddedDocumentBinaryObject|null  $EmbeddedDocumentBinaryObject  İlişiklendirilmiş dokümanı base64Encoded formatında tutar.
     */
    public function __construct(
        public ?ExternalReference $ExternalReference = null,
        public ?EmbeddedDocumentBinaryObject $EmbeddedDocumentBinaryObject = null
    ) {}
}
