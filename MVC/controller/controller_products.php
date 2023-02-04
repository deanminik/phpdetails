<?php
// require_once("../model/model_products.php"); Normally this would be the route but everything starts from index
require_once("./model/model_products.php");

$product = new ModelProducts();// Calling the constructor

$list_products = $product->getProducts();


// require_once("../view/view_products.php");
require_once("./view/view_products.php");//Calling from the index 
//Print the view



