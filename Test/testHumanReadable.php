<?php 

use PHPUnit\Framework\TestCase;

class MyHumanReadableTest extends TestCase
{
    public function humanReadable() {
        $this->assertSame('00:00:00', human_readable(0));
    }
}
?>