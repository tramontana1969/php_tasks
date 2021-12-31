<?php //https://www.codewars.com/kata/542c0f198e077084c0000c2e/train/php
function divisors($n) {
    $counter = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $counter += 1;
        }
    }
    return $counter;
}
