<?php //https://www.codewars.com/kata/554b4ac871d6813a03000035/train/php
function highAndLow($numbers){
    $hiloarr = [];
    $output = '';
    $string_arr = explode(' ', $numbers);
    for ($i = 0; $i < count($string_arr); $i++) {
        $index = $i;
        for ($j = $i + 1; $j < count($string_arr); $j++) {
            if ($string_arr[$j] > $string_arr[$i]) {
                $index = $j;
                $tmp = $string_arr[$i];
                $string_arr[$i] = $string_arr[$index];
                $string_arr[$index] = $tmp;
            }
        }
        if ($i == count($string_arr) - 1) {
            $output = "{$string_arr[0]} {$string_arr[$i]}";
        }
    }
    return $output;
}
