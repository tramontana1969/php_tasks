<?php //https://www.codewars.com/kata/58663693b359c4a6560001d6/train/php
function maze_runner($maze, $directions): string {
    $startX = 0;
    $startY = 0;
    for ($x = 0; $x < count($maze); $x++) {
        for ($y = 0; $y < count($maze); $y++) {
            if ($maze[$x][$y] == 2) {
                $startX = $x;
                $startY = $y;
            }
        }
    }
    echo " {$startX} - {$startY},  ";
    foreach ($directions as $dire) {
        if ($dire == 'N') {
            $startX -= 1;
        }
        elseif ($dire == 'S') {
            $startX += 1;
        }
        elseif ($dire == 'W') {
            $startY -= 1;
        }
        elseif ($dire == 'E') {
            $startY += 1;
        }
        echo " {$startX} - {$startY},  ";

        if ($startX < 0 || $startY < 0 || $startX > count($maze) -1 || $startY > count($maze) - 1 || $maze[$startX][$startY] == 1) {
            return 'Dead';
        }
        if ($maze[$startX][$startY] == 3) {
            return 'Finish';
        }
    }
    return 'Lost';
}