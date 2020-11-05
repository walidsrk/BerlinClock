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

    public function test_simpleMinutes_given1_shouldReturnYOOO(){
        $actual = $this->simpleMinutes(1);

        $this->assertEquals("YOOO",$actual);

    }

    public function test_simpleMinutes_given2_shouldReturnYYOO(){
        $actual = $this->simpleMinutes(2);

        $this->assertEquals("YYOO",$actual);
    }

    public function test_simpleMinutes_given3_shouldReturnYYYO(){
        $actual = $this->simpleMinutes(3);

        $this->assertEquals("YYYO",$actual);
    }

    public function test_simpleMinutes_given4_shouldReturnYYYY() {
        $actual = $this->simpleMinutes(4);

        $this->assertEquals("YYYY",$actual);
    }

    public function simpleMinutes(int $int): string {
        return $this->berlinClock->simpleMinutes($int);
    }

    public function test_fiveMinutes_given5_shouldReturnYOOOOOOOOOO(){
        $berlinClock = new BerlinClock();

        $actual =$berlinClock->fiveMinutes(5);

        $this->assertEquals("YOOOOOOOOOO",$actual);
    }

    public function test_given6_shouldReturnYOOO_YOOOOOOOOOO(){
        $actual = $this->simpleMinutes(6);
        $actual2 = $this->fiveMinutes(6);
        $this->assertEquals("YOOO",$actual);
        $this->assertEquals("YOOOOOOOOOO",$actual2);
    }

    public function test_fiveMinutes_given10_shouldReturnYYOOOOOOOOO(){
        $actual = $this->fiveMinutes(10);

        $this->assertEquals("YYOOOOOOOOO",$actual);
    }

    public function test_fiveMinutes_given15_shouldReturnYYROOOOOOOO(){
        $actual = $this ->fiveMinutes(15);

        $this->assertEquals("YYROOOOOOOO", $actual);
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

    public function test_minutes_given11_shouldReturnYYOOOOOOOOOYOOO(){
        $actual = $this->minutes(11);

        $this->assertEquals("[YYOOOOOOOOO][YOOO]",$actual);
    }

    public function minutes(int $int): string {
        return $this->berlinClock->minutes($int);
    }
}