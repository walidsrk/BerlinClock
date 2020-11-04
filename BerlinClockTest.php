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

}