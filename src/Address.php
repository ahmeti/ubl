<?php

namespace Ahmeti\Ubl;

/**
 * Bu eleman adres bilgilerinin tanımlanmasında kullanılacaktır.
 */
class Address
{
    /**
     * Mahalle, meydan, bulvar, cadde, sokak ve küme evlere karşılık gelecek şekilde,
     * standart sayısal eşdeğer olarak TÜİK tarafından verilmiş olan “sabit tanımlama numarası” girilebilecektir.
     */
    public ?string $ID = null;

    /**
     * Posta Kutusu girilecektir.
     */
    public ?string $Postbox = null;

    /**
     * İç kapı numarası girilecektir.
     */
    public ?string $Room = null;

    /**
     * Meydan/bulvar/cadde/sokak/küme evler/site adı bilgileri girilecektir.
     */
    public ?string $StreetName = null;

    /**
     * Blok adı girilebilecektir.
     */
    public ?string $BlockName = null;

    /**
     * Bina girilebilecektir.
     */
    public ?string $BuildingName = null;

    /**
     * Bina veya bloğa ait dış kapı numarası girilecektir.
     */
    public ?string $BuildingNumber = null;

    /**
     * İlçe/semt adı bilgileri girilecektir.
     */
    public ?string $CitySubdivisionName = null;

    /**
     * İl adı girilecektir.
     */
    public ?string $CityName = null;

    /**
     * Posta kod numarası girilecektir.
     */
    public ?string $PostalZone = null;

    /**
     * Kasaba/köy/mezra/mevkii bilgileri girilecektir.
     */
    public ?string $Region = null;

    /**
     * Mahalle adı girilecektir.
     */
    public ?string $District = null;

    /**
     * Ülke
     */
    public ?Country $Country = null;
}
