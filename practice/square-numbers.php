<?php

function square_sum($numbers): int
{
    $result = 0;

    foreach ($numbers as $value) {
        $value = $value ** 2;
        $result += $value;
    }

    return $result;
}
