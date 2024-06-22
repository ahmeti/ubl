<?php

namespace Ahmeti\Ubl;

/**
 * Malların alıcıya gönderimlesi için satıcıdan teslim alınması kapsamında zaman ve mekan bilgileri girilir.
 */
class Despatch
{
    /**
     * İlgili gönderimi belge içerisinde tekil olarak tanımlar.
     */
    public ?string $ID = null;

    /**
     * Gerçekleşen gönderim tarihi girilir. (Fiili Sevk Tarihi)
     */
    public ?string $ActualDespatchDate = null;

    /**
     * Gerçekleşen gönderim zamanı girilir.  (Fiili Sevk Zamanı)
     */
    public ?string $ActualDespatchTime = null;

    /**
     * Serbest metin olarak gönderime yönelik açıklamalar girilir.
     */
    public ?string $Instructions = null;

    /**
     * Malların gönderim için alınacağı adres girilir.
     */
    public ?DespatchAddress $DespatchAddress = null;

    /**
     * Malları satıcıdan teslim alacak taraf bilgileri girilir.
     */
    public ?DespatchParty $DespatchParty = null;

    /**
     * Malları satıcıdan teslim alacak tarafın iletişim bilgileri girilir.
     */
    public ?Contact $Contact = null;

    /**
     * Tahmini teslim alış dönemi girilir.
     */
    public ?EstimatedDespatchPeriod $EstimatedDespatchPeriod = null;
}
