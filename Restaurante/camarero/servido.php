<?php
include("../Seguridad.php");
    include("../conexion.php");



    if (isset($_POST['prod'])&& isset($_POST['codPed'])) {
       $prod=$_POST['prod'];
       
       $codPed=$_POST['codPed'];

       $consulta2 = "SELECT cantidad as cant FROM lineapedido WHERE idProducto='$prod' AND idPedido='$codPed' AND servido=0";
       $result2 = mysqli_query($conn, $consulta2);

       $cant;
       while ($row = mysqli_fetch_array($result2)) {
           $cant=$row['cant'];
       }
       
       
       $consulta ="UPDATE lineapedido SET servido=1 WHERE idPedido='$codPed' AND idProducto='$prod' AND cantidad='$cant' ";
       
        $result = mysqli_query($conn, $consulta);
        
    }

    if(isset($_POST['codigo'])){
        $codigo=$_POST['codigo'];

        $consulta3 = "UPDATE pedido SET servido=1 WHERE idPedido='$codigo'";
        echo $consulta3;
        $result3 = mysqli_query($conn, $consulta3);
        

    }
    header("LOCATION: pedidosCam.php");
?>