<?php
/**
 * This is a small router method. 
 * To taste it, use the URL and add this http://localhost/phpdetails/projects/notes/?view=create
 * the create.php has to be created before
 */
if (isset($_GET['view'])) {
    $view = $_GET['view'];

    require 'src/views/' . $view . '.php';
}else{
    require 'src/views/home.php';
}


