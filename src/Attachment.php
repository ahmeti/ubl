<?php

namespace Ahmeti\Ubl;

/**
 * Belgelerde referans verilmek istenen referansların ya da belgelere eklenmek istenen dokümanların yer aldığı elemandır.
 */
class Attachment
{
    /**
     * İlişkilendirilmek istenen dokümanın URI formatında referansını tutar.
     * Eğer Attachment elemanı, bir “DigitalSignatureAttachment” ise (diğer bir deyişle Signature Elemanının içerisine yeralıyorsa)
     * External Reference zorunlu bir elemandır.
     */
    public ?ExternalReference $ExternalReference = null;

    /**
     * İlişiklendirilmiş dokümanı base64Encoded formatında tutar.
     */
    public ?EmbeddedDocumentBinaryObject $EmbeddedDocumentBinaryObject = null;
}
