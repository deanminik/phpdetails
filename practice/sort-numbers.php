<?php

function solution($nums)
{
    $myArray = $nums;
    sort($myArray);
    if ($nums === null || $nums === []) {
        return [];
    } else {

        return  $myArray;
    }
}




print_r(solution([1, 2, 10, 50, 5]));

// $array = [5, 3, 2, 1, 4];
// sort($array);

// // Print the sorted array
// print_r($array);