<?php

namespace Ahmeti\Ubl;

/**
 * Bu eleman aracılığıyla vergi dairesi ile ilgili bilgiler verilebileceği gibi vergi ile ilgili bilgiler de verilebilir.
 * Bu elemanın farklı kullanımları için ilgili belge açıklamalarına bakınız.
 */
class TaxScheme
{
    /**
     * @param  string|null  $ID  Vergilendirme şemasının ID bilgisi girilir.
     * @param  string|null  $Name  Bu eleman “Party” elemanı içerisinde kullanıldığında vergi dairesi adını içermektedir.
     * @param  string|null  $TaxTypeCode  Vergi Tipi Kodu girilecektir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $Name = null,
        public ?string $TaxTypeCode = null
    ) {}
}
