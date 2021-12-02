<?php
include("../Seguridad.php");
include("../conexion.php");

$codPed=$_GET['codPed'];
$consulta= "UPDATE pedido SET enviado=true";
$result = mysqli_query($conn ,$consulta);
//Se comprueba el error
mysqli_error($conn);

header("LOCATION: pedidosCli.php");

?>