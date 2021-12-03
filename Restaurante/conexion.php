<?php
//creamos la conexion
$conn = mysqli_connect('localHost','root','');
//Imprimos el error si se ha producido
echo mysqli_error($conn);


//Seleccionamos la base de datos
mysqli_select_db($conn,'restaurante');

mysqli_set_charset($conn,"utf8");
//Imprimos el error si se ha producido
echo mysqli_error($conn);
?>