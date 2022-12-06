<?php

namespace aoc2022;

require '../main.php';
class D1 {
    static function challenge1(): void
    {
        $res = max(day1::getCalories());
        echo $res;
    }

    static function challenge2(): void
    {
        $threeWinnerValue = 0;
        $calories = day1::getCalories();
        rsort($calories);
        foreach ($calories as $index => $value) {
            $depth = 3;
            if($index < $depth) {
                $threeWinnerValue += $value;
            }
        }
        echo $threeWinnerValue;
    }
}


D1::challenge1();
D1::challenge2();


