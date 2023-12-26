<?php 

use PHPUnit\Framework\TestCase;

class MyTestRemoveVowles extends TestCase
{
    public function testExample() {
        $this->assertSame('htrs gnn ht ht ht', disemvowel('haters gonna hate hate hate'));
    }
}
?>