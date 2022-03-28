<?php
/*******************************
 * for examaple when you have a car with product and the user
 * pays the bill,
 * well you need to put empty the variable session again 
 * 
 */

 session_start();
 session_destroy();
echo $_SESSION["user"]." status: ".$_SESSION["status"];