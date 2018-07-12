<?php

namespace Tests;

use App\Classes\Product;
use App\Contracts\ProductResource;
use PHPUnit\Framework\TestCase;

class Unit_ProductTest extends TestCase
{
    protected $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new Product();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(ProductResource::class, $this->sut);
    }
}
