<?php

namespace Tests;

use App\Factories\ProductFactory;
use PHPUnit\Framework\TestCase;

class Unit_ProductFactoryTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new ProductFactory();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }
}
