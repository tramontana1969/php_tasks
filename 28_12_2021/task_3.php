<?php //https://www.codewars.com/kata/546f922b54af40e1e90001da/train/php
function alphabet_position(string $s): string {
    $lower_s = strtolower($s);
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $position_arr = [];
    $output = [];
    for ($i = 0; $i < strlen($alphabet); $i++){
        $position_arr[$i+1] = $alphabet[$i];
    }
    for ($j = 0; $j < strlen($lower_s); $j++){
        $position_number = array_search($lower_s[$j], $position_arr);
        if ($position_number != false){
            $output[] = $position_number;
        }
    }
    return implode(' ', $output);
}

