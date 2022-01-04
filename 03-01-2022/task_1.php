<?php //https://www.codewars.com/kata/57f609022f4d534f05000024/train/php
function quickSort($arr) {
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }
    $base_value = $arr[0];
    $left_arr = [];
    $right_arr = [];
    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] < $base_value) {
            $left_arr[] = $arr[$i];
        }
        else {
            $right_arr[] = $arr[$i];
        }
    }
    $left_arr = quickSort($left_arr);
    $right_arr = quickSort($right_arr);
    return array_merge($left_arr, array($base_value), $right_arr);
}

function stray($arr){
    $counted_values = [];
    $counter = 1;
    $sorted = quickSort($arr);
    for ($i = 0; $i < count($sorted); $i++) {
        if (current($sorted) == next($sorted)) {
            $counter++;
        }
        else {
            $counted_values += [$counter => $sorted[$i]];
            $counter = 1;
        }

    }
    return $counted_values[1];
}