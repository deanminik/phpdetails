<?php

function printMyName($name,$lastname=""){
    echo "Hello".$name."Lastname:".$lastname."<br />";
}


printMyName("Dean","Fdz");
echo printMyName("Lucas");


//random number function

$random = rand(1,10);
echo  $random;
echo "<br />";


// string method 

$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtoupper($str);
echo $str; 