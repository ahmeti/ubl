<?php

namespace Ahmeti\Ubl;

/**
 * Bu elemana irtibat bilgileri yazılabilecektir.
 */
class Contact
{
    /**
     * @param  string|null  $ID  İrtibatın numara bilgisi yazılabilir.
     * @param  string|null  $Name  İrtibatın ismi metin olarak yazılabilir.
     * @param  string|null  $Telephone  Telefon numarası metin olarak girilecektir.
     * @param  string|null  $Telefax  Fax numarası metin olarak girilecektir.
     * @param  string|null  $ElectronicMail  Elektronik posta adresi metin olarak girilecektir.
     * @param  string|null  $Note  Serbest metin açıklama girilebilecektir.
     * @param  OtherCommunication|null  $OtherCommunication  Başka iletişim kanalı veya ilave telefon, fax ve elektronik posta kullanılıyor ise bu eleman kanalın tanımlanmasında kullanılacaktır.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $Name = null,
        public ?string $Telephone = null,
        public ?string $Telefax = null,
        public ?string $ElectronicMail = null,
        public ?string $Note = null,
        public ?OtherCommunication $OtherCommunication = null
    ) {}
}
