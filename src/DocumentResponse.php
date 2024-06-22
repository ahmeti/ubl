<?php

namespace Ahmeti\Ubl;

/**
 * Belgelere ilişkin kabul, red ve diğer mesajlar bu elemana girilecektir.
 */
class DocumentResponse
{
    /**
     * Yanıt
     */
    public ?Response $Response = null;

    /**
     * Yanıt verilen belgeye referans bilgisi içermektedir.
     */
    public ?DocumentReference $DocumentReference = null;

    /**
     * Satıra yanıt bilgilerini içerir. Dokümanın belli bir kalemi ile ilgili red ve düzeltme talebi olma durumunda
     * cbc:LineID elemanı ilgili kalem numarasını içerecektir.
     */
    public ?LineResponse $LineResponse = null;
}
