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
<?php
include("../conexion.php");
if (isset($_GET['w2']) && isset($_GET['w1']) && isset($_GET['w3'])) {
    $producto=$_GET['w2'];
    $pedido=$_GET['w1'];
    $fecha=$_GET['w3'];
    
    $consulta34 = "UPDATE lineapedido SET servido=1 WHERE idPedido='$pedido' AND idProducto='$producto' AND fecha='$fecha' ";
    echo "<h1>$consulta34</h1>";
    $result34 = mysqli_query($conn, $consulta34);

}
$idUs=$_SESSION['idUsuario'];


    $consulta="SELECT idPedido from pedido where camarero='$idUs' and enviado=0";
    
    $result15=mysqli_query($conn, $consulta);
     
    $numero = mysqli_num_rows($result15);
 
    if($numero != 0){
        while ( $row = mysqli_fetch_array($result15) ) {
            $codPed=$row['idPedido'];
            include("imprimePedido.php");
           
        }

    }else{
        print'<h1 style="color:white;">No hay pedidos</h1>';
    }

?>

</div>
</body>
</html>
<script>
    function sirve(producto, pedido, fecha, conta){
        var servidoCompleto = "servido" + conta;
        
        alert(fecha);
        //window.location.href = window.location.href + "?w2=" + producto + "&w1=" + pedido;
        document.getElementById(servidoCompleto).innerHTML = "Ya servido";
    }

</script>