<?php
use PHPUnit\Framework\TestCase;

class SquareDigitsTest extends TestCase
{
    public function squareDigits() {
        $this->assertSame(811181, square_digits(9119));
    }
}

?>