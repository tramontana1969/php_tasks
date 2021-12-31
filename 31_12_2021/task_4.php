<?php //https://www.codewars.com/kata/5544c7a5cb454edb3c000047/train/php
function bouncingBall($h, $bounce, $window) {
    if ($h <= 0 || $bounce <= 0 || $bounce >= 1 || $window >= $h) {
        return -1;
    }
    $counter = 0;
    while (true) {
        $counter += 1;
        $h *= $bounce;
        if ($h <= $window) {
            break;
        }
        $counter += 1;
    }
    return $counter;
}
