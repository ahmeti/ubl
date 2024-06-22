<?php

namespace Ahmeti\Ubl;

/**
 * Fatura sürecindeki diğer ilgili fatura dokümanlarına referans vermek için kullanılır.
 * Örneğin iade faturalarında iade edilen faturaya ilişkin referans bilgisi bu elmanın altındaki “InvoiceDocumentReference”
 * elemanına eklenir. Ayrıca “CreditNote” ve “DebitNote” gibi yurtdışı ticarette iade işlemleri için sıkça
 * kullanılan belgelerede bu eleman aracılığı ile referans verilir
 */
class BillingReference
{
    /**
     * Önceki ilişkili fatura belgelerine referans bilgisi girilir. Örneğin iade edilen faturaya referans bu eleman ile verilir.
     */
    public ?InvoiceDocumentReference $InvoiceDocumentReference = null;

    /**
     * Yurt dışında bir kurum kendine fatura kesebilmektedir. Bu eleman bu belgeye referans için kullanılmaktadır.
     */
    public ?SelfBilledInvoiceDocumentReference $SelfBilledInvoiceDocumentReference = null;

    /**
     * İlgili CreditNote (Satıcı tarafından düzenlenip alıcının borcunu düşürmek için kullanılan belge) dokümanına referans bilgisini tutar.
     */
    public ?CreditNoteDocumentReference $CreditNoteDocumentReference = null;

    /**
     * Yurt dışında bir kurum kendine iade faturası kesebilmektedir. Bu eleman bu belgeye referans için kullanılmaktadır.
     */
    public ?SelfBilledCreditNoteDocumentReference $SelfBilledCreditNoteDocumentReference = null;

    /**
     * İlgili DebitNote (Alıcı tarafından düzenlenip alıcının borcunu düşürmek için kullanılan belge) dokümanına referans bilgisini tutar.
     */
    public ?DebitNoteDocumentReference $DebitNoteDocumentReference = null;

    /**
     * İlgili hatırlatma belgesine referans girilir.
     */
    public ?ReminderDocumentReference $ReminderDocumentReference = null;

    /**
     * Diğer başka dokümanlara referans bilgisi girilebilir.
     */
    public ?AdditionalDocumentReference $AdditionalDocumentReference = null;

    /**
     * Detaylı olarak belli bir kaleme referans atmak istenirse kullanılır.
     */
    public ?BillingReferenceLine $BillingReferenceLine = null;
}
