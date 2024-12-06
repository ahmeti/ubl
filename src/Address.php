<?php

namespace Ahmeti\Ubl;

/**
 * Bu eleman adres bilgilerinin tanımlanmasında kullanılacaktır.
 */
class Address
{
    /**
     * @param  string|null  $ID  Mahalle, meydan, bulvar, cadde, sokak ve küme evlere karşılık gelecek şekilde, standart sayısal eşdeğer olarak TÜİK tarafından verilmiş olan “sabit tanımlama numarası” girilebilecektir.
     * @param  string|null  $Postbox  Posta Kutusu girilecektir.
     * @param  string|null  $Room  İç kapı numarası girilecektir.
     * @param  string|null  $StreetName  Meydan/bulvar/cadde/sokak/küme evler/site adı bilgileri girilecektir.
     * @param  string|null  $BlockName  Blok adı girilebilecektir.
     * @param  string|null  $BuildingName  Bina girilebilecektir.
     * @param  string|null  $BuildingNumber  Bina veya bloğa ait dış kapı numarası girilecektir.
     * @param  string|null  $CitySubdivisionName  İlçe/semt adı bilgileri girilecektir.
     * @param  string|null  $CityName  İl adı girilecektir.
     * @param  string|null  $PostalZone  Posta kod numarası girilecektir.
     * @param  string|null  $Region  Kasaba/köy/mezra/mevkii bilgileri girilecektir.
     * @param  string|null  $District  Mahalle adı girilecektir.
     * @param  Country|null  $Country  Ülke
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $Postbox = null,
        public ?string $Room = null,
        public ?string $StreetName = null,
        public ?string $BlockName = null,
        public ?string $BuildingName = null,
        public ?string $BuildingNumber = null,
        public ?string $CitySubdivisionName = null,
        public ?string $CityName = null,
        public ?string $PostalZone = null,
        public ?string $Region = null,
        public ?string $District = null,
        public ?Country $Country = null
    ) {}
}
