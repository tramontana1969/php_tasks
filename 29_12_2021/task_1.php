<?php //https://www.codewars.com/kata/54b42f9314d9229fd6000d9c/train/php
function duplicate_encode($word): string{
    $lower = strtolower($word);
    $arr = [];
    $output = '';
    for ($i = 0; $i < strlen($lower); $i++) {
        $arr[] = $lower[$i];
    }
    $counted_values = array_count_values($arr);
    for ($j = 0; $j < strlen($lower); $j++) {
        if ($counted_values[$lower[$j]] == 1){
            $output .= '(';
        }
        else {
            $output .= ')';
        }
    }
    return $output;
}