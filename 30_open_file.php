<?php

$file="hello.txt";
// r -> to read 
$openedFile = fopen($file,"r");

$content=fread($openedFile,filesize($file));

echo $content;

?>