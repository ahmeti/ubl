<?php

namespace Ahmeti\Ubl;

/**
 * Bu eleman aracılığıyla vergi dairesi ile ilgili bilgiler verilebileceği gibi vergi ile ilgili bilgiler de verilebilir.
 * Bu elemanın farklı kullanımları için ilgili belge açıklamalarına bakınız.
 */
class TaxScheme
{
    /**
     * Vergilendirme şemasının ID bilgisi girilir.
     */
    public ?string $ID = null;

    /**
     * Bu eleman “Party” elemanı içerisinde kullanıldığında vergi dairesi adını içermektedir.
     */
    public ?string $Name = null;

    /**
     * Vergi Tipi Kodu girilecektir.
     */
    public ?string $TaxTypeCode = null;
}
