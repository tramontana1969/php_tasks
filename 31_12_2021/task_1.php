<?php //https://www.codewars.com/kata/578553c3a1b8d5c40300037c/train/php
function binaryArrayToNumber($arr) {
    $index = 1;
    $num = 0;
    $i = 0;
    foreach (array_reverse($arr) as $value) {
        if ($value == 1) {
            $num += $index;
        }
        $index *= 2;
    }
    return $num;
}
