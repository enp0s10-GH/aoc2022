<?php

namespace aoc2022;

require '../main.php';
class D4 {
    public static function challenge1() {
        $lines = Main::getFile();
        $matchingScopes = 0;
        foreach($lines as $line) {
            $scopes = explode(',', $line);
            $scope1 = day4::fetchScope($scopes[0]);
            $scope2 = day4::fetchScope($scopes[1]);
            if(str_contains($scope2, $scope1) || str_contains($scope1, $scope2)) {
                $matchingScopes += 1;
            }
        }
        echo $matchingScopes-1;

    }
}

D4::challenge1();