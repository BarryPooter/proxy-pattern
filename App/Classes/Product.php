<?php

namespace App\Classes;

use App\Contracts\ProductResource;

class Product implements ProductResource
{
    private $price;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return (float) $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = (float) $price;
    }
}