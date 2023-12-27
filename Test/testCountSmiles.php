<?php 

use PHPUnit\Framework\TestCase;

class CountSmilesTest extends TestCase
{
    public function testCountSmiles() {
        $this->assertSame(4, count_smileys([':D',':~)',';~D',':)']));
    }
}
?>