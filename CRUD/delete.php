<?php

include ("./connection.php");

$id=$_GET["id"];

$conn->query("DELETE FROM user_data WHERE id='$id'");

header("location:index.php");
