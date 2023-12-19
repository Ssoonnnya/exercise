<?php 

use PHPUnit\Framework\TestCase;

class MyTest7 extends TestCase
{
    public function testExample() {
        $this->assertSame(15, nbYear(1500, 5, 100, 5000));
    }
}
?>
