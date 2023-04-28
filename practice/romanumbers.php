<?php 

function solution($number)
{
    // Define an associative array that maps Roman numerals to their corresponding integer values
    $romanValues = array(
        "M" => 1000,
        "CM" => 900,
        "D" => 500,
        "CD" => 400,
        "C" => 100,
        "XC" => 90,
        "L" => 50,
        "XL" => 40,
        "X" => 10,
        "IX" => 9,
        "V" => 5,
        "IV" => 4,
        "I" => 1
    );
 
    // Initialize an empty string to store the Roman numeral representation of the input number
    $myResultList = "";
    
    // Loop through each Roman numeral and its corresponding integer value in the $romanValues array
    foreach ($romanValues as $key => $value) {
        // If the input number is greater than or equal to the current integer value,
        // append the corresponding Roman numeral to the $myResultList string and subtract the value from the input number
        while ($number >= $value) {
            $myResultList .= $key;
            $number = $number - $value;
        }
    }

    // Return the final Roman numeral representation of the input number
    return $myResultList; //output MCMXC
}


echo solution(1990);