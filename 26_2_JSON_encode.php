<?php

$persons = array("Oscar" => 40, "jose" => 20, "Marisa" => 38);

// We want to use the last array as a json data 
// in this case encode
echo json_encode($persons);
/*****
 * {"Oscar":40,"jose":20,"Marisa":38}
 */

 /****
  * 
  so practically this is the result of a backend to consume as a api in another app 
  */