<?php // https://www.codewars.com/kata/53da3dbb4a5168369a0000fe/train/php
function even_or_odd(int $n): string {
    if ($n % 2 == 0)
        return "Even";
    else
        return "Odd";
}

/* Another solution on 'Codewars' forum is:
    return $n % 2 == 0 ? 'Even' : 'Odd';
Nice syntax feature to replace 'if/else' with '?', ':' symbols */