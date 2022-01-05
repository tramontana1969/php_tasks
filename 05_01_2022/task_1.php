<?php //https://www.codewars.com/kata/59752e1f064d1261cb0000ec/train/php
function what_time_is_it(float $angle): string {
    if ($angle == 0) {
        return '12:00';
    }
    $hour = floor(12 * $angle / 360);
    if ($angle < 30) {
        $hour = 12;
    }
    $minutes = floor(60 * (12 * $angle % 360) / 360);
    if ($hour < 10 && $minutes < 10) {
        return "0{$hour}:0{$minutes}";
    }
    elseif ($hour < 10 && $minutes >= 10) {
        return "0{$hour}:{$minutes}";
    }
    elseif ($hour >= 10 && $minutes < 10) {
        return "{$hour}:0{$minutes}";
    }
    elseif ($hour >= 10 && $minutes >= 10) {
        return "{$hour}:{$minutes}";
    }
}