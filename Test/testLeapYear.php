<?php 

use PHPUnit\Framework\TestCase;
use exercise\Exercise\ex2;

class MyTest2 extends TestCase
{
    public function test_year_2020_is_a_leap_year() {
        $leapYearChecker = new leapYear();
        $this->assertSame(true, $leapYearChecker->isLeapYear(2020));
    }
  public function test_year_2000_is_a_leap_year() {
    $this->assertSame(true, isLeapYear(2000));
  }
  public function test_year_2100_is_not_a_leap_year() {
    $this->assertSame(false, isLeapYear(2100));
  }
  public function test_year_2015_is_not_a_leap_year() {
    $this->assertSame(false, isLeapYear(2015));
  }  
}
?>