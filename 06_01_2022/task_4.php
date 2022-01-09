<?php //https://www.codewars.com/kata/5b55c49d4a317adff500015f/train/php
function pointsNumber($r){
    $points = 0;
    for ($i=-$r;$i<=$r;$i++){
        for ($j=-$r;$j<=$r;$j++){
            if ($i*$i+$j*$j<=$r*$r) {
                $points++;
            }
        }
    }
    return $points;
}