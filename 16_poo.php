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
        echo "Hello I am " . $this->name;
    }

    public function showAge()
    {
        $this->age = 20;
        echo $this->age;
        return $this->age;
        
    }
}

$objpers = new person(); // new instance
$objpers->addName("Oscar"); // call the method
//echo $objpers->name;
$objpers->printName();
echo "<br/>";
$objpers->showAge();
echo "<br/>";



$objpers2 = new person(); // new instance

$objpers2->addName("Oscar2"); // call the method
echo $objpers2->name;


echo "<br/>";

echo "fffffffffffffffffff";
