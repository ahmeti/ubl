<?php

namespace Ahmeti\Ubl;

use Ahmeti\Ubl\Utils\UblCustomAttr;

/**
 * Iskonto veya artırımların tanımlandığı elemandır.
 */
class AllowanceCharge
{
    /**
     * @param  string  $ChargeIndicator  Iskonto ise “false”, artırım ise “true” girilir.
     * @param  string|null  $AllowanceChargeReason  Iskonto veya artırımın sebebi serbest metin olarak girilir.
     * @param  string|null  $MultiplierFactorNumeric  Iskonto veya artırım oranı numerik olarak girilir.
     * @param  int|null  $SequenceNumeric  Birden fazla iskonto veya fiyat artırımı kullanılması durumunda sıra numarası girilir.
     * @param  UblCustomAttr|null  $Amount  Iskonto veya artırım miktarı numerik girilir.
     * @param  UblCustomAttr|null  $BaseAmount  Iskonto veya artırım oranının uygulandığı tutar girilir.
     * @param  int|null  $PerUnitAmount  Ürün adetine göre iskonto veya artırımın uygulandığı durumlarda uygulanan ürün miktarını gösterir
     */
    public function __construct(
        public string $ChargeIndicator = 'false',
        public ?string $AllowanceChargeReason = null,
        public ?string $MultiplierFactorNumeric = null,
        public ?int $SequenceNumeric = null,
        public ?UblCustomAttr $Amount = null,
        public ?UblCustomAttr $BaseAmount = null,
        public ?int $PerUnitAmount = null
    ) {}
}
