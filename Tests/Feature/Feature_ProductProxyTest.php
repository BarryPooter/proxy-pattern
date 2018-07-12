<?php

namespace Tests;

use App\Proxies\ProductProxy;
use PHPUnit\Framework\TestCase;

class Feature_ProductProxyTest extends TestCase
{
    public function testPassingUserStatus () : void
    {
        $this->assertNotEquals(
            new ProductProxy(true),
            new ProductProxy(false)
        );
    }
}
