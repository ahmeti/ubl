<?php

namespace Ahmeti\Ubl;

/**
 * Taşıma sırasındaki paket bilgisi girilir.
 */
class Package
{
    /**
     * @param  string|null  $ID  Paket numarası girilir.
     * @param  string|null  $Quantity  Paket adedi girilir.
     * @param  bool|null  $ReturnableMaterialIndicator  Paket materyali geri dönüşümlü olup olmadığını belirtir.
     * @param  string|null  $PackageLevelCode  Paketleme seviyesini belirtir.
     * @param  string|null  $PackagingTypeCode  Paketleme tipini belirtir.
     * @param  string|null  $PackagingMaterial  Paketleme materyalini belirtir.
     * @param  ContainedPackage|null  $ContainedPackage  İçerdiği diğer paketler girilir.
     * @param  GoodsItem|null  $GoodsItem  İçerdiği ürünler girilir.
     * @param  MeasurementDimension|null  $MeasurementDimension  Paketin ölçüleri girilir.
     */
    public function __construct(
        public ?string $ID = null,
        public ?string $Quantity = null,
        public ?bool $ReturnableMaterialIndicator = null,
        public ?string $PackageLevelCode = null,
        public ?string $PackagingTypeCode = null,
        public ?string $PackagingMaterial = null,
        public ?ContainedPackage $ContainedPackage = null,
        public ?GoodsItem $GoodsItem = null,
        public ?MeasurementDimension $MeasurementDimension = null
    ) {}
}
