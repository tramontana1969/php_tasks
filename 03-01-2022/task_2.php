<?php //https://www.codewars.com/kata/59c633e7dcc4053512000073/train/php

function solve($s) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $alphabet_arr = [];
    $sum = 0;
    $sum_arr = [];
    for ($i = 0; $i < strlen($alphabet); $i++) {
        $alphabet_arr += [$alphabet[$i] => $i + 1];
    }
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == 'a' || $s[$i] == 'e' || $s[$i] == 'i' || $s[$i] == 'o' || $s[$i] == 'u') {
            $sum = 0;
            continue;
        }
        $sum += $alphabet_arr[$s[$i]];
        $sum_arr[] = $sum;
    }
    $sorted = quickSort($sum_arr);
    return $sorted[0];
}

function quickSort($arr) {
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }
    $base_value = $arr[0];
    $left_arr = [];
    $right_arr = [];
    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] > $base_value) {
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