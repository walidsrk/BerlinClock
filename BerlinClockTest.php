<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use BerlinClock;
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->berlinClock = new BerlinClock();
    }

    public function test_given0_shouldReturnOOOOOOOOOOO_OOOO(){
        $actual = $this->minutes(0);

        $this->assertEquals("[OOOOOOOOOOO][OOOO]",$actual);

    }

    public function test_given1_shouldReturnOOOOOOOOOOO_YOOO(){
        $actual = $this->minutes(1);

        $this->assertEquals("[OOOOOOOOOOO][YOOO]",$actual);

    }

    public function test_given2_shouldReturnOOOOOOOOOOO_YYOO(){
        $actual = $this->minutes(2);

        $this->assertEquals("[OOOOOOOOOOO][YYOO]",$actual);
    }

    public function test_given3_shouldReturnOOOOOOOOOOO_YYYO(){
        $actual = $this->minutes(3);

        $this->assertEquals("[OOOOOOOOOOO][YYYO]",$actual);
    }

    public function test_given4_shouldReturnOOOOOOOOOOO_YYYY() {
        $actual = $this->minutes(4);

        $this->assertEquals("[OOOOOOOOOOO][YYYY]",$actual);
    }

    public function simpleMinutes(int $int): string {
        return $this->berlinClock->simpleMinutes($int);
    }

    public function test_given5_shouldReturnYOOOOOOOOOO_OOOO(){
        $actual =$this->minutes(5);

        $this->assertEquals("[YOOOOOOOOOO][OOOO]",$actual);
    }

    public function test_given6_shouldReturnYOOOOOOOOOO_YOOO(){
        $actual = $this->minutes(6);
        $this->assertEquals("[YOOOOOOOOOO][YOOO]",$actual);
    }

    public function test_given10_shouldReturnYYOOOOOOOOO_OOOO(){
        $actual = $this->minutes(10);

        $this->assertEquals("[YYOOOOOOOOO][OOOO]",$actual);
    }

    public function test_given11_shouldReturnYYOOOOOOOOO_YOOO(){
        $actual = $this->minutes(11);

        $this->assertEquals("[YYOOOOOOOOO][YOOO]",$actual);
    }

    public function test_given15_shouldReturnYYROOOOOOOO_OOOO(){
        $actual = $this ->minutes(15);

        $this->assertEquals("[YYROOOOOOOO][OOOO]", $actual);
    }

    public function test_fiveMinutes_given20_shouldReturnYYRYOOOOOOO(){
        $actual = $this ->fiveMinutes(20);

        $this->assertEquals("YYRYOOOOOOO", $actual);
    }

    public function test_fiveMinutes_given25_shouldReturnYYRYYOOOOOO(){
        $actual = $this ->fiveMinutes(25);

        $this->assertEquals("YYRYYOOOOOO", $actual);
    }

    public function test_fiveMinutes_given30_shouldReturnYYRYYROOOOO(){
        $actual = $this ->fiveMinutes(30);

        $this->assertEquals("YYRYYROOOOO", $actual);
    }

    public function test_fiveMinutes_given35_shouldReturnYYRYYRYOOOO(){
        $actual = $this ->fiveMinutes(35);

        $this->assertEquals("YYRYYRYOOOO", $actual);
    }

    public function test_fiveMinutes_given40_shouldReturnYYRYYRYYOOO(){
        $actual = $this ->fiveMinutes(40);

        $this->assertEquals("YYRYYRYYOOO", $actual);
    }

    public function test_fiveMinutes_given45_shouldReturnYYRYYRYYROO(){
        $actual = $this ->fiveMinutes(45);

        $this->assertEquals("YYRYYRYYROO", $actual);
    }

    public function test_fiveMinutes_given50_shouldReturnYYRYYRYYRYO(){
        $actual = $this ->fiveMinutes(50);

        $this->assertEquals("YYRYYRYYRYO", $actual);
    }

    public function test_fiveMinutes_given55_shouldReturnYYRYYRYYRYY(){
        $actual = $this ->fiveMinutes(55);

        $this->assertEquals("YYRYYRYYRYY", $actual);
    }

    public function test_fiveMinutes_given0_shouldReturnOOOOOOOOOOO(){
        $actual = $this->fiveMinutes(0);

        $this->assertEquals("OOOOOOOOOOO", $actual);
    }

    public function fiveMinutes(int $int): string {
        return $this->berlinClock->fiveMinutes($int);
    }

    public function minutes(int $int): string {
        return $this->berlinClock->minutes($int);
    }
}