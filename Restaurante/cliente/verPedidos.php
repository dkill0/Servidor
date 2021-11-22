<?php
include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("meta2.php");
?>
    <title>Document</title>
</head>
<body>
    <?php
    include("headerCli.php");

    ?>
    <div>
    <h1>En proceso</h1>
    <?php
    if (isset($_GET['codPed'])) {
        $codPed=$_GET['codPed'];
        include("imprimePedido.php");
        


    }else{
        echo"No tienes pedidos pendientes.";
    }
    echo"</div><div>";

    echo "<h1>Finalizados</h1>";
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
    echo "</div>";
    ?>
<div>
 <p>Boton desplegable</p>
</div>
<a href=pedidosCli.php>Volver</a>
</body>
</html>