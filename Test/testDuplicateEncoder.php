<?php 

use PHPUnit\Framework\TestCase;

class MyBalanceTest extends TestCase
{
    public function balance() {
        $this->assertSame('(((', duplicate_encode('puk'));
    }
}
?>