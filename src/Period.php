<?php

namespace Ahmeti\Ubl;

/**
 * Belgelerde dönem kullanılması halinde dönem bu elemanda gösterilir.
 */
class Period
{
    /**
     * Başlangıç Tarihi
     */
    public ?string $StartDate = null;

    /**
     * Başlangıç Saati
     */
    public ?string $StartTime = null;

    /**
     * Bitiş Tarihi
     */
    public ?string $EndDate = null;

    /**
     * Bitiş Saati
     */
    public ?string $EndTime = null;

    /**
     * Dönem süresi numerik olarak, dönem aralığı tipi de “unitCode” attribute değerine yıl için “ANN”, ay için “MON”, gün için “DAY” ve saat için “HUR” girilmesi gerekmektedir.
     */
    public ?array $DurationMeasure = null;

    /**
     * Dönemin açıklaması serbest metin olarak girilecektir.
     */
    public ?string $Description = null;
}
