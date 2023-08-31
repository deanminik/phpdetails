<?php

function arrayDiff($myArray, $numbers)
{
    $empty = [];
    $result = [];
    if ($numbers == $empty) {
        print_r($myArray);
    } else {
        foreach ($numbers as $num) {
            foreach ($myArray as $i => $value) {
                if ($num == $value) {
                    unset($myArray[$i]);
                }
            }
        }
        foreach ($myArray as $element) {
            if ($element > 0) {
                $result[] = $element;
            }
        }
        print_r($result);
    }
}

$array1 = [1, 2];
$number = [1];


arrayDiff($array1, $number);
