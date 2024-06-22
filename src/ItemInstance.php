<?php

namespace Ahmeti\Ubl;

/**
 * Parti lot bilgisi, ürün takip numarası, üretim zamanı, seri numarası ve kayıt numarası gibi bilgiler girilebilir.
 */
class ItemInstance
{
    /**
     * Ürün İz Numarası girilebilir.
     */
    public ?string $ProductTraceID = null;

    /**
     * Üretim tarihi girilir.
     */
    public ?string $ManufacturedDate = null;

    /**
     * Üretim zamanı girilir.
     */
    public ?string $ManufacturedTime = null;

    /**
     * Son kullanım tarihi girilir.
     */
    public ?string $BestBeforeDate = null;

    /**
     * Kayıt numarası girilir.
     */
    public ?string $RegistrationID = null;

    /**
     * Seri numarası girilir.
     */
    public ?string $SerialID = null;

    /**
     * Ürün hakkında başka özellikler var ise girilir.
     */
    public ?string $AdditionalItemProperty = null;

    /**
     * Lot numarası girilir
     */
    public ?string $LotIdentification = null;
}
