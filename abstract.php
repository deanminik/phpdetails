<?php 
/*
Normal class which extends from abstract class, should implement the abstract methods

The abstract methods can't be instantiated as an object, they can only be inherited
but if you call the abstract class directly and use an static method you can use it

public static function mensaje(){
    echo "Hola";
}

Molde::mensaje(); //Hola
*/


abstract class Molde{
    abstract public function ingresarNombre($nombre);
    abstract public function obtenerNombre();
}

class Person extends Molde{
    private $nombre;
    public function mostrar(){
        echo "Hola ".$this->nombre;
    }
    public function ingresarNombre($nombre){
        $this->nombre = $nombre;
    }
    public function obtenerNombre(){
        return $this->nombre;
    }
}
