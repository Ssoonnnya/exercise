<?php 

use PHPUnit\Framework\TestCase;

class MyTest3 extends TestCase
{
    public function testExample() {
        $this->assertSame(3, remainder(198,5));
    }
}
?>