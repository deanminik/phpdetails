<?php

function countBy($x, $n)
{
    $z = [];
    for ($i = 1; $i <= $n; $i++) {
        $z[] = $x * $i;
    }

    return ($z);
}

countBy(2, 5);
