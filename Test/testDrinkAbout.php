<?php 

use PHPUnit\Framework\TestCase;

class MyTest6 extends TestCase
{
    public function testExample() {
        $this->assertSame('drink coke', people_with_age_drink(15));
    }
}
?>