<?php
function square_digits($num): int
{
    $numbersList = str_split($num);
    $numbers = array();
    $result = '';
    foreach ($numbersList as $value) {
        $numbers[] = (int) $value * (int) $value;
    }
    foreach ($numbers as $value) {
        $result .= (string) $value;
    }

    return (int) $result;
}

$num = 94;

echo square_digits($num);
