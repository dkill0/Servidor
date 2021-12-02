<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("meta2.php");?>
    <title>Document</title>
</head>
<body>
<?php
    include("headerCli.php");
   
    ?>
    <div class="container-fluid">
<?php
    $codPed=$_GET['codPed'];
    include("imprimePedido.php");

?>
    <a href="pedidosCli.php">Volver</a>
    <a href="#">Efectivo</a>
    <?php
    $codPed=$_GET['codPed'];
    
    echo "<a href=tarjeta.php?codPed=$codPed>Tarjeta</a>";
    
    ?>
    </div>
</body>
</html>