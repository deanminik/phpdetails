<?php

/**
 * we can read the variable loaded in another file php 
 * 
 */

session_start();
if (isset($_SESSION["user"])) {
    echo $_SESSION["user"] . " status: " . $_SESSION["status"];
} else {
    echo "There is not data";
}

//isset: Is there somenthing empty?