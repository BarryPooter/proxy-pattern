<?php
namespace App\Contracts;

interface ProductResource
{
    public function getPrice () : float;
    public function setPrice (float $price) : void;
}