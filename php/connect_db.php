<?php
    $mysqli_conexion = new mysqli('localhost', 'root', '', 'tp_final');
    if ($mysqli_conexion->connect_error) {
      echo "Error de conexión con la base de datos: " . $mysqli_conexion->connect_error;
      exit;
    }

?>