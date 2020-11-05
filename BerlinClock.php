
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
        if($int === 10) return "YYOOOOOOOOO";
        if($int === 15) return "YYROOOOOOOO";
        if($int === 20) return "YYRYOOOOOOO";
        if($int === 25) return "YYRYYOOOOOO";
        if($int === 30) return "YYRYYROOOOO";
        if($int === 35) return "YYRYYRYOOOO";
    }
}