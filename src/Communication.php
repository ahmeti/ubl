<?php

namespace Ahmeti\Ubl;

/**
 * Her türlü alternatif iletişim kanalının tanımlanmasında kullanılacaktır.
 */
class Communication
{
    /**
     * Bu eleman için UN/EDIFACT 3155 İletişim Numarası Kod Listesi kullanılmalıdır. Bknz. Kod Listeleri.
     */
    public ?string $ChannelCode = null;

    /**
     * Bu eleman metin olarak kanal adı için kullanılacaktır
     */
    public ?string $Channel = null;

    /**
     * Bu eleman iletişim adresini metin olarak tutar.
     */
    public ?string $Value = null;
}
