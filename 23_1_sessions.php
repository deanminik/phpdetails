<?php
/*******************************
 * useful to keep data on the windows 
 * 
 * for example login 
 */

 session_start();
 
 //variables
 $_SESSION["user"]="developer";
 $_SESSION["status"]="on";

 echo "session started"."<br />";
 
 echo $_SESSION["user"]." status: ".$_SESSION["status"];




?>