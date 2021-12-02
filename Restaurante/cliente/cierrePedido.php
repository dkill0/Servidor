<?php
//Estableciendo la conexión
include ("../conexion.php");
//Recogida de datos
$codPed=$_GET['codPed'];
$consulta = "UPDATE pedido SET pagado=1 WHERE idPedido='$codPed'";
//Ejecutamos la sentencia SQL
mysqli_query($conn,$consulta);
//Miramos si ha habido algun error
mysqli_error($conn );
//guardamos la url enviada de la pagina anterior
$sitio=$_GET['sitio'];
//redireccionamos a la pagina pedido
$sitio=$_SERVER['REQUEST_URI'];
header ("LOCATION:pedidosCli.php?sitio=$sitio");
?>