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
    <?php
include("headerAd.php");
    ?>


<div class="container-fluid">
<?php
echo"<div>";
echo ("<h2>Pedidos en marcha</h2>");
include("../conexion.php");
$consulta2="SELECT idPedido, cliente
FROM pedido
WHERE pagado=0
ORDER BY idPedido DESC";
$result9 = mysqli_query($conn ,$consulta2);
echo mysqli_error($conn);
while ($row9 = mysqli_fetch_array($result9)) {

$codPed=$row9['idPedido'];
$idUs=$row9['cliente'];
include("imprimePedido.php");
echo"</div>";

}




?>
</div>
</body>
</html>