<?php


class person
{

    public $name; // property
    private $age = 0; // property only use inside the class methods 
    protected $height; // property only use inside the class or inheritance classes 

    public function addName($newName)
    { // actions or methods 

        $this->name = $newName;
    }

    public function printName()
    {
        echo "Hello I am " . $this->name . "<br />";
    }

    public function showAge()
    {
        $this->age = 20;
        // echo $this->age;
        return $this->age;
    }
}

class worker extends person
{

    public $jobPosition;
    public function showEmployee()
    {
        echo "Hello I am " . $this->name . "and this is my role " . $this->jobPosition . " <br />";
    }
}

$objworker = new worker(); // new instance
$objworker->addName("Oscar fdz"); // call the method
$objworker->jobPosition = "Developer";
$objworker->showEmployee();


