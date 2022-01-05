<?php //https://www.codewars.com/kata/57f8ff867a28db569e000c4a/train/php
function kebabize($string) {
    $out = '';
    $arr = [];
    for ($i = 0; $i < strlen($string); $i++) {
        if (!ctype_alpha($string[$i])) {
            continue;
        }
        $arr[] = $string[$i];
    }
    for ($i = 0; $i < count($arr); $i++) {
        if ($i == 0 && ctype_upper($arr[$i])) {
            $out .= strtolower($arr[$i]);
            continue;
        }
        if (ctype_upper($arr[$i])) {
            $out .= '-';
            $out .= strtolower($arr[$i]);
            continue;
        }
        $out .= $arr[$i];
    }
    return $out;
}
