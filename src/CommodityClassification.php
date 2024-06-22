<?php

namespace Ahmeti\Ubl;

/**
 * Ürün hakkında uluslararası standart veya ulusal kodlar (örneğin, Sağlık Uygulama Tebliği) tabanlı sınıflandırma bilgisi vermek istenmesi durumunda girilir.
 */
class CommodityClassification
{
    /**
     * Ürün hakkında uluslararası standart veya ulusal kodlar (örneğin, Sağlık Uygulama Tebliği) tabanlı sınıflandırma bilgisi vermek istenmesi durumunda girilir.
     * <cbc:ItemClassificationCode listAgencyID="113" listID="UNSPSC">12344321</cbc:ItemClassificationCode>
     */
    public ?array $ItemClassificationCode = null;
}
