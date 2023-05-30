<?php

function myAvg($array): float
{
    if (count($array) > 0) {
        $sumOfvalues = 0;
        $avg = 0;

        foreach ($array as $value) {
            $sumOfvalues += $value;
        }
        $avg = $sumOfvalues / count($array);

        return $avg;
    } else {
        return 0;
    }
}


// echo myAvg([10, 20, 50]);
echo myAvg([]);
