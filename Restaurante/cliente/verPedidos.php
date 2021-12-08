<?php
include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("meta2.php");
?>
    <title>Mis pedidos</title>
</head>
<body>
    <?php
    include("headerCli.php");

    ?>
    <div class="container-fluid">
    <div class="row justify-content-around">
        

       
    <h1 style="color:white;" class="text-center fondoT">En proceso</h1>
    <div class="col-12 col-lg-5 mb-3" style="background-color:#212529;">
    <?php
    if (isset($_GET['codPed'])) {
        $codPed=$_GET['codPed'];
        include("imprimePedido.php");
        


    }else{
        echo"No tienes pedidos pendientes.";
    }
    echo'</div></div><div class="row justify-content-around">';
    echo '<h1 class="text-center fondoT" style="color:white;" >Finalizados</h1>';

    $idusuario=$_SESSION['idUsuario'];
    include("../conexion.php");
    $consulta3="SELECT idPedido
    FROM pedido
    WHERE cliente='$idusuario' AND pagado=1
    ORDER BY idPedido DESC";
    $result3= mysqli_query($conn,$consulta3);
    echo mysqli_error($conn);
    while($row6 = mysqli_fetch_array($result3)){
        $codPed=$row6['idPedido'];
        
        echo '<div style="background-color:#212529;" class="col-12 col-lg-5 g-0 mb-3 card">';
        echo"<div class=card-body>";
        include("imprimePedido.php");
        echo"</div><div class=card-footer>";
        echo '<a class=" d-grid mb-3 btn btn-primary" href=imprimirTicket.php?codPed='.$codPed.'>Imprimir ticket en pdf</a>';
       echo '</div></div>'; 
    }
    echo "</div>";
    ?>
<a class="btn btn-info" href=pedidosCli.php>Volver</a>
</div>
</body>
</html>