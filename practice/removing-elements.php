<?php
/*/
Take an array and remove every second element from the array. 
Always keep the first element and start removing with the next element.
*/

function removeEveryOther($array)
{
    $result = array();

    foreach ($array as $key => $value) {

        if ($key % 2 === 0) {
            $result += [$key => $value];

        }
    }
    return $result;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
print_r(removeEveryOther($array));

