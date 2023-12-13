<?php 

class MyTest extends TestCase
{
    public function testExample() {
        $this->assertSame(true, smallEnough([195, 123,201], 250));
    }
}
?>
