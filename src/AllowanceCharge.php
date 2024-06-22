<?php

namespace Ahmeti\Ubl;

/**
 * Iskonto veya artırımların tanımlandığı elemandır.
 */
class AllowanceCharge
{
    /**
     * Iskonto ise “false”, artırım ise “true” girilir.
     */
    public ?bool $ChargeIndicator = null;

    /**
     * Iskonto veya artırımın sebebi serbest metin olarak girilir.
     */
    public ?string $AllowanceChargeReason = null;

    /**
     * Iskonto veya artırım oranı numerik olarak girilir.
     */
    public ?string $MultiplierFactorNumeric = null;

    /**
     * Birden fazla iskonto veya fiyat artırımı kullanılması durumunda sıra numarası girilir.
     */
    public ?int $SequenceNumeric = null;

    /**
     * Iskonto veya artırım miktarı numerik girilir.
     */
    public ?Amount $Amount = null;

    /**
     * Iskonto veya artırım oranının uygulandığı tutar girilir.
     */
    public ?BaseAmount $BaseAmount = null;

    /**
     * Ürün adetine göre iskonto veya artırımın uygulandığı durumlarda uygulanan ürün miktarını gösterir
     */
    public ?int $PerUnitAmount = null;
}
