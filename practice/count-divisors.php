<?php

function divisors($n)
{
    // your code here
    $result = 0;
    for ($i = 1; $i <= $n; $i++) {
        if (gettype($n / $i) == 'integer') {
            $result++;
        }
    }

    return $result;
}

$n = 10;

echo divisors($n);
