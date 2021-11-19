<?php
include("../Seguridad.php");
include("../conexion.php");
if(isset($_GET['canti']) && isset($_GET['idPro'])){
      
   $canti=$_GET['canti'];
   $idPro=$_GET['idPro'];
   $codPed=$_GET['codPed'];
   $consulta= "INSERT INTO lineapedido (idPedido,idProducto,cantidad,fecha) VALUES ('$codPed','$idPro','$canti', NOW())";
   //Ejecutamos la sentencia SQL
   $result = mysqli_query($conn ,$consulta);
   //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
   echo mysqli_error($conn);

   $sitio=$_GET['sitio'];
   if ($sitio === "/Servidor/Restaurante/cliente/bebidas.php?codPed=$codPed") {
       header("LOCATION: bebidas.php?codPed=$codPed");
   }elseif ($sitio === "/Servidor/Restaurante/cliente/postres.php?codPed=$codPed") {
      header("LOCATION: postres.php?codPed=$codPed");
   }elseif ($sitio === "/Servidor/Restaurante/cliente/platos.php?codPed=$codPed") {
      header("LOCATION: platos.php?codPed=$codPed");
   }elseif ($sitio === "/Servidor/Restaurante/cliente/entrantes.php?codPed=$codPed") {
      header("LOCATION: entrantes.php?codPed=$codPed");
   }
}



   ?>
