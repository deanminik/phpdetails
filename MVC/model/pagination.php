<?php

$conn = Database::connect();

$count_registers_per_page_to_show = 3;

if (isset($_GET['pag'])) { // execute this after press a number pag 
    if ($_GET['pag'] == 1) {
        //If the value I am sharing in the url (?page) is == to 1 
        //Send me to this page
        header("Location:index.php");
    } else {
        //If not == to 1, then store the new page number 

        $page = $_GET['pag'];
    }
} else {
    $page = 1; // the when we load the content for the first time
}


$start_from = ($page - 1) * $count_registers_per_page_to_show;

$sql = "SELECT * FROM testingPhp.user_data";

$result = $conn->prepare($sql);
$result->execute(array());

$numb_rows_from_db = $result->rowCount();

$pages_total = ceil($numb_rows_from_db / $count_registers_per_page_to_show);
//ceil function is to delete decimal