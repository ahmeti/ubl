<?php

namespace Ahmeti\Ubl;

/**
 * Malların alıcıya gönderimlesi için satıcıdan teslim alınması kapsamında zaman ve mekan bilgileri girilir.
 */
class Despatch
{
    /**
     * @param  string|null  $ID  İlgili gönderimi belge içerisinde tekil olarak tanımlar.
     * @param  string|null  $ActualDespatchDate  Gerçekleşen gönderim tarihi girilir. (Fiili Sevk Tarihi)
     * @param  string|null  $ActualDespatchTime  Gerçekleşen gönderim zamanı girilir.  (Fiili Sevk Zamanı)
     * @param  string|null  $Instructions  Serbest metin olarak gönderime yönelik açıklamalar girilir.
     * @param  DespatchAddress|null  $DespatchAddress  Malların gönderim için alınacağı adres girilir.
     * @param  DespatchParty|null  $DespatchParty  Malları satıcıdan teslim alacak taraf bilgileri girilir.
     * @param  Contact|null  $Contact  Malları satıcıdan teslim alacak tarafın iletişim bilgileri girilir.
     * @param  EstimatedDespatchPeriod|null  $EstimatedDespatchPeriod  Tahmini teslim alış dönemi girilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $ActualDespatchDate = null,
        public ?string $ActualDespatchTime = null,
        public ?string $Instructions = null,
        public ?DespatchAddress $DespatchAddress = null,
        public ?DespatchParty $DespatchParty = null,
        public ?Contact $Contact = null,
        public ?EstimatedDespatchPeriod $EstimatedDespatchPeriod = null
    ) {}
}
