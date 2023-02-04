<?php
/* 1-The methods from the interface are abstract also 
    they should be public. If you add private or protected methods 
    you will get an error

    2-You can't not add the algorithm to the methods of the interface,
    only when you implement the interface you can add the algorithm
    */
interface Car
{

    public function startEngine();
    public function stopEngine();
}

interface Gas extends Car
{
    public function fillUp($liters);
    public function emptyTank();
}

//Our SUV car needs gas, why not the car interface? 
//Because gas is getting inherited from the car interface
class SUV implements Gas
{


    public function see()
    {
        echo "I can see";
    }
    public function emptyTank()
    {
        echo "I am empty";
    }
    public function fillUp($liters)
    {
        echo "I am full";
    }
    public function startEngine()
    {
        echo "I am starting";
    }
    public function stopEngine()
    {
        echo "I am stopping";
    }
}



$obj = new SUV();
$obj->see();

