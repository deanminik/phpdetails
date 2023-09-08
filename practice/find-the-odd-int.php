<?php

function findIt(array $seq): int
{
    $result = 0;
    $myList = array_count_values($seq);
    foreach ($myList as $key => $value) {
        $value % 2 > 0 ? $result = $key : null;
    }
    return $result;
}


$seq = [20, 1, -1, 2, -2, 3, 3, 5, 5, 1, 2, 4, 20, 4, -1, -2, 5];

echo findIt($seq);
