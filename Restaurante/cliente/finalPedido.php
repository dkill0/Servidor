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
    $codPed=$_GET['codPed'];
    include("imprimePedido.php");

?>
    <a href="pedidosCli.php">Volver</a>
    <a href="#">Efectivo</a>
    <?php
    $codPed=$_GET['codPed'];
    echo "<a href=cierrePedido.php?codPed=$codPed>Tarjeta</a>";
    ?>
    
</body>
</html>