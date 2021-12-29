<?php //https://www.codewars.com/kata/5552101f47fc5178b1000050/train/php
function digPow($n, $p) {
    $string = "$n";
    $border = 0;
    $i = 0;
    while ($i < strlen($string)) {
        $border += $string[$i] ** $p;
        $p += 1;
        $i++;
    }
    if ($border % $n != 0) {
        $result = -1;
    }
    else {
        $result = $border / $n;
    }
    return $result;
}