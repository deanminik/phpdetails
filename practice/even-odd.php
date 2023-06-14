<?php


function even_or_odd(int $n): string
{
    // Your code here
    return $n % 2 ? "Odd" : "Even";
}


// echo even_or_odd(8);


function lovefunc($flower1, $flower2)
{
    // moment of truth

    $flower1 = $flower1 % 2 ? "Odd" : "Even";
    $flower2 = $flower2 % 2 ? "Odd" : "Even";

    $result =  $flower1 != $flower2 ? true : false;

    return  $result;
}

echo lovefunc(4, 1);
