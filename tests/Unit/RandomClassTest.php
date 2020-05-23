<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\MyClasses\RandomClass;  

class RandomClassTest extends TestCase
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

    // /**
    // *    @expectedException InvalidArgumentException 
    // */
    public function testInvArg()
    {
        $this->expectException(\InvalidArgumentException::class);

        $RC = new \App\Http\MyClasses\RandomClass;
        $RC->RandomMethod(22);
    }
}
