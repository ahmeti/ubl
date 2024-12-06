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
     * @param  InvoiceDocumentReference|null  $InvoiceDocumentReference  Önceki ilişkili fatura belgelerine referans bilgisi girilir. Örneğin iade edilen faturaya referans bu eleman ile verilir.
     * @param  SelfBilledInvoiceDocumentReference|null  $SelfBilledInvoiceDocumentReference  Yurt dışında bir kurum kendine fatura kesebilmektedir. Bu eleman bu belgeye referans için kullanılmaktadır.
     * @param  CreditNoteDocumentReference|null  $CreditNoteDocumentReference  İlgili CreditNote (Satıcı tarafından düzenlenip alıcının borcunu düşürmek için kullanılan belge) dokümanına referans bilgisini tutar.
     * @param  SelfBilledCreditNoteDocumentReference|null  $SelfBilledCreditNoteDocumentReference  Yurt dışında bir kurum kendine iade faturası kesebilmektedir. Bu eleman bu belgeye referans için kullanılmaktadır.
     * @param  DebitNoteDocumentReference|null  $DebitNoteDocumentReference  İlgili DebitNote (Alıcı tarafından düzenlenip alıcının borcunu düşürmek için kullanılan belge) dokümanına referans bilgisini tutar.
     * @param  ReminderDocumentReference|null  $ReminderDocumentReference  İlgili hatırlatma belgesine referans girilir.
     * @param  AdditionalDocumentReference|null  $AdditionalDocumentReference  Diğer başka dokümanlara referans bilgisi girilebilir.
     * @param  BillingReferenceLine|null  $BillingReferenceLine  Detaylı olarak belli bir kaleme referans atmak istenirse kullanılır.
     */
    public function __construct(
        public ?InvoiceDocumentReference $InvoiceDocumentReference = null,
        public ?SelfBilledInvoiceDocumentReference $SelfBilledInvoiceDocumentReference = null,
        public ?CreditNoteDocumentReference $CreditNoteDocumentReference = null,
        public ?SelfBilledCreditNoteDocumentReference $SelfBilledCreditNoteDocumentReference = null,
        public ?DebitNoteDocumentReference $DebitNoteDocumentReference = null,
        public ?ReminderDocumentReference $ReminderDocumentReference = null,
        public ?AdditionalDocumentReference $AdditionalDocumentReference = null,
        public ?BillingReferenceLine $BillingReferenceLine = null
    ) {}
}
