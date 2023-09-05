<?php

function betterThanAverage($classPoints, $yourPoints)
{
    // Your code here
    $counter = 0;
    $average = 0;
    foreach ($classPoints as $value) {
        $average += $value;
        $counter++;
    }
    $average =  $average / $counter;
    return  $average >= $yourPoints ? false : true;
}



$classPoints = [100, 40, 34, 57, 29, 72, 57, 88];
$yourPoints = 200;

echo betterThanAverage($classPoints, $yourPoints);
