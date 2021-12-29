<?php //https://www.codewars.com/kata/5656b6906de340bd1b0000ac/train/php
function unique($str): array {
    $unique_values = [];
    $counter = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $unique_values)) {
            $counter += 1;
        }
        $unique_values[] = $str[$i];
        if ($counter > 0) {
            array_pop($unique_values);
            $counter = 0;
        }
    }
    return $unique_values;
}

function longest($a, $b) {
    $total_string = $a.$b;
    $arr = unique($total_string);
    for ($i = 0; $i < count($arr); $i++) {
        $index = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$index]) {
                $index = $j;
            }
        }
        $tmp = $arr[$i];
        $arr[$i] = $arr[$index];
        $arr[$index] = $tmp;
    }
    return implode('',$arr);
}
echo longest("aretheyhere", "yestheyarehere");
