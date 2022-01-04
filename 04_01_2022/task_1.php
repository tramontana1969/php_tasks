<?php //https://www.codewars.com/kata/54ff3102c1bad923760001f3/train/php
function getCount($str) {
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    foreach ($vowels as $item) {
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == $item) {
                $vowelsCount++;
            }
        }
    }
    return $vowelsCount;
}