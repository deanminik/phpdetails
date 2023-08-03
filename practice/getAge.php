<?php

function getAge($response)
{
    // return correct age (int). Happy coding :) 
    $myArray = str_split($response);
    $result = 0;

    foreach ($myArray as $value) {
        if ($value == '0') {
            $result = 0;
        } elseif ($value == '1') {
            $result = 1;
        } elseif ($value == '2') {
            $result = 2;
        } elseif ($value == '3') {
            $result = 3;
        } elseif ($value == '4') {
            $result = 4;
        } elseif ($value == '5') {
            $result = 5;
        } elseif ($value == '6') {
            $result = 6;
        } elseif ($value == '7') {
            $result = 7;
        } elseif ($value == '8') {
            $result = 8;
        } elseif ($value == '9') {
            $result = 9;
        }
        return $result;
    }
}

getAge('3 years old');
