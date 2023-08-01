<?php

function sum(array $a): float
{
    // Your code here
    $result = 0;
    if ($a == 0) {
        return $result;
    } else {
        foreach ($a as $num) {
            $result += $num;
        }
        return $result;
    }
}

$myArray = [1, 5.2, 4, 0, -1];

echo sum($myArray);