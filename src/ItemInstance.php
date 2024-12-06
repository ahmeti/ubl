<?php

namespace Ahmeti\Ubl;

/**
 * Parti lot bilgisi, ürün takip numarası, üretim zamanı, seri numarası ve kayıt numarası gibi bilgiler girilebilir.
 */
class ItemInstance
{
    /**
     * @param  string|null  $ProductTraceID  Ürün İz Numarası girilebilir.
     * @param  string|null  $ManufacturedDate  Üretim tarihi girilir.
     * @param  string|null  $ManufacturedTime  Üretim zamanı girilir.
     * @param  string|null  $BestBeforeDate  Son kullanım tarihi girilir.
     * @param  string|null  $RegistrationID  Kayıt numarası girilir.
     * @param  string|null  $SerialID  Seri numarası girilir.
     * @param  string|null  $AdditionalItemProperty  Ürün hakkında başka özellikler var ise girilir.
     * @param  string|null  $LotIdentification  Lot numarası girilir
     */
    public function __construct(
        public ?string $ProductTraceID = null,
        public ?string $ManufacturedDate = null,
        public ?string $ManufacturedTime = null,
        public ?string $BestBeforeDate = null,
        public ?string $RegistrationID = null,
        public ?string $SerialID = null,
        public ?string $AdditionalItemProperty = null,
        public ?string $LotIdentification = null
    ) {}
}
