<?php

namespace aoc2022;
class Main
{
    public static function getFile(): array
    {
        $file = file("../input");
        return $file;
    }
}


class day1
{
    public static function getCalories(): array
    {
        $file = file_get_contents('../input');
        $lines = preg_split('/\r\n\r\n/', $file);
        $allCalories = [];
        foreach ($lines as $value) {
            $currentElf = preg_split('/\r\n/', $value);
            $calories = 0;
            foreach ($currentElf as $currentCalories) {
                $calories += $currentCalories;
            }
            $allCalories[] = $calories;
        }
        return $allCalories;
    }

}

class day2 {

    public static function winning(): array
    {
        return array(
            "A" => "Y",
            "B" => "Z",
            "C" => "X",
        );
    }

    public static function losing(): array
    {
        return array(
            "A" => "Z",
            "B" => "X",
            "C" => "Y",
        );
    }

    public static function draw(): array
    {
        return array(
            "A" => "X",
            "B" => "Y",
            "C" => "Z",
        );
    }

    public static function methods(): array
    {
        return array(
            "win" => 6,
            "draw" => 3,
            "A" => 1,
            "B" => 2,
            "C" => 3,
            "X" => 1,
            "Y" => 2,
            "Z" => 3,
        );
    }
}

class day4 {
    public static function fetchScope(string $scope) {
        $first = explode('-', $scope)[0];
        $last = explode('-', $scope)[1];
        $output = "";
        while($first <= $last) {
            $output .= $first . ';';
            $first += 1;
        }
        return $output;
    }
}