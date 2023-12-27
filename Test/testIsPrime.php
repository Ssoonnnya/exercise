<?php 

use PHPUnit\Framework\TestCase;

class IsPrimeTest extends TestCase
{
    public function isPrime() {
        $this->assertSame(is_prime(2));
    }
}
?>