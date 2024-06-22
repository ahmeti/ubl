<?php

namespace Ahmeti\Ubl;

/**
 * Mal/Hizmet bilgilerinin girildiği bölümdür.
 */
class Item
{
    /**
     * Mal/Hizmet hakkında açıklama serbest metin olarak girilir.
     */
    public ?string $Description = null;

    /**
     * Mal/hizmet adı serbest metin olarak girilir.
     */
    public ?string $Name = null;

    /**
     * Mal/hizmet ile ilgili anahtar kelimeler veya fatura satır tipi bilgileri girilebilir.
     */
    public ?string $Keyword = null;

    /**
     * Mal/hizmet marka adı serbest metin olarak girilir.
     */
    public ?string $BrandName = null;

    /**
     * Mal/hizmet model adı serbest metin olarak girilir.
     */
    public ?string $ModelName = null;

    /**
     * Alıcının mal/hizmete verdiği tanımlama bilgisi girilir.
     */
    public ?BuyersItemIdentification $BuyersItemIdentification = null;

    /**
     * Satıcının mal/hizmete verdiği tanımlama bilgisi girilir.
     */
    public ?SellersItemIdentification $SellersItemIdentification = null;

    /**
     * Üreticinin mal/hizmete verdiği tanımlama bilgisi girilir. Araç Tescil Faturalarında Şasi Numarası bu elemana girilecektir.
     */
    public ?ManufacturersItemIdentification $ManufacturersItemIdentification = null;

    /**
     * Mal/hizmet için diğer kullanılabilecek sınıflandırma bilgileri girilebilir.
     */
    public ?AdditionalItemIdentification $AdditionalItemIdentification = null;

    /**
     * Menşei bilgisi girilebilir.
     */
    public ?OriginCountry $OriginCountry = null;

    /**
     * Emtia sınıflandırma bilgisi girilir.
     */
    public ?CommodityClassification $CommodityClassification = null;

    /**
     * Parti lot bilgisi, ürün takip numarası, üretim zamanı, seri numarası ve kayıt numarası gibi bilgiler girilebilir.
     */
    public ?ItemInstance $ItemInstance = null;
}
