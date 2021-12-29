<?php //https://www.codewars.com/kata/56747fd5cb988479af000028/train/php
function getMiddle($text) {
    if (strlen($text) % 2 == 0) {
        $string = substr($text, strlen($text) / 2 - 1, 2);
    }
    else {
        $string = substr($text, floor(strlen($text) / 2), 1);
    }
    return $string;
}