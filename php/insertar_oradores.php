<?php
include "connect_db.php";

$conexion_db=conecxion();
$nombre=$_POST["nomnbre"];
$apellido=$_POST["apellido"];
$texto=$_POST["texto"];

$insercion="insert into oradores(nombre, apellido, texto) values ('$nombre', '$apellido', '$texto')";

if($conexion_db->query($insercion)) {
    echo "<p>Registro insertado con éxito</p>";
  } else {
    echo "<p>Hubo un error al ejecutar la sentencia de inserción: {$conexion->error}</p>";
  }
  $conexion_db->close();

?>
