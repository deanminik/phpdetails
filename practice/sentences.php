<?php

function smash(array $words): string
{
    echo count($words);    // Your code here
    $sentence = '';
    $counter = 1;
    foreach ($words as $word) {
        if ($counter == count($words)) {
            $sentence .= $word;
        } else {
            $sentence .= $word . ' ';
            $counter++;
        }
    }
    return $sentence;
}


$myArray = ['hello', 'world', 'this', 'is', 'great'];
echo smash($myArray);
