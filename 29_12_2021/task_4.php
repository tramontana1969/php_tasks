<?php //https://www.codewars.com/kata/5592e3bd57b64d00f3000047/train/php
function findNb($m) {
    $n = 0;
    $i = 0;
    while ($i < $m) {
        $n += 1;
        $i += $n ** 3;
    }
    if ($i == $m) {
        return $n;
    }
    else {
        return -1;
    }
}