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

    public function test_given7_shouldReturnYOOOOOOOOOO_YYOO(){
        $actual = $this->minutes(7);
        $this->assertEquals("[YOOOOOOOOOO][YYOO]",$actual);
    }

    public function test_given8_shouldReturnYOOOOOOOOOO_YYYO(){
        $actual = $this->minutes(8);
        $this->assertEquals("[YOOOOOOOOOO][YYYO]",$actual);
    }
    
    public function test_given9_shouldReturnYOOOOOOOOOO_YYYY(){
        $actual = $this->minutes(9);
        $this->assertEquals("[YOOOOOOOOOO][YYYY]",$actual);
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

    public function test_given13_shouldReturnYYOOOOOOOOO_YYYO(){
        $actual = $this->minutes(13);

        $this->assertEquals("[YYOOOOOOOOO][YYYO]",$actual);
    }

    public function test_given14_shouldReturnYYOOOOOOOOO_YYYY(){
        $actual = $this->minutes(14);

        $this->assertEquals("[YYOOOOOOOOO][YYYY]",$actual);
    }

    public function test_given15_shouldReturnYYROOOOOOOO_OOOO(){
        $actual = $this ->minutes(15);

        $this->assertEquals("[YYROOOOOOOO][OOOO]", $actual);
    }

    public function test_given16_shouldReturnYYROOOOOOOO_YOOO(){
        $actual = $this ->minutes(16);

        $this->assertEquals("[YYROOOOOOOO][YOOO]", $actual);
    }

    public function test_given17_shouldReturnYYROOOOOOOO_YYOO(){
        $actual = $this ->minutes(17);

        $this->assertEquals("[YYROOOOOOOO][YYOO]", $actual);
    }

    public function test_given18_shouldReturnYYROOOOOOOO_YYYO(){
        $actual = $this ->minutes(18);

        $this->assertEquals("[YYROOOOOOOO][YYYO]", $actual);
    }

    public function test_given19_shouldReturnYYROOOOOOOO_YYYY(){
        $actual = $this ->minutes(19);

        $this->assertEquals("[YYROOOOOOOO][YYYY]", $actual);
    }

    public function test_given20_shouldReturnYYRYOOOOOOO_OOOO(){
        $actual = $this ->minutes(20);

        $this->assertEquals("[YYRYOOOOOOO][OOOO]", $actual);
    }

    public function test_given21_shouldReturnYYRYOOOOOOO_YOOO(){
        $actual = $this ->minutes(21);

        $this->assertEquals("[YYRYOOOOOOO][YOOO]", $actual);
    }

    public function test_given22_shouldReturnYYRYOOOOOOO_YYOO(){
        $actual = $this ->minutes(22);

        $this->assertEquals("[YYRYOOOOOOO][YYOO]", $actual);
    }

    public function test_given23_shouldReturnYYRYOOOOOOO_YYYO(){
        $actual = $this ->minutes(23);

        $this->assertEquals("[YYRYOOOOOOO][YYYO]", $actual);
    }

    public function test_given24_shouldReturnYYRYOOOOOOO_YYYY(){
        $actual = $this ->minutes(24);

        $this->assertEquals("[YYRYOOOOOOO][YYYY]", $actual);
    }

    public function test_given25_shouldReturnYYRYYOOOOOO_OOOO(){
        $actual = $this ->minutes(25);

        $this->assertEquals("[YYRYYOOOOOO][OOOO]", $actual);
    }

    public function test_given26_shouldReturnYYRYYOOOOOO_YOOO(){
        $actual = $this ->minutes(26);

        $this->assertEquals("[YYRYYOOOOOO][YOOO]", $actual);
    }

    public function test_given27_shouldReturnYYRYYOOOOOO_YYOO(){
        $actual = $this ->minutes(27);

        $this->assertEquals("[YYRYYOOOOOO][YYOO]", $actual);
    }

    public function test_given28_shouldReturnYYRYYOOOOOO_YYYO(){
        $actual = $this ->minutes(28);

        $this->assertEquals("[YYRYYOOOOOO][YYYO]", $actual);
    }

    public function test_given29_shouldReturnYYRYYOOOOOO_YYYY(){
        $actual = $this ->minutes(29);

        $this->assertEquals("[YYRYYOOOOOO][YYYY]", $actual);
    }

    public function test_given30_shouldReturnYYRYYROOOOO_OOOO(){
        $actual = $this ->minutes(30);

        $this->assertEquals("[YYRYYROOOOO][OOOO]", $actual);
    }

    public function test_given31_shouldReturnYYRYYROOOOO_YOOO(){
        $actual = $this ->minutes(31);

        $this->assertEquals("[YYRYYROOOOO][YOOO]", $actual);
    }

    public function test_given32_shouldReturnYYRYYROOOOO_YYOO(){
        $actual = $this ->minutes(32);

        $this->assertEquals("[YYRYYROOOOO][YYOO]", $actual);
    }

    public function test_given33_shouldReturnYYRYYROOOOO_YYYO(){
        $actual = $this ->minutes(33);

        $this->assertEquals("[YYRYYROOOOO][YYYO]", $actual);
    }

    public function test_given34_shouldReturnYYRYYROOOOO_YYYY(){
        $actual = $this ->minutes(34);

        $this->assertEquals("[YYRYYROOOOO][YYYY]", $actual);
    }

    public function test_given35_shouldReturnYYRYYRYOOOO_OOOO(){
        $actual = $this ->minutes(35);

        $this->assertEquals("[YYRYYRYOOOO][OOOO]", $actual);
    }

    public function test_given36_shouldReturnYYRYYRYOOOO_YOOO(){
        $actual = $this ->minutes(36);

        $this->assertEquals("[YYRYYRYOOOO][YOOO]", $actual);
    }

    public function test_given37_shouldReturnYYRYYRYOOOO_YYOO(){
        $actual = $this ->minutes(37);

        $this->assertEquals("[YYRYYRYOOOO][YYOO]", $actual);
    }

    public function test_given38_shouldReturnYYRYYRYOOOO_YYYO(){
        $actual = $this ->minutes(38);

        $this->assertEquals("[YYRYYRYOOOO][YYYO]", $actual);
    }

    public function test_given39_shouldReturnYYRYYRYOOOO_YYYY(){
        $actual = $this ->minutes(39);

        $this->assertEquals("[YYRYYRYOOOO][YYYY]", $actual);
    }

    public function test_given40_shouldReturnYYRYYRYYOOO_OOOO(){
        $actual = $this ->minutes(40);

        $this->assertEquals("[YYRYYRYYOOO][OOOO]", $actual);
    }

    public function test_given41_shouldReturnYYRYYRYYOOO_YOOO(){
        $actual = $this ->minutes(41);

        $this->assertEquals("[YYRYYRYYOOO][YOOO]", $actual);
    }

    public function test_given42_shouldReturnYYRYYRYYOOO_YYOO(){
        $actual = $this ->minutes(42);

        $this->assertEquals("[YYRYYRYYOOO][YYOO]", $actual);
    }

    public function test_given43_shouldReturnYYRYYRYYOOO_YYYO(){
        $actual = $this ->minutes(43);

        $this->assertEquals("[YYRYYRYYOOO][YYYO]", $actual);
    }

    public function test_given44_shouldReturnYYRYYRYYOOO_YYYY(){
        $actual = $this ->minutes(44);

        $this->assertEquals("[YYRYYRYYOOO][YYYY]", $actual);
    }

    public function test_given45_shouldReturnYYRYYRYYROO_OOOO(){
        $actual = $this ->minutes(45);

        $this->assertEquals("[YYRYYRYYROO][OOOO]", $actual);
    }

    public function test_given46_shouldReturnYYRYYRYYROO_YOOO(){
        $actual = $this ->minutes(46);

        $this->assertEquals("[YYRYYRYYROO][YOOO]", $actual);
    }

    public function test_given47_shouldReturnYYRYYRYYROO_YYOO(){
        $actual = $this ->minutes(47);

        $this->assertEquals("[YYRYYRYYROO][YYOO]", $actual);
    }

    public function test_given48_shouldReturnYYRYYRYYROO_YYYO(){
        $actual = $this ->minutes(48);

        $this->assertEquals("[YYRYYRYYROO][YYYO]", $actual);
    }

    public function test_given49_shouldReturnYYRYYRYYROO_YYYY(){
        $actual = $this ->minutes(49);

        $this->assertEquals("[YYRYYRYYROO][YYYY]", $actual);
    }

    public function test_given50_shouldReturnYYRYYRYYRYO_OOOO(){
        $actual = $this ->minutes(50);

        $this->assertEquals("[YYRYYRYYRYO][OOOO]", $actual);
    }

    public function test_given51_shouldReturnYYRYYRYYRYO_YOOO(){
        $actual = $this ->minutes(51);

        $this->assertEquals("[YYRYYRYYRYO][YOOO]", $actual);
    }

    public function test_given52_shouldReturnYYRYYRYYRYO_YYOO(){
        $actual = $this ->minutes(52);

        $this->assertEquals("[YYRYYRYYRYO][YYOO]", $actual);
    }

    public function test_given53_shouldReturnYYRYYRYYRYO_YYYO(){
        $actual = $this ->minutes(53);

        $this->assertEquals("[YYRYYRYYRYO][YYYO]", $actual);
    }

    public function test_given54_shouldReturnYYRYYRYYRYO_YYYY(){
        $actual = $this ->minutes(54);

        $this->assertEquals("[YYRYYRYYRYO][YYYY]", $actual);
    }

    public function test_given55_shouldReturnYYRYYRYYRYY_OOOO(){
        $actual = $this ->minutes(55);

        $this->assertEquals("[YYRYYRYYRYY][OOOO]", $actual);
    }

    public function test_given56_shouldReturnYYRYYRYYRYY_YOOO(){
        $actual = $this ->minutes(56);

        $this->assertEquals("[YYRYYRYYRYY][YOOO]", $actual);
    }

    public function test_given57_shouldReturnYYRYYRYYRYY_YYOO(){
        $actual = $this ->minutes(57);

        $this->assertEquals("[YYRYYRYYRYY][YYOO]", $actual);
    }

    public function test_given58_shouldReturnYYRYYRYYRYY_YYYO(){
        $actual = $this ->minutes(58);

        $this->assertEquals("[YYRYYRYYRYY][YYYO]", $actual);
    }

    public function test_given59_shouldReturnYYRYYRYYRYY_YYYY(){
        $actual = $this ->minutes(59);

        $this->assertEquals("[YYRYYRYYRYY][YYYY]", $actual);
    }
    public function test_given1_00_shouldReturnOOOO_ROOO() {
        $actual =$this->hours(1);

        $this->assertEquals("[OOOO][ROOO]",$actual);
    }

    public function test_given2_00_shouldReturnOOOO_RROO() {
        $actual =$this->hours(2);

        $this->assertEquals("[OOOO][RROO]",$actual);
    }

    public function test_given3_00_shouldReturnOOOO_RRRO() {
        $actual =$this->hours(3);

        $this->assertEquals("[OOOO][RRRO]",$actual);
    }

    public function test_given4_00_shouldReturnOOOO_RRRR() {
        $actual =$this->hours(4);

        $this->assertEquals("[OOOO][RRRR]",$actual);
    }

    public function test_given5_00_shouldReturnROOO_OOOO() {
        $actual =$this->hours(5);

        $this->assertEquals("[ROOO][OOOO]",$actual);
    }

    public function test_given6_00_shouldReturnROOO_ROOO()
    {
        $actual =$this->hours(6);

        $this->assertEquals("[ROOO][ROOO]",$actual);
    }

    public function test_given7_00_shouldReturnROOO_RROO()
    {
        $actual =$this->hours(7);

        $this->assertEquals("[ROOO][RROO]",$actual);
    }

    public function test_given8_00_shouldReturnROOO_RRRO()
    {
        $actual =$this->hours(8);

        $this->assertEquals("[ROOO][RRRO]",$actual);
    }

    public function test_given9_00_shouldReturnROOO_RRRR()
    {
        $actual =$this->hours(9);

        $this->assertEquals("[ROOO][RRRR]",$actual);
    }

    public function test_given10_00_shouldReturnRROO_OOOO() {
        $actual = $this->hours(10);

        $this->assertEquals("[RROO][OOOO]",$actual);
    }

    public function test_given11_00_shouldReturnRROO_ROOO()
    {
        $actual =$this->hours(11);

        $this->assertEquals("[RROO][ROOO]",$actual);
    }

    public function test_given12_00_shouldReturnRROO_RROO()
    {
        $actual =$this->hours(12);

        $this->assertEquals("[RROO][RROO]",$actual);
    }

    public function test_given13_00_shouldReturnRROO_RRRO()
    {
        $actual =$this->hours(13);

        $this->assertEquals("[RROO][RRRO]",$actual);
    }

    public function test_given14_00_shouldReturnRROO_RRRR()
    {
        $actual =$this->hours(14);

        $this->assertEquals("[RROO][RRRR]",$actual);
    }

    public function test_given15_00_shouldReturnRRRO_OOOO() {
        $actual = $this->hours(15);

        $this->assertEquals("[RRRO][OOOO]",$actual);
    }

    public function test_given16_00_shouldReturnRRRO_ROOO() {
        $actual = $this->hours(16);

        $this->assertEquals("[RRRO][ROOO]",$actual);
    }

    public function test_given17_00_shouldReturnRRRO_RROO() {
        $actual = $this->hours(17);

        $this->assertEquals("[RRRO][RROO]",$actual);
    }

    public function test_given18_00_shouldReturnRRRO_RRRO() {
        $actual = $this->hours(18);

        $this->assertEquals("[RRRO][RRRO]",$actual);
    }

    public function test_given19_00_shouldReturnRRRO_RRRR() {
        $actual = $this->hours(19);

        $this->assertEquals("[RRRO][RRRR]",$actual);
    }

    public function test_given20_00_shouldReturnRRRR_OOOO() {
        $actual = $this->hours(20);

        $this->assertEquals("[RRRR][OOOO]",$actual);
    }

    public function test_given21_00_shouldReturnRRRR_ROOO() {
        $actual = $this->hours(21);

        $this->assertEquals("[RRRR][ROOO]",$actual);
    }

    public function test_given22_00_shouldReturnRRRR_RROO() {
        $actual = $this->hours(22);

        $this->assertEquals("[RRRR][RROO]",$actual);
    }

    public function test_given23_00_shouldReturnRRRR_RRRO() {
        $actual = $this->hours(23);

        $this->assertEquals("[RRRR][RRRO]",$actual);
    }

    public function test_given24_00_shouldReturnRRRR_RRRR() {
        $actual = $this->hours(24);

        $this->assertEquals("[RRRR][RRRR]",$actual);
    }

    public function test_given1second_shouldReturnO(){
        $actual = $this->seconds(1);

        $this->assertEquals("[O]",$actual);
    }

    public function test_given2second_shouldReturnR(){
        $actual = $this->seconds(2);

        $this->assertEquals("[R]",$actual);
    }

    public function test_second_all() {
        for($i=0;$i<60;$i++) {
            $actual = $this->seconds($i);
            if($i%2 === 0) {
                $this->assertEquals("[R]",$actual);
            } else {
                $this->assertEquals("[O]",$actual);
            }
        }
    }

    public function test_all_clock_1() {
        $berlinClock = new berlinClock();

        $actual = $berlinClock->clock(1,11,12);

        $this->assertEquals("[R][OOOO][ROOO][YYOOOOOOOOO][YOOO]",$actual);
    }

    public function test_all_clock_2() {
        $berlinClock = new berlinClock();

        $actual = $berlinClock->clock(0,00,00);

        $this->assertEquals("[R][OOOO][OOOO][OOOOOOOOOOO][OOOO]",$actual);
    }

    public function test_all_clock_3() {
        $berlinClock = new berlinClock();

        $actual = $berlinClock->clock(23,59,59);

        $this->assertEquals("[O][RRRR][RRRO][YYRYYRYYRYY][YYYY]",$actual);
    }

    public function hours(int $int): string {
        return $this->berlinClock->hours($int);
    }

    public function minutes(int $int): string {
        return $this->berlinClock->minutes($int);
    }

    public function seconds(int $int):string{
        return $this->berlinClock->seconds($int);
    }

}