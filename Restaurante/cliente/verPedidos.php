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
    <h1 style="color:white;" class="bg-success">En proceso</h1>
    <?php
    if (isset($_GET['codPed'])) {
        $codPed=$_GET['codPed'];
        include("imprimePedido.php");
        


    }else{
        echo"No tienes pedidos pendientes.";
    }
    echo'</div><div class="row justify-content-around">';
    echo '<h1 class="text-center" style="color:white;" >Finalizados</h1>';

    echo '<div class=col-5>';
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
        
        include("imprimePedido.php");
        echo "<a href=imprimirTicket.php?codPed=$codPed>Imprimir ticket en pdf</a>";
        
    }
    echo "</div></div>";
    ?>
<div>
 <p>Boton desplegable</p>
</div>
<a href=pedidosCli.php>Volver</a>
</div>
</body>
</html>