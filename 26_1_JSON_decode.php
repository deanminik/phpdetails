<?php
/*
sometimes we get a string, so we need to convert to read  

*/
$jsonContent = '[
    {"name":"Dean","lastname":"fdz"},
    {"name":"Pedro","lastname":"lopez"},
    {"name":"Juan","lastname":"monge"}
]';

//decode -> convert the previous string  
$result = json_decode($jsonContent);
//print_r($result);
//Array ( [0] => stdClass Object ( [name] => Dean [lastname] => fdz ) [1] => stdClass Object ( [name] => Pedro [lastname] => lopez ) [2] => stdClass Object ( [name] => Juan [lastname] => monge ) )

echo "<br />";
foreach ($result as $person){
    echo ($person->name)." ".($person->lastname."<br />");
}
/*
Dean fdz
Pedro lopez
Juan monge

*/