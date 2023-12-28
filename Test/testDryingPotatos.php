<?php
use PHPUnit\Framework\TestCase;


class PotatoesTest extends TestCase {

    private function dotest($p0, $w0, $p1, $exp) {
        $actual = potatoes($p0, $w0, $p1);
        $this->assertSame($exp, $actual);
    }
    public function testPotatoesBasics() {
        $this->dotest(99, 100, 98, 50);
    }
}
?>