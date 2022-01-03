<?php //https://www.codewars.com/kata/54bf1c2cd5b56cc47f0007a1/train/php
function duplicateCount($text) {
    $arr = [];
    $counted_values = [];
    $value_counter = 0;
    $lowcase = strtolower($text);
    for ($i = 0; $i < strlen($lowcase); $i++) {
        if (in_array($lowcase[$i], $arr)) {
            $value_counter += 1;
            $counted_values += [$lowcase[$i] => $value_counter];
        }
        $arr[] = $lowcase[$i];
        $value_counter = 0;
    }
    $counter = 0;
    foreach ($counted_values as $value) {
        if ($value == 1) {
            $counter += 1;
        }
    }
    return $counter;
}