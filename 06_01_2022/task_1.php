<?php //https://www.codewars.com/kata/5a057ec846d843c81a0000ad/train/php
function cycle($n) {
    if ($n % 2 == 0 || $n % 5 == 0) {
        return -1;
    }
    else {
        $val = 10 % $n;
        $c = 1;
        while ($val != 1) {
            $val = $val * 10 % $n;
            $c++;
        }
        return $c;
    }
}