<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("../cliente/meta2.php");?>
    <title>Pedidos</title>

</head>
<body>
<?php include("headerCam.php");?>
<div class="container-fluid">
    <div class="row justify-content-around">

    
<?php
include("../conexion.php");

$idUs=$_SESSION['idUsuario'];


    $consulta="SELECT idPedido from pedido where camarero='$idUs' and enviado=1 and servido=0 ";
    
    $result15=mysqli_query($conn, $consulta);
     
    $numero = mysqli_num_rows($result15);
 
    if($numero != 0){
        while ( $row = mysqli_fetch_array($result15) ) {
            $codPed=$row['idPedido'];
            echo '<div class="mt-4 bg-secondary col-12 col-md-5">';
        
            include("imprimePedido.php");
            echo "</div>";
           
        }

    }else{
        print'<h1 style="color:white;">No hay pedidos</h1>';
    }

?>
</div>
</div>
</body>
</html>
