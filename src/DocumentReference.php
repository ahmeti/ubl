<?php

namespace Ahmeti\Ubl;

/**
 * Referans verilen ya da eklenen belgelere ilişkin bilgiler girilecektir
 */
class DocumentReference
{
    /**
     * @param  string|null  $ID  Referans verilen veya eklenen belgenin sıra numarası girilecektir.
     * @param  string|null  $IssueDate  Belgenin düzenlenme tarihi girilecektir.
     * @param  string|null  $DocumentTypeCode  Bu eleman belge seviyesinde kullanılmayacaktır. Kullanım alanı sistem seviyesinde dönen uygulama yanıtı (ApplicationResponse) belgesinin içindedir.
     * @param  string|null  $DocumentType  Referans verilen veya eklenen belgenin tipi girilecektir. Örnek olarak “XSLT”, “REKLAM”, “PROFORMA”,  “GÖRÜŞME DETAYI” ve benzeri değerler girilebilir.
     * @param  string|null  $DocumentDescription  Referans verilen ya da eklenen belgelere ilişkin serbest metin açıklaması girilebilir.
     * @param  Attachment|null  $Attachment  Ek belgeler.
     * @param  ValidityPeriod|null  $ValidityPeriod  Referans verilen ya da eklenen belgenin geçerlilik süresi girilebilir.
     * @param  IssuerParty|null  $IssuerParty  Referans verilen ya da eklenen belgeyi yayınlayan taraf bilgisi girilebilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $IssueDate = null,
        public ?string $DocumentTypeCode = null,
        public ?string $DocumentType = null,
        public ?string $DocumentDescription = null,
        public ?Attachment $Attachment = null,
        public ?ValidityPeriod $ValidityPeriod = null,
        public ?IssuerParty $IssuerParty = null
    ) {}
}
