<?php

namespace Ahmeti\Ubl;

/**
 * Belgelerde dönem kullanılması halinde dönem bu elemanda gösterilir.
 */
class Period
{
    /**
     * @param  string|null  $StartDate  Başlangıç Tarihi
     * @param  string|null  $StartTime  Başlangıç Saati
     * @param  string|null  $EndDate  Bitiş Tarihi
     * @param  string|null  $EndTime  Bitiş Saati
     * @param  array|null  $DurationMeasure  Dönem süresi numerik olarak, dönem aralığı tipi de “unitCode” attribute değerine yıl için “ANN”, ay için “MON”, gün için “DAY” ve saat için “HUR” girilmesi gerekmektedir.
     * @param  string|null  $Description  Dönemin açıklaması serbest metin olarak girilecektir.
     */
    public function __construct(
        public ?string $StartDate = null,
        public ?string $StartTime = null,
        public ?string $EndDate = null,
        public ?string $EndTime = null,
        public ?array $DurationMeasure = null,
        public ?string $Description = null
    ) {}
}
