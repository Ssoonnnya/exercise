<?php 

use PHPUnit\Framework\TestCase;

class MyTestBalance extends TestCase
{
    public function balance() {
        $this->assertSame("Right", balance("!!", "??"));
    }
}
?>