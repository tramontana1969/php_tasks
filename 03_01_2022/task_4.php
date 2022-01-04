<?php //https://www.codewars.com/kata/523f5d21c841566fde000009/train/php

function linearSearch($val, $arr) {
    foreach ($arr as $item) {
        if ($val == $item) {
            return true;
        }
    }
    return false;
}

function arrayDiff($a, $b) {
    if (empty($b)) {
        return $a;
    }
    $arr = [];
    for ($i = 0; $i < count($a); $i++) {
        if (!linearSearch($a[$i], $b)) {
            $arr[] = $a[$i];
        }
    }
    return $arr;
}
