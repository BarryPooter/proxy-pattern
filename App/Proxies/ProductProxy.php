<?php

namespace App\Proxies;

use App\Classes\Product;
use App\Contracts\ProductResource;

class ProductProxy implements ProductResource
{
    private $realObject;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return (float) null;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {}

    /**
     * @return ProductResource
     */
    private final function _getObject () : ProductResource
    {
        if (empty($realObject)) {
            $this->realObject = new Product();
        }

        return $this->realObject;
    }
}