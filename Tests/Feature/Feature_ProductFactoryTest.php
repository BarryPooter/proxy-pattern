<?php

namespace Tests;

use App\Factories\ProductFactory;
use App\Proxies\ProductProxy;
use PHPUnit\Framework\TestCase;

class Feature_ProductFactoryTest extends TestCase
{
    public function testIfBuildReturnsProductProxyInstance () : void
    {
        $this->assertInstanceOf(
            ProductProxy::class,
            (new ProductFactory())->build()
        );
    }
}
