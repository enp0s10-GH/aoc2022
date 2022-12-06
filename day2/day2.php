<?php

namespace aoc2022;

require '../main.php';

class D2
{
    static function challenge1(): void
    {
        $draw = day2::draw();
        $winning = day2::winning();
        $methods = day2::methods();
        $score = 0;
        $file = Main::getFile();
        foreach ($file as $line) {
            $answer = preg_replace('/\r\n/', '', explode(' ', $line));
            $score += $methods[$answer[1]];
            if ($draw[$answer[0]] == $answer[1]) {
                $score += $methods['draw'];
            }
            if ($winning[$answer[0]] == $answer[1]) {
                $score += $methods['win'];
            }
        }
        echo $score."\r\n";
    }

    static function challenge2(): void
    {
        $draw = day2::draw();
        $winning = day2::winning();
        $methods = day2::methods();
        $losing = day2::losing();
        $score = 0;
        $file = Main::getFile();
        foreach ($file as $line) {
            $answer = preg_replace('/\r\n/', '', explode(' ', $line));
            if ($answer[1] == 'X') {
                $score += $methods[$losing[$answer[0]]];
            } elseif ($answer[1] == 'Y') {
                $score += $methods[$draw[$answer[0]]];
                $score += $methods['draw'];
            } elseif ($answer[1] == 'Z') {
                $score += $methods[$winning[$answer[0]]];
                $score += $methods['win'];
            }
        }
        echo $score."\r\n";
    }
}

D2::challenge1();
D2::challenge2();



