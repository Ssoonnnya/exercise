<?php 

use PHPUnit\Framework\TestCase;

class TestMark1 extends TestCase
{
    public function testExample() {
        $this->assertSame('hi!', remove('hi!!'));
    }
}
?>