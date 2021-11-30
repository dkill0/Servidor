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
    <div class="container-fluid">
        <div class="row   justify-content-center">
        
        <div class=" mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href="verCarta.php">Ver carta</a></div>
        
        
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
                echo ('<div class=" mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href="nuevoPedido.php">Nuevo pedido</a></div>');
                echo '<div class=" mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href=verPedidos.php>Historial de pedidos</a></div>';
            }
            else {
                echo '<div class="productos mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href=cartaCli.php?codPed='.$codPed.'>Continuar pedido</a></div>';
                echo '<div class="productos mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href=finalPedido.php?codPed='.$codPed.'>Finalizar Pedido</a></div>';
                echo '<div class="productos mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href=verPedidos.php?codPed='.$codPed.'>Historial de pedidos</a></div>';
            }
            
            
        ?>

        </div>
        

    </section>
</div>
</body>
</html>