<?php
// Counting Duplicates

function duplicateCount($text)
{

    $str = str_split(strtolower($text));
    $myList = array_count_values($str);
    $result = 0;
    foreach ($myList as $value) {
        if($value >= 2){
            $result++;
        }
    }
    
    print_r($result);
}

$text = 'Indivisibilities';

duplicateCount($text);
