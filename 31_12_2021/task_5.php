<?php //https://www.codewars.com/kata/57cebe1dc6fdc20c57000ac9/train/php
//function findShort($str){
//    $arr = explode(' ', $str);
//    $len_nums = [];
//    foreach ($arr as $word) {
//        $len_nums[] = strlen($word);
//    }
//    return min($len_nums);
//}

//also we can implement a sulution by manual sorting '$len_nums'

function findShort($str){
    $arr = [];
    $word = '';
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == ' ') {
            $arr[] = $word;
            $word = '';
        }
        $word .= $str[$i];
        if ($i == strlen($str) - 1) {
            $arr[] = $word;
        }
    }
    $len_nums = [];
       foreach ($arr as $word) {
     $len_nums[] = strlen($word);
   }
    for ($i = 0; $i < count($len_nums); $i++) {
        $index = $i;
        for ($j = $i + 1; $j < count($len_nums); $j++) {
            if ($len_nums[$j] < $len_nums[$i]) {
                $index = $j;
                $tmp = $len_nums[$i];
                $len_nums[$i] = $len_nums[$index];
                $len_nums[$j] = $tmp;
            }
        }
    }
    return print_r($arr);
}

echo findShort('bitcoin take over the world maybe who knows perhaps');