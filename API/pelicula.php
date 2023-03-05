<?php

include_once 'db.php';

class Pelicula extends DB{
    
    function obtenerPeliculas(){
        $query = $this->connect()->query('SELECT * FROM peliculas');
        return $query;
    }
    function obtenerPeliculaById($id){
        $query = $this->connect()->prepare('SELECT * FROM peliculas WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query;
    }

}

?>