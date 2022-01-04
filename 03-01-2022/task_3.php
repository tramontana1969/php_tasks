<?php //https://www.codewars.com/kata/5b180e9fedaa564a7000009a/train/php
function solve($s) {
    $lowcounter = 0;
    $upcounter = 0;
    $output=$s;
    $arr = [];
    for ($i = 0; $i < strlen($s); $i++) {
        if (ctype_lower($s[$i])) {
            $lowcounter += 1;
        }
        elseif (ctype_upper($s[$i])) {
            $upcounter += 1;
        }
    }
    for ($i = 0; $i < strlen($s); $i++) {
        $arr[] = $s[$i];
    }
    if ($upcounter == $lowcounter)  {
        $output=strtolower($s);}
    else {
        for ($i = 0;$i < count($arr);$i++) {
            if ($upcounter > $lowcounter && ctype_lower($arr[$i])){
                $arr[$i] = strtoupper($arr[$i]);
            }
            elseif($lowcounter > $upcounter && ctype_upper($arr[$i])) {
                $arr[$i]=strtolower($arr[$i]);
            }
            $output = implode('', $arr);
        }
    }
    return $output;
}
