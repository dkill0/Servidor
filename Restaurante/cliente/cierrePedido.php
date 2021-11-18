<?php
//Estableciendo la conexión
include ("../conexion.php");
//Recogida de datos
$codPed=$_GET['codPed'];
$consulta = "UPDATE pedido SET pagado=1 WHERE idPedido='$codPed'";
//Ejecutamos la sentencia SQL
mysqli_query($conn,$consulta);
//copiamos la imagen que nos ha llegado a su carpeta.
echo mysqli_error($conn );
//redireccionamos a la web listados
header ("LOCATION:pedidosCli.php");
?>