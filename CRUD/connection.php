<?php
include("./database.php");

$database = new Database("127.0.0.1:3406", "dev", "secret", "testingPhp");
$conn = $database->connect();