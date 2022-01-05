<?php //https://www.codewars.com/kata/55e2adece53b4cdcb900006c/train/php
function race($v1, $v2, $g) {
    if ($v1 > $v2) {
        return NULL;
    }
    $time = $g * 3600 / ($v2 - $v1);
    $hours = floor($time / 3600);
    $minutes = floor(($time % 3600) / 60);
    $seconds = floor($time % 60);
    return [$hours, $minutes, $seconds];
}