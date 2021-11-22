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
    <div class="container-fluid">
<?php
    include("headerCli.php");
       
    


    ?>

    <section class="row justify-content-around">
        
        <div class="columna col-12 col-sm-5 text-center"><a href="verCarta.php">Ver carta</a></div>
        
        
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
                echo ('<div class="columna col-12 col-sm-5 col-5 text-center"><a href="nuevoPedido.php">Nuevo pedido</a></div>');
                echo '<div class="col-5 text-center"><a href=verPedidos.php>Historial de pedidos</a></div>';
            }
            else {
                echo '<div class="columna col-12 col-sm-5 text-center"><a href=cartaCli.php?codPed=$codPed>Continuar pedido</a></div>';
                echo '<div class="columna col-12 col-sm-5 text-center"><a href=finalPedido.php?codPed=$codPed>Finalizar Pedido</a></div>';
                echo '<div class="columna col-12 col-sm-5 text-center"><a href=verPedidos.php?codPed=$codPed>Historial de pedidos</a></div>';
            }
            
            
        ?>

        </div>
        

    </section>
</div>
</body>
</html>