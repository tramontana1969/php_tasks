<?php //https://www.codewars.com/kata/51e0007c1f9378fa810002a9/train/php
function parse($data) {
    $num = 0;
    $arr = [];

    for ($i = 0; $i < strlen($data); $i++) {
        if ($data[$i] == "d") {
            $num--;
        }
        elseif ($data[$i] == "i") {
            $num++;
        }
        elseif ($data[$i] == "s") {
            $num **= 2;
        }
        elseif ($data[$i] == "o") {
            $arr[] = $num;
        }
    }
    return $arr;
}
