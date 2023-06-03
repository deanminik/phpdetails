<?php
function reverseSeq($n)
{   
    $number = $n;
    $result = [];
    for ($i = 1; $i <= $n; $i++) {
        array_push($result, $number--);

    }
    return $result;
    // print_r($result);
};

reverseSeq(5);
