<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use BerlinClock;
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    public function test_simpleMinutes_given1_shouldReturnYOOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock->simpleMinutes(1);

        $this->assertEquals("YOOO",$actual);

    }

    public function test_simpleMinutes_given2_shouldReturnYYOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock->simpleMinutes(2);

        $this->assertEquals("YYOO",$actual);
    }

    public function test_simpleMinutes_given3_shouldReturnYYYO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock->simpleMinutes(3);

        $this->assertEquals("YYYO",$actual);
    }

    public function test_simpleMinutes_given4_shouldReturnYYYY() {
        $berlinClock = new BerlinClock();

        $actual = $berlinClock->simpleMinutes(4);

        $this->assertEquals("YYYY",$actual);
    }
}