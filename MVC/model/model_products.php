<?php

class ModelProducts
{

    private $db;

    private $array_products;

    public function __construct()
    {
        //This construct will have the role to connect with the database
        /*
        *require_once() is a function in PHP used to include 
        a file in a script. It is similar to the require() function, 
        with the difference being that require_once() 
        will only include the file once, even if it is called
        multiple times in the same script.
        */

        require_once("./model/connection_db.php");

        $this->db = $conn;

        $array_products = array(); //convert this variable in array
    }

    public function getProducts()
    {
        $query = $this->db->query("SELECT * FROM PRODUCTOS");

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

            $this->array_products[] = $row; // add every product in the array 
        }

        return $this->array_products;
    }
}
