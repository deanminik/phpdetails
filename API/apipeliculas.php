<?php

include_once 'pelicula.php';

class ApiPeliculas
{


    function getAll()
    {
        $pelicula = new Pelicula();
        $peliculas = array();
        $peliculas["items"] = array(); // el objecto items se convierte en arreglo de objetos

        $res = $pelicula->obtenerPeliculas();

        if ($res->rowCount()) { //es mayor que cero?
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {

                $item = array(
                    "id" => $row['id'],
                    "nombre" => $row['nombre'],
                    "imagen" => $row['imagen'],
                );
                array_push($peliculas["items"], $item);
                // array_push para insertar arreglos dentro de un arreglo 
            }

            // echo json_encode($peliculas);
            $this->printJSON($peliculas);
            // convierte en JSON el arreglo de objetos
        } else {
            // echo json_encode(array('mensaje' => 'No hay elementos'));
            // json_encode parsea o convierte en json lo que quiero mostrar 
            $this->error('No hay elementos registrados');
        }
    }
    function error($mensaje)
    {
        echo json_encode(array('mensaje' => $mensaje));
    }

    function printJSON($array)
    {
        echo '<code>' . json_encode($array) . '</code>';
    }

    function getById($id)
    {
        $pelicula = new Pelicula();
        $peliculas = array();
        $peliculas["items"] = array(); // el objecto items se convierte en arreglo de objetos

        $res = $pelicula->obtenerPeliculaById($id);

        if ($res->rowCount()) {
            $row = $res->fetch();
            $item = array(
                "id" => $row['id'],
                "nombre" => $row['nombre'],
                "imagen" => $row['imagen'],
            );
            array_push($peliculas["items"], $item);
            // array_push para insertar arreglos dentro de un arreglo 


            // echo json_encode($peliculas);
            $this->printJSON($peliculas);
            // convierte en JSON el arreglo de objetos
        } else {
            // echo json_encode(array('mensaje' => 'No hay elementos'));
            // json_encode parsea o convierte en json lo que quiero mostrar 
            $this->error('No hay elementos registrados');
        }
    }
}
