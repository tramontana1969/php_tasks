<?php //https://www.codewars.com/kata/5266876b8f4bf2da9b000362/train/php
function likes( $names ) {
    if (count($names) == 0) {
        return 'no one likes this';
    }
    $counter = count($names) - 2;
    $like = '';
    for ($i = 0; $i < count($names); $i++) {
        if ($i == 0) {
            $like = "{$names[$i]} likes this";
        }
        elseif ($i == 1) {
            $like = "{$names[$i - 1]} and {$names[$i]} like this";
        }
        elseif ($i == 2) {
            $like = "{$names[$i - 2]}, {$names[$i - 1]} and {$names[$i]} like this";
        }
        else {
            $like = "{$names[0]}, {$names[1]} and {$counter} others like this";
        }
    }
    return $like;
}