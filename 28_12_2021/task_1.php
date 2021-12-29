<?php //https://www.codewars.com/kata/5168bb5dfe9a00b126000018/train/php
function solution($str): string {
    $str_queue = [];
    $reversed = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $str_queue[] = $str[$i];
    }
    while ($str_queue){
    $reversed .= array_pop($str_queue);
    }
    return $reversed;
}