<?php

namespace Ahmeti\Ubl;

/**
 * Belgede geçen mal/hizmete ilişkin bilgilerin girildiği elemandır.
 */
class InvoiceLine
{
    /**
     * Kalem sıra numarası girilir.
     */
    public ?string $ID = null;

    /**
     * Kalem hakkında açıklama serbest metin olarak girilir.
     */
    public ?array $Note = null;

    /**
     * Mal/hizmet miktarı birimi ile birlikte girilir.
     */
    public ?string $InvoicedQuantity = null;

    /**
     * Fatura ile ilişkili sipariş dokümanının kalemlerine referans atmak için kullanılır.
     */
    public ?OrderLineReference $OrderLineReference = null;

    /**
     * Fatura ile ilişkili irsaliye dokümanının kalemlerine referans atmak için kullanılır.
     */
    public ?DespatchLineReference $DespatchLineReference = null;

    /**
     * Fatura ile ilişkili alındı dokümanının kalemlerine referans atmak için kullanılır.
     */
    public ?ReceiptLineReference $ReceiptLineReference = null;

    /**
     * Kalem bazlı teslimat olması durumunda bu eleman doldurulur.
     */
    public ?Delivery $Delivery = null;

    /**
     * Mal/hizmet miktarı ile Mal/hizmet birim fiyatının çarpımı ile bulunan tutardır (varsa iskonto düşülür)
     * (val = string, attrs = [currencyID="TRY"])
     */
    public ?array $LineExtensionAmount = null;

    /**
     * Kalem bazlı ıskonto/artırım tutarıdır.
     */
    public ?AllowanceCharge $AllowanceCharge = null;

    /**
     * Kalem bazlı vergi bilgilerinin girildiği elemandır.
     */
    public ?TaxTotal $TaxTotal = null;

    /**
     * Kalem bazlı tevkifat uygulanması durumunda bu eleman kullanılır.
     */
    public ?WithholdingTaxTotal $WithholdingTaxTotal = null;

    /**
     *  Mal/hizmet hakkında bilgiler buraya girilir.
     */
    public ?Item $Item = null;

    /**
     * Mal/hizmet birim fiyatı hakkında bilgiler buraya girilir.
     */
    public ?Price $Price = null;

    /**
     * Eğer ürün için ek bir birim kodu kullanılması gerekiyorsa bu elemanın içindeki InvoicedQuantity elemanı (diğer opsyonel elemanlar boş bırakılarak) kullanılabilir.
     */
    public ?SubInvoiceLine $SubInvoiceLine = null;
}
