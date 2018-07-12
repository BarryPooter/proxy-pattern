<?php

namespace App\Proxies;

use App\Classes\Product;
use App\Contracts\ProductResource;

class ProductProxy implements ProductResource
{
    private $realObject;
    private $isUserAdmin;

    public function __construct(bool $isUserAdmin = false)
    {
        $this->isUserAdmin = $isUserAdmin;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return (float) $this->_getRealObject()->getPrice();
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->_getRealObject()->setPrice($price);
    }

    /**
     * @return ProductResource
     */
    private final function _getRealObject () : ProductResource
    {
        if (empty($this->realObject)) {
            $this->realObject = new Product();
        }

        return $this->realObject;
    }
}