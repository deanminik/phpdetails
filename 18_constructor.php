<?php

class person
{

    public $name; // property
    private $age; // property only use inside the class methods 
    protected $height; // property only use inside the class or inheritance classes 

    //constructor
    function __construct($newName)
    {
        $this->name = $newName;
    }

    public function addName($newName)
    { // actions or methods 

        $this->name = $newName;
    }

    public function printName()
    {
        echo "Hello I am " . $this->name;
    }

    public function showAge()
    {
        $this->age = 20;
        echo $this->age;
        return $this->age;
    }
}

$objpers = new person("Luis");
$objpers->printName();
