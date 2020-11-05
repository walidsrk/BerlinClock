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

    public function test_given12_shouldReturnYYOOOOOOOOO_YYOO(){
        $actual = $this->minutes(12);

        $this->assertEquals("[YYOOOOOOOOO][YYOO]",$actual);
    }

    public function test_given15_shouldReturnYYROOOOOOOO_OOOO(){
        $actual = $this ->minutes(15);

        $this->assertEquals("[YYROOOOOOOO][OOOO]", $actual);
    }

    public function test_given20_shouldReturnYYRYOOOOOOO_OOOO(){
        $actual = $this ->minutes(20);

        $this->assertEquals("[YYRYOOOOOOO][OOOO]", $actual);
    }

    public function test_given25_shouldReturnYYRYYOOOOOO_OOOO(){
        $actual = $this ->minutes(25);

        $this->assertEquals("[YYRYYOOOOOO][OOOO]", $actual);
    }

    public function test_given30_shouldReturnYYRYYROOOOO_OOOO(){
        $actual = $this ->minutes(30);

        $this->assertEquals("[YYRYYROOOOO][OOOO]", $actual);
    }

    public function test_given35_shouldReturnYYRYYRYOOOO_OOOO(){
        $actual = $this ->minutes(35);

        $this->assertEquals("[YYRYYRYOOOO][OOOO]", $actual);
    }

    public function test_given40_shouldReturnYYRYYRYYOOO_OOOO(){
        $actual = $this ->minutes(40);

        $this->assertEquals("[YYRYYRYYOOO][OOOO]", $actual);
    }

    public function test_given45_shouldReturnYYRYYRYYROO_OOOO(){
        $actual = $this ->minutes(45);

        $this->assertEquals("[YYRYYRYYROO][OOOO]", $actual);
    }

    public function test_given50_shouldReturnYYRYYRYYRYO_OOOO(){
        $actual = $this ->minutes(50);

        $this->assertEquals("[YYRYYRYYRYO][OOOO]", $actual);
    }

    public function test_given55_shouldReturnYYRYYRYYRYY_OOOO(){
        $actual = $this ->minutes(55);

        $this->assertEquals("[YYRYYRYYRYY][OOOO]", $actual);
    }
    
    public function minutes(int $int): string {
        return $this->berlinClock->minutes($int);
    }
}