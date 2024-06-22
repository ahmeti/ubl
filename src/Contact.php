<?php

namespace Ahmeti\Ubl;

/**
 * Bu elemana irtibat bilgileri yazılabilecektir.
 */
class Contact
{
    /**
     * İrtibatın numara bilgisi yazılabilir.
     */
    public ?string $ID = null;

    /**
     * İrtibatın ismi metin olarak yazılabilir.
     */
    public ?string $Name = null;

    /**
     * Telefon numarası metin olarak girilecektir.
     */
    public ?string $Telephone = null;

    /**
     * Fax numarası metin olarak girilecektir.
     */
    public ?string $Telefax = null;

    /**
     * Elektronik posta adresi metin olarak girilecektir.
     */
    public ?string $ElectronicMail = null;

    /**
     * Serbest metin açıklama girilebilecektir.
     */
    public ?string $Note = null;

    /**
     * Başka iletişim kanalı veya ilave telefon, fax ve elektronik posta kullanılıyor ise bu eleman kanalın tanımlanmasında kullanılacaktır.
     */
    public ?OtherCommunication $OtherCommunication = null;
}
