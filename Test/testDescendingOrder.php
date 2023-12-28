<?php 

use PHPUnit\Framework\TestCase;

class DescendingNumbersTest extends TestCase
{
    public function testNumbers() {
        $this->assertSame(51, descendingOrder(15));
    }
}
?>

