<?php

namespace Ahmeti\Ubl;

/**
 * Mal/Hizmet bilgilerinin girildiği bölümdür.
 */
class Item
{
    /**
     * @param  string|null  $Description  Mal/Hizmet hakkında açıklama serbest metin olarak girilir.
     * @param  string|null  $Name  Mal/hizmet adı serbest metin olarak girilir.
     * @param  string|null  $Keyword  Mal/hizmet ile ilgili anahtar kelimeler veya fatura satır tipi bilgileri girilebilir.
     * @param  string|null  $BrandName  Mal/hizmet marka adı serbest metin olarak girilir.
     * @param  string|null  $ModelName  Mal/hizmet model adı serbest metin olarak girilir.
     * @param  BuyersItemIdentification|null  $BuyersItemIdentification  Alıcının mal/hizmete verdiği tanımlama bilgisi girilir.
     * @param  SellersItemIdentification|null  $SellersItemIdentification  Satıcının mal/hizmete verdiği tanımlama bilgisi girilir.
     * @param  ManufacturersItemIdentification|null  $ManufacturersItemIdentification  Üreticinin mal/hizmete verdiği tanımlama bilgisi girilir. Araç Tescil Faturalarında Şasi Numarası bu elemana girilecektir.
     * @param  AdditionalItemIdentification|null  $AdditionalItemIdentification  Mal/hizmet için diğer kullanılabilecek sınıflandırma bilgileri girilebilir.
     * @param  OriginCountry|null  $OriginCountry  Menşei bilgisi girilebilir.
     * @param  CommodityClassification|null  $CommodityClassification  Emtia sınıflandırma bilgisi girilir.
     * @param  ItemInstance|null  $ItemInstance  Parti lot bilgisi, ürün takip numarası, üretim zamanı, seri numarası ve kayıt numarası gibi bilgiler girilebilir.
     */
    public function __construct(
        public ?string $Description = null,
        public ?string $Name = null,
        public ?string $Keyword = null,
        public ?string $BrandName = null,
        public ?string $ModelName = null,
        public ?BuyersItemIdentification $BuyersItemIdentification = null,
        public ?SellersItemIdentification $SellersItemIdentification = null,
        public ?ManufacturersItemIdentification $ManufacturersItemIdentification = null,
        public ?AdditionalItemIdentification $AdditionalItemIdentification = null,
        public ?OriginCountry $OriginCountry = null,
        public ?CommodityClassification $CommodityClassification = null,
        public ?ItemInstance $ItemInstance = null
    ) {}
}
