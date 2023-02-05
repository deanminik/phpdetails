<?php
/*
The file should have the same name as the class
*/

function autoLoad($class){
    include "./classes/" . $class . ".php";
}

spl_autoload_register('autoLoad');

Person::show("Hello");
Car::show("Hello");
