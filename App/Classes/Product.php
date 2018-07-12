<?php

namespace App\Classes;

use App\Contracts\ProductResource;

class Product implements ProductResource
{
    public function getPrice(): float
    {}

    public function setPrice(float $price): void
    {}
}