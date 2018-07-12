<?php

namespace Tests;

use App\Contracts\ProductResource;
use App\Proxies\ProductProxy;
use PHPUnit\Framework\TestCase;

class Unit_ProductProxyTestTest extends TestCase
{
    protected $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new ProductProxy(true);
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(ProductResource::class, $this->sut);
    }

    public function testPrice () : void
    {
        $this->assertEquals((float) null, $this->sut->getPrice());

        $this->sut->setPrice((float) 49.50);
        $this->assertEquals((float) 49.50, $this->sut->getPrice());
    }
}
