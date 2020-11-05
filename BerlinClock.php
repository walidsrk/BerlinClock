
<?php



class BerlinClock
{
    private function simpleMinutes(int $int):string
    {
        if($int === 1 || $int === 6) return "YOOO";
        if($int === 2) return "YYOO";
        if($int === 3) return "YYYO";
        if($int === 4) return "YYYY";
        return "OOOO";
    }
    private function fiveMinutes(int $int):string
    {
        if($int === 5 || $int === 6) return "YOOOOOOOOOO";
        if($int === 10) return "YYOOOOOOOOO";
        if($int === 15) return "YYROOOOOOOO";
        if($int === 20) return "YYRYOOOOOOO";
        if($int === 25) return "YYRYYOOOOOO";
        if($int === 30) return "YYRYYROOOOO";
        if($int === 35) return "YYRYYRYOOOO";
        if($int === 40) return "YYRYYRYYOOO";
        if($int === 45) return "YYRYYRYYROO";
        if($int === 50) return "YYRYYRYYRYO";
        if($int === 55) return "YYRYYRYYRYY";
        return "OOOOOOOOOOO";
    }

    public function minutes(int $int):string
    {
        $simpleMinutes = $int%5;
        $fiveMinutes = $int-$simpleMinutes;
        $resultSimple = $this->simpleMinutes($simpleMinutes);
        $resultFive = $this->fiveMinutes($fiveMinutes);
        return "[".$resultFive."][".$resultSimple."]";
    }

    public function hours(int $int):string
    {
        if($int === 1) return "[ROOO]";
        if($int === 2) return "[RROO]";
        if($int === 3) return "[RRRO]";
        if($int === 4) return "[RRRR]";
    }

    public function fiveHours(int $int):string
    {
        if($int === 5) return "[ROOO]";
    }
}