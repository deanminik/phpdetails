<?php

function countSheep($arr)
{

    $result = 0;
    foreach ($arr as $value) {
        if ($value === true) {
            $result++;
        }
    }

    return $result;
}

$myArray = [
    true,  true,  true,  false,
    true,  true,  true,  true,
    true,  false, true,  false,
    true,  false, false, true,
    true,  true,  true,  true,
    false, false, true,  true
];

echo countSheep($myArray);
