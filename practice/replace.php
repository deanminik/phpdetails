<?php

// Given a string of digits, you should replace any digit below 5 with '0' 

// and any digit 5 and above with '1'. Return the resulting string.

function fake_bin(string $s): string
{
    // Write your code here
    $myArray = str_split($s);
    $result = '';
    foreach ($myArray as $value) {
        if (intval($value) < 5) {
            $value = '0';
            $result .= $value;
        } elseif (intval($value) >= 1) {
            $value = '1';
            $result .= $value;
        }
    }

    return $result;
}


$mystring = '45385593107843568';

echo fake_bin($mystring);
