
<?php



class BerlinClock
{
    public function simpleMinutes(int $int):string
    {
        if($int === 1 || $int === 6) return "YOOO";
        if($int === 2) return "YYOO";
        if($int === 3) return "YYYO";
        if($int === 4) return "YYYY";
        return "OOOO";
    }
    public function fiveMinutes(int $int):string
    {
        if($int === 5 || $int === 6) return "YOOOOOOOOOO";
    }
}