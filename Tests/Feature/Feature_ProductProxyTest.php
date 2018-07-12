<?php

namespace Tests;

use App\Proxies\ProductProxy;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class Feature_ProductProxyTest extends TestCase
{
    public function testPassingUserStatus () : void
    {
        $this->assertNotEquals(
            new ProductProxy(true),
            new ProductProxy(false)
        );
    }

    public function testGuardSetPriceMethodFromNormalUsers () : void
    {
        // Instantiate a Proxy where the
        // User is not an admin.
        $proxy = new ProductProxy(false);
        $this->expectException(AccessDeniedException::class);
        $proxy->setPrice((float) 30);
    }

    public function testAllowAdminToSetProductPrice () : void
    {
        // Instantiate a Proxy where the
        // User is an admin.
        $proxy = new ProductProxy(true);
        $proxy->setPrice((float) 30);
        $this->assertEquals(30.00, $proxy->getPrice());
    }
}
