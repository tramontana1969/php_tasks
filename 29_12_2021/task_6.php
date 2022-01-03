<?php //https://www.codewars.com/kata/56747fd5cb988479af000028/train/php
function getMiddle($text) {
    $string = '';
    $full = strlen($text);
    $middle = strlen($text) / 2;
    for ($i = 0; $i < strlen($full); $i++) {
        if ($full == 1) {
            $string = $text;
        }
        elseif ($full % 2 == 0) {
            $string = $text[$middle - 1].$text[$middle];
        }
        else {
            $string = $text[$middle];
        }
    }
    return $string;
}