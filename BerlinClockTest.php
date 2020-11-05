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

    public function test_simpleMinutes_given0_shouldReturnOOOO(){
        $actual = $this->simpleMinutes(0);

        $this->assertEquals("OOOO",$actual);

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

    public function test_simpleMinutes_given6_shouldReturnYOOO(){
        $actual = $this->simpleMinutes(6);

        $this->assertEquals("YOOO",$actual);
    }

    public function test_fiveMinutes_given6_shouldReturnYOOOOOOOOOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock->fiveMinutes(6);

        $this->assertEquals("YOOOOOOOOOO",$actual);
    }

    public function test_fiveMinutes_given10_shouldReturnYYOOOOOOOOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock->fiveMinutes(10);

        $this->assertEquals("YYOOOOOOOOO",$actual);
    }

    public function test_fiveMinutes_given15_shouldReturnYYROOOOOOOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->fiveMinutes(15);

        $this->assertEquals("YYROOOOOOOO", $actual);
    }

    public function test_fiveMinutes_given20_shouldReturnYYRYOOOOOOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->fiveMinutes(20);

        $this->assertEquals("YYRYOOOOOOO", $actual);
    }

    public function test_fiveMinutes_given25_shouldReturnYYRYYOOOOOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->fiveMinutes(25);

        $this->assertEquals("YYRYYOOOOOO", $actual);
    }

    public function test_fiveMinutes_given30_shouldReturnYYRYYROOOOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->fiveMinutes(30);

        $this->assertEquals("YYRYYROOOOO", $actual);
    }

    public function test_fiveMinutes_given35_shouldReturnYYRYYRYOOOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->fiveMinutes(35);

        $this->assertEquals("YYRYYRYOOOO", $actual);
    }

    public function test_fiveMinutes_given40_shouldReturnYYRYYRYYOOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->fiveMinutes(40);

        $this->assertEquals("YYRYYRYYOOO", $actual);
    }

    public function test_fiveMinutes_given45_shouldReturnYYRYYRYYROO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->fiveMinutes(45);

        $this->assertEquals("YYRYYRYYROO", $actual);
    }

    public function test_fiveMinutes_given50_shouldReturnYYRYYRYYRYO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock ->fiveMinutes(50);

        $this->assertEquals("YYRYYRYYRYO", $actual);
    }
}