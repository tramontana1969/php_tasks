<?php //https://www.codewars.com/kata/5467e4d82edf8bbf40000155/train/php
function descendingOrder(int $n): int {
    $string = "{$n}";

    $output = '';
    for ($i = 0; $i < strlen($string); $i++) {
        for ($j = $i + 1; $j < strlen($string); $j++) {
            if ($string[$j] > $string[$i]) {
                $tmp = $string[$i];
                $string[$i] = $string[$j];
                $string[$j] = $tmp;
            }
        }
        $output .= $string[$i];
    }
    return $output;
}

//function quickSort($arr) {
//    if ()
//    $base = $arr[0];
//    $left_arr = [];
//    $right_arr = [];
//}
