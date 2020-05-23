<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MyUserTest extends TestCase // Butinai test is mazosios!!!!!!!!!!! Nebent /** @test */
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function BeTestTestas()
    {
        $this->assertTrue(true);
    } 
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTrue()
    {
        $this->assertTrue(true);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFalse()
    {
        $this->assertFalse(false);
    }
 
    // public function testCrash()
    // {
    //     $this->assertTrue(false);
    // }
}
