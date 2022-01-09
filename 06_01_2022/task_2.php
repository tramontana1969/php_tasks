<?php //https://www.codewars.com/kata/566be96bb3174e155300001b/train/php
function maxBall($v0) {
    $v = $v0 / 3.6;
    $g = 9.81;
    $t = 0;
    $h = 0;
    $seconds_counter = 0;
    $arr = [];
    while ($h >= 0) {
        $h = $v*$t - 0.5*$g*$t*$t;
        if ($arr && $arr[$seconds_counter - 1] > $h) {
            return $t * 10 - 1;
        }
        $arr += [$seconds_counter => $h];
        $t += 0.1;
        $seconds_counter += 1;
    }
}