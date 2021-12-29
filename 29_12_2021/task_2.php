<?php //https://www.codewars.com/kata/54bf1c2cd5b56cc47f0007a1/train/php
function duplicateCount($text) {
    $arr = str_split(strtolower($text));
    $counted_values = array_count_values($arr);
    $counter = 0;
    foreach ($counted_values as $value) {
        if ($value > 1) {
            $counter += 1;
        }
    }
    return $counter;
}