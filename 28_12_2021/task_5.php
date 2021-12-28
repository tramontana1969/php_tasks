<?php //https://www.codewars.com/kata/5648b12ce68d9daa6b000099/train/php
function number($bus_stops) {
    $people = 0;
    foreach ($bus_stops as $stop){
        $people += $stop[0] - $stop[1];
    }
    return $people;
}
echo number([[4,0],[10,5]]);