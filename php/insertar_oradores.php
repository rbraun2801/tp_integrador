<?php
require 'connect_db.php';

$nombre=$_POST["nomnbre"];
$apellido=$_POST["apellido"];
$texto=$_POST["texto"];

$ssql="INSERT INTO oradores (nombre, apellido, texto) VALUES ('$nombre', '$apellido', '$texto');";

if($mysqli_conexion->query($ssql)) {
    echo "<p>Registro insertado con éxito</p>";
  } else {
    echo "<p>Hubo un error al ejecutar la sentencia de inserción: {$conexion->errno}</p>";
  }

  $sql = "SELECT * FROM `oradores`;";

  echo $sql;
  
  $mysqli_conexion->close();
?>
