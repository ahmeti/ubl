<?php

namespace Ahmeti\Ubl;

/**
 * Taşıma sırasındaki paket bilgisi girilir.
 */
class Package
{
    /**
     * Paket numarası girilir.
     */
    public ?string $ID = null;

    /**
     * Paket adedi girilir.
     */
    public ?string $Quantity = null;

    /**
     * Paket materyali geri dönüşümlü olup olmadığını belirtir.
     */
    public ?bool $ReturnableMaterialIndicator = null;

    /**
     * Paketleme seviyesini belirtir.
     */
    public ?string $PackageLevelCode = null;

    /**
     * Paketleme tipini belirtir.
     */
    public ?string $PackagingTypeCode = null;

    /**
     * Paketleme materyalini belirtir.
     */
    public ?string $PackagingMaterial = null;

    /**
     * İçerdiği diğer paketler girilir.
     */
    public ?ContainedPackage $ContainedPackage = null;

    /**
     * İçerdiği ürünler girilir.
     */
    public ?GoodsItem $GoodsItem = null;

    /**
     * Paket boyutları girilir.
     */
    public ?MeasurementDimension $MeasurementDimension = null;
}
