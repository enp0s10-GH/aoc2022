<?php

namespace aoc2022;

require_once '../main.php';

class D3
{
    public static function challenge1(): void
    {
        $file = Main::getFile();
        $matched = 0;
        foreach ($file as $line) {
            $comp = str_split($line, strlen($line) / 2);
            $case = '';
            foreach (str_split($comp[0]) as $comp1) {
                foreach (str_split($comp[1]) as $comp2) {
                    if ($comp1 == $comp2 && !str_contains($case, $comp1)) {
                        $case .= $comp1;
                        $matched += day3::toAsciiNum($comp1);
                    }
                }
            }
        }
        echo $matched . "\n";

    }

    public static function challenge2(): void
    {
        $file = Main::getFile();
        $count = 0;
        foreach ($file as $index => $line) {
            if (($index + 1) % 3 == 0) {
                $group = array(
                    'first' => $file[$index - 2],
                    'second' => $file[$index - 1],
                    'third' => $line,
                );
                foreach (str_split($group['first']) as $first) {
                    if (str_contains($group['second'], $first) && str_contains($group['third'], $first)) {
                        $count += day3::toAsciiNum($first);
                        break;
                    }
                }
            }
        }
        echo $count . "\n";
    }

}

D3::challenge2();
D3::challenge1();