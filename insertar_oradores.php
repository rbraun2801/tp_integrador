<?php
include "connect_db.php";

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$texto=$_POST['texto'];


$registros = mysqli_query($mysqli_conexion,
"INSERT INTO oradores(nombre, apellido, texto) VALUES('$nombre','$apellido','$texto');");
  if ($registros) {
  echo "LOS REGISTROS FUERON INGRESADOS CORRECTAMENTE";
  header("refresh:5; url=index.html");  
  }
  $mysqli_conexion->close();
?>
