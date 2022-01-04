<?php //https://www.codewars.com/kata/5679aa472b8f57fb8c000047/train/php
function find_even_index($arr){
    $end = count($arr);
    $lsum = 0;
    $rsum = 0;
    for ($i = 0; $i < $end; $i++) {
        for ($j = 0; $j < $end; $j++) {
            if ($j < $i) {
                $lsum += $arr[$j];
            }
            if ($j > $i) {
                $rsum += $arr[$j];
            }
        }
        if ($lsum == $rsum) {
            return $i;
        }
        $rsum = $lsum = 0;
    }
    return -1;
}
