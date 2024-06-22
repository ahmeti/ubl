<?php

namespace Ahmeti\Ubl;

/**
 * Referans verilen ya da eklenen belgelere ilişkin bilgiler girilecektir
 */
class DocumentReference
{
    /**
     * Referans verilen veya eklenen belgenin sıra numarası girilecektir.
     */
    public ?string $ID = null;

    /**
     * Belgenin düzenlenme tarihi girilecektir.
     */
    public ?string $IssueDate = null;

    /**
     * Bu eleman belge seviyesinde kullanılmayacaktır. Kullanım alanı sistem seviyesinde dönen uygulama yanıtı (ApplicationResponse) belgesinin içindedir.
     */
    public ?string $DocumentTypeCode = null;

    /**
     * Referans verilen veya eklenen belgenin tipi girilecektir. Örnek olarak “XSLT”, “REKLAM”, “PROFORMA”,  “GÖRÜŞME DETAYI” ve benzeri değerler girilebilir.
     */
    public ?string $DocumentType = null;

    /**
     * Referans verilen ya da eklenen belgelere ilişkin serbest metin açıklaması girilebilir.
     */
    public ?string $DocumentDescription = null;

    /**
     * Ek belgeler.
     */
    public ?Attachment $Attachment = null;

    /**
     * Referans verilen ya da eklenen belgenin geçerlilik süresi girilebilir.
     */
    public ?ValidityPeriod $ValidityPeriod = null;

    /**
     * Referans verilen ya da eklenen belgeyi yayınlayan taraf bilgisi girilebilir.
     */
    public ?IssuerParty $IssuerParty = null;
}
