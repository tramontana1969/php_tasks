<?php //https://www.codewars.com/kata/55d24f55d7dd296eb9000030/train/php
function summation($n) {
    $result = 0;
    while ($n) {
        $result += $n;
        $n--;
    }
    return $result;
}