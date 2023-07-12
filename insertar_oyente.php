<?php
include "connect_db.php";

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$cantidad=$_POST['cantidad'];
$categoria=$_POST['categoria'];
$monto=0;
if($categoria=="estudiante"){
  $monto=$cantidad*(200-(200*0.80));
}else if($categoria=="trainee"){
  $monto=$cantidad*(200-(200*0.50));
}else if($categoria=="junior"){
  $monto=$cantidad*(200-(200*0.15));
}

$registros = mysqli_query($mysqli_conexion,
"INSERT INTO oyente(nombre, apellido, email, cantidad, categoria, monto) VALUES('$nombre','$apellido','$email','$cantidad','$categoria', '$monto');");
  if ($registros) {
  echo "LOS REGISTROS FUERON INGRESADOS CORRECTAMENTE";
  header("refresh:5; url=index.html");  
  }
  $mysqli_conexion->close();
?>
