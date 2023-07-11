<?php

function smallestInteger($arr)
{

    #your code here
    $result = $arr[0];
    foreach ($arr as $value) {
        foreach ($arr as $number) {
            if ($number <= $result) {
                $result = $number;
            }
        }
    }

    return $result;
}

$myArray = [34, -345, -1, 100];
// $myArray = [34, 15, 88, 2];
echo smallestInteger($myArray);
