<?php //https://www.codewars.com/kata/54da5a58ea159efa38000836/train/php
function findIt(array $seq) : int {
    $arr = [];
    $sorted = [];
    for ($i = 0; $i < count($seq); $i++) {
        for ($j = $i + 1; $j < count($seq); $j++) {
            if ($seq[$i] > $seq[$j]) {
                $tmp = $seq[$i];
                $seq[$i] = $seq[$j];
                $seq[$j] = $tmp;
            }
        }
        $sorted[] = $seq[$i];
    }
    for ($i = 0; $i < count($sorted); $i++) {
        $arr += [$sorted[$i] => 1];
        if (current($sorted) == next($sorted)) {
            $arr[$sorted[$i]] = $arr[$sorted[$i]] + 1;
        }
    }
    foreach ($arr as $key => $value) {
        if ($value % 2 != 0) {
            return $key;
        }
    }
    return print_r($arr);
}
