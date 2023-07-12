<?php

include "connect_db.php";

$registros = mysqli_query($mysqli_conexion,
 "SELECT `nombre`, `apellido`, `texto` FROM `oradores`");

 //Imprimiendo en pantalla el select
 while (list($nombre, $apellido, $texto) = mysqli_fetch_array($registros)) {
    echo "<li class=\"list-group-item\"> $nombre- $apellido </li>";
   }
   
?>
