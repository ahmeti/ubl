<?php

namespace Ahmeti\Ubl;

/**
 * Belgede geçen mal/hizmete ilişkin bilgilerin girildiği elemandır.
 */
class InvoiceLine
{
    /**
     * @param  string|null  $ID  Kalem sıra numarası girilir.
     * @param  array|null  $Note  Kalem hakkında açıklama serbest metin olarak girilir.
     * @param  string|null  $InvoicedQuantity  Mal/hizmet miktarı birimi ile birlikte girilir.
     * @param  OrderLineReference|null  $OrderLineReference  Fatura ile ilişkili sipariş dokümanının kalemlerine referans atmak için kullanılır.
     * @param  DespatchLineReference|null  $DespatchLineReference  Fatura ile ilişkili irsaliye dokümanının kalemlerine referans atmak için kullanılır.
     * @param  ReceiptLineReference|null  $ReceiptLineReference  Fatura ile ilişkili alındı dokümanının kalemlerine referans atmak için kullanılır.
     * @param  Delivery|null  $Delivery  Kalem bazlı teslimat olması durumunda bu eleman doldurulur.
     * @param  array|null  $LineExtensionAmount  Mal/hizmet miktarı ile Mal/hizmet birim fiyatının çarpımı ile bulunan tutardır (varsa iskonto düşülür) (val = string, attrs = [currencyID="TRY"])
     * @param  AllowanceCharge|null  $AllowanceCharge  Kalem bazlı ıskonto/artırım tutarıdır.
     * @param  TaxTotal|null  $TaxTotal  Kalem bazlı vergi bilgilerinin girildiği elemandır.
     * @param  WithholdingTaxTotal|null  $WithholdingTaxTotal  Kalem bazlı tevkifat uygulanması durumunda bu eleman kullanılır.
     * @param  Item|null  $Item  Mal/hizmet hakkında bilgiler buraya girilir.
     * @param  Price|null  $Price  Mal/hizmet birim fiyatı hakkında bilgiler buraya girilir.
     * @param  SubInvoiceLine|null  $SubInvoiceLine  Eğer ürün için ek bir birim kodu kullanılması gerekiyorsa bu elemanın içindeki InvoicedQuantity elemanı (diğer opsyonel elemanlar boş bırakılarak) kullanılabilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?array $Note = null,
        public ?string $InvoicedQuantity = null,
        public ?OrderLineReference $OrderLineReference = null,
        public ?DespatchLineReference $DespatchLineReference = null,
        public ?ReceiptLineReference $ReceiptLineReference = null,
        public ?Delivery $Delivery = null,
        public ?array $LineExtensionAmount = null,
        public ?AllowanceCharge $AllowanceCharge = null,
        public ?TaxTotal $TaxTotal = null,
        public ?WithholdingTaxTotal $WithholdingTaxTotal = null,
        public ?Item $Item = null,
        public ?Price $Price = null,
        public ?SubInvoiceLine $SubInvoiceLine = null
    ) {}
}
