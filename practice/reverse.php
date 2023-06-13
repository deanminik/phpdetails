<?php

function solution($str)
{
    // Your code here

    $myArray = str_split($str);
    $resultArr = [];
    $newWord = '';

    for ($i = count($myArray) - 1; $i >= 0; $i--) {
        $resultArr[$i] = $myArray[$i];
    }
    foreach ($resultArr as $letter) {
        $newWord .= $letter;
    }

    return $newWord;
}


echo solution('world');
// dlrow