<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use berlinClock\BerlinClock;
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    public function test_simpleMinutes_given1_shouldReturnYOOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock->simpleMinutes(1);

        $this->assertEquals("YOOO",$actual);

    }

}