<?php
function highAndLow($numbers)
{
    $newArray = explode(' ', $numbers);
    $result = [];

    foreach ($newArray as $number) {
        $result[] = intval($number);
    }

    $highest = $result[0];
    $lowest = $result[0];

    foreach ($result as $num) {
        if ($num > $highest) {
            $highest = $num;
        }

        if ($num < $lowest) {
            $lowest = $num;
        }
    }

    return $highest . ' ' . $lowest;
}

echo highAndLow("1 1112 8 -14 5");
