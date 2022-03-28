<?php

$fileName = "filecreated.txt";

$contentFile = "Hello, welcome";

$createFile = fopen($fileName,"w"); // w -> write

fwrite($createFile,$contentFile);

fclose($createFile);
