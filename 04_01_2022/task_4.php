<?php //https://www.codewars.com/kata/576757b1df89ecf5bd00073b/train/php
function tower_builder(int $n): array {
    // Build your tower here
    $symb = '*';
    $arr = [];
    while ($n > 0) {
        if ($n == 1) {
            $space = '';
        }
        $space = increase(' ', $n - 1);
        $str = $space.$symb.$space;
        $arr[] = $str;
        $symb .= '**';
        $n--;
    }
    return $arr;
}

function increase($str, $val) {
    $out = '';
    while ($val > 0) {
        $out .= $str;
        $val--;
    }
    return $out;
}