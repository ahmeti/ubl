<?php

namespace Ahmeti\Ubl;

/**
 * Belgelere ilişkin kabul, red ve diğer mesajlar bu elemana girilecektir.
 */
class DocumentResponse
{
    /**
     * @param  Response|null  $Response  Yanıt
     * @param  DocumentReference|null  $DocumentReference  Yanıt verilen belgeye referans bilgisi içermektedir.
     * @param  LineResponse|null  $LineResponse  Satıra yanıt bilgilerini içerir. Dokümanın belli bir kalemi ile ilgili red ve düzeltme talebi olma durumunda cbc:LineID elemanı ilgili kalem numarasını içerecektir.
     */
    public function __construct(
        public ?Response $Response = null,
        public ?DocumentReference $DocumentReference = null,
        public ?LineResponse $LineResponse = null
    ) {}
}
