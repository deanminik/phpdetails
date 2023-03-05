<?php
include_once("abrir_conexion.php");

//CONSULTAR
try {
  $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1");
  while ($consulta = mysqli_fetch_array($resultados)) {
    echo $consulta['nombre'] . "<br>";
  }
} catch (\Throwable $th) {
  //throw $th;
  echo $th;
}

