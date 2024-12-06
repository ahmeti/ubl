<?php

namespace Ahmeti\Ubl;

/**
 * Her türlü alternatif iletişim kanalının tanımlanmasında kullanılacaktır.
 */
class Communication
{
    /**
     * @param  string|null  $ChannelCode  Bu eleman için UN/EDIFACT 3155 İletişim Numarası Kod Listesi kullanılmalıdır. Bknz. Kod Listeleri.
     * @param  string|null  $Channel  Bu eleman metin olarak kanal adı için kullanılacaktır
     * @param  string|null  $Value  Bu eleman iletişim adresini metin olarak tutar.
     */
    public function __construct(
        public ?string $ChannelCode = null,
        public ?string $Channel = null,
        public ?string $Value = null,
    ) {}
}
