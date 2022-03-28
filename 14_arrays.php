<?php

$fruits=array("apple","banana","watermelon","orange");

print_r($fruits);
//Array ( [0] => apple [1] => banana [2] => watermelon [3] => orange )


//****************************************************** */
//assing index

$fruits_v2=array("f"=>"apple","b"=>"banana","w"=>"watermelon","o"=>"orange");
print_r($fruits_v2);
// Array ( [f] => apple [b] => banana [w] => watermelon [o] => orange )

/******************************************************* */
/*Read */
echo "<br/>";
echo $fruits[2];
echo "<br/>";
echo $fruits_v2["b"];

echo "<br/>";

for ($i=0; $i < 4; $i++) { 
    # code...
    echo "from loop for: ";
    echo $fruits[$i]."<br />";
}

echo "<br/>";
echo "<br/>";

foreach ($fruits_v2 as $key => $value) {
    # code...
    //echo $key."<br />";
    echo $value."<br />";

}

/*
_______using the $key

f
b
w
o

_______- using $value
apple
banana
watermelon
orange
*/