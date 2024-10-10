<?php

namespace Birkanoruc\SessionHelper\Tests;

use PHPUnit\Framework\TestCase;
use Birkanoruc\SessionHelper\Session;

class SessionTest extends TestCase
{
    protected function tearDown(): void
    {
        Session::destroy();
    }

    public function testPutAndGet()
    {
        Session::start();
        Session::put('testKey', 'testValue');
        $this->assertEquals('testValue', Session::get('testKey'));
    }

    public function testHas()
    {
        Session::start();
        Session::put('testKey', 'testValue');
        $this->assertTrue(Session::has('testKey'));
        $this->assertFalse(Session::has('nonExistentKey'));
    }

    public function testFlash()
    {
        Session::start();
        Session::flash('flashKey', 'flashValue');
        $this->assertEquals('flashValue', Session::get('flashKey'));
        Session::unflash();
        $this->assertNull(Session::get('flashKey'));
    }

    public function testDestroy()
    {
        Session::start();
        Session::put('testKey', 'testValue');
        Session::destroy();
        $this->assertFalse(Session::has('testKey'));
    }
}
