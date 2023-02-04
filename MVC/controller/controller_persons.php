<?php
require_once("./model/model_persons.php");//Calling from the root = index

$person = new ModelPersons(); // Calling the constructor from the model 


$list_persons = $person->getPersons();


require_once("./view/view_persons.php");//Calling from the index 
//Print the view
