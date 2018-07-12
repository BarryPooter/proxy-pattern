<?php

namespace Tests;

use App\Classes\User;
use PHPUnit\Framework\TestCase;

class Unit_UserTest extends TestCase
{
    protected $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new User();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testAdmin () : void
    {
        $this->sut->setAdmin(true);
        $this->assertTrue($this->sut->isAdmin());
        $this->sut->setAdmin(false);
        $this->assertFalse($this->sut->isAdmin());
    }
}
