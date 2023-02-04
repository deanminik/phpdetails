<?php

class ModelPersons
{

    private $db;

    private $array_persons;

    public function __construct()
    {

        require_once("./model/connection_db.php");

        $this->db = Database::connect();

        $array_persons = array(); //convert this variable in array
    }

    public function getPersons()
    {
        require("./model/pagination.php");
        $query = $this->db->query("SELECT * FROM testingPhp.user_data LIMIT $start_from, $count_registers_per_page_to_show");

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

            $this->array_persons[] = $row; // add every product in the array 
        }

        return $this->array_persons;
    }
}
