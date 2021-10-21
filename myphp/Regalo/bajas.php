<?php
//Estableciendo la conexión
include ("conexion.php");
//Recogida de datos
$cod=$_POST['codigo'];
$consulta = "DELETE FROM productos WHERE codigo='$cod'";
//Ejecutamos la sentencia SQL
mysqli_query($conn,$consulta);
//copiamos la imagen que nos ha llegado a su carpeta.
echo mysqli_error($conn );
//redireccionamos a la web listados
header ("LOCATION:listado.php");
?>