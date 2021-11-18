<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("meta2.php");?>
    <title>Mis pedidos</title>
</head>
<body>
    
<?php
    include("headerCli.php");
       
    


    ?>

    <section>
        <div><a href="verCarta.php">Ver carta</a>
        </div>
        
        <?php
            include("../conexion.php");

            $idCli=$_SESSION['idUsuario'];

            $consulta = "SELECT idPedido FROM pedido WHERE cliente='$idCli' AND pagado=false";

            $result=mysqli_query($conn,$consulta);
            
            $NumFilas=mysqli_num_rows($result);
            echo mysqli_error($conn );
            while($row = mysqli_fetch_array($result)){
                $codPed=$row['idPedido'];
            }
            if($NumFilas==0){
                echo ('<div><a href="nuevoPedido.php">Nuevo pedido</a></div>');
            }
            else {
                echo "<div><a href=cartaCli.php?codPed=$codPed>Continuar pedido</a></div>";
                echo "<div><a href=finalPedido.php?codPed=$codPed>Finalizar Pedido</a></div>";
            }
            
        ?>

        
        <div><a href="verPedidos">Historial de pedidos</a></div>

    </section>
</body>
</html>