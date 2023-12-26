<?php 

use PHPUnit\Framework\TestCase;

class MyTestPhoneNumber extends TestCase
{
    public function testExample() {
        $this->assertSame('(123) 456-7890', createPhoneNumber([1,2,3,4,5,6,7,8,9,0]));
    }
}
?>