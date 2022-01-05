<?php //https://www.codewars.com/kata/5878520d52628a092f0002d0/train/php
function string_transformer(string $s): string {
    $arr = [];
    $out = '';
    $changed_case = '';
    for ($i = 0; $i < strlen($s); $i++) {
        if (ctype_upper($s[$i])) {
            $changed_case .= strtolower($s[$i]);
        }
        else  {
            $changed_case .= strtoupper($s[$i]);
        }
    }

    $temp_str = '';
    for ($i = 0; $i < strlen($changed_case); $i++) {

        if ($changed_case[$i] == ' ') {
            $arr[] = $temp_str;
            $arr[] = ' ';
            $temp_str = '';
            continue;
        }
        if ($i == strlen($changed_case) - 1) {
            $temp_str .= $changed_case[$i];
            $arr[] = $temp_str;
        }
        $temp_str .= $changed_case[$i];
    }

    $index = count($arr) - 1;
    while ($index >= 0) {
        $out .= "{$arr[$index]}";
        $index--;
    }
    return $out;
}