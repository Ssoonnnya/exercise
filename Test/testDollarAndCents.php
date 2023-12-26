<?php 

use PHPUnit\Framework\TestCase;

class MyTestDollar extends TestCase
{
    public function testExample() {
        $this->assertSame('$2.10', format_money(2.1));
    }
}
?>