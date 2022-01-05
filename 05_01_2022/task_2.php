<?php //https://www.codewars.com/kata/5a99a03e4a6b34bb3c000124/train/php

function sieveOfEratosthenes() {
    $arr = [];
    for ($i = 2; $i < 1000; $i++) {
        $arr += [$i => true];
    }
    for ($i = 2; $i < count($arr); $i++) {
        if ($arr[$i] == true) {
            for ($j = $i ** 2; $j < count($arr); $j += $i) {
                $arr[$j] = false;
            }
        }
    }
    return $arr;
}

function numPrimorial($n) {
    $counter = 0;
    $result = 1;
    $arr = sieveOfEratosthenes();
    for ($i = 2; $i < count($arr); $i++) {
        if ($arr[$i] == true) {
            $result *= $i;
            $counter +=1;
        }
        if ($counter == $n) {
            return $result;
        }
    }
}
